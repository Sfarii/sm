<?php

/* ISETSOMagazineBundle:activitydomain:show.html.twig */
class __TwigTemplate_8a87b51f5208a624117b094f392b0edec4cb3692ae5d7807a37e25cae1d88828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:activitydomain:show.html.twig", 1);
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
        $__internal_2bbbd46ae4f50e4df30dfebe7178fc12b5f8b227c250488af02ee83b7b0208e4 = $this->env->getExtension("native_profiler");
        $__internal_2bbbd46ae4f50e4df30dfebe7178fc12b5f8b227c250488af02ee83b7b0208e4->enter($__internal_2bbbd46ae4f50e4df30dfebe7178fc12b5f8b227c250488af02ee83b7b0208e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:activitydomain:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bbbd46ae4f50e4df30dfebe7178fc12b5f8b227c250488af02ee83b7b0208e4->leave($__internal_2bbbd46ae4f50e4df30dfebe7178fc12b5f8b227c250488af02ee83b7b0208e4_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_c8d29e1c8cb063cc2ec2a5cff33813bb1068161a3594237a2e2aadb50793119e = $this->env->getExtension("native_profiler");
        $__internal_c8d29e1c8cb063cc2ec2a5cff33813bb1068161a3594237a2e2aadb50793119e->enter($__internal_c8d29e1c8cb063cc2ec2a5cff33813bb1068161a3594237a2e2aadb50793119e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("activitydomain_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitydomain.list.name"), "html", null, true);
        echo "</a>
";
        
        $__internal_c8d29e1c8cb063cc2ec2a5cff33813bb1068161a3594237a2e2aadb50793119e->leave($__internal_c8d29e1c8cb063cc2ec2a5cff33813bb1068161a3594237a2e2aadb50793119e_prof);

    }

    // line 5
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_d30191ac5e1ba6109d925b263474de33aa715b208713511b6ced0c2dc0429a84 = $this->env->getExtension("native_profiler");
        $__internal_d30191ac5e1ba6109d925b263474de33aa715b208713511b6ced0c2dc0429a84->enter($__internal_d30191ac5e1ba6109d925b263474de33aa715b208713511b6ced0c2dc0429a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activitydomain.show.name"), "html", null, true);
        echo "
";
        
        $__internal_d30191ac5e1ba6109d925b263474de33aa715b208713511b6ced0c2dc0429a84->leave($__internal_d30191ac5e1ba6109d925b263474de33aa715b208713511b6ced0c2dc0429a84_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e00d8f9b6bc30ff6661957a9ae9a578029a705a9beb398fad39ae5a9012bdbf = $this->env->getExtension("native_profiler");
        $__internal_2e00d8f9b6bc30ff6661957a9ae9a578029a705a9beb398fad39ae5a9012bdbf->enter($__internal_2e00d8f9b6bc30ff6661957a9ae9a578029a705a9beb398fad39ae5a9012bdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h2><i class=\"fa fa-list\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.list.name"), "html", null, true);
        echo "</h2>
            <div class=\"panel-ctrls\">
                <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                    <form novalidate=\"novalidate\" class=\"form-inline\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activitydomain_show", array("id" => $this->getAttribute((isset($context["activityDomain"]) ? $context["activityDomain"] : $this->getContext($context, "activityDomain")), "id", array()))), "html", null, true);
        echo "\" method=\"GET\">
                        <div class=\"input-group\">
                             ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => $this->env->getExtension('translator')->trans("family.list.search"))));
        // line 22
        echo "
                        </div>
                        <div class=\"input-group\">
                            <button type=\"submit\" class=\"btn btn-primary-alt\"><i class=\"ti ti-search\"></i></button>
                        </div>
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    </form>
                </div>
                <i class=\"separator\"></i>
                <div class=\"panel-heading pull-left\">
                    <label class=\"panel-ctrls-center\">
                       ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "getTotalItemCount", array()), "html", null, true);
        echo "
                       ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.list.resultFound"), "html", null, true);
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
        // line 45
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.socialReason"), "f.socialReason");
        echo "
                            ";
        // line 46
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.socialReason"), "method")) {
            // line 47
            echo "                                
                                ";
            // line 48
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 49
                echo "                                    <span class='ti ti-angle-up pull-right'></span>
                                ";
            } else {
                // line 51
                echo "                                    <span class='ti ti-angle-down pull-right'></span>
                                ";
            }
            // line 53
            echo "                            ";
        } else {
            // line 54
            echo "                                <i class='ti ti-more pull-right'></i>
                            ";
        }
        // line 56
        echo "                        </th>
                        <th class=\"text text-capitalize\">
                            ";
        // line 58
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.phone"), "f.phone");
        echo "
                            ";
        // line 59
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.phone"), "method")) {
            // line 60
            echo "                                
                                ";
            // line 61
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 62
                echo "                                    <span class='ti ti-angle-up pull-right'></span>
                                ";
            } else {
                // line 64
                echo "                                    <span class='ti ti-angle-down pull-right'></span>
                                ";
            }
            // line 66
            echo "                            ";
        } else {
            // line 67
            echo "                                <i class='ti ti-more pull-right'></i>
                            ";
        }
        // line 69
        echo "                        </th>
                        <th class=\"text text-capitalize\">
                            ";
        // line 71
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.address"), "f.address");
        echo "
                            ";
        // line 72
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.address"), "method")) {
            // line 73
            echo "                                
                                ";
            // line 74
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 75
                echo "                                    <span class='ti ti-angle-up pull-right'></span>
                                ";
            } else {
                // line 77
                echo "                                    <span class='ti ti-angle-down pull-right'></span>
                                ";
            }
            // line 79
            echo "                            ";
        } else {
            // line 80
            echo "                                <i class='ti ti-more pull-right'></i>
                            ";
        }
        // line 82
        echo "                        </th>
                        <th class=\"text text-capitalize\">
                            ";
        // line 84
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.fax"), "f.fax");
        echo "
                            ";
        // line 85
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.fax"), "method")) {
            // line 86
            echo "                                
                                ";
            // line 87
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 88
                echo "                                    <span class='ti ti-angle-up pull-right'></span>
                                ";
            } else {
                // line 90
                echo "                                    <span class='ti ti-angle-down pull-right'></span>
                                ";
            }
            // line 92
            echo "                            ";
        } else {
            // line 93
            echo "                                <i class='ti ti-more pull-right'></i>
                            ";
        }
        // line 95
        echo "                        </th>
                        <th class=\"text text-capitalize\">
                            ";
        // line 97
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.email"), "f.email");
        echo "
                            ";
        // line 98
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.email"), "method")) {
            // line 99
            echo "                                
                                ";
            // line 100
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 101
                echo "                                    <span class='ti ti-angle-up pull-right'></span>
                                ";
            } else {
                // line 103
                echo "                                    <span class='ti ti-angle-down pull-right'></span>
                                ";
            }
            // line 105
            echo "                            ";
        } else {
            // line 106
            echo "                                <i class='ti ti-more pull-right'></i>
                            ";
        }
        // line 108
        echo "                        </th>
                        <th class=\"text text-capitalize\">
                            ";
        // line 110
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.contact"), "f.contact");
        echo "
                            ";
        // line 111
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.contact"), "method")) {
            // line 112
            echo "                                
                                ";
            // line 113
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 114
                echo "                                    <span class='ti ti-angle-up pull-right'></span>
                                ";
            } else {
                // line 116
                echo "                                    <span class='ti ti-angle-down pull-right'></span>
                                ";
            }
            // line 118
            echo "                            ";
        } else {
            // line 119
            echo "                                <i class='ti ti-more pull-right'></i>
                            ";
        }
        // line 121
        echo "                        </th> 
                        <th class=\"text text-capitalize\">
                            ";
        // line 123
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                            ";
        // line 124
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "u.username"), "method")) {
            // line 125
            echo "                                
                                ";
            // line 126
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 127
                echo "                                    <span class='ti ti-angle-up pull-right'></span>
                                ";
            } else {
                // line 129
                echo "                                    <span class='ti ti-angle-down pull-right'></span>
                                ";
            }
            // line 131
            echo "                            ";
        } else {
            // line 132
            echo "                                <i class='ti ti-more pull-right'></i>
                            ";
        }
        // line 134
        echo "                        </th> 
                    <th class=\"text text-capitalize text-primary\"> ";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                </tr>
            </thead>
            <tbody>
                 ";
        // line 139
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                        <td  class=\"text text-capitalize text-danger text-center\" colspan=\"9\">
                            <i class=\"fa fa-exclamation-triangle fa-stack-2x\"></i>
                            <p  style=\"margin-top: 30px;\">
                                <b>";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.list.noResultFound"), "html", null, true);
            echo "</b>
                            </p>
                         </td>
                    ";
        } else {
            // line 147
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
                // line 148
                echo "                            <tr>
                                <td>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "socialReason", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "phone", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "address", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "fax", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "email", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "contact", array()), "html", null, true);
                echo "</td>                                        
                                <td>";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["provider"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <div class=\"btn-group\">
                                        <a href=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("provider_show", array("id" => $this->getAttribute($context["provider"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success-alt\"><i class=\"ti ti-info\"></i></a>
                                    </div>
                                </td>    
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "                    ";
        }
        // line 164
        echo "                </tbody>
            </table>
        </div>
        <div class=\"panel-footer\">
            ";
        // line 168
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
        </div>
    </div>
";
        
        $__internal_2e00d8f9b6bc30ff6661957a9ae9a578029a705a9beb398fad39ae5a9012bdbf->leave($__internal_2e00d8f9b6bc30ff6661957a9ae9a578029a705a9beb398fad39ae5a9012bdbf_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:activitydomain:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 168,  409 => 164,  406 => 163,  395 => 158,  389 => 155,  385 => 154,  381 => 153,  377 => 152,  373 => 151,  369 => 150,  365 => 149,  362 => 148,  357 => 147,  350 => 143,  343 => 139,  336 => 135,  333 => 134,  329 => 132,  326 => 131,  322 => 129,  318 => 127,  316 => 126,  313 => 125,  311 => 124,  307 => 123,  303 => 121,  299 => 119,  296 => 118,  292 => 116,  288 => 114,  286 => 113,  283 => 112,  281 => 111,  277 => 110,  273 => 108,  269 => 106,  266 => 105,  262 => 103,  258 => 101,  256 => 100,  253 => 99,  251 => 98,  247 => 97,  243 => 95,  239 => 93,  236 => 92,  232 => 90,  228 => 88,  226 => 87,  223 => 86,  221 => 85,  217 => 84,  213 => 82,  209 => 80,  206 => 79,  202 => 77,  198 => 75,  196 => 74,  193 => 73,  191 => 72,  187 => 71,  183 => 69,  179 => 67,  176 => 66,  172 => 64,  168 => 62,  166 => 61,  163 => 60,  161 => 59,  157 => 58,  153 => 56,  149 => 54,  146 => 53,  142 => 51,  138 => 49,  136 => 48,  133 => 47,  131 => 46,  127 => 45,  113 => 34,  109 => 33,  100 => 27,  93 => 22,  91 => 16,  86 => 14,  80 => 11,  76 => 9,  70 => 8,  60 => 6,  54 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('activitydomain_index')}}">{{ 'activitydomain.list.name'|trans }}</a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'activitydomain.show.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h2><i class="fa fa-list"></i> {{ 'provider.list.name'|trans }}</h2>*/
/*             <div class="panel-ctrls">*/
/*                 <div id="example_filter" class="dataTables_filter pull-right">*/
/*                     <form novalidate="novalidate" class="form-inline" action="{{ path('activitydomain_show' ,{ 'id' : activityDomain.id }) }}" method="GET">*/
/*                         <div class="input-group">*/
/*                              {{ form_widget(form.search,{*/
/*                                 'attr' : {*/
/*                                     'class' : 'form-control ' ,*/
/*                                     'placeholder' : 'family.list.search'|trans*/
/*                                 } */
/*                                 */
/*                             }) }}*/
/*                         </div>*/
/*                         <div class="input-group">*/
/*                             <button type="submit" class="btn btn-primary-alt"><i class="ti ti-search"></i></button>*/
/*                         </div>*/
/*                     {{ form_widget(form) }}*/
/*                     </form>*/
/*                 </div>*/
/*                 <i class="separator"></i>*/
/*                 <div class="panel-heading pull-left">*/
/*                     <label class="panel-ctrls-center">*/
/*                        {{ padding.getTotalItemCount }}*/
/*                        {{ 'provider.list.resultFound'|trans }}*/
/*                     </label>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="panel-body no-padding">*/
/*             <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                 <thead>*/
/*                     <tr>*/
/*                             */
/*                         <th class="text text-capitalize">*/
/*                             {{ knp_pagination_sortable(padding, 'magazine.field.socialReason'|trans , 'f.socialReason') }}*/
/*                             {% if padding.isSorted('f.socialReason') %}*/
/*                                 */
/*                                 {% if  padding.direction == 'asc' %}*/
/*                                     <span class='ti ti-angle-up pull-right'></span>*/
/*                                 {% else %}*/
/*                                     <span class='ti ti-angle-down pull-right'></span>*/
/*                                 {% endif %}*/
/*                             {% else %}*/
/*                                 <i class='ti ti-more pull-right'></i>*/
/*                             {% endif %}*/
/*                         </th>*/
/*                         <th class="text text-capitalize">*/
/*                             {{ knp_pagination_sortable(padding, 'magazine.field.phone'|trans , 'f.phone') }}*/
/*                             {% if padding.isSorted('f.phone') %}*/
/*                                 */
/*                                 {% if  padding.direction == 'asc' %}*/
/*                                     <span class='ti ti-angle-up pull-right'></span>*/
/*                                 {% else %}*/
/*                                     <span class='ti ti-angle-down pull-right'></span>*/
/*                                 {% endif %}*/
/*                             {% else %}*/
/*                                 <i class='ti ti-more pull-right'></i>*/
/*                             {% endif %}*/
/*                         </th>*/
/*                         <th class="text text-capitalize">*/
/*                             {{ knp_pagination_sortable(padding, 'magazine.field.address'|trans , 'f.address') }}*/
/*                             {% if padding.isSorted('f.address') %}*/
/*                                 */
/*                                 {% if  padding.direction == 'asc' %}*/
/*                                     <span class='ti ti-angle-up pull-right'></span>*/
/*                                 {% else %}*/
/*                                     <span class='ti ti-angle-down pull-right'></span>*/
/*                                 {% endif %}*/
/*                             {% else %}*/
/*                                 <i class='ti ti-more pull-right'></i>*/
/*                             {% endif %}*/
/*                         </th>*/
/*                         <th class="text text-capitalize">*/
/*                             {{ knp_pagination_sortable(padding, 'magazine.field.fax'|trans , 'f.fax') }}*/
/*                             {% if padding.isSorted('f.fax') %}*/
/*                                 */
/*                                 {% if  padding.direction == 'asc' %}*/
/*                                     <span class='ti ti-angle-up pull-right'></span>*/
/*                                 {% else %}*/
/*                                     <span class='ti ti-angle-down pull-right'></span>*/
/*                                 {% endif %}*/
/*                             {% else %}*/
/*                                 <i class='ti ti-more pull-right'></i>*/
/*                             {% endif %}*/
/*                         </th>*/
/*                         <th class="text text-capitalize">*/
/*                             {{ knp_pagination_sortable(padding, 'magazine.field.email'|trans , 'f.email') }}*/
/*                             {% if padding.isSorted('f.email') %}*/
/*                                 */
/*                                 {% if  padding.direction == 'asc' %}*/
/*                                     <span class='ti ti-angle-up pull-right'></span>*/
/*                                 {% else %}*/
/*                                     <span class='ti ti-angle-down pull-right'></span>*/
/*                                 {% endif %}*/
/*                             {% else %}*/
/*                                 <i class='ti ti-more pull-right'></i>*/
/*                             {% endif %}*/
/*                         </th>*/
/*                         <th class="text text-capitalize">*/
/*                             {{ knp_pagination_sortable(padding, 'magazine.field.contact'|trans , 'f.contact') }}*/
/*                             {% if padding.isSorted('f.contact') %}*/
/*                                 */
/*                                 {% if  padding.direction == 'asc' %}*/
/*                                     <span class='ti ti-angle-up pull-right'></span>*/
/*                                 {% else %}*/
/*                                     <span class='ti ti-angle-down pull-right'></span>*/
/*                                 {% endif %}*/
/*                             {% else %}*/
/*                                 <i class='ti ti-more pull-right'></i>*/
/*                             {% endif %}*/
/*                         </th> */
/*                         <th class="text text-capitalize">*/
/*                             {{ knp_pagination_sortable(padding, 'magazine.field.userName'|trans , 'u.username') }}*/
/*                             {% if padding.isSorted('u.username') %}*/
/*                                 */
/*                                 {% if  padding.direction == 'asc' %}*/
/*                                     <span class='ti ti-angle-up pull-right'></span>*/
/*                                 {% else %}*/
/*                                     <span class='ti ti-angle-down pull-right'></span>*/
/*                                 {% endif %}*/
/*                             {% else %}*/
/*                                 <i class='ti ti-more pull-right'></i>*/
/*                             {% endif %}*/
/*                         </th> */
/*                     <th class="text text-capitalize text-primary"> {{ 'magazine.action'|trans }} </th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                  {% if padding|length == 0 %} */
/*                         <td  class="text text-capitalize text-danger text-center" colspan="9">*/
/*                             <i class="fa fa-exclamation-triangle fa-stack-2x"></i>*/
/*                             <p  style="margin-top: 30px;">*/
/*                                 <b>{{ 'provider.list.noResultFound'|trans }}</b>*/
/*                             </p>*/
/*                          </td>*/
/*                     {% else %}*/
/*                         {% for provider in padding %}*/
/*                             <tr>*/
/*                                 <td>{{ provider.socialReason }}</td>*/
/*                                 <td>{{ provider.phone }}</td>*/
/*                                 <td>{{ provider.address }}</td>*/
/*                                 <td>{{ provider.fax }}</td>*/
/*                                 <td>{{ provider.email }}</td>*/
/*                                 <td>{{ provider.contact }}</td>                                        */
/*                                 <td>{{ provider.user.username }}</td>*/
/*                                 <td>*/
/*                                     <div class="btn-group">*/
/*                                         <a href="{{ path('provider_show', { 'id': provider.id }) }}" class="btn btn-success-alt"><i class="ti ti-info"></i></a>*/
/*                                     </div>*/
/*                                 </td>    */
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*             {{ knp_pagination_render(padding) }}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
