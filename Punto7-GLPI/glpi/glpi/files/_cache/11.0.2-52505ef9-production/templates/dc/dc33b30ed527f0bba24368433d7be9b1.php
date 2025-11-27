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

/* components/datatable.html.twig */
class __TwigTemplate_784f9354140af5eff11f88e297c5e084 extends Template
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
        $macros["alerts"] = $this->macros["alerts"] = $this->load("components/alerts_macros.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        $context["datatable_id"] = ((array_key_exists("datatable_id", $context)) ? (Twig\Extension\CoreExtension::default(($context["datatable_id"] ?? null), ("datatable" . Twig\Extension\CoreExtension::random($this->env->getCharset())))) : (("datatable" . Twig\Extension\CoreExtension::random($this->env->getCharset()))));
        // line 36
        $context["filters"] = ((array_key_exists("filters", $context)) ? (Twig\Extension\CoreExtension::default(($context["filters"] ?? null), [])) : ([]));
        // line 37
        $context["additional_params"] = ((array_key_exists("additional_params", $context)) ? (Twig\Extension\CoreExtension::default(($context["additional_params"] ?? null), "")) : (""));
        // line 38
        $context["sort"] = ((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default(($context["sort"] ?? null), null)) : (null));
        // line 39
        $context["nosort"] = ((array_key_exists("nosort", $context)) ? (Twig\Extension\CoreExtension::default(($context["nosort"] ?? null), false)) : (false));
        // line 40
        $context["order"] = ((array_key_exists("order", $context)) ? (Twig\Extension\CoreExtension::default(($context["order"] ?? null), "ASC")) : ("ASC"));
        // line 41
        $context["csv_url"] = ((array_key_exists("csv_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["csv_url"] ?? null), "")) : (""));
        // line 42
        $context["footers"] = ((array_key_exists("footers", $context)) ? (Twig\Extension\CoreExtension::default(($context["footers"] ?? null), [])) : ([]));
        // line 43
        $context["showmassiveactions"] = ((array_key_exists("showmassiveactions", $context)) ? (Twig\Extension\CoreExtension::default(($context["showmassiveactions"] ?? null), false)) : (false));
        // line 44
        yield "
";
        // line 45
        $context["use_pager"] = ((array_key_exists("use_pager", $context)) ? (Twig\Extension\CoreExtension::default(($context["use_pager"] ?? null), ((array_key_exists("start", $context) && array_key_exists("limit", $context)) && array_key_exists("filtered_number", $context)))) : (((array_key_exists("start", $context) && array_key_exists("limit", $context)) && array_key_exists("filtered_number", $context))));
        // line 46
        yield "
";
        // line 48
        $context["use_pager"] = ((array_key_exists("nopager", $context)) ? ( !($context["nopager"] ?? null)) : (($context["use_pager"] ?? null)));
        // line 49
        yield "
";
        // line 50
        if (((($context["total_number"] ?? null) < 1) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) == 0))) {
            // line 51
            yield "    <table id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["datatable_id"] ?? null), "html", null, true);
            yield "\" class=\"table\">
        <thead>
        ";
            // line 53
            if ((array_key_exists("super_header", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["super_header"] ?? null)))) {
                // line 54
                yield "            ";
                $context["super_header_label"] = ((is_array(($context["super_header"] ?? null))) ? ((($_v0 = ($context["super_header"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["label"] ?? null) : null)) : (($context["super_header"] ?? null)));
                // line 55
                yield "            ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["super_header_label"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 56
                    yield "                ";
                    $context["super_header_raw"] = ((is_array(($context["super_header"] ?? null))) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["super_header"] ?? null), "is_raw", [], "array", true, true, false, 56) &&  !(null === (($_v1 = ($context["super_header"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["is_raw"] ?? null) : null)))) ? ((($_v2 = ($context["super_header"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["is_raw"] ?? null) : null)) : (false))) : (false));
                    // line 57
                    yield "                <tr>
                    <th colspan=\"1\">
                        ";
                    // line 59
                    yield (((($tmp = ($context["super_header_raw"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["super_header_label"] ?? null)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["super_header_label"] ?? null), "html", null, true)));
                    yield "
                    </th>
                </tr>
            ";
                }
                // line 63
                yield "        ";
            }
            // line 64
            yield "        </thead>
        <tbody>
            <tr>
                <td>
                    <div class=\"alert alert-info\">
                        ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No results found"), "html", null, true);
            yield "
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
";
        } else {
            // line 76
            yield "    ";
            $context["total_cols"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["columns"] ?? null)) + (((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0))) + (((($tmp = (((array_key_exists("nofilter", $context) &&  !(null === $context["nofilter"]))) ? ($context["nofilter"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (0) : (1)));
            // line 77
            yield "    ";
            if ((($tmp = ($context["use_pager"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/pager.html.twig", ["count" =>                 // line 79
($context["filtered_number"] ?? null), "additional_params" => ((((                // line 80
($context["additional_params"] ?? null) . "&sort=") . ($context["sort"] ?? null)) . "&order=") . ($context["order"] ?? null))]);
                // line 81
                yield "
    ";
            }
            // line 83
            yield "
    <div class=\"table-responsive ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("container_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["container_class"] ?? null), "")) : ("")), "html", null, true);
            yield "\" ";
            if ((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["massiveactionparams"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["container"] ?? null) : null), "html", null, true);
                yield "\" ";
            }
            yield ">
        ";
            // line 85
            if ((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "            <div class=\"mb-2\">
                ";
                // line 87
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showMassiveActions", [Twig\Extension\CoreExtension::merge(["action_button_classes" => "btn btn-sm btn-outline-secondary me-2"], ((array_key_exists("massiveactionparams", $context)) ? (Twig\Extension\CoreExtension::default(($context["massiveactionparams"] ?? null), [])) : ([])))]);
                // line 88
                yield "            </div>
        ";
            }
            // line 90
            yield "        <table id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["datatable_id"] ?? null), "html", null, true);
            yield "\" class=\"table ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("table_class_style", $context)) ? (Twig\Extension\CoreExtension::default(($context["table_class_style"] ?? null), "table-hover")) : ("table-hover")), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("datatable_aria_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["datatable_aria_label"] ?? null), "")) : ("")), "html", null, true);
            yield "\">
            <thead>
                ";
            // line 92
            if ((array_key_exists("super_header", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["super_header"] ?? null)))) {
                // line 93
                yield "                    ";
                $context["super_header_label"] = ((is_array(($context["super_header"] ?? null))) ? ((($_v4 = ($context["super_header"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["label"] ?? null) : null)) : (($context["super_header"] ?? null)));
                // line 94
                yield "                    ";
                $context["super_header_raw"] = ((is_array(($context["super_header"] ?? null))) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["super_header"] ?? null), "is_raw", [], "array", true, true, false, 94) &&  !(null === (($_v5 = ($context["super_header"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["is_raw"] ?? null) : null)))) ? ((($_v6 = ($context["super_header"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["is_raw"] ?? null) : null)) : (false))) : (false));
                // line 95
                yield "                    <tr>
                        ";
                // line 96
                if ((($tmp =  !(($context["super_header_raw"] ?? null) === "th_elements")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<th colspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_cols"] ?? null), "html", null, true);
                    yield "\">";
                }
                // line 97
                yield "                            ";
                yield (((($tmp = ($context["super_header_raw"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["super_header_label"] ?? null)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["super_header_label"] ?? null), "html", null, true)));
                yield "
                        ";
                // line 98
                if ((($tmp =  !(($context["super_header_raw"] ?? null) === "th_elements")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "</th>";
                }
                // line 99
                yield "                    </tr>
                ";
            }
            // line 101
            yield "                ";
            if (( !array_key_exists("no_header", $context) || (($context["no_header"] ?? null) == false))) {
                // line 102
                yield "                    <tr>
                        ";
                // line 103
                if ((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 104
                    yield "                            <th style=\"width: 30px;\">
                                <div>
                                    <input class=\"form-check-input massive_action_checkbox\" type=\"checkbox\" id=\"checkall_";
                    // line 106
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = ($context["massiveactionparams"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["container"] ?? null) : null), "html", null, true);
                    yield "\"
                                        value=\"\" aria-label=\"";
                    // line 107
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Check all"), "html", null, true);
                    yield "\"
                                        onclick=\"checkAsCheckboxes(this, '";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = ($context["massiveactionparams"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["container"] ?? null) : null), "js"), "html", null, true);
                    yield "', '.massive_action_checkbox');\" />
                                </div>
                            </th>
                        ";
                }
                // line 112
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
                foreach ($context['_seq'] as $context["colkey"] => $context["column"]) {
                    // line 113
                    yield "                            ";
                    $context["column_label"] = ((is_array($context["column"])) ? ((($_v9 = $context["column"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["label"] ?? null) : null)) : ($context["column"]));
                    // line 114
                    yield "                            ";
                    $context["raw_header"] = ((is_array($context["column"])) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "raw_header", [], "array", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default((($_v10 = $context["column"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["raw_header"] ?? null) : null), false)) : (false))) : (false));
                    // line 115
                    yield "                            ";
                    $context["sort_icon"] = "";
                    // line 116
                    yield "                            ";
                    $context["new_order"] = "DESC";
                    // line 117
                    yield "                            ";
                    if ((($context["sort"] ?? null) == $context["colkey"])) {
                        // line 118
                        yield "                                ";
                        $context["sort_icon"] = (((($context["order"] ?? null) == "ASC")) ? ("ti ti-sort-ascending") : ((((($context["order"] ?? null) == "DESC")) ? ("ti ti-sort-descending") : (""))));
                        // line 119
                        yield "                                ";
                        $context["new_order"] = (((($context["order"] ?? null) == "ASC")) ? ("DESC") : ("ASC"));
                        // line 120
                        yield "                            ";
                    }
                    // line 121
                    yield "
                            ";
                    // line 122
                    $context["sort_href"] = (((((("javascript:reloadTab('sort=" . $context["colkey"]) . "&order=") . ($context["new_order"] ?? null)) . "&") . ($context["additional_params"] ?? null)) . "');");
                    // line 123
                    yield "
                            <th>
                                ";
                    // line 125
                    if (( !($context["nosort"] ?? null) &&  !(is_array($context["column"]) && CoreExtension::getAttribute($this->env, $this->source, $context["column"], "nosort", [], "array", true, true, false, 125)))) {
                        // line 126
                        yield "                                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sort_href"] ?? null), "html", null, true);
                        yield "\">
                                    <i class=\"";
                        // line 127
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sort_icon"] ?? null), "html", null, true);
                        yield "\"></i>
                                ";
                    }
                    // line 129
                    yield "                                <span>";
                    yield (((($tmp = ($context["raw_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["column_label"] ?? null)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_label"] ?? null), "html", null, true)));
                    yield "</span>
                                ";
                    // line 130
                    if (( !($context["nosort"] ?? null) &&  !(is_array($context["column"]) && CoreExtension::getAttribute($this->env, $this->source, $context["column"], "nosort", [], "array", true, true, false, 130)))) {
                        // line 131
                        yield "                                    </a>
                                ";
                    }
                    // line 133
                    yield "                            </th>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['colkey'], $context['column'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                yield "
                       ";
                // line 136
                if (( !array_key_exists("nofilter", $context) || Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["csv_url"] ?? null)))) {
                    // line 137
                    yield "                           <th>
                               <span class=\"float-end log-toolbar mb-0\">
                                   ";
                    // line 139
                    if ((($tmp =  !array_key_exists("nofilter", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 140
                        yield "                                       <button class=\"btn btn-sm show_filters ";
                        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0)) ? ("btn-secondary active") : ("btn-outline-secondary"));
                        yield "\">
                                           <i class=\"ti ti-filter\"></i>
                                           <span class=\"d-none d-xl-block\">";
                        // line 142
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Filter"), "html", null, true);
                        yield "</span>
                                       </button>
                                   ";
                    }
                    // line 145
                    yield "                                   ";
                    if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["csv_url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 146
                        yield "                                       <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csv_url"] ?? null), "html", null, true);
                        yield "\" class=\"btn btn-sm text-capitalize btn-outline-secondary\">
                                           <i class=\"ti ti-download\"></i>
                                           <span class=\"d-none d-xl-block\">";
                        // line 148
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Export"), "html", null, true);
                        yield "</span>
                                       </a>
                                   ";
                    }
                    // line 151
                    yield "                               </span>
                           </th>
                         ";
                }
                // line 154
                yield "                    </tr>
                ";
            }
            // line 156
            yield "                ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0)) {
                // line 157
                yield "                    <tr class=\"filter_row\">
                        ";
                // line 158
                if ((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 159
                    yield "                            <td></td>
                        ";
                }
                // line 161
                yield "                        <td style=\"display: none\">
                            <input type=\"hidden\" name=\"filters[active]\" value=\"1\" />
                            <input type=\"hidden\" name=\"items_id\" value=\"";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["items_id"] ?? null), "html", null, true);
                yield "\" />
                        </td>
                        ";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
                foreach ($context['_seq'] as $context["colkey"] => $context["colum"]) {
                    // line 166
                    yield "                            ";
                    $context["formatter"] = Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, $context["colum"], "filter_formatter", [], "array", true, true, false, 166)) ? (Twig\Extension\CoreExtension::default((($_v11 = $context["colum"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["filter_formatter"] ?? null) : null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["formatters"] ?? null), $context["colkey"], [], "array", true, true, false, 166)) ? (Twig\Extension\CoreExtension::default((($_v12 = ($context["formatters"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[$context["colkey"]] ?? null) : null), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["formatters"] ?? null), $context["colkey"], [], "array", true, true, false, 166)) ? (Twig\Extension\CoreExtension::default((($_v13 = ($context["formatters"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[$context["colkey"]] ?? null) : null), "")) : ("")))), "");
                    // line 167
                    yield "                            <td>
                                ";
                    // line 168
                    if (( !is_array($context["colum"]) || (((CoreExtension::getAttribute($this->env, $this->source, $context["colum"], "no_filter", [], "array", true, true, false, 168)) ? (Twig\Extension\CoreExtension::default((($_v14 = $context["colum"]) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["no_filter"] ?? null) : null), false)) : (false)) == false))) {
                        // line 169
                        yield "                                    ";
                        if (((($context["formatter"] ?? null) == "array") && CoreExtension::getAttribute($this->env, $this->source, ($context["columns_values"] ?? null), $context["colkey"], [], "array", true, true, false, 169))) {
                            // line 170
                            yield "                                           <select name=\"filters[";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["colkey"], "html", null, true);
                            yield "][]\"
                                                class=\"form-select filter-select-multiple\" multiple>
                                            ";
                            // line 172
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable((($_v15 = ($context["columns_values"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[$context["colkey"]] ?? null) : null));
                            foreach ($context['_seq'] as $context["field"] => $context["value"]) {
                                // line 173
                                yield "                                                <option value=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                                yield "\" ";
                                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), $context["colkey"], [], "array", true, true, false, 173) && CoreExtension::inFilter($context["field"], (($_v16 = ($context["filters"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[$context["colkey"]] ?? null) : null)))) ? ("selected") : (""));
                                yield ">
                                                    ";
                                // line 174
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                                yield "
                                                </option>
                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['field'], $context['value'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 177
                            yield "                                        </select>
                                    ";
                        } elseif ((                        // line 178
($context["formatter"] ?? null) == "datetime")) {
                            // line 179
                            yield "                                        ";
                            yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showDateTimeField", [(("filters[" .                             // line 180
$context["colkey"]) . "]"), ["value" => (((CoreExtension::getAttribute($this->env, $this->source,                             // line 182
($context["filters"] ?? null), $context["colkey"], [], "array", true, true, false, 182) &&  !(null === (($_v17 = ($context["filters"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[$context["colkey"]] ?? null) : null)))) ? ((($_v18 = ($context["filters"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[$context["colkey"]] ?? null) : null)) : ("")), "display" => false]]);
                            // line 185
                            yield "
                                    ";
                        } elseif ((                        // line 186
($context["formatter"] ?? null) == "date")) {
                            // line 187
                            yield "                                        ";
                            yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showDateField", [(("filters[" .                             // line 188
$context["colkey"]) . "]"), ["value" => (((CoreExtension::getAttribute($this->env, $this->source,                             // line 190
($context["filters"] ?? null), $context["colkey"], [], "array", true, true, false, 190) &&  !(null === (($_v19 = ($context["filters"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[$context["colkey"]] ?? null) : null)))) ? ((($_v20 = ($context["filters"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[$context["colkey"]] ?? null) : null)) : ("")), "display" => false]]);
                            // line 193
                            yield "
                                    ";
                        } elseif ((is_string($_v21 =                         // line 194
($context["formatter"] ?? null)) && is_string($_v22 = "progress") && str_starts_with($_v21, $_v22))) {
                            // line 195
                            yield "                                        <input type=\"range\" class=\"form-range\"
                                            name=\"filters[";
                            // line 196
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["colkey"], "html", null, true);
                            yield "]\"
                                            value=\"";
                            // line 197
                            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), $context["colkey"], [], "array", true, true, false, 197) &&  !(null === (($_v23 = ($context["filters"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[$context["colkey"]] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v24 = ($context["filters"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[$context["colkey"]] ?? null) : null), "html", null, true)) : (0));
                            yield "\"
                                            min=\"0\" max=\"100\" step=\"1\">
                                    ";
                        } elseif ((                        // line 199
($context["formatter"] ?? null) == "avatar")) {
                            // line 200
                            yield "                                        ";
                            // line 201
                            yield "                                    ";
                        } elseif ((($context["formatter"] ?? null) == "yesno")) {
                            // line 202
                            yield "                                        <select name=\"filters[";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["colkey"], "html", null, true);
                            yield "]\" class=\"form-select\">
                                            <option value=\"\">";
                            // line 203
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All"), "html", null, true);
                            yield "</option>
                                            <option value=\"1\" ";
                            // line 204
                            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), $context["colkey"], [], "array", true, true, false, 204) &&  !(null === (($_v25 = ($context["filters"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[$context["colkey"]] ?? null) : null)))) ? ((($_v26 = ($context["filters"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[$context["colkey"]] ?? null) : null)) : ("")) == "1")) ? ("selected") : (""));
                            yield ">
                                                ";
                            // line 205
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Yes"), "html", null, true);
                            yield "
                                            </option>
                                            <option value=\"0\" ";
                            // line 207
                            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), $context["colkey"], [], "array", true, true, false, 207) &&  !(null === (($_v27 = ($context["filters"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[$context["colkey"]] ?? null) : null)))) ? ((($_v28 = ($context["filters"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[$context["colkey"]] ?? null) : null)) : ("")) == "0")) ? ("selected") : (""));
                            yield ">
                                                ";
                            // line 208
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No"), "html", null, true);
                            yield "
                                            </option>
                                        </select>
                                    ";
                        } else {
                            // line 212
                            yield "                                        <input type=\"text\" class=\"form-control\"
                                            name=\"filters[";
                            // line 213
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["colkey"], "html", null, true);
                            yield "]\"
                                            value=\"";
                            // line 214
                            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), $context["colkey"], [], "array", true, true, false, 214) &&  !(null === (($_v29 = ($context["filters"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[$context["colkey"]] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v30 = ($context["filters"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[$context["colkey"]] ?? null) : null), "html", null, true)) : (""));
                            yield "\">
                                    ";
                        }
                        // line 216
                        yield "                                ";
                    }
                    // line 217
                    yield "                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['colkey'], $context['colum'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 219
                yield "                    </tr>
                ";
            }
            // line 221
            yield "            </thead>
            <tbody>
                ";
            // line 223
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entries"] ?? null)) > 0)) {
                // line 224
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["entries"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 225
                    yield "                        ";
                    $context["row_massiveactions"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "showmassiveactions", [], "array", true, true, false, 225)) ? (Twig\Extension\CoreExtension::default((($_v31 = $context["entry"]) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["showmassiveactions"] ?? null) : null), ($context["showmassiveactions"] ?? null))) : (($context["showmassiveactions"] ?? null)));
                    // line 226
                    yield "                        <tr
                            class=\"";
                    // line 227
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 227)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-transparent") : (""));
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), "")) : ("")), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "row_class", [], "array", true, true, false, 227)) ? (Twig\Extension\CoreExtension::default((($_v32 = $context["entry"]) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["row_class"] ?? null) : null), "")) : ("")), "html", null, true);
                    yield "\"
                            ";
                    // line 228
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "itemtype", [], "array", true, true, false, 228)) {
                        // line 229
                        yield "                                data-itemtype=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v33 = $context["entry"]) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["itemtype"] ?? null) : null), "html", null, true);
                        yield "\"
                            ";
                    }
                    // line 231
                    yield "                            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "array", true, true, false, 231)) {
                        // line 232
                        yield "                                data-id=\"";
                        yield (((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "array", true, true, false, 232) &&  !(null === (($_v34 = $context["entry"]) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["id"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v35 = $context["entry"]) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["id"] ?? null) : null), "html", null, true)) : (""));
                        yield "\"
                            ";
                    }
                    // line 234
                    yield "                        >
                            ";
                    // line 235
                    if ((($tmp = ($context["row_massiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 236
                        yield "                                <td style=\"width: 10px\">
                                    ";
                        // line 237
                        if (( !CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "skip_ma", [], "array", true, true, false, 237) || ((($_v36 = $context["entry"]) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["skip_ma"] ?? null) : null) == false))) {
                            // line 238
                            yield "                                        <input class=\"form-check-input massive_action_checkbox\" type=\"checkbox\" data-glpicore-ma-tags=\"common\"
                                               value=\"1\" aria-label=\"";
                            // line 239
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select item"), "html", null, true);
                            yield "\"
                                               name=\"item[";
                            // line 240
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v37 = $context["entry"]) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["itemtype"] ?? null) : null), "html", null, true);
                            yield "][";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v38 = $context["entry"]) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["id"] ?? null) : null), "html", null, true);
                            yield "]\" />
                                    ";
                        }
                        // line 242
                        yield "                                </td>
                            ";
                    }
                    // line 244
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
                    foreach ($context['_seq'] as $context["colkey"] => $context["colum"]) {
                        // line 245
                        yield "                                ";
                        if (CoreExtension::inFilter($context["colkey"], Twig\Extension\CoreExtension::keys($context["entry"]))) {
                            // line 246
                            yield "                                    ";
                            $context["colspan"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], ($context["colkey"] . "_colspan"), [], "array", true, true, false, 246)) ? (Twig\Extension\CoreExtension::default((($_v39 = $context["entry"]) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[($context["colkey"] . "_colspan")] ?? null) : null), 1)) : (1));
                            // line 247
                            yield "                                    ";
                            $context["aria_label"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], ($context["colkey"] . "_aria_label"), [], "array", true, true, false, 247)) ? (Twig\Extension\CoreExtension::default((($_v40 = $context["entry"]) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40[($context["colkey"] . "_aria_label")] ?? null) : null), "")) : (""));
                            // line 248
                            yield "                                    <td colspan=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["colspan"] ?? null), "html", null, true);
                            yield "\" aria-label=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["aria_label"] ?? null), "html", null, true);
                            yield "\">

                                        ";
                            // line 250
                            $context["formatter"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["formatters"] ?? null), $context["colkey"], [], "array", true, true, false, 250) &&  !(null === (($_v41 = ($context["formatters"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41[$context["colkey"]] ?? null) : null)))) ? ((($_v42 = ($context["formatters"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[$context["colkey"]] ?? null) : null)) : (""));
                            // line 251
                            yield "
                                        ";
                            // line 252
                            if ((($context["formatter"] ?? null) == "maintext")) {
                                // line 253
                                yield "                                            <span class=\"d-inline-block bg-blue-lt p-1 text-truncate\"
                                                title=\"";
                                // line 254
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v43 = $context["entry"]) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43[$context["colkey"]] ?? null) : null), "html", null, true);
                                yield "\"
                                                data-bs-toggle=\"tooltip\"
                                                style=\"max-width: 250px;\">
                                                ";
                                // line 257
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v44 = $context["entry"]) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[$context["colkey"]] ?? null) : null), "html", null, true);
                                yield "
                                            </span>
                                        ";
                            } elseif ((                            // line 259
($context["formatter"] ?? null) == "longtext")) {
                                // line 260
                                yield "                                            <span class=\"d-inline-block text-truncate\"
                                                title=\"";
                                // line 261
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v45 = $context["entry"]) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45[$context["colkey"]] ?? null) : null), "html", null, true);
                                yield "\"
                                                data-bs-toggle=\"tooltip\"
                                                style=\"max-width: 250px;\">
                                                ";
                                // line 264
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v46 = $context["entry"]) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46[$context["colkey"]] ?? null) : null), "html", null, true);
                                yield "
                                            </span>
                                        ";
                            } elseif ((is_string($_v47 =                             // line 266
($context["formatter"] ?? null)) && is_string($_v48 = "progress") && str_starts_with($_v47, $_v48))) {
                                // line 267
                                yield "                                            ";
                                yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getProgressBar((($_v49 = $context["entry"]) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49[$context["colkey"]] ?? null) : null));
                                yield "
                                        ";
                            } elseif ((                            // line 268
($context["formatter"] ?? null) == "date")) {
                                // line 269
                                yield "                                            ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDate((($_v50 = $context["entry"]) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50[$context["colkey"]] ?? null) : null)), "html", null, true);
                                yield "
                                        ";
                            } elseif ((                            // line 270
($context["formatter"] ?? null) == "datetime")) {
                                // line 271
                                yield "                                            ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v51 = $context["entry"]) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51[$context["colkey"]] ?? null) : null)), "html", null, true);
                                yield "
                                        ";
                            } elseif ((                            // line 272
($context["formatter"] ?? null) == "duration")) {
                                // line 273
                                yield "                                            ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration((($_v52 = $context["entry"]) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52[$context["colkey"]] ?? null) : null)), "html", null, true);
                                yield "
                                        ";
                            } elseif ((                            // line 274
($context["formatter"] ?? null) == "bytesize")) {
                                // line 275
                                yield "                                            ";
                                yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getSize", [(($_v53 = $context["entry"]) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53[$context["colkey"]] ?? null) : null)]);
                                yield "
                                        ";
                            } elseif ((                            // line 276
($context["formatter"] ?? null) == "number")) {
                                // line 277
                                yield "                                            ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedNumber((($_v54 = $context["entry"]) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54[$context["colkey"]] ?? null) : null)), "html", null, true);
                                yield "
                                        ";
                            } elseif ((                            // line 278
($context["formatter"] ?? null) == "integer")) {
                                // line 279
                                yield "                                            ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedInteger((($_v55 = $context["entry"]) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55[$context["colkey"]] ?? null) : null)), "html", null, true);
                                yield "
                                        ";
                            } elseif ((                            // line 280
($context["formatter"] ?? null) == "raw_html")) {
                                // line 281
                                yield "                                            ";
                                yield (($_v56 = $context["entry"]) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56[$context["colkey"]] ?? null) : null);
                                yield "
                                        ";
                            } elseif ((                            // line 282
($context["formatter"] ?? null) == "avatar")) {
                                // line 283
                                yield "                                            ";
                                // line 284
                                yield "                                            ";
                                $context["entry_data"] = (($_v57 = $context["entry"]) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57[$context["colkey"]] ?? null) : null);
                                // line 285
                                yield "                                            ";
                                $context["avatar_size"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_data"] ?? null), "avatar_size", [], "array", true, true, false, 285) &&  !(null === (($_v58 = ($context["entry_data"] ?? null)) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58["avatar_size"] ?? null) : null)))) ? ((($_v59 = ($context["entry_data"] ?? null)) && is_array($_v59) || $_v59 instanceof ArrayAccess ? ($_v59["avatar_size"] ?? null) : null)) : ("avatar-md"));
                                // line 286
                                yield "                                            ";
                                $context["img"] = (($_v60 = ($context["entry_data"] ?? null)) && is_array($_v60) || $_v60 instanceof ArrayAccess ? ($_v60["picture"] ?? null) : null);
                                // line 287
                                yield "                                            ";
                                $context["initials"] = (($_v61 = ($context["entry_data"] ?? null)) && is_array($_v61) || $_v61 instanceof ArrayAccess ? ($_v61["initials"] ?? null) : null);
                                // line 288
                                yield "                                            ";
                                $context["bg_color"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["img"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("inherit") : ((($_v62 = ($context["entry_data"] ?? null)) && is_array($_v62) || $_v62 instanceof ArrayAccess ? ($_v62["initials_bg"] ?? null) : null)));
                                // line 289
                                yield "                                            <span class=\"avatar ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar_size"] ?? null), "html", null, true);
                                yield " rounded\"
                                                style=\"";
                                // line 290
                                if ((($tmp =  !(null === ($context["img"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield " background-image: url(";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["img"] ?? null), "html", null, true);
                                    yield "); ";
                                }
                                yield " background-color: ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bg_color"] ?? null), "html", null, true);
                                yield "\">
                                                ";
                                // line 291
                                if (Twig\Extension\CoreExtension::testEmpty(($context["img"] ?? null))) {
                                    // line 292
                                    yield "                                                    ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["initials"] ?? null), "html", null, true);
                                    yield "
                                                ";
                                }
                                // line 294
                                yield "                                            </span>
                                        ";
                            } elseif (((                            // line 295
($context["formatter"] ?? null) == "badge") &&  !Twig\Extension\CoreExtension::testEmpty((($_v63 = $context["entry"]) && is_array($_v63) || $_v63 instanceof ArrayAccess ? ($_v63[$context["colkey"]] ?? null) : null)))) {
                                // line 296
                                yield "                                            ";
                                $context["entry_data"] = (($_v64 = $context["entry"]) && is_array($_v64) || $_v64 instanceof ArrayAccess ? ($_v64[$context["colkey"]] ?? null) : null);
                                // line 297
                                yield "                                            ";
                                $context["content"] = (($_v65 = ($context["entry_data"] ?? null)) && is_array($_v65) || $_v65 instanceof ArrayAccess ? ($_v65["content"] ?? null) : null);
                                // line 298
                                yield "                                            ";
                                $context["color"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_data"] ?? null), "color", [], "array", true, true, false, 298) &&  !(null === (($_v66 = ($context["entry_data"] ?? null)) && is_array($_v66) || $_v66 instanceof ArrayAccess ? ($_v66["color"] ?? null) : null)))) ? ((($_v67 = ($context["entry_data"] ?? null)) && is_array($_v67) || $_v67 instanceof ArrayAccess ? ($_v67["color"] ?? null) : null)) : ("#BBBBBB"));
                                // line 299
                                yield "                                            ";
                                if ((($tmp =  !CoreExtension::matches("/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})\$/", ($context["color"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 300
                                    yield "                                                ";
                                    $context["color"] = "#BBBBBB";
                                    // line 301
                                    yield "                                            ";
                                }
                                // line 302
                                yield "                                            ";
                                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 303
                                    yield "                                                <div class=\"badge_block\" style=\"border-color: ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color"] ?? null), "html", null, true);
                                    yield "\">
                                                    <span class=\"me-1\" style=\"background: ";
                                    // line 304
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color"] ?? null), "html", null, true);
                                    yield "\"></span>
                                                    ";
                                    // line 305
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["content"] ?? null), "html", null, true);
                                    yield "
                                                </div>
                                            ";
                                }
                                // line 308
                                yield "                                        ";
                            } elseif ((($context["formatter"] ?? null) == "yesno")) {
                                // line 309
                                yield "                                            ";
                                if (((($_v68 = $context["entry"]) && is_array($_v68) || $_v68 instanceof ArrayAccess ? ($_v68[$context["colkey"]] ?? null) : null) == 1)) {
                                    // line 310
                                    yield "                                                <div aria-label=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Yes"), "html", null, true);
                                    yield "\"><i class=\"ti ti-circle-check\"></i></div>
                                            ";
                                } else {
                                    // line 312
                                    yield "                                                <div aria-label=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No"), "html", null, true);
                                    yield "\"></div>
                                            ";
                                }
                                // line 314
                                yield "                                        ";
                            } else {
                                // line 315
                                yield "                                            ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v69 = $context["entry"]) && is_array($_v69) || $_v69 instanceof ArrayAccess ? ($_v69[$context["colkey"]] ?? null) : null), "html", null, true);
                                yield "
                                        ";
                            }
                            // line 317
                            yield "                                    </td>
                                ";
                        }
                        // line 319
                        yield "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['colkey'], $context['colum'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 320
                    yield "                            ";
                    if ((($tmp =  !(((array_key_exists("nofilter", $context) &&  !(null === $context["nofilter"]))) ? ($context["nofilter"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 321
                        yield "                                <td></td>
                            ";
                    }
                    // line 323
                    yield "                        </tr>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 325
                yield "                ";
            } else {
                // line 326
                yield "                    <tr>
                        <td colspan=\"";
                // line 327
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_cols"] ?? null), "html", null, true);
                yield "\">
                            ";
                // line 328
                yield $macros["alerts"]->getTemplateForMacro("macro_alert_info", $context, 328, $this->getSourceContext())->macro_alert_info(...[__("No results found")]);
                yield "
                        </td>
                    </tr>
                ";
            }
            // line 332
            yield "            </tbody>
            ";
            // line 333
            if ((($tmp = ($context["footers"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 334
                yield "                <tfoot class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("footer_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["footer_class"] ?? null), "")) : ("")), "html", null, true);
                yield "\">
                    ";
                // line 335
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["footers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["footer"]) {
                    // line 336
                    yield "                        <tr>
                            ";
                    // line 337
                    if ((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 338
                        yield "                                <td></td>
                            ";
                    }
                    // line 340
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["footer"]);
                    foreach ($context['_seq'] as $context["footer_col"] => $context["footerval"]) {
                        // line 341
                        yield "                                <td>";
                        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["footerval"], "html", null, true));
                        yield "</td>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['footer_col'], $context['footerval'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 343
                    yield "                            ";
                    if ((($tmp =  !array_key_exists("nofilter", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 344
                        yield "                                <td></td>
                            ";
                    }
                    // line 346
                    yield "                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['footer'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 348
                yield "                </tfoot>
            ";
            }
            // line 350
            yield "        </table>
    </div>

    ";
            // line 353
            if ((($tmp = ($context["use_pager"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 354
                yield "        <div class=\"ms-auto d-inline-flex align-items-center d-none d-md-block my-2\">
            ";
                // line 355
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Entries to show:"), "html", null, true);
                yield "
            ";
                // line 356
                yield from $this->load("components/dropdown/limit.html.twig", 356)->unwrap()->yield($context);
                // line 357
                yield "        </div>
    ";
            }
            // line 359
            yield "
    <script type=\"text/javascript\">
    \$(function() {
        \$('.filter-select-multiple').select2();
    });
    </script>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/datatable.html.twig";
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
        return array (  945 => 359,  941 => 357,  939 => 356,  935 => 355,  932 => 354,  930 => 353,  925 => 350,  921 => 348,  914 => 346,  910 => 344,  907 => 343,  898 => 341,  893 => 340,  889 => 338,  887 => 337,  884 => 336,  880 => 335,  875 => 334,  873 => 333,  870 => 332,  863 => 328,  859 => 327,  856 => 326,  853 => 325,  838 => 323,  834 => 321,  831 => 320,  825 => 319,  821 => 317,  815 => 315,  812 => 314,  806 => 312,  800 => 310,  797 => 309,  794 => 308,  788 => 305,  784 => 304,  779 => 303,  776 => 302,  773 => 301,  770 => 300,  767 => 299,  764 => 298,  761 => 297,  758 => 296,  756 => 295,  753 => 294,  747 => 292,  745 => 291,  735 => 290,  730 => 289,  727 => 288,  724 => 287,  721 => 286,  718 => 285,  715 => 284,  713 => 283,  711 => 282,  706 => 281,  704 => 280,  699 => 279,  697 => 278,  692 => 277,  690 => 276,  685 => 275,  683 => 274,  678 => 273,  676 => 272,  671 => 271,  669 => 270,  664 => 269,  662 => 268,  657 => 267,  655 => 266,  650 => 264,  644 => 261,  641 => 260,  639 => 259,  634 => 257,  628 => 254,  625 => 253,  623 => 252,  620 => 251,  618 => 250,  610 => 248,  607 => 247,  604 => 246,  601 => 245,  596 => 244,  592 => 242,  585 => 240,  581 => 239,  578 => 238,  576 => 237,  573 => 236,  571 => 235,  568 => 234,  562 => 232,  559 => 231,  553 => 229,  551 => 228,  543 => 227,  540 => 226,  537 => 225,  519 => 224,  517 => 223,  513 => 221,  509 => 219,  502 => 217,  499 => 216,  494 => 214,  490 => 213,  487 => 212,  480 => 208,  476 => 207,  471 => 205,  467 => 204,  463 => 203,  458 => 202,  455 => 201,  453 => 200,  451 => 199,  446 => 197,  442 => 196,  439 => 195,  437 => 194,  434 => 193,  432 => 190,  431 => 188,  429 => 187,  427 => 186,  424 => 185,  422 => 182,  421 => 180,  419 => 179,  417 => 178,  414 => 177,  405 => 174,  398 => 173,  394 => 172,  388 => 170,  385 => 169,  383 => 168,  380 => 167,  377 => 166,  373 => 165,  368 => 163,  364 => 161,  360 => 159,  358 => 158,  355 => 157,  352 => 156,  348 => 154,  343 => 151,  337 => 148,  331 => 146,  328 => 145,  322 => 142,  316 => 140,  314 => 139,  310 => 137,  308 => 136,  305 => 135,  298 => 133,  294 => 131,  292 => 130,  287 => 129,  282 => 127,  277 => 126,  275 => 125,  271 => 123,  269 => 122,  266 => 121,  263 => 120,  260 => 119,  257 => 118,  254 => 117,  251 => 116,  248 => 115,  245 => 114,  242 => 113,  237 => 112,  230 => 108,  226 => 107,  222 => 106,  218 => 104,  216 => 103,  213 => 102,  210 => 101,  206 => 99,  202 => 98,  197 => 97,  191 => 96,  188 => 95,  185 => 94,  182 => 93,  180 => 92,  170 => 90,  166 => 88,  164 => 87,  161 => 86,  159 => 85,  149 => 84,  146 => 83,  142 => 81,  140 => 80,  139 => 79,  137 => 78,  134 => 77,  131 => 76,  121 => 69,  114 => 64,  111 => 63,  104 => 59,  100 => 57,  97 => 56,  94 => 55,  91 => 54,  89 => 53,  83 => 51,  81 => 50,  78 => 49,  76 => 48,  73 => 46,  71 => 45,  68 => 44,  66 => 43,  64 => 42,  62 => 41,  60 => 40,  58 => 39,  56 => 38,  54 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/datatable.html.twig", "/var/www/html/glpi/templates/components/datatable.html.twig");
    }
}
