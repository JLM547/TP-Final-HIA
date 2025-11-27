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

/* pages/setup/general/general_setup.html.twig */
class __TwigTemplate_210a39f8a879339b26048d11df411c5f extends Template
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
        $context["field_options"] = ["full_width" => true];
        // line 40
        $context["inline_field_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["input_addclass" => "w-auto"]);
        // line 33
        $this->parent = $this->load("pages/setup/general/base_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "
<div class=\"row ps-4\">

    ";
        // line 48
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 48, $this->getSourceContext())->macro_textField(...["url_base", (($_v0 =         // line 50
($context["config"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["url_base"] ?? null) : null), __("URL of the application"),         // line 52
($context["field_options"] ?? null)]);
        // line 53
        yield "

    ";
        // line 55
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 55, $this->getSourceContext())->macro_textareaField(...["text_login", (($_v1 =         // line 57
($context["config"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["text_login"] ?? null) : null), __("Text in the login box"), Twig\Extension\CoreExtension::merge(        // line 59
($context["field_options"] ?? null), ["enable_richtext" => true, "enable_images" => false])]);
        // line 63
        yield "

    ";
        // line 65
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 65, $this->getSourceContext())->macro_textField(...["helpdesk_doc_url", (($_v2 =         // line 67
($context["config"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["helpdesk_doc_url"] ?? null) : null), __("Simplified interface help link"),         // line 69
($context["field_options"] ?? null)]);
        // line 70
        yield "

    ";
        // line 72
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 72, $this->getSourceContext())->macro_textField(...["central_doc_url", (($_v3 =         // line 74
($context["config"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["central_doc_url"] ?? null) : null), __("Standard interface help link"),         // line 76
($context["field_options"] ?? null)]);
        // line 77
        yield "

    ";
        // line 79
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 79, $this->getSourceContext())->macro_numberField(...["decimal_number", (($_v4 =         // line 81
($context["config"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["decimal_number"] ?? null) : null), __("Default decimals limit"), Twig\Extension\CoreExtension::merge(        // line 83
($context["inline_field_options"] ?? null), ["min" => 1, "max" => 4])]);
        // line 87
        yield "

    ";
        // line 89
        yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 89, $this->getSourceContext())->macro_checkboxField(...["use_public_faq", (($_v5 =         // line 91
($context["config"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["use_public_faq"] ?? null) : null), __("Allow FAQ anonymous access"),         // line 93
($context["field_options"] ?? null)]);
        // line 94
        yield "

    ";
        // line 96
        yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 96, $this->getSourceContext())->macro_checkboxField(...["allow_unauthenticated_uploads", (((CoreExtension::getAttribute($this->env, $this->source,         // line 98
($context["config"] ?? null), "allow_unauthenticated_uploads", [], "array", true, true, false, 98) &&  !(null === (($_v6 = ($context["config"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["allow_unauthenticated_uploads"] ?? null) : null)))) ? ((($_v7 = ($context["config"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["allow_unauthenticated_uploads"] ?? null) : null)) : (false)), __("Allow unauthenticated uploads"), Twig\Extension\CoreExtension::merge(        // line 100
($context["field_options"] ?? null), ["helper" => __("Do not use this option if your GLPI is reachable from the internet. Use at your own risk.")])]);
        // line 103
        yield "

</div>

<div class=\"hr-text\">
    <i class=\"ti ti-list\"></i>
    <span>";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dynamic display"), "html", null, true);
        yield "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 114
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 114, $this->getSourceContext())->macro_numberField(...["dropdown_max", (($_v8 =         // line 116
($context["config"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["dropdown_max"] ?? null) : null), __("Page size for dropdown (paging using scroll)"), Twig\Extension\CoreExtension::merge(        // line 118
($context["inline_field_options"] ?? null), ["min" => 1, "max" => 200])]);
        // line 122
        yield "

    ";
        // line 124
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 124, $this->getSourceContext())->macro_dropdownNumberField(...["ajax_limit_count", (($_v9 =         // line 126
($context["config"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["ajax_limit_count"] ?? null) : null), __("Don't show search engine in dropdowns if the number of items is less than"), Twig\Extension\CoreExtension::merge(        // line 128
($context["inline_field_options"] ?? null), ["min" => 1, "max" => 200, "toadd" => ["0" => __("Never")], "width" => "auto"])]);
        // line 134
        yield "
</div>

<div class=\"hr-text\">
    <i class=\"ti ti-search\"></i>
    <span>";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search engine"), "html", null, true);
        yield "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 144
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 144, $this->getSourceContext())->macro_dropdownArrayField(...["allow_search_view", (($_v10 =         // line 146
($context["config"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["allow_search_view"] ?? null) : null), [__("No"), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), __("Yes"), __("last criterion")), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), __("Yes"), __("default criterion"))], __("Items seen"), Twig\Extension\CoreExtension::merge(        // line 153
($context["inline_field_options"] ?? null), ["width" => "auto"])]);
        // line 156
        yield "

    ";
        // line 158
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 158, $this->getSourceContext())->macro_dropdownYesNo(...["allow_search_global", (($_v11 =         // line 160
($context["config"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["allow_search_global"] ?? null) : null), __("Global search"), Twig\Extension\CoreExtension::merge(        // line 162
($context["inline_field_options"] ?? null), ["width" => "auto"])]);
        // line 165
        yield "

    ";
        // line 167
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 167, $this->getSourceContext())->macro_dropdownArrayField(...["allow_search_all", (($_v12 =         // line 169
($context["config"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["allow_search_all"] ?? null) : null), [__("No"), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), __("Yes"), __("last criterion"))], __("All"), Twig\Extension\CoreExtension::merge(        // line 175
($context["inline_field_options"] ?? null), ["width" => "auto"])]);
        // line 178
        yield "

    ";
        // line 180
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 180, $this->getSourceContext())->macro_numberField(...["list_limit_max", (($_v13 =         // line 182
($context["config"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["list_limit_max"] ?? null) : null), __("Default search results limit (page)"), Twig\Extension\CoreExtension::merge(        // line 184
($context["inline_field_options"] ?? null), ["min" => 5, "max" => 200, "step" => 5])]);
        // line 189
        yield "

    ";
        // line 191
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 191, $this->getSourceContext())->macro_numberField(...["cut", (($_v14 =         // line 193
($context["config"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["cut"] ?? null) : null), __("Default characters limit (summary text boxes)"), Twig\Extension\CoreExtension::merge(        // line 195
($context["inline_field_options"] ?? null), ["step" => 50])]);
        // line 198
        yield "

    ";
        // line 200
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 200, $this->getSourceContext())->macro_numberField(...["url_maxlength", (($_v15 =         // line 202
($context["config"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["url_maxlength"] ?? null) : null), __("Default url length limit"), Twig\Extension\CoreExtension::merge(        // line 204
($context["inline_field_options"] ?? null), ["min" => 20, "max" => 80, "step" => 5])]);
        // line 209
        yield "

</div>

<div class=\"hr-text\">
    <i class=\"ti ti-lock\"></i>
    <span>";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Item locks"), "html", null, true);
        yield "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 220
        $context["locks_rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 221
        yield "    ";
        $context["id_lock_use_lock_item"] = ("lock_use_lock_item_" . ($context["locks_rand"] ?? null));
        // line 222
        yield "    ";
        $context["id_lock_lockprofile_id"] = ("dropdown_lock_lockprofile_id" . ($context["locks_rand"] ?? null));
        // line 223
        yield "    ";
        $context["id_lock_item_list_id"] = ("dropdown_lock_item_list" . ($context["locks_rand"] ?? null));
        // line 224
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 224, $this->getSourceContext())->macro_checkboxField(...["lock_use_lock_item", (($_v16 =         // line 226
($context["config"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["lock_use_lock_item"] ?? null) : null), __("Use locks"), Twig\Extension\CoreExtension::merge(        // line 228
($context["field_options"] ?? null), ["id" =>         // line 229
($context["id_lock_use_lock_item"] ?? null)])]);
        // line 231
        yield "

    ";
        // line 233
        $context["lock_options"] = ($context["field_options"] ?? null);
        // line 234
        yield "    ";
        if ((($tmp =  !(($_v17 = ($context["config"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["lock_use_lock_item"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 235
            yield "        ";
            $context["lock_options"] = Twig\Extension\CoreExtension::merge(($context["lock_options"] ?? null), ["disabled" => true]);
            // line 238
            yield "    ";
        }
        // line 239
        yield "
    ";
        // line 240
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 240, $this->getSourceContext())->macro_dropdownField(...["Profile", "lock_lockprofile_id", (($_v18 =         // line 243
($context["config"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["lock_lockprofile_id"] ?? null) : null), __("Profile to be used when locking items"), Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(        // line 245
($context["inline_field_options"] ?? null), ($context["lock_options"] ?? null)), ["width" => "auto", "rand" =>         // line 247
($context["locks_rand"] ?? null), "condition" => ["interface" => "central"]])]);
        // line 252
        yield "

    ";
        // line 254
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 254, $this->getSourceContext())->macro_dropdownArrayField(...["lock_item_list", "", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("ObjectLock::getLockableObjects"), __("List of items to lock"), Twig\Extension\CoreExtension::merge(        // line 259
($context["lock_options"] ?? null), ["multiple" => true, "values" => (($_v19 =         // line 261
($context["config"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["lock_item_list"] ?? null) : null), "rand" =>         // line 262
($context["locks_rand"] ?? null)])]);
        // line 264
        yield "

    <script>
    \$(function(ready){
        \$('#";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_lock_use_lock_item"] ?? null), "html", null, true);
        yield "').change(function(){
            var enabled = this.checked;
            \$('#";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_lock_lockprofile_id"] ?? null), "html", null, true);
        yield "').prop('disabled', !enabled);
            \$('#";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_lock_item_list_id"] ?? null), "html", null, true);
        yield "').prop('disabled', !enabled);
        });
    });
    </script>
</div>

<div class=\"hr-text\">
    <i class=\"ti ti-layout-kanban\"></i>
    <span>";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Project Task State"), "html", null, true);
        yield "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 284
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 284, $this->getSourceContext())->macro_dropdownField(...["ProjectState", "projecttask_unstarted_states_id", ((CoreExtension::getAttribute($this->env, $this->source,         // line 287
($context["config"] ?? null), "projecttask_unstarted_states_id", [], "array", true, true, false, 287)) ? (Twig\Extension\CoreExtension::default((($_v20 = ($context["config"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["projecttask_unstarted_states_id"] ?? null) : null), "0")) : ("0")), __("Status of unstarted tasks"), Twig\Extension\CoreExtension::merge(        // line 289
($context["inline_field_options"] ?? null), ["width" => "auto"])]);
        // line 292
        yield "

    ";
        // line 294
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 294, $this->getSourceContext())->macro_dropdownField(...["ProjectState", "projecttask_inprogress_states_id", ((CoreExtension::getAttribute($this->env, $this->source,         // line 297
($context["config"] ?? null), "projecttask_inprogress_states_id", [], "array", true, true, false, 297)) ? (Twig\Extension\CoreExtension::default((($_v21 = ($context["config"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["projecttask_inprogress_states_id"] ?? null) : null), "0")) : ("0")), __("Status of tasks in progress"), Twig\Extension\CoreExtension::merge(        // line 299
($context["inline_field_options"] ?? null), ["width" => "auto"])]);
        // line 302
        yield "

    ";
        // line 304
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 304, $this->getSourceContext())->macro_dropdownField(...["ProjectState", "projecttask_completed_states_id", ((CoreExtension::getAttribute($this->env, $this->source,         // line 307
($context["config"] ?? null), "projecttask_completed_states_id", [], "array", true, true, false, 307)) ? (Twig\Extension\CoreExtension::default((($_v22 = ($context["config"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["projecttask_completed_states_id"] ?? null) : null), "0")) : ("0")), __("Status of tasks done"), Twig\Extension\CoreExtension::merge(        // line 309
($context["inline_field_options"] ?? null), ["width" => "auto"])]);
        // line 312
        yield "
</div>

<div class=\"hr-text\">
    <i class=\"ti ti-login\"></i>
    <span>";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Auto Login"), "html", null, true);
        yield "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 322
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownTimestampField", $context, 322, $this->getSourceContext())->macro_dropdownTimestampField(...["login_remember_time", (($_v23 =         // line 324
($context["config"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["login_remember_time"] ?? null) : null), __("Time to allow \"Remember Me\""), Twig\Extension\CoreExtension::merge(        // line 326
($context["inline_field_options"] ?? null), ["emptylabel" => __("Disabled"), "min" => 0, "max" => (Twig\Extension\CoreExtension::constant("MONTH_TIMESTAMP") * 2), "step" => Twig\Extension\CoreExtension::constant("DAY_TIMESTAMP"), "toadd" => [Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP"), (Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP") * 2), (Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP") * 6), (Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP") * 12)], "width" => "auto"])]);
        // line 339
        yield "

    ";
        // line 341
        yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 341, $this->getSourceContext())->macro_checkboxField(...["login_remember_default", (($_v24 =         // line 343
($context["config"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["login_remember_default"] ?? null) : null), __("Default state of checkbox"),         // line 345
($context["field_options"] ?? null)]);
        // line 346
        yield "

    ";
        // line 348
        yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 348, $this->getSourceContext())->macro_checkboxField(...["display_login_source", (($_v25 =         // line 350
($context["config"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["display_login_source"] ?? null) : null), __("Display source dropdown on login page"),         // line 352
($context["field_options"] ?? null)]);
        // line 353
        yield "
</div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/general_setup.html.twig";
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
        return array (  363 => 353,  361 => 352,  360 => 350,  359 => 348,  355 => 346,  353 => 345,  352 => 343,  351 => 341,  347 => 339,  345 => 326,  344 => 324,  343 => 322,  335 => 317,  328 => 312,  326 => 309,  325 => 307,  324 => 304,  320 => 302,  318 => 299,  317 => 297,  316 => 294,  312 => 292,  310 => 289,  309 => 287,  308 => 284,  300 => 279,  289 => 271,  285 => 270,  280 => 268,  274 => 264,  272 => 262,  271 => 261,  270 => 259,  269 => 254,  265 => 252,  263 => 247,  262 => 245,  261 => 243,  260 => 240,  257 => 239,  254 => 238,  251 => 235,  248 => 234,  246 => 233,  242 => 231,  240 => 229,  239 => 228,  238 => 226,  236 => 224,  233 => 223,  230 => 222,  227 => 221,  225 => 220,  217 => 215,  209 => 209,  207 => 204,  206 => 202,  205 => 200,  201 => 198,  199 => 195,  198 => 193,  197 => 191,  193 => 189,  191 => 184,  190 => 182,  189 => 180,  185 => 178,  183 => 175,  182 => 169,  181 => 167,  177 => 165,  175 => 162,  174 => 160,  173 => 158,  169 => 156,  167 => 153,  166 => 146,  165 => 144,  157 => 139,  150 => 134,  148 => 128,  147 => 126,  146 => 124,  142 => 122,  140 => 118,  139 => 116,  138 => 114,  130 => 109,  122 => 103,  120 => 100,  119 => 98,  118 => 96,  114 => 94,  112 => 93,  111 => 91,  110 => 89,  106 => 87,  104 => 83,  103 => 81,  102 => 79,  98 => 77,  96 => 76,  95 => 74,  94 => 72,  90 => 70,  88 => 69,  87 => 67,  86 => 65,  82 => 63,  80 => 59,  79 => 57,  78 => 55,  74 => 53,  72 => 52,  71 => 50,  70 => 48,  65 => 45,  58 => 44,  53 => 33,  51 => 40,  49 => 36,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/general_setup.html.twig", "/var/www/html/glpi/templates/pages/setup/general/general_setup.html.twig");
    }
}
