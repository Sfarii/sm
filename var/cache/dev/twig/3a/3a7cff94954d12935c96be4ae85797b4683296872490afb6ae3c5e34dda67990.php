<?php

/* ISETSOMagazineBundle:articleconsumable:show.html.twig */
class __TwigTemplate_b32e719d3ec72451238def27dc982d7fce686f15a14ea420e620a29db42ca51e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:articleconsumable:show.html.twig", 1);
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
        $__internal_eb1f2fde6974ad67a4d810f2ebc56a7ddddf4e86200f6f510db1bef8784fc4ba = $this->env->getExtension("native_profiler");
        $__internal_eb1f2fde6974ad67a4d810f2ebc56a7ddddf4e86200f6f510db1bef8784fc4ba->enter($__internal_eb1f2fde6974ad67a4d810f2ebc56a7ddddf4e86200f6f510db1bef8784fc4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:articleconsumable:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb1f2fde6974ad67a4d810f2ebc56a7ddddf4e86200f6f510db1bef8784fc4ba->leave($__internal_eb1f2fde6974ad67a4d810f2ebc56a7ddddf4e86200f6f510db1bef8784fc4ba_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_802d49faa0d095da7f71005664c5598517ab9b4fad377b363932f8b4c7cf4abd = $this->env->getExtension("native_profiler");
        $__internal_802d49faa0d095da7f71005664c5598517ab9b4fad377b363932f8b4c7cf4abd->enter($__internal_802d49faa0d095da7f71005664c5598517ab9b4fad377b363932f8b4c7cf4abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("articleconsumable_index");
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articleconsumable.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_802d49faa0d095da7f71005664c5598517ab9b4fad377b363932f8b4c7cf4abd->leave($__internal_802d49faa0d095da7f71005664c5598517ab9b4fad377b363932f8b4c7cf4abd_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_0de5fa83c655ae8fbedde0852af1c81020280f6ced2ac49da7c126297b0a910f = $this->env->getExtension("native_profiler");
        $__internal_0de5fa83c655ae8fbedde0852af1c81020280f6ced2ac49da7c126297b0a910f->enter($__internal_0de5fa83c655ae8fbedde0852af1c81020280f6ced2ac49da7c126297b0a910f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articleconsumable.show.name"), "html", null, true);
        
        $__internal_0de5fa83c655ae8fbedde0852af1c81020280f6ced2ac49da7c126297b0a910f->leave($__internal_0de5fa83c655ae8fbedde0852af1c81020280f6ced2ac49da7c126297b0a910f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb9ab0b4ee3033c3756df74b59ac2f1c69cdf891ea780f9a7eff6da34d514ff8 = $this->env->getExtension("native_profiler");
        $__internal_cb9ab0b4ee3033c3756df74b59ac2f1c69cdf891ea780f9a7eff6da34d514ff8->enter($__internal_cb9ab0b4ee3033c3756df74b59ac2f1c69cdf891ea780f9a7eff6da34d514ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"col-sm-6\">
  <div class=\"tab-content\">
    <div class=\"tab-pane active\" id=\"tab-about\">
        <div class=\"panel panel-info\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
            <div class=\"panel-heading\">
                <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articleconsumable.show.name"), "html", null, true);
        echo "</h2>
            </div>
            <div class=\"panel-body\">
                <div class=\"about-area\">
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <tbody>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleConsumable"]) ? $context["articleConsumable"] : $this->getContext($context, "articleConsumable")), "designation", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.minThreshold"), "html", null, true);
        echo "</th>
                                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleConsumable"]) ? $context["articleConsumable"] : $this->getContext($context, "articleConsumable")), "minThreshold", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.maxThreshold"), "html", null, true);
        echo "</th>
                                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleConsumable"]) ? $context["articleConsumable"] : $this->getContext($context, "articleConsumable")), "maxThreshold", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articleConsumable"]) ? $context["articleConsumable"] : $this->getContext($context, "articleConsumable")), "unit", array()), "designation", array()), "html", null, true);
        echo "</td>
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
<div class=\"col-sm-6\">
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab-about\">
            <div class=\"panel panel-info\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                <div class=\"panel-heading\">
                    <h2>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.show.name"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    <div class=\"about-area\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                            <tbody>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                                <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["articleConsumable"]) ? $context["articleConsumable"] : $this->getContext($context, "articleConsumable")), "subfamily", array()), "family", array()), "designation", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.description"), "html", null, true);
        echo "</th>
                                <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["articleConsumable"]) ? $context["articleConsumable"] : $this->getContext($context, "articleConsumable")), "subfamily", array()), "family", array()), "description", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                                <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articleConsumable"]) ? $context["articleConsumable"] : $this->getContext($context, "articleConsumable")), "subfamily", array()), "designation", array()), "html", null, true);
        echo "</td>
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
<div class=\"col-sm-6 col-sm-offset-3\">
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab-about\">
            <div class=\"panel panel-info\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                <div class=\"panel-heading\">
                    <h2>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    <div class=\"about-area\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                            <tbody>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articleConsumable"]) ? $context["articleConsumable"] : $this->getContext($context, "articleConsumable")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articleConsumable"]) ? $context["articleConsumable"] : $this->getContext($context, "articleConsumable")), "user", array()), "email", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.role"), "html", null, true);
        echo "</th>
                                <td>";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["articleConsumable"]) ? $context["articleConsumable"] : $this->getContext($context, "articleConsumable")), "user", array()), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 103
            echo "                                      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["val"]), "html", null, true);
            echo " <br>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "</td>
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
        
        $__internal_cb9ab0b4ee3033c3756df74b59ac2f1c69cdf891ea780f9a7eff6da34d514ff8->leave($__internal_cb9ab0b4ee3033c3756df74b59ac2f1c69cdf891ea780f9a7eff6da34d514ff8_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:articleconsumable:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 104,  240 => 103,  236 => 102,  232 => 101,  226 => 98,  222 => 97,  216 => 94,  212 => 93,  201 => 85,  182 => 69,  178 => 68,  172 => 65,  168 => 64,  162 => 61,  158 => 60,  147 => 52,  127 => 35,  123 => 34,  117 => 31,  113 => 30,  107 => 27,  103 => 26,  97 => 23,  93 => 22,  82 => 14,  75 => 9,  69 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('articleconsumable_index') }}">*/
