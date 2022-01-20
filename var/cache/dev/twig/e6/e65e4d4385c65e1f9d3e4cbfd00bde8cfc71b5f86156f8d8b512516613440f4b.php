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
                    <div class=\"icon-show text-switch\">
                        <a href=\"\" style=\"margin-left:1em;color:white;\"><i class=\"fas fa-trash-alt\"></i></a>
                        <a href=\"\" style=\"margin-right:1em;margin-left:1em;color:white;\"><i class=\"fas fa-pencil-alt\"></i></a>
                    </div>
                    <div class=\"centered-show\">
                        <h1 class=\"mx-auto my-0 text-uppercase text-switch\">";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 137, $this->source); })()), "name", [], "any", false, false, false, 137), "html", null, true);
        echo "</h1>
                    </div>
                </div>
            </div>
        </header>
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" style=\"width:650px !important;max-width:none !important;\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <img class=\"card-img-top inModal\" src=\"\" class=\"card-img-top\" alt=\"...\" style=\"width:100%\">
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
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 159, $this->source); })()), "media", [], "any", false, false, false, 159));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 160
            echo "                            <div class=\"col-sm-12 col-md-2 col-xl-2 mr-2 mycol\">
                                <div class=\"card\" style=\"width:12rem;border:none;\">
                                    <div style=\"margin-right:1em;\">
                                        ";
            // line 163
            if (twig_in_filter("image", $context["value"])) {
                // line 164
                echo "                                            <a href=\"\" class=\"a-img\" id=\"0\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\" data-img=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">
                                                <img class=\"card-img-top\" src=\"";
                // line 165
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . $context["value"])), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"...\" style=\"width:11.9em;height:8em;\">
                                            </a>
                                        ";
            } elseif (twig_in_filter("video",             // line 167
$context["value"])) {
                // line 168
                echo "                                            <video controls class=\"card-img-top\" style=\"width:11.9em;height:9.3em;padding:0em;margin-top:2em !important;\"><source src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . $context["value"])), "html", null, true);
                echo "\"></video>
                                        ";
            }
            // line 170
            echo "                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                    </div>
                </div>
            </div>
        </section>
        <section class=\"text-center mt-5\" id=\"tricks\">
            <div class=\"container des-show px-4 px-lg-5\">
                <div class=\"text-center\">
                    <h5>";
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 181, $this->source); })()), "description", [], "any", false, false, false, 181), "html", null, true);
        echo "</h5>
                </div>
            </div>
        </section>
        <section class=\"text-center mt-5\" style=\"padding-left:20em;padding-right:20em;\">
            <div class=\"row\" style=\"border-bottom: 2px solid black\">
                <div class=\"col-md-4 col-sm-4 col-xl-4\">
                    <h6 class=\"btn \">Date de création: ";
        // line 188
        ((twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 188, $this->source); })()), "creationDate", [], "any", false, false, false, 188)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 188, $this->source); })()), "creationDate", [], "any", false, false, false, 188), "d-m-Y H:i:s"), "html", null, true))) : (print ("")));
        echo "</h6>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xl-4\">
                    <h6 class=\"btn \">Categorie: ";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 191, $this->source); })()), "category", [], "any", false, false, false, 191), "html", null, true);
        echo "</h6>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xl-4\">
                    <h6 class=\"btn \">Modifié le: </h6>
                </div>
            </div>
        </section>
        <section class=\"text-center mt-3\" style=\"padding-left:20em;padding-right:20em;\">
            ";
        // line 199
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 199, $this->source); })()), 'form_start');
        echo "
                <div class=\"row\" style=\"border-bottom: 2px solid black;padding-left:10em;padding-right:20em;\">
                    <div class=\"col-sm-8 col-md-8 col-xl-8\">
                        ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 202, $this->source); })()), "content", [], "any", false, false, false, 202), 'row');
        echo "
                    </div>
                    <div class=\"col-sm-2 col-md-2 col-xl-2 mt-4 mb-5\">
                        ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 205, $this->source); })()), "envoyer", [], "any", false, false, false, 205), 'row');
        echo "
                    </div>
                </div>
            ";
        // line 208
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 208, $this->source); })()), 'form_end');
        echo "
        </section>
        <section class=\"text-center mt-5 grid\" style=\"padding-left:20em;padding-right:20em;\">
            ";
        // line 211
        $context["commentVar"] = false;
        // line 212
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 212, $this->source); })()), "comments", [], "any", false, false, false, 212));
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
            // line 213
            echo "                ";
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 213) % 5)) {
                // line 214
                echo "                    ";
                $context["commentVar"] = true;
                // line 215
                echo "                ";
            }
            // line 216
            echo "                <div class=\"row-more\">
                    <div class=\"row\">
                        <div class=\"col-md-2 col-sm-2 col-xl-2 mb-3\">
                            <i class=\"fas fa-3x fa-user-circle\"></i>
                        </div>
                        <div class=\"col-md-8 col-sm-8 col-xl-8 mt-3\">
                            <div class=\"container px-4 px-lg-5\" style=\"background-color: rgb(245, 245, 245);border-radius: 0.2em;\">
                                <h5>";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 223), "html", null, true);
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
        // line 229
        echo "            ";
        if ((0 === twig_compare((isset($context["commentVar"]) || array_key_exists("commentVar", $context) ? $context["commentVar"] : (function () { throw new RuntimeError('Variable "commentVar" does not exist.', 229, $this->source); })()), true))) {
            // line 230
            echo "                <button class=\"btn btn-primary ajax-load-more mb-5\">Charger plus</button>
            ";
        }
        // line 232
        echo "        </section>
        <!-- Footer-->
        <footer class=\"footer bg-black small text-center text-white-50\"><div class=\"container px-4 px-lg-5\">Copyright &copy; Your Website 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script>
            \$( document ).ready(function() {
                ";
        // line 254
        echo "            });
            \$(\".a-img\").click(function(){
                console.log(\"yep\");
                let valImg = \$(this).attr('data-img');
                \$(\".inModal\").attr('src','/P6ElouanPeurou/P6ElouanPeurou/public/upload/'+ valImg);
            });   
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
        return array (  371 => 116,  368 => 115,  358 => 114,  309 => 254,  301 => 232,  297 => 230,  294 => 229,  274 => 223,  265 => 216,  262 => 215,  259 => 214,  256 => 213,  238 => 212,  236 => 211,  230 => 208,  224 => 205,  218 => 202,  212 => 199,  201 => 191,  195 => 188,  185 => 181,  176 => 174,  167 => 170,  161 => 168,  159 => 167,  154 => 165,  149 => 164,  147 => 163,  142 => 160,  138 => 159,  113 => 137,  105 => 131,  99 => 130,  96 => 129,  93 => 128,  89 => 126,  83 => 124,  80 => 123,  77 => 122,  72 => 121,  70 => 120,  65 => 117,  63 => 114,  44 => 97,);
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
            <div class=\"modal-dialog\" style=\"width:650px !important;max-width:none !important;\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <img class=\"card-img-top inModal\" src=\"\" class=\"card-img-top\" alt=\"...\" style=\"width:100%\">
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
                                            <a href=\"\" class=\"a-img\" id=\"0\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\" data-img=\"{{ value }}\">
                                                <img class=\"card-img-top\" src=\"{{ asset('upload/' ~ value)}}\" class=\"card-img-top\" alt=\"...\" style=\"width:11.9em;height:8em;\">
                                            </a>
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
                    <h6 class=\"btn \">Categorie: {{ trick.category }}</h6>
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
                <button class=\"btn btn-primary ajax-load-more mb-5\">Charger plus</button>
            {% endif %}
        </section>
        <!-- Footer-->
        <footer class=\"footer bg-black small text-center text-white-50\"><div class=\"container px-4 px-lg-5\">Copyright &copy; Your Website 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script>
            \$( document ).ready(function() {
                {# \$( \".a-img\" ).each(function( index ) {
                    let testId = \$(this).attr('id');
                    if(testId == 0){
                        \$(this).attr('id', index);
                    } else {
                        console.log(\"cassé:\", index);
                    }
                });
                \$( \".modal\" ).each(function( index ) {
                    let testId = \$(this).attr('id');
                    if(testId == 0){
                        \$(this).attr('id', index);
                    } else {
                        console.log(\"cassé:\", index);
                    }
                }); #}
            });
            \$(\".a-img\").click(function(){
                console.log(\"yep\");
                let valImg = \$(this).attr('data-img');
                \$(\".inModal\").attr('src','/P6ElouanPeurou/P6ElouanPeurou/public/upload/'+ valImg);
            });   
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
