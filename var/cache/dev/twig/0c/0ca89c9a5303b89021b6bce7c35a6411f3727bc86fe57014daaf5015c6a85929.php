<?php

/* ISETSOUserBundle:Security:login.html.twig */
class __TwigTemplate_54c7587c74ad2536fe03cda6eba53c0be3114e84eef0f9dbd25ddb6ad9b2e2f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "ISETSOUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df568ca9cc7ed349584a99efc57c5f214d514414d40f352852e49ac5c2502209 = $this->env->getExtension("native_profiler");
        $__internal_df568ca9cc7ed349584a99efc57c5f214d514414d40f352852e49ac5c2502209->enter($__internal_df568ca9cc7ed349584a99efc57c5f214d514414d40f352852e49ac5c2502209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df568ca9cc7ed349584a99efc57c5f214d514414d40f352852e49ac5c2502209->leave($__internal_df568ca9cc7ed349584a99efc57c5f214d514414d40f352852e49ac5c2502209_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17494b0083058057146f225432107e9b368824c5cb67f740e7d7afa253057a6a = $this->env->getExtension("native_profiler");
        $__internal_17494b0083058057146f225432107e9b368824c5cb67f740e7d7afa253057a6a->enter($__internal_17494b0083058057146f225432107e9b368824c5cb67f740e7d7afa253057a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ea91054_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ea91054_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/ea91054_blue_1.css");
            // line 7
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "ea91054"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ea91054") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/ea91054.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "    
";
        
        $__internal_17494b0083058057146f225432107e9b368824c5cb67f740e7d7afa253057a6a->leave($__internal_17494b0083058057146f225432107e9b368824c5cb67f740e7d7afa253057a6a_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d842304d71e14d7217ffdf6dd610b7920073f391599ce4101c9ffb1645d922cc = $this->env->getExtension("native_profiler");
        $__internal_d842304d71e14d7217ffdf6dd610b7920073f391599ce4101c9ffb1645d922cc->enter($__internal_d842304d71e14d7217ffdf6dd610b7920073f391599ce4101c9ffb1645d922cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "\t<div class=\"container ";
        echo (((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) ? ("") : ("animated bounce"));
        echo "\" id=\"login-form\" style=\"padding-top: 10%;\">
        <a href=\"index.html\" class=\"login-logo col-md-offset-5\">
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/isetsomagazine/img/logo-big.png"), "html", null, true);
        echo "\"></a>
        
        <div class=\"row\" style=\"margin-top: 25px;\">
        \t";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 18
            echo "        \t\t<div class=\"alert alert-dismissable alert-danger animated zoomInDown\">
\t\t\t\t\t\t<i class=\"ti ti-close\"></i>&nbsp; <strong>Oh snap!</strong> ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
\t\t\t\t\t</div>
\t\t\t";
        }
        // line 23
        echo "            <div class=\"col-md-6 col-md-offset-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h2>Login</h2>
                    </div>
                    <form class=\"form-horizontal\" id=\"validate-form\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <div class=\"panel-body\">
                        
                        
    \t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                            <div class=\"form-group mb-md\">
                                <div class=\"col-xs-12\">
                                    <div class=\"input-group\">                           
                                        <span class=\"input-group-addon\">
                                            <i class=\"ti ti-user\"></i>
                                        </span>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group mb-md\">
                                <div class=\"col-xs-12\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\">
                                            <i class=\"ti ti-key\"></i>
                                        </span>
                                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group mb-md\">
                                <div class=\"col-xs-12\">
                                    <a href=\"\" class=\"pull-left\">Mot de passe oublié?</a>
                                    <div class=\" pull-right p-n\">
                                        <label class=\"checkbox-inline icheck\" for=\"remember_me\">
                                            <input  type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" />
                                        </label>
                                         ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"clearfix\">
                            <input class=\"btn btn-default pull-left\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </div>
                    </div>
            \t</form>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_d842304d71e14d7217ffdf6dd610b7920073f391599ce4101c9ffb1645d922cc->leave($__internal_d842304d71e14d7217ffdf6dd610b7920073f391599ce4101c9ffb1645d922cc_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_825d3e330fc9177d31be29540e7c056c867f9a9a4461010aff09237c246d4b33 = $this->env->getExtension("native_profiler");
        $__internal_825d3e330fc9177d31be29540e7c056c867f9a9a4461010aff09237c246d4b33->enter($__internal_825d3e330fc9177d31be29540e7c056c867f9a9a4461010aff09237c246d4b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 82
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9dd21eb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9dd21eb_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9dd21eb_jquery.multi-select.min_1.js");
            // line 86
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
        // line 88
        echo "    <script type=\"text/javascript\">
    \$('.icheck').iCheck({
    checkboxClass: 'icheckbox_minimal-blue'
  });
    </script>
";
        
        $__internal_825d3e330fc9177d31be29540e7c056c867f9a9a4461010aff09237c246d4b33->leave($__internal_825d3e330fc9177d31be29540e7c056c867f9a9a4461010aff09237c246d4b33_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 88,  201 => 86,  197 => 82,  192 => 81,  186 => 80,  169 => 70,  158 => 62,  143 => 50,  127 => 39,  117 => 32,  110 => 28,  103 => 23,  96 => 19,  93 => 18,  91 => 17,  85 => 14,  79 => 12,  73 => 11,  65 => 9,  51 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets */
/*         'bundles/isetsomagazine/plugins/iCheck/skins/minimal/blue.css'*/
/*         filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     */
/* {% endblock %}*/
/* {% block fos_user_content %}*/
/* 	<div class="container {{ error ?  "" : "animated bounce"}}" id="login-form" style="padding-top: 10%;">*/
/*         <a href="index.html" class="login-logo col-md-offset-5">*/
/*             <img src="{{ asset('bundles/isetsomagazine/img/logo-big.png') }}"></a>*/
/*         */
/*         <div class="row" style="margin-top: 25px;">*/
/*         	{% if error %}*/
/*         		<div class="alert alert-dismissable alert-danger animated zoomInDown">*/
/* 						<i class="ti ti-close"></i>&nbsp; <strong>Oh snap!</strong> {{ error|trans({}, 'FOSUserBundle') }}*/
/* 						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/* 					</div>*/
/* 			{% endif %}*/
/*             <div class="col-md-6 col-md-offset-3">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h2>Login</h2>*/
/*                     </div>*/
/*                     <form class="form-horizontal" id="validate-form" action="{{ path("fos_user_security_check") }}" method="post">*/
/*                     <div class="panel-body">*/
/*                         */
/*                         */
/*     						<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                             <div class="form-group mb-md">*/
/*                                 <div class="col-xs-12">*/
/*                                     <div class="input-group">                           */
/*                                         <span class="input-group-addon">*/
/*                                             <i class="ti ti-user"></i>*/
/*                                         </span>*/
/*                                         <input type="text" class="form-control" placeholder="{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}" id="username" name="_username" value="{{ last_username }}">*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group mb-md">*/
/*                                 <div class="col-xs-12">*/
/*                                     <div class="input-group">*/
/*                                         <span class="input-group-addon">*/
/*                                             <i class="ti ti-key"></i>*/
/*                                         </span>*/
/*                                         <input type="password" class="form-control" id="password" name="_password" placeholder="{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}">*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group mb-md">*/
/*                                 <div class="col-xs-12">*/
/*                                     <a href="" class="pull-left">Mot de passe oublié?</a>*/
/*                                     <div class=" pull-right p-n">*/
/*                                         <label class="checkbox-inline icheck" for="remember_me">*/
/*                                             <input  type="checkbox" id="remember_me" name="_remember_me" />*/
/*                                         </label>*/
/*                                          {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         */
/*                     </div>*/
/*                     <div class="panel-footer">*/
/*                         <div class="clearfix">*/
/*                             <input class="btn btn-default pull-left" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                         </div>*/
/*                     </div>*/
/*             	</form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock fos_user_content %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/form-multiselect/js/jquery.multi-select.min.js'*/
/*         'bundles/isetsomagazine/plugins/iCheck/icheck.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     <script type="text/javascript">*/
/*     $('.icheck').iCheck({*/
/*     checkboxClass: 'icheckbox_minimal-blue'*/
/*   });*/
/*     </script>*/
/* {% endblock %}*/
/* */
