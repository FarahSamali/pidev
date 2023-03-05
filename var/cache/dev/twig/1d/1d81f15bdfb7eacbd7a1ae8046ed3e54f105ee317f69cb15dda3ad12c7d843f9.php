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

/* reclamation/listAdmin.html.twig */
class __TwigTemplate_205f9da21561f209228f75f84c2d439270de10e416866e3eccf726d2fc0568da extends Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/listAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/listAdmin.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "reclamation/listAdmin.html.twig", 2);
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


    <br>
    <br>
    <br>
    <br>
    <br>

    <center>    <h1> Liste des Reclamations</h1> </center>


    <div style=\"display: flex;align-items:center;justify-content: center;\">

        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card my-4\">
                    <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                        <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                            <h1 class=\"text-white text-capitalize ps-3\">Table Reclamation</h1>
                        </div>
                    </div>
                    <div class=\"card-body px-0 pb-2\">
                        <div class=\"table-responsive p-0\">
                            <table class=\"table align-items-center mb-0\">
                                <thead>
                                <tr>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Id</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">nom </th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">description</th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">date</th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">mail</th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">reponse</th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Action</th>

                                    <th class=\"text-secondary opacity-7\"></th>
                                </tr>
                                </thead>
                                <tbody>

                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 45
            echo "                                    <td>
                                        <div class=\"d-flex px-2 py-1\">

                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"mb-0 text-sm\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "</h6>


                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 56), "html", null, true);
            echo "</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>
                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "description", [], "any", false, false, false, 60), "html", null, true);
            echo "</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>
                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "date", [], "any", false, false, false, 64), "d-m-Y"), "html", null, true);
            echo "</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>

                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "mail", [], "any", false, false, false, 69), "html", null, true);
            echo "</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>

                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "reponse", [], "any", false, false, false, 74), "html", null, true);
            echo "</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>

                                    <td class=\"align-middle text-center text-sm\">
                                        <span class=\"badge badge-sm bg-gradient-success\"> <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprec", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\">Retirer</a></span>
                                    </td>


                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                                <span class=\"badge badge-sm bg-gradient-faded-success-vertical\">  ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 86, $this->source); })()));
        echo " </span>

                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>
    </div>
    </div>
















";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/listAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 86,  168 => 79,  160 => 74,  152 => 69,  144 => 64,  137 => 60,  130 => 56,  120 => 49,  114 => 45,  110 => 44,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'back.html.twig' %}
{% block body %}



    <br>
    <br>
    <br>
    <br>
    <br>

    <center>    <h1> Liste des Reclamations</h1> </center>


    <div style=\"display: flex;align-items:center;justify-content: center;\">

        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card my-4\">
                    <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                        <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                            <h1 class=\"text-white text-capitalize ps-3\">Table Reclamation</h1>
                        </div>
                    </div>
                    <div class=\"card-body px-0 pb-2\">
                        <div class=\"table-responsive p-0\">
                            <table class=\"table align-items-center mb-0\">
                                <thead>
                                <tr>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Id</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">nom </th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">description</th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">date</th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">mail</th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">reponse</th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Action</th>

                                    <th class=\"text-secondary opacity-7\"></th>
                                </tr>
                                </thead>
                                <tbody>

                                {%  for a in  b %}
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">

                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"mb-0 text-sm\">{{a.id}}</h6>


                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">{{ a.nom }}</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>
                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">{{ a.description }}</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>
                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">{{ a.date|date('d-m-Y') }}</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>

                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">{{ a.mail }}</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>

                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">{{ a.reponse }}</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>

                                    <td class=\"align-middle text-center text-sm\">
                                        <span class=\"badge badge-sm bg-gradient-success\"> <a href=\"{{ path('supprec', {id:a.id}) }}\">Retirer</a></span>
                                    </td>


                                    </tr>

                                {% endfor %}
                                <span class=\"badge badge-sm bg-gradient-faded-success-vertical\">  {{ knp_pagination_render(b) }} </span>

                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>
    </div>
    </div>
















{% endblock %}

", "reclamation/listAdmin.html.twig", "C:\\xampp1\\htdocs\\reclamtion\\templates\\reclamation\\listAdmin.html.twig");
    }
}
