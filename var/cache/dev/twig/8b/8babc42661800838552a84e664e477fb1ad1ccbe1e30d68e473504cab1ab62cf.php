<?php

/* ISETSOMagazineBundle:provider:show.html.twig */
class __TwigTemplate_1b1c12d186ff9297c8fff80a9900c0547130dbd6dbbd6844379e3f365d369615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:provider:show.html.twig", 1);
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
        $__internal_3d8957a1abe35d243ffdae606869072aed2a43e10cf0d641339cef08020dc498 = $this->env->getExtension("native_profiler");
        $__internal_3d8957a1abe35d243ffdae606869072aed2a43e10cf0d641339cef08020dc498->enter($__internal_3d8957a1abe35d243ffdae606869072aed2a43e10cf0d641339cef08020dc498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:provider:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d8957a1abe35d243ffdae606869072aed2a43e10cf0d641339cef08020dc498->leave($__internal_3d8957a1abe35d243ffdae606869072aed2a43e10cf0d641339cef08020dc498_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_deb1b94b5a8e5c7e1a14e96a5c46c9a957d5b739da82e7bf3f8f9bdfaa321510 = $this->env->getExtension("native_profiler");
        $__internal_deb1b94b5a8e5c7e1a14e96a5c46c9a957d5b739da82e7bf3f8f9bdfaa321510->enter($__internal_deb1b94b5a8e5c7e1a14e96a5c46c9a957d5b739da82e7bf3f8f9bdfaa321510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("provider_index");
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_deb1b94b5a8e5c7e1a14e96a5c46c9a957d5b739da82e7bf3f8f9bdfaa321510->leave($__internal_deb1b94b5a8e5c7e1a14e96a5c46c9a957d5b739da82e7bf3f8f9bdfaa321510_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_85d7d2ffb004ab251552cfdf4cd27f57dd91fb5b85dcffc33cf86285fb27ec52 = $this->env->getExtension("native_profiler");
        $__internal_85d7d2ffb004ab251552cfdf4cd27f57dd91fb5b85dcffc33cf86285fb27ec52->enter($__internal_85d7d2ffb004ab251552cfdf4cd27f57dd91fb5b85dcffc33cf86285fb27ec52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.show.name"), "html", null, true);
        
        $__internal_85d7d2ffb004ab251552cfdf4cd27f57dd91fb5b85dcffc33cf86285fb27ec52->leave($__internal_85d7d2ffb004ab251552cfdf4cd27f57dd91fb5b85dcffc33cf86285fb27ec52_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdb5e3b78ab777eb84da778f311db583dd664e63f7651d414b8b71639e3d382a = $this->env->getExtension("native_profiler");
        $__internal_fdb5e3b78ab777eb84da778f311db583dd664e63f7651d414b8b71639e3d382a->enter($__internal_fdb5e3b78ab777eb84da778f311db583dd664e63f7651d414b8b71639e3d382a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"col-sm-6\">
  <div class=\"tab-content\">
    <div class=\"tab-pane active\" id=\"tab-about\">
        <div class=\"panel panel-primary\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
            <div class=\"panel-heading\">
                <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.show.name"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.socialReason"), "html", null, true);
        echo "</th>
                                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "socialReason", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.phone"), "html", null, true);
        echo "</th>
                                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "phone", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.address"), "html", null, true);
        echo "</th>
                                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "address", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.fax"), "html", null, true);
        echo "</th>
                                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "fax", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.email"), "html", null, true);
        echo "</th>
                                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "email", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.contact"), "html", null, true);
        echo "</th>
                                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "contact", array()), "html", null, true);
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
            <div class=\"panel panel-primary\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                <div class=\"panel-heading\">
                    <h2>";
        // line 59
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
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.id"), "html", null, true);
        echo "</th>
                                <td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "activityDomain", array()), "id", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.activityDomain"), "html", null, true);
        echo "</th>
                                <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "activityDomain", array()), "designation", array()), "html", null, true);
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
            <div class=\"panel panel-primary\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                <div class=\"panel-heading\">
                    <h2>";
        // line 88
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
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "user", array()), "email", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.role"), "html", null, true);
        echo "</th>
                                <td>";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "user", array()), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        
        $__internal_fdb5e3b78ab777eb84da778f311db583dd664e63f7651d414b8b71639e3d382a->leave($__internal_fdb5e3b78ab777eb84da778f311db583dd664e63f7651d414b8b71639e3d382a_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:provider:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 105,  241 => 104,  235 => 101,  231 => 100,  225 => 97,  221 => 96,  210 => 88,  191 => 72,  187 => 71,  181 => 68,  177 => 67,  166 => 59,  147 => 43,  143 => 42,  137 => 39,  133 => 38,  127 => 35,  123 => 34,  117 => 31,  113 => 30,  107 => 27,  103 => 26,  97 => 23,  93 => 22,  82 => 14,  75 => 9,  69 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('provider_index') }}">*/
/*        {{ 'provider.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*      {% block breadcrumbActive %}{{ 'provider.show.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div class="col-sm-6">*/
/*   <div class="tab-content">*/
/*     <div class="tab-pane active" id="tab-about">*/
/*         <div class="panel panel-primary" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*             <div class="panel-heading">*/
/*                 <h2>{{ 'provider.show.name'|trans }}</h2>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <div class="about-area">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table">*/
/*                             <tbody>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.socialReason'|trans }}</th>*/
/*                                 <td>{{ provider.socialReason }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.phone'|trans }}</th>*/
/*                                 <td>{{ provider.phone }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.address'|trans }}</th>*/
/*                                 <td>{{ provider.address }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.fax'|trans }}</th>*/
/*                                 <td>{{ provider.fax }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.email'|trans }}</th>*/
/*                                 <td>{{ provider.email }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.contact'|trans }}</th>*/
/*                                 <td>{{ provider.contact }}</td>*/
/*                               </tr>*/
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
/*             <div class="panel panel-primary" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                 <div class="panel-heading">*/
/*                     <h2>{{ 'family.show.name'|trans }}</h2>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="about-area">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table">*/
/*                             <tbody>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.id'|trans }}</th>*/
/*                                 <td>{{ provider.activityDomain.id }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.activityDomain'|trans }}</th>*/
/*                                 <td>{{ provider.activityDomain.designation }}</td>*/
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
/*             <div class="panel panel-primary" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
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
/*                                 <td>{{ provider.user.username }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                 <td>{{ provider.user.email }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.role'|trans }}</th>*/
/*                                 <td>{% for val in provider.user.roles %}{{ val }}{% endfor %}</td>*/
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
