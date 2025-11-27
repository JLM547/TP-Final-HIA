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

/* pages/setup/authentication/sync.html.twig */
class __TwigTemplate_959467578357487326cd6b04eed0f94a extends Template
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
        yield "
";
        // line 36
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 37
        yield "
<form method=\"post\" action=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("User"), "html", null, true);
        yield "\">
   ";
        // line 39
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 39, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
        yield "
   ";
        // line 40
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 40, $this->getSourceContext())->macro_hidden(...["id", CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getID", [], "any", false, false, false, 40)]);
        yield "

   ";
        // line 42
        if (CoreExtension::inFilter((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["authtype"] ?? null) : null), [Twig\Extension\CoreExtension::constant("Auth::LDAP")])) {
            // line 43
            yield "      ";
            yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 43, $this->getSourceContext())->macro_submit(...["force_ldap_resynch", __("Force synchronization"), 1, ["icon" => "ti ti-refresh"]]);
            // line 45
            yield "
      ";
            // line 46
            yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 46, $this->getSourceContext())->macro_submit(...["clean_ldap_fields", __("Clean LDAP fields and force synchronisation"), 1, ["icon" => "ti ti-recycle"]]);
            // line 48
            yield "
   ";
        }
        // line 50
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 50, $this->getSourceContext())->macro_htmlField(...["", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Auth::dropdown", [["name" => "authtype", "rand" =>         // line 52
($context["rand"] ?? null), "display" => false]]), __("Change of the authentication method"), ["is_horizontal" => false]]);
        // line 56
        yield "
   ";
        // line 57
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [("dropdown_authtype" . ($context["rand"] ?? null)), "show_massiveaction_field", $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/dropdownMassiveActionAuthMethods.php"), ["authtype" => "__VALUE__", "name" => "change_auth_method"]]);
        // line 61
        yield "   <span id=\"show_massiveaction_field\"></span>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/authentication/sync.html.twig";
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
        return array (  93 => 61,  91 => 57,  88 => 56,  86 => 52,  84 => 50,  80 => 48,  78 => 46,  75 => 45,  72 => 43,  70 => 42,  65 => 40,  61 => 39,  57 => 38,  54 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/authentication/sync.html.twig", "/var/www/html/glpi/templates/pages/setup/authentication/sync.html.twig");
    }
}
