<?php

/* ISETSOMagazineBundle:familyconsumable:show.html.twig */
class __TwigTemplate_979722b0795ea5d5f8b47691a9600713ea8be8915c418f35a187b23c2622eeb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:familyconsumable:show.html.twig", 1);
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
        $__internal_b261bc85bdae4124f264f931c4a0a02326f622efe790346173d5baeb0ff0963b = $this->env->getExtension("native_profiler");
        $__internal_b261bc85bdae4124f264f931c4a0a02326f622efe790346173d5baeb0ff0963b->enter($__internal_b261bc85bdae4124f264f931c4a0a02326f622efe790346173d5baeb0ff0963b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:familyconsumable:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b261bc85bdae4124f264f931c4a0a02326f622efe790346173d5baeb0ff0963b->leave($__internal_b261bc85bdae4124f264f931c4a0a02326f622efe790346173d5baeb0ff0963b_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d6105597a4d2634e8e99fb52ccd69ce564822a5e4e58e3f0b47615f408a48d4c = $this->env->getExtension("native_profiler");
        $__internal_d6105597a4d2634e8e99fb52ccd69ce564822a5e4e58e3f0b47615f408a48d4c->enter($__internal_d6105597a4d2634e8e99fb52ccd69ce564822a5e4e58e3f0b47615f408a48d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("familyconsumable_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.list.name"), "html", null, true);
        echo "</a>
";
        
        $__internal_d6105597a4d2634e8e99fb52ccd69ce564822a5e4e58e3f0b47615f408a48d4c->leave($__internal_d6105597a4d2634e8e99fb52ccd69ce564822a5e4e58e3f0b47615f408a48d4c_prof);

    }

    // line 5
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_941489d17592888763b11e2c1ff4a02e256b5c4a79345ede99198e289c745f7b = $this->env->getExtension("native_profiler");
        $__internal_941489d17592888763b11e2c1ff4a02e256b5c4a79345ede99198e289c745f7b->enter($__internal_941489d17592888763b11e2c1ff4a02e256b5c4a79345ede99198e289c745f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.show.name"), "html", null, true);
        echo "
";
        
        $__internal_941489d17592888763b11e2c1ff4a02e256b5c4a79345ede99198e289c745f7b->leave($__internal_941489d17592888763b11e2c1ff4a02e256b5c4a79345ede99198e289c745f7b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4959a389f7a4c3978434c4b98eeacdecdd104527b15f2698f96b6e5db7eba8f0 = $this->env->getExtension("native_profiler");
        $__internal_4959a389f7a4c3978434c4b98eeacdecdd104527b15f2698f96b6e5db7eba8f0->enter($__internal_4959a389f7a4c3978434c4b98eeacdecdd104527b15f2698f96b6e5db7eba8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"pull-right\">
        <a class=\"btn btn-success\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subfamily_new", array("id" => $this->getAttribute((isset($context["family"]) ? $context["family"] : $this->getContext($context, "family")), "id", array()))), "html", null, true);
        echo "\">
            <i class=\"fa fa-plus\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("subfamily.new.submit"), "html", null, true);
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
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.show.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\">
                        <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                            
                            ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-inline")));
        // line 27
        echo "

                                <div class=\"input-group\">
                                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => $this->env->getExtension('translator')->trans("family.list.search"))));
        // line 36
        echo "
                                </div>
                                <div class=\"input-group\">
                                    <button type=\"submit\" class=\"btn btn-primary-alt\"><i class=\"ti ti-search\"></i></button>
                                </div>
                                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <i class=\"separator\"></i>
                        <div class=\"panel-heading pull-left\">
                            <label class=\"panel-ctrls-center\">
                               ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "getTotalItemCount", array()), "html", null, true);
        echo " 
                               ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.list.resultFound"), "html", null, true);
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
        // line 58
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), $this->env->getExtension('translator')->trans("magazine.field.id"), "f.id");
        echo "
                                    ";
        // line 59
        if ($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "isSorted", array(0 => "f.id"), "method")) {
            // line 60
            echo "                                        
                                        ";
            // line 61
            if (($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "direction", array()) == "asc")) {
                // line 62
                echo "                                            <span class=\"ti ti-angle-up pull-right\"></span>
                                        ";
            } else {
                // line 64
                echo "                                            <span class=\"ti ti-angle-down pull-right\"></span>
                                        ";
            }
            // line 66
            echo "                                    ";
        } else {
            // line 67
            echo "                                        <i class='ti ti-more pull-right'></i>
                                    ";
        }
        // line 69
        echo "                                </th>
                                <th class=\"text text-capitalize\">
                                    ";
        // line 71
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), $this->env->getExtension('translator')->trans("magazine.field.designation"), "f.designation");
        echo "
                                    ";
        // line 72
        if ($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "isSorted", array(0 => "f.designation"), "method")) {
            // line 73
            echo "                                        
                                        ";
            // line 74
            if (($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "direction", array()) == "asc")) {
                // line 75
                echo "                                            <span class=\"ti ti-angle-up pull-right\"></span>
                                        ";
            } else {
                // line 77
                echo "                                            <span class=\"ti ti-angle-down pull-right\"></span>
                                        ";
            }
            // line 79
            echo "                                    ";
        } else {
            // line 80
            echo "                                        <i class='ti ti-more pull-right'></i>
                                    ";
        }
        // line 82
        echo "                                </th>
                                <th class=\"text text-capitalize\">
                                    ";
        // line 84
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                                    ";
        // line 85
        if ($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "isSorted", array(0 => "u.username"), "method")) {
            // line 86
            echo "                                        
                                        ";
            // line 87
            if (($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "direction", array()) == "asc")) {
                // line 88
                echo "                                            <span class=\"ti ti-angle-up pull-right\"></span>
                                        ";
            } else {
                // line 90
                echo "                                            <span class=\"ti ti-angle-down pull-right\"></span>
                                        ";
            }
            // line 92
            echo "                                    ";
        } else {
            // line 93
            echo "                                        <i class='ti ti-more pull-right'></i>
                                    ";
        }
        // line 95
        echo "                                </th>
                                <th class=\"text text-capitalize text-primary\"> ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                            </tr>
                        </thead> 
                        <tbody>
                            ";
        // line 100
        if ((twig_length_filter($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families"))) == 0)) {
            // line 101
            echo "                                <td  class=\"text text-capitalize text-danger text-center animated fadeInDown\" colspan=\"4\">
                                    <i class=\"fa fa-exclamation-triangle\"></i>
                                        <b>";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.list.noResultFound"), "html", null, true);
            echo "</b>
                                    
                                 </td>
                                
                            ";
        } else {
            // line 108
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")));
            foreach ($context['_seq'] as $context["_key"] => $context["subfamily"]) {
                // line 109
                echo "                                    <tr>
                                        <td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["subfamily"], "id", array()), "html", null, true);
                echo "</td>
                                        <td class=\"text text-capitalize\">";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["subfamily"], "designation", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            ";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subfamily"], "user", array()), "username", array()), "html", null, true);
                echo "
                                        </td>
                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subfamily_edit", array("id" => $this->getAttribute($context["subfamily"], "id", array()), "idFamily" => $this->getAttribute($this->getAttribute($context["subfamily"], "family", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a ";
                // line 119
                echo (((twig_length_filter($this->env, $this->getAttribute($context["subfamily"], "articles", array())) != 0)) ? ("disabled=\"\"") : (""));
                echo " href=\"#\" data-box=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subfamily"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                            </div>
                                        </td>
                                         <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["subfamily"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("subfamily.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 128
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("subfamily.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subfamily_delete", array("id" => $this->getAttribute($context["subfamily"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 135
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["subfamily"], "id", array()), array(), "array"), 'widget');
                echo " 
                                                                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                        <i class=\"icon-trash\"></i>
                                                                         ";
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                    </button>
                                                                </form>
                                                                <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                    ";
                // line 142
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subfamily'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                            ";
        }
        // line 152
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 156
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_4959a389f7a4c3978434c4b98eeacdecdd104527b15f2698f96b6e5db7eba8f0->leave($__internal_4959a389f7a4c3978434c4b98eeacdecdd104527b15f2698f96b6e5db7eba8f0_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:familyconsumable:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 156,  350 => 152,  347 => 151,  332 => 142,  325 => 138,  319 => 135,  314 => 133,  306 => 128,  301 => 126,  295 => 123,  286 => 119,  282 => 118,  274 => 113,  269 => 111,  265 => 110,  262 => 109,  257 => 108,  249 => 103,  245 => 101,  243 => 100,  236 => 96,  233 => 95,  229 => 93,  226 => 92,  222 => 90,  218 => 88,  216 => 87,  213 => 86,  211 => 85,  207 => 84,  203 => 82,  199 => 80,  196 => 79,  192 => 77,  188 => 75,  186 => 74,  183 => 73,  181 => 72,  177 => 71,  173 => 69,  169 => 67,  166 => 66,  162 => 64,  158 => 62,  156 => 61,  153 => 60,  151 => 59,  147 => 58,  134 => 48,  130 => 47,  122 => 42,  118 => 41,  111 => 36,  109 => 30,  104 => 27,  102 => 24,  95 => 20,  83 => 11,  79 => 10,  76 => 9,  70 => 8,  60 => 6,  54 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('familyconsumable_index')}}">{{ 'family.list.name'|trans }}</a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'family.show.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="pull-right">*/
/*         <a class="btn btn-success" href="{{ path('subfamily_new',{ 'id' : family.id }) }}">*/
/*             <i class="fa fa-plus"></i> {{ 'subfamily.new.submit'|trans }}*/
/*         </a>*/
/*     </div>*/
/*     </br></br>*/
/* <div data-widget-group="group1">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'family.show.name'|trans }}</h2>*/
/*                     <div class="panel-ctrls">*/
/*                         <div id="example_filter" class="dataTables_filter pull-right">*/
/*                             */
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
/*                                 {{ form_widget(form) }}*/
/*                             {{ form_end(form) }}*/
/*                         </div>*/
/*                         <i class="separator"></i>*/
/*                         <div class="panel-heading pull-left">*/
/*                             <label class="panel-ctrls-center">*/
/*                                {{ families.getTotalItemCount }} */
/*                                {{ 'family.list.resultFound'|trans }}*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel-body no-padding">*/
/*                     <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                         <thead>*/
/*                             <tr>*/
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
/*                                 <th class="text text-capitalize text-primary"> {{ 'magazine.action'|trans }} </th>*/
/*                             </tr>*/
/*                         </thead> */
/*                         <tbody>*/
/*                             {% if families|length == 0 %}*/
/*                                 <td  class="text text-capitalize text-danger text-center animated fadeInDown" colspan="4">*/
/*                                     <i class="fa fa-exclamation-triangle"></i>*/
/*                                         <b>{{ 'family.list.noResultFound'|trans }}</b>*/
/*                                     */
/*                                  </td>*/
/*                                 */
/*                             {% else %}*/
/*                                 {% for subfamily in families %}*/
/*                                     <tr>*/
/*                                         <td>{{ subfamily.id }}</td>*/
/*                                         <td class="text text-capitalize">{{ subfamily.designation }}</td>*/
/*                                         <td>*/
/*                                             {{ subfamily.user.username }}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             */
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('subfamily_edit', { 'id': subfamily.id, 'idFamily' : subfamily.family.id}) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                 <a {{ subfamily.articles|length != 0 ? 'disabled=""' : "" }} href="#" data-box="#{{ subfamily.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                             </div>*/
/*                                         </td>*/
/*                                          <!-- MESSAGE BOX-->*/
/*                                             <div class="message-box animated fadeIn" data-sound="alert" id="{{ subfamily.id }}">*/
/*                                                 <div class="mb-container">*/
/*                                                     <div class="mb-middle">*/
/*                                                         <div class="mb-title"><span class="ti ti-trash"></span> {{ 'subfamily.delete.name'|trans }} ?</div>*/
/*                                                         <div class="mb-content">*/
/*                                                             <p>{{ 'subfamily.delete.message'|trans }}</p>                    */
/*                                                             */
/*                                                         </div>*/
/*                                                         <div class="mb-footer">*/
/*                                                             <div class="pull-right">*/
/*                                                                 <form action="{{ path('subfamily_delete', { 'id': subfamily.id }) }}" method="post">*/
/*                                                                     <input type="hidden" name="_method" value="DELETE" />*/
/*                                                                     {{ form_widget(deleteForms[ subfamily.id ]) }} */
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
/* */
