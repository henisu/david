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

/* themes/basic/templates/views/node--products--teaser.html.twig */
class __TwigTemplate_4ffc72145ba81fbc9442842185765d21d3d1ea5c72dbc0e663b0332cc9e810f7 extends \Twig\Template
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

<a";
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
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_image", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "

    ";
        // line 12
        if (((((($context["title_prefix"] ?? null) || ($context["title_suffix"] ?? null)) || ($context["display_submitted"] ?? null)) || ($context["unpublished"] ?? null)) || (twig_test_empty(($context["page"] ?? null)) && ($context["label"] ?? null)))) {
            // line 13
            echo "        <header>
        ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 14, $this->source), "html", null, true);
            echo "
        ";
            // line 15
            if (( !($context["page"] ?? null) && ($context["label"] ?? null))) {
                // line 16
                echo "            <h2";
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
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 20, $this->source), "html", null, true);
            echo "
        </header>
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_taxonomy", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "

    ";
        // line 26
        if ((twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_discount", [], "any", false, false, true, 26)))) == "1")) {
            // line 27
            echo "      <div class=\"view-item-price-wrapper discount\">
        <span>";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_price", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</span> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_discounted_price", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo " RSD
      </div>
    ";
        } else {
            // line 31
            echo "      <div class=\"view-item-price-wrapper\">
        ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_price", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo " RSD
      </div>
    ";
        }
        // line 35
        echo "
  </div><!-- /.content -->

</a><!-- /.node -->";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/views/node--products--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 35,  117 => 32,  114 => 31,  106 => 28,  103 => 27,  101 => 26,  96 => 24,  93 => 23,  86 => 20,  80 => 17,  75 => 16,  73 => 15,  69 => 14,  66 => 13,  64 => 12,  59 => 10,  55 => 9,  48 => 7,  44 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% set classes = [
  'node'
] %}


<a{{ attributes.addClass(classes) }} href=\"{{url}}\">

  <div{{ content_attributes.addClass('content') }}>
    {{ content.field_product_image }}

    {% if title_prefix or title_suffix or display_submitted or unpublished or page is empty and label %}
        <header>
        {{ title_prefix }}
        {% if not page and label %}
            <h2{{ title_attributes.addClass(title_classes) }}>
                {{ label }}
            </h2>
        {% endif %}
        {{ title_suffix }}
        </header>
    {% endif %}

    {{ content.field_taxonomy }}

    {% if content.field_discount|render|striptags|trim == \"1\" %}
      <div class=\"view-item-price-wrapper discount\">
        <span>{{ content.field_price }}</span> {{ content.field_discounted_price }} RSD
      </div>
    {% else %}
      <div class=\"view-item-price-wrapper\">
        {{ content.field_price }} RSD
      </div>
    {% endif %}

  </div><!-- /.content -->

</a><!-- /.node -->", "themes/basic/templates/views/node--products--teaser.html.twig", "C:\\xampp\\htdocs\\david\\themes\\basic\\templates\\views\\node--products--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 12);
        static $filters = array("escape" => 7, "trim" => 26, "striptags" => 26, "render" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trim', 'striptags', 'render'],
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
