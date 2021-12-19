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

/* tricks/edit.html.twig */
class __TwigTemplate_5ed793339fa4206ef1bc0d09d8ec584ea3386d0b90bc7f1379cde3870d574a45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tricks/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tricks/edit.html.twig"));

        // line 14
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
    <link href=\"../../css/styles.css\" rel=\"stylesheet\" />
    <link href=\"../../css/standard.css\" rel=\"stylesheet\" />
</head>
    <body id=\"page-top\">
        ";
        // line 32
        $this->displayBlock('navbar', $context, $blocks);
        // line 35
        echo "        <!-- Masthead-->
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start');
        echo "
        <header>
            <div class=\"container-show\">
                ";
        // line 39
        $context["break"] = false;
        // line 40
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 40, $this->source); })()), "media", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 41
            echo "                    ";
            if ((0 === twig_compare((isset($context["break"]) || array_key_exists("break", $context) ? $context["break"] : (function () { throw new RuntimeError('Variable "break" does not exist.', 41, $this->source); })()), false))) {
                // line 42
                echo "                        ";
                if (twig_in_filter("image", $context["value"])) {
                    // line 43
                    echo "                            <img class=\"main-img-show\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 43, $this->source); })()), "media", [], "any", false, false, false, 43), 0, [], "array", false, false, false, 43))), "html", null, true);
                    echo "\" class=\"card-img-top\" alt=\"...\">
                        ";
                } else {
                    // line 45
                    echo "                            <img class=\"main-img-show\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/frontflip.jpg"), "html", null, true);
                    echo "\" class=\"card-img-top\" alt=\"...\">
                        ";
                }
                // line 47
                echo "                    ";
            }
            // line 48
            echo "                    ";
            $context["break"] = true;
            // line 49
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                <div>
                    <div class=\"icon-show text-switch\">
                        <a href=\"\" style=\"margin-left:1em;color:white;\"><i class=\"fas fa-trash-alt\"></i></a>
                        <a href=\"\" style=\"margin-right:1em;margin-left:1em;color:white;\"><i class=\"fas fa-pencil-alt\"></i></a>
                    </div>
                    <div class=\"centered-show\">
                        <h1 class=\"mx-auto my-0 text-uppercase text-switch\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56), "html", null, true);
        echo "</h1>
                    </div>
                </div>
            </div>
        </header>
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Remplacer un media</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "media", [], "any", false, false, false, 69), 'row');
        echo "
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- About-->
        <section class=\" mt-5\" id=\"tricks\">
            <div class=\"container px-4 px-lg-5\">
                <div style=\"overflow: auto !important\">
                    <div class=\"row-show mb-4 mb-lg-5 align-items-center horizontal-scrollable\">
                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 82, $this->source); })()), "media", [], "any", false, false, false, 82));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 83
            echo "                            <div class=\"col-sm-12 col-md-2 col-xl-2 mr-2 mycol\">
                                <div class=\"card\" style=\"width:12rem;border:none;\">
                                    <div style=\"margin-right:1em;\">
                                        ";
            // line 86
            if (twig_in_filter("image", $context["value"])) {
                // line 87
                echo "                                            <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . $context["value"])), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"...\" style=\"width:11.9em;height:8em;\">
                                        ";
            } elseif (twig_in_filter("video",             // line 88
$context["value"])) {
                // line 89
                echo "                                            <video controls class=\"card-img-top\" style=\"width:11.9em;height:9.3em;padding:0em;margin-top:2em !important;\"><source src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . $context["value"])), "html", null, true);
                echo "\"></video>
                                        ";
            }
            // line 91
            echo "                                    </div>
                                    <div class=\"icon-show text-switch\">
                                        <a href=\"\" style=\"margin-left:1em;color:white;\"><i class=\"fas fa-trash-alt\"></i></a>
                                        <a href=\"\" id=\"0\" class=\"edit-media-btn\" data-trick-id=\"";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94), "html", null, true);
            echo "\" data-img-val=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\" style=\"margin-right:1em;margin-left:1em;color:white;\"><i class=\"fas fa-pencil-alt\"></i></a>
                                    </div>
                                </div>
                            </div>
                            ";
            // line 100
            echo "                                ";
            // line 101
            echo "                                ";
            // line 102
            echo "                                ";
            // line 103
            echo "                            ";
            // line 104
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                    </div>
                </div>
            </div>
        </section>
        <section class=\"text-center form-edit\">
            <h2 class=\"mb-4 mt-1\" style=\"font-family:Varela Round;\">Modification d'un trick</h2>
            
                <div class=\"row mb-3\" style=\"padding-left:5em;padding-right:5em;\">
                    <div class=\"col-sm-6 col-md-6 col-xl-6\">
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "name", [], "any", false, false, false, 114), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row\" style=\"padding-left:5em;padding-right:5em;\">
                    <div class=\"col-sm-12 col-md-12 col-xl-12\">
                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "description", [], "any", false, false, false, 119), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row\" style=\"padding-left:5em;padding-right:5em;\">
                    <div class=\"col-sm-4 col-md-4 col-xl-4\">
                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "category", [], "any", false, false, false, 124), 'row');
        echo "
                    </div>
                </div>
                ";
        // line 132
        echo "                <div class=\"row mt-5\" style=\"padding-left:5em;padding-right:5em;\">
                    <div class=\"offset-sm-6 offset-xl-6 offset-md-6 col-sm-3 col-md-3 col-xl-3\">
                        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "valider", [], "any", false, false, false, 134), 'row');
        echo "
                    </div>
                    <div class=\"col-sm-2 col-md-2 col-xl-2\">
                        <form method=\"post\" action=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 137, $this->source); })()), "id", [], "any", false, false, false, 137)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138))), "html", null, true);
        echo "\">
                            <button class=\"btn btn-danger\">Delete</button>
                        </form>
                    </div>
                </div>
            ";
        // line 143
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), 'form_end');
        echo "
        </section>

        <!-- Footer-->
        <footer class=\"footer bg-black small text-center text-white-50\"><div class=\"container px-4 px-lg-5\">Copyright &copy; Your Website 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script>
        ";
        // line 153
        echo "        \$( document ).ready(function() {
            ";
        // line 155
        echo "            ";
        // line 156
        echo "            \$( \".edit-media-btn\" ).each(function( index ) {

                let testId = \$(this).attr('id');
                if(testId == 0){
                    ";
        // line 161
        echo "                    \$(this).attr('id', index);
                    ";
        // line 163
        echo "                } else {
                    console.log(\"cassé:\", index);
                }
                ";
        // line 167
        echo "                ";
        // line 168
        echo "            });    
        });  
        \$('.edit-media-btn').click(function(){
            var currentVal = \$(this).attr('data-img-val');
            var trickId = \$(this).attr('data-trick-id');
            ";
        // line 174
        echo "            \$.ajax({
                    url: \"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 175, $this->source); })()), "id", [], "any", false, false, false, 175)]), "html", null, true);
        echo "\",
                    type: 'POST',
                    data: {'currentVal':currentVal, 'trickId':trickId}, 
                    success: function(r){
                        console.log(r);
                        ";
        // line 181
        echo "                    },
                    error: function(){
                        console.log('Ajax crashed');
                    }
                });
            });
            
             
        </script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"js/scripts.js\"></script>
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

    // line 32
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 33
        echo "            ";
        $this->loadTemplate("navbar.html.twig", "tricks/edit.html.twig", 33)->display($context);
        // line 34
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tricks/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 34,  349 => 33,  339 => 32,  308 => 181,  300 => 175,  297 => 174,  290 => 168,  288 => 167,  283 => 163,  280 => 161,  274 => 156,  272 => 155,  269 => 153,  259 => 143,  251 => 138,  247 => 137,  241 => 134,  237 => 132,  231 => 124,  223 => 119,  215 => 114,  204 => 105,  198 => 104,  196 => 103,  194 => 102,  192 => 101,  190 => 100,  181 => 94,  176 => 91,  170 => 89,  168 => 88,  163 => 87,  161 => 86,  156 => 83,  152 => 82,  136 => 69,  120 => 56,  112 => 50,  106 => 49,  103 => 48,  100 => 47,  94 => 45,  88 => 43,  85 => 42,  82 => 41,  77 => 40,  75 => 39,  69 => 36,  66 => 35,  64 => 32,  44 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Edit Tricks{% endblock %}

