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

/* tricks/show.html.twig */
class __TwigTemplate_029a15980f2985121cb4a6280f40a554b9a48da78632659d421e376e3754ef5c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tricks/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tricks/show.html.twig"));

        // line 97
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>SnowTricks</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/favicon.ico\" />
    <script src=\"https://use.fontawesome.com/releases/v5.15.3/js/all.js\" crossorigin=\"anonymous\"></script>
    <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\" />
    <link href=\"../css/styles.css\" rel=\"stylesheet\" />
    <link href=\"../css/standard.css\" rel=\"stylesheet\" />
</head>
    <body id=\"page-top\">
        ";
        // line 113
        $this->displayBlock('navbar', $context, $blocks);
        // line 116
        echo "        <!-- Masthead-->
        <header>
            <div class=\"container-show\">
            <img class=\"main-img-show\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 119, $this->source); })()), "media", [], "any", false, false, false, 119), 0, [], "array", false, false, false, 119))), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\">
                <div>
                    <div class=\"centered-show\">
                        <h1 class=\"mx-auto my-0 text-uppercase text-switch\">";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 122, $this->source); })()), "name", [], "any", false, false, false, 122), "html", null, true);
        echo "</h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class=\"text-center mt-5\" id=\"tricks\">
            <div class=\"container px-4 px-lg-5\">
                <div class=\"text-center\">
                    <div class=\"row mb-4 mb-lg-5 align-items-center horizontal-scrollable\">
                        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 132, $this->source); })()), "media", [], "any", false, false, false, 132));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 133
            echo "                            <div class=\"col-sm-12 col-md-2 col-xl-2 mr-2\">
                                <div class=\"card\" style=\"width:12rem;border:none;\">
                                    <div style=\"margin-right:1em;\">
                                        ";
            // line 136
            if (twig_in_filter("image", $context["value"])) {
                // line 137
                echo "                                            <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . $context["value"])), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"...\" style=\"width:11.9em;height:8em;\">
                                        ";
            } elseif (twig_in_filter("video",             // line 138
$context["value"])) {
                // line 139
                echo "                                            <video controls class=\"card-img-top mb-3\" style=\"width:11.9em;height:9.3em;padding:0em;\"><source src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . $context["value"])), "html", null, true);
                echo "\"></video>
                                        ";
            }
            // line 141
            echo "                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                    </div>
                </div>
                ";
        // line 172
        echo "                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class=\"footer bg-black small text-center text-white-50\"><div class=\"container px-4 px-lg-5\">Copyright &copy; Your Website 2021</div></footer>
        <!-- Bootstrap core JS-->
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

    // line 113
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 114
        echo "            ";
        $this->loadTemplate("navbar.html.twig", "tricks/show.html.twig", 114)->display($context);
        // line 115
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tricks/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 115,  162 => 114,  152 => 113,  125 => 172,  121 => 145,  112 => 141,  106 => 139,  104 => 138,  99 => 137,  97 => 136,  92 => 133,  88 => 132,  75 => 122,  69 => 119,  64 => 116,  62 => 113,  44 => 97,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Tricks{% endblock %}

{% block body %}
    <h1>Tricks</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ trick.id }}</td>
            </tr>
            <tr>
                <th>IdUser</th>
                <td>{{ trick.idUser }}</td>
            </tr>
            <tr>
                <th>IdType</th>
                <td>{{ trick.idType }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ trick.name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ trick.description }}</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>{{ trick.author }}</td>
            </tr>
            <tr>
                <th>Creation_date</th>
                <td>{{ trick.creationDate ? trick.creationDate|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('tricks_index') }}\">back to list</a>

    <a href=\"{{ path('tricks_edit', {'id': trick.id}) }}\">edit</a>

    {{ include('tricks/_delete_form.html.twig') }}
{% endblock %} #}
{# {% extends 'base.html.twig' %}

{% block title %}Tricks{% endblock %}

{% block body %}
    <h1>Tricks</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ trick.id }}</td>
            </tr>
            <tr>
                <th>IdUser</th>
                <td>{{ trick.idUser }}</td>
            </tr>
            <tr>
                <th>IdType</th>
                <td>{{ trick.idType }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ trick.name }}</td>
            </tr>
            <tr>
                <th>Media</th>
                <td><img src=\"{{ asset('upload/' ~ trick.media)}}\" class=\"card-img-top\" alt=\"...\" style=\"width:11.9em;height:8em;\"></td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ trick.description }}</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>{{ trick.author }}</td>
            </tr>
            <tr>
                <th>Creation_date</th>
                <td>{{ trick.creationDate ? trick.creationDate|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('tricks_index') }}\">back to list</a>

    <a href=\"{{ path('tricks_edit', {'id': trick.id}) }}\">edit</a>

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
    <script src=\"https://use.fontawesome.com/releases/v5.15.3/js/all.js\" crossorigin=\"anonymous\"></script>
    <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\" />
    <link href=\"../css/styles.css\" rel=\"stylesheet\" />
    <link href=\"../css/standard.css\" rel=\"stylesheet\" />
