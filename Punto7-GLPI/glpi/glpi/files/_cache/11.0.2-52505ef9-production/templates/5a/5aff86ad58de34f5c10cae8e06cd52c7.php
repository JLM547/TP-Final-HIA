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

/* components/search/query_builder/main.html.twig */
class __TwigTemplate_05781e4219e4d42d168bf9e09cdaae15 extends Template
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
        $context["is_ajax"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "searchform_id", [], "array", true, true, false, 33) &&  !(null === (($_v0 = ($context["_request"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["searchform_id"] ?? null) : null)));
        // line 34
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 35
        $context["mainform"] = (((($tmp =  !array_key_exists("mainform", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (($context["mainform"] ?? null)));
        // line 36
        $context["main_block_class"] = (((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("sub_criteria"));
        // line 37
        $context["card_class"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 38
            yield "   ";
            if ((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 39
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("search-form card card-sm" . (((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("show_search_form")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" border mb-3") : (""))), "html", null, true);
                yield "
   ";
            } else {
                // line 41
                yield "      ";
                yield "border d-inline-block ms-1";
                yield "
   ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        $context["hide_criteria"] =  !(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "hide_criteria", [], "any", true, true, false, 44) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "hide_criteria", [], "any", false, false, false, 44));
        // line 45
        $context["extra_actions_templates"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "extra_actions_templates", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "extra_actions_templates", [], "any", false, false, false, 45), [])) : ([]));
        // line 46
        $context["hide_controls"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "hide_controls", [], "any", true, true, false, 46) && CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "hide_controls", [], "any", false, false, false, 46));
        // line 47
        $context["showmassiveactions"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "showmassiveactions", [], "any", true, true, false, 47) || CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "showmassiveactions", [], "any", false, false, false, 47));
        // line 48
        yield "
";
        // line 49
        if ((($context["mainform"] ?? null) && ($context["showaction"] ?? null))) {
            // line 50
            yield "   <form
      name=\"searchform";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["normalized_itemtype"] ?? null), "html", null, true);
            yield "\"
      class=\"search-form-container\"
      method=\"get\"
      action=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["p"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["target"] ?? null) : null), "html", null, true);
            yield "\"
      data-glpi-search-form
   >

   ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["additional_params"] ?? null));
            foreach ($context['_seq'] as $context["param_name"] => $context["param_value"]) {
                // line 59
                yield "       <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["param_name"], "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["param_value"], "html", null, true);
                yield "\" />
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['param_name'], $context['param_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 62
        yield "
<div class=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["card_class"] ?? null), "html", null, true);
        yield "\">
   <div id=\"searchcriteria";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["main_block_class"] ?? null), "html", null, true);
        yield "\">
      ";
        // line 66
        yield "      ";
        $context["nbsearchcountvar"] = (("nbcriteria" . ($context["normalized_itemtype"] ?? null)) . Twig\Extension\CoreExtension::random($this->env->getCharset()));
        // line 67
        yield "      <script>
         let ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " = ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["criteria"] ?? null)), "html", null, true);
        yield ";
      </script>
      <div class=\"list-group list-group-flush list-group-hoverable criteria-list pt-2\" id=\"criteriatable";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["normalized_itemtype"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\">
         ";
        // line 71
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "defaultfilter", [], "any", true, true, false, 71)) {
            // line 72
            yield "            <div class=\"p-2 b-0\">
               <label class=\"form-check form-switch btn btn-sm btn-ghost-secondary me-1 me-sm-2 px-1 mb-0 flex-column-reverse flex-sm-row\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-bs-trigger=\"hover\"
                     title=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle additional default filters"), "html", null, true);
            yield "\">
                  <input type=\"checkbox\" class=\"form-check-input ms-0 me-1 mt-0 default-filter\" role=\"button\"
                        ";
            // line 77
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "nodefault", [], "any", true, true, false, 77)) ? ("") : ("checked"));
            yield " autocomplete=\"off\" ";
            yield (((($tmp = ($context["can_disablefilter"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("disabled"));
            yield " />
                  <span class=\"form-check-label mb-1 mb-sm-0\">
                     <i class=\"fs-2 ti ti-filter\"></i>
                  </span>
               </label>
               <span title=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "defaultfilter", [], "any", false, false, false, 82)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["comment"] ?? null) : null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "defaultfilter", [], "any", false, false, false, 82)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["name"] ?? null) : null), "html", null, true);
            yield "</span>
            </div>
         ";
        }
        // line 85
        yield "         ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((($_v4 = ($context["p"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["criteria"] ?? null) : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 86
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::displayCriteria", [["itemtype" =>             // line 87
($context["itemtype"] ?? null), "num" =>             // line 88
$context["i"], "p" =>             // line 89
($context["p"] ?? null)]]), "html", null, true);
            // line 90
            yield "
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "         <a id=\"more-criteria";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" role=\"button\" class=\"normalcriteria list-group-item p-2 b-0 d-none\"></a>
      </div>
      ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "savedsearches_id", [], "array", true, true, false, 94)) {
            // line 95
            yield "         <input type=\"hidden\" name=\"savedsearches_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = ($context["_get"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["savedsearches_id"] ?? null) : null), "html", null, true);
            yield "\">
      ";
        }
        // line 97
        yield "
      ";
        // line 99
        yield "      <input type=\"hidden\" name=\"params[hide_criteria]\" value=\"";
        yield (((($tmp = ($context["hide_criteria"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "\">
      <input type=\"hidden\" name=\"params[hide_controls]\" value=\"";
        // line 100
        yield (((($tmp = ($context["hide_controls"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "\">
      <input type=\"hidden\" name=\"params[showmassiveactions]\" value=\"";
        // line 101
        yield (((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "\">

      <div class=\"card-footer d-flex search_actions\">
         <button id=\"addsearchcriteria";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"btn btn-sm btn-ghost-secondary me-1\" type=\"button\">
            <i class=\"ti ti-square-plus\"></i>
            <span class=\"d-none d-sm-block\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("rule"), "html", null, true);
        yield "</span>
         </button>
         ";
        // line 108
        if ((array_key_exists("linked", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["linked"] ?? null)) > 0))) {
            // line 109
            yield "            <button id=\"addmetasearchcriteria";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" class=\"btn btn-sm btn-ghost-secondary me-1\" type=\"button\">
               <i class=\"ti ti-circle-plus\"></i>
               <span class=\"d-none d-sm-block\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("global rule"), "html", null, true);
            yield "</span>
            </button>
         ";
        }
        // line 114
        yield "         <button id=\"addcriteriagroup";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"btn btn-sm btn-ghost-secondary me-1\" type=\"button\">
            <i class=\"ti ti-code-plus\"></i>
            <span class=\"d-none d-sm-block\">";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("group"), "html", null, true);
        yield "</span>
         </button>
         ";
        // line 118
        if ((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "            ";
            $context["action_count"] = ((($context["showaction"] ?? null) + (($_v6 = ($context["p"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["showbookmark"] ?? null) : null)) + (($_v7 = ($context["p"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["showreset"] ?? null) : null));
            // line 120
            yield "            <span class=\"ms-3 ";
            yield (((($context["action_count"] ?? null) > 1)) ? ("btn-group") : (""));
            yield "\">
                ";
            // line 121
            if ((($tmp = ($context["showaction"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 122
                yield "                ";
                // line 123
                yield "                <button class=\"btn ";
                yield (((($tmp = (($_v8 = ($context["p"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["is_criteria_filter"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-ghost-secondary") : ("btn-sm btn-primary"));
                yield "\" type=\"button\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = ($context["p"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["actionname"] ?? null) : null), "html", null, true);
                yield "\">
                    <i class=\"ti ti-search\"></i>
                    <span class=\"d-none d-sm-block\">";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = ($context["p"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["actionvalue"] ?? null) : null), "html", null, true);
                yield "</span>
                </button>
                ";
            }
            // line 128
            yield "                ";
            if ((($tmp = (($_v11 = ($context["p"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["showbookmark"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 129
                yield "                ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/tools/savedsearch/save_button.html.twig", ["type" => Twig\Extension\CoreExtension::constant("SavedSearch::SEARCH"), "itemtype" =>                 // line 131
($context["itemtype"] ?? null), "active" => CoreExtension::getAttribute($this->env, $this->source,                 // line 132
($context["_get"] ?? null), "savedsearches_id", [], "array", true, true, false, 132)]);
                // line 133
                yield "
                ";
            }
            // line 135
            yield "                ";
            if ((($tmp = (($_v12 = ($context["p"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["showreset"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 136
                yield "                <a class=\"btn btn-sm btn-outline-secondary btn-icon px-2 search-reset\"
                   data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
                   href=\"";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($_v13 = ($context["p"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["target"] ?? null) : null) . ((CoreExtension::inFilter("?", (($_v14 = ($context["p"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["target"] ?? null) : null))) ? ("&") : ("?"))) . "reset=reset"), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Blank"), "html", null, true);
                yield "\">
                    <i class=\"ti ti-square-x\"></i>
                </a>
                ";
            } elseif ((($tmp = (($_v15 =             // line 141
($context["p"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["forcereset"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 142
                yield "                <input type=\"hidden\" name=\"reset\" value=\"reset\">
                ";
            }
            // line 144
            yield "            </span>
         ";
        }
        // line 146
        yield "         ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extra_actions_templates"] ?? null));
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
        foreach ($context['_seq'] as $context["template"] => $context["params"]) {
            // line 147
            yield "            ";
            yield from $this->load($context["template"], 147)->unwrap()->yield(CoreExtension::merge($context, $context["params"]));
            // line 148
            yield "         ";
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
        unset($context['_seq'], $context['template'], $context['params'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "      </div>

      ";
        // line 152
        yield "      ";
        $context["idor_display_criteria"] = Session::getNewIDORToken(($context["itemtype"] ?? null));
        // line 153
        yield "      ";
        $context["idor_display_meta_criteria"] = Session::getNewIDORToken(($context["itemtype"] ?? null));
        // line 154
        yield "      ";
        $context["idor_display_criteria_group"] = Session::getNewIDORToken(($context["itemtype"] ?? null));
        // line 155
        yield "      ";
        $context["itemtype_escaped"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "js");
        // line 156
        yield "
      ";
        // line 158
        yield "      ";
        $context["ajax_url"] = ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/search.php");
        // line 159
        yield "      <script>
         \$('#addsearchcriteria";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('click', function(event) {
             event.preventDefault();
             \$.post(\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ajax_url"] ?? null), "html", null, true);
        yield "\", {
                 'action': 'display_criteria',
                 'itemtype': \"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype_escaped"] ?? null), "html", null, true);
        yield "\",
                 'num': ";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield ",
                 'p': ";
        // line 166
        yield json_encode(($context["p"] ?? null));
        yield ",
                 '_idor_token': \"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["idor_display_criteria"] ?? null), "html", null, true);
        yield "\"
             }).done(function (data) {
               \$(data).insertBefore('#more-criteria";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "');
               ";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " = ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " + 1;
             });
         });
         \$('#addmetasearchcriteria";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('click', function(event) {
             event.preventDefault();
             \$.post(\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ajax_url"] ?? null), "html", null, true);
        yield "\", {
                 'action': 'display_meta_criteria',
                 'itemtype': \"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype_escaped"] ?? null), "html", null, true);
        yield "\",
                 'num': ";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield ",
                 'p': ";
        // line 179
        yield json_encode(($context["p"] ?? null));
        yield ",
                 '_idor_token': \"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["idor_display_criteria"] ?? null), "html", null, true);
        yield "\"
             }).done(function (data) {
                 \$(data).insertBefore('#more-criteria";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "');
                ";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " = ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " + 1;
             });
         });
         \$('#addcriteriagroup";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('click', function(event) {
             event.preventDefault();
             \$.post(\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ajax_url"] ?? null), "html", null, true);
        yield "\", {
                 'action': 'display_criteria_group',
                 'itemtype': \"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype_escaped"] ?? null), "html", null, true);
        yield "\",
                 'num': ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield ",
                 'p': ";
        // line 192
        yield json_encode(($context["p"] ?? null));
        yield ",
                 '_idor_token': \"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["idor_display_criteria"] ?? null), "html", null, true);
        yield "\"
             }).done(function (data) {
                 \$(data).insertBefore('#more-criteria";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "');
                ";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " = ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " + 1;
             });
         });

         ";
        // line 200
        if ((($context["mainform"] ?? null) &&  !($context["hide_criteria"] ?? null))) {
            // line 201
            yield "            \$(document).off('click', '.remove-search-criteria').on(\"click\", \".remove-search-criteria\", function() {
                // force removal of tooltip
                const tooltip = bootstrap.Tooltip.getInstance(\$(this)[0]);
                if (tooltip !== null) {
                    tooltip.dispose();
                }

                const rowID = \$(this).data('rowid');
                \$('#' + rowID).remove();
                \$('#searchcriteria";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " .criteria-list .list-group-item:first-child').addClass('headerRow').show();
            });
         ";
        }
        // line 213
        yield "      </script>

      ";
        // line 215
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v16 = ($context["p"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["addhidden"] ?? null) : null)) > 0)) {
            // line 216
            yield "         ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v17 = ($context["p"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["addhidden"] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 217
                yield "            <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "\">
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            yield "      ";
        }
        // line 220
        yield "
      ";
        // line 221
        if ((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 222
            yield "         <input type=\"hidden\" name=\"itemtype\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "html", null, true);
            yield "\">
         <input type=\"hidden\" name=\"start\" value=\"0\">
      ";
        }
        // line 225
        yield "   </div>
</div>

";
        // line 228
        if ((($context["mainform"] ?? null) && ($context["showaction"] ?? null))) {
            // line 229
            yield "   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\">
   </form>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/query_builder/main.html.twig";
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
        return array (  569 => 229,  567 => 228,  562 => 225,  555 => 222,  553 => 221,  550 => 220,  547 => 219,  536 => 217,  531 => 216,  529 => 215,  525 => 213,  519 => 210,  508 => 201,  506 => 200,  497 => 196,  493 => 195,  488 => 193,  484 => 192,  480 => 191,  476 => 190,  471 => 188,  466 => 186,  458 => 183,  454 => 182,  449 => 180,  445 => 179,  441 => 178,  437 => 177,  432 => 175,  427 => 173,  419 => 170,  415 => 169,  410 => 167,  406 => 166,  402 => 165,  398 => 164,  393 => 162,  388 => 160,  385 => 159,  382 => 158,  379 => 156,  376 => 155,  373 => 154,  370 => 153,  367 => 152,  363 => 149,  349 => 148,  346 => 147,  328 => 146,  324 => 144,  320 => 142,  318 => 141,  310 => 138,  306 => 136,  303 => 135,  299 => 133,  297 => 132,  296 => 131,  294 => 129,  291 => 128,  285 => 125,  277 => 123,  275 => 122,  273 => 121,  268 => 120,  265 => 119,  263 => 118,  258 => 116,  252 => 114,  246 => 111,  240 => 109,  238 => 108,  233 => 106,  228 => 104,  222 => 101,  218 => 100,  213 => 99,  210 => 97,  204 => 95,  202 => 94,  196 => 92,  189 => 90,  187 => 89,  186 => 88,  185 => 87,  183 => 86,  178 => 85,  170 => 82,  160 => 77,  155 => 75,  150 => 72,  148 => 71,  143 => 70,  136 => 68,  133 => 67,  130 => 66,  124 => 64,  120 => 63,  117 => 62,  105 => 59,  101 => 58,  94 => 54,  88 => 51,  85 => 50,  83 => 49,  80 => 48,  78 => 47,  76 => 46,  74 => 45,  72 => 44,  64 => 41,  58 => 39,  55 => 38,  53 => 37,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/query_builder/main.html.twig", "/var/www/html/glpi/templates/components/search/query_builder/main.html.twig");
    }
}
