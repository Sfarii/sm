<?php

/* ISETSOMagazineBundle:orderarticle:new.html.twig */
class __TwigTemplate_4e537263b5ba9d802186c0fa00a603f65269e7f3c9b1e7e3541043047143c2bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:orderarticle:new.html.twig", 1);
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
        $__internal_0a6dd08b8045bc19734454944b629d6554a32a6d2046e1de2dd37d09d26bed41 = $this->env->getExtension("native_profiler");
        $__internal_0a6dd08b8045bc19734454944b629d6554a32a6d2046e1de2dd37d09d26bed41->enter($__internal_0a6dd08b8045bc19734454944b629d6554a32a6d2046e1de2dd37d09d26bed41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:orderarticle:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a6dd08b8045bc19734454944b629d6554a32a6d2046e1de2dd37d09d26bed41->leave($__internal_0a6dd08b8045bc19734454944b629d6554a32a6d2046e1de2dd37d09d26bed41_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52893ef1c690caf5432074a049b8599d49907cf1680d7e494135749391d57745 = $this->env->getExtension("native_profiler");
        $__internal_52893ef1c690caf5432074a049b8599d49907cf1680d7e494135749391d57745->enter($__internal_52893ef1c690caf5432074a049b8599d49907cf1680d7e494135749391d57745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_52893ef1c690caf5432074a049b8599d49907cf1680d7e494135749391d57745->leave($__internal_52893ef1c690caf5432074a049b8599d49907cf1680d7e494135749391d57745_prof);

    }

    // line 14
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_90a9925cd134e87c6b3541b1d6b2ece1d9a5352367af246687262d6e0a5242fc = $this->env->getExtension("native_profiler");
        $__internal_90a9925cd134e87c6b3541b1d6b2ece1d9a5352367af246687262d6e0a5242fc->enter($__internal_90a9925cd134e87c6b3541b1d6b2ece1d9a5352367af246687262d6e0a5242fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 15
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("orderarticle_index");
        echo "\">
       ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("orderarticle.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_90a9925cd134e87c6b3541b1d6b2ece1d9a5352367af246687262d6e0a5242fc->leave($__internal_90a9925cd134e87c6b3541b1d6b2ece1d9a5352367af246687262d6e0a5242fc_prof);

    }

    // line 19
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_87259a68d3ef77b2d7e5935498356d5823a81884d7882a02b3db093802b6ca00 = $this->env->getExtension("native_profiler");
        $__internal_87259a68d3ef77b2d7e5935498356d5823a81884d7882a02b3db093802b6ca00->enter($__internal_87259a68d3ef77b2d7e5935498356d5823a81884d7882a02b3db093802b6ca00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 20
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("orderarticle.new.name"), "html", null, true);
        echo "
";
        
        $__internal_87259a68d3ef77b2d7e5935498356d5823a81884d7882a02b3db093802b6ca00->leave($__internal_87259a68d3ef77b2d7e5935498356d5823a81884d7882a02b3db093802b6ca00_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3e8ab27f0041d26cba88a316b42844fb3ce919778d98c9975396bc4d83fafdc = $this->env->getExtension("native_profiler");
        $__internal_e3e8ab27f0041d26cba88a316b42844fb3ce919778d98c9975396bc4d83fafdc->enter($__internal_e3e8ab27f0041d26cba88a316b42844fb3ce919778d98c9975396bc4d83fafdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    ";
        $this->loadTemplate("Template/OrderArticleAddFormTemplate.html.twig", "ISETSOMagazineBundle:orderarticle:new.html.twig", 23)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("orderarticle.new.name"))));
        
        $__internal_e3e8ab27f0041d26cba88a316b42844fb3ce919778d98c9975396bc4d83fafdc->leave($__internal_e3e8ab27f0041d26cba88a316b42844fb3ce919778d98c9975396bc4d83fafdc_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_166dd653b7d810e257fce839f510c29edbda1414025b76d02711d338e6b41e43 = $this->env->getExtension("native_profiler");
        $__internal_166dd653b7d810e257fce839f510c29edbda1414025b76d02711d338e6b41e43->enter($__internal_166dd653b7d810e257fce839f510c29edbda1414025b76d02711d338e6b41e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "215c605_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_215c605_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/215c605_jquery.dataTables_1.js");
            // line 38
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "215c605_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_215c605_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/215c605_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "215c605_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_215c605_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/215c605_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "215c605_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_215c605_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/215c605_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "215c605_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_215c605_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/215c605_order_article_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "215c605_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_215c605_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/215c605_add_order_article_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "215c605_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_215c605_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/215c605_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "215c605_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_215c605_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/215c605_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "215c605_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_215c605_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/215c605_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "215c605"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_215c605") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/215c605.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 40
        echo " ";
        
        $__internal_166dd653b7d810e257fce839f510c29edbda1414025b76d02711d338e6b41e43->leave($__internal_166dd653b7d810e257fce839f510c29edbda1414025b76d02711d338e6b41e43_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:orderarticle:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 40,  159 => 38,  155 => 27,  150 => 26,  144 => 25,  136 => 23,  130 => 22,  120 => 20,  114 => 19,  104 => 16,  99 => 15,  93 => 14,  85 => 12,  53 => 10,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
/*     <a href="{{ path('orderarticle_index') }}">*/
/*        {{ 'orderarticle.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'orderarticle.new.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/OrderArticleAddFormTemplate.html.twig' with {'form_name': 'orderarticle.new.name'|trans } %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*         'bundles/isetsomagazine/myPlugins/order_article.js'*/
/*         'bundles/isetsomagazine/myjs/add_order_article.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
