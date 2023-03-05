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

/* frontrec.html.twig */
class __TwigTemplate_b561e514e62998b8a04f947ba6c1809cc50bb622c8f71a52afaf928afb895d47 extends Template
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
            'Header' => [$this, 'block_Header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontrec.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontrec.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<meta charset=\"UTF-8\">
<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        $this->displayBlock('Header', $context, $blocks);
        // line 93
        echo "


";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 394
        $this->displayBlock('footer', $context, $blocks);
        // line 471
        $this->displayBlock('javascripts', $context, $blocks);
        // line 486
        echo "
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

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Company Bootstrap Template - Index</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo " rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- =======================================================
    * Template Name: Company - v4.10.0
    * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_Header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Header"));

        // line 44
        echo "    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"fixed-top\">
        <div class=\"container d-flex align-items-center\">

            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\" class=\"logo me-auto me-lg-0\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href=\"index.html\" class=\"logo me-auto me-lg-0\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

            <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
                <ul>
                    <li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\" class=\"active\">Home</a></li>

                    <li class=\"dropdown\"><a href=\"#\"><span>About</span> <i class=\"bi bi-chevron-down\"></i></a>
                        <ul>
                            <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about.html"), "html", null, true);
        echo "\">About Us</a></li>
                            <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("team.html"), "html", null, true);
        echo "\">Team</a></li>
                            <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("testimonials.html"), "html", null, true);
        echo "\">Testimonials</a></li>
                            <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
                                <ul>
                                    <li><a href=\"#\">Deep Drop Down 1</a></li>
                                    <li><a href=\"#\">Deep Drop Down 2</a></li>
                                    <li><a href=\"#\">Deep Drop Down 3</a></li>
                                    <li><a href=\"#\">Deep Drop Down 4</a></li>
                                    <li><a href=\"#\">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("services.html"), "html", null, true);
        echo "\">Services</a></li>
                    <li><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio.html"), "html", null, true);
        echo "\">Portfolio</a></li>
                    <li><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pricing.html"), "html", null, true);
        echo "\">Pricing</a></li>
                    <li><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("afficherrec"), "html", null, true);
        echo "\">Reclamation</a></li>
                    <li><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact.html"), "html", null, true);
        echo "\">Contact</a></li>

                </ul>
                <i class=\"bi bi-list mobile-nav-toggle\"></i>
            </nav><!-- .navbar -->

            <div class=\"header-social-links d-flex\">
                <a href=\"#\" class=\"twitter\"><i class=\"bu bi-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bu bi-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bu bi-instagram\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"bu bi-linkedin\"></i></a>
            </div>

        </div>
    </header><!-- End Header -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 97
        echo "    <main id=\"main\">

        <!-- ======= About Us Section ======= -->
        <section id=\"about-us\" class=\"about-us\">
            <div class=\"container\" data-aos=\"fade-up\">

                <div class=\"row content\">
                    <div class=\"col-lg-6\" data-aos=\"fade-right\">
                        <h2>Eum ipsam laborum deleniti velitena</h2>
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
                    </div>
                    <div class=\"col-lg-6 pt-4 pt-lg-0\" data-aos=\"fade-left\">
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <ul>
                            <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                            <li><i class=\"ri-check-double-line\"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                            <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                        </ul>
                        <p class=\"fst-italic\">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id=\"services\" class=\"services section-bg\">
            <div class=\"container\" data-aos=\"fade-up\">

                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                        <div class=\"icon-box iconbox-blue\">
                            <div class=\"icon\">
                                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174\"></path>
                                </svg>
                                <i class=\"bx bxl-dribbble\"></i>
                            </div>
                            <h4><a href=\"\">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
                        <div class=\"icon-box iconbox-orange \">
                            <div class=\"icon\">
                                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426\"></path>
                                </svg>
                                <i class=\"bx bx-file\"></i>
                            </div>
                            <h4><a href=\"\">Sed Perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
                        <div class=\"icon-box iconbox-pink\">
                            <div class=\"icon\">
                                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781\"></path>
                                </svg>
                                <i class=\"bx bx-tachometer\"></i>
                            </div>
                            <h4><a href=\"\">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                        <div class=\"icon-box iconbox-yellow\">
                            <div class=\"icon\">
                                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813\"></path>
                                </svg>
                                <i class=\"bx bx-layer\"></i>
                            </div>
                            <h4><a href=\"\">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
                        <div class=\"icon-box iconbox-red\">
                            <div class=\"icon\">
                                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572\"></path>
                                </svg>
                                <i class=\"bx bx-slideshow\"></i>
                            </div>
                            <h4><a href=\"\">Dele Cardo</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
                        <div class=\"icon-box iconbox-teal\">
                            <div class=\"icon\">
                                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762\"></path>
                                </svg>
                                <i class=\"bx bx-arch\"></i>
                            </div>
                            <h4><a href=\"\">Divera Don</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id=\"portfolio\" class=\"portfolio\">
            <div class=\"container\">

                <div class=\"row\" data-aos=\"fade-up\">
                    <div class=\"col-lg-12 d-flex justify-content-center\">
                        <ul id=\"portfolio-flters\">
                            <li data-filter=\"*\" class=\"filter-active\">All</li>
                            <li data-filter=\".filter-app\">App</li>
                            <li data-filter=\".filter-card\">Card</li>
                            <li data-filter=\".filter-web\">Web</li>
                        </ul>
                    </div>
                </div>

                <div class=\"row portfolio-container\" data-aos=\"fade-up\">

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                        <img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-1.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                        <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-2.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                        <img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-3.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                        <img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-4.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                        <img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-5.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                        <img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-6.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-6.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                        <img src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-7.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-7.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                        <img src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-8.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-8.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                        <img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-9.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-9.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("portfolio-details.html"), "html", null, true);
        echo "\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id=\"clients\" class=\"clients\">
            <div class=\"container\" data-aos=\"fade-up\">

                <div class=\"section-title\">
                    <h2>Clients</h2>
                </div>

                <div class=\"row no-gutters clients-wrap clearfix\" data-aos=\"fade-up\">

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-1.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-2.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-3.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-4.pngs"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-5.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-6.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-7.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-8.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Our Clients Section -->

    </main><!-- End #main -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 394
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 395
        echo "    <!-- ======= Footer ======= -->
    <footer id=\"footer\">

        <div class=\"footer-top\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-3 col-md-6 footer-contact\">
                        <h3>Company</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class=\"col-lg-2 col-md-6 footer-links\">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Home</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">About us</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class=\"col-lg-3 col-md-6 footer-links\">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class=\"col-lg-4 col-md-6 footer-newsletter\">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action=\"\" method=\"post\">
                            <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"container d-md-flex py-4\">

            <div class=\"me-md-auto text-center text-md-start\">
                <div class=\"copyright\">
                    &copy; Copyright <strong><span>Company</span></strong>. All Rights Reserved
                </div>
                <div class=\"credits\">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
                    Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
                </div>
            </div>
            <div class=\"social-links text-center text-md-right pt-3 pt-md-0\">
                <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 471
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 472
        echo "    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

    <!-- Vendor JS Files -->
    <script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/waypoints/noframework.waypoints.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontrec.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  853 => 484,  847 => 481,  843 => 480,  839 => 479,  835 => 478,  831 => 477,  827 => 476,  823 => 475,  818 => 472,  808 => 471,  723 => 395,  713 => 394,  692 => 383,  683 => 377,  674 => 371,  665 => 365,  656 => 359,  647 => 353,  638 => 347,  629 => 341,  605 => 320,  601 => 319,  594 => 315,  586 => 310,  582 => 309,  575 => 305,  567 => 300,  563 => 299,  556 => 295,  548 => 290,  544 => 289,  537 => 285,  529 => 280,  525 => 279,  518 => 275,  510 => 270,  506 => 269,  499 => 265,  491 => 260,  487 => 259,  480 => 255,  472 => 250,  468 => 249,  461 => 245,  453 => 240,  449 => 239,  442 => 235,  302 => 97,  292 => 96,  266 => 77,  262 => 76,  258 => 75,  254 => 74,  250 => 73,  234 => 60,  230 => 59,  226 => 58,  219 => 54,  208 => 48,  202 => 44,  192 => 43,  173 => 34,  167 => 31,  163 => 30,  159 => 29,  155 => 28,  151 => 27,  147 => 26,  143 => 25,  139 => 24,  130 => 18,  126 => 17,  116 => 9,  106 => 8,  87 => 5,  75 => 486,  73 => 471,  71 => 394,  69 => 96,  64 => 93,  62 => 43,  60 => 8,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<meta charset=\"UTF-8\">
