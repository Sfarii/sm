<?php

/* base.html.twig */
class __TwigTemplate_c69d4f3cf4c52ce3455d18ca58757a73d2acdbeb2d5d7e9ca12893b4673ef05f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascriptTop' => array($this, 'block_javascriptTop'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'breadcrumbActive' => array($this, 'block_breadcrumbActive'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'audio' => array($this, 'block_audio'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb39f2b143c9a40d5a676bb7b2953a84def22ab035f9243a62e4d9dfc4dc548d = $this->env->getExtension("native_profiler");
        $__internal_eb39f2b143c9a40d5a676bb7b2953a84def22ab035f9243a62e4d9dfc4dc548d->enter($__internal_eb39f2b143c9a40d5a676bb7b2953a84def22ab035f9243a62e4d9dfc4dc548d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_"), 0, array(), "array"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-touch-fullscreen\" content=\"yes\">
        <meta name=\"description\" content=\"PFE\">
        <meta name=\"author\" content=\"BelhassenRami\">

        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('javascriptTop', $context, $blocks);
        // line 38
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    </head>
    <body>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/isetsomagazine/myjs/Progressbar.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 91
        echo "        <div id=\"wrapper\">
            <div id=\"layout-static\">
                ";
        // line 93
        $this->displayBlock('menu', $context, $blocks);
        // line 96
        echo "                <div class=\"static-content-wrapper\">
                    <div class=\"static-content\">
                        <div class=\"page-content\">
                            <ol class=\"breadcrumb animated zoomIn\">
                                <li class=\"text text-capitalize\"> <i class=\"ti ti-home\"></i>
                                ";
        // line 101
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 104
        echo "                                </li>
                                <li class=\"text text-capitalize\"><i class=\"ti ti-tag\"></i> <a class=\"active\">
                                    
                                    ";
        // line 107
        $this->displayBlock('breadcrumbActive', $context, $blocks);
        // line 110
        echo "                                </a></li>
                            </ol>
                            <div class=\"container-fluid animated fadeIn\">
                                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "msg"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 114
            echo "                                    <div class=\"alert alert-success animated zoomInDown\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                          <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                        <samp class=\"text-capitalize\">
                                            <i class=\"fa fa-info\" ></i>
                                            ";
            // line 120
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                                        </samp>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "msgError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 125
            echo "                                    <div class=\"alert alert-danger animated zoomInDown\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                          <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                        <samp class=\"text-capitalize\">
                                            <i class=\"fa fa-info\" ></i>
                                            ";
            // line 131
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                                        </samp>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                                    ";
        $this->displayBlock('body', $context, $blocks);
        // line 137
        echo "                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                        ";
        // line 139
        $this->displayBlock('footer', $context, $blocks);
        // line 149
        echo "                    </div>

                </div>
            </div>
        </div>
        <!-- MESSAGE BOX-->
        <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"mb-signout\">
            <div class=\"mb-container\">
                <div class=\"mb-middle\">
                    <div class=\"mb-title\"><span class=\"fa fa-sign-out\"></span> ";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo " ?</div>
                    <div class=\"mb-content\">
                        <p>";
        // line 160
        echo $this->env->getExtension('translator')->getTranslator()->trans("logout.message", array(), "messages");
        echo "</p>
                        <p>";
        // line 161
        echo $this->env->getExtension('translator')->getTranslator()->trans("logout.info", array(), "messages");
        echo "</p>
                    </div>
                    <div class=\"mb-footer\">
                        <div class=\"pull-right\">
                            <a class=\"btn btn-success btn-lg\" href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                               ";
        // line 166
        echo $this->env->getExtension('translator')->getTranslator()->trans("messageBox.yes", array(), "messages");
        // line 167
        echo "                            </a>
                            <button class=\"btn btn-default btn-lg mb-control-close\">";
        // line 168
        echo $this->env->getExtension('translator')->getTranslator()->trans("messageBox.no", array(), "messages");
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->
        ";
        // line 175
        $this->displayBlock('audio', $context, $blocks);
        // line 183
        echo "
        ";
        // line 184
        $this->displayBlock('javascripts', $context, $blocks);
        // line 210
        echo "    </body>
</html>
";
        
        $__internal_eb39f2b143c9a40d5a676bb7b2953a84def22ab035f9243a62e4d9dfc4dc548d->leave($__internal_eb39f2b143c9a40d5a676bb7b2953a84def22ab035f9243a62e4d9dfc4dc548d_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_f42197928cc5f2e6a2fe9066b3b3ffddcc75b25af33ebbc956ce0b8bd9de0b5e = $this->env->getExtension("native_profiler");
        $__internal_f42197928cc5f2e6a2fe9066b3b3ffddcc75b25af33ebbc956ce0b8bd9de0b5e->enter($__internal_f42197928cc5f2e6a2fe9066b3b3ffddcc75b25af33ebbc956ce0b8bd9de0b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("project.name", array(), "messages");
        echo " ";
        
        $__internal_f42197928cc5f2e6a2fe9066b3b3ffddcc75b25af33ebbc956ce0b8bd9de0b5e->leave($__internal_f42197928cc5f2e6a2fe9066b3b3ffddcc75b25af33ebbc956ce0b8bd9de0b5e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ad35f17045d95b47c66ea0c6ada4f44fa9250ab8d59eb322d3cacb53f0ded92 = $this->env->getExtension("native_profiler");
        $__internal_0ad35f17045d95b47c66ea0c6ada4f44fa9250ab8d59eb322d3cacb53f0ded92->enter($__internal_0ad35f17045d95b47c66ea0c6ada4f44fa9250ab8d59eb322d3cacb53f0ded92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "91a2cbd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_91a2cbd_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/91a2cbd_font-awesome.min_1.css");
            // line 25
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "91a2cbd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_91a2cbd_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/91a2cbd_themify-icons_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "91a2cbd_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_91a2cbd_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/91a2cbd_styles_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "91a2cbd_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_91a2cbd_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/91a2cbd_animate_4.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "91a2cbd_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_91a2cbd_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/91a2cbd_message-box_5.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "91a2cbd_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_91a2cbd_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/91a2cbd_message_6.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "91a2cbd_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_91a2cbd_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/91a2cbd_pnotify_7.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "91a2cbd_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_91a2cbd_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/91a2cbd_skylo_8.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "91a2cbd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_91a2cbd") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/91a2cbd.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "
        ";
        
        $__internal_0ad35f17045d95b47c66ea0c6ada4f44fa9250ab8d59eb322d3cacb53f0ded92->leave($__internal_0ad35f17045d95b47c66ea0c6ada4f44fa9250ab8d59eb322d3cacb53f0ded92_prof);

    }

    // line 29
    public function block_javascriptTop($context, array $blocks = array())
    {
        $__internal_71b60499ace9f971ba534e17fead90db2e065a54346bee0d6a898255ad36ed7f = $this->env->getExtension("native_profiler");
        $__internal_71b60499ace9f971ba534e17fead90db2e065a54346bee0d6a898255ad36ed7f->enter($__internal_71b60499ace9f971ba534e17fead90db2e065a54346bee0d6a898255ad36ed7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptTop"));

        // line 30
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3f46471_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f46471_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/3f46471_jquery-1.10.2.min_1.js");
            // line 35
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "3f46471_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f46471_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/3f46471_skylo_2.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "3f46471_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f46471_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/3f46471_jquery.nicescroll_3.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "3f46471"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f46471") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/3f46471.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 37
        echo "        ";
        
        $__internal_71b60499ace9f971ba534e17fead90db2e065a54346bee0d6a898255ad36ed7f->leave($__internal_71b60499ace9f971ba534e17fead90db2e065a54346bee0d6a898255ad36ed7f_prof);

    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        $__internal_1e9c3950f13e652bb77cde6f3534f83a1cf9a679c8a3eef045cf3b83779ebcbd = $this->env->getExtension("native_profiler");
        $__internal_1e9c3950f13e652bb77cde6f3534f83a1cf9a679c8a3eef045cf3b83779ebcbd->enter($__internal_1e9c3950f13e652bb77cde6f3534f83a1cf9a679c8a3eef045cf3b83779ebcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 45
        echo "            <div id=\"topnav\" class=\"navbar navbar-default navbar-fixed-top  animated fadeInDown\" role=\"banner\">
                <div class=\"logo-area\">
                    <span id=\"trigger-sidebar\" class=\"toolbar-trigger toolbar-icon-bg\">
                        <a data-toggle=\"tooltips\" data-placement=\"right\" title=\"Toggle Sidebar\">
                            <span class=\"icon-bg\">
                                <i class=\"ti ti-menu\"></i>
                            </span>
                        </a>
                    </span>
                    <a class=\"navbar-brand\"></a>

                </div><!-- logo-area -->
                <ul class=\"nav navbar-nav toolbar pull-right\">
                        <li class=\"dropdown toolbar-icon-bg hidden-xs\">
                            <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("fos_message_inbox");
        echo "\"><span class=\"icon-bg\"><i class=\"ti ti-email\"></i></span><span id=\"nb_msg\"
                                    class=\"badge badge-deeporange\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('fos_message')->getNbUnread(), "html", null, true);
        echo "</span></a>
                            
                        </li>
                        <li class=\"dropdown toolbar-icon-bg\">
                            <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getUrl("notification");
        echo "\"><span class=\"icon-bg\"><i class=\"ti ti-bell\"></i></span><span id=\"nb_notification\" class=\"badge badge-deeporange\"></span></a>
                        </li>
                        <li class=\"dropdown toolbar-icon-bg\">
                            <a href=\"#\" class=\"dropdown-toggle username\" data-toggle=\"dropdown\">

                                <span class=\"icon-bg\"><i class=\"ti ti-user\"></i> </span>

                            </a>
                            <ul class=\"dropdown-menu userinfo arrow\" style=\"margin-top: 5px;\">
                                <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\"><i class=\"ti ti-user\"></i><span>
                                    ";
        // line 74
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.user.profile", array(), "messages");
        echo "</span></a></li>
                                <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\"><i class=\"ti ti-settings\"></i><span></span>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.user.setting", array(), "messages");
        echo "</a></li>
                                <li class=\"divider\"></li>
                                ";
        // line 77
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 78
            echo "
                                    <li><a href=\"#\"  class=\"mb-control\" data-box=\"#mb-signout\">
                                       <i class=\"ti ti-shift-right\"></i> ";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                    </a></li>

                                ";
        }
        // line 84
        echo "
                            </ul>
                        </li>

                </ul>
            </div>
        ";
        
        $__internal_1e9c3950f13e652bb77cde6f3534f83a1cf9a679c8a3eef045cf3b83779ebcbd->leave($__internal_1e9c3950f13e652bb77cde6f3534f83a1cf9a679c8a3eef045cf3b83779ebcbd_prof);

    }

    // line 93
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0d08e1e848c1206e00e0733cb661994292a90b0fbb9f591824854b6b1d8fe86 = $this->env->getExtension("native_profiler");
        $__internal_e0d08e1e848c1206e00e0733cb661994292a90b0fbb9f591824854b6b1d8fe86->enter($__internal_e0d08e1e848c1206e00e0733cb661994292a90b0fbb9f591824854b6b1d8fe86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 94
        echo "                    ";
        $this->loadTemplate("menu.html.twig", "base.html.twig", 94)->display($context);
        // line 95
        echo "                ";
        
        $__internal_e0d08e1e848c1206e00e0733cb661994292a90b0fbb9f591824854b6b1d8fe86->leave($__internal_e0d08e1e848c1206e00e0733cb661994292a90b0fbb9f591824854b6b1d8fe86_prof);

    }

    // line 101
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_16b9ed2f78a9ef0414fef1ca4992e718424cbc9e5523bab64bee64ff87ecbfe8 = $this->env->getExtension("native_profiler");
        $__internal_16b9ed2f78a9ef0414fef1ca4992e718424cbc9e5523bab64bee64ff87ecbfe8->enter($__internal_16b9ed2f78a9ef0414fef1ca4992e718424cbc9e5523bab64bee64ff87ecbfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 102
        echo "                                    <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("dashboard_index");
        echo "\"><span> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dashbord", array(), "messages");
        echo "</span></a>
                                ";
        
        $__internal_16b9ed2f78a9ef0414fef1ca4992e718424cbc9e5523bab64bee64ff87ecbfe8->leave($__internal_16b9ed2f78a9ef0414fef1ca4992e718424cbc9e5523bab64bee64ff87ecbfe8_prof);

    }

    // line 107
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_ca1a6e79df29a3edc55b0cc92cc3d95f455a9d7c2a013828832dbafcdb64d5f6 = $this->env->getExtension("native_profiler");
        $__internal_ca1a6e79df29a3edc55b0cc92cc3d95f455a9d7c2a013828832dbafcdb64d5f6->enter($__internal_ca1a6e79df29a3edc55b0cc92cc3d95f455a9d7c2a013828832dbafcdb64d5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 108
        echo "
                                    ";
        
        $__internal_ca1a6e79df29a3edc55b0cc92cc3d95f455a9d7c2a013828832dbafcdb64d5f6->leave($__internal_ca1a6e79df29a3edc55b0cc92cc3d95f455a9d7c2a013828832dbafcdb64d5f6_prof);

    }

    // line 135
    public function block_body($context, array $blocks = array())
    {
        $__internal_e57dec6ef2ac624e654e97aae3d3f48e228d2508977198b48c4f3b8c9187004d = $this->env->getExtension("native_profiler");
        $__internal_e57dec6ef2ac624e654e97aae3d3f48e228d2508977198b48c4f3b8c9187004d->enter($__internal_e57dec6ef2ac624e654e97aae3d3f48e228d2508977198b48c4f3b8c9187004d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 136
        echo "                                    ";
        
        $__internal_e57dec6ef2ac624e654e97aae3d3f48e228d2508977198b48c4f3b8c9187004d->leave($__internal_e57dec6ef2ac624e654e97aae3d3f48e228d2508977198b48c4f3b8c9187004d_prof);

    }

    // line 139
    public function block_footer($context, array $blocks = array())
    {
        $__internal_022dd5db791b8203f368f7f32329897deb519217c41e32bd38319818b6614b1a = $this->env->getExtension("native_profiler");
        $__internal_022dd5db791b8203f368f7f32329897deb519217c41e32bd38319818b6614b1a->enter($__internal_022dd5db791b8203f368f7f32329897deb519217c41e32bd38319818b6614b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 140
        echo "                        <footer role=\"contentinfo\">
                            <div class=\"clearfix\">
                                <ul class=\"list-unstyled list-inline pull-left\">
                                    <li><h6 style=\"margin: 0;\">© 2016 Gestion de Magasin</h6></li>
                                </ul>
                                <button class=\"pull-right btn btn-link btn-xs hidden-print\" id=\"back-to-top\"><i class=\"ti ti-arrow-up\"></i></button>
                            </div>
                        </footer>
                        ";
        
        $__internal_022dd5db791b8203f368f7f32329897deb519217c41e32bd38319818b6614b1a->leave($__internal_022dd5db791b8203f368f7f32329897deb519217c41e32bd38319818b6614b1a_prof);

    }

    // line 175
    public function block_audio($context, array $blocks = array())
    {
        $__internal_d1f8f0ffa1308b3dd0f241678fb689f8b52eb206d4bb7b8981be0b8582c0bab3 = $this->env->getExtension("native_profiler");
        $__internal_d1f8f0ffa1308b3dd0f241678fb689f8b52eb206d4bb7b8981be0b8582c0bab3->enter($__internal_d1f8f0ffa1308b3dd0f241678fb689f8b52eb206d4bb7b8981be0b8582c0bab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "audio"));

        // line 176
        echo "            <audio id=\"audio-alert\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/isetsomagazine/audio/alert.mp3"), "html", null, true);
        echo "\" preload=\"auto\">
            </audio>
            <audio id=\"audio-fail\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/isetsomagazine/audio/fail.mp3"), "html", null, true);
        echo "\" preload=\"auto\">
            </audio>
            <audio id=\"audio-newMessage\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/isetsomagazine/audio/newMessage.wav"), "html", null, true);
        echo "\" preload=\"auto\">
            </audio>
        ";
        
        $__internal_d1f8f0ffa1308b3dd0f241678fb689f8b52eb206d4bb7b8981be0b8582c0bab3->leave($__internal_d1f8f0ffa1308b3dd0f241678fb689f8b52eb206d4bb7b8981be0b8582c0bab3_prof);

    }

    // line 184
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0866adb2162304129efa995101c7b2ec3a36186ce3666dc0d31d9f695b180af4 = $this->env->getExtension("native_profiler");
        $__internal_0866adb2162304129efa995101c7b2ec3a36186ce3666dc0d31d9f695b180af4->enter($__internal_0866adb2162304129efa995101c7b2ec3a36186ce3666dc0d31d9f695b180af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 185
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "41a1404_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41a1404_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/41a1404_jqueryui-1.10.3.min_1.js");
            // line 200
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "41a1404_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41a1404_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/41a1404_bootstrap.min_2.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "41a1404_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41a1404_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/41a1404_enquire.min_3.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "41a1404_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41a1404_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/41a1404_wijets_4.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "41a1404_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41a1404_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/41a1404_prettify_5.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "41a1404_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41a1404_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/41a1404_jquery.nanoscroller.min_6.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "41a1404_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41a1404_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/41a1404_message-box_7.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "41a1404_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41a1404_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/41a1404_application_8.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "41a1404_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41a1404_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/41a1404_router_9.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "41a1404_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41a1404_9") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/41a1404_pnotify.min_10.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "41a1404_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41a1404_10") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/41a1404_translator.min_11.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "41a1404"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41a1404") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/41a1404.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 202
        echo "            <script src=\"";
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
            <script src=\"";
        // line 203
        echo $this->env->getExtension('routing')->getUrl("bazinga_jstranslation_js");
        echo "\"></script>
            <script type=\"text/javascript\">
                \$.skylo('end');
            </script>
            <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/isetsomagazine/myjs/base.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_0866adb2162304129efa995101c7b2ec3a36186ce3666dc0d31d9f695b180af4->leave($__internal_0866adb2162304129efa995101c7b2ec3a36186ce3666dc0d31d9f695b180af4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  642 => 207,  635 => 203,  630 => 202,  556 => 200,  551 => 185,  545 => 184,  535 => 180,  530 => 178,  524 => 176,  518 => 175,  503 => 140,  497 => 139,  490 => 136,  484 => 135,  476 => 108,  470 => 107,  458 => 102,  452 => 101,  445 => 95,  442 => 94,  436 => 93,  423 => 84,  416 => 80,  412 => 78,  410 => 77,  403 => 75,  399 => 74,  395 => 73,  383 => 64,  376 => 60,  372 => 59,  356 => 45,  350 => 44,  343 => 37,  317 => 35,  312 => 30,  306 => 29,  298 => 27,  242 => 25,  237 => 15,  231 => 14,  218 => 12,  209 => 210,  207 => 184,  204 => 183,  202 => 175,  192 => 168,  189 => 167,  187 => 166,  183 => 165,  176 => 161,  172 => 160,  167 => 158,  156 => 149,  154 => 139,  150 => 137,  147 => 135,  137 => 131,  129 => 125,  124 => 124,  114 => 120,  106 => 114,  102 => 113,  97 => 110,  95 => 107,  90 => 104,  88 => 101,  81 => 96,  79 => 93,  75 => 91,  73 => 44,  69 => 43,  62 => 39,  59 => 38,  56 => 29,  54 => 14,  49 => 12,  36 => 2,  33 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ app.request.locale|split('_')[0] }}">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">*/
