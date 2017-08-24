<?php

/* ISETSOMagazineBundle:returnarticle_centralStore:edit.html.twig */
class __TwigTemplate_7ff6d4713096757543c8be46179c6ccd0bee240dbef717947072080351a07aa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:returnarticle_centralStore:edit.html.twig", 1);
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
        $__internal_28f74c1e4ba152595cdacacfafbb204bb3d3b0b188d640ac2a51d6d20571e534 = $this->env->getExtension("native_profiler");
        $__internal_28f74c1e4ba152595cdacacfafbb204bb3d3b0b188d640ac2a51d6d20571e534->enter($__internal_28f74c1e4ba152595cdacacfafbb204bb3d3b0b188d640ac2a51d6d20571e534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:returnarticle_centralStore:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f74c1e4ba152595cdacacfafbb204bb3d3b0b188d640ac2a51d6d20571e534->leave($__internal_28f74c1e4ba152595cdacacfafbb204bb3d3b0b188d640ac2a51d6d20571e534_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9daf3adf33c6cee921c295ab706f82f940405b23b4c0de7676088378500ceb5e = $this->env->getExtension("native_profiler");
        $__internal_9daf3adf33c6cee921c295ab706f82f940405b23b4c0de7676088378500ceb5e->enter($__internal_9daf3adf33c6cee921c295ab706f82f940405b23b4c0de7676088378500ceb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4866ff2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4866ff2_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4866ff2_dataTables.bootstrap_1.css");
            // line 11
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "4866ff2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4866ff2_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4866ff2_dataTables.themify_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "4866ff2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4866ff2_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4866ff2_select2_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "4866ff2_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4866ff2_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4866ff2_cssload-finger_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "4866ff2_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4866ff2_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4866ff2_book-animation_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "4866ff2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4866ff2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4866ff2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    
";
        
        $__internal_9daf3adf33c6cee921c295ab706f82f940405b23b4c0de7676088378500ceb5e->leave($__internal_9daf3adf33c6cee921c295ab706f82f940405b23b4c0de7676088378500ceb5e_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_0d8a0f40c156f43c7ca816c1ed43caa45e59fdce4108dd852449fd41cc53d759 = $this->env->getExtension("native_profiler");
        $__internal_0d8a0f40c156f43c7ca816c1ed43caa45e59fdce4108dd852449fd41cc53d759->enter($__internal_0d8a0f40c156f43c7ca816c1ed43caa45e59fdce4108dd852449fd41cc53d759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 16
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("returnArticle_centralStore_index");
        echo "\">
       ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_0d8a0f40c156f43c7ca816c1ed43caa45e59fdce4108dd852449fd41cc53d759->leave($__internal_0d8a0f40c156f43c7ca816c1ed43caa45e59fdce4108dd852449fd41cc53d759_prof);

    }

    // line 20
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_1813d2417e84cda19e23f5d529a7d2a31853ed041bae861a3013d7d4effc5a97 = $this->env->getExtension("native_profiler");
        $__internal_1813d2417e84cda19e23f5d529a7d2a31853ed041bae861a3013d7d4effc5a97->enter($__internal_1813d2417e84cda19e23f5d529a7d2a31853ed041bae861a3013d7d4effc5a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 21
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_1813d2417e84cda19e23f5d529a7d2a31853ed041bae861a3013d7d4effc5a97->leave($__internal_1813d2417e84cda19e23f5d529a7d2a31853ed041bae861a3013d7d4effc5a97_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_27a90532365b315c771f26a5e4e375e1c0c8b66f5e39015ec49a113e738a5a78 = $this->env->getExtension("native_profiler");
        $__internal_27a90532365b315c771f26a5e4e375e1c0c8b66f5e39015ec49a113e738a5a78->enter($__internal_27a90532365b315c771f26a5e4e375e1c0c8b66f5e39015ec49a113e738a5a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "    
    ";
        // line 25
        $this->loadTemplate("Template/returnArticleFormTemplate.html.twig", "ISETSOMagazineBundle:returnarticle_centralStore:edit.html.twig", 25)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("returnarticle.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("returnarticle.edit.submit"))));
        
        $__internal_27a90532365b315c771f26a5e4e375e1c0c8b66f5e39015ec49a113e738a5a78->leave($__internal_27a90532365b315c771f26a5e4e375e1c0c8b66f5e39015ec49a113e738a5a78_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_36a4a47e5291538a3217f7c12f1bd3634a55fe3d98370bb040e4e67596c1041b = $this->env->getExtension("native_profiler");
        $__internal_36a4a47e5291538a3217f7c12f1bd3634a55fe3d98370bb040e4e67596c1041b->enter($__internal_36a4a47e5291538a3217f7c12f1bd3634a55fe3d98370bb040e4e67596c1041b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 29
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4cbf7ba_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4cbf7ba_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4cbf7ba_jquery.dataTables_1.js");
            // line 40
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4cbf7ba_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4cbf7ba_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4cbf7ba_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4cbf7ba_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4cbf7ba_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4cbf7ba_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4cbf7ba_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4cbf7ba_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4cbf7ba_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4cbf7ba_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4cbf7ba_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4cbf7ba_return_article_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4cbf7ba_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4cbf7ba_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4cbf7ba_edit_return_article_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4cbf7ba_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4cbf7ba_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4cbf7ba_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4cbf7ba_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4cbf7ba_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4cbf7ba_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4cbf7ba_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4cbf7ba_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4cbf7ba_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "4cbf7ba"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4cbf7ba") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4cbf7ba.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 42
        echo " ";
        
        $__internal_36a4a47e5291538a3217f7c12f1bd3634a55fe3d98370bb040e4e67596c1041b->leave($__internal_36a4a47e5291538a3217f7c12f1bd3634a55fe3d98370bb040e4e67596c1041b_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:returnarticle_centralStore:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 42,  167 => 40,  163 => 29,  158 => 28,  152 => 27,  145 => 25,  142 => 24,  136 => 23,  126 => 21,  120 => 20,  110 => 17,  105 => 16,  99 => 15,  91 => 13,  53 => 11,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
/*         'bundles/isetsomagazine/css/book-animation.css'*/
/*         filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     */
/* {% endblock %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('returnArticle_centralStore_index') }}">*/
/*        {{ 'returnarticle.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'returnarticle.edit.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     */
/*     {% include 'Template/returnArticleFormTemplate.html.twig' with {'form_name' : 'returnarticle.edit.name'|trans ,'submit_name': 'returnarticle.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*         'bundles/isetsomagazine/myPlugins/return_article.js'*/
/*         'bundles/isetsomagazine/myjs/edit_return_article.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
