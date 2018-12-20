<?php

/* themes/basic/templates/page--about.html.twig */
class __TwigTemplate_19ceb398fe768d0432f4cf142aca6c444fc29b0998fa514739a072abc35fccb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 12);
        $filters = array("raw" => 18, "render" => 51);
        $functions = array("file_url" => 40);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('raw', 'render'),
                array('file_url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
<section class=\"innerbanner\">
  ";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
        echo "
</section>

<div id=\"main\">
  <section class=\"containt\">
    <div class=\"container\">
      ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
    </div>
    <div id=\"content-header\" class=\"container\">
      ";
        // line 12
        if ((isset($context["title"]) ? $context["title"] : null)) {
            echo "<h1 class=\"title\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>";
        }
        // line 13
        echo "      
      ";
        // line 14
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            echo "<div class=\"tabs\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "</div>";
        }
        // line 15
        echo "      ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            echo "<ul class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</ul>";
        }
        // line 16
        echo "            
      <div class=\"detailContent\">
        ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "body", array()), "value", array())));
        echo "
      </div>
      <div class=\"visionMission\">
        ";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_vision", array()), "value", array())));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_mission", array()), "value", array())));
        echo "
      </div>
    </div>
  </section>
  <section class=\"executiveDetails\">
    <div class=\"container\">
      ";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_executive_comittee", array()), "value", array())));
        echo "
      ";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_chapter_representatives", array()), "value", array())));
        echo "
      ";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_batch_representatives", array()), "value", array())));
        echo "
    </div>
  </section>
  <section>
    <div class=\"container\">
      <div class=\"doenloadSec\">
        <h4>Bye-Laws & <strong>Constitution</strong></h4>
        <div class=\"downloadPDF\">
          <p>Download the PDF versions from the below links:</p>
          <ul>
            <li><a href=\"";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_upload_bylaws", array()), "entity", array()), "fileuri", array()))), "html", null, true));
        echo "\" target=\"_blank\">IRMA AA Byelaws</a></li>
            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_upload_constitution", array()), "entity", array()), "fileuri", array()))), "html", null, true));
        echo "\" target=\"_blank\">Constitution</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</div><!-- /#main -->

  <!-- ______________________ FOOTER _______________________ -->

";
        // line 51
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()))) {
            // line 52
            echo "  <footer><div class=\"container footer-container\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "</div></footer>
";
        }
        // line 54
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/page--about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 54,  148 => 52,  146 => 51,  133 => 41,  129 => 40,  116 => 30,  112 => 29,  108 => 28,  99 => 22,  95 => 21,  89 => 18,  85 => 16,  78 => 15,  72 => 14,  69 => 13,  63 => 12,  57 => 9,  48 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "{{ page.header }}
<section class=\"innerbanner\">
  {{ page.banner }}
</section>

<div id=\"main\">
  <section class=\"containt\">
    <div class=\"container\">
      {{ page.help }}
    </div>
    <div id=\"content-header\" class=\"container\">
      {% if title %}<h1 class=\"title\">{{ title }}</h1>{% endif %}
      
      {% if tabs %}<div class=\"tabs\">{{ tabs }}</div>{% endif %}
      {% if action_links %}<ul class=\"action-links\">{{ action_links }}</ul>{% endif %}
            
      <div class=\"detailContent\">
        {{ node.body.value|raw }}
      </div>
      <div class=\"visionMission\">
        {{ node.field_vision.value|raw }}
        {{ node.field_mission.value|raw }}
      </div>
    </div>
  </section>
  <section class=\"executiveDetails\">
    <div class=\"container\">
      {{ node.field_executive_comittee.value|raw }}
      {{ node.field_chapter_representatives.value|raw }}
      {{ node.field_batch_representatives.value|raw }}
    </div>
  </section>
  <section>
    <div class=\"container\">
      <div class=\"doenloadSec\">
        <h4>Bye-Laws & <strong>Constitution</strong></h4>
        <div class=\"downloadPDF\">
          <p>Download the PDF versions from the below links:</p>
          <ul>
            <li><a href=\"{{ file_url(node.field_upload_bylaws.entity.fileuri) }}\" target=\"_blank\">IRMA AA Byelaws</a></li>
            <li><a href=\"{{ file_url(node.field_upload_constitution.entity.fileuri) }}\" target=\"_blank\">Constitution</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</div><!-- /#main -->

  <!-- ______________________ FOOTER _______________________ -->

{% if page.footer|render %}
  <footer><div class=\"container footer-container\">{{ page.footer }}</div></footer>
{% endif %}


";
    }
}
