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

/* themes/basic/templates/menus/menu--footer.html.twig */
class __TwigTemplate_2a45ba70ca862e205aa8fe43ea91fde504596048c995cb8e6e94ad78587e5f21 extends \Twig\Template
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
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 2, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 4
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__logo__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "logo" => $__logo__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 5
            echo "  ";
            $macros["menus"] = $this;
            // line 6
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 7
                echo "    <div class=\"footer-wrapper\">
        <div class=\"footer-socials\">
            <img src=";
                // line 9
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "logo", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo " alt=\"home\"/>
        </div>
        ";
                // line 11
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 12
                    echo "        <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu"], "method", false, false, true, 12), 12, $this->source), "html", null, true);
                    echo ">
        ";
                } else {
                    // line 14
                    echo "        <ul class=\"menu\">
        ";
                }
                // line 16
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 17
                    echo "        ";
                    // line 18
                    $context["classes"] = [0 => "menu-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 20
$context["item"], "is_expanded", [], "any", false, false, true, 20)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 21
$context["item"], "is_collapsed", [], "any", false, false, true, 21)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 22
$context["item"], "in_active_trail", [], "any", false, false, true, 22)) ? ("menu-item--active-trail") : (""))];
                    // line 25
                    echo "        <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 25), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo ">
            ";
                    // line 26
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 26), 26, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 26), 26, $this->source)), "html", null, true);
                    echo "
            ";
                    // line 27
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 27)) {
                        // line 28
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 28), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 28, $context, $this->getSourceContext()));
                        echo "
            ";
                    }
                    // line 30
                    echo "        </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "        </ul>
    </div>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/menus/menu--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 32,  120 => 30,  114 => 28,  112 => 27,  108 => 26,  103 => 25,  101 => 22,  100 => 21,  99 => 20,  98 => 18,  96 => 17,  91 => 16,  87 => 14,  81 => 12,  79 => 11,  74 => 9,  70 => 7,  67 => 6,  64 => 5,  48 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as menus %}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level, logo) %}
  {% import _self as menus %}
  {% if items %}
    <div class=\"footer-wrapper\">
        <div class=\"footer-socials\">
            <img src={{attributes.logo}} alt=\"home\"/>
        </div>
        {% if menu_level == 0 %}
        <ul{{ attributes.addClass('menu') }}>
        {% else %}
        <ul class=\"menu\">
        {% endif %}
        {% for item in items %}
        {%
            set classes = [
            'menu-item',
            item.is_expanded ? 'menu-item--expanded',
            item.is_collapsed ? 'menu-item--collapsed',
            item.in_active_trail ? 'menu-item--active-trail',
            ]
        %}
        <li{{ item.attributes.addClass(classes) }}>
            {{ link(item.title, item.url) }}
            {% if item.below %}
            {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
            {% endif %}
        </li>
        {% endfor %}
        </ul>
    </div>
  {% endif %}
{% endmacro %}
", "themes/basic/templates/menus/menu--footer.html.twig", "C:\\xampp\\htdocs\\david\\themes\\basic\\templates\\menus\\menu--footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "macro" => 4, "if" => 6, "for" => 16, "set" => 18);
        static $filters = array("escape" => 9);
        static $functions = array("link" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
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
