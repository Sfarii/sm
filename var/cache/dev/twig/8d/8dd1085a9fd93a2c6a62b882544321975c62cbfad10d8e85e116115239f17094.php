<?php

/* ISETSOUserBundle:user:show.html.twig */
class __TwigTemplate_e113f06bd47c0d8bca261f9a121d334e779607487d7b11449d1c86b3f03e0403 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOUserBundle:user:show.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'breadcrumbActive' => array($this, 'block_breadcrumbActive'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ad3092e1d7bd120ca4ea8b8531f1c599d8aac1340fd8e128c70228a8e66df70 = $this->env->getExtension("native_profiler");
        $__internal_0ad3092e1d7bd120ca4ea8b8531f1c599d8aac1340fd8e128c70228a8e66df70->enter($__internal_0ad3092e1d7bd120ca4ea8b8531f1c599d8aac1340fd8e128c70228a8e66df70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ad3092e1d7bd120ca4ea8b8531f1c599d8aac1340fd8e128c70228a8e66df70->leave($__internal_0ad3092e1d7bd120ca4ea8b8531f1c599d8aac1340fd8e128c70228a8e66df70_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_fe3d5d21f1ffff2b06de86ce61fbb5bf1105e5ecaa9d220517ac200140c281cb = $this->env->getExtension("native_profiler");
        $__internal_fe3d5d21f1ffff2b06de86ce61fbb5bf1105e5ecaa9d220517ac200140c281cb->enter($__internal_fe3d5d21f1ffff2b06de86ce61fbb5bf1105e5ecaa9d220517ac200140c281cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_fe3d5d21f1ffff2b06de86ce61fbb5bf1105e5ecaa9d220517ac200140c281cb->leave($__internal_fe3d5d21f1ffff2b06de86ce61fbb5bf1105e5ecaa9d220517ac200140c281cb_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_080b2da80b1a7d78434cb5d6ae239d785ece787be623f8d221bddffb6b6e42ef = $this->env->getExtension("native_profiler");
        $__internal_080b2da80b1a7d78434cb5d6ae239d785ece787be623f8d221bddffb6b6e42ef->enter($__internal_080b2da80b1a7d78434cb5d6ae239d785ece787be623f8d221bddffb6b6e42ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.show.name"), "html", null, true);
        
        $__internal_080b2da80b1a7d78434cb5d6ae239d785ece787be623f8d221bddffb6b6e42ef->leave($__internal_080b2da80b1a7d78434cb5d6ae239d785ece787be623f8d221bddffb6b6e42ef_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a10838587645a9fa1a492362619f2c32737e6cc1d76b431d051911b05652c55 = $this->env->getExtension("native_profiler");
        $__internal_2a10838587645a9fa1a492362619f2c32737e6cc1d76b431d051911b05652c55->enter($__internal_2a10838587645a9fa1a492362619f2c32737e6cc1d76b431d051911b05652c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div data-widget-group=\"group1\">
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab-about\">
        <div class=\"panel panel-default\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
            <div class=\"panel-heading\">
                <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.user.profile"), "html", null, true);
        echo "</h2>
            </div>
            <div class=\"panel-body\">
                <div class=\"about-area\">
                    <div class=\"table-responsive\">
                      <table class=\"table\">
                        <tbody>
                          <tr>
                            <th  class=\"text text-capitalize text-primary\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
                          </tr>
                          <tr>
                            <th class=\"text text-capitalize text-primary\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
                          </tr>
                          <tr>
                            <th class=\"text text-capitalize text-primary\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.firstName"), "html", null, true);
        echo "</th>
                            <td>
                              ";
        // line 32
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()) == null)) {
            // line 33
            echo "                                <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
                              ";
        } else {
            // line 35
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
            echo "
                              ";
        }
        // line 37
        echo "                            </td>
                          </tr>
                          <tr>
                            <th class=\"text text-capitalize text-primary\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.lastName"), "html", null, true);
        echo "</th>
                            <td>
                              ";
        // line 42
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()) == null)) {
            // line 43
            echo "                                <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
                              ";
        } else {
            // line 45
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
            echo "
                              ";
        }
        // line 47
        echo "                            </td>
                          </tr>
                          <tr>
                            <th class=\"text text-capitalize text-primary\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.phone"), "html", null, true);
        echo "</th>
                            <td>
                              ";
        // line 52
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()) == null)) {
            // line 53
            echo "                                <div class=\"text  text-capitalize  text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
                              ";
        } else {
            // line 55
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()), "html", null, true);
            echo "
                              ";
        }
        // line 57
        echo "                            </td>
                          </tr>
                          <tr>
                            <th class=\"text text-capitalize text-primary\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.function"), "html", null, true);
        echo "</th>
                            <td>
                              ";
        // line 62
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "function", array()) == null)) {
            // line 63
            echo "                                <div class=\"text text-capitalize text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.noInfo"), "html", null, true);
            echo " </div>
                              ";
        } else {
            // line 65
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "function", array()), "html", null, true);
            echo "
                              ";
        }
        // line 67
        echo "                            </td>
                          </tr>
                          <tr>
                            <th class=\"text text-capitalize text-primary\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.role", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                            <td>";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 72
            echo "                                  ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo " <br>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo " </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
