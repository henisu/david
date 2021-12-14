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

/* themes/basic/templates/html.html.twig */
class __TwigTemplate_36b03325290445130c04c75f61165523a18e6e92f035b0523512aedffcc36935 extends \Twig\Template
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
        // line 33
        echo "<!DOCTYPE html>
";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["ie_enabled_versions"] ?? null), "ie8", [], "any", false, false, true, 34)) {
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("basic/ie8"), "html", null, true);
            echo "
";
        }
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["ie_enabled_versions"] ?? null), "ie9", [], "any", false, false, true, 37) || twig_get_attribute($this->env, $this->source, ($context["ie_enabled_versions"] ?? null), "ie8", [], "any", false, false, true, 37))) {
            // line 38
            echo "  <!--[if lt IE 7]>     <html";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["html_attributes"] ?? null), "addClass", [0 => "no-js", 1 => "lt-ie9", 2 => "lt-ie8", 3 => "lt-ie7"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "><![endif]-->
  <!--[if IE 7]>        <html";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["html_attributes"] ?? null), "removeClass", [0 => "lt-ie7"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "><![endif]-->
  <!--[if IE 8]>        <html";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["html_attributes"] ?? null), "removeClass", [0 => "lt-ie8"], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "><![endif]-->
  <!--[if gt IE 8]><!--><html";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["html_attributes"] ?? null), "removeClass", [0 => "lt-ie9"], "method", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "><!--<![endif]-->
";
        } else {
            // line 43
            echo "<html";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 43, $this->source), "html", null, true);
            echo ">
