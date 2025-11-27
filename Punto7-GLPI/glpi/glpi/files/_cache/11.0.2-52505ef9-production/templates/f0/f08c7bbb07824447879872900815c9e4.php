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

/* pages/setup/notification/recipients.html.twig */
class __TwigTemplate_599ab61a13116f47ad907a925e335ee9 extends Template
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
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 34)->unwrap();
        // line 35
        $context["target"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("NotificationTarget");
        // line 36
        yield "
<form name=\"asset_form\" method=\"post\" action=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "html", null, true);
        yield "\" enctype=\"multipart/form-data\" data-submit-once>
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-12 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  ";
        // line 43
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 43, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
        yield "
                  ";
        // line 44
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 44, $this->getSourceContext())->macro_hidden(...["notifications_id", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null)]);
        yield "
                  ";
        // line 45
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 45, $this->getSourceContext())->macro_hidden(...["itemtype", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["itemtype"] ?? null) : null)]);
        yield "
                  ";
        // line 46
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 46, $this->getSourceContext())->macro_dropdownArrayField(...["_targets", null, ($context["all_targets"] ?? null), _n("Recipient", "Recipients", Session::getPluralNumber()), ["multiple" => true, "readonly" =>  !(($_v2 =         // line 48
($context["params"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["canedit"] ?? null) : null), "values" =>         // line 49
($context["active_targets"] ?? null)]]);
        // line 50
        yield "

                  ";
        // line 52
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 52, $this->getSourceContext())->macro_nullField(...[]);
        yield "
                  ";
        // line 53
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 53, $this->getSourceContext())->macro_dropdownArrayField(...["_exclusions", null, ($context["all_exclusion_targets"] ?? null), _n("Exclusion", "Exclusions", Session::getPluralNumber()), ["multiple" => true, "readonly" =>  !(($_v3 =         // line 55
($context["params"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["canedit"] ?? null) : null), "values" =>         // line 56
($context["excluded_targets"] ?? null)]]);
        // line 57
        yield "
                  ";
        // line 58
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 58, $this->getSourceContext())->macro_nullField(...[]);
        yield "
                   ";
        // line 59
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 59, $this->getSourceContext())->macro_nullField(...[]);
        yield "
                  ";
        // line 60
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 60, $this->getSourceContext())->macro_htmlField(...["", $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 60, $this->getSourceContext())->macro_submit(...["update", _x("button", "Update"), 1]), ""]);
        yield "
               </div>
            </div>
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
        return "pages/setup/notification/recipients.html.twig";
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
        return array (  102 => 60,  98 => 59,  94 => 58,  91 => 57,  89 => 56,  88 => 55,  87 => 53,  83 => 52,  79 => 50,  77 => 49,  76 => 48,  75 => 46,  71 => 45,  67 => 44,  63 => 43,  54 => 37,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/notification/recipients.html.twig", "/var/www/html/glpi/templates/pages/setup/notification/recipients.html.twig");
    }
}
