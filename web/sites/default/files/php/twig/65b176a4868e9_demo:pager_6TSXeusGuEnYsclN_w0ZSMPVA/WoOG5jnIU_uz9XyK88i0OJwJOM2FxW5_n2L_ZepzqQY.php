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

/* demo:pager */
class __TwigTemplate_a40351d6dbda16a01289b5bd785f0416 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pager' => [$this, 'block_pager'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/demo--pager"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "demo:pager"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "demo:pager"));
        $this->displayBlock('pager', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "items", "ellipses", "current"]);    }

    public function block_pager($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "\t<nav role=\"navigation\" aria-label=";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags(t("Pagination")), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 2, $this->source), "html", null, true);
        echo ">
\t\t<ol
\t\t\tclass=\"pager__items js-pager__items\">
\t\t\t";
        // line 6
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 6)) {
            // line 7
            echo "\t\t\t\t<li class=\"pager__item pager__item--first\">
\t\t\t\t\t<a href=\"";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 8), "href", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\" class=\"pager__link\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
            echo "\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 8), "attributes", [], "any", false, false, true, 8), 8, $this->source), "href", "title"), "addClass", ["pager__link"], "method", false, false, true, 8), 8, $this->source), "html", null, true);
            echo ">
\t\t\t\t\t\t<span class=\"visually-hidden\">";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
            echo "</span>
\t\t\t\t\t\t<span aria-hidden=\"true\">";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 10), "text", [], "any", true, true, true, 10)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 10), "text", [], "any", false, false, true, 10), 10, $this->source), t("« First"))) : (t("« First"))), "html", null, true);
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 14
        echo "\t\t\t";
        // line 15
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 15)) {
            // line 16
            echo "\t\t\t\t<li class=\"pager__item pager__item--previous\">
\t\t\t\t\t<a href=\"";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 17), "href", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\" class=\"pager__link\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
            echo "\" rel=\"prev\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 17), "attributes", [], "any", false, false, true, 17), 17, $this->source), "href", "title", "rel"), "addClass", ["pager__link"], "method", false, false, true, 17), 17, $this->source), "html", null, true);
            echo ">
\t\t\t\t\t\t<span class=\"visually-hidden\">";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
            echo "</span>
\t\t\t\t\t\t<span aria-hidden=\"true\">";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 19), "text", [], "any", true, true, true, 19)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 19), "text", [], "any", false, false, true, 19), 19, $this->source), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true);
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 23
        echo "\t\t\t";
        // line 24
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 24)) {
            // line 25
            echo "\t\t\t\t<li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
\t\t\t";
        }
        // line 27
        echo "\t\t\t";
        // line 28
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 28));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 29
            echo "\t\t\t\t<li class=\"pager__item";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
            echo "\">
\t\t\t\t\t";
            // line 30
            if ((($context["current"] ?? null) == $context["key"])) {
                // line 31
                echo "\t\t\t\t\t\t";
                $context["title"] = t("Current page");
                // line 32
                echo "\t\t\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t\t\t";
                $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                // line 34
                echo "\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "\" class=\"pager__link\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 35, $this->source), "html", null, true);
            echo "\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 35), 35, $this->source), "href", "title"), "addClass", ["pager__link"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? ("aria-current=\"page\"") : ("")));
            echo ">
\t\t\t\t\t\t<span class=\"visually-hidden\">
\t\t\t\t\t\t\t";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
            echo "
\t\t\t\t\t\t</span>";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 39, $this->source), "html", null, true);
            // line 40
            echo "</a>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t";
        // line 44
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 44)) {
            // line 45
            echo "\t\t\t\t<li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
\t\t\t";
        }
        // line 47
        echo "\t\t\t";
        // line 48
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 48)) {
            // line 49
            echo "\t\t\t\t<li class=\"pager__item pager__item--next\">
\t\t\t\t\t<a href=\"";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 50), "href", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
            echo "\" class=\"pager__link\" rel=\"next\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 50), "attributes", [], "any", false, false, true, 50), 50, $this->source), "href", "title", "rel"), "html", null, true);
            echo ">
\t\t\t\t\t\t<span class=\"visually-hidden\">";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
            echo "</span>
\t\t\t\t\t\t<span aria-hidden=\"true\">";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 52), "text", [], "any", true, true, true, 52)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 52), "text", [], "any", false, false, true, 52), 52, $this->source), t("Next ›"))) : (t("Next ›"))), "html", null, true);
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 56
        echo "\t\t\t";
        // line 57
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 57)) {
            // line 58
            echo "\t\t\t\t<li class=\"pager__item pager__item--last\">
\t\t\t\t\t<a href=\"";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 59), "href", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "\" class=\"pager__link\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
            echo "\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 59), "attributes", [], "any", false, false, true, 59), 59, $this->source), "href", "title"), "html", null, true);
            echo ">
\t\t\t\t\t\t<span class=\"visually-hidden\">";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
            echo "</span>
\t\t\t\t\t\t<span aria-hidden=\"true\">";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 61), "text", [], "any", true, true, true, 61)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 61), "text", [], "any", false, false, true, 61), 61, $this->source), t("Last »"))) : (t("Last »"))), "html", null, true);
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 65
        echo "\t\t</ul>
\t</nav>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "demo:pager";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  236 => 65,  229 => 61,  225 => 60,  217 => 59,  214 => 58,  211 => 57,  209 => 56,  202 => 52,  198 => 51,  190 => 50,  187 => 49,  184 => 48,  182 => 47,  178 => 45,  175 => 44,  173 => 43,  165 => 40,  163 => 39,  159 => 37,  147 => 35,  144 => 34,  141 => 33,  138 => 32,  135 => 31,  133 => 30,  128 => 29,  123 => 28,  121 => 27,  117 => 25,  114 => 24,  112 => 23,  105 => 19,  101 => 18,  93 => 17,  90 => 16,  87 => 15,  85 => 14,  78 => 10,  74 => 9,  66 => 8,  63 => 7,  60 => 6,  51 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "demo:pager", "themes/custom/demo/components/pager/pager.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "if" => 6, "for" => 28, "set" => 31);
        static $filters = array("escape" => 2, "striptags" => 2, "t" => 2, "without" => 8, "default" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set'],
                ['escape', 'striptags', 't', 'without', 'default'],
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
