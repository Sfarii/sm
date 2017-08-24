<?php

/* :Template:ArticleManagementEditFormTemplate.html.twig */
class __TwigTemplate_68e317a0437ed81948813e71a1fdcd1e393ab0b165a4c576734d59a60604ad65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3feb4bd3ce93ca482717009a8e95d713e8bc1b0ab9ca3cf87743e534d4888d6 = $this->env->getExtension("native_profiler");
        $__internal_a3feb4bd3ce93ca482717009a8e95d713e8bc1b0ab9ca3cf87743e534d4888d6->enter($__internal_a3feb4bd3ce93ca482717009a8e95d713e8bc1b0ab9ca3cf87743e534d4888d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Template:ArticleManagementEditFormTemplate.html.twig"));

        // line 1
        echo "
<div class=\"col-md-6\">
    <div class=\"panel panel-primary\"  style=\"margin-top: 20px;\">
        <div class=\"panel-heading\">
            <h2><i class=\"ti ti-save-alt\"></i> ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.new.name"), "html", null, true);
        echo "</h2>
        </div>
        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal row-border", "id" => "validate-form")));
        // line 9
        echo "
        <div class=\"panel-body\">
            <div class=\"form-group\" style=\"margin-top: 20px;\">
                <div class=\"col-sm-10 col-sm-offset-1\">
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "article", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("magazine.field.article"))));
        // line 15
        echo "
                </div>
                <div  class=\"col-sm-10 col-sm-offset-1 text text-danger\">
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "article", array()), 'errors');
        echo "
                </div>
            </div>
            
            <div class=\"form-group\">
                <div class=\"col-sm-10 col-sm-offset-1 \">
                    <div class=\"input-group\">                           
                        <span class=\"input-group-addon text-capitalize\">
                            <i id=\"load\" class=\"ti ti-archive\"></i> 
                            ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "
                        </span>
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "magazine.field.quantity")));
        // line 31
        echo "
                    </div>
                </div>
                <div  class=\"col-sm-10 col-sm-offset-1\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'errors');
        echo "
                </div>
            </div>
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"form-group\">
                <div class=\"col-sm-10 col-sm-offset-1\">
                    <div class=\"input-group\">                           
                        <span class=\"input-group-addon\">
                            <i id=\"load\" class=\"fa fa-spinner\"></i> 
                            ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search.stock"), "html", null, true);
        echo "
                        </span>
                        <input id=\"stock\"  readonly  type=\"text\" class=\"form-control\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search.stock"), "html", null, true);
        echo "\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"panel-footer\">
            <div class=\"pull-right\">
                <button id=\"new\" class=\"btn btn-primary\" type=\"submit\">
                <i class=\"fa fa-plus\"></i>
                ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.new.submit"), "html", null, true);
        echo "
                </button>
                <button id=\"edit\" class=\"btn btn-primary\" type=\"submit\">
                <i class=\"ti ti-pencil-alt\"></i>
                ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.edit.submit"), "html", null, true);
        echo "
                </button>
                <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), array("id" => $this->getAttribute((isset($context["articleManagement"]) ? $context["articleManagement"] : $this->getContext($context, "articleManagement")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
                    <i class=\"ti ti-back-right\"></i>
                    ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.edit.annuler"), "html", null, true);
        echo "</a>
            </div>
        </div>
        ";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>
    <div class=\"col-md-6\">
        <div class=\"panel panel-primary\"  style=\"margin-top: 20px;\">
            <div class=\"panel-heading\">
                <h2><i class=\"fa fa-list\"></i> ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.list.name"), "html", null, true);
        echo "</h2>
            </div>
            <div class=\"panel-body\">
                <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                            <th>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                            <th>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["articleManagement"]) ? $context["articleManagement"] : $this->getContext($context, "articleManagement")), "detail", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 85
            echo "                            <tr>
                                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "article", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td id=\"quantity";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "article", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "quantity", array()), "html", null, true);
            echo "</td>
                                <td>
                    
                                    <div class=\"btn-group\">
                                        <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), array("id" => $this->getAttribute((isset($context["articleManagement"]) ? $context["articleManagement"] : $this->getContext($context, "articleManagement")), "id", array()), "idDetail" => $this->getAttribute($context["detail"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                        <a href=\"#\" data-box=\"#";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "article", array()), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                    </div>
                                </td>                                    
                                <!-- MESSAGE BOX-->
                                    <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "article", array()), "id", array()), "html", null, true);
            echo "\">
                                        <div class=\"mb-container\">
                                            <div class=\"mb-middle\">
                                                <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.delete.name"), "html", null, true);
            echo " ?</div>
                                                <div class=\"mb-content\">
                                                    <p>";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.delete.message"), "html", null, true);
            echo "</p>                    
                                                    
                                                </div>
                                                <div class=\"mb-footer\">
                                                    <div class=\"pull-right\">
                                                        <form action=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["delete_url"]) ? $context["delete_url"] : $this->getContext($context, "delete_url")), array("id" => $this->getAttribute($context["detail"], "id", array()), "idArticleManagement" => $this->getAttribute((isset($context["articleManagement"]) ? $context["articleManagement"] : $this->getContext($context, "articleManagement")), "id", array()))), "html", null, true);
            echo "  \" method=\"post\">
                                                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                            ";
            // line 108
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["detail"], "id", array()), array(), "array"), 'widget');
            echo " 
                                                            <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                <i class=\"icon-trash\"></i>
                                                                 ";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
            echo " 
                                                            </button>
                                                        </form>
                                                        <button class=\"btn btn-default btn-lg mb-control-close\">
                                                            ";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.no"), "html", null, true);
            echo " </button>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"panel-footer footer-dataTable\"></div>
        </div>
    </div>
