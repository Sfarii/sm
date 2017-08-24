<?php

/* ISETSOMagazineBundle:familydurable:show.html.twig */
class __TwigTemplate_c3fb1cd4bf085bfdc178865dfa79d579c23090cdc1a3f4111ddc2da3826d294b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:familydurable:show.html.twig", 1);
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
        $__internal_7f42e4aa9618c68e7c567757c9d48c9261171cd7fd18b86ef9f1b8c3f631ba50 = $this->env->getExtension("native_profiler");
        $__internal_7f42e4aa9618c68e7c567757c9d48c9261171cd7fd18b86ef9f1b8c3f631ba50->enter($__internal_7f42e4aa9618c68e7c567757c9d48c9261171cd7fd18b86ef9f1b8c3f631ba50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:familydurable:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f42e4aa9618c68e7c567757c9d48c9261171cd7fd18b86ef9f1b8c3f631ba50->leave($__internal_7f42e4aa9618c68e7c567757c9d48c9261171cd7fd18b86ef9f1b8c3f631ba50_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b9e73b4484b50173e95e2c3ade6cf2454045639c09a1ff68ae9230a9a91edc45 = $this->env->getExtension("native_profiler");
        $__internal_b9e73b4484b50173e95e2c3ade6cf2454045639c09a1ff68ae9230a9a91edc45->enter($__internal_b9e73b4484b50173e95e2c3ade6cf2454045639c09a1ff68ae9230a9a91edc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("familydurable_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.list.name"), "html", null, true);
        echo "</a>";
        
        $__internal_b9e73b4484b50173e95e2c3ade6cf2454045639c09a1ff68ae9230a9a91edc45->leave($__internal_b9e73b4484b50173e95e2c3ade6cf2454045639c09a1ff68ae9230a9a91edc45_prof);

    }

    // line 3
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_22d9e525aa5e98f31e0d48be8ab725d6f7b1c2c24de95e1cf4b2770941a3d37f = $this->env->getExtension("native_profiler");
        $__internal_22d9e525aa5e98f31e0d48be8ab725d6f7b1c2c24de95e1cf4b2770941a3d37f->enter($__internal_22d9e525aa5e98f31e0d48be8ab725d6f7b1c2c24de95e1cf4b2770941a3d37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.show.name"), "html", null, true);
        
        $__internal_22d9e525aa5e98f31e0d48be8ab725d6f7b1c2c24de95e1cf4b2770941a3d37f->leave($__internal_22d9e525aa5e98f31e0d48be8ab725d6f7b1c2c24de95e1cf4b2770941a3d37f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ab299c8d47b403c613090b7826f57607c671a283a45df9cacf7d4dc056f74ee = $this->env->getExtension("native_profiler");
        $__internal_4ab299c8d47b403c613090b7826f57607c671a283a45df9cacf7d4dc056f74ee->enter($__internal_4ab299c8d47b403c613090b7826f57607c671a283a45df9cacf7d4dc056f74ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"pull-right\">
        <a class=\"btn btn-success\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subfamily_new", array("id" => $this->getAttribute((isset($context["family"]) ? $context["family"] : $this->getContext($context, "family")), "id", array()))), "html", null, true);
        echo "\">
            <i class=\"fa fa-plus\"></i> ";
        // line 7
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
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.show.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\">
                        <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                            
                            ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-inline")));
        // line 23
        echo "

                                <div class=\"input-group\">
                                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => $this->env->getExtension('translator')->trans("family.list.search"))));
        // line 32
        echo "
                                </div>
                                <div class=\"input-group\">
                                    <button type=\"submit\" class=\"btn btn-primary-alt\"><i class=\"ti ti-search\"></i></button>
                                </div>
                                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <i class=\"separator\"></i>
                        <div class=\"panel-heading pull-left\">
                            <label class=\"panel-ctrls-center\">
                               ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "getTotalItemCount", array()), "html", null, true);
        echo " 
                               ";
        // line 44
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
        // line 54
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), $this->env->getExtension('translator')->trans("magazine.field.id"), "f.id");
        echo "
                                    ";
        // line 55
        if ($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "isSorted", array(0 => "f.id"), "method")) {
            // line 56
            echo "                                        
                                        ";
            // line 57
            if (($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "direction", array()) == "asc")) {
                // line 58
                echo "                                            <span class=\"ti ti-angle-up pull-right\"></span>
                                        ";
            } else {
                // line 60
                echo "                                            <span class=\"ti ti-angle-down pull-right\"></span>
                                        ";
            }
            // line 62
            echo "                                    ";
        } else {
            // line 63
            echo "                                        <i class='ti ti-more pull-right'></i>
                                    ";
        }
        // line 65
        echo "                                </th>
                                <th class=\"text text-capitalize\">
                                    ";
        // line 67
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), $this->env->getExtension('translator')->trans("magazine.field.designation"), "f.designation");
        echo "
                                    ";
        // line 68
        if ($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "isSorted", array(0 => "f.designation"), "method")) {
            // line 69
            echo "                                        
                                        ";
            // line 70
            if (($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "direction", array()) == "asc")) {
                // line 71
                echo "                                            <span class=\"ti ti-angle-up pull-right\"></span>
                                        ";
            } else {
                // line 73
                echo "                                            <span class=\"ti ti-angle-down pull-right\"></span>
                                        ";
            }
            // line 75
            echo "                                    ";
        } else {
            // line 76
            echo "                                        <i class='ti ti-more pull-right'></i>
                                    ";
        }
        // line 78
        echo "                                </th>
                                <th class=\"text text-capitalize\">
                                    ";
        // line 80
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                                    ";
        // line 81
        if ($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "isSorted", array(0 => "u.username"), "method")) {
            // line 82
            echo "                                        
                                        ";
            // line 83
            if (($this->getAttribute((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")), "direction", array()) == "asc")) {
                // line 84
                echo "                                            <span class=\"ti ti-angle-up pull-right\"></span>
                                        ";
            } else {
                // line 86
                echo "                                            <span class=\"ti ti-angle-down pull-right\"></span>
                                        ";
            }
            // line 88
            echo "                                    ";
        } else {
            // line 89
            echo "                                        <i class='ti ti-more pull-right'></i>
                                    ";
        }
        // line 91
        echo "                                </th>
                                <th class=\"text text-capitalize text-primary\"> ";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                            </tr>
                        </thead> 
                        <tbody>
                            ";
        // line 96
        if ((twig_length_filter($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families"))) == 0)) {
            // line 97
            echo "                                <td  class=\"text text-capitalize text-danger text-center animated fadeInDown\" colspan=\"4\">
                                    <i class=\"fa fa-exclamation-triangle\"></i>
                                        <b>";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("family.list.noResultFound"), "html", null, true);
            echo "</b>
                                    
                                 </td>
                                
                            ";
        } else {
            // line 104
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")));
            foreach ($context['_seq'] as $context["_key"] => $context["subfamily"]) {
                // line 105
                echo "                                    <tr>
                                        <td>";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["subfamily"], "id", array()), "html", null, true);
                echo "</td>
                                        <td class=\"text text-capitalize\">";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["subfamily"], "designation", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            ";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subfamily"], "user", array()), "username", array()), "html", null, true);
                echo "
                                        </td>
                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subfamily_edit", array("id" => $this->getAttribute($context["subfamily"], "id", array()), "idFamily" => $this->getAttribute($this->getAttribute($context["subfamily"], "family", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a ";
                // line 115
                echo (((twig_length_filter($this->env, $this->getAttribute($context["subfamily"], "articles", array())) != 0)) ? ("disabled=\"\"") : (""));
                echo " href=\"#\" data-box=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subfamily"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                            </div>
                                        </td>
                                         <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["subfamily"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("subfamily.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("subfamily.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subfamily_delete", array("id" => $this->getAttribute($context["subfamily"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 131
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["subfamily"], "id", array()), array(), "array"), 'widget');
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subfamily'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                            ";
        }
        // line 148
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 152
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["families"]) ? $context["families"] : $this->getContext($context, "families")));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
    
