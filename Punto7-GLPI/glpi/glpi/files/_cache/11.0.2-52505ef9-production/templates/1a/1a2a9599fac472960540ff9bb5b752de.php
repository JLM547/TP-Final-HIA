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

/* components/itilobject/linked_itilobjects.html.twig */
class __TwigTemplate_0a267577d085e1a2f3c94569b95bb1cc extends Template
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
<input type=\"hidden\" name=\"_link[itemtype_1]\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 33), "html", null, true);
        yield "\" />
<input type=\"hidden\" name=\"_link[items_id_1]\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 34)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null), "html", null, true);
        yield "\" />

";
        // line 36
        $context["linked_itilobjects"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (0) : ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CommonITILObject_CommonITILObject::getAllLinkedTo", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 36), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getId", [], "method", false, false, false, 36)])));
        // line 37
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["linked_itilobjects"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "   <div class=\"card\">
      <div class=\"list-group list-group-flush list-group-hoverable\">
         ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["linked_itilobjects"] ?? null));
            foreach ($context['_seq'] as $context["id"] => $context["linked"]) {
                // line 41
                yield "            ";
                $context["new_itilobject"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem((($_v1 = $context["linked"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["itemtype"] ?? null) : null), (($_v2 = $context["linked"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["items_id"] ?? null) : null));
                // line 42
                yield "            <div class=\"list-group-item\">
               <div class=\"row\">
                  <div class=\"col-auto\">
                     ";
                // line 45
                yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CommonITILObject_CommonITILObject::getLinkName", [(($_v3 =                 // line 46
$context["linked"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["link"] ?? null) : null), (((($_v4 =                 // line 47
$context["linked"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["itemtype_2"] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 47)) && ((($_v5 = $context["linked"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["items_id_2"] ?? null) : null) == (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["id"] ?? null) : null))), true]);
                // line 49
                yield "
                  </div>
                  <div class=\"col text-truncate\">
                     <a href=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath((($_v7 = $context["linked"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["itemtype"] ?? null) : null), (($_v8 = $context["linked"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["items_id"] ?? null) : null)), "html", null, true);
                yield "\" class=\"col-9 overflow-hidden text-nowrap\">
                        <i class=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon((($_v9 = $context["linked"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["itemtype"] ?? null) : null)), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($_v10 = $context["linked"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["itemtype"] ?? null) : null)), "html", null, true);
                yield "\" data-bs-toggle=\"tootlip\"></i>
                        ";
                // line 54
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["new_itilobject"] ?? null), "getStatusIcon", [(($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["new_itilobject"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["status"] ?? null) : null)], "method", false, false, false, 54);
                yield "
                        <span title=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v12 = CoreExtension::getAttribute($this->env, $this->source, ($context["new_itilobject"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["name"] ?? null) : null), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\">
                     ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["new_itilobject"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["name"] ?? null) : null), "html", null, true);
                yield "
                  </span>
                        (";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["new_itilobject"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["id"] ?? null) : null), "html", null, true);
                yield ")
                     </a>
                  </div>

                  ";
                // line 62
                if ((($tmp = ($context["canupdate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 63
                    yield "                     <div class=\"col-auto\">
                        <button type=\"submit\"
                                form=\"linked_itilobjects_";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["main_rand"] ?? null), "html", null, true);
                    yield "\"
                                name=\"id\"
                                value=\"";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
                    yield "\"
                                class=\"btn btn-sm btn-ghost-danger\"
                                title=\"";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Unlink"), "html", null, true);
                    yield "\"
                                data-bs-toggle=\"tooltip\">
                           <i class=\"ti ti-unlink\"></i>
                        </button>
                     </div>
                  ";
                }
                // line 75
                yield "               </div>
            </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['id'], $context['linked'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "      </div>
   </div>
";
        }
        // line 81
        yield "
";
        // line 82
        if ((($context["canupdate"] ?? null) &&  !(((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "template_preview", [], "array", true, true, false, 82) &&  !(null === (($_v15 = ($context["params"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["template_preview"] ?? null) : null)))) ? ((($_v16 = ($context["params"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["template_preview"] ?? null) : null)) : (false)))) {
            // line 83
            yield "   ";
            $context["has_pending_link"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 83), "items_id_2", [], "array", true, true, false, 83) &&  !(null === (($_v17 = (($_v18 = ($context["params"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["_link"] ?? null) : null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["items_id_2"] ?? null) : null)))) ? ((($_v19 = (($_v20 = ($context["params"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["_link"] ?? null) : null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["items_id_2"] ?? null) : null)) : (""))) > 0);
            // line 84
            yield "   <div class=\"mt-2\">
      <button class=\"btn btn-sm btn-ghost-secondary ";
            // line 85
            yield (((($tmp = ($context["has_pending_link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "\" type=\"button\"
              data-bs-toggle=\"collapse\" data-bs-target=\"#link_itilobject_dropdowns\"
              aria-expanded=\"false\" aria-controls=\"link_itilobject_dropdowns\" onclick=\"\$(this).hide();\">
         <i class=\"ti ti-plus\"></i>
         <span>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "</span>
      </button>

      <span class=\"collapse ";
            // line 92
            yield (((($tmp = ($context["has_pending_link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\" id=\"link_itilobject_dropdowns\">
         ";
            // line 93
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CommonITILObject_CommonITILObject::dropdownLinks", ["_link[link]", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 95
($context["params"] ?? null), "_link", [], "array", false, true, false, 95), "link", [], "array", true, true, false, 95) &&  !(null === (($_v21 = (($_v22 = ($context["params"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["_link"] ?? null) : null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["link"] ?? null) : null)))) ? ((($_v23 = (($_v24 = ($context["params"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["_link"] ?? null) : null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["link"] ?? null) : null)) : (""))]);
            // line 97
            yield "         ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showSelectItemFromItemtypes", [["items_id_name" => "_link[items_id_2]", "itemtype_name" => "_link[itemtype_2]", "itemtypes" => ["Ticket", "Change", "Problem"], "checkright" => true, "entity_restrict" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "default_itemtype" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 103
($context["params"] ?? null), "_link", [], "array", false, true, false, 103), "itemtype_2", [], "array", true, true, false, 103) &&  !(null === (($_v25 = (($_v26 = ($context["params"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["_link"] ?? null) : null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["itemtype_2"] ?? null) : null)))) ? ((($_v27 = (($_v28 = ($context["params"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["_link"] ?? null) : null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["itemtype_2"] ?? null) : null)) : ("")), "default_items_id" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 104
($context["params"] ?? null), "_link", [], "array", false, true, false, 104), "items_id_2", [], "array", true, true, false, 104) &&  !(null === (($_v29 = (($_v30 = ($context["params"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["_link"] ?? null) : null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["items_id_2"] ?? null) : null)))) ? ((($_v31 = (($_v32 = ($context["params"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["_link"] ?? null) : null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["items_id_2"] ?? null) : null)) : (""))]]);
            // line 106
            yield "      </span>
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
        return "components/itilobject/linked_itilobjects.html.twig";
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
        return array (  187 => 106,  185 => 104,  184 => 103,  182 => 97,  180 => 95,  179 => 93,  175 => 92,  169 => 89,  162 => 85,  159 => 84,  156 => 83,  154 => 82,  151 => 81,  146 => 78,  138 => 75,  129 => 69,  124 => 67,  119 => 65,  115 => 63,  113 => 62,  106 => 58,  101 => 56,  97 => 55,  93 => 54,  87 => 53,  83 => 52,  78 => 49,  76 => 47,  75 => 46,  74 => 45,  69 => 42,  66 => 41,  62 => 40,  58 => 38,  56 => 37,  54 => 36,  49 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/linked_itilobjects.html.twig", "/var/www/html/glpi/templates/components/itilobject/linked_itilobjects.html.twig");
    }
}
