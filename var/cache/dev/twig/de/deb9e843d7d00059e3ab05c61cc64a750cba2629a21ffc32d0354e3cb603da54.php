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

/* article/list.html.twig */
class __TwigTemplate_3f5bf2aac2a1377404e66089d6cc42e1a8399cbee8169a2600c060df45b7a1d9 extends Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/list.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "article/list.html.twig", 1);
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
        echo "
      <div class=\"container\">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <center>
              <h1> Liste des Articles</h1>

              <table class=\"table\">
                  <thead>
                  <tr>
                      <th scope=\"col\">Id</th>
                      <th scope=\"col\">Type </th>

                  </tr>
                  </thead>
                  <tbody>
                  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 24
            echo "                      <tr>
                          <td scope=\"row\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                          <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "type", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>


                          <td>  <a class=\"btn btn-sm btn-success\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierarticle", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">Modifier</a></td>

                          <td>  <a class=\"btn btn-sm btn-danger\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supp", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">Supprimer</a></td>





                      </tr>

                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                  </tbody>
              </table>
              <form action=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addarticle");
        echo "\">
                  <button class=\"btn btn-round btn-facebook\">Ajouter</button>
              </form>



          </center>
      </div>
      ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 51
            echo "      <div class=\"alert alert-success\">
          ";
            // line 52
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 55,  149 => 52,  146 => 51,  142 => 50,  131 => 42,  127 => 40,  112 => 31,  107 => 29,  101 => 26,  97 => 25,  94 => 24,  90 => 23,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}
  {% block body %}

      <div class=\"container\">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <center>
              <h1> Liste des Articles</h1>

              <table class=\"table\">
                  <thead>
                  <tr>
                      <th scope=\"col\">Id</th>
                      <th scope=\"col\">Type </th>

                  </tr>
                  </thead>
                  <tbody>
                  {%  for a in  b %}
                      <tr>
                          <td scope=\"row\">{{a.id}}</td>
                          <td>{{a.type}}</td>


                          <td>  <a class=\"btn btn-sm btn-success\" href=\"{{ path('modifierarticle', {id:a.id})}}\">Modifier</a></td>

                          <td>  <a class=\"btn btn-sm btn-danger\" href=\"{{ path('supp', {id:a.id}) }}\">Supprimer</a></td>





                      </tr>

                  {%  endfor %}
                  </tbody>
              </table>
              <form action=\"{{ path('addarticle') }}\">
                  <button class=\"btn btn-round btn-facebook\">Ajouter</button>
              </form>



          </center>
      </div>
      {% for message in app.flashes('info') %}
      <div class=\"alert alert-success\">
          {{message}}
      </div>
      {% endfor %}


  {% endblock %}", "article/list.html.twig", "C:\\xampp1\\htdocs\\reclamtion\\templates\\article\\list.html.twig");
    }
}