";
        
        $__internal_2a10838587645a9fa1a492362619f2c32737e6cc1d76b431d051911b05652c55->leave($__internal_2a10838587645a9fa1a492362619f2c32737e6cc1d76b431d051911b05652c55_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 73,  217 => 72,  213 => 71,  209 => 70,  204 => 67,  198 => 65,  192 => 63,  190 => 62,  185 => 60,  180 => 57,  174 => 55,  168 => 53,  166 => 52,  161 => 50,  156 => 47,  150 => 45,  144 => 43,  142 => 42,  137 => 40,  132 => 37,  126 => 35,  120 => 33,  118 => 32,  113 => 30,  107 => 27,  103 => 26,  97 => 23,  93 => 22,  82 => 14,  75 => 9,  69 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('user_index') }}">*/
/*        {{ 'user.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*    {% block breadcrumbActive %}{{ 'user.show.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <div data-widget-group="group1">*/
/*       <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab-about">*/
/*         <div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*             <div class="panel-heading">*/
/*                 <h2>{{ 'menu.user.profile'|trans  }}</h2>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <div class="about-area">*/
/*                     <div class="table-responsive">*/
/*                       <table class="table">*/
/*                         <tbody>*/
/*                           <tr>*/
/*                             <th  class="text text-capitalize text-primary">{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}</th>*/
/*                             <td>{{ user.username }}</td>*/
/*                           </tr>*/
/*                           <tr>*/
/*                             <th class="text text-capitalize text-primary">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}</th>*/
/*                             <td>{{ user.email }}</td>*/
/*                           </tr>*/
/*                           <tr>*/
/*                             <th class="text text-capitalize text-primary">{{ 'magazine.field.firstName'|trans }}</th>*/
/*                             <td>*/
/*                               {% if user.firstName == null %}*/
/*                                 <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*                               {% else %}*/
/*                                 {{ user.firstName }}*/
/*                               {% endif %}*/
/*                             </td>*/
/*                           </tr>*/
/*                           <tr>*/
/*                             <th class="text text-capitalize text-primary">{{ 'magazine.field.lastName'|trans }}</th>*/
/*                             <td>*/
/*                               {% if user.lastName == null %}*/
/*                                 <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*                               {% else %}*/
/*                                 {{ user.lastName }}*/
/*                               {% endif %}*/
/*                             </td>*/
/*                           </tr>*/
/*                           <tr>*/
/*                             <th class="text text-capitalize text-primary">{{ 'magazine.field.phone'|trans }}</th>*/
/*                             <td>*/
/*                               {% if user.phone ==  null %}*/
/*                                 <div class="text  text-capitalize  text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*                               {% else %}*/
/*                                 {{ user.phone }}*/
/*                               {% endif %}*/
/*                             </td>*/
/*                           </tr>*/
/*                           <tr>*/
/*                             <th class="text text-capitalize text-primary">{{ 'magazine.field.function'|trans }}</th>*/
/*                             <td>*/
/*                               {% if user.function == null%}*/
/*                                 <div class="text text-capitalize text-danger"> {{  'user.noInfo'|trans }} </div>*/
/*                               {% else %}*/
/*                                 {{ user.function }}*/
/*                               {% endif %}*/
/*                             </td>*/
/*                           </tr>*/
/*                           <tr>*/
/*                             <th class="text text-capitalize text-primary">{{ 'profile.show.role'|trans({}, 'FOSUserBundle') }}</th>*/
/*                             <td>{% for val in user.roles %}*/
/*                                   {{ val }} <br>*/
/*                                 {% endfor %} </td>*/
/*                           </tr>*/
/*                         </tbody>*/
/*                       </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
