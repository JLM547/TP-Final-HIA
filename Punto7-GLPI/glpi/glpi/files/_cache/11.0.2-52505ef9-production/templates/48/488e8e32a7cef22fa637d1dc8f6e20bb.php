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

/* __string_template__ca9f554f0b479bba73160f70cb886d9b */
class __TwigTemplate_b1ff1fff5ade304f782f2c8939a8db93 extends Template
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
        yield "                <div class=\"firstbloc\">
                    ";
        // line 2
        if ((($tmp = ($context["show_add"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "                        <a class=\"btn btn-primary ms-1\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("ManualLink") . "?itemtype=") . CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 3)) . "&items_id=") . (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 3)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getIndexName", [], "method", false, false, false, 3)] ?? null) : null)), "html", null, true);
            yield "\">
                            <i class=\"ti ti-link\"></i>
                            ";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["add_msg"] ?? null), "html", null, true);
            yield "
                        </a>
                    ";
        }
        // line 8
        yield "                    ";
        if ((($tmp = ($context["show_configure"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "                        <a class=\"btn btn-primary ms-1\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeSearchPath("Link"), "html", null, true);
            yield "\">
                            <i class=\"ti ti-settings\"></i>
                            ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["configure_msg"] ?? null), "html", null, true);
            yield "
                        </a>
                    ";
        }
        // line 14
        yield "                </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__ca9f554f0b479bba73160f70cb886d9b";
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
        return array (  74 => 14,  68 => 11,  62 => 9,  59 => 8,  53 => 5,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__ca9f554f0b479bba73160f70cb886d9b", "");
    }
}
