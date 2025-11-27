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

/* layout/page_card_notlogged.html.twig */
class __TwigTemplate_3ad1784e760b0587bfbdeb7daef860b1 extends Template
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
            'header_block' => [$this, 'block_header_block'],
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $context["theme"] = $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->currentTheme();
        // line 34
        if ((($tmp =  !array_key_exists("css_files", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "   ";
            $context["css_files"] = [["path" => "lib/base.css"], ["path" => "lib/tabler.css"], ["path" => "css/glpi.scss"], ["path" => "css/core_palettes.scss"]];
            // line 41
            yield "   ";
        }
        // line 43
        if ((($tmp =  !array_key_exists("js_files", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "   ";
            $context["js_files"] = [["path" => "lib/base.js"], ["path" => "js/common.js"], ["path" => "lib/fuzzy.js"]];
        }
        // line 50
        if ((($tmp =  !array_key_exists("js_modules", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "   ";
            $context["js_modules"] = [];
        }
        // line 53
        if ((($tmp =  !array_key_exists("custom_header_tags", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "   ";
            $context["custom_header_tags"] = [];
        }
        // line 56
        yield "
";
        // line 58
        $context["js_files"] = Twig\Extension\CoreExtension::merge(($context["js_files"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsScriptsFiles(true));
        // line 59
        $context["js_modules"] = Twig\Extension\CoreExtension::merge(($context["js_modules"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsModulesFiles(true));
        // line 60
        yield "
";
        // line 61
        $context["is_anonymous_page"] = true;
        // line 62
        yield "
";
        // line 63
        yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/head.html.twig");
        yield "
<body class=\"welcome-anonymous\">
   <div class=\"page-anonymous\">
      <div class=\"flex-fill d-flex flex-column justify-content-center py-4 mt-4\">
         ";
        // line 67
        $context["style"] = null;
        // line 68
        yield "         ";
        if (array_key_exists("card_md_width", $context)) {
            // line 69
            yield "            ";
            $context["style"] = "max-width: 40rem";
            // line 70
            yield "         ";
        }
        // line 71
        yield "         ";
        if (array_key_exists("card_bg_width", $context)) {
            // line 72
            yield "            ";
            $context["style"] = "max-width: 60rem";
            // line 73
            yield "         ";
        }
        // line 74
        yield "
         <div class=\"container-tight py-6\" ";
        // line 75
        if ((($tmp =  !(null === ($context["style"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "style=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["style"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
            <div class=\"text-center\">
               <div class=\"col-md\">
                  <span class=\"glpi-logo mb-4\" title=\"GLPI\"></span>
               </div>
            </div>
            <div class=\"card card-md main-content-card\">
               ";
        // line 83
        yield "               <div class=\"card-header\">";
        yield from $this->unwrap()->yieldBlock('header_block', $context, $blocks);
        yield "</div>
               <div class=\"card-body\">
                  ";
        // line 85
        yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
        // line 86
        yield "               </div>
            </div>

            <div class=\"text-center text-muted mt-3\">
               ";
        // line 90
        yield from $this->unwrap()->yieldBlock('footer_block', $context, $blocks);
        // line 91
        yield "            </div>
         </div>
      </div>
   </div>

   ";
        // line 96
        yield from $this->unwrap()->yieldBlock('javascript_block', $context, $blocks);
        // line 97
        yield "</body>
</html>
";
        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/page_card_notlogged.html.twig";
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
        return array (  198 => 96,  188 => 90,  178 => 85,  168 => 83,  161 => 97,  159 => 96,  152 => 91,  150 => 90,  144 => 86,  142 => 85,  136 => 83,  122 => 75,  119 => 74,  116 => 73,  113 => 72,  110 => 71,  107 => 70,  104 => 69,  101 => 68,  99 => 67,  92 => 63,  89 => 62,  87 => 61,  84 => 60,  82 => 59,  80 => 58,  77 => 56,  73 => 54,  71 => 53,  67 => 51,  65 => 50,  61 => 44,  59 => 43,  56 => 41,  53 => 35,  51 => 34,  49 => 33,  46 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/page_card_notlogged.html.twig", "/var/www/html/glpi/templates/layout/page_card_notlogged.html.twig");
    }
}