<title>{% block title %}Welcome!{% endblock %}</title>
<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
{% block stylesheets %}
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Company Bootstrap Template - Index</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"{{ asset ('assets/img/favicon.png') }}\" rel=\"icon\">
    <link href={{ asset('assets/img/apple-touch-icon.png')}} rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"{{ asset('assets/vendor/animate.css/animate.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset ('assets/vendor/glightbox/css/glightbox.min.css')  }}\" rel=\"stylesheet\">
    <link href=\"{{ asset ('assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"{{ asset ('assets/css/style.css') }}\" rel=\"stylesheet\">

    <!-- =======================================================
    * Template Name: Company - v4.10.0
    * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
{% endblock %}
{% block Header %}
    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"fixed-top\">
        <div class=\"container d-flex align-items-center\">

            <a href=\"{{ asset ('index.html') }}\" class=\"logo me-auto me-lg-0\"><img src=\"{{ asset ('assets/img/logo.png') }}\" alt=\"\" class=\"img-fluid\"></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href=\"index.html\" class=\"logo me-auto me-lg-0\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

            <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
                <ul>
                    <li><a href=\"{{ asset ('index.html') }}\" class=\"active\">Home</a></li>

                    <li class=\"dropdown\"><a href=\"#\"><span>About</span> <i class=\"bi bi-chevron-down\"></i></a>
                        <ul>
                            <li><a href=\"{{ asset ('about.html') }}\">About Us</a></li>
                            <li><a href=\"{{ asset ('team.html') }}\">Team</a></li>
                            <li><a href=\"{{ asset ('testimonials.html') }}\">Testimonials</a></li>
                            <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
                                <ul>
                                    <li><a href=\"#\">Deep Drop Down 1</a></li>
                                    <li><a href=\"#\">Deep Drop Down 2</a></li>
                                    <li><a href=\"#\">Deep Drop Down 3</a></li>
                                    <li><a href=\"#\">Deep Drop Down 4</a></li>
                                    <li><a href=\"#\">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href=\"{{ asset ('services.html') }}\">Services</a></li>
                    <li><a href=\"{{ asset ('portfolio.html') }}\">Portfolio</a></li>
                    <li><a href=\"{{ asset ('pricing.html') }}\">Pricing</a></li>
                    <li><a href=\"{{ asset ('afficherrec') }}\">Reclamation</a></li>
                    <li><a href=\"{{ asset ('contact.html') }}\">Contact</a></li>

                </ul>
                <i class=\"bi bi-list mobile-nav-toggle\"></i>
            </nav><!-- .navbar -->

            <div class=\"header-social-links d-flex\">
                <a href=\"#\" class=\"twitter\"><i class=\"bu bi-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bu bi-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bu bi-instagram\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"bu bi-linkedin\"></i></a>
            </div>

        </div>
    </header><!-- End Header -->
{% endblock %}



