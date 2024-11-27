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

/* reservation/_form.html.twig */
class __TwigTemplate_acd9b7654a8d1487e9f9c43cf8276407 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "

    <div class=\"form-group\">
        ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 4), 'label');
        yield "
        ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <div class=\"form-group mt-3\">
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "dateReservation", [], "any", false, false, false, 9), 'label');
        yield "
        ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "dateReservation", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <div class=\"form-group mt-3\">
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "etat", [], "any", false, false, false, 14), 'label');
        yield "
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "etat", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <!-- Champ pour choisir le trajet, placé en dernier -->
    <div class=\"form-group mt-3\">
        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "trajet", [], "any", false, false, false, 20), 'label');
        yield "
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "trajet", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <!-- Suppression de tout autre lien supplémentaire \"Retour à la liste\" -->

    <!-- Les boutons \"Enregistrer\" et \"Retour\" alignés sur la même ligne -->
    <div class=\"d-flex justify-content-between mt-4\">
        <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
        <button class=\"btn btn-primary\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 29, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
    </div>

";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reservation/_form.html.twig";
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
        return array (  109 => 32,  103 => 29,  99 => 28,  89 => 21,  85 => 20,  77 => 15,  73 => 14,  66 => 10,  62 => 9,  55 => 5,  51 => 4,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form) }}

    <div class=\"form-group\">
        {{ form_label(form.nombrePlaces) }}
        {{ form_widget(form.nombrePlaces, {'attr': {'class': 'form-control'}}) }}
    </div>

    <div class=\"form-group mt-3\">
        {{ form_label(form.dateReservation) }}
        {{ form_widget(form.dateReservation, {'attr': {'class': 'form-control'}}) }}
    </div>

    <div class=\"form-group mt-3\">
        {{ form_label(form.etat) }}
        {{ form_widget(form.etat, {'attr': {'class': 'form-control'}}) }}
    </div>

    <!-- Champ pour choisir le trajet, placé en dernier -->
    <div class=\"form-group mt-3\">
        {{ form_label(form.trajet) }}
        {{ form_widget(form.trajet, {'attr': {'class': 'form-control'}}) }}
    </div>

    <!-- Suppression de tout autre lien supplémentaire \"Retour à la liste\" -->

    <!-- Les boutons \"Enregistrer\" et \"Retour\" alignés sur la même ligne -->
    <div class=\"d-flex justify-content-between mt-4\">
        <a href=\"{{ path('app_reservation_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
        <button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>
    </div>

{{ form_end(form) }}
", "reservation/_form.html.twig", "/home/siwar/back-covoiturage/templates/reservation/_form.html.twig");
    }
}
