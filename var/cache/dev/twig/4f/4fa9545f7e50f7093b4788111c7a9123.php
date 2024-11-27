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

/* trajet/search.html.twig */
class __TwigTemplate_52eb7c9740a9c3d19598f07404510d0c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trajet/search.html.twig", 1);
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
        yield "<h1 class=\"text-center\">Recherche de Trajets</h1>

<!-- Formulaire de recherche avec Bootstrap -->
";
        // line 7
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        yield "
    <div class=\"form-group\">
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "villeDepart", [], "any", false, false, false, 9), 'label', ["label_attr" => ["class" => "col-sm-2 control-label"]]);
        yield "
        <div class=\"col-sm-10\">
            ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "villeDepart", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        ";
        // line 13
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "villeDepart", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "errors", [], "any", false, false, false, 13)) > 0)) {
            // line 14
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "villeDepart", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 16
                yield "                    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 16), "html", null, true);
                yield "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "            </div>
        ";
        }
        // line 20
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "villeArrivee", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "col-sm-2 control-label"]]);
        yield "
        <div class=\"col-sm-10\">
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "villeArrivee", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        ";
        // line 27
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "villeArrivee", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27)) > 0)) {
            // line 28
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "villeArrivee", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 30
                yield "                    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 30), "html", null, true);
                yield "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "            </div>
        ";
        }
        // line 34
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "dateDepart", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "col-sm-2 control-label"]]);
        yield "
        <div class=\"col-sm-10\">
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "dateDepart", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        ";
        // line 41
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "dateDepart", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "errors", [], "any", false, false, false, 41)) > 0)) {
            // line 42
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "dateDepart", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 44
                yield "                    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 44), "html", null, true);
                yield "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "            </div>
        ";
        }
        // line 48
        yield "    </div>

    <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </div>
    </div>
";
        // line 55
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        yield "


";
        // line 58
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "vars", [], "any", false, false, false, 58), "submitted", [], "any", false, false, false, 58)) {
            // line 59
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 59, $this->source); })()))) {
                // line 60
                yield "        <ul class=\"list-group\">
            ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trajets"]) || array_key_exists("trajets", $context) ? $context["trajets"] : (function () { throw new RuntimeError('Variable "trajets" does not exist.', 61, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
                    // line 62
                    yield "                <li class=\"list-group-item\">
                    <strong>";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "villeDepart", [], "any", false, false, false, 63), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "villeArrivee", [], "any", false, false, false, 63), "html", null, true);
                    yield "</strong><br>
                    Date de départ : ";
                    // line 64
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "dateDepart", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true);
                    yield "<br>
                    Heure de départ : ";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "heureDepart", [], "any", false, false, false, 65), "H:i"), "html", null, true);
                    yield "<br>
                    Durée estimée : ";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "duree", [], "any", false, false, false, 66), "H:i"), "html", null, true);
                    yield "<br>
                    Places disponibles : ";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "placesDisponibles", [], "any", false, false, false, 67), "html", null, true);
                    yield "<br>
                    <a href=\"";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["trajet"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                    yield "\" class=\"btn btn-link\">Voir les détails</a>
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['trajet'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                yield "        </ul>
    ";
            } else {
                // line 73
                yield "        <div class=\"alert alert-info\">Aucun trajet trouvé pour les critères de recherche.</div>
    ";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "trajet/search.html.twig";
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
        return array (  248 => 73,  244 => 71,  235 => 68,  231 => 67,  227 => 66,  223 => 65,  219 => 64,  213 => 63,  210 => 62,  206 => 61,  203 => 60,  200 => 59,  198 => 58,  192 => 55,  183 => 48,  179 => 46,  170 => 44,  166 => 43,  163 => 42,  161 => 41,  156 => 39,  151 => 37,  146 => 34,  142 => 32,  133 => 30,  129 => 29,  126 => 28,  124 => 27,  119 => 25,  114 => 23,  109 => 20,  105 => 18,  96 => 16,  92 => 15,  89 => 14,  87 => 13,  82 => 11,  77 => 9,  72 => 7,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<h1 class=\"text-center\">Recherche de Trajets</h1>

<!-- Formulaire de recherche avec Bootstrap -->
{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
    <div class=\"form-group\">
        {{ form_label(form.villeDepart, null, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.villeDepart, {'attr': {'class': 'form-control'}}) }}
        </div>
        {% if form.villeDepart.vars.errors|length > 0 %}
            <div class=\"alert alert-danger\">
                {% for error in form.villeDepart.vars.errors %}
                    <p>{{ error.message }}</p>
                {% endfor %}
            </div>
        {% endif %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.villeArrivee, null, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.villeArrivee, {'attr': {'class': 'form-control'}}) }}
        </div>
        {% if form.villeArrivee.vars.errors|length > 0 %}
            <div class=\"alert alert-danger\">
                {% for error in form.villeArrivee.vars.errors %}
                    <p>{{ error.message }}</p>
                {% endfor %}
            </div>
        {% endif %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.dateDepart, null, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.dateDepart, {'attr': {'class': 'form-control'}}) }}
        </div>
        {% if form.dateDepart.vars.errors|length > 0 %}
            <div class=\"alert alert-danger\">
                {% for error in form.dateDepart.vars.errors %}
                    <p>{{ error.message }}</p>
                {% endfor %}
            </div>
        {% endif %}
    </div>

    <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </div>
    </div>
{{ form_end(form) }}


{% if form.vars.submitted %}
    {% if trajets is not empty %}
        <ul class=\"list-group\">
            {% for trajet in trajets %}
                <li class=\"list-group-item\">
                    <strong>{{ trajet.villeDepart }} → {{ trajet.villeArrivee }}</strong><br>
                    Date de départ : {{ trajet.dateDepart|date('d/m/Y') }}<br>
                    Heure de départ : {{ trajet.heureDepart|date('H:i') }}<br>
                    Durée estimée : {{ trajet.duree|date('H:i') }}<br>
                    Places disponibles : {{ trajet.placesDisponibles }}<br>
                    <a href=\"{{ path('trajet_details', {id: trajet.id}) }}\" class=\"btn btn-link\">Voir les détails</a>
                </li>
            {% endfor %}
        </ul>
    {% else %}
        <div class=\"alert alert-info\">Aucun trajet trouvé pour les critères de recherche.</div>
    {% endif %}
{% endif %}
{% endblock %}
", "trajet/search.html.twig", "/home/siwar/back-covoiturage/templates/trajet/search.html.twig");
    }
}
