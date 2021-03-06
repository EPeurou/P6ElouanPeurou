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

/* tricks/new.html.twig */
class __TwigTemplate_a720025d750bf06f217c5341f0bd8350589c554002c84ef99198ebdd2f7d9b3c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tricks/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tricks/new.html.twig"));

        // line 12
        echo "
    
    
    
    
<!DOCTYPE html>
<html lang=\"en\">
    <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>SnowTricks</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/favicon.ico\" />
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://use.fontawesome.com/releases/v5.15.3/js/all.js\" crossorigin=\"anonymous\"></script>
    <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\" />
    <link href=\"../css/styles.css\" rel=\"stylesheet\" />
    <link href=\"../css/standard.css\" rel=\"stylesheet\" />
</head>
    <body class=\"body-new\">
        ";
        // line 34
        $this->displayBlock('navbar', $context, $blocks);
        // line 37
        echo "        <!-- Masthead-->
        <!-- About-->
            <section class=\"text-center form-new\">
                ";
        // line 40
        if ((0 === twig_compare((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 40, $this->source); })()), true))) {
            // line 41
            echo "                    <input type=\"hidden\" id=\"inputHiddenError\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\">
                ";
        }
        // line 43
        echo "                <h2 class=\"mb-4 mt-1\" style=\"font-family:Varela Round;\">Nouveau trick</h2>
                ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_start');
        echo "
                    <div class=\"row mb-3\" style=\"padding-left:5em;padding-right:5em;\">
                        <div class=\"col-sm-6 col-md-6 col-xl-6\">
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), 'row');
        echo "
                        </div>
                        <div class=\"col-sm-6 col-md-6 col-xl-6\">
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "category", [], "any", false, false, false, 50), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row\" style=\"padding-left:5em;padding-right:5em;\">
                        <div class=\"col-sm-12 col-md-12 col-xl-12\">
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "description", [], "any", false, false, false, 55), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row mt-3 mb-5\" style=\"padding-left:5em;padding-right:5em;\">
                        <div class=\"col-sm-12 col-md-12 col-xl-12\">
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "media", [], "any", false, false, false, 60), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row mt-3 mb-5\" style=\"padding-left:5em;padding-right:5em;\">
                        <div class=\"col-sm-12 col-md-12 col-xl-12\">
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "mainImage", [], "any", false, false, false, 65), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row mt-3 mb-5\" style=\"padding-left:5em;padding-right:5em;\">
                        <div class=\"col-sm-12 col-md-12 col-xl-12\">
                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "embedsingle", [], "any", false, false, false, 70), 'row');
        echo "
                        </div>
                    </div>
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "valider", [], "any", false, false, false, 73), 'row');
        echo "
                ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_end');
        echo "
            </section>
        <!-- Footer-->
        <footer class=\"footer bg-black small text-center text-white-50\"><div class=\"container px-4 px-lg-5\">Copyright &copy; Your Website 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"js/scripts.js\"></script>
        <script>
            \$( document ).ready(function() {
                valError = \$('#inputHiddenError').val();
                console.log(valError);
                if(valError == true){
                    alert('Le nom du trick ??xiste d??j??');
                }
            });
        </script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 35
        echo "            ";
        $this->loadTemplate("navbar.html.twig", "tricks/new.html.twig", 35)->display($context);
        // line 36
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tricks/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 36,  185 => 35,  175 => 34,  140 => 74,  136 => 73,  130 => 70,  122 => 65,  114 => 60,  106 => 55,  98 => 50,  92 => 47,  86 => 44,  83 => 43,  77 => 41,  75 => 40,  70 => 37,  68 => 34,  44 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}New Tricks{% endblock %}

{% block body %}
    <h1>Create new Tricks</h1>

    {{ include('tricks/_form.html.twig') }}

    <a href=\"{{ path('tricks_index') }}\">back to list</a>
{% endblock %} #}

    
    
    
    
<!DOCTYPE html>
<html lang=\"en\">
    <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>SnowTricks</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/favicon.ico\" />
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://use.fontawesome.com/releases/v5.15.3/js/all.js\" crossorigin=\"anonymous\"></script>
    <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\" />
    <link href=\"../css/styles.css\" rel=\"stylesheet\" />
    <link href=\"../css/standard.css\" rel=\"stylesheet\" />
</head>
    <body class=\"body-new\">
        {% block navbar %}
            {% include \"navbar.html.twig\" %}
        {% endblock %}
        <!-- Masthead-->
        <!-- About-->
            <section class=\"text-center form-new\">
                {% if error == true %}
                    <input type=\"hidden\" id=\"inputHiddenError\" value=\"{{ error }}\">
                {% endif %}
                <h2 class=\"mb-4 mt-1\" style=\"font-family:Varela Round;\">Nouveau trick</h2>
                {{ form_start(form) }}
                    <div class=\"row mb-3\" style=\"padding-left:5em;padding-right:5em;\">
                        <div class=\"col-sm-6 col-md-6 col-xl-6\">
                            {{ form_row(form.name) }}
                        </div>
                        <div class=\"col-sm-6 col-md-6 col-xl-6\">
                            {{ form_row(form.category) }}
                        </div>
                    </div>
                    <div class=\"row\" style=\"padding-left:5em;padding-right:5em;\">
                        <div class=\"col-sm-12 col-md-12 col-xl-12\">
                            {{ form_row(form.description) }}
                        </div>
                    </div>
                    <div class=\"row mt-3 mb-5\" style=\"padding-left:5em;padding-right:5em;\">
                        <div class=\"col-sm-12 col-md-12 col-xl-12\">
                            {{ form_row(form.media) }}
                        </div>
                    </div>
                    <div class=\"row mt-3 mb-5\" style=\"padding-left:5em;padding-right:5em;\">
                        <div class=\"col-sm-12 col-md-12 col-xl-12\">
                            {{ form_row(form.mainImage) }}
                        </div>
                    </div>
                    <div class=\"row mt-3 mb-5\" style=\"padding-left:5em;padding-right:5em;\">
                        <div class=\"col-sm-12 col-md-12 col-xl-12\">
                            {{ form_row(form.embedsingle) }}
                        </div>
                    </div>
                    {{ form_row(form.valider) }}
                {{ form_end(form) }}
            </section>
        <!-- Footer-->
        <footer class=\"footer bg-black small text-center text-white-50\"><div class=\"container px-4 px-lg-5\">Copyright &copy; Your Website 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"js/scripts.js\"></script>
        <script>
            \$( document ).ready(function() {
                valError = \$('#inputHiddenError').val();
                console.log(valError);
                if(valError == true){
                    alert('Le nom du trick ??xiste d??j??');
                }
            });
        </script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
    </body>
</html>
", "tricks/new.html.twig", "C:\\MAMP\\htdocs\\P6ElouanPeurou\\P6ElouanPeurou\\templates\\tricks\\new.html.twig");
    }
}
