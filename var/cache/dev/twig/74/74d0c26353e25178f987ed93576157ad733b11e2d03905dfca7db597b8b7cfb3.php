<?php

/* ISETSOMagazineBundle:returnarticle_centralStore:new.html.twig */
class __TwigTemplate_510a1a34aa8859c2a47abd9018875d18ca90209c7704e8ad509d9728955d8c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:returnarticle_centralStore:new.html.twig", 1);
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
        $__internal_5c6e8e4311e91a1040b3175d5a79ee6b3faf91cf11f2e16719314a6ce5667cef = $this->env->getExtension("native_profiler");
        $__internal_5c6e8e4311e91a1040b3175d5a79ee6b3faf91cf11f2e16719314a6ce5667cef->enter($__internal_5c6e8e4311e91a1040b3175d5a79ee6b3faf91cf11f2e16719314a6ce5667cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:returnarticle_centralStore:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c6e8e4311e91a1040b3175d5a79ee6b3faf91cf11f2e16719314a6ce5667cef->leave($__internal_5c6e8e4311e91a1040b3175d5a79ee6b3faf91cf11f2e16719314a6ce5667cef_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5134fb89030522f4061929084007f94eea45453ca96c2aad4eab9bd53f9d3333 = $this->env->getExtension("native_profiler");
        $__internal_5134fb89030522f4061929084007f94eea45453ca96c2aad4eab9bd53f9d3333->enter($__internal_5134fb89030522f4061929084007f94eea45453ca96c2aad4eab9bd53f9d3333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5134fb89030522f4061929084007f94eea45453ca96c2aad4eab9bd53f9d3333->leave($__internal_5134fb89030522f4061929084007f94eea45453ca96c2aad4eab9bd53f9d3333_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a5a3861b56528a7d842c7b77b68c49acae0f09f0afe7415d2a4b171b2d82ff3c = $this->env->getExtension("native_profiler");
        $__internal_a5a3861b56528a7d842c7b77b68c49acae0f09f0afe7415d2a4b171b2d82ff3c->enter($__internal_a5a3861b56528a7d842c7b77b68c49acae0f09f0afe7415d2a4b171b2d82ff3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_a5a3861b56528a7d842c7b77b68c49acae0f09f0afe7415d2a4b171b2d82ff3c->leave($__internal_a5a3861b56528a7d842c7b77b68c49acae0f09f0afe7415d2a4b171b2d82ff3c_prof);

    }

    // line 20
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_46a29296b8b53a1994f560759045d5cf18e43eca4eb7420fb97fc8a6009f3124 = $this->env->getExtension("native_profiler");
        $__internal_46a29296b8b53a1994f560759045d5cf18e43eca4eb7420fb97fc8a6009f3124->enter($__internal_46a29296b8b53a1994f560759045d5cf18e43eca4eb7420fb97fc8a6009f3124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 21
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.new.name"), "html", null, true);
        echo "
";
        
        $__internal_46a29296b8b53a1994f560759045d5cf18e43eca4eb7420fb97fc8a6009f3124->leave($__internal_46a29296b8b53a1994f560759045d5cf18e43eca4eb7420fb97fc8a6009f3124_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_903d2c7a91e2831c44e4850e541437db9e988bc1dfca2c4a2d28c3c4c82d0a83 = $this->env->getExtension("native_profiler");
        $__internal_903d2c7a91e2831c44e4850e541437db9e988bc1dfca2c4a2d28c3c4c82d0a83->enter($__internal_903d2c7a91e2831c44e4850e541437db9e988bc1dfca2c4a2d28c3c4c82d0a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "    ";
        $this->loadTemplate("Template/returnArticleFormTemplate.html.twig", "ISETSOMagazineBundle:returnarticle_centralStore:new.html.twig", 24)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("returnarticle.new.name"), "submit_name" => $this->env->getExtension('translator')->trans("returnarticle.new.submit"))));
        // line 25
        echo "
";
        
        $__internal_903d2c7a91e2831c44e4850e541437db9e988bc1dfca2c4a2d28c3c4c82d0a83->leave($__internal_903d2c7a91e2831c44e4850e541437db9e988bc1dfca2c4a2d28c3c4c82d0a83_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f51e5a0b9e20a6c9189b9da6710b9b32b4c2baf4cfaa17274d4f2ca76360b854 = $this->env->getExtension("native_profiler");
        $__internal_f51e5a0b9e20a6c9189b9da6710b9b32b4c2baf4cfaa17274d4f2ca76360b854->enter($__internal_f51e5a0b9e20a6c9189b9da6710b9b32b4c2baf4cfaa17274d4f2ca76360b854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 29
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4a313ca_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4a313ca_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4a313ca_jquery.dataTables_1.js");
            // line 40
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4a313ca_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4a313ca_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4a313ca_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4a313ca_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4a313ca_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4a313ca_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4a313ca_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4a313ca_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4a313ca_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4a313ca_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4a313ca_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4a313ca_return_article_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4a313ca_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4a313ca_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4a313ca_add_return_article_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4a313ca_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4a313ca_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4a313ca_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4a313ca_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4a313ca_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4a313ca_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4a313ca_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4a313ca_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4a313ca_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "4a313ca"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4a313ca") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4a313ca.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 42
        echo " ";
        
        $__internal_f51e5a0b9e20a6c9189b9da6710b9b32b4c2baf4cfaa17274d4f2ca76360b854->leave($__internal_f51e5a0b9e20a6c9189b9da6710b9b32b4c2baf4cfaa17274d4f2ca76360b854_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:returnarticle_centralStore:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 42,  168 => 40,  164 => 29,  159 => 28,  153 => 27,  145 => 25,  142 => 24,  136 => 23,  126 => 21,  120 => 20,  110 => 17,  105 => 16,  99 => 15,  91 => 13,  53 => 11,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
/*     {{ 'returnarticle.new.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/returnArticleFormTemplate.html.twig' with {'form_name' : 'returnarticle.new.name'|trans ,'submit_name': 'returnarticle.new.submit'|trans } %}*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*         'bundles/isetsomagazine/myPlugins/return_article.js'*/
/*         'bundles/isetsomagazine/myjs/add_return_article.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
