<?php

/* ISETSOUserBundle:user:new.html.twig */
class __TwigTemplate_b4780f65d0dd0291d9d6e96209ebf0953b939ddcba9c8adb606a148db30eb215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOUserBundle:user:new.html.twig", 1);
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
        $__internal_7c2d574ab9471d1ae98f69bd98d5ef6f275d67adb039e25b1b46e5f9a7a89592 = $this->env->getExtension("native_profiler");
        $__internal_7c2d574ab9471d1ae98f69bd98d5ef6f275d67adb039e25b1b46e5f9a7a89592->enter($__internal_7c2d574ab9471d1ae98f69bd98d5ef6f275d67adb039e25b1b46e5f9a7a89592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c2d574ab9471d1ae98f69bd98d5ef6f275d67adb039e25b1b46e5f9a7a89592->leave($__internal_7c2d574ab9471d1ae98f69bd98d5ef6f275d67adb039e25b1b46e5f9a7a89592_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ab35d34887b146727389e48448c6898ba7e2245eada4ee80a54dc66550656df = $this->env->getExtension("native_profiler");
        $__internal_9ab35d34887b146727389e48448c6898ba7e2245eada4ee80a54dc66550656df->enter($__internal_9ab35d34887b146727389e48448c6898ba7e2245eada4ee80a54dc66550656df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a57f7fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a57f7fa_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/a57f7fa_prettify_1.css");
            // line 9
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "a57f7fa_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a57f7fa_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/a57f7fa_blue_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "a57f7fa_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a57f7fa_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/a57f7fa_multi-select_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "a57f7fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a57f7fa") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/a57f7fa.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "     
";
        
        $__internal_9ab35d34887b146727389e48448c6898ba7e2245eada4ee80a54dc66550656df->leave($__internal_9ab35d34887b146727389e48448c6898ba7e2245eada4ee80a54dc66550656df_prof);

    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_83d1dd219324639f8d31c183c1f8a44e73b46982f6ffdef55f5ad6d85618888c = $this->env->getExtension("native_profiler");
        $__internal_83d1dd219324639f8d31c183c1f8a44e73b46982f6ffdef55f5ad6d85618888c->enter($__internal_83d1dd219324639f8d31c183c1f8a44e73b46982f6ffdef55f5ad6d85618888c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 13
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">
       ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_83d1dd219324639f8d31c183c1f8a44e73b46982f6ffdef55f5ad6d85618888c->leave($__internal_83d1dd219324639f8d31c183c1f8a44e73b46982f6ffdef55f5ad6d85618888c_prof);

    }

    // line 17
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_f9ce399522bc7320920c98d5a76db847a3853a0ad70dfe8a910dc908b35e350c = $this->env->getExtension("native_profiler");
        $__internal_f9ce399522bc7320920c98d5a76db847a3853a0ad70dfe8a910dc908b35e350c->enter($__internal_f9ce399522bc7320920c98d5a76db847a3853a0ad70dfe8a910dc908b35e350c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 18
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.new.name"), "html", null, true);
        echo "
";
        
        $__internal_f9ce399522bc7320920c98d5a76db847a3853a0ad70dfe8a910dc908b35e350c->leave($__internal_f9ce399522bc7320920c98d5a76db847a3853a0ad70dfe8a910dc908b35e350c_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_b56ba0ecc91db69ec580420fea533a6ad079d1d64d63175716ec21cb2e9b92ca = $this->env->getExtension("native_profiler");
        $__internal_b56ba0ecc91db69ec580420fea533a6ad079d1d64d63175716ec21cb2e9b92ca->enter($__internal_b56ba0ecc91db69ec580420fea533a6ad079d1d64d63175716ec21cb2e9b92ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "\t";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOUserBundle:user:new.html.twig", 21)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "form_name" => $this->env->getExtension('translator')->trans("user.new.name"), "submit_name" => $this->env->getExtension('translator')->trans("user.new.submit"))));
        
        $__internal_b56ba0ecc91db69ec580420fea533a6ad079d1d64d63175716ec21cb2e9b92ca->leave($__internal_b56ba0ecc91db69ec580420fea533a6ad079d1d64d63175716ec21cb2e9b92ca_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d25e5c4c477aaee2be02f54755aaf2fb40fbbc892af1832e3a25d78d2626c7a = $this->env->getExtension("native_profiler");
        $__internal_2d25e5c4c477aaee2be02f54755aaf2fb40fbbc892af1832e3a25d78d2626c7a->enter($__internal_2d25e5c4c477aaee2be02f54755aaf2fb40fbbc892af1832e3a25d78d2626c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9dd21eb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9dd21eb_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9dd21eb_jquery.multi-select.min_1.js");
            // line 29
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9dd21eb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9dd21eb_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9dd21eb_icheck_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "9dd21eb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9dd21eb") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9dd21eb.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 31
        echo "
    <script type=\"text/javascript\">
    \t\$('select').multiSelect();
    </script>
";
        
        $__internal_2d25e5c4c477aaee2be02f54755aaf2fb40fbbc892af1832e3a25d78d2626c7a->leave($__internal_2d25e5c4c477aaee2be02f54755aaf2fb40fbbc892af1832e3a25d78d2626c7a_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 31,  153 => 29,  149 => 25,  144 => 24,  138 => 23,  130 => 21,  124 => 20,  114 => 18,  108 => 17,  98 => 14,  93 => 13,  87 => 12,  79 => 10,  53 => 9,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets */
/*         'bundles/isetsomagazine/plugins/codeprettifier/prettify.css'*/
/*         'bundles/isetsomagazine/plugins/iCheck/skins/minimal/blue.css'*/
/*         'bundles/isetsomagazine/plugins/form-multiselect/css/multi-select.css'*/
/*         filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}     */
/* {% endblock %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('user_index') }}">*/
/*        {{ 'user.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'user.new.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{% include 'Template/SingleFormTemplate.html.twig' with {'form': form ,'form_name' : 'user.new.name'|trans ,'submit_name': 'user.new.submit'|trans } %}*/
/* {% endblock body %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/form-multiselect/js/jquery.multi-select.min.js'*/
/*         'bundles/isetsomagazine/plugins/iCheck/icheck.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/*     <script type="text/javascript">*/
/*     	$('select').multiSelect();*/
/*     </script>*/
/* {% endblock %}*/
/* */
