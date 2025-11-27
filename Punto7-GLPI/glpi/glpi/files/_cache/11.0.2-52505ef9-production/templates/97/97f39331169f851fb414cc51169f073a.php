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

/* layout/parts/user_header.html.twig */
class __TwigTemplate_bd805858c5ca3ea10f39804546244008 extends Template
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
        $context["rand_header"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        yield "
<div class=\"btn-group\">
   ";
        // line 36
        if ((($tmp =  !(null === ($context["user"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "      <div class=\"navbar-nav flex-row order-md-last user-menu\">
         <div class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link d-flex lh-1 text-reset p-1 dropdown-toggle user-menu-dropdown-toggle ";
            // line 39
            if ((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "bg-red-lt";
            }
            yield "\"
               data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\"
               aria-label=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("User menu"), "html", null, true);
            yield "\">
               ";
            // line 42
            if ((($tmp =  !($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "                  <div class=\"pe-2 d-none d-xl-block\">
                     <div>";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((((CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "name", [], "array", true, true, false, 44) &&  !(null === (($_v0 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null)))) ? ((($_v1 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["name"] ?? null) : null)) : (""))), "truncate", [35, "..."], "method", false, false, false, 44), "html", null, true);
                yield "</div>
                     ";
                // line 45
                $context["entity_completename"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_name");
                // line 46
                yield "                     <div class=\"mt-1 small text-muted-menu\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_completename"] ?? null), "html", null, true);
                yield "\"
                          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                        ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->truncateLeft(($context["entity_completename"] ?? null)), "html", null, true);
                yield "
                     </div>
                  </div>

                  ";
                // line 52
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" => (($_v2 = CoreExtension::getAttribute($this->env, $this->source,                 // line 53
($context["user"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null), "with_link" => false, "avatar_size" => ""]);
                // line 56
                yield "
               ";
            }
            // line 58
            yield "            </a>
            <div class=\"dropdown-menu dropdown-menu-end mt-1 dropdown-menu-arrow animate__animated animate__fadeInRight\">
               <h6 class=\"dropdown-header\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["user"] ?? null)), "html", null, true);
            yield "</h6>

               ";
            // line 62
            if ((($tmp =  !($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "                  ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/profile_selector.html.twig");
                yield "

                  <div class=\"dropdown-divider\"></div>

                  ";
                // line 67
                if ((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasItemtypeRight("Config", Twig\Extension\CoreExtension::constant("UPDATE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 68
                    yield "                     <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/switchdebug.php"), "html", null, true);
                    yield "\"
                        class=\"dropdown-item ";
                    // line 69
                    if ((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "bg-red-lt";
                    }
                    yield "\"
                        title=\"";
                    // line 70
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change mode"), "html", null, true);
                    yield "\">
                        <i class=\"ti ti-bug debug\"></i>
                        ";
                    // line 72
                    yield (((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Debug mode enabled"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Debug mode disabled"), "html", null, true)));
                    yield "
                     </a>
                  ";
                }
                // line 75
                yield "               ";
            }
            // line 76
            yield "
               ";
            // line 78
            yield "
               <div class=\"dropdown-item\">
                  <i class=\"ti ti-language\"></i>
                  ";
            // line 81
            yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("User::showSwitchLangForm");
            yield "
               </div>

               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["help_url"] ?? null), "html", null, true);
            yield "\" class=\"dropdown-item\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Help"), "html", null, true);
            yield "\">
                  <i class=\"ti ti-help\"></i>
                  ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Help"), "html", null, true);
            yield "
               </a>

               <a href=\"#\" class=\"dropdown-item\" title=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("About"), "html", null, true);
            yield "\"
                  id=\"show_about_modal_";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_header"] ?? null), "html", null, true);
            yield "\">
                  <i class=\"ti ti-info-circle\"></i>
                  ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("About"), "html", null, true);
            yield "
                  ";
            // line 95
            if ((($tmp =  !(null === ($context["founded_new_version"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 96
                yield "                     <span class=\"badge bg-info text-dark ms-2\">
                        1
                     </span>
                  ";
            }
            // line 100
            yield "               </a>

               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/preference.php"), "html", null, true);
            yield "\" class=\"dropdown-item\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("My settings"), "html", null, true);
            yield "\">
                  <i class=\"ti ti-user-cog\"></i>
                  ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("My settings"), "html", null, true);
            yield "
               </a>
               <a href=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/front/logout.php" . (((($tmp = (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiextauth")) ? ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiextauth")) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("?noAUTO=1") : ("")))), "html", null, true);
            yield "\" class=\"dropdown-item\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Logout"), "html", null, true);
            yield "\">
                  <i class=\"ti ti-logout\"></i>
                  ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Logout"), "html", null, true);
            yield "
               </a>
            </div>
         </div>
      </div>

      <div class=\"modal fade\" id=\"about_modal_";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_header"] ?? null), "html", null, true);
            yield "\" role=\"dialog\">
         <div class=\"modal-dialog\">
            <div class=\"modal-content\">
               <div class=\"modal-header\">
                  <h4 class=\"modal-title\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("About"), "html", null, true);
            yield "</h4>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
            yield "\"></button>
               </div>
               <div class=\"modal-body\">
                  <p><a href=\"http://glpi-project.org/\" title=\"Powered by Teclib and contributors\" class=\"copyright\">
                     GLPI ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GLPI_VERSION"), "html", null, true);
            yield "
                     Copyright (C) 2015-";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GLPI_YEAR"), "html", null, true);
            yield " Teclib' and contributors
                  </a></p>
                  ";
            // line 128
            if ((($tmp =  !(null === ($context["founded_new_version"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 129
                yield "                     <p>
                        <a href=\"http://www.glpi-project.org\" target=\"_blank\"
                           title=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You will find it on the GLPI-PROJECT.org site."), "html", null, true);
                yield "\">
                           ";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("A new version is available: %s."), ($context["founded_new_version"] ?? null)), "html", null, true);
                yield "
                           <span class=\"badge bg-info text-dark\">
                              1
                           </span>
                        </a>
                     </p>
                  ";
            }
            // line 139
            yield "               </div>
            </div>
         </div>
      </div>
   ";
        }
        // line 144
        yield "</div>

<script type=\"text/javascript\">
\$(function() {
   \$(\"#show_about_modal_";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_header"] ?? null), "html", null, true);
        yield "\").click(function(e) {
      e.preventDefault();
      \$(\"#about_modal_";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_header"] ?? null), "html", null, true);
        yield "\").remove().modal(\"show\");
   });
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
        return "layout/parts/user_header.html.twig";
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
        return array (  294 => 150,  289 => 148,  283 => 144,  276 => 139,  266 => 132,  262 => 131,  258 => 129,  256 => 128,  251 => 126,  247 => 125,  240 => 121,  236 => 120,  229 => 116,  220 => 110,  213 => 108,  208 => 106,  201 => 104,  195 => 100,  189 => 96,  187 => 95,  183 => 94,  178 => 92,  174 => 91,  168 => 88,  161 => 86,  153 => 81,  148 => 78,  145 => 76,  142 => 75,  136 => 72,  131 => 70,  125 => 69,  120 => 68,  118 => 67,  110 => 63,  108 => 62,  103 => 60,  99 => 58,  95 => 56,  93 => 53,  92 => 52,  85 => 48,  79 => 46,  77 => 45,  73 => 44,  70 => 43,  68 => 42,  64 => 41,  57 => 39,  53 => 37,  51 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/user_header.html.twig", "/var/www/html/glpi/templates/layout/parts/user_header.html.twig");
    }
}
