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

/* choix/index.html.twig */
class __TwigTemplate_94df0fd198ca7ba761bc2523139906b49535ffa55dfec0e090b043c7ca21df82 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "choix/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "choix/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "choix/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Le p'tit jardinier";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesure");
        echo "\" method=\"post\">
        <div>
            <input type=\"radio\" id=\"Particulier\" name=\"choix\" value=\"Particulier\" required>
            <label for=\"Particulier\">Particulier</label>
        </div>
        <div>
            <input type=\"radio\" id=\"Entreprise\" name=\"choix\" value=\"Entreprise\" required>
            <label for=\"Entreprise\">Entreprise</label>
        </div>
        <br/>
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"nom\" placeholder=\"Entrez votre nom\" aria-label=\"nom\" aria-describedby=\"basic-addon1\">
        </div>
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"prenom\" placeholder=\"Entrez votre prenom\" aria-label=\"prenom\" aria-describedby=\"basic-addon1\">
        </div>
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"adresse\" placeholder=\"Entrez votre adresse\" aria-label=\"adresse\" aria-describedby=\"basic-addon1\">
        </div>
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"ville\" placeholder=\"Entrez votre ville\" aria-label=\"ville\" aria-describedby=\"basic-addon1\">
        </div>
        <div class=\"input-group mb-3\">
            <input type=\"number\" min=\"10000\" max=\"99999\" class=\"form-control\" name=\"cp\" placeholder=\"Entrez votre code postal\" aria-label=\"cp\" aria-describedby=\"basic-addon1\">
        </div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Suite\">
    </form>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "choix/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 10,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Le p'tit jardinier{% endblock %}
{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <form action=\"{{ path('mesure') }}\" method=\"post\">
        <div>
            <input type=\"radio\" id=\"Particulier\" name=\"choix\" value=\"Particulier\" required>
            <label for=\"Particulier\">Particulier</label>
        </div>
        <div>
            <input type=\"radio\" id=\"Entreprise\" name=\"choix\" value=\"Entreprise\" required>
            <label for=\"Entreprise\">Entreprise</label>
        </div>
        <br/>
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"nom\" placeholder=\"Entrez votre nom\" aria-label=\"nom\" aria-describedby=\"basic-addon1\">
        </div>
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"prenom\" placeholder=\"Entrez votre prenom\" aria-label=\"prenom\" aria-describedby=\"basic-addon1\">
        </div>
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"adresse\" placeholder=\"Entrez votre adresse\" aria-label=\"adresse\" aria-describedby=\"basic-addon1\">
        </div>
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"ville\" placeholder=\"Entrez votre ville\" aria-label=\"ville\" aria-describedby=\"basic-addon1\">
        </div>
        <div class=\"input-group mb-3\">
            <input type=\"number\" min=\"10000\" max=\"99999\" class=\"form-control\" name=\"cp\" placeholder=\"Entrez votre code postal\" aria-label=\"cp\" aria-describedby=\"basic-addon1\">
        </div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Suite\">
    </form>


</div>
{% endblock %}
", "choix/index.html.twig", "C:\\wamp64\\www\\leptitjardinier\\templates\\choix\\index.html.twig");
    }
}
