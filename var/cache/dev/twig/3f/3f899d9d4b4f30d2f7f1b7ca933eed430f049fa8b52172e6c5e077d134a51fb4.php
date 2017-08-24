<?php

/* ISETSOUserBundle:usergroup:new.html.twig */
class __TwigTemplate_ccba1d834db25f55cccb55d99d7fb043c7fc693fa6d14dec4eb6f091ff2b3cb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOUserBundle:usergroup:new.html.twig", 1);
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
        $__internal_6f6049427e64c9f25a13f1c52e1c212c9a2d7cf23a3ed86023ebc57171c3d4bb = $this->env->getExtension("native_profiler");
        $__internal_6f6049427e64c9f25a13f1c52e1c212c9a2d7cf23a3ed86023ebc57171c3d4bb->enter($__internal_6f6049427e64c9f25a13f1c52e1c212c9a2d7cf23a3ed86023ebc57171c3d4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:usergroup:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f6049427e64c9f25a13f1c52e1c212c9a2d7cf23a3ed86023ebc57171c3d4bb->leave($__internal_6f6049427e64c9f25a13f1c52e1c212c9a2d7cf23a3ed86023ebc57171c3d4bb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee70bd213d7860b415923815407cbab4e072fa2b9f44875b9bbee2eb95bb2b21 = $this->env->getExtension("native_profiler");
        $__internal_ee70bd213d7860b415923815407cbab4e072fa2b9f44875b9bbee2eb95bb2b21->enter($__internal_ee70bd213d7860b415923815407cbab4e072fa2b9f44875b9bbee2eb95bb2b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ee70bd213d7860b415923815407cbab4e072fa2b9f44875b9bbee2eb95bb2b21->leave($__internal_ee70bd213d7860b415923815407cbab4e072fa2b9f44875b9bbee2eb95bb2b21_prof);

    }

    // line 11
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_131fddd49138629b63abf03036ff26979e0d15cec3592b8779fc772b6bf0a725 = $this->env->getExtension("native_profiler");
        $__internal_131fddd49138629b63abf03036ff26979e0d15cec3592b8779fc772b6bf0a725->enter($__internal_131fddd49138629b63abf03036ff26979e0d15cec3592b8779fc772b6bf0a725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_131fddd49138629b63abf03036ff26979e0d15cec3592b8779fc772b6bf0a725->leave($__internal_131fddd49138629b63abf03036ff26979e0d15cec3592b8779fc772b6bf0a725_prof);

    }

    // line 16
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_00adfbc428b40359c8cf2f0f9eb887f8086a0c15abbee0920562ea1339d7988e = $this->env->getExtension("native_profiler");
        $__internal_00adfbc428b40359c8cf2f0f9eb887f8086a0c15abbee0920562ea1339d7988e->enter($__internal_00adfbc428b40359c8cf2f0f9eb887f8086a0c15abbee0920562ea1339d7988e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.new.name"), "html", null, true);
        
        $__internal_00adfbc428b40359c8cf2f0f9eb887f8086a0c15abbee0920562ea1339d7988e->leave($__internal_00adfbc428b40359c8cf2f0f9eb887f8086a0c15abbee0920562ea1339d7988e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_274f5efb4a206874665befeddab6e3b141274a619b35e1d44d0c441acec3c239 = $this->env->getExtension("native_profiler");
        $__internal_274f5efb4a206874665befeddab6e3b141274a619b35e1d44d0c441acec3c239->enter($__internal_274f5efb4a206874665befeddab6e3b141274a619b35e1d44d0c441acec3c239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOUserBundle:usergroup:new.html.twig", 18)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "form_name" => $this->env->getExtension('translator')->trans("usergroup.new.name"), "submit_name" => $this->env->getExtension('translator')->trans("usergroup.new.submit"))));
        
        $__internal_274f5efb4a206874665befeddab6e3b141274a619b35e1d44d0c441acec3c239->leave($__internal_274f5efb4a206874665befeddab6e3b141274a619b35e1d44d0c441acec3c239_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b112d0c011144f37eabd9b3c9579e8c0ee21e90b06c748c09e5a78d78ea10a63 = $this->env->getExtension("native_profiler");
        $__internal_b112d0c011144f37eabd9b3c9579e8c0ee21e90b06c748c09e5a78d78ea10a63->enter($__internal_b112d0c011144f37eabd9b3c9579e8c0ee21e90b06c748c09e5a78d78ea10a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 22
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9ebbd1d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ebbd1d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ebbd1d_jquery.multi-select.min_1.js");
            // line 27
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
        // line 29
        echo "
    <script type=\"text/javascript\">
        \$('select').multiSelect();
    </script>
";
        
        $__internal_b112d0c011144f37eabd9b3c9579e8c0ee21e90b06c748c09e5a78d78ea10a63->leave($__internal_b112d0c011144f37eabd9b3c9579e8c0ee21e90b06c748c09e5a78d78ea10a63_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:usergroup:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 29,  143 => 27,  139 => 22,  134 => 21,  128 => 20,  120 => 18,  114 => 17,  102 => 16,  92 => 13,  87 => 12,  81 => 11,  73 => 9,  53 => 8,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
/*      {% block breadcrumbActive %}{{ 'usergroup.new.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': form ,'form_name' : 'usergroup.new.name'|trans ,'submit_name': 'usergroup.new.submit'|trans } %}*/
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
