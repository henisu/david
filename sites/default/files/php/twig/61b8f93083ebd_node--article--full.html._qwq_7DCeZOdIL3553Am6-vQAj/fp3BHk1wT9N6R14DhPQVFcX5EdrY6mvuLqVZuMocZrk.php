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

/* themes/basic/templates/node/node--article--full.html.twig */
class __TwigTemplate_f8f40afa281e5e49ed69abbd4730f37ad133fc75b2635c30afe028376710c58a extends \Twig\Template
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

<div";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content article-page"], "method", false, false, true, 3), 3, $this->source), "html", null, true);
        echo ">

    ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "

    <div class=\"article-wrapper\">
        <header>
            <h2";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 9), 9, $this->source), "html", null, true);
        echo ">
                ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 10, $this->source), "html", null, true);
        echo " 
            </h2>
            <div>";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "value", [], "any", false, false, true, 12), 12, $this->source), "n/j/Y"), "html", null, true);
        echo "</div>
            <span>";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 13, $this->source), "html", null, true);
        echo "</span>
        </header>

        ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/node/node--article--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  68 => 13,  64 => 12,  59 => 10,  55 => 9,  48 => 5,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<div{{ content_attributes.addClass('content article-page') }}>

    {{ content.field_banner }}

    <div class=\"article-wrapper\">
        <header>
            <h2{{ title_attributes.addClass(title_classes) }}>
                {{ label }} 
            </h2>
            <div>{{ content.value|date('n/j/Y') }}</div>
            <span>{{- author_name -}}</span>
        </header>

        {{ content.body }}
    </div>

</div>
", "themes/basic/templates/node/node--article--full.html.twig", "C:\\xampp\\htdocs\\david\\themes\\basic\\templates\\node\\node--article--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 3, "date" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
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
