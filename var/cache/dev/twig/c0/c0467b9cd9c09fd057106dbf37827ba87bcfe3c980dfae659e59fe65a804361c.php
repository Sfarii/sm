<?php

/* ISETSOMagazineBundle:articleconsumable:index.html.twig */
class __TwigTemplate_a2f96b7bf1c9a48483ac61e0514c10fea47c17305161be92de79b87131dada11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:articleconsumable:index.html.twig", 1);
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
        $__internal_6a6d5cbebca564d0ea6b7a07b6d548cb2583acbc457d580a24bd592e09226e94 = $this->env->getExtension("native_profiler");
        $__internal_6a6d5cbebca564d0ea6b7a07b6d548cb2583acbc457d580a24bd592e09226e94->enter($__internal_6a6d5cbebca564d0ea6b7a07b6d548cb2583acbc457d580a24bd592e09226e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:articleconsumable:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a6d5cbebca564d0ea6b7a07b6d548cb2583acbc457d580a24bd592e09226e94->leave($__internal_6a6d5cbebca564d0ea6b7a07b6d548cb2583acbc457d580a24bd592e09226e94_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_89cf30ce1717742020fd3f35a072d6751123c375d06adba4b5b31fce0bf7f80d = $this->env->getExtension("native_profiler");
        $__internal_89cf30ce1717742020fd3f35a072d6751123c375d06adba4b5b31fce0bf7f80d->enter($__internal_89cf30ce1717742020fd3f35a072d6751123c375d06adba4b5b31fce0bf7f80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articleconsumable.list.name"), "html", null, true);
        
        $__internal_89cf30ce1717742020fd3f35a072d6751123c375d06adba4b5b31fce0bf7f80d->leave($__internal_89cf30ce1717742020fd3f35a072d6751123c375d06adba4b5b31fce0bf7f80d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3c75c6bb4923f4caafeecbc3319e7eed68316452beee2b6ee17ace54a726d8b = $this->env->getExtension("native_profiler");
        $__internal_a3c75c6bb4923f4caafeecbc3319e7eed68316452beee2b6ee17ace54a726d8b->enter($__internal_a3c75c6bb4923f4caafeecbc3319e7eed68316452beee2b6ee17ace54a726d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"pull-right\">
        <a class=\"btn btn-success\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("articleconsumable_new");
        echo "\">
                <i class=\"fa fa-plus\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articleconsumable.new.submit"), "html", null, true);
        echo "
        </a>    
    </div>
    <br><br>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2><i class=\"fa fa-list\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articleconsumable.list.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\">
                        <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                             ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-inline")));
        // line 19
        echo "

                                <div class=\"input-group\">
                                     ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => $this->env->getExtension('translator')->trans("family.list.search"))));
        // line 28
        echo "
                                </div>
                                <div class=\"input-group\">
                                    <button type=\"submit\" class=\"btn btn-primary-alt\"><i class=\"ti ti-search\"></i></button>
                                </div>
                             ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <i class=\"separator\"></i>
                        <div class=\"panel-heading pull-left\">
                            <label class=\"panel-ctrls-center\">
                               ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "getTotalItemCount", array()), "html", null, true);
        echo "
                               ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articleconsumable.list.resultFound"), "html", null, true);
        echo "
                            </label>
                        </div>
                    </div>
                </div>
                <div class=\"panel-body  no-padding\">
                    <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                            <tr>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 49
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.id"), "f.id");
        echo "
                                        ";
        // line 50
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 51
            echo "                                            
                                            ";
            // line 52
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 53
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 55
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 57
            echo "                                        ";
        } else {
            // line 58
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 60
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 62
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.designation"), "f.designation");
        echo "
                                        ";
        // line 63
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.designation"), "method")) {
            // line 64
            echo "                                            
                                            ";
            // line 65
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 66
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 68
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 70
            echo "                                        ";
        } else {
            // line 71
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 73
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 75
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.minThreshold"), "f.minThreshold");
        echo "
                                        ";
        // line 76
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.minThreshold"), "method")) {
            // line 77
            echo "                                            
                                            ";
            // line 78
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 79
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 81
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 83
            echo "                                        ";
        } else {
            // line 84
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 86
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 88
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.maxThreshold"), "f.maxThreshold");
        echo "
                                        ";
        // line 89
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.maxThreshold"), "method")) {
            // line 90
            echo "                                            
                                            ";
            // line 91
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 92
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 94
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 96
            echo "                                        ";
        } else {
            // line 97
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 99
        echo "                                    </th>                                
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 101
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                                        ";
        // line 102
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "u.username"), "method")) {
            // line 103
            echo "                                            
                                            ";
            // line 104
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 105
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 107
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 109
            echo "                                        ";
        } else {
            // line 110
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 112
        echo "                                    </th> 
                                
                                <th class=\"text text-capitalize text-primary\"> ";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 118
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            // line 119
            echo "                                    <td  class=\"text text-capitalize text-danger text-center\" colspan=\"6\">
                                        <p style=\"margin-top: 1%;\">
                                        <i class=\"fa fa-exclamation-triangle\"></i> <b>";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articleconsumable.list.noResultFound"), "html", null, true);
            echo "</b>
                                    </p>
                                     </td>
                                ";
        } else {
            // line 125
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["articleConsumable"]) {
                // line 126
                echo "                                    <tr>
                                        <td>";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleConsumable"], "id", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleConsumable"], "designation", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleConsumable"], "minThreshold", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleConsumable"], "maxThreshold", array()), "html", null, true);
                echo "</td>                   
                                        <td>";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["articleConsumable"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articleconsumable_edit", array("id" => $this->getAttribute($context["articleConsumable"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a ";
                // line 136
                echo (((twig_length_filter($this->env, $this->getAttribute($context["articleConsumable"], "supportingDocuments", array())) != 0)) ? ("disabled=\"\"") : (""));
                echo " href=\"#\" data-box=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleConsumable"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                                <a href=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articleconsumable_show", array("id" => $this->getAttribute($context["articleConsumable"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success-alt\"><i class=\"ti ti-info\"></i></a>
                                            </div>
                                        </td>  
                                    </tr>
                                            <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleConsumable"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 145
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articleconsumable.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 147
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articleconsumable.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articleconsumable_delete", array("id" => $this->getAttribute($context["articleConsumable"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 154
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["articleConsumable"], "id", array()), array(), "array"), 'widget');
                echo " 
                                                                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                        <i class=\"icon-trash\"></i>
                                                                         ";
                // line 157
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                    </button>
                                                                </form>
                                                                <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                    ";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.no"), "html", null, true);
                echo "</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- END MESSAGE BOX-->
                                                                          
                                        
                                    
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articleConsumable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "                            ";
        }
        // line 173
        echo "                         </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 177
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                </div>
            </div>
 
