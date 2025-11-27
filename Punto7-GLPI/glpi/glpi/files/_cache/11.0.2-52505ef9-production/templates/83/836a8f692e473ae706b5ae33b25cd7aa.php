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

/* components/form/buttons.html.twig */
class __TwigTemplate_5a901e2d6d4bb8b61448f88e9e5295f8 extends Template
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
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 33) &&  !(null === (($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["withtemplate"] ?? null) : null)))) ? ((($_v1 = ($context["params"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["withtemplate"] ?? null) : null)) : (""));
        // line 34
        $context["candel"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "candel", [], "array", true, true, false, 34) &&  !(null === (($_v2 = ($context["params"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["candel"] ?? null) : null)))) ? ((($_v3 = ($context["params"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["candel"] ?? null) : null)) : (true));
        // line 35
        $context["canedit"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 35) &&  !(null === (($_v4 = ($context["params"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["canedit"] ?? null) : null)))) ? ((($_v5 = ($context["params"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["canedit"] ?? null) : null)) : (true));
        // line 36
        $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 36), "id", [], "array", true, true, false, 36) &&  !(null === (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 36)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["id"] ?? null) : null)))) ? ((($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 36)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["id"] ?? null) : null)) : ( -1));
        // line 37
        yield "
";
        // line 38
        if (array_key_exists("item", $context)) {
            // line 39
            yield "
     ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "


    ";
            // line 43
            if ((($context["canedit"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [(($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["id"] ?? null) : null)], "method", false, false, false, 43))) {
                // line 44
                yield "      <div class=\"form-button-separator card-body mx-n2 border-top d-flex flex-row-reverse align-items-start flex-wrap\">
         ";
                // line 45
                if (((($context["withtemplate"] ?? null) > 0) || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [($context["id"] ?? null)], "method", false, false, false, 45))) {
                    // line 46
                    yield "            ";
                    if (((($context["id"] ?? null) <= 0) || (($context["withtemplate"] ?? null) == 2))) {
                        // line 47
                        yield "               <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\" value=\"1\">
                  <i class=\"ti ti-plus\"></i>
                  <span>";
                        // line 49
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                        yield "</span>
               </button>
            ";
                    } else {
                        // line 52
                        yield "               <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                  <i class=\"ti ti-device-floppy\"></i>
                  <span>";
                        // line 54
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                        yield "</span>
               </button>
            ";
                    }
                    // line 57
                    yield "         ";
                } else {
                    // line 58
                    yield "            ";
                    if (((($context["candel"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("DELETE")], "method", false, false, false, 58)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 58))) {
                        // line 59
                        yield "               ";
                        $context["candel"] = false;
                        // line 60
                        yield "            ";
                    }
                    // line 61
                    yield "
            ";
                    // line 62
                    if ((($context["canedit"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("UPDATE")], "method", false, false, false, 62))) {
                        // line 63
                        yield "               <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                  <i class=\"ti ti-device-floppy\"></i>
                  <span>";
                        // line 65
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                        yield "</span>
               </button>
            ";
                    }
                    // line 68
                    yield "
            ";
                    // line 69
                    if ((($tmp = ($context["candel"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 70
                        yield "               ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 71
                            yield "                  ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("DELETE")], "method", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 72
                                yield "                     <button class=\"btn btn-outline-secondary me-2\" type=\"submit\"
                             name=\"restore\" value=\"1\">
                        <i class=\"ti ti-trash-off\"></i>
                        <span>";
                                // line 75
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Restore"), "html", null, true);
                                yield "</span>
                     </button>
                  ";
                            }
                            // line 78
                            yield "
                  ";
                            // line 79
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 80
                                yield "                    ";
                                $context["item_devices"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Item_Devices::getConcernedItems");
                                // line 81
                                yield "                    ";
                                $context["show_keep_devices"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 81), ($context["item_devices"] ?? null));
                                // line 82
                                yield "
                    ";
                                // line 83
                                $context["span_cls"] = "";
                                // line 84
                                yield "                    ";
                                if ((($tmp = ($context["show_keep_devices"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 85
                                    yield "                        ";
                                    $context["span_cls"] = "border border-danger d-flex align-items-start flex-wrap p-1 px-2 me-2";
                                    // line 86
                                    yield "                    ";
                                }
                                // line 87
                                yield "
                     <span class=\"";
                                // line 88
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["span_cls"] ?? null), "html", null, true);
                                yield "\">
                        <button class=\"btn btn-danger me-2\" type=\"submit\" name=\"purge\"
                              value=\"1\"
                              onclick=\"return confirm('";
                                // line 91
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "js"), "html", null, true);
                                yield "');\">
                           <i class=\"ti ti-trash\"></i>
                           <span>";
                                // line 93
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                                yield "</span>
                        </button>
                        ";
                                // line 95
                                if ((($tmp = ($context["show_keep_devices"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 96
                                    yield "                            <span class=\"mt-2\">
                                <label class=\"form-check form-switch\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"keep_devices\" value=\"1\" />
                                    <span class=\"form-check-label text-danger\">
                                        ";
                                    // line 100
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Keep the devices while deleting this item"), "html", null, true);
                                    yield "
                                    </span>
                                </label>
                            </span>
                        ";
                                }
                                // line 105
                                yield "                     </span>
                  ";
                            }
                            // line 107
                            yield "               ";
                        } else {
                            // line 108
                            yield "                  ";
                            if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maybeDeleted", [], "method", false, false, false, 108) || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "useDeletedToLockIfDynamic", [], "method", false, false, false, 108))) {
                                // line 109
                                yield "                     ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 110
                                    yield "                        <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                                onclick=\"return confirm('";
                                    // line 111
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "js"), "html", null, true);
                                    yield "');\"
                                value=\"1\">
                           <i class=\"ti ti-trash\"></i>
                           <span>";
                                    // line 114
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                                    yield "</span>
                        </button>
                     ";
                                }
                                // line 117
                                yield "                  ";
                            } elseif (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 117) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("DELETE")], "method", false, false, false, 117))) {
                                // line 118
                                yield "                     <button class=\"btn btn-outline-warning me-2\" type=\"submit\"
                             name=\"delete\" value=\"1\">
                        <i class=\"ti ti-trash\"></i>
                        <span>";
                                // line 121
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Put in trashbin"), "html", null, true);
                                yield "</span>
                     </button>
                  ";
                            }
                            // line 124
                            yield "               ";
                        }
                        // line 125
                        yield "            ";
                    }
                    // line 126
                    yield "
            ";
                    // line 127
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["date_mod"], "method", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 128
                        yield "               <input type=\"hidden\" name=\"_read_date_mod\" value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 128)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["date_mod"] ?? null) : null), "html", null, true);
                        yield "\" />
            ";
                    }
                    // line 130
                    yield "         ";
                }
                // line 131
                yield "
         ";
                // line 132
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [($context["id"] ?? null)], "method", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 133
                    yield "            <input type=\"hidden\" name=\"id\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
                    yield "\" />
         ";
                }
                // line 135
                yield "
         ";
                // line 136
                if ((($context["canedit"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "addbuttons", [], "array", true, true, false, 136) &&  !(null === (($_v10 = ($context["params"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["addbuttons"] ?? null) : null)))) ? ((($_v11 = ($context["params"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["addbuttons"] ?? null) : null)) : ([]))) > 0))) {
                    // line 137
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((($_v12 = ($context["params"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["addbuttons"] ?? null) : null));
                    foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                        // line 138
                        yield "                ";
                        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, $context["val"], "add_attribs", [], "any", true, true, false, 138) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["val"], "add_attribs", [], "any", false, false, false, 138)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["val"], "add_attribs", [], "any", false, false, false, 138)) : ([])))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 139
                            yield "                    ";
                            $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, $context["val"], "add_attribs", [], "any", false, false, false, 139)]);
                            // line 140
                            yield "                ";
                        } else {
                            // line 141
                            yield "                    ";
                            $context["extra_attribs"] = "";
                            // line 142
                            yield "                ";
                        }
                        // line 143
                        yield "               <button class=\"btn ";
                        yield (((CoreExtension::getAttribute($this->env, $this->source, $context["val"], "btn_class", [], "any", true, true, false, 143) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["val"], "btn_class", [], "any", false, false, false, 143)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "btn_class", [], "any", false, false, false, 143), "html", null, true)) : ("btn-outline-secondary"));
                        yield " me-2 ";
                        yield (((CoreExtension::getAttribute($this->env, $this->source, $context["val"], "add_class", [], "any", true, true, false, 143) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["val"], "add_class", [], "any", false, false, false, 143)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "add_class", [], "any", false, false, false, 143), "html", null, true)) : (""));
                        yield "\" type=\"";
                        yield (((CoreExtension::getAttribute($this->env, $this->source, $context["val"], "type", [], "any", true, true, false, 143) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["val"], "type", [], "any", false, false, false, 143)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "type", [], "any", false, false, false, 143), "html", null, true)) : ("submit"));
                        yield "\" name=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield "\" value=\"1\" title=\"";
                        yield (((CoreExtension::getAttribute($this->env, $this->source, $context["val"], "title", [], "any", true, true, false, 143) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["val"], "title", [], "any", false, false, false, 143)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "title", [], "any", false, false, false, 143), "html", null, true)) : (""));
                        yield "\" onclick=\"";
                        yield (((CoreExtension::getAttribute($this->env, $this->source, $context["val"], "onclick", [], "any", true, true, false, 143) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["val"], "onclick", [], "any", false, false, false, 143)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "onclick", [], "any", false, false, false, 143), "html", null, true)) : (""));
                        yield "\" ";
                        yield ($context["extra_attribs"] ?? null);
                        yield ">
                  ";
                        // line 144
                        if (is_iterable($context["val"])) {
                            // line 145
                            yield "                     ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["val"], "icon", [], "any", true, true, false, 145)) {
                                // line 146
                                yield "                        <i class=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "icon", [], "any", false, false, false, 146), "html", null, true);
                                yield "\"></i>
                     ";
                            }
                            // line 148
                            yield "                     <span>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["val"], "text", [], "any", true, true, false, 148)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "text", [], "any", false, false, false, 148), "")) : ("")), "html", null, true);
                            yield "</span>
                  ";
                        } else {
                            // line 150
                            yield "                     ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                            yield "
                  ";
                        }
                        // line 152
                        yield "               </button>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 154
                    yield "         ";
                }
                // line 155
                yield "
      </div>

      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\" />
   </div> ";
                // line 160
                yield "</form> ";
                // line 161
                yield "    ";
            } else {
                // line 162
                yield "   </div> ";
                // line 163
                yield "    ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/buttons.html.twig";
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
        return array (  370 => 163,  368 => 162,  365 => 161,  363 => 160,  359 => 158,  354 => 155,  351 => 154,  344 => 152,  338 => 150,  332 => 148,  326 => 146,  323 => 145,  321 => 144,  304 => 143,  301 => 142,  298 => 141,  295 => 140,  292 => 139,  289 => 138,  284 => 137,  282 => 136,  279 => 135,  273 => 133,  271 => 132,  268 => 131,  265 => 130,  259 => 128,  257 => 127,  254 => 126,  251 => 125,  248 => 124,  242 => 121,  237 => 118,  234 => 117,  228 => 114,  222 => 111,  219 => 110,  216 => 109,  213 => 108,  210 => 107,  206 => 105,  198 => 100,  192 => 96,  190 => 95,  185 => 93,  180 => 91,  174 => 88,  171 => 87,  168 => 86,  165 => 85,  162 => 84,  160 => 83,  157 => 82,  154 => 81,  151 => 80,  149 => 79,  146 => 78,  140 => 75,  135 => 72,  132 => 71,  129 => 70,  127 => 69,  124 => 68,  118 => 65,  114 => 63,  112 => 62,  109 => 61,  106 => 60,  103 => 59,  100 => 58,  97 => 57,  91 => 54,  87 => 52,  81 => 49,  77 => 47,  74 => 46,  72 => 45,  69 => 44,  67 => 43,  61 => 40,  58 => 39,  56 => 38,  53 => 37,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/buttons.html.twig", "/var/www/html/glpi/templates/components/form/buttons.html.twig");
    }
}
