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

/* pages/setup/notification/notification.html.twig */
class __TwigTemplate_b63fa118670d505aaba0a72f35194b2d extends Template
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
            'form_fields' => [$this, 'block_form_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 37, $this->getSourceContext())->macro_textField(...["name", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), __("Name")]);
        yield "
    ";
        // line 38
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 38, $this->getSourceContext())->macro_textareaField(...["comment", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["comment"] ?? null) : null), __("Comments")]);
        yield "
    ";
        // line 39
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 39, $this->getSourceContext())->macro_dropdownYesNo(...["is_active", (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["is_active"] ?? null) : null), __("Active")]);
        yield "
    ";
        // line 40
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 40, $this->getSourceContext())->macro_dropdownYesNo(...["allow_response", (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["allow_response"] ?? null) : null), __("Allow response")]);
        yield "

    ";
        // line 42
        if ((($tmp =  !Session::haveRight("config", Twig\Extension\CoreExtension::constant("UPDATE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 43, $this->getSourceContext())->macro_htmlField(...["", (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["itemtype"] ?? null) : null), _n("Type", "Types", 1)]);
            yield "
    ";
        } elseif (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Config::canUpdate") && (CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["item"] ?? null), "getEntityID", [], "any", false, false, false, 44) == 0))) {
            // line 45
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemTypes", $context, 45, $this->getSourceContext())->macro_dropdownItemTypes(...["itemtype", (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["itemtype"] ?? null) : null), _n("Type", "Types", 1), ["types" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("notificationtemplates_types"), "rand" =>             // line 47
($context["rand"] ?? null)]]);
            // line 48
            yield "
    ";
        } else {
            // line 50
            yield "        ";
            $context["types_root_entity_only"] = ["CronTask", "DBConnection", "User"];
            // line 51
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemTypes", $context, 51, $this->getSourceContext())->macro_dropdownItemTypes(...["itemtype", (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["itemtype"] ?? null) : null), _n("Type", "Types", 1), ["types" => Twig\Extension\CoreExtension::filter($this->env, $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("notificationtemplates_types"),             // line 52
function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return !CoreExtension::inFilter(($context["v"] ?? null), ($context["types_root_entity_only"] ?? null)); }), "rand" =>             // line 53
($context["rand"] ?? null)]]);
            // line 54
            yield "
    ";
        }
        // line 56
        yield "    ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [("dropdown_itemtype" . ($context["rand"] ?? null)), "show_events", $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/dropdownNotificationEvent.php"), ["itemtype" => "__VALUE__"]]);
        // line 59
        yield "    ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [("dropdown_itemtype" . ($context["rand"] ?? null)), "show_templates", $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/dropdownNotificationTemplate.php"), ["itemtype" => "__VALUE__"]]);
        // line 62
        yield "    ";
        $context["events_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 63
            yield "        <span id=\"show_events\">
            ";
            // line 64
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("NotificationEvent::dropdownEvents", [(($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["itemtype"] ?? null) : null), ["value" => (($_v8 = CoreExtension::getAttribute($this->env, $this->source,             // line 65
($context["item"] ?? null), "fields", [], "any", false, false, false, 65)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["event"] ?? null) : null)]]);
            // line 67
            yield "        </span>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 69, $this->getSourceContext())->macro_htmlField(...["", ($context["events_field"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("NotificationEvent", 1)]);
        yield "

    ";
        // line 71
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 71, $this->getSourceContext())->macro_dropdownArrayField(...["attach_documents", (($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["attach_documents"] ?? null) : null), [Twig\Extension\CoreExtension::constant("NotificationSetting::ATTACH_INHERIT") => __("Use global config"), Twig\Extension\CoreExtension::constant("NotificationSetting::ATTACH_NO_DOCUMENT") => __("No documents"), Twig\Extension\CoreExtension::constant("NotificationSetting::ATTACH_ALL_DOCUMENTS") => __("All documents"), Twig\Extension\CoreExtension::constant("NotificationSetting::ATTACH_FROM_TRIGGER_ONLY") => __("Only documents related to the item that triggers the event")], __("Add documents")]);
        // line 76
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/notification/notification.html.twig";
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
        return array (  136 => 76,  134 => 71,  128 => 69,  123 => 67,  121 => 65,  120 => 64,  117 => 63,  114 => 62,  111 => 59,  108 => 56,  104 => 54,  102 => 53,  101 => 52,  99 => 51,  96 => 50,  92 => 48,  90 => 47,  88 => 45,  86 => 44,  81 => 43,  79 => 42,  74 => 40,  70 => 39,  66 => 38,  61 => 37,  54 => 36,  49 => 33,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/notification/notification.html.twig", "/var/www/html/glpi/templates/pages/setup/notification/notification.html.twig");
    }
}
