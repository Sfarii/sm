<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_35c76ccd13f1b75c024e574c515343e631cb38f035dfb5763fbdc989fae81ae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d903d3fbba66959b9f8d5e2fb2fa68df107876f81ac67c2d3971daece12eba5e = $this->env->getExtension("native_profiler");
        $__internal_d903d3fbba66959b9f8d5e2fb2fa68df107876f81ac67c2d3971daece12eba5e->enter($__internal_d903d3fbba66959b9f8d5e2fb2fa68df107876f81ac67c2d3971daece12eba5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"coming-soon\">
<head>
    <meta charset=\"utf-8\">
    <title>Login Form</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-touch-fullscreen\" content=\"yes\">
    <meta name=\"author\" content=\"Rami\">

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    
    </head>

    <body>
        <div>
            ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 30
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            
            ";
        }
        // line 36
        echo "        </div>

        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 39
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 40
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
        
            ";
        // line 47
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 49
        echo "         
        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "    </body>
</html>";
        
        $__internal_d903d3fbba66959b9f8d5e2fb2fa68df107876f81ac67c2d3971daece12eba5e->leave($__internal_d903d3fbba66959b9f8d5e2fb2fa68df107876f81ac67c2d3971daece12eba5e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7913fa3bab645743d4c6b9cae4a0f43d240a1b73bd20407ea62b9e1921e9dd30 = $this->env->getExtension("native_profiler");
        $__internal_7913fa3bab645743d4c6b9cae4a0f43d240a1b73bd20407ea62b9e1921e9dd30->enter($__internal_7913fa3bab645743d4c6b9cae4a0f43d240a1b73bd20407ea62b9e1921e9dd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "347e025_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_347e025_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/347e025__all_1.css");
            // line 20
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "347e025_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_347e025_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/347e025_font-awesome.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "347e025_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_347e025_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/347e025_themify-icons_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "347e025_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_347e025_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/347e025_styles_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "347e025_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_347e025_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/347e025_animate_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "347e025"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_347e025") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/347e025.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_7913fa3bab645743d4c6b9cae4a0f43d240a1b73bd20407ea62b9e1921e9dd30->leave($__internal_7913fa3bab645743d4c6b9cae4a0f43d240a1b73bd20407ea62b9e1921e9dd30_prof);

    }

    // line 47
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bbef8dc6beb0ceb8c43d84df3b9419dc2faa206c768c97e916db5b2af82ec32 = $this->env->getExtension("native_profiler");
        $__internal_1bbef8dc6beb0ceb8c43d84df3b9419dc2faa206c768c97e916db5b2af82ec32->enter($__internal_1bbef8dc6beb0ceb8c43d84df3b9419dc2faa206c768c97e916db5b2af82ec32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 48
        echo "            ";
        
        $__internal_1bbef8dc6beb0ceb8c43d84df3b9419dc2faa206c768c97e916db5b2af82ec32->leave($__internal_1bbef8dc6beb0ceb8c43d84df3b9419dc2faa206c768c97e916db5b2af82ec32_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f998f09f7a6e2777827c12c653cf73e5bc042d1293f83185b93015f46631a2a2 = $this->env->getExtension("native_profiler");
        $__internal_f998f09f7a6e2777827c12c653cf73e5bc042d1293f83185b93015f46631a2a2->enter($__internal_f998f09f7a6e2777827c12c653cf73e5bc042d1293f83185b93015f46631a2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0b27e19_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0b27e19_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/0b27e19_jquery-1.10.2.min_1.js");
            // line 55
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "0b27e19_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0b27e19_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/0b27e19_bootstrap.min_2.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "0b27e19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0b27e19") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/0b27e19.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 57
        echo "
        ";
        
        $__internal_f998f09f7a6e2777827c12c653cf73e5bc042d1293f83185b93015f46631a2a2->leave($__internal_f998f09f7a6e2777827c12c653cf73e5bc042d1293f83185b93015f46631a2a2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 57,  200 => 55,  195 => 51,  189 => 50,  182 => 48,  176 => 47,  166 => 22,  128 => 20,  123 => 13,  117 => 12,  109 => 59,  107 => 50,  104 => 49,  102 => 47,  98 => 45,  92 => 44,  83 => 41,  78 => 40,  73 => 39,  69 => 38,  65 => 36,  58 => 32,  54 => 31,  49 => 30,  47 => 29,  40 => 24,  38 => 12,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en" class="coming-soon">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>Login Form</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">*/
/*     <meta name="apple-mobile-web-app-capable" content="yes">*/
/*     <meta name="apple-touch-fullscreen" content="yes">*/
/*     <meta name="author" content="Rami">*/
/* */
/*     {% block stylesheets %}*/
/*         {% stylesheets */
/*             'bundles/isetsomagazine/plugins/iCheck/skins/minimal/_all.css'*/
/*             'bundles/isetsomagazine/fonts/font-awesome/css/font-awesome.min.css'*/
/*             'bundles/isetsomagazine/fonts/themify-icons/themify-icons.css'*/
/*             'bundles/isetsomagazine/css/styles.css'*/
/*             'bundles/isetsomagazine/css/animate.css'*/
/*             filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     {% endblock %}*/
/*     */
/*     </head>*/
/* */
/*     <body>*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             */
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         */
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*          */
/*         {% block javascripts %}*/
/*             {% javascripts filter='?yui_js'*/
/*                 'bundles/isetsomagazine/js/jquery-1.10.2.min.js'*/
/*                 'bundles/isetsomagazine/js/bootstrap.min.js'*/
/*             %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
