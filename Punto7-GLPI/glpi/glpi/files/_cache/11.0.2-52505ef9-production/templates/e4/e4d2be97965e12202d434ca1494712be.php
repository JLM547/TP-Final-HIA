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

/* pages/assistance/stats/single_item_pager.html.twig */
class __TwigTemplate_b316f7623fffc967cda3b4f6ea713766 extends Template
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
        // line 32
        yield "
<div class=\"text-center mx-auto p-1 mb-2\" style=\"background-color: var(--tblr-bg-surface); width: fit-content\">
    ";
        // line 34
        if ((($context["prev"] ?? null) > 0)) {
            // line 35
            yield "        <div class=\"d-inline-block\">
            <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "html", null, true);
            yield "?";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target_params"] ?? null), "html", null, true);
            yield "&amp;date1=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["_request"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["date1"] ?? null) : null), "html", null, true);
            yield "&amp;date2=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["_request"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["date2"] ?? null) : null), "html", null, true);
            yield "&amp;id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["prev"] ?? null), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous"), "html", null, true);
            yield "\">
                <i class=\"ti ti-chevron-left\"></i>
            </a>
        </div>
    ";
        }
        // line 41
        yield "    <div class=\"d-inline-block\" style=\"width: 400px\">";
        yield ($context["title"] ?? null);
        yield "</div>
    ";
        // line 42
        if ((($context["next"] ?? null) > 0)) {
            // line 43
            yield "        <div class=\"d-inline-block\">
            <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "html", null, true);
            yield "?";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target_params"] ?? null), "html", null, true);
            yield "&amp;date1=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["_request"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["date1"] ?? null) : null), "html", null, true);
            yield "&amp;date2=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["_request"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["date2"] ?? null) : null), "html", null, true);
            yield "&amp;id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["next"] ?? null), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next"), "html", null, true);
            yield "\">
                <i class=\"ti ti-chevron-right\"></i>
            </a>
        </div>
    ";
        }
        // line 49
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/assistance/stats/single_item_pager.html.twig";
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
        return array (  97 => 49,  79 => 44,  76 => 43,  74 => 42,  69 => 41,  51 => 36,  48 => 35,  46 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/assistance/stats/single_item_pager.html.twig", "/var/www/html/glpi/templates/pages/assistance/stats/single_item_pager.html.twig");
    }
}
