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
class __TwigTemplate_33a024be0cf448309a3a1c553a04cad8799156e99811e2c006948477eece19b9 extends Template
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
        // line 122
        echo "                    ";
        // line 123
        echo "                        ";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 123, $this->source); })()), "mainImage", [], "any", false, false, false, 123), null))) {
            // line 124
            echo "                            <img class=\"main-img-show\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 124, $this->source); })()), "mainImage", [], "any", false, false, false, 124), 0, [], "array", false, false, false, 124))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\">
                        ";
        } else {
            // line 126
            echo "                            <img class=\"main-img-show\" src=\"../../public/assets/img/frontflip.jpg\" class=\"card-img-top\" alt=\"...\">
                        ";
        }
        // line 128
        echo "                    ";
        // line 131
        echo "                <div>
                    <div class=\"row icon-show text-switch\">
                        <div class=\"col-xl-5 col-md-5\">
                            <form method=\"post\" style=\"max-width:1em;\" action=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 134, $this->source); })()), "id", [], "any", false, false, false, 134)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Le trick va être supprimé');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135))), "html", null, true);
        echo "\"/>
                                <button class=\"btn-del-2\" style=\"margin-left:1em;\"><i class=\"fas fa-trash-alt\"></i></button>
                            </form>
                        </div>
                        <div class=\"col-xl-3 col-md-3 \">
                            <a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 140, $this->source); })()), "id", [], "any", false, false, false, 140)]), "html", null, true);
        echo "\" style=\"margin-right:1em;margin-left:0.5em;color:white;\"><i class=\"fas fa-pencil-alt\"></i></a>
                        </div>
                    </div>
                    <div class=\"centered-show\">
                        <h1 class=\"mx-auto my-0 text-uppercase text-switch\">";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 144, $this->source); })()), "name", [], "any", false, false, false, 144), "html", null, true);
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
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 166, $this->source); })()), "media", [], "any", false, false, false, 166));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 167
            echo "                            <div class=\"col-sm-12 col-md-2 col-xl-2 mr-2 mycol\">
                                <div class=\"card\" style=\"width:12rem;border:none;\">
                                    <div style=\"margin-right:1em;\">
                                        ";
            // line 170
            if (twig_in_filter("image", $context["value"])) {
                // line 171
                echo "                                            <a href=\"\" class=\"a-img\" id=\"0\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\" data-img=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">
                                                <img class=\"card-img-top\" src=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . $context["value"])), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"...\" style=\"width:11.9em;height:8em;\">
                                            </a>
                                        ";
            } elseif (twig_in_filter("video",             // line 174
$context["value"])) {
                // line 175
                echo "                                            <video controls class=\"card-img-top\" style=\"width:11.9em;height:9.3em;padding:0em;margin-top:2em !important;\"><source src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . $context["value"])), "html", null, true);
                echo "\"></video>
                                        ";
            }
            // line 177
            echo "                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                        ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 181, $this->source); })()), "embedsingle", [], "any", false, false, false, 181);
        echo "
                    </div>
                </div>
            </div>
        </section>
        <section class=\"text-center mt-5\" id=\"tricks\">
            <div class=\"container des-show px-4 px-lg-5\">
                <div class=\"text-center\">
                    <h5>";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 189, $this->source); })()), "description", [], "any", false, false, false, 189), "html", null, true);
        echo "</h5>
                </div>
            </div>
        </section>
        <section class=\"text-center mt-5\" style=\"padding-left:20em;padding-right:20em;\">
            <div class=\"row\" style=\"border-bottom: 2px solid black\">
                <div class=\"col-md-4 col-sm-4 col-xl-4\">
                    <h6 class=\"btn \">Date de création: ";
        // line 196
        ((twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 196, $this->source); })()), "creationDate", [], "any", false, false, false, 196)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 196, $this->source); })()), "creationDate", [], "any", false, false, false, 196), "d-m-Y H:i:s"), "html", null, true))) : (print ("")));
        echo "</h6>
                </div>
                <div class=\"col-md-4 col-sm-4 col-xl-4\">
                    <h6 class=\"btn \">Categorie: ";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 199, $this->source); })()), "category", [], "any", false, false, false, 199), "html", null, true);
        echo "</h6>
                </div>
                ";
        // line 201
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 201, $this->source); })()), "updateDate", [], "any", false, false, false, 201), null))) {
            // line 202
            echo "                    <div class=\"col-md-4 col-sm-4 col-xl-4\">
                        <h6 class=\"btn \">Modifié le: ";
            // line 203
            ((twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 203, $this->source); })()), "updateDate", [], "any", false, false, false, 203)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 203, $this->source); })()), "updateDate", [], "any", false, false, false, 203), "d-m-Y H:i:s"), "html", null, true))) : (print ("")));
            echo "</h6>
                    </div>
                ";
        }
        // line 206
        echo "            </div>
        </section>
        ";
        // line 208
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 209
            echo "            <section class=\"text-center mt-3\" style=\"padding-left:20em;padding-right:20em;\">
                ";
            // line 210
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 210, $this->source); })()), 'form_start');
            echo "
                    <div class=\"row\" style=\"border-bottom: 2px solid black;padding-left:10em;padding-right:20em;\">
                        <div class=\"col-sm-8 col-md-8 col-xl-8\">
                            ";
            // line 213
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 213, $this->source); })()), "content", [], "any", false, false, false, 213), 'row');
            echo "
                        </div>
                        <div class=\"col-sm-2 col-md-2 col-xl-2 mt-4 mb-5\">
                            ";
            // line 216
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 216, $this->source); })()), "envoyer", [], "any", false, false, false, 216), 'row');
            echo "
                        </div>
                    </div>
                ";
            // line 219
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 219, $this->source); })()), 'form_end');
            echo "
            </section>
        ";
        }
        // line 222
        echo "        <section class=\"text-center mt-5 grid\" style=\"padding-left:20em;padding-right:20em;\">
            ";
        // line 223
        $context["commentVar"] = false;
        // line 224
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 224, $this->source); })()), "comments", [], "any", false, false, false, 224));
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
            // line 225
            echo "                ";
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 225) % 5)) {
                // line 226
                echo "                    ";
                $context["commentVar"] = true;
                // line 227
                echo "                ";
            }
            // line 228
            echo "                <div class=\"row-more\">
                    <div class=\"row\">
                        <div class=\"col-md-2 col-sm-2 col-xl-2 mb-3\">
                            <i class=\"fas fa-3x fa-user-circle\"></i>
                        </div>
                        <div class=\"col-md-8 col-sm-8 col-xl-8 mt-3\">
                            <div class=\"container px-4 px-lg-5\" style=\"background-color: rgb(245, 245, 245);border-radius: 0.2em;\">
                                <h5>";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 235), "html", null, true);
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
        // line 241
        echo "            ";
        if ((0 === twig_compare((isset($context["commentVar"]) || array_key_exists("commentVar", $context) ? $context["commentVar"] : (function () { throw new RuntimeError('Variable "commentVar" does not exist.', 241, $this->source); })()), true))) {
            // line 242
            echo "                <button class=\"btn btn-primary ajax-load-more mb-5\">Charger plus</button>
            ";
        }
        // line 244
        echo "        </section>
        <!-- Footer-->
        <footer class=\"footer bg-black small text-center text-white-50\"><div class=\"container px-4 px-lg-5\">Copyright &copy; Your Website 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script>
            \$( document ).ready(function() {
                ";
        // line 266
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
        return array (  389 => 116,  386 => 115,  376 => 114,  327 => 266,  319 => 244,  315 => 242,  312 => 241,  292 => 235,  283 => 228,  280 => 227,  277 => 226,  274 => 225,  256 => 224,  254 => 223,  251 => 222,  245 => 219,  239 => 216,  233 => 213,  227 => 210,  224 => 209,  222 => 208,  218 => 206,  212 => 203,  209 => 202,  207 => 201,  202 => 199,  196 => 196,  186 => 189,  174 => 181,  165 => 177,  159 => 175,  157 => 174,  152 => 172,  147 => 171,  145 => 170,  140 => 167,  136 => 166,  111 => 144,  104 => 140,  96 => 135,  92 => 134,  87 => 131,  85 => 128,  81 => 126,  75 => 124,  72 => 123,  70 => 122,  65 => 117,  63 => 114,  44 => 97,);
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
                {# {% set break = false %}
                {% for key,value in trick.media %} #}
                    {# {% if break == false %} #}
                        {% if trick.mainImage != null %}
                            <img class=\"main-img-show\" src=\"{{ asset('upload/' ~ trick.mainImage[0])}}\" class=\"card-img-top\" alt=\"...\">
                        {% else %}
                            <img class=\"main-img-show\" src=\"../../public/assets/img/frontflip.jpg\" class=\"card-img-top\" alt=\"...\">
                        {% endif %}
                    {# {% endif %}
                    {% set break = true %}
                {% endfor %} #}
                <div>
                    <div class=\"row icon-show text-switch\">
                        <div class=\"col-xl-5 col-md-5\">
                            <form method=\"post\" style=\"max-width:1em;\" action=\"{{ path('tricks_delete', {'id': trick.id}) }}\" onsubmit=\"return confirm('Le trick va être supprimé');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ trick.id) }}\"/>
                                <button class=\"btn-del-2\" style=\"margin-left:1em;\"><i class=\"fas fa-trash-alt\"></i></button>
                            </form>
                        </div>
                        <div class=\"col-xl-3 col-md-3 \">
                            <a href=\"{{ path('tricks_edit', {id: trick.id}) }}\" style=\"margin-right:1em;margin-left:0.5em;color:white;\"><i class=\"fas fa-pencil-alt\"></i></a>
                        </div>
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
                        {{ trick.embedsingle|raw }}
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
                {% if trick.updateDate != null %}
                    <div class=\"col-md-4 col-sm-4 col-xl-4\">
                        <h6 class=\"btn \">Modifié le: {{ trick.updateDate ? trick.updateDate|date('d-m-Y H:i:s') : '' }}</h6>
                    </div>
                {% endif %}
            </div>
        </section>
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
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
        {% endif %}
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
