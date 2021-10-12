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

/* themes/basic/templates/fields/field--node--field-product-image--products.html.twig */
class __TwigTemplate_e310fd7eb35f5fd35c2c0f037b933fb092484175e6fc1a67185b382e248a5798 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'items' => [$this, 'block_items'],
            'item' => [$this, 'block_item'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["id"] = twig_random($this->env);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
  ";
        // line 5
        if ((twig_length_filter($this->env, ($context["items"] ?? null)) > 1)) {
            // line 6
            echo "    <div class=\"product-slider product-slider-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 6, $this->source), "html", null, true);
            echo "\">
      <div id=\"";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 7, $this->source), "html", null, true);
            echo "\" class=\"swiper-container swiper-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 7, $this->source), "html", null, true);
            echo "\">
        ";
            // line 8
            $this->displayBlock('items', $context, $blocks);
            // line 19
            echo "      </div>
      <!-- Add navigation -->
        <div class=\"swiper-button-navigation\">
            <div class=\"swiper-button-navigation__container\">
                <div class=\"product-slider-";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 23, $this->source), "html", null, true);
            echo "-swiper-button swiper-button-prev swiper-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 23, $this->source), "html", null, true);
            echo "\"></div>
                <div class=\"product-slider-";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 24, $this->source), "html", null, true);
            echo "-swiper-button swiper-button-next swiper-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 24, $this->source), "html", null, true);
            echo "\"></div>
            </div>
        <!-- Add Pagination -->
            <div class=\"product-slider-";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 27, $this->source), "html", null, true);
            echo "-swiper-pagination swiper-pagination swiper-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 27, $this->source), "html", null, true);
            echo "\"></div>
        </div>
    </div>
  ";
        } else {
            // line 31
            echo "
    ";
            // line 33
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 34
                echo "        ";
                // line 35
                echo "          <div>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "</div>
        ";
                // line 37
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    ";
            // line 39
            echo "
  ";
        }
    }

    // line 8
    public function block_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "          <div class=\"swiper-wrapper\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "              ";
            $this->displayBlock('item', $context, $blocks);
            // line 16
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "          </div>
        ";
    }

    // line 11
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                <div class=\"swiper-slide\">
                  <div>";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</div>
                </div>
              ";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/fields/field--node--field-product-image--products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 13,  180 => 12,  176 => 11,  171 => 17,  157 => 16,  154 => 11,  137 => 10,  134 => 9,  130 => 8,  124 => 39,  122 => 38,  116 => 37,  111 => 35,  109 => 34,  104 => 33,  101 => 31,  92 => 27,  84 => 24,  78 => 23,  72 => 19,  70 => 8,  64 => 7,  59 => 6,  57 => 5,  54 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set id = random() %}

{% block content %}

  {% if items|length > 1 %}
    <div class=\"product-slider product-slider-{{ id }}\">
      <div id=\"{{ id }}\" class=\"swiper-container swiper-{{ id }}\">
        {% block items %}
          <div class=\"swiper-wrapper\">
            {% for item in items %}
              {% block item %}
                <div class=\"swiper-slide\">
                  <div>{{- item.content -}}</div>
                </div>
              {% endblock %}
            {% endfor %}
          </div>
        {% endblock %}
      </div>
      <!-- Add navigation -->
        <div class=\"swiper-button-navigation\">
            <div class=\"swiper-button-navigation__container\">
                <div class=\"product-slider-{{ id }}-swiper-button swiper-button-prev swiper-{{ id }}\"></div>
                <div class=\"product-slider-{{ id }}-swiper-button swiper-button-next swiper-{{ id }}\"></div>
            </div>
        <!-- Add Pagination -->
            <div class=\"product-slider-{{ id }}-swiper-pagination swiper-pagination swiper-{{ id }}\"></div>
        </div>
    </div>
  {% else %}

    {# {% block items %} #}
      {% for item in items %}
        {# {% block item %} #}
          <div>{{- item.content -}}</div>
        {# {% endblock %} #}
      {% endfor %}
    {# {% endblock %} #}

  {% endif %}
{% endblock %}
", "themes/basic/templates/fields/field--node--field-product-image--products.html.twig", "C:\\xampp\\htdocs\\david\\themes\\basic\\templates\\fields\\field--node--field-product-image--products.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "block" => 3, "if" => 5, "for" => 33);
        static $filters = array("length" => 5, "escape" => 6);
        static $functions = array("random" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['length', 'escape'],
                ['random']
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
