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

/* themes/basic/templates/views/node--view--products--block-2.html.twig */
class __TwigTemplate_a688602ff8f38f3cec9b705e5d70ece03913f1d138cd6dce9922379428c0f7b4 extends \Twig\Template
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
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_image", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "

    ";
        // line 13
        if (((((($context["title_prefix"] ?? null) || ($context["title_suffix"] ?? null)) || ($context["display_submitted"] ?? null)) || ($context["unpublished"] ?? null)) || (twig_test_empty(($context["page"] ?? null)) && ($context["label"] ?? null)))) {
            // line 14
            echo "        <header>
        ";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 15, $this->source), "html", null, true);
            echo "
        ";
            // line 16
            if (( !($context["page"] ?? null) && ($context["label"] ?? null))) {
                // line 17
                echo "            <h2";
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
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 21, $this->source), "html", null, true);
            echo "
        </header>
    ";
        }
        // line 24
        echo "
    ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_taxonomy", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "

    ";
        // line 27
        if ((twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_discount", [], "any", false, false, true, 27)))) == "1")) {
            // line 28
            echo "      <div class=\"view-item-price-wrapper discount\">
        <span>";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_price", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "</span> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_discounted_price", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo " RSD
      </div>
    ";
        } else {
            // line 32
            echo "      <div class=\"view-item-price-wrapper\">
        ";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_price", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo " RSD
      </div>
    ";
        }
        // line 36
        echo "
  </div><!-- /.content -->

</a><!-- /.node -->";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/views/node--view--products--block-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 36,  118 => 33,  115 => 32,  107 => 29,  104 => 28,  102 => 27,  97 => 25,  94 => 24,  87 => 21,  81 => 18,  76 => 17,  74 => 16,  70 => 15,  67 => 14,  65 => 13,  60 => 11,  55 => 9,  48 => 7,  44 => 5,  42 => 2,  39 => 1,);
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

</a><!-- /.node -->", "themes/basic/templates/views/node--view--products--block-2.html.twig", "C:\\xampp\\htdocs\\david\\themes\\basic\\templates\\views\\node--view--products--block-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 13);
        static $filters = array("escape" => 7, "trim" => 27, "striptags" => 27, "render" => 27);
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
