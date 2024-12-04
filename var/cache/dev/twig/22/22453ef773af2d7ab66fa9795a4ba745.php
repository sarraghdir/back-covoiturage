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

/* profile/navbar.html.twig */
class __TwigTemplate_979a5704b29f394697bedcc87c66ff77 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/navbar.html.twig"));

        // line 1
        yield "

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Profil du Passager</a>
    <div class=\"collapse navbar-collapse\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passenger_profile");
        yield "\">Informations personnelles</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passenger_profile_trajets");
        yield "\">Historique des trajets</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passenger_profile_notifications");
        yield "\">Notifications</a>
            </li>
        </ul>
    </div>
</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/navbar.html.twig";
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
        return array (  66 => 14,  60 => 11,  54 => 8,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Profil du Passager</a>
    <div class=\"collapse navbar-collapse\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('passenger_profile') }}\">Informations personnelles</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('passenger_profile_trajets') }}\">Historique des trajets</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('passenger_profile_notifications') }}\">Notifications</a>
            </li>
        </ul>
    </div>
</nav>
", "profile/navbar.html.twig", "/home/siwar/back-covoiturage/templates/profile/navbar.html.twig");
    }
}
