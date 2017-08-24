<?php

/* ISETSOUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_092466764f23bdecc84c0e8ebe4546f03705545af0895e321711a0593c22c871 extends Twig_Template
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
        $__internal_54412696dc4d953a1154ac0db14a13f813b2e968bf1ee9ae3186a0a0db2e1e9e = $this->env->getExtension("native_profiler");
        $__internal_54412696dc4d953a1154ac0db14a13f813b2e968bf1ee9ae3186a0a0db2e1e9e->enter($__internal_54412696dc4d953a1154ac0db14a13f813b2e968bf1ee9ae3186a0a0db2e1e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<h4 class=\"small-heading more-margin-bottom text-capitalize\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.user.profile"), "html", null, true);
        echo "</h4>
<hr>
<div class=\"form-horizontal\">
  <div class=\"form-group\">
    <label class=\"col-sm-2 control-label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <div class=\"col-sm-10\">
      <p class=\"form-control-static\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    </div>
  </div><!-- /.form-group -->
  <div class=\"form-group\">
    <label class=\"col-sm-2 control-label\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <div class=\"col-sm-10\">
      <p class=\"form-control-static\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    </div>
  </div><!-- /.form-group -->
  <div class=\"form-group\">
    <label class=\"col-sm-2 control-label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.firstName"), "html", null, true);
        echo "</label>
    <div class=\"col-sm-10\">
      <p class=\"form-control-static\">
         ";
        // line 20
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()) == null)) {
            // line 21
            echo "            <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
          ";
        } else {
            // line 23
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
            echo "
          ";
        }
        // line 25
        echo "      </p>
    </div>
  </div><!-- /.form-group -->
  <div class=\"form-group\">
    <label class=\"col-sm-2 control-label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.lastName"), "html", null, true);
        echo "</label>
    <div class=\"col-sm-10\">
      <p class=\"form-control-static\">
         ";
        // line 32
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()) == null)) {
            // line 33
            echo "            <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
          ";
        } else {
            // line 35
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
            echo "
          ";
        }
        // line 37
        echo "      </p>
    </div>
  </div><!-- /.form-group -->
  <div class=\"form-group\">
    <label class=\"col-sm-2 control-label\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.phone"), "html", null, true);
        echo "</label>
    <div class=\"col-sm-10\">
      <p class=\"form-control-static\">
         ";
        // line 44
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()) == null)) {
            // line 45
            echo "            <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
          ";
        } else {
            // line 47
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()), "html", null, true);
            echo "
          ";
        }
        // line 49
        echo "      </p>
    </div>
  </div><!-- /.form-group -->
  <div class=\"form-group\">
    <label class=\"col-sm-2 control-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.function"), "html", null, true);
        echo "</label>
    <div class=\"col-sm-10\">
      <p class=\"form-control-static\">
         ";
        // line 56
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "function", array()) == null)) {
            // line 57
            echo "            <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
          ";
        } else {
            // line 59
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "function", array()), "html", null, true);
            echo "
          ";
        }
        // line 61
        echo "      </p>
    </div>
  </div><!-- /.form-group -->
  </form>
";
        
        $__internal_54412696dc4d953a1154ac0db14a13f813b2e968bf1ee9ae3186a0a0db2e1e9e->leave($__internal_54412696dc4d953a1154ac0db14a13f813b2e968bf1ee9ae3186a0a0db2e1e9e_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 61,  146 => 59,  140 => 57,  138 => 56,  132 => 53,  126 => 49,  120 => 47,  114 => 45,  112 => 44,  106 => 41,  100 => 37,  94 => 35,  88 => 33,  86 => 32,  80 => 29,  74 => 25,  68 => 23,  62 => 21,  60 => 20,  54 => 17,  47 => 13,  42 => 11,  35 => 7,  30 => 5,  22 => 1,);
    }
}
/* <h4 class="small-heading more-margin-bottom text-capitalize">{{ 'menu.user.profile'|trans }}</h4>*/
/* <hr>*/
/* <div class="form-horizontal">*/
/*   <div class="form-group">*/
/*     <label class="col-sm-2 control-label">{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*     <div class="col-sm-10">*/
/*       <p class="form-control-static">{{ user.username }}</p>*/
/*     </div>*/
/*   </div><!-- /.form-group -->*/
/*   <div class="form-group">*/
/*     <label class="col-sm-2 control-label">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}</label>*/
/*     <div class="col-sm-10">*/
/*       <p class="form-control-static">{{ user.email }}</p>*/
/*     </div>*/
/*   </div><!-- /.form-group -->*/
/*   <div class="form-group">*/
/*     <label class="col-sm-2 control-label">{{ 'magazine.field.firstName'|trans }}</label>*/
/*     <div class="col-sm-10">*/
/*       <p class="form-control-static">*/
/*          {% if user.firstName == null%}*/
/*             <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*           {% else %}*/
/*             {{ user.firstName }}*/
/*           {% endif %}*/
/*       </p>*/
/*     </div>*/
/*   </div><!-- /.form-group -->*/
/*   <div class="form-group">*/
/*     <label class="col-sm-2 control-label">{{ 'magazine.field.lastName'|trans }}</label>*/
/*     <div class="col-sm-10">*/
/*       <p class="form-control-static">*/
/*          {% if user.lastName == null%}*/
/*             <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*           {% else %}*/
/*             {{ user.lastName }}*/
/*           {% endif %}*/
/*       </p>*/
/*     </div>*/
/*   </div><!-- /.form-group -->*/
/*   <div class="form-group">*/
/*     <label class="col-sm-2 control-label">{{ 'magazine.field.phone'|trans }}</label>*/
/*     <div class="col-sm-10">*/
/*       <p class="form-control-static">*/
/*          {% if user.phone == null%}*/
/*             <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*           {% else %}*/
/*             {{ user.phone }}*/
/*           {% endif %}*/
/*       </p>*/
/*     </div>*/
/*   </div><!-- /.form-group -->*/
/*   <div class="form-group">*/
/*     <label class="col-sm-2 control-label">{{ 'magazine.field.function'|trans }}</label>*/
/*     <div class="col-sm-10">*/
/*       <p class="form-control-static">*/
/*          {% if user.function == null%}*/
/*             <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*           {% else %}*/
/*             {{ user.function }}*/
/*           {% endif %}*/
/*       </p>*/
/*     </div>*/
/*   </div><!-- /.form-group -->*/
/*   </form>*/
/* */
