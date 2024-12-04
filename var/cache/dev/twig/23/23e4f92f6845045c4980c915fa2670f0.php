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

/* profile/profile.html.twig */
class __TwigTemplate_2c64d14747509233c6e7c8fa7b4182df extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/profile.html.twig", 1);
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
        yield "<div class=\"container-fluid\">
    <div class=\"row\">
        <!-- Sidebar -->
        <nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\">
            <div class=\"position-sticky\">
                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passenger_profile");
        yield "\">
                            <i class=\"bi bi-person\"></i> Informations personnelles
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passenger_profile_trajets");
        yield "\">
                            <i class=\"bi bi-car-front\"></i> Historique des trajets
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passenger_profile_notifications");
        yield "\">
                            <i class=\"bi bi-bell\"></i> Notifications
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
            <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                <h1 class=\"h2\">Mon Profil</h1>
            </div>

            <!-- Informations personnelles -->
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Informations personnelles</h4>
                    <p><strong>Nom :</strong> ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), "html", null, true);
        yield "</p> 
                    ";
        // line 41
        yield "                </div>
            </div>

            <!-- Historique des trajets -->
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Historique des trajets</h4>
                    <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passenger_profile_trajets");
        yield "\" class=\"btn btn-secondary\">Voir mes trajets</a>
                </div>
            </div>

            <!-- Préférences de notifications -->
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Préférences de notifications</h4>
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\">
                            <strong>Rappel de réservation :</strong> 
                            ";
        // line 59
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "getNotificationPreferences", [], "method", false, false, false, 59)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "getNotificationPreferences", [], "method", false, false, false, 59), "isReceiveBookingReminders", [], "method", false, false, false, 59)) ? ("Activé") : ("Désactivé"))) : ("Non défini"));
        yield "
                        </li>
                        <li class=\"list-group-item\">
                            <strong>Alertes nouveaux trajets :</strong> 
                            ";
        // line 63
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "getNotificationPreferences", [], "method", false, false, false, 63)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "getNotificationPreferences", [], "method", false, false, false, 63), "isReceiveNewTripAlerts", [], "method", false, false, false, 63)) ? ("Activé") : ("Désactivé"))) : ("Non défini"));
        yield "
                        </li>
                    </ul>
                    <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passenger_profile_notifications");
        yield "\" class=\"btn btn-primary mt-3\">Modifier mes préférences</a>
                </div>
            </div>

            <!-- Barre de recherche pour les trajets -->
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Rechercher un trajet</h4>
                    <form action=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_search");
        yield "\" method=\"get\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un trajet\" name=\"search\" aria-label=\"Search\">
                            <button class=\"btn btn-primary\" type=\"submit\">Rechercher</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
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
        return "profile/profile.html.twig";
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
        return array (  164 => 74,  153 => 66,  147 => 63,  140 => 59,  126 => 48,  117 => 41,  113 => 39,  92 => 21,  84 => 16,  76 => 11,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <!-- Sidebar -->
        <nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\">
            <div class=\"position-sticky\">
                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"{{ path('passenger_profile') }}\">
                            <i class=\"bi bi-person\"></i> Informations personnelles
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('passenger_profile_trajets') }}\">
                            <i class=\"bi bi-car-front\"></i> Historique des trajets
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('passenger_profile_notifications') }}\">
                            <i class=\"bi bi-bell\"></i> Notifications
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
            <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                <h1 class=\"h2\">Mon Profil</h1>
            </div>

            <!-- Informations personnelles -->
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Informations personnelles</h4>
                    <p><strong>Nom :</strong> {{ user.nom }}</p> 
                    {# Vous pouvez enlever l'email ici comme demandé #}
                </div>
            </div>

            <!-- Historique des trajets -->
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Historique des trajets</h4>
                    <a href=\"{{ path('passenger_profile_trajets') }}\" class=\"btn btn-secondary\">Voir mes trajets</a>
                </div>
            </div>

            <!-- Préférences de notifications -->
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Préférences de notifications</h4>
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\">
                            <strong>Rappel de réservation :</strong> 
                            {{ user.getNotificationPreferences() ? user.getNotificationPreferences().isReceiveBookingReminders() ? 'Activé' : 'Désactivé' : 'Non défini' }}
                        </li>
                        <li class=\"list-group-item\">
                            <strong>Alertes nouveaux trajets :</strong> 
                            {{ user.getNotificationPreferences() ? user.getNotificationPreferences().isReceiveNewTripAlerts() ? 'Activé' : 'Désactivé' : 'Non défini' }}
                        </li>
                    </ul>
                    <a href=\"{{ path('passenger_profile_notifications') }}\" class=\"btn btn-primary mt-3\">Modifier mes préférences</a>
                </div>
            </div>

            <!-- Barre de recherche pour les trajets -->
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Rechercher un trajet</h4>
                    <form action=\"{{ path('trajet_search') }}\" method=\"get\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un trajet\" name=\"search\" aria-label=\"Search\">
                            <button class=\"btn btn-primary\" type=\"submit\">Rechercher</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
{% endblock %}
", "profile/profile.html.twig", "/home/siwar/back-covoiturage/templates/profile/profile.html.twig");
    }
}
