<?php

/* ISETSOMagazineBundle:articledurable:index.html.twig */
class __TwigTemplate_1220c14f533e3919f12f5d5168d14fff1f25fe27dfde63208c70240423cf7f0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:articledurable:index.html.twig", 1);
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
        $__internal_4abd6494328d47a219fe622d84ae0a1e028e8ff5d293f312dc6d1edb067190d2 = $this->env->getExtension("native_profiler");
        $__internal_4abd6494328d47a219fe622d84ae0a1e028e8ff5d293f312dc6d1edb067190d2->enter($__internal_4abd6494328d47a219fe622d84ae0a1e028e8ff5d293f312dc6d1edb067190d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:articledurable:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4abd6494328d47a219fe622d84ae0a1e028e8ff5d293f312dc6d1edb067190d2->leave($__internal_4abd6494328d47a219fe622d84ae0a1e028e8ff5d293f312dc6d1edb067190d2_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_482c9e17461212e887eb087d91622418361d51d97ed06279d73c7ee2d1a4607d = $this->env->getExtension("native_profiler");
        $__internal_482c9e17461212e887eb087d91622418361d51d97ed06279d73c7ee2d1a4607d->enter($__internal_482c9e17461212e887eb087d91622418361d51d97ed06279d73c7ee2d1a4607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articledurable.list.name"), "html", null, true);
        
        $__internal_482c9e17461212e887eb087d91622418361d51d97ed06279d73c7ee2d1a4607d->leave($__internal_482c9e17461212e887eb087d91622418361d51d97ed06279d73c7ee2d1a4607d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b0dbc0f7e8d505cd9d7f03707c9d038f501f51ae39bf9dc10fc9b8561f3349e = $this->env->getExtension("native_profiler");
        $__internal_9b0dbc0f7e8d505cd9d7f03707c9d038f501f51ae39bf9dc10fc9b8561f3349e->enter($__internal_9b0dbc0f7e8d505cd9d7f03707c9d038f501f51ae39bf9dc10fc9b8561f3349e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"pull-right\">
        <a class=\"btn btn-success\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("articledurable_new");
        echo "\">
                <i class=\"fa fa-plus\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articledurable.new.submit"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articledurable.list.name"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articledurable.list.resultFound"), "html", null, true);
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.designation"), "f.designation");
        echo "
                                        ";
        // line 64
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.designation"), "method")) {
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.garenti"), "f.garenti");
        echo "
                                        ";
        // line 77
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.garenti"), "method")) {
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                                        ";
        // line 90
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "u.username"), "method")) {
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
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 105
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                    <td  class=\"text text-capitalize text-danger text-center\" colspan=\"6\">
                                        <p style=\"margin-top: 1%;\">
                                        <i class=\"fa fa-exclamation-triangle\"></i> <b>";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articledurable.list.noResultFound"), "html", null, true);
            echo "</b>
                                    </p>
                                     </td>
                                    
                                ";
        } else {
            // line 113
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["articleDurable"]) {
                // line 114
                echo "                                    <tr>
                                        <td>";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleDurable"], "id", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleDurable"], "designation", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleDurable"], "garenti", array()), "html", null, true);
                echo "</td>                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["articleDurable"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articledurable_edit", array("id" => $this->getAttribute($context["articleDurable"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a ";
                // line 122
                echo (((twig_length_filter($this->env, $this->getAttribute($context["articleDurable"], "supportingDocuments", array())) != 0)) ? ("disabled=\"\"") : (""));
                echo " href=\"#\" data-box=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleDurable"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                                <a href=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articledurable_show", array("id" => $this->getAttribute($context["articleDurable"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success-alt\"><i class=\"ti ti-info\"></i></a>
                                            </div>
                                        </td>                                    <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleDurable"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 129
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articledurable.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articledurable.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articledurable_delete", array("id" => $this->getAttribute($context["articleDurable"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 138
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["articleDurable"], "id", array()), array(), "array"), 'widget');
                echo " 
                                                                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                        <i class=\"icon-trash\"></i>
                                                                         ";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                    </button>
                                                                </form>
                                                                <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                    ";
                // line 145
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articleDurable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "                            ";
        }
        // line 155
        echo "                         </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 159
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_9b0dbc0f7e8d505cd9d7f03707c9d038f501f51ae39bf9dc10fc9b8561f3349e->leave($__internal_9b0dbc0f7e8d505cd9d7f03707c9d038f501f51ae39bf9dc10fc9b8561f3349e_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:articledurable:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 159,  354 => 155,  351 => 154,  336 => 145,  329 => 141,  323 => 138,  318 => 136,  310 => 131,  305 => 129,  299 => 126,  293 => 123,  287 => 122,  283 => 121,  274 => 117,  270 => 116,  266 => 115,  263 => 114,  258 => 113,  250 => 108,  244 => 105,  237 => 101,  234 => 100,  230 => 98,  227 => 97,  223 => 95,  219 => 93,  217 => 92,  214 => 91,  212 => 90,  208 => 89,  204 => 87,  200 => 85,  197 => 84,  193 => 82,  189 => 80,  187 => 79,  184 => 78,  182 => 77,  178 => 76,  174 => 74,  170 => 72,  167 => 71,  163 => 69,  159 => 67,  157 => 66,  154 => 65,  152 => 64,  148 => 63,  144 => 61,  140 => 59,  137 => 58,  133 => 56,  129 => 54,  127 => 53,  124 => 52,  122 => 51,  118 => 50,  105 => 40,  101 => 39,  93 => 34,  86 => 29,  84 => 23,  79 => 20,  77 => 17,  71 => 14,  60 => 6,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*  {% block breadcrumbActive %}{{ 'articledurable.list.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <div class="pull-right">*/
/*         <a class="btn btn-success" href="{{ path('articledurable_new') }}">*/
/*                 <i class="fa fa-plus"></i> {{ 'articledurable.new.submit'|trans }}*/
/*             </a>    </div>*/
/*     </br></br>*/
/* <div data-widget-group="group1">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'articledurable.list.name'|trans }}</h2>*/
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
/*                                {{ 'articledurable.list.resultFound'|trans }}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.designation'|trans , 'f.designation') }}*/
/*                                         {% if padding.isSorted('f.designation') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.garenti'|trans , 'f.garenti') }}*/
/*                                         {% if padding.isSorted('f.garenti') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.userName'|trans , 'u.username') }}*/
/*                                         {% if padding.isSorted('u.username') %}*/
/*                                             */
/*                                             {% if  padding.direction == 'asc' %}*/
/*                                                 <span class='ti ti-angle-up pull-right'></span>*/
/*                                             {% else %}*/
/*                                                 <span class='ti ti-angle-down pull-right'></span>*/
/*                                             {% endif %}*/
/*                                         {% else %}*/
/*                                             <i class='ti ti-more pull-right'></i>*/
/*                                         {% endif %}*/
/*                                     </th> */
/*                                 <th class="text text-capitalize text-primary"> {{ 'magazine.action'|trans }} </th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                              {% if padding|length == 0 %} */
/*                                     <td  class="text text-capitalize text-danger text-center" colspan="6">*/
/*                                         <p style="margin-top: 1%;">*/
/*                                         <i class="fa fa-exclamation-triangle"></i> <b>{{ 'articledurable.list.noResultFound'|trans }}</b>*/
/*                                     </p>*/
/*                                      </td>*/
/*                                     */
/*                                 {% else %}*/
/*                                 {% for articleDurable in padding %}*/
/*                                     <tr>*/
/*                                         <td>{{ articleDurable.id }}</td>*/
/*                                         <td>{{ articleDurable.designation }}</td>*/
/*                                         <td>{{ articleDurable.garenti }}</td>                                        <td>{{ articleDurable.user.username }}</td>*/
/*                                         <td>*/
/*                                             */
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('articledurable_edit', { 'id': articleDurable.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                 <a {{ articleDurable.supportingDocuments|length != 0 ? 'disabled=""' : "" }} href="#" data-box="#{{ articleDurable.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                                 <a href="{{ path('articledurable_show', { 'id': articleDurable.id }) }}" class="btn btn-success-alt"><i class="ti ti-info"></i></a>*/
/*                                             </div>*/
/*                                         </td>                                    <!-- MESSAGE BOX-->*/
/*                                             <div class="message-box animated fadeIn" data-sound="alert" id="{{ articleDurable.id }}">*/
/*                                                 <div class="mb-container">*/
/*                                                     <div class="mb-middle">*/
/*                                                         <div class="mb-title"><span class="ti ti-trash"></span> {{ 'articledurable.delete.name'|trans }} ?</div>*/
/*                                                         <div class="mb-content">*/
/*                                                             <p>{{ 'articledurable.delete.message'|trans }}</p>                    */
/*                                                             */
/*                                                         </div>*/
/*                                                         <div class="mb-footer">*/
/*                                                             <div class="pull-right">*/
/*                                                                 <form action="{{ path('articledurable_delete', { 'id': articleDurable.id }) }}" method="post">*/
/*                                                                     <input type="hidden" name="_method" value="DELETE" />*/
/*                                                                     {{ form_widget(deleteForms[ articleDurable.id ]) }} */
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