/*        {{ 'articleconsumable.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*      {% block breadcrumbActive %}{{ 'articleconsumable.show.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div class="col-sm-6">*/
/*   <div class="tab-content">*/
/*     <div class="tab-pane active" id="tab-about">*/
/*         <div class="panel panel-info" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*             <div class="panel-heading">*/
/*                 <h2>{{ 'articleconsumable.show.name'|trans }}</h2>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <div class="about-area">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table">*/
/*                             <tbody>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.designation'|trans }}</th>*/
/*                                 <td>{{ articleConsumable.designation }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.minThreshold'|trans }}</th>*/
/*                                 <td>{{ articleConsumable.minThreshold }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.maxThreshold'|trans }}</th>*/
/*                                 <td>{{ articleConsumable.maxThreshold }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.unit'|trans }}</th>*/
/*                                 <td>{{ articleConsumable.unit.designation }}</td>*/
/*                               </tr>*/
/*                               */
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <div class="col-sm-6">*/
/*     <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab-about">*/
/*             <div class="panel panel-info" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                 <div class="panel-heading">*/
/*                     <h2>{{ 'family.show.name'|trans }}</h2>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="about-area">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table">*/
/*                             <tbody>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.family'|trans }}</th>*/
/*                                 <td>{{ articleConsumable.subfamily.family.designation }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.description'|trans }}</th>*/
/*                                 <td>{{ articleConsumable.subfamily.family.description }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.subFamily'|trans }}</th>*/
/*                                 <td>{{ articleConsumable.subfamily.designation }}</td>*/
/*                               </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="col-sm-6 col-sm-offset-3">*/
/*     <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab-about">*/
/*             <div class="panel panel-info" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                 <div class="panel-heading">*/
/*                     <h2>{{ 'magazine.field.userName'|trans }}</h2>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="about-area">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table">*/
/*                             <tbody>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                 <td>{{ articleConsumable.user.username }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                 <td>{{ articleConsumable.user.email }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.role'|trans }}</th>*/
/*                                 <td>{% for val in articleConsumable.user.roles %}*/
/*                                       {{ val|trans }} <br>*/
/*                                     {% endfor %}</td>*/
/*                               </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
