<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/menu.html.twig */
class __TwigTemplate_dfb2e0c50e2b1a5b24cb6b2fa73938a6ffa59e79c68afa13352003fb199b1dad extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu.html.twig"));

        // line 1
        echo "    <div class=\"sidebar-sticky\">
        <ul class=\"nav flex-column\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auteur_liste", []);
        echo "\">
                    <span data-feather=\"users\"></span>
                    Auteurs <span class=\"sr-only\"></span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_liste", []);
        echo "\">
                    <span data-feather=\"file\"></span>
                    Livre
                </a>
            </li>
            ";
        // line 40
        echo "        </ul>
    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 40,  57 => 10,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <div class=\"sidebar-sticky\">
        <ul class=\"nav flex-column\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"{{ path('auteur_liste', {}) }}\">
                    <span data-feather=\"users\"></span>
                    Auteurs <span class=\"sr-only\"></span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('livre_liste', {}) }}\">
                    <span data-feather=\"file\"></span>
                    Livre
                </a>
            </li>
            {#<li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                    <span data-feather=\"shopping-cart\"></span>
                    Products
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                    <span data-feather=\"users\"></span>
                    Customers
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                    <span data-feather=\"bar-chart-2\"></span>
                    Reports
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                    <span data-feather=\"layers\"></span>
                    Integrations
                </a>
            </li>
            #}
        </ul>
    </div>
", "partials/menu.html.twig", "/home/nasolo/projets/sf4-exemple/projet_test/templates/partials/menu.html.twig");
    }
}
