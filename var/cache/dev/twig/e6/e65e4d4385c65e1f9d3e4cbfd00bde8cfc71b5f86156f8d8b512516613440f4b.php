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
                ";
        // line 119
        $context["break"] = false;
        // line 120
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 120, $this->source); })()), "media", [], "any", false, false, false, 120));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 121
            echo "                    ";
            if ((0 === twig_compare((isset($context["break"]) || array_key_exists("break", $context) ? $context["break"] : (function () { throw new RuntimeError('Variable "break" does not exist.', 121, $this->source); })()), false))) {
                // line 122
                echo "                        ";
                if (twig_in_filter("image", $context["value"])) {
                    // line 123
                    echo "                            <img class=\"main-img-show\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 123, $this->source); })()), "media", [], "any", false, false, false, 123), 0, [], "array", false, false, false, 123))), "html", null, true);
                    echo "\" class=\"card-img-top\" alt=\"...\">
                        ";
                } else {
                    // line 125
                    echo "                            <img class=\"main-img-show\" src=\"../../public/assets/img/frontflip.jpg\" class=\"card-img-top\" alt=\"...\">
                        ";
                }
                // line 127
                echo "                    ";
            }
            // line 128
            echo "                    ";
            $context["break"] = true;
            // line 129
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                <div>
                    <div class=\"centered-show\">
                        <h1 class=\"mx-auto my-0 text-uppercase text-switch\">";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 132, $this->source); })()), "name", [], "any", false, false, false, 132), "html", null, true);
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
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 142, $this->source); })()), "media", [], "any", false, false, false, 142));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 143
            echo "                            <div class=\"col-sm-12 col-md-2 col-xl-2 mr-2 mycol\">
                                <div class=\"card\" style=\"width:12rem;border:none;\">
                                    <div style=\"margin-right:1em;\">
                                        ";
            // line 146
            if (twig_in_filter("image", $context["value"])) {
                // line 147
                echo "                                            <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . $context["value"])), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"...\" style=\"width:11.9em;height:8em;\">
                                        ";
            } elseif (twig_in_filter("video",             // line 148
$context["value"])) {
                // line 149
                echo "                                            <video controls class=\"card-img-top\" style=\"width:11.9em;height:9.3em;padding:0em;margin-top:2em !important;\"><source src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . $context["value"])), "html", null, true);
                echo "\"></video>
                                        ";
            }
            // line 151
            echo "                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                    </div>
                </div>
            </div>
        </section>
        <section class=\"text-center mt-5\" id=\"tricks\">
            <div class=\"container des-show px-4 px-lg-5\">
                <div class=\"text-center\">
                    <h5>";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 162, $this->source); })()), "description", [], "any", false, false, false, 162), "html", null, true);
        echo "</h5>
                </div>
            </div>
        </section>
        <section class=\"text-center mt-5\" style=\"padding-left:20em;padding-right:20em;\">
            <div class=\"row\" style=\"border-bottom: 2px solid black\">
                <div class=\"col-md-4 col-sm-4 col-xl-4\">
                    <h6 class=\"btn \">Date de création: ";
        // line 169
        ((twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 169, $this->source); })()), "creationDate", [], "any", false, false, false, 169)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 169, $this->source); })()), "creationDate", [], "any", false, false, false, 169), "d-m-Y H:i:s"), "html", null, true))) : (print ("")));
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
        // line 180
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 180, $this->source); })()), 'form_start');
        echo "
                <div class=\"row\" style=\"border-bottom: 2px solid black;padding-left:10em;padding-right:20em;\">
                    <div class=\"col-sm-8 col-md-8 col-xl-8 mb-5\">
                        ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 183, $this->source); })()), "content", [], "any", false, false, false, 183), 'row');
        echo "
                    </div>
                    <div class=\"col-sm-2 col-md-2 col-xl-2 mt-4 mb-5\">
                        ";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 186, $this->source); })()), "envoyer", [], "any", false, false, false, 186), 'row');
        echo "
                    </div>
                </div>
            ";
        // line 189
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 189, $this->source); })()), 'form_end');
        echo "
        </section>
        <section class=\"text-center mt-5\" style=\"padding-left:20em;padding-right:20em;\">
            ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 192, $this->source); })()), "comments", [], "any", false, false, false, 192));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 193
            echo "                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-2 col-xl-2 mb-3\">
                        <i class=\"fas fa-3x fa-user-circle\"></i>
                    </div>
                    <div class=\"col-md-8 col-sm-8 col-xl-8 mt-3\">
                        <div class=\"container px-4 px-lg-5\" style=\"background-color: rgb(245, 245, 245);border-radius: 0.2em;\">
                            <h5>";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 199), "html", null, true);
            echo "</h5>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "            <div class=\"interior container clearfix\">
   <div class=\"row\"> 
      <div class=\"col-xs-12 col-sm-6 col-md-12 blogBox\">
         <div class=\"item featured\">
            <img src=\"https://www.solodev.com/assets/fancy/travel3.jpg\">
            <div class=\"blogTxt\">
               <div class=\"blogCategory\">
                  <a href=\"/\">Business Intelligence</a>
               </div>
               <h2>
                  Eu qui dolore altera, saepe molestie accusamus
               </h2>
               <p class=\"post_intro hidden-xs\">
                  An erant partem albucius quo, ad graece latine atomorum sea, sit dicant laoreet at. Id has chor...
               </p>
            </div>
         </div>
      </div>
      <div class=\"col-xs-12 col-sm-6 col-md-4 blogBox moreBox\" >
         <div class=\"item\">
            <img src=\"https://www.solodev.com/assets/fancy/travel5.jpg\">
            <div class=\"blogTxt\">
               <div class=\"blogCategory\">
                  <a href=\"/\">Virtual Reality</a>
               </div>
               <h2>
                  Ea delicata deterru isset concluda turque
               </h2>
               <p class=\"post_intro hidden-xs\">
                  Mel ut enim atqui, ne eum tation populo delectus. Vim soluta insolens phaedrum et, lucilius par...
               </p>
            </div>
         </div>
      </div>
      <div class=\"col-xs-12 col-sm-6 col-md-4 blogBox moreBox\" >
         <div class=\"item\">
            <img src=\"https://www.solodev.com/assets/fancy/travel6.jpg\">
            <div class=\"blogTxt\">
               <div class=\"blogCategory\">
                  <a href=\"/\">Internet of Things (IoT)</a>
               </div>
               <h2>
                  No vim quis quodsi, etiam quaestio euripidis
               </h2>
               <p class=\"post_intro hidden-xs\">
                  Sed possim nonumes no, iuvaret similique quo no. Ut sea idque option aliquando. Ei mea choro ap...
               </p>
            </div>
         </div>
      </div>
      <div class=\"col-xs-12 col-sm-6 col-md-4 blogBox moreBox\" >
         <div class=\"item\">
            <img src=\"https://www.solodev.com/assets/fancy/travel9.jpg\">
            <div class=\"blogTxt\">
               <div class=\"blogCategory\">
                  <a href=\"/\">Artifical Intelligence</a>
               </div>
               <h2>
                  Qui an alii magna consectetuer
               </h2>
               <p class=\"post_intro hidden-xs\">
                  Ad populo appareat vulputate vix, ex fastidii signiferumque pro. In sea doming reprehendunt. Na...
               </p>
            </div>
         </div>
      </div>
      <div class=\"col-xs-12 col-sm-6 col-md-4 blogBox moreBox\" style=\"display: none;\">
         <div class=\"item\">
            <img src=\"https://www.solodev.com/assets/fancy/travel7.jpg\">
            <div class=\"blogTxt\">
               <div class=\"blogCategory\">
                  <a href=\"/\">Big Data</a>
               </div>
               <h2>
                  Integre voluptatum cu quo iriure docendi senserit
               </h2>
               <p class=\"post_intro hidden-xs\">
                  Delicata inciderint at per, eu partem principes eum, illud nobis appetere ex his. Ei vix melior...
               </p>
            </div>
         </div>
      </div>
      <div class=\"col-xs-12 col-sm-6 col-md-4 blogBox moreBox\" style=\"display: none;\">
         <div class=\"item\">
            <img src=\"https://www.solodev.com/assets/fancy/travel8.jpg\">
            <div class=\"blogTxt\">
               <div class=\"blogCategory\">
                  <a href=\"/\">Growth Hacking</a>
               </div>
               <h2>
                  Pro brute causae aliquip ad
               </h2>
               <p class=\"post_intro hidden-xs\">
                  No ipsum invidunt eos, ei ius dicit platonem perpetua. Mea te feugait ocurreret aliquando, ei i...
               </p>
            </div>
         </div>
      </div>
      <div class=\"col-xs-12 col-sm-6 col-md-4 blogBox moreBox\" style=\"display: none;\">
         <div class=\"item\">
            <img src=\"https://www.solodev.com/assets/fancy/travel2.jpg\">
            <div class=\"blogTxt\">
               <div class=\"blogCategory\">
                  <a href=\"/\">Content Marketing</a>
               </div>
               <h2>
                  Lorem ipsum dolor sit amet, consect adipiscing elit
               </h2>
               <p class=\"post_intro hidden-xs\">
                  Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ...
               </p>
            </div>
         </div>
      </div>
      <div id=\"loadMore\" style=\"\">
         <a href=\"#\">Load More</a>
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
        <script>
        \$( document ).ready(function () {
\t\t\$(\".moreBox\").slice(0, 3).show();
\t\tif (\$(\".blogBox:hidden\").length != 0) {
\t\t\t\$(\"#loadMore\").show();
\t\t}\t\t
\t\t\$(\"#loadMore\").on('click', function (e) {
\t\t\te.preventDefault();
\t\t\t\$(\".moreBox:hidden\").slice(0, 6).slideDown();
\t\t\tif (\$(\".moreBox:hidden\").length == 0) {
\t\t\t\t\$(\"#loadMore\").fadeOut('slow');
\t\t\t}
\t\t});
\t});
        </script>
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
        return array (  406 => 115,  403 => 114,  393 => 113,  234 => 204,  223 => 199,  215 => 193,  211 => 192,  205 => 189,  199 => 186,  193 => 183,  187 => 180,  173 => 169,  163 => 162,  154 => 155,  145 => 151,  139 => 149,  137 => 148,  132 => 147,  130 => 146,  125 => 143,  121 => 142,  108 => 132,  104 => 130,  98 => 129,  95 => 128,  92 => 127,  88 => 125,  82 => 123,  79 => 122,  76 => 121,  71 => 120,  69 => 119,  64 => 116,  62 => 113,  44 => 97,);
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
                    <div class=\"col-sm-8 col-md-8 col-xl-8 mb-5\">
                        {{ form_row(commentForm.content) }}
                    </div>
                    <div class=\"col-sm-2 col-md-2 col-xl-2 mt-4 mb-5\">
                        {{ form_row(commentForm.envoyer) }}
                    </div>
                </div>
            {{ form_end(commentForm) }}
        </section>
        <section class=\"text-center mt-5\" style=\"padding-left:20em;padding-right:20em;\">
            {% for comment in trick.comments %}
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
            {% endfor %}
            <div class=\"interior container clearfix\">
   <div class=\"row\"> 
      <div class=\"col-xs-12 col-sm-6 col-md-12 blogBox\">
         <div class=\"item featured\">
            <img src=\"https://www.solodev.com/assets/fancy/travel3.jpg\">
            <div class=\"blogTxt\">
               <div class=\"blogCategory\">
                  <a href=\"/\">Business Intelligence</a>
               </div>
               <h2>
                  Eu qui dolore altera, saepe molestie accusamus
               </h2>
               <p class=\"post_intro hidden-xs\">
                  An erant partem albucius quo, ad graece latine atomorum sea, sit dicant laoreet at. Id has chor...
               </p>
            </div>
         </div>
      </div>
      <div class=\"col-xs-12 col-sm-6 col-md-4 blogBox moreBox\" >
         <div class=\"item\">
            <img src=\"https://www.solodev.com/assets/fancy/travel5.jpg\">
            <div class=\"blogTxt\">
               <div class=\"blogCategory\">
                  <a href=\"/\">Virtual Reality</a>
               </div>
               <h2>
                  Ea delicata deterru isset concluda turque
               </h2>
               <p class=\"post_intro hidden-xs\">
                  Mel ut enim atqui, ne eum tation populo delectus. Vim soluta insolens phaedrum et, lucilius par...
               </p>
            </div>
         </div>
      </div>
      <div class=\"col-xs-12 col-sm-6 col-md-4 blogBox moreBox\" >
         <div class=\"item\">
            <img src=\"https://www.solodev.com/assets/fancy/travel6.jpg\">
            <div class=\"blogTxt\">
               <div class=\"blogCategory\">
                  <a href=\"/\">Internet of Things (IoT)</a>
               </div>
               <h2>
                  No vim quis quodsi, etiam quaestio euripidis
               </h2>
               <p class=\"post_intro hidden-xs\">
                  Sed possim nonumes no, iuvaret similique quo no. Ut sea idque option aliquando. Ei mea choro ap...
               </p>
            </div>
         </div>
      </div>
      <div class=\"col-xs-12 col-sm-6 col-md-4 blogBox moreBox\" >
         <div class=\"item\">
            <img src=\"https://www.solodev.com/assets/fancy/travel9.jpg\">
            <div class=\"blogTxt\">
               <div class=\"blogCategory\">
                  <a href=\"/\">Artifical Intelligence</a>
               </div>
               <h2>
                  Qui an alii magna consectetuer
               </h2>
               <p class=\"post_intro hidden-xs\">
                  Ad populo appareat vulputate vix, ex fastidii signiferumque pro. In sea doming reprehendunt. Na...
               </p>
            </div>
         </div>
      </div>
      <div class=\"col-xs-12 col-sm-6 col-md-4 blogBox moreBox\" style=\"display: none;\">
         <div class=\"item\">
            <img src=\"https://www.solodev.com/assets/fancy/travel7.jpg\">
            <div class=\"blogTxt\">
               <div class=\"blogCategory\">
                  <a href=\"/\">Big Data</a>
               </div>
               <h2>
                  Integre voluptatum cu quo iriure docendi senserit
               </h2>
               <p class=\"post_intro hidden-xs\">
                  Delicata inciderint at per, eu partem principes eum, illud nobis appetere ex his. Ei vix melior...
               </p>
            </div>
         </div>
      </div>
      <div class=\"col-xs-12 col-sm-6 col-md-4 blogBox moreBox\" style=\"display: none;\">
         <div class=\"item\">
            <img src=\"https://www.solodev.com/assets/fancy/travel8.jpg\">
            <div class=\"blogTxt\">
               <div class=\"blogCategory\">
                  <a href=\"/\">Growth Hacking</a>
               </div>
               <h2>
                  Pro brute causae aliquip ad
               </h2>
               <p class=\"post_intro hidden-xs\">
                  No ipsum invidunt eos, ei ius dicit platonem perpetua. Mea te feugait ocurreret aliquando, ei i...
               </p>
            </div>
         </div>
      </div>
      <div class=\"col-xs-12 col-sm-6 col-md-4 blogBox moreBox\" style=\"display: none;\">
         <div class=\"item\">
            <img src=\"https://www.solodev.com/assets/fancy/travel2.jpg\">
            <div class=\"blogTxt\">
               <div class=\"blogCategory\">
                  <a href=\"/\">Content Marketing</a>
               </div>
               <h2>
                  Lorem ipsum dolor sit amet, consect adipiscing elit
               </h2>
               <p class=\"post_intro hidden-xs\">
                  Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ...
               </p>
            </div>
         </div>
      </div>
      <div id=\"loadMore\" style=\"\">
         <a href=\"#\">Load More</a>
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
        <script>
        \$( document ).ready(function () {
\t\t\$(\".moreBox\").slice(0, 3).show();
\t\tif (\$(\".blogBox:hidden\").length != 0) {
\t\t\t\$(\"#loadMore\").show();
\t\t}\t\t
\t\t\$(\"#loadMore\").on('click', function (e) {
\t\t\te.preventDefault();
\t\t\t\$(\".moreBox:hidden\").slice(0, 6).slideDown();
\t\t\tif (\$(\".moreBox:hidden\").length == 0) {
\t\t\t\t\$(\"#loadMore\").fadeOut('slow');
\t\t\t}
\t\t});
\t});
        </script>
    </body>
</html>

", "tricks/show.html.twig", "C:\\MAMP\\htdocs\\P6ElouanPeurou\\P6ElouanPeurou\\templates\\tricks\\show.html.twig");
    }
}