";
        
        $__internal_4ab299c8d47b403c613090b7826f57607c671a283a45df9cacf7d4dc056f74ee->leave($__internal_4ab299c8d47b403c613090b7826f57607c671a283a45df9cacf7d4dc056f74ee_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:familydurable:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 152,  344 => 148,  341 => 147,  326 => 138,  319 => 134,  313 => 131,  308 => 129,  300 => 124,  295 => 122,  289 => 119,  280 => 115,  276 => 114,  268 => 109,  263 => 107,  259 => 106,  256 => 105,  251 => 104,  243 => 99,  239 => 97,  237 => 96,  230 => 92,  227 => 91,  223 => 89,  220 => 88,  216 => 86,  212 => 84,  210 => 83,  207 => 82,  205 => 81,  201 => 80,  197 => 78,  193 => 76,  190 => 75,  186 => 73,  182 => 71,  180 => 70,  177 => 69,  175 => 68,  171 => 67,  167 => 65,  163 => 63,  160 => 62,  156 => 60,  152 => 58,  150 => 57,  147 => 56,  145 => 55,  141 => 54,  128 => 44,  124 => 43,  116 => 38,  112 => 37,  105 => 32,  103 => 26,  98 => 23,  96 => 20,  89 => 16,  77 => 7,  73 => 6,  70 => 5,  64 => 4,  52 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}<a href="{{ path('familydurable_index')}}">{{ 'family.list.name'|trans }}</a>{% endblock %}*/
/* {% block breadcrumbActive %}{{ 'family.show.name'|trans }}{% endblock %}*/
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
