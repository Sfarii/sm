<?php

/* ISETSOUserBundle:history:index.html.twig */
class __TwigTemplate_90d8533de969e7cc005deaaeffb706f2bb9409d51a61a053716890fc8ff695a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ISETSOUserBundle:history:index.html.twig", 1);
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
        $__internal_0de05f0cb009e5a03693c7a1704a89c6f58be95141b4fb8c12cc23bbd43c9619 = $this->env->getExtension("native_profiler");
        $__internal_0de05f0cb009e5a03693c7a1704a89c6f58be95141b4fb8c12cc23bbd43c9619->enter($__internal_0de05f0cb009e5a03693c7a1704a89c6f58be95141b4fb8c12cc23bbd43c9619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:history:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0de05f0cb009e5a03693c7a1704a89c6f58be95141b4fb8c12cc23bbd43c9619->leave($__internal_0de05f0cb009e5a03693c7a1704a89c6f58be95141b4fb8c12cc23bbd43c9619_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_e353ab37f57adf4b7c7390f6bbe97f031fe7fd867916723babe6efd77ab871cc = $this->env->getExtension("native_profiler");
        $__internal_e353ab37f57adf4b7c7390f6bbe97f031fe7fd867916723babe6efd77ab871cc->enter($__internal_e353ab37f57adf4b7c7390f6bbe97f031fe7fd867916723babe6efd77ab871cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.user.history"), "html", null, true);
        
        $__internal_e353ab37f57adf4b7c7390f6bbe97f031fe7fd867916723babe6efd77ab871cc->leave($__internal_e353ab37f57adf4b7c7390f6bbe97f031fe7fd867916723babe6efd77ab871cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_773428a30a90c74d34018f865cde8e413c0eb0da785e7f20055e45b7e8de1bbd = $this->env->getExtension("native_profiler");
        $__internal_773428a30a90c74d34018f865cde8e413c0eb0da785e7f20055e45b7e8de1bbd->enter($__internal_773428a30a90c74d34018f865cde8e413c0eb0da785e7f20055e45b7e8de1bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div data-widget-group=\"group1\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 7
        $this->loadTemplate("ISETSOUserBundle:Profile:profileMenu.html.twig", "ISETSOUserBundle:history:index.html.twig", 7)->display($context);
        // line 8
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-9\">
\t\t\t\t<div class=\"panel\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.user.history"), "html", null, true);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t\t\t\t";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["history"]) ? $context["history"] : $this->getContext($context, "history"))) == 0)) {
            // line 19
            echo "                                \t\t<td colspan=\"5\">
                                \t\t\t<i class=\"ti ti-alert\"></i> ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.list.noResultFound"), "html", null, true);
            echo " 
                            
                                 \t\t</td>
                            \t\t";
        } else {
            // line 24
            echo "                                \t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")));
            foreach ($context['_seq'] as $context["_key"] => $context["userHistory"]) {
                // line 25
                echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"timeline-orange\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-icon\"><i class=\"fa fa-bullhorn\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["userHistory"], "date", array())), "html", null, true);
                echo "</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text text-primary text-capitalize\">";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["userHistory"], "action", array())), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["userHistory"], "message", array())), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userHistory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-footer\">
                    ";
        // line 47
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")));
        echo "
                \t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_773428a30a90c74d34018f865cde8e413c0eb0da785e7f20055e45b7e8de1bbd->leave($__internal_773428a30a90c74d34018f865cde8e413c0eb0da785e7f20055e45b7e8de1bbd_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:history:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 47,  125 => 42,  122 => 41,  109 => 34,  105 => 33,  98 => 29,  92 => 25,  87 => 24,  80 => 20,  77 => 19,  75 => 18,  66 => 12,  60 => 8,  58 => 7,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block breadcrumbActive %}{{ 'menu.user.history'|trans }}{% endblock %}*/
/* {% block body %}*/
/* 	<div data-widget-group="group1">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-3">*/
/* 				{% include "ISETSOUserBundle:Profile:profileMenu.html.twig" %}*/
/* 			</div>*/
/* 			<div class="col-sm-9">*/
/* 				<div class="panel" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/* 					<div class="panel-heading">*/
/* 						<h2>{{ 'menu.user.history'|trans }}</h2>*/
/* 					</div>*/
/* 					<div class="panel-body">*/
/* 						<div class="row">*/
/* 							<div class="col-md-12">*/
/* 								<ul class="timeline">*/
/* 									{% if history|length == 0 %}*/
/*                                 		<td colspan="5">*/
/*                                 			<i class="ti ti-alert"></i> {{ 'family.list.noResultFound'|trans }} */
/*                             */
/*                                  		</td>*/
/*                             		{% else %}*/
/*                                 		{% for userHistory in history %}*/
/* 											<li class="timeline-orange">*/
/* 												<div class="timeline-icon"><i class="fa fa-bullhorn"></i></div>*/
/* 												<div class="timeline-body">*/
/* 													<div class="timeline-header">*/
/* 														<span class="date">{{userHistory.date|date}}</span>*/
/* */
/* 													</div>*/
/* 													<div class="timeline-content">*/
/* 														<h4 class="text text-primary text-capitalize">{{ userHistory.action|trans }}</h4>*/
/* 														<p>{{ userHistory.message|trans }}</p>*/
/* 														*/
/* 														*/
/* 													</div>*/
/* 												</div>*/
/* 											</li>*/
/* 										{% endfor %}*/
/* 									{% endif %}*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="panel-footer">*/
/*                     {{ knp_pagination_render(history) }}*/
/*                 	</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
