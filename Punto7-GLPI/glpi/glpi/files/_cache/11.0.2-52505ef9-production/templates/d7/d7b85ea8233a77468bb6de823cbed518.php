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

/* pages/setup/general/management_setup.html.twig */
class __TwigTemplate_2e120bdf8e1a63c48f267329e656ff49 extends Template
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

        $this->blocks = [
            'config_fields' => [$this, 'block_config_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "pages/setup/general/base_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 33
        $this->parent = $this->load("pages/setup/general/base_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 37, $this->getSourceContext())->macro_largeTitle(...[__("Documents setup"), "ti ti-files"]);
        yield "
    <div>
        <div class=\"alert alert-info mx-2\">
            ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The maximum upload size is primarily determined by the \"upload_max_filesize\" and \"post_max_size\" PHP settings. The setting below is to further restrict the uploads for just GLPI."), "html", null, true);
        yield "
        </div>
    <div>
   ";
        // line 43
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 43, $this->getSourceContext())->macro_numberField(...["document_max_size", (($_v0 = ($context["config"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["document_max_size"] ?? null) : null), __("Document files maximum size (Mio)"), ["min" => 1]]);
        // line 45
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/management_setup.html.twig";
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
        return array (  76 => 45,  74 => 43,  68 => 40,  61 => 37,  54 => 36,  49 => 33,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/management_setup.html.twig", "/var/www/html/glpi/templates/pages/setup/general/management_setup.html.twig");
    }
}
