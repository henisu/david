<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/basic/templates/views/node--view--articles.html.twig */
class __TwigTemplate_89abf129ad7423489879c65781909e396af5ca072bad4836ace809afebf83dd5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["classes"] = [0 => "node"];
        // line 4
        echo "

<a";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 6), 6, $this->source), "html", null, true);
        echo " href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 6, $this->source), "html", null, true);
        echo "\">

  <div";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 8), 8, $this->source), "html", null, true);
        echo ">

    ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "

    ";
        // line 12
        if (((((($context["title_prefix"] ?? null) || ($context["title_suffix"] ?? null)) || ($context["display_submitted"] ?? null)) || ($context["unpublished"] ?? null)) || (twig_test_empty(($context["page"] ?? null)) && ($context["label"] ?? null)))) {
            // line 13
            echo "        <header>
        ";
            // line 14
            if (( !($context["page"] ?? null) && ($context["label"] ?? null))) {
                // line 15
                echo "            <div>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["date"] ?? null), "value", [], "any", false, false, true, 15), 15, $this->source), "n/j/Y"), "html", null, true);
                echo "</div>
            <h2";
                // line 16
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 16), 16, $this->source), "html", null, true);
                echo ">
                ";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 17, $this->source), "html", null, true);
                echo "
            </h2>
        ";
            }
            // line 20
            echo "        </header>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "

    ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "

  </div>

</a>";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/views/node--view--articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  91 => 23,  88 => 22,  84 => 20,  78 => 17,  74 => 16,  69 => 15,  67 => 14,  64 => 13,  62 => 12,  57 => 10,  52 => 8,  45 => 6,  41 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set classes = [
  'node'
] %}


<a{{ attributes.addClass(classes) }} href=\"{{url}}\">

  <div{{ content_attributes.addClass('content') }}>

    {{ content.field_image }}

    {% if title_prefix or title_suffix or display_submitted or unpublished or page is empty and label %}
        <header>
        {% if not page and label %}
            <div>{{ date.value|date('n/j/Y') }}</div>
            <h2{{ title_attributes.addClass(title_classes) }}>
                {{ label }}
            </h2>
        {% endif %}
        </header>
    {% endif %}

    {{ content.body }}

    {{ content.links }}

  </div>

</a>", "themes/basic/templates/views/node--view--articles.html.twig", "C:\\xampp\\htdocs\\david\\themes\\basic\\templates\\views\\node--view--articles.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 12);
        static $filters = array("escape" => 6, "date" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
