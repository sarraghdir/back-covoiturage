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

/* trajet/details.html.twig */
class __TwigTemplate_8c2d38b4fbb1deaed3ec7a24aadc8b79 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trajet/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"container mt-5\">
        <h1>Détails du Trajet</h1>

        <div class=\"card shadow-sm mt-4\">
            <div class=\"card-body\">
                <p><strong>Départ :</strong> ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 9, $this->source); })()), "villeDepart", [], "any", false, false, false, 9), "html", null, true);
        yield "</p>
                <p><strong>Arrivée :</strong> ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 10, $this->source); })()), "villeArrivee", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
                <p><strong>Date :</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 11, $this->source); })()), "dateDepart", [], "any", false, false, false, 11), "d/m/Y"), "html", null, true);
        yield "</p>
                <p><strong>Heure de départ :</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 12, $this->source); })()), "heureDepart", [], "any", false, false, false, 12), "H:i"), "html", null, true);
        yield "</p>
                <p><strong>Durée estimée :</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 13, $this->source); })()), "duree", [], "any", false, false, false, 13), "H:i"), "html", null, true);
        yield "</p>
                <p><strong>Places disponibles :</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 14, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>

                <!-- Bouton Réserver avec style -->
                <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new");
        yield "\" class=\"btn btn-success btn-lg mt-3\">Réserver ce trajet</a>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "trajet/details.html.twig";
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
        return array (  100 => 17,  94 => 14,  90 => 13,  86 => 12,  82 => 11,  78 => 10,  74 => 9,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container mt-5\">
        <h1>Détails du Trajet</h1>

        <div class=\"card shadow-sm mt-4\">
            <div class=\"card-body\">
                <p><strong>Départ :</strong> {{ trajet.villeDepart }}</p>
                <p><strong>Arrivée :</strong> {{ trajet.villeArrivee }}</p>
                <p><strong>Date :</strong> {{ trajet.dateDepart|date('d/m/Y') }}</p>
                <p><strong>Heure de départ :</strong> {{ trajet.heureDepart|date('H:i') }}</p>
                <p><strong>Durée estimée :</strong> {{ trajet.duree|date('H:i') }}</p>
                <p><strong>Places disponibles :</strong> {{ trajet.placesDisponibles }}</p>

                <!-- Bouton Réserver avec style -->
                <a href=\"{{ path('app_reservation_new') }}\" class=\"btn btn-success btn-lg mt-3\">Réserver ce trajet</a>
            </div>
        </div>
    </div>
{% endblock %}
", "trajet/details.html.twig", "/home/siwar/back-covoiturage/templates/trajet/details.html.twig");
    }
}
