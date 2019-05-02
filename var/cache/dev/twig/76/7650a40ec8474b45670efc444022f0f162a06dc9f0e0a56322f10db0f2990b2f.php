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

/* base.html.twig */
class __TwigTemplate_b659c15ef3ad0ff7cdd7e700276c442c1ec295479e491a69c6535a70eb565617 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" dir=\"ltr\">

  <head>
    <!-- GENERAL -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- TITLE PAGE -->
    <title>
      ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "    </title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    <!-- JS -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- <script src=\"https://cdn.jsdelivr.net/npm/chart.js@2.8.0\"></script> -->
    <!-- JS : Cookie Consent -->
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js\"></script>
    <script>
      window.addEventListener(\"load\", function() {
        window.cookieconsent.initialise({
          \"palette\": {
            \"popup\": {
              \"background\": \"#fff\"
            },
            \"button\": {
              \"background\": \"#082947\"
            }
          },
          \"content\": {
            \"message\": \"Ce site n'utilise pas les cookies et nous ne collectons pas vos informations. Le flux de visiteurs est enregistré par le module Google analytics.\",
            \"href\": \"https://privacy.google.com/businesses/compliance/#!?modal_active=none\",
            \"dismiss\": \"Compris&nbsp;!\",
            \"link\": \"En savoir plus\",
            \"target\": \"_blank\"
          }
        })
      });
    </script>
  </head>

  <body>
    <!-- Navigation bar -->
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\">
      <!-- Navigation logo -->
      <a href=\"/index.php\">
        <img class=\"d-none d-md-block\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logos/logo_white.png"), "html", null, true);
        echo "\" alt=\"Kipers Logo in White Version\">
        <img class=\"d-block d-md-none\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logos/logo_white.png"), "html", null, true);
        echo "\" alt=\"Little Kipers Logo in White Version\">
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse justify-content-end align-items-center\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav align-items-start align-items-lg-center\">
          <!-- Home -->
          <li class=\"list-unstyled m-3\">
            <a class=\"text-white\" href=\"/index.php\">
              Accueil
            </a>
          </li>

          <!-- Simulateur -->
          <li class=\"list-unstyled m-3\">
            <a class=\"text-white\" href=\"/simulation.php\">
              Simulateur
            </a>
          </li>

          <!-- Solution -->
          <li class=\"list-unstyled m-3\">
            <a class=\"text-white\" href=\"/solution.php\">
              Solutions
            </a>
          </li>

          <!-- News -->
          <li class=\"list-unstyled m-3\">
            <a class=\"text-white\" href=\"/actu.php\">
              Actualités
            </a>
          </li>

          <!-- About us -->
          <li class=\"list-unstyled m-3\">
            <a class=\"text-white\" href=\"/about.php\">
              A propos</a>
          </li>

          <!-- Contact -->
          <li class=\"list-unstyled m-3\">
            <a class=\"text-white\" href=\"/contact.php\">
              Contactez-nous</a>
          </li>

          <!-- Client login -->
          <li class=\"list-unstyled\">
            <a class=\"btn btn-secondary px-4 py-2\" href=\"#\">Connexion</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navigation bar -->

    ";
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 112
        echo "
    <!-- Footer -->
    <footer class=\"py-5 bg-secondary\">
      <div class=\"container\">
        <div class=\"row justify-content-center justify-content-md-start mx-auto mx-md-0\">
          <!-- Navigation section -->
          <div class=\"col-10 col-md-6 col-lg-3 text-center text-md-left\">
            <!-- Navigation title -->
            <h5 class=\"title-2 text-capitalize\">
              <span class=\"underline underline-main\">
                Navigation
              </span>
            </h5>
            <!-- Navigation Hyperlinks -->
            <ul class=\"p-0\">
              <!-- Home -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"/index.php\">
                  Accueil
                </a>
              </li>

              <!-- Simulateur -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"/simulation.php\">
                  Simulateur
                </a>
              </li>

              <!-- Our solution -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"/solution.php\">
                  Solutions
                </a>
              </li>

              <!-- News -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"/actu.php\">
                  Actualités
                </a>
              </li>

              <!-- About us -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"/about.php\">
                  A propos
                </a>
              </li>

              <!-- Contact -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"/contact.php\">
                  Contactez-nous
                </a>
              </li>

              <!-- Client login -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"#\">
                  Connexion
                </a>
              </li>

              <!-- Site plan -->
              <!-- <li class=\"list-unstyled\"> <a class=\"text-white\" class=\"text-white\" href=\"#\"> Plan du site </a> </li> -->

              <!-- Careers -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"https://kipers-industries.welcomekit.co/\">
                  Rejoignez-nous
                </a>
              </li>
            </ul>
          </div>

          <!-- Expertise section -->
          <div class=\"col-4 d-none\">
            <!-- Expertise title -->
            <h5 class=\"title-2 text-capitalize\">
              <span class=\"underline underline-main\">
                Expertise
              </span>
            </h5>
            <!-- Expertise Hyperlinks -->
            <ul class=\"p-0\">
              <!-- Viticulture -->
              <li class=\"list-unstyled\">
                <a class=\"text-capitalize text-white\" href=\"#\">
                  Viticulture
                </a>
              </li>
              <!-- Agroalimentaire -->
              <!-- <li class=\"list-unstyled\"> <a class=\"text-capitalize text-white\" href=\"#\"> Agroalimentaire </a> </li> -->
            </ul>
          </div>

          <!-- Social networks section -->
          <div class=\"col-10 col-md-6 col-lg-6\">
            <!-- Social networks title -->
            <h5 class=\"title-2 text-capitalize text-center text-md-left\">
              <span class=\"underline underline-main\"></span>
            </h5>

          </div>

          <div class=\"col-12 col-lg-3 flex-column d-flex align-items-center\">
            <div>
              <img class=\"d-block w-100\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logos/logo_white.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"infos\">
              <p class=\"text-white\">
                Pépinière Newton
                <br>
                213 Cours Victor Hugo
                <br>
                33130 Bègles
              </p>
            </div>
            <!-- Contact link -->
            <a class=\"btn btn-primary mx-auto\" href=\"/contact.php\">
              Contactez-nous
            </a>
            <!-- Social networks Hyperlinks -->
            <ul class=\"p-0 d-flex mt-3\">
              <!-- Twitter -->
              <li class=\"list-unstyled mx-2\">
                <a class=\"text-capitalize text-white\" href=\"#\">
                  <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/rs/twitter.svg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
              </li>

              <!-- Linkedin -->
              <li class=\"list-unstyled mx-2\">
                <a class=\"text-capitalize text-white\" href=\"#\">
                  <img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/rs/linkedin.svg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
              </li>
            </ul>
          </div>

        </div>

        <!-- All right reserved -->
        <div class=\"row mt-5\">
          <p class=\"w-100 text-center text-white mb-1\">
            &copy; Kipers Industries 2019. Tous droits réservés.
          </p>
        </div>

        <!-- Legal mentions & Site plan -->
        <div class=\"row text-white mx-auto text-center\">
          <p class=\"w-100 text-center text-white mb-3\">
            <a class=\"text-white\" href=\"#\">
              Mentions légales
            </a>
            <!-- <span> | </span> -->
            <!-- <a class=\"text-white\" href=\"#\">Plan du site</a> -->
          </p>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    ";
        // line 276
        $this->displayBlock('javascripts', $context, $blocks);
        // line 294
        echo "
  </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Kipers Industries - Le Prognostics & Health Management au service des industriels.";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "      <!-- CSS -->
      <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
      <!-- CSS : Cookie Consent -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css\"/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 111
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 276
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 277
        echo "      <script>
        window.onscroll = function() {
          myFunction()
        };

        var element = document.querySelector(\"main\");
        var sticky = element.offsetTop;

        function myFunction() {
          if (window.pageYOffset > sticky) {
            \$(\"nav\").addClass(\"scrolled\");
          } else {
            \$(\"nav\").removeClass(\"scrolled\");
          }
        }
      </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 277,  399 => 276,  388 => 111,  377 => 15,  373 => 14,  370 => 13,  364 => 12,  352 => 10,  342 => 294,  340 => 276,  308 => 247,  298 => 240,  275 => 220,  165 => 112,  163 => 111,  103 => 54,  99 => 53,  64 => 21,  60 => 19,  58 => 12,  55 => 11,  53 => 10,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\" dir=\"ltr\">

  <head>
    <!-- GENERAL -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- TITLE PAGE -->
    <title>
      {% block title %}Kipers Industries - Le Prognostics & Health Management au service des industriels.{% endblock %}
    </title>
    {% block stylesheets %}
      <!-- CSS -->
      <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
      <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\">
      <!-- CSS : Cookie Consent -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css\"/>
    {% endblock %}
    <!-- JS -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
    <!-- <script src=\"https://cdn.jsdelivr.net/npm/chart.js@2.8.0\"></script> -->
    <!-- JS : Cookie Consent -->
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js\"></script>
    <script>
      window.addEventListener(\"load\", function() {
        window.cookieconsent.initialise({
          \"palette\": {
            \"popup\": {
              \"background\": \"#fff\"
            },
            \"button\": {
              \"background\": \"#082947\"
            }
          },
          \"content\": {
            \"message\": \"Ce site n'utilise pas les cookies et nous ne collectons pas vos informations. Le flux de visiteurs est enregistré par le module Google analytics.\",
            \"href\": \"https://privacy.google.com/businesses/compliance/#!?modal_active=none\",
            \"dismiss\": \"Compris&nbsp;!\",
            \"link\": \"En savoir plus\",
            \"target\": \"_blank\"
          }
        })
      });
    </script>
  </head>

  <body>
    <!-- Navigation bar -->
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\">
      <!-- Navigation logo -->
      <a href=\"/index.php\">
        <img class=\"d-none d-md-block\" src=\"{{ asset('assets/img/logos/logo_white.png') }}\" alt=\"Kipers Logo in White Version\">
        <img class=\"d-block d-md-none\" src=\"{{ asset('assets/img/logos/logo_white.png') }}\" alt=\"Little Kipers Logo in White Version\">
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse justify-content-end align-items-center\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav align-items-start align-items-lg-center\">
          <!-- Home -->
          <li class=\"list-unstyled m-3\">
            <a class=\"text-white\" href=\"/index.php\">
              Accueil
            </a>
          </li>

          <!-- Simulateur -->
          <li class=\"list-unstyled m-3\">
            <a class=\"text-white\" href=\"/simulation.php\">
              Simulateur
            </a>
          </li>

          <!-- Solution -->
          <li class=\"list-unstyled m-3\">
            <a class=\"text-white\" href=\"/solution.php\">
              Solutions
            </a>
          </li>

          <!-- News -->
          <li class=\"list-unstyled m-3\">
            <a class=\"text-white\" href=\"/actu.php\">
              Actualités
            </a>
          </li>

          <!-- About us -->
          <li class=\"list-unstyled m-3\">
            <a class=\"text-white\" href=\"/about.php\">
              A propos</a>
          </li>

          <!-- Contact -->
          <li class=\"list-unstyled m-3\">
            <a class=\"text-white\" href=\"/contact.php\">
              Contactez-nous</a>
          </li>

          <!-- Client login -->
          <li class=\"list-unstyled\">
            <a class=\"btn btn-secondary px-4 py-2\" href=\"#\">Connexion</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navigation bar -->

    {% block body %}{% endblock %}

    <!-- Footer -->
    <footer class=\"py-5 bg-secondary\">
      <div class=\"container\">
        <div class=\"row justify-content-center justify-content-md-start mx-auto mx-md-0\">
          <!-- Navigation section -->
          <div class=\"col-10 col-md-6 col-lg-3 text-center text-md-left\">
            <!-- Navigation title -->
            <h5 class=\"title-2 text-capitalize\">
              <span class=\"underline underline-main\">
                Navigation
              </span>
            </h5>
            <!-- Navigation Hyperlinks -->
            <ul class=\"p-0\">
              <!-- Home -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"/index.php\">
                  Accueil
                </a>
              </li>

              <!-- Simulateur -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"/simulation.php\">
                  Simulateur
                </a>
              </li>

              <!-- Our solution -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"/solution.php\">
                  Solutions
                </a>
              </li>

              <!-- News -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"/actu.php\">
                  Actualités
                </a>
              </li>

              <!-- About us -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"/about.php\">
                  A propos
                </a>
              </li>

              <!-- Contact -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"/contact.php\">
                  Contactez-nous
                </a>
              </li>

              <!-- Client login -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"#\">
                  Connexion
                </a>
              </li>

              <!-- Site plan -->
              <!-- <li class=\"list-unstyled\"> <a class=\"text-white\" class=\"text-white\" href=\"#\"> Plan du site </a> </li> -->

              <!-- Careers -->
              <li class=\"list-unstyled\">
                <a class=\"text-white\" href=\"https://kipers-industries.welcomekit.co/\">
                  Rejoignez-nous
                </a>
              </li>
            </ul>
          </div>

          <!-- Expertise section -->
          <div class=\"col-4 d-none\">
            <!-- Expertise title -->
            <h5 class=\"title-2 text-capitalize\">
              <span class=\"underline underline-main\">
                Expertise
              </span>
            </h5>
            <!-- Expertise Hyperlinks -->
            <ul class=\"p-0\">
              <!-- Viticulture -->
              <li class=\"list-unstyled\">
                <a class=\"text-capitalize text-white\" href=\"#\">
                  Viticulture
                </a>
              </li>
              <!-- Agroalimentaire -->
              <!-- <li class=\"list-unstyled\"> <a class=\"text-capitalize text-white\" href=\"#\"> Agroalimentaire </a> </li> -->
            </ul>
          </div>

          <!-- Social networks section -->
          <div class=\"col-10 col-md-6 col-lg-6\">
            <!-- Social networks title -->
            <h5 class=\"title-2 text-capitalize text-center text-md-left\">
              <span class=\"underline underline-main\"></span>
            </h5>

          </div>

          <div class=\"col-12 col-lg-3 flex-column d-flex align-items-center\">
            <div>
              <img class=\"d-block w-100\" src=\"{{ asset('assets/img/logos/logo_white.png') }}\" alt=\"\">
            </div>
            <div class=\"infos\">
              <p class=\"text-white\">
                Pépinière Newton
                <br>
                213 Cours Victor Hugo
                <br>
                33130 Bègles
              </p>
            </div>
            <!-- Contact link -->
            <a class=\"btn btn-primary mx-auto\" href=\"/contact.php\">
              Contactez-nous
            </a>
            <!-- Social networks Hyperlinks -->
            <ul class=\"p-0 d-flex mt-3\">
              <!-- Twitter -->
              <li class=\"list-unstyled mx-2\">
                <a class=\"text-capitalize text-white\" href=\"#\">
                  <img src=\"{{ asset('assets/img/rs/twitter.svg') }}\" alt=\"\">
                </a>
              </li>

              <!-- Linkedin -->
              <li class=\"list-unstyled mx-2\">
                <a class=\"text-capitalize text-white\" href=\"#\">
                  <img src=\"{{ asset('assets/img/rs/linkedin.svg') }}\" alt=\"\">
                </a>
              </li>
            </ul>
          </div>

        </div>

        <!-- All right reserved -->
        <div class=\"row mt-5\">
          <p class=\"w-100 text-center text-white mb-1\">
            &copy; Kipers Industries 2019. Tous droits réservés.
          </p>
        </div>

        <!-- Legal mentions & Site plan -->
        <div class=\"row text-white mx-auto text-center\">
          <p class=\"w-100 text-center text-white mb-3\">
            <a class=\"text-white\" href=\"#\">
              Mentions légales
            </a>
            <!-- <span> | </span> -->
            <!-- <a class=\"text-white\" href=\"#\">Plan du site</a> -->
          </p>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    {% block javascripts %}
      <script>
        window.onscroll = function() {
          myFunction()
        };

        var element = document.querySelector(\"main\");
        var sticky = element.offsetTop;

        function myFunction() {
          if (window.pageYOffset > sticky) {
            \$(\"nav\").addClass(\"scrolled\");
          } else {
            \$(\"nav\").removeClass(\"scrolled\");
          }
        }
      </script>
    {% endblock %}

  </body>
</html>
", "base.html.twig", "C:\\Users\\Yoann\\Documents\\1. Yoann\\serveur web\\symfony\\symfony\\templates\\base.html.twig");
    }
}
