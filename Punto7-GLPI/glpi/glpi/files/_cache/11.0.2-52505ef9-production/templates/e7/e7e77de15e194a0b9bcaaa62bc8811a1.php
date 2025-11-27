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

/* components/form/item_itilobject_item_list.html.twig */
class __TwigTemplate_7c6466046c7975126d3e21d0f42a4b86 extends Template
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
        if ((($tmp = ($context["linknewitil"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "    <div class='mb-3'>
        ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showSimpleForm", [$this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath(($context["itemtype_1"] ?? null)), "_add_fromitem", Twig\Extension\CoreExtension::sprintf(__("New %s for this item"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype_1"] ?? null), 1)), ["itemtype" => CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 35), "items_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 35)]]), "html", null, true);
            yield "
    </div>
";
        }
        // line 38
        yield "<div class=\"mb-3\">
    ";
        // line 39
        if ((($context["number"] ?? null) > 0)) {
            // line 40
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Session::initNavigateListItems", [($context["itemtype_1"] ?? null), ((__(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 40)) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getName", [], "method", false, false, false, 40))]), "html", null, true);
            yield "
        ";
            // line 41
            $context["superheader_raw"] = false;
            // line 42
            yield "        ";
            if ((($tmp = ($context["readall"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "            ";
                $context["superheader"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 44
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%d linked %s"), ($context["number"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype_1"] ?? null), ($context["number"] ?? null))), "html", null, true);
                    yield "
                (<a href=\"";
                    // line 45
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeSearchPath(($context["itemtype_1"] ?? null)), "html", null, true);
                    yield "?";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(($context["params"] ?? null), "&"), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show all"), "html", null, true);
                    yield "</a>)
            ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 47
                yield "            ";
                $context["superheader_raw"] = true;
                // line 48
                yield "        ";
            } else {
                // line 49
                yield "            ";
                $context["superheader"] = Twig\Extension\CoreExtension::sprintf(__("You don't have right to see all %s"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype_1"] ?? null), Session::getPluralNumber()));
                // line 50
                yield "        ";
            }
            // line 51
            yield "    ";
        }
        // line 52
        yield "
    ";
        // line 53
        $context["values"] = [];
        // line 54
        yield "
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["iterator"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 56
            yield "        ";
            $context["values"] = Twig\Extension\CoreExtension::merge(($context["values"] ?? null), [Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["values"] ?? null)) => ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 56), "item_id" => (($_v0 = $context["data"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null), "itemtype" => ($context["itemtype_1"] ?? null), "associated_elements" => ""]]);
            // line 57
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "
    ";
        // line 59
        $context["common_columns"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((($context["itemtype_1"] ?? null) . "::getCommonDatatableColumns"), []);
        // line 60
        yield "    ";
        $context["entries"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((($context["itemtype_1"] ?? null) . "::getDatatableEntries"), [($context["values"] ?? null)]);
        // line 61
        yield "    ";
        $context["datatable_params"] = ["super_header" => ["label" => ((        // line 63
array_key_exists("superheader", $context)) ? (Twig\Extension\CoreExtension::default(($context["superheader"] ?? null), "")) : ("")), "is_raw" => ((        // line 64
array_key_exists("superheader_raw", $context)) ? (Twig\Extension\CoreExtension::default(($context["superheader_raw"] ?? null), false)) : (false))], "is_tab" => true, "nofilter" => true, "nosort" => true, "entries" =>         // line 69
($context["entries"] ?? null), "total_number" => Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 70
($context["entries"] ?? null)), "showmassiveactions" => ((        // line 71
array_key_exists("canedit", $context)) ? (Twig\Extension\CoreExtension::default(($context["canedit"] ?? null), false)) : (false))];
        // line 73
        yield "    ";
        $context["merged_params"] = Twig\Extension\CoreExtension::merge(($context["datatable_params"] ?? null), ($context["common_columns"] ?? null));
        // line 74
        yield "
    ";
        // line 75
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/datatable.html.twig", ($context["merged_params"] ?? null), false);
        yield "
</div>

";
        // line 78
        if ((($tmp = ($context["showform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "    ";
            if ((($context["number2"] ?? null) > 0)) {
                // line 80
                yield "        ";
                $context["values"] = [];
                // line 81
                yield "
        ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["iterator2"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 83
                    yield "            ";
                    $context["values"] = Twig\Extension\CoreExtension::merge(($context["values"] ?? null), [Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["values"] ?? null)) => ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 83), "item_id" => (($_v1 = $context["data"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["id"] ?? null) : null), "itemtype" => ($context["itemtype_1"] ?? null), "associated_elements" => ""]]);
                    // line 84
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['data'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                yield "
        ";
                // line 86
                $context["common_columns"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((($context["itemtype_1"] ?? null) . "::getCommonDatatableColumns"), []);
                // line 87
                yield "        ";
                $context["entries2"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((($context["itemtype_1"] ?? null) . "::getDatatableEntries"), [($context["values"] ?? null)]);
                // line 88
                yield "        ";
                $context["datatable_params"] = ["super_header" => Twig\Extension\CoreExtension::sprintf(__("%s on linked items"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(                // line 89
($context["itemtype_1"] ?? null), ($context["number"] ?? null))), "is_tab" => true, "nofilter" => true, "nosort" => true, "entries" =>                 // line 93
($context["entries2"] ?? null), "total_number" => Twig\Extension\CoreExtension::length($this->env->getCharset(),                 // line 94
($context["entries2"] ?? null)), "showmassiveactions" =>                 // line 95
($context["canedit"] ?? null)];
                // line 97
                yield "        ";
                $context["merged_params"] = Twig\Extension\CoreExtension::merge(($context["datatable_params"] ?? null), ($context["common_columns"] ?? null));
                // line 98
                yield "
        ";
                // line 99
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/datatable.html.twig", ($context["merged_params"] ?? null), false);
                yield "
    ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/item_itilobject_item_list.html.twig";
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
        return array (  198 => 99,  195 => 98,  192 => 97,  190 => 95,  189 => 94,  188 => 93,  187 => 89,  185 => 88,  182 => 87,  180 => 86,  177 => 85,  171 => 84,  168 => 83,  164 => 82,  161 => 81,  158 => 80,  155 => 79,  153 => 78,  147 => 75,  144 => 74,  141 => 73,  139 => 71,  138 => 70,  137 => 69,  136 => 64,  135 => 63,  133 => 61,  130 => 60,  128 => 59,  125 => 58,  119 => 57,  116 => 56,  112 => 55,  109 => 54,  107 => 53,  104 => 52,  101 => 51,  98 => 50,  95 => 49,  92 => 48,  89 => 47,  79 => 45,  74 => 44,  71 => 43,  68 => 42,  66 => 41,  61 => 40,  59 => 39,  56 => 38,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/item_itilobject_item_list.html.twig", "/var/www/html/glpi/templates/components/form/item_itilobject_item_list.html.twig");
    }
}
