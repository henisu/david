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

/* themes/gin/templates/node/node-edit-form.html.twig */
class __TwigTemplate_41108fcba9b46e0c56f429f06f2ee8202ce053fba2abf81f1666f79a6b0288bb extends \Twig\Template
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
        // line 18
        echo "<div class=\"layout-node-form clearfix\">
  <div class=\"layout-region layout-region-node-main\">
    ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 20, $this->source), "advanced", "footer", "actions", "gin_actions", "gin_sidebar"), "html", null, true);
        echo "
  </div>
  <div class=\"layout-region layout-region-node-secondary\">
    <div class=\"layout-region__content\">
      ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "advanced", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
    </div>
  </div>
  <div class=\"layout-node-form__actions\">
    ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gin_actions", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
  </div>
</div>

";
        // line 32
        if ((($context["gin_layout_paragraphs"] ?? null) == 1)) {
            // line 33
            echo "<style>
  .layout-node-form {
    --ginLPLayoutLabel: \"";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Layout"));
            echo "\";
    --ginLPContentLabel: \"";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Content"));
            echo "\";
  }
</style>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gin/templates/node/node-edit-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  70 => 35,  66 => 33,  64 => 32,  57 => 28,  50 => 24,  43 => 20,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a node edit form.
 *
 * Two column template for the node add/edit form.
 *
 * This template will be used when a node edit form specifies 'node_edit_form'
 * as its #theme callback.  Otherwise, by default, node add/edit forms will be
 * themed by form.html.twig.
 *
 * Available variables:
 * - form: The node add/edit form.
 *
 * @see claro_form_node_form_alter()
 */
#}
<div class=\"layout-node-form clearfix\">
  <div class=\"layout-region layout-region-node-main\">
    {{ form|without('advanced', 'footer', 'actions', 'gin_actions', 'gin_sidebar') }}
  </div>
  <div class=\"layout-region layout-region-node-secondary\">
    <div class=\"layout-region__content\">
      {{ form.advanced }}
    </div>
  </div>
  <div class=\"layout-node-form__actions\">
    {{ form.gin_actions }}
  </div>
</div>

{% if gin_layout_paragraphs == 1 %}
<style>
  .layout-node-form {
    --ginLPLayoutLabel: \"{{ 'Layout'|t }}\";
    --ginLPContentLabel: \"{{ 'Content'|t }}\";
  }
</style>
{% endif %}
", "themes/gin/templates/node/node-edit-form.html.twig", "C:\\xampp\\htdocs\\david\\themes\\gin\\templates\\node\\node-edit-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 32);
        static $filters = array("escape" => 20, "without" => 20, "t" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without', 't'],
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
