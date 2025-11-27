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

/* components/search/controls.html.twig */
class __TwigTemplate_5d7b89b66e0705088ae499c688746233 extends Template
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
        if ((($context["showmassiveactions"] ?? null) && (($context["count"] ?? null) > 0))) {
            // line 34
            yield "    <div class=\"massiveactions-control card-header search-header ps-3 animate__animated animate__faster d-none\">
        ";
            // line 35
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showMassiveActions", [($context["massiveactionparams"] ?? null)]);
            // line 36
            yield "    </div>
";
        }
        // line 38
        yield "
<div class=\"card-header search-header px-1 px-xl-3\">
    ";
        // line 40
        if ((($tmp =  !(((CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_controls", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_controls", [], "any", false, false, false, 40)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_controls", [], "any", false, false, false, 40)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "        <div class=\"search-controls d-flex justify-content-between align-items-center\">

            ";
            // line 43
            $context["mainform"] = (((array_key_exists("mainform", $context) &&  !(null === $context["mainform"]))) ? ($context["mainform"]) : (true));
            // line 44
            yield "            ";
            $context["showaction"] = (((array_key_exists("showaction", $context) &&  !(null === $context["showaction"]))) ? ($context["showaction"]) : (true));
            // line 45
            yield "            ";
            if ((($context["mainform"] ?? null) && ($context["showaction"] ?? null))) {
                // line 46
                yield "                <form
                    name=\"searchform";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["normalized_itemtype"] ?? null), "html", null, true);
                yield "\"
                    class=\"search-form-container needs-validation\"
                    novalidate
                    method=\"get\"
                    action=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["href"] ?? null), "html", null, true);
                yield "\"
                    ";
                // line 52
                if ((($tmp =  !$this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("show_search_form")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 53
                    yield "                        ";
                    // line 58
                    yield "                        data-glpi-search-form
                    ";
                }
                // line 60
                yield "                >
            ";
            }
            // line 62
            yield "            ";
            if ((($tmp =  !(((CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_criteria", [], "any", true, true, false, 62) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_criteria", [], "any", false, false, false, 62)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_criteria", [], "any", false, false, false, 62)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "                <div class=\"primary-controls\">
                <div class=\"btn-group me-1 me-xl-2\">
                    ";
                // line 65
                $context["is_filter_active"] = false;
                // line 66
                yield "                    ";
                if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["active_search_name"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 67
                    yield "                        ";
                    $context["is_filter_active"] = true;
                    // line 68
                    yield "                    ";
                }
                // line 69
                yield "                    ";
                $context["animation_cls"] = "animate__animated animate__zoomIn";
                // line 70
                yield "
                    ";
                // line 71
                $context["active_savedsearch_class"] = (((($tmp = ($context["active_savedsearch"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-active-search") : (""));
                // line 72
                yield "                    <button type=\"button\" class=\"btn btn-icon btn-sm p-1 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_savedsearch_class"] ?? null), "html", null, true);
                yield " btn-ghost-secondary show-saved-searches\"
                        data-itemtype=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "html", null, true);
                yield "\"
                        title=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show saved searches"), "html", null, true);
                yield "\"  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-bookmarks\"></i>
                    </button>
                    ";
                // line 77
                if ((($tmp =  !$this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("show_search_form")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 78
                    yield "                        ";
                    $context["active_filter_class"] = (((($tmp = ($context["is_filter_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-active-search") : ("btn-ghost-secondary"));
                    // line 79
                    yield "                        <button class=\"btn btn-sm py-1 show-search-filters ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_filter_class"] ?? null), "html", null, true);
                    yield " btn-ghost-secondary dropdown-toggle\" type=\"button\"
                                data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">
                            <i class=\"ti ti-list-search\"></i>
                            ";
                    // line 82
                    if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["active_search_name"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 83
                        yield "                                <span class=\"d-none d-xl-inline-block text-truncate\" style=\"max-width: 250px\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_search_name"] ?? null), "html", null, true);
                        yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                    ";
                        // line 84
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_search_name"] ?? null), "html", null, true);
                        yield "
                                </span>
                            ";
                    } else {
                        // line 87
                        yield "                                <span class=\"d-none d-xl-inline-block\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search"), "html", null, true);
                        yield "</span>
                            ";
                    }
                    // line 89
                    yield "                        </button>
                        <div class=\"dropdown-menu dropdown-menu-card ";
                    // line 90
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["animation_cls"] ?? null), "html", null, true);
                    yield "\" style=\"width: max-content; max-width: 100vw;\">
                            ";
                    // line 91
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::showGenericSearch", [($context["itemtype"] ?? null), ($context["original_params"] ?? null)]);
                    // line 92
                    yield "                        </div>
                    ";
                }
                // line 94
                yield "                </div>

                ";
                // line 96
                if (((($_v0 = (($_v1 = ($context["data"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["search"] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["as_map"] ?? null) : null) != 1)) {
                    // line 97
                    yield "                    ";
                    $context["active_sort_class"] = (((($tmp = ($context["active_sort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-active-sort") : (""));
                    // line 98
                    yield "                    <button class=\"btn btn-sm py-1 show-search-sorts ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_sort_class"] ?? null), "html", null, true);
                    yield " btn-ghost-secondary dropdown-toggle me-1 me-xl-2\" type=\"button\"
                                data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">
                        <i class=\"ti ti-arrows-sort\"></i>
                        ";
                    // line 101
                    $context["sort_names"] = (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["active_sort_name"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["active_sort_name"] ?? null)) : (__("Sort")));
                    // line 102
                    yield "                        <span class=\"d-none d-xl-inline-block text-truncate\" style=\"max-width: 250px\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sort_names"] ?? null), "html", null, true);
                    yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                            ";
                    // line 103
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sort_names"] ?? null), "html", null, true);
                    yield "
                        </span>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-card ";
                    // line 106
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["animation_cls"] ?? null), "html", null, true);
                    yield "\" style=\"width: max-content; max-width: 100vw;\">
                        ";
                    // line 107
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::showGenericSort", [($context["itemtype"] ?? null), ($context["original_params"] ?? null)]);
                    // line 108
                    yield "                    </div>
                ";
                }
                // line 110
                yield "            </div>
            ";
            }
            // line 112
            yield "
            ";
            // line 113
            if ((($context["mainform"] ?? null) && ($context["showaction"] ?? null))) {
                // line 114
                yield "                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\">
                </form>
            ";
            }
            // line 117
            yield "
            <div class=\"middle-controls d-flex\">
                ";
            // line 119
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([($context["itemtype"] ?? null), "showSearchStatusArea"]);
            // line 120
            yield "
                ";
            // line 121
            if ((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("search_pagination_on_top")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 122
                yield "                    ";
                if ((((($_v2 = ($context["data"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["display_type"] ?? null) : null) != Twig\Extension\CoreExtension::constant("Search::GLOBAL_SEARCH")) && ((($_v3 = (($_v4 = ($context["data"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["search"] ?? null) : null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["as_map"] ?? null) : null) == 0))) {
                    // line 123
                    yield "                        <div class=\"search-footer flex-grow-1 mx-1 d-none d-xxl-block mb-n2\" style=\"max-width: 650px;\">
                            ";
                    // line 124
                    yield from $this->load("components/pager.html.twig", 124)->unwrap()->yield(CoreExtension::merge($context, ["short_display" => true]));
                    // line 127
                    yield "                        </div>
                    ";
                }
                // line 129
                yield "                ";
            }
            // line 130
            yield "            </div>

            ";
            // line 132
            $context["submit_search_form"] = "this.closest('[data-glpi-search-container]').querySelector('[data-glpi-search-form]').submit()";
            // line 133
            yield "            <div class=\"secondary-controls\">
                ";
            // line 134
            if ((($tmp = ($context["may_be_located"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 135
                yield "                    <div class=\"btn-group me-1 me-xl-2 shadow-none\" role=\"group\">
                        ";
                // line 136
                $context["table_class"] = ((((($_v5 = (($_v6 = ($context["data"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["search"] ?? null) : null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["as_map"] ?? null) : null) == 0)) ? ("btn-ghost-info") : (""));
                // line 137
                yield "                        <input
                            type=\"radio\"
                            class=\"btn-check\"
                            name=\"as_map\"
                            value=\"1\"
                            autocomplete=\"off\"
                            id=\"show_as_table\"
                            onclick=\"toogle('as_map','','',''); ";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["submit_search_form"] ?? null), "html", null, true);
                yield ";\"
                            ";
                // line 145
                yield ((((($_v7 = (($_v8 = ($context["data"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["search"] ?? null) : null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["as_map"] ?? null) : null) == 0)) ? ("checked") : (""));
                yield "
                        >
                            <label class=\"btn btn-icon btn-sm btn-pill px-2 py-1 ";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_class"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show as table"), "html", null, true);
                yield "\"
                                for=\"show_as_table\"
                                data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                <i class=\"ti ti-table\"></i>
                            </label >

                        ";
                // line 153
                $context["located_class"] = ((((($_v9 = (($_v10 = ($context["data"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["search"] ?? null) : null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["as_map"] ?? null) : null) == 1)) ? ("btn-ghost-info") : (""));
                // line 154
                yield "                        <input
                            type=\"radio\"
                            class=\"btn-check\"
                            name=\"as_map\"
                            value=\"1\"
                            autocomplete=\"off\"
                            id=\"show_as_map\"
                            onclick=\"toogle('as_map','','',''); ";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["submit_search_form"] ?? null), "html", null, true);
                yield ";\"
                            ";
                // line 162
                yield ((((($_v11 = (($_v12 = ($context["data"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["search"] ?? null) : null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["as_map"] ?? null) : null) == 1)) ? ("checked") : (""));
                yield "
                        >
                        <label class=\"btn btn-icon btn-sm btn-pill px-2 py-1 ";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["located_class"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show as map"), "html", null, true);
                yield "\"
                            for=\"show_as_map\"
                            data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                            <i class=\"ti ti-map-2\"></i>
                        </label >
                    </div>
                ";
            }
            // line 171
            yield "
                ";
            // line 172
            if ((($tmp = ($context["may_be_browsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 173
                yield "                    <button
                        class=\"btn btn-icon btn-sm ";
                // line 174
                yield ((((($_v13 = (($_v14 = ($context["data"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["search"] ?? null) : null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["browse"] ?? null) : null) == 1)) ? ("btn-secondary") : ("btn-ghost-secondary"));
                yield " me-1 me-xl-2 px-1\"
                        type=\"button\"
                        title=\"";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle browse"), "html", null, true);
                yield "\"
                        data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"top\"
                        onclick=\"toogle('browse','','',''); ";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["submit_search_form"] ?? null), "html", null, true);
                yield ";\"
                    >
                        <i class=\"ti ";
                // line 181
                yield ((((($_v15 = (($_v16 = ($context["data"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["search"] ?? null) : null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["browse"] ?? null) : null) == 1)) ? ("ti-checkbox") : ("ti-square"));
                yield "\"></i>
                        <span class=\"d-flex align-bottom\">
                            <i class=\"ti ti-subtask\"></i>
                        </span>
                    </button>
                ";
            }
            // line 187
            yield "
                ";
            // line 188
            if ((($tmp = ($context["may_be_deleted"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 189
                yield "                    <button
                        class=\"btn btn-icon btn-sm ";
                // line 190
                yield ((((($_v17 = (($_v18 = ($context["data"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["search"] ?? null) : null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["is_deleted"] ?? null) : null) == 1)) ? ("btn-danger") : ("btn-ghost-danger"));
                yield " me-1 me-xl-2 px-1\"
                        type=\"button\"
                        title=\"";
                // line 192
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show the trashbin"), "html", null, true);
                yield "\"
                        data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"top\"
                        onclick=\"toogle('is_deleted','','',''); ";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["submit_search_form"] ?? null), "html", null, true);
                yield ";\"
                    >
                        <i class=\"ti ";
                // line 197
                yield ((((($_v19 = (($_v20 = ($context["data"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["search"] ?? null) : null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["is_deleted"] ?? null) : null) == 1)) ? ("ti-checkbox") : ("ti-square"));
                yield "\"></i>
                        <span class=\"d-flex align-bottom\">
                            <i class=\"ti ti-trash\"></i>
                        </span>
                    </button>
                ";
            }
            // line 203
            yield "
                ";
            // line 204
            if ((($tmp = ($context["may_be_unpublished"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 205
                yield "                    ";
                $context["show_unpublished"] = ((($_v21 = (($_v22 = ($context["data"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["search"] ?? null) : null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["unpublished"] ?? null) : null) == 1);
                // line 206
                yield "                    <button
                        class=\"btn btn-icon btn-sm ";
                // line 207
                yield (((($tmp = ($context["show_unpublished"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-warning") : ("btn-ghost-warning"));
                yield " me-1 me-xl-2 px-1\"
                        type=\"button\"
                        title=\"";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show unpublished"), "html", null, true);
                yield "\"
                        data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"top\"
                        onclick=\"toogle('unpublished','','',''); ";
                // line 212
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["submit_search_form"] ?? null), "html", null, true);
                yield ";\"
                    >
                        <i
                            class=\"ti ";
                // line 215
                yield (((($tmp = ($context["show_unpublished"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ti-checkbox") : ("ti-square"));
                yield "\"
                            data-testid=\"unpublished-";
                // line 216
                yield (((($tmp = ($context["show_unpublished"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("on") : ("off"));
                yield "\"
                        ></i>
                        <span class=\"d-flex align-bottom\">
                            <i class=\"ti ti-eye-off\"></i>
                        </span>
                    </button>
                ";
            }
            // line 223
            yield "

                ";
            // line 225
            if ((($tmp = ($context["can_config"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 226
                yield "                    <button class=\"show_displaypreference_modal  btn btn-sm btn-ghost-secondary\"
                        type=\"button\"
                        title=\"";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select default items to show"), "html", null, true);
                yield "\"
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-table-row\"></i>
                    </button>
                    <template id=\"displaypreference_modal_template";
                // line 232
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\">
                        ";
                // line 233
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/search/displaypreference_modal.html.twig", ["rand" =>                 // line 234
($context["rand"] ?? null), "itemtype" =>                 // line 235
($context["itemtype"] ?? null)]);
                // line 236
                yield "
                    </template>
                ";
            }
            // line 239
            yield "
                ";
            // line 240
            if ((($context["count"] ?? null) > 0)) {
                // line 241
                yield "                    <button class=\"dropdown-toggle btn btn-sm btn-ghost-secondary\" type=\"button\" name=\"export\" id=\"dropdown-export-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\"
                            data-bs-toggle=\"dropdown\" aria-expanded=\"false\" data-bs-popper-config='{\"strategy\":\"fixed\"}'>
                        <span title=\"";
                // line 243
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Export"), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                            <i id=\"export_dropdown_icon\" class=\"ti ti-download\"></i>
                        </span>
                    </button>
                    ";
                // line 247
                $context["exporthref"] = (((($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/report.dynamic.php") . "?") . Twig\Extension\CoreExtension::urlencode(["item_type" =>                 // line 248
($context["itemtype"] ?? null), "sort" =>                 // line 249
($context["sort"] ?? null), "order" =>                 // line 250
($context["order"] ?? null), "start" =>                 // line 251
($context["start"] ?? null)])) . "&") .                 // line 252
($context["posthref"] ?? null));
                // line 253
                yield "                    <div class=\"dropdown-menu\" style=\"z-index: 10001\" aria-labelledby=\"dropdown-export-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\" role=\"menu\">
                        <div role=\"separator\"><h6 class=\"dropdown-header\">";
                // line 254
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Current page"), "html", null, true);
                yield "</h6></div>
                        <a class=\"dropdown-item\" href=\"";
                // line 255
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_LANDSCAPE")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-pdf\"></i>";
                // line 257
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Landscape PDF"), "html", null, true);
                // line 258
                yield "</a>
                        <a class=\"dropdown-item\" href=\"";
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_PORTRAIT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-pdf\"></i>
                            ";
                // line 261
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Portrait PDF"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 263
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::CSV_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-csv\"></i>
                            ";
                // line 265
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("CSV"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 267
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::ODS_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-spreadsheet\"></i>
                            ";
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Spreadsheet (%s)"), "ODS"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::XLSX_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-spreadsheet\"></i>
                            ";
                // line 273
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Spreadsheet (%s)"), "XLSX"), "html", null, true);
                yield "
                        </a>
                        <hr class=\"dropdown-divider\">
                        <div role=\"separator\"><h6 class=\"dropdown-header\">";
                // line 276
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All pages"), "html", null, true);
                yield "</h6></div>
                        <a class=\"dropdown-item\" href=\"";
                // line 277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_LANDSCAPE")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-pdf\"></i>
                            ";
                // line 279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Landscape PDF"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_PORTRAIT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-pdf\"></i>
                            ";
                // line 283
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Portrait PDF"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 285
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::CSV_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-csv\"></i>
                            ";
                // line 287
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("CSV"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 289
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::ODS_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-spreadsheet\"></i>
                            ";
                // line 291
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Spreadsheet (%s)"), "ODS"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 293
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::XLSX_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-spreadsheet\"></i>
                            ";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Spreadsheet (%s)"), "XLSX"), "html", null, true);
                yield "
                        </a>
                        ";
                // line 297
                if ((($context["itemtype"] ?? null) != "Stat")) {
                    // line 298
                    yield "                        <hr class=\"dropdown-divider\">
                        <a class=\"dropdown-item\" href=\"";
                    // line 299
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::NAMES_OUTPUT")), "html", null, true);
                    yield "\"
                           id=\"copy_names_to_clipboard\" role=\"menuitem\">
                            <i class=\"ti ti-copy\"></i>
                            ";
                    // line 302
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Copy names to clipboard"), "html", null, true);
                    yield "
                        </a>
                        ";
                }
                // line 305
                yield "                    </div>
                    <script>
                        // Ugly trick to fix z-index context issue by placing our dropdown at the end of the body
                        \$(\"#dropdown-export-";
                // line 308
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\").on(\"show.bs.dropdown\", function() {
                            \$(document.body).append(\$(\"ul[aria-labelledby=dropdown-export-";
                // line 309
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "]\").detach());
                        });
                    </script>
                ";
            }
            // line 313
            yield "            </div>
        </div>
    ";
        }
        // line 316
        yield "</div>

<script type=\"text/javascript\">
\$(document).ready(function() {
   \$('.show_displaypreference_modal').click(function(e) {
      e.preventDefault();

      // remove old modal
      \$('#displayprefence_modal";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').remove();

      // create new one
      \$('body').append(\$('#displaypreference_modal_template";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').html());
      const modal_el = \$('#displaypreference_modal";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "');
      modal_el.modal('show');
   });

   \$(\"body\").on('hide.bs.modal', '#displaypreference_modal";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "', function() {
      // Try finding a fluid search instance
      const search_display = \$('.ajax-container.search-display-data');
      try {
          if (search_display.length === 1 && search_display.data('js_class') !== undefined) {
              // Trigger a reload of just the results
              search_display.data('js_class').view.refreshResults();
          } else {
              // There is no (or multiple) search results, reload the page
              window.location.reload();
          }
      } catch (err) {
          window.location.reload();
      }
   });

   \$('.default-filter').change(function(event) {
      const search_params = new URLSearchParams(window.location.search);
      if (!\$(this).is(\":checked\")) {
          search_params.set('nodefault', '1');
      } else {
          search_params.delete('nodefault');
      }
      window.location.replace('?' + search_params.toString());
   });

   // Callbacks for copy success/failure
   function copy_success() {
      glpi_toast_info(__('Results copied to clipboard'));
      \$('#export_dropdown_icon').removeClass('spinner-border spinner-border-sm');
      \$('#export_dropdown_icon').addClass('ti-file-download');
   }
   function copy_error() {
      glpi_toast_error(__('Unexpected error'));
      \$('#export_dropdown_icon').removeClass('spinner-border spinner-border-sm');
      \$('#export_dropdown_icon').addClass('ti-file-download');
   }

   \$('#copy_names_to_clipboard').click(function(e) {
      // Get target link
      const link = \$(e.currentTarget).prop('href');

      // Show loading indicator
      \$('#export_dropdown_icon').removeClass('ti-file-download');
      \$('#export_dropdown_icon').addClass('spinner-border spinner-border-sm');

      // Prevent link from working
      e.preventDefault();

      // Get data using ajax
      \$.get(link, function (data) {
         navigator.clipboard.writeText(data).then(copy_success, copy_error);
      }).fail(copy_error);
   });

    // show massive actions control when at least one checkbox is checked
    \$('.massive_action_checkbox').change(function() {
        const nb_ma_checked = \$('.massive_action_checkbox:checked').length;

        if (nb_ma_checked === 0) {
            \$('.massiveactions-control')
                .removeClass('animate__slideInLeft')
                .addClass('animate__slideOutLeft')
        } else {
            \$('.massiveactions-control')
                .removeClass('d-none')
                .removeClass('animate__slideOutLeft')
                .addClass('animate__slideInLeft');
        }
    });
    // also call it on page load
    \$('.massive_action_checkbox').trigger('change');
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/controls.html.twig";
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
        return array (  684 => 332,  677 => 328,  673 => 327,  667 => 324,  657 => 316,  652 => 313,  645 => 309,  641 => 308,  636 => 305,  630 => 302,  624 => 299,  621 => 298,  619 => 297,  614 => 295,  609 => 293,  604 => 291,  599 => 289,  594 => 287,  589 => 285,  584 => 283,  579 => 281,  574 => 279,  569 => 277,  565 => 276,  559 => 273,  554 => 271,  549 => 269,  544 => 267,  539 => 265,  534 => 263,  529 => 261,  524 => 259,  521 => 258,  519 => 257,  515 => 255,  511 => 254,  506 => 253,  504 => 252,  503 => 251,  502 => 250,  501 => 249,  500 => 248,  499 => 247,  492 => 243,  486 => 241,  484 => 240,  481 => 239,  476 => 236,  474 => 235,  473 => 234,  472 => 233,  468 => 232,  461 => 228,  457 => 226,  455 => 225,  451 => 223,  441 => 216,  437 => 215,  431 => 212,  425 => 209,  420 => 207,  417 => 206,  414 => 205,  412 => 204,  409 => 203,  400 => 197,  395 => 195,  389 => 192,  384 => 190,  381 => 189,  379 => 188,  376 => 187,  367 => 181,  362 => 179,  356 => 176,  351 => 174,  348 => 173,  346 => 172,  343 => 171,  331 => 164,  326 => 162,  322 => 161,  313 => 154,  311 => 153,  300 => 147,  295 => 145,  291 => 144,  282 => 137,  280 => 136,  277 => 135,  275 => 134,  272 => 133,  270 => 132,  266 => 130,  263 => 129,  259 => 127,  257 => 124,  254 => 123,  251 => 122,  249 => 121,  246 => 120,  244 => 119,  240 => 117,  233 => 114,  231 => 113,  228 => 112,  224 => 110,  220 => 108,  218 => 107,  214 => 106,  208 => 103,  203 => 102,  201 => 101,  194 => 98,  191 => 97,  189 => 96,  185 => 94,  181 => 92,  179 => 91,  175 => 90,  172 => 89,  166 => 87,  160 => 84,  155 => 83,  153 => 82,  146 => 79,  143 => 78,  141 => 77,  135 => 74,  131 => 73,  126 => 72,  124 => 71,  121 => 70,  118 => 69,  115 => 68,  112 => 67,  109 => 66,  107 => 65,  103 => 63,  100 => 62,  96 => 60,  92 => 58,  90 => 53,  88 => 52,  84 => 51,  77 => 47,  74 => 46,  71 => 45,  68 => 44,  66 => 43,  62 => 41,  60 => 40,  56 => 38,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/controls.html.twig", "/var/www/html/glpi/templates/components/search/controls.html.twig");
    }
}
