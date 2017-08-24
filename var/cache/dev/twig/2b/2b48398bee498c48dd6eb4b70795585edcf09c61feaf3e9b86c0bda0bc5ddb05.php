<?php

/* ISETSOMagazineBundle:discharge_article_magazine:edit.html.twig */
class __TwigTemplate_2caa38616aa6deb160782ae30f16c3f301f81fbcf7e9ad40af592755a3b26a60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:discharge_article_magazine:edit.html.twig", 1);
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
        $__internal_8ddba9710d1c816a49a1398b8645a9da5c30d3ff6be68545480fbe819ce3f953 = $this->env->getExtension("native_profiler");
        $__internal_8ddba9710d1c816a49a1398b8645a9da5c30d3ff6be68545480fbe819ce3f953->enter($__internal_8ddba9710d1c816a49a1398b8645a9da5c30d3ff6be68545480fbe819ce3f953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:discharge_article_magazine:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ddba9710d1c816a49a1398b8645a9da5c30d3ff6be68545480fbe819ce3f953->leave($__internal_8ddba9710d1c816a49a1398b8645a9da5c30d3ff6be68545480fbe819ce3f953_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_78343b2c38fa457514d2389a773a6addc7c9f102a282453465cf45711c2b1f54 = $this->env->getExtension("native_profiler");
        $__internal_78343b2c38fa457514d2389a773a6addc7c9f102a282453465cf45711c2b1f54->enter($__internal_78343b2c38fa457514d2389a773a6addc7c9f102a282453465cf45711c2b1f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_78343b2c38fa457514d2389a773a6addc7c9f102a282453465cf45711c2b1f54->leave($__internal_78343b2c38fa457514d2389a773a6addc7c9f102a282453465cf45711c2b1f54_prof);

    }

    // line 14
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d922e033b27e7cd42f6d065b87c25dcb1f304b83f29f61556838691b382462d6 = $this->env->getExtension("native_profiler");
        $__internal_d922e033b27e7cd42f6d065b87c25dcb1f304b83f29f61556838691b382462d6->enter($__internal_d922e033b27e7cd42f6d065b87c25dcb1f304b83f29f61556838691b382462d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_d922e033b27e7cd42f6d065b87c25dcb1f304b83f29f61556838691b382462d6->leave($__internal_d922e033b27e7cd42f6d065b87c25dcb1f304b83f29f61556838691b382462d6_prof);

    }

    // line 19
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_bc247889d6de284832aa6c3fac7180f8e198675df0c21bcd4a583a562e5ae0ec = $this->env->getExtension("native_profiler");
        $__internal_bc247889d6de284832aa6c3fac7180f8e198675df0c21bcd4a583a562e5ae0ec->enter($__internal_bc247889d6de284832aa6c3fac7180f8e198675df0c21bcd4a583a562e5ae0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 20
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_bc247889d6de284832aa6c3fac7180f8e198675df0c21bcd4a583a562e5ae0ec->leave($__internal_bc247889d6de284832aa6c3fac7180f8e198675df0c21bcd4a583a562e5ae0ec_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd5ec5fbb6cf3e6f3dc3dd6699f1871cdf5a479b4a7c378c7aef54609b590c39 = $this->env->getExtension("native_profiler");
        $__internal_cd5ec5fbb6cf3e6f3dc3dd6699f1871cdf5a479b4a7c378c7aef54609b590c39->enter($__internal_cd5ec5fbb6cf3e6f3dc3dd6699f1871cdf5a479b4a7c378c7aef54609b590c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    ";
        $this->loadTemplate("Template/ArticleManagementAddFormTemplate.html.twig", "ISETSOMagazineBundle:discharge_article_magazine:edit.html.twig", 23)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("dischargearticle.edit.name"))));
        
        $__internal_cd5ec5fbb6cf3e6f3dc3dd6699f1871cdf5a479b4a7c378c7aef54609b590c39->leave($__internal_cd5ec5fbb6cf3e6f3dc3dd6699f1871cdf5a479b4a7c378c7aef54609b590c39_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d9f73d7d585ec2622a30e43a0ba3bd7ce556124c8ca7bfbe417598da2057606 = $this->env->getExtension("native_profiler");
        $__internal_8d9f73d7d585ec2622a30e43a0ba3bd7ce556124c8ca7bfbe417598da2057606->enter($__internal_8d9f73d7d585ec2622a30e43a0ba3bd7ce556124c8ca7bfbe417598da2057606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "eb1fce6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb1fce6_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/eb1fce6_jquery.dataTables_1.js");
            // line 38
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "eb1fce6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb1fce6_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/eb1fce6_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "eb1fce6_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb1fce6_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/eb1fce6_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "eb1fce6_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb1fce6_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/eb1fce6_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "eb1fce6_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb1fce6_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/eb1fce6_discharge_article_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "eb1fce6_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb1fce6_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/eb1fce6_edit_discharge_store_article_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "eb1fce6_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb1fce6_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/eb1fce6_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "eb1fce6_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb1fce6_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/eb1fce6_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "eb1fce6_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb1fce6_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/eb1fce6_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "eb1fce6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb1fce6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/eb1fce6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 40
        echo " ";
        
        $__internal_8d9f73d7d585ec2622a30e43a0ba3bd7ce556124c8ca7bfbe417598da2057606->leave($__internal_8d9f73d7d585ec2622a30e43a0ba3bd7ce556124c8ca7bfbe417598da2057606_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:discharge_article_magazine:edit.html.twig";
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
/*     <a href="{{ path('discharge_article_to_magazine_index') }}">*/
/*        {{ 'dischargearticle.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'dischargearticle.edit.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/ArticleManagementAddFormTemplate.html.twig' with {'form_name': 'dischargearticle.edit.name'|trans } %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*         'bundles/isetsomagazine/myPlugins/discharge_article.js'*/
/*         'bundles/isetsomagazine/myjs/edit_discharge_store_article.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
