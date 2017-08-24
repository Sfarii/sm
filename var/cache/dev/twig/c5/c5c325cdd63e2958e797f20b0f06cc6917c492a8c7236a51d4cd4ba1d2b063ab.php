<?php

/* ISETSOUserBundle:Profile:show.html.twig */
class __TwigTemplate_41ff25405e43279e02fa58417301b406c2b5339b4801763c4152fb2e9d091792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
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
        $__internal_e0ce78a4da4b1e12e932b9cf6e0ace59022797ce0ba5812c40b4ebe229afb8e3 = $this->env->getExtension("native_profiler");
        $__internal_e0ce78a4da4b1e12e932b9cf6e0ace59022797ce0ba5812c40b4ebe229afb8e3->enter($__internal_e0ce78a4da4b1e12e932b9cf6e0ace59022797ce0ba5812c40b4ebe229afb8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ce78a4da4b1e12e932b9cf6e0ace59022797ce0ba5812c40b4ebe229afb8e3->leave($__internal_e0ce78a4da4b1e12e932b9cf6e0ace59022797ce0ba5812c40b4ebe229afb8e3_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_2e82c03ee7d8775b638c080184accb734f460adb3648f0249e4f479f38db5c14 = $this->env->getExtension("native_profiler");
        $__internal_2e82c03ee7d8775b638c080184accb734f460adb3648f0249e4f479f38db5c14->enter($__internal_2e82c03ee7d8775b638c080184accb734f460adb3648f0249e4f479f38db5c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.user.profile"), "html", null, true);
        
        $__internal_2e82c03ee7d8775b638c080184accb734f460adb3648f0249e4f479f38db5c14->leave($__internal_2e82c03ee7d8775b638c080184accb734f460adb3648f0249e4f479f38db5c14_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b7ab5ef0baa003b391f48c95b55b647e701e2b7c095e07452b4ba7c3770eb40 = $this->env->getExtension("native_profiler");
        $__internal_1b7ab5ef0baa003b391f48c95b55b647e701e2b7c095e07452b4ba7c3770eb40->enter($__internal_1b7ab5ef0baa003b391f48c95b55b647e701e2b7c095e07452b4ba7c3770eb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<!-- BEGIN PROFILE HEADING -->
\t<div class=\"the-box transparent full no-margin profile-heading\">
\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/isetsomagazine/img/profile.jpg"), "html", null, true);
        echo "\" class=\"bg-cover\" alt=\"Image\">
\t\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/isetsomagazine/img/User-file-icon.png"), "html", null, true);
        echo "\" class=\"avatar\" alt=\"Avatar\">
\t\t<div class=\"profile-info\">
\t\t\t<p class=\"user-name\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
\t\t\t<p class=\"text-muted\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
\t\t\t<p class=\"right-button\">
\t\t\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-primary btn-sm\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.user.setting", array(), "messages");
        echo "</a>
\t\t\t</p>
\t\t</div><!-- /.profile-info -->
\t</div><!-- /.the-box .transparent .profile-heading -->
\t<!-- END PROFILE HEADING -->
\t
\t<div class=\"panel with-nav-tabs panel-primary panel-square panel-no-border\">
\t  <div class=\"panel-heading\">
\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li class=\"active\"><a href=\"#panel-home\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
\t\t\t<li><a href=\"#panel-about\" data-toggle=\"tab\"><i class=\"fa fa-user\"></i></a></li>
\t\t</ul>
\t  </div>
\t\t<div id=\"panel-collapse-1\" class=\"collapse in\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane fade in active\" id=\"panel-home\">
\t\t\t\t\t\t<h4 class=\"small-heading more-margin-bottom\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.user.history"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<ul class=\"media-list media-xs\">
\t\t\t\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["userHistory"]);
        foreach ($context['_seq'] as $context["_key"] => $context["userHistory"]) {
            // line 33
            echo "\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t<a href=\"#fakelink\" class=\"pull-left\">
\t\t\t\t\t\t\t\t\t  <img class=\"media-object img-circle\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/isetsomagazine/img/User-icon.png"), "html", null, true);
            echo "\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t  <h4 class=\"media-heading\"><a href=\"#fakelink\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["userHistory"], "action", array())), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t\t  <p class=\"date\"><small>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["userHistory"], "date", array())), "html", null, true);
            echo "</small></p>
\t\t\t\t\t\t\t\t\t  <p class=\"small\">
\t\t\t\t\t\t\t\t\t  \t";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["userHistory"], "message", array())), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t  </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t </li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userHistory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tab-footer fade in active\">
\t                    ";
        // line 48
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["userHistory"]) ? $context["userHistory"] : $this->getContext($context, "userHistory")));
        echo "
\t                \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"panel-about\">
\t\t\t\t\t\t";
        // line 53
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "ISETSOUserBundle:Profile:show.html.twig", 53)->display($context);
        // line 54
        echo "\t\t\t\t\t</div><!-- /#panel-about -->
