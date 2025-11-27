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

/* pages/setup/dropdowns_list.html.twig */
class __TwigTemplate_864b603cfbfc4fe50fe6d73062dde9a0 extends Template
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
        $context["grid_items"] = [];
        // line 34
        yield "
";
        // line 35
        $context["nb_opt"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["optgroup"] ?? null));
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["optgroup"] ?? null));
        foreach ($context['_seq'] as $context["label"] => $context["dropdown"]) {
            // line 37
            yield "   ";
            $context["card_id"] = ("dropdowns_list_" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
            // line 38
            yield "   ";
            $context["card_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 39
                yield "      <div class=\"card\">
         <div class=\"accordion accordion-flush\">
            <div class=\"accordion-item\">
               <div class=\"accordion-header\">
                  <button class=\"accordion-button ";
                // line 43
                yield (((($context["nb_opt"] ?? null) > 3)) ? ("collapsed") : (""));
                yield "\" type=\"button\"
                     data-bs-toggle=\"collapse\" data-bs-target=\"#";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["card_id"] ?? null), "html", null, true);
                yield "\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                     ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "
                  </button>
               </div>
               <div id=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["card_id"] ?? null), "html", null, true);
                yield "\" class=\"accordion-collapse ";
                yield (((($context["nb_opt"] ?? null) > 3)) ? ("collapse") : (""));
                yield "\" style=\"transition: none\">
                  <div class=\"list-group list-group-flush list-group-hoverable\">
                     ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["dropdown"]);
                foreach ($context['_seq'] as $context["itemtype"] => $context["dropdown_label"]) {
                    // line 51
                    yield "                        ";
                    $context["is_entity_assign"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeClass($context["itemtype"]), "isEntityAssign", [], "method", false, false, false, 51);
                    // line 52
                    yield "                        <a class=\"list-group-item list-group-item-action ";
                    yield (((($tmp = ($context["is_entity_assign"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("dropdown-no-entity"));
                    yield "\"
                           href=\"";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeSearchPath($context["itemtype"]), "html", null, true);
                    yield "\">
                           <div class=\"row\">
                              <div class=\"col-auto\">
                                 <i class=\"";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon($context["itemtype"]), "html", null, true);
                    yield "\"></i>
                              </div>
                              <div class=\"col text-truncate\">
                                 ";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["dropdown_label"], "html", null, true);
                    yield "
                              </div>
                              <div class=\"col-1 text-muted\">
                                 ";
                    // line 62
                    if ((($tmp = ($context["is_entity_assign"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 63
                        yield "                                    <i class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Entity"), "html", null, true);
                        yield " fs-4\"
                                       data-bs-toggle=\"tooltip\"
                                       title=\"";
                        // line 65
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Entity management"), "html", null, true);
                        yield "\"></i>
                                 ";
                    }
                    // line 67
                    yield "                              </div>
                           </div>
                        </a>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['itemtype'], $context['dropdown_label'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                yield "                  </div>
               </div>
            </div>
         </div>
      </div>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 77
            yield "
   ";
            // line 78
            $context["grid_items"] = Twig\Extension\CoreExtension::merge(($context["grid_items"] ?? null), [            // line 79
($context["card_html"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['dropdown'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "

<div class=\"container-fluid text-start mb-4 dropdowns-list\">
   <div class=\"input-icon mb-3\">
      <input class=\"form-control\" placeholder=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search"), "html", null, true);
        yield "\" id=\"filter-dropdown\" />
      <span class=\"input-icon-addon\">
         <i class=\"ti ti-search\"></i>
      </span>
   </div>

   ";
        // line 92
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/masonry_grid.html.twig", ["grid_items" =>         // line 93
($context["grid_items"] ?? null), "grid_item_class" => "col-lg-6 col-xl-4 col-xxl-3"], false);
        // line 95
        yield "
</div>

<script>
\$(function () {
   var timerid;
   \$('#filter-dropdown').on('input',function() {
      var input_value = \$(this).val();

      clearTimeout(timerid);

      // reset state
      \$('.dropdowns-list .collapse').removeClass('show');
      \$('.dropdowns-list .masonry_grid').trigger(\"layout:refresh\");
      \$('.dropdowns-list .list-group-item').show();
      \$('.dropdowns-list .accordion-collapse').removeClass('show')
      \$('.dropdowns-list .accordion-button').addClass('collapsed')

      if (input_value.length > 0) {
         timerid = setTimeout(function() {
            \$('.dropdowns-list .list-group-item:not(:icontains('+CSS.escape(input_value)+'))').hide();
            \$('.dropdowns-list .list-group-item:icontains('+CSS.escape(input_value)+')')
               .closest('.accordion-collapse').addClass('show')
               .siblings('.accordion-header')
                  .children('.accordion-button').removeClass('collapsed');

            \$('.dropdowns-list .masonry_grid').trigger(\"layout:refresh\");

         }, 500);
      }
   })

   \$('.dropdowns-list .collapse').on('shown.bs.collapse hidden.bs.collapse', function() {
      \$('.dropdowns-list .masonry_grid').trigger(\"layout:refresh\");
   })
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/dropdowns_list.html.twig";
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
        return array (  178 => 95,  176 => 93,  175 => 92,  166 => 86,  160 => 82,  154 => 79,  153 => 78,  150 => 77,  141 => 71,  132 => 67,  127 => 65,  121 => 63,  119 => 62,  113 => 59,  107 => 56,  101 => 53,  96 => 52,  93 => 51,  89 => 50,  82 => 48,  76 => 45,  72 => 44,  68 => 43,  62 => 39,  59 => 38,  56 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/dropdowns_list.html.twig", "/var/www/html/glpi/templates/pages/setup/dropdowns_list.html.twig");
    }
}
