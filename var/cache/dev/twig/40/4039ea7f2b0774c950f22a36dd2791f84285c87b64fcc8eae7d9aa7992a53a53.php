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

/* Livre/form.html.twig */
class __TwigTemplate_407c9fb1325b89ab068f606dadd8290c5d373e7ab39d7db2f5f10f2643bc461f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Livre/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Livre/form.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "Livre/form.html.twig", 1);
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
        echo "    <h2>Ajout livre</h2>
    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 4, $this->source); })()), 'form_start');
        echo "


    <div class=\"card-body\">
        <div class=\"form-group row\">
            <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre"]]);
        echo "
            </div>
        </div>
        <div class=\"form-group row\">
            <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 15, $this->source); })()), "auteur", [], "any", false, false, false, 15), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 17, $this->source); })()), "auteur", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Auteur"]]);
        echo "
            </div>
        </div>
        <div class=\"form-group row\">
            <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 21, $this->source); })()), "langues", [], "any", false, false, false, 21), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 23, $this->source); })()), "langues", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ""]]);
        echo "
            </div>
        </div>
        <div class=\"form-group row\">
            <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 27, $this->source); })()), "date_edition", [], "any", false, false, false, 27), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 29, $this->source); })()), "date_edition", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Auteur"]]);
        echo "
            </div>
        </div>

    </div>
    <!-- /.card-body -->
    <div class=\"card-footer\">
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 36, $this->source); })()), "save", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "btn btn-info"]]);
        echo "

    </div>
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Livre/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 39,  130 => 36,  120 => 29,  115 => 27,  108 => 23,  103 => 21,  96 => 17,  91 => 15,  84 => 11,  79 => 9,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block body %}
    <h2>Ajout livre</h2>
    {{ form_start(formulaire ) }}


    <div class=\"card-body\">
        <div class=\"form-group row\">
            <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">{{ form_label(formulaire.titre) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(formulaire.titre, {'attr': {'class': 'form-control', 'placeholder' : 'Titre'}}) }}
            </div>
        </div>
        <div class=\"form-group row\">
            <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">{{ form_label(formulaire.auteur) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(formulaire.auteur, {'attr': {'class': 'form-control', 'placeholder' : 'Auteur'}}) }}
            </div>
        </div>
        <div class=\"form-group row\">
            <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">{{ form_label(formulaire.langues) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(formulaire.langues, {'attr': {'class': 'form-control', 'placeholder' : ''}}) }}
            </div>
        </div>
        <div class=\"form-group row\">
            <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">{{ form_label(formulaire.date_edition) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(formulaire.date_edition, {'attr': {'class': 'form-control', 'placeholder' : 'Auteur'}}) }}
            </div>
        </div>

    </div>
    <!-- /.card-body -->
    <div class=\"card-footer\">
        {{ form_widget(formulaire.save, {'attr': {'class': 'btn btn-info'}}) }}

    </div>
    {{ form_end(formulaire) }}
{% endblock %}

", "Livre/form.html.twig", "/home/nasolo/projets/sf4-exemple/projet_test/templates/Livre/form.html.twig");
    }
}
