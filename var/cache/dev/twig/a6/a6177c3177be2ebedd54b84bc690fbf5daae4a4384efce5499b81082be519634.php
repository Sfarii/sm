<?php

/* ISETSOMagazineBundle:articledurable:show.html.twig */
class __TwigTemplate_9efc3220b6ebfb1cf1428a42ddd97f37ef85d3f6490dbfa8fdb37a9b511046dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:articledurable:show.html.twig", 1);
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
        $__internal_fbe633b2088317b1e9a7710eca832245fb1b1cc86e4a09c2ccc45583e8550167 = $this->env->getExtension("native_profiler");
        $__internal_fbe633b2088317b1e9a7710eca832245fb1b1cc86e4a09c2ccc45583e8550167->enter($__internal_fbe633b2088317b1e9a7710eca832245fb1b1cc86e4a09c2ccc45583e8550167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:articledurable:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbe633b2088317b1e9a7710eca832245fb1b1cc86e4a09c2ccc45583e8550167->leave($__internal_fbe633b2088317b1e9a7710eca832245fb1b1cc86e4a09c2ccc45583e8550167_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_35c82441bbb3f4d48f03b3d7a4d514ae46f378069c2a134d2912285a1e5c6d16 = $this->env->getExtension("native_profiler");
        $__internal_35c82441bbb3f4d48f03b3d7a4d514ae46f378069c2a134d2912285a1e5c6d16->enter($__internal_35c82441bbb3f4d48f03b3d7a4d514ae46f378069c2a134d2912285a1e5c6d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("articledurable_index");
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articledurable.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_35c82441bbb3f4d48f03b3d7a4d514ae46f378069c2a134d2912285a1e5c6d16->leave($__internal_35c82441bbb3f4d48f03b3d7a4d514ae46f378069c2a134d2912285a1e5c6d16_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_dd406bfcef1ff47d5b65c31b29d605467b31d75d20b5b70185f663a984dcb387 = $this->env->getExtension("native_profiler");
        $__internal_dd406bfcef1ff47d5b65c31b29d605467b31d75d20b5b70185f663a984dcb387->enter($__internal_dd406bfcef1ff47d5b65c31b29d605467b31d75d20b5b70185f663a984dcb387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articledurable.show.name"), "html", null, true);
        
        $__internal_dd406bfcef1ff47d5b65c31b29d605467b31d75d20b5b70185f663a984dcb387->leave($__internal_dd406bfcef1ff47d5b65c31b29d605467b31d75d20b5b70185f663a984dcb387_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ef321033f2d90b5ab10c66367e9755182ba8a4f6dac02d185fdcb912f670b41 = $this->env->getExtension("native_profiler");
        $__internal_1ef321033f2d90b5ab10c66367e9755182ba8a4f6dac02d185fdcb912f670b41->enter($__internal_1ef321033f2d90b5ab10c66367e9755182ba8a4f6dac02d185fdcb912f670b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"col-sm-6\">
  <div class=\"tab-content\">
    <div class=\"tab-pane active\" id=\"tab-about\">
        <div class=\"panel panel-info\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
            <div class=\"panel-heading\">
                <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articledurable.show.name"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleDurable"]) ? $context["articleDurable"] : $this->getContext($context, "articleDurable")), "designation", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.garenti"), "html", null, true);
        echo "</th>
                                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleDurable"]) ? $context["articleDurable"] : $this->getContext($context, "articleDurable")), "garenti", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articleDurable"]) ? $context["articleDurable"] : $this->getContext($context, "articleDurable")), "unit", array()), "designation", array()), "html", null, true);
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
        // line 48
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
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                                <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["articleDurable"]) ? $context["articleDurable"] : $this->getContext($context, "articleDurable")), "subfamily", array()), "family", array()), "designation", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.description"), "html", null, true);
        echo "</th>
                                <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["articleDurable"]) ? $context["articleDurable"] : $this->getContext($context, "articleDurable")), "subfamily", array()), "family", array()), "description", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                                <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articleDurable"]) ? $context["articleDurable"] : $this->getContext($context, "articleDurable")), "subfamily", array()), "designation", array()), "html", null, true);
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
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("local.show.name"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    <div class=\"about-area\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                            <tbody>
                               <tr>
                                <th class=\"text text-primary\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.typeLocal"), "html", null, true);
        echo "</th>
                                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["articleDurable"]) ? $context["articleDurable"] : $this->getContext($context, "articleDurable")), "local", array()), "typeLocal", array()), "designation", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.local"), "html", null, true);
        echo "</th>
                                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articleDurable"]) ? $context["articleDurable"] : $this->getContext($context, "articleDurable")), "local", array()), "designation", array()), "html", null, true);
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
        // line 110
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
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articleDurable"]) ? $context["articleDurable"] : $this->getContext($context, "articleDurable")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articleDurable"]) ? $context["articleDurable"] : $this->getContext($context, "articleDurable")), "user", array()), "email", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.role"), "html", null, true);
        echo "</th>
                                <td>";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["articleDurable"]) ? $context["articleDurable"] : $this->getContext($context, "articleDurable")), "user", array()), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 128
            echo "                                  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["val"]), "html", null, true);
            echo " <br>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
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
        
        $__internal_1ef321033f2d90b5ab10c66367e9755182ba8a4f6dac02d185fdcb912f670b41->leave($__internal_1ef321033f2d90b5ab10c66367e9755182ba8a4f6dac02d185fdcb912f670b41_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:articledurable:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 129,  274 => 128,  270 => 127,  266 => 126,  260 => 123,  256 => 122,  250 => 119,  246 => 118,  235 => 110,  216 => 94,  212 => 93,  206 => 90,  202 => 89,  191 => 81,  172 => 65,  168 => 64,  162 => 61,  158 => 60,  152 => 57,  148 => 56,  137 => 48,  117 => 31,  113 => 30,  107 => 27,  103 => 26,  97 => 23,  93 => 22,  82 => 14,  75 => 9,  69 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('articledurable_index') }}">*/
