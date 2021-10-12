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

/* themes/basic/templates/views/node--view--articles--block-1.html.twig */
class __TwigTemplate_94fcee06dda2ec56dba9427e6ca042f00c4387a4ec52544792f67532b66f05ac extends \Twig\Template
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
        echo "
";
        // line 2
        $context["classes"] = [0 => "node"];
        // line 5
        echo "

<a ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 7), 7, $this->source), "html", null, true);
        echo " href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 7, $this->source), "html", null, true);
        echo "\">

  <div";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 9), 9, $this->source), "html", null, true);
        echo ">

    ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "

    ";
        // line 13
        if (((((($context["title_prefix"] ?? null) || ($context["title_suffix"] ?? null)) || ($context["display_submitted"] ?? null)) || ($context["unpublished"] ?? null)) || (twig_test_empty(($context["page"] ?? null)) && ($context["label"] ?? null)))) {
            // line 14
            echo "        <header>
        ";
            // line 15
            if (( !($context["page"] ?? null) && ($context["label"] ?? null))) {
                // line 16
                echo "            <div>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["date"] ?? null), "value", [], "any", false, false, true, 16), 16, $this->source), "n/j/Y"), "html", null, true);
                echo "</div>
            <h2";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 17), 17, $this->source), "html", null, true);
                echo ">
                ";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 18, $this->source), "html", null, true);
                echo "
            </h2>
        ";
            }
            // line 21
            echo "        </header>
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "

    ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "

  </div>

</a>";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/views/node--view--articles--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  94 => 24,  91 => 23,  87 => 21,  81 => 18,  77 => 17,  72 => 16,  70 => 15,  67 => 14,  65 => 13,  60 => 11,  55 => 9,  48 => 7,  44 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% set classes = [
  'node'
] %}


<a {{ attributes.addClass(classes) }} href=\"{{url}}\">

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

</a>", "themes/basic/templates/views/node--view--articles--block-1.html.twig", "C:\\xampp\\htdocs\\david\\themes\\basic\\templates\\views\\node--view--articles--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 13);
        static $filters = array("escape" => 7, "date" => 16);
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
