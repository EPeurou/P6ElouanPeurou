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
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://use.fontawesome.com/releases/v5.15.3/js/all.js\" crossorigin=\"anonymous\"></script>
    <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\" />
    <link href=\"../css/styles.css\" rel=\"stylesheet\" />
    <link href=\"../css/standard.css\" rel=\"stylesheet\" />
</head>
    <body id=\"page-top\">
        ";
        // line 114
        $this->displayBlock('navbar', $context, $blocks);
        // line 117
        echo "        <!-- Masthead-->
        <header>
            <div class=\"container-show\">
                ";
        // line 120
        $context["break"] = false;
        // line 121
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 121, $this->source); })()), "media", [], "any", false, false, false, 121));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 122
            echo "                    ";
            if ((0 === twig_compare((isset($context["break"]) || array_key_exists("break", $context) ? $context["break"] : (function () { throw new RuntimeError('Variable "break" does not exist.', 122, $this->source); })()), false))) {
                // line 123
                echo "                        ";
                if (twig_in_filter("image", $context["value"])) {
                    // line 124
                    echo "                            <img class=\"main-img-show\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 124, $this->source); })()), "media", [], "any", false, false, false, 124), 0, [], "array", false, false, false, 124))), "html", null, true);
                    echo "\" class=\"card-img-top\" alt=\"...\">
                        ";
                } else {
                    // line 126
                    echo "                            <img class=\"main-img-show\" src=\"../../public/assets/img/frontflip.jpg\" class=\"card-img-top\" alt=\"...\">
                        ";
                }
                // line 128
                echo "                    ";
            }
            // line 129
            echo "                    ";
            $context["break"] = true;
            // line 130
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                <div>
                    <div class=\"centered-show\">
                        <h1 class=\"mx-auto my-0 text-uppercase text-switch\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 133, $this->source); })()), "name", [], "any", false, false, false, 133), "html", null, true);
        echo "</h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class=\" mt-5\" id=\"tricks\">
            <div class=\"container px-4 px-lg-5\">
                <div style=\"overflow: auto !important\">
                    <div class=\"row-show mb-4 mb-lg-5 align-items-center horizontal-scrollable\">
                        ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 143, $this->source); })()), "media", [], "any", false, false, false, 143));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 144
            echo "                            <div class=\"col-sm-12 col-md-2 col-xl-2 mr-2 mycol\">
                                <div class=\"card\" style=\"width:12rem;border:none;\">
                                    <div style=\"margin-right:1em;\">
                                        ";
            // line 147
            if (twig_in_filter("image", $context["value"])) {
                // line 148
                echo "                                            <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . $context["value"])), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"...\" style=\"width:11.9em;height:8em;\">
                                        ";
            } elseif (twig_in_filter("video",             // line 149
$context["value"])) {
                // line 150
                echo "                                            <video controls class=\"card-img-top\" style=\"width:11.9em;height:9.3em;padding:0em;margin-top:2em !important;\"><source src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . $context["value"])), "html", null, true);
                echo "\"></video>
                                        ";
            }
            // line 152
            echo "                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                    </div>
                </div>
            </div>
        </section>
        <section class=\"text-center mt-5\" id=\"tricks\">
            <div class=\"container des-show px-4 px-lg-5\">
                <div class=\"text-center\">
                    <h5>";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 163, $this->source); })()), "description", [], "any", false, false, false, 163), "html", null, true);
        echo "</h5>
                </div>
            </div>
        </section>
        <section class=\"text-center mt-5\" style=\"padding-left:20em;padding-right:20em;\">
            <div class=\"row\" style=\"border-bottom: 2px solid black\">
                <div class=\"col-md-4 col-sm-4 col-xl-4\">
                    <h6 class=\"btn \">Date de création: ";
        // line 170
        ((twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 170, $this->source); })()), "creationDate", [], "any", false, false, false, 170)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 170, $this->source); })()), "creationDate", [], "any", false, false, false, 170), "d-m-Y H:i:s"), "html", null, true))) : (print ("")));
        echo "</h6>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xl-4\">
                    <h6 class=\"btn \">Groupe: Flip</h6>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xl-4\">
                    <h6 class=\"btn \">Modifié le: </h6>
                </div>
            </div>
        </section>
        <section class=\"text-center mt-3\" style=\"padding-left:20em;padding-right:20em;\">
            ";
        // line 181
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 181, $this->source); })()), 'form_start');
        echo "
                <div class=\"row\" style=\"border-bottom: 2px solid black;padding-left:10em;padding-right:20em;\">
                    <div class=\"col-sm-8 col-md-8 col-xl-8\">
                        ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 184, $this->source); })()), "content", [], "any", false, false, false, 184), 'row');
        echo "
                    </div>
                    <div class=\"col-sm-2 col-md-2 col-xl-2 mt-4 mb-5\">
                        ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 187, $this->source); })()), "envoyer", [], "any", false, false, false, 187), 'row');
        echo "
                    </div>
                </div>
            ";
        // line 190
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 190, $this->source); })()), 'form_end');
        echo "
        </section>
        <section class=\"text-center mt-5 grid\" style=\"padding-left:20em;padding-right:20em;\">
            ";
        // line 193
        $context["commentVar"] = false;
        // line 194
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 194, $this->source); })()), "comments", [], "any", false, false, false, 194));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 195
            echo "                ";
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 195) % 5)) {
                // line 196
                echo "                    ";
                $context["commentVar"] = true;
                // line 197
                echo "                ";
            }
            // line 198
            echo "                <div class=\"row-more\">
                    <div class=\"row\">
                        <div class=\"col-md-2 col-sm-2 col-xl-2 mb-3\">
                            <i class=\"fas fa-3x fa-user-circle\"></i>
                        </div>
                        <div class=\"col-md-8 col-sm-8 col-xl-8 mt-3\">
                            <div class=\"container px-4 px-lg-5\" style=\"background-color: rgb(245, 245, 245);border-radius: 0.2em;\">
                                <h5>";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 205), "html", null, true);
            echo "</h5>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "            ";
        if ((0 === twig_compare((isset($context["commentVar"]) || array_key_exists("commentVar", $context) ? $context["commentVar"] : (function () { throw new RuntimeError('Variable "commentVar" does not exist.', 211, $this->source); })()), true))) {
            // line 212
            echo "                <button class=\"btn btn-primary ajax-load-more\">Charger plus</button>
            ";
        }
        // line 214
        echo "        </section>
        <!-- Footer-->
        <footer class=\"footer bg-black small text-center text-white-50\"><div class=\"container px-4 px-lg-5\">Copyright &copy; Your Website 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script>
            \$( \".row-more:lt(4)\" ).css( \"display\", \"block\" );
            const list = document.querySelector(\".grid\");
            const listItems = list.querySelectorAll(\".row-more\");
            const ajaxLoadMoreBtn = document.querySelector(\".ajax-load-more\");

            let k = 4;
            let j = 10;

            ajaxLoadMoreBtn.addEventListener(\"click\", function () {
            let range = `.row-more:nth-child(n+\${k}):nth-child(-n+\${j})`;
            list
                .querySelectorAll(range)
                .forEach((elem) => (elem.style.display = \"block\"));

            if (listItems.length <= j) {
                this.remove();
            } else {
                k += 5;
                j += 5;
            }
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

    // line 114
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 115
        echo "            ";
        $this->loadTemplate("navbar.html.twig", "tricks/show.html.twig", 115)->display($context);
        // line 116
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
        return array (  338 => 116,  335 => 115,  325 => 114,  277 => 214,  273 => 212,  270 => 211,  250 => 205,  241 => 198,  238 => 197,  235 => 196,  232 => 195,  214 => 194,  212 => 193,  206 => 190,  200 => 187,  194 => 184,  188 => 181,  174 => 170,  164 => 163,  155 => 156,  146 => 152,  140 => 150,  138 => 149,  133 => 148,  131 => 147,  126 => 144,  122 => 143,  109 => 133,  105 => 131,  99 => 130,  96 => 129,  93 => 128,  89 => 126,  83 => 124,  80 => 123,  77 => 122,  72 => 121,  70 => 120,  65 => 117,  63 => 114,  44 => 97,);
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
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
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
                {% set break = false %}
                {% for key,value in trick.media %}
                    {% if break == false %}
                        {% if 'image' in value %}
                            <img class=\"main-img-show\" src=\"{{ asset('upload/' ~ trick.media[0])}}\" class=\"card-img-top\" alt=\"...\">
                        {% else %}
                            <img class=\"main-img-show\" src=\"../../public/assets/img/frontflip.jpg\" class=\"card-img-top\" alt=\"...\">
                        {% endif %}
                    {% endif %}
                    {% set break = true %}
                {% endfor %}
                <div>
                    <div class=\"centered-show\">
                        <h1 class=\"mx-auto my-0 text-uppercase text-switch\">{{ trick.name }}</h1>
                    </div>
                </div>
            </div>
        </header>
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
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </section>
        <section class=\"text-center mt-5\" id=\"tricks\">
            <div class=\"container des-show px-4 px-lg-5\">
                <div class=\"text-center\">
                    <h5>{{ trick.description }}</h5>
                </div>
            </div>
        </section>
        <section class=\"text-center mt-5\" style=\"padding-left:20em;padding-right:20em;\">
            <div class=\"row\" style=\"border-bottom: 2px solid black\">
                <div class=\"col-md-4 col-sm-4 col-xl-4\">
                    <h6 class=\"btn \">Date de création: {{ trick.creationDate ? trick.creationDate|date('d-m-Y H:i:s') : '' }}</h6>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xl-4\">
                    <h6 class=\"btn \">Groupe: Flip</h6>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xl-4\">
                    <h6 class=\"btn \">Modifié le: </h6>
                </div>
            </div>
        </section>
        <section class=\"text-center mt-3\" style=\"padding-left:20em;padding-right:20em;\">
            {{ form_start(commentForm) }}
                <div class=\"row\" style=\"border-bottom: 2px solid black;padding-left:10em;padding-right:20em;\">
                    <div class=\"col-sm-8 col-md-8 col-xl-8\">
                        {{ form_row(commentForm.content) }}
                    </div>
                    <div class=\"col-sm-2 col-md-2 col-xl-2 mt-4 mb-5\">
                        {{ form_row(commentForm.envoyer) }}
                    </div>
                </div>
            {{ form_end(commentForm) }}
        </section>
        <section class=\"text-center mt-5 grid\" style=\"padding-left:20em;padding-right:20em;\">
            {% set commentVar = false %}
            {% for comment in trick.comments %}
                {% if loop.index is divisible by(5) %}
                    {% set commentVar = true  %}
                {% endif %}
                <div class=\"row-more\">
                    <div class=\"row\">
                        <div class=\"col-md-2 col-sm-2 col-xl-2 mb-3\">
                            <i class=\"fas fa-3x fa-user-circle\"></i>
                        </div>
                        <div class=\"col-md-8 col-sm-8 col-xl-8 mt-3\">
                            <div class=\"container px-4 px-lg-5\" style=\"background-color: rgb(245, 245, 245);border-radius: 0.2em;\">
                                <h5>{{ comment.content }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
            {% if commentVar == true %}
                <button class=\"btn btn-primary ajax-load-more\">Charger plus</button>
            {% endif %}
        </section>
        <!-- Footer-->
        <footer class=\"footer bg-black small text-center text-white-50\"><div class=\"container px-4 px-lg-5\">Copyright &copy; Your Website 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script>
            \$( \".row-more:lt(4)\" ).css( \"display\", \"block\" );
            const list = document.querySelector(\".grid\");
            const listItems = list.querySelectorAll(\".row-more\");
            const ajaxLoadMoreBtn = document.querySelector(\".ajax-load-more\");

            let k = 4;
            let j = 10;

            ajaxLoadMoreBtn.addEventListener(\"click\", function () {
            let range = `.row-more:nth-child(n+\${k}):nth-child(-n+\${j})`;
            list
                .querySelectorAll(range)
                .forEach((elem) => (elem.style.display = \"block\"));

            if (listItems.length <= j) {
                this.remove();
            } else {
                k += 5;
                j += 5;
            }
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

", "tricks/show.html.twig", "C:\\MAMP\\htdocs\\P6ElouanPeurou\\P6ElouanPeurou\\templates\\tricks\\show.html.twig");
    }
}
