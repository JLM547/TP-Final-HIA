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

/* components/search/displaypreference_list.html.twig */
class __TwigTemplate_e0dcbc7861685ee5572ba3292795e92d extends Template
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
        // line 35
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["preferences"] ?? null)) > 0)) {
            // line 36
            yield "    <div class=\"m-3\" id=\"displayprefences-setup\">
        ";
            // line 37
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v0 = ($context["massiveactionparams"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["specific_actions"] ?? null) : null)) > 0)) {
                // line 38
                yield "            <form id=\"massDisplayPreference";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\" method=\"get\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/massiveaction.php"), "html", null, true);
                yield "\"
                data-search-itemtype=\"DisplayPreference\" data-submit-once>
                <div class=\"d-flex ms-4\">
                    ";
                // line 41
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showMassiveActions", [($context["massiveactionparams"] ?? null)]);
                // line 42
                yield "        ";
            }
            // line 43
            yield "
                    <a role=\"button\" class=\"btn btn-sm btn-ghost-secondary\" id=\"select-all-itemtypes\">
                        <i class=\"ti ti-copy-check\"></i>
                        <span>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select/unselect all"), "html", null, true);
            yield "</span>
                    </a>

                    <input type=\"text\" placeholder=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Search"), "html", null, true);
            yield "\" class=\"ms-auto\" id=\"search-itemtype\" />
                </div>
                ";
            // line 51
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 51, $this->getSourceContext())->macro_hidden(...["users_id", ($context["users_id"] ?? null), ["data-glpicore-ma-tags" => "common"]]);
            // line 53
            yield "
                <div class=\"display-prefs-list row g-2 mt-1\">
                    ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["preferences"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pref"]) {
                // line 56
                yield "                        ";
                $context["name"] = Twig\Extension\CoreExtension::default($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($_v1 = $context["pref"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["itemtype"] ?? null) : null), 1), (($_v2 = $context["pref"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["itemtype"] ?? null) : null));
                // line 57
                yield "                        <div class=\"col-12 col-sm-6 col-xl-4 col-xxl-3 displayed-itemtype\">
                            <div class=\"bg-gray-300 border border-gray-200 p-3 rounded-2 d-flex\">
                                ";
                // line 59
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v3 = ($context["massiveactionparams"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["specific_actions"] ?? null) : null)) > 0)) {
                    // line 60
                    yield "                                    <span class=\"me-2\">
                                        ";
                    // line 61
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showMassiveActionCheckBox", ["DisplayPreference", (($_v4 = $context["pref"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["itemtype"] ?? null) : null)]);
                    // line 62
                    yield "                                    </span>
                                ";
                }
                // line 64
                yield "                                <button type=\"button\" class=\"btn btn-ghost-secondary p-0 btn-itemtype-pref overflow-hidden\" data-itemtype=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = $context["pref"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["itemtype"] ?? null) : null), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\">
                                    <i class=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon((($_v6 = $context["pref"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["itemtype"] ?? null) : null)), "html", null, true);
                yield " me-1\"></i>
                                    <span class=\"text-truncate\">
                                        ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "
                                    </span>
                                </button>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['pref'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "                </div>
        ";
            // line 74
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v7 = ($context["massiveactionparams"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["specific_actions"] ?? null) : null)) > 0)) {
                // line 75
                yield "                <div class=\"ms-4 mt-2\">
                    ";
                // line 76
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showMassiveActions", [Twig\Extension\CoreExtension::merge(($context["massiveactionparams"] ?? null), ["ontop" => false])]);
                // line 79
                yield "                </div>
            </form>
        ";
            }
            // line 82
            yield "    </div>
    <template id=\"displaypreference_modal_template";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 84
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/search/displaypreference_modal.html.twig", ["rand" =>             // line 85
($context["rand"] ?? null), "itemtype" => "__VALUE__"]);
            // line 87
            yield "
    </template>
    <script>
        \$(() => {
            \$('.display-prefs-list button.btn-itemtype-pref').on('click', (e) => {
                const itemtype = \$(e.currentTarget).attr('data-itemtype');
                const itemtype_name = \$(e.currentTarget).text();
                \$('#displayprefence_modal";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').remove();
                const modal = \$(\$('#displaypreference_modal_template";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').html());
                const default_src = modal.find('iframe').attr('src');
                const forced_tab = \"";
            // line 97
            yield (((($context["users_id"] ?? null) > 0)) ? ("DisplayPreference\$2") : ("DisplayPreference\$1"));
            yield "\"
                const replacement = `\${itemtype}&forcetab=\${forced_tab}&no_switch=1`;
                modal.find('iframe').attr('src', default_src.replace('__VALUE__', replacement));
                modal.find('.modal-header h4').text(modal.find('.modal-header h4').text() + ' - ' + itemtype_name);
                modal.appendTo('body').modal('show');
            });

            // filter the list of itemtype
            let delay_timer = null;
            \$('#search-itemtype').on('input', function() {
                const search = \$(this).val().toLowerCase();

                // delay the search to avoid flickering
                clearTimeout(delay_timer);
                delay_timer = setTimeout(function() {
                    \$('[data-itemtype]').each(function() {
                        const itemtype_search = \$(this).html().toLowerCase();
                        if (itemtype_search.indexOf(search) === -1) {
                            \$(this).closest('.displayed-itemtype').addClass('d-none');
                        } else {
                            \$(this).closest('.displayed-itemtype').removeClass('d-none');
                        }
                    });
                }, 250);
            });

            // prevent Enter key to submit the form in search input field
            \$('#search-itemtype').on('keypress', function(e) {
                if (e.originalEvent.key === 'Enter') {
                    e.preventDefault();
                }
            });

            // (un)toggle all capacities button
            \$('#select-all-itemtypes').on('click', function() {
                var \$checkboxes = \$('#displayprefences-setup input[type=checkbox]');
                var \$checkedCheckboxes = \$checkboxes.filter(':checked');

                if (\$checkedCheckboxes.length === \$checkboxes.length) {
                    \$checkboxes.prop('checked', false);
                } else {
                    \$checkboxes.prop('checked', true);
                }

                \$checkboxes.trigger('change');
            });
        });
    </script>
";
        } else {
            // line 146
            yield "    <div class=\"alert alert-info\">
        ";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No results found"), "html", null, true);
            yield "
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
        return "components/search/displaypreference_list.html.twig";
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
        return array (  237 => 147,  234 => 146,  182 => 97,  177 => 95,  173 => 94,  164 => 87,  162 => 85,  161 => 84,  157 => 83,  154 => 82,  149 => 79,  147 => 76,  144 => 75,  142 => 74,  139 => 73,  127 => 67,  122 => 65,  115 => 64,  111 => 62,  109 => 61,  106 => 60,  104 => 59,  100 => 57,  97 => 56,  93 => 55,  89 => 53,  87 => 51,  82 => 49,  76 => 46,  71 => 43,  68 => 42,  66 => 41,  57 => 38,  55 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/displaypreference_list.html.twig", "/var/www/html/glpi/templates/components/search/displaypreference_list.html.twig");
    }
}
