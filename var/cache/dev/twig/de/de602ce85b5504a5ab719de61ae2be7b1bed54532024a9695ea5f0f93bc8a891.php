<?php

/* ISETSOMagazineBundle:discharge_article_user:new.html.twig */
class __TwigTemplate_c9372e4c6005323da80a06b55de2bb0a00c99fbe5035dc9a9c8673635de5fd8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:discharge_article_user:new.html.twig", 1);
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
        $__internal_9f841949490be860adfb333551fefd762dcef1ec0df508780550b920f77c118e = $this->env->getExtension("native_profiler");
        $__internal_9f841949490be860adfb333551fefd762dcef1ec0df508780550b920f77c118e->enter($__internal_9f841949490be860adfb333551fefd762dcef1ec0df508780550b920f77c118e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:discharge_article_user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f841949490be860adfb333551fefd762dcef1ec0df508780550b920f77c118e->leave($__internal_9f841949490be860adfb333551fefd762dcef1ec0df508780550b920f77c118e_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f4b8cbed5bea7f15876e52d10ff6e57891aa824719b8ea79fbe44980e86a253 = $this->env->getExtension("native_profiler");
        $__internal_7f4b8cbed5bea7f15876e52d10ff6e57891aa824719b8ea79fbe44980e86a253->enter($__internal_7f4b8cbed5bea7f15876e52d10ff6e57891aa824719b8ea79fbe44980e86a253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7f4b8cbed5bea7f15876e52d10ff6e57891aa824719b8ea79fbe44980e86a253->leave($__internal_7f4b8cbed5bea7f15876e52d10ff6e57891aa824719b8ea79fbe44980e86a253_prof);

    }

    // line 14
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_ddc661354d2d8e60e83216d03c41b1345c974654601d2cb94c2b17c17ec04eb4 = $this->env->getExtension("native_profiler");
        $__internal_ddc661354d2d8e60e83216d03c41b1345c974654601d2cb94c2b17c17ec04eb4->enter($__internal_ddc661354d2d8e60e83216d03c41b1345c974654601d2cb94c2b17c17ec04eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_ddc661354d2d8e60e83216d03c41b1345c974654601d2cb94c2b17c17ec04eb4->leave($__internal_ddc661354d2d8e60e83216d03c41b1345c974654601d2cb94c2b17c17ec04eb4_prof);

    }

    // line 19
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_085f54019be567604de81ff74a21e784d7d2b2a45411ef8e3fc09634ab5fa26a = $this->env->getExtension("native_profiler");
        $__internal_085f54019be567604de81ff74a21e784d7d2b2a45411ef8e3fc09634ab5fa26a->enter($__internal_085f54019be567604de81ff74a21e784d7d2b2a45411ef8e3fc09634ab5fa26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 20
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.new.name"), "html", null, true);
        echo "
";
        
        $__internal_085f54019be567604de81ff74a21e784d7d2b2a45411ef8e3fc09634ab5fa26a->leave($__internal_085f54019be567604de81ff74a21e784d7d2b2a45411ef8e3fc09634ab5fa26a_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_80306496fb26a69e0de0f0b2b74c85d23725970242f29e270055b123b789e1f1 = $this->env->getExtension("native_profiler");
        $__internal_80306496fb26a69e0de0f0b2b74c85d23725970242f29e270055b123b789e1f1->enter($__internal_80306496fb26a69e0de0f0b2b74c85d23725970242f29e270055b123b789e1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    
   ";
        // line 24
        $this->loadTemplate("Template/ArticleManagementAddFormTemplate.html.twig", "ISETSOMagazineBundle:discharge_article_user:new.html.twig", 24)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("dischargearticle.new.name"))));
        // line 25
        echo "
";
        
        $__internal_80306496fb26a69e0de0f0b2b74c85d23725970242f29e270055b123b789e1f1->leave($__internal_80306496fb26a69e0de0f0b2b74c85d23725970242f29e270055b123b789e1f1_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0d19c30ec61dacc275188e078fec795e4ef68218c97dc7721694f06b4ea72fb = $this->env->getExtension("native_profiler");
        $__internal_a0d19c30ec61dacc275188e078fec795e4ef68218c97dc7721694f06b4ea72fb->enter($__internal_a0d19c30ec61dacc275188e078fec795e4ef68218c97dc7721694f06b4ea72fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 29
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e2fb23a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2fb23a_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e2fb23a_jquery.dataTables_1.js");
            // line 40
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e2fb23a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2fb23a_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e2fb23a_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e2fb23a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2fb23a_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e2fb23a_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e2fb23a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2fb23a_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e2fb23a_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e2fb23a_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2fb23a_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e2fb23a_discharge_article_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e2fb23a_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2fb23a_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e2fb23a_add_discharge_user_article_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e2fb23a_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2fb23a_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e2fb23a_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e2fb23a_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2fb23a_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e2fb23a_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e2fb23a_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2fb23a_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e2fb23a_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "e2fb23a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e2fb23a") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e2fb23a.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 42
        echo " ";
        
        $__internal_a0d19c30ec61dacc275188e078fec795e4ef68218c97dc7721694f06b4ea72fb->leave($__internal_a0d19c30ec61dacc275188e078fec795e4ef68218c97dc7721694f06b4ea72fb_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:discharge_article_user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 42,  164 => 40,  160 => 29,  155 => 28,  149 => 27,  141 => 25,  139 => 24,  136 => 23,  130 => 22,  120 => 20,  114 => 19,  104 => 16,  99 => 15,  93 => 14,  85 => 12,  53 => 10,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
/* {% block breadcrumbActive %}*/
/*     {{ 'dischargearticle.new.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     */
/*    {% include 'Template/ArticleManagementAddFormTemplate.html.twig' with {'form_name': 'dischargearticle.new.name'|trans } %}*/
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
/*         'bundles/isetsomagazine/myjs/add_discharge_user_article.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
