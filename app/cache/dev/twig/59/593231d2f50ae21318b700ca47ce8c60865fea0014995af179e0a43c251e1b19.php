<?php

/* PIDEVCrowdRiseBundle:Projet:ModifierProjet.html.twig */
class __TwigTemplate_a533611b115821919762e210ce7c39953415e26af4a3815419ba364aa88d472f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Projet:ModifierProjet.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PIDEVCrowdRiseBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>
    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>


    <section id=\"text-carousel-intro-section\" class=\"parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-color: whitesmoke\">

        <div class = \"container slider-content\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                    <h2>Modifier un Projet</h2>

                    <div class=\"panel panel-grey wow bounceInLeft\">
                        <div class=\"panel-heading\"></div>
                        <div class=\"panel-body pan\">

                            <div class=\"form-body pal\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group\">

                                            <h3> Modification du projet ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "titre", array()), "html", null, true);
        echo " </h3>
                                        </div>
                                    </div>

                                </div>
                                <form method=\"post\">  
                                    <table>
                                        <tr> <td>titre: </td> <td> ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titre", array()), 'widget');
        echo " </td> </tr>      ";
        // line 31
        echo "                                        <tr> <td>description:</td> <td> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo " </td> </tr>
                                        <tr> <td>typeFinancement:</td> <td> ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "typeFinancement", array()), 'widget');
        echo " </td> </tr>
                                       ";
        // line 34
        echo "                                        <tr> <td>deadlineProjet:</td> <td> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "deadlineProjet", array()), 'widget');
        echo " </td> </tr>
                                        <tr> <td>image_projet:</td> <td> ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "image_projet", array()), 'widget');
        echo " </td> </tr>
                                        <tr> <td>fichier_projet:</td> <td> ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "fichier_projet", array()), 'widget');
        echo " </td> </tr>
                                        <tr> <td>video_projet:</td> <td> ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "video_projet", array()), 'widget');
        echo " </td> </tr>
                                        <tr> <td> ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo " </td><td><FORM><INPUT Type=\"button\" VALUE=\"Annuler \" onClick=\"history.go(-1);return true;\"></FORM></td> </tr>
                                    </table>
                                </form>


                                
                            </div>
                        </div>
                    </div>
                </div>
                </section>

            ";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Projet:ModifierProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 38,  88 => 37,  84 => 36,  80 => 35,  75 => 34,  71 => 32,  66 => 31,  63 => 30,  53 => 23,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/* */
/* */
/*     <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-color: whitesmoke">*/
/* */
/*         <div class = "container slider-content">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">*/
/*                     <h2>Modifier un Projet</h2>*/
/* */
/*                     <div class="panel panel-grey wow bounceInLeft">*/
/*                         <div class="panel-heading"></div>*/
/*                         <div class="panel-body pan">*/
/* */
/*                             <div class="form-body pal">*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12">*/
/*                                         <div class="form-group">*/
/* */
/*                                             <h3> Modification du projet {{ projet.titre }} </h3>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                                 <form method="post">  */
/*                                     <table>*/
/*                                         <tr> <td>titre: </td> <td> {{ form_widget(Form.titre) }} </td> </tr>      {#form fct prédéfinie twig   Form label #}*/
/*                                         <tr> <td>description:</td> <td> {{ form_widget(Form.description) }} </td> </tr>*/
/*                                         <tr> <td>typeFinancement:</td> <td> {{ form_widget(Form.typeFinancement) }} </td> </tr>*/
/*                                        {# <tr> <td>Catégorie:</td> <td> {{ form_widget(Form.categories) }} </td> </tr>#}*/
/*                                         <tr> <td>deadlineProjet:</td> <td> {{ form_widget(Form.deadlineProjet) }} </td> </tr>*/
/*                                         <tr> <td>image_projet:</td> <td> {{ form_widget(Form.image_projet) }} </td> </tr>*/
/*                                         <tr> <td>fichier_projet:</td> <td> {{ form_widget(Form.fichier_projet) }} </td> </tr>*/
/*                                         <tr> <td>video_projet:</td> <td> {{ form_widget(Form.video_projet) }} </td> </tr>*/
/*                                         <tr> <td> {{ form_rest(Form) }} </td><td><FORM><INPUT Type="button" VALUE="Annuler " onClick="history.go(-1);return true;"></FORM></td> </tr>*/
/*                                     </table>*/
/*                                 </form>*/
/* */
/* */
/*                                 */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 </section>*/
/* */
/*             {% endblock %}*/
/* */
/* */