<?php

/* ISETSOMagazineBundle:familydurable:index.html.twig */
class __TwigTemplate_6ff6e57f28a931b0574234fbc0164e5db710a2de4f0f989b15d5325888d6e954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:familydurable:index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_6d63dce9d823d0c0c4cc50b8986259b2c9edd175dc03c82caba8f93bf2f661f5 = $this->env->getExtension("native_profiler");
        $__internal_6d63dce9d823d0c0c4cc50b8986259b2c9edd175dc03c82caba8f93bf2f661f5->enter($__internal_6d63dce9d823d0c0c4cc50b8986259b2c9edd175dc03c82caba8f93bf2f661f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:familydurable:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d63dce9d823d0c0c4cc50b8986259b2c9edd175dc03c82caba8f93bf2f661f5->leave($__internal_6d63dce9d823d0c0c4cc50b8986259b2c9edd175dc03c82caba8f93bf2f661f5_prof);

    }

    // line 3
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_c1c265c56689c0c2e26855ad5643107859fb4f2412369f18e10019ff2a32ade8 = $this->env->getExtension("native_profiler");
        $__internal_c1c265c56689c0c2e26855ad5643107859fb4f2412369f18e10019ff2a32ade8->enter($__internal_c1c265c56689c0c2e26855ad5643107859fb4f2412369f18e10019ff2a32ade8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.list.name"), "html", null, true);
        
        $__internal_c1c265c56689c0c2e26855ad5643107859fb4f2412369f18e10019ff2a32ade8->leave($__internal_c1c265c56689c0c2e26855ad5643107859fb4f2412369f18e10019ff2a32ade8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2644c59607e1c6ddfc4e42722134b77b4d0480fe858c8f57576e3c61a698f6c2 = $this->env->getExtension("native_profiler");
        $__internal_2644c59607e1c6ddfc4e42722134b77b4d0480fe858c8f57576e3c61a698f6c2->enter($__internal_2644c59607e1c6ddfc4e42722134b77b4d0480fe858c8f57576e3c61a698f6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"pull-right\">
        <a class=\"btn btn-success\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("familydurable_new");
        echo "\">
            <i class=\"fa fa-plus\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.new.submit"), "html", null, true);
        echo "
        </a>
    </div>
    </br></br>
<div data-widget-group=\"group1\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2><i class=\"fa fa-list\"></i> ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.list.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\">
                        <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-inline")));
        // line 22
        echo "

                                <div class=\"input-group\">
                                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => $this->env->getExtension('translator')->trans("family.list.search"))));
        // line 31
        echo "
                                </div>
                                <div class=\"input-group\">
                                    <button type=\"submit\" class=\"btn btn-primary-alt\"><i class=\"ti ti-search\"></i></button>
                                </div>
                            ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <i class=\"separator\"></i>
                        <div class=\"panel-heading pull-left\">
                            <label class=\"panel-ctrls-center\">
                               ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "getTotalItemCount", array()), "html", null, true);
        echo " 
                               Resultat Trouver
                            </label>
                        </div>
                    </div>
                </div>
                <div class=\"panel-body no-padding table-responsive\">
                    <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                            <tr class=\"animated fadeInLeft\">
                                <th class=\"text text-capitalize\">
                                    ";
        // line 52
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), $this->env->getExtension('translator')->trans("magazine.field.id"), "f.id");
        echo "
                                    ";
        // line 53
        if ($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "isSorted", array(0 => "f.id"), "method")) {
            // line 54
            echo "                                        
                                        ";
            // line 55
            if (($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "direction", array()) == "asc")) {
                // line 56
                echo "                                            <span class=\"ti ti-angle-up pull-right\"></span>
                                        ";
            } else {
                // line 58
                echo "                                            <span class=\"ti ti-angle-down pull-right\"></span>
                                        ";
            }
            // line 60
            echo "                                    ";
        } else {
            // line 61
            echo "                                        <i class='ti ti-more pull-right'></i>
                                    ";
        }
        // line 63
        echo "                                </th>
                                <th class=\"text text-capitalize\">
                                    ";
        // line 65
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), $this->env->getExtension('translator')->trans("magazine.field.designation"), "f.designation");
        echo "
                                    ";
        // line 66
        if ($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "isSorted", array(0 => "f.designation"), "method")) {
            // line 67
            echo "                                        
                                        ";
            // line 68
            if (($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "direction", array()) == "asc")) {
                // line 69
                echo "                                            <span class=\"ti ti-angle-up pull-right\"></span>
                                        ";
            } else {
                // line 71
                echo "                                            <span class=\"ti ti-angle-down pull-right\"></span>
                                        ";
            }
            // line 73
            echo "                                    ";
        } else {
            // line 74
            echo "                                        <i class='ti ti-more pull-right'></i>
                                    ";
        }
        // line 76
        echo "                                </th>
                                <th class=\"text text-capitalize\">
                                    ";
        // line 78
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), $this->env->getExtension('translator')->trans("magazine.field.description"), "f.description");
        echo "
                                    ";
        // line 79
        if ($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "isSorted", array(0 => "f.description"), "method")) {
            // line 80
            echo "                                        
                                        ";
            // line 81
            if (($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "direction", array()) == "asc")) {
                // line 82
                echo "                                            <span class=\"ti ti-angle-up pull-right\"></span>
                                        ";
            } else {
                // line 84
                echo "                                            <span class=\"ti ti-angle-down pull-right\"></span>
                                        ";
            }
            // line 86
            echo "                                    ";
        } else {
            // line 87
            echo "                                        <i class='ti ti-more pull-right'></i>
                                    ";
        }
        // line 89
        echo "                                </th>
                                <th class=\"text text-capitalize\">
                                    ";
        // line 91
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                                    ";
        // line 92
        if ($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "isSorted", array(0 => "u.username"), "method")) {
            // line 93
            echo "                                        
                                        ";
            // line 94
            if (($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "direction", array()) == "asc")) {
                // line 95
                echo "                                            <span class=\"ti ti-angle-up pull-right\"></span>
                                        ";
            } else {
                // line 97
                echo "                                            <span class=\"ti ti-angle-down pull-right\"></span>
                                        ";
            }
            // line 99
            echo "                                    ";
        } else {
            // line 100
            echo "                                        <i class='ti ti-more pull-right'></i>
                                    ";
        }
        // line 102
        echo "                                </th>
                                <th>Action</th>
                            </tr>
                        </thead> 
                        <tbody>
                            ";
        // line 107
        if ((twig_length_filter($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families"))) == 0)) {
            // line 108
            echo "                                <td  class=\"text text-capitalize text-danger text-center animated fadeInDown\" colspan=\"5\">
                                    <i class=\"fa fa-exclamation-triangle\"></i>
                                        <b>";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.list.noResultFound"), "html", null, true);
            echo "</b>
                                    
                                 </td>
                                
                            ";
        } else {
            // line 115
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")));
            foreach ($context['_seq'] as $context["_key"] => $context["family"]) {
                // line 116
                echo "                                    <tr class=\"animated fadeInRight\">
                                        <td>";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["family"], "id", array()), "html", null, true);
                echo "</td>
                                        <td class=\"text text-capitalize\">";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["family"], "designation", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["family"], "description", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            ";
                // line 121
                if ((null === $this->getAttribute($context["family"], "user", array()))) {
                    // line 122
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.adminGeneral"), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 124
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["family"], "user", array()), "username", array()), "html", null, true);
                    echo "
                                            ";
                }
                // line 126
                echo "                                        </td>
                                            
                                        <td>
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("familydurable_edit", array("id" => $this->getAttribute($context["family"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a  ";
                // line 131
                echo (((twig_length_filter($this->env, $this->getAttribute($context["family"], "subfamily", array())) != 0)) ? ("disabled=\"\"") : (""));
                echo " href=\"#\" data-box=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["family"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                                <a href=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("familydurable_show", array("id" => $this->getAttribute($context["family"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success-alt\"><i class=\"ti ti-info\"></i></a>
                                            </div>
                                        </td>
                                        <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["family"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("familydurable_delete", array("id" => $this->getAttribute($context["family"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 148
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["family"], "id", array()), array(), "array"), 'widget');
                echo "
                                                                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                        <i class=\"icon-trash\"></i>
                                                                         ";
                // line 151
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                    </button>
                                                                </form>
                                                                <button class=\"btn btn-default btn-lg mb-control-close\">";
                // line 154
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.no"), "html", null, true);
                echo "</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- END MESSAGE BOX-->
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['family'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "                            ";
        }
        // line 164
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 168
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_2644c59607e1c6ddfc4e42722134b77b4d0480fe858c8f57576e3c61a698f6c2->leave($__internal_2644c59607e1c6ddfc4e42722134b77b4d0480fe858c8f57576e3c61a698f6c2_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:familydurable:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 168,  365 => 164,  362 => 163,  347 => 154,  341 => 151,  335 => 148,  330 => 146,  322 => 141,  317 => 139,  311 => 136,  304 => 132,  298 => 131,  294 => 130,  288 => 126,  282 => 124,  276 => 122,  274 => 121,  269 => 119,  265 => 118,  261 => 117,  258 => 116,  253 => 115,  245 => 110,  241 => 108,  239 => 107,  232 => 102,  228 => 100,  225 => 99,  221 => 97,  217 => 95,  215 => 94,  212 => 93,  210 => 92,  206 => 91,  202 => 89,  198 => 87,  195 => 86,  191 => 84,  187 => 82,  185 => 81,  182 => 80,  180 => 79,  176 => 78,  172 => 76,  168 => 74,  165 => 73,  161 => 71,  157 => 69,  155 => 68,  152 => 67,  150 => 66,  146 => 65,  142 => 63,  138 => 61,  135 => 60,  131 => 58,  127 => 56,  125 => 55,  122 => 54,  120 => 53,  116 => 52,  102 => 41,  94 => 36,  87 => 31,  85 => 25,  80 => 22,  78 => 19,  72 => 16,  60 => 7,  56 => 6,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcrumbActive %}{{ 'family.list.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <div class="pull-right">*/
/*         <a class="btn btn-success" href="{{ path('familydurable_new') }}">*/
/*             <i class="fa fa-plus"></i> {{ 'family.new.submit'|trans }}*/
/*         </a>*/
/*     </div>*/
/*     </br></br>*/
/* <div data-widget-group="group1">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'family.list.name'|trans }}</h2>*/
/*                     <div class="panel-ctrls">*/
/*                         <div id="example_filter" class="dataTables_filter pull-right">*/
/*                             {{ form_start(form ,{*/
/*                                 'attr' : { 'class' : 'form-inline' } */
/*                                 */
/*                             }) }}*/
/* */
/*                                 <div class="input-group">*/
/*                                     {{ form_widget(form.search,{*/
/*                                         'attr' : {*/
/*                                             'class' : 'form-control ' ,*/
/*                                             'placeholder' : 'family.list.search'|trans*/
/*                                         } */
/*                                         */
/*                                     }) }}*/
/*                                 </div>*/
/*                                 <div class="input-group">*/
/*                                     <button type="submit" class="btn btn-primary-alt"><i class="ti ti-search"></i></button>*/
/*                                 </div>*/
/*                             {{ form_end(form) }}*/
/*                         </div>*/
/*                         <i class="separator"></i>*/
/*                         <div class="panel-heading pull-left">*/
/*                             <label class="panel-ctrls-center">*/
/*                                {{ families.getTotalItemCount }} */
/*                                Resultat Trouver*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel-body no-padding table-responsive">*/
/*                     <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                         <thead>*/
/*                             <tr class="animated fadeInLeft">*/
/*                                 <th class="text text-capitalize">*/
/*                                     {{ knp_pagination_sortable(families, 'magazine.field.id'|trans , 'f.id') }}*/
/*                                     {% if families.isSorted('f.id') %}*/
/*                                         */
/*                                         {% if  families.direction == 'asc' %}*/
/*                                             <span class="ti ti-angle-up pull-right"></span>*/
/*                                         {% else %}*/
/*                                             <span class="ti ti-angle-down pull-right"></span>*/
/*                                         {% endif %}*/
/*                                     {% else %}*/
/*                                         <i class='ti ti-more pull-right'></i>*/
/*                                     {% endif %}*/
/*                                 </th>*/
/*                                 <th class="text text-capitalize">*/
/*                                     {{ knp_pagination_sortable(families, 'magazine.field.designation'|trans , 'f.designation') }}*/
/*                                     {% if families.isSorted('f.designation') %}*/
/*                                         */
/*                                         {% if  families.direction == 'asc' %}*/
/*                                             <span class="ti ti-angle-up pull-right"></span>*/
/*                                         {% else %}*/
/*                                             <span class="ti ti-angle-down pull-right"></span>*/
/*                                         {% endif %}*/
/*                                     {% else %}*/
/*                                         <i class='ti ti-more pull-right'></i>*/
/*                                     {% endif %}*/
/*                                 </th>*/
/*                                 <th class="text text-capitalize">*/
/*                                     {{ knp_pagination_sortable(families, 'magazine.field.description'|trans, 'f.description') }}*/
/*                                     {% if families.isSorted('f.description') %}*/
/*                                         */
/*                                         {% if  families.direction == 'asc' %}*/
/*                                             <span class="ti ti-angle-up pull-right"></span>*/
/*                                         {% else %}*/
/*                                             <span class="ti ti-angle-down pull-right"></span>*/
/*                                         {% endif %}*/
/*                                     {% else %}*/
/*                                         <i class='ti ti-more pull-right'></i>*/
/*                                     {% endif %}*/
/*                                 </th>*/
/*                                 <th class="text text-capitalize">*/
/*                                     {{ knp_pagination_sortable(families, 'magazine.field.userName'|trans, 'u.username') }}*/
/*                                     {% if families.isSorted('u.username') %}*/
/*                                         */
/*                                         {% if  families.direction == 'asc' %}*/
/*                                             <span class="ti ti-angle-up pull-right"></span>*/
/*                                         {% else %}*/
/*                                             <span class="ti ti-angle-down pull-right"></span>*/
/*                                         {% endif %}*/
/*                                     {% else %}*/
/*                                         <i class='ti ti-more pull-right'></i>*/
/*                                     {% endif %}*/
/*                                 </th>*/
/*                                 <th>Action</th>*/
/*                             </tr>*/
/*                         </thead> */
/*                         <tbody>*/
/*                             {% if families|length == 0 %}*/
/*                                 <td  class="text text-capitalize text-danger text-center animated fadeInDown" colspan="5">*/
/*                                     <i class="fa fa-exclamation-triangle"></i>*/
/*                                         <b>{{ 'family.list.noResultFound'|trans }}</b>*/
/*                                     */
/*                                  </td>*/
/*                                 */
/*                             {% else %}*/
/*                                 {% for family in families %}*/
/*                                     <tr class="animated fadeInRight">*/
/*                                         <td>{{ family.id }}</td>*/
/*                                         <td class="text text-capitalize">{{ family.designation }}</td>*/
/*                                         <td>{{ family.description }}</td>*/
/*                                         <td>*/
/*                                             {% if family.user is null %}*/
/*                                                 {{ 'magazine.field.adminGeneral'|trans }}*/
/*                                             {% else %}*/
/*                                                 {{ family.user.username }}*/
/*                                             {% endif %}*/
/*                                         </td>*/
/*                                             */
/*                                         <td>*/
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('familydurable_edit' ,{ 'id' : family.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                 <a  {{ family.subfamily|length != 0 ? 'disabled=""' : "" }} href="#" data-box="#{{ family.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                                 <a href="{{ path('familydurable_show' ,{ 'id' : family.id }) }}" class="btn btn-success-alt"><i class="ti ti-info"></i></a>*/
/*                                             </div>*/
/*                                         </td>*/
/*                                         <!-- MESSAGE BOX-->*/
/*                                             <div class="message-box animated fadeIn" data-sound="alert" id="{{family.id}}">*/
/*                                                 <div class="mb-container">*/
/*                                                     <div class="mb-middle">*/
/*                                                         <div class="mb-title"><span class="ti ti-trash"></span> {{ 'family.delete.name'|trans }} ?</div>*/
/*                                                         <div class="mb-content">*/
/*                                                             <p>{{ 'family.delete.message'|trans }}</p>                    */
/*                                                             */
/*                                                         </div>*/
/*                                                         <div class="mb-footer">*/
/*                                                             <div class="pull-right">*/
/*                                                                 <form action="{{ path('familydurable_delete', { 'id': family.id }) }}" method="post">*/
/*                                                                     <input type="hidden" name="_method" value="DELETE" />*/
/*                                                                     {{ form_widget(deleteForms[family.id]) }}*/
/*                                                                     <button type="submit" class="btn btn-danger btn-lg">*/
/*                                                                         <i class="icon-trash"></i>*/
/*                                                                          {{ 'messageBox.yes'|trans }}*/
/*                                                                     </button>*/
/*                                                                 </form>*/
/*                                                                 <button class="btn btn-default btn-lg mb-control-close">{{ 'messageBox.no'|trans }}</button>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         <!-- END MESSAGE BOX-->*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     {{ knp_pagination_render(families) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %} */
