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

/* pages/setup/general/assets_setup.html.twig */
class __TwigTemplate_260ed8686f6c7cf170c42659829f9ee2 extends Template
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

        $this->blocks = [
            'config_fields' => [$this, 'block_config_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "pages/setup/general/base_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 36
        $context["field_options"] = ["label_class" => "col-xxl-7", "input_class" => "col-xxl-5"];
        // line 33
        $this->parent = $this->load("pages/setup/general/base_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "   ";
        $context["global_management_options"] = [Twig\Extension\CoreExtension::constant("Config::UNIT_MANAGEMENT") => __("Yes - Restrict to unit management"), Twig\Extension\CoreExtension::constant("Config::GLOBAL_MANAGEMENT") => __("Yes - Restrict to global management"), Twig\Extension\CoreExtension::constant("Config::NO_MANAGEMENT") => __("No")];
        // line 47
        yield "
   ";
        // line 48
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 48, $this->getSourceContext())->macro_dropdownYesNo(...["auto_create_infocoms", (($_v0 =         // line 50
($context["config"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["auto_create_infocoms"] ?? null) : null), __("Enable the financial and administrative information by default"),         // line 52
($context["field_options"] ?? null)]);
        // line 53
        yield "

   ";
        // line 55
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 55, $this->getSourceContext())->macro_dropdownArrayField(...["monitors_management_restrict", (($_v1 =         // line 57
($context["config"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["monitors_management_restrict"] ?? null) : null),         // line 58
($context["global_management_options"] ?? null), __("Restrict monitor management"),         // line 60
($context["field_options"] ?? null)]);
        // line 61
        yield "

   ";
        // line 63
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 63, $this->getSourceContext())->macro_dropdownField(...["SoftwareCategory", "softwarecategories_id_ondelete", (($_v2 =         // line 66
($context["config"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["softwarecategories_id_ondelete"] ?? null) : null), __("Software category deleted by the dictionary rules"),         // line 68
($context["field_options"] ?? null)]);
        // line 69
        yield "

   ";
        // line 71
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 71, $this->getSourceContext())->macro_dropdownArrayField(...["peripherals_management_restrict", (($_v3 =         // line 73
($context["config"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["peripherals_management_restrict"] ?? null) : null),         // line 74
($context["global_management_options"] ?? null), __("Restrict device management"),         // line 76
($context["field_options"] ?? null)]);
        // line 77
        yield "

   ";
        // line 79
        yield $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 79, $this->getSourceContext())->macro_dateField(...["date_tax", (($_v4 = ($context["config"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["date_tax"] ?? null) : null), __("End of fiscal year"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["maybeempty" => false])]);
        // line 81
        yield "

   ";
        // line 83
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 83, $this->getSourceContext())->macro_dropdownArrayField(...["phones_management_restrict", (($_v5 =         // line 85
($context["config"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["phones_management_restrict"] ?? null) : null),         // line 86
($context["global_management_options"] ?? null), __("Restrict phone management"),         // line 88
($context["field_options"] ?? null)]);
        // line 89
        yield "

   ";
        // line 91
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 91, $this->getSourceContext())->macro_dropdownArrayField(...["use_autoname_by_entity", (($_v6 = ($context["config"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["use_autoname_by_entity"] ?? null) : null), [__("Global"), __("By entity")], __("Automatic fields (marked by *)"),         // line 94
($context["field_options"] ?? null)]);
        yield "

   ";
        // line 96
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 96, $this->getSourceContext())->macro_dropdownArrayField(...["printers_management_restrict", (($_v7 =         // line 98
($context["config"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["printers_management_restrict"] ?? null) : null),         // line 99
($context["global_management_options"] ?? null), __("Restrict printer management"),         // line 101
($context["field_options"] ?? null)]);
        // line 102
        yield "

   ";
        // line 104
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 104, $this->getSourceContext())->macro_dropdownArrayField(...["devices_in_menu", null, ($context["item_devices_types"] ?? null), __("Devices displayed in menu"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["multiple" => true, "size" => 3, "values" => (($_v8 =         // line 107
($context["config"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["devices_in_menu"] ?? null) : null)])]);
        // line 108
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/assets_setup.html.twig";
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
        return array (  136 => 108,  134 => 107,  133 => 104,  129 => 102,  127 => 101,  126 => 99,  125 => 98,  124 => 96,  119 => 94,  118 => 91,  114 => 89,  112 => 88,  111 => 86,  110 => 85,  109 => 83,  105 => 81,  103 => 79,  99 => 77,  97 => 76,  96 => 74,  95 => 73,  94 => 71,  90 => 69,  88 => 68,  87 => 66,  86 => 63,  82 => 61,  80 => 60,  79 => 58,  78 => 57,  77 => 55,  73 => 53,  71 => 52,  70 => 50,  69 => 48,  66 => 47,  63 => 42,  56 => 41,  51 => 33,  49 => 36,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/assets_setup.html.twig", "/var/www/html/glpi/templates/pages/setup/general/assets_setup.html.twig");
    }
}
