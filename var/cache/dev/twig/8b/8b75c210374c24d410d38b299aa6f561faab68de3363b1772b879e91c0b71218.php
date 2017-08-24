<?php

/* ISETSOMagazineBundle:magazine_discharge:edit.html.twig */
class __TwigTemplate_7672c300d548e4669ba2e1a25e4a47da49df8447cf75d50777fdde6dab078180 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:magazine_discharge:edit.html.twig", 1);
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
        $__internal_35d4a7005f6b7f32ffe3f17768e81400169b60a211753bd3cd452462f536fab2 = $this->env->getExtension("native_profiler");
        $__internal_35d4a7005f6b7f32ffe3f17768e81400169b60a211753bd3cd452462f536fab2->enter($__internal_35d4a7005f6b7f32ffe3f17768e81400169b60a211753bd3cd452462f536fab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:magazine_discharge:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35d4a7005f6b7f32ffe3f17768e81400169b60a211753bd3cd452462f536fab2->leave($__internal_35d4a7005f6b7f32ffe3f17768e81400169b60a211753bd3cd452462f536fab2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_823e2f5fd697128fc59c025bdcfeebee98704e31faa122ac3ba0a489a460003d = $this->env->getExtension("native_profiler");
        $__internal_823e2f5fd697128fc59c025bdcfeebee98704e31faa122ac3ba0a489a460003d->enter($__internal_823e2f5fd697128fc59c025bdcfeebee98704e31faa122ac3ba0a489a460003d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_823e2f5fd697128fc59c025bdcfeebee98704e31faa122ac3ba0a489a460003d->leave($__internal_823e2f5fd697128fc59c025bdcfeebee98704e31faa122ac3ba0a489a460003d_prof);

    }

    // line 14
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f605163880bb3aa6cac836e4c896e62b3eec2aaec7c8aa7226fcb928c73700e6 = $this->env->getExtension("native_profiler");
        $__internal_f605163880bb3aa6cac836e4c896e62b3eec2aaec7c8aa7226fcb928c73700e6->enter($__internal_f605163880bb3aa6cac836e4c896e62b3eec2aaec7c8aa7226fcb928c73700e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 15
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_magazinedischarge_index", array("id" => $this->getAttribute($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "toSubStore", array()), "id", array()))), "html", null, true);
        echo "\">
       ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazineDischarge.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_f605163880bb3aa6cac836e4c896e62b3eec2aaec7c8aa7226fcb928c73700e6->leave($__internal_f605163880bb3aa6cac836e4c896e62b3eec2aaec7c8aa7226fcb928c73700e6_prof);

    }

    // line 19
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_e17a8deda7693ad609996cb7529c759a4cd7b4c3635cc1b549bd0029fe35deb4 = $this->env->getExtension("native_profiler");
        $__internal_e17a8deda7693ad609996cb7529c759a4cd7b4c3635cc1b549bd0029fe35deb4->enter($__internal_e17a8deda7693ad609996cb7529c759a4cd7b4c3635cc1b549bd0029fe35deb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 20
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazineDischarge.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_e17a8deda7693ad609996cb7529c759a4cd7b4c3635cc1b549bd0029fe35deb4->leave($__internal_e17a8deda7693ad609996cb7529c759a4cd7b4c3635cc1b549bd0029fe35deb4_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_24b193aa354dcb2d35434d42cc13fdf1b4dccb3a231098c6dc7a4a0dfc535c98 = $this->env->getExtension("native_profiler");
        $__internal_24b193aa354dcb2d35434d42cc13fdf1b4dccb3a231098c6dc7a4a0dfc535c98->enter($__internal_24b193aa354dcb2d35434d42cc13fdf1b4dccb3a231098c6dc7a4a0dfc535c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "
    ";
        // line 24
        $this->loadTemplate("Template/ArticleManagementAddFormTemplate.html.twig", "ISETSOMagazineBundle:magazine_discharge:edit.html.twig", 24)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("dischargearticle.edit.name"))));
        // line 25
        echo "
";
        
        $__internal_24b193aa354dcb2d35434d42cc13fdf1b4dccb3a231098c6dc7a4a0dfc535c98->leave($__internal_24b193aa354dcb2d35434d42cc13fdf1b4dccb3a231098c6dc7a4a0dfc535c98_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f5682dea199e4f320bc874d03abb736c96744c6c463e620c628c05e213754fd = $this->env->getExtension("native_profiler");
        $__internal_5f5682dea199e4f320bc874d03abb736c96744c6c463e620c628c05e213754fd->enter($__internal_5f5682dea199e4f320bc874d03abb736c96744c6c463e620c628c05e213754fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "    <script type=\"text/javascript\">
    var store_id = ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "toSubStore", array()), "id", array()), "html", null, true);
        echo ";
    </script>
    ";
        // line 31
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 32
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "410b980_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_410b980_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/410b980_jquery.dataTables_1.js");
            // line 43
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "410b980_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_410b980_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/410b980_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "410b980_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_410b980_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/410b980_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "410b980_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_410b980_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/410b980_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "410b980_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_410b980_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/410b980_discharge_article_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "410b980_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_410b980_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/410b980_edit_discharge_user_article_from_subStore_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "410b980_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_410b980_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/410b980_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "410b980_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_410b980_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/410b980_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "410b980_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_410b980_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/410b980_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "410b980"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_410b980") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/410b980.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 45
        echo " ";
        
        $__internal_5f5682dea199e4f320bc874d03abb736c96744c6c463e620c628c05e213754fd->leave($__internal_5f5682dea199e4f320bc874d03abb736c96744c6c463e620c628c05e213754fd_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:magazine_discharge:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 45,  171 => 43,  167 => 32,  163 => 31,  158 => 29,  155 => 28,  149 => 27,  141 => 25,  139 => 24,  136 => 23,  130 => 22,  120 => 20,  114 => 19,  104 => 16,  99 => 15,  93 => 14,  85 => 12,  53 => 10,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
/*     <a href="{{ path('magazine_magazinedischarge_index',{ 'id' : magazine.toSubStore.id}) }}">*/
/*        {{ 'magazineDischarge.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'magazineDischarge.edit.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/*     {% include 'Template/ArticleManagementAddFormTemplate.html.twig' with {'form_name': 'dischargearticle.edit.name'|trans } %}*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <script type="text/javascript">*/
/*     var store_id = {{ magazine.toSubStore.id }};*/
/*     </script>*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*         'bundles/isetsomagazine/myPlugins/discharge_article.js'*/
/*         'bundles/isetsomagazine/myjs/edit_discharge_user_article_from_subStore.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
