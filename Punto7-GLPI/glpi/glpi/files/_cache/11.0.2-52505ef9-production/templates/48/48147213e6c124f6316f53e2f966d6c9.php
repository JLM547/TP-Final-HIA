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

/* pages/admin/group_user.html.twig */
class __TwigTemplate_215524d04d1a7c3473319b5d45fa177c extends Template
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
";
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 37
        yield "<div class=\"asset\">
    <form name=\"asset_form\" method=\"post\" action=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Group_User"), "html", null, true);
        yield "\" enctype=\"multipart/form-data\" data-submit-once>
        <div class=\"d-flex flex-row flex-wrap\">
            ";
        // line 40
        $context["field_options"] = ["field_class" => "col-4"];
        // line 43
        yield "            ";
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 43, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
        yield "
            ";
        // line 44
        if (( !array_key_exists("source_itemtype", $context) || (($context["source_itemtype"] ?? null) == "User"))) {
            // line 45
            yield "                ";
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 45, $this->getSourceContext())->macro_hidden(...["users_id", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["users_id"] ?? null) : null)]);
            yield "
                ";
            // line 46
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 46, $this->getSourceContext())->macro_dropdownField(...["Group", "groups_id", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 46), "groups_id", [], "array", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["groups_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), (["used" =>             // line 47
($context["used"] ?? null), "condition" => ["is_usergroup" => 1], "entity" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "entity_sons" => true] +             // line 53
($context["field_options"] ?? null))]);
            yield "
            ";
        }
        // line 55
        yield "            ";
        if (( !array_key_exists("source_itemtype", $context) || (($context["source_itemtype"] ?? null) == "Group"))) {
            // line 56
            yield "                ";
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 56, $this->getSourceContext())->macro_hidden(...["groups_id", (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["groups_id"] ?? null) : null)]);
            yield "
                ";
            // line 57
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 57, $this->getSourceContext())->macro_dropdownField(...["User", "users_id", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 57), "users_id", [], "array", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default((($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["users_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), (["used" =>             // line 58
($context["used"] ?? null), "entity" => ((            // line 59
array_key_exists("entityrestrict", $context)) ? (Twig\Extension\CoreExtension::default(($context["entityrestrict"] ?? null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"))), "right" => "all", "with_no_right" => true] +             // line 62
($context["field_options"] ?? null))]);
            yield "
            ";
        }
        // line 64
        yield "
            ";
        // line 65
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 65, $this->getSourceContext())->macro_dropdownYesNo(...["is_manager", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 65), "is_manager", [], "array", true, true, false, 65) &&  !(null === (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 65)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["is_manager"] ?? null) : null)))) ? ((($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 65)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["is_manager"] ?? null) : null)) : (false)), _n("Manager", "Managers", 1), ($context["field_options"] ?? null)]);
        yield "
            ";
        // line 66
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 66, $this->getSourceContext())->macro_dropdownYesNo(...["is_userdelegate", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 66), "is_userdelegate", [], "array", true, true, false, 66) &&  !(null === (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["is_userdelegate"] ?? null) : null)))) ? ((($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["is_userdelegate"] ?? null) : null)) : (false)), __("Delegatee"), ($context["field_options"] ?? null)]);
        yield "
        </div>
        <div class=\"d-flex flex-row-reverse pe-2\">
            ";
        // line 69
        yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 69, $this->getSourceContext())->macro_submit(...["add", _x("button", "Add"), 1, ($context["field_options"] ?? null)]);
        yield "
        </div>
    </form>
</div>
<hr class=\"my-2\">
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/group_user.html.twig";
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
        return array (  110 => 69,  104 => 66,  100 => 65,  97 => 64,  92 => 62,  91 => 59,  90 => 58,  89 => 57,  84 => 56,  81 => 55,  76 => 53,  75 => 47,  74 => 46,  69 => 45,  67 => 44,  62 => 43,  60 => 40,  55 => 38,  52 => 37,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/group_user.html.twig", "/var/www/html/glpi/templates/pages/admin/group_user.html.twig");
    }
}
