<?php

/* themes/basic/templates/page--alumni-news.html.twig */
class __TwigTemplate_690afe9e6a7fa5fce6daf47f19a90285bdb00419fd76ddfa16996b8d7d3825a5 extends Twig_Template
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
        $tags = array("if" => 8);
        $filters = array("render" => 36);
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
      <section id=\"job-details\" class=\"mainWrapper newsP\">
        <div class=\"container\">
            ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
        </div>
        ";
        // line 8
        if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
            // line 9
            echo "            <div id=\"content-header\" class=\"container\">
                ";
            // line 10
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 11
                echo "                  <h1 class=\"title\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "</h1>
                ";
            }
            // line 13
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
                ";
            // line 14
            if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
                // line 15
                echo "                  <div class=\"tabs\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
                echo "</div>
                ";
            }
            // line 17
            echo "                ";
            if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
                // line 18
                echo "                  <ul class=\"action-links\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
                echo "</ul>
                ";
            }
            // line 20
            echo "                <div id=\"content-area\">
                  ";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
                </div>
            </div><!-- /#content-header -->
        ";
        } else {
            // line 25
            echo "            <div class=\"detailContent trigger\">
        <div class=\"managementLest newsletter_list\">
          <h2>You need to log in to view this page</h2>
        </div>
      </div>
        ";
        }
        // line 31
        echo "      </section><!-- /#content -->
  </div><!-- /#main -->

  <!-- ______________________ FOOTER _______________________ -->

";
        // line 36
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()))) {
            // line 37
            echo "  <footer><div class=\"container footer-container\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "</div></footer>
";
        }
        // line 39
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/page--alumni-news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 39,  121 => 37,  119 => 36,  112 => 31,  104 => 25,  97 => 21,  94 => 20,  88 => 18,  85 => 17,  79 => 15,  77 => 14,  72 => 13,  66 => 11,  64 => 10,  61 => 9,  59 => 8,  54 => 6,  47 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{{ page.header }}
<section class=\"innerbanner\">{{ page.banner }}</section>
  <div id=\"main\">
      <section id=\"job-details\" class=\"mainWrapper newsP\">
        <div class=\"container\">
            {{ page.help }}
        </div>
        {% if logged_in %}
            <div id=\"content-header\" class=\"container\">
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
                <div id=\"content-area\">
                  {{ page.content }}
                </div>
            </div><!-- /#content-header -->
        {% else %}
            <div class=\"detailContent trigger\">
        <div class=\"managementLest newsletter_list\">
          <h2>You need to log in to view this page</h2>
        </div>
      </div>
        {% endif %}
      </section><!-- /#content -->
  </div><!-- /#main -->

  <!-- ______________________ FOOTER _______________________ -->

{% if page.footer|render %}
  <footer><div class=\"container footer-container\">{{ page.footer }}</div></footer>
{% endif %}


";
    }
}
