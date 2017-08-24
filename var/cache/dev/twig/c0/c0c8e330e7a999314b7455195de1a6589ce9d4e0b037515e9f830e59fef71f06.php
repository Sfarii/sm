<?php

/* ISETSOMagazineBundle:returnarticle_SubStore:edit.html.twig */
class __TwigTemplate_6fcc88b4921be4a6a7c68b3a4724cfcaa97a664fa3f643ec0915216934892820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:returnarticle_SubStore:edit.html.twig", 1);
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
        $__internal_e43f05a0fd4bf65cf5aefe0e07a4503d8f1d46257d4259b6135d9f2332e2b3d8 = $this->env->getExtension("native_profiler");
        $__internal_e43f05a0fd4bf65cf5aefe0e07a4503d8f1d46257d4259b6135d9f2332e2b3d8->enter($__internal_e43f05a0fd4bf65cf5aefe0e07a4503d8f1d46257d4259b6135d9f2332e2b3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:returnarticle_SubStore:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e43f05a0fd4bf65cf5aefe0e07a4503d8f1d46257d4259b6135d9f2332e2b3d8->leave($__internal_e43f05a0fd4bf65cf5aefe0e07a4503d8f1d46257d4259b6135d9f2332e2b3d8_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5634ac5debf159aebe86068d15ce40e6c253e8ad700abbd31fa7bd4c34c0bdf1 = $this->env->getExtension("native_profiler");
        $__internal_5634ac5debf159aebe86068d15ce40e6c253e8ad700abbd31fa7bd4c34c0bdf1->enter($__internal_5634ac5debf159aebe86068d15ce40e6c253e8ad700abbd31fa7bd4c34c0bdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5634ac5debf159aebe86068d15ce40e6c253e8ad700abbd31fa7bd4c34c0bdf1->leave($__internal_5634ac5debf159aebe86068d15ce40e6c253e8ad700abbd31fa7bd4c34c0bdf1_prof);

    }

    // line 14
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_cf47687c0e7c4622b5a31f891c83e217d0ac03dd2dd9e25c109c9c0d8486d538 = $this->env->getExtension("native_profiler");
        $__internal_cf47687c0e7c4622b5a31f891c83e217d0ac03dd2dd9e25c109c9c0d8486d538->enter($__internal_cf47687c0e7c4622b5a31f891c83e217d0ac03dd2dd9e25c109c9c0d8486d538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 15
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnarticle_subStore_index", array("id" => $this->getAttribute($this->getAttribute((isset($context["returnArticle"]) ? $context["returnArticle"] : $this->getContext($context, "returnArticle")), "toSubStore", array()), "id", array()))), "html", null, true);
        echo "\">
       ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_cf47687c0e7c4622b5a31f891c83e217d0ac03dd2dd9e25c109c9c0d8486d538->leave($__internal_cf47687c0e7c4622b5a31f891c83e217d0ac03dd2dd9e25c109c9c0d8486d538_prof);

    }

    // line 19
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_85ed6685b78b169e8b3ba272a4589f292230032dd36d8c9586c96332463fa08d = $this->env->getExtension("native_profiler");
        $__internal_85ed6685b78b169e8b3ba272a4589f292230032dd36d8c9586c96332463fa08d->enter($__internal_85ed6685b78b169e8b3ba272a4589f292230032dd36d8c9586c96332463fa08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 20
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_85ed6685b78b169e8b3ba272a4589f292230032dd36d8c9586c96332463fa08d->leave($__internal_85ed6685b78b169e8b3ba272a4589f292230032dd36d8c9586c96332463fa08d_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b70a538b1058803e7ffa135029e3083be3e3d99b2417e0d21710164dfe84699 = $this->env->getExtension("native_profiler");
        $__internal_9b70a538b1058803e7ffa135029e3083be3e3d99b2417e0d21710164dfe84699->enter($__internal_9b70a538b1058803e7ffa135029e3083be3e3d99b2417e0d21710164dfe84699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    
    ";
        // line 24
        $this->loadTemplate("Template/returnArticleFormTemplate.html.twig", "ISETSOMagazineBundle:returnarticle_SubStore:edit.html.twig", 24)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("returnarticle.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("returnarticle.edit.submit"))));
        
        $__internal_9b70a538b1058803e7ffa135029e3083be3e3d99b2417e0d21710164dfe84699->leave($__internal_9b70a538b1058803e7ffa135029e3083be3e3d99b2417e0d21710164dfe84699_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0bfa9bae140384251f49486369f668d92f0c2caf1b13a22b2d5ee39db7e49bab = $this->env->getExtension("native_profiler");
        $__internal_0bfa9bae140384251f49486369f668d92f0c2caf1b13a22b2d5ee39db7e49bab->enter($__internal_0bfa9bae140384251f49486369f668d92f0c2caf1b13a22b2d5ee39db7e49bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 28
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "66726f0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66726f0_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/66726f0_jquery.dataTables_1.js");
            // line 39
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "66726f0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66726f0_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/66726f0_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "66726f0_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66726f0_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/66726f0_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "66726f0_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66726f0_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/66726f0_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "66726f0_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66726f0_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/66726f0_return_article_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "66726f0_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66726f0_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/66726f0_edit_return_article_toSubStore_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "66726f0_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66726f0_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/66726f0_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "66726f0_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66726f0_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/66726f0_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "66726f0_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66726f0_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/66726f0_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "66726f0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66726f0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/66726f0.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 41
        echo " ";
        
        $__internal_0bfa9bae140384251f49486369f668d92f0c2caf1b13a22b2d5ee39db7e49bab->leave($__internal_0bfa9bae140384251f49486369f668d92f0c2caf1b13a22b2d5ee39db7e49bab_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:returnarticle_SubStore:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 41,  161 => 39,  157 => 28,  152 => 27,  146 => 26,  139 => 24,  136 => 23,  130 => 22,  120 => 20,  114 => 19,  104 => 16,  99 => 15,  93 => 14,  85 => 12,  53 => 10,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
/*     <a href="{{ path('returnarticle_subStore_index', { 'id' : returnArticle.toSubStore.id}) }}">*/
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
/*         'bundles/isetsomagazine/myjs/edit_return_article_toSubStore.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
