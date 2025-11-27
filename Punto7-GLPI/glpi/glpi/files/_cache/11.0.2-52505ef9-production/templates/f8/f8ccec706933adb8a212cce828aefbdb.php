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

/* pages/admin/user/user.html.twig */
class __TwigTemplate_5590625ecd22b56dcd651454faee1f81 extends Template
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
        $macros["modals"] = $this->macros["modals"] = $this->load("components/form/modals_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 37
        $context["rand_field"] = ((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())));
        // line 38
        $context["field_options"] = ["rand" =>         // line 39
($context["rand_field"] ?? null)];
        // line 41
        yield "
";
        // line 42
        $context["internal_auth"] = ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["authtype"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Auth::DB_GLPI"));
        // line 43
        $context["external_auth"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 43) &&  !($context["internal_auth"] ?? null));
        // line 45
        $context["simple_form"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "simplified_form", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "simplified_form", [], "any", false, false, false, 45), false)) : (false));
        // line 46
        $context["is_my_form"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 46) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
        // line 48
        $context["is_preference_form"] = ((array_key_exists("is_preference_form", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_preference_form"] ?? null), false)) : (false));
        // line 49
        $context["target"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((((($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("/front/preference.php") : ("/front/user.form.php")));
        // line 50
        $context["higher_rights"] = ((array_key_exists("higher_rights", $context)) ? (Twig\Extension\CoreExtension::default(($context["higher_rights"] ?? null), false)) : (false));
        // line 51
        yield "
<div class=\"asset\">
    <form id=\"main-form\" name=\"asset_form\" method=\"post\" action=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "html", null, true);
        yield "\" enctype=\"multipart/form-data\" data-submit-once>
        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />

        <div class=\"card-body d-flex flex-wrap\">
            <div class=\"col-12 col-xxl-12 flex-column\">
                <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                    <div class=\"row flex-row align-items-start flex-grow-1\">
                        <div class=\"row flex-row\">
                            ";
        // line 61
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "                                <input type=\"hidden\" name=\"id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 62), "html", null, true);
            yield "\" />
                            ";
        }
        // line 64
        yield "                            ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 64) || ($context["internal_auth"] ?? null)) &&  !($context["is_preference_form"] ?? null))) {
            // line 65
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 65, $this->getSourceContext())->macro_textField(...["name", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 65)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["name"] ?? null) : null), __("Login")]);
            yield "
                            ";
        } else {
            // line 67
            yield "                                ";
            $context["login_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 68
                yield "                                    <span class=\"fw-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["name"] ?? null) : null), "html", null, true);
                yield "</span>
                                    <input type=\"hidden\" name=\"name\" value=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["name"] ?? null) : null), "html", null, true);
                yield "\" />
                                ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 71
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 71, $this->getSourceContext())->macro_htmlField(...["name",             // line 73
($context["login_field"] ?? null), __("Login")]);
            // line 75
            yield "
                            ";
        }
        // line 77
        yield "
                            ";
        // line 78
        if (( !($context["simple_form"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 78))) {
            // line 79
            yield "                                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/user/user_picture_field.html.twig");
            yield "
                            ";
        } else {
            // line 81
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 81, $this->getSourceContext())->macro_nullField(...[]);
            yield "
                            ";
        }
        // line 83
        yield "
                            ";
        // line 84
        if (( !($context["is_preference_form"] ?? null) && ($context["show_sync_field"] ?? null))) {
            // line 85
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 85, $this->getSourceContext())->macro_htmlField(...["sync_field", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 87
($context["item"] ?? null), "fields", [], "any", false, true, false, 87), "sync_field", [], "array", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["sync_field"] ?? null) : null), Twig\Extension\CoreExtension::constant("Dropdown::EMPTY_VALUE"))) : (Twig\Extension\CoreExtension::constant("Dropdown::EMPTY_VALUE"))), __("Synchronization field")]);
            // line 89
            yield "
                                ";
            // line 90
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 90, $this->getSourceContext())->macro_nullField(...[]);
            yield "
                            ";
        }
        // line 92
        yield "
                            ";
        // line 93
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 93, $this->getSourceContext())->macro_textField(...["realname", (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 93)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["realname"] ?? null) : null), __("Surname"), ["readonly" =>         // line 94
($context["external_auth"] ?? null)]]);
        // line 95
        yield "
                            ";
        // line 96
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 96, $this->getSourceContext())->macro_textField(...["firstname", (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 96)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["firstname"] ?? null) : null), __("First name"), ["readonly" =>         // line 97
($context["external_auth"] ?? null)]]);
        // line 98
        yield "

                            ";
        // line 100
        if ((($tmp = ($context["use_timezones"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 101, $this->getSourceContext())->macro_dropdownArrayField(...["timezone", (($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 101)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["timezone"] ?? null) : null), ($context["timezones"] ?? null), __("Timezone"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["display_emptychoice" => true, "emptylabel" => __("Use server configuration")])]);
            // line 104
            yield "
                            ";
        } elseif ((($tmp = Session::haveRight("config", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "                                ";
            $context["tz_not_config"] = ((__("Timezone usage has not been activated.") . " ") . Twig\Extension\CoreExtension::sprintf(__("Run the \"%1\$s\" command to activate it."), "php bin/console database:enable_timezones"));
            // line 107
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 107, $this->getSourceContext())->macro_htmlField(...["", ($context["tz_not_config"] ?? null), __("Timezone"), ($context["field_options"] ?? null)]);
            yield "
                            ";
        }
        // line 109
        yield "
                            ";
        // line 110
        if ((($tmp =  !($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 111, $this->getSourceContext())->macro_dropdownYesNo(...["is_active", (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 111)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["is_active"] ?? null) : null), __("Active"), ["readonly" =>  !            // line 112
($context["higher_rights"] ?? null), "helper" => (((($tmp =  !            // line 113
($context["higher_rights"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (__("Not enough rights to change this field")) : (""))]]);
            // line 114
            yield "
                            ";
        }
        // line 116
        yield "
                            ";
        // line 117
        if (( !($context["simple_form"] ?? null) &&  !($context["is_preference_form"] ?? null))) {
            // line 118
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 118, $this->getSourceContext())->macro_datetimeField(...["begin_date", (($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 118)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["begin_date"] ?? null) : null), __("Valid since"), ["clearable" => true, "readonly" =>  !            // line 120
($context["higher_rights"] ?? null)]]);
            // line 121
            yield "
                                ";
            // line 122
            yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 122, $this->getSourceContext())->macro_datetimeField(...["end_date", (($_v10 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 122)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["end_date"] ?? null) : null), __("Valid until"), ["clearable" => true, "readonly" =>  !            // line 124
($context["higher_rights"] ?? null)]]);
            // line 125
            yield "
                            ";
        }
        // line 127
        yield "
                            ";
        // line 128
        if ((( !($context["is_preference_form"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 128)) && Session::haveRight("user", Twig\Extension\CoreExtension::constant("User::READAUTHENT")))) {
            // line 129
            yield "                                ";
            $context["auth_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 130
                yield "                                    ";
                yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Auth::getMethodLink", [(($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 130)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["authtype"] ?? null) : null), (($_v12 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 130)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["auths_id"] ?? null) : null)]);
                yield "
                                    ";
                // line 131
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 131)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["date_sync"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 132
                    yield "                                        <br>
                                        ";
                    // line 133
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Last synchronization on %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 133)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["date_sync"] ?? null) : null))), "html", null, true);
                    yield "
                                    ";
                }
                // line 135
                yield "                                    ";
                if ((($tmp = (($_v15 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 135)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["last_login"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 136
                    yield "                                        <br>
                                        ";
                    // line 137
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Last login on %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v16 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 137)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["last_login"] ?? null) : null))), "html", null, true);
                    yield "
                                    ";
                }
                // line 139
                yield "                                    ";
                if ((($tmp = (($_v17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 139)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["user_dn"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 140
                    yield "                                        <br>
                                        ";
                    // line 141
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), __("User DN"), (($_v18 = CoreExtension::getAttribute($this->env, $this->source,                     // line 143
($context["item"] ?? null), "fields", [], "any", false, false, false, 143)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["user_dn"] ?? null) : null)), "html", null, true);
                    // line 144
                    yield "
                                    ";
                }
                // line 146
                yield "                                    ";
                if ((($tmp = (($_v19 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 146)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["is_deleted_ldap"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 147
                    yield "                                        <br>
                                        ";
                    // line 148
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("User missing in LDAP directory"), "html", null, true);
                    yield "
                                    ";
                }
                // line 150
                yield "                                    ";
                if ((($tmp =  !((($_v20 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["2fa"] ?? null) : null) === null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 151
                    yield "                                        <br>
                                        ";
                    // line 152
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("2FA enabled"), "html", null, true);
                    yield "
                                        ";
                    // line 153
                    if ((($tmp = Session::haveRight("user", Twig\Extension\CoreExtension::constant("User::UPDATEAUTHENT"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 154
                        yield "                                            <button type=\"submit\" name=\"disable_2fa\" class=\"btn btn-outline-danger btn-sm ms-1\" data-bs-toggle=\"tooltip\"
                                                    title=\"";
                        // line 155
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("If 2FA is mandatory for this user, they will be required to set it back up the next time they log in."), "html", null, true);
                        yield "\">
                                                ";
                        // line 156
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Disable"), "html", null, true);
                        yield "
                                            </button>
                                        ";
                    }
                    // line 159
                    yield "                                    ";
                }
                // line 160
                yield "                                ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 161
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 161, $this->getSourceContext())->macro_htmlField(...["_auth", ($context["auth_field"] ?? null), __("Authentication")]);
            yield "
                            ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 162
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 163
            yield "                                <input type=\"hidden\" name=\"authtype\" value=\"1\" />
                            ";
        }
        // line 165
        yield "
                            ";
        // line 166
        if (( !($context["simple_form"] ?? null) &&  !($context["is_preference_form"] ?? null))) {
            // line 167
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 167, $this->getSourceContext())->macro_dropdownField(...["UserCategory", "usercategories_id", (($_v21 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 167)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["usercategories_id"] ?? null) : null), _n("Category", "Categories", 1)]);
            yield "
                            ";
        }
        // line 169
        yield "                            ";
        if ((($tmp =  !($context["simple_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 170
            yield "                                ";
            if ((($tmp =  !($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 171
                yield "                                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 171, $this->getSourceContext())->macro_dropdownField(...["UserTitle", "usertitles_id", (($_v22 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 171)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["usertitles_id"] ?? null) : null), _x("person", "Title")]);
                yield "
                                    ";
                // line 172
                yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 172, $this->getSourceContext())->macro_textareaField(...["comment", (($_v23 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 172)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["comment"] ?? null) : null), __("Comments")]);
                yield "
                                ";
            }
            // line 174
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 174, $this->getSourceContext())->macro_textField(...["registration_number", (($_v24 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 174)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["registration_number"] ?? null) : null), __("Administrative number")]);
            yield "
                            ";
        }
        // line 176
        yield "                            ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 177
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 177, $this->getSourceContext())->macro_dropdownField(...["Location", "locations_id", (($_v25 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 177)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), ["entity" =>             // line 178
($context["entities"] ?? null)]]);
            // line 179
            yield "
                            ";
        }
        // line 181
        yield "
                            ";
        // line 182
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 183
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 183, $this->getSourceContext())->macro_smallTitle(...[_n("Authorization", "Authorizations", 1)]);
            yield "
                                ";
            // line 184
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 184, $this->getSourceContext())->macro_dropdownYesNo(...["_is_recursive", 0, __("Recursive")]);
            yield "
                                ";
            // line 185
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 185, $this->getSourceContext())->macro_dropdownField(...["Profile", "_profiles_id", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Profile::getDefault"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Profile", 1)]);
            yield "
                                ";
            // line 186
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 186, $this->getSourceContext())->macro_dropdownField(...["Entity", "_entities_id", ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "any", true, true, false, 186)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "any", false, false, false, 186), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"))), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Entity", 1), ["display_emptychoice" => false, "entity" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveentities")]]);
            // line 189
            yield "
                            ";
        } else {
            // line 191
            yield "                                ";
            if ((($context["higher_rights"] ?? null) || ($context["is_my_form"] ?? null))) {
                // line 192
                yield "                                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 192, $this->getSourceContext())->macro_dropdownArrayField(...["name" => "profiles_id", "value" => (($_v26 = CoreExtension::getAttribute($this->env, $this->source,                 // line 194
($context["item"] ?? null), "fields", [], "any", false, false, false, 194)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["profiles_id"] ?? null) : null), "elements" =>                 // line 195
($context["profiles"] ?? null), "label" => __("Default profile"), "options" => ["display_emptychoice" => true]]);
                // line 200
                yield "
                                ";
            }
            // line 202
            yield "                                ";
            if ((($context["higher_rights"] ?? null) || ($context["is_preference_form"] ?? null))) {
                // line 203
                yield "                                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 203, $this->getSourceContext())->macro_dropdownField(...["Entity", "entities_id", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 203), "entities_id", [], "array", true, true, false, 203)) ? (Twig\Extension\CoreExtension::default((($_v27 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 203)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["entities_id"] ?? null) : null),  -1)) : ( -1)), __("Default entity"), ["toadd" => ["-1" => __("Full structure")], "entity" =>                 // line 207
($context["entities"] ?? null)]]);
                // line 208
                yield "
                                ";
            }
            // line 210
            yield "                                ";
            if ((($tmp = ($context["higher_rights"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 211
                yield "                                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 211, $this->getSourceContext())->macro_dropdownArrayField(...["name" => "groups_id", "value" => (($_v28 = CoreExtension::getAttribute($this->env, $this->source,                 // line 213
($context["item"] ?? null), "fields", [], "any", false, false, false, 213)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["groups_id"] ?? null) : null), "elements" =>                 // line 214
($context["groups"] ?? null), "label" => __("Default group"), "options" => ["display_emptychoice" => true]]);
                // line 219
                yield "
                                    ";
                // line 220
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 220, $this->getSourceContext())->macro_dropdownField(...["User", "users_id_supervisor", (($_v29 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 220)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["users_id_supervisor"] ?? null) : null), __("Supervisor"), ["entity" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "entity_sons" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_recursive"), "used" => [CoreExtension::getAttribute($this->env, $this->source,                 // line 223
($context["item"] ?? null), "getID", [], "method", false, false, false, 223)], "right" => "all"]]);
                // line 225
                yield "
                                ";
            }
            // line 227
            yield "
                                ";
            // line 228
            if ((($tmp = ($context["enable_nickname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 229
                yield "                                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 229, $this->getSourceContext())->macro_textField(...["nickname", (($_v30 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 229)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["nickname"] ?? null) : null), __("Nickname")]);
                yield "
                                ";
            }
            // line 231
            yield "                            ";
        }
        // line 232
        yield "
                            ";
        // line 233
        if ((($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 234
            yield "                                ";
            $context["lang_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 235
                yield "                                    ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showLanguages", ["language", ["value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 236
($context["item"] ?? null), "fields", [], "any", false, true, false, 236), "language", [], "array", true, true, false, 236)) ? (Twig\Extension\CoreExtension::default((($_v31 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 236)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["language"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("language"))) : ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("language")))]]);
                // line 238
                yield "                                ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 239
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 239, $this->getSourceContext())->macro_htmlField(...["lang_dropdown", ($context["lang_dropdown"] ?? null), __("Language")]);
            yield "

                                ";
            // line 241
            if ((($tmp = ($context["is_administrator"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 242
                yield "                                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 242, $this->getSourceContext())->macro_dropdownArrayField(...["use_mode", (($_v32 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 242)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["use_mode"] ?? null) : null), [Twig\Extension\CoreExtension::constant("Session::NORMAL_MODE") => __("Normal"), Twig\Extension\CoreExtension::constant("Session::DEBUG_MODE") => __("Debug")], __("Use GLPI in mode")]);
                // line 245
                yield "
                                ";
            }
            // line 247
            yield "                            ";
        }
        // line 248
        yield "
                            ";
        // line 249
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 249, $this->getSourceContext())->macro_smallTitle(...[__("Contact information")]);
        yield "
                            ";
        // line 250
        $context["emails_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 251
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("UserEmail::showForUser", [($context["item"] ?? null)]), "html", null, true);
            yield "
                                ";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("UserEmail::showAddEmailButton", [($context["item"] ?? null)]), "html", null, true);
            yield "
                            ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 254
        yield "                            ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 254, $this->getSourceContext())->macro_htmlField(...["_useremails", ($context["emails_field"] ?? null), _n("Email", "Emails", Session::getPluralNumber())]);
        yield "
                            ";
        // line 255
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 255, $this->getSourceContext())->macro_textField(...["phone", (($_v33 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 255)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["phone"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone", 1)]);
        yield "
                            ";
        // line 256
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 256, $this->getSourceContext())->macro_textField(...["mobile", (($_v34 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 256)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["mobile"] ?? null) : null), __("Mobile phone")]);
        yield "
                            ";
        // line 257
        if ((($tmp =  !($context["simple_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 258
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 258, $this->getSourceContext())->macro_textField(...["phone2", (($_v35 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 258)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["phone2"] ?? null) : null), __("Phone 2")]);
            yield "
                            ";
        }
        // line 260
        yield "
                            ";
        // line 261
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 261) && ((((array_key_exists("caneditpassword", $context) &&  !(null === $context["caneditpassword"]))) ? ($context["caneditpassword"]) : (false)) || ($context["is_preference_form"] ?? null)))) {
            // line 262
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 262, $this->getSourceContext())->macro_smallTitle(...[__("Passwords and access keys")]);
            yield "
                                ";
            // line 263
            yield $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 263, $this->getSourceContext())->macro_passwordField(...["api_token", (($_v36 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 263)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["api_token"] ?? null) : null), __("API token"), ["can_regenerate" => true, "is_disclosable" => true, "clearable" => false, "is_copyable" => true, "additional_attributes" => ["autocomplete" => "off"]]]);
            // line 271
            yield "
                                ";
            // line 272
            if ((($tmp =  !($context["external_auth"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 273
                yield "                                    ";
                $context["change_pw_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 274
                    yield "                                        ";
                    if ((($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 275
                        yield "                                            <a role=\"button\" class=\"btn btn-outline-secondary btn-sm\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/updatepassword.php"), "html", null, true);
                        yield "\">
                                                <i class=\"ti ti-lock\"></i>
                                                ";
                        // line 277
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change password"), "html", null, true);
                        yield "
                                            </a>
                                        ";
                    } else {
                        // line 280
                        yield "                                            ";
                        yield $macros["modals"]->getTemplateForMacro("macro_modal", $context, 280, $this->getSourceContext())->macro_modal(...[__("Change password"), Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/user/change_other_password.html.twig", ["full_width" => true]), ["id" => ("modal_password_" .                         // line 281
($context["rand_field"] ?? null))]]);
                        // line 282
                        yield "
                                            <script>
                                                \$('#modal_password_";
                        // line 284
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                        yield " input').on('keypress', function(e) {
                                                    // Prevent enter key in password fields in modal from submitting form
                                                    if (e.originalEvent.key === 'Enter') {
                                                        e.preventDefault();
                                                    }
                                                });
                                            </script>
                                            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_password_";
                        // line 291
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                        yield "\">
                                                <i class=\"ti ti-lock\"></i>
                                                ";
                        // line 293
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change password"), "html", null, true);
                        yield "
                                            </button>
                                            <div class=\"text-warning d-none\" data-password-change-pending>
                                                ";
                        // line 296
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Password change pending"), "html", null, true);
                        yield "
                                            </div>
                                            <script>
                                                \$('#modal_password_";
                        // line 299
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                        yield "').on('hide.bs.modal', () => {
                                                    \$('[data-password-change-pending]').toggleClass('d-none', \$('#modal_password_";
                        // line 300
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                        yield " input[name=password]').val() === '');
                                                });
                                            </script>
                                        ";
                    }
                    // line 304
                    yield "                                    ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 305
                yield "                                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 305, $this->getSourceContext())->macro_htmlField(...["_change_pw", ($context["change_pw_field"] ?? null), __("Password")]);
                yield "
                                ";
            }
            // line 307
            yield "                            ";
        }
        // line 308
        yield "                            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 308)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 309
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 309, $this->getSourceContext())->macro_smallTitle(...[__("Passwords and access keys")]);
            yield "
                                <div>
                                    ";
            // line 311
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/user/change_other_password.html.twig");
            yield "
                                </div>
                            ";
        }
        // line 314
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 319
        if ((($tmp =  !($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 320
            yield "            ";
            if (( !array_key_exists("no_form_buttons", $context) || (($context["no_form_buttons"] ?? null) == false))) {
                // line 321
                yield "                ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/buttons.html.twig");
                yield "
            ";
            }
            // line 323
            yield "            ";
            if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formfooter", [], "array", true, true, false, 323) &&  !(null === (($_v37 = ($context["params"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["formfooter"] ?? null) : null)))) ? ((($_v38 = ($context["params"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["formfooter"] ?? null) : null)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 324
                yield "                <div class=\"card-footer mx-n2 mb-n2\">
                    ";
                // line 325
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/dates.html.twig");
                yield "
                </div>
            ";
            }
            // line 328
            yield "        ";
        } else {
            // line 329
            yield "            <div class=\"card-body mx-n2 border-top d-flex flex-row-reverse align-items-start flex-wrap\">
                <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                    <i class=\"ti ti-device-floppy\"></i>
                    <span>";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
            yield "</span>
                </button>
            </div>
        ";
        }
        // line 336
        yield "    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/user/user.html.twig";
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
        return array (  687 => 336,  680 => 332,  675 => 329,  672 => 328,  666 => 325,  663 => 324,  660 => 323,  654 => 321,  651 => 320,  649 => 319,  642 => 314,  636 => 311,  630 => 309,  627 => 308,  624 => 307,  618 => 305,  614 => 304,  607 => 300,  603 => 299,  597 => 296,  591 => 293,  586 => 291,  576 => 284,  572 => 282,  570 => 281,  568 => 280,  562 => 277,  556 => 275,  553 => 274,  550 => 273,  548 => 272,  545 => 271,  543 => 263,  538 => 262,  536 => 261,  533 => 260,  527 => 258,  525 => 257,  521 => 256,  517 => 255,  512 => 254,  506 => 252,  501 => 251,  499 => 250,  495 => 249,  492 => 248,  489 => 247,  485 => 245,  482 => 242,  480 => 241,  474 => 239,  470 => 238,  468 => 236,  466 => 235,  463 => 234,  461 => 233,  458 => 232,  455 => 231,  449 => 229,  447 => 228,  444 => 227,  440 => 225,  438 => 223,  437 => 220,  434 => 219,  432 => 214,  431 => 213,  429 => 211,  426 => 210,  422 => 208,  420 => 207,  418 => 203,  415 => 202,  411 => 200,  409 => 195,  408 => 194,  406 => 192,  403 => 191,  399 => 189,  397 => 186,  393 => 185,  389 => 184,  384 => 183,  382 => 182,  379 => 181,  375 => 179,  373 => 178,  371 => 177,  368 => 176,  362 => 174,  357 => 172,  352 => 171,  349 => 170,  346 => 169,  340 => 167,  338 => 166,  335 => 165,  331 => 163,  329 => 162,  324 => 161,  320 => 160,  317 => 159,  311 => 156,  307 => 155,  304 => 154,  302 => 153,  298 => 152,  295 => 151,  292 => 150,  287 => 148,  284 => 147,  281 => 146,  277 => 144,  275 => 143,  274 => 141,  271 => 140,  268 => 139,  263 => 137,  260 => 136,  257 => 135,  252 => 133,  249 => 132,  247 => 131,  242 => 130,  239 => 129,  237 => 128,  234 => 127,  230 => 125,  228 => 124,  227 => 122,  224 => 121,  222 => 120,  220 => 118,  218 => 117,  215 => 116,  211 => 114,  209 => 113,  208 => 112,  206 => 111,  204 => 110,  201 => 109,  195 => 107,  192 => 106,  188 => 104,  185 => 101,  183 => 100,  179 => 98,  177 => 97,  176 => 96,  173 => 95,  171 => 94,  170 => 93,  167 => 92,  162 => 90,  159 => 89,  157 => 87,  155 => 85,  153 => 84,  150 => 83,  144 => 81,  138 => 79,  136 => 78,  133 => 77,  129 => 75,  127 => 73,  125 => 71,  119 => 69,  114 => 68,  111 => 67,  105 => 65,  102 => 64,  96 => 62,  94 => 61,  84 => 54,  80 => 53,  76 => 51,  74 => 50,  72 => 49,  70 => 48,  68 => 46,  66 => 45,  64 => 43,  62 => 42,  59 => 41,  57 => 39,  56 => 38,  54 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/user/user.html.twig", "/var/www/html/glpi/templates/pages/admin/user/user.html.twig");
    }
}