\t\t\t\t</div><!-- /.tab-content -->
\t\t\t</div><!-- /.panel-body -->
\t\t\t
\t\t</div><!-- /.collapse in -->
\t</div><!-- /.panel .panel-success -->
\t\t\t\t\t\t
\t\t\t\t\t\t
";
        
        $__internal_1b7ab5ef0baa003b391f48c95b55b647e701e2b7c095e07452b4ba7c3770eb40->leave($__internal_1b7ab5ef0baa003b391f48c95b55b647e701e2b7c095e07452b4ba7c3770eb40_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b34710aa6d30bfdef8f42eff4b31bef0e06860f3f9b81e43650933bb26e39a03 = $this->env->getExtension("native_profiler");
        $__internal_b34710aa6d30bfdef8f42eff4b31bef0e06860f3f9b81e43650933bb26e39a03->enter($__internal_b34710aa6d30bfdef8f42eff4b31bef0e06860f3f9b81e43650933bb26e39a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
    var progress = 100 - ( (\$('.text-danger').length )* 100 / 4 ) +\"%\";
    \$(\"#progress-bar\").css(\"width\", progress );
    \$('#profile-progress').text(progress);
    </script>
";
        
        $__internal_b34710aa6d30bfdef8f42eff4b31bef0e06860f3f9b81e43650933bb26e39a03->leave($__internal_b34710aa6d30bfdef8f42eff4b31bef0e06860f3f9b81e43650933bb26e39a03_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 64,  169 => 63,  154 => 54,  152 => 53,  144 => 48,  140 => 46,  129 => 41,  124 => 39,  120 => 38,  114 => 35,  110 => 33,  106 => 32,  100 => 29,  78 => 12,  71 => 10,  67 => 9,  62 => 7,  58 => 6,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumbActive %}{{ 'menu.user.profile'|trans }}{% endblock %}*/
/* {% block body %}*/
/* 	<!-- BEGIN PROFILE HEADING -->*/
/* 	<div class="the-box transparent full no-margin profile-heading">*/
/* 		<img src="{{ asset('bundles/isetsomagazine/img/profile.jpg') }}" class="bg-cover" alt="Image">*/
/* 		<img src="{{ asset('bundles/isetsomagazine/img/User-file-icon.png') }}" class="avatar" alt="Avatar">*/
/* 		<div class="profile-info">*/
/* 			<p class="user-name">{{ user.username }}</p>*/
/* 			<p class="text-muted">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }} : {{ user.email }}</p>*/
/* 			<p class="right-button">*/
/* 			<a href="{{ path('fos_user_profile_edit') }}" class="btn btn-primary btn-sm">{% trans %}menu.user.setting{% endtrans %}</a>*/
/* 			</p>*/
/* 		</div><!-- /.profile-info -->*/
/* 	</div><!-- /.the-box .transparent .profile-heading -->*/
/* 	<!-- END PROFILE HEADING -->*/
/* 	*/
/* 	<div class="panel with-nav-tabs panel-primary panel-square panel-no-border">*/
/* 	  <div class="panel-heading">*/
/* 		<ul class="nav nav-tabs">*/
/* 			<li class="active"><a href="#panel-home" data-toggle="tab"><i class="fa fa-home"></i></a></li>*/
/* 			<li><a href="#panel-about" data-toggle="tab"><i class="fa fa-user"></i></a></li>*/
/* 		</ul>*/
/* 	  </div>*/
/* 		<div id="panel-collapse-1" class="collapse in">*/
/* 			<div class="panel-body">*/
/* 				<div class="tab-content">*/
/* 					<div class="tab-pane fade in active" id="panel-home">*/
/* 						<h4 class="small-heading more-margin-bottom">{{ 'menu.user.history'|trans }}</h4>*/
/* 						<hr>*/
/* 						<ul class="media-list media-xs">*/
/* 							{% for userHistory in userHistory %}*/
/* 								<li class="media">*/
/* 									<a href="#fakelink" class="pull-left">*/
/* 									  <img class="media-object img-circle" src="{{ asset('bundles/isetsomagazine/img/User-icon.png') }}" alt="Avatar">*/
/* 									</a>*/
/* 									<div class="media-body">*/
/* 									  <h4 class="media-heading"><a href="#fakelink">{{ userHistory.action|trans }}</a></h4>*/
/* 									  <p class="date"><small>{{userHistory.date|date}}</small></p>*/
/* 									  <p class="small">*/
/* 									  	{{ userHistory.message|trans }}*/
/* 									  </p>*/
/* 									</div>*/
/* 								 </li>*/
/* 							{% endfor %}*/
/* 						</ul>*/
/* 						<div class="tab-footer fade in active">*/
/* 	                    {{ knp_pagination_render(userHistory) }}*/
/* 	                	</div>*/
/* 					</div>*/
/* 					*/
/* 					<div class="tab-pane fade" id="panel-about">*/
/* 						{% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* 					</div><!-- /#panel-about -->*/
/* 				</div><!-- /.tab-content -->*/
/* 			</div><!-- /.panel-body -->*/
/* 			*/
/* 		</div><!-- /.collapse in -->*/
/* 	</div><!-- /.panel .panel-success -->*/
/* 						*/
/* 						*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent () }}*/
/*     <script type="text/javascript">*/
/*     var progress = 100 - ( ($('.text-danger').length )* 100 / 4 ) +"%";*/
/*     $("#progress-bar").css("width", progress );*/
/*     $('#profile-progress').text(progress);*/
/*     </script>*/
/* {% endblock %}*/
/* */
