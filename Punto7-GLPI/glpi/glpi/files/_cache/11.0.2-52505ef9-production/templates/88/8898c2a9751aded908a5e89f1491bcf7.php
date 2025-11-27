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

/* install/step6.html.twig */
class __TwigTemplate_88215f44d7c70f9d35b1908010ed6abc extends Template
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
<h3>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Collect data"), "html", null, true);
        yield "</h3>

<hr>
<p>
   ";
        // line 37
        yield ($context["telemetry_info"] ?? null);
        yield "
</p>

<hr>
<p>
   ";
        // line 42
        yield ($context["reference_info"] ?? null);
        yield "
</p>

<hr>
<form action=\"install.php\" method=\"post\" data-submit-once>
   <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
      ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "html", null, true);
        yield "
      <i class=\"ti ti-chevron-right ms-1\"></i>
   </button>

   <input type=\"hidden\" name=\"install\" value=\"Etape_5\">
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step6.html.twig";
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
        return array (  77 => 53,  69 => 48,  60 => 42,  52 => 37,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step6.html.twig", "/var/www/html/glpi/templates/install/step6.html.twig");
    }
}
