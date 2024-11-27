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

/* avion/index.html.twig */
class __TwigTemplate_fe1a2afacff304badb03e73fbe8800b0 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avion/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avion/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Avion index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container\">
    <h1>Avion index</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                ";
        // line 17
        yield "                    
                <th>Immatriculation</th>
                <th>Compagnie</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avions"]) || array_key_exists("avions", $context) ? $context["avions"] : (function () { throw new RuntimeError('Variable "avions" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avion"]) {
            // line 25
            yield "            <tr>
                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avion"], "immatriculation", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["avixon"]) || array_key_exists("avixon", $context) ? $context["avixon"] : (function () { throw new RuntimeError('Variable "avixon" does not exist.', 28, $this->source); })()), "AvionCompanie", [], "any", false, false, false, 28), "CompanieNom", [], "any", false, false, false, 28), "html", null, true);
            yield "
                </td>
                <td>
                    <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avion_show", ["immatriculation" => CoreExtension::getAttribute($this->env, $this->source, $context["avion"], "immatriculation", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avion_edit", ["immatriculation" => CoreExtension::getAttribute($this->env, $this->source, $context["avion"], "immatriculation", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            yield "            <tr>
                <td colspan=\"2\">no records found</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "        </tbody>
    </table>
</div>
<div class=\"navigation\">
    <div class=\"center\">
        ";
        // line 45
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["avions"]) || array_key_exists("avions", $context) ? $context["avions"] : (function () { throw new RuntimeError('Variable "avions" does not exist.', 45, $this->source); })()));
        yield "
    </div>
</div>
<a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avion_new");
        yield "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "avion/index.html.twig";
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
        return array (  171 => 48,  165 => 45,  158 => 40,  149 => 36,  140 => 32,  136 => 31,  130 => 28,  125 => 26,  122 => 25,  117 => 24,  108 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Avion index{% endblock %}

{% block body %}
<div class=\"container\">
    <h1>Avion index</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                {#
                    <th>
                        {{ knp_pagination_sortable(avions, 'immatriculation', avions.immatriculation) }}
                    </th>
                    #}
                    
                <th>Immatriculation</th>
                <th>Compagnie</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            {% for avion in avions %}
            <tr>
                <td>{{ avion.immatriculation }}</td>
                <td>
                    {{ avixon.AvionCompanie.CompanieNom}}
                </td>
                <td>
                    <a href=\"{{ path('app_avion_show', {'immatriculation': avion.immatriculation}) }}\">show</a>
                    <a href=\"{{ path('app_avion_edit', {'immatriculation': avion.immatriculation}) }}\">edit</a>
                </td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"2\">no records found</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
<div class=\"navigation\">
    <div class=\"center\">
        {{ knp_pagination_render(avions) }}
    </div>
</div>
<a href=\"{{ path('app_avion_new') }}\">Create new</a>
{% endblock %}", "avion/index.html.twig", "/home/dhuang/Documents/Exo_avion/Exercice_Avion/templates/avion/index.html.twig");
    }
}
