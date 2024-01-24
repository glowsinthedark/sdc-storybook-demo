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

/* themes/custom/demo/templates/page/page.html.twig */
class __TwigTemplate_9ce6bd46cc399a0b26e1c68459f74fd8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'main' => [$this, 'block_main'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"layout-container\">
\t";
        // line 2
        if (($context["alert"] ?? null)) {
            // line 3
            echo "\t\t<div class=\"l-constrained\">
\t\t\t";
            // line 4
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "alert", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 7
        echo "\t";
        // line 8
        echo "
\t";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "\t";
        // line 18
        echo "
\t";
        // line 19
        if (($context["breadcrumb"] ?? null)) {
            // line 20
            echo "\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "demo:breadcrumbs", ["breadcrumbs" => twig_get_attribute($this->env, $this->source,             // line 21
($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 21)]));
            // line 22
            echo "
\t";
        }
        // line 24
        echo "\t";
        // line 25
        echo "
\t";
        // line 26
        $this->displayBlock('highlighted', $context, $blocks);
        // line 29
        echo "
\t";
        // line 30
        $this->displayBlock('help', $context, $blocks);
        // line 33
        echo "

\t";
        // line 35
        $this->displayBlock('main', $context, $blocks);
        // line 49
        echo "\t";
        // line 50
        echo "
\t";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "\t";
        // line 55
        echo "\t<a href=\"#top\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Back to Top"));
        echo "</a>

</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["alert", "page", "breadcrumb"]);    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t\t<header class=\"site-header\" role=\"banner\">
\t\t\t<div class=\"site-header__inner l-constrained\">
\t\t\t\t";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
\t\t\t\t";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t</header>
\t";
    }

    // line 26
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "
\t";
    }

    // line 30
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
\t";
    }

    // line 35
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "\t\t<main>
\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t\t";
        // line 39
        echo "
\t\t\t";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "\t\t\t";
        // line 46
        echo "
\t\t</main>
\t";
    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "\t\t\t\t<div class=\"l-constrained\">
\t\t\t\t\t";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t";
    }

    // line 51
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
\t";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/demo/templates/page/page.html.twig";
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
        return array (  199 => 52,  195 => 51,  188 => 42,  185 => 41,  181 => 40,  175 => 46,  173 => 45,  171 => 40,  168 => 39,  164 => 36,  160 => 35,  153 => 31,  149 => 30,  142 => 27,  138 => 26,  130 => 13,  126 => 12,  122 => 10,  118 => 9,  108 => 55,  106 => 54,  104 => 51,  101 => 50,  99 => 49,  97 => 35,  93 => 33,  91 => 30,  88 => 29,  86 => 26,  83 => 25,  81 => 24,  77 => 22,  75 => 21,  73 => 20,  71 => 19,  68 => 18,  66 => 17,  64 => 9,  61 => 8,  59 => 7,  53 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/demo/templates/page/page.html.twig", "/var/www/html/web/themes/custom/demo/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "block" => 9);
        static $filters = array("escape" => 4, "t" => 55);
        static $functions = array("include" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape', 't'],
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
