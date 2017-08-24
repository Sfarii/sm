<?php

/* ISETSOMagazineBundle:discharge_article_user:edit.html.twig */
class __TwigTemplate_a593fb5a6c61ee6f2b480213898a332014a1167cbeac0f4225c492b9bd089197 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:discharge_article_user:edit.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_1aa9bebff5737baf8a4428c94f5757106c5d2da6c5905f3b280d5258efb3a941 = $this->env->getExtension("native_profiler");
        $__internal_1aa9bebff5737baf8a4428c94f5757106c5d2da6c5905f3b280d5258efb3a941->enter($__internal_1aa9bebff5737baf8a4428c94f5757106c5d2da6c5905f3b280d5258efb3a941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:discharge_article_user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aa9bebff5737baf8a4428c94f5757106c5d2da6c5905f3b280d5258efb3a941->leave($__internal_1aa9bebff5737baf8a4428c94f5757106c5d2da6c5905f3b280d5258efb3a941_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ea6dbed1f9319084284f4b6da2c70556bea2a9671a768ef945da51aa3fcd7be = $this->env->getExtension("native_profiler");
        $__internal_3ea6dbed1f9319084284f4b6da2c70556bea2a9671a768ef945da51aa3fcd7be->enter($__internal_3ea6dbed1f9319084284f4b6da2c70556bea2a9671a768ef945da51aa3fcd7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3849eb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb_dataTables.bootstrap_1.css");
            // line 10
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "e3849eb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb_dataTables.themify_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "e3849eb_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb_select2_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "e3849eb_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb_cssload-finger_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "e3849eb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "    
";
        
        $__internal_3ea6dbed1f9319084284f4b6da2c70556bea2a9671a768ef945da51aa3fcd7be->leave($__internal_3ea6dbed1f9319084284f4b6da2c70556bea2a9671a768ef945da51aa3fcd7be_prof);

    }

    // line 14
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b95e0fb467a0311b0fd1f987fd6dd5c4faaed5f84cb5c8a2d0d9d4df9f487501 = $this->env->getExtension("native_profiler");
        $__internal_b95e0fb467a0311b0fd1f987fd6dd5c4faaed5f84cb5c8a2d0d9d4df9f487501->enter($__internal_b95e0fb467a0311b0fd1f987fd6dd5c4faaed5f84cb5c8a2d0d9d4df9f487501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 15
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("discharge_article_to_user_index");
        echo "\">
       ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_b95e0fb467a0311b0fd1f987fd6dd5c4faaed5f84cb5c8a2d0d9d4df9f487501->leave($__internal_b95e0fb467a0311b0fd1f987fd6dd5c4faaed5f84cb5c8a2d0d9d4df9f487501_prof);

    }

    // line 19
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_59b8c1f21829ad9b70aa297aff367374c0b8f94c9ddd9e8ce56e188395acaf74 = $this->env->getExtension("native_profiler");
        $__internal_59b8c1f21829ad9b70aa297aff367374c0b8f94c9ddd9e8ce56e188395acaf74->enter($__internal_59b8c1f21829ad9b70aa297aff367374c0b8f94c9ddd9e8ce56e188395acaf74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.edit.name"), "html", null, true);
        
        $__internal_59b8c1f21829ad9b70aa297aff367374c0b8f94c9ddd9e8ce56e188395acaf74->leave($__internal_59b8c1f21829ad9b70aa297aff367374c0b8f94c9ddd9e8ce56e188395acaf74_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_954542a13bc7620390a95ec335bd663935f60cd0c5e74308ef936695a131c4ff = $this->env->getExtension("native_profiler");
        $__internal_954542a13bc7620390a95ec335bd663935f60cd0c5e74308ef936695a131c4ff->enter($__internal_954542a13bc7620390a95ec335bd663935f60cd0c5e74308ef936695a131c4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "
     ";
        // line 22
        $this->loadTemplate("Template/ArticleManagementAddFormTemplate.html.twig", "ISETSOMagazineBundle:discharge_article_user:edit.html.twig", 22)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("dischargearticle.edit.name"))));
        // line 23
        echo "
";
        
        $__internal_954542a13bc7620390a95ec335bd663935f60cd0c5e74308ef936695a131c4ff->leave($__internal_954542a13bc7620390a95ec335bd663935f60cd0c5e74308ef936695a131c4ff_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a5bec8e430eba4fa5bbe0f21592528904a8f14100a924fe1ac69b89d3151c77 = $this->env->getExtension("native_profiler");
        $__internal_9a5bec8e430eba4fa5bbe0f21592528904a8f14100a924fe1ac69b89d3151c77->enter($__internal_9a5bec8e430eba4fa5bbe0f21592528904a8f14100a924fe1ac69b89d3151c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "17e3519_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_17e3519_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/17e3519_jquery.dataTables_1.js");
            // line 38
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "17e3519_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_17e3519_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/17e3519_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "17e3519_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_17e3519_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/17e3519_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "17e3519_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_17e3519_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/17e3519_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "17e3519_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_17e3519_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/17e3519_discharge_article_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "17e3519_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_17e3519_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/17e3519_edit_discharge_user_article_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "17e3519_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_17e3519_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/17e3519_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "17e3519_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_17e3519_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/17e3519_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "17e3519_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_17e3519_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/17e3519_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "17e3519"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_17e3519") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/17e3519.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 40
        echo " ";
        
        $__internal_9a5bec8e430eba4fa5bbe0f21592528904a8f14100a924fe1ac69b89d3151c77->leave($__internal_9a5bec8e430eba4fa5bbe0f21592528904a8f14100a924fe1ac69b89d3151c77_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:discharge_article_user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 40,  160 => 38,  156 => 27,  151 => 26,  145 => 25,  137 => 23,  135 => 22,  132 => 21,  126 => 20,  114 => 19,  104 => 16,  99 => 15,  93 => 14,  85 => 12,  53 => 10,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets */
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.css'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.themify.css'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.css'*/
/*         'bundles/isetsomagazine/css/cssload-finger.css'*/
/*         filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     */
/* {% endblock %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('discharge_article_to_user_index') }}">*/
/*        {{ 'dischargearticle.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* 	 {% block breadcrumbActive %}{{ 'dischargearticle.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* */
/*      {% include 'Template/ArticleManagementAddFormTemplate.html.twig' with {'form_name': 'dischargearticle.edit.name'|trans } %}*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*         'bundles/isetsomagazine/myPlugins/discharge_article.js'*/
/*         'bundles/isetsomagazine/myjs/edit_discharge_user_article.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