";
        }
        // line 45
        echo "  <head>
    <head-placeholder token=\"";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 46, $this->source), "html", null, true);
        echo "\">
    <title>";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 47, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 48, $this->source), "html", null, true);
        echo "\">
    <js-placeholder token=\"";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 49, $this->source), "html", null, true);
        echo "\">
  </head>
  ";
        // line 51
        $context["classes"] = [];
        // line 52
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, true, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 53
            echo "    ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 53, $this->source), [0 => ("role--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($context["role"], 53, $this->source)))]);
            // line 54
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
  ";
        // line 56
        $context["sidebar_first"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 56), 56, $this->source));
        // line 57
        echo "  ";
        $context["sidebar_second"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 57), 57, $this->source));
        // line 58
        echo "  <body";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => (( !        // line 59
($context["is_front"] ?? null)) ? ("with-subnav") : ("")), 2 => ((        // line 60
($context["sidebar_first"] ?? null)) ? ("sidebar-first") : ("")), 3 => ((        // line 61
($context["sidebar_second"] ?? null)) ? ("sidebar-second") : ("")), 4 => ((((        // line 62
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null)) || (($context["sidebar_second"] ?? null) &&  !($context["sidebar_first"] ?? null)))) ? ("one-sidebar") : ("")), 5 => (((        // line 63
($context["sidebar_first"] ?? null) && ($context["sidebar_second"] ?? null))) ? ("two-sidebars") : ("")), 6 => ((( !        // line 64
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null))) ? ("no-sidebar") : (""))], "method", false, false, true, 58), 58, $this->source), "html", null, true);
        // line 65
        echo ">
    <div id=\"skip\">
      <a href=\"#main-menu\" class=\"visually-hidden focusable skip-link\">
        ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main navigation"));
        echo "
      </a>
    </div>
    ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 71, $this->source), "html", null, true);
        echo "
    ";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 72, $this->source), "html", null, true);
        echo "
    ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 73, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 74, $this->source), "html", null, true);
        echo "\">
    ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["browser_sync"] ?? null), "enabled", [], "any", false, false, true, 75)) {
            // line 76
            echo "      ";
            // line 79
            echo "    ";
        }
        // line 80
        echo "      <script id=\"__bs_script__\">
        document.write(\"<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.5'><\\/script>\".replace(\"HOST\", location.hostname));</script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 80,  159 => 79,  157 => 76,  155 => 75,  151 => 74,  147 => 73,  143 => 72,  139 => 71,  133 => 68,  128 => 65,  126 => 64,  125 => 63,  124 => 62,  123 => 61,  122 => 60,  121 => 59,  119 => 58,  116 => 57,  114 => 56,  111 => 55,  105 => 54,  102 => 53,  97 => 52,  95 => 51,  90 => 49,  86 => 48,  82 => 47,  78 => 46,  75 => 45,  69 => 43,  64 => 41,  60 => 40,  56 => 39,  51 => 38,  49 => 37,  44 => 35,  42 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - css: A list of CSS files for the current page.
 * - head: Markup for the HEAD element (including meta tags, keyword tags, and
 *   so on).
 * - head_title: A modified version of the page title, for use in the TITLE tag.
 * - head_title_array: List of text elements that make up the head_title
 *   variable. May contain or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - styles: Style tags necessary to import all necessary CSS files in the head.
 * - scripts: Script tags necessary to load the JavaScript files and settings
 *   in the head.
 * - db_offline: A flag indicating if the database is offline.
 *
 * @see template_preprocess_html()
 *
 * @ingroup themeable
 */
#}
<!DOCTYPE html>
{% if ie_enabled_versions.ie8 %}
  {{- attach_library('basic/ie8') }}
{% endif %}
{% if ie_enabled_versions.ie9 or ie_enabled_versions.ie8 %}
  <!--[if lt IE 7]>     <html{{ html_attributes.addClass('no-js', 'lt-ie9', 'lt-ie8', 'lt-ie7') }}><![endif]-->
  <!--[if IE 7]>        <html{{ html_attributes.removeClass('lt-ie7') }}><![endif]-->
  <!--[if IE 8]>        <html{{ html_attributes.removeClass('lt-ie8') }}><![endif]-->
  <!--[if gt IE 8]><!--><html{{ html_attributes.removeClass('lt-ie9') }}><!--<![endif]-->
{% else -%}
  <html{{ html_attributes }}>
{% endif %}
  <head>
    <head-placeholder token=\"{{ placeholder_token }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token }}\">
    <js-placeholder token=\"{{ placeholder_token }}\">
  </head>
  {% set classes = [] %}
  {% for role in user.roles %}
    {% set classes = classes|merge(['role--' ~ role|clean_class]) %}
  {% endfor %}

  {% set sidebar_first = page.sidebar_first|render %}
  {% set sidebar_second = page.sidebar_second|render %}
  <body{{ attributes.addClass(classes,
    not is_front ? 'with-subnav',
    sidebar_first ? 'sidebar-first',
    sidebar_second ? 'sidebar-second',
    (sidebar_first and not sidebar_second) or (sidebar_second and not sidebar_first) ? 'one-sidebar',
    (sidebar_first and sidebar_second) ? 'two-sidebars',
    (not sidebar_first and not sidebar_second) ? 'no-sidebar'
  ) }}>
    <div id=\"skip\">
      <a href=\"#main-menu\" class=\"visually-hidden focusable skip-link\">
        {{ 'Skip to main navigation'|t }}
      </a>
    </div>
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
    <js-bottom-placeholder token=\"{{ placeholder_token }}\">
    {% if browser_sync.enabled %}
      {# <script id=\"__bs_script__\">
      document.write(\"<script async src='http://{{ browser_sync.host }}:{{ browser_sync.port }}/browser-sync/browser-sync-client.js'><\\/script>\".replace(\"HOST\", location.hostname));
      </script> #}
    {% endif %}
      <script id=\"__bs_script__\">
        document.write(\"<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.5'><\\/script>\".replace(\"HOST\", location.hostname));</script>
  </body>
</html>
", "themes/basic/templates/html.html.twig", "C:\\xampp\\htdocs\\david\\themes\\basic\\templates\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 34, "set" => 51, "for" => 52);
        static $filters = array("escape" => 35, "safe_join" => 47, "merge" => 53, "clean_class" => 53, "render" => 56, "t" => 68);
        static $functions = array("attach_library" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'safe_join', 'merge', 'clean_class', 'render', 't'],
                ['attach_library']
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
