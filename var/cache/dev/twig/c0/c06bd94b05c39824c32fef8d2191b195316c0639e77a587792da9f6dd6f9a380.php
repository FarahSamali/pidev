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

/* back.html.twig */
class __TwigTemplate_0a3e965cf0781f55501700d0b59a5e8e240da8f4be2474cc19b9f091d6add2d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'HeaderMobile' => [$this, 'block_HeaderMobile'],
            'SideBar' => [$this, 'block_SideBar'],
            'HeaderDesktop' => [$this, 'block_HeaderDesktop'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    ";
        // line 8
        echo "

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "
    ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "</head>
<body>
";
        // line 70
        $this->displayBlock('HeaderMobile', $context, $blocks);
        // line 188
        $this->displayBlock('SideBar', $context, $blocks);
        // line 283
        $this->displayBlock('HeaderDesktop', $context, $blocks);
        // line 458
        $this->displayBlock('body', $context, $blocks);
        // line 1002
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <!-- Required meta tags-->
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"au theme template\">
        <meta name=\"author\" content=\"Hau Nguyen\">
        <meta name=\"keywords\" content=\"au theme template\">

        <!-- Title Page-->
        <title>Dashboard</title>

        <!-- Fontfaces CSS-->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/font-face.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/font-awesome-4.7/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/font-awesome-5/css/fontawesome-all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/mdi-font/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/bootstrap-4.1/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Vendor CSS-->
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/animsition/animsition.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/wow/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/slick/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "        <!-- Jquery JS-->
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap JS-->
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/bootstrap-4.1/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/bootstrap-4.1/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Vendor JS       -->
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/slick/slick.min.js"), "html", null, true);
        echo "\">
        </script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/animsition/animsition.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\">
        </script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/counter-up/jquery.counterup.min.js"), "html", null, true);
        echo "\">
        </script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/chartjs/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/select2/select2.min.js"), "html", null, true);
        echo "\">
        </script>

        <!-- Main JS-->
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_HeaderMobile($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "HeaderMobile"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "HeaderMobile"));

        // line 71
        echo "    <!-- HEADER MOBILE-->
    <header class=\"header-mobile d-block d-lg-none\">
        <div class=\"header-mobile__bar\">
            <div class=\"container-fluid\">
                <div class=\"header-mobile-inner\">
                    <a class=\"logo\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/index.html"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/logo.png"), "html", null, true);
        echo "\" />
                    </a>
                    <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class=\"navbar-mobile\">
            <div class=\"container-fluid\">
                <ul class=\"navbar-mobile__list list-unstyled\">
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/index.html"), "html", null, true);
        echo "\">Dashboard 1</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/index2.html"), "html", null, true);
        echo "\">Dashboard 2</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/index3.html"), "html", null, true);
        echo "\">Dashboard 3</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/index4.html"), "html", null, true);
        echo "\">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/chart.html"), "html", null, true);
        echo "\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/table.html"), "html", null, true);
        echo "\">
                            <i class=\"fas fa-table\"></i>Tables</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("afficherrec"), "html", null, true);
        echo "\">
                            <i class=\"far fa-check-square\"></i>Reclamations</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/calendar.html"), "html", null, true);
        echo "\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/map.html"), "html", null, true);
        echo "\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/login.html"), "html", null, true);
        echo "\">Login</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/register.html"), "html", null, true);
        echo "\">Register</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/forget-pass.html"), "html", null, true);
        echo "\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/button.html"), "html", null, true);
        echo "\">Button</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/badge.html"), "html", null, true);
        echo "\">Badges</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tab.html"), "html", null, true);
        echo "\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/card.html"), "html", null, true);
        echo "\">Cards</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/alert.html"), "html", null, true);
        echo "\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/progress-bar.html"), "html", null, true);
        echo "\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/modal.html"), "html", null, true);
        echo "\">Modals</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/switch.html"), "html", null, true);
        echo "\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/grid.html"), "html", null, true);
        echo "\">Grids</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/fontawesome.html"), "html", null, true);
        echo "\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/typo.html"), "html", null, true);
        echo "\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 188
    public function block_SideBar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "SideBar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "SideBar"));

        // line 189
        echo "    <!-- MENU SIDEBAR-->
    <aside class=\"menu-sidebar d-none d-lg-block\">
        <div class=\"logo\">
            <a href=\"#\">
                <img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/logo.png"), "html", null, true);
        echo "\" alt=\"Cool Admin\" />
            </a>
        </div>
        <div class=\"menu-sidebar__content js-scrollbar1\">
            <nav class=\"navbar-sidebar\">
                <ul class=\"list-unstyled navbar__list\">
                    <li class=\"active has-sub\">
                        <a class=\"js-arrow\" href=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/index.html"), "html", null, true);
        echo "\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/chart.html"), "html", null, true);
        echo "\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/afficherrecadm"), "html", null, true);
        echo "\">
                            <i class=\"fas fa-table\"></i>Reclamation</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("afficherart"), "html", null, true);
        echo "\">
                            <i class=\"far fa-check-square\"></i>Articles</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/calendar.html"), "html", null, true);
        echo "\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/map.html"), "html", null, true);
        echo "\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/login.html"), "html", null, true);
        echo "\">Login</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/register.html"), "html", null, true);
        echo "\">Register</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/forget-pass.html"), "html", null, true);
        echo "\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/button.html"), "html", null, true);
        echo "\">Button</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/badge.html"), "html", null, true);
        echo "\">Badges</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tab.html"), "html", null, true);
        echo "\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/card.html"), "html", null, true);
        echo "\">Cards</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/alert.html"), "html", null, true);
        echo "\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/progress-bar.html"), "html", null, true);
        echo "\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/modal.html"), "html", null, true);
        echo "\">Modals</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/switch.html"), "html", null, true);
        echo "\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/grid.html"), "html", null, true);
        echo "\">Grids</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/fontawesome.html"), "html", null, true);
        echo "\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/typo.html"), "html", null, true);
        echo "\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 283
    public function block_HeaderDesktop($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "HeaderDesktop"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "HeaderDesktop"));

        // line 284
        echo "    <!-- HEADER DESKTOP-->
    <header class=\"header-desktop\">
        <div class=\"section__content section__content--p30\">
            <div class=\"container-fluid\">
                <div class=\"header-wrap\">
                    <form class=\"form-header\" action=\"\" method=\"POST\">
                        <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                        <button class=\"au-btn--submit\" type=\"submit\">
                            <i class=\"zmdi zmdi-search\"></i>
                        </button>
                    </form>
                    <div class=\"header-button\">
                        <div class=\"noti-wrap\">
                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-comment-more\"></i>
                                <span class=\"quantity\">1</span>
                                <div class=\"mess-dropdown js-dropdown\">
                                    <div class=\"mess__title\">
                                        <p>You have 2 news message</p>
                                    </div>
                                    <div class=\"mess__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/avatar-06.jpg"), "html", null, true);
        echo "\" alt=\"Michelle Moreno\" />
                                        </div>
                                        <div class=\"content\">
                                            <h6>Michelle Moreno</h6>
                                            <p>Have sent a photo</p>
                                            <span class=\"time\">3 min ago</span>
                                        </div>
                                    </div>
                                    <div class=\"mess__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/avatar-04.jpg"), "html", null, true);
        echo "\" alt=\"Diane Myers\" />
                                        </div>
                                        <div class=\"content\">
                                            <h6>Diane Myers</h6>
                                            <p>You are now connected on message</p>
                                            <span class=\"time\">Yesterday</span>
                                        </div>
                                    </div>
                                    <div class=\"mess__footer\">
                                        <a href=\"#\">View all messages</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-email\"></i>
                                <span class=\"quantity\">1</span>
                                <div class=\"email-dropdown js-dropdown\">
                                    <div class=\"email__title\">
                                        <p>You have 3 New Emails</p>
                                    </div>
                                    <div class=\"email__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/avatar-06.jpg"), "html", null, true);
        echo "\" alt=\"Cynthia Harvey\" />
                                        </div>
                                        <div class=\"content\">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, 3 min ago</span>
                                        </div>
                                    </div>
                                    <div class=\"email__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/avatar-05.jpg"), "html", null, true);
        echo "\" alt=\"Cynthia Harvey\" />
                                        </div>
                                        <div class=\"content\">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, Yesterday</span>
                                        </div>
                                    </div>
                                    <div class=\"email__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/avatar-04.jpg"), "html", null, true);
        echo "\" alt=\"Cynthia Harvey\" />
                                        </div>
                                        <div class=\"content\">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, April 12,,2018</span>
                                        </div>
                                    </div>
                                    <div class=\"email__footer\">
                                        <a href=\"#\">See all emails</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-notifications\"></i>
                                <span class=\"quantity\">3</span>
                                <div class=\"notifi-dropdown js-dropdown\">
                                    <div class=\"notifi__title\">
                                        <p>You have 3 Notifications</p>
                                    </div>
                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c1 img-cir img-40\">
                                            <i class=\"zmdi zmdi-email-open\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <p>You got a email notification</p>
                                            <span class=\"date\">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c2 img-cir img-40\">
                                            <i class=\"zmdi zmdi-account-box\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <p>Your account has been blocked</p>
                                            <span class=\"date\">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c3 img-cir img-40\">
                                            <i class=\"zmdi zmdi-file-text\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <p>You got a new file</p>
                                            <span class=\"date\">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class=\"notifi__footer\">
                                        <a href=\"#\">All notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"account-wrap\">
                            <div class=\"account-item clearfix js-item-menu\">
                                <div class=\"image\">
                                    <img src=\"";
        // line 411
        echo "admin/images/icon/avatar-01";
        echo "\" alt=\"John Doe\" />
                                </div>
                                <div class=\"content\">
                                    <a class=\"js-acc-btn\" href=\"#\">Samali Farah</a>
                                </div>
                                <div class=\"account-dropdown js-dropdown\">
                                    <div class=\"info clearfix\">
                                        <div class=\"image\">
                                            <a href=\"#\">
                                                <img src=\"";
        // line 420
        echo "admin/images/icon/avatar-01";
        echo "\" alt=\"John Doe\" />
                                            </a>
                                        </div>
                                        <div class=\"content\">
                                            <h5 class=\"name\">
                                                <a href=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin"), "html", null, true);
        echo "\">Bouallegue Sarah</a>
                                            </h5>
                                            <span class=\"email\">samali.farah@esprit.tn</span>
                                        </div>
                                    </div>
                                    <div class=\"account-dropdown__body\">
                                        <div class=\"account-dropdown__item\">
                                            <a href=\"#\">
                                                <i class=\"zmdi zmdi-account\"></i>Account</a>
                                        </div>
                                        <div class=\"account-dropdown__item\">
                                            <a href=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin"), "html", null, true);
        echo "\">
                                                <i class=\"zmdi zmdi-settings\"></i>Setting</a>
                                        </div>
                                        <div class=\"account-dropdown__item\">
                                            <a href=\"#\">
                                                <i class=\"zmdi zmdi-money-box\"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class=\"account-dropdown__footer\">
                                        <a href=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/logout"), "html", null, true);
        echo "\">
                                            <i class=\"zmdi zmdi-power\"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER DESKTOP-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 458
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 459
        echo "    <!-- MAIN CONTENT-->
    <div class=\"main-content\">
        <div class=\"section__content section__content--p30\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"overview-wrap\">
                            <h2 class=\"title-1\">overview</h2>
                            <button class=\"au-btn au-btn-icon au-btn--blue\">
                                <i class=\"zmdi zmdi-plus\"></i>add item</button>
                        </div>
                    </div>
                </div>
                <div class=\"row m-t-25\">
                    <div class=\"col-sm-6 col-lg-3\">
                        <div class=\"overview-item overview-item--c1\">
                            <div class=\"overview__inner\">
                                <div class=\"overview-box clearfix\">
                                    <div class=\"icon\">
                                        <i class=\"zmdi zmdi-account-o\"></i>
                                    </div>
                                    <div class=\"text\">
                                        <h2>10368</h2>
                                        <span>members online</span>
                                    </div>
                                </div>
                                <div class=\"overview-chart\">
                                    <canvas id=\"widgetChart1\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-3\">
                        <div class=\"overview-item overview-item--c2\">
                            <div class=\"overview__inner\">
                                <div class=\"overview-box clearfix\">
                                    <div class=\"icon\">
                                        <i class=\"zmdi zmdi-shopping-cart\"></i>
                                    </div>
                                    <div class=\"text\">
                                        <h2>388,688</h2>
                                        <span>items solid</span>
                                    </div>
                                </div>
                                <div class=\"overview-chart\">
                                    <canvas id=\"widgetChart2\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-3\">
                        <div class=\"overview-item overview-item--c3\">
                            <div class=\"overview__inner\">
                                <div class=\"overview-box clearfix\">
                                    <div class=\"icon\">
                                        <i class=\"zmdi zmdi-calendar-note\"></i>
                                    </div>
                                    <div class=\"text\">
                                        <h2>1,086</h2>
                                        <span>this week</span>
                                    </div>
                                </div>
                                <div class=\"overview-chart\">
                                    <canvas id=\"widgetChart3\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-3\">
                        <div class=\"overview-item overview-item--c4\">
                            <div class=\"overview__inner\">
                                <div class=\"overview-box clearfix\">
                                    <div class=\"icon\">
                                        <i class=\"zmdi zmdi-money\"></i>
                                    </div>
                                    <div class=\"text\">
                                        <h2>\$1,060,386</h2>
                                        <span>total earnings</span>
                                    </div>
                                </div>
                                <div class=\"overview-chart\">
                                    <canvas id=\"widgetChart4\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"au-card recent-report\">
                            <div class=\"au-card-inner\">
                                <h3 class=\"title-2\">recent reports</h3>
                                <div class=\"chart-info\">
                                    <div class=\"chart-info__left\">
                                        <div class=\"chart-note\">
                                            <span class=\"dot dot--blue\"></span>
                                            <span>products</span>
                                        </div>
                                        <div class=\"chart-note mr-0\">
                                            <span class=\"dot dot--green\"></span>
                                            <span>services</span>
                                        </div>
                                    </div>
                                    <div class=\"chart-info__right\">
                                        <div class=\"chart-statis\">
                                                    <span class=\"index incre\">
                                                        <i class=\"zmdi zmdi-long-arrow-up\"></i>25%</span>
                                            <span class=\"label\">products</span>
                                        </div>
                                        <div class=\"chart-statis mr-0\">
                                                    <span class=\"index decre\">
                                                        <i class=\"zmdi zmdi-long-arrow-down\"></i>10%</span>
                                            <span class=\"label\">services</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"recent-report__chart\">
                                    <canvas id=\"recent-rep-chart\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"au-card chart-percent-card\">
                            <div class=\"au-card-inner\">
                                <h3 class=\"title-2 tm-b-5\">char by %</h3>
                                <div class=\"row no-gutters\">
                                    <div class=\"col-xl-6\">
                                        <div class=\"chart-note-wrap\">
                                            <div class=\"chart-note mr-0 d-block\">
                                                <span class=\"dot dot--blue\"></span>
                                                <span>products</span>
                                            </div>
                                            <div class=\"chart-note mr-0 d-block\">
                                                <span class=\"dot dot--red\"></span>
                                                <span>services</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xl-6\">
                                        <div class=\"percent-chart\">
                                            <canvas id=\"percent-chart\"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-9\">
                        <h2 class=\"title-1 m-b-25\">Earnings By Items</h2>
                        <div class=\"table-responsive table--no-card m-b-40\">
                            <table class=\"table table-borderless table-striped table-earning\">
                                <thead>
                                <tr>
                                    <th>date</th>
                                    <th>order ID</th>
                                    <th>name</th>
                                    <th class=\"text-right\">price</th>
                                    <th class=\"text-right\">quantity</th>
                                    <th class=\"text-right\">total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>100398</td>
                                    <td>iPhone X 64Gb Grey</td>
                                    <td class=\"text-right\">\$999.00</td>
                                    <td class=\"text-right\">1</td>
                                    <td class=\"text-right\">\$999.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-28 01:22</td>
                                    <td>100397</td>
                                    <td>Samsung S8 Black</td>
                                    <td class=\"text-right\">\$756.00</td>
                                    <td class=\"text-right\">1</td>
                                    <td class=\"text-right\">\$756.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-27 02:12</td>
                                    <td>100396</td>
                                    <td>Game Console Controller</td>
                                    <td class=\"text-right\">\$22.00</td>
                                    <td class=\"text-right\">2</td>
                                    <td class=\"text-right\">\$44.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-26 23:06</td>
                                    <td>100395</td>
                                    <td>iPhone X 256Gb Black</td>
                                    <td class=\"text-right\">\$1199.00</td>
                                    <td class=\"text-right\">1</td>
                                    <td class=\"text-right\">\$1199.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-25 19:03</td>
                                    <td>100393</td>
                                    <td>USB 3.0 Cable</td>
                                    <td class=\"text-right\">\$10.00</td>
                                    <td class=\"text-right\">3</td>
                                    <td class=\"text-right\">\$30.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>100392</td>
                                    <td>Smartwatch 4.0 LTE Wifi</td>
                                    <td class=\"text-right\">\$199.00</td>
                                    <td class=\"text-right\">6</td>
                                    <td class=\"text-right\">\$1494.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-24 19:10</td>
                                    <td>100391</td>
                                    <td>Camera C430W 4k</td>
                                    <td class=\"text-right\">\$699.00</td>
                                    <td class=\"text-right\">1</td>
                                    <td class=\"text-right\">\$699.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-22 00:43</td>
                                    <td>100393</td>
                                    <td>USB 3.0 Cable</td>
                                    <td class=\"text-right\">\$10.00</td>
                                    <td class=\"text-right\">3</td>
                                    <td class=\"text-right\">\$30.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-lg-3\">
                        <h2 class=\"title-1 m-b-25\">Top countries</h2>
                        <div class=\"au-card au-card--bg-blue au-card-top-countries m-b-40\">
                            <div class=\"au-card-inner\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-top-countries\">
                                        <tbody>
                                        <tr>
                                            <td>United States</td>
                                            <td class=\"text-right\">\$119,366.96</td>
                                        </tr>
                                        <tr>
                                            <td>Australia</td>
                                            <td class=\"text-right\">\$70,261.65</td>
                                        </tr>
                                        <tr>
                                            <td>United Kingdom</td>
                                            <td class=\"text-right\">\$46,399.22</td>
                                        </tr>
                                        <tr>
                                            <td>Turkey</td>
                                            <td class=\"text-right\">\$35,364.90</td>
                                        </tr>
                                        <tr>
                                            <td>Germany</td>
                                            <td class=\"text-right\">\$20,366.96</td>
                                        </tr>
                                        <tr>
                                            <td>France</td>
                                            <td class=\"text-right\">\$10,366.96</td>
                                        </tr>
                                        <tr>
                                            <td>Australia</td>
                                            <td class=\"text-right\">\$5,366.96</td>
                                        </tr>
                                        <tr>
                                            <td>Italy</td>
                                            <td class=\"text-right\">\$1639.32</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"au-card au-card--no-shadow au-card--no-pad m-b-40\">
                            <div class=\"au-card-title\" style=\"background-image:url";
        // line 741
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg-title-01.jpg"), "html", null, true);
        echo ";\">
                                <div class=\"bg-overlay bg-overlay--blue\"></div>
                                <h3>
                                    <i class=\"zmdi zmdi-account-calendar\"></i>26 April, 2018</h3>
                                <button class=\"au-btn-plus\">
                                    <i class=\"zmdi zmdi-plus\"></i>
                                </button>
                            </div>
                            <div class=\"au-task js-list-load\">
                                <div class=\"au-task__title\">
                                    <p>Tasks for John Doe</p>
                                </div>
                                <div class=\"au-task-list js-scrollbar3\">
                                    <div class=\"au-task__item au-task__item--danger\">
                                        <div class=\"au-task__item-inner\">
                                            <h5 class=\"task\">
                                                <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                            </h5>
                                            <span class=\"time\">10:00 AM</span>
                                        </div>
                                    </div>
                                    <div class=\"au-task__item au-task__item--warning\">
                                        <div class=\"au-task__item-inner\">
                                            <h5 class=\"task\">
                                                <a href=\"#\">Create new task for Dashboard</a>
                                            </h5>
                                            <span class=\"time\">11:00 AM</span>
                                        </div>
                                    </div>
                                    <div class=\"au-task__item au-task__item--primary\">
                                        <div class=\"au-task__item-inner\">
                                            <h5 class=\"task\">
                                                <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                            </h5>
                                            <span class=\"time\">02:00 PM</span>
                                        </div>
                                    </div>
                                    <div class=\"au-task__item au-task__item--success\">
                                        <div class=\"au-task__item-inner\">
                                            <h5 class=\"task\">
                                                <a href=\"#\">Create new task for Dashboard</a>
                                            </h5>
                                            <span class=\"time\">03:30 PM</span>
                                        </div>
                                    </div>
                                    <div class=\"au-task__item au-task__item--danger js-load-item\">
                                        <div class=\"au-task__item-inner\">
                                            <h5 class=\"task\">
                                                <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                            </h5>
                                            <span class=\"time\">10:00 AM</span>
                                        </div>
                                    </div>
                                    <div class=\"au-task__item au-task__item--warning js-load-item\">
                                        <div class=\"au-task__item-inner\">
                                            <h5 class=\"task\">
                                                <a href=\"#\">Create new task for Dashboard</a>
                                            </h5>
                                            <span class=\"time\">11:00 AM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"au-task__footer\">
                                    <button class=\"au-btn au-btn-load js-load-btn\">load more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"au-card au-card--no-shadow au-card--no-pad m-b-40\">
                            <div class=\"au-card-title\" style=\"background-image:url";
        // line 811
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg-title-02.jpg"), "html", null, true);
        echo ";\">
                                <div class=\"bg-overlay bg-overlay--blue\"></div>
                                <h3>
                                    <i class=\"zmdi zmdi-comment-text\"></i>New Messages</h3>
                                <button class=\"au-btn-plus\">
                                    <i class=\"zmdi zmdi-plus\"></i>
                                </button>
                            </div>
                            <div class=\"au-inbox-wrap js-inbox-wrap\">
                                <div class=\"au-message js-list-load\">
                                    <div class=\"au-message__noti\">
                                        <p>You Have
                                            <span>2</span>

                                            new messages
                                        </p>
                                    </div>
                                    <div class=\"au-message-list\">
                                        <div class=\"au-message__item unread\">
                                            <div class=\"au-message__item-inner\">
                                                <div class=\"au-message__item-text\">
                                                    <div class=\"avatar-wrap\">
                                                        <div class=\"avatar\">
                                                            <img src=\"admin/images/icon/avatar-02.jpg\" alt=\"John Smith\">
                                                        </div>
                                                    </div>
                                                    <div class=\"text\">
                                                        <h5 class=\"name\">John Smith</h5>
                                                        <p>Have sent a photo</p>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item-time\">
                                                    <span>12 Min ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-message__item unread\">
                                            <div class=\"au-message__item-inner\">
                                                <div class=\"au-message__item-text\">
                                                    <div class=\"avatar-wrap online\">
                                                        <div class=\"avatar\">
                                                            <img src=\"";
        // line 852
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/avatar-03.jpg"), "html", null, true);
        echo "\" alt=\"Nicholas Martinez\">
                                                        </div>
                                                    </div>
                                                    <div class=\"text\">
                                                        <h5 class=\"name\">Nicholas Martinez</h5>
                                                        <p>You are now connected on message</p>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item-time\">
                                                    <span>11:00 PM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-message__item\">
                                            <div class=\"au-message__item-inner\">
                                                <div class=\"au-message__item-text\">
                                                    <div class=\"avatar-wrap online\">
                                                        <div class=\"avatar\">
                                                            <img src=\"";
        // line 870
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/avatar-04.jpg"), "html", null, true);
        echo "\" alt=\"Michelle Sims\">
                                                        </div>
                                                    </div>
                                                    <div class=\"text\">
                                                        <h5 class=\"name\">Michelle Sims</h5>
                                                        <p>Lorem ipsum dolor sit amet</p>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item-time\">
                                                    <span>Yesterday</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-message__item\">
                                            <div class=\"au-message__item-inner\">
                                                <div class=\"au-message__item-text\">
                                                    <div class=\"avatar-wrap\">
                                                        <div class=\"avatar\">
                                                            <img src=\"";
        // line 888
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/avatar-05.jpg"), "html", null, true);
        echo "\" alt=\"Michelle Sims\">
                                                        </div>
                                                    </div>
                                                    <div class=\"text\">
                                                        <h5 class=\"name\">Michelle Sims</h5>
                                                        <p>Purus feugiat finibus</p>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item-time\">
                                                    <span>Sunday</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-message__item js-load-item\">
                                            <div class=\"au-message__item-inner\">
                                                <div class=\"au-message__item-text\">
                                                    <div class=\"avatar-wrap online\">
                                                        <div class=\"avatar\">
                                                            <img src=\"";
        // line 906
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/avatar-04.jpg"), "html", null, true);
        echo "\" alt=\"Michelle Sims\">
                                                        </div>
                                                    </div>
                                                    <div class=\"text\">
                                                        <h5 class=\"name\">Michelle Sims</h5>
                                                        <p>Lorem ipsum dolor sit amet</p>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item-time\">
                                                    <span>Yesterday</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-message__item js-load-item\">
                                            <div class=\"au-message__item-inner\">
                                                <div class=\"au-message__item-text\">
                                                    <div class=\"avatar-wrap\">
                                                        <div class=\"avatar\">
                                                            <img src=\"";
        // line 924
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/avatar-05.jpg"), "html", null, true);
        echo "\" alt=\"Michelle Sims\">
                                                        </div>
                                                    </div>
                                                    <div class=\"text\">
                                                        <h5 class=\"name\">Michelle Sims</h5>
                                                        <p>Purus feugiat finibus</p>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item-time\">
                                                    <span>Sunday</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"au-message__footer\">
                                        <button class=\"au-btn au-btn-load js-load-btn\">load more</button>
                                    </div>
                                </div>
                                <div class=\"au-chat\">
                                    <div class=\"au-chat__title\">
                                        <div class=\"au-chat-info\">
                                            <div class=\"avatar-wrap online\">
                                                <div class=\"avatar avatar--small\">
                                                    <img src=\"";
        // line 947
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/avatar-02.jpg"), "html", null, true);
        echo "\" alt=\"John Smith\">
                                                </div>
                                            </div>
                                            <span class=\"nick\">
                                                        <a href=\"#\">John Smith</a>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class=\"au-chat__content\">
                                        <div class=\"recei-mess-wrap\">
                                            <span class=\"mess-time\">12 Min ago</span>
                                            <div class=\"recei-mess__inner\">
                                                <div class=\"avatar avatar--tiny\">
                                                    <img src=\"";
        // line 960
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/icon/avatar-02.jpg"), "html", null, true);
        echo "\" alt=\"John Smith\">
                                                </div>
                                                <div class=\"recei-mess-list\">
                                                    <div class=\"recei-mess\">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                    <div class=\"recei-mess\">Donec tempor, sapien ac viverra</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"send-mess-wrap\">
                                            <span class=\"mess-time\">30 Sec ago</span>
                                            <div class=\"send-mess__inner\">
                                                <div class=\"send-mess-list\">
                                                    <div class=\"send-mess\">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"au-chat-textfield\">
                                        <form class=\"au-form-icon\">
                                            <input class=\"au-input au-input--full au-input--h65\" type=\"text\" placeholder=\"Type a message\">
                                            <button class=\"au-input-icon\">
                                                <i class=\"zmdi zmdi-camera\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"copyright\">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href=\"https://colorlib.com\">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1436 => 960,  1420 => 947,  1394 => 924,  1373 => 906,  1352 => 888,  1331 => 870,  1310 => 852,  1266 => 811,  1193 => 741,  909 => 459,  899 => 458,  876 => 445,  864 => 436,  850 => 425,  842 => 420,  830 => 411,  772 => 356,  760 => 347,  748 => 338,  723 => 316,  710 => 306,  686 => 284,  676 => 283,  656 => 273,  650 => 270,  644 => 267,  638 => 264,  632 => 261,  626 => 258,  620 => 255,  614 => 252,  608 => 249,  602 => 246,  596 => 243,  584 => 234,  578 => 231,  572 => 228,  561 => 220,  554 => 216,  547 => 212,  540 => 208,  533 => 204,  526 => 200,  516 => 193,  510 => 189,  500 => 188,  480 => 178,  474 => 175,  468 => 172,  462 => 169,  456 => 166,  450 => 163,  444 => 160,  438 => 157,  432 => 154,  426 => 151,  420 => 148,  408 => 139,  402 => 136,  396 => 133,  385 => 125,  378 => 121,  371 => 117,  364 => 113,  357 => 109,  349 => 104,  343 => 101,  337 => 98,  331 => 95,  310 => 77,  306 => 76,  299 => 71,  289 => 70,  277 => 66,  270 => 62,  266 => 61,  262 => 60,  258 => 59,  253 => 57,  249 => 56,  244 => 54,  240 => 53,  236 => 52,  231 => 50,  226 => 48,  222 => 47,  217 => 45,  214 => 44,  204 => 43,  192 => 40,  186 => 37,  182 => 36,  178 => 35,  174 => 34,  170 => 33,  166 => 32,  162 => 31,  156 => 28,  150 => 25,  146 => 24,  142 => 23,  138 => 22,  125 => 11,  115 => 10,  96 => 5,  84 => 1002,  82 => 458,  80 => 283,  78 => 188,  76 => 70,  72 => 68,  70 => 43,  67 => 42,  65 => 10,  61 => 8,  56 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}


    {% block stylesheets %}
        <!-- Required meta tags-->
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"au theme template\">
        <meta name=\"author\" content=\"Hau Nguyen\">
        <meta name=\"keywords\" content=\"au theme template\">

        <!-- Title Page-->
        <title>Dashboard</title>

        <!-- Fontfaces CSS-->
        <link href=\"{{ asset ('admin/css/font-face.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset ('admin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset ('admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset ('admin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"{{ asset ('admin/vendor/bootstrap-4.1/bootstrap.min.css') }}\" rel=\"stylesheet\" media=\"all\">

        <!-- Vendor CSS-->
        <link href=\"{{ asset ('admin/vendor/animsition/animsition.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset ('admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset ('admin/vendor/wow/animate.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset ('admin/vendor/css-hamburgers/hamburgers.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset ('admin/vendor/slick/slick.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset ('admin/vendor/select2/select2.min.css') }}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset ('admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"{{ asset ('admin/css/theme.css') }}\" rel=\"stylesheet\" media=\"all\">
    {% endblock %}

    {% block javascripts %}
        <!-- Jquery JS-->
        <script src=\"{{ asset ('admin/vendor/jquery-3.2.1.min.js') }}\"></script>
        <!-- Bootstrap JS-->
        <script src=\"{{ asset ('admin/vendor/bootstrap-4.1/popper.min.js') }}\"></script>
        <script src=\"{{ asset ('admin/vendor/bootstrap-4.1/bootstrap.min.js') }}\"></script>
        <!-- Vendor JS       -->
        <script src=\"{{ asset ('admin/vendor/slick/slick.min.js') }}\">
        </script>
        <script src=\"{{ asset ('admin/vendor/wow/wow.min.js') }}\"></script>
        <script src=\"{{ asset ('admin/vendor/animsition/animsition.min.js') }}\"></script>
        <script src=\"{{ asset ('admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}\">
        </script>
        <script src=\"{{ asset ('admin/vendor/counter-up/jquery.waypoints.min.js') }}\"></script>
        <script src=\"{{ asset ('admin/vendor/counter-up/jquery.counterup.min.js') }}\">
        </script>
        <script src=\"{{ asset ('admin/vendor/circle-progress/circle-progress.min.js') }}\"></script>
        <script src=\"{{ asset ('admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
        <script src=\"{{ asset ('admin/vendor/chartjs/Chart.bundle.min.js') }}\"></script>
        <script src=\"{{ asset ('admin/vendor/select2/select2.min.js') }}\">
        </script>

        <!-- Main JS-->
        <script src=\"{{ asset ('admin/js/main.js') }}\"></script>
    {% endblock %}
