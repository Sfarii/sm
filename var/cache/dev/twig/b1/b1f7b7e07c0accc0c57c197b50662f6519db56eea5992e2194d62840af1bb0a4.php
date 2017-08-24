<?php

/* ISETSOMagazineBundle:local:index.html.twig */
class __TwigTemplate_8a8c2457bcb94fbb464372c4cd9d1f9f72079c4eb2732ae9fb00f900ff541718 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:local:index.html.twig", 1);
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
        $__internal_9dabea3196fb680edd3bb33c50237bb56459966143edcd07fd61309ffa75f01b = $this->env->getExtension("native_profiler");
        $__internal_9dabea3196fb680edd3bb33c50237bb56459966143edcd07fd61309ffa75f01b->enter($__internal_9dabea3196fb680edd3bb33c50237bb56459966143edcd07fd61309ffa75f01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:local:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dabea3196fb680edd3bb33c50237bb56459966143edcd07fd61309ffa75f01b->leave($__internal_9dabea3196fb680edd3bb33c50237bb56459966143edcd07fd61309ffa75f01b_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_1bfadec46e7678742a0465ad396e02ef2ad81c92ea20fc9ff28807931f198a0e = $this->env->getExtension("native_profiler");
        $__internal_1bfadec46e7678742a0465ad396e02ef2ad81c92ea20fc9ff28807931f198a0e->enter($__internal_1bfadec46e7678742a0465ad396e02ef2ad81c92ea20fc9ff28807931f198a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("local.list.name"), "html", null, true);
        
        $__internal_1bfadec46e7678742a0465ad396e02ef2ad81c92ea20fc9ff28807931f198a0e->leave($__internal_1bfadec46e7678742a0465ad396e02ef2ad81c92ea20fc9ff28807931f198a0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b18ab3e7c4eb25a251d07832e67152141e587766aa3087b69b276e6c80fa1ebb = $this->env->getExtension("native_profiler");
        $__internal_b18ab3e7c4eb25a251d07832e67152141e587766aa3087b69b276e6c80fa1ebb->enter($__internal_b18ab3e7c4eb25a251d07832e67152141e587766aa3087b69b276e6c80fa1ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"pull-right\">
        <a class=\"btn btn-success\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("local_new");
        echo "\">
                <i class=\"fa fa-plus\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("local.new.submit"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("local.list.name"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("local.list.resultFound"), "html", null, true);
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.typeLocal"), "s.designation");
        echo "
                                        ";
        // line 77
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "s.designation"), "method")) {
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
                                    <td  class=\"text text-capitalize text-danger text-center\" colspan=\"5\">
                                        <i class=\"fa fa-exclamation-triangle\"></i>
                                            <b>";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("local.list.noResultFound"), "html", null, true);
            echo "</b>
                                     </td>
                                    
                                ";
        } else {
            // line 112
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
                // line 113
                echo "                                    <tr>
                                        <td>";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "designation", array()), "html", null, true);
                echo "</td>   
                                        <td>";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "typeLocal", array()), "designation", array()), "html", null, true);
                echo "</td>                                        
                                         <td>";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("local_edit", array("id" => $this->getAttribute($context["local"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a  ";
                // line 122
                echo (((twig_length_filter($this->env, $this->getAttribute($context["local"], "dischargeArticle", array())) != 0)) ? ("disabled=\"\"") : (""));
                echo " href=\"#\" data-box=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                                
                                            </div>
                                        </td>                                    <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 129
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("local.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("local.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("local_delete", array("id" => $this->getAttribute($context["local"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 138
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["local"], "id", array()), array(), "array"), 'widget');
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
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
        
        $__internal_b18ab3e7c4eb25a251d07832e67152141e587766aa3087b69b276e6c80fa1ebb->leave($__internal_b18ab3e7c4eb25a251d07832e67152141e587766aa3087b69b276e6c80fa1ebb_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:local:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 159,  352 => 155,  349 => 154,  334 => 145,  327 => 141,  321 => 138,  316 => 136,  308 => 131,  303 => 129,  297 => 126,  288 => 122,  284 => 121,  277 => 117,  273 => 116,  269 => 115,  265 => 114,  262 => 113,  257 => 112,  250 => 108,  244 => 105,  237 => 101,  234 => 100,  230 => 98,  227 => 97,  223 => 95,  219 => 93,  217 => 92,  214 => 91,  212 => 90,  208 => 89,  204 => 87,  200 => 85,  197 => 84,  193 => 82,  189 => 80,  187 => 79,  184 => 78,  182 => 77,  178 => 76,  174 => 74,  170 => 72,  167 => 71,  163 => 69,  159 => 67,  157 => 66,  154 => 65,  152 => 64,  148 => 63,  144 => 61,  140 => 59,  137 => 58,  133 => 56,  129 => 54,  127 => 53,  124 => 52,  122 => 51,  118 => 50,  105 => 40,  101 => 39,  93 => 34,  86 => 29,  84 => 23,  79 => 20,  77 => 17,  71 => 14,  60 => 6,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*  {% block breadcrumbActive %}{{ 'local.list.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <div class="pull-right">*/
/*         <a class="btn btn-success" href="{{ path('local_new') }}">*/
/*                 <i class="fa fa-plus"></i> {{ 'local.new.submit'|trans }}*/
/*             </a>    </div>*/
/*     </br></br>*/
/* <div data-widget-group="group1">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'local.list.name'|trans }}</h2>*/
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
/*                                {{ 'local.list.resultFound'|trans }}*/
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
/*                                     </th>         */
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.typeLocal'|trans , 's.designation') }}*/
/*                                         {% if padding.isSorted('s.designation') %}*/
/*                                             */
/*                                             {% if  padding.direction == 'asc' %}*/
/*                                                 <span class='ti ti-angle-up pull-right'></span>*/
/*                                             {% else %}*/
/*                                                 <span class='ti ti-angle-down pull-right'></span>*/
/*                                             {% endif %}*/
/*                                         {% else %}*/
/*                                             <i class='ti ti-more pull-right'></i>*/
/*                                         {% endif %}*/
/*                                     </th>  */
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
/*                                     </th>      */
/*                                 <th class="text text-capitalize text-primary"> {{ 'magazine.action'|trans }} </th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                              {% if padding|length == 0 %} */
/*                                     <td  class="text text-capitalize text-danger text-center" colspan="5">*/
/*                                         <i class="fa fa-exclamation-triangle"></i>*/
/*                                             <b>{{ 'local.list.noResultFound'|trans }}</b>*/
/*                                      </td>*/
/*                                     */
/*                                 {% else %}*/
/*                                 {% for local in padding %}*/
/*                                     <tr>*/
/*                                         <td>{{ local.id }}</td>*/
/*                                         <td>{{ local.designation }}</td>   */
/*                                         <td>{{ local.typeLocal.designation }}</td>                                        */
/*                                          <td>{{ local.user.username }}</td>*/
/*                                         <td>*/
/*                                             */
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('local_edit', { 'id': local.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                 <a  {{ local.dischargeArticle|length != 0 ? 'disabled=""' : "" }} href="#" data-box="#{{ local.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                                 */
/*                                             </div>*/
/*                                         </td>                                    <!-- MESSAGE BOX-->*/
/*                                             <div class="message-box animated fadeIn" data-sound="alert" id="{{ local.id }}">*/
/*                                                 <div class="mb-container">*/
/*                                                     <div class="mb-middle">*/
/*                                                         <div class="mb-title"><span class="ti ti-trash"></span> {{ 'local.delete.name'|trans }} ?</div>*/
/*                                                         <div class="mb-content">*/
/*                                                             <p>{{ 'local.delete.message'|trans }}</p>                    */
/*                                                             */
/*                                                         </div>*/
/*                                                         <div class="mb-footer">*/
/*                                                             <div class="pull-right">*/
/*                                                                 <form action="{{ path('local_delete', { 'id': local.id }) }}" method="post">*/
/*                                                                     <input type="hidden" name="_method" value="DELETE" />*/
/*                                                                     {{ form_widget(deleteForms[ local.id ]) }} */
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
