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

/* __string_template__22e7afdcaa970657b72edcf49c9e76bf */
class __TwigTemplate_7064d3501873993846f2282721274a50 extends Template
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
        yield "                ";
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "                <div class=\"mb-3\">
                    <form method=\"post\" name=\"certificates_form\" action=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Certificate_Item"), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"itemtype\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class(($context["item"] ?? null)), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"items_id\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 5), "html", null, true);
        yield "\">
                        ";
        // line 6
        if ((get_class(($context["item"] ?? null)) === "Ticket")) {
            // line 7
            yield "                            <input type=\"hidden\" name=\"tickets_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 7), "html", null, true);
            yield "\">
                        ";
        }
        // line 9
        yield "                        <input type=\"hidden\" name=\"entities_id\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 9), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"is_recursive\" value=\"";
        // line 10
        yield (((($tmp = ($context["is_recursive"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
        yield "\">
                        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
                        <div class=\"d-flex\">
                            ";
        // line 13
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 13, $this->getSourceContext())->macro_dropdownField(...["Certificate", "certificates_id", null, "", Twig\Extension\CoreExtension::merge(($context["dropdown_params"] ?? null), ["add_field_class" => "d-inline", "no_label" => true])]);
        // line 16
        yield "
                            <div>
                                <button type=\"submit\" name=\"add\" class=\"btn btn-primary ms-3 mb-3\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btn_label"] ?? null), "html", null, true);
        yield "</button>
                            </div>
                        </div>
                    </form>
                </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__22e7afdcaa970657b72edcf49c9e76bf";
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
        return array (  88 => 18,  84 => 16,  82 => 13,  77 => 11,  73 => 10,  68 => 9,  62 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__22e7afdcaa970657b72edcf49c9e76bf", "");
    }
}
