<?php

/* themes/basic/templates/page--alumni-news-list.html.twig */
class __TwigTemplate_eec3cc0ed59e14f3be013a4edf1d18ee4bad52d6e0d073fa82bd2f68d5f05d4f extends Twig_Template
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
        $tags = array("if" => 9);
        $filters = array("render" => 53);
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
<section class=\"innerbanner\"> ";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
        echo " </section>

<div id=\"main\">
  <section class=\"containt\">
    <div class=\"container\">
      ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
    </div>
    ";
        // line 9
        if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
            // line 10
            echo "      <div id=\"content-header\" class=\"container\">
        ";
            // line 11
            if ((isset($context["title"]) ? $context["title"] : null)) {
                echo "<h1 class=\"title\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "</h1>";
            }
            // line 12
            echo "        ";
            if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
                echo "<div class=\"tabs\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
                echo "</div>";
            }
            // line 13
            echo "        ";
            if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
                echo "<ul class=\"action-links\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
                echo "</ul>";
            }
            echo "    
        <div class=\"detailContent\">";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "</div>
      </div>
      <div class=\"naws_listing\">
        <div class=\"container\">
          <div class=\"searchLeft\">
            <input type=\"text\" onBlur=\"clearText(this)\" onFocus=\"clearText(this)\" id=\"newSrch\" value=\"Search within news\">
            <a href=\"javascript:;\" class=\"searchBtn alumniNewSrch\"></a>
          </div>
          <div class=\"shortBy customSelect\">
            <p>Sort by: </p>
            <div class=\"dropdownWrap\">
              <a class=\"shortDropLink\" href=\"javascript:;\"></a>
              <select id=\"newSort\">
                <option value=\"0\">Recent</option>
                <option value =\"1\">Oldest</option>
              </select>
            </div>
          </div>
          <i class=\"clrBoth\"></i>
        </div>
      </div>
      <div class=\"managementLest loadMoreFunc\">
        <div class=\"container\">
          <ul class=\"alList\">
            ";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
            <a class=\"button loadMoreNews\" href=\"javascript:;\" rel=\"10\">Load more</a>
          </ul>
        </div>
      </div>
    ";
        } else {
            // line 44
            echo "      <div class=\"detailContent trigger\">
        <div class=\"container\">
          <h2>You need to log in to view this page</h2>
        </div>
      </div>
    ";
        }
        // line 50
        echo "      
  </section>

  ";
        // line 53
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()))) {
            // line 54
            echo "    <aside id=\"sidebar-first\" class=\"column sidebar first\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "</aside>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 58
            echo "    <aside id=\"sidebar-second\" class=\"column sidebar second\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "</aside>
  ";
        }
        // line 60
        echo "
</div>

  <!-- ______________________ FOOTER _______________________ -->

";
        // line 65
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()))) {
            // line 66
            echo "  <footer><div class=\"container footer-container\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "</div></footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/page--alumni-news-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 66,  162 => 65,  155 => 60,  149 => 58,  147 => 57,  144 => 56,  138 => 54,  136 => 53,  131 => 50,  123 => 44,  114 => 38,  87 => 14,  78 => 13,  71 => 12,  65 => 11,  62 => 10,  60 => 9,  55 => 7,  47 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{{ page.header }}
<section class=\"innerbanner\"> {{ page.banner }} </section>

<div id=\"main\">
  <section class=\"containt\">
    <div class=\"container\">
      {{ page.help }}
    </div>
    {% if logged_in %}
      <div id=\"content-header\" class=\"container\">
        {% if title %}<h1 class=\"title\">{{ title }}</h1>{% endif %}
        {% if tabs %}<div class=\"tabs\">{{ tabs }}</div>{% endif %}
        {% if action_links %}<ul class=\"action-links\">{{ action_links }}</ul>{% endif %}    
        <div class=\"detailContent\">{{ page.content }}</div>
      </div>
      <div class=\"naws_listing\">
        <div class=\"container\">
          <div class=\"searchLeft\">
            <input type=\"text\" onBlur=\"clearText(this)\" onFocus=\"clearText(this)\" id=\"newSrch\" value=\"Search within news\">
            <a href=\"javascript:;\" class=\"searchBtn alumniNewSrch\"></a>
          </div>
          <div class=\"shortBy customSelect\">
            <p>Sort by: </p>
            <div class=\"dropdownWrap\">
              <a class=\"shortDropLink\" href=\"javascript:;\"></a>
              <select id=\"newSort\">
                <option value=\"0\">Recent</option>
                <option value =\"1\">Oldest</option>
              </select>
            </div>
          </div>
          <i class=\"clrBoth\"></i>
        </div>
      </div>
      <div class=\"managementLest loadMoreFunc\">
        <div class=\"container\">
          <ul class=\"alList\">
            {{page.content_bottom}}
            <a class=\"button loadMoreNews\" href=\"javascript:;\" rel=\"10\">Load more</a>
          </ul>
        </div>
      </div>
    {% else %}
      <div class=\"detailContent trigger\">
        <div class=\"container\">
          <h2>You need to log in to view this page</h2>
        </div>
      </div>
    {% endif %}
      
  </section>

  {% if page.sidebar_first|render %}
    <aside id=\"sidebar-first\" class=\"column sidebar first\">{{ page.sidebar_first }}</aside>
  {% endif %}

  {% if page.sidebar_second|render %}
    <aside id=\"sidebar-second\" class=\"column sidebar second\">{{ page.sidebar_second }}</aside>
  {% endif %}

</div>

  <!-- ______________________ FOOTER _______________________ -->

{% if page.footer|render %}
  <footer><div class=\"container footer-container\">{{ page.footer }}</div></footer>
{% endif %}";
    }
}
