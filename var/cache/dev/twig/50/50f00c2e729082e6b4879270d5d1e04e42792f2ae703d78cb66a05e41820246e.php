<?php

/* ISETSOMagazineBundle:orderarticle:edit.html.twig */
class __TwigTemplate_ff868406046ca3da27cd36dd2db8e37afa6074b3d5f9fd5891f60d5cccc2a5ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:orderarticle:edit.html.twig", 1);
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
        $__internal_34518e6bbc1d37009a68e3c1f9f56502a44038d71384efbcf3df88de6adeab7f = $this->env->getExtension("native_profiler");
        $__internal_34518e6bbc1d37009a68e3c1f9f56502a44038d71384efbcf3df88de6adeab7f->enter($__internal_34518e6bbc1d37009a68e3c1f9f56502a44038d71384efbcf3df88de6adeab7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:orderarticle:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34518e6bbc1d37009a68e3c1f9f56502a44038d71384efbcf3df88de6adeab7f->leave($__internal_34518e6bbc1d37009a68e3c1f9f56502a44038d71384efbcf3df88de6adeab7f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9dc15a2c4de2e8ef36f5ea62f64e8e35b2f9b5b6f04b56f7f0229e92ae12b9b7 = $this->env->getExtension("native_profiler");
        $__internal_9dc15a2c4de2e8ef36f5ea62f64e8e35b2f9b5b6f04b56f7f0229e92ae12b9b7->enter($__internal_9dc15a2c4de2e8ef36f5ea62f64e8e35b2f9b5b6f04b56f7f0229e92ae12b9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9dc15a2c4de2e8ef36f5ea62f64e8e35b2f9b5b6f04b56f7f0229e92ae12b9b7->leave($__internal_9dc15a2c4de2e8ef36f5ea62f64e8e35b2f9b5b6f04b56f7f0229e92ae12b9b7_prof);

    }

    // line 14
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_04ec4355edd5b46b8ca7e3c994a4c011695c2f8c90fa2c3a62eb148e60dfdad7 = $this->env->getExtension("native_profiler");
        $__internal_04ec4355edd5b46b8ca7e3c994a4c011695c2f8c90fa2c3a62eb148e60dfdad7->enter($__internal_04ec4355edd5b46b8ca7e3c994a4c011695c2f8c90fa2c3a62eb148e60dfdad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_04ec4355edd5b46b8ca7e3c994a4c011695c2f8c90fa2c3a62eb148e60dfdad7->leave($__internal_04ec4355edd5b46b8ca7e3c994a4c011695c2f8c90fa2c3a62eb148e60dfdad7_prof);

    }

    // line 19
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_825b728af4c5bab4cfa394551406459f2f4756ff3b5c3b57c9f74937092641ac = $this->env->getExtension("native_profiler");
        $__internal_825b728af4c5bab4cfa394551406459f2f4756ff3b5c3b57c9f74937092641ac->enter($__internal_825b728af4c5bab4cfa394551406459f2f4756ff3b5c3b57c9f74937092641ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 20
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("orderarticle.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_825b728af4c5bab4cfa394551406459f2f4756ff3b5c3b57c9f74937092641ac->leave($__internal_825b728af4c5bab4cfa394551406459f2f4756ff3b5c3b57c9f74937092641ac_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c414ee9fedd0b9dbbb6030d7c561bb189f6a7e49acad0b1e1a1f57556d68f35 = $this->env->getExtension("native_profiler");
        $__internal_1c414ee9fedd0b9dbbb6030d7c561bb189f6a7e49acad0b1e1a1f57556d68f35->enter($__internal_1c414ee9fedd0b9dbbb6030d7c561bb189f6a7e49acad0b1e1a1f57556d68f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    ";
        $this->loadTemplate("Template/OrderArticleAddFormTemplate.html.twig", "ISETSOMagazineBundle:orderarticle:edit.html.twig", 23)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("orderarticle.new.name"))));
        
        $__internal_1c414ee9fedd0b9dbbb6030d7c561bb189f6a7e49acad0b1e1a1f57556d68f35->leave($__internal_1c414ee9fedd0b9dbbb6030d7c561bb189f6a7e49acad0b1e1a1f57556d68f35_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb9ba99f6157e7cd38711812cc410fb0a1ba6cdd368b64754da49343bb121169 = $this->env->getExtension("native_profiler");
        $__internal_eb9ba99f6157e7cd38711812cc410fb0a1ba6cdd368b64754da49343bb121169->enter($__internal_eb9ba99f6157e7cd38711812cc410fb0a1ba6cdd368b64754da49343bb121169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b89dcad_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b89dcad_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b89dcad_jquery.dataTables_1.js");
            // line 38
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b89dcad_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b89dcad_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b89dcad_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b89dcad_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b89dcad_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b89dcad_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b89dcad_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b89dcad_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b89dcad_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b89dcad_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b89dcad_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b89dcad_order_article_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b89dcad_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b89dcad_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b89dcad_edit_order_article_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b89dcad_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b89dcad_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b89dcad_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b89dcad_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b89dcad_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b89dcad_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b89dcad_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b89dcad_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b89dcad_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "b89dcad"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b89dcad") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b89dcad.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 40
        echo " ";
        
        $__internal_eb9ba99f6157e7cd38711812cc410fb0a1ba6cdd368b64754da49343bb121169->leave($__internal_eb9ba99f6157e7cd38711812cc410fb0a1ba6cdd368b64754da49343bb121169_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:orderarticle:edit.html.twig";
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
/*     {{ 'orderarticle.edit.name'|trans }}*/
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
/*         'bundles/isetsomagazine/myjs/edit_order_article.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
