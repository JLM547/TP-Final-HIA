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

/* components/search/query_builder/criteria.html.twig */
class __TwigTemplate_2362312749cd155408c1f33bcb28d1ee extends Template
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
        yield "
";
        // line 35
        $context["add_padding"] = (((($tmp = ($context["from_meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("p-0") : ("p-2"));
        // line 36
        $context["add_class"] = ((array_key_exists("add_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["add_class"] ?? null), "")) : (""));
        // line 37
        $context["normalized_itemtype"] = Twig\Extension\CoreExtension::replace(($context["itemtype"] ?? null), ["\\" => ""]);
        // line 38
        yield "
";
        // line 39
        if ((($context["meta"] ?? null) &&  !($context["from_meta"] ?? null))) {
            // line 40
            yield "   ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::displayMetaCriteria", [["from_meta" => (((            // line 41
array_key_exists("from_meta", $context) &&  !(null === $context["from_meta"]))) ? ($context["from_meta"]) : (false)), "itemtype" =>             // line 42
($context["itemtype"] ?? null), "p" =>             // line 43
($context["p"] ?? null), "num" =>             // line 44
($context["num"] ?? null)]]), "html", null, true);
            // line 45
            yield "
";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["criteria"] ?? null), "criteria", [], "array", true, true, false, 46) && is_iterable((($_v0 = ($context["criteria"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["criteria"] ?? null) : null)))) {
            // line 47
            yield "   ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::displayCriteriaGroup", [["itemtype" =>             // line 48
($context["itemtype"] ?? null), "p" =>             // line 49
($context["p"] ?? null), "num" =>             // line 50
($context["num"] ?? null)]]), "html", null, true);
            // line 51
            yield "
";
        } else {
            // line 53
            yield "   <div class=\"list-group-item ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["add_padding"] ?? null), "html", null, true);
            yield " border-0 normalcriteria";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["add_class"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
            yield "\">
      <div class=\"row g-1\">
         ";
            // line 55
            if ((($tmp =  !($context["from_meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "            ";
                if ((((($context["num"] ?? null) == 0) && array_key_exists("mainform", $context)) && ($context["mainform"] ?? null))) {
                    // line 57
                    yield "               ";
                    $context["item"] = (((($context["itemtype"] ?? null) != "AllAssets")) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemForItemtype", [($context["itemtype"] ?? null)])) : (null));
                    // line 58
                    yield "               ";
                    if (( !(null === ($context["item"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maybeDeleted", [], "method", false, false, false, 58))) {
                        // line 59
                        yield "                  <input type=\"hidden\" id=\"is_deleted\" name=\"is_deleted\" value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["p"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["is_deleted"] ?? null) : null), "html", null, true);
                        yield "\">
               ";
                    }
                    // line 61
                    yield "               <input type=\"hidden\" id=\"as_map\" name=\"as_map\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["p"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["as_map"] ?? null) : null), "html", null, true);
                    yield "\">
               <input type=\"hidden\" id=\"browse\" name=\"browse\" value=\"";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["p"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["browse"] ?? null) : null), "html", null, true);
                    yield "\">
               <input type=\"hidden\" id=\"unpublished\" name=\"unpublished\" value=\"";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = ($context["p"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["unpublished"] ?? null) : null), "html", null, true);
                    yield "\">
            ";
                }
                // line 65
                yield "            <div class=\"col-auto\">
               <button class=\"btn btn-sm btn-icon btn-ghost-secondary remove-search-criteria\" type=\"button\" data-rowid=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                yield "\"
                       data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete a rule"), "html", null, true);
                yield "\">
                  <i class=\"ti ti-square-rounded-minus\" alt=\"-\"></i>
               </button>
            </div>
         ";
            }
            // line 72
            yield "
         ";
            // line 73
            if ((($tmp =  !($context["from_meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 74
                yield "            <div class=\"col-auto\">
               ";
                // line 75
                $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria"] ?? null), "link", [], "array", true, true, false, 75)) ? ((($_v5 = ($context["criteria"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["link"] ?? null) : null)) : (""));
                // line 76
                yield "               ";
                $context["operators"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\SearchEngine::getLogicalOperators", [(($context["num"] ?? null) == 0)]);
                // line 77
                yield "               ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 77, $this->getSourceContext())->macro_dropdownArrayField(...[(((("criteria" . ($context["prefix"] ?? null)) . "[") . ($context["num"] ?? null)) . "][link]"), ($context["value"] ?? null), ($context["operators"] ?? null), "", ["full_width" => true, "input_class" => "col-12", "no_label" => true, "mb" => "mb-0"]]);
                // line 82
                yield "
            </div>
         ";
            }
            // line 85
            yield "
         <div class=\"col-auto\">
            ";
            // line 87
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 88
            yield "            ";
            $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria"] ?? null), "field", [], "array", true, true, false, 88)) ? ((($_v6 = ($context["criteria"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["field"] ?? null) : null)) : (""));
            // line 89
            yield "            ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 89, $this->getSourceContext())->macro_dropdownArrayField(...[(((("criteria" . ($context["prefix"] ?? null)) . "[") . ($context["num"] ?? null)) . "][field]"), ($context["value"] ?? null), ($context["values"] ?? null), "", ["rand" =>             // line 90
($context["rand"] ?? null), "full_width" => true, "input_class" => "col-12", "no_label" => true, "mb" => "mb-0"]]);
            // line 95
            yield "
         </div>

         ";
            // line 98
            $context["field_id"] = ((((("dropdown_criteria" . ($context["prefix"] ?? null)) . "[") . ($context["num"] ?? null)) . "][field]") . ($context["rand"] ?? null));
            // line 99
            yield "         ";
            $context["spanid"] = ((("SearchSpan" . ($context["normalized_itemtype"] ?? null)) . ($context["prefix"] ?? null)) . ($context["num"] ?? null));
            // line 100
            yield "         <div class=\"col-auto\">
            <div class=\"row g-1\" id=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["spanid"] ?? null), "html", null, true);
            yield "\">
               ";
            // line 102
            $context["used_itemtype"] = (((($context["itemtype"] ?? null) == "AllAssets")) ? ("Computer") : (($context["itemtype"] ?? null)));
            // line 103
            yield "               ";
            $context["searchtype"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria"] ?? null), "searchtype", [], "array", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default((($_v7 = ($context["criteria"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["searchtype"] ?? null) : null), "")) : (""));
            // line 104
            yield "
               ";
            // line 105
            $context["params"] = ["itemtype" =>             // line 106
($context["used_itemtype"] ?? null), "_idor_token" => Session::getNewIDORToken(            // line 107
($context["used_itemtype"] ?? null)), "field" =>             // line 108
($context["value"] ?? null), "searchtype" =>             // line 109
($context["searchtype"] ?? null), "value" =>             // line 110
($context["p_value"] ?? null), "num" =>             // line 111
($context["num"] ?? null), "p" =>             // line 112
($context["p"] ?? null), "mb" => "mb-0"];
            // line 115
            yield "               ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::displaySearchoption", [($context["params"] ?? null)]), "html", null, true);
            yield "
            </div>

            ";
            // line 118
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [            // line 119
($context["field_id"] ?? null),             // line 120
($context["spanid"] ?? null), ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/search.php"), Twig\Extension\CoreExtension::merge(            // line 122
($context["params"] ?? null), ["action" => "display_searchoption", "field" => "__VALUE__"])]);
            // line 127
            yield "         </div>
      </div>
   </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/query_builder/criteria.html.twig";
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
        return array (  219 => 127,  217 => 122,  216 => 120,  215 => 119,  214 => 118,  207 => 115,  205 => 112,  204 => 111,  203 => 110,  202 => 109,  201 => 108,  200 => 107,  199 => 106,  198 => 105,  195 => 104,  192 => 103,  190 => 102,  186 => 101,  183 => 100,  180 => 99,  178 => 98,  173 => 95,  171 => 90,  169 => 89,  166 => 88,  164 => 87,  160 => 85,  155 => 82,  152 => 77,  149 => 76,  147 => 75,  144 => 74,  142 => 73,  139 => 72,  131 => 67,  127 => 66,  124 => 65,  119 => 63,  115 => 62,  110 => 61,  104 => 59,  101 => 58,  98 => 57,  95 => 56,  93 => 55,  83 => 53,  79 => 51,  77 => 50,  76 => 49,  75 => 48,  73 => 47,  71 => 46,  68 => 45,  66 => 44,  65 => 43,  64 => 42,  63 => 41,  61 => 40,  59 => 39,  56 => 38,  54 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/query_builder/criteria.html.twig", "/var/www/html/glpi/templates/components/search/query_builder/criteria.html.twig");
    }
}
