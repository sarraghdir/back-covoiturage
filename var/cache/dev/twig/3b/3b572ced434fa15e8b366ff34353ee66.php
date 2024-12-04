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

/* payment/payment_method.html.twig */
class __TwigTemplate_ac8672f3d98e21c2751c221730efc051 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/payment_method.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "payment/payment_method.html.twig", 1);
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
        yield "<div class=\"container mt-5\">
    <h1>Choisissez votre méthode de paiement</h1>
    
    <form method=\"POST\" action=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_process");
        yield "\">
        <div class=\"mb-3\">
            <label for=\"paymentMethod\" class=\"form-label\">Méthode de paiement</label>
            <select class=\"form-control\" id=\"paymentMethod\" name=\"paymentMethod\" required>
                <option value=\"creditCard\">Carte bancaire</option>
                <option value=\"paypal\">PayPal</option>
                <option value=\"other\">Autre méthode</option>
            </select>
        </div>
        
        <div class=\"mb-3\">
            <label for=\"paymentDetails\" class=\"form-label\">Détails du paiement</label>
            <input type=\"text\" class=\"form-control\" id=\"paymentDetails\" name=\"paymentDetails\" required>
        </div>

        <input type=\"hidden\" name=\"reservationId\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "html", null, true);
        yield "\">

        <button type=\"submit\" class=\"btn btn-primary\">Payer</button>
    </form>
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
        return "payment/payment_method.html.twig";
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
        return array (  90 => 22,  72 => 7,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container mt-5\">
    <h1>Choisissez votre méthode de paiement</h1>
    
    <form method=\"POST\" action=\"{{ path('payment_process') }}\">
        <div class=\"mb-3\">
            <label for=\"paymentMethod\" class=\"form-label\">Méthode de paiement</label>
            <select class=\"form-control\" id=\"paymentMethod\" name=\"paymentMethod\" required>
                <option value=\"creditCard\">Carte bancaire</option>
                <option value=\"paypal\">PayPal</option>
                <option value=\"other\">Autre méthode</option>
            </select>
        </div>
        
        <div class=\"mb-3\">
            <label for=\"paymentDetails\" class=\"form-label\">Détails du paiement</label>
            <input type=\"text\" class=\"form-control\" id=\"paymentDetails\" name=\"paymentDetails\" required>
        </div>

        <input type=\"hidden\" name=\"reservationId\" value=\"{{ reservation.id }}\">

        <button type=\"submit\" class=\"btn btn-primary\">Payer</button>
    </form>
</div>
{% endblock %}
", "payment/payment_method.html.twig", "/home/siwar/back-covoiturage/templates/payment/payment_method.html.twig");
    }
}
