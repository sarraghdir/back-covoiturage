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

/* profile/trajets.html.twig */
class __TwigTemplate_b53a20db3da55e00cb1d32e15db2c066 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/trajets.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/trajets.html.twig", 1);
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
        yield "    <div class=\"container\">
        <h1>Mes Trajets</h1>

        ";
        // line 7
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 7, $this->source); })()))) {
            // line 8
            yield "            <ul class=\"list-group\">
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
                // line 10
                yield "                    <li class=\"list-group-item\">
                        <strong>";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "villeDepart", [], "any", false, false, false, 11), "html", null, true);
                yield " → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "villeArrivee", [], "any", false, false, false, 11), "html", null, true);
                yield "</strong><br>
                        Date de départ : ";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "dateDepart", [], "any", false, false, false, 12), "d/m/Y"), "html", null, true);
                yield "<br>
                        Heure de départ : ";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "heureDepart", [], "any", false, false, false, 13), "H:i"), "html", null, true);
                yield "<br>
                        Durée estimée : ";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "duree", [], "any", false, false, false, 14), "H:i"), "html", null, true);
                yield "<br>
                        <a href=\"";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 15)]), "html", null, true);
                yield "\" class=\"btn btn-link\">Voir les détails</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['trajet'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "            </ul>
        ";
        } else {
            // line 20
            yield "            <div class=\"alert alert-info\">Aucun trajet trouvé.</div>
        ";
        }
        // line 22
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/trajets.html.twig";
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
        return array (  119 => 22,  115 => 20,  111 => 18,  102 => 15,  98 => 14,  94 => 13,  90 => 12,  84 => 11,  81 => 10,  77 => 9,  74 => 8,  72 => 7,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <h1>Mes Trajets</h1>

        {% if trajets is not empty %}
            <ul class=\"list-group\">
                {% for trajet in trajets %}
                    <li class=\"list-group-item\">
                        <strong>{{ trajet.villeDepart }} → {{ trajet.villeArrivee }}</strong><br>
                        Date de départ : {{ trajet.dateDepart|date('d/m/Y') }}<br>
                        Heure de départ : {{ trajet.heureDepart|date('H:i') }}<br>
                        Durée estimée : {{ trajet.duree|date('H:i') }}<br>
                        <a href=\"{{ path('trajet_details', {id: trajet.id}) }}\" class=\"btn btn-link\">Voir les détails</a>
                    </li>
                {% endfor %}
            </ul>
        {% else %}
            <div class=\"alert alert-info\">Aucun trajet trouvé.</div>
        {% endif %}
    </div>
{% endblock %}
", "profile/trajets.html.twig", "/home/siwar/back-covoiturage/templates/profile/trajets.html.twig");
    }
}
