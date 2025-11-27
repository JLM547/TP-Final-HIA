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

/* pages/setup/general/assistance_setup.html.twig */
class __TwigTemplate_94477b83a0a0078e22fc0a0ac7ce294b extends Template
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
        // line 35
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 35)->unwrap();
        // line 37
        $context["field_options"] = ["label_class" => "col-xxl-7", "input_class" => "col-xxl-5"];
        // line 33
        $this->parent = $this->load("pages/setup/general/base_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 43, $this->getSourceContext())->macro_dropdownNumberField(...["time_step", (($_v0 = ($context["config"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["time_step"] ?? null) : null), __("Step for the hours (minutes)"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["min" => 30, "max" => 60, "step" => 30, "toadd" => [1 => 1, 5 => 5, 10 => 10, 15 => 15, 20 => 20]])]);
        // line 54
        yield "
   ";
        // line 55
        $context["planning_end_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 56
            yield "      <span class=\"mx-1\">-></span>
      ";
            // line 57
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownHoursField", $context, 57, $this->getSourceContext())->macro_dropdownHoursField(...["planning_end", (($_v1 = ($context["config"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["planning_end"] ?? null) : null), "", Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["no_label" => true])]);
            // line 59
            yield "
   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownHoursField", $context, 61, $this->getSourceContext())->macro_dropdownHoursField(...["planning_begin", (($_v2 = ($context["config"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["planning_begin"] ?? null) : null), __("Limit of the schedules for planning"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["add_field_html" =>         // line 62
($context["planning_end_field"] ?? null)])]);
        // line 63
        yield "

   ";
        // line 65
        $context["max_filesize_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 66
            yield "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("MailCollector::showMaxFilesize", ["default_mailcollector_filesize_max", (($_v3 = ($context["config"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["default_mailcollector_filesize_max"] ?? null) : null)]);
            // line 67
            yield "   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 68, $this->getSourceContext())->macro_htmlField(...["", ($context["max_filesize_dropdown"] ?? null), __("Default file size limit imported by the mails receiver"), ($context["field_options"] ?? null)]);
        yield "
   ";
        // line 69
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 69, $this->getSourceContext())->macro_dropdownField(...["DocumentCategory", "documentcategories_id_forticket", (($_v4 =         // line 72
($context["config"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["documentcategories_id_forticket"] ?? null) : null), __("Default heading when adding a document to a ticket"),         // line 74
($context["field_options"] ?? null)]);
        // line 75
        yield "

   ";
        // line 77
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 77, $this->getSourceContext())->macro_dropdownYesNo(...["default_software_helpdesk_visible", (($_v5 =         // line 79
($context["config"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["default_software_helpdesk_visible"] ?? null) : null), __("By default, a software may be linked to a ticket"),         // line 81
($context["field_options"] ?? null)]);
        // line 82
        yield "
   ";
        // line 83
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 83, $this->getSourceContext())->macro_dropdownYesNo(...["keep_tickets_on_delete", (($_v6 =         // line 85
($context["config"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["keep_tickets_on_delete"] ?? null) : null), __("Keep tickets when purging hardware in the inventory"),         // line 87
($context["field_options"] ?? null)]);
        // line 88
        yield "
   ";
        // line 89
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 89, $this->getSourceContext())->macro_dropdownYesNo(...["use_check_pref", (($_v7 =         // line 91
($context["config"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["use_check_pref"] ?? null) : null), __("Show personnal information in new ticket form (simplified interface)"),         // line 93
($context["field_options"] ?? null)]);
        // line 94
        yield "
   ";
        // line 95
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 95, $this->getSourceContext())->macro_dropdownYesNo(...["use_anonymous_helpdesk", (($_v8 =         // line 97
($context["config"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["use_anonymous_helpdesk"] ?? null) : null), __("Allow anonymous ticket creation (receiver)"),         // line 99
($context["field_options"] ?? null)]);
        // line 100
        yield "
   ";
        // line 101
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 101, $this->getSourceContext())->macro_dropdownYesNo(...["use_anonymous_followups", (($_v9 =         // line 103
($context["config"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["use_anonymous_followups"] ?? null) : null), __("Allow anonymous followups (receiver)"),         // line 105
($context["field_options"] ?? null)]);
        // line 106
        yield "

   ";
        // line 108
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 108, $this->getSourceContext())->macro_dropdownArrayField(...["planning_work_days", null, [1 => __("Monday"), 2 => __("Tuesday"), 3 => __("Wednesday"), 4 => __("Thursday"), 5 => __("Friday"), 6 => __("Saturday"), 0 => __("Sunday")], __("Planning work days"), Twig\Extension\CoreExtension::merge(        // line 116
($context["field_options"] ?? null), ["values" => (($_v10 =         // line 117
($context["config"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["planning_work_days"] ?? null) : null), "multiple" => true])]);
        // line 119
        yield "

   ";
        // line 121
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 121, $this->getSourceContext())->macro_smallTitle(...[__("Matrix of calculus for priority")]);
        yield "
   ";
        // line 122
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 122, $this->getSourceContext())->macro_hidden(...["_matrix", 1]);
        yield "
   <table class=\"table table-borderless table-sm\">
      <tbody>
         <tr>
            <td></td>
            <td class=\"fw-bold align-right\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Impact"), "html", null, true);
        yield "</td>
            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["impact"]) {
            // line 129
            yield "               <td class=\"center\">
                  ";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ticket::getImpactName", [$context["impact"]]), "html", null, true);
            yield "
                  <br>
                  ";
            // line 132
            if (($context["impact"] == 3)) {
                // line 133
                yield "                     ";
                yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 133, $this->getSourceContext())->macro_hidden(...["_impact_3", 1]);
                yield "
                  ";
            } else {
                // line 135
                yield "                     ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 135, $this->getSourceContext())->macro_dropdownYesNo(...[("_impact_" . $context["impact"]), (($_v11 = ($context["is_impact"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[$context["impact"]] ?? null) : null), "", ["nolabel" => true]]);
                // line 137
                yield "
                  ";
            }
            // line 139
            yield "               </td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['impact'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "         </tr>
         <tr>
            <td class=\"fw-bold\">";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Urgency"), "html", null, true);
        yield "</td>
            ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["impact"]) {
            // line 145
            yield "               <td></td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['impact'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "         </tr>
         ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["urgency"]) {
            // line 149
            yield "            <tr>
               <td>";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ticket::getUrgencyName", [$context["urgency"]]), "html", null, true);
            yield "</td>
               <td>
                  ";
            // line 152
            if (($context["urgency"] == 3)) {
                // line 153
                yield "                     ";
                yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 153, $this->getSourceContext())->macro_hidden(...["_urgency_3", 1]);
                yield "
                  ";
            } else {
                // line 155
                yield "                     ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 155, $this->getSourceContext())->macro_dropdownYesNo(...[("_urgency_" . $context["urgency"]), (($_v12 = ($context["is_urgency"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[$context["urgency"]] ?? null) : null), "", ["nolabel" => true]]);
                // line 157
                yield "
                  ";
            }
            // line 159
            yield "               </td>
               ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["impact"]) {
                // line 161
                yield "                  ";
                $context["priority"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "priority_matrix", [], "array", false, true, false, 161), $context["urgency"], [], "array", false, true, false, 161), $context["impact"], [], "array", true, true, false, 161)) ? (Twig\Extension\CoreExtension::default((($_v13 = (($_v14 = (($_v15 = ($context["config"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["priority_matrix"] ?? null) : null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[$context["urgency"]] ?? null) : null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[$context["impact"]] ?? null) : null), Twig\Extension\CoreExtension::round((($context["urgency"] + $context["impact"]) / 2)))) : (Twig\Extension\CoreExtension::round((($context["urgency"] + $context["impact"]) / 2))));
                // line 162
                yield "                  ";
                if (((($_v16 = ($context["is_urgency"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[$context["urgency"]] ?? null) : null) && (($_v17 = ($context["is_impact"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[$context["impact"]] ?? null) : null))) {
                    // line 163
                    yield "                     ";
                    $context["bg_color"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session(("glpipriority_" . ($context["priority"] ?? null)));
                    // line 164
                    yield "                     <td class=\"center\" style=\"background-color: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bg_color"] ?? null), "html", null, true);
                    yield "\">
                        ";
                    // line 165
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ticket::dropdownPriority", [["value" =>                     // line 166
($context["priority"] ?? null), "name" => ((("_matrix_" .                     // line 167
$context["urgency"]) . "_") . $context["impact"]), "enable_filtering" => false]]);
                    // line 170
                    yield "                     </td>
                  ";
                } else {
                    // line 172
                    yield "                     <td>
                        ";
                    // line 173
                    yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 173, $this->getSourceContext())->macro_hidden(...[((("_matrix_" . $context["urgency"]) . "_") . $context["impact"]), ($context["priority"] ?? null)]);
                    yield "
                     </td>
                  ";
                }
                // line 176
                yield "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['impact'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            yield "            </tr>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['urgency'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "      </tbody>
   </table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/assistance_setup.html.twig";
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
        return array (  307 => 179,  300 => 177,  294 => 176,  288 => 173,  285 => 172,  281 => 170,  279 => 167,  278 => 166,  277 => 165,  272 => 164,  269 => 163,  266 => 162,  263 => 161,  259 => 160,  256 => 159,  252 => 157,  249 => 155,  243 => 153,  241 => 152,  236 => 150,  233 => 149,  229 => 148,  226 => 147,  219 => 145,  215 => 144,  211 => 143,  207 => 141,  200 => 139,  196 => 137,  193 => 135,  187 => 133,  185 => 132,  180 => 130,  177 => 129,  173 => 128,  169 => 127,  161 => 122,  157 => 121,  153 => 119,  151 => 117,  150 => 116,  149 => 108,  145 => 106,  143 => 105,  142 => 103,  141 => 101,  138 => 100,  136 => 99,  135 => 97,  134 => 95,  131 => 94,  129 => 93,  128 => 91,  127 => 89,  124 => 88,  122 => 87,  121 => 85,  120 => 83,  117 => 82,  115 => 81,  114 => 79,  113 => 77,  109 => 75,  107 => 74,  106 => 72,  105 => 69,  100 => 68,  96 => 67,  93 => 66,  91 => 65,  87 => 63,  85 => 62,  83 => 61,  78 => 59,  76 => 57,  73 => 56,  71 => 55,  68 => 54,  65 => 43,  58 => 42,  53 => 33,  51 => 37,  49 => 35,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/assistance_setup.html.twig", "/var/www/html/glpi/templates/pages/setup/general/assistance_setup.html.twig");
    }
}
