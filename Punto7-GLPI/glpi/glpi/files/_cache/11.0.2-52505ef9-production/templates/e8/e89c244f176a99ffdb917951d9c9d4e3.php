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

/* __string_template__daab1bef8b3ed54610d0c28164f0340f */
class __TwigTemplate_3c3e3170b5ee2c66b02a97dd2d68fe62 extends Template
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
        yield "        ";
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "
        ";
        // line 3
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 3, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["question"] ?? null), "getEndUserInputName", [], "method", false, false, false, 4),         // line 5
($context["value"] ?? null),         // line 6
($context["urgency_levels"] ?? null), "", ["no_label" => true, "display_emptychoice" => true, "aria_label" =>         // line 11
($context["label"] ?? null), "mb" => ""]]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__daab1bef8b3ed54610d0c28164f0340f";
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
        return array (  52 => 11,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__daab1bef8b3ed54610d0c28164f0340f", "");
    }
}