{% block body %}
    <h1>Edit Tricks</h1>

    {{ include('tricks/_form.html.twig', {'button_label': 'Update'}) }}

    <a href=\"{{ path('tricks_index') }}\">back to list</a>

    {{ include('tricks/_delete_form.html.twig') }}
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
    <link href=\"../../css/styles.css\" rel=\"stylesheet\" />
    <link href=\"../../css/standard.css\" rel=\"stylesheet\" />
</head>
    <body id=\"page-top\">
        {% block navbar %}
            {% include \"navbar.html.twig\" %}
        {% endblock %}
        <!-- Masthead-->
        {{ form_start(form) }}
        <header>
            <div class=\"container-show\">
                {% set break = false %}
                {% for key,value in trick.media %}
                    {% if break == false %}
                        {% if 'image' in value %}
                            <img class=\"main-img-show\" src=\"{{ asset('upload/' ~ trick.media[0])}}\" class=\"card-img-top\" alt=\"...\">
                        {% else %}
                            <img class=\"main-img-show\" src=\"{{ asset('assets/img/frontflip.jpg')}}\" class=\"card-img-top\" alt=\"...\">
                        {% endif %}
                    {% endif %}
                    {% set break = true %}
                {% endfor %}
                <div>
                    <div class=\"icon-show text-switch\">
                        <a href=\"\" style=\"margin-left:1em;color:white;\"><i class=\"fas fa-trash-alt\"></i></a>
                        <a href=\"\" style=\"margin-right:1em;margin-left:1em;color:white;\"><i class=\"fas fa-pencil-alt\"></i></a>
                    </div>
                    <div class=\"centered-show\">
                        <h1 class=\"mx-auto my-0 text-uppercase text-switch\">{{ trick.name }}</h1>
                    </div>
                </div>
            </div>
        </header>
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Remplacer un media</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        {{ form_row(form.media) }}
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- About-->
        <section class=\" mt-5\" id=\"tricks\">
            <div class=\"container px-4 px-lg-5\">
                <div style=\"overflow: auto !important\">
                    <div class=\"row-show mb-4 mb-lg-5 align-items-center horizontal-scrollable\">
                        {% for key,value in trick.media %}
                            <div class=\"col-sm-12 col-md-2 col-xl-2 mr-2 mycol\">
                                <div class=\"card\" style=\"width:12rem;border:none;\">
                                    <div style=\"margin-right:1em;\">
                                        {% if 'image' in value %}
                                            <img class=\"card-img-top\" src=\"{{ asset('upload/' ~ value)}}\" class=\"card-img-top\" alt=\"...\" style=\"width:11.9em;height:8em;\">
                                        {% elseif 'video' in value %}
                                            <video controls class=\"card-img-top\" style=\"width:11.9em;height:9.3em;padding:0em;margin-top:2em !important;\"><source src=\"{{ asset('upload/' ~ value)}}\"></video>
                                        {% endif %}
                                    </div>
                                    <div class=\"icon-show text-switch\">
                                        <a href=\"\" style=\"margin-left:1em;color:white;\"><i class=\"fas fa-trash-alt\"></i></a>
                                        <a href=\"\" id=\"0\" class=\"edit-media-btn\" data-trick-id=\"{{ trick.id }}\" data-img-val=\"{{value}}\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\" style=\"margin-right:1em;margin-left:1em;color:white;\"><i class=\"fas fa-pencil-alt\"></i></a>
                                    </div>
                                </div>
                            </div>
                            {# {% set testclick = false %}
                            {% if testclick == false %} #}
                                {# {% set currentMedia = value %} #}
                                {# <input type=\"text\" class=\"currentName\" value=\"{{value}}\"> #}
                                {# {{ form_row(form.mediaName,{value: value }) }} #}
                            {# {% endif %} #}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </section>
        <section class=\"text-center form-edit\">
            <h2 class=\"mb-4 mt-1\" style=\"font-family:Varela Round;\">Modification d'un trick</h2>
            
                <div class=\"row mb-3\" style=\"padding-left:5em;padding-right:5em;\">
                    <div class=\"col-sm-6 col-md-6 col-xl-6\">
                        {{ form_row(form.name) }}
                    </div>
                </div>
                <div class=\"row\" style=\"padding-left:5em;padding-right:5em;\">
                    <div class=\"col-sm-12 col-md-12 col-xl-12\">
                        {{ form_row(form.description) }}
                    </div>
                </div>
                <div class=\"row\" style=\"padding-left:5em;padding-right:5em;\">
                    <div class=\"col-sm-4 col-md-4 col-xl-4\">
                        {{ form_row(form.category) }}
                    </div>
                </div>
                {# <div class=\"row mt-3 mb-5\" style=\"padding-left:5em;padding-right:5em;\">
                    <div class=\"col-sm-12 col-md-12 col-xl-12\">
                        {{ form_row(form.media) }}
                    </div>
                </div> #}
                <div class=\"row mt-5\" style=\"padding-left:5em;padding-right:5em;\">
                    <div class=\"offset-sm-6 offset-xl-6 offset-md-6 col-sm-3 col-md-3 col-xl-3\">
                        {{ form_row(form.valider) }}
                    </div>
                    <div class=\"col-sm-2 col-md-2 col-xl-2\">
                        <form method=\"post\" action=\"{{ path('tricks_delete', {'id': trick.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ trick.id) }}\">
                            <button class=\"btn btn-danger\">Delete</button>
                        </form>
                    </div>
                </div>
            {{ form_end(form) }}
        </section>

        <!-- Footer-->
        <footer class=\"footer bg-black small text-center text-white-50\"><div class=\"container px-4 px-lg-5\">Copyright &copy; Your Website 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script>
        {# \$( \"#edit-media-btn\" ).click(function() {
            {% set testclick = true %}
        }); #}
        \$( document ).ready(function() {
            {# var maval = 0; #}
            {# console.log(\$(\".edit-media-btn\" )); #}
            \$( \".edit-media-btn\" ).each(function( index ) {

                let testId = \$(this).attr('id');
                if(testId == 0){
                    {# const newId = ++testId; #}
                    \$(this).attr('id', index);
                    {# console.log(\"ok\", index); #}
                } else {
                    console.log(\"cassé:\", index);
                }
                {# const newval = ++maval; #}
                {# console.log(maval); #}
            });    
        });  
        \$('.edit-media-btn').click(function(){
            var currentVal = \$(this).attr('data-img-val');
            var trickId = \$(this).attr('data-trick-id');
            {# console.log(currentVal); #}
            \$.ajax({
                    url: \"{{ path('ajax', {'id': trick.id}) }}\",
                    type: 'POST',
                    data: {'currentVal':currentVal, 'trickId':trickId}, 
                    success: function(r){
                        console.log(r);
                        {# console.log(currentVal); #}
                    },
                    error: function(){
                        console.log('Ajax crashed');
                    }
                });
            });
            
             
        </script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"js/scripts.js\"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
    </body>
</html>


", "tricks/edit.html.twig", "C:\\MAMP\\htdocs\\P6ElouanPeurou\\P6ElouanPeurou\\templates\\tricks\\edit.html.twig");
    }
}
