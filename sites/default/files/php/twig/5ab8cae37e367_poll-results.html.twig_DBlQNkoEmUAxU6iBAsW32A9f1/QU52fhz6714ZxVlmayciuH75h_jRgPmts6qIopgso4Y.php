<?php

/* modules/contrib/poll/templates/poll-results.html.twig */
class __TwigTemplate_939789c87610b1242b9c3eaf0d41690e8da05ed94c452c61076cf1978242ab90 extends Twig_Template
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
        $tags = array("for" => 23, "if" => 27);
        $filters = array("t" => 36);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
                array('t'),
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

        // line 21
        echo "

";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "  <input type=\"hidden\" class=\"pollRes\" data-perc=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "#percentage", array(), "array"), "html", null, true));
            echo "\" data-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "#choice", array(), "array"), "html", null, true));
            echo "\">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "<div class=\"poll\">
  ";
        // line 27
        if ((isset($context["show_question"]) ? $context["show_question"] : null)) {
            // line 28
            echo "    <h3 class=\"poll-question\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["question"]) ? $context["question"] : null), "html", null, true));
            echo "</h3>
  ";
        } else {
            // line 30
            echo "    <h3 class=\"poll-results-title\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["results_title"]) ? $context["results_title"] : null), "html", null, true));
            echo "</h3>
  ";
        }
        // line 32
        echo "  <ul>
    ";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["results"]) ? $context["results"] : null), "html", null, true));
        echo "
  </ul>
  <div class=\"total\">
  <div class=\"totalVotes\">";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Total")));
        echo " <em> ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("votes: ")));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["votes"]) ? $context["votes"] : null), "html", null, true));
        echo "</em></div>
    <div id=\"chartContainer\" style=\"width:200px; height: 200px; overflow:hidden;\"></div>
  </div>
  
  
</div>

";
    }

    public function getTemplateName()
    {
        return "modules/contrib/poll/templates/poll-results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 36,  82 => 33,  79 => 32,  73 => 30,  67 => 28,  65 => 27,  62 => 26,  51 => 24,  47 => 23,  43 => 21,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display the poll results in a block.
 *
 * Variables available:
 * - title: The title of the poll.
 * - results: The results of the poll.
 * - votes: The total results in the poll.
 * - links: Links in the poll.
 * - pid: The pid of the poll
 * - cancel_form: A form to cancel the user's vote, if allowed.
 * - raw_links: The raw array of links.
 * - vote: The choice number of the current user's vote.
 *
 * @see template_preprocess_poll_results()
 *
 * @ingroup themeable
 */
#}


{% for item in results %}
  <input type=\"hidden\" class=\"pollRes\" data-perc=\"{{item['#percentage']}}\" data-label=\"{{ item['#choice'] }}\">
{% endfor %}
<div class=\"poll\">
  {% if show_question %}
    <h3 class=\"poll-question\">{{ question }}</h3>
  {% else %}
    <h3 class=\"poll-results-title\">{{ results_title }}</h3>
  {% endif %}
  <ul>
    {{ results }}
  </ul>
  <div class=\"total\">
  <div class=\"totalVotes\">{{ 'Total' | t}} <em> {{ 'votes: '|t }} {{ votes }}</em></div>
    <div id=\"chartContainer\" style=\"width:200px; height: 200px; overflow:hidden;\"></div>
  </div>
  
  
</div>

";
    }
}
