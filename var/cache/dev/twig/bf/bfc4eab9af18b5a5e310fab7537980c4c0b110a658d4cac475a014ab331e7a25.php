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

/* Auteur/liste.html.twig */
class __TwigTemplate_13dc4316beb345b7b7749c0f10b121a51b91cd0c6674899a47044d1db1e7962b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Auteur/liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Auteur/liste.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "Auteur/liste.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t\t";
        // line 16
        echo "\t\t<h2>Liste des auteurs </h2>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-striped table-sm\">
\t\t\t\t<thead>
\t\t\t\t<tr><th colspan=\"4\" style=\"text-align: right\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auteur_ajout_form", []);
        echo "\">Ajouter</a></th></tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>#</th>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>

                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["auteur"]) {
            // line 31
            echo "
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo " </td>
\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo " </td>
\t\t\t\t\t\t<td> ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "prenom", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td> <a href =\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auteur_editer", ["id" => twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" > Editer </a> &nbsp
\t\t\t\t\t\t\t<a href =\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auteur_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" > Supprimer </a></td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Auteur/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 40,  113 => 37,  109 => 36,  105 => 35,  101 => 34,  97 => 33,  93 => 31,  89 => 30,  76 => 20,  70 => 16,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block body %}
\t\t{#<div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
\t\t\t<h1 class=\"h2\">Dashboard</h1>
\t\t\t<div class=\"btn-toolbar mb-2 mb-md-0\">
\t\t\t\t<div class=\"btn-group mr-2\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Share</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Export</button>
\t\t\t\t</div>
\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\">
\t\t\t\t\t<span data-feather=\"calendar\"></span>
\t\t\t\t\tThis week
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>#}
\t\t<h2>Liste des auteurs </h2>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-striped table-sm\">
\t\t\t\t<thead>
\t\t\t\t<tr><th colspan=\"4\" style=\"text-align: right\"><a href=\"{{ path('auteur_ajout_form', {}) }}\">Ajouter</a></th></tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>#</th>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>

                {% for auteur in liste %}

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ auteur.id }} </td>
\t\t\t\t\t\t<td>{{ auteur.nom }} </td>
\t\t\t\t\t\t<td> {{ auteur.prenom }}</td>
\t\t\t\t\t\t<td> <a href =\"{{ path('auteur_editer', {'id': auteur.id }) }}\" > Editer </a> &nbsp
\t\t\t\t\t\t\t<a href =\"{{ path('auteur_supprimer', {'id': auteur.id }) }}\" > Supprimer </a></td>
\t\t\t\t\t</tr>
                {% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>

{% endblock %}
", "Auteur/liste.html.twig", "/home/nasolo/projets/sf4-exemple/projet_test/templates/Auteur/liste.html.twig");
    }
}
