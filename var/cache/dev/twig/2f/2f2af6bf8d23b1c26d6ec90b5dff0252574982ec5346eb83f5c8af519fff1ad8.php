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

/* index.html.twig */
class __TwigTemplate_78a0b84b7358410182e90a4ae0e4873e21106f7c74b7f44b1acd3e00e10f74e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'navbar' => [$this, 'block_navbar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    ";
        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 6
        echo "    <body id=\"page-top\">
        <!-- Navigation-->
        ";
        // line 8
        $this->displayBlock('navbar', $context, $blocks);
        // line 11
        echo "        <!-- Masthead-->
        <header class=\"masthead\">
            <div class=\"container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center\" id=\"home\">
                <div>
                    <div class=\"text-center mt-5\">
                        <h1 class=\"mx-auto my-0 text-uppercase\">SnowTricks</h1>
                        <h2 class=\"text-white-50 mx-auto mt-2 mb-5\">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h2>
                    </div>
                    <div class=\"btn-bottom\">
                        <a class=\"btn\" style=\"color:white;\" href=\"#tricks\"><i class=\"fas fa-3x fa-arrow-circle-down\"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class=\"text-center mt-5\" id=\"tricks\">
            <div class=\"container px-4 px-lg-5\">
                <div class=\"text-center\">
                    <h3>Tricks</h3>
                </div>
                <div class=\"row mb-4 mb-lg-5 align-items-center\">
                    <div class=\"col-md-1\"></div>
                    ";
        // line 33
        $context["commentVar"] = false;
        // line 34
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 34, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 35
            echo "                        ";
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 35) % 5)) {
                // line 36
                echo "                            ";
                $context["commentVar"] = true;
                // line 37
                echo "                            <div class=\"row mb-4 mb-lg-5 align-items-center\">
                                <div class=\"col-md-1\"></div>
                        ";
            }
            // line 40
            echo "                        <div class=\"col-sm-12 col-md-2 col-xl-2 mr-2\">
                            <div class=\"card\" style=\"width: 12rem;\">
                                ";
            // line 45
            echo "                                        ";
            // line 48
            echo "                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["list"], "mainImage", [], "any", false, false, false, 48), null))) {
                // line 49
                echo "                                                <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list"], "mainImage", [], "any", false, false, false, 49), 0, [], "array", false, false, false, 49))), "html", null, true);
                echo "\" alt=\"...\">
                                            ";
            } else {
                // line 51
                echo "                                                <img class=\"card-img-top\" src=\"../public/assets/img/frontflip.jpg\" alt=\"...\">
                                            ";
            }
            // line 53
            echo "                                        ";
            // line 54
            echo "                                    ";
            // line 57
            echo "                                
                                <div class=\"card-body\">
                                    ";
            // line 60
            echo "                                    <div class=\"row\">
                                        <div class=\"col-xl-6 col-md-6\">
                                            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tricks_show", ["id" => twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 62)), 6))) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 62), 0, 6) . "...")) : (twig_get_attribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 62))), "html", null, true);
            echo "</a>
                                        </div>
                                        ";
            // line 64
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 65
                echo "                                            <div class=\"col-xl-3 col-md-3\">
                                                <form method=\"post\" style=\"max-width:1em;\" action=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('Le trick va ??tre supprim??');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 67))), "html", null, true);
                echo "\"/>
                                                    <button class=\"btn-del\"><i class=\"fas fa-trash-alt\"></i></button>
                                                </form>
                                            </div>
                                            <div class=\"col-xl-3 col-md-3\">
                                                ";
                // line 73
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\" style=\"margin-left:0em;\"><i class=\"fas fa-pencil-alt\"></i></a>
                                            </div>
                                        ";
            }
            // line 76
            echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
            // line 80
            if (((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 80) % 5) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 80))) {
                // line 81
                echo "                            </div>
                        ";
            }
            // line 83
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                    ";
        if ((0 === twig_compare((isset($context["commentVar"]) || array_key_exists("commentVar", $context) ? $context["commentVar"] : (function () { throw new RuntimeError('Variable "commentVar" does not exist.', 84, $this->source); })()), true))) {
            // line 85
            echo "                        <button class=\"btn btn-primary ajax-load-more mb-5\">Charger plus</button>
                    ";
        }
        // line 87
        echo "                    <div class=\"btn-top\">
                        <a class=\"btn\" href=\"#home\"><i class=\"fas fa-3x fa-arrow-circle-up\"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class=\"footer bg-black small text-center text-white-50\"><div class=\"container px-4 px-lg-5\">Copyright &copy; Your Website 2021</div></footer>
        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 96
            echo "        <div class=\"modal fade\" id=\"modalSuccess\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Succ??s</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row\">
                            <div class=\"col-xl-8 col-md-8\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">";
            // line 106
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h5>
                            </div>
                            <div class=\"col-xl-3 col-md-3\">
                            <i style=\"color:green;\" class=\"far fa-3x fa-check-circle mt-2\"></i>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Retour</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
        \$( document ).ready(function() {
            \$('#modalSuccess').modal('show')
        });
        </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "        <script>
            \$( \".row-more:lt(10)\" ).css( \"display\", \"block\" );
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

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "        ";
        $this->loadTemplate("header.html.twig", "index.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 9
        echo "            ";
        $this->loadTemplate("navbar.html.twig", "index.html.twig", 9)->display($context);
        // line 10
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 10,  335 => 9,  325 => 8,  315 => 5,  312 => 4,  302 => 3,  258 => 125,  233 => 106,  221 => 96,  217 => 95,  207 => 87,  203 => 85,  200 => 84,  186 => 83,  182 => 81,  180 => 80,  174 => 76,  167 => 73,  159 => 67,  155 => 66,  152 => 65,  150 => 64,  143 => 62,  139 => 60,  135 => 57,  133 => 54,  131 => 53,  127 => 51,  121 => 49,  118 => 48,  116 => 45,  112 => 40,  107 => 37,  104 => 36,  101 => 35,  83 => 34,  81 => 33,  57 => 11,  55 => 8,  51 => 6,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    {% block header %}
        {% include \"header.html.twig\" %}
    {% endblock %}
    <body id=\"page-top\">
        <!-- Navigation-->
        {% block navbar %}
            {% include \"navbar.html.twig\" %}
        {% endblock %}
        <!-- Masthead-->
        <header class=\"masthead\">
            <div class=\"container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center\" id=\"home\">
                <div>
                    <div class=\"text-center mt-5\">
                        <h1 class=\"mx-auto my-0 text-uppercase\">SnowTricks</h1>
                        <h2 class=\"text-white-50 mx-auto mt-2 mb-5\">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h2>
                    </div>
                    <div class=\"btn-bottom\">
                        <a class=\"btn\" style=\"color:white;\" href=\"#tricks\"><i class=\"fas fa-3x fa-arrow-circle-down\"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class=\"text-center mt-5\" id=\"tricks\">
            <div class=\"container px-4 px-lg-5\">
                <div class=\"text-center\">
                    <h3>Tricks</h3>
                </div>
                <div class=\"row mb-4 mb-lg-5 align-items-center\">
                    <div class=\"col-md-1\"></div>
                    {% set commentVar = false %}
                    {% for list in tricks %}
                        {% if loop.index0 is divisible by(5) %}
                            {% set commentVar = true  %}
                            <div class=\"row mb-4 mb-lg-5 align-items-center\">
                                <div class=\"col-md-1\"></div>
                        {% endif %}
                        <div class=\"col-sm-12 col-md-2 col-xl-2 mr-2\">
                            <div class=\"card\" style=\"width: 12rem;\">
                                {# {% set break = false %}
                                {% for key,value in list.Media %}
                                    {% if break == false %} #}
                                        {# {% if list.mainImage != null %}
                                            <img class=\"main-img-show\" src=\"{{ asset('upload/' ~ list.mainImage[0])}}\" class=\"card-img-top\" alt=\"...\">
                                        {% else  %} #}
                                            {% if list.mainImage != null %}
                                                <img class=\"card-img-top\" src=\"{{ asset('upload/' ~ list.mainImage[0])}}\" alt=\"...\">
                                            {% else %}
                                                <img class=\"card-img-top\" src=\"../public/assets/img/frontflip.jpg\" alt=\"...\">
                                            {% endif %}
                                        {# {% endif %} #}
                                    {# {% endif %}
                                    {% set break = true %}
                                {% endfor %} #}
                                
                                <div class=\"card-body\">
                                    {# <a href=\"{{ path('tricks_show', {id: list.id}) }}\">{{ list.name }}</a> #}
                                    <div class=\"row\">
                                        <div class=\"col-xl-6 col-md-6\">
                                            <a href=\"{{ path('tricks_show', {id: list.id}) }}\">{{ list.name|length > 6 ? list.name|slice(0, 6) ~ '...' : list.name  }}</a>
                                        </div>
                                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                            <div class=\"col-xl-3 col-md-3\">
                                                <form method=\"post\" style=\"max-width:1em;\" action=\"{{ path('tricks_delete', {'id': list.id}) }}\" onsubmit=\"return confirm('Le trick va ??tre supprim??');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ list.id) }}\"/>
                                                    <button class=\"btn-del\"><i class=\"fas fa-trash-alt\"></i></button>
                                                </form>
                                            </div>
                                            <div class=\"col-xl-3 col-md-3\">
                                                {# <a href=\"{{ path('tricks_delete', {id: list.id}) }}\" style=\"margin-left:1em;\"><i class=\"fas fa-trash-alt\"></i></a> #}
                                                <a href=\"{{ path('tricks_edit', {id: list.id}) }}\" style=\"margin-left:0em;\"><i class=\"fas fa-pencil-alt\"></i></a>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% if loop.index is divisible by(5) or loop.last %}
                            </div>
                        {% endif %}
                    {% endfor %}
                    {% if commentVar == true %}
                        <button class=\"btn btn-primary ajax-load-more mb-5\">Charger plus</button>
                    {% endif %}
                    <div class=\"btn-top\">
                        <a class=\"btn\" href=\"#home\"><i class=\"fas fa-3x fa-arrow-circle-up\"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class=\"footer bg-black small text-center text-white-50\"><div class=\"container px-4 px-lg-5\">Copyright &copy; Your Website 2021</div></footer>
        {% for message in app.flashes('success') %}
        <div class=\"modal fade\" id=\"modalSuccess\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Succ??s</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row\">
                            <div class=\"col-xl-8 col-md-8\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">{{ message }}</h5>
                            </div>
                            <div class=\"col-xl-3 col-md-3\">
                            <i style=\"color:green;\" class=\"far fa-3x fa-check-circle mt-2\"></i>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Retour</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
        \$( document ).ready(function() {
            \$('#modalSuccess').modal('show')
        });
        </script>
        {% endfor %}
        <script>
            \$( \".row-more:lt(10)\" ).css( \"display\", \"block\" );
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
", "index.html.twig", "C:\\MAMP\\htdocs\\P6ElouanPeurou\\P6ElouanPeurou\\templates\\index.html.twig");
    }
}
