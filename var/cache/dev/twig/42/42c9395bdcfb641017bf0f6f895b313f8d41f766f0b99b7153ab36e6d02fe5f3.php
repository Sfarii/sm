<?php

/* ISETSOMagazineBundle:discharge_article_magazine:new.html.twig */
class __TwigTemplate_7d83af21200cad8c3ed746c45338b4168b1bfeeb4ae947bc70708eb3dbf455e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:discharge_article_magazine:new.html.twig", 1);
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
        $__internal_cf5864568b78fb65bc5a9ea144d228788527b7f8aecd67c282b1e79a8dd609fb = $this->env->getExtension("native_profiler");
        $__internal_cf5864568b78fb65bc5a9ea144d228788527b7f8aecd67c282b1e79a8dd609fb->enter($__internal_cf5864568b78fb65bc5a9ea144d228788527b7f8aecd67c282b1e79a8dd609fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:discharge_article_magazine:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf5864568b78fb65bc5a9ea144d228788527b7f8aecd67c282b1e79a8dd609fb->leave($__internal_cf5864568b78fb65bc5a9ea144d228788527b7f8aecd67c282b1e79a8dd609fb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c055f2c2baf82da14fb028c4b521f32597d09a6970da48da88dfeaf7f0c9aa2f = $this->env->getExtension("native_profiler");
        $__internal_c055f2c2baf82da14fb028c4b521f32597d09a6970da48da88dfeaf7f0c9aa2f->enter($__internal_c055f2c2baf82da14fb028c4b521f32597d09a6970da48da88dfeaf7f0c9aa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c055f2c2baf82da14fb028c4b521f32597d09a6970da48da88dfeaf7f0c9aa2f->leave($__internal_c055f2c2baf82da14fb028c4b521f32597d09a6970da48da88dfeaf7f0c9aa2f_prof);

    }

    // line 14
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_69a88e972a1b2417322ba296d35f865d9e9cddc8504c74d30e4de8ca4ee76a53 = $this->env->getExtension("native_profiler");
        $__internal_69a88e972a1b2417322ba296d35f865d9e9cddc8504c74d30e4de8ca4ee76a53->enter($__internal_69a88e972a1b2417322ba296d35f865d9e9cddc8504c74d30e4de8ca4ee76a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 15
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("discharge_article_to_magazine_index");
        echo "\">
       ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_69a88e972a1b2417322ba296d35f865d9e9cddc8504c74d30e4de8ca4ee76a53->leave($__internal_69a88e972a1b2417322ba296d35f865d9e9cddc8504c74d30e4de8ca4ee76a53_prof);

    }

    // line 19
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_a2b086eaf9bf2a1e8be886ce1429cf4d6280292ad81180181b1e1ff3d89ffa26 = $this->env->getExtension("native_profiler");
        $__internal_a2b086eaf9bf2a1e8be886ce1429cf4d6280292ad81180181b1e1ff3d89ffa26->enter($__internal_a2b086eaf9bf2a1e8be886ce1429cf4d6280292ad81180181b1e1ff3d89ffa26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.new.name"), "html", null, true);
        
        $__internal_a2b086eaf9bf2a1e8be886ce1429cf4d6280292ad81180181b1e1ff3d89ffa26->leave($__internal_a2b086eaf9bf2a1e8be886ce1429cf4d6280292ad81180181b1e1ff3d89ffa26_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6a0ee2ef52fb6b822f0321696b6237a736c635dc0a6d7f82fd87897c31de855 = $this->env->getExtension("native_profiler");
        $__internal_c6a0ee2ef52fb6b822f0321696b6237a736c635dc0a6d7f82fd87897c31de855->enter($__internal_c6a0ee2ef52fb6b822f0321696b6237a736c635dc0a6d7f82fd87897c31de855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    
    ";
        // line 22
        $this->loadTemplate("Template/ArticleManagementAddFormTemplate.html.twig", "ISETSOMagazineBundle:discharge_article_magazine:new.html.twig", 22)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("dischargearticle.new.name"))));
        // line 23
        echo "
";
        
        $__internal_c6a0ee2ef52fb6b822f0321696b6237a736c635dc0a6d7f82fd87897c31de855->leave($__internal_c6a0ee2ef52fb6b822f0321696b6237a736c635dc0a6d7f82fd87897c31de855_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f8bebaf8d51509644bf91a5297e095352a5410039fb7e11c3843853bf1f8c1a = $this->env->getExtension("native_profiler");
        $__internal_1f8bebaf8d51509644bf91a5297e095352a5410039fb7e11c3843853bf1f8c1a->enter($__internal_1f8bebaf8d51509644bf91a5297e095352a5410039fb7e11c3843853bf1f8c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "252d411_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_252d411_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/252d411_jquery.dataTables_1.js");
            // line 38
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "252d411_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_252d411_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/252d411_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "252d411_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_252d411_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/252d411_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "252d411_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_252d411_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/252d411_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "252d411_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_252d411_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/252d411_discharge_article_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "252d411_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_252d411_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/252d411_add_discharge_magazine_article_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "252d411_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_252d411_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/252d411_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "252d411_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_252d411_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/252d411_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "252d411_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_252d411_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/252d411_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "252d411"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_252d411") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/252d411.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 40
        echo " ";
        
        $__internal_1f8bebaf8d51509644bf91a5297e095352a5410039fb7e11c3843853bf1f8c1a->leave($__internal_1f8bebaf8d51509644bf91a5297e095352a5410039fb7e11c3843853bf1f8c1a_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:discharge_article_magazine:new.html.twig";
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
/*     <a href="{{ path('discharge_article_to_magazine_index') }}">*/
/*        {{ 'dischargearticle.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*      {% block breadcrumbActive %}{{ 'dischargearticle.new.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     */
/*     {% include 'Template/ArticleManagementAddFormTemplate.html.twig' with {'form_name': 'dischargearticle.new.name'|trans } %}*/
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
/*         'bundles/isetsomagazine/myjs/add_discharge_magazine_article.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