</div>";
        
        $__internal_a3feb4bd3ce93ca482717009a8e95d713e8bc1b0ab9ca3cf87743e534d4888d6->leave($__internal_a3feb4bd3ce93ca482717009a8e95d713e8bc1b0ab9ca3cf87743e534d4888d6_prof);

    }

    public function getTemplateName()
    {
        return ":Template:ArticleManagementEditFormTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 124,  229 => 115,  222 => 111,  216 => 108,  211 => 106,  203 => 101,  198 => 99,  192 => 96,  185 => 92,  181 => 91,  172 => 87,  168 => 86,  165 => 85,  161 => 84,  154 => 80,  150 => 79,  146 => 78,  137 => 72,  128 => 66,  122 => 63,  117 => 61,  112 => 59,  105 => 55,  93 => 46,  88 => 44,  79 => 38,  73 => 35,  67 => 31,  65 => 29,  60 => 27,  48 => 18,  43 => 15,  41 => 13,  35 => 9,  33 => 7,  28 => 5,  22 => 1,);
    }
}
/* */
/* <div class="col-md-6">*/
/*     <div class="panel panel-primary"  style="margin-top: 20px;">*/
/*         <div class="panel-heading">*/
/*             <h2><i class="ti ti-save-alt"></i> {{ 'detail.new.name'|trans }}</h2>*/
/*         </div>*/
/*         {{ form_start(form,{*/
/*             'attr' : { 'class' : 'form-horizontal row-border' , 'id' : 'validate-form'} */
/*         }) }}*/
/*         <div class="panel-body">*/
/*             <div class="form-group" style="margin-top: 20px;">*/
/*                 <div class="col-sm-10 col-sm-offset-1">*/
/*                     {{ form_widget(form.article,{*/
/*                     'attr' : { 'class' : 'form-control' , 'placeholder' : 'magazine.field.article'|trans } */
/*                     }) }}*/
/*                 </div>*/
/*                 <div  class="col-sm-10 col-sm-offset-1 text text-danger">*/
/*                     {{ form_errors(form.article) }}*/
/*                 </div>*/
/*             </div>*/
/*             */
/*             <div class="form-group">*/
/*                 <div class="col-sm-10 col-sm-offset-1 ">*/
/*                     <div class="input-group">                           */
/*                         <span class="input-group-addon text-capitalize">*/
/*                             <i id="load" class="ti ti-archive"></i> */
/*                             {{ 'magazine.field.quantity'|trans }}*/
/*                         </span>*/
/*                         {{ form_widget(form.quantity , {*/
/*                         'attr' : { 'class' : 'form-control' ,  'placeholder' : 'magazine.field.quantity' }*/
/*                         }) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div  class="col-sm-10 col-sm-offset-1">*/
/*                     {{ form_errors(form.quantity) }}*/
/*                 </div>*/
/*             </div>*/
/*                 {{ form_widget(form) }}*/
/*             <div class="form-group">*/
/*                 <div class="col-sm-10 col-sm-offset-1">*/
/*                     <div class="input-group">                           */
/*                         <span class="input-group-addon">*/
/*                             <i id="load" class="fa fa-spinner"></i> */
/*                             {{ 'search.stock'|trans }}*/
/*                         </span>*/
/*                         <input id="stock"  readonly  type="text" class="form-control" placeholder="{{ 'search.stock'|trans }}">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*             <div class="pull-right">*/
/*                 <button id="new" class="btn btn-primary" type="submit">*/
/*                 <i class="fa fa-plus"></i>*/
/*                 {{ 'detail.new.submit'|trans }}*/
/*                 </button>*/
/*                 <button id="edit" class="btn btn-primary" type="submit">*/
/*                 <i class="ti ti-pencil-alt"></i>*/
/*                 {{ 'detail.edit.submit'|trans }}*/
/*                 </button>*/
/*                 <a href="{{ path(url, { 'id': articleManagement.id }) }}" class="btn btn-danger">*/
/*                     <i class="ti ti-back-right"></i>*/
/*                     {{ 'detail.edit.annuler'|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* </div>*/
/*     <div class="col-md-6">*/
/*         <div class="panel panel-primary"  style="margin-top: 20px;">*/
/*             <div class="panel-heading">*/
/*                 <h2><i class="fa fa-list"></i> {{ 'detail.list.name'|trans }}</h2>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>{{ 'magazine.field.designation'|trans }}</th>*/
/*                             <th>{{ 'magazine.field.quantity'|trans }}</th>*/
/*                             <th>{{ 'magazine.action'|trans }}</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for detail in articleManagement.detail %}*/
/*                             <tr>*/
/*                                 <td>{{ detail.article.designation }}</td>*/
/*                                 <td id="quantity{{ detail.article.id }}">{{ detail.quantity }}</td>*/
/*                                 <td>*/
/*                     */
/*                                     <div class="btn-group">*/
/*                                         <a href="{{ path(url, { 'id': articleManagement.id , 'idDetail' : detail.id}) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                         <a href="#" data-box="#{{ detail.article.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                     </div>*/
/*                                 </td>                                    */
/*                                 <!-- MESSAGE BOX-->*/
/*                                     <div class="message-box animated fadeIn" data-sound="alert" id="{{ detail.article.id }}">*/
/*                                         <div class="mb-container">*/
/*                                             <div class="mb-middle">*/
/*                                                 <div class="mb-title"><span class="ti ti-trash"></span> {{ 'supportingdocument.delete.name'|trans }} ?</div>*/
/*                                                 <div class="mb-content">*/
/*                                                     <p>{{ 'supportingdocument.delete.message'|trans }}</p>                    */
/*                                                     */
/*                                                 </div>*/
/*                                                 <div class="mb-footer">*/
/*                                                     <div class="pull-right">*/
/*                                                         <form action="{{ path(delete_url, { 'id': detail.id , 'idArticleManagement' : articleManagement.id}) }}  " method="post">*/
/*                                                             <input type="hidden" name="_method" value="DELETE" />*/
/*                                                             {{ form_widget(deleteForms[detail.id]) }} */
/*                                                             <button type="submit" class="btn btn-danger btn-lg">*/
/*                                                                 <i class="icon-trash"></i>*/
/*                                                                  {{ 'messageBox.yes'|trans }} */
/*                                                             </button>*/
/*                                                         </form>*/
/*                                                         <button class="btn btn-default btn-lg mb-control-close">*/
/*                                                             {{ 'messageBox.no'|trans }} </button>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 <!-- END MESSAGE BOX-->*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <div class="panel-footer footer-dataTable"></div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
