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

/* avion/avionDetail.html.twig */
class __TwigTemplate_dd07d87ca9c2625e6b292c6dcbe2ccce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avion/avionDetail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avion/avionDetail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avion/avionDetail.html.twig", 1);
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

        yield "Avion
\t";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["avion"]) || array_key_exists("avion", $context) ? $context["avion"] : (function () { throw new RuntimeError('Variable "avion" does not exist.', 4, $this->source); })()), "immatriculation", [], "any", false, false, false, 4), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "\t<style></style>
\t";
        // line 10
        yield "\t<div class=\"container\">
\t\t<h1>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("planeDetail"), "html", null, true);
        yield "</h1>
\t\t<div class=\"row information\">
\t\t\t<section class=\"col\">
\t\t\t\t<h2>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("planeCompanie"), "html", null, true);
        yield "</h2>
\t\t\t</section>
\t\t\t<section class=\"col\">
\t\t\t\t<h2>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("planeStatus"), "html", null, true);
        yield "</h2>
\t\t\t</section>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<section class=\"col\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["avion"]) || array_key_exists("avion", $context) ? $context["avion"] : (function () { throw new RuntimeError('Variable "avion" does not exist.', 22, $this->source); })()), "avionCompanie", [], "any", false, false, false, 22), "companieNom", [], "any", false, false, false, 22), "html", null, true);
        yield "</section>
\t\t\t<section class=\"col\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["avion"]) || array_key_exists("avion", $context) ? $context["avion"] : (function () { throw new RuntimeError('Variable "avion" does not exist.', 23, $this->source); })()), "avionStatue", [], "any", false, false, false, 23), "statueNom", [], "any", false, false, false, 23), "html", null, true);
        yield "</section>
\t\t</div>
\t</div>

\t";
        // line 28
        yield "\t<div class=\"container\">
\t\t<h1>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("addAIntervention"), "html", null, true);
        yield "</h1>
\t\t";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ajoutIntervention"]) || array_key_exists("ajoutIntervention", $context) ? $context["ajoutIntervention"] : (function () { throw new RuntimeError('Variable "ajoutIntervention" does not exist.', 30, $this->source); })()), 'form_start');
        yield "
\t\t<div class=\"row\">
\t\t\t";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ajoutIntervention"]) || array_key_exists("ajoutIntervention", $context) ? $context["ajoutIntervention"] : (function () { throw new RuntimeError('Variable "ajoutIntervention" does not exist.', 32, $this->source); })()), "InterventionDateDebut", [], "any", false, false, false, 32), 'row');
        yield "
\t\t\t";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ajoutIntervention"]) || array_key_exists("ajoutIntervention", $context) ? $context["ajoutIntervention"] : (function () { throw new RuntimeError('Variable "ajoutIntervention" does not exist.', 33, $this->source); })()), "InterventionDateFin", [], "any", false, false, false, 33), 'row');
        yield "
\t\t</div>
\t\t<div class=\"mb-3 row\">
\t\t\t";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ajoutIntervention"]) || array_key_exists("ajoutIntervention", $context) ? $context["ajoutIntervention"] : (function () { throw new RuntimeError('Variable "ajoutIntervention" does not exist.', 36, $this->source); })()), "InterventionType", [], "any", false, false, false, 36), 'row');
        yield "

\t\t</div>
\t\t<div class=\"mb-3 row\">
\t\t\t";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ajoutIntervention"]) || array_key_exists("ajoutIntervention", $context) ? $context["ajoutIntervention"] : (function () { throw new RuntimeError('Variable "ajoutIntervention" does not exist.', 40, $this->source); })()), "InterventionCommentaire", [], "any", false, false, false, 40), 'row');
        yield "

\t\t</div>
\t\t";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ajoutIntervention"]) || array_key_exists("ajoutIntervention", $context) ? $context["ajoutIntervention"] : (function () { throw new RuntimeError('Variable "ajoutIntervention" does not exist.', 43, $this->source); })()), 'form_end');
        yield "
\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 45
            yield "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 46
                yield "\t\t\t\t<div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
\t\t\t\t\t";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "\t</div>

\t";
        // line 54
        yield "\t<div class=\"container listes-interventions\">
\t\t<h1>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("historyOfIntervention"), "html", null, true);
        yield "</h1>