/*        {{ 'articledurable.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*      {% block breadcrumbActive %}{{ 'articledurable.show.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div class="col-sm-6">*/
/*   <div class="tab-content">*/
/*     <div class="tab-pane active" id="tab-about">*/
/*         <div class="panel panel-info" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*             <div class="panel-heading">*/
/*                 <h2>{{ 'articledurable.show.name'|trans }}</h2>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <div class="about-area">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table">*/
/*                             <tbody>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.designation'|trans }}</th>*/
/*                                 <td>{{ articleDurable.designation }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.garenti'|trans }}</th>*/
/*                                 <td>{{ articleDurable.garenti }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.unit'|trans }}</th>*/
/*                                 <td>{{ articleDurable.unit.designation }}</td>*/
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
/*                                <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.family'|trans }}</th>*/
/*                                 <td>{{ articleDurable.subfamily.family.designation }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.description'|trans }}</th>*/
/*                                 <td>{{ articleDurable.subfamily.family.description }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.subFamily'|trans }}</th>*/
/*                                 <td>{{ articleDurable.subfamily.designation }}</td>*/
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
/* <div class="col-sm-6">*/
/*     <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab-about">*/
/*             <div class="panel panel-info" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                 <div class="panel-heading">*/
/*                     <h2>{{ 'local.show.name'|trans }}</h2>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="about-area">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table">*/
/*                             <tbody>*/
/*                                <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.typeLocal'|trans }}</th>*/
/*                                 <td>{{ articleDurable.local.typeLocal.designation }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.local'|trans }}</th>*/
/*                                 <td>{{ articleDurable.local.designation }}</td>*/
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
/* <div class="col-sm-6">*/
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
/*                                 <td>{{ articleDurable.user.username }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                 <td>{{ articleDurable.user.email }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.role'|trans }}</th>*/
/*                                 <td>{% for val in articleDurable.user.roles %}*/
/*                                   {{ val|trans }} <br>*/
/*                                 {% endfor %}</td>*/
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
