<?php

/* ISETSOMagazineBundle:Etat:stock.html.twig */
class __TwigTemplate_8a14e8d3cbc3c2ad679eb0911f9d9e99da7a417ef95539b1698ad4b3218f36e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ISETSOMagazineBundle:Etat:stock.html.twig", 1);
        $this->blocks = array(
            'breadcrumbActive' => array($this, 'block_breadcrumbActive'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_503c5561cb9836288e49f696cc0adc55f4655baa53936a9db65205df12c2ef84 = $this->env->getExtension("native_profiler");
        $__internal_503c5561cb9836288e49f696cc0adc55f4655baa53936a9db65205df12c2ef84->enter($__internal_503c5561cb9836288e49f696cc0adc55f4655baa53936a9db65205df12c2ef84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:Etat:stock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_503c5561cb9836288e49f696cc0adc55f4655baa53936a9db65205df12c2ef84->leave($__internal_503c5561cb9836288e49f696cc0adc55f4655baa53936a9db65205df12c2ef84_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_12f2d76e9347f198d716683eb199a93331b3138ae354ba7da33d0b3032f824f1 = $this->env->getExtension("native_profiler");
        $__internal_12f2d76e9347f198d716683eb199a93331b3138ae354ba7da33d0b3032f824f1->enter($__internal_12f2d76e9347f198d716683eb199a93331b3138ae354ba7da33d0b3032f824f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.name"), "html", null, true);
        
        $__internal_12f2d76e9347f198d716683eb199a93331b3138ae354ba7da33d0b3032f824f1->leave($__internal_12f2d76e9347f198d716683eb199a93331b3138ae354ba7da33d0b3032f824f1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be6308e003fbffeb21ca8b722d7b8bb8cac936af83d631c34b7575e514ce87ae = $this->env->getExtension("native_profiler");
        $__internal_be6308e003fbffeb21ca8b722d7b8bb8cac936af83d631c34b7575e514ce87ae->enter($__internal_be6308e003fbffeb21ca8b722d7b8bb8cac936af83d631c34b7575e514ce87ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div data-widget-group=\"group1\">
    <div class=\"row\">
            <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2><i class=\"fa fa-list\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\">
                        <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                             ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-inline")));
        // line 16
        echo "

                                <div class=\"input-group\">
                                     ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => $this->env->getExtension('translator')->trans("family.list.search"))));
        // line 25
        echo "
                                </div>
                                <div class=\"input-group btn-group\">
                                    <button type=\"submit\" class=\"btn btn-primary-alt\"><i class=\"ti ti-search\"></i></button>
                                    <button name=\"print\" value=\"true\" ";
        // line 29
        echo (((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) ? ("disabled = \"true\"") : (""));
        echo " class=\"btn btn-warning-alt\">
                                    <i class=\"ti ti-printer\"></i>
                                    </button>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("article.list.resultFound"), "html", null, true);
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
        // line 49
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "#", "id_article");
        echo "
                                        ";
        // line 50
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "id_article"), "method")) {
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.article"), "article_name");
        echo "
                                        ";
        // line 63
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "article_name"), "method")) {
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.price"), "price");
        echo "
                                        ";
        // line 76
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "price"), "method")) {
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.input"), "qte");
        echo "
                                        ";
        // line 89
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "qte"), "method")) {
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.discharge"), "discharge");
        echo "
                                        ";
        // line 102
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "discharge"), "method")) {
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
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 114
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.return"), "returned");
        echo "
                                        ";
        // line 115
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "returned"), "method")) {
            // line 116
            echo "                                            
                                            ";
            // line 117
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 118
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 120
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 122
            echo "                                        ";
        } else {
            // line 123
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 125
        echo "                                    </th> 
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 127
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.unit"), "unit");
        echo "
                                        ";
        // line 128
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "unit"), "method")) {
            // line 129
            echo "                                            
                                            ";
            // line 130
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 131
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 133
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 135
            echo "                                        ";
        } else {
            // line 136
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 138
        echo "                                    </th>
                                    <th>";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.stock"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 143
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                <td  class=\"text text-capitalize text-danger text-center animated fadeInUp\" colspan=\"7\">
                                    <i class=\"fa fa-exclamation-triangle\"></i>
                                    ";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.noResultFound"), "html", null, true);
            echo "
                                    </p>
                                 </td>
                                  
                                ";
        } else {
            // line 151
            echo "                                
                                ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
                // line 153
                echo "                                    <tr>
                                        <td>";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "id_article", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "article_name", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "price", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "qte", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "discharge", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "returned", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "unit", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 161
                echo twig_escape_filter($this->env, (($this->getAttribute($context["stock"], "returned", array()) + $this->getAttribute($context["stock"], "qte", array())) - $this->getAttribute($context["stock"], "discharge", array())), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                            ";
        }
        // line 165
        echo "                         </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 169
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                </div>
            </div></div>
        </div>
    </div>
</div>
";
        
        $__internal_be6308e003fbffeb21ca8b722d7b8bb8cac936af83d631c34b7575e514ce87ae->leave($__internal_be6308e003fbffeb21ca8b722d7b8bb8cac936af83d631c34b7575e514ce87ae_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:Etat:stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 169,  394 => 165,  391 => 164,  382 => 161,  378 => 160,  374 => 159,  370 => 158,  366 => 157,  362 => 156,  358 => 155,  354 => 154,  351 => 153,  347 => 152,  344 => 151,  336 => 146,  330 => 143,  323 => 139,  320 => 138,  316 => 136,  313 => 135,  309 => 133,  305 => 131,  303 => 130,  300 => 129,  298 => 128,  294 => 127,  290 => 125,  286 => 123,  283 => 122,  279 => 120,  275 => 118,  273 => 117,  270 => 116,  268 => 115,  264 => 114,  260 => 112,  256 => 110,  253 => 109,  249 => 107,  245 => 105,  243 => 104,  240 => 103,  238 => 102,  234 => 101,  230 => 99,  226 => 97,  223 => 96,  219 => 94,  215 => 92,  213 => 91,  210 => 90,  208 => 89,  204 => 88,  200 => 86,  196 => 84,  193 => 83,  189 => 81,  185 => 79,  183 => 78,  180 => 77,  178 => 76,  174 => 75,  170 => 73,  166 => 71,  163 => 70,  159 => 68,  155 => 66,  153 => 65,  150 => 64,  148 => 63,  144 => 62,  140 => 60,  136 => 58,  133 => 57,  129 => 55,  125 => 53,  123 => 52,  120 => 51,  118 => 50,  114 => 49,  101 => 39,  97 => 38,  89 => 33,  82 => 29,  76 => 25,  74 => 19,  69 => 16,  67 => 13,  61 => 10,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block breadcrumbActive %}{{ 'supportingdocument.list.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* */
/* <div data-widget-group="group1">*/
/*     <div class="row">*/
/*             <div class="col-md-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'supportingdocument.list.name'|trans }}</h2>*/
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
/*                                 <div class="input-group btn-group">*/
/*                                     <button type="submit" class="btn btn-primary-alt"><i class="ti ti-search"></i></button>*/
/*                                     <button name="print" value="true" {{ padding|length == 0 ? 'disabled = "true"' : ""}} class="btn btn-warning-alt">*/
/*                                     <i class="ti ti-printer"></i>*/
/*                                     </button>*/
/*                                 </div>*/
/*                              {{ form_end(form) }}*/
/*                         </div>*/
/*                         <i class="separator"></i>*/
/*                         <div class="panel-heading pull-left">*/
/*                             <label class="panel-ctrls-center">*/
/*                                {{ padding.getTotalItemCount }}*/
/*                                {{ 'article.list.resultFound'|trans }}*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel-body no-padding">*/
/*                     <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, "#" , 'id_article') }}*/
/*                                         {% if padding.isSorted('id_article') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.article'|trans , 'article_name') }}*/
/*                                         {% if padding.isSorted('article_name') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.price'|trans , 'price') }}*/
/*                                         {% if padding.isSorted('price') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.input'|trans , 'qte') }}*/
/*                                         {% if padding.isSorted('qte') %}*/
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
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.discharge'|trans , 'discharge') }}*/
/*                                         {% if padding.isSorted('discharge') %}*/
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
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.return'|trans , 'returned') }}*/
/*                                         {% if padding.isSorted('returned') %}*/
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
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.unit'|trans , 'unit') }}*/
/*                                         {% if padding.isSorted('unit') %}*/
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
/*                                     <th>{{ 'magazine.field.stock'|trans }}</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                              {% if padding|length == 0 %} */
/*                                 <td  class="text text-capitalize text-danger text-center animated fadeInUp" colspan="7">*/
/*                                     <i class="fa fa-exclamation-triangle"></i>*/
/*                                     {{ 'supportingdocument.list.noResultFound'|trans }}*/
/*                                     </p>*/
/*                                  </td>*/
/*                                   */
/*                                 {% else %}*/
/*                                 */
/*                                 {% for stock in padding %}*/
/*                                     <tr>*/
/*                                         <td>{{ stock.id_article }}</td>*/
/*                                         <td>{{ stock.article_name }}</td>*/
/*                                         <td>{{ stock.price }}</td>*/
/*                                         <td>{{ stock.qte }}</td>*/
/*                                         <td>{{ stock.discharge }}</td>*/
/*                                         <td>{{ stock.returned }}</td>*/
/*                                         <td>{{ stock.unit }}</td>*/
/*                                         <td>{{ (stock.returned + stock.qte) - stock.discharge }}</td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                          </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     {{ knp_pagination_render(padding) }}*/
/*                 </div>*/
/*             </div></div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