/*         <meta name="apple-mobile-web-app-capable" content="yes">*/
/*         <meta name="apple-touch-fullscreen" content="yes">*/
/*         <meta name="description" content="PFE">*/
/*         <meta name="author" content="BelhassenRami">*/
/* */
/*         <title>{% block title %}{% trans %}project.name{% endtrans %} {% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             {% stylesheets*/
/*                 'bundles/isetsomagazine/fonts/font-awesome/css/font-awesome.min.css'*/
/*                 'bundles/isetsomagazine/fonts/themify-icons/themify-icons.css'*/
/*                 'bundles/isetsomagazine/css/styles.css'*/
/*                 'bundles/isetsomagazine/css/animate.css'*/
/*                 'bundles/isetsomagazine/css/message-box.css'*/
/*                 'bundles/isetsomagazine/css/message.css'*/
/*                 'bundles/isetsomagazine/plugins/pines-notify/pnotify.css'*/
/*                 'bundles/isetsomagazine/plugins/progress-skylo/skylo.css'*/
/*                 filter='cssrewrite' %}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/* */
/*         {% endblock %}*/
/*         {% block javascriptTop %}*/
/*             {% javascripts filter='?yui_js'*/
/*                 'bundles/isetsomagazine/js/jquery-1.10.2.min.js'*/
/*                 'bundles/isetsomagazine/plugins/progress-skylo/skylo.js'*/
/*                 'bundles/isetsomagazine/js/jquery.nicescroll.js'*/
/*             %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     </head>*/
/*     <body>*/
/*         <script src="{{ asset('bundles/isetsomagazine/myjs/Progressbar.js')}}"></script>*/
/*         {% block header %}*/
/*             <div id="topnav" class="navbar navbar-default navbar-fixed-top  animated fadeInDown" role="banner">*/
/*                 <div class="logo-area">*/
/*                     <span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">*/
/*                         <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">*/
/*                             <span class="icon-bg">*/
/*                                 <i class="ti ti-menu"></i>*/
/*                             </span>*/
/*                         </a>*/
/*                     </span>*/
/*                     <a class="navbar-brand"></a>*/
/* */
/*                 </div><!-- logo-area -->*/
/*                 <ul class="nav navbar-nav toolbar pull-right">*/
/*                         <li class="dropdown toolbar-icon-bg hidden-xs">*/
/*                             <a href="{{ path ('fos_message_inbox') }}"><span class="icon-bg"><i class="ti ti-email"></i></span><span id="nb_msg"*/
/*                                     class="badge badge-deeporange">{{ fos_message_nb_unread() }}</span></a>*/
/*                             */
/*                         </li>*/
/*                         <li class="dropdown toolbar-icon-bg">*/
/*                             <a href="{{ url ('notification') }}"><span class="icon-bg"><i class="ti ti-bell"></i></span><span id="nb_notification" class="badge badge-deeporange"></span></a>*/
/*                         </li>*/
/*                         <li class="dropdown toolbar-icon-bg">*/
/*                             <a href="#" class="dropdown-toggle username" data-toggle="dropdown">*/
/* */
/*                                 <span class="icon-bg"><i class="ti ti-user"></i> </span>*/
/* */
/*                             </a>*/
/*                             <ul class="dropdown-menu userinfo arrow" style="margin-top: 5px;">*/
/*                                 <li><a href="{{ path('fos_user_profile_show') }}"><i class="ti ti-user"></i><span>*/
/*                                     {% trans %}menu.user.profile{% endtrans %}</span></a></li>*/
/*                                 <li><a href="{{ path('fos_user_profile_edit') }}"><i class="ti ti-settings"></i><span></span>{% trans %}menu.user.setting{% endtrans %}</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* */
/*                                     <li><a href="#"  class="mb-control" data-box="#mb-signout">*/
/*                                        <i class="ti ti-shift-right"></i> {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                                     </a></li>*/
/* */
/*                                 {% endif %}*/
/* */
/*                             </ul>*/
/*                         </li>*/
/* */
/*                 </ul>*/
/*             </div>*/
/*         {% endblock %}*/
/*         <div id="wrapper">*/
/*             <div id="layout-static">*/
/*                 {% block menu %}*/
/*                     {% include 'menu.html.twig' %}*/
/*                 {% endblock %}*/
/*                 <div class="static-content-wrapper">*/
/*                     <div class="static-content">*/
/*                         <div class="page-content">*/
/*                             <ol class="breadcrumb animated zoomIn">*/
/*                                 <li class="text text-capitalize"> <i class="ti ti-home"></i>*/
/*                                 {% block breadcrumb %}*/
/*                                     <a href="{{ url ('dashboard_index') }}"><span> {% trans %}menu.dashbord{% endtrans %}</span></a>*/
/*                                 {% endblock %}*/
/*                                 </li>*/
/*                                 <li class="text text-capitalize"><i class="ti ti-tag"></i> <a class="active">*/
/*                                     */
/*                                     {% block breadcrumbActive %}*/
/* */
/*                                     {% endblock %}*/
/*                                 </a></li>*/
/*                             </ol>*/
/*                             <div class="container-fluid animated fadeIn">*/
/*                                 {% for flash_message in app.session.flashbag.get('msg') %}*/
/*                                     <div class="alert alert-success animated zoomInDown" role="alert">*/
/*                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">*/
/*                                           <span aria-hidden="true">&times;</span>*/
/*                                         </button>*/
/*                                         <samp class="text-capitalize">*/
/*                                             <i class="fa fa-info" ></i>*/
/*                                             {{ flash_message }}*/
/*                                         </samp>*/
/*                                     </div>*/
/*                                     {% endfor %}*/
/*                                     {% for flash_message in app.session.flashbag.get('msgError') %}*/
/*                                     <div class="alert alert-danger animated zoomInDown" role="alert">*/
/*                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">*/
/*                                           <span aria-hidden="true">&times;</span>*/
/*                                         </button>*/
/*                                         <samp class="text-capitalize">*/
/*                                             <i class="fa fa-info" ></i>*/
/*                                             {{ flash_message }}*/
/*                                         </samp>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                                     {% block body %}*/
/*                                     {% endblock %}*/
/*                             </div> <!-- .container-fluid -->*/
/*                         </div> <!-- #page-content -->*/
/*                         {% block footer %}*/
/*                         <footer role="contentinfo">*/
/*                             <div class="clearfix">*/
/*                                 <ul class="list-unstyled list-inline pull-left">*/
/*                                     <li><h6 style="margin: 0;">© 2016 Gestion de Magasin</h6></li>*/
/*                                 </ul>*/
/*                                 <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>*/
/*                             </div>*/
/*                         </footer>*/
/*                         {% endblock %}*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- MESSAGE BOX-->*/
/*         <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">*/
/*             <div class="mb-container">*/
/*                 <div class="mb-middle">*/
/*                     <div class="mb-title"><span class="fa fa-sign-out"></span> {{ 'layout.logout'|trans({}, 'FOSUserBundle') }} ?</div>*/
/*                     <div class="mb-content">*/
/*                         <p>{% trans %}logout.message{% endtrans %}</p>*/
/*                         <p>{% trans %}logout.info{% endtrans %}</p>*/
/*                     </div>*/
/*                     <div class="mb-footer">*/
/*                         <div class="pull-right">*/
/*                             <a class="btn btn-success btn-lg" href="{{ path('fos_user_security_logout') }}">*/
/*                                {% trans %}messageBox.yes{% endtrans %}*/
/*                             </a>*/
/*                             <button class="btn btn-default btn-lg mb-control-close">{% trans %}messageBox.no{% endtrans %}</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- END MESSAGE BOX-->*/
/*         {% block audio %}*/
/*             <audio id="audio-alert" src="{{ asset('bundles/isetsomagazine/audio/alert.mp3')}}" preload="auto">*/
/*             </audio>*/
/*             <audio id="audio-fail" src="{{ asset('bundles/isetsomagazine/audio/fail.mp3')}}" preload="auto">*/
/*             </audio>*/
/*             <audio id="audio-newMessage" src="{{ asset('bundles/isetsomagazine/audio/newMessage.wav')}}" preload="auto">*/
/*             </audio>*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             {% javascripts filter='?yui_js'*/
/*                 'bundles/isetsomagazine/js/jqueryui-1.10.3.min.js'*/
/*                 'bundles/isetsomagazine/js/bootstrap.min.js'*/
/*                 'bundles/isetsomagazine/js/enquire.min.js'*/
/*                 'bundles/isetsomagazine/plugins/wijets/wijets.js'*/
/*                 'bundles/isetsomagazine/plugins/codeprettifier/prettify.js'*/
/* */
/*                 'bundles/isetsomagazine/plugins/nanoScroller/js/jquery.nanoscroller.min.js'*/
/*                 'bundles/isetsomagazine/js/message-box.js'*/
/*                 'bundles/isetsomagazine/js/application.js'*/
/*                 'bundles/fosjsrouting/js/router.js'*/
/*                 'bundles/isetsomagazine/plugins/pines-notify/pnotify.min.js'*/
/* */
/*                 'bundles/bazingajstranslation/js/translator.min.js'*/
/*             %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*             <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*             <script src="{{ url('bazinga_jstranslation_js') }}"></script>*/
/*             <script type="text/javascript">*/
/*                 $.skylo('end');*/
/*             </script>*/
/*             <script src="{{ asset('bundles/isetsomagazine/myjs/base.js')}}"></script>*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
