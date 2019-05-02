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

/* pizzas.html.twig */
class __TwigTemplate_b28abb47491a0348cacb258dd5cb28c83c955390afc43e14dea0a62ccb3d18ef extends \Twig\Template
{
    private $source;

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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pizzas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pizzas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<ul>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pizzas"]) || array_key_exists("pizzas", $context) ? $context["pizzas"] : (function () { throw new RuntimeError('Variable "pizzas" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 9
            echo "    <li>";
            echo twig_escape_filter($this->env, $context["pizza"], "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>

<!-- Header with background image -->
<header id=\"bg-about\" class=\"bg-section container-fluid\">
  <div class=\"row\">
    <!-- Content -->
    <div class=\"container py-header-section\">
      <div class=\"row\">
        <!-- Responsive col -->
        <div class=\"col-10 col-lg-8 mx-auto \">
          <!-- Header text -->
          <p class=\"bg-title text-center text-white\">
            Actualités
          </p>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End Header -->

<main>
  <!-- News section -->
  <div class=\"container py-section\">

    <!-- First article -->
    <div class=\"row article-container\">
      <!-- Article image -->
      <div class=\"col-10 col-md-4 mx-auto\">
        <img class=\"w-100 imgscale\" src=\"assets/img/articles/airbus-naia2019.jpg\" alt=\"\">
      </div>

      <!-- Article informations -->
      <div id=\"airbus\" class=\"col-10 col-md-8 mx-auto mt-3 mt-md-0 d-flex flex-column align-items-end\">
        <div>
          <!-- Article title and link -->
\t\t<h6 class=\"title-3 color-2\">
              Airbus Développement soutient Kipers Industries
          </h6>


          <!-- Article synop. -->
          <p class=\"mt-3\" align=\"justify\">
            C’est avec grand plaisir que Kipers Industries vient de recevoir une subvention de Airbus Développement lors du salon NAIA 2019.
\t\t  Partenaire clef de la technopole Bordeaux Technowest, Airbus Développement s’engage dans une démarche de revitalisation du tissu
\t\t  industriel local et de création d’emplois. Nous sommes vraiment heureux et reconnaissants pour ce témoignage de confiance ! C’est également
\t\t  l’occasion de remercier à nouveau la technopole Bordeaux Technowest pour son engagement au quotidien.
          </p>
        </div>

        <!-- Article Author -->
        <span class=\"bg-secondary text-white p-2 mt-3\">
          19/03/2019
        </span>
      </div>

      <!-- Splitter -->
      <hr class=\"w-100 my-5\">
    </div>

    <!-- Second article -->
    <div class=\"row article-container\">
      <!-- Article image -->
      <div class=\"col-10 col-md-4 mx-auto\">
        <img class=\"w-100 imgscale\" src=\"assets/img/articles/vplse.jpeg\" alt=\"\">
      </div>

      <!-- Article informations -->
      <div id=\"vplse\" class=\"col-10 col-md-8 mx-auto mt-3 mt-md-0 d-flex flex-column align-items-end\">
        <div>
          <!-- Article title and link -->
\t\t<h6 class=\"title-3 color-2\">
              VPLSE nous accorde sa confiance
          </h6>

          <!-- Article synop. -->
          <p class=\"mt-3\" align=\"justify\">
            Les vignerons de Puisseguin Lussac Saint-Emilion ont choisi Kipers Industries pour les accompagner dans leur démarche d'amélioration de leurs lignes d'embouteillage. Nous mettons à leur service toute notre expertise afin de donner corps à leur projet d'innovation :<br>
            - sensibilisation des opérateurs aux notions de gaspillages, d’amélioration des performances, de maîtrise des flux, et d’optimisation des stratégies de maintenance,<br>
            - analyse et valorisation des données pour un suivi des performances de production / maintenance toujours plus poussé,<br>
            - surveillance de l'état de santé des machines et maintenance prédictive (logiciel Kipers Prognostics).<br>
            Nous les remercions chaleureusement d'avoir été les premiers à nous faire confiance.
          </p>
        </div>

        <!-- Article Author -->
        <span class=\"bg-secondary text-white p-2 mt-3\">
          19/11/2018
        </span>
      </div>

      <!-- Splitter -->
      <hr class=\"w-100 my-5\">
    </div>

    <!-- Third article -->
    <div class=\"row article-container\">
      <!-- Article image -->
      <div class=\"col-10 col-md-4 mx-auto\">
        <img class=\"w-100 imgscale\" src=\"assets/img/articles/vinitech.jpeg\" alt=\"\">
      </div>

      <!-- Article informations -->
      <div id=\"vinitech\" class=\"col-10 col-md-8 mx-auto mt-3 mt-md-0 d-flex flex-column align-items-end\">
        <div>

          <!-- Article title and link -->
          <h6 class=\"title-3 color-2\">
              Vinitech Sifel 2018
          </h6>

          <!-- Article synop. -->
          <p class=\"mt-3\" align=\"justify\">
            Kipers Industries, start-up dans le domaine de la maintenance prédictive, sera présente au salon Vinitech-Sifel,
\t\t  biennale internationale des filières vitivinicole et fruits et légumes, qui se tient du 20 au 22 novembre au Parc des Expositions de Bordeaux.
          </p>

\t\t<a href=\"assets/pdf/cpvinitech2018.pdf\">
            <p>
              Voir le communiqué de presse
            <p>
          </a>
        </div>

        <!-- Article Author -->
        <span class=\"bg-secondary text-white p-2 mt-3\">
          19/11/2018
        </span>
      </div>

      <!-- Splitter -->
      <hr class=\"w-100 my-5\">
    </div>

    <!-- Four article -->
    <div class=\"row article-container\">
      <!-- Article image -->
      <div class=\"col-10 col-md-4 mx-auto\">
        <img class=\"w-100 imgscale\" src=\"assets/img/articles/agriso2.jpg\" alt=\"\">
      </div>

      <!-- Article informations -->
      <div class=\"col-10 col-md-8 mx-auto mt-3 mt-md-0 d-flex flex-column align-items-end\">
        <div>
          <!-- Article title and link -->
          <h6 class=\"title-3 color-2\">
              Webinaire Kipers Industries le 30/10/2018
          </h6>

          <!-- Article synop. -->
          <p class=\"mt-3\" align=\"justify\">
            Le 30 octobre prochain (11h-12h), en partenariat avec le Pôle Agri Sud-Ouest Innovation, j'aurai le plaisir d'animer un webinaire sur les enjeux et principes de la maintenance prédictive.<br>

            J'y aborderai notamment les aspects en lien avec :
            - les motivations industrielles qui sous-tendent cette évolution des pratiques,
            - les fondements méthodologiques et techniques de la maintenance prédictive,
            - les bénéfices qui peuvent en être tirés.
            Des exemples illustratifs permettront naturellement d'étayer les discussions.<br>

            Ce sera également l'occasion de vous exposer la perception de Kipers Industries quant au positionnement de la maintenance prédictive au sein de la grande thématique de l'industrie 4.0.<br>

            Si vous menez une réflexion sur l'analyse prédictive des performances de votre ligne d'embouteillage et de conditionnement, ce webinaire peut vous intéresser ! Ouvert à tous les curieux ; n'hésitez pas à vous inscrire :
            https://lnkd.in/giSdMXH<br><br>

\t\t  Rafael Gouriveau
          </p>
        </div>

        <!-- Article Author -->
        <span class=\"bg-secondary text-white p-2 mt-3\">
          10/10/2018
        </span>
      </div>

      <!-- Splitter -->
      <hr class=\"w-100 my-5\">
    </div>
  </div>
  <!-- End News section -->
</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pizzas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 11,  77 => 9,  73 => 8,  69 => 6,  63 => 5,  51 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Welcome !{% endblock %}

{% block body %}

<ul>
{% for pizza in pizzas %}
    <li>{{ pizza }}</li>
{% endfor %}
</ul>

<!-- Header with background image -->
<header id=\"bg-about\" class=\"bg-section container-fluid\">
  <div class=\"row\">
    <!-- Content -->
    <div class=\"container py-header-section\">
      <div class=\"row\">
        <!-- Responsive col -->
        <div class=\"col-10 col-lg-8 mx-auto \">
          <!-- Header text -->
          <p class=\"bg-title text-center text-white\">
            Actualités
          </p>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End Header -->

<main>
  <!-- News section -->
  <div class=\"container py-section\">

    <!-- First article -->
    <div class=\"row article-container\">
      <!-- Article image -->
      <div class=\"col-10 col-md-4 mx-auto\">
        <img class=\"w-100 imgscale\" src=\"assets/img/articles/airbus-naia2019.jpg\" alt=\"\">
      </div>

      <!-- Article informations -->
      <div id=\"airbus\" class=\"col-10 col-md-8 mx-auto mt-3 mt-md-0 d-flex flex-column align-items-end\">
        <div>
          <!-- Article title and link -->
\t\t<h6 class=\"title-3 color-2\">
              Airbus Développement soutient Kipers Industries
          </h6>


          <!-- Article synop. -->
          <p class=\"mt-3\" align=\"justify\">
            C’est avec grand plaisir que Kipers Industries vient de recevoir une subvention de Airbus Développement lors du salon NAIA 2019.
\t\t  Partenaire clef de la technopole Bordeaux Technowest, Airbus Développement s’engage dans une démarche de revitalisation du tissu
\t\t  industriel local et de création d’emplois. Nous sommes vraiment heureux et reconnaissants pour ce témoignage de confiance ! C’est également
\t\t  l’occasion de remercier à nouveau la technopole Bordeaux Technowest pour son engagement au quotidien.
          </p>
        </div>

        <!-- Article Author -->
        <span class=\"bg-secondary text-white p-2 mt-3\">
          19/03/2019
        </span>
      </div>

      <!-- Splitter -->
      <hr class=\"w-100 my-5\">
    </div>

    <!-- Second article -->
    <div class=\"row article-container\">
      <!-- Article image -->
      <div class=\"col-10 col-md-4 mx-auto\">
        <img class=\"w-100 imgscale\" src=\"assets/img/articles/vplse.jpeg\" alt=\"\">
      </div>

      <!-- Article informations -->
      <div id=\"vplse\" class=\"col-10 col-md-8 mx-auto mt-3 mt-md-0 d-flex flex-column align-items-end\">
        <div>
          <!-- Article title and link -->
\t\t<h6 class=\"title-3 color-2\">
              VPLSE nous accorde sa confiance
          </h6>

          <!-- Article synop. -->
          <p class=\"mt-3\" align=\"justify\">
            Les vignerons de Puisseguin Lussac Saint-Emilion ont choisi Kipers Industries pour les accompagner dans leur démarche d'amélioration de leurs lignes d'embouteillage. Nous mettons à leur service toute notre expertise afin de donner corps à leur projet d'innovation :<br>
            - sensibilisation des opérateurs aux notions de gaspillages, d’amélioration des performances, de maîtrise des flux, et d’optimisation des stratégies de maintenance,<br>
            - analyse et valorisation des données pour un suivi des performances de production / maintenance toujours plus poussé,<br>
            - surveillance de l'état de santé des machines et maintenance prédictive (logiciel Kipers Prognostics).<br>
            Nous les remercions chaleureusement d'avoir été les premiers à nous faire confiance.
          </p>
        </div>

        <!-- Article Author -->
        <span class=\"bg-secondary text-white p-2 mt-3\">
          19/11/2018
        </span>
      </div>

      <!-- Splitter -->
      <hr class=\"w-100 my-5\">
    </div>

    <!-- Third article -->
    <div class=\"row article-container\">
      <!-- Article image -->
      <div class=\"col-10 col-md-4 mx-auto\">
        <img class=\"w-100 imgscale\" src=\"assets/img/articles/vinitech.jpeg\" alt=\"\">
      </div>

      <!-- Article informations -->
      <div id=\"vinitech\" class=\"col-10 col-md-8 mx-auto mt-3 mt-md-0 d-flex flex-column align-items-end\">
        <div>

          <!-- Article title and link -->
          <h6 class=\"title-3 color-2\">
              Vinitech Sifel 2018
          </h6>

          <!-- Article synop. -->
          <p class=\"mt-3\" align=\"justify\">
            Kipers Industries, start-up dans le domaine de la maintenance prédictive, sera présente au salon Vinitech-Sifel,
\t\t  biennale internationale des filières vitivinicole et fruits et légumes, qui se tient du 20 au 22 novembre au Parc des Expositions de Bordeaux.
          </p>

\t\t<a href=\"assets/pdf/cpvinitech2018.pdf\">
            <p>
              Voir le communiqué de presse
            <p>
          </a>
        </div>

        <!-- Article Author -->
        <span class=\"bg-secondary text-white p-2 mt-3\">
          19/11/2018
        </span>
      </div>

      <!-- Splitter -->
      <hr class=\"w-100 my-5\">
    </div>

    <!-- Four article -->
    <div class=\"row article-container\">
      <!-- Article image -->
      <div class=\"col-10 col-md-4 mx-auto\">
        <img class=\"w-100 imgscale\" src=\"assets/img/articles/agriso2.jpg\" alt=\"\">
      </div>

      <!-- Article informations -->
      <div class=\"col-10 col-md-8 mx-auto mt-3 mt-md-0 d-flex flex-column align-items-end\">
        <div>
          <!-- Article title and link -->
          <h6 class=\"title-3 color-2\">
              Webinaire Kipers Industries le 30/10/2018
          </h6>

          <!-- Article synop. -->
          <p class=\"mt-3\" align=\"justify\">
            Le 30 octobre prochain (11h-12h), en partenariat avec le Pôle Agri Sud-Ouest Innovation, j'aurai le plaisir d'animer un webinaire sur les enjeux et principes de la maintenance prédictive.<br>

            J'y aborderai notamment les aspects en lien avec :
            - les motivations industrielles qui sous-tendent cette évolution des pratiques,
            - les fondements méthodologiques et techniques de la maintenance prédictive,
            - les bénéfices qui peuvent en être tirés.
            Des exemples illustratifs permettront naturellement d'étayer les discussions.<br>

            Ce sera également l'occasion de vous exposer la perception de Kipers Industries quant au positionnement de la maintenance prédictive au sein de la grande thématique de l'industrie 4.0.<br>

            Si vous menez une réflexion sur l'analyse prédictive des performances de votre ligne d'embouteillage et de conditionnement, ce webinaire peut vous intéresser ! Ouvert à tous les curieux ; n'hésitez pas à vous inscrire :
            https://lnkd.in/giSdMXH<br><br>

\t\t  Rafael Gouriveau
          </p>
        </div>

        <!-- Article Author -->
        <span class=\"bg-secondary text-white p-2 mt-3\">
          10/10/2018
        </span>
      </div>

      <!-- Splitter -->
      <hr class=\"w-100 my-5\">
    </div>
  </div>
  <!-- End News section -->
</main>

{% endblock %}
", "pizzas.html.twig", "C:\\Users\\Yoann\\Documents\\1. Yoann\\serveur web\\symfony\\symfony\\templates\\pizzas.html.twig");
    }
}
