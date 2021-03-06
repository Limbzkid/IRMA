<?php
namespace Drupal\custom_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Url;
use Drupal\Core\Link;
use Drupal\image\Entity\ImageStyle;

/**
 * Provides a 'Custom' Block
 *
 * @Block(
 *   id = "Featured Alumni",
 *   admin_label = @Translation("Featured Alumni"),
 * )
 */

class CustomFeaturedAlumni extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $temp = array();
    $sql = 'SELECT fb.entity_id, SUBSTR(`field_batch_value`,5,3)
            FROM `node__field_batch` fb
            LEFT JOIN node__field_featured_alumni fa ON fa.entity_id = fb.entity_id
            WHERE fa.field_featured_alumni_value = 1
            ORDER BY CAST(SUBSTR(`field_batch_value`,5,3) AS SIGNED)
            LIMIT 0,10';
    $db = \Drupal::database();
    $rows = $db->query($sql);
    $rows->allowRowCount = TRUE;
    foreach($rows as $row) {
      array_push($temp, $row->entity_id);
    }
    $output = '<ul class="alList">';
    $nodes = entity_load_multiple('node', $temp);
    $count = 1;
    foreach($nodes as $node) {
      if($count < 10) {
        if($node->field_image[0]->target_id) {
          $original_image = $node->field_image->entity->getFileUri();
          $style = ImageStyle::load('featured');  // Load the image style configuration entity.
          $url = $style->buildUrl($original_image);
        } else {
          $url = '';
        }
        $node_url = \Drupal::service('path.alias_manager')->getAliasByPath('/node/'.$node->nid->value);
        $shortdesc = preg_replace('/\s+?(\S+)?$/', '', substr($node->body->value, 0, 170)). '...'; 
        $output .= '<li rel="'.$node->nid->value.'">
                    <span><img src="'.$url.'" height="183" alt=""></span>
                    <div class="information">
                    <h5 class="name"><a class="" href="'.$node_url.'">'.$node->title->value.'</a></h5>
                    <h6>'.$node->field_designation->value.'</h6><p>'.$node->field_company_name->value.'</p>
                    <span><span class="batchNo">Batch: '.$node->field_batch->value.' </span>
                    <a href="'.$node->field_linkedin_url->value.'" target="_blank"><img src="/themes/basic/images/linked-icon.png" alt=""></a></span>
                    <div class="detailSec">
                    <summary> '.$shortdesc.'</summary>
                    </div>
                    </div>
                    </li>';
        $count++;
      }
    }
    
    if($rows->rowCount() > 9) {
      $output .= '</ul><a class="button loadMoreBtn" href="javascript:;" id="featAl" rel="'.$count.'">Load more</a>';
    } else {
      $output .= '</ul>';
    }
    
    return array(
      '#markup' => $this->t($output),
      '#cache' => array(
          'max-age' => 0,
      ),
    );
  }
}