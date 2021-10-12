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

/* themes/basic/templates/page.html.twig */
class __TwigTemplate_0529b7da88e9ba82eecd994ab3abdc206a42bae85959be83685541121d8e5676 extends \Twig\Template
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
        $context["main_menu"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 1), 1, $this->source));
        // line 2
        $context["secondary_menu"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 2), 2, $this->source));
        // line 3
        echo "<div class=\"layout\">
  <div";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "layout-container", 1 => (((        // line 6
($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) ? ("with-navigation") : ("")), 2 => ((        // line 7
($context["secondary_menu"] ?? null)) ? ("with-subnav") : (""))], "method", false, false, true, 4), 4, $this->source), "html", null, true);
        // line 8
        echo ">

    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 10)) {
            // line 11
            echo "      <div class=\"pre_header_wrapper\">
        ";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "
        ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 13)) {
                // line 14
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "
        ";
            }
            // line 16
            echo "      </div>
    ";
        }
        // line 18
        echo "
    <!-- ______________________ HEADER _______________________ -->

    ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 21)) {
            // line 22
            echo "      <header id=\"header\">
        <div class=\"container\">
          <div id=\"header-region\">
            ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </header><!-- /#header -->
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        if ((($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) {
            // line 32
            echo "      <nav id=\"navigation\" class=\"menu";
            if (($context["main_menu"] ?? null)) {
                echo " with-primary";
            }
            if (($context["secondary_menu"] ?? null)) {
                echo " with-secondary";
            }
            echo "\">
        <div class=\"container\">
          ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu"] ?? null), 34, $this->source), "html", null, true);
            echo "
          ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_menu"] ?? null), 35, $this->source), "html", null, true);
            echo "
        </div>
      </nav><!-- /#navigation -->
    ";
        }
        // line 39
        echo "
    <!-- ______________________ MAIN _______________________ -->

    <div id=\"main\">
      <div class=\"container\">
        <div id=\"content-wrapper\">
          <section id=\"content\">

            <div id=\"content-header\">

              ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "

              ";
        // line 51
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 51))) {
            // line 52
            echo "                <div id=\"highlighted\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "</div>
              ";
        }
        // line 54
        echo "
              ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 55, $this->source), "html", null, true);
        echo "

              ";
        // line 57
        if (($context["title"] ?? null)) {
            // line 58
            echo "                <h1 class=\"title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 58, $this->source), "html", null, true);
            echo "</h1>
              ";
        }
        // line 60
        echo "
              ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 61, $this->source), "html", null, true);
        echo "
              ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "

              ";
        // line 64
        if (($context["tabs"] ?? null)) {
            // line 65
            echo "                <div class=\"tabs\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 65, $this->source), "html", null, true);
            echo "</div>
              ";
        }
        // line 67
        echo "
              ";
        // line 68
        if (($context["action_links"] ?? null)) {
            // line 69
            echo "                <ul class=\"action-links\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 69, $this->source), "html", null, true);
            echo "</ul>
              ";
        }
        // line 71
        echo "
            </div><!-- /#content-header -->

            <div id=\"content-area\">
              ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "
            </div>

          </section><!-- /#content -->

          ";
        // line 80
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 80))) {
            // line 81
            echo "            <aside id=\"sidebar-first\" class=\"column sidebar first\">
              ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
            </aside><!-- /#sidebar-first -->
          ";
        }
        // line 85
        echo "
          ";
        // line 86
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 86))) {
            // line 87
            echo "            <aside id=\"sidebar-second\" class=\"column sidebar second\">
              ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
            </aside><!-- /#sidebar-second -->
          ";
        }
        // line 91
        echo "
        </div><!-- /#content-wrapper -->
      </div><!-- /.container -->
    </div><!-- /#main -->

    <!-- ______________________ FOOTER _______________________ -->

    ";
        // line 98
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 98))) {
            // line 99
            echo "      <footer id=\"footer\">
        <div class=\"container\">
          <div id=\"footer-region\">
            ";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </footer><!-- /#footer -->
    ";
        }
        // line 107
        echo "  </div><!-- /.layout-container -->
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 107,  249 => 102,  244 => 99,  242 => 98,  233 => 91,  227 => 88,  224 => 87,  222 => 86,  219 => 85,  213 => 82,  210 => 81,  208 => 80,  200 => 75,  194 => 71,  188 => 69,  186 => 68,  183 => 67,  177 => 65,  175 => 64,  170 => 62,  166 => 61,  163 => 60,  157 => 58,  155 => 57,  150 => 55,  147 => 54,  141 => 52,  139 => 51,  134 => 49,  122 => 39,  115 => 35,  111 => 34,  100 => 32,  98 => 31,  95 => 30,  87 => 25,  82 => 22,  80 => 21,  75 => 18,  71 => 16,  65 => 14,  63 => 13,  59 => 12,  56 => 11,  54 => 10,  50 => 8,  48 => 7,  47 => 6,  46 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set main_menu = page.primary_menu|render %}
{% set secondary_menu = page.secondary_menu|render %}
<div class=\"layout\">
  <div{{ attributes.addClass(
    'layout-container',
    main_menu or secondary_menu ? 'with-navigation',
    secondary_menu ? 'with-subnav'
  ) }}>

    {% if page.pre_header %}
      <div class=\"pre_header_wrapper\">
        {{ page.pre_header }}
        {% if page.search %}
          {{ page.search }}
        {% endif %}
      </div>
    {% endif %}

    <!-- ______________________ HEADER _______________________ -->

    {% if page.header %}
      <header id=\"header\">
        <div class=\"container\">
          <div id=\"header-region\">
            {{ page.header }}
          </div>
        </div>
      </header><!-- /#header -->
    {% endif %}

    {% if main_menu or secondary_menu %}
      <nav id=\"navigation\" class=\"menu{% if main_menu %} with-primary{% endif %}{% if secondary_menu %} with-secondary{% endif %}\">
        <div class=\"container\">
          {{ main_menu }}
          {{ secondary_menu }}
        </div>
      </nav><!-- /#navigation -->
    {% endif %}

    <!-- ______________________ MAIN _______________________ -->

    <div id=\"main\">
      <div class=\"container\">
        <div id=\"content-wrapper\">
          <section id=\"content\">

            <div id=\"content-header\">

              {{ page.breadcrumb }}

              {% if page.highlighted|render %}
                <div id=\"highlighted\">{{ page.highlighted }}</div>
              {% endif %}

              {{ title_prefix }}

              {% if title %}
                <h1 class=\"title\">{{ title }}</h1>
              {% endif %}

              {{ title_suffix }}
              {{ page.help }}

              {% if tabs %}
                <div class=\"tabs\">{{ tabs }}</div>
              {% endif %}

              {% if action_links %}
                <ul class=\"action-links\">{{ action_links }}</ul>
              {% endif %}

            </div><!-- /#content-header -->

            <div id=\"content-area\">
              {{ page.content }}
            </div>

          </section><!-- /#content -->

          {% if page.sidebar_first|render %}
            <aside id=\"sidebar-first\" class=\"column sidebar first\">
              {{ page.sidebar_first }}
            </aside><!-- /#sidebar-first -->
          {% endif %}

          {% if page.sidebar_second|render %}
            <aside id=\"sidebar-second\" class=\"column sidebar second\">
              {{ page.sidebar_second }}
            </aside><!-- /#sidebar-second -->
          {% endif %}

        </div><!-- /#content-wrapper -->
      </div><!-- /.container -->
    </div><!-- /#main -->

    <!-- ______________________ FOOTER _______________________ -->

    {% if page.footer|render %}
      <footer id=\"footer\">
        <div class=\"container\">
          <div id=\"footer-region\">
            {{ page.footer }}
          </div>
        </div>
      </footer><!-- /#footer -->
    {% endif %}
  </div><!-- /.layout-container -->
</div>
", "themes/basic/templates/page.html.twig", "C:\\xampp\\htdocs\\david\\themes\\basic\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 10);
        static $filters = array("render" => 1, "escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['render', 'escape'],
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
