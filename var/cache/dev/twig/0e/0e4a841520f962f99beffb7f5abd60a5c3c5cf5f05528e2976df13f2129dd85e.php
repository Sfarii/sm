<?php

/* ISETSOUserBundle:Notification:show.html.twig */
class __TwigTemplate_89e98362a446fe1be8bb905211f8a049803ec34968c4c6630d175385277cdb58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ISETSOUserBundle:Notification:show.html.twig", 1);
        $this->blocks = array(
            'breadcrumbActive' => array($this, 'block_breadcrumbActive'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a2b6d7f75e8f2da52c6dcf0394ae1bc080e867279576c2febae3d7f84941768 = $this->env->getExtension("native_profiler");
        $__internal_9a2b6d7f75e8f2da52c6dcf0394ae1bc080e867279576c2febae3d7f84941768->enter($__internal_9a2b6d7f75e8f2da52c6dcf0394ae1bc080e867279576c2febae3d7f84941768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:Notification:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a2b6d7f75e8f2da52c6dcf0394ae1bc080e867279576c2febae3d7f84941768->leave($__internal_9a2b6d7f75e8f2da52c6dcf0394ae1bc080e867279576c2febae3d7f84941768_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_512a4d09c1cd9ce11df662cd09833466f21cd2d41d41c8a1f484150b5db6f1c9 = $this->env->getExtension("native_profiler");
        $__internal_512a4d09c1cd9ce11df662cd09833466f21cd2d41d41c8a1f484150b5db6f1c9->enter($__internal_512a4d09c1cd9ce11df662cd09833466f21cd2d41d41c8a1f484150b5db6f1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.notification.name"), "html", null, true);
        
        $__internal_512a4d09c1cd9ce11df662cd09833466f21cd2d41d41c8a1f484150b5db6f1c9->leave($__internal_512a4d09c1cd9ce11df662cd09833466f21cd2d41d41c8a1f484150b5db6f1c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cee9ba7c181b821b8ee7d90edfc795f1e3660f954bfc44dd0bac53ce5ef98a0 = $this->env->getExtension("native_profiler");
        $__internal_2cee9ba7c181b821b8ee7d90edfc795f1e3660f954bfc44dd0bac53ce5ef98a0->enter($__internal_2cee9ba7c181b821b8ee7d90edfc795f1e3660f954bfc44dd0bac53ce5ef98a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<ul class=\"timeline\">
\t\t<li class=\"center-timeline-cat\">
\t\t\t<div class=\"inner\">
\t\t\t";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.notification.name"), "html", null, true);
        echo "
\t\t\t</div><!-- /.inner -->
\t\t</li>
\t\t<!-- BEGIN CENTERING LINE -->
\t\t<li class=\"centering-line\"></li>
\t\t<!-- END CENTERING LINE -->

\t\t";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications"))) == 0)) {
            // line 16
            echo "\t\t\t<!-- BEGIN ITEM TIMELINE -->
\t\t\t\t<li class=\"item-timeline\">
\t\t\t\t\t<div class=\"buletan\"></div>
\t\t\t\t\t<div class=\"inner-content\">
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- BEGIN HEADING TIMELINE -->
\t\t\t\t\t\t<div class=\"heading-timeline\">
\t\t\t\t\t\t\t<img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/isetsomagazine/img/User-icon.png"), "html", null, true);
            echo "\" class=\"avatar\" alt=\"Avatar\">
\t\t\t\t\t\t</div><!-- /.heading-timeline -->
\t\t\t\t\t\t<!-- BEGIN HEADING TIMELINE -->
\t\t\t\t\t\t
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.list.noResultFound"), "html", null, true);
            echo "
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div><!-- /.inner-content -->
\t\t\t\t</li>
\t\t\t\t<!-- END ITEM TIMELINE -->
    \t\t<td colspan=\"5\">
    \t\t\t<i class=\"ti ti-alert\"></i>  
     \t\t</td>
\t\t";
        } else {
            // line 40
            echo "    \t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 41
                echo "    \t\t\t<!-- BEGIN ITEM TIMELINE -->
\t\t\t\t\t<li class=\"item-timeline\">
\t\t\t\t\t\t<div class=\"buletan\"></div>
\t\t\t\t\t\t<div class=\"inner-content\">
\t\t\t\t\t\t\t<!-- BEGIN HEADING TIMELINE -->
\t\t\t\t\t\t\t<div class=\"heading-timeline\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/isetsomagazine/img/User-file-icon.png"), "html", null, true);
                echo "\" class=\"avatar\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t<div class=\"user-timeline-info\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.notification.by"), "html", null, true);
                echo " <a href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "author", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t<small>";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notification"], "date", array())), "html", null, true);
                echo "</small></p>
