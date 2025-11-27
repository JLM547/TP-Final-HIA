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

/* components/itilobject/layout.html.twig */
class __TwigTemplate_577b7b38f722a60ecedd4eb6f8c92f2f extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        $context["main_rand"] = ($context["rand"] ?? null);
        // line 35
        $context["is_helpdesk"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk");
        // line 36
        $context["show_extra_fields"] = ( !($context["is_helpdesk"] ?? null) || ($context["show_tickets_properties_on_helpdesk"] ?? null));
        // line 37
        yield "
";
        // line 38
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 39
        $context["is_collapsed"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["itil_layout"] ?? null), "collapsed", [], "array", true, true, false, 39) &&  !(null === (($_v0 = ($context["itil_layout"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["collapsed"] ?? null) : null)))) ? ((($_v1 = ($context["itil_layout"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["collapsed"] ?? null) : null)) : (false)) == "true");
        // line 40
        $context["is_expanded"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["itil_layout"] ?? null), "expanded", [], "array", true, true, false, 40) &&  !(null === (($_v2 = ($context["itil_layout"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["expanded"] ?? null) : null)))) ? ((($_v3 = ($context["itil_layout"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["expanded"] ?? null) : null)) : (false)) == "true");
        // line 41
        $context["collapsed_cls"] = (((($tmp = ($context["is_collapsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("right-collapsed") : (""));
        // line 42
        $context["expanded_cls"] = (((($context["is_expanded"] ?? null) == "true")) ? ("right-expanded") : (""));
        // line 43
        $context["template_preview"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "template_preview", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "template_preview", [], "any", false, false, false, 43), false)) : (false));
        // line 44
        yield "
";
        // line 45
        $context["left_regular_cls"] = "col-lg-8";
        // line 46
        $context["right_regular_cls"] = "col-lg-4";
        // line 47
        yield "
";
        // line 48
        $context["left_expanded_cls"] = "col-xl-5 col-lg-6";
        // line 49
        $context["right_expanded_cls"] = "col-xl-7 col-lg-6";
        // line 50
        yield "
";
        // line 51
        $context["left_side_cls"] = ($context["left_regular_cls"] ?? null);
        // line 52
        $context["right_side_cls"] = ($context["right_regular_cls"] ?? null);
        // line 53
        if ((($tmp = ($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "    ";
            $context["left_side_cls"] = ($context["left_expanded_cls"] ?? null);
            // line 55
            yield "    ";
            $context["right_side_cls"] = ($context["right_expanded_cls"] ?? null);
        }
        // line 57
        yield "

<div id=\"itil-object-container\" class=\"mt-n1 ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["collapsed_cls"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["expanded_cls"] ?? null), "html", null, true);
        yield "\">

   ";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 61) &&  !($context["template_preview"] ?? null))) {
            // line 62
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/mainform_open.html.twig");
            yield "
   ";
        }
        // line 64
        yield "
   <div class=\"row d-flex flex-column itil-object\">
      ";
        // line 66
        $context["is_timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 67
        yield "      ";
        $context["fl_direction"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 67) || ($context["is_timeline_reversed"] ?? null))) ? ("flex-column") : ("flex-column-reverse"));
        // line 68
        yield "      <div class=\"itil-left-side col-12 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_side_cls"] ?? null), "html", null, true);
        yield " order-last order-lg-first pt-2 pe-2 pe-lg-4 d-flex ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fl_direction"] ?? null), "html", null, true);
        yield " border-top border-4 ";
        yield (((($tmp =  !($context["show_extra_fields"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("w-100") : (""));
        yield "\">
         ";
        // line 69
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/new_form.html.twig");
            yield "
         ";
        } else {
            // line 72
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/timeline.html.twig");
            yield "
         ";
        }
        // line 74
        yield "      </div>
      ";
        // line 75
        if ((($tmp = ($context["show_extra_fields"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "         <div class=\"itil-right-side col-12 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["right_side_cls"] ?? null), "html", null, true);
            yield " mt-0 mt-lg-n1 card-footer p-0 rounded-0\">
            ";
            // line 77
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "               ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/mainform_open.html.twig");
                yield "
            ";
            }
            // line 80
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields_panel.html.twig");
            yield "
            ";
            // line 81
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 82
                yield "               ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/mainform_close.html.twig");
                yield "
            ";
            }
            // line 84
            yield "         </div>
      ";
        }
        // line 86
        yield "   </div>

   ";
        // line 88
        if ((($tmp =  !($context["template_preview"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/footer.html.twig");
            yield "
      ";
            // line 90
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 91
                yield "           ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/mainform_close.html.twig");
                yield "
      ";
            }
            // line 93
            yield "   ";
        }
        // line 94
        yield "</div>

";
        // line 97
        yield "<form method=\"POST\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CommonITILObject_CommonITILObject::getFormURL"), "html", null, true);
        yield "\" class=\"d-none\" id=\"linked_itilobjects_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["main_rand"] ?? null), "html", null, true);
        yield "\" data-submit-once>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
   <input type=\"hidden\" name=\"purge\" value=\"1\" />
   <input type=\"hidden\" name=\"itemtype\" value=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 100), "html", null, true);
        yield "\" />
   <input type=\"hidden\" name=\"items_id\" value=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 101)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["id"] ?? null) : null), "html", null, true);
        yield "\" />
</form>

";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["requester", "observer", "assign"]);
        foreach ($context['_seq'] as $context["_key"] => $context["actortype"]) {
            // line 106
            yield "   <form method=\"POST\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 106), "html", null, true);
            yield "\" class=\"d-none\" id=\"addme_as_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["actortype"], "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["main_rand"] ?? null), "html", null, true);
            yield "\" data-submit-once>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
      <input type=\"hidden\" name=\"addme_as_actor\" value=\"1\" />
      <input type=\"hidden\" name=\"actortype\" value=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["actortype"], "html", null, true);
            yield "\" />
   </form>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['actortype'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "
<form name=\"massaction_";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" id=\"massaction_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" method=\"post\"
      action=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
        yield "?_single_item[itemtype]=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 114), "html", null, true);
        yield "&_single_item[id]=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 114), "html", null, true);
        yield "\" data-submit-once>
   <div id=\"massive_container_";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"></div>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
</form>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".switch-panel-width\", function() {
       if (\$('#itil-object-container').hasClass('right-collapsed')) {
           \$('#itil-object-container').removeClass('right-collapsed');
       } else if (\$('.itil-left-side').hasClass(\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_regular_cls"] ?? null), "html", null, true);
        yield "\")) {
         // Expand right-side panel
         \$('#itil-object-container').addClass('right-expanded');
         // Left side
         \$('.itil-left-side').removeClass(\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_regular_cls"] ?? null), "html", null, true);
        yield "\").addClass(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_expanded_cls"] ?? null), "html", null, true);
        yield "\");
         \$('.itil-footer .timeline-buttons').removeClass(\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_regular_cls"] ?? null), "html", null, true);
        yield "\").addClass(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_expanded_cls"] ?? null), "html", null, true);
        yield "\");
         // Right side
         \$('.itil-footer .form-buttons').removeClass('col-lg').addClass(\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["right_expanded_cls"] ?? null), "html", null, true);
        yield "\");
         \$('.itil-right-side').removeClass(\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["right_regular_cls"] ?? null), "html", null, true);
        yield "\").addClass(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["right_expanded_cls"] ?? null), "html", null, true);
        yield "\");
         // Switcher buttons
         \$('.switch-panel-width i.fas').removeClass('fa-caret-left').addClass('fa-caret-right');
         \$('.itil-right-side .accordion-body:not(.accordion-actors).row .col-12').removeClass('col-12').addClass('col-sm-6');
         \$('#actors .col-12').removeClass('col-12').addClass('col-sm-4');
      } else {
         // Decrease right-side panel
         \$('#itil-object-container').removeClass('right-expanded');
         // Left side
         \$('.itil-left-side').removeClass(\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_expanded_cls"] ?? null), "html", null, true);
        yield "\").addClass(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_regular_cls"] ?? null), "html", null, true);
        yield "\");
         \$('.itil-footer .timeline-buttons').removeClass(\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_expanded_cls"] ?? null), "html", null, true);
        yield "\").addClass(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["left_regular_cls"] ?? null), "html", null, true);
        yield "\");
         // Right side
         \$('.itil-footer .form-buttons').removeClass(\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["right_expanded_cls"] ?? null), "html", null, true);
        yield "\").addClass('col-lg');
         \$('.itil-right-side').removeClass(\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["right_expanded_cls"] ?? null), "html", null, true);
        yield "\").addClass(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["right_regular_cls"] ?? null), "html", null, true);
        yield "\");
         // Switcher buttons
         \$('.switch-panel-width i.fas').removeClass('fa-caret-right').addClass('fa-caret-left');
         \$('.itil-right-side .accordion-body:not(.accordion-actors).row .col-sm-6').removeClass('col-sm-6').addClass('col-12');
         \$('#actors .col-sm-4').removeClass('col-sm-4').addClass('col-12');
      }

      saveFieldPanelState();
   });

    \$(document).on(\"click\", \".collapse-panel\", function() {
       \$('#itil-object-container').addClass('right-collapsed');

        // Hide all accordion item
        \$('#itil-data .accordion-collapse').removeClass('show');
        \$('#itil-data .accordion-button').addClass('collapsed');

       saveFieldPanelState();
    });

    \$(document).on(\"click\", \".right-collapsed .itil-right-side\", function(event) {
        \$('#itil-object-container').removeClass('right-collapsed');
        saveFieldPanelState();
    });

    var myCollapsible = document.getElementById('itil-data')
    myCollapsible.addEventListener('shown.bs.collapse', function () {
        saveFieldPanelState();
    });
    myCollapsible.addEventListener('hidden.bs.collapse', function () {
        saveFieldPanelState();
    });

    var itil_layout = {
        collapsed: false,
        expanded: false,
        items: {}
    };

    var saveFieldPanelState = function() {
        itil_layout.collapsed = \$('#itil-object-container').hasClass('right-collapsed');
        itil_layout.expanded  = \$('#itil-object-container').hasClass('right-expanded');

        \$('#itil-data .accordion-collapse').each(function() {
            var item_shown = \$(this).hasClass('show');
            var item_id    = \$(this).attr('id');

            itil_layout.items[item_id] = item_shown;
        });

        \$.ajax({
            url: CFG_GLPI.root_doc + '/ajax/itillayout.php',
            type: 'POST',
            datatype: \"json\",
            data: {
                'itil_layout': itil_layout
            }
        });
    }

    var restoreFieldPanelState = function() {
        \$.each(field_panel_state.items, function(item_id, item_shown) {
            if (item_shown) {
                \$('#' + item_id).addClass('show');
            } else {
                \$('#' + item_id).removeClass('show');
            }
        });
    }
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
        return "components/itilobject/layout.html.twig";
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
        return array (  346 => 145,  342 => 144,  335 => 142,  329 => 141,  315 => 132,  311 => 131,  304 => 129,  298 => 128,  291 => 124,  280 => 116,  276 => 115,  268 => 114,  262 => 113,  259 => 112,  250 => 109,  245 => 107,  236 => 106,  232 => 105,  226 => 101,  222 => 100,  217 => 98,  210 => 97,  206 => 94,  203 => 93,  197 => 91,  195 => 90,  190 => 89,  188 => 88,  184 => 86,  180 => 84,  174 => 82,  172 => 81,  167 => 80,  161 => 78,  159 => 77,  154 => 76,  152 => 75,  149 => 74,  143 => 72,  137 => 70,  135 => 69,  126 => 68,  123 => 67,  121 => 66,  117 => 64,  111 => 62,  109 => 61,  102 => 59,  98 => 57,  94 => 55,  91 => 54,  89 => 53,  87 => 52,  85 => 51,  82 => 50,  80 => 49,  78 => 48,  75 => 47,  73 => 46,  71 => 45,  68 => 44,  66 => 43,  64 => 42,  62 => 41,  60 => 40,  58 => 39,  56 => 38,  53 => 37,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/layout.html.twig", "/var/www/html/glpi/templates/components/itilobject/layout.html.twig");
    }
}
