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
        <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
            <div class=\"container px-4 px-lg-5\">
                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    Menu
                    <i class=\"fas fa-bars\"></i>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#projects\">Projects</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#signup\">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class=\"masthead\">
            <div class=\"container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center\">
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
                <div class=\"row gx-0 mb-4 mb-lg-5 align-items-center\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 45
            echo "                    <div class=\"col-sm-12 col-md-2 col-xl-2\">
                        <div class=\"card\" style=\"width: 18rem;\">
                            <img src=\"assets/img/frontflip.jpg\" class=\"card-img-top\" alt=\"...\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</h5>
                                <p class=\"card-text\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "description", [], "any", false, false, false, 50), "html", null, true);
            echo "</p>
                                <a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tricks_index");
            echo "\" class=\"btn btn-primary\">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </div>
            </div>
        </section>
        <!-- Projects-->
        <section class=\"projects-section bg-light\" id=\"projects\">
            <div class=\"container px-4 px-lg-5\">
                <!-- Featured Project Row-->
                
                <!-- Project One Row-->
                <div class=\"row gx-0 mb-5 mb-lg-0 justify-content-center\">
                    <div class=\"col-lg-6\"><img class=\"img-fluid\" src=\"assets/img/demo-image-01.jpg\" alt=\"...\" /></div>
                    <div class=\"col-lg-6\">
                        <div class=\"bg-black text-center h-100 project\">
                            <div class=\"d-flex h-100\">
                                <div class=\"project-text w-100 my-auto text-center text-lg-left\">
                                    <h4 class=\"text-white\">Misty</h4>
                                    <p class=\"mb-0 text-white-50\">An example of where you can put an image of a project, or anything else, along with a description.</p>
                                    <hr class=\"d-none d-lg-block mb-0 ms-0\" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class=\"row gx-0 justify-content-center\">
                    <div class=\"col-lg-6\"><img class=\"img-fluid\" src=\"assets/img/demo-image-02.jpg\" alt=\"...\" /></div>
                    <div class=\"col-lg-6 order-lg-first\">
                        <div class=\"bg-black text-center h-100 project\">
                            <div class=\"d-flex h-100\">
                                <div class=\"project-text w-100 my-auto text-center text-lg-right\">
                                    <h4 class=\"text-white\">Mountains</h4>
                                    <p class=\"mb-0 text-white-50\">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                                    <hr class=\"d-none d-lg-block mb-0 me-0\" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class=\"signup-section\" id=\"signup\">
            <div class=\"container px-4 px-lg-5\">
                <div class=\"row gx-4 gx-lg-5\">
                    <div class=\"col-md-10 col-lg-8 mx-auto text-center\">
                        <i class=\"far fa-paper-plane fa-2x mb-2 text-white\"></i>
                        <h2 class=\"text-white mb-5\">Subscribe to receive updates!</h2>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class=\"form-signup\" id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">
                            <!-- Email address input-->
                            <div class=\"row input-group-newsletter\">
                                <div class=\"col\"><input class=\"form-control\" id=\"emailAddress\" type=\"email\" placeholder=\"Enter email address...\" aria-label=\"Enter email address...\" data-sb-validations=\"required,email\" /></div>
                                <div class=\"col-auto\"><button class=\"btn btn-primary disabled\" id=\"submitButton\" type=\"submit\">Notify Me!</button></div>
                            </div>
                            <div class=\"invalid-feedback mt-2\" data-sb-feedback=\"emailAddress:required\">An email is required.</div>
                            <div class=\"invalid-feedback mt-2\" data-sb-feedback=\"emailAddress:email\">Email is not valid.</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class=\"d-none\" id=\"submitSuccessMessage\">
                                <div class=\"text-center mb-3 mt-2 text-white\">
                                    <div class=\"fw-bolder\">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href=\"https://startbootstrap.com/solution/contact-forms\">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class=\"d-none\" id=\"submitErrorMessage\"><div class=\"text-center text-danger mb-3 mt-2\">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class=\"contact-section bg-black\">
            <div class=\"container px-4 px-lg-5\">
                <div class=\"row gx-4 gx-lg-5\">
                    <div class=\"col-md-4 mb-3 mb-md-0\">
                        <div class=\"card py-4 h-100\">
                            <div class=\"card-body text-center\">
                                <i class=\"fas fa-map-marked-alt text-primary mb-2\"></i>
                                <h4 class=\"text-uppercase m-0\">Address</h4>
                                <hr class=\"my-4 mx-auto\" />
                                <div class=\"small text-black-50\">4923 Market Street, Orlando FL</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-3 mb-md-0\">
                        <div class=\"card py-4 h-100\">
                            <div class=\"card-body text-center\">
                                <i class=\"fas fa-envelope text-primary mb-2\"></i>
                                <h4 class=\"text-uppercase m-0\">Email</h4>
                                <hr class=\"my-4 mx-auto\" />
                                <div class=\"small text-black-50\"><a href=\"#!\">hello@yourdomain.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-3 mb-md-0\">
                        <div class=\"card py-4 h-100\">
                            <div class=\"card-body text-center\">
                                <i class=\"fas fa-mobile-alt text-primary mb-2\"></i>
                                <h4 class=\"text-uppercase m-0\">Phone</h4>
                                <hr class=\"my-4 mx-auto\" />
                                <div class=\"small text-black-50\">+1 (555) 902-8832</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"social d-flex justify-content-center\">
                    <a class=\"mx-2\" href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"mx-2\" href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"mx-2\" href=\"#!\"><i class=\"fab fa-github\"></i></a>
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
        return array (  281 => 5,  278 => 4,  268 => 3,  119 => 56,  108 => 51,  104 => 50,  100 => 49,  94 => 45,  90 => 44,  50 => 6,  48 => 3,  44 => 1,);
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
        <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
            <div class=\"container px-4 px-lg-5\">
                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    Menu
                    <i class=\"fas fa-bars\"></i>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#projects\">Projects</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#signup\">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class=\"masthead\">
            <div class=\"container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center\">
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
                <div class=\"row gx-0 mb-4 mb-lg-5 align-items-center\">
                {% for list in tricks %}
                    <div class=\"col-sm-12 col-md-2 col-xl-2\">
                        <div class=\"card\" style=\"width: 18rem;\">
                            <img src=\"assets/img/frontflip.jpg\" class=\"card-img-top\" alt=\"...\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ list.name }}</h5>
                                <p class=\"card-text\">{{ list.description }}</p>
                                <a href=\"{{ path('tricks_index') }}\" class=\"btn btn-primary\">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
                </div>
            </div>
        </section>
        <!-- Projects-->
        <section class=\"projects-section bg-light\" id=\"projects\">
            <div class=\"container px-4 px-lg-5\">
                <!-- Featured Project Row-->
                
                <!-- Project One Row-->
                <div class=\"row gx-0 mb-5 mb-lg-0 justify-content-center\">
                    <div class=\"col-lg-6\"><img class=\"img-fluid\" src=\"assets/img/demo-image-01.jpg\" alt=\"...\" /></div>
                    <div class=\"col-lg-6\">
                        <div class=\"bg-black text-center h-100 project\">
                            <div class=\"d-flex h-100\">
                                <div class=\"project-text w-100 my-auto text-center text-lg-left\">
                                    <h4 class=\"text-white\">Misty</h4>
                                    <p class=\"mb-0 text-white-50\">An example of where you can put an image of a project, or anything else, along with a description.</p>
                                    <hr class=\"d-none d-lg-block mb-0 ms-0\" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class=\"row gx-0 justify-content-center\">
                    <div class=\"col-lg-6\"><img class=\"img-fluid\" src=\"assets/img/demo-image-02.jpg\" alt=\"...\" /></div>
                    <div class=\"col-lg-6 order-lg-first\">
                        <div class=\"bg-black text-center h-100 project\">
                            <div class=\"d-flex h-100\">
                                <div class=\"project-text w-100 my-auto text-center text-lg-right\">
                                    <h4 class=\"text-white\">Mountains</h4>
                                    <p class=\"mb-0 text-white-50\">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                                    <hr class=\"d-none d-lg-block mb-0 me-0\" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class=\"signup-section\" id=\"signup\">
            <div class=\"container px-4 px-lg-5\">
                <div class=\"row gx-4 gx-lg-5\">
                    <div class=\"col-md-10 col-lg-8 mx-auto text-center\">
                        <i class=\"far fa-paper-plane fa-2x mb-2 text-white\"></i>
                        <h2 class=\"text-white mb-5\">Subscribe to receive updates!</h2>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class=\"form-signup\" id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">
                            <!-- Email address input-->
                            <div class=\"row input-group-newsletter\">
                                <div class=\"col\"><input class=\"form-control\" id=\"emailAddress\" type=\"email\" placeholder=\"Enter email address...\" aria-label=\"Enter email address...\" data-sb-validations=\"required,email\" /></div>
                                <div class=\"col-auto\"><button class=\"btn btn-primary disabled\" id=\"submitButton\" type=\"submit\">Notify Me!</button></div>
                            </div>
                            <div class=\"invalid-feedback mt-2\" data-sb-feedback=\"emailAddress:required\">An email is required.</div>
                            <div class=\"invalid-feedback mt-2\" data-sb-feedback=\"emailAddress:email\">Email is not valid.</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class=\"d-none\" id=\"submitSuccessMessage\">
                                <div class=\"text-center mb-3 mt-2 text-white\">
                                    <div class=\"fw-bolder\">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href=\"https://startbootstrap.com/solution/contact-forms\">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class=\"d-none\" id=\"submitErrorMessage\"><div class=\"text-center text-danger mb-3 mt-2\">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class=\"contact-section bg-black\">
            <div class=\"container px-4 px-lg-5\">
                <div class=\"row gx-4 gx-lg-5\">
                    <div class=\"col-md-4 mb-3 mb-md-0\">
                        <div class=\"card py-4 h-100\">
                            <div class=\"card-body text-center\">
                                <i class=\"fas fa-map-marked-alt text-primary mb-2\"></i>
                                <h4 class=\"text-uppercase m-0\">Address</h4>
                                <hr class=\"my-4 mx-auto\" />
                                <div class=\"small text-black-50\">4923 Market Street, Orlando FL</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-3 mb-md-0\">
                        <div class=\"card py-4 h-100\">
                            <div class=\"card-body text-center\">
                                <i class=\"fas fa-envelope text-primary mb-2\"></i>
                                <h4 class=\"text-uppercase m-0\">Email</h4>
                                <hr class=\"my-4 mx-auto\" />
                                <div class=\"small text-black-50\"><a href=\"#!\">hello@yourdomain.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-3 mb-md-0\">
                        <div class=\"card py-4 h-100\">
                            <div class=\"card-body text-center\">
                                <i class=\"fas fa-mobile-alt text-primary mb-2\"></i>
                                <h4 class=\"text-uppercase m-0\">Phone</h4>
                                <hr class=\"my-4 mx-auto\" />
                                <div class=\"small text-black-50\">+1 (555) 902-8832</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"social d-flex justify-content-center\">
                    <a class=\"mx-2\" href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"mx-2\" href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"mx-2\" href=\"#!\"><i class=\"fab fa-github\"></i></a>
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
