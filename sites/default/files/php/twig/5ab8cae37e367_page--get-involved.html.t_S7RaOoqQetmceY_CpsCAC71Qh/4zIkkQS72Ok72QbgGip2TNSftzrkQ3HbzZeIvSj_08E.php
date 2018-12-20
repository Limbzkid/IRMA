<?php

/* themes/basic/templates/page--get-involved.html.twig */
class __TwigTemplate_a3cbb96bd918b2387aeeb8e9caa2186195309bc73fda7de8bc2704bf9aa0eb39 extends Twig_Template
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
        $filters = array("t" => 10, "render" => 38);
        $functions = array("url" => 10);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t', 'render'),
                array('url')
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
      <section class=\"mainWrapper newsP\">
        <div class=\"container\">
            ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
            
            <div id=\"content-area\" class=\"detailContent\">
              ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
              <a class=\"button\" href=\"";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getUrl("<current>")));
        echo "/apply\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Apply")));
        echo "</a>
            </div>
        </div>
          <div id=\"content-header\" class=\"container\">
            ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  
            ";
        // line 16
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 17
            echo "              <h1 class=\"title\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
            ";
        }
        // line 19
        echo "  
            ";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  
            ";
        // line 22
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 23
            echo "              <div class=\"tabs\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "</div>
            ";
        }
        // line 25
        echo "  
            ";
        // line 26
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 27
            echo "              <ul class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</ul>
            ";
        }
        // line 29
        echo "            
            
  
          </div><!-- /#content-header -->
  
          

      </section><!-- /#content -->

      ";
        // line 38
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()))) {
            // line 39
            echo "        <aside id=\"sidebar-first\" class=\"column sidebar first\">
          ";
            // line 40
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
        </aside><!-- /#sidebar-first -->
      ";
        }
        // line 43
        echo "
      ";
        // line 44
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 45
            echo "        <aside id=\"sidebar-second\" class=\"column sidebar second\">
          ";
            // line 46
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
        </aside><!-- /#sidebar-second -->
      ";
        }
        // line 49
        echo "
  </div><!-- /#main -->

  <!-- ______________________ FOOTER _______________________ -->

";
        // line 54
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()))) {
            // line 55
            echo "  <footer><div class=\"container footer-container\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "</div></footer>
";
        }
        // line 57
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/page--get-involved.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 57,  158 => 55,  156 => 54,  149 => 49,  143 => 46,  140 => 45,  138 => 44,  135 => 43,  129 => 40,  126 => 39,  124 => 38,  113 => 29,  107 => 27,  105 => 26,  102 => 25,  96 => 23,  94 => 22,  89 => 20,  86 => 19,  80 => 17,  78 => 16,  73 => 14,  64 => 10,  60 => 9,  54 => 6,  47 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{{ page.header }}
<section class=\"innerbanner\">{{ page.banner }}</section>
  <div id=\"main\">
      <section class=\"mainWrapper newsP\">
        <div class=\"container\">
            {{ page.help }}
            
            <div id=\"content-area\" class=\"detailContent\">
              {{ page.content }}
              <a class=\"button\" href=\"{{ url('<current>') }}/apply\">{{ 'Apply'|t }}</a>
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

      {% if page.sidebar_first|render %}
        <aside id=\"sidebar-first\" class=\"column sidebar first\">
          {{ page.sidebar_first }}
        </aside><!-- /#sidebar-first -->
      {% endif %}

      {% if page.sidebar_second|render %}
        <aside id=\"sidebar-second\" class=\"column sidebar second\">
          {{ page.sidebar_second }}
        </aside><!-- /#sidebar-second -->
      {% endif %}

  </div><!-- /#main -->

  <!-- ______________________ FOOTER _______________________ -->

{% if page.footer|render %}
  <footer><div class=\"container footer-container\">{{ page.footer }}</div></footer>
{% endif %}


";
    }
}
