<?php

/* themes/basic/templates/page.html.twig */
class __TwigTemplate_2311255856ffef6bb8f65f493b4bd54ded50ec874000206abbf9eb8d8fa926e0 extends Twig_Template
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
        $tags = array("if" => 16);
        $filters = array("render" => 29);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('render'),
                array()
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
<section class=\"innerbanner\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
        echo "</section>
<div id=\"main\">
  <section class=\"mainWrapper\">
    <div class=\"container\">
      ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
      <div id=\"content-area\" class=\"detailContent\">
        <h1 class=\"title\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h1>
        ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true));
        echo "
        ";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
        echo "
      </div>
    </div>
    <div id=\"content-header\" class=\"container\">
      ";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
      ";
        // line 16
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 17
            echo "        <h1 class=\"title\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
      ";
        }
        // line 19
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
      ";
        // line 20
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 21
            echo "        <div class=\"tabs\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "</div>
      ";
        }
        // line 23
        echo "      ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 24
            echo "        <ul class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</ul>
      ";
        }
        // line 26
        echo "    </div><!-- /#content-header -->
  </section><!-- /#content -->
</div><!-- /#main -->
";
        // line 29
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()))) {
            // line 30
            echo "  <footer><div class=\"container footer-container\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "</div></footer>
";
        }
        // line 32
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  119 => 30,  117 => 29,  112 => 26,  106 => 24,  103 => 23,  97 => 21,  95 => 20,  90 => 19,  84 => 17,  82 => 16,  78 => 15,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  54 => 6,  47 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{{ page.header }}
<section class=\"innerbanner\">{{ page.banner }}</section>
<div id=\"main\">
  <section class=\"mainWrapper\">
    <div class=\"container\">
      {{ page.help }}
      <div id=\"content-area\" class=\"detailContent\">
        <h1 class=\"title\">{{ title }}</h1>
        {{ message }}
        {{ page.content }}
        {{ page.content_bottom }}
      </div>
    </div>
    <div id=\"content-header\" class=\"container\">
      {{ title_prefix }}
      {% if title %}
        <h1 class=\"title\">{{ title }}</h1>
      {% endif %}
      {{ title_suffix }}
      {% if tabs %}
        <div class=\"tabs\">{{ tabs }}</div>
      {% endif %}
      {% if action_links %}
        <ul class=\"action-links\">{{ action_links }}</ul>
      {% endif %}
    </div><!-- /#content-header -->
  </section><!-- /#content -->
</div><!-- /#main -->
{% if page.footer|render %}
  <footer><div class=\"container footer-container\">{{ page.footer }}</div></footer>
{% endif %}


";
    }
}
