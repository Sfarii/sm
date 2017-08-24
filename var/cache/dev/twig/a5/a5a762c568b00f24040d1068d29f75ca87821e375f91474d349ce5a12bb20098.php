<?php

/* :Template:OrderArticleAddFormTemplate.html.twig */
class __TwigTemplate_9e044164915d79f5275ddc009768ccf5bae1469574886cb6c4bf333dcd495640 extends Twig_Template
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
        $__internal_9ee0bd4c55c732f78941a803e6cfce2dd326dec01085c92ff0c235bd25193d79 = $this->env->getExtension("native_profiler");
        $__internal_9ee0bd4c55c732f78941a803e6cfce2dd326dec01085c92ff0c235bd25193d79->enter($__internal_9ee0bd4c55c732f78941a803e6cfce2dd326dec01085c92ff0c235bd25193d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Template:OrderArticleAddFormTemplate.html.twig"));

        // line 1
        echo "<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h2><i class=\"ti ti-save-alt\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["form_name"]) ? $context["form_name"] : $this->getContext($context, "form_name")), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"panel-body\">
        <ul id=\"basicwizard-header\" class=\"stepy-header\">
            <li id=\"basicwizard-head-0\"  class=\"stepy-active\" style=\"cursor: default;\">
                <a href=\"#\">
                    <div>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.firstStep"), "html", null, true);
        echo "</div>
                    <span>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["form_name"]) ? $context["form_name"] : $this->getContext($context, "form_name")), "html", null, true);
        echo "</span>
                </a>
            </li>
            <li id=\"basicwizard-head-1\"  style=\"cursor: default;\">
                <a href=\"#\">
                    <div>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.secondStep"), "html", null, true);
        echo "</div>
                    <span>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.new.name"), "html", null, true);
        echo "</span>
                </a>
            </li>
        </ul>
        <div id=\"step2\" class=\"col-md-12\" style=\"visibility: hidden;display: none;\">
            <div class=\"col-md-6\">
                <legend><h4><i class=\"ti ti-save-alt\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.new.name"), "html", null, true);
        echo "</h4></legend>
                
                   
                    ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), 'form_start', array("attr" => array("class" => "form-horizontal row-border", "id" => "validate-form")));
        // line 27
        echo "
                    <div class=\"form-group\"  style=\"margin-top: 20px;\">
                        <div class=\"col-sm-6\">
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "family", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate")));
        // line 32
        echo "
                        </div>
                        <div class=\"col-sm-6\">
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "subFamily", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate")));
        // line 37
        echo "
                        </div>
                    </div>
                     <div class=\"form-group\">
                        <div class=\"col-sm-10 col-sm-offset-1\">
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "article", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate", "placeholder" => $this->env->getExtension('translator')->trans("magazine.field.article"))));
        // line 44
        echo "
                        </div>
                        <div id=\"article_error\"  class=\"col-sm-10 col-sm-offset-1 text-danger\">
                            
                        </div>
                    </div>
                    
                    <div class=\"form-group\">
                        <div class=\"col-sm-6\">
                            <div class=\"input-group\">                           
                                <span class=\"input-group-addon text-capitalize\">
                                    <i id=\"load\" class=\"ti ti-archive\"></i> 
                                    ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "
                                </span>
                                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "quantity", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "magazine.field.quantity")));
        // line 60
        echo "
                            </div>
                            <div id=\"quantity_error\"  class=\" text-danger\">
                            
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"input-group\">                           
                                <span class=\"input-group-addon\">
                                <i id=\"load\" class=\"fa fa-spinner\"></i> 
                                ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search.stock"), "html", null, true);
        echo "
                                </span>
                                <input id=\"stock\"  readonly  type=\"text\" class=\"form-control\" placeholder=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search.stock"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        
                    </div>
                        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), 'widget');
        echo "

                    ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), 'form_end');
        echo "
                    
                    <div class=\"pull-right\">
                        <button id=\"new\" class=\"btn btn-primary\">
                        <i class=\"fa fa-plus\"></i>
                        ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.new.submit"), "html", null, true);
        echo "
                        </button>
                        <button id=\"edit\" class=\"btn btn-primary\">
                        <i class=\"ti ti-pencil-alt\"></i>
                        ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.edit.submit"), "html", null, true);
        echo "
                        </button>
                        <button id=\"annuler\" class=\"btn btn-danger\">
                            <i class=\"ti ti-back-right\"></i>
                            ";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.edit.annuler"), "html", null, true);
        echo "
                        </button>
                    </div>
                    
            </div>
            <div class=\"col-md-6\" style=\"border-left: 1px solid black;\">
                <legend><h4><i class=\"fa fa-table\"></i> ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.list.name"), "html", null, true);
        echo "</h4></legend>

                <div class=\"btn-group\">
                    <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary toggle-vis\" data-column=\"0\" name=\"options\" id=\"designation\"> ";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "
                    </a>
                    
                    <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary toggle-vis\" data-column=\"1\"> ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "
                    </a>
                    <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary active  toggle-vis\" data-column=\"2\"> ";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "
                    </a>
                    <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary active toggle-vis\" data-column=\"3\"> ";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "
                    </a>
                    
                </div> 
                <hr>
                <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                            <th>";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                            <th>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                            <th>";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                            <th>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody id=\"list\">
                        
                    </tbody>
                </table>
                <div id=\"dialog\"></div>
            </div>
        </div>
        <div id=\"step1\" class=\"col-md-12\" >
            <legend><h4><i class=\"ti ti-save-alt\"></i> ";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["form_name"]) ? $context["form_name"] : $this->getContext($context, "form_name")), "html", null, true);
        echo "</h4></legend> 
            ";
        // line 132
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal row-border", "id" => "form")));
        echo " 
            ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 134
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"panel-footer\">
        <div class=\"pull-right\">
            <button class=\"btn btn-primary\" id=\"next\" >
                <i class=\"ti ti-arrow-right\"></i>
            </button>
            <button class=\"btn btn-primary\" id=\"prev\" >
                <i class=\"ti ti-arrow-left\"></i>
            </button>
            
            <button class=\"btn btn-primary \" id=\"submit\">
                <i class=\"ti ti-save-alt\"></i>
                ";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["form_name"]) ? $context["form_name"] : $this->getContext($context, "form_name")), "html", null, true);
        echo "
            </button>
            
        </div>
    </div>
