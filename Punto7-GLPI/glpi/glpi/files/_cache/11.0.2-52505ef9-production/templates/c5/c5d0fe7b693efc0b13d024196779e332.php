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

/* components/form/basic_inputs_macros.html.twig */
class __TwigTemplate_fea4fd559275f1dfde71dc4206386672 extends Template
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
        // line 118
        yield "

";
        // line 133
        yield "

";
        // line 151
        yield "

";
        // line 181
        yield "

";
        // line 186
        yield "

";
        // line 191
        yield "

";
        // line 208
        yield "

";
        // line 213
        yield "

";
        // line 302
        yield "

";
        // line 309
        yield "

";
        // line 412
        yield "

";
        // line 436
        yield "

";
        // line 459
        yield "

";
        // line 464
        yield "
";
        yield from [];
    }

    // line 33
    public function macro_input($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => null, "type" => "text", "input_addclass" => "", "additional_attributes" => [], "readonly" => false, "disabled" => false, "multiple" => false, "required" => false, "maxlength" => null, "is_disclosable" => false, "is_copyable" => false, "clearable" => false],             // line 47
($context["options"] ?? null));
            // line 48
            yield "
    ";
            // line 49
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 49), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 49), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 49), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 50
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["required" => true]);
                // line 51
                yield "    ";
            }
            // line 52
            yield "
    ";
            // line 53
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 53), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 53), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 53), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 55
                yield "    ";
            }
            // line 56
            yield "
   ";
            // line 57
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 57) || CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_copyable", [], "any", false, false, false, 57)) && (null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 57)))) {
                // line 58
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((Html::sanitizeDomId(                // line 59
($context["name"] ?? null)) . "_") . Twig\Extension\CoreExtension::random($this->env->getCharset()))]);
                // line 61
                yield "   ";
            }
            // line 62
            yield "
    ";
            // line 63
            $context["input"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 64
                yield "        <input type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 64), "html", null, true);
                yield "\" ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 64) != null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("id=" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 64)), "html", null, true)) : (""));
                yield "
               class=\"form-control ";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 65), "html", null, true);
                yield "\"
               name=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\"
            ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 67));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    // line 68
                    yield "               ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "\"
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                yield "               ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("maxlength=" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 70)), "html", null, true)) : (""));
                yield "
               ";
                // line 71
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
                yield "
               ";
                // line 72
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                yield "
               ";
                // line 73
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("multiple") : (""));
                yield " ";
                // line 74
                yield "               ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                yield "
               ";
                // line 75
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "pattern", [], "any", true, true, false, 75)) {
                    yield "pattern=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "pattern", [], "any", false, false, false, 75), "html", null, true);
                    yield "\"";
                }
                // line 76
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 76)) {
                    yield "min=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 76), "html", null, true);
                    yield "\"";
                }
                // line 77
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", true, true, false, 77)) {
                    yield "max=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", false, false, false, 77), "html", null, true);
                    yield "\"";
                }
                // line 78
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", true, true, false, 78)) {
                    yield "step=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 78), "html", null, true);
                    yield "\"";
                }
                yield " />
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 80
            yield "
    ";
            // line 81
            $context["more_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 82
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 83
                    yield "            <div class=\"btn btn-outline-secondary\"
                 onmousedown=\"showDisclosablePasswordField('";
                    // line 84
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 84), "js"), "html", null, true);
                    yield "')\"
                 onmouseup=\"hideDisclosablePasswordField('";
                    // line 85
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 85), "js"), "html", null, true);
                    yield "')\"
                 onmouseout=\"hideDisclosablePasswordField('";
                    // line 86
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 86), "js"), "html", null, true);
                    yield "')\">
                <i class=\"ti ti-eye disclose\"></i>
            </div>
        ";
                }
                // line 90
                yield "
        ";
                // line 91
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_copyable", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 92
                    yield "            <div class=\"btn btn-outline-secondary\" onclick=\"copyDisclosablePasswordFieldToClipboard('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 92), "js"), "html", null, true);
                    yield "')\">
                <i class=\"ti ti-clipboard-copy disclose\"></i>
            </div>
        ";
                }
                // line 96
                yield "    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 97
            yield "
    ";
            // line 98
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(($context["more_html"] ?? null))) > 0)) {
                // line 99
                yield "        ";
                $context["input"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 100
                    yield "            <div class=\"btn-group btn-group-sm d-flex\">
                ";
                    // line 101
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input"] ?? null), "html", null, true);
                    yield "
                ";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["more_html"] ?? null), "html", null, true);
                    yield "
            </div>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 105
                yield "    ";
            }
            // line 106
            yield "
    ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input"] ?? null), "html", null, true);
            yield "

    ";
            // line 109
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 110
                yield "        <span class=\"d-inline-flex\">
            <input type=\"checkbox\" name=\"_blank_";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" id=\"_blank_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" class=\"ms-1\">
            <label for=\"_blank_";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" class=\"ms-1\">
                ";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Clear"), "html", null, true);
                yield "
            </label>
        </span>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 120
    public function macro_text($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 121
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["copyable" => false],             // line 123
($context["options"] ?? null));
            // line 124
            yield "
    ";
            // line 125
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "copyable", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 126
                yield "        <div class=\"copy_to_clipboard_wrapper\">
    ";
            }
            // line 128
            yield "    ";
            yield $this->getTemplateForMacro("macro_input", $context, 128, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "text"])]);
            yield "
    ";
            // line 129
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "copyable", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 130
                yield "        </div>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 135
    public function macro_number($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 136
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["step" => 1],             // line 138
($context["options"] ?? null));
            // line 139
            yield "
    ";
            // line 140
            if ((($context["value"] ?? null) == "")) {
                // line 141
                yield "        ";
                $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 141)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 141)) : (0));
                // line 142
                yield "    ";
            }
            // line 143
            yield "
    ";
            // line 144
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 144) != "any") && (Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 144), 0, "floor") != CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 144)))) {
                // line 145
                yield "        ";
                // line 146
                yield "        ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [($context["value"] ?? null), true]);
                // line 147
                yield "    ";
            }
            // line 148
            yield "
    ";
            // line 149
            yield $this->getTemplateForMacro("macro_input", $context, 149, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "number"])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 153
    public function macro_color($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 154
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ((            // line 155
($context["name"] ?? null) . "_") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", true, true, false, 155) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 155)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 155)) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))))],             // line 156
($context["options"] ?? null));
            // line 157
            yield "
    ";
            // line 158
            yield $this->getTemplateForMacro("macro_input", $context, 158, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "text", "input_addclass" => "rounded-0"])]);
            // line 161
            yield "
    <script>
        \$(function () {
            \$(\"#";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 164), "css"), "js"), "html", null, true);
            yield "\").spectrum({
                showInput: true,
                preferredFormat: \"hex\",
                type: \"text\",
                cancelText: \"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "js"), "html", null, true);
            yield "\",
                chooseText: \"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Validate"), "js"), "html", null, true);
            yield "\",
                change: function (color) {
                    if (color !== null && color.getAlpha() !== 1) {
                        let hex = color.toHexString();
                        hex += (\"0\" + Math.round(parseFloat(color.getAlpha()) * 255).toString(16)).slice(-2);
                        this.value = hex;
                    }
                }
            });
        });
    </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 183
    public function macro_password($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 184
            yield "    ";
            yield $this->getTemplateForMacro("macro_input", $context, 184, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "password"])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 188
    public function macro_email($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 189
            yield "    ";
            yield $this->getTemplateForMacro("macro_input", $context, 189, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "email"])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 193
    public function macro_file($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 194
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["simple" => false],             // line 196
($context["options"] ?? null));
            // line 197
            yield "
    ";
            // line 198
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "simple", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 199
                yield "        ";
                yield $this->getTemplateForMacro("macro_input", $context, 199, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "file"])]);
                yield "
    ";
            } else {
                // line 201
                yield "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [Twig\Extension\CoreExtension::merge(                // line 202
($context["options"] ?? null), ["name" =>                 // line 203
($context["name"] ?? null)])]);
                // line 206
                yield "    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 210
    public function macro_hidden($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 211
            yield "    ";
            yield $this->getTemplateForMacro("macro_input", $context, 211, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "hidden"])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 215
    public function macro_date($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 216
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "enableTime" => false, "checkIsExpired" => false, "clearable" => false, "input_addclass" => "", "readonly" => false, "maybeempty" => false],             // line 224
($context["options"] ?? null));
            // line 225
            yield "
    ";
            // line 226
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ((Html::sanitizeDomId(            // line 227
($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 227))],             // line 228
($context["options"] ?? null));
            // line 229
            yield "
    ";
            // line 230
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 230), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 230)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 230), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 230), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 231
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 232
                yield "    ";
            }
            // line 233
            yield "
    ";
            // line 234
            if ((($context["value"] ?? null) == "NULL")) {
                // line 235
                yield "      ";
                $context["value"] = null;
                // line 236
                yield "   ";
            }
            // line 237
            yield "
    ";
            // line 238
            $context["final_expiration_class"] = "";
            // line 239
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "checkIsExpired", [], "any", false, false, false, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 240
                yield "        ";
                if (($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["value"] ?? null), "Y-m-d H:i:s") < $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d H:i:s"))) {
                    // line 241
                    yield "            ";
                    $context["final_expiration_class"] = " warn";
                    // line 242
                    yield "        ";
                }
                // line 243
                yield "    ";
            } else {
                // line 244
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", true, true, false, 244)) {
                    // line 245
                    yield "            ";
                    $context["final_expiration_class"] = (" " . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", false, false, false, 245));
                    // line 246
                    yield "        ";
                } else {
                    // line 247
                    yield "            ";
                    $context["final_expiration_class"] = "";
                    // line 248
                    yield "        ";
                }
                // line 249
                yield "    ";
            }
            // line 250
            yield "
    <div class=\"btn-group flex-grow-1 flatpickr d-flex\" id=\"";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 251), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enter or select a date"), "html", null, true);
            yield "\">
        ";
            // line 252
            yield $this->getTemplateForMacro("macro_input", $context, 252, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "text", "id" => (CoreExtension::getAttribute($this->env, $this->source,             // line 254
($context["options"] ?? null), "id", [], "any", false, false, false, 254) . "_input"), "additional_attributes" => ["data-input" => ""], "input_addclass" => (CoreExtension::getAttribute($this->env, $this->source,             // line 256
($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 256) . ($context["final_expiration_class"] ?? null)), "clearable" => false])]);
            // line 258
            yield "

        ";
            // line 260
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 260)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 261
                yield "            ";
                $context["calendar_icon"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 261)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ti ti-calendar-time") : ("ti ti-calendar"));
                // line 262
                yield "            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" data-toggle>
                <i class=\"";
                // line 263
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["calendar_icon"] ?? null), "html", null, true);
                yield "\"></i>
                <span class=\"sr-only\">";
                // line 264
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enter or select a date"), "html", null, true);
                yield "</span>
            </button>
            ";
                // line 267
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 267) || CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maybeempty", [], "any", false, false, false, 267))) {
                    // line 268
                    yield "                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-clear title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Clear"), "html", null, true);
                    yield "\">
                    <i class=\"ti ti-circle-x\"></i>
                </button>
            ";
                }
                // line 272
                yield "        ";
            }
            // line 273
            yield "    </div>

    ";
            // line 275
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 276
            yield "    ";
            $context["date_format"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 276)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Y-m-d H:i:S") : ("Y-m-d"));
            // line 277
            yield "    ";
            $context["alt_format"] = ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", ["js"]) . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 277)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" H:i:S") : ("")));
            // line 278
            yield "    <script>
        \$(function() {
            \$(\"#";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 280), "css"), "js"), "html", null, true);
            yield "\").flatpickr({
                wrap: true,
                altInput: true,
                dateFormat: '";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date_format"] ?? null), "js"), "html", null, true);
            yield "',
                altFormat: '";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alt_format"] ?? null), "js"), "html", null, true);
            yield "',
                enableTime: ";
            // line 285
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 285)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield ",
                enableSeconds: ";
            // line 286
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 286)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield ",
                weekNumbers: true,
                time_24hr: true,
                allowInput: ";
            // line 289
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 289)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
            yield ",
                clickOpens: ";
            // line 290
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 290)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
            yield ",
                locale: getFlatPickerLocale(\"";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["locale"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["language"] ?? null) : null), "js"), "html", null, true);
            yield "\", \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["locale"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["region"] ?? null) : null), "js"), "html", null, true);
            yield "\"),
                onClose(dates, currentdatestring, picker) {
                    picker.setDate(picker.altInput.value, true, picker.config.altFormat)
                },
                plugins: [
                    CustomFlatpickrButtons()
                ]
            });
        });
    </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 304
    public function macro_datetime($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 305
            yield "    ";
            yield $this->getTemplateForMacro("macro_date", $context, 305, $this->getSourceContext())->macro_date(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["enableTime" => true])]);
            // line 307
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 311
    public function macro_textarea($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 312
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => null, "rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "rows" => 3, "enable_richtext" => false, "enable_images" => true, "mention_options" => ["enabled" => (CoreExtension::getAttribute($this->env, $this->source,             // line 319
($context["options"] ?? null), "enable_mentions", [], "any", true, true, false, 319) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 319)), "full" => true, "users" => []], "entities_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "readonly" => false, "disabled" => false, "required" => false, "add_body_classes" => [], "toolbar" => true, "toolbar_location" => "top", "init" => true, "init_on_demand" => false, "placeholder" => "", "enable_form_tags" => false, "form_tags_form_id" => null, "aria_label" => "", "statusbar" => true, "content_style" => "", "input_addclass" => "", "additional_attributes" => [], "plugins_to_remove" => []],             // line 341
($context["options"] ?? null));
            // line 342
            yield "
    ";
            // line 343
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 343), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 343)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 343), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 343), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 344
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 345
                yield "    ";
            }
            // line 346
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 347
($context["options"] ?? null), "id", [], "any", false, false, false, 347)) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 347)) : (((($context["name"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 347))))]);
            // line 349
            yield "
    ";
            // line 351
            yield "    <textarea class=\"form-control ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 351), "html", null, true);
            yield "\"
            id=\"";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 352), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" rows=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rows", [], "any", false, false, false, 352), "html", null, true);
            yield "\"
            style=\"width: 100%;\"
            ";
            // line 354
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 354));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                // line 355
                yield "               ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 357
            yield "            ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "aria_label", [], "any", false, false, false, 357))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 358
                yield "                aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "aria_label", [], "any", false, false, false, 358), "html", null, true);
                yield "\"
            ";
            }
            // line 360
            yield "            ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "placeholder", [], "any", false, false, false, 360))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 361
                yield "                placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "placeholder", [], "any", false, false, false, 361), "html", null, true);
                yield "\"
            ";
            }
            // line 363
            yield "            ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 363)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "
            ";
            // line 364
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 364)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
            yield "
            ";
            // line 365
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 365)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
            yield ">";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 365)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["value"] ?? null)))) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true)));
            yield "</textarea>

    ";
            // line 367
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 367)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 368
                yield "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::initEditorSystem", [CoreExtension::getAttribute($this->env, $this->source,                 // line 369
($context["options"] ?? null), "id", [], "any", false, false, false, 369), CoreExtension::getAttribute($this->env, $this->source,                 // line 370
($context["options"] ?? null), "rand", [], "any", false, false, false, 370), true, ((CoreExtension::getAttribute($this->env, $this->source,                 // line 372
($context["options"] ?? null), "disabled", [], "any", true, true, false, 372)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 372), false)) : (false)), CoreExtension::getAttribute($this->env, $this->source,                 // line 373
($context["options"] ?? null), "enable_images", [], "any", false, false, false, 373), ((CoreExtension::getAttribute($this->env, $this->source,                 // line 374
($context["options"] ?? null), "editor_height", [], "any", true, true, false, 374)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "editor_height", [], "any", false, false, false, 374), 150)) : (150)), CoreExtension::getAttribute($this->env, $this->source,                 // line 375
($context["options"] ?? null), "add_body_classes", [], "any", false, false, false, 375), CoreExtension::getAttribute($this->env, $this->source,                 // line 376
($context["options"] ?? null), "toolbar_location", [], "any", false, false, false, 376), CoreExtension::getAttribute($this->env, $this->source,                 // line 377
($context["options"] ?? null), "init", [], "any", false, false, false, 377), CoreExtension::getAttribute($this->env, $this->source,                 // line 378
($context["options"] ?? null), "placeholder", [], "any", false, false, false, 378), CoreExtension::getAttribute($this->env, $this->source,                 // line 379
($context["options"] ?? null), "toolbar", [], "any", false, false, false, 379), CoreExtension::getAttribute($this->env, $this->source,                 // line 380
($context["options"] ?? null), "statusbar", [], "any", false, false, false, 380), CoreExtension::getAttribute($this->env, $this->source,                 // line 381
($context["options"] ?? null), "content_style", [], "any", false, false, false, 381), CoreExtension::getAttribute($this->env, $this->source,                 // line 382
($context["options"] ?? null), "init_on_demand", [], "any", false, false, false, 382), CoreExtension::getAttribute($this->env, $this->source,                 // line 383
($context["options"] ?? null), "plugins_to_remove", [], "any", false, false, false, 383)]);
                // line 385
                yield "   ";
            }
            // line 386
            yield "   ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_form_tags", [], "any", false, false, false, 386)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 387
                yield "        <script>
            \$(function() {
                const form_tags = new GLPI.RichText.FormTags(
                    tinymce.get('";
                // line 390
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 390), "js"), "html", null, true);
                yield "'),
                    ";
                // line 391
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "form_tags_form_id", [], "any", false, false, false, 391));
                yield ",
                );
                form_tags.register();
            });
        </script>
    ";
            }
            // line 397
            yield "
    ";
            // line 398
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mention_options", [], "any", false, true, false, 398), "enabled", [], "any", true, true, false, 398)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mention_options", [], "any", false, false, false, 398), "enabled", [], "any", false, false, false, 398), false)) : (false)) && $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications"))) {
                // line 399
                yield "        <script>
            \$(function() {
                const user_mention = new GLPI.RichText.UserMention(
                    tinymce.get('";
                // line 402
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 402), "js"), "html", null, true);
                yield "'),
                    ";
                // line 403
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 403));
                yield ",
                    '";
                // line 404
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewIDORToken("User", ["right" => "all", "entity_restrict" => json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 404))]), "html", null, true);
                yield "',
                    ";
                // line 405
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mention_options", [], "any", false, false, false, 405));
                yield "
                );
                user_mention.register();
            });
        </script>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 414
    public function macro_checkbox($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 415
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => null, "input_addclass" => "", "readonly" => false, "disabled" => false, "required" => false, "additional_attributes" => []],             // line 422
($context["options"] ?? null));
            // line 423
            yield "
    <input type=\"hidden\"   name=\"";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"0\" />
    <input type=\"checkbox\" name=\"";
            // line 425
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"1\"
           class=\"form-check-input ";
            // line 426
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 426), "html", null, true);
            yield "\"
           ";
            // line 427
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 427) != null)) ? ((("id=\"" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 427))) . "\"")) : (""));
            yield "
           ";
            // line 428
            yield (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            yield "
           ";
            // line 429
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 429)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
            yield "
           ";
            // line 430
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 430)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
            yield "
           ";
            // line 431
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 431)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "
            ";
            // line 432
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 432));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                // line 433
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 434
            yield "/>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 438
    public function macro_button($name = null, $label = "", $type = "button", $value = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "label" => $label,
            "type" => $type,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 439
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["type" => "submit", "class" => "btn btn-primary", "icon" => "", "icon_title" => "", "additional_attributes" => []],             // line 445
($context["options"] ?? null));
            // line 446
            yield "
    <button class=\"";
            // line 447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", false, false, false, 447), "html", null, true);
            yield "\" type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"
        ";
            // line 448
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 448));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                // line 449
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 450
            yield ">
        ";
            // line 451
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 451))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 452
                yield "            <i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 452), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon_title", [], "any", false, false, false, 452), "html", null, true);
                yield "\"></i>
        ";
            }
            // line 454
            yield "        ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 455
                yield "            <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
                yield "</span>
        ";
            }
            // line 457
            yield "    </button>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 461
    public function macro_submit($name = null, $label = "", $value = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "label" => $label,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 462
            yield "    ";
            yield $this->getTemplateForMacro("macro_button", $context, 462, $this->getSourceContext())->macro_button(...[($context["name"] ?? null), ($context["label"] ?? null), "submit", ($context["value"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 465
    public function macro_label($label = null, $id = null, $options = [], $class = "form-label", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "id" => $id,
            "options" => $options,
            "class" => $class,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 466
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["locked" => false, "locked_value" => null, "tpl_mark" => null, "helper" => false],             // line 471
($context["options"] ?? null));
            // line 472
            yield "
    ";
            // line 473
            $context["required_mark"] = "";
            // line 474
            yield "    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", true, true, false, 474) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 474), "isMandatoryField", [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 474)], "method", true, true, false, 474)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 474), "isMandatoryField", [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 474)], "method", false, false, false, 474), false)) : (false))) || (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", true, true, false, 474) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 474)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 474)) : (false)))) {
                // line 475
                yield "        ";
                $context["required_mark"] = "<span class=\"required\">*</span>";
                // line 476
                yield "    ";
            }
            // line 477
            yield "
    ";
            // line 478
            $context["helper"] = "";
            // line 479
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 479)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 480
                yield "        ";
                // line 481
                yield "        ";
                // line 482
                yield "        ";
                $context["helper_safe_text"] = Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 482)));
                // line 483
                yield "        ";
                $context["helper"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 484
                    yield "        <span class=\"form-help\"
              data-bs-toggle=\"tooltip\"
              data-bs-placement=\"top\"
              data-bs-html=\"true\"
              data-bs-title=\"";
                    // line 488
                    yield ($context["helper_safe_text"] ?? null);
                    yield "\">
            ?
        </span>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 492
                yield "    ";
            }
            // line 493
            yield "
    ";
            // line 494
            $context["locked_mark"] = "";
            // line 495
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked", [], "any", false, false, false, 495)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 496
                yield "        ";
                $context["locked_mark"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 497
                    yield "        ";
                    $context["locked_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Field will not be updated from inventory"), "html", null, true);
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 498
                    yield "        ";
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 498))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 499
                        yield "            ";
                        $context["locked_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["locked_title"] ?? null), "html", null, true);
                            yield "
            -
            ";
                            // line 501
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((__("Last inventory value was:") . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 501)), "html", null, true);
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 502
                        yield "        ";
                    }
                    // line 503
                    yield "        <i class=\"ti ti-lock\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["locked_title"] ?? null), "html", null, true);
                    yield "\" data-bs-toggle=\"tooltip\"></i>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 505
                yield "    ";
            }
            // line 506
            yield "
    <label class=\"";
            // line 507
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 508
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
        ";
            // line 509
            yield ($context["locked_mark"] ?? null);
            yield "
        ";
            // line 510
            yield ($context["required_mark"] ?? null);
            yield "
        ";
            // line 511
            yield ($context["helper"] ?? null);
            yield "
        ";
            // line 512
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "tpl_mark", [], "any", false, false, false, 512))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 513
                yield "            ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "tpl_mark", [], "any", false, false, false, 513);
                yield "
        ";
            }
            // line 515
            yield "    </label>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/basic_inputs_macros.html.twig";
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
        return array (  1332 => 515,  1326 => 513,  1324 => 512,  1320 => 511,  1316 => 510,  1312 => 509,  1308 => 508,  1302 => 507,  1299 => 506,  1296 => 505,  1289 => 503,  1286 => 502,  1282 => 501,  1275 => 499,  1272 => 498,  1266 => 497,  1263 => 496,  1260 => 495,  1258 => 494,  1255 => 493,  1252 => 492,  1244 => 488,  1238 => 484,  1235 => 483,  1232 => 482,  1230 => 481,  1228 => 480,  1225 => 479,  1223 => 478,  1220 => 477,  1217 => 476,  1214 => 475,  1211 => 474,  1209 => 473,  1206 => 472,  1204 => 471,  1202 => 466,  1187 => 465,  1178 => 462,  1163 => 461,  1156 => 457,  1150 => 455,  1147 => 454,  1139 => 452,  1137 => 451,  1134 => 450,  1123 => 449,  1119 => 448,  1109 => 447,  1106 => 446,  1104 => 445,  1102 => 439,  1086 => 438,  1079 => 434,  1068 => 433,  1064 => 432,  1060 => 431,  1056 => 430,  1052 => 429,  1048 => 428,  1044 => 427,  1040 => 426,  1036 => 425,  1032 => 424,  1029 => 423,  1027 => 422,  1025 => 415,  1011 => 414,  998 => 405,  994 => 404,  990 => 403,  986 => 402,  981 => 399,  979 => 398,  976 => 397,  967 => 391,  963 => 390,  958 => 387,  955 => 386,  952 => 385,  950 => 383,  949 => 382,  948 => 381,  947 => 380,  946 => 379,  945 => 378,  944 => 377,  943 => 376,  942 => 375,  941 => 374,  940 => 373,  939 => 372,  938 => 370,  937 => 369,  935 => 368,  933 => 367,  926 => 365,  922 => 364,  917 => 363,  911 => 361,  908 => 360,  902 => 358,  899 => 357,  888 => 355,  884 => 354,  875 => 352,  870 => 351,  867 => 349,  865 => 347,  863 => 346,  860 => 345,  857 => 344,  855 => 343,  852 => 342,  850 => 341,  849 => 319,  847 => 312,  833 => 311,  826 => 307,  823 => 305,  809 => 304,  790 => 291,  786 => 290,  782 => 289,  776 => 286,  772 => 285,  768 => 284,  764 => 283,  758 => 280,  754 => 278,  751 => 277,  748 => 276,  746 => 275,  742 => 273,  739 => 272,  731 => 268,  728 => 267,  723 => 264,  719 => 263,  716 => 262,  713 => 261,  711 => 260,  707 => 258,  705 => 256,  704 => 254,  703 => 252,  697 => 251,  694 => 250,  691 => 249,  688 => 248,  685 => 247,  682 => 246,  679 => 245,  676 => 244,  673 => 243,  670 => 242,  667 => 241,  664 => 240,  661 => 239,  659 => 238,  656 => 237,  653 => 236,  650 => 235,  648 => 234,  645 => 233,  642 => 232,  639 => 231,  637 => 230,  634 => 229,  632 => 228,  631 => 227,  630 => 226,  627 => 225,  625 => 224,  623 => 216,  609 => 215,  600 => 211,  586 => 210,  579 => 206,  577 => 203,  576 => 202,  574 => 201,  568 => 199,  566 => 198,  563 => 197,  561 => 196,  559 => 194,  545 => 193,  536 => 189,  522 => 188,  513 => 184,  499 => 183,  481 => 169,  477 => 168,  470 => 164,  465 => 161,  463 => 158,  460 => 157,  458 => 156,  457 => 155,  455 => 154,  441 => 153,  433 => 149,  430 => 148,  427 => 147,  424 => 146,  422 => 145,  420 => 144,  417 => 143,  414 => 142,  411 => 141,  409 => 140,  406 => 139,  404 => 138,  402 => 136,  388 => 135,  380 => 130,  378 => 129,  373 => 128,  369 => 126,  367 => 125,  364 => 124,  362 => 123,  360 => 121,  346 => 120,  335 => 113,  331 => 112,  325 => 111,  322 => 110,  320 => 109,  315 => 107,  312 => 106,  309 => 105,  302 => 102,  298 => 101,  295 => 100,  292 => 99,  290 => 98,  287 => 97,  283 => 96,  275 => 92,  273 => 91,  270 => 90,  263 => 86,  259 => 85,  255 => 84,  252 => 83,  249 => 82,  247 => 81,  244 => 80,  233 => 78,  226 => 77,  219 => 76,  213 => 75,  208 => 74,  205 => 73,  201 => 72,  197 => 71,  192 => 70,  181 => 68,  177 => 67,  171 => 66,  167 => 65,  160 => 64,  158 => 63,  155 => 62,  152 => 61,  150 => 59,  148 => 58,  146 => 57,  143 => 56,  140 => 55,  137 => 54,  135 => 53,  132 => 52,  129 => 51,  126 => 50,  124 => 49,  121 => 48,  119 => 47,  117 => 34,  103 => 33,  97 => 464,  93 => 459,  89 => 436,  85 => 412,  81 => 309,  77 => 302,  73 => 213,  69 => 208,  65 => 191,  61 => 186,  57 => 181,  53 => 151,  49 => 133,  45 => 118,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/basic_inputs_macros.html.twig", "/var/www/html/glpi/templates/components/form/basic_inputs_macros.html.twig");
    }
}