</head>
<body>
{% block HeaderMobile %}
    <!-- HEADER MOBILE-->
    <header class=\"header-mobile d-block d-lg-none\">
        <div class=\"header-mobile__bar\">
            <div class=\"container-fluid\">
                <div class=\"header-mobile-inner\">
                    <a class=\"logo\" href=\"{{ asset ('admin/index.html') }}\">
                        <img src=\"{{ asset ('admin/images/icon/logo.png') }}\" />
                    </a>
                    <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class=\"navbar-mobile\">
            <div class=\"container-fluid\">
                <ul class=\"navbar-mobile__list list-unstyled\">
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"{{ asset ('admin/index.html') }}\">Dashboard 1</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/index2.html') }}\">Dashboard 2</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/index3.html') }}\">Dashboard 3</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/index4.html') }}\">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"{{ asset ('admin/chart.html') }}\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>
                    <li>
                        <a href=\"{{ asset ('admin/table.html') }}\">
                            <i class=\"fas fa-table\"></i>Tables</a>
                    </li>
                    <li>
                        <a href=\"{{ asset ('afficherrec') }}\">
                            <i class=\"far fa-check-square\"></i>Reclamations</a>
                    </li>
                    <li>
                        <a href=\"{{ asset ('admin/calendar.html') }}\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"{{ asset ('admin/map.html') }}\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"{{ asset ('admin/login.html') }}\">Login</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/register.html') }}\">Register</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/forget-pass.html') }}\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"{{ asset ('admin/button.html') }}\">Button</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/badge.html') }}\">Badges</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/tab.html') }}\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/card.html') }}\">Cards</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/alert.html') }}\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/progress-bar.html') }}\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/modal.html') }}\">Modals</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/switch.html') }}\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/grid.html') }}\">Grids</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/fontawesome.html') }}\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/typo.html') }}\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->
{% endblock %}
{% block SideBar %}
    <!-- MENU SIDEBAR-->
    <aside class=\"menu-sidebar d-none d-lg-block\">
        <div class=\"logo\">
            <a href=\"#\">
                <img src=\"{{ asset ('admin/images/icon/logo.png') }}\" alt=\"Cool Admin\" />
            </a>
        </div>
        <div class=\"menu-sidebar__content js-scrollbar1\">
            <nav class=\"navbar-sidebar\">
                <ul class=\"list-unstyled navbar__list\">
                    <li class=\"active has-sub\">
                        <a class=\"js-arrow\" href=\"{{ asset ('admin/index.html') }}\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href=\"{{ asset ('admin/chart.html') }}\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>
                    <li>
                        <a href=\"{{ asset ('/afficherrecadm') }}\">
                            <i class=\"fas fa-table\"></i>Reclamation</a>
                    </li>
                    <li>
                        <a href=\"{{ asset ('afficherart') }}\">
                            <i class=\"far fa-check-square\"></i>Articles</a>
                    </li>
                    <li>
                        <a href=\"{{ asset ('admin/calendar.html') }}\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"{{ asset ('admin/map.html') }}\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"{{ asset ('admin/login.html') }}\">Login</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/register.html') }}\">Register</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/forget-pass.html') }}\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"{{ asset ('admin/button.html') }}\">Button</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/badge.html') }}\">Badges</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/tab.html') }}\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/card.html') }}\">Cards</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/alert.html') }}\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/progress-bar.html') }}\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/modal.html') }}\">Modals</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/switch.html') }}\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/grid.html') }}\">Grids</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/fontawesome.html') }}\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"{{ asset ('admin/typo.html') }}\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->
{% endblock %}
{% block HeaderDesktop %}
    <!-- HEADER DESKTOP-->
    <header class=\"header-desktop\">
        <div class=\"section__content section__content--p30\">
            <div class=\"container-fluid\">
                <div class=\"header-wrap\">
                    <form class=\"form-header\" action=\"\" method=\"POST\">
                        <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                        <button class=\"au-btn--submit\" type=\"submit\">
                            <i class=\"zmdi zmdi-search\"></i>
                        </button>
                    </form>
                    <div class=\"header-button\">
                        <div class=\"noti-wrap\">
                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-comment-more\"></i>
                                <span class=\"quantity\">1</span>
                                <div class=\"mess-dropdown js-dropdown\">
                                    <div class=\"mess__title\">
                                        <p>You have 2 news message</p>
                                    </div>
                                    <div class=\"mess__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"{{ asset ('admin/images/icon/avatar-06.jpg') }}\" alt=\"Michelle Moreno\" />
                                        </div>
                                        <div class=\"content\">
                                            <h6>Michelle Moreno</h6>
                                            <p>Have sent a photo</p>
                                            <span class=\"time\">3 min ago</span>
                                        </div>
                                    </div>
                                    <div class=\"mess__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"{{ asset ('admin/images/icon/avatar-04.jpg') }}\" alt=\"Diane Myers\" />
                                        </div>
                                        <div class=\"content\">
                                            <h6>Diane Myers</h6>
                                            <p>You are now connected on message</p>
                                            <span class=\"time\">Yesterday</span>
                                        </div>
                                    </div>
                                    <div class=\"mess__footer\">
                                        <a href=\"#\">View all messages</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-email\"></i>
                                <span class=\"quantity\">1</span>
                                <div class=\"email-dropdown js-dropdown\">
                                    <div class=\"email__title\">
                                        <p>You have 3 New Emails</p>
                                    </div>
                                    <div class=\"email__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"{{ asset ('admin/images/icon/avatar-06.jpg') }}\" alt=\"Cynthia Harvey\" />
                                        </div>
                                        <div class=\"content\">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, 3 min ago</span>
                                        </div>
                                    </div>
                                    <div class=\"email__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"{{ asset ('admin/images/icon/avatar-05.jpg') }}\" alt=\"Cynthia Harvey\" />
                                        </div>
                                        <div class=\"content\">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, Yesterday</span>
                                        </div>
                                    </div>
                                    <div class=\"email__item\">
                                        <div class=\"image img-cir img-40\">
                                            <img src=\"{{ asset ('admin/images/icon/avatar-04.jpg') }}\" alt=\"Cynthia Harvey\" />
                                        </div>
                                        <div class=\"content\">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, April 12,,2018</span>
                                        </div>
                                    </div>
                                    <div class=\"email__footer\">
                                        <a href=\"#\">See all emails</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-notifications\"></i>
                                <span class=\"quantity\">3</span>
                                <div class=\"notifi-dropdown js-dropdown\">
                                    <div class=\"notifi__title\">
                                        <p>You have 3 Notifications</p>
                                    </div>
                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c1 img-cir img-40\">
                                            <i class=\"zmdi zmdi-email-open\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <p>You got a email notification</p>
                                            <span class=\"date\">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c2 img-cir img-40\">
                                            <i class=\"zmdi zmdi-account-box\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <p>Your account has been blocked</p>
                                            <span class=\"date\">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c3 img-cir img-40\">
                                            <i class=\"zmdi zmdi-file-text\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <p>You got a new file</p>
                                            <span class=\"date\">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class=\"notifi__footer\">
                                        <a href=\"#\">All notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"account-wrap\">
                            <div class=\"account-item clearfix js-item-menu\">
                                <div class=\"image\">
                                    <img src=\"{{ ('admin/images/icon/avatar-01') }}\" alt=\"John Doe\" />
                                </div>
                                <div class=\"content\">
                                    <a class=\"js-acc-btn\" href=\"#\">Samali Farah</a>
                                </div>
                                <div class=\"account-dropdown js-dropdown\">
                                    <div class=\"info clearfix\">
                                        <div class=\"image\">
                                            <a href=\"#\">
                                                <img src=\"{{ ('admin/images/icon/avatar-01') }}\" alt=\"John Doe\" />
                                            </a>
                                        </div>
                                        <div class=\"content\">
                                            <h5 class=\"name\">
                                                <a href=\"{{ asset ('/admin') }}\">Bouallegue Sarah</a>
                                            </h5>
                                            <span class=\"email\">samali.farah@esprit.tn</span>
                                        </div>
                                    </div>
                                    <div class=\"account-dropdown__body\">
                                        <div class=\"account-dropdown__item\">
                                            <a href=\"#\">
                                                <i class=\"zmdi zmdi-account\"></i>Account</a>
                                        </div>
                                        <div class=\"account-dropdown__item\">
                                            <a href=\"{{ asset ('/admin') }}\">
                                                <i class=\"zmdi zmdi-settings\"></i>Setting</a>
                                        </div>
                                        <div class=\"account-dropdown__item\">
                                            <a href=\"#\">
                                                <i class=\"zmdi zmdi-money-box\"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class=\"account-dropdown__footer\">
                                        <a href=\"{{ asset ('/logout') }}\">
                                            <i class=\"zmdi zmdi-power\"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER DESKTOP-->
{% endblock %}
{% block body %}
    <!-- MAIN CONTENT-->
    <div class=\"main-content\">
        <div class=\"section__content section__content--p30\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"overview-wrap\">
                            <h2 class=\"title-1\">overview</h2>
                            <button class=\"au-btn au-btn-icon au-btn--blue\">
                                <i class=\"zmdi zmdi-plus\"></i>add item</button>
                        </div>
                    </div>
                </div>
                <div class=\"row m-t-25\">
                    <div class=\"col-sm-6 col-lg-3\">
                        <div class=\"overview-item overview-item--c1\">
                            <div class=\"overview__inner\">
                                <div class=\"overview-box clearfix\">
                                    <div class=\"icon\">
                                        <i class=\"zmdi zmdi-account-o\"></i>
                                    </div>
                                    <div class=\"text\">
                                        <h2>10368</h2>
                                        <span>members online</span>
                                    </div>
                                </div>
                                <div class=\"overview-chart\">
                                    <canvas id=\"widgetChart1\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-3\">
                        <div class=\"overview-item overview-item--c2\">
                            <div class=\"overview__inner\">
                                <div class=\"overview-box clearfix\">
                                    <div class=\"icon\">
                                        <i class=\"zmdi zmdi-shopping-cart\"></i>
                                    </div>
                                    <div class=\"text\">
                                        <h2>388,688</h2>
                                        <span>items solid</span>
                                    </div>
                                </div>
                                <div class=\"overview-chart\">
                                    <canvas id=\"widgetChart2\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-3\">
                        <div class=\"overview-item overview-item--c3\">
                            <div class=\"overview__inner\">
                                <div class=\"overview-box clearfix\">
                                    <div class=\"icon\">
                                        <i class=\"zmdi zmdi-calendar-note\"></i>
                                    </div>
                                    <div class=\"text\">
                                        <h2>1,086</h2>
                                        <span>this week</span>
                                    </div>
                                </div>
                                <div class=\"overview-chart\">
                                    <canvas id=\"widgetChart3\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-3\">
                        <div class=\"overview-item overview-item--c4\">
                            <div class=\"overview__inner\">
                                <div class=\"overview-box clearfix\">
                                    <div class=\"icon\">
                                        <i class=\"zmdi zmdi-money\"></i>
                                    </div>
                                    <div class=\"text\">
                                        <h2>\$1,060,386</h2>
                                        <span>total earnings</span>
                                    </div>
                                </div>
                                <div class=\"overview-chart\">
                                    <canvas id=\"widgetChart4\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"au-card recent-report\">
                            <div class=\"au-card-inner\">
                                <h3 class=\"title-2\">recent reports</h3>
                                <div class=\"chart-info\">
                                    <div class=\"chart-info__left\">
                                        <div class=\"chart-note\">
                                            <span class=\"dot dot--blue\"></span>
                                            <span>products</span>
                                        </div>
                                        <div class=\"chart-note mr-0\">
                                            <span class=\"dot dot--green\"></span>
                                            <span>services</span>
                                        </div>
                                    </div>
                                    <div class=\"chart-info__right\">
                                        <div class=\"chart-statis\">
                                                    <span class=\"index incre\">
                                                        <i class=\"zmdi zmdi-long-arrow-up\"></i>25%</span>
                                            <span class=\"label\">products</span>
                                        </div>
                                        <div class=\"chart-statis mr-0\">
                                                    <span class=\"index decre\">
                                                        <i class=\"zmdi zmdi-long-arrow-down\"></i>10%</span>
                                            <span class=\"label\">services</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"recent-report__chart\">
                                    <canvas id=\"recent-rep-chart\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"au-card chart-percent-card\">
                            <div class=\"au-card-inner\">
                                <h3 class=\"title-2 tm-b-5\">char by %</h3>
                                <div class=\"row no-gutters\">
                                    <div class=\"col-xl-6\">
                                        <div class=\"chart-note-wrap\">
                                            <div class=\"chart-note mr-0 d-block\">
                                                <span class=\"dot dot--blue\"></span>
                                                <span>products</span>
                                            </div>
                                            <div class=\"chart-note mr-0 d-block\">
                                                <span class=\"dot dot--red\"></span>
                                                <span>services</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xl-6\">
                                        <div class=\"percent-chart\">
                                            <canvas id=\"percent-chart\"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-9\">
                        <h2 class=\"title-1 m-b-25\">Earnings By Items</h2>
                        <div class=\"table-responsive table--no-card m-b-40\">
                            <table class=\"table table-borderless table-striped table-earning\">
                                <thead>
                                <tr>
                                    <th>date</th>
                                    <th>order ID</th>
                                    <th>name</th>
                                    <th class=\"text-right\">price</th>
                                    <th class=\"text-right\">quantity</th>
                                    <th class=\"text-right\">total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>100398</td>
                                    <td>iPhone X 64Gb Grey</td>
                                    <td class=\"text-right\">\$999.00</td>
                                    <td class=\"text-right\">1</td>
                                    <td class=\"text-right\">\$999.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-28 01:22</td>
                                    <td>100397</td>
                                    <td>Samsung S8 Black</td>
                                    <td class=\"text-right\">\$756.00</td>
                                    <td class=\"text-right\">1</td>
                                    <td class=\"text-right\">\$756.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-27 02:12</td>
                                    <td>100396</td>
                                    <td>Game Console Controller</td>
                                    <td class=\"text-right\">\$22.00</td>
                                    <td class=\"text-right\">2</td>
                                    <td class=\"text-right\">\$44.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-26 23:06</td>
                                    <td>100395</td>
                                    <td>iPhone X 256Gb Black</td>
                                    <td class=\"text-right\">\$1199.00</td>
                                    <td class=\"text-right\">1</td>
                                    <td class=\"text-right\">\$1199.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-25 19:03</td>
                                    <td>100393</td>
                                    <td>USB 3.0 Cable</td>
                                    <td class=\"text-right\">\$10.00</td>
                                    <td class=\"text-right\">3</td>
                                    <td class=\"text-right\">\$30.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>100392</td>
                                    <td>Smartwatch 4.0 LTE Wifi</td>
                                    <td class=\"text-right\">\$199.00</td>
                                    <td class=\"text-right\">6</td>
                                    <td class=\"text-right\">\$1494.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-24 19:10</td>
                                    <td>100391</td>
                                    <td>Camera C430W 4k</td>
                                    <td class=\"text-right\">\$699.00</td>
                                    <td class=\"text-right\">1</td>
                                    <td class=\"text-right\">\$699.00</td>
                                </tr>
                                <tr>
                                    <td>2018-09-22 00:43</td>
                                    <td>100393</td>
                                    <td>USB 3.0 Cable</td>
                                    <td class=\"text-right\">\$10.00</td>
                                    <td class=\"text-right\">3</td>
                                    <td class=\"text-right\">\$30.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-lg-3\">
                        <h2 class=\"title-1 m-b-25\">Top countries</h2>
                        <div class=\"au-card au-card--bg-blue au-card-top-countries m-b-40\">
                            <div class=\"au-card-inner\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-top-countries\">
                                        <tbody>
                                        <tr>
                                            <td>United States</td>
                                            <td class=\"text-right\">\$119,366.96</td>
                                        </tr>
                                        <tr>
                                            <td>Australia</td>
                                            <td class=\"text-right\">\$70,261.65</td>
                                        </tr>
                                        <tr>
                                            <td>United Kingdom</td>
                                            <td class=\"text-right\">\$46,399.22</td>
                                        </tr>
                                        <tr>
                                            <td>Turkey</td>
                                            <td class=\"text-right\">\$35,364.90</td>
                                        </tr>
                                        <tr>
                                            <td>Germany</td>
                                            <td class=\"text-right\">\$20,366.96</td>
                                        </tr>
                                        <tr>
                                            <td>France</td>
                                            <td class=\"text-right\">\$10,366.96</td>
                                        </tr>
                                        <tr>
                                            <td>Australia</td>
                                            <td class=\"text-right\">\$5,366.96</td>
                                        </tr>
                                        <tr>
                                            <td>Italy</td>
                                            <td class=\"text-right\">\$1639.32</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"au-card au-card--no-shadow au-card--no-pad m-b-40\">
                            <div class=\"au-card-title\" style=\"background-image:url{{ asset ('images/bg-title-01.jpg') }};\">
                                <div class=\"bg-overlay bg-overlay--blue\"></div>
                                <h3>
                                    <i class=\"zmdi zmdi-account-calendar\"></i>26 April, 2018</h3>
                                <button class=\"au-btn-plus\">
                                    <i class=\"zmdi zmdi-plus\"></i>
                                </button>
                            </div>
                            <div class=\"au-task js-list-load\">
                                <div class=\"au-task__title\">
                                    <p>Tasks for John Doe</p>
                                </div>
                                <div class=\"au-task-list js-scrollbar3\">
                                    <div class=\"au-task__item au-task__item--danger\">
                                        <div class=\"au-task__item-inner\">
                                            <h5 class=\"task\">
                                                <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                            </h5>
                                            <span class=\"time\">10:00 AM</span>
                                        </div>
                                    </div>
                                    <div class=\"au-task__item au-task__item--warning\">
                                        <div class=\"au-task__item-inner\">
                                            <h5 class=\"task\">
                                                <a href=\"#\">Create new task for Dashboard</a>
                                            </h5>
                                            <span class=\"time\">11:00 AM</span>
                                        </div>
                                    </div>
                                    <div class=\"au-task__item au-task__item--primary\">
                                        <div class=\"au-task__item-inner\">
                                            <h5 class=\"task\">
                                                <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                            </h5>
                                            <span class=\"time\">02:00 PM</span>
                                        </div>
                                    </div>
                                    <div class=\"au-task__item au-task__item--success\">
                                        <div class=\"au-task__item-inner\">
                                            <h5 class=\"task\">
                                                <a href=\"#\">Create new task for Dashboard</a>
                                            </h5>
                                            <span class=\"time\">03:30 PM</span>
                                        </div>
                                    </div>
                                    <div class=\"au-task__item au-task__item--danger js-load-item\">
                                        <div class=\"au-task__item-inner\">
                                            <h5 class=\"task\">
                                                <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                            </h5>
                                            <span class=\"time\">10:00 AM</span>
                                        </div>
                                    </div>
                                    <div class=\"au-task__item au-task__item--warning js-load-item\">
                                        <div class=\"au-task__item-inner\">
                                            <h5 class=\"task\">
                                                <a href=\"#\">Create new task for Dashboard</a>
                                            </h5>
                                            <span class=\"time\">11:00 AM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"au-task__footer\">
                                    <button class=\"au-btn au-btn-load js-load-btn\">load more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"au-card au-card--no-shadow au-card--no-pad m-b-40\">
                            <div class=\"au-card-title\" style=\"background-image:url{{ asset ('images/bg-title-02.jpg') }};\">
                                <div class=\"bg-overlay bg-overlay--blue\"></div>
                                <h3>
                                    <i class=\"zmdi zmdi-comment-text\"></i>New Messages</h3>
                                <button class=\"au-btn-plus\">
                                    <i class=\"zmdi zmdi-plus\"></i>
                                </button>
                            </div>
                            <div class=\"au-inbox-wrap js-inbox-wrap\">
                                <div class=\"au-message js-list-load\">
                                    <div class=\"au-message__noti\">
                                        <p>You Have
                                            <span>2</span>

                                            new messages
                                        </p>
                                    </div>
                                    <div class=\"au-message-list\">
                                        <div class=\"au-message__item unread\">
                                            <div class=\"au-message__item-inner\">
                                                <div class=\"au-message__item-text\">
                                                    <div class=\"avatar-wrap\">
                                                        <div class=\"avatar\">
                                                            <img src=\"admin/images/icon/avatar-02.jpg\" alt=\"John Smith\">
                                                        </div>
                                                    </div>
                                                    <div class=\"text\">
                                                        <h5 class=\"name\">John Smith</h5>
                                                        <p>Have sent a photo</p>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item-time\">
                                                    <span>12 Min ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-message__item unread\">
                                            <div class=\"au-message__item-inner\">
                                                <div class=\"au-message__item-text\">
                                                    <div class=\"avatar-wrap online\">
                                                        <div class=\"avatar\">
                                                            <img src=\"{{ asset ('admin/images/icon/avatar-03.jpg') }}\" alt=\"Nicholas Martinez\">
                                                        </div>
                                                    </div>
                                                    <div class=\"text\">
                                                        <h5 class=\"name\">Nicholas Martinez</h5>
                                                        <p>You are now connected on message</p>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item-time\">
                                                    <span>11:00 PM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-message__item\">
                                            <div class=\"au-message__item-inner\">
                                                <div class=\"au-message__item-text\">
                                                    <div class=\"avatar-wrap online\">
                                                        <div class=\"avatar\">
                                                            <img src=\"{{ asset ('admin/images/icon/avatar-04.jpg') }}\" alt=\"Michelle Sims\">
                                                        </div>
                                                    </div>
                                                    <div class=\"text\">
                                                        <h5 class=\"name\">Michelle Sims</h5>
                                                        <p>Lorem ipsum dolor sit amet</p>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item-time\">
                                                    <span>Yesterday</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-message__item\">
                                            <div class=\"au-message__item-inner\">
                                                <div class=\"au-message__item-text\">
                                                    <div class=\"avatar-wrap\">
                                                        <div class=\"avatar\">
                                                            <img src=\"{{ asset ('admin/images/icon/avatar-05.jpg') }}\" alt=\"Michelle Sims\">
                                                        </div>
                                                    </div>
                                                    <div class=\"text\">
                                                        <h5 class=\"name\">Michelle Sims</h5>
                                                        <p>Purus feugiat finibus</p>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item-time\">
                                                    <span>Sunday</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-message__item js-load-item\">
                                            <div class=\"au-message__item-inner\">
                                                <div class=\"au-message__item-text\">
                                                    <div class=\"avatar-wrap online\">
                                                        <div class=\"avatar\">
                                                            <img src=\"{{ asset ('admin/images/icon/avatar-04.jpg') }}\" alt=\"Michelle Sims\">
                                                        </div>
                                                    </div>
                                                    <div class=\"text\">
                                                        <h5 class=\"name\">Michelle Sims</h5>
                                                        <p>Lorem ipsum dolor sit amet</p>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item-time\">
                                                    <span>Yesterday</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-message__item js-load-item\">
                                            <div class=\"au-message__item-inner\">
                                                <div class=\"au-message__item-text\">
                                                    <div class=\"avatar-wrap\">
                                                        <div class=\"avatar\">
                                                            <img src=\"{{ asset ('admin/images/icon/avatar-05.jpg') }}\" alt=\"Michelle Sims\">
                                                        </div>
                                                    </div>
                                                    <div class=\"text\">
                                                        <h5 class=\"name\">Michelle Sims</h5>
                                                        <p>Purus feugiat finibus</p>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item-time\">
                                                    <span>Sunday</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"au-message__footer\">
                                        <button class=\"au-btn au-btn-load js-load-btn\">load more</button>
                                    </div>
                                </div>
                                <div class=\"au-chat\">
                                    <div class=\"au-chat__title\">
                                        <div class=\"au-chat-info\">
                                            <div class=\"avatar-wrap online\">
                                                <div class=\"avatar avatar--small\">
                                                    <img src=\"{{ asset ('admin/images/icon/avatar-02.jpg') }}\" alt=\"John Smith\">
                                                </div>
                                            </div>
                                            <span class=\"nick\">
                                                        <a href=\"#\">John Smith</a>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class=\"au-chat__content\">
                                        <div class=\"recei-mess-wrap\">
                                            <span class=\"mess-time\">12 Min ago</span>
                                            <div class=\"recei-mess__inner\">
                                                <div class=\"avatar avatar--tiny\">
                                                    <img src=\"{{ asset ('admin/images/icon/avatar-02.jpg') }}\" alt=\"John Smith\">
                                                </div>
                                                <div class=\"recei-mess-list\">
                                                    <div class=\"recei-mess\">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                    <div class=\"recei-mess\">Donec tempor, sapien ac viverra</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"send-mess-wrap\">
                                            <span class=\"mess-time\">30 Sec ago</span>
                                            <div class=\"send-mess__inner\">
                                                <div class=\"send-mess-list\">
                                                    <div class=\"send-mess\">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"au-chat-textfield\">
                                        <form class=\"au-form-icon\">
                                            <input class=\"au-input au-input--full au-input--h65\" type=\"text\" placeholder=\"Type a message\">
                                            <button class=\"au-input-icon\">
                                                <i class=\"zmdi zmdi-camera\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"copyright\">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href=\"https://colorlib.com\">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
{% endblock %}
</body>
</html>
", "back.html.twig", "C:\\xampp1\\htdocs\\reclamtion\\templates\\back.html.twig");
    }
}
