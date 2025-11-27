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

/* pages/setup/general/logs_setup.html.twig */
class __TwigTemplate_1ceac3eb2bfedd50259086994351792a extends Template
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
        // line 33
        $this->parent = $this->load("pages/setup/general/base_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 37, $this->getSourceContext())->macro_largeTitle(...[__("Logs purge configuration"), "ti ti-news"]);
        yield "

   ";
        // line 39
        $context["logs_interval_options"] = [Twig\Extension\CoreExtension::constant("Config::DELETE_ALL") => __("Delete all"), Twig\Extension\CoreExtension::constant("Config::KEEP_ALL") => __("Keep all")];
        // line 43
        yield "   ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 120));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            yield "      ";
            $context["logs_interval_options"] = (($context["logs_interval_options"] ?? null) + [ (string)            // line 45
$context["i"] => Twig\Extension\CoreExtension::sprintf(_n("Delete if older than %s month", "Delete if older than %s months", $context["i"]), $context["i"])]);
            // line 47
            yield "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "   ";
        // line 53
        yield "
   ";
        // line 54
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 54, $this->getSourceContext())->macro_dropdownArrayField(...["init_all", 0, ($context["logs_interval_options"] ?? null), __("Change all"), ["label_class" => "col-xxl-5 fst-italic", "on_change" => "\$(this).closest(`form`).find(`.purgelog_interval select`).val(this.value).trigger(\"change\");"]]);
        // line 57
        yield "

   ";
        // line 59
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 59, $this->getSourceContext())->macro_smallTitle(...[__("General")]);
        yield "
   ";
        // line 60
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 60, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_addrelation", __("Add/update relation between items"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 61
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 61, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_deleterelation", __("Delete relation between items"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 62
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 62, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_createitem", __("Add the item"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 63
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 63, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_deleteitem", __("Delete the item"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 64
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 64, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_restoreitem", __("Restore the item"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 65
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 65, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_updateitem", __("Update the item"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 66
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 66, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_comments", __("Comments"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 67
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 67, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_datemod", __("Last update"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 68
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 68, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_plugins", __("Plugins"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 69
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 69, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_refusedequipment", $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("RefusedEquipment", Session::getPluralNumber()), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "

   ";
        // line 71
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 71, $this->getSourceContext())->macro_smallTitle(...[$this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Software", Session::getPluralNumber())]);
        yield "
   ";
        // line 72
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 72, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_item_software_install", __("Installation/uninstallation of software on items"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 73
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 73, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_software_version_install", __("Installation/uninstallation versions on software"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 74
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 74, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_software_item_install", __("Add/Remove items from software versions"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "

   ";
        // line 76
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 76, $this->getSourceContext())->macro_smallTitle(...[$this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Infocom", Session::getPluralNumber())]);
        yield "
   ";
        // line 77
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 77, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_infocom_creation", __("Add financial information to an item"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "

   ";
        // line 79
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 79, $this->getSourceContext())->macro_smallTitle(...[$this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User", Session::getPluralNumber())]);
        yield "
   ";
        // line 80
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 80, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_profile_user", __("Add/remove profiles to users"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 81
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 81, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_group_user", __("Add/remove groups to users"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 82
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 82, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_user_auth_changes", __("User authentication method changes"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 83
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 83, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_userdeletedfromldap", __("Deleted user in LDAP directory"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "

   ";
        // line 85
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 85, $this->getSourceContext())->macro_smallTitle(...[$this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonDevice", Session::getPluralNumber())]);
        yield "
   ";
        // line 86
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 86, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_adddevice", __("Add component"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 87
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 87, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_updatedevice", __("Update component"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 88
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 88, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_disconnectdevice", __("Disconnect a component"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 89
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 89, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_connectdevice", __("Connect a component"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
   ";
        // line 90
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 90, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_deletedevice", __("Delete component"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "

   ";
        // line 92
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 92, $this->getSourceContext())->macro_smallTitle(...[__("All sections")]);
        yield "
   ";
        // line 93
        yield $this->getTemplateForMacro("macro_log_interval_dropdown", $context, 93, $this->getSourceContext())->macro_log_interval_dropdown(...["purge_all", __("Purge all log entries"), ($context["config"] ?? null), ($context["logs_interval_options"] ?? null)]);
        yield "
";
        yield from [];
    }

    // line 48
    public function macro_log_interval_dropdown($name = null, $label = null, $config = null, $logs_interval_options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "label" => $label,
            "config" => $config,
            "logs_interval_options" => $logs_interval_options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 49
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 49, $this->getSourceContext())->macro_dropdownArrayField(...[($context["name"] ?? null), (($_v0 = ($context["config"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["name"] ?? null)] ?? null) : null), ($context["logs_interval_options"] ?? null), ($context["label"] ?? null), ["add_field_class" => "purgelog_interval"]]);
            // line 51
            yield "
   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/logs_setup.html.twig";
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
        return array (  241 => 51,  238 => 49,  223 => 48,  216 => 93,  212 => 92,  207 => 90,  203 => 89,  199 => 88,  195 => 87,  191 => 86,  187 => 85,  182 => 83,  178 => 82,  174 => 81,  170 => 80,  166 => 79,  161 => 77,  157 => 76,  152 => 74,  148 => 73,  144 => 72,  140 => 71,  135 => 69,  131 => 68,  127 => 67,  123 => 66,  119 => 65,  115 => 64,  111 => 63,  107 => 62,  103 => 61,  99 => 60,  95 => 59,  91 => 57,  89 => 54,  86 => 53,  84 => 48,  78 => 47,  76 => 45,  74 => 44,  69 => 43,  67 => 39,  61 => 37,  54 => 36,  49 => 33,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/logs_setup.html.twig", "/var/www/html/glpi/templates/pages/setup/general/logs_setup.html.twig");
    }
}