\t\t";
        // line 56
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["interventions"]) || array_key_exists("interventions", $context) ? $context["interventions"] : (function () { throw new RuntimeError('Variable "interventions" does not exist.', 56, $this->source); })()))) {
            // line 57
            yield "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["interventions"]) || array_key_exists("interventions", $context) ? $context["interventions"] : (function () { throw new RuntimeError('Variable "interventions" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
                // line 58
                yield "\t\t\t\t<ul>
\t\t\t\t\t<div class=\"panel-group\">

\t\t\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.Type"), "html", null, true);
                yield ":
\t\t\t\t\t\t\t\t";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "interventionType", [], "any", false, false, false, 64), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<strong>";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.Date.Creation"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "interventionDateCreation", [], "any", false, false, false, 71), "d/m/Y H:i:s"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"pane-body\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<strong>";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.Date.Start"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "interventionDateDebut", [], "any", false, false, false, 81), "d/m/Y H:i:s"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<strong>";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.Date.End"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "interventionDateFin", [], "any", false, false, false, 89), "d/m/Y H:i:s"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<strong>";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intervention.Commentary"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t:</strong>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["intervention"], "interventionCommentaire", [], "any", false, false, false, 96), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t</ul>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['intervention'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "\t\t";
        } else {
            // line 106
            yield "\t\t\t<p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("interventionNotFound"), "html", null, true);
            yield "</p>
\t\t";
        }
        // line 108
        yield "\t</div>
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
        return "avion/avionDetail.html.twig";
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
        return array (  319 => 108,  313 => 106,  310 => 105,  295 => 96,  289 => 93,  282 => 89,  276 => 86,  268 => 81,  262 => 78,  252 => 71,  246 => 68,  239 => 64,  235 => 63,  228 => 58,  223 => 57,  221 => 56,  217 => 55,  214 => 54,  210 => 51,  204 => 50,  195 => 47,  190 => 46,  185 => 45,  181 => 44,  177 => 43,  171 => 40,  164 => 36,  158 => 33,  154 => 32,  149 => 30,  145 => 29,  142 => 28,  135 => 23,  131 => 22,  123 => 17,  117 => 14,  111 => 11,  108 => 10,  105 => 8,  92 => 7,  79 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Avion
\t{{avion.immatriculation}}
{% endblock %}

{% block body %}
\t<style></style>
\t{# Partie qui affiche les caractéristiques de l'avion#}
\t<div class=\"container\">
\t\t<h1>{{\"planeDetail\" | trans()}}</h1>
\t\t<div class=\"row information\">
\t\t\t<section class=\"col\">
\t\t\t\t<h2>{{ \"planeCompanie\"| trans() }}</h2>
\t\t\t</section>
\t\t\t<section class=\"col\">
\t\t\t\t<h2>{{\"planeStatus\" |trans()}}</h2>
\t\t\t</section>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<section class=\"col\">{{avion.avionCompanie.companieNom}}</section>
\t\t\t<section class=\"col\">{{avion.avionStatue.statueNom}}</section>
\t\t</div>
\t</div>

\t{# section pour le formulaire #}
\t<div class=\"container\">
\t\t<h1>{{\"addAIntervention\" |trans()}}</h1>
\t\t{{ form_start(ajoutIntervention) }}
\t\t<div class=\"row\">
\t\t\t{{ form_row(ajoutIntervention.InterventionDateDebut) }}
\t\t\t{{ form_row(ajoutIntervention.InterventionDateFin) }}
\t\t</div>
\t\t<div class=\"mb-3 row\">
\t\t\t{{ form_row(ajoutIntervention.InterventionType) }}

\t\t</div>
\t\t<div class=\"mb-3 row\">
\t\t\t{{ form_row(ajoutIntervention.InterventionCommentaire) }}

\t\t</div>
\t\t{{ form_end(ajoutIntervention) }}
\t\t{% for label, messages in app.flashes %}
\t\t\t{% for message in messages %}
\t\t\t\t<div class=\"alert alert-{{ label }}\">
\t\t\t\t\t{{ message }}
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t{% endfor %}
\t</div>

\t{# Partie qui affiche les interventions #}
\t<div class=\"container listes-interventions\">
\t\t<h1>{{ \"historyOfIntervention\" |trans() }}</h1>
\t\t{% if interventions is not empty %}
\t\t\t{% for intervention in interventions %}
\t\t\t\t<ul>
\t\t\t\t\t<div class=\"panel-group\">

\t\t\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t{{\"intervention.Type\" |trans()}}:
\t\t\t\t\t\t\t\t{{ intervention.interventionType }}
\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<strong>{{\"intervention.Date.Creation\" |trans()}}
\t\t\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t{{ intervention.interventionDateCreation|date('d/m/Y H:i:s') }}
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"pane-body\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<strong>{{\"intervention.Date.Start\" |trans()}}
\t\t\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t{{ intervention.interventionDateDebut|date('d/m/Y H:i:s') }}
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<strong>{{\"intervention.Date.End\" |trans()}}
\t\t\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t{{ intervention.interventionDateFin|date('d/m/Y H:i:s') }}
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<strong>{{\"intervention.Commentary\" |trans()}}
\t\t\t\t\t\t\t\t\t\t:</strong>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t{{ intervention.interventionCommentaire }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t</ul>
\t\t\t{% endfor %}
\t\t{% else %}
\t\t\t<p>{{\"interventionNotFound\" |trans()}}</p>
\t\t{% endif %}
\t</div>
{% endblock %}
", "avion/avionDetail.html.twig", "/home/dhuang/Documents/Exo_avion/Exercice_Avion/templates/avion/avionDetail.html.twig");
    }
}
