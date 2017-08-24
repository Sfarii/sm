<?php

/* ISETSOUserBundle:user:permission.html.twig */
class __TwigTemplate_5768825059cc3409a12cd7c808ee8cb303030d3f801d05af39211d9e46d433fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOUserBundle:user:permission.html.twig", 1);
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
        $__internal_3f868ead8468f457a9805615e8438f1d4869db56277ca69f7bbddd77386571fb = $this->env->getExtension("native_profiler");
        $__internal_3f868ead8468f457a9805615e8438f1d4869db56277ca69f7bbddd77386571fb->enter($__internal_3f868ead8468f457a9805615e8438f1d4869db56277ca69f7bbddd77386571fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:user:permission.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f868ead8468f457a9805615e8438f1d4869db56277ca69f7bbddd77386571fb->leave($__internal_3f868ead8468f457a9805615e8438f1d4869db56277ca69f7bbddd77386571fb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ed3a97aadaa0cb5a1083ece4c32812e0273f2560f0bb7684b1763cf69eb7cc6 = $this->env->getExtension("native_profiler");
        $__internal_7ed3a97aadaa0cb5a1083ece4c32812e0273f2560f0bb7684b1763cf69eb7cc6->enter($__internal_7ed3a97aadaa0cb5a1083ece4c32812e0273f2560f0bb7684b1763cf69eb7cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7ed3a97aadaa0cb5a1083ece4c32812e0273f2560f0bb7684b1763cf69eb7cc6->leave($__internal_7ed3a97aadaa0cb5a1083ece4c32812e0273f2560f0bb7684b1763cf69eb7cc6_prof);

    }

    // line 11
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a1b42f5a6d8d6c8cf3488d3870285573f6e7cc5af4fbd9e467ba5ea86f915739 = $this->env->getExtension("native_profiler");
        $__internal_a1b42f5a6d8d6c8cf3488d3870285573f6e7cc5af4fbd9e467ba5ea86f915739->enter($__internal_a1b42f5a6d8d6c8cf3488d3870285573f6e7cc5af4fbd9e467ba5ea86f915739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 12
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">
       ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_a1b42f5a6d8d6c8cf3488d3870285573f6e7cc5af4fbd9e467ba5ea86f915739->leave($__internal_a1b42f5a6d8d6c8cf3488d3870285573f6e7cc5af4fbd9e467ba5ea86f915739_prof);

    }

    // line 16
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_3c9c9161736599395566ad26b6f12b635816870dc0efd5cc2d8d8d14e8bf7fbe = $this->env->getExtension("native_profiler");
        $__internal_3c9c9161736599395566ad26b6f12b635816870dc0efd5cc2d8d8d14e8bf7fbe->enter($__internal_3c9c9161736599395566ad26b6f12b635816870dc0efd5cc2d8d8d14e8bf7fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 17
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_3c9c9161736599395566ad26b6f12b635816870dc0efd5cc2d8d8d14e8bf7fbe->leave($__internal_3c9c9161736599395566ad26b6f12b635816870dc0efd5cc2d8d8d14e8bf7fbe_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf0b0b7e3e01de47a338d4482b94094b5cc78926759332862f79c68eff1a69e8 = $this->env->getExtension("native_profiler");
        $__internal_bf0b0b7e3e01de47a338d4482b94094b5cc78926759332862f79c68eff1a69e8->enter($__internal_bf0b0b7e3e01de47a338d4482b94094b5cc78926759332862f79c68eff1a69e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <ul id=\"basicwizard-header\" class=\"stepy-header\">
        <li id=\"basicwizard-head-0\" class=\"stepy-active\">
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("user_permission", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">
                <div><i class=\"fa fa-refresh fa-spin\"></i></div>
                <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.edit.permission"), "html", null, true);
        echo "</span>
            </a>
        </li>
        <li id=\"basicwizard-head-1\">
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">
                <div><i class=\"fa fa-cogs\"></i></div>
                <span>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.edit.name"), "html", null, true);
        echo "</span>
            </a>
        </li>
    </ul>
    ";
        // line 34
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOUserBundle:user:permission.html.twig", 34)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "form_name" => $this->env->getExtension('translator')->trans("user.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("user.edit.submit"))));
        
        $__internal_bf0b0b7e3e01de47a338d4482b94094b5cc78926759332862f79c68eff1a69e8->leave($__internal_bf0b0b7e3e01de47a338d4482b94094b5cc78926759332862f79c68eff1a69e8_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a8c61d852c91f832c7dcfe9ea411709322c36aebbd0ff4a318aa2b68adbc087 = $this->env->getExtension("native_profiler");
        $__internal_6a8c61d852c91f832c7dcfe9ea411709322c36aebbd0ff4a318aa2b68adbc087->enter($__internal_6a8c61d852c91f832c7dcfe9ea411709322c36aebbd0ff4a318aa2b68adbc087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6a8c61d852c91f832c7dcfe9ea411709322c36aebbd0ff4a318aa2b68adbc087->leave($__internal_6a8c61d852c91f832c7dcfe9ea411709322c36aebbd0ff4a318aa2b68adbc087_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:user:permission.html.twig";
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
/*     <a href="{{ path('user_index') }}">*/
/*        {{ 'user.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'user.edit.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <ul id="basicwizard-header" class="stepy-header">*/
/*         <li id="basicwizard-head-0" class="stepy-active">*/
/*             <a href="{{ url('user_permission', { 'id': user.id}) }}">*/
/*                 <div><i class="fa fa-refresh fa-spin"></i></div>*/
/*                 <span>{{ 'user.edit.permission'|trans }}</span>*/
/*             </a>*/
/*         </li>*/
/*         <li id="basicwizard-head-1">*/
/*             <a href="{{ url('user_edit', { 'id': user.id}) }}">*/
/*                 <div><i class="fa fa-cogs"></i></div>*/
/*                 <span>{{ 'user.edit.name'|trans }}</span>*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': form ,'form_name' : 'user.edit.name'|trans ,'submit_name': 'user.edit.submit'|trans } %}*/
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
