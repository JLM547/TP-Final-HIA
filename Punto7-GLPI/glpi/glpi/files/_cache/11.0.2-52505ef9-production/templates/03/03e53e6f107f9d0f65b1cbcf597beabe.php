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

/* components/itilobject/fields/priority_matrix.html.twig */
class __TwigTemplate_75ffd312e8aa8287b9b0151a4c9937dd extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 35
        yield "
";
        // line 36
        $context["urgency_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["disabled" => (!(        // line 37
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null)))]);
        // line 39
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 39), "isMandatoryField", ["urgency"], "method", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "   ";
            $context["urgency_options"] = Twig\Extension\CoreExtension::merge(($context["urgency_options"] ?? null), ["required" => true]);
        }
        // line 44
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 44), "isReadonlyField", ["urgency"], "method", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "   ";
            $context["urgency_options"] = Twig\Extension\CoreExtension::merge(($context["urgency_options"] ?? null), ["readonly" => true]);
        }
        // line 49
        yield "
";
        // line 50
        yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 50, $this->getSourceContext())->macro_field(...["urgency", CoreExtension::getAttribute($this->env, $this->source,         // line 52
($context["item"] ?? null), "dropdownUrgency", [Twig\Extension\CoreExtension::merge(["value" => (($_v0 = CoreExtension::getAttribute($this->env, $this->source,         // line 53
($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["urgency"] ?? null) : null), "width" => "100%", "display" => false, "rand" =>         // line 56
($context["rand"] ?? null)],         // line 57
($context["urgency_options"] ?? null))], "method", false, false, false, 52), __("Urgency"), Twig\Extension\CoreExtension::merge(        // line 59
($context["field_options"] ?? null), ["id" => ("dropdown_urgency" . CoreExtension::getAttribute($this->env, $this->source,         // line 60
($context["field_options"] ?? null), "rand", [], "any", false, false, false, 60))])]);
        // line 62
        yield "

";
        // line 64
        $context["impact_options"] = ($context["field_options"] ?? null);
        // line 65
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 65), "isMandatoryField", ["impact"], "method", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "   ";
            $context["impact_options"] = Twig\Extension\CoreExtension::merge(($context["impact_options"] ?? null), ["required" => true]);
        }
        // line 70
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 70), "isReadonlyField", ["impact"], "method", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "   ";
            $context["impact_options"] = Twig\Extension\CoreExtension::merge(($context["impact_options"] ?? null), ["readonly" => true]);
        }
        // line 75
        yield "
";
        // line 76
        yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 76, $this->getSourceContext())->macro_field(...["impact", CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["item"] ?? null), "dropdownImpact", [Twig\Extension\CoreExtension::merge(["value" => (($_v1 = CoreExtension::getAttribute($this->env, $this->source,         // line 79
($context["item"] ?? null), "fields", [], "any", false, false, false, 79)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["impact"] ?? null) : null), "width" => "100%", "display" => false, "rand" =>         // line 82
($context["rand"] ?? null)],         // line 83
($context["impact_options"] ?? null))], "method", false, false, false, 78), __("Impact"),         // line 85
($context["field_options"] ?? null)]);
        // line 86
        yield "

";
        // line 88
        $context["priority_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["disabled" => (!        // line 89
($context["canpriority"] ?? null)), "withmajor" => true]);
        // line 92
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 92), "isMandatoryField", ["priority"], "method", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "   ";
            $context["priority_options"] = Twig\Extension\CoreExtension::merge(($context["priority_options"] ?? null), ["required" => true]);
        }
        // line 97
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 97), "isReadonlyField", ["priority"], "method", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "   ";
            $context["priority_options"] = Twig\Extension\CoreExtension::merge(($context["priority_options"] ?? null), ["readonly" => true]);
        }
        // line 102
        yield "
";
        // line 103
        yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 103, $this->getSourceContext())->macro_field(...["priority", CoreExtension::getAttribute($this->env, $this->source,         // line 105
($context["item"] ?? null), "dropdownPriority", [Twig\Extension\CoreExtension::merge(["value" => (($_v2 = CoreExtension::getAttribute($this->env, $this->source,         // line 106
($context["item"] ?? null), "fields", [], "any", false, false, false, 106)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["priority"] ?? null) : null), "width" => "100%", "display" => false, "rand" =>         // line 109
($context["rand"] ?? null)], Twig\Extension\CoreExtension::merge(        // line 110
($context["field_options"] ?? null), ($context["priority_options"] ?? null)))], "method", false, false, false, 105), __("Priority"),         // line 112
($context["field_options"] ?? null)]);
        // line 113
        yield "

<script type=\"text/javascript\">
\$(function() {
   \$('#dropdown_urgency";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield ", #dropdown_impact";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('change.select2', function (e) {
      \$.ajax({
         url: `\${CFG_GLPI.root_doc}/ajax/priority.php`,
         datatype: 'json',
         data: {
            'urgency': \$('#dropdown_urgency";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').select2('data') ? \$('#dropdown_urgency";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').select2('data')[0].id : 0,
            'impact':  \$('#dropdown_impact";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').select2('data') ? \$('#dropdown_impact";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').select2('data')[0].id : 0,
            '_predefined_fields':  \$('input[name=\"_predefined_fields\"]').val(),
            'getJson': true,
         }
      }).done(function(data) {
         \$('#dropdown_priority";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').val(data.priority);
         \$('#dropdown_priority";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').trigger('change');
      });
   })
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
        return "components/itilobject/fields/priority_matrix.html.twig";
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
        return array (  171 => 129,  167 => 128,  157 => 123,  151 => 122,  141 => 117,  135 => 113,  133 => 112,  132 => 110,  131 => 109,  130 => 106,  129 => 105,  128 => 103,  125 => 102,  121 => 98,  119 => 97,  115 => 93,  113 => 92,  111 => 89,  110 => 88,  106 => 86,  104 => 85,  103 => 83,  102 => 82,  101 => 79,  100 => 78,  99 => 76,  96 => 75,  92 => 71,  90 => 70,  86 => 66,  84 => 65,  82 => 64,  78 => 62,  76 => 60,  75 => 59,  74 => 57,  73 => 56,  72 => 53,  71 => 52,  70 => 50,  67 => 49,  63 => 45,  61 => 44,  57 => 40,  55 => 39,  53 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/fields/priority_matrix.html.twig", "/var/www/html/glpi/templates/components/itilobject/fields/priority_matrix.html.twig");
    }
}
