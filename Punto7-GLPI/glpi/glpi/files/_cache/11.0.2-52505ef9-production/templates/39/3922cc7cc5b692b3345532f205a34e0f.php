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

/* install/step3.html.twig */
class __TwigTemplate_74c46913657a71e3266d3c05a272cb52 extends Template
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
<h3>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Test of the connection at the database"), "html", null, true);
        yield "</h3>

";
        // line 37
        if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["host"] ?? null)) == 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["user"] ?? null)) == 0)) || CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "connect_error", [], "any", false, false, false, 37))) {
            // line 38
            yield "
   ";
            // line 39
            yield $macros["alerts"]->getTemplateForMacro("macro_alert_danger", $context, 39, $this->getSourceContext())->macro_alert_danger(...[__("Can't connect to the database"), Twig\Extension\CoreExtension::sprintf(__("The server answered: %s"), CoreExtension::getAttribute($this->env, $this->source,             // line 41
($context["link"] ?? null), "connect_error", [], "any", false, false, false, 41))]);
            // line 42
            yield "

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
         <i class=\"ti ti-chevron-left me-1 fs-2x alert-icon\"></i>
         ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Back"), "html", null, true);
            yield "
      </button>

      <input type=\"hidden\" name=\"update\" value=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["update"] ?? null), "html", null, true);
            yield "\">
      <input type=\"hidden\" name=\"install\" value=\"Etape_1\">
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\">
   </form>
";
        } else {
            // line 55
            yield "   ";
            yield $macros["alerts"]->getTemplateForMacro("macro_alert_success", $context, 55, $this->getSourceContext())->macro_alert_success(...[__("Database connection successful")]);
            // line 57
            yield "

   ";
            // line 59
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["engine_requirement"] ?? null), "isValidated", [], "method", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 60
                yield "      ";
                yield $macros["alerts"]->getTemplateForMacro("macro_alert_danger", $context, 60, $this->getSourceContext())->macro_alert_danger(...[__("Database engine is not supported."), CoreExtension::getAttribute($this->env, $this->source,                 // line 62
($context["engine_requirement"] ?? null), "getValidationMessages", [], "method", false, false, false, 62)]);
                // line 63
                yield "
   ";
            }
            // line 65
            yield "
   ";
            // line 66
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["config_requirement"] ?? null), "isValidated", [], "method", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 67
                yield "      ";
                yield $macros["alerts"]->getTemplateForMacro("macro_alert_danger", $context, 67, $this->getSourceContext())->macro_alert_danger(...[__("Database configuration is not supported."), CoreExtension::getAttribute($this->env, $this->source,                 // line 69
($context["config_requirement"] ?? null), "getValidationMessages", [], "method", false, false, false, 69)]);
                // line 70
                yield "
   ";
            }
            // line 72
            yield "
   ";
            // line 73
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["engine_requirement"] ?? null), "isValidated", [], "method", false, false, false, 73) && CoreExtension::getAttribute($this->env, $this->source, ($context["config_requirement"] ?? null), "isValidated", [], "method", false, false, false, 73))) {
                // line 74
                yield "      <div class=\"container mt-4\">
         <form action='install.php' method='post'>
            <div class=\"mb-3\">
                ";
                // line 77
                if ((($context["update"] ?? null) == "no")) {
                    // line 78
                    yield "                    <h3>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please select a database:"), "html", null, true);
                    yield "</h3>

                    <div class=\"hr-text text-white mt-6\">
                        ";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Create a new database:"), "html", null, true);
                    yield "
                    </div>
                    <input type=\"text\" name=\"newdatabasename\" id=\"new_db\" class=\"form-control\" autofocus>

                    <div class=\"hr-text text-white mt-6\">
                        ";
                    // line 86
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Or use an existing one:"), "html", null, true);
                    yield "
                    </div>
                ";
                } else {
                    // line 89
                    yield "                    <h3>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please select a database to update:"), "html", null, true);
                    yield "</h3>
                ";
                }
                // line 91
                yield "
                ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["databases"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
                    // line 93
                    yield "                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"databasename\" id=\"";
                    // line 94
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\String\StringExtension']->createSlug($context["database"]), "html", null, true);
                    yield "\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["database"], "html", null, true);
                    yield "\">
                        <label class=\"form-check-label\" for=\"";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\String\StringExtension']->createSlug($context["database"]), "html", null, true);
                    yield "\">
                            ";
                    // line 96
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["database"], "html", null, true);
                    yield "
                        </label>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['database'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                yield "            </div>

            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
               ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "html", null, true);
                yield "
               <i class=\"ti ti-chevron-right ms-1\"></i>
            </button>

            ";
                // line 107
                if ((($context["update"] ?? null) == "no")) {
                    // line 108
                    yield "               <input type=\"hidden\" name=\"install\" value=\"Etape_3\">
            ";
                } else {
                    // line 110
                    yield "               <input type=\"hidden\" name=\"install\" value=\"update_1\">
            ";
                }
                // line 112
                yield "
            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\">
         </form>
      </div>
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
        return "install/step3.html.twig";
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
        return array (  211 => 113,  208 => 112,  204 => 110,  200 => 108,  198 => 107,  191 => 103,  186 => 100,  176 => 96,  172 => 95,  166 => 94,  163 => 93,  159 => 92,  156 => 91,  150 => 89,  144 => 86,  136 => 81,  129 => 78,  127 => 77,  122 => 74,  120 => 73,  117 => 72,  113 => 70,  111 => 69,  109 => 67,  107 => 66,  104 => 65,  100 => 63,  98 => 62,  96 => 60,  94 => 59,  90 => 57,  87 => 55,  81 => 52,  76 => 50,  70 => 47,  63 => 42,  61 => 41,  60 => 39,  57 => 38,  55 => 37,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step3.html.twig", "/var/www/html/glpi/templates/install/step3.html.twig");
    }
}
