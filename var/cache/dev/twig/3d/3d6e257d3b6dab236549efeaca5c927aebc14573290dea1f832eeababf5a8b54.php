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

/* security/login.html.twig */
class __TwigTemplate_13f091cf76f165eb19cdec4e58b9fcead1e3205246e29c549f8847502ad0c90d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<!-- ======= Hero Section ======= -->
\t<section id=\"hero\">
\t\t<div id=\"heroCarousel\" data-bs-interval=\"5000\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">

\t\t\t<ol class=\"carousel-indicators\" id=\"hero-carousel-indicators\"></ol>

\t\t\t<div
\t\t\t\tclass=\"carousel-inner\" role=\"listbox\">

\t\t\t\t<!-- Slide 1 -->
\t\t\t\t<div class=\"carousel-item active\" style=\"background-image: url(assets/img/slide/slide-1.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Indentification</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slide 2 -->
\t\t\t\t<div class=\"carousel-item\" style=\"background-image: url(assets/img/slide/slide-2.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Connexion</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slide 3 -->
\t\t\t\t<div class=\"carousel-item\" style=\"background-image: url(assets/img/slide/slide-3.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Connexion</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<a class=\"carousel-control-prev\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t</a>

\t\t\t<a class=\"carousel-control-next\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t</a>

\t\t</div>
\t</section>
\t<!-- End Hero -->
\t<form method=\"post\">
\t\t";
        // line 58
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 58, $this->source); })())) {
            // line 59
            echo "\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 59, $this->source); })()), "messageKey", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 59, $this->source); })()), "messageData", [], "any", false, false, false, 59), "security"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 61
        echo "
\t\t";
        // line 62
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62)) {
            // line 63
            echo "\t\t\t<div class=\"mb-3 mt-3\">
\t\t\t\tVous êtes connecté en tant que
\t\t\t\t";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "username", [], "any", false, false, false, 65), "html", null, true);
            echo ",
\t\t\t\t<a href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a>
\t\t\t</div>
\t\t";
        }
        // line 69
        echo "
\t\t<section id=\"appointment\" class=\"appointment section-bg\">
\t\t\t<div class=\"container\" data-aos=\"fade-up\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>Veuillez vous connceter</h2>
\t\t\t\t</div>
\t\t\t\t<label for=\"inputEmail\"></label>
\t\t\t\t<center><input type=\"email\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control w-50\" autocomplete=\"email\" required autofocus placeholder=\"Email\"></center>
\t\t\t\t<label for=\"inputPassword\"></label>
\t\t\t\t<center><input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control w-50\" autocomplete=\"current-password\" required placeholder=\"Password\"></center>

\t\t\t\t<input
\t\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">


\t\t\t\t";
        // line 94
        echo "\t\t\t\t<center><button class=\"btn btn-lg btn-primary mb-5 mt-5\" type=\"submit\">
\t\t\t\t\tS'identifier
\t\t\t\t</button>
\t\t\t\t</center
\t\t\t\t<P> Si vous êtes nouveau sur la plateforme veullez cliquer ici  <a href=\"/register\"> S'inscrire </a> </p>
\t\t\t</div>
\t\t</section>
\t</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 94,  186 => 81,  178 => 76,  169 => 69,  163 => 66,  159 => 65,  155 => 63,  153 => 62,  150 => 61,  144 => 59,  142 => 58,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!
{% endblock %}

{% block body %}

\t<!-- ======= Hero Section ======= -->
\t<section id=\"hero\">
\t\t<div id=\"heroCarousel\" data-bs-interval=\"5000\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">

\t\t\t<ol class=\"carousel-indicators\" id=\"hero-carousel-indicators\"></ol>

\t\t\t<div
\t\t\t\tclass=\"carousel-inner\" role=\"listbox\">

\t\t\t\t<!-- Slide 1 -->
\t\t\t\t<div class=\"carousel-item active\" style=\"background-image: url(assets/img/slide/slide-1.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Indentification</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slide 2 -->
\t\t\t\t<div class=\"carousel-item\" style=\"background-image: url(assets/img/slide/slide-2.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Connexion</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slide 3 -->
\t\t\t\t<div class=\"carousel-item\" style=\"background-image: url(assets/img/slide/slide-3.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Connexion</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<a class=\"carousel-control-prev\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t</a>

\t\t\t<a class=\"carousel-control-next\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t</a>

\t\t</div>
\t</section>
\t<!-- End Hero -->
\t<form method=\"post\">
\t\t{% if error %}
\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t{% endif %}

\t\t{% if app.user %}
\t\t\t<div class=\"mb-3 mt-3\">
\t\t\t\tVous êtes connecté en tant que
\t\t\t\t{{ app.user.username }},
\t\t\t\t<a href=\"{{ path('app_logout') }}\">Se déconnecter</a>
\t\t\t</div>
\t\t{% endif %}

\t\t<section id=\"appointment\" class=\"appointment section-bg\">
\t\t\t<div class=\"container\" data-aos=\"fade-up\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>Veuillez vous connceter</h2>
\t\t\t\t</div>
\t\t\t\t<label for=\"inputEmail\"></label>
\t\t\t\t<center><input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control w-50\" autocomplete=\"email\" required autofocus placeholder=\"Email\"></center>
\t\t\t\t<label for=\"inputPassword\"></label>
\t\t\t\t<center><input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control w-50\" autocomplete=\"current-password\" required placeholder=\"Password\"></center>

\t\t\t\t<input
\t\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">


\t\t\t\t{#
\t\t\t\t\t\t\t\t        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
\t\t\t\t\t\t\t\t        See https://symfony.com/doc/current/security/remember_me.html
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t        <div class=\"checkbox mb-3\">
\t\t\t\t\t\t\t\t            <label>
\t\t\t\t\t\t\t\t                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
\t\t\t\t\t\t\t\t            </label>
\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t    #}
\t\t\t\t<center><button class=\"btn btn-lg btn-primary mb-5 mt-5\" type=\"submit\">
\t\t\t\t\tS'identifier
\t\t\t\t</button>
\t\t\t\t</center
\t\t\t\t<P> Si vous êtes nouveau sur la plateforme veullez cliquer ici  <a href=\"/register\"> S'inscrire </a> </p>
\t\t\t</div>
\t\t</section>
\t</form>
{% endblock %}
", "security/login.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/medis/templates/security/login.html.twig");
    }
}
