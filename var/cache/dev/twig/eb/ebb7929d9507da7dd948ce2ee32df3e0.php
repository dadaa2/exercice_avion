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

/* companies/index.html.twig */
class __TwigTemplate_dd549237620a622cc27f1fdc663d148c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "companies/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "companies/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "companies/index.html.twig", 1);
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

        yield "Hello CompaniesController!";
        
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
        yield "<main class=\"container\">
\t<table class=\"table table-hover\">
\t\t<form method=\"post\" action=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_companies_add");
        yield "\">
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Ajouter une companie</button>
\t\t</form>
\t\t
\t\t\t";
        // line 12
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 12, $this->source); })()))) {
            // line 13
            yield "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["companie"]) {
                // line 14
                yield "\t\t\t<tbody>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companie"], "companieNom", [], "any", false, false, false, 16), "html", null, true);
                yield "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"button\">
\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_companies_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["companie"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_companies_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["companie"], "id", [], "any", false, false, false, 24)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-secondary\">Modifier</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tbody>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['companie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "\t\t\t";
        } else {
            // line 32
            yield "\t\t\t<p>Aucune companies trouvé.</p>
\t\t\t";
        }
        // line 34
        yield "\t</table>
</main>
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
        return "companies/index.html.twig";
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
        return array (  156 => 34,  152 => 32,  149 => 31,  136 => 24,  129 => 20,  122 => 16,  118 => 14,  113 => 13,  111 => 12,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CompaniesController!{% endblock %}

{% block body %}
<main class=\"container\">
\t<table class=\"table table-hover\">
\t\t<form method=\"post\" action=\"{{ path('app_companies_add') }}\">
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Ajouter une companie</button>
\t\t</form>
\t\t
\t\t\t{% if companies is not empty %}
\t\t\t{% for companie in companies %}
\t\t\t<tbody>
\t\t\t\t<td>
\t\t\t\t\t{{companie.companieNom}}
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"button\">
\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_companies_delete', {'id': companie.id}) }}\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_companies_edit', {'id': companie.id}) }}\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-secondary\">Modifier</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tbody>
\t\t\t{% endfor %}
\t\t\t{% else %}
\t\t\t<p>Aucune companies trouvé.</p>
\t\t\t{% endif %}
\t</table>
</main>
{% endblock %}", "companies/index.html.twig", "/home/dhuang/Documents/Exo_avion/Exercice_Avion/templates/companies/index.html.twig");
    }
}
