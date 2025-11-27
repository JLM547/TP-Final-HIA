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

/* __string_template__3665fa05566b323b2694195fb69ea684 */
class __TwigTemplate_8cba8c583b3a45a7bde2f6d8fa1cb3a2 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Item_SoftwareLicense"), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"itemtype\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class(($context["item"] ?? null)), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"items_id\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 5), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
                        <div class=\"d-flex\">
                            ";
        // line 8
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 8, $this->getSourceContext())->macro_dropdownField(...["SoftwareLicense", "softwarelicenses_id", 0, null, ["used" =>         // line 9
($context["used"] ?? null)]]);
        // line 10
        yield "
                            ";
        // line 11
        $context["btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "                                <button type=\"submit\" name=\"add\" class=\"btn btn-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btn_label"] ?? null), "html", null, true);
            yield "</button>
                            ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        yield "                            ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 14, $this->getSourceContext())->macro_htmlField(...["", ($context["btn"] ?? null), null]);
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
        return "__string_template__3665fa05566b323b2694195fb69ea684";
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
        return array (  80 => 14,  73 => 12,  71 => 11,  68 => 10,  66 => 9,  65 => 8,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__3665fa05566b323b2694195fb69ea684", "");
    }
}
