<?php

/* ISETSOUserBundle:usergroup:permission.html.twig */
class __TwigTemplate_7c353afc6dc2ca8d2538553b1f6820a79ce99d11c5cfd13ee422a04362e8ebf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOUserBundle:usergroup:permission.html.twig", 1);
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
        $__internal_da15481df8e98c6d304a88b7a8394da1c52719d0d4ae4c314b0e49af6b425fec = $this->env->getExtension("native_profiler");
        $__internal_da15481df8e98c6d304a88b7a8394da1c52719d0d4ae4c314b0e49af6b425fec->enter($__internal_da15481df8e98c6d304a88b7a8394da1c52719d0d4ae4c314b0e49af6b425fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:usergroup:permission.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da15481df8e98c6d304a88b7a8394da1c52719d0d4ae4c314b0e49af6b425fec->leave($__internal_da15481df8e98c6d304a88b7a8394da1c52719d0d4ae4c314b0e49af6b425fec_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_062e12d4cc2baa314040e94b3ce6f24e4d88ad743ebe95da0928b0f532c9bf2a = $this->env->getExtension("native_profiler");
        $__internal_062e12d4cc2baa314040e94b3ce6f24e4d88ad743ebe95da0928b0f532c9bf2a->enter($__internal_062e12d4cc2baa314040e94b3ce6f24e4d88ad743ebe95da0928b0f532c9bf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2bc3603_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2bc3603_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2bc3603_multi-select_1.css");
            // line 8
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "2bc3603_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2bc3603_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2bc3603_select2_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "2bc3603"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2bc3603") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2bc3603.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "     
";
        
        $__internal_062e12d4cc2baa314040e94b3ce6f24e4d88ad743ebe95da0928b0f532c9bf2a->leave($__internal_062e12d4cc2baa314040e94b3ce6f24e4d88ad743ebe95da0928b0f532c9bf2a_prof);

    }

    // line 11
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e3238c647128ee72ad4d209e6923df371ca702a8ae80594f68682e14ccfcb200 = $this->env->getExtension("native_profiler");
        $__internal_e3238c647128ee72ad4d209e6923df371ca702a8ae80594f68682e14ccfcb200->enter($__internal_e3238c647128ee72ad4d209e6923df371ca702a8ae80594f68682e14ccfcb200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 12
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("usergroup_index");
        echo "\">
       ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_e3238c647128ee72ad4d209e6923df371ca702a8ae80594f68682e14ccfcb200->leave($__internal_e3238c647128ee72ad4d209e6923df371ca702a8ae80594f68682e14ccfcb200_prof);

    }

    // line 16
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_8cf2f1edfa35eaa550167140c447ec5c5bf0fa3b6fe098d3e072d3ba3920844e = $this->env->getExtension("native_profiler");
        $__internal_8cf2f1edfa35eaa550167140c447ec5c5bf0fa3b6fe098d3e072d3ba3920844e->enter($__internal_8cf2f1edfa35eaa550167140c447ec5c5bf0fa3b6fe098d3e072d3ba3920844e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 17
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_8cf2f1edfa35eaa550167140c447ec5c5bf0fa3b6fe098d3e072d3ba3920844e->leave($__internal_8cf2f1edfa35eaa550167140c447ec5c5bf0fa3b6fe098d3e072d3ba3920844e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_19214df6af09a1fddf2d470183ca5d5179472ca753b15856304bd816cea759f2 = $this->env->getExtension("native_profiler");
        $__internal_19214df6af09a1fddf2d470183ca5d5179472ca753b15856304bd816cea759f2->enter($__internal_19214df6af09a1fddf2d470183ca5d5179472ca753b15856304bd816cea759f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <ul id=\"basicwizard-header\" class=\"stepy-header\">
        <li id=\"basicwizard-head-0\" class=\"stepy-active\">
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("userGroup_permission", array("id" => $this->getAttribute((isset($context["usergroup"]) ? $context["usergroup"] : $this->getContext($context, "usergroup")), "id", array()))), "html", null, true);
        echo "\">
                <div><i class=\"fa fa-refresh fa-spin\"></i></div>
                <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.edit.permission"), "html", null, true);
        echo "</span>
            </a>
        </li>
        <li id=\"basicwizard-head-1\">
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("usergroup_edit", array("id" => $this->getAttribute((isset($context["usergroup"]) ? $context["usergroup"] : $this->getContext($context, "usergroup")), "id", array()))), "html", null, true);
        echo "\">
                <div><i class=\"fa fa-cogs\"></i></div>
                <span>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.edit.name"), "html", null, true);
        echo "</span>
            </a>
        </li>
    </ul>
    ";
        // line 34
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOUserBundle:usergroup:permission.html.twig", 34)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "form_name" => $this->env->getExtension('translator')->trans("usergroup.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("usergroup.edit.submit"))));
        
        $__internal_19214df6af09a1fddf2d470183ca5d5179472ca753b15856304bd816cea759f2->leave($__internal_19214df6af09a1fddf2d470183ca5d5179472ca753b15856304bd816cea759f2_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10384b32e80ed1171f9653559ac5fbeb38fa8e2d4b3f958c69b91f5a1b0427e5 = $this->env->getExtension("native_profiler");
        $__internal_10384b32e80ed1171f9653559ac5fbeb38fa8e2d4b3f958c69b91f5a1b0427e5->enter($__internal_10384b32e80ed1171f9653559ac5fbeb38fa8e2d4b3f958c69b91f5a1b0427e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 38
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9ebbd1d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ebbd1d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ebbd1d_jquery.multi-select.min_1.js");
            // line 43
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9ebbd1d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ebbd1d_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ebbd1d_icheck_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9ebbd1d_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ebbd1d_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ebbd1d_select2.min_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "9ebbd1d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ebbd1d") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ebbd1d.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 45
        echo "
    <script type=\"text/javascript\">
        \$('select').multiSelect();
    </script>
";
        
        $__internal_10384b32e80ed1171f9653559ac5fbeb38fa8e2d4b3f958c69b91f5a1b0427e5->leave($__internal_10384b32e80ed1171f9653559ac5fbeb38fa8e2d4b3f958c69b91f5a1b0427e5_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:usergroup:permission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 45,  174 => 43,  170 => 38,  165 => 37,  159 => 36,  152 => 34,  145 => 30,  140 => 28,  133 => 24,  128 => 22,  124 => 20,  118 => 19,  108 => 17,  102 => 16,  92 => 13,  87 => 12,  81 => 11,  73 => 9,  53 => 8,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets */
/*         'bundles/isetsomagazine/plugins/form-multiselect/css/multi-select.css'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.css'*/
/*         filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}     */
/* {% endblock %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('usergroup_index') }}">*/
/*        {{ 'usergroup.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'usergroup.edit.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <ul id="basicwizard-header" class="stepy-header">*/
/*         <li id="basicwizard-head-0" class="stepy-active">*/
/*             <a href="{{ url('userGroup_permission', { 'id': usergroup.id}) }}">*/
/*                 <div><i class="fa fa-refresh fa-spin"></i></div>*/
/*                 <span>{{ 'usergroup.edit.permission'|trans }}</span>*/
/*             </a>*/
/*         </li>*/
/*         <li id="basicwizard-head-1">*/
/*             <a href="{{ url('usergroup_edit', { 'id': usergroup.id}) }}">*/
/*                 <div><i class="fa fa-cogs"></i></div>*/
/*                 <span>{{ 'usergroup.edit.name'|trans }}</span>*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': form ,'form_name' : 'usergroup.edit.name'|trans ,'submit_name': 'usergroup.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/form-multiselect/js/jquery.multi-select.min.js'*/
/*         'bundles/isetsomagazine/plugins/iCheck/icheck.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/*     <script type="text/javascript">*/
/*         $('select').multiSelect();*/
/*     </script>*/
/* {% endblock %}*/
