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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 33, $this->source); })()));
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
            // line 34
            echo "                        ";
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 34) % 5)) {
                // line 35
                echo "                            <div class=\"row mb-4 mb-lg-5 align-items-center\">
                                <div class=\"col-md-1\"></div>
                        ";
            }
            // line 38
            echo "                        <div class=\"col-sm-12 col-md-2 col-xl-2 mr-2\">
                            <div class=\"card\" style=\"width: 12rem;\">
                                <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["list"], "Media", [], "any", false, false, false, 40), 0, [], "array", false, false, false, 40))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\" style=\"width:11.9em;height:8em;\">
                                <div class=\"card-body\">
                                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tricks_show", ["id" => twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</a>
                                    <a href=\"\" style=\"margin-left:1em;\"><i class=\"fas fa-trash-alt\"></i></a>
                                    <a href=\"\" style=\"margin-left:1em;\"><i class=\"fas fa-pencil-alt\"></i></a>

                                </div>
                            </div>
                        </div>
                        ";
            // line 49
            if (((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 49) % 5) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 49))) {
                // line 50
                echo "                            </div>
                        ";
            }
            // line 52
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
        // line 53
        echo "                    <div class=\"btn-top\">
                        <a class=\"btn\" href=\"#home\"><i class=\"fas fa-3x fa-arrow-circle-up\"></i></a>
                    </div>
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
        return array (  212 => 10,  209 => 9,  199 => 8,  189 => 5,  186 => 4,  176 => 3,  147 => 53,  133 => 52,  129 => 50,  127 => 49,  115 => 42,  110 => 40,  106 => 38,  101 => 35,  98 => 34,  81 => 33,  57 => 11,  55 => 8,  51 => 6,  49 => 3,  45 => 1,);
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
                    {% for list in tricks %}
                        {% if loop.index0 is divisible by(5) %}
                            <div class=\"row mb-4 mb-lg-5 align-items-center\">
                                <div class=\"col-md-1\"></div>
                        {% endif %}
                        <div class=\"col-sm-12 col-md-2 col-xl-2 mr-2\">
                            <div class=\"card\" style=\"width: 12rem;\">
                                <img src=\"{{ asset('upload/' ~ list.Media[0])}}\" class=\"card-img-top\" alt=\"...\" style=\"width:11.9em;height:8em;\">
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
                    </div>
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
", "index.html.twig", "C:\\MAMP\\htdocs\\P6ElouanPeurou\\P6ElouanPeurou\\templates\\index.html.twig");
    }
}
