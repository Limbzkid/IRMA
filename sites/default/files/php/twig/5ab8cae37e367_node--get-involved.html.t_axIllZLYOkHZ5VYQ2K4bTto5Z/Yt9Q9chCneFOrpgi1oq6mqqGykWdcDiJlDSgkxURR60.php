<?php

/* themes/basic/templates/node--get-involved.html.twig */
class __TwigTemplate_fe754531df7eb23a84fe7232ee1617b52ffa9d4de2fd3123f175a789ae5be6cd extends Twig_Template
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
        $tags = array("set" => 2);
        $filters = array("raw" => 12);
        $functions = array("file_url" => 8);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
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

        // line 2
        $context["classes"] = array(0 => "node");
        // line 5
        echo "
<div class=\"container newsP\">
  <div class=\"right-col\">
    <img src=\"";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_image", array()), "entity", array()), "fileuri", array()))), "html", null, true));
        echo "\">
  </div>
  <div class=\"left-col\">
    <h3>";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "title", array()), "value", array()), "html", null, true));
        echo "</h3>
    ";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "body", array()), "value", array())));
        echo "
    <div class=\"btnsec\">
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/node--get-involved.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  56 => 11,  50 => 8,  45 => 5,  43 => 2,);
    }

    public function getSource()
    {
        return "{# Create classes array. The 'node' class is required for contextual edit links. #}
{% set classes = [
  'node'
] %}

<div class=\"container newsP\">
  <div class=\"right-col\">
    <img src=\"{{file_url(node.field_image.entity.fileuri) }}\">
  </div>
  <div class=\"left-col\">
    <h3>{{ node.title.value }}</h3>
    {{ node.body.value|raw }}
    <div class=\"btnsec\">
    </div>
  </div>
</div>

";
    }
}