";
        
        $__internal_a3c75c6bb4923f4caafeecbc3319e7eed68316452beee2b6ee17ace54a726d8b->leave($__internal_a3c75c6bb4923f4caafeecbc3319e7eed68316452beee2b6ee17ace54a726d8b_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:articleconsumable:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 177,  393 => 173,  390 => 172,  373 => 161,  366 => 157,  360 => 154,  355 => 152,  347 => 147,  342 => 145,  336 => 142,  328 => 137,  322 => 136,  318 => 135,  311 => 131,  307 => 130,  303 => 129,  299 => 128,  295 => 127,  292 => 126,  287 => 125,  280 => 121,  276 => 119,  274 => 118,  267 => 114,  263 => 112,  259 => 110,  256 => 109,  252 => 107,  248 => 105,  246 => 104,  243 => 103,  241 => 102,  237 => 101,  233 => 99,  229 => 97,  226 => 96,  222 => 94,  218 => 92,  216 => 91,  213 => 90,  211 => 89,  207 => 88,  203 => 86,  199 => 84,  196 => 83,  192 => 81,  188 => 79,  186 => 78,  183 => 77,  181 => 76,  177 => 75,  173 => 73,  169 => 71,  166 => 70,  162 => 68,  158 => 66,  156 => 65,  153 => 64,  151 => 63,  147 => 62,  143 => 60,  139 => 58,  136 => 57,  132 => 55,  128 => 53,  126 => 52,  123 => 51,  121 => 50,  117 => 49,  104 => 39,  100 => 38,  92 => 33,  85 => 28,  83 => 22,  78 => 19,  76 => 16,  70 => 13,  60 => 6,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*  {% block breadcrumbActive %}{{ 'articleconsumable.list.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <div class="pull-right">*/
/*         <a class="btn btn-success" href="{{ path('articleconsumable_new') }}">*/
/*                 <i class="fa fa-plus"></i> {{ 'articleconsumable.new.submit'|trans }}*/
/*         </a>    */
/*     </div>*/
/*     <br><br>*/
/* */
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'articleconsumable.list.name'|trans }}</h2>*/
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
/*                                {{ 'articleconsumable.list.resultFound'|trans }}*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel-body  no-padding">*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.minThreshold'|trans , 'f.minThreshold') }}*/
/*                                         {% if padding.isSorted('f.minThreshold') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.maxThreshold'|trans , 'f.maxThreshold') }}*/
/*                                         {% if padding.isSorted('f.maxThreshold') %}*/
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
/*                                 */
/*                                 <th class="text text-capitalize text-primary"> {{ 'magazine.action'|trans }} </th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                              {% if padding|length == 0 %}*/
/*                                     <td  class="text text-capitalize text-danger text-center" colspan="6">*/
/*                                         <p style="margin-top: 1%;">*/
/*                                         <i class="fa fa-exclamation-triangle"></i> <b>{{ 'articleconsumable.list.noResultFound'|trans }}</b>*/
/*                                     </p>*/
/*                                      </td>*/
/*                                 {% else %}*/
/*                                 {% for articleConsumable in padding %}*/
/*                                     <tr>*/
/*                                         <td>{{ articleConsumable.id }}</td>*/
/*                                         <td>{{ articleConsumable.designation }}</td>*/
/*                                         <td>{{ articleConsumable.minThreshold }}</td>*/
/*                                         <td>{{ articleConsumable.maxThreshold }}</td>                   */
/*                                         <td>{{ articleConsumable.user.username }}</td>*/
/*                                         <td>*/
/*                                             */
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('articleconsumable_edit', { 'id': articleConsumable.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                 <a {{ articleConsumable.supportingDocuments|length != 0 ? 'disabled=""' : "" }} href="#" data-box="#{{ articleConsumable.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                                 <a href="{{ path('articleconsumable_show', { 'id': articleConsumable.id }) }}" class="btn btn-success-alt"><i class="ti ti-info"></i></a>*/
/*                                             </div>*/
/*                                         </td>  */
/*                                     </tr>*/
/*                                             <!-- MESSAGE BOX-->*/
/*                                             <div class="message-box animated fadeIn" data-sound="alert" id="{{ articleConsumable.id }}">*/
/*                                                 <div class="mb-container">*/
/*                                                     <div class="mb-middle">*/
/*                                                         <div class="mb-title"><span class="ti ti-trash"></span> {{ 'articleconsumable.delete.name'|trans }} ?</div>*/
/*                                                         <div class="mb-content">*/
/*                                                             <p>{{ 'articleconsumable.delete.message'|trans }}</p>                    */
/*                                                             */
/*                                                         </div>*/
/*                                                         <div class="mb-footer">*/
/*                                                             <div class="pull-right">*/
/*                                                                 <form action="{{ path('articleconsumable_delete', { 'id': articleConsumable.id }) }}" method="post">*/
/*                                                                     <input type="hidden" name="_method" value="DELETE" />*/
/*                                                                     {{ form_widget(deleteForms[ articleConsumable.id ]) }} */
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
/*                                                                           */
/*                                         */
/*                                     */
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                          </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     {{ knp_pagination_render(padding) }}*/
/*                 </div>*/
/*             </div>*/
/*  */
/* {% endblock %}*/
/* */
