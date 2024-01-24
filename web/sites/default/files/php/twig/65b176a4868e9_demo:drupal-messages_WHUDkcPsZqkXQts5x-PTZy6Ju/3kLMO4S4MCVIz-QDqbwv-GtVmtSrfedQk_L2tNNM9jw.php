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

/* demo:drupal-messages */
class __TwigTemplate_d50182c7aa5a8eca886bef1aee4e240d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/demo--drupal-messages"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "demo:drupal-messages"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "demo:drupal-messages"));
        $macros["icon"] = $this->macros["icon"] = $this->loadTemplate("demo:icons", "demo:drupal-messages", 1)->unwrap();
        // line 2
        $this->displayBlock('messages', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "status_headings", "attributes"]);    }

    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 4
            echo "\t\t";
            // line 5
            $context["classes"] = ["messages", ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 7
$context["type"], 7, $this->source))];
            // line 10
            echo "\t\t<div role=\"contentinfo\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 10, $this->source), "html", null, true);
            echo "\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 10), 10, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
\t\t\t<div class=\"messages__icon\">
\t\t\t\t";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["icon"], "macro_inline", [$context["type"]], 12, $context, $this->getSourceContext()));
            echo "
\t\t\t</div>
\t\t\t<div class=\"messages__content\" ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["type"] == "error")) ? ("role=\"alert\"") : ("")));
            echo ">
\t\t\t\t";
            // line 15
            if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) {
                // line 16
                echo "\t\t\t\t\t<h2 class=\"visually-hidden\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 16, $this->source), "html", null, true);
                echo "</h2>
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 19
                echo "\t\t\t\t\t<ul class=\"messages__list\">
\t\t\t\t\t\t";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "\t\t\t\t\t\t\t<li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 21, $this->source), "html", null, true);
                    echo "</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "\t\t\t\t\t</ul>
\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 25, $this->source)), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 27
            echo "\t\t\t</div>
\t\t</div>
\t\t";
            // line 30
            echo "\t\t";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["classes"] ?? null)], "method", false, false, true, 30);
            // line 31
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "demo:drupal-messages";
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
        return array (  124 => 31,  121 => 30,  117 => 27,  111 => 25,  107 => 23,  98 => 21,  94 => 20,  91 => 19,  88 => 18,  82 => 16,  80 => 15,  76 => 14,  71 => 12,  63 => 10,  61 => 7,  60 => 5,  58 => 4,  53 => 3,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "demo:drupal-messages", "themes/custom/demo/components/drupal-messages/drupal-messages.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "block" => 2, "for" => 3, "set" => 5, "if" => 15);
        static $filters = array("escape" => 10, "without" => 10, "length" => 18, "first" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'block', 'for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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
