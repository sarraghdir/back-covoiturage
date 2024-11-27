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

/* annonce/home.html.twig */
class __TwigTemplate_d43f59619a39aba0dcca3fe2623ce630 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/home.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Gestion des Annonces</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\">
    <style>
        .card {
            margin: 20px;
        }

        .navbar {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\">Gestion Annonces</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_home");
        yield "\">Annonces</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">ABC</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">HFMBBC</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container\">
        <h1 class=\"text-center\">Gestion des Annonces</h1>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Ajouter une annonce</h5>
                        <p class=\"card-text\">Créez une nouvelle annonce pour vos utilisateurs.</p>
                        <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_add");
        yield "\" class=\"btn btn-primary\">Ajouter</a>
                    </div>
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Afficher les annonces</h5>
                        <p class=\"card-text\">Consultez toutes les annonces disponibles.</p>
                        <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_list");
        yield "\" class=\"btn btn-success\">Voir les annonces</a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "annonce/home.html.twig";
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
        return array (  111 => 59,  98 => 49,  74 => 28,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Gestion des Annonces</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\">
    <style>
        .card {
            margin: 20px;
        }

        .navbar {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\">Gestion Annonces</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_annonce_home') }}\">Annonces</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">ABC</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">HFMBBC</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container\">
        <h1 class=\"text-center\">Gestion des Annonces</h1>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Ajouter une annonce</h5>
                        <p class=\"card-text\">Créez une nouvelle annonce pour vos utilisateurs.</p>
                        <a href=\"{{ path('app_annonce_add') }}\" class=\"btn btn-primary\">Ajouter</a>
                    </div>
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Afficher les annonces</h5>
                        <p class=\"card-text\">Consultez toutes les annonces disponibles.</p>
                        <a href=\"{{ path('app_annonce_list') }}\" class=\"btn btn-success\">Voir les annonces</a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
</body>
</html>
", "annonce/home.html.twig", "/home/siwar/back-covoiturage/templates/annonce/home.html.twig");
    }
}
