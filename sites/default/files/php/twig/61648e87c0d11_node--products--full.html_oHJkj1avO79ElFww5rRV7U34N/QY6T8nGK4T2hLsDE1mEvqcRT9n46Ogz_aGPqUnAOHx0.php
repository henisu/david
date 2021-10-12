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
class __TwigTemplate_45aa8f9701bd09fa0373462ce052491b431aeb66d2d413161f02254b1280dd35 extends \Twig\Template
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
";
        // line 17
        echo "
<article";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ">

  ";
        // line 20
        if (((((($context["title_prefix"] ?? null) || ($context["title_suffix"] ?? null)) || ($context["display_submitted"] ?? null)) || ($context["unpublished"] ?? null)) || (twig_test_empty(($context["page"] ?? null)) && ($context["label"] ?? null)))) {
            // line 21
            echo "    <header>
      ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 22, $this->source), "html", null, true);
            echo "
      ";
            // line 23
            if (( !($context["page"] ?? null) && ($context["label"] ?? null))) {
                // line 24
                echo "        <h2";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 24), 24, $this->source), "html", null, true);
                echo ">
          <a href=\"";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 25, $this->source), "html", null, true);
                echo "\" rel=\"bookmark\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 25, $this->source), "html", null, true);
                echo "</a>
        </h2>
      ";
            }
            // line 28
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 28, $this->source), "html", null, true);
            echo "

      ";
            // line 30
            if (($context["display_submitted"] ?? null)) {
                // line 31
                echo "        <div class=\"submitted\">
          ";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 32, $this->source), "html", null, true);
                echo "
          ";
                // line 33
                echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 34
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 34, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 37
            echo "
      ";
            // line 38
            if ( !twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "published", [], "any", false, false, true, 38)) {
                // line 39
                echo "        <p class=\"node--unpublished\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Unpublished"));
                echo "</p>
      ";
            }
            // line 41
            echo "    </header>
  ";
        }
        // line 43
        echo "
  <div";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        echo ">
    ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 45, $this->source), "links"), "html", null, true);
        echo "
  </div><!-- /.content -->

  ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 48)) {
            // line 49
            echo "    <div class=\"links\">
      ";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "
    </div><!-- /.links -->
  ";
        }
        // line 53
        echo "
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
        return array (  139 => 53,  133 => 50,  130 => 49,  128 => 48,  122 => 45,  118 => 44,  115 => 43,  111 => 41,  105 => 39,  103 => 38,  100 => 37,  93 => 34,  91 => 33,  87 => 32,  84 => 31,  82 => 30,  76 => 28,  68 => 25,  63 => 24,  61 => 23,  57 => 22,  54 => 21,  52 => 20,  47 => 18,  44 => 17,  41 => 6,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Create classes array. The 'node' class is required for contextual edit links. #}
{% set classes = [
  'node',
  'product-page'
] %}

{# BEM inspired class syntax: https://en.bem.info/
   Enable this code if you would like node classes like \"article article--layout-teaser\", where article is the content type and teaser is the view mode.
{% set classes = classes|merge([
  node.bundle|clean_class,
  view_mode ? node.bundle|clean_class ~ '--layout-' ~ view_mode|clean_class
]) %}
{% set title_classes = [
  node.bundle|clean_class ~ '__title'
] %}
#}

<article{{ attributes.addClass(classes) }}>

  {% if title_prefix or title_suffix or display_submitted or unpublished or page is empty and label %}
    <header>
      {{ title_prefix }}
      {% if not page and label %}
        <h2{{ title_attributes.addClass(title_classes) }}>
          <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
        </h2>
      {% endif %}
      {{ title_suffix }}

      {% if display_submitted %}
        <div class=\"submitted\">
          {{ author_picture }}
          {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
          {{ metadata }}
        </div>
      {% endif %}

      {% if not node.published %}
        <p class=\"node--unpublished\">{{ 'Unpublished'|t }}</p>
      {% endif %}
    </header>
  {% endif %}

  <div{{ content_attributes.addClass('content') }}>
    {{ content|without('links') }}
  </div><!-- /.content -->

  {% if content.links %}
    <div class=\"links\">
      {{ content.links }}
    </div><!-- /.links -->
  {% endif %}

</article><!-- /.node -->", "themes/basic/templates/views/node--products--full.html.twig", "C:\\xampp\\htdocs\\david\\themes\\basic\\templates\\views\\node--products--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 20, "trans" => 33);
        static $filters = array("escape" => 18, "t" => 39, "without" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape', 't', 'without'],
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
