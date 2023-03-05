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

/* reclamation/list.html.twig */
class __TwigTemplate_75a31fd8445932c2ad6440fccdd0fde94dd5872b81f0ddb98a53308d38ac9b71 extends Template
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
        // line 2
        return "frontrec.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/list.html.twig"));

        $this->parent = $this->loadTemplate("frontrec.html.twig", "reclamation/list.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "
<div class=\"container\">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
        <h1> Liste des Reclamations</h1>

        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">nom </th>
                <th scope=\"col\">description </th>
                <th scope=\"col\">date </th>
                <th scope=\"col\">mail </th>
                <th scope=\"col\">reponse </th>
                <th scope=\"col\"> </th>
                <th scope=\"col\"> </th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 31
            echo "
                <tr>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "description", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "date", [], "any", false, false, false, 36), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "mail", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "reponse", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>

                    <td>  <a class=\"btn btn-sm btn-success\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierrec", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Modifier</a></td>

                    <td>  <a class=\"btn btn-sm btn-danger\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprec", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">Supprimer</a></td>





                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            <span class=\"badge badge-sm bg-gradient-faded-success-vertical\">  ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 51, $this->source); })()));
        echo " </span>

            </tbody>
        </table>

        <form action=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addrecl");
        echo "\">
            <button class=\"btn btn-round btn-facebook\">Ajouter</button>
        </form>


    </center>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 56,  149 => 51,  134 => 42,  129 => 40,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  100 => 31,  96 => 30,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'frontrec.html.twig' %}
{% block body %}

<div class=\"container\">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
        <h1> Liste des Reclamations</h1>

        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">nom </th>
                <th scope=\"col\">description </th>
                <th scope=\"col\">date </th>
                <th scope=\"col\">mail </th>
                <th scope=\"col\">reponse </th>
                <th scope=\"col\"> </th>
                <th scope=\"col\"> </th>

            </tr>
            </thead>
            <tbody>
            {%  for a in  b %}

                <tr>
                    <td>{{a.id}}</td>
                    <td>{{ a.nom }}</td>
                    <td>{{ a.description }}</td>
                    <td>{{ a.date|date('d-m-Y') }}</td>
                    <td>{{ a.mail }}</td>
                    <td>{{ a.reponse }}</td>

                    <td>  <a class=\"btn btn-sm btn-success\" href=\"{{ path('modifierrec', {id:a.id})}}\">Modifier</a></td>

                    <td>  <a class=\"btn btn-sm btn-danger\" href=\"{{ path('supprec', {id:a.id}) }}\">Supprimer</a></td>





                </tr>

            {%  endfor %}
            <span class=\"badge badge-sm bg-gradient-faded-success-vertical\">  {{ knp_pagination_render(b) }} </span>

            </tbody>
        </table>

        <form action=\"{{ path('addrecl') }}\">
            <button class=\"btn btn-round btn-facebook\">Ajouter</button>
        </form>


    </center>

</div>

{% endblock %}

", "reclamation/list.html.twig", "C:\\xampp1\\htdocs\\reclamtion\\templates\\reclamation\\list.html.twig");
    }
}
