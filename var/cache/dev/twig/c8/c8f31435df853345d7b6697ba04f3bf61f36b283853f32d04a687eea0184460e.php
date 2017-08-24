<?php

/* ISETSOUserBundle:Profile:profileMenu.html.twig */
class __TwigTemplate_6d6777d5093dc2e9d5d6d7afe3991b45f68396263405b6712766bddf4f9012dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62efe6c8d86bcbac42598a81f0a2e384bced01e221371a55ff0300ef86c4c955 = $this->env->getExtension("native_profiler");
        $__internal_62efe6c8d86bcbac42598a81f0a2e384bced01e221371a55ff0300ef86c4c955->enter($__internal_62efe6c8d86bcbac42598a81f0a2e384bced01e221371a55ff0300ef86c4c955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:Profile:profileMenu.html.twig"));

        // line 1
        echo "<div class=\"panel panel-profile\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
  <div class=\"panel-body\">
    <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/isetsomagazine/img/User-icon.png"), "html", null, true);
        echo "\" class=\"img-circle\">
    <div class=\"name\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</div>
  </div>
</div>
<div class=\"list-group list-group-alternate mb-n nav nav-tabs\">
\t<li class=\"dropdown pull-right tabdrop hide\">
\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t<i class=\"fa fa-angle-down\"></i> </a><ul class=\"dropdown-menu\"></ul>
\t</li>
\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" class=\"list-group-item\">
\t\t<i class=\"ti ti-pencil\"></i> ";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.user.setting", array(), "messages");
        // line 14
        echo "\t</a>
\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" class=\"list-group-item\">
\t\t<i class=\"ti ti-lock\"></i> ";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.user.password", array(), "messages");
        // line 17
        echo "\t</a>
</div>";
        
        $__internal_62efe6c8d86bcbac42598a81f0a2e384bced01e221371a55ff0300ef86c4c955->leave($__internal_62efe6c8d86bcbac42598a81f0a2e384bced01e221371a55ff0300ef86c4c955_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:Profile:profileMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  54 => 16,  50 => 15,  47 => 14,  45 => 13,  41 => 12,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="panel panel-profile" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*   <div class="panel-body">*/
/*     <img src="{{ asset('bundles/isetsomagazine/img/User-icon.png') }}" class="img-circle">*/
/*     <div class="name">{{ app.user.username }}</div>*/
/*   </div>*/
/* </div>*/
/* <div class="list-group list-group-alternate mb-n nav nav-tabs">*/
/* 	<li class="dropdown pull-right tabdrop hide">*/
/* 		<a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/* 			<i class="fa fa-angle-down"></i> </a><ul class="dropdown-menu"></ul>*/
/* 	</li>*/
/* 	<a href="{{ path('fos_user_profile_edit') }}" class="list-group-item">*/
/* 		<i class="ti ti-pencil"></i> {% trans %}menu.user.setting{% endtrans %}*/
/* 	</a>*/
/* 	<a href="{{ path('fos_user_change_password') }}" class="list-group-item">*/
/* 		<i class="ti ti-lock"></i> {% trans %}menu.user.password{% endtrans %}*/
/* 	</a>*/
/* </div>*/
