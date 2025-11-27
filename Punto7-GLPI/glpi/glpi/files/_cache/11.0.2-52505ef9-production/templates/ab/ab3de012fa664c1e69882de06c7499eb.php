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

/* __string_template__47f9e253016c5fa2c2c8c29cea62b0e5 */
class __TwigTemplate_8e8ab97c01f34d79f057170198292b03 extends Template
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
        $context["actors_dropdown"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Form\\Dropdown\\FormActorsDropdown::show", [CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["question"] ?? null), "getEndUserInputName", [], "method", false, false, false, 4),         // line 5
($context["value"] ?? null), ["form_id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["question"] ?? null), "getForm", [], "method", false, false, false, 7), "getId", [], "method", false, false, false, 7), "multiple" =>         // line 8
($context["is_multiple_actors"] ?? null), "allowed_types" =>         // line 9
($context["allowed_types"] ?? null), "aria_label" =>         // line 10
($context["aria_label"] ?? null), "mb" => "", "right_for_users" =>         // line 12
($context["right_for_users"] ?? null), "group_conditions" =>         // line 13
($context["group_conditions"] ?? null)]]);
        // line 16
        yield "
        ";
        // line 17
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 17, $this->getSourceContext())->macro_htmlField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 18
($context["question"] ?? null), "getEndUserInputName", [], "method", false, false, false, 18),         // line 19
($context["actors_dropdown"] ?? null), "", ["no_label" => true, "wrapper_class" => "", "mb" => "", "field_class" => Twig\Extension\CoreExtension::join(["col-12", "col-sm-6"], " ")]]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__47f9e253016c5fa2c2c8c29cea62b0e5";
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
        return array (  63 => 19,  62 => 18,  61 => 17,  58 => 16,  56 => 13,  55 => 12,  54 => 10,  53 => 9,  52 => 8,  51 => 7,  50 => 5,  49 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__47f9e253016c5fa2c2c8c29cea62b0e5", "");
    }
}
