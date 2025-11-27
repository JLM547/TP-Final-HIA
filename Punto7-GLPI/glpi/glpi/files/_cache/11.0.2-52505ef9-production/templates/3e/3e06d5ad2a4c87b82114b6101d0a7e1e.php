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

/* install/step1.html.twig */
class __TwigTemplate_e48f2a360ce0ef00c00c271c299d9e59 extends Template
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
        if ((($tmp = ($context["config_write_denied"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "    <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Checking write access to configuration files"), "html", null, true);
            yield "</h3>
    <div class=\"alert alert-danger\" role=\"alert\">
        <div class=\"d-flex\">
            <div>
                <i class=\"ti ti-alert-circle me-2\"></i>
            </div>
            <div>
                <h4 class=\"alert-title\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Write access denied for configuration files"), "html", null, true);
            yield "</h4>
                <div class=\"text-secondary\">
                    ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("A temporary write access to the following files is required: %s."), (("`" . Twig\Extension\CoreExtension::join(($context["config_files_to_update"] ?? null), "`, `")) . "`")), "html", null, true);
            yield "
                    <br />
                    ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Write access to these files can be removed once the operation is finished."), "html", null, true);
            yield "
                </div>
            </div>
        </div>
    </div>
";
        } else {
            // line 51
            yield "    <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Checking of the compatibility of your environment with the execution of GLPI"), "html", null, true);
            yield "</h3>
    ";
            // line 52
            yield Twig\Extension\CoreExtension::include($this->env, $context, "install/blocks/requirements_table.html.twig", ["requirements" => ($context["requirements"] ?? null)], false);
            yield "
";
        }
        // line 54
        yield "
";
        // line 55
        $context["common_hiddens"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 56
            yield "   <input type=\"hidden\" name=\"language\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpilanguage"), "html", null, true);
            yield "\">
   <input type=\"hidden\" name=\"update\" value=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["update"] ?? null), "html", null, true);
            yield "\">
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\">
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "
";
        // line 61
        $context["continue_form"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 62
            yield "   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "html", null, true);
            yield "
         <i class=\"ti ti-chevron-right ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_1\">
      ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["common_hiddens"] ?? null), "html", null, true);
            yield "
   </form>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "
";
        // line 73
        $context["retry_form"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 74
            yield "   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
         ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Try again"), "html", null, true);
            yield "
         <i class=\"ti ti-reload ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
      ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["common_hiddens"] ?? null), "html", null, true);
            yield "
   </form>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        yield "
";
        // line 85
        if ((($context["config_write_denied"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["requirements"] ?? null), "hasMissingMandatoryRequirements", [], "method", false, false, false, 85))) {
            // line 86
            yield "   <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Do you want to continue?"), "html", null, true);
            yield "</h3>
   <div class=\"text-center\">
      ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["retry_form"] ?? null), "html", null, true);
            yield "
   </div>
";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 90
($context["requirements"] ?? null), "hasMissingOptionalRequirements", [], "method", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "   <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Do you want to continue?"), "html", null, true);
            yield "</h3>
   <div class=\"text-center\">
      ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["continue_form"] ?? null), "html", null, true);
            yield "
      ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["retry_form"] ?? null), "html", null, true);
            yield "
   </div>
";
        } else {
            // line 97
            yield "   <div class=\"text-center\">
      ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["continue_form"] ?? null), "html", null, true);
            yield "
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
        return "install/step1.html.twig";
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
        return array (  192 => 98,  189 => 97,  183 => 94,  179 => 93,  173 => 91,  171 => 90,  166 => 88,  160 => 86,  158 => 85,  155 => 84,  148 => 81,  140 => 76,  136 => 74,  134 => 73,  131 => 72,  124 => 69,  116 => 64,  112 => 62,  110 => 61,  107 => 60,  101 => 58,  97 => 57,  92 => 56,  90 => 55,  87 => 54,  82 => 52,  77 => 51,  68 => 45,  63 => 43,  58 => 41,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step1.html.twig", "/var/www/html/glpi/templates/install/step1.html.twig");
    }
}
