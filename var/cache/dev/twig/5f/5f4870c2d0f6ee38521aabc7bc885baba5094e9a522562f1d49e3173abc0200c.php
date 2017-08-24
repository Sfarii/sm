<?php

/* ISETSOUserBundle:usergroup:index.html.twig */
class __TwigTemplate_e71275ccf73d806beec647ed9019e58c7dc2ef7f330951510478622ee1cadb27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOUserBundle:usergroup:index.html.twig", 1);
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
        $__internal_9775da93abf522f9f9a62d6500e603a97da3c579cdbf51e2f7fdb928361e6165 = $this->env->getExtension("native_profiler");
        $__internal_9775da93abf522f9f9a62d6500e603a97da3c579cdbf51e2f7fdb928361e6165->enter($__internal_9775da93abf522f9f9a62d6500e603a97da3c579cdbf51e2f7fdb928361e6165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:usergroup:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9775da93abf522f9f9a62d6500e603a97da3c579cdbf51e2f7fdb928361e6165->leave($__internal_9775da93abf522f9f9a62d6500e603a97da3c579cdbf51e2f7fdb928361e6165_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_1699faa1127e9a463a685e330a24c5444269c5d44ee4c633e31d4680275fe891 = $this->env->getExtension("native_profiler");
        $__internal_1699faa1127e9a463a685e330a24c5444269c5d44ee4c633e31d4680275fe891->enter($__internal_1699faa1127e9a463a685e330a24c5444269c5d44ee4c633e31d4680275fe891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.edit.name"), "html", null, true);
        
        $__internal_1699faa1127e9a463a685e330a24c5444269c5d44ee4c633e31d4680275fe891->leave($__internal_1699faa1127e9a463a685e330a24c5444269c5d44ee4c633e31d4680275fe891_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f46a243cd3c4bd21710281448458db8b480dd651ba17a80d5b64c37e60d5b4e = $this->env->getExtension("native_profiler");
        $__internal_9f46a243cd3c4bd21710281448458db8b480dd651ba17a80d5b64c37e60d5b4e->enter($__internal_9f46a243cd3c4bd21710281448458db8b480dd651ba17a80d5b64c37e60d5b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"pull-right\">
        <a class=\"btn btn-success\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("usergroup_new");
        echo "\">
                <i class=\"fa fa-plus\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.new.submit"), "html", null, true);
        echo "
            </a>    </div>
    </br></br>
<div data-widget-group=\"group1\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2><i class=\"fa fa-list\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.list.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\">
                        <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                             ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-inline")));
        // line 20
        echo "

                                <div class=\"input-group\">
                                     ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => $this->env->getExtension('translator')->trans("family.list.search"))));
        // line 29
        echo "
                                </div>
                                <div class=\"input-group\">
                                    <button type=\"submit\" class=\"btn btn-primary-alt\"><i class=\"ti ti-search\"></i></button>
                                </div>
                             ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <i class=\"separator\"></i>
                        <div class=\"panel-heading pull-left\">
                            <label class=\"panel-ctrls-center\">
                               ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "getTotalItemCount", array()), "html", null, true);
        echo "
                               ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.list.resultFound"), "html", null, true);
        echo "
                            </label>
                        </div>
                    </div>
                </div>
                <div class=\"panel-body no-padding\">
                    <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                            <tr>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 50
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.id"), "f.id");
        echo "
                                        ";
        // line 51
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 52
            echo "                                            
                                            ";
            // line 53
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 54
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 56
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 58
            echo "                                        ";
        } else {
            // line 59
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 61
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 63
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.groupName"), "f.name");
        echo "
                                        ";
        // line 64
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 65
            echo "                                            
                                            ";
            // line 66
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 67
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 69
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 71
            echo "                                        ";
        } else {
            // line 72
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 74
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 76
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.role"), "f.roles");
        echo "
                                        ";
        // line 77
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 78
            echo "                                            
                                            ";
            // line 79
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 80
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 82
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 84
            echo "                                        ";
        } else {
            // line 85
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 87
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 89
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.permission"), "f.permission");
        echo "
                                        ";
        // line 90
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.permission"), "method")) {
            // line 91
            echo "                                            
                                            ";
            // line 92
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 93
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 95
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 97
            echo "                                        ";
        } else {
            // line 98
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 100
        echo "                                    </th>                                
                                    
                                <th class=\"text text-capitalize text-primary\"> ";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 106
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                <td  class=\"text text-capitalize text-danger text-center\" colspan=\"5\">
                                    
                                    <p  style=\"margin-top: 1%;\">
                                        <i class=\"fa fa-exclamation-triangle\"></i> <b>";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.list.noResultFound"), "html", null, true);
            echo "</b>
                                    </p>
                                 </td>
                                    
                                ";
        } else {
            // line 115
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["userGroup"]) {
                // line 116
                echo "                                    <tr>
                                        <td>";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["userGroup"], "id", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["userGroup"], "name", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 119
                if ($this->getAttribute($context["userGroup"], "roles", array())) {
                    // line 120
                    echo "                                                    
                                                ";
                    // line 121
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["userGroup"], "roles", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["roles"]) {
                        // line 122
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["roles"]), "html", null, true);
                        echo "
                                                    <br>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roles'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    echo "                                            ";
                }
                // line 126
                echo "                                        </td>  
                                        
                                            <td>";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["userGroup"], "permission", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 129
                    echo "
                                                ";
                    // line 130
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["permission"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["permissions"]) {
                        // line 131
                        echo "                                                    
                                                    ";
                        // line 132
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["permissions"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["permi"]) {
                            // line 133
                            echo "                                                        | ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, $context["permi"])), "html", null, true);
                            echo " 
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permi'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 135
                        echo "                                                    | 
                                                    <br>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permissions'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 138
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "                                        </td>
                                                                             

                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usergroup_edit", array("id" => $this->getAttribute($context["userGroup"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a ";
                // line 146
                echo (((twig_length_filter($this->env, $this->getAttribute($context["userGroup"], "users", array())) != 0)) ? ("disabled=\"\"") : (""));
                echo " href=\"#\" data-box=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["userGroup"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                                
                                            </div>
                                        </td>                                    <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["userGroup"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 155
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("usergroup.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usergroup_delete", array("id" => $this->getAttribute($context["userGroup"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 162
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["userGroup"], "id", array()), array(), "array"), 'widget');
                echo " 
                                                                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                        <i class=\"icon-trash\"></i>
                                                                         ";
                // line 165
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                    </button>
                                                                </form>
                                                                <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                    ";
                // line 169
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "                            ";
        }
        // line 179
        echo "                         </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 183
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_9f46a243cd3c4bd21710281448458db8b480dd651ba17a80d5b64c37e60d5b4e->leave($__internal_9f46a243cd3c4bd21710281448458db8b480dd651ba17a80d5b64c37e60d5b4e_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:usergroup:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 183,  419 => 179,  416 => 178,  401 => 169,  394 => 165,  388 => 162,  383 => 160,  375 => 155,  370 => 153,  364 => 150,  355 => 146,  351 => 145,  343 => 139,  337 => 138,  329 => 135,  320 => 133,  316 => 132,  313 => 131,  309 => 130,  306 => 129,  302 => 128,  298 => 126,  295 => 125,  285 => 122,  281 => 121,  278 => 120,  276 => 119,  272 => 118,  268 => 117,  265 => 116,  260 => 115,  252 => 110,  245 => 106,  238 => 102,  234 => 100,  230 => 98,  227 => 97,  223 => 95,  219 => 93,  217 => 92,  214 => 91,  212 => 90,  208 => 89,  204 => 87,  200 => 85,  197 => 84,  193 => 82,  189 => 80,  187 => 79,  184 => 78,  182 => 77,  178 => 76,  174 => 74,  170 => 72,  167 => 71,  163 => 69,  159 => 67,  157 => 66,  154 => 65,  152 => 64,  148 => 63,  144 => 61,  140 => 59,  137 => 58,  133 => 56,  129 => 54,  127 => 53,  124 => 52,  122 => 51,  118 => 50,  105 => 40,  101 => 39,  93 => 34,  86 => 29,  84 => 23,  79 => 20,  77 => 17,  71 => 14,  60 => 6,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*  {% block breadcrumbActive %}{{ 'usergroup.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <div class="pull-right">*/
/*         <a class="btn btn-success" href="{{ path('usergroup_new') }}">*/
/*                 <i class="fa fa-plus"></i> {{ 'usergroup.new.submit'|trans }}*/
/*             </a>    </div>*/
/*     </br></br>*/
/* <div data-widget-group="group1">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'usergroup.list.name'|trans }}</h2>*/
/*                     <div class="panel-ctrls">*/
/*                         <div id="example_filter" class="dataTables_filter pull-right">*/
/*                              {{ form_start(form ,{*/
/*                                 'attr' : { 'class' : 'form-inline' } */
/*                                 */
/*                             }) }}*/
/* */
/*                                 <div class="input-group">*/
/*                                      {{ form_widget(form.search,{*/
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
/*                              {{ form_end(form) }}*/
/*                         </div>*/
/*                         <i class="separator"></i>*/
/*                         <div class="panel-heading pull-left">*/
/*                             <label class="panel-ctrls-center">*/
/*                                {{ padding.getTotalItemCount }}*/
/*                                {{ 'usergroup.list.resultFound'|trans }}*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel-body no-padding">*/
/*                     <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.id'|trans , 'f.id') }}*/
/*                                         {% if padding.isSorted('f.id') %}*/
/*                                             */
/*                                             {% if  padding.direction == 'asc' %}*/
/*                                                 <span class='ti ti-angle-up pull-right'></span>*/
/*                                             {% else %}*/
/*                                                 <span class='ti ti-angle-down pull-right'></span>*/
/*                                             {% endif %}*/
/*                                         {% else %}*/
/*                                             <i class='ti ti-more pull-right'></i>*/
/*                                         {% endif %}*/
/*                                     </th>*/
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.groupName'|trans , 'f.name') }}*/
/*                                         {% if padding.isSorted('f.id') %}*/
/*                                             */
/*                                             {% if  padding.direction == 'asc' %}*/
/*                                                 <span class='ti ti-angle-up pull-right'></span>*/
/*                                             {% else %}*/
/*                                                 <span class='ti ti-angle-down pull-right'></span>*/
/*                                             {% endif %}*/
/*                                         {% else %}*/
/*                                             <i class='ti ti-more pull-right'></i>*/
/*                                         {% endif %}*/
/*                                     </th>*/
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.role'|trans , 'f.roles') }}*/
/*                                         {% if padding.isSorted('f.id') %}*/
/*                                             */
/*                                             {% if  padding.direction == 'asc' %}*/
/*                                                 <span class='ti ti-angle-up pull-right'></span>*/
/*                                             {% else %}*/
/*                                                 <span class='ti ti-angle-down pull-right'></span>*/
/*                                             {% endif %}*/
/*                                         {% else %}*/
/*                                             <i class='ti ti-more pull-right'></i>*/
/*                                         {% endif %}*/
/*                                     </th>*/
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.permission'|trans , 'f.permission') }}*/
/*                                         {% if padding.isSorted('f.permission') %}*/
/*                                             */
/*                                             {% if  padding.direction == 'asc' %}*/
/*                                                 <span class='ti ti-angle-up pull-right'></span>*/
/*                                             {% else %}*/
/*                                                 <span class='ti ti-angle-down pull-right'></span>*/
/*                                             {% endif %}*/
/*                                         {% else %}*/
/*                                             <i class='ti ti-more pull-right'></i>*/
/*                                         {% endif %}*/
/*                                     </th>                                */
/*                                     */
/*                                 <th class="text text-capitalize text-primary"> {{ 'magazine.action'|trans }} </th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                              {% if padding|length == 0 %} */
/*                                 <td  class="text text-capitalize text-danger text-center" colspan="5">*/
/*                                     */
/*                                     <p  style="margin-top: 1%;">*/
/*                                         <i class="fa fa-exclamation-triangle"></i> <b>{{ 'usergroup.list.noResultFound'|trans }}</b>*/
/*                                     </p>*/
/*                                  </td>*/
/*                                     */
/*                                 {% else %}*/
/*                                 {% for userGroup in padding %}*/
/*                                     <tr>*/
/*                                         <td>{{ userGroup.id }}</td>*/
/*                                         <td>{{ userGroup.name }}</td>*/
/*                                         <td>{% if userGroup.roles %}*/
/*                                                     */
/*                                                 {% for roles in userGroup.roles %}*/
/*                                                     {{ roles|trans }}*/
/*                                                     <br>*/
/*                                                 {% endfor %}*/
/*                                             {% endif %}*/
/*                                         </td>  */
/*                                         */
/*                                             <td>{% for permission in userGroup.permission %}*/
/* */
/*                                                 {% for permissions in permission %}*/
/*                                                     */
/*                                                     {% for permi in permissions %}*/
/*                                                         | {{ permi|lower|trans }} */
/*                                                     {% endfor %}*/
/*                                                     | */
/*                                                     <br>*/
/*                                                 {% endfor %}*/
/*                                             {% endfor %}*/
/*                                         </td>*/
/*                                                                              */
/* */
/*                                         <td>*/
/*                                             */
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('usergroup_edit', { 'id': userGroup.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                 <a {{ userGroup.users|length != 0 ? 'disabled=""' : "" }} href="#" data-box="#{{ userGroup.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                                 */
/*                                             </div>*/
/*                                         </td>                                    <!-- MESSAGE BOX-->*/
/*                                             <div class="message-box animated fadeIn" data-sound="alert" id="{{ userGroup.id }}">*/
/*                                                 <div class="mb-container">*/
/*                                                     <div class="mb-middle">*/
/*                                                         <div class="mb-title"><span class="ti ti-trash"></span> {{ 'usergroup.delete.name'|trans }} ?</div>*/
/*                                                         <div class="mb-content">*/
/*                                                             <p>{{ 'usergroup.delete.message'|trans }}</p>                    */
/*                                                             */
/*                                                         </div>*/
/*                                                         <div class="mb-footer">*/
/*                                                             <div class="pull-right">*/
/*                                                                 <form action="{{ path('usergroup_delete', { 'id': userGroup.id }) }}" method="post">*/
/*                                                                     <input type="hidden" name="_method" value="DELETE" />*/
/*                                                                     {{ form_widget(deleteForms[ userGroup.id ]) }} */
/*                                                                     <button type="submit" class="btn btn-danger btn-lg">*/
/*                                                                         <i class="icon-trash"></i>*/
/*                                                                          {{ 'messageBox.yes'|trans }}*/
/*                                                                     </button>*/
/*                                                                 </form>*/
/*                                                                 <button class="btn btn-default btn-lg mb-control-close">*/
/*                                                                     {{ 'messageBox.no'|trans }}</button>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         <!-- END MESSAGE BOX-->*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                          </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     {{ knp_pagination_render(padding) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
