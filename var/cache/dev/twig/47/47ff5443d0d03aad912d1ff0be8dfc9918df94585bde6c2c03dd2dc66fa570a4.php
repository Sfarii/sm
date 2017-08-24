<?php

/* ISETSOMagazineBundle:provider:index.html.twig */
class __TwigTemplate_bcf9114da79dbe929cd7b1f3bdb080c450de4308439127cb10778f0ee848ee6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:provider:index.html.twig", 1);
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
        $__internal_451477565d8bebff80740a6cef185b5ea0df6ab33d8451b18399c7e315e46041 = $this->env->getExtension("native_profiler");
        $__internal_451477565d8bebff80740a6cef185b5ea0df6ab33d8451b18399c7e315e46041->enter($__internal_451477565d8bebff80740a6cef185b5ea0df6ab33d8451b18399c7e315e46041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:provider:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_451477565d8bebff80740a6cef185b5ea0df6ab33d8451b18399c7e315e46041->leave($__internal_451477565d8bebff80740a6cef185b5ea0df6ab33d8451b18399c7e315e46041_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_fce39d2ab0272aabcab8ebf709882b2a2706de855505d91cf782dbdc833f75fd = $this->env->getExtension("native_profiler");
        $__internal_fce39d2ab0272aabcab8ebf709882b2a2706de855505d91cf782dbdc833f75fd->enter($__internal_fce39d2ab0272aabcab8ebf709882b2a2706de855505d91cf782dbdc833f75fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.list.name"), "html", null, true);
        
        $__internal_fce39d2ab0272aabcab8ebf709882b2a2706de855505d91cf782dbdc833f75fd->leave($__internal_fce39d2ab0272aabcab8ebf709882b2a2706de855505d91cf782dbdc833f75fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5462eacb22831b5e6e9afb97ee48331a8a02a4fd54ac3688e2cca93a8344c060 = $this->env->getExtension("native_profiler");
        $__internal_5462eacb22831b5e6e9afb97ee48331a8a02a4fd54ac3688e2cca93a8344c060->enter($__internal_5462eacb22831b5e6e9afb97ee48331a8a02a4fd54ac3688e2cca93a8344c060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"pull-right\">
        <a class=\"btn btn-success\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("provider_new");
        echo "\">
                <i class=\"fa fa-plus\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.new.submit"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.list.name"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.list.resultFound"), "html", null, true);
        echo "
                            </label>
                        </div>
                    </div>
                </div>
                <div class=\"panel-body no-padding table-responsive\">
                    <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                            <tr>
                                    
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 51
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.socialReason"), "f.socialReason");
        echo "
                                        ";
        // line 52
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.socialReason"), "method")) {
            // line 53
            echo "                                            
                                            ";
            // line 54
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 55
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 57
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 59
            echo "                                        ";
        } else {
            // line 60
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 62
        echo "                                    </th>
                                    
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 65
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.address"), "f.address");
        echo "
                                        ";
        // line 66
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.address"), "method")) {
            // line 67
            echo "                                            
                                            ";
            // line 68
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 69
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 71
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 73
            echo "                                        ";
        } else {
            // line 74
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 76
        echo "                                    </th>
                                    
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 79
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.email"), "f.email");
        echo "
                                        ";
        // line 80
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.email"), "method")) {
            // line 81
            echo "                                            
                                            ";
            // line 82
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 83
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 85
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 87
            echo "                                        ";
        } else {
            // line 88
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 90
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 92
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.contact"), "f.contact");
        echo "
                                        ";
        // line 93
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.contact"), "method")) {
            // line 94
            echo "                                            
                                            ";
            // line 95
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 96
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 98
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 100
            echo "                                        ";
        } else {
            // line 101
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 103
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 105
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                                        ";
        // line 106
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "u.username"), "method")) {
            // line 107
            echo "                                            
                                            ";
            // line 108
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 109
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 111
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 113
            echo "                                        ";
        } else {
            // line 114
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 116
        echo "                                    </th> 
                                <th  class=\"text text-capitalize text-primary\"> ";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 121
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                <td  class=\"text text-capitalize text-danger text-center\" colspan=\"9\">
                                    <p style=\"margin-top: 1%;\">
                                            <i class=\"fa fa-exclamation-triangle\"></i> <b>";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.list.noResultFound"), "html", null, true);
            echo "</b>
                                        </p>
                                 </td>
                                    
                                ";
        } else {
            // line 129
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
                // line 130
                echo "                                    <tr>
                                        <td>";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "socialReason", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "address", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "email", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "contact", array()), "html", null, true);
                echo "</td>                                        
                                        <td>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["provider"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("provider_edit", array("id" => $this->getAttribute($context["provider"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a  ";
                // line 140
                echo (((twig_length_filter($this->env, $this->getAttribute($context["provider"], "journals", array())) != 0)) ? ("disabled=\"\"") : (""));
                echo " href=\"#\" data-box=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                                <a href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("provider_show", array("id" => $this->getAttribute($context["provider"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success-alt\"><i class=\"ti ti-info\"></i></a>
                                            </div>
                                        </td>                                    <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 147
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 149
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("provider_delete", array("id" => $this->getAttribute($context["provider"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 156
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["provider"], "id", array()), array(), "array"), 'widget');
                echo " 
                                                                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                        <i class=\"icon-trash\"></i>
                                                                         ";
                // line 159
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                    </button>
                                                                </form>
                                                                <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                    ";
                // line 163
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
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
        </div>
    </div>
</div>
";
        
        $__internal_5462eacb22831b5e6e9afb97ee48331a8a02a4fd54ac3688e2cca93a8344c060->leave($__internal_5462eacb22831b5e6e9afb97ee48331a8a02a4fd54ac3688e2cca93a8344c060_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:provider:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 177,  393 => 173,  390 => 172,  375 => 163,  368 => 159,  362 => 156,  357 => 154,  349 => 149,  344 => 147,  338 => 144,  332 => 141,  326 => 140,  322 => 139,  315 => 135,  311 => 134,  307 => 133,  303 => 132,  299 => 131,  296 => 130,  291 => 129,  283 => 124,  277 => 121,  270 => 117,  267 => 116,  263 => 114,  260 => 113,  256 => 111,  252 => 109,  250 => 108,  247 => 107,  245 => 106,  241 => 105,  237 => 103,  233 => 101,  230 => 100,  226 => 98,  222 => 96,  220 => 95,  217 => 94,  215 => 93,  211 => 92,  207 => 90,  203 => 88,  200 => 87,  196 => 85,  192 => 83,  190 => 82,  187 => 81,  185 => 80,  181 => 79,  176 => 76,  172 => 74,  169 => 73,  165 => 71,  161 => 69,  159 => 68,  156 => 67,  154 => 66,  150 => 65,  145 => 62,  141 => 60,  138 => 59,  134 => 57,  130 => 55,  128 => 54,  125 => 53,  123 => 52,  119 => 51,  105 => 40,  101 => 39,  93 => 34,  86 => 29,  84 => 23,  79 => 20,  77 => 17,  71 => 14,  60 => 6,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumbActive %}{{ 'provider.list.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <div class="pull-right">*/
/*         <a class="btn btn-success" href="{{ path('provider_new') }}">*/
/*                 <i class="fa fa-plus"></i> {{ 'provider.new.submit'|trans }}*/
/*             </a>    </div>*/
/*     </br></br>*/
/* <div data-widget-group="group1">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'provider.list.name'|trans }}</h2>*/
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
/*                                {{ 'provider.list.resultFound'|trans }}*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel-body no-padding table-responsive">*/
/*                     <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                     */
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.socialReason'|trans , 'f.socialReason') }}*/
/*                                         {% if padding.isSorted('f.socialReason') %}*/
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
/*                                     */
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.address'|trans , 'f.address') }}*/
/*                                         {% if padding.isSorted('f.address') %}*/
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
/*                                     */
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.email'|trans , 'f.email') }}*/
/*                                         {% if padding.isSorted('f.email') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.contact'|trans , 'f.contact') }}*/
/*                                         {% if padding.isSorted('f.contact') %}*/
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
/*                                 <th  class="text text-capitalize text-primary"> {{ 'magazine.action'|trans }} </th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                              {% if padding|length == 0 %} */
/*                                 <td  class="text text-capitalize text-danger text-center" colspan="9">*/
/*                                     <p style="margin-top: 1%;">*/
/*                                             <i class="fa fa-exclamation-triangle"></i> <b>{{ 'provider.list.noResultFound'|trans }}</b>*/
/*                                         </p>*/
/*                                  </td>*/
/*                                     */
/*                                 {% else %}*/
/*                                 {% for provider in padding %}*/
/*                                     <tr>*/
/*                                         <td>{{ provider.socialReason }}</td>*/
/*                                         <td>{{ provider.address }}</td>*/
/*                                         <td>{{ provider.email }}</td>*/
/*                                         <td>{{ provider.contact }}</td>                                        */
/*                                         <td>{{ provider.user.username }}</td>*/
/*                                         <td>*/
/*                                             */
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('provider_edit', { 'id': provider.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                 <a  {{ provider.journals|length != 0 ? 'disabled=""' : "" }} href="#" data-box="#{{ provider.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                                 <a href="{{ path('provider_show', { 'id': provider.id }) }}" class="btn btn-success-alt"><i class="ti ti-info"></i></a>*/
/*                                             </div>*/
/*                                         </td>                                    <!-- MESSAGE BOX-->*/
/*                                             <div class="message-box animated fadeIn" data-sound="alert" id="{{ provider.id }}">*/
/*                                                 <div class="mb-container">*/
/*                                                     <div class="mb-middle">*/
/*                                                         <div class="mb-title"><span class="ti ti-trash"></span> {{ 'provider.delete.name'|trans }} ?</div>*/
/*                                                         <div class="mb-content">*/
/*                                                             <p>{{ 'provider.delete.message'|trans }}</p>                    */
/*                                                             */
/*                                                         </div>*/
/*                                                         <div class="mb-footer">*/
/*                                                             <div class="pull-right">*/
/*                                                                 <form action="{{ path('provider_delete', { 'id': provider.id }) }}" method="post">*/
/*                                                                     <input type="hidden" name="_method" value="DELETE" />*/
/*                                                                     {{ form_widget(deleteForms[ provider.id ]) }} */
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
