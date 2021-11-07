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
class __TwigTemplate_dad7e623e51d40156b54e1a63724f57800e9ea04ea5b6f7e6af68f5a6f09f377 extends \Twig\Template
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
          ";
        // line 45
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 45))) {
            // line 46
            echo "            <aside id=\"sidebar-first\" class=\"column sidebar first\">
              ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "
            </aside><!-- /#sidebar-first -->
          ";
        }
        // line 50
        echo "
          ";
        // line 51
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 51))) {
            // line 52
            echo "            <aside id=\"sidebar-second\" class=\"column sidebar second\">
              ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
            </aside><!-- /#sidebar-second -->
          ";
        }
        // line 56
        echo "          <section id=\"content\">
          

            <div id=\"content-header\">

              ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "

              ";
        // line 63
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 63))) {
            // line 64
            echo "                <div id=\"highlighted\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "</div>
              ";
        }
        // line 66
        echo "
              ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 67, $this->source), "html", null, true);
        echo "

              ";
        // line 69
        if (($context["title"] ?? null)) {
            // line 70
            echo "                <h1 class=\"title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 70, $this->source), "html", null, true);
            echo "</h1>
              ";
        }
        // line 72
        echo "
              ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 73, $this->source), "html", null, true);
        echo "
              ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "

              ";
        // line 76
        if (($context["tabs"] ?? null)) {
            // line 77
            echo "                <div class=\"tabs\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 77, $this->source), "html", null, true);
            echo "</div>
              ";
        }
        // line 79
        echo "
              ";
        // line 80
        if (($context["action_links"] ?? null)) {
            // line 81
            echo "                <ul class=\"action-links\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 81, $this->source), "html", null, true);
            echo "</ul>
              ";
        }
        // line 83
        echo "
            </div><!-- /#content-header -->

            <div id=\"content-area\">
              ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "
            </div>

          </section><!-- /#content -->


        </div><!-- /#content-wrapper -->
      </div><!-- /.container -->
    </div><!-- /#main -->

    <!-- ______________________ FOOTER _______________________ -->

    ";
        // line 99
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 99))) {
            // line 100
            echo "      <footer id=\"footer\">
        <div class=\"container\">
          <div id=\"footer-region\">
            ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </footer><!-- /#footer -->
    ";
        }
        // line 108
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
        return array (  258 => 108,  250 => 103,  245 => 100,  243 => 99,  228 => 87,  222 => 83,  216 => 81,  214 => 80,  211 => 79,  205 => 77,  203 => 76,  198 => 74,  194 => 73,  191 => 72,  185 => 70,  183 => 69,  178 => 67,  175 => 66,  169 => 64,  167 => 63,  162 => 61,  155 => 56,  149 => 53,  146 => 52,  144 => 51,  141 => 50,  135 => 47,  132 => 46,  130 => 45,  122 => 39,  115 => 35,  111 => 34,  100 => 32,  98 => 31,  95 => 30,  87 => 25,  82 => 22,  80 => 21,  75 => 18,  71 => 16,  65 => 14,  63 => 13,  59 => 12,  56 => 11,  54 => 10,  50 => 8,  48 => 7,  47 => 6,  46 => 4,  43 => 3,  41 => 2,  39 => 1,);
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