</div>
";
        
        $__internal_9ee0bd4c55c732f78941a803e6cfce2dd326dec01085c92ff0c235bd25193d79->leave($__internal_9ee0bd4c55c732f78941a803e6cfce2dd326dec01085c92ff0c235bd25193d79_prof);

    }

    public function getTemplateName()
    {
        return ":Template:OrderArticleAddFormTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 148,  248 => 134,  244 => 133,  240 => 132,  236 => 131,  222 => 120,  218 => 119,  214 => 118,  210 => 117,  206 => 116,  195 => 108,  190 => 106,  185 => 104,  179 => 101,  173 => 98,  164 => 92,  157 => 88,  150 => 84,  142 => 79,  137 => 77,  129 => 72,  124 => 70,  112 => 60,  110 => 58,  105 => 56,  91 => 44,  89 => 42,  82 => 37,  80 => 35,  75 => 32,  73 => 30,  68 => 27,  66 => 25,  60 => 22,  51 => 16,  47 => 15,  39 => 10,  35 => 9,  26 => 3,  22 => 1,);
    }
}
/* <div class="panel panel-primary">*/
/*     <div class="panel-heading">*/
/*         <h2><i class="ti ti-save-alt"></i> {{ form_name }}</h2>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         <ul id="basicwizard-header" class="stepy-header">*/
/*             <li id="basicwizard-head-0"  class="stepy-active" style="cursor: default;">*/
/*                 <a href="#">*/
/*                     <div>{{ 'form.firstStep'|trans }}</div>*/
/*                     <span>{{ form_name }}</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li id="basicwizard-head-1"  style="cursor: default;">*/
/*                 <a href="#">*/
/*                     <div>{{ 'form.secondStep'|trans }}</div>*/
/*                     <span>{{ 'detail.new.name'|trans }}</span>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*         <div id="step2" class="col-md-12" style="visibility: hidden;display: none;">*/
/*             <div class="col-md-6">*/
/*                 <legend><h4><i class="ti ti-save-alt"></i> {{ 'detail.new.name'|trans }}</h4></legend>*/
/*                 */
/*                    */
/*                     {{ form_start(detail,{*/
/*                         'attr' : { 'class' : 'form-horizontal row-border' , 'id' : 'validate-form'} */
/*                     }) }}*/
/*                     <div class="form-group"  style="margin-top: 20px;">*/
/*                         <div class="col-sm-6">*/
/*                             {{ form_widget(detail.family,{*/
/*                             'attr' : { 'style':"width:100% !important" , 'class' :"populate" } */
/*                             }) }}*/
/*                         </div>*/
/*                         <div class="col-sm-6">*/
/*                             {{ form_widget(detail.subFamily,{*/
/*                             'attr' : { 'style':"width:100% !important" , 'class' :"populate" } */
/*                             }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                      <div class="form-group">*/
/*                         <div class="col-sm-10 col-sm-offset-1">*/
/*                             {{ form_widget(detail.article,{*/
/*                             'attr' : { 'style':"width:100% !important" , 'class' :"populate" , 'placeholder' : 'magazine.field.article'|trans } */
/*                             }) }}*/
/*                         </div>*/
/*                         <div id="article_error"  class="col-sm-10 col-sm-offset-1 text-danger">*/
/*                             */
/*                         </div>*/
/*                     </div>*/
/*                     */
/*                     <div class="form-group">*/
/*                         <div class="col-sm-6">*/
/*                             <div class="input-group">                           */
/*                                 <span class="input-group-addon text-capitalize">*/
/*                                     <i id="load" class="ti ti-archive"></i> */
/*                                     {{ 'magazine.field.quantity'|trans }}*/
/*                                 </span>*/
/*                                 {{ form_widget(detail.quantity , {*/
/*                                     'attr' : { 'class' : 'form-control' ,  'placeholder' : 'magazine.field.quantity' }*/
/*                                 }) }}*/
/*                             </div>*/
/*                             <div id="quantity_error"  class=" text-danger">*/
/*                             */
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-6">*/
/*                             <div class="input-group">                           */
/*                                 <span class="input-group-addon">*/
/*                                 <i id="load" class="fa fa-spinner"></i> */
/*                                 {{ 'search.stock'|trans }}*/
/*                                 </span>*/
/*                                 <input id="stock"  readonly  type="text" class="form-control" placeholder="{{ 'search.stock'|trans }}">*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                     </div>*/
/*                         {{ form_widget(detail) }}*/
/* */
/*                     {{ form_end(detail) }}*/
/*                     */
/*                     <div class="pull-right">*/
/*                         <button id="new" class="btn btn-primary">*/
/*                         <i class="fa fa-plus"></i>*/
/*                         {{ 'detail.new.submit'|trans }}*/
/*                         </button>*/
/*                         <button id="edit" class="btn btn-primary">*/
/*                         <i class="ti ti-pencil-alt"></i>*/
/*                         {{ 'detail.edit.submit'|trans }}*/
/*                         </button>*/
/*                         <button id="annuler" class="btn btn-danger">*/
/*                             <i class="ti ti-back-right"></i>*/
/*                             {{ 'detail.edit.annuler'|trans }}*/
/*                         </button>*/
/*                     </div>*/
/*                     */
/*             </div>*/
/*             <div class="col-md-6" style="border-left: 1px solid black;">*/
/*                 <legend><h4><i class="fa fa-table"></i> {{ 'detail.list.name'|trans }}</h4></legend>*/
/* */
/*                 <div class="btn-group">*/
/*                     <a style="margin-bottom: 2%;" class="btn btn-primary toggle-vis" data-column="0" name="options" id="designation"> {{ 'magazine.field.designation'|trans }}*/
/*                     </a>*/
/*                     */
/*                     <a style="margin-bottom: 2%;" class="btn btn-primary toggle-vis" data-column="1"> {{ 'magazine.field.quantity'|trans }}*/
/*                     </a>*/
/*                     <a style="margin-bottom: 2%;" class="btn btn-primary active  toggle-vis" data-column="2"> {{ 'magazine.field.family'|trans }}*/
/*                     </a>*/
/*                     <a style="margin-bottom: 2%;" class="btn btn-primary active toggle-vis" data-column="3"> {{ 'magazine.field.subFamily'|trans }}*/
/*                     </a>*/
/*                     */
/*                 </div> */
/*                 <hr>*/
/*                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>{{ 'magazine.field.designation'|trans }}</th>*/
/*                             <th>{{ 'magazine.field.quantity'|trans }}</th>*/
/*                             <th>{{ 'magazine.field.family'|trans }}</th>*/
/*                             <th>{{ 'magazine.field.subFamily'|trans }}</th>*/
/*                             <th>{{ 'magazine.action'|trans }}</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody id="list">*/
/*                         */
/*                     </tbody>*/
/*                 </table>*/
/*                 <div id="dialog"></div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="step1" class="col-md-12" >*/
/*             <legend><h4><i class="ti ti-save-alt"></i> {{ form_name }}</h4></legend> */
/*             {{ form_start(form ,{'attr' : { 'class' : 'form-horizontal row-border' , 'id' : 'form' } }) }} */
/*             {{ form_widget(form) }}*/
/*             {{ form_end(form) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel-footer">*/
/*         <div class="pull-right">*/
/*             <button class="btn btn-primary" id="next" >*/
/*                 <i class="ti ti-arrow-right"></i>*/
/*             </button>*/
/*             <button class="btn btn-primary" id="prev" >*/
/*                 <i class="ti ti-arrow-left"></i>*/
/*             </button>*/
/*             */
/*             <button class="btn btn-primary " id="submit">*/
/*                 <i class="ti ti-save-alt"></i>*/
/*                 {{ form_name }}*/
/*             </button>*/
/*             */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
