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

/* themes/basic/templates/node.html.twig */
class __TwigTemplate_07c75ecdb27ff9894b0cdb3a0d5e04e91ecdf10a599e06d270f51128a315a7ba extends \Twig\Template
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
        $context["classes"] = [0 => "node"];
        // line 5
        echo "
";
        // line 16
        echo "
<article";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 17), 17, $this->source), "html", null, true);
        echo ">

  ";
        // line 19
        if (((((($context["title_prefix"] ?? null) || ($context["title_suffix"] ?? null)) || ($context["display_submitted"] ?? null)) || ($context["unpublished"] ?? null)) || (twig_test_empty(($context["page"] ?? null)) && ($context["label"] ?? null)))) {
            // line 20
            echo "    <header>
      ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 21, $this->source), "html", null, true);
            echo "
      ";
            // line 22
            if (( !($context["page"] ?? null) && ($context["label"] ?? null))) {
                // line 23
                echo "        <h2";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 23), 23, $this->source), "html", null, true);
                echo ">
          <a href=\"";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 24, $this->source), "html", null, true);
                echo "\" rel=\"bookmark\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 24, $this->source), "html", null, true);
                echo "</a>
        </h2>
      ";
            }
            // line 27
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 27, $this->source), "html", null, true);
            echo "

      ";
            // line 29
            if (($context["display_submitted"] ?? null)) {
                // line 30
                echo "        <div class=\"submitted\">
          ";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 31, $this->source), "html", null, true);
                echo "
          ";
                // line 32
                echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 33
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 33, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 36
            echo "
      ";
            // line 37
            if ( !twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "published", [], "any", false, false, true, 37)) {
                // line 38
                echo "        <p class=\"node--unpublished\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Unpublished"));
                echo "</p>
      ";
            }
            // line 40
            echo "    </header>
  ";
        }
        // line 42
        echo "
  <div";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 43), 43, $this->source), "html", null, true);
        echo ">
    ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 44, $this->source), "links"), "html", null, true);
        echo "
  </div><!-- /.content -->

  ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 47)) {
            // line 48
            echo "    <div class=\"links\">
      ";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "
    </div><!-- /.links -->
  ";
        }
        // line 52
        echo "
</article><!-- /.node -->";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 52,  133 => 49,  130 => 48,  128 => 47,  122 => 44,  118 => 43,  115 => 42,  111 => 40,  105 => 38,  103 => 37,  100 => 36,  93 => 33,  91 => 32,  87 => 31,  84 => 30,  82 => 29,  76 => 27,  68 => 24,  63 => 23,  61 => 22,  57 => 21,  54 => 20,  52 => 19,  47 => 17,  44 => 16,  41 => 5,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Create classes array. The 'node' class is required for contextual edit links. #}
{% set classes = [
  'node'
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

</article><!-- /.node -->", "themes/basic/templates/node.html.twig", "C:\\xampp\\htdocs\\david\\themes\\basic\\templates\\node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 19, "trans" => 32);
        static $filters = array("escape" => 17, "t" => 38, "without" => 44);
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
