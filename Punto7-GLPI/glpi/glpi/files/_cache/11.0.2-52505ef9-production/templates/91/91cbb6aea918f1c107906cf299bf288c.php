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

/* __string_template__c886a55f30dd6c370f8883a2fa641055 */
class __TwigTemplate_22d95753a11b3d6e2ec077fb9e4b9aa1 extends Template
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
        yield "            ";
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "
            ";
        // line 3
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 3, $this->getSourceContext())->macro_textareaField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["question"] ?? null), "getEndUserInputName", [], "method", false, false, false, 4),         // line 5
($context["default_value"] ?? null), "", ["enable_richtext" => true, "enable_images" =>         // line 9
($context["enable_images"] ?? null), "init" => (((($tmp =  !(null ===         // line 10
($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (false)), "is_horizontal" => false, "full_width" => true, "no_label" => true, "mb" => ""]]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__c886a55f30dd6c370f8883a2fa641055";
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
        return array (  52 => 10,  51 => 9,  50 => 5,  49 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__c886a55f30dd6c370f8883a2fa641055", "");
    }
}
