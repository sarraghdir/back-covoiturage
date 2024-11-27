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

/* annonce/index.html.twig */
class __TwigTemplate_f4a477fac610794440c87c96bd324171 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "annonce/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste des Annonces";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<h1>Liste des Annonces</h1>

<table class=\"table\">
    <thead>
        <tr>
            <th>Départ</th>
            <th>Destination</th>
            <th>Date et Heure</th>
            <th>Prix</th>
            <th>Places disponibles</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 21
            yield "            <tr>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "departure", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "destination", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "departureTime", [], "any", false, false, false, 24), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "pricePerSeat", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "seatsAvailable", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                    <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\">Supprimer</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            yield "            <tr>
                <td colspan=\"6\">Aucune annonce trouvée</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['annonce'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "    </tbody>
</table>

<!-- Ajouter le bouton revenir à l'accueil -->
<a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_home");
        yield "\" class=\"btn btn-primary\">Revenir à l'accueil</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "annonce/index.html.twig";
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
        return array (  158 => 41,  152 => 37,  143 => 33,  134 => 29,  130 => 28,  125 => 26,  121 => 25,  117 => 24,  113 => 23,  109 => 22,  106 => 21,  101 => 20,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Annonces{% endblock %}

{% block body %}
<h1>Liste des Annonces</h1>

<table class=\"table\">
    <thead>
        <tr>
            <th>Départ</th>
            <th>Destination</th>
            <th>Date et Heure</th>
            <th>Prix</th>
            <th>Places disponibles</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {% for annonce in annonces %}
            <tr>
                <td>{{ annonce.departure }}</td>
                <td>{{ annonce.destination }}</td>
                <td>{{ annonce.departureTime|date('d/m/Y H:i') }}</td>
                <td>{{ annonce.pricePerSeat }}</td>
                <td>{{ annonce.seatsAvailable }}</td>
                <td>
                    <a href=\"{{ path('app_annonce_edit', {'id': annonce.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                    <a href=\"{{ path('app_annonce_delete', {'id': annonce.id}) }}\" class=\"btn btn-danger btn-sm\">Supprimer</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">Aucune annonce trouvée</td>
            </tr>
        {% endfor %}
    </tbody>
</table>

<!-- Ajouter le bouton revenir à l'accueil -->
<a href=\"{{ path('app_annonce_home') }}\" class=\"btn btn-primary\">Revenir à l'accueil</a>
{% endblock %}
", "annonce/index.html.twig", "/home/siwar/back-covoiturage/templates/annonce/index.html.twig");
    }
}
