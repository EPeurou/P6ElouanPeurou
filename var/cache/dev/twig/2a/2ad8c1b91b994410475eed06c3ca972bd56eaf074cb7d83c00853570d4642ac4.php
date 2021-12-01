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

/* navbar.html.twig */
class __TwigTemplate_79b744456fb459733732b01efc01eb7dfb475fa2199828d36ba991e885cac516 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg fixed-top\" id=\"mainNav\">
    <div class=\"container px-4 px-lg-5\">
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fas fa-bars\"></i>
        </button>
        <i class=\"fas fa-3x fa-snowboarding\" style=\"color:white;margin-left:0em;\"></i>
        <div class=\"collapse navbar-collapse\" style=\"margin-right:1em;\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tricks_index");
        echo "\">Accueil</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tricks_new");
        echo "\">Ajouter un trick</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#signup\">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg fixed-top\" id=\"mainNav\">
    <div class=\"container px-4 px-lg-5\">
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fas fa-bars\"></i>
        </button>
        <i class=\"fas fa-3x fa-snowboarding\" style=\"color:white;margin-left:0em;\"></i>
        <div class=\"collapse navbar-collapse\" style=\"margin-right:1em;\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('tricks_index')}}\">Accueil</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('tricks_new') }}\">Ajouter un trick</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#signup\">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>", "navbar.html.twig", "C:\\MAMP\\htdocs\\P6ElouanPeurou\\P6ElouanPeurou\\templates\\navbar.html.twig");
    }
}
