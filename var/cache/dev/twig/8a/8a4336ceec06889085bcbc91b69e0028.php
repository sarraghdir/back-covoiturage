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

/* registration/register.html.twig */
class __TwigTemplate_7cbb61e76643b02e8fbbfa36b1e6ccb4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "Register";
        
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
        yield "<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h2 class=\"h3 mb-4 text-center\">Create a New Account</h2>

                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 14
            yield "                        <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), 'errors');
        yield "

                    <form method=\"post\">
                        <div class=\"mb-3\">
                            <label for=\"inputName\" class=\"form-label\">Full Name</label>
                            <input type=\"text\" name=\"name\" id=\"inputName\" class=\"form-control\" required>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"inputPhone\" class=\"form-label\">Email</label>
                            <input type=\"tel\" name=\"phone\" id=\"inputPhone\" class=\"form-control\" required>
                        </div>

                        

                      
                        <div class=\"mb-3\">
                            <label for=\"inputPhone\" class=\"form-label\">password</label>
                            <input type=\"tel\" name=\"phone\" id=\"inputPasswordggggggggggggg\" class=\"form-control\" required>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"inputConfirmPassword\" class=\"form-label\">Confirm Password</label>
                            <input type=\"password\" name=\"confirmPassword\" id=\"inputConfirmPassword\" class=\"form-control\" required>
                        </div>

                        <div class=\"mb-3 form-check\">
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "agreeTerms", [], "any", false, false, false, 44), 'row');
        yield "
                        </div>

                        <button type=\"submit\" class=\"btn btn-primary btn-lg w-100\">Register</button>
                    </form>

                    <p class=\"mt-3 text-center\">Already have an account? <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Click here to login</a></p>
                </div>
            </div>
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
        return "registration/register.html.twig";
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
        return array (  149 => 50,  140 => 44,  110 => 17,  107 => 16,  98 => 14,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h2 class=\"h3 mb-4 text-center\">Create a New Account</h2>

                    {% for flash_error in app.flashes('verify_email_error') %}
                        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
                    {% endfor %}

                    {{ form_errors(registrationForm) }}

                    <form method=\"post\">
                        <div class=\"mb-3\">
                            <label for=\"inputName\" class=\"form-label\">Full Name</label>
                            <input type=\"text\" name=\"name\" id=\"inputName\" class=\"form-control\" required>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"inputPhone\" class=\"form-label\">Email</label>
                            <input type=\"tel\" name=\"phone\" id=\"inputPhone\" class=\"form-control\" required>
                        </div>

                        

                      
                        <div class=\"mb-3\">
                            <label for=\"inputPhone\" class=\"form-label\">password</label>
                            <input type=\"tel\" name=\"phone\" id=\"inputPasswordggggggggggggg\" class=\"form-control\" required>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"inputConfirmPassword\" class=\"form-label\">Confirm Password</label>
                            <input type=\"password\" name=\"confirmPassword\" id=\"inputConfirmPassword\" class=\"form-control\" required>
                        </div>

                        <div class=\"mb-3 form-check\">
                            {{ form_row(registrationForm.agreeTerms) }}
                        </div>

                        <button type=\"submit\" class=\"btn btn-primary btn-lg w-100\">Register</button>
                    </form>

                    <p class=\"mt-3 text-center\">Already have an account? <a href=\"{{ path('app_login') }}\">Click here to login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "registration/register.html.twig", "/home/siwar/back-covoiturage/templates/registration/register.html.twig");
    }
}
