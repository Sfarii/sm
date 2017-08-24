<?php

/* ISETSOMagazineBundle:articleconsumable:new.html.twig */
class __TwigTemplate_7c0170dfd3acf59f1c2987defec348811707c1f58099c05f4f2db04929ea5e44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:articleconsumable:new.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'breadcrumbActive' => array($this, 'block_breadcrumbActive'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85d8a6a57249ec3c5309bacf1683ffddab2c12e5cde8a8743019f8b59ae6b313 = $this->env->getExtension("native_profiler");
        $__internal_85d8a6a57249ec3c5309bacf1683ffddab2c12e5cde8a8743019f8b59ae6b313->enter($__internal_85d8a6a57249ec3c5309bacf1683ffddab2c12e5cde8a8743019f8b59ae6b313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:articleconsumable:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85d8a6a57249ec3c5309bacf1683ffddab2c12e5cde8a8743019f8b59ae6b313->leave($__internal_85d8a6a57249ec3c5309bacf1683ffddab2c12e5cde8a8743019f8b59ae6b313_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_acf735a749cc8d71e00f276a9734fa8aa744679bf64a015ebe095d2de607b83d = $this->env->getExtension("native_profiler");
        $__internal_acf735a749cc8d71e00f276a9734fa8aa744679bf64a015ebe095d2de607b83d->enter($__internal_acf735a749cc8d71e00f276a9734fa8aa744679bf64a015ebe095d2de607b83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("articleconsumable_index");
        echo "\">
       ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articleconsumable.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_acf735a749cc8d71e00f276a9734fa8aa744679bf64a015ebe095d2de607b83d->leave($__internal_acf735a749cc8d71e00f276a9734fa8aa744679bf64a015ebe095d2de607b83d_prof);

    }

    // line 9
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_ae57c41288e2c308cf231e93ee1d606a7deb18114af71b673627ba8b756d39ed = $this->env->getExtension("native_profiler");
        $__internal_ae57c41288e2c308cf231e93ee1d606a7deb18114af71b673627ba8b756d39ed->enter($__internal_ae57c41288e2c308cf231e93ee1d606a7deb18114af71b673627ba8b756d39ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articleconsumable.new.name"), "html", null, true);
        echo "
";
        
        $__internal_ae57c41288e2c308cf231e93ee1d606a7deb18114af71b673627ba8b756d39ed->leave($__internal_ae57c41288e2c308cf231e93ee1d606a7deb18114af71b673627ba8b756d39ed_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_336acb061663d2334a8df266210affbc9a6df8b8b5abf904f37119a2dc96e427 = $this->env->getExtension("native_profiler");
        $__internal_336acb061663d2334a8df266210affbc9a6df8b8b5abf904f37119a2dc96e427->enter($__internal_336acb061663d2334a8df266210affbc9a6df8b8b5abf904f37119a2dc96e427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:articleconsumable:new.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "form_name" => $this->env->getExtension('translator')->trans("articleconsumable.new.name"), "submit_name" => $this->env->getExtension('translator')->trans("articleconsumable.new.submit"))));
        
        $__internal_336acb061663d2334a8df266210affbc9a6df8b8b5abf904f37119a2dc96e427->leave($__internal_336acb061663d2334a8df266210affbc9a6df8b8b5abf904f37119a2dc96e427_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0dcc2bab27a841524cb6dd91bc25281ac909ed33b855e5fad337a47c336c5386 = $this->env->getExtension("native_profiler");
        $__internal_0dcc2bab27a841524cb6dd91bc25281ac909ed33b855e5fad337a47c336c5386->enter($__internal_0dcc2bab27a841524cb6dd91bc25281ac909ed33b855e5fad337a47c336c5386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "
    ";
        // line 19
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c626016_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c626016_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/c626016_article_consumable_1.js");
            // line 24
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "c626016"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c626016") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/c626016.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "    
";
        
        $__internal_0dcc2bab27a841524cb6dd91bc25281ac909ed33b855e5fad337a47c336c5386->leave($__internal_0dcc2bab27a841524cb6dd91bc25281ac909ed33b855e5fad337a47c336c5386_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:articleconsumable:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 26,  106 => 24,  102 => 21,  97 => 19,  94 => 18,  88 => 17,  80 => 14,  74 => 13,  64 => 10,  58 => 9,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     <a href="{{ path('articleconsumable_index') }}">*/
/*        {{ 'articleconsumable.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block breadcrumbActive %}*/
/*     {{ 'articleconsumable.new.name'|trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': form ,'form_name' : 'articleconsumable.new.name'|trans ,'submit_name': 'articleconsumable.new.submit'|trans } %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     {{ parent() }}*/
/* */
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/myjs/article_consumable.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     */
/* {% endblock %}*/