\t\t\t\t\t\t\t\t</div><!-- /.user-timeline-info -->
\t\t\t\t\t\t\t</div><!-- /.heading-timeline -->
\t\t\t\t\t\t\t<!-- END HEADING TIMELINE -->
\t\t\t\t\t\t\t<h4 class=\"text text-primary text-capitalize\">";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["notification"], "action", array())), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t<p>";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["notification"], "message", array())), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- /.inner-content -->
\t\t\t\t\t</li>
\t\t\t\t<!-- END ITEM TIMELINE -->
\t\t\t\t
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t\t";
        }
        // line 65
        echo "\t\t<li class=\"item-timeline highlight text-center\">
\t\t\t<div class=\"buletan\"></div>
\t\t\t<div class=\"inner-content\">
\t\t\t\t<h2 class=\"text-primary\"><i class=\"fa fa-flag-checkered\"></i></h2>
\t\t\t\t
\t\t\t\t";
        // line 70
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
        echo "
\t\t\t</div><!-- /.inner-content -->
\t\t</li>
\t</ul>
\t<br>
";
        
        $__internal_2cee9ba7c181b821b8ee7d90edfc795f1e3660f954bfc44dd0bac53ce5ef98a0->leave($__internal_2cee9ba7c181b821b8ee7d90edfc795f1e3660f954bfc44dd0bac53ce5ef98a0_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:Notification:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 70,  156 => 65,  153 => 64,  139 => 56,  135 => 55,  128 => 51,  122 => 50,  116 => 47,  108 => 41,  103 => 40,  88 => 28,  80 => 23,  71 => 16,  69 => 15,  59 => 8,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block breadcrumbActive %}{{ 'user.notification.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* */
/* 	<ul class="timeline">*/
/* 		<li class="center-timeline-cat">*/
/* 			<div class="inner">*/
/* 			{{ 'user.notification.name'|trans }}*/
/* 			</div><!-- /.inner -->*/
/* 		</li>*/
/* 		<!-- BEGIN CENTERING LINE -->*/
/* 		<li class="centering-line"></li>*/
/* 		<!-- END CENTERING LINE -->*/
/* */
/* 		{% if notifications|length == 0 %}*/
/* 			<!-- BEGIN ITEM TIMELINE -->*/
/* 				<li class="item-timeline">*/
/* 					<div class="buletan"></div>*/
/* 					<div class="inner-content">*/
/* 						*/
/* 						<!-- BEGIN HEADING TIMELINE -->*/
/* 						<div class="heading-timeline">*/
/* 							<img src="{{ asset('bundles/isetsomagazine/img/User-icon.png') }}" class="avatar" alt="Avatar">*/
/* 						</div><!-- /.heading-timeline -->*/
/* 						<!-- BEGIN HEADING TIMELINE -->*/
/* 						*/
/* 						<blockquote>*/
/* 							{{ 'family.list.noResultFound'|trans }}*/
/* 						</blockquote>*/
/* 						*/
/* 						*/
/* 						*/
/* 					</div><!-- /.inner-content -->*/
/* 				</li>*/
/* 				<!-- END ITEM TIMELINE -->*/
/*     		<td colspan="5">*/
/*     			<i class="ti ti-alert"></i>  */
/*      		</td>*/
/* 		{% else %}*/
/*     		{% for notification in notifications %}*/
/*     			<!-- BEGIN ITEM TIMELINE -->*/
/* 					<li class="item-timeline">*/
/* 						<div class="buletan"></div>*/
/* 						<div class="inner-content">*/
/* 							<!-- BEGIN HEADING TIMELINE -->*/
/* 							<div class="heading-timeline">*/
/* 								<img src="{{ asset('bundles/isetsomagazine/img/User-file-icon.png') }}" class="avatar" alt="Avatar">*/
/* 								<div class="user-timeline-info">*/
/* 									<p>*/
/* 									{{ 'user.notification.by'|trans }} <a href="#">{{notification.author }}</a>*/
/* 									<small>{{notification.date|date}}</small></p>*/
/* 								</div><!-- /.user-timeline-info -->*/
/* 							</div><!-- /.heading-timeline -->*/
/* 							<!-- END HEADING TIMELINE -->*/
/* 							<h4 class="text text-primary text-capitalize">{{ notification.action|trans }}</h4>*/
/* 							<p>{{ notification.message|trans }}</p>*/
/* 							*/
/* 							*/
/* 						</div><!-- /.inner-content -->*/
/* 					</li>*/
/* 				<!-- END ITEM TIMELINE -->*/
/* 				*/
/* 			{% endfor %}*/
/* 		{% endif %}*/
/* 		<li class="item-timeline highlight text-center">*/
/* 			<div class="buletan"></div>*/
/* 			<div class="inner-content">*/
/* 				<h2 class="text-primary"><i class="fa fa-flag-checkered"></i></h2>*/
/* 				*/
/* 				{{ knp_pagination_render(notifications) }}*/
/* 			</div><!-- /.inner-content -->*/
/* 		</li>*/
/* 	</ul>*/
/* 	<br>*/
/* {% endblock %}*/
