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

/* pages/setup/general/performance.html.twig */
class __TwigTemplate_ffed0852e82f73597f6ae23ab03a01ff extends Template
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
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 41
        yield "
";
        // line 45
        yield "
";
        // line 49
        yield "
";
        // line 50
        if ((($tmp = ($context["opcache_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "   ";
            $context["msg"] = Twig\Extension\CoreExtension::sprintf(__("The \"%s\" extension is installed"), ($context["opcache_ext"] ?? null));
            // line 52
            yield "   ";
            $context["short_msg"] = Twig\Extension\CoreExtension::sprintf(__("%s extension is installed"), ($context["opcache_ext"] ?? null));
        } else {
            // line 54
            yield "   ";
            $context["msg"] = Twig\Extension\CoreExtension::sprintf(__("Installing and enabling the \"%s\" extension may improve GLPI performance"), ($context["opcache_ext"] ?? null));
            // line 55
            yield "   ";
            $context["short_msg"] = Twig\Extension\CoreExtension::sprintf(__("%s extension is not present"), ($context["opcache_ext"] ?? null));
        }
        // line 57
        yield "<table class=\"table table-borderless table-sm\">
   <tbody>
      <tr class=\"table-active\">
         <th colspan=\"4\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("PHP opcode cache"), "html", null, true);
        yield "</th>
      </tr>
      <tr>
         <th class=\"fw-normal\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["msg"] ?? null), "html", null, true);
        yield "</th>
         <td>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["opcache_version"] ?? null), "html", null, true);
        yield "</td>
         <td></td>
         ";
        // line 66
        yield $this->getTemplateForMacro("macro_icon_msg", $context, 66, $this->getSourceContext())->macro_icon_msg(...[($context["short_msg"] ?? null), ("ti ti-circle-check text-" . (((($tmp = ($context["opcache_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("success") : ("danger")))]);
        yield "
      </tr>
      ";
        // line 68
        if ((($tmp = ($context["opcache_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "         ";
            $context["free"] = (($_v0 = (($_v1 = ($context["opcache_info"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["memory_usage"] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["free_memory"] ?? null) : null);
            // line 70
            yield "         ";
            $context["used"] = (($_v2 = (($_v3 = ($context["opcache_info"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["memory_usage"] ?? null) : null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["used_memory"] ?? null) : null);
            // line 71
            yield "         ";
            $context["max"] = (($context["free"] ?? null) + ($context["used"] ?? null));
            // line 72
            yield "         ";
            $context["rate"] = Twig\Extension\CoreExtension::round(((100 * ($context["used"] ?? null)) / ($context["max"] ?? null)));
            // line 73
            yield "         <tr>
            <th class=\"fw-normal\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Memory", "Memories", 1), "html", null, true);
            yield "</th>
            <td>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s / %2\$s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedSize(($context["used"] ?? null)), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedSize(($context["max"] ?? null))), "html", null, true);
            yield "</td>
            <td>
               ";
            // line 77
            yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getProgressBar(($context["rate"] ?? null));
            yield "
            </td>
            ";
            // line 79
            if (((($context["rate"] ?? null) > 5) && (($context["rate"] ?? null) < 75))) {
                // line 80
                yield "               ";
                yield $this->getTemplateForMacro("macro_success_icon_msg", $context, 80, $this->getSourceContext())->macro_success_icon_msg(...[Twig\Extension\CoreExtension::sprintf(__("%1\$s memory usage is correct"), ($context["opcache_ext"] ?? null))]);
                yield "
            ";
            } else {
                // line 82
                yield "               ";
                yield $this->getTemplateForMacro("macro_warning_icon_msg", $context, 82, $this->getSourceContext())->macro_warning_icon_msg(...[Twig\Extension\CoreExtension::sprintf(__("%1\$s memory usage is too low or too high"), ($context["opcache_ext"] ?? null))]);
                yield "
            ";
            }
            // line 84
            yield "         </tr>
         ";
            // line 85
            $context["hits"] = (($_v4 = (($_v5 = ($context["opcache_info"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["opcache_statistics"] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["hits"] ?? null) : null);
            // line 86
            yield "         ";
            $context["misses"] = (($_v6 = (($_v7 = ($context["opcache_info"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["opcache_statistics"] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["misses"] ?? null) : null);
            // line 87
            yield "         ";
            $context["num_requests"] = (($context["hits"] ?? null) + ($context["misses"] ?? null));
            // line 88
            yield "         ";
            $context["hit_rate"] = Twig\Extension\CoreExtension::round((($_v8 = (($_v9 = ($context["opcache_info"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["opcache_statistics"] ?? null) : null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["opcache_hit_rate"] ?? null) : null));
            // line 89
            yield "         <tr>
            <th class=\"fw-normal\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Hits rate"), "html", null, true);
            yield "</th>
            <td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s / %2\$s"), ($context["hits"] ?? null), ($context["num_requests"] ?? null)), "html", null, true);
            yield "</td>
            <td>
               ";
            // line 93
            yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getProgressBar(($context["hit_rate"] ?? null));
            yield "
            </td>
            ";
            // line 95
            if ((($context["hit_rate"] ?? null) > 90)) {
                // line 96
                yield "               ";
                yield $this->getTemplateForMacro("macro_success_icon_msg", $context, 96, $this->getSourceContext())->macro_success_icon_msg(...[Twig\Extension\CoreExtension::sprintf(__("%1\$s hits rate is correct"), ($context["opcache_ext"] ?? null))]);
                yield "
            ";
            } else {
                // line 98
                yield "               ";
                yield $this->getTemplateForMacro("macro_warning_icon_msg", $context, 98, $this->getSourceContext())->macro_warning_icon_msg(...[Twig\Extension\CoreExtension::sprintf(__("%1\$s hits rate is low"), ($context["opcache_ext"] ?? null))]);
                yield "
            ";
            }
            // line 100
            yield "         </tr>
         ";
            // line 101
            $context["oom_restarts"] = (($_v10 = (($_v11 = ($context["opcache_info"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["opcache_statistics"] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["oom_restarts"] ?? null) : null);
            // line 102
            yield "         <tr>
            <th class=\"fw-normal\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Out of memory restart"), "html", null, true);
            yield "</th>
            <td>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["oom_restarts"] ?? null), "html", null, true);
            yield "</td>
            <td></td>
            ";
            // line 106
            if ((($context["oom_restarts"] ?? null) < 2)) {
                // line 107
                yield "               ";
                yield $this->getTemplateForMacro("macro_success_icon_msg", $context, 107, $this->getSourceContext())->macro_success_icon_msg(...[Twig\Extension\CoreExtension::sprintf(__("%1\$s restart rate is correct"), ($context["opcache_ext"] ?? null))]);
                yield "
            ";
            } else {
                // line 109
                yield "               ";
                yield $this->getTemplateForMacro("macro_warning_icon_msg", $context, 109, $this->getSourceContext())->macro_warning_icon_msg(...[Twig\Extension\CoreExtension::sprintf(__("%1\$s restart rate is too high"), ($context["opcache_ext"] ?? null))]);
                yield "
            ";
            }
            // line 111
            yield "         </tr>
         ";
            // line 112
            if ((($context["opcache_enabled"] ?? null) && ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpi_use_mode") == Twig\Extension\CoreExtension::constant("Session::DEBUG_MODE")))) {
                // line 113
                yield "            <tr>
               <td></td>
               <td>
                  <form method=\"post\" action=\"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/config.form.php"), "html", null, true);
                yield "\">
                     ";
                // line 117
                yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 117, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
                yield "
                     ";
                // line 118
                yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 118, $this->getSourceContext())->macro_submit(...["reset_opcache", __("Reset"), 1]);
                yield "
                  </form>
               </td>
               <td></td>
               <td></td>
            </tr>
         ";
            }
            // line 125
            yield "      ";
        }
        // line 126
        yield "      <tr class=\"table-active\">
         <th colspan=\"4\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("User data cache"), "html", null, true);
        yield "</th>
      </tr>
      <tr>
         <th class=\"fw-normal\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("You can use \"%s\" command to configure cache system."), "php bin/console cache:configure"), "html", null, true);
        yield "</th>
         <td></td>
         <td></td>
         <td></td>
      </tr>
      <tr>
         ";
        // line 136
        if (CoreExtension::inFilter(($context["user_cache_ext"] ?? null), ["memcached", "redis"])) {
            // line 137
            yield "            ";
            $context["msg"] = Twig\Extension\CoreExtension::sprintf(__("The \"%s\" cache extension is installed"), ($context["user_cache_ext"] ?? null));
            // line 138
            yield "         ";
        } else {
            // line 139
            yield "            ";
            $context["msg"] = Twig\Extension\CoreExtension::sprintf(__("\"%s\" cache system is used"), ($context["user_cache_ext"] ?? null));
            // line 140
            yield "         ";
        }
        // line 141
        yield "         <th class=\"fw-normal\">
            ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["msg"] ?? null), "html", null, true);
        yield "
         </th>
         <td>";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_cache_version"] ?? null), "html", null, true);
        yield "</td>
         <td></td>
         ";
        // line 146
        yield $this->getTemplateForMacro("macro_success_icon_msg", $context, 146, $this->getSourceContext())->macro_success_icon_msg(...[($context["msg"] ?? null)]);
        yield "
      </tr>
      ";
        // line 148
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpi_use_mode") == Twig\Extension\CoreExtension::constant("Session::DEBUG_MODE"))) {
            // line 149
            yield "         <tr>
            <td></td>
            <td>
               <form method=\"post\" action=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/config.form.php"), "html", null, true);
            yield "\">
                  ";
            // line 153
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 153, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
            yield "
                  ";
            // line 154
            yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 154, $this->getSourceContext())->macro_submit(...["reset_core_cache", __("Reset"), 1]);
            yield "
               </form>
            </td>
            <td></td>
            <td></td>
         </tr>
      ";
        }
        // line 161
        yield "      <tr class=\"table-active\">
         <th colspan=\"4\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Translation cache"), "html", null, true);
        yield "</th>
      </tr>
      <tr>
         ";
        // line 165
        $context["msg"] = Twig\Extension\CoreExtension::sprintf(__("\"%s\" cache system is used"), ($context["trans_cache_adapter"] ?? null));
        // line 166
        yield "         <th class=\"fw-normal\">
            ";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["msg"] ?? null), "html", null, true);
        yield "
         </th>
         <td></td>
         <td></td>
         ";
        // line 171
        yield $this->getTemplateForMacro("macro_success_icon_msg", $context, 171, $this->getSourceContext())->macro_success_icon_msg(...[($context["msg"] ?? null)]);
        yield "
      </tr>
      ";
        // line 173
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpi_use_mode") == Twig\Extension\CoreExtension::constant("Session::DEBUG_MODE"))) {
            // line 174
            yield "         <tr>
            <td></td>
            <td>
               <form method=\"post\" action=\"";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/config.form.php"), "html", null, true);
            yield "\">
                  ";
            // line 178
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 178, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
            yield "
                  ";
            // line 179
            yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 179, $this->getSourceContext())->macro_submit(...["reset_translation_cache", __("Reset"), 1]);
            yield "
               </form>
            </td>
            <td></td>
            <td></td>
         </tr>
      ";
        }
        // line 186
        yield "   </tbody>
</table>
";
        yield from [];
    }

    // line 35
    public function macro_icon_msg($message = null, $icon = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "message" => $message,
            "icon" => $icon,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 36
            yield "   <td class=\"icons_block\">
      <i class=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\"></i>
      <span class=\"sr-only\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "</span>
   </td>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function macro_success_icon_msg($message = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "message" => $message,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 43
            yield "   ";
            yield $this->getTemplateForMacro("macro_icon_msg", $context, 43, $this->getSourceContext())->macro_icon_msg(...[($context["message"] ?? null), "ti ti-circle-check text-success"]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 46
    public function macro_warning_icon_msg($message = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "message" => $message,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 47
            yield "   ";
            yield $this->getTemplateForMacro("macro_icon_msg", $context, 47, $this->getSourceContext())->macro_icon_msg(...[($context["message"] ?? null), "ti ti-info-circle text-warning"]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/performance.html.twig";
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
        return array (  449 => 47,  437 => 46,  428 => 43,  416 => 42,  407 => 38,  401 => 37,  398 => 36,  385 => 35,  378 => 186,  368 => 179,  364 => 178,  360 => 177,  355 => 174,  353 => 173,  348 => 171,  341 => 167,  338 => 166,  336 => 165,  330 => 162,  327 => 161,  317 => 154,  313 => 153,  309 => 152,  304 => 149,  302 => 148,  297 => 146,  292 => 144,  287 => 142,  284 => 141,  281 => 140,  278 => 139,  275 => 138,  272 => 137,  270 => 136,  261 => 130,  255 => 127,  252 => 126,  249 => 125,  239 => 118,  235 => 117,  231 => 116,  226 => 113,  224 => 112,  221 => 111,  215 => 109,  209 => 107,  207 => 106,  202 => 104,  198 => 103,  195 => 102,  193 => 101,  190 => 100,  184 => 98,  178 => 96,  176 => 95,  171 => 93,  166 => 91,  162 => 90,  159 => 89,  156 => 88,  153 => 87,  150 => 86,  148 => 85,  145 => 84,  139 => 82,  133 => 80,  131 => 79,  126 => 77,  121 => 75,  117 => 74,  114 => 73,  111 => 72,  108 => 71,  105 => 70,  102 => 69,  100 => 68,  95 => 66,  90 => 64,  86 => 63,  80 => 60,  75 => 57,  71 => 55,  68 => 54,  64 => 52,  61 => 51,  59 => 50,  56 => 49,  53 => 45,  50 => 41,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/performance.html.twig", "/var/www/html/glpi/templates/pages/setup/general/performance.html.twig");
    }
}
