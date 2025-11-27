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

/* components/itilobject/footer.html.twig */
class __TwigTemplate_adf3d905005c05a6ebd2fc93d2f1d1f9 extends Template
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
        $context["is_helpdesk"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk");
        // line 34
        $context["timeline_btns_cls"] = ($context["left_regular_cls"] ?? null);
        // line 35
        $context["form_btns_cls"] = (((($tmp = ($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["right_expanded_cls"] ?? null)) : ("col-lg"));
        // line 36
        $context["timeline_btn_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpitimeline_action_btn_layout");
        // line 37
        $context["switch_btn_cls"] = "ti ti-caret-left-filled";
        // line 38
        if ((($tmp = ($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "    ";
            $context["timeline_btns_cls"] = ($context["left_expanded_cls"] ?? null);
            // line 40
            yield "    ";
            $context["form_btns_cls"] = ($context["right_expanded_cls"] ?? null);
            // line 41
            yield "    ";
            $context["switch_btn_cls"] = "ti ti-caret-right filled";
        }
        // line 43
        yield "
<div class=\"mx-n2 mb-n2 itil-footer itil-footer p-0 border-top\" id=\"itil-footer\">
   <div class=\"buttons-bar d-flex py-2\">
      <div class=\"col ";
        // line 46
        yield (((($tmp =  !($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["timeline_btns_cls"] ?? null), "html", null, true)) : (""));
        yield " ps-3 timeline-buttons d-flex\">
         ";
        // line 47
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "            ";
            $context["main_actions_itemtypes"] = Twig\Extension\CoreExtension::filter($this->env, ($context["timeline_itemtypes"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ( !CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "hide_in_menu", [], "any", true, true, false, 48) || (CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "hide_in_menu", [], "any", false, false, false, 48) != true)); });
            // line 49
            yield "
            ";
            // line 50
            $context["default_action_data"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["main_actions_itemtypes"] ?? null));
            // line 51
            yield "            ";
            $context["default_action"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["main_actions_itemtypes"] ?? null)));
            // line 52
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNotSolved", [], "method", false, false, false, 52) && (($context["default_action_data"] ?? null) != false))) {
                // line 53
                yield "               ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["main_actions_itemtypes"] ?? null)) > 1)) {
                    // line 54
                    yield "                  ";
                    $context["btn_class"] = (((($context["timeline_btn_layout"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_ACTION_BTN_SPLITTED"))) ? ("") : ("btn-group"));
                    // line 55
                    yield "                  <div class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btn_class"] ?? null), "html", null, true);
                    yield " me-2 main-actions\">
               ";
                } else {
                    // line 57
                    yield "                  ";
                    // line 58
                    yield "                  <div class=\"main-actions\" style=\"display:inline-flex\">
               ";
                }
                // line 60
                yield "                  <button
                     class=\"btn btn-primary answer-action ";
                // line 61
                yield (((($context["default_action"] ?? null) != "answer")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("action-" . ($context["default_action"] ?? null)), "html", null, true)) : (""));
                yield "\"
                     data-bs-toggle=\"collapse\"
                     data-bs-target=\"#new-";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["default_action_data"] ?? null), "class", [], "any", false, false, false, 63), "html", null, true);
                yield "-block\"
                  >
                     <i class=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["default_action_data"] ?? null), "icon", [], "any", false, false, false, 65), "html", null, true);
                yield "\"></i>
                     <span>";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["default_action_data"] ?? null), "label", [], "any", false, false, false, 66), "html", null, true);
                yield "</span>
                  </button>

                  ";
                // line 69
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["main_actions_itemtypes"] ?? null)) > 1)) {
                    // line 70
                    yield "                     ";
                    if ((($context["timeline_btn_layout"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_ACTION_BTN_SPLITTED"))) {
                        // line 71
                        yield "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["main_actions_itemtypes"] ?? null));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["action"] => $context["timeline_itemtype"]) {
                            // line 72
                            yield "                        ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 72) > 0)) {
                                // line 73
                                yield "                              <button class=\"ms-2 btn btn-primary answer-action action-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true);
                                yield "\" data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 73), "html", null, true);
                                yield "-block\">
                                 <i class=\"";
                                // line 74
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "icon", [], "any", false, false, false, 74), "html", null, true);
                                yield "\"></i>
                                 <span>";
                                // line 75
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "short_label", [], "any", false, false, false, 75), "html", null, true);
                                yield "</span>
                              </button>
                              ";
                            }
                            // line 78
                            yield "                        ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['action'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 79
                        yield "                     ";
                    } else {
                        // line 80
                        yield "                        <button
                           type=\"button\"
                           class=\"btn btn-primary dropdown-toggle dropdown-toggle-split ";
                        // line 82
                        yield (((($context["default_action"] ?? null) != "answer")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("action-" . ($context["default_action"] ?? null)), "html", null, true)) : (""));
                        yield "\"
                           data-bs-toggle=\"dropdown\"
                           aria-expanded=\"false\"
                        >
                           <span class=\"visually-hidden\">";
                        // line 86
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("View other actions"), "html", null, true);
                        yield "</span>
                        </button>
                        <ul class=\"dropdown-menu\">
                              ";
                        // line 89
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["main_actions_itemtypes"] ?? null));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["action"] => $context["timeline_itemtype"]) {
                            // line 90
                            yield "                                 ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 90) > 0)) {
                                // line 91
                                yield "                                 <li><a class=\"dropdown-item action-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true);
                                yield " answer-action\" href=\"#\"
                                    data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                                // line 92
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 92), "html", null, true);
                                yield "-block\">
                                    <i class=\"";
                                // line 93
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "icon", [], "any", false, false, false, 93), "html", null, true);
                                yield "\"></i>
                                    <span>";
                                // line 94
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "label", [], "any", false, false, false, 94), "html", null, true);
                                yield "</span>
                                 </a></li>
                                 ";
                            }
                            // line 97
                            yield "                              ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['action'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 98
                        yield "                        </ul>
                     ";
                    }
                    // line 100
                    yield "                  ";
                }
                // line 101
                yield "               </div>
            ";
            }
            // line 103
            yield "
            <ul class=\"legacy-timeline-actions\">
               ";
            // line 105
            yield ((array_key_exists("legacy_timeline_actions", $context)) ? (Twig\Extension\CoreExtension::default(($context["legacy_timeline_actions"] ?? null), "")) : (""));
            yield "
            </ul>

            ";
            // line 108
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canSolve", [], "method", false, false, false, 108) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "checkRequiredFieldsFilled", [], "method", false, false, false, 108))) {
                // line 109
                yield "               <i class=\"ti ti-alert-triangle text-warning me-2 d-flex align-items-center\"
                  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                  title=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Solving this %s is not possible as one or more mandatory field is not filled"), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 111)), "html", null, true);
                yield "\"></i>
            ";
            }
            // line 113
            yield "
            <div class=\"ms-auto\"></div>

            ";
            // line 116
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canDeleteItem", [], "method", false, false, false, 116) && ($context["is_helpdesk"] ?? null))) {
                // line 117
                yield "               <button class=\"btn btn-ghost-danger me-2\" type=\"submit\" name=\"delete\" form=\"itil-form\">
                  <i class=\"ti ti-trash me-1\"></i>
                  <span>";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel ticket"), "html", null, true);
                yield "</span>
               </button>
            ";
            }
            // line 122
            yield "
            ";
            // line 123
            if ((($tmp =  !($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 124
                yield "               ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/filter_timeline.html.twig");
                yield "
            ";
            }
            // line 126
            yield "         ";
        }
        // line 127
        yield "     </div>

      ";
        // line 129
        if ((($tmp =  !($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 130
            yield "         <div class=\"form-buttons ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_btns_cls"] ?? null), "html", null, true);
            yield " d-flex justify-content-between ms-auto ms-lg-0 my-n2 py-2 pe-3 card-footer border-top-0 position-relative\">
            <span class=\"d-none d-lg-block ms-n3\"
                  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle panels width"), "html", null, true);
            yield "\">
               <button type=\"button\" class=\"switch-panel-width btn btn-icon btn-ghost-secondary px-0\">
                  <i class=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["switch_btn_cls"] ?? null), "html", null, true);
            yield "\"></i>
               </button>
               <button type=\"button\" class=\"collapse-panel btn btn-icon btn-ghost-secondary px-0 mr-1\">
                  <i class=\"ti ti-caret-right-filled\"></i>
               </button>
            </span>

            <span>
            ";
            // line 142
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 143
                yield "               <button class=\"btn btn-primary\" type=\"submit\" name=\"add\" form=\"itil-form\"
                     title=\"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                yield "\">
                  <i class=\"ti ti-plus\"></i>
                  <span class=\"d-none d-lg-block\">";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                yield "</span>
               </button>
            ";
            } else {
                // line 149
                yield "               <div class=\"btn-group d-flex flex-row-reverse\" role=\"group\" id=\"right-actions\">
                  ";
                // line 150
                $context["is_locked"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "locked", [], "array", true, true, false, 150) && (($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["locked"] ?? null) : null));
                // line 151
                yield "                  ";
                $context["display_save_btn"] = ( !($context["is_locked"] ?? null) && ((((($context["canupdate"] ?? null) || ($context["can_requester"] ?? null)) || ($context["canpriority"] ?? null)) || ($context["canassign"] ?? null)) || ($context["canassigntome"] ?? null)));
                // line 152
                yield "
                  ";
                // line 153
                if ((($tmp = ($context["display_save_btn"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 154
                    yield "                     <button class=\"btn btn-primary btn-square\" type=\"submit\" name=\"update\" form=\"itil-form\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                    // line 155
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                    yield "\">
                        <i class=\"ti ti-device-floppy\"></i>
                        <span class=\"d-none d-xl-block\">";
                    // line 157
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                }
                // line 160
                yield "
                   ";
                // line 161
                if ((($tmp = ($context["canupdate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 162
                    yield "                       ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/single-action.html.twig", ["onlyicon" => true]);
                    // line 164
                    yield "
                   ";
                }
                // line 166
                yield "
                  ";
                // line 167
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canDeleteItem", [], "method", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 168
                    yield "                     ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 169
                        yield "                        <button class=\"btn btn-outline-secondary btn-square\" type=\"submit\" name=\"restore\" form=\"itil-form\"
                              title=\"";
                        // line 170
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Restore"), "html", null, true);
                        yield "\">
                           <i class=\"ti ti-trash-off\"></i>
                           <span class=\"d-none d-lg-block\">";
                        // line 172
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Restore"), "html", null, true);
                        yield "</span>
                        </button>

                        <button class=\"btn btn-outline-danger btn-square\" type=\"submit\" name=\"purge\" form=\"itil-form\"
                              title=\"";
                        // line 176
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                        yield "\"
                              onclick=\"return confirm('";
                        // line 177
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "js"), "html", null, true);
                        yield "');\">
                           <i class=\"ti ti-trash\"></i>
                           <span class=\"d-none d-lg-block\">";
                        // line 179
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                        yield "</span>
                        </button>
                     ";
                    } else {
                        // line 182
                        yield "                        <button class=\"btn btn-outline-danger btn-square\" type=\"submit\" name=\"delete\" form=\"itil-form\"
                              title=\"";
                        // line 183
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Put in trashbin"), "html", null, true);
                        yield "\"
                                data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                           <i class=\"ti ti-trash\"></i>
                        </button>
                     ";
                    }
                    // line 188
                    yield "                  ";
                }
                // line 189
                yield "               </div>
            ";
            }
            // line 191
            yield "            </span>
         </div>
      ";
        }
        // line 194
        yield "
   </div>
</div>

";
        // line 198
        $context["openfollowup"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 198) &&  !(null === (($_v1 = ($context["_get"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["_openfollowup"] ?? null) : null)))) ? ((($_v2 = ($context["_get"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["_openfollowup"] ?? null) : null)) : (false));
        // line 199
        $context["is_timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 200
        yield "
<script type=\"text/javascript\">

(function(){
    ";
        // line 209
        yield "   var scrollToTimelineStart = function() {
        // scroll body to ensure we are at bottom (useful for responsive display)
        \$('html, body').animate({
        scrollTop: ";
        // line 212
        yield (((($tmp = ($context["is_timeline_reversed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("-") : (""));
        yield "\$(document).height()
        }, 0, function(){
            // scroll timeline with animation
            var timeline = \$(\"#itil-object-container .itil-left-side\");
            timeline.animate({
                scrollTop: ";
        // line 217
        yield (((($tmp = ($context["is_timeline_reversed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("-") : (""));
        yield "timeline.prop('scrollHeight')
            }, 'slow');
        });
   };

   \$(document).on(\"click\", \"#itil-footer .answer-action\", function() {
      scrollToTimelineStart();
      // hide answer button after clicking on it only for merge btn
      \$(\"#itil-footer .main-actions\").hide();
      // hide also itil object action to prevent confusion
      \$(\"#right-actions\").hide();
   });

   \$(function() {
      // when close button of new answer block is clicked, show again the new answer button (and the itil object actions)
      \$(document).on(\"click\", \"#new-itilobject-form .close-itil-answer\", function() {
         \$(\"#itil-footer .main-actions\").show();
         \$(\"#right-actions\").show();
      });

      ";
        // line 237
        if ((($tmp = ($context["openfollowup"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 238
            yield "         // trigger for reopen, show followup form in timeline
         var myCollapse = document.getElementById('new-ITILFollowup-block')
         var bsCollapse = new bootstrap.Collapse(myCollapse);
         bsCollapse.show();

         scrollToTimelineStart();
      ";
        }
        // line 245
        yield "   });
})();

</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/footer.html.twig";
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
        return array (  533 => 245,  524 => 238,  522 => 237,  499 => 217,  491 => 212,  486 => 209,  480 => 200,  478 => 199,  476 => 198,  470 => 194,  465 => 191,  461 => 189,  458 => 188,  450 => 183,  447 => 182,  441 => 179,  436 => 177,  432 => 176,  425 => 172,  420 => 170,  417 => 169,  414 => 168,  412 => 167,  409 => 166,  405 => 164,  402 => 162,  400 => 161,  397 => 160,  391 => 157,  386 => 155,  383 => 154,  381 => 153,  378 => 152,  375 => 151,  373 => 150,  370 => 149,  364 => 146,  359 => 144,  356 => 143,  354 => 142,  343 => 134,  338 => 132,  332 => 130,  330 => 129,  326 => 127,  323 => 126,  317 => 124,  315 => 123,  312 => 122,  306 => 119,  302 => 117,  300 => 116,  295 => 113,  290 => 111,  286 => 109,  284 => 108,  278 => 105,  274 => 103,  270 => 101,  267 => 100,  263 => 98,  249 => 97,  243 => 94,  239 => 93,  235 => 92,  230 => 91,  227 => 90,  210 => 89,  204 => 86,  197 => 82,  193 => 80,  190 => 79,  176 => 78,  170 => 75,  166 => 74,  159 => 73,  156 => 72,  138 => 71,  135 => 70,  133 => 69,  127 => 66,  123 => 65,  118 => 63,  113 => 61,  110 => 60,  106 => 58,  104 => 57,  98 => 55,  95 => 54,  92 => 53,  89 => 52,  86 => 51,  84 => 50,  81 => 49,  78 => 48,  76 => 47,  72 => 46,  67 => 43,  63 => 41,  60 => 40,  57 => 39,  55 => 38,  53 => 37,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/footer.html.twig", "/var/www/html/glpi/templates/components/itilobject/footer.html.twig");
    }
}
