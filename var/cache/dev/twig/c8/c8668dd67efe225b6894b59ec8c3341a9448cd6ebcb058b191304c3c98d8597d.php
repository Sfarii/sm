<?php

/* ISETSOUserBundle:user:edit.html.twig */
class __TwigTemplate_73241c4e1ad0d75d50170cbb8e1712ab6c097e7ac04fd81520a61315162aa4ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOUserBundle:user:edit.html.twig", 1);
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
        $__internal_c427b52db5977d0185b9697580468abd4038a264996944b0ade8cfdb32daebdd = $this->env->getExtension("native_profiler");
        $__internal_c427b52db5977d0185b9697580468abd4038a264996944b0ade8cfdb32daebdd->enter($__internal_c427b52db5977d0185b9697580468abd4038a264996944b0ade8cfdb32daebdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c427b52db5977d0185b9697580468abd4038a264996944b0ade8cfdb32daebdd->leave($__internal_c427b52db5977d0185b9697580468abd4038a264996944b0ade8cfdb32daebdd_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_89c315ed58a962c2eb15356c6ea874cb7af1b3359b69ac1015cf8a4385df9f61 = $this->env->getExtension("native_profiler");
        $__internal_89c315ed58a962c2eb15356c6ea874cb7af1b3359b69ac1015cf8a4385df9f61->enter($__internal_89c315ed58a962c2eb15356c6ea874cb7af1b3359b69ac1015cf8a4385df9f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_89c315ed58a962c2eb15356c6ea874cb7af1b3359b69ac1015cf8a4385df9f61->leave($__internal_89c315ed58a962c2eb15356c6ea874cb7af1b3359b69ac1015cf8a4385df9f61_prof);

    }

    // line 11
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_77c7330d75cb3cc7afad1946ef2eb13526af0feeb242dfcba9d4645d975c18cd = $this->env->getExtension("native_profiler");
        $__internal_77c7330d75cb3cc7afad1946ef2eb13526af0feeb242dfcba9d4645d975c18cd->enter($__internal_77c7330d75cb3cc7afad1946ef2eb13526af0feeb242dfcba9d4645d975c18cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_77c7330d75cb3cc7afad1946ef2eb13526af0feeb242dfcba9d4645d975c18cd->leave($__internal_77c7330d75cb3cc7afad1946ef2eb13526af0feeb242dfcba9d4645d975c18cd_prof);

    }

    // line 16
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_8a0a5d7e986daf68d6d439355c218faa9d8ecf1927b6493707ac4f610749bbf0 = $this->env->getExtension("native_profiler");
        $__internal_8a0a5d7e986daf68d6d439355c218faa9d8ecf1927b6493707ac4f610749bbf0->enter($__internal_8a0a5d7e986daf68d6d439355c218faa9d8ecf1927b6493707ac4f610749bbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 17
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_8a0a5d7e986daf68d6d439355c218faa9d8ecf1927b6493707ac4f610749bbf0->leave($__internal_8a0a5d7e986daf68d6d439355c218faa9d8ecf1927b6493707ac4f610749bbf0_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ce4bf02f7218ca5a5635e6cc081f59d72d0784b7d09fcfc66f99f97727a0e4e = $this->env->getExtension("native_profiler");
        $__internal_8ce4bf02f7218ca5a5635e6cc081f59d72d0784b7d09fcfc66f99f97727a0e4e->enter($__internal_8ce4bf02f7218ca5a5635e6cc081f59d72d0784b7d09fcfc66f99f97727a0e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <ul id=\"basicwizard-header\" class=\"stepy-header\">
        <li id=\"basicwizard-head-0\">
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("user_permission", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">
                <div><i class=\"fa fa-cogs\"></i></div>
                <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.edit.permission"), "html", null, true);
        echo "</span>
            </a>
        </li>
        <li id=\"basicwizard-head-1\" class=\"stepy-active\">
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">
                <div><i class=\"fa fa-refresh fa-spin\"></i></div>
                <span>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.edit.name"), "html", null, true);
        echo "</span>
            </a>
        </li>
    </ul>
    ";
        // line 34
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOUserBundle:user:edit.html.twig", 34)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("user.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("user.edit.submit"))));
        
        $__internal_8ce4bf02f7218ca5a5635e6cc081f59d72d0784b7d09fcfc66f99f97727a0e4e->leave($__internal_8ce4bf02f7218ca5a5635e6cc081f59d72d0784b7d09fcfc66f99f97727a0e4e_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc1ef2bfff023547d860c8b6a07eebb6b5c6dfec0f9e16aaa7c86ceaa5333c50 = $this->env->getExtension("native_profiler");
        $__internal_fc1ef2bfff023547d860c8b6a07eebb6b5c6dfec0f9e16aaa7c86ceaa5333c50->enter($__internal_fc1ef2bfff023547d860c8b6a07eebb6b5c6dfec0f9e16aaa7c86ceaa5333c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_fc1ef2bfff023547d860c8b6a07eebb6b5c6dfec0f9e16aaa7c86ceaa5333c50->leave($__internal_fc1ef2bfff023547d860c8b6a07eebb6b5c6dfec0f9e16aaa7c86ceaa5333c50_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:user:edit.html.twig";
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
/*         <li id="basicwizard-head-0">*/
/*             <a href="{{ url('user_permission', { 'id': user.id}) }}">*/
/*                 <div><i class="fa fa-cogs"></i></div>*/
/*                 <span>{{ 'user.edit.permission'|trans }}</span>*/
/*             </a>*/
/*         </li>*/
/*         <li id="basicwizard-head-1" class="stepy-active">*/
/*             <a href="{{ url('user_edit', { 'id': user.id}) }}">*/
/*                 <div><i class="fa fa-refresh fa-spin"></i></div>*/
/*                 <span>{{ 'user.edit.name'|trans }}</span>*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'user.edit.name'|trans ,'submit_name': 'user.edit.submit'|trans } %}*/
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
