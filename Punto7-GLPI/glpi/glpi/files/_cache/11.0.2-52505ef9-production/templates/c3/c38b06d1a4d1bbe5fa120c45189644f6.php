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

/* __string_template__fcd5d63047710bb678bfd75e204ed2b1 */
class __TwigTemplate_ec127c294243f8b1ba429c966dde7711 extends Template
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
        // line 1
        yield "              <div class=\"progress\" style=\"height: 15px; min-width: 50px;\">
                 <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: ";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["percentage"] ?? null), "html", null, true);
        yield "%;\"
                    aria-valuenow=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["percentage"] ?? null), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
        yield "</div>
              </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__fcd5d63047710bb678bfd75e204ed2b1";
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
        return array (  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__fcd5d63047710bb678bfd75e204ed2b1", "");
    }
}