{% block body %}
    <main id=\"main\">

        <!-- ======= About Us Section ======= -->
        <section id=\"about-us\" class=\"about-us\">
            <div class=\"container\" data-aos=\"fade-up\">

                <div class=\"row content\">
                    <div class=\"col-lg-6\" data-aos=\"fade-right\">
                        <h2>Eum ipsam laborum deleniti velitena</h2>
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
                    </div>
                    <div class=\"col-lg-6 pt-4 pt-lg-0\" data-aos=\"fade-left\">
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <ul>
                            <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                            <li><i class=\"ri-check-double-line\"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                            <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                        </ul>
                        <p class=\"fst-italic\">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id=\"services\" class=\"services section-bg\">
            <div class=\"container\" data-aos=\"fade-up\">

                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                        <div class=\"icon-box iconbox-blue\">
                            <div class=\"icon\">
                                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174\"></path>
                                </svg>
                                <i class=\"bx bxl-dribbble\"></i>
                            </div>
                            <h4><a href=\"\">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
                        <div class=\"icon-box iconbox-orange \">
                            <div class=\"icon\">
                                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426\"></path>
                                </svg>
                                <i class=\"bx bx-file\"></i>
                            </div>
                            <h4><a href=\"\">Sed Perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
                        <div class=\"icon-box iconbox-pink\">
                            <div class=\"icon\">
                                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781\"></path>
                                </svg>
                                <i class=\"bx bx-tachometer\"></i>
                            </div>
                            <h4><a href=\"\">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                        <div class=\"icon-box iconbox-yellow\">
                            <div class=\"icon\">
                                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813\"></path>
                                </svg>
                                <i class=\"bx bx-layer\"></i>
                            </div>
                            <h4><a href=\"\">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
                        <div class=\"icon-box iconbox-red\">
                            <div class=\"icon\">
                                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572\"></path>
                                </svg>
                                <i class=\"bx bx-slideshow\"></i>
                            </div>
                            <h4><a href=\"\">Dele Cardo</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
                        <div class=\"icon-box iconbox-teal\">
                            <div class=\"icon\">
                                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762\"></path>
                                </svg>
                                <i class=\"bx bx-arch\"></i>
                            </div>
                            <h4><a href=\"\">Divera Don</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id=\"portfolio\" class=\"portfolio\">
            <div class=\"container\">

                <div class=\"row\" data-aos=\"fade-up\">
                    <div class=\"col-lg-12 d-flex justify-content-center\">
                        <ul id=\"portfolio-flters\">
                            <li data-filter=\"*\" class=\"filter-active\">All</li>
                            <li data-filter=\".filter-app\">App</li>
                            <li data-filter=\".filter-card\">Card</li>
                            <li data-filter=\".filter-web\">Web</li>
                        </ul>
                    </div>
                </div>

                <div class=\"row portfolio-container\" data-aos=\"fade-up\">

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                        <img src=\"{{ asset ('assets/img/portfolio/portfolio-1.jpg') }}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href=\"{{ asset ('assets/img/portfolio/portfolio-1.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{ asset ('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                        <img src=\"{{ asset ('assets/img/portfolio/portfolio-2.jpg') }}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href=\"{{ asset ('assets/img/portfolio/portfolio-2.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{ asset ('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                        <img src=\"{{ asset ('assets/img/portfolio/portfolio-3.jpg') }}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href=\"{{ asset ('assets/img/portfolio/portfolio-3.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{ asset ('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                        <img src=\"{{ asset ('assets/img/portfolio/portfolio-4.jpg') }}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href=\"{{ asset ('assets/img/portfolio/portfolio-4.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{ asset ('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                        <img src=\"{{ asset ('assets/img/portfolio/portfolio-5.jpg') }}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href=\"{{ asset ('assets/img/portfolio/portfolio-5.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{ asset ('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                        <img src=\"{{ asset ('assets/img/portfolio/portfolio-6.jpg') }}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href=\"{{ asset ('assets/img/portfolio/portfolio-6.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{ asset ('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                        <img src=\"{{ asset ('assets/img/portfolio/portfolio-7.jpg') }}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href=\"{{ asset ('assets/img/portfolio/portfolio-7.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{ asset ('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
                        <img src=\"{{ asset ('assets/img/portfolio/portfolio-8.jpg') }}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href=\"{{ asset ('assets/img/portfolio/portfolio-8.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{ asset ('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
                        <img src=\"{{ asset ('assets/img/portfolio/portfolio-9.jpg') }}\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href=\"{{ asset ('assets/img/portfolio/portfolio-9.jpg') }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{ asset ('portfolio-details.html') }}\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id=\"clients\" class=\"clients\">
            <div class=\"container\" data-aos=\"fade-up\">

                <div class=\"section-title\">
                    <h2>Clients</h2>
                </div>

                <div class=\"row no-gutters clients-wrap clearfix\" data-aos=\"fade-up\">

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"{{ asset ('assets/img/clients/client-1.png') }}\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"{{ asset ('assets/img/clients/client-2.png') }}\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"{{ asset ('assets/img/clients/client-3.png') }}\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"{{ asset ('assets/img/clients/client-4.pngs') }}\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"{{ asset ('assets/img/clients/client-5.png') }}\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"{{ asset ('assets/img/clients/client-6.png') }}\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"{{ asset ('assets/img/clients/client-7.png') }}\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <div class=\"client-logo\">
                            <img src=\"{{ asset ('assets/img/clients/client-8.png') }}\" class=\"img-fluid\" alt=\"\">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Our Clients Section -->

    </main><!-- End #main -->
{% endblock %}
{% block footer %}
    <!-- ======= Footer ======= -->
    <footer id=\"footer\">

        <div class=\"footer-top\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-3 col-md-6 footer-contact\">
                        <h3>Company</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class=\"col-lg-2 col-md-6 footer-links\">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Home</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">About us</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class=\"col-lg-3 col-md-6 footer-links\">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class=\"col-lg-4 col-md-6 footer-newsletter\">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action=\"\" method=\"post\">
                            <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"container d-md-flex py-4\">

            <div class=\"me-md-auto text-center text-md-start\">
                <div class=\"copyright\">
                    &copy; Copyright <strong><span>Company</span></strong>. All Rights Reserved
                </div>
                <div class=\"credits\">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
                    Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
                </div>
            </div>
            <div class=\"social-links text-center text-md-right pt-3 pt-md-0\">
                <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->
{% endblock %}
{% block javascripts %}
    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

    <!-- Vendor JS Files -->
    <script src=\"{{ asset ('assets/vendor/aos/aos.js') }}\"></script>
    <script src=\"{{ asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset ('assets/vendor/glightbox/js/glightbox.min.js') }}\"></script>
    <script src=\"{{ asset ('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset ('assets/vendor/swiper/swiper-bundle.min.js') }}\"></script>
    <script src=\"{{ asset ('assets/vendor/waypoints/noframework.waypoints.js') }}\"></script>
    <script src=\"{{ asset ('assets/vendor/php-email-form/validate.js') }}\"></script>

    <!-- Template Main JS File -->
    <script src=\"{{ asset ('assets/js/main.js') }}\"></script>
{% endblock %}

</html>
", "frontrec.html.twig", "C:\\xampp1\\htdocs\\reclamtion\\templates\\frontrec.html.twig");
    }
}
