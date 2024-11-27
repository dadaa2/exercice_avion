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

/* intervention/interventionDetail.html.twig */
class __TwigTemplate_ece6d9afb5e0f41464727520ed8e152d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "intervention/interventionDetail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "intervention/interventionDetail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "intervention/interventionDetail.html.twig", 1);
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

        yield "Intervention numéro ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<style>
    
</style>

<div class=\"container mt-5\">
    <h1>Détail de l'intervention ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield " pour  l'avion ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 11, $this->source); })()), "avion", [], "any", false, false, false, 11), "immatriculation", [], "any", false, false, false, 11), "html", null, true);
        yield "</h1>
    <div class=\"card\">
        <div class=\"card primary\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h4>Type d'intervention</h4>
                    <p>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 17, $this->source); })()), "interventionType", [], "any", false, false, false, 17), "html", null, true);
        yield "
                </div>
                <div class=\"col-md-8\">
                    <h4>Création de l'intervention</h4>
                    <p>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 21, $this->source); })()), "interventionDateCreation", [], "any", false, false, false, 21), "d/m/Y H:m:s"), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <div class=\"row mb-3\">
                <div class=\" col-md-4\">
                    <h4>Début de l'intervention</h4>
                    <p>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 30, $this->source); })()), "interventionDateDebut", [], "any", false, false, false, 30), "d/m/Y H:m:s"), "html", null, true);
        yield "
                </div>
                <div class=\" col-md-4\">
                    <h4>Fin de l'intervention</h4>
                    <p>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 34, $this->source); })()), "interventionDateFin", [], "any", false, false, false, 34), "d/m/Y H:m:s"), "html", null, true);
        yield "
                </div>
                <div class=\" col-md-4\">
                    <h4>Type d'intervention</h4>
                    <p>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 38, $this->source); })()), "interventionCommentaire", [], "any", false, false, false, 38), "html", null, true);
        yield "
                </div>
            </div>
        </div>
        <div class=\"button\">
            <form method=\"post\" action=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervention_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\">
                <button type=\"submit\" style=\"color: red;\">Supprimer</button>
            </form>
        </div>
    </div>


    ";
        // line 51
        yield "    <div class=\"\">
        <h2>Modifier l'intervention</h2>
        <form method=\"post\" action=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervention_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        yield "\">

            <label for=\"type";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
        yield "\" class=\"form-label\">Type d'intervention</label>

            <label for=\"dateDebut";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "html", null, true);
        yield "\" class=\"form-label\">Date de début</label>
            <input type=\"datetime-local\" class=\"form-control\" id=\"dateFin";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
        yield "\" name=\"DateDebut\" 
            value=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 59, $this->source); })()), "interventionDateDebut", [], "any", false, false, false, 59), "Y-m-d\\TH:i"), "html", null, true);
        yield "\">        
            
            <label for=\"dateDebut";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61), "html", null, true);
        yield "\" class=\"form-label\">Date de fin</label>
            <input type=\"datetime-local\" class=\"form-control\" id=\"dateFin";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62), "html", null, true);
        yield "\" name=\"DateFin\" 
            value=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 63, $this->source); })()), "interventionDateFin", [], "any", false, false, false, 63), "Y-m-d\\TH:i"), "html", null, true);
        yield "\">     
            
            <textarea name=\"interventionCommentaire\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 65, $this->source); })()), "interventionCommentaire", [], "any", false, false, false, 65), "html", null, true);
        yield "</textarea>
            <button type=\"submit\">Enregistrer les modifications</button>
            
        </form>
    
    </div>

</div>
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
        return "intervention/interventionDetail.html.twig";
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
        return array (  210 => 65,  205 => 63,  201 => 62,  197 => 61,  192 => 59,  188 => 58,  184 => 57,  179 => 55,  174 => 53,  170 => 51,  160 => 43,  152 => 38,  145 => 34,  138 => 30,  126 => 21,  119 => 17,  108 => 11,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Intervention numéro {{intervention.id}}{% endblock %}

{% block body %}
<style>
    
</style>

<div class=\"container mt-5\">
    <h1>Détail de l'intervention {{intervention.id}} pour  l'avion {{intervention.avion.immatriculation}}</h1>
    <div class=\"card\">
        <div class=\"card primary\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h4>Type d'intervention</h4>
                    <p>{{ intervention.interventionType}}
                </div>
                <div class=\"col-md-8\">
                    <h4>Création de l'intervention</h4>
                    <p>{{ intervention.interventionDateCreation|date('d/m/Y H:m:s')}}</p>
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <div class=\"row mb-3\">
                <div class=\" col-md-4\">
                    <h4>Début de l'intervention</h4>
                    <p>{{ intervention.interventionDateDebut|date('d/m/Y H:m:s') }}
                </div>
                <div class=\" col-md-4\">
                    <h4>Fin de l'intervention</h4>
                    <p>{{ intervention.interventionDateFin|date('d/m/Y H:m:s') }}
                </div>
                <div class=\" col-md-4\">
                    <h4>Type d'intervention</h4>
                    <p>{{ intervention.interventionCommentaire }}
                </div>
            </div>
        </div>
        <div class=\"button\">
            <form method=\"post\" action=\"{{ path('intervention_delete', {'id': intervention.id}) }}\">
                <button type=\"submit\" style=\"color: red;\">Supprimer</button>
            </form>
        </div>
    </div>


    {# Partie pour la modification de l'intervention #}
    <div class=\"\">
        <h2>Modifier l'intervention</h2>
        <form method=\"post\" action=\"{{ path('intervention_update', {'id': intervention.id}) }}\">

            <label for=\"type{{ intervention.id }}\" class=\"form-label\">Type d'intervention</label>

            <label for=\"dateDebut{{ intervention.id }}\" class=\"form-label\">Date de début</label>
            <input type=\"datetime-local\" class=\"form-control\" id=\"dateFin{{ intervention.id }}\" name=\"DateDebut\" 
            value=\"{{ intervention.interventionDateDebut|date('Y-m-d\\\\TH:i') }}\">        
            
            <label for=\"dateDebut{{ intervention.id }}\" class=\"form-label\">Date de fin</label>
            <input type=\"datetime-local\" class=\"form-control\" id=\"dateFin{{ intervention.id }}\" name=\"DateFin\" 
            value=\"{{ intervention.interventionDateFin|date('Y-m-d\\\\TH:i') }}\">     
            
            <textarea name=\"interventionCommentaire\">{{ intervention.interventionCommentaire }}</textarea>
            <button type=\"submit\">Enregistrer les modifications</button>
            
        </form>
    
    </div>

</div>
{% endblock %}

", "intervention/interventionDetail.html.twig", "/home/dhuang/Documents/Exo_avion/Exercice_Avion/templates/intervention/interventionDetail.html.twig");
    }
}
