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

/* intervention/liste.html.twig */
class __TwigTemplate_660d53e659fa1e65dfe55ec3e48e38d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "intervention/liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "intervention/liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "intervention/liste.html.twig", 1);
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

        yield "Liste des interventions
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "\t<h1>
\t\tListe des interventions</h1>
\t<div class=\"container intervention-liste\">
\t\t<table class=\"table table-hover\">

\t\t\t<thead>
\t\t\t\t<tr>

\t\t\t\t\t<th>Matricule de l'avion</th>
\t\t\t\t\t<th>Type d'intervention</th>
\t\t\t\t\t<th>Début de l'intervention</th>
\t\t\t\t\t<th>Fin de l'intervention</th>
\t\t\t\t\t<th>Commentaire</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>

\t\t\t";
        // line 24
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["interventions"]) || array_key_exists("interventions", $context) ? $context["interventions"] : (function () { throw new RuntimeError('Variable "interventions" does not exist.', 24, $this->source); })()))) {
            // line 25
            yield "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["interventions"]) || array_key_exists("interventions", $context) ? $context["interventions"] : (function () { throw new RuntimeError('Variable "interventions" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
                // line 26
                yield "\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avion", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "getAvion", [], "any", false, false, false, 29), "immatriculation", [], "any", false, false, false, 29)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "getAvion", [], "any", false, false, false, 29), "immatriculation", [], "any", false, false, false, 29), "html", null, true);
                yield "</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "interventionType", [], "any", false, false, false, 31), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t<td>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "interventionDateDebut", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t<td>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "interventionDateFin", [], "any", false, false, false, 33), "d/m/Y"), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t<td>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "interventionCommentaire", [], "any", false, false, false, 34), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervention", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                yield "\">Voir détail</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr></tr>
\t\t\t\t\t</tbody>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['intervention'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "\t\t\t";
        } else {
            // line 43
            yield "\t\t\t\t<p>Aucune intervention trouvé.</p>
\t\t\t";
        }
        // line 45
        yield "\t\t</table>

\t</div>
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
        return "intervention/liste.html.twig";
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
        return array (  175 => 45,  171 => 43,  168 => 42,  156 => 36,  151 => 34,  147 => 33,  143 => 32,  139 => 31,  132 => 29,  127 => 26,  122 => 25,  120 => 24,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des interventions
{% endblock %}

{% block body %}
\t<h1>
\t\tListe des interventions</h1>
\t<div class=\"container intervention-liste\">
\t\t<table class=\"table table-hover\">

\t\t\t<thead>
\t\t\t\t<tr>

\t\t\t\t\t<th>Matricule de l'avion</th>
\t\t\t\t\t<th>Type d'intervention</th>
\t\t\t\t\t<th>Début de l'intervention</th>
\t\t\t\t\t<th>Fin de l'intervention</th>
\t\t\t\t\t<th>Commentaire</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>

\t\t\t{% if interventions is not empty %}
\t\t\t\t{% for intervention in interventions %}
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_avion', {id: intervention.getAvion.immatriculation}) }}\">{{ intervention.getAvion.immatriculation }}</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ intervention.interventionType }}</td>
\t\t\t\t\t\t\t<td>{{ intervention.interventionDateDebut|date('d/m/Y') }}</td>
\t\t\t\t\t\t\t<td>{{ intervention.interventionDateFin|date('d/m/Y') }}</td>
\t\t\t\t\t\t\t<td>{{ intervention.interventionCommentaire }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('intervention', {id: intervention.id}) }}\">Voir détail</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr></tr>
\t\t\t\t\t</tbody>
\t\t\t\t{% endfor %}
\t\t\t{% else %}
\t\t\t\t<p>Aucune intervention trouvé.</p>
\t\t\t{% endif %}
\t\t</table>

\t</div>
{% endblock %}
", "intervention/liste.html.twig", "/home/dhuang/Documents/Exo_avion/Exercice_Avion/templates/intervention/liste.html.twig");
    }
}