</head>
    <body id=\"page-top\">
        {% block navbar %}
            {% include \"navbar.html.twig\" %}
        {% endblock %}
        <!-- Masthead-->
        <header>
            <div class=\"container-show\">
            <img class=\"main-img-show\" src=\"{{ asset('upload/' ~ trick.media[0])}}\" class=\"card-img-top\" alt=\"...\">
                <div>
                    <div class=\"centered-show\">
                        <h1 class=\"mx-auto my-0 text-uppercase text-switch\">{{ trick.name }}</h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class=\"text-center mt-5\" id=\"tricks\">
            <div class=\"container px-4 px-lg-5\">
                <div class=\"text-center\">
                    <div class=\"row mb-4 mb-lg-5 align-items-center horizontal-scrollable\">
                        {% for key,value in trick.media %}
                            <div class=\"col-sm-12 col-md-2 col-xl-2 mr-2\">
                                <div class=\"card\" style=\"width:12rem;border:none;\">
                                    <div style=\"margin-right:1em;\">
                                        {% if 'image' in value %}
                                            <img class=\"card-img-top\" src=\"{{ asset('upload/' ~ value)}}\" class=\"card-img-top\" alt=\"...\" style=\"width:11.9em;height:8em;\">
                                        {% elseif 'video' in value %}
                                            <video controls class=\"card-img-top mb-3\" style=\"width:11.9em;height:9.3em;padding:0em;\"><source src=\"{{ asset('upload/' ~ value)}}\"></video>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
                {# <div class=\"row mb-4 mb-lg-5 align-items-center\">
                    <div class=\"col-md-1\"></div>
                    {% for list in tricks %}
                        {% if loop.index0 is divisible by(5) %}
                            <div class=\"row mb-4 mb-lg-5 align-items-center\">
                                <div class=\"col-md-1\"></div>
                        {% endif %}
                        <div class=\"col-sm-12 col-md-2 col-xl-2 mr-2\">
                            <div class=\"card\" style=\"width: 12rem;\">
                                <img src=\"{{ asset('upload/' ~ list.Media)}}\" class=\"card-img-top\" alt=\"...\" style=\"width:11.9em;height:8em;\">
                                <div class=\"card-body\">
                                    <a href=\"{{ path('tricks_show', {id: list.id}) }}\">{{ list.name }}</a>
                                    <a href=\"\" style=\"margin-left:1em;\"><i class=\"fas fa-trash-alt\"></i></a>
                                    <a href=\"\" style=\"margin-left:1em;\"><i class=\"fas fa-pencil-alt\"></i></a>

                                </div>
                            </div>
                        </div>
                        {% if loop.index is divisible by(5) or loop.last %}
                            </div>
                        {% endif %}
                    {% endfor %}
                    <div class=\"btn-top\">
                        <a class=\"btn\" href=\"#home\"><i class=\"fas fa-3x fa-arrow-circle-up\"></i></a>
                    </div> #}
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class=\"footer bg-black small text-center text-white-50\"><div class=\"container px-4 px-lg-5\">Copyright &copy; Your Website 2021</div></footer>
        <!-- Bootstrap core JS-->
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

", "tricks/show.html.twig", "C:\\MAMP\\htdocs\\P6ElouanPeurou\\P6ElouanPeurou\\templates\\tricks\\show.html.twig");
    }
}
