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

/* pages/assistance/stats/form.html.twig */
class __TwigTemplate_5a50a2e9ecbdc8e03b84d1682f094b77 extends Template
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
<form method=\"GET\" name=\"form\" action=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"itemtype\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 37
        if (array_key_exists("id", $context)) {
            // line 38
            yield "        <input type=\"hidden\" name=\"id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\">
    ";
        }
        // line 40
        yield "    ";
        if (array_key_exists("value2", $context)) {
            // line 41
            yield "        <input type=\"hidden\" name=\"value2\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value2"] ?? null), "html", null, true);
            yield "\">
    ";
        }
        // line 43
        yield "    ";
        if (array_key_exists("champ", $context)) {
            // line 44
            yield "        <input type=\"hidden\" name=\"champ\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["champ"] ?? null), "html", null, true);
            yield "\">
    ";
        }
        // line 46
        yield "    ";
        if (array_key_exists("type", $context)) {
            // line 47
            yield "        <input type=\"hidden\" name=\"type\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield "\">
    ";
        }
        // line 49
        yield "
    <div class=\"card mx-auto mb-3\">
        <div class=\"card-body\">
            <div class=\"d-flex align-items-center\">
                ";
        // line 53
        $context["total_cols"] = ((4 - ((array_key_exists("type_params", $context)) ? (0) : (1))) - ((array_key_exists("showgraph", $context)) ? (0) : (1)));
        // line 54
        yield "                ";
        $context["field_class"] = ("col-12 col-sm-" . (12 / ($context["total_cols"] ?? null)));
        // line 55
        yield "                ";
        if (array_key_exists("type_params", $context)) {
            // line 56
            yield "                    ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 56, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,             // line 57
($context["type_params"] ?? null), "field", [], "any", false, false, false, 57), CoreExtension::getAttribute($this->env, $this->source,             // line 58
($context["type_params"] ?? null), "value", [], "any", false, false, false, 58), CoreExtension::getAttribute($this->env, $this->source,             // line 59
($context["type_params"] ?? null), "elements", [], "any", false, false, false, 59), ((CoreExtension::getAttribute($this->env, $this->source,             // line 60
($context["type_params"] ?? null), "label", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["type_params"] ?? null), "label", [], "any", false, false, false, 60), _n("Field", "Fields", 1))) : (_n("Field", "Fields", 1))), ["field_class" =>             // line 62
($context["field_class"] ?? null)]]);
            // line 64
            yield "
                ";
        }
        // line 66
        yield "
                ";
        // line 67
        $context["date_fields"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 68
            yield "                    <div class=\"";
            yield (((($context["total_cols"] ?? null) == 2)) ? ("d-flex") : (""));
            yield "\">
                        ";
            // line 69
            yield $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 69, $this->getSourceContext())->macro_dateField(...["date1",             // line 71
($context["date1"] ?? null), __("Start date"), ["full_width" => (            // line 74
($context["total_cols"] ?? null) != 2), "clearable" => true]]);
            // line 77
            yield "

                        ";
            // line 79
            yield $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 79, $this->getSourceContext())->macro_dateField(...["date2",             // line 81
($context["date2"] ?? null), __("End date"), ["full_width" => (            // line 84
($context["total_cols"] ?? null) != 2), "clearable" => true]]);
            // line 87
            yield "
                    </div>
                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        yield "                ";
        if ((($context["total_cols"] ?? null) == 2)) {
            // line 91
            yield "                    ";
            yield ($context["date_fields"] ?? null);
            yield "
                ";
        } else {
            // line 93
            yield "                    ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 93, $this->getSourceContext())->macro_htmlField(...["", ($context["date_fields"] ?? null), null, ["no_label" => true, "field_class" =>             // line 95
($context["field_class"] ?? null)]]);
            // line 96
            yield "
                ";
        }
        // line 98
        yield "
                ";
        // line 99
        if (array_key_exists("showgraph", $context)) {
            // line 100
            yield "                    ";
            yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 100, $this->getSourceContext())->macro_checkboxField(...["showgraph",             // line 102
($context["showgraph"] ?? null), __("Show graphics"), ["field_class" =>             // line 105
($context["field_class"] ?? null)]]);
            // line 107
            yield "
                ";
        }
        // line 109
        yield "            </div>
            <div class=\"d-flex flex-row-reverse\">
                <input type=\"submit\" class=\"btn btn-primary ms-auto\" value=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Display report"), "html", null, true);
        yield "\">
            </div>
        </div>
    </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/assistance/stats/form.html.twig";
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
        return array (  182 => 111,  178 => 109,  174 => 107,  172 => 105,  171 => 102,  169 => 100,  167 => 99,  164 => 98,  160 => 96,  158 => 95,  156 => 93,  150 => 91,  147 => 90,  141 => 87,  139 => 84,  138 => 81,  137 => 79,  133 => 77,  131 => 74,  130 => 71,  129 => 69,  124 => 68,  122 => 67,  119 => 66,  115 => 64,  113 => 62,  112 => 60,  111 => 59,  110 => 58,  109 => 57,  107 => 56,  104 => 55,  101 => 54,  99 => 53,  93 => 49,  87 => 47,  84 => 46,  78 => 44,  75 => 43,  69 => 41,  66 => 40,  60 => 38,  58 => 37,  54 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/assistance/stats/form.html.twig", "/var/www/html/glpi/templates/pages/assistance/stats/form.html.twig");
    }
}
