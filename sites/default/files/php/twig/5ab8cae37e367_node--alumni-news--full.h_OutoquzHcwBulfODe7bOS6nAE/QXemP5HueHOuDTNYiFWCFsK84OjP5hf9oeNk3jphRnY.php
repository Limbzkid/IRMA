<?php

/* themes/basic/templates/node--alumni-news--full.html.twig */
class __TwigTemplate_55ed137a28fe54622d17a91c49422c94782a69c5185aa575ee6e1b81235e2a91 extends Twig_Template
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
        $tags = array();
        $filters = array("raw" => 23);
        $functions = array("file_url" => 19);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('raw'),
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

        // line 17
        echo "<div class=\"container\">
  <div class=\"right-col\">
    <img src=\"";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_image", array()), "entity", array()), "fileuri", array()))), "html", null, true));
        echo "\">
  </div>
  <div class=\"left-col\">
    <h3>";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "title", array()), "value", array()), "html", null, true));
        echo "</h3>
    ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "body", array()), "value", array())));
        echo "
    <div class=\"btnsec\">
      ";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
        echo "
    </div>
  </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/node--alumni-news--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  57 => 23,  53 => 22,  47 => 19,  43 => 17,);
    }

    public function getSource()
    {
        return "{# Create classes array. The 'node' class is required for contextual edit links. #}
{#
{% set classes = [
  'node'
] %}
#}
{# BEM inspired class syntax: https://en.bem.info/
   Enable this code if you would like node classes like \"article article--layout-teaser\", where article is the content type and teaser is the view mode.
{% set classes = classes|merge([
  node.bundle|clean_class,
  view_mode ? node.bundle|clean_class ~ '--layout-' ~ view_mode|clean_class
]) %}
{% set title_classes = [
  node.bundle|clean_class ~ '__title'
] %}
#}
<div class=\"container\">
  <div class=\"right-col\">
    <img src=\"{{file_url(node.field_image.entity.fileuri) }}\">
  </div>
  <div class=\"left-col\">
    <h3>{{ node.title.value }}</h3>
    {{ node.body.value|raw }}
    <div class=\"btnsec\">
      {{pager}}
    </div>
  </div>
</div>


{#
<article{{ attributes.addClass(classes) }}>

  {% if title_prefix or title_suffix or display_submitted or unpublished or page is empty and label %}
    <header>
      {{ title_prefix }}
      {% if not page and label %}
        <h2{{ title_attributes.addClass(title_classes) }}>
          <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
        </h2>
      {% endif %}
      {{ title_suffix }}

      {% if display_submitted %}
        <div class=\"submitted\">
          {{ author_picture }}
          {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
          {{ metadata }}
        </div>
      {% endif %}

      {% if not node.published %}
        <p class=\"node--unpublished\">{{ 'Unpublished'|t }}</p>
      {% endif %}
    </header>
  {% endif %}

  <div{{ content_attributes.addClass('content') }}>
    {{ content|without('links') }}
  </div><!-- /.content -->

  {% if content.links %}
    <div class=\"links\">
      {{ content.links }}
    </div><!-- /.links -->
  {% endif %}

</article><!-- /.node -->
#}";
    }
}
