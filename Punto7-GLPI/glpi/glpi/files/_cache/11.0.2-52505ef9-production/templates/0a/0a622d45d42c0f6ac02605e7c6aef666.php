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

/* pages/setup/general/systeminfo_table.html.twig */
class __TwigTemplate_05441a64ad49ef475d40d39e8702ad2c extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 36, $this->getSourceContext())->macro_largeTitle(...[__("Information about system installation and configuration"), "ti ti-file-info"]);
        yield "
";
        // line 37
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 37, $this->getSourceContext())->macro_htmlField(...["", $macros["inputs"]->getTemplateForMacro("macro_button", $context, 37, $this->getSourceContext())->macro_button(...["copy-sysinfo", __("Copy system information"), "button", 1, ["icon" => "ti ti-copy", "additional_attributes" => ["onclick" => "copyTextToClipboard(tableToDetails('#sysinfo_accordion'));flashIconButton(this, 'btn btn-success', 'ti ti-check', 1500);"]]]), "", ["no_label" => true]]);
        // line 44
        yield "

";
        // line 58
        yield "
";
        // line 59
        $context["status_mapping"] = [Twig\Extension\CoreExtension::constant("Glpi\\System\\Diagnostic\\SourceCodeIntegrityChecker::STATUS_ALTERED") => "M", Twig\Extension\CoreExtension::constant("Glpi\\System\\Diagnostic\\SourceCodeIntegrityChecker::STATUS_MISSING") => "D", Twig\Extension\CoreExtension::constant("Glpi\\System\\Diagnostic\\SourceCodeIntegrityChecker::STATUS_ADDED") => "A"];
        // line 64
        yield "
";
        // line 65
        $context["glpi_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 66
            yield "GLPI: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ver"] ?? null), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc"), "html", null, true);
            yield " => ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GLPI_ROOT"), "html", null, true);
            yield ")
Installation mode: ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GLPI_INSTALL_MODE"), "html", null, true);
            yield "
Current language: ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["language"] ?? null), "html", null, true);
            yield "
Source Integrity: ";
            // line 69
            if ((null === ($context["code_integrity"] ?? null))) {
                yield "N/A";
            } elseif (Twig\Extension\CoreExtension::testEmpty(($context["code_integrity"] ?? null))) {
                yield "OK";
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["code_integrity"] ?? null)), "html", null, true);
                yield " files changed";
            }
            // line 70
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["code_integrity"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "
";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["code_integrity"] ?? null), 0, 25));
                foreach ($context['_seq'] as $context["file"] => $context["state"]) {
                    // line 73
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((("  " . (($_v0 = ($context["status_mapping"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["state"]] ?? null) : null)) . ": ") . $context["file"]) . "
"), "html", null, true);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['file'], $context['state'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["code_integrity"] ?? null)) > 25)) {
                    // line 76
                    yield "  ...
";
                }
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        yield "
";
        // line 81
        $context["setup_init_keys"] = ["disable_functions", "max_execution_time", "max_input_vars", "memory_limit", "post_max_size", "session.cookie_secure", "session.cookie_httponly", "session.cookie_samesite", "session.save_handler", "upload_max_filesize"];
        // line 93
        $context["server_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 94
            yield "Operating system: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("php_uname"), "html", null, true);
            yield "

PHP: ";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("phpversion"), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("php_sapi_name"), "html", null, true);
            yield "

PHP extensions: ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("get_loaded_extensions"), ", "), "html", null, true);
            yield "

Setup: ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["setup_init_keys"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("ini_get", [$context["k"]]), "html", null, true);
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['k'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "

Web server: ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["_server"] ?? null), "SERVER_SOFTWARE", [], "array", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["_server"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["SERVER_SOFTWARE"] ?? null) : null), "")) : ("")), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["_server"] ?? null), "SERVER_SIGNATURE", [], "array", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default((($_v2 = ($context["_server"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["SERVER_SIGNATURE"] ?? null) : null), "")) : ("")))), "html", null, true);
            yield ")

User agent: ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["_server"] ?? null), "HTTP_USER_AGENT", [], "array", true, true, false, 105)) ? (Twig\Extension\CoreExtension::default((($_v3 = ($context["_server"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["HTTP_USER_AGENT"] ?? null) : null), "")) : ("")), "html", null, true);
            yield "

Database:
";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["db_info"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 109
                yield "   ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("
" . $context["k"]), "html", null, true);
                yield ": ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                yield "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield "
Requirements:";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["core_requirements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
                // line 114
                yield "
";
                yield "<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/pics/") . (($_v4 = $context["requirement"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["status"] ?? null) : null)) . "_min.png"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((($_v5 = $context["requirement"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["messages"] ?? null) : null), " "), "html", null, true);
                yield "\"/>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((($_v6 = $context["requirement"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["messages"] ?? null) : null), "
"), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['requirement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        yield "
";
        // line 118
        $context["constants_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("get_defined_constants"), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["k"] ?? null)), "startsWith", ["GLPI_"], "method", false, false, false, 119); }));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("
" . $context["name"]), "html", null, true);
                yield ": ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode($context["value"], Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_SLASHES")), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 123
        yield "
";
        // line 124
        $context["locale_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales_overrides"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("
" . $context["file"]), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        yield "
<div class=\"accordion\" id=\"sysinfo_accordion\">
   ";
        // line 131
        yield $this->getTemplateForMacro("macro_sysinfo_section", $context, 131, $this->getSourceContext())->macro_sysinfo_section(...["GLPI information", ($context["glpi_info"] ?? null)]);
        yield "
   ";
        // line 132
        yield $this->getTemplateForMacro("macro_sysinfo_section", $context, 132, $this->getSourceContext())->macro_sysinfo_section(...["Server", ($context["server_info"] ?? null), true]);
        yield "
   ";
        // line 133
        yield $this->getTemplateForMacro("macro_sysinfo_section", $context, 133, $this->getSourceContext())->macro_sysinfo_section(...["GLPI constants", ($context["constants_info"] ?? null), true]);
        yield "
   ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["system_info_objs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["info_obj"]) {
            // line 135
            yield "      ";
            $context["info"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([$context["info_obj"], "getSystemInformation"]);
            // line 136
            yield "      ";
            if (( !Twig\Extension\CoreExtension::testEmpty((($_v7 = ($context["info"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["label"] ?? null) : null)) &&  !Twig\Extension\CoreExtension::testEmpty((($_v8 = ($context["info"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["content"] ?? null) : null)))) {
                // line 137
                yield "      ";
                yield $this->getTemplateForMacro("macro_sysinfo_section", $context, 137, $this->getSourceContext())->macro_sysinfo_section(...[(($_v9 = ($context["info"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["label"] ?? null) : null), (($_v10 = ($context["info"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["content"] ?? null) : null)]);
                yield "
      ";
            }
            // line 139
            yield "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['info_obj'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        yield "   ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["locales_overrides"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 141
            yield "      ";
            yield $this->getTemplateForMacro("macro_sysinfo_section", $context, 141, $this->getSourceContext())->macro_sysinfo_section(...["Locales overrides", ($context["locale_info"] ?? null)]);
            yield "
   ";
        }
        // line 143
        yield "</div>

<script>
   \$(() => {
       // Search all .section-content text content and Replace all instances of a '#' followed by a number so that there is a zero-width space between the # and the number
       \$('.section-content').each(function() {
           \$(this).html(\$(this).html().replace(/#(\\d+)/g, '#\\u200B\$1'));
       });
   });
</script>
";
        yield from [];
    }

    // line 46
    public function macro_sysinfo_section($label = null, $content = null, $raw = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "content" => $content,
            "raw" => $raw,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 47
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 48
            yield "   ";
            $context["cleaned_content"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::trim(($context["content"] ?? null))), "wordwrap", [128], "method", false, false, false, 48);
            // line 49
            yield "   <div class=\"accordion-item\">
      <div class=\"accordion-header section-header\" id=\"sysinfo_header_";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">
         <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sysinfo_section_";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "</button>
      </div>
      <div id=\"sysinfo_section_";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" class=\"accordion-collapse collapse\" aria-labelledby=\"sysinfo_header_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" data-bs-parent=\"#sysinfo_accordion\">
         <pre class=\"section-content\">";
            // line 54
            yield (((($tmp = ($context["raw"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["cleaned_content"] ?? null)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cleaned_content"] ?? null))));
            yield "</pre>
      </div>
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/systeminfo_table.html.twig";
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
        return array (  356 => 54,  350 => 53,  343 => 51,  339 => 50,  336 => 49,  333 => 48,  330 => 47,  316 => 46,  301 => 143,  295 => 141,  292 => 140,  286 => 139,  280 => 137,  277 => 136,  274 => 135,  270 => 134,  266 => 133,  262 => 132,  258 => 131,  254 => 129,  245 => 126,  241 => 125,  239 => 124,  236 => 123,  225 => 120,  221 => 119,  219 => 118,  216 => 117,  200 => 114,  196 => 113,  193 => 111,  181 => 109,  177 => 108,  171 => 105,  164 => 103,  160 => 101,  148 => 100,  143 => 98,  136 => 96,  130 => 94,  128 => 93,  126 => 81,  123 => 80,  116 => 76,  114 => 75,  107 => 73,  103 => 72,  100 => 71,  98 => 70,  89 => 69,  85 => 68,  81 => 67,  72 => 66,  70 => 65,  67 => 64,  65 => 59,  62 => 58,  58 => 44,  56 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/systeminfo_table.html.twig", "/var/www/html/glpi/templates/pages/setup/general/systeminfo_table.html.twig");
    }
}
