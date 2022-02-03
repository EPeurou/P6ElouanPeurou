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
class __TwigTemplate_136fd6e5529fe9929764b2110df4a6c66cd6fad16419951811c6f71f216ce83b extends Template
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
        // line 42
        echo "                        ";
        // line 45
        echo "                            ";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 45, $this->source); })()), "mainImage", [], "any", false, false, false, 45), null))) {
            // line 46
            echo "                                <img class=\"main-img-show\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 46, $this->source); })()), "mainImage", [], "any", false, false, false, 46), 0, [], "array", false, false, false, 46))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\">
                            ";
        } else {
            // line 48
            echo "                                <img class=\"main-img-show\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/frontflip.jpg"), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\">
                            ";
        }
        // line 50
        echo "                        ";
        // line 51
        echo "                    ";
        // line 54
        echo "                <div>
                    <div class=\"icon-show text-switch\">
                        ";
        // line 56
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 56, $this->source); })()), "mainImage", [], "any", false, false, false, 56), null))) {
            // line 57
            echo "                            <a href=\"\" class=\"del-main-img\" data-bs-toggle=\"modal\" data-bs-target=\"#mainImageModalDel\" style=\"margin-left:1em;color:white;\"><i class=\"fas fa-trash-alt\"></i></a>
                        ";
        }
        // line 59
        echo "                        <a href=\"\" data-bs-toggle=\"modal\" data-bs-target=\"#mainImageModal\"  style=\"margin-right:1em;margin-left:1em;color:white;\"><i class=\"fas fa-pencil-alt\"></i></a>
                    </div>
                    <div class=\"centered-show\">
                        <h1 class=\"mx-auto my-0 text-uppercase text-switch\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 62, $this->source); })()), "name", [], "any", false, false, false, 62), "html", null, true);
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
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "media", [], "any", false, false, false, 75), 'row');
        echo "
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"ok-btn btn btn-secondary\" data-bs-dismiss=\"modal\">Ok</button>
                        <input type=\"hidden\" id=\"inputHidden1\">
                        <input type=\"hidden\" id=\"inputHidden2\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal fade\" id=\"mainImageModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Remplacer l'image principale</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "mainImage", [], "any", false, false, false, 93), 'row');
        echo "
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"ok-main btn btn-secondary\" data-bs-dismiss=\"modal\">Ok</button>
                    </div>
                </div>
            </div> 
        </div>
        <div class=\"modal fade\" id=\"mainImageModalDel\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <i class=\"fas fa-2x fa-exclamation-triangle\"></i><h5>Souhaitez vous vraiment supprimer l'image principale?</h5>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"ok-del-main-img btn btn-secondary\" data-bs-dismiss=\"modal\">Oui</button>
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
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 121, $this->source); })()), "media", [], "any", false, false, false, 121));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 122
            echo "                            <div class=\"modal fade\" id=\"secondModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Supprimer un media</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Souhaitez vous vraiment supprimer ce media?</h5>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" id=\"yes\" class=\"yes-btn btn btn-secondary\" data-bs-dismiss=\"modal\">Oui</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-12 col-md-2 col-xl-2 mr-2 mycol\">
                                <div class=\"card\" style=\"width:12rem;border:none;\">
                                    <div style=\"margin-right:1em;\">
                                        ";
            // line 141
            if (twig_in_filter("image", $context["value"])) {
                // line 142
                echo "                                            <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . $context["value"])), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"...\" style=\"width:11.9em;height:8em;\">
                                        ";
            } elseif (twig_in_filter("video",             // line 143
$context["value"])) {
                // line 144
                echo "                                            <video controls class=\"card-img-top\" style=\"width:11.9em;height:9.3em;padding:0em;margin-top:2em !important;\"><source src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . $context["value"])), "html", null, true);
                echo "\"></video>
                                        ";
            }
            // line 146
            echo "                                    </div>
                                    <div class=\"icon-media text-switch mt-2\">
                                        <a href=\"\" id=\"del\" class=\"delete-media-btn\" style=\"margin-left:1em;color:white;\" data-img-val=\"";
            // line 148
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#secondModal\"><i class=\"fas fa-trash-alt\"></i></a>
                                        <a href=\"\" id=\"0\" class=\"edit-media-btn\" data-trick-id=\"";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 149, $this->source); })()), "id", [], "any", false, false, false, 149), "html", null, true);
            echo "\" data-img-val=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\" style=\"margin-right:1em;margin-left:1em;color:white;\"><i class=\"fas fa-pencil-alt\"></i></a>
                                    </div>
                                </div>
                            </div>
                            ";
            // line 155
            echo "                                ";
            // line 156
            echo "                                ";
            // line 157
            echo "                                ";
            // line 158
            echo "                            ";
            // line 159
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                        ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 160, $this->source); })()), "embedsingle", [], "any", false, false, false, 160);
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 167
        echo "            ";
        // line 168
        echo "        </section>
        <section class=\"text-center form-edit\">
            <h2 class=\"mb-4 mt-1\" style=\"font-family:Varela Round;\">Modification d'un trick</h2>
            <div class=\"row mb-3\" style=\"padding-left:5em;padding-right:5em;\">
                <div class=\"col-sm-6 col-md-6 col-xl-6\">
                    ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "name", [], "any", false, false, false, 173), 'row');
        echo "
                </div>
            </div>
            <div class=\"row\" style=\"padding-left:5em;padding-right:5em;\">
                <div class=\"col-sm-12 col-md-12 col-xl-12\">
                    ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "description", [], "any", false, false, false, 178), 'row');
        echo "
                </div>
            </div>
            <div class=\"row\" style=\"padding-left:5em;padding-right:5em;\">
                <div class=\"col-sm-4 col-md-4 col-xl-4\">
                    ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "category", [], "any", false, false, false, 183), 'row');
        echo "
                </div>
            </div>
            <div class=\"row\" style=\"padding-left:5em;padding-right:5em;\">
                <div class=\"col-sm-11 col-md-11 col-xl-11\">
                    ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "embedsingle", [], "any", false, false, false, 188), 'row');
        echo "
                </div>
                <div class=\"col-sm-1 col-md-1 col-xl-1 mt-4\">
                    <a class=\"clear btn btn-primary\" style=\"color:white;\"><i class=\"fas fa-2x fa-trash-alt\"></i></a>
                </div>
            </div>
            ";
        // line 201
        echo "            <div class=\"row mt-5\" style=\"padding-left:5em;padding-right:5em;\">
                <div class=\"offset-sm-6 offset-xl-6 offset-md-6 col-sm-3 col-md-3 col-xl-3\">
                    ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "valider", [], "any", false, false, false, 203), 'row');
        echo "
                </div>
                ";
        // line 205
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), 'form_end');
        echo "
                <div class=\"col-sm-2 col-md-2 col-xl-2\">
                    <form method=\"post\" action=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 207, $this->source); })()), "id", [], "any", false, false, false, 207)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Le trick va être supprimé');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 208, $this->source); })()), "id", [], "any", false, false, false, 208))), "html", null, true);
        echo "\">
                        <button class=\"btn btn-danger\">Delete</button>
                    </form>
                    ";
        // line 212
        echo "                        ";
        // line 213
        echo "                    ";
        // line 214
        echo "                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class=\"footer bg-black small text-center text-white-50\"><div class=\"container px-4 px-lg-5\">Copyright &copy; Your Website 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script>
        ";
        // line 225
        echo "        \$( document ).ready(function() {
            \$( \".edit-media-btn\" ).each(function( index ) {
                let testId = \$(this).attr('id');
                if(testId == 0){
                    \$(this).attr('id', index);
                } else {
                    console.log(\"cassé:\", index);
                }
            });  
            \$( \".delete-media-btn\" ).each(function( index ) {
                let testIdDel = \$(this).attr('id');
                if(testIdDel == \"del\"){
                    \$(this).attr('id', \"del\"+index);
                } else {
                    console.log(\"cassé:\", index);
                }
            });
            \$( \".yes-btn\" ).each(function( index ) {
                let testIdyes = \$(this).attr('id');
                if(testIdyes == \"yes\"){
                    \$(this).attr('id', \"yes\"+index);
                } else {
                    console.log(\"cassé:\", index);
                }
            });    
        });
        \$('.clear').click(function(){
            \$('#tricks_embedsingle').val('');
        });
        var testAjaxEdit = false;
        \$('.edit-media-btn').click(function(){
            currentVal = undefined;
            console.log(currentVal+\"first\");
            var currentVal = \$(this).attr('data-img-val');
            console.log(currentVal+\"test\");
            \$('#inputHidden1').val(currentVal);
        });
        \$('.ok-btn').click(function(){
            let currentVal = \$('#inputHidden1').val();
                console.log(currentVal);
                fileVal = \$('#tricks_media').prop('files');
                console.log(fileVal);
                if(fileVal.length > 0){
                    alert('les changements seront éffectué à la validation du formulaire');
                    if(!testAjax){
                        console.log(currentVal+\"testAjax\");
                        testAjax = true;
                        \$.ajax({
                            url: \"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 273, $this->source); })()), "id", [], "any", false, false, false, 273)]), "html", null, true);
        echo "\",
                            type: 'POST',
                            data: {'currentVal':currentVal}, 
                            success: function(r){
                                console.log(r);
                                ";
        // line 279
        echo "                                testAjax = false;
                            },
                            error: function(){
                                console.log('Ajax crashed');
                            }
                        });
                    }
                } else {
                    console.log(\"vide\");
                }
            });
        \$('.ok-main').click(function(){
            fileValMain = \$('#tricks_mainImage').prop('files');
            console.log(fileValMain);
            if(fileValMain.length > 0){
                alert('les changements seront éffectué à la validation du formulaire');
            }
        });
        var testAjax = false;
        \$('.delete-media-btn').click(function(){
            currentValDel = undefined;
            currentValDel = \$(this).attr('data-img-val');
            console.log(\"delete click\");
            \$('.yes-btn').click(function(){
                ";
        // line 304
        echo "                console.log(\"yes click\");
                if(!testAjax){
                    testAjax = true;
                    \$.ajax({
                        url: \"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 308, $this->source); })()), "id", [], "any", false, false, false, 308)]), "html", null, true);
        echo "\",
                        type: 'POST',
                        data: {'currentValDel':currentValDel}, 
                        success: function(r){
                            console.log(r);
                            console.log(currentValDel);
                            ";
        // line 315
        echo "                            location.reload();
                            testAjax = false;
                            ";
        // line 318
        echo "                        },
                        error: function(){
                            console.log('Ajax crashed');
                        }
                    });
                }
            });
        });
        \$('.ok-del-main-img ').click(function(){
            \$.ajax({
                url: \"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajaxMainImage", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 328, $this->source); })()), "id", [], "any", false, false, false, 328)]), "html", null, true);
        echo "\",
                type: 'POST',
                success: function(r){
                    ";
        // line 332
        echo "                    location.reload();
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
        return array (  505 => 34,  502 => 33,  492 => 32,  460 => 332,  454 => 328,  442 => 318,  438 => 315,  429 => 308,  423 => 304,  397 => 279,  389 => 273,  339 => 225,  329 => 214,  327 => 213,  325 => 212,  319 => 208,  315 => 207,  310 => 205,  305 => 203,  301 => 201,  292 => 188,  284 => 183,  276 => 178,  268 => 173,  261 => 168,  259 => 167,  250 => 160,  244 => 159,  242 => 158,  240 => 157,  238 => 156,  236 => 155,  227 => 149,  223 => 148,  219 => 146,  213 => 144,  211 => 143,  206 => 142,  204 => 141,  183 => 122,  179 => 121,  148 => 93,  127 => 75,  111 => 62,  106 => 59,  102 => 57,  100 => 56,  96 => 54,  94 => 51,  92 => 50,  86 => 48,  80 => 46,  77 => 45,  75 => 42,  69 => 36,  66 => 35,  64 => 32,  44 => 14,);
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
                {# {% set break = false %}
                {% for key,value in trick.media %}
                    {% if break == false %} #}
                        {# {% if trick.mainImage != null %}
                            <img class=\"main-img-show\" src=\"{{ asset('upload/' ~ trick.mainImage[0])}}\" class=\"card-img-top\" alt=\"...\">
                        {% else  %} #}
                            {% if trick.mainImage != null %}
                                <img class=\"main-img-show\" src=\"{{ asset('upload/' ~ trick.mainImage[0])}}\" class=\"card-img-top\" alt=\"...\">
                            {% else %}
                                <img class=\"main-img-show\" src=\"{{ asset('assets/img/frontflip.jpg')}}\" class=\"card-img-top\" alt=\"...\">
                            {% endif %}
                        {# {% endif %} #}
                    {# {% endif %}
                    {% set break = true %}
                {% endfor %} #}
                <div>
                    <div class=\"icon-show text-switch\">
                        {% if trick.mainImage != null %}
                            <a href=\"\" class=\"del-main-img\" data-bs-toggle=\"modal\" data-bs-target=\"#mainImageModalDel\" style=\"margin-left:1em;color:white;\"><i class=\"fas fa-trash-alt\"></i></a>
                        {% endif %}
                        <a href=\"\" data-bs-toggle=\"modal\" data-bs-target=\"#mainImageModal\"  style=\"margin-right:1em;margin-left:1em;color:white;\"><i class=\"fas fa-pencil-alt\"></i></a>
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
                        <button type=\"button\" class=\"ok-btn btn btn-secondary\" data-bs-dismiss=\"modal\">Ok</button>
                        <input type=\"hidden\" id=\"inputHidden1\">
                        <input type=\"hidden\" id=\"inputHidden2\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal fade\" id=\"mainImageModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Remplacer l'image principale</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        {{ form_row(form.mainImage) }}
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"ok-main btn btn-secondary\" data-bs-dismiss=\"modal\">Ok</button>
                    </div>
                </div>
            </div> 
        </div>
        <div class=\"modal fade\" id=\"mainImageModalDel\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <i class=\"fas fa-2x fa-exclamation-triangle\"></i><h5>Souhaitez vous vraiment supprimer l'image principale?</h5>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"ok-del-main-img btn btn-secondary\" data-bs-dismiss=\"modal\">Oui</button>
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
                            <div class=\"modal fade\" id=\"secondModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Supprimer un media</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Souhaitez vous vraiment supprimer ce media?</h5>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" id=\"yes\" class=\"yes-btn btn btn-secondary\" data-bs-dismiss=\"modal\">Oui</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-12 col-md-2 col-xl-2 mr-2 mycol\">
                                <div class=\"card\" style=\"width:12rem;border:none;\">
                                    <div style=\"margin-right:1em;\">
                                        {% if 'image' in value %}
                                            <img class=\"card-img-top\" src=\"{{ asset('upload/' ~ value)}}\" class=\"card-img-top\" alt=\"...\" style=\"width:11.9em;height:8em;\">
                                        {% elseif 'video' in value %}
                                            <video controls class=\"card-img-top\" style=\"width:11.9em;height:9.3em;padding:0em;margin-top:2em !important;\"><source src=\"{{ asset('upload/' ~ value)}}\"></video>
                                        {% endif %}
                                    </div>
                                    <div class=\"icon-media text-switch mt-2\">
                                        <a href=\"\" id=\"del\" class=\"delete-media-btn\" style=\"margin-left:1em;color:white;\" data-img-val=\"{{value}}\" data-bs-toggle=\"modal\" data-bs-target=\"#secondModal\"><i class=\"fas fa-trash-alt\"></i></a>
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
                        {{ trick.embedsingle|raw }}
                    </div>
                </div>
            </div>

            {# <embed type=\"video/webm\" src=\"https://www.dailymotion.com/embed/video/x1extfv\" width=\"250\" height=\"200\">
            <embed type=\"video/webm\" src=\"https://www.youtube.com/embed/_OMar04NRZw\" width=\"250\" height=\"200\"> #}
            {# <iframe width=\"250\" height=\"200\" src=\"https://www.youtube.com/embed/_OMar04NRZw\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe> #}
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
            <div class=\"row\" style=\"padding-left:5em;padding-right:5em;\">
                <div class=\"col-sm-11 col-md-11 col-xl-11\">
                    {{ form_row(form.embedsingle) }}
                </div>
                <div class=\"col-sm-1 col-md-1 col-xl-1 mt-4\">
                    <a class=\"clear btn btn-primary\" style=\"color:white;\"><i class=\"fas fa-2x fa-trash-alt\"></i></a>
                </div>
            </div>
            {# <div class=\"row mt-3 mb-5\" style=\"padding-left:5em;padding-right:5em;\">
                <div class=\"col-sm-12 col-md-12 col-xl-12\">
                {% for embedfield in form.embed %}
                    {{ form_row(embedfield) }}
                {% endfor %}
                </div>
            </div> #}
            <div class=\"row mt-5\" style=\"padding-left:5em;padding-right:5em;\">
                <div class=\"offset-sm-6 offset-xl-6 offset-md-6 col-sm-3 col-md-3 col-xl-3\">
                    {{ form_row(form.valider) }}
                </div>
                {{ form_end(form) }}
                <div class=\"col-sm-2 col-md-2 col-xl-2\">
                    <form method=\"post\" action=\"{{ path('tricks_delete', {'id': trick.id}) }}\" onsubmit=\"return confirm('Le trick va être supprimé');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ trick.id) }}\">
                        <button class=\"btn btn-danger\">Delete</button>
                    </form>
                    {# {% block delete %} #}
                        {# {% include \"_delete_form.html.twig\" %} #}
                    {# {% endblock %} #}
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class=\"footer bg-black small text-center text-white-50\"><div class=\"container px-4 px-lg-5\">Copyright &copy; Your Website 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script>
        {# \$( \"#edit-media-btn\" ).click(function() {
            {% set testclick = true %}
        }); #}
        \$( document ).ready(function() {
            \$( \".edit-media-btn\" ).each(function( index ) {
                let testId = \$(this).attr('id');
                if(testId == 0){
                    \$(this).attr('id', index);
                } else {
                    console.log(\"cassé:\", index);
                }
            });  
            \$( \".delete-media-btn\" ).each(function( index ) {
                let testIdDel = \$(this).attr('id');
                if(testIdDel == \"del\"){
                    \$(this).attr('id', \"del\"+index);
                } else {
                    console.log(\"cassé:\", index);
                }
            });
            \$( \".yes-btn\" ).each(function( index ) {
                let testIdyes = \$(this).attr('id');
                if(testIdyes == \"yes\"){
                    \$(this).attr('id', \"yes\"+index);
                } else {
                    console.log(\"cassé:\", index);
                }
            });    
        });
        \$('.clear').click(function(){
            \$('#tricks_embedsingle').val('');
        });
        var testAjaxEdit = false;
        \$('.edit-media-btn').click(function(){
            currentVal = undefined;
            console.log(currentVal+\"first\");
            var currentVal = \$(this).attr('data-img-val');
            console.log(currentVal+\"test\");
            \$('#inputHidden1').val(currentVal);
        });
        \$('.ok-btn').click(function(){
            let currentVal = \$('#inputHidden1').val();
                console.log(currentVal);
                fileVal = \$('#tricks_media').prop('files');
                console.log(fileVal);
                if(fileVal.length > 0){
                    alert('les changements seront éffectué à la validation du formulaire');
                    if(!testAjax){
                        console.log(currentVal+\"testAjax\");
                        testAjax = true;
                        \$.ajax({
                            url: \"{{ path('ajax', {'id': trick.id}) }}\",
                            type: 'POST',
                            data: {'currentVal':currentVal}, 
                            success: function(r){
                                console.log(r);
                                {# console.log(currentVal); #}
                                testAjax = false;
                            },
                            error: function(){
                                console.log('Ajax crashed');
                            }
                        });
                    }
                } else {
                    console.log(\"vide\");
                }
            });
        \$('.ok-main').click(function(){
            fileValMain = \$('#tricks_mainImage').prop('files');
            console.log(fileValMain);
            if(fileValMain.length > 0){
                alert('les changements seront éffectué à la validation du formulaire');
            }
        });
        var testAjax = false;
        \$('.delete-media-btn').click(function(){
            currentValDel = undefined;
            currentValDel = \$(this).attr('data-img-val');
            console.log(\"delete click\");
            \$('.yes-btn').click(function(){
                {# console.log(testAjax+\"first\"); #}
                console.log(\"yes click\");
                if(!testAjax){
                    testAjax = true;
                    \$.ajax({
                        url: \"{{ path('ajax', {'id': trick.id}) }}\",
                        type: 'POST',
                        data: {'currentValDel':currentValDel}, 
                        success: function(r){
                            console.log(r);
                            console.log(currentValDel);
                            {# \$('.row-show').load(window.location.href+ \" .row-show\" ); #}
                            location.reload();
                            testAjax = false;
                            {# console.log(testAjax); #}
                        },
                        error: function(){
                            console.log('Ajax crashed');
                        }
                    });
                }
            });
        });
        \$('.ok-del-main-img ').click(function(){
            \$.ajax({
                url: \"{{ path('ajaxMainImage', {'id': trick.id}) }}\",
                type: 'POST',
                success: function(r){
                    {# console.log(r); #}
                    location.reload();
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
