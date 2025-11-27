<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* __string_template__0d61f4ff0759b4d403842e04e75fd7d9 */
class __TwigTemplate_19c03e0a9910c7941ab4260c3e39cb05 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "                ";
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "                <div class=\"mb-3\">
                    <form method=\"post\" action=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Contract_Item"), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"itemtype\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class(($context["user"] ?? null)), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"items_id\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getID", [], "method", false, false, false, 5), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
                        <div class=\"d-flex\">
                            ";
        // line 8
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 8, $this->getSourceContext())->macro_dropdownField(...["Contract", "contracts_id", 0, null, ["used" =>         // line 9
($context["used"] ?? null), "expired" => false]]);
        // line 11
        yield "
                            ";
        // line 12
        $context["btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 13
            yield "                                <button type=\"submit\" name=\"add\" class=\"btn btn-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btn_label"] ?? null), "html", null, true);
            yield "</button>
                            ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        yield "                            ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 15, $this->getSourceContext())->macro_htmlField(...["", ($context["btn"] ?? null), null]);
        yield "
                        </div>
                    </form>
                </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__0d61f4ff0759b4d403842e04e75fd7d9";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  80 => 15,  73 => 13,  71 => 12,  68 => 11,  66 => 9,  65 => 8,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__0d61f4ff0759b4d403842e04e75fd7d9", "");
    }
}
