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

/* __string_template__de0bec7c500459af6507c75c214ab7e7 */
class __TwigTemplate_c139aea183f93ffd26dda3ac5b138795 extends Template
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
        // line 1
        yield "            <script type=\"module\">
                function exportToCSV() {
                    location.href = '";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csv_link"] ?? null), "js"), "html", null, true);
        yield "';
                }
                const chart_options = ";
        // line 5
        yield json_encode(($context["chart_options"] ?? null));
        yield ";
                const myChart = echarts.init(document.getElementById('";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["slug"] ?? null), "html", null, true);
        yield "'));

                \$.each(chart_options.series, function (index, serie) {
                    serie.symbol = (value) => value > 0 ? 'circle': 'none';
                });
                if (chart_options['toolbox']['feature']['myCsvExport'] !== undefined) {
                    chart_options['toolbox']['feature']['myCsvExport']['onclick'] = exportToCSV;
                }
                myChart.setOption(chart_options);
            </script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__de0bec7c500459af6507c75c214ab7e7";
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
        return array (  55 => 6,  51 => 5,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__de0bec7c500459af6507c75c214ab7e7", "");
    }
}
