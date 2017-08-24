<?php

/* ISETSOMagazineBundle:activitydomain:index.html.twig */
class __TwigTemplate_eb99d14c6f22605642574b953da17316990f6f020485029df2575de2333d32c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:activitydomain:index.html.twig", 1);
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
        $__internal_00a3ddac049ebf49582d0dac0a1a5ab3e1e7b21e2c0fca853819c07cc7f9a2b2 = $this->env->getExtension("native_profiler");
        $__internal_00a3ddac049ebf49582d0dac0a1a5ab3e1e7b21e2c0fca853819c07cc7f9a2b2->enter($__internal_00a3ddac049ebf49582d0dac0a1a5ab3e1e7b21e2c0fca853819c07cc7f9a2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:activitydomain:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00a3ddac049ebf49582d0dac0a1a5ab3e1e7b21e2c0fca853819c07cc7f9a2b2->leave($__internal_00a3ddac049ebf49582d0dac0a1a5ab3e1e7b21e2c0fca853819c07cc7f9a2b2_prof);

    }

    // line 3
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_14d321a9527f6f37ae54922d8d79bd5580c878050f966b5eb2175f5be2576830 = $this->env->getExtension("native_profiler");
        $__internal_14d321a9527f6f37ae54922d8d79bd5580c878050f966b5eb2175f5be2576830->enter($__internal_14d321a9527f6f37ae54922d8d79bd5580c878050f966b5eb2175f5be2576830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitydomain.list.name"), "html", null, true);
        echo "
";
        
        $__internal_14d321a9527f6f37ae54922d8d79bd5580c878050f966b5eb2175f5be2576830->leave($__internal_14d321a9527f6f37ae54922d8d79bd5580c878050f966b5eb2175f5be2576830_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_69ba2cdbe21e6e0e57f917aabc658d487d1edb6aa12c37498d91aa05900bf7a1 = $this->env->getExtension("native_profiler");
        $__internal_69ba2cdbe21e6e0e57f917aabc658d487d1edb6aa12c37498d91aa05900bf7a1->enter($__internal_69ba2cdbe21e6e0e57f917aabc658d487d1edb6aa12c37498d91aa05900bf7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"pull-right\">
        <a class=\"btn btn-success\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("activitydomain_new");
        echo "\">
            <i class=\"fa fa-plus\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitydomain.new.submit"), "html", null, true);
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
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitydomain.list.name"), "html", null, true);
        echo "</h2>
                        <div class=\"panel-ctrls\">
                            <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                                ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-inline")));
        // line 25
        echo "

                                <div class=\"input-group\">
                                     ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => $this->env->getExtension('translator')->trans("family.list.search"))));
        // line 34
        echo "
                                </div>
                                <div class=\"input-group\">
                                    <button type=\"submit\" class=\"btn btn-primary-alt\"><i class=\"ti ti-search\"></i></button>
                                </div>
                                ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                            </div>
                            <i class=\"separator\"></i>
                            <div class=\"panel-heading pull-left\">
                                <label class=\"panel-ctrls-center\">
                                   ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "getTotalItemCount", array()), "html", null, true);
        echo "
                                   ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitydomain.list.resultFound"), "html", null, true);
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
        // line 55
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.id"), "f.id");
        echo "
                                        ";
        // line 56
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 57
            echo "                                            
                                            ";
            // line 58
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 59
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 61
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 63
            echo "                                        ";
        } else {
            // line 64
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 66
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 68
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.designation"), "f.designation");
        echo "
                                        ";
        // line 69
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.designation"), "method")) {
            // line 70
            echo "                                            
                                            ";
            // line 71
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 72
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 74
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 76
            echo "                                        ";
        } else {
            // line 77
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 79
        echo "                                    </th>           
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 81
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                                        ";
        // line 82
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "u.username"), "method")) {
            // line 83
            echo "                                            
                                            ";
            // line 84
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 85
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 87
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 89
            echo "                                        ";
        } else {
            // line 90
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 92
        echo "                                    </th>                        
                                     
                                    <th class=\"text text-capitalize text-primary\"> ";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 98
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                    <td  class=\"text text-capitalize text-danger text-center\" colspan=\"4\">
                                        <p style=\"margin-top: 1%;\">
                                            <i class=\"fa fa-exclamation-triangle\"></i> <b>";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitydomain.list.noResultFound"), "html", null, true);
            echo "</b>
                                        </p>
                                     </td>
                                    
                                ";
        } else {
            // line 106
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["activityDomain"]) {
                // line 107
                echo "                                        <tr>
                                            <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["activityDomain"], "id", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["activityDomain"], "designation", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["activityDomain"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                            <td>
                                                <div class=\"btn-group\">
                                                    <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activitydomain_edit", array("id" => $this->getAttribute($context["activityDomain"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                    <a  ";
                // line 114
                echo (((twig_length_filter($this->env, $this->getAttribute($context["activityDomain"], "provider", array())) != 0)) ? ("disabled=\"\"") : (""));
                echo "  href=\"#\" data-box=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["activityDomain"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                                    <a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activitydomain_show", array("id" => $this->getAttribute($context["activityDomain"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success-alt\"><i class=\"ti ti-info\"></i></a>
                                                </div>
                                            </td>
                                                <!-- MESSAGE BOX-->
                                                <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["activityDomain"], "id", array()), "html", null, true);
                echo "\">
                                                    <div class=\"mb-container\">
                                                        <div class=\"mb-middle\">
                                                            <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitydomain.delete.name"), "html", null, true);
                echo " ?</div>
                                                            <div class=\"mb-content\">
                                                                <p>";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitydomain.delete.message"), "html", null, true);
                echo "</p>                    
                                                                
                                                            </div>
                                                            <div class=\"mb-footer\">
                                                                <div class=\"pull-right\">
                                                                    <form action=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activitydomain_delete", array("id" => $this->getAttribute($context["activityDomain"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                        ";
                // line 131
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["activityDomain"], "id", array()), array(), "array"), 'widget');
                echo " 
                                                                        <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                            <i class=\"icon-trash\"></i>
                                                                             ";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                        </button>
                                                                    </form>
                                                                    <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                        ";
                // line 138
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activityDomain'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                                ";
        }
        // line 148
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-footer\">
                        ";
        // line 152
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_69ba2cdbe21e6e0e57f917aabc658d487d1edb6aa12c37498d91aa05900bf7a1->leave($__internal_69ba2cdbe21e6e0e57f917aabc658d487d1edb6aa12c37498d91aa05900bf7a1_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:activitydomain:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 152,  328 => 148,  325 => 147,  310 => 138,  303 => 134,  297 => 131,  292 => 129,  284 => 124,  279 => 122,  273 => 119,  266 => 115,  260 => 114,  256 => 113,  250 => 110,  246 => 109,  242 => 108,  239 => 107,  234 => 106,  226 => 101,  220 => 98,  213 => 94,  209 => 92,  205 => 90,  202 => 89,  198 => 87,  194 => 85,  192 => 84,  189 => 83,  187 => 82,  183 => 81,  179 => 79,  175 => 77,  172 => 76,  168 => 74,  164 => 72,  162 => 71,  159 => 70,  157 => 69,  153 => 68,  149 => 66,  145 => 64,  142 => 63,  138 => 61,  134 => 59,  132 => 58,  129 => 57,  127 => 56,  123 => 55,  110 => 45,  106 => 44,  98 => 39,  91 => 34,  89 => 28,  84 => 25,  82 => 22,  76 => 19,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcrumbActive %}*/
/*     {{ 'activitydomain.list.name'|trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="pull-right">*/
/*         <a class="btn btn-success" href="{{ path('activitydomain_new') }}">*/
/*             <i class="fa fa-plus"></i> {{ 'activitydomain.new.submit'|trans }}*/
/*         </a>    */
/*     </div>*/
/*     </br></br>*/
/*     <div data-widget-group="group1">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h2><i class="fa fa-list"></i> {{ 'activitydomain.list.name'|trans }}</h2>*/
/*                         <div class="panel-ctrls">*/
/*                             <div id="example_filter" class="dataTables_filter pull-right">*/
/*                                 {{ form_start(form ,{*/
/*                                     'attr' : { 'class' : 'form-inline' } */
/*                                     */
/*                                 }) }}*/
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
/*                                 {{ form_end(form) }}*/
/*                             </div>*/
/*                             <i class="separator"></i>*/
/*                             <div class="panel-heading pull-left">*/
/*                                 <label class="panel-ctrls-center">*/
/*                                    {{ padding.getTotalItemCount }}*/
/*                                    {{ 'activitydomain.list.resultFound'|trans }}*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel-body no-padding">*/
/*                         <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                             <thead>*/
/*                                 <tr>*/
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
/*                                     </th>           */
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
/*                                     </th>                        */
/*                                      */
/*                                     <th class="text text-capitalize text-primary"> {{ 'magazine.action'|trans }} </th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% if padding|length == 0 %} */
/*                                     <td  class="text text-capitalize text-danger text-center" colspan="4">*/
/*                                         <p style="margin-top: 1%;">*/
/*                                             <i class="fa fa-exclamation-triangle"></i> <b>{{ 'activitydomain.list.noResultFound'|trans }}</b>*/
/*                                         </p>*/
/*                                      </td>*/
/*                                     */
/*                                 {% else %}*/
/*                                     {% for activityDomain in padding %}*/
/*                                         <tr>*/
/*                                             <td>{{ activityDomain.id }}</td>*/
/*                                             <td>{{ activityDomain.designation }}</td>*/
/*                                             <td>{{ activityDomain.user.username }}</td>*/
/*                                             <td>*/
/*                                                 <div class="btn-group">*/
/*                                                     <a href="{{ path('activitydomain_edit', { 'id': activityDomain.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                     <a  {{ activityDomain.provider|length != 0 ? 'disabled=""' : "" }}  href="#" data-box="#{{ activityDomain.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                                     <a href="{{ path('activitydomain_show' ,{ 'id' : activityDomain.id }) }}" class="btn btn-success-alt"><i class="ti ti-info"></i></a>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                                 <!-- MESSAGE BOX-->*/
/*                                                 <div class="message-box animated fadeIn" data-sound="alert" id="{{ activityDomain.id }}">*/
/*                                                     <div class="mb-container">*/
/*                                                         <div class="mb-middle">*/
/*                                                             <div class="mb-title"><span class="ti ti-trash"></span> {{ 'activitydomain.delete.name'|trans }} ?</div>*/
/*                                                             <div class="mb-content">*/
/*                                                                 <p>{{ 'activitydomain.delete.message'|trans }}</p>                    */
/*                                                                 */
/*                                                             </div>*/
/*                                                             <div class="mb-footer">*/
/*                                                                 <div class="pull-right">*/
/*                                                                     <form action="{{ path('activitydomain_delete', { 'id': activityDomain.id }) }}" method="post">*/
/*                                                                         <input type="hidden" name="_method" value="DELETE" />*/
/*                                                                         {{ form_widget(deleteForms[ activityDomain.id ]) }} */
/*                                                                         <button type="submit" class="btn btn-danger btn-lg">*/
/*                                                                             <i class="icon-trash"></i>*/
/*                                                                              {{ 'messageBox.yes'|trans }}*/
/*                                                                         </button>*/
/*                                                                     </form>*/
/*                                                                     <button class="btn btn-default btn-lg mb-control-close">*/
/*                                                                         {{ 'messageBox.no'|trans }}</button>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <!-- END MESSAGE BOX-->*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 {% endif %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                     <div class="panel-footer">*/
/*                         {{ knp_pagination_render(padding) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
