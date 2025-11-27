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

/* pages/setup/setup_notifications.html.twig */
class __TwigTemplate_43802061184498104d0f900ab747c06e extends Template
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
        if ((($context["can_update_config"] ?? null) || ($context["has_active_mode"] ?? null))) {
            // line 34
            yield "   <div class=\"container\">
      <div class=\"d-flex justify-content-center\">
      ";
            // line 36
            if ((($tmp = ($context["can_update_config"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 37
                yield "         <div class=\"card col-12 col-lg-5\">
            <form method=\"POST\" action=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/setup.notification.php"), "html", null, true);
                yield "\" data-submit-once>
               <div class=\"card-header\">
                  <h3>";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notifications configuration"), "html", null, true);
                yield "</h3>
               </div>

               ";
                // line 43
                if ((($context["use_notifications"] ?? null) &&  !($context["has_active_mode"] ?? null))) {
                    // line 44
                    yield "                  <div class=\"alert alert-important alert-warning m-3\">
                     <i class=\"ti ti-alert-triangle me-2\"></i>
                     ";
                    // line 46
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You must enable at least one notification mode."), "html", null, true);
                    yield "
                  </div>
               ";
                }
                // line 49
                yield "
               <ul class=\"list-group list-group-flush\">
                  <li class=\"list-group-item\">
                     <div class=\"form-check form-switch\">
                        <input name=\"use_notifications\" type=\"hidden\" value=\"0\" />
                        <input name=\"use_notifications\" id=\"use_notifications\"
                              class=\"form-check-input\" type=\"checkbox\" value=\"1\"
                              ";
                // line 56
                yield (((($tmp = ($context["use_notifications"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked=\"checked\"") : (""));
                yield " />
                        <label class=\"form-check-label\" for=\"use_notifications\">
                           ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enable notifications"), "html", null, true);
                yield "
                        </label>
                     </div>
                  </li>
                  ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["modes"] ?? null));
                foreach ($context['_seq'] as $context["mode_key"] => $context["mode"]) {
                    // line 63
                    yield "                     ";
                    $context["mode_disabled"] =  !($context["use_notifications"] ?? null);
                    // line 64
                    yield "                     <li class=\"list-group-item ";
                    yield (((($tmp = ($context["mode_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield "\">
                        <div class=\"form-check form-switch\">
                           <input name=\"notifications_";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["mode_key"], "html", null, true);
                    yield "\" type=\"hidden\" value=\"0\" />
                           <input name=\"notifications_";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["mode_key"], "html", null, true);
                    yield "\" id=\"notifications_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["mode_key"], "html", null, true);
                    yield "\"
                                 class=\"form-check-input\" type=\"checkbox\" value=\"1\"
                                 ";
                    // line 69
                    yield (((($tmp = (($_v0 = $context["mode"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["is_active"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked=\"checked\"") : (""));
                    yield "
                                 ";
                    // line 70
                    yield (((($tmp = ($context["mode_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield " />
                           <label class=\"form-check-label\" for=\"notifications_";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["mode_key"], "html", null, true);
                    yield "\">
                              ";
                    // line 72
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = $context["mode"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["label"] ?? null) : null), "html", null, true);
                    yield "
                           </label>
                        </div>
                     </li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['mode_key'], $context['mode'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                yield "               </ul>

               <div class=\"card-footer\">
                  <button type=\"submit\" class=\"btn btn-primary\">
                     <i class=\"ti ti-device-floppy\"></i>
                     <span>";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
                yield "</span>
                  </button>
               </div>

               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\" />
            </form>
         </div>
      ";
            }
            // line 90
            yield "
      ";
            // line 91
            if ((($context["use_notifications"] ?? null) && ($context["has_active_mode"] ?? null))) {
                // line 92
                yield "         <div class=\"card col-12 col-lg-5 mt-4 mt-lg-0\">
            <div class=\"card-header\">
               <h3>";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Notification", "Notifications", Session::getPluralNumber()), "html", null, true);
                yield "</h3>
            </div>

            <div class=\"list-group list-group-flush\">
               ";
                // line 98
                if ((($tmp = Session::haveRight("config", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 99
                    yield "                  <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/notificationtemplate.php"), "html", null, true);
                    yield "\" class=\"list-group-item list-group-item-action\">
                     <i class=\"";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("NotificationTemplate"), "html", null, true);
                    yield "\"></i>
                     <span>";
                    // line 101
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Notification template", "Notification templates", Session::getPluralNumber()), "html", null, true);
                    yield "</span>
                  </a>
               ";
                }
                // line 104
                yield "
               ";
                // line 105
                if ((($tmp = Session::haveRight("notification", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 106
                    yield "                  <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/notification.php"), "html", null, true);
                    yield "\" class=\"list-group-item list-group-item-action\">
                     <i class=\"";
                    // line 107
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Notification"), "html", null, true);
                    yield "\"></i>
                     <span>";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Notification", "Notifications", Session::getPluralNumber()), "html", null, true);
                    yield "</span>
                  </a>
               ";
                } else {
                    // line 111
                    yield "                  <div class=\"list-group-item\">
                     <div class=\"alert alert-important alert-warning m-3\">
                        <i class=\"ti ti-alert-triangle me-2\"></i>
                        ";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unable to configure notifications: please configure at least one notification type using the above configuration."), "html", null, true);
                    yield "
                     </div>
                  </div>
               ";
                }
                // line 118
                yield "
               ";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["modes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
                    // line 120
                    yield "                  ";
                    if ((($context["can_update_config"] ?? null) && (($_v2 = $context["mode"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["is_active"] ?? null) : null))) {
                        // line 121
                        yield "                     <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = $context["mode"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["setting_url"] ?? null) : null), "html", null, true);
                        yield "\" class=\"list-group-item list-group-item-action\">
                        <i class=\"";
                        // line 122
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = $context["mode"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["icon"] ?? null) : null), "html", null, true);
                        yield "\"></i>
                        <span>";
                        // line 123
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = $context["mode"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["label_settings"] ?? null) : null), "html", null, true);
                        yield "</span>
                     </a>
                  ";
                    }
                    // line 126
                    yield "               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['mode'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                yield "            </div>

         </div
      ";
            }
            // line 131
            yield "      </div>
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
        return "pages/setup/setup_notifications.html.twig";
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
        return array (  270 => 131,  264 => 127,  258 => 126,  252 => 123,  248 => 122,  243 => 121,  240 => 120,  236 => 119,  233 => 118,  226 => 114,  221 => 111,  215 => 108,  211 => 107,  206 => 106,  204 => 105,  201 => 104,  195 => 101,  191 => 100,  186 => 99,  184 => 98,  177 => 94,  173 => 92,  171 => 91,  168 => 90,  161 => 86,  154 => 82,  147 => 77,  136 => 72,  132 => 71,  128 => 70,  124 => 69,  117 => 67,  113 => 66,  107 => 64,  104 => 63,  100 => 62,  93 => 58,  88 => 56,  79 => 49,  73 => 46,  69 => 44,  67 => 43,  61 => 40,  56 => 38,  53 => 37,  51 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/setup_notifications.html.twig", "/var/www/html/glpi/templates/pages/setup/setup_notifications.html.twig");
    }
}
