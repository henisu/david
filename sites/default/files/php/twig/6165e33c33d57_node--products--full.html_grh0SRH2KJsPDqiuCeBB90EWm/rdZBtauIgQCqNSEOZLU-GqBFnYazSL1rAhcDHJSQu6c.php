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

/* themes/basic/templates/views/node--products--full.html.twig */
class __TwigTemplate_b9093a21ff6f28a27ee0184ca656f6f81c9749a83c5a3fecfb9b89f6109dcb3a extends \Twig\Template
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
        // line 2
        $context["classes"] = [0 => "node", 1 => "product-page"];
        // line 6
        echo "
<article";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 7), 7, $this->source), "html", null, true);
        echo ">

  <div class=\"product-item\">
    <div class=\"product-item-image\">
      ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_image", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"product-item-desc\">
       <header>
          <h2";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 15), 15, $this->source), "html", null, true);
        echo ">
              ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 16, $this->source), "html", null, true);
        echo "
          </h2>
        </header>
        ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_taxonomy", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
        ";
        // line 20
        if ((twig_trim_filter(strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_discount", [], "any", false, false, true, 20)))) == "1")) {
            // line 21
            echo "          <div class=\"view-item-price-wrapper discount\">
            <span>";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_price", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</span> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_discounted_price", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo " RSD
          </div>
        ";
        } else {
            // line 25
            echo "          <div class=\"view-item-price-wrapper\">
            ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_price", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo " RSD
          </div>
        ";
        }
        // line 29
        echo "    </div>
  </div>

  <div class=\"product-desc\">
    ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "
  </div>

</article><!-- /.node -->";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/views/node--products--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  94 => 29,  88 => 26,  85 => 25,  77 => 22,  74 => 21,  72 => 20,  68 => 19,  62 => 16,  58 => 15,  51 => 11,  44 => 7,  41 => 6,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Create classes array. The 'node' class is required for contextual edit links. #}
{% set classes = [
  'node',
  'product-page'
] %}

<article{{ attributes.addClass(classes) }}>

  <div class=\"product-item\">
    <div class=\"product-item-image\">
      {{ content.field_product_image }}
    </div>
    <div class=\"product-item-desc\">
       <header>
          <h2{{ title_attributes.addClass(title_classes) }}>
              {{ label }}
          </h2>
        </header>
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
    </div>
  </div>

  <div class=\"product-desc\">
    {{ content.body }}
  </div>

</article><!-- /.node -->", "themes/basic/templates/views/node--products--full.html.twig", "C:\\xampp\\htdocs\\david\\themes\\basic\\templates\\views\\node--products--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 20);
        static $filters = array("escape" => 7, "trim" => 20, "striptags" => 20, "render" => 20);
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
