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

/* themes/custom/demo/templates/node/node--full.html.twig */
class __TwigTemplate_f834ba799de8cec5c47c84a8dcd21d82 extends Template
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
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [["article"]], "method", false, false, true, 1), 1, $this->source), "html", null, true);
        echo ">

\t<header class=\"article__header l-constrained\">
\t\t";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 4, $this->source), "html", null, true);
        echo "
\t\t";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "demo:page-title", ["text" =>         // line 6
($context["label"] ?? null)]));
        // line 7
        echo "
\t\t";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 8, $this->source), "html", null, true);
        echo "
\t</header>

\t<div class=\"l--1-col l-constrained\">
\t\t<div class=\"l__primary\">
\t\t\t";
        // line 13
        if (($context["content"] ?? null)) {
            // line 14
            echo "\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 14, $this->source), "html", null, true);
            echo "
\t\t\t";
        }
        // line 16
        echo "\t\t</div>
\t</div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title_prefix", "label", "title_suffix", "content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/demo/templates/node/node--full.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  72 => 16,  66 => 14,  64 => 13,  56 => 8,  53 => 7,  51 => 6,  50 => 5,  46 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/demo/templates/node/node--full.html.twig", "/var/www/html/web/themes/custom/demo/templates/node/node--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array("escape" => 1);
        static $functions = array("include" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['include']
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
