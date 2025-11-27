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

/* install/step0.html.twig */
class __TwigTemplate_a563d2ca7e0020d10e63d3f7b4a7a7bb extends Template
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
<div class=\"container text-center\">
   <div class=\"text-start\">
      ";
        // line 37
        $context["alert_messages"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 38
            yield "         ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Choose 'Install' for a completely new installation of GLPI."), "html", null, true);
            yield "<br>
         ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select 'Upgrade' to update your version of GLPI from an earlier version"), "html", null, true);
            yield "
      ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        yield "
      ";
        // line 42
        yield $macros["alerts"]->getTemplateForMacro("macro_alert_info", $context, 42, $this->getSourceContext())->macro_alert_info(...[__("Installation or update of GLPI"),         // line 44
($context["alert_messages"] ?? null)]);
        // line 45
        yield "
   </div>

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Install"), "html", null, true);
        yield "
         <i class=\"fas fa-download ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"update\" value=\"no\">
      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
   </form>

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Upgrade"), "html", null, true);
        yield "
         <i class=\"fas fa-caret-square-up ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"update\" value=\"yes\">
      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
   </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step0.html.twig";
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
        return array (  104 => 67,  95 => 61,  87 => 56,  78 => 50,  71 => 45,  69 => 44,  68 => 42,  65 => 41,  59 => 39,  54 => 38,  52 => 37,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step0.html.twig", "/var/www/html/glpi/templates/install/step0.html.twig");
    }
}
