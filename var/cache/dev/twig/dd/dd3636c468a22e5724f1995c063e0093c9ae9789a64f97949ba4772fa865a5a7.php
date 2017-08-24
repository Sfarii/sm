<?php

/* ISETSOMagazineBundle:typelocal:show.html.twig */
class __TwigTemplate_cba5ff8a1c574e214b55fe290f09f958bec9379337d3f72f7e226429dbbfa6ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:typelocal:show.html.twig", 1);
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
        $__internal_0cfb9905d9113ea2ede3683c8bb6e7a72c9c01c7732c00c40ca2151e97cc3a56 = $this->env->getExtension("native_profiler");
        $__internal_0cfb9905d9113ea2ede3683c8bb6e7a72c9c01c7732c00c40ca2151e97cc3a56->enter($__internal_0cfb9905d9113ea2ede3683c8bb6e7a72c9c01c7732c00c40ca2151e97cc3a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:typelocal:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cfb9905d9113ea2ede3683c8bb6e7a72c9c01c7732c00c40ca2151e97cc3a56->leave($__internal_0cfb9905d9113ea2ede3683c8bb6e7a72c9c01c7732c00c40ca2151e97cc3a56_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_bc7d73d4785b69bd3f9c1d12be3c24f9e57f79f1a5be860642f58c89405a4460 = $this->env->getExtension("native_profiler");
        $__internal_bc7d73d4785b69bd3f9c1d12be3c24f9e57f79f1a5be860642f58c89405a4460->enter($__internal_bc7d73d4785b69bd3f9c1d12be3c24f9e57f79f1a5be860642f58c89405a4460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("typelocal_index");
        echo "\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("typelocal.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_bc7d73d4785b69bd3f9c1d12be3c24f9e57f79f1a5be860642f58c89405a4460->leave($__internal_bc7d73d4785b69bd3f9c1d12be3c24f9e57f79f1a5be860642f58c89405a4460_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_eb14567aa806bc030edd02344c0d105250ed5dfa25dbf98607f2d82ce10a35fd = $this->env->getExtension("native_profiler");
        $__internal_eb14567aa806bc030edd02344c0d105250ed5dfa25dbf98607f2d82ce10a35fd->enter($__internal_eb14567aa806bc030edd02344c0d105250ed5dfa25dbf98607f2d82ce10a35fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("typelocal.show.name"), "html", null, true);
        
        $__internal_eb14567aa806bc030edd02344c0d105250ed5dfa25dbf98607f2d82ce10a35fd->leave($__internal_eb14567aa806bc030edd02344c0d105250ed5dfa25dbf98607f2d82ce10a35fd_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_968ea1dd542a9c015602547950422de3b76dd18c5a93a7b5328d4289875b2000 = $this->env->getExtension("native_profiler");
        $__internal_968ea1dd542a9c015602547950422de3b76dd18c5a93a7b5328d4289875b2000->enter($__internal_968ea1dd542a9c015602547950422de3b76dd18c5a93a7b5328d4289875b2000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div data-widget-group=\"group1\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2><i class=\"fa fa-list\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("typelocal.show.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\">
                        <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                            <form novalidate=\"novalidate\" class=\"form-inline\" action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typelocal_show", array("id" => $this->getAttribute((isset($context["typeLocal"]) ? $context["typeLocal"] : $this->getContext($context, "typeLocal")), "id", array()))), "html", null, true);
        echo "\" method=\"GET\">

                                <div class=\"input-group\">
                                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => $this->env->getExtension('translator')->trans("family.list.search"))));
        // line 26
        echo "
                                </div>
                                <div class=\"input-group\">
                                    <button type=\"submit\" class=\"btn btn-primary-alt\"><i class=\"ti ti-search\"></i></button>
                                </div>
                                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            </form>
                        </div>
                        <i class=\"separator\"></i>
                        <div class=\"panel-heading pull-left\">
                            <label class=\"panel-ctrls-center\">
                               ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "getTotalItemCount", array()), "html", null, true);
        echo "
                               ";
        // line 38
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
        // line 48
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.id"), "f.id");
        echo "
                                        ";
        // line 49
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 50
            echo "                                            
                                            ";
            // line 51
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 52
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 54
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 56
            echo "                                        ";
        } else {
            // line 57
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 59
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 61
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.designation"), "f.designation");
        echo "
                                        ";
        // line 62
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.designation"), "method")) {
            // line 63
            echo "                                            
                                            ";
            // line 64
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 65
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 67
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 69
            echo "                                        ";
        } else {
            // line 70
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 72
        echo "                                    </th>                                <th class=\"text text-capitalize text-primary\">
                                     ";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo " 
                                    <i class='ti ti-more pull-right'></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 79
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                    <td colspan=\"4\">
                                        <i class=\"ti ti-alert\"></i> ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("local.list.noResultFound"), "html", null, true);
            echo "
                                     </td>
                                ";
        } else {
            // line 84
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
                // line 85
                echo "                                    <tr>
                                        <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "designation", array()), "html", null, true);
                echo "</td>                                       
                                        <td>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                            ";
        }
        // line 92
        echo "                         </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 96
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_968ea1dd542a9c015602547950422de3b76dd18c5a93a7b5328d4289875b2000->leave($__internal_968ea1dd542a9c015602547950422de3b76dd18c5a93a7b5328d4289875b2000_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:typelocal:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 96,  236 => 92,  233 => 91,  224 => 88,  220 => 87,  216 => 86,  213 => 85,  208 => 84,  202 => 81,  197 => 79,  188 => 73,  185 => 72,  181 => 70,  178 => 69,  174 => 67,  170 => 65,  168 => 64,  165 => 63,  163 => 62,  159 => 61,  155 => 59,  151 => 57,  148 => 56,  144 => 54,  140 => 52,  138 => 51,  135 => 50,  133 => 49,  129 => 48,  116 => 38,  112 => 37,  103 => 31,  96 => 26,  94 => 20,  88 => 17,  82 => 14,  75 => 9,  69 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('typelocal_index') }}">*/
/*        {{ 'typelocal.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*      {% block breadcrumbActive %}{{ 'typelocal.show.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <div data-widget-group="group1">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'typelocal.show.name'|trans }}</h2>*/
/*                     <div class="panel-ctrls">*/
/*                         <div id="example_filter" class="dataTables_filter pull-right">*/
/*                             <form novalidate="novalidate" class="form-inline" action="{{ path('typelocal_show' ,{ 'id' : typeLocal.id }) }}" method="GET">*/
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
/*                                 {{ form_widget(form) }}*/
/*                             </form>*/
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
/*                                     </th>                                <th class="text text-capitalize text-primary">*/
/*                                      {{ 'magazine.field.userName'|trans }} */
/*                                     <i class='ti ti-more pull-right'></i>*/
/*                                 </th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                              {% if padding|length == 0 %} */
/*                                     <td colspan="4">*/
/*                                         <i class="ti ti-alert"></i> {{ 'local.list.noResultFound'|trans }}*/
/*                                      </td>*/
/*                                 {% else %}*/
/*                                 {% for local in padding %}*/
/*                                     <tr>*/
/*                                         <td>{{ local.id }}</td>*/
/*                                         <td>{{ local.designation }}</td>                                       */
/*                                         <td>{{ local.user.username }}</td>*/
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
