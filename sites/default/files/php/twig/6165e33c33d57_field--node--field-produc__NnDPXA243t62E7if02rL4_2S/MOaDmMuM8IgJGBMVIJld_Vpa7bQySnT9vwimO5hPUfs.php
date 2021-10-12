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
class __TwigTemplate_312f0eb7e89cee3461f37c738712b8c67d25adb49fb91dcd5c1949815fc84b33 extends \Twig\Template
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
            echo "  <div class=\"product-slider product-slider-";
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
            // line 17
            echo "        <!-- Add navigation -->
        <div class=\"swiper-button-navigation\">
            <div class=\"swiper-button-navigation__container\">
                <div class=\"product-slider-";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 20, $this->source), "html", null, true);
            echo "-swiper-button swiper-button-prev swiper-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 20, $this->source), "html", null, true);
            echo "\"></div>
                <div class=\"product-slider-";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 21, $this->source), "html", null, true);
            echo "-swiper-button swiper-button-next swiper-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 21, $this->source), "html", null, true);
            echo "\"></div>
            </div>
              <div thumbsSlider=\"\" class=\"thumbs-";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 23, $this->source), "html", null, true);
            echo " thumbs\">
                <div class=\"swiper-container thumbs-";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 24, $this->source), "html", null, true);
            echo "\">
                  <div class=\"swiper-wrapper\">
                      ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "                      <div class=\"swiper-slide\">
                          <div>";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</div>
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                  </div>
                </div>
              </div>
        </div>
    </div>
  </div>
  ";
        } else {
            // line 38
            echo "
    ";
            // line 40
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo "        ";
                // line 42
                echo "          <div>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "</div>
        ";
                // line 44
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    ";
            // line 46
            echo "
  ";
        }
    }

    // line 8
    public function block_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        <div class=\"swiper-wrapper\">
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
            echo " ";
            $this->displayBlock('item', $context, $blocks);
            // line 14
            echo " ";
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
        // line 15
        echo "        </div>
        ";
    }

    // line 10
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            <div class=\"swiper-slide\">
                <div>";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
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
        return array (  205 => 12,  202 => 11,  198 => 10,  193 => 15,  179 => 14,  160 => 10,  157 => 9,  153 => 8,  147 => 46,  145 => 45,  139 => 44,  134 => 42,  132 => 41,  127 => 40,  124 => 38,  115 => 31,  106 => 28,  103 => 27,  99 => 26,  94 => 24,  90 => 23,  83 => 21,  77 => 20,  72 => 17,  70 => 8,  64 => 7,  59 => 6,  57 => 5,  54 => 4,  47 => 3,  44 => 2,  42 => 1,);
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
            {% for item in items %} {% block item %}
            <div class=\"swiper-slide\">
                <div>{{- item.content -}}</div>
            </div>
            {% endblock %} {% endfor %}
        </div>
        {% endblock %}
        <!-- Add navigation -->
        <div class=\"swiper-button-navigation\">
            <div class=\"swiper-button-navigation__container\">
                <div class=\"product-slider-{{ id }}-swiper-button swiper-button-prev swiper-{{ id }}\"></div>
                <div class=\"product-slider-{{ id }}-swiper-button swiper-button-next swiper-{{ id }}\"></div>
            </div>
              <div thumbsSlider=\"\" class=\"thumbs-{{ id }} thumbs\">
                <div class=\"swiper-container thumbs-{{ id }}\">
                  <div class=\"swiper-wrapper\">
                      {% for item in items %}
                      <div class=\"swiper-slide\">
                          <div>{{- item.content -}}</div>
                      </div>
                      {% endfor %}
                  </div>
                </div>
              </div>
        </div>
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
        static $tags = array("set" => 1, "block" => 3, "if" => 5, "for" => 26);
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
