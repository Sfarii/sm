<?php

/* :Template:JournalAddFormTemplate.html.twig */
class __TwigTemplate_e7a588c6f728e8998685574d4a96513ccdea39abd93c350576a6a964c9553d8f extends Twig_Template
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
        $__internal_19baa823d5faceeb97685b3ccb8b8c032b7bea9f546cb661ca19fbc4c1ef5e6a = $this->env->getExtension("native_profiler");
        $__internal_19baa823d5faceeb97685b3ccb8b8c032b7bea9f546cb661ca19fbc4c1ef5e6a->enter($__internal_19baa823d5faceeb97685b3ccb8b8c032b7bea9f546cb661ca19fbc4c1ef5e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Template:JournalAddFormTemplate.html.twig"));

        // line 1
        echo "<div class=\"panel panel-primary\" data-widget='{\"draggable\": \"false\"}'>
    <div class=\"panel-heading\">
        <h2><i class=\"ti ti-save-alt\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["form_name"]) ? $context["form_name"] : $this->getContext($context, "form_name")), "html", null, true);
        echo "</h2>
        <div class=\"panel-ctrls button-icon-bg\" 
                        data-actions-container=\"\" 
                        data-action-collapse='{\"target\": \".panel-body\"}'
                        data-action-colorpicker=''
                        data-action-refresh-demo='{\"type\": \"circular\"}'
                        >
                    </div>
    </div>
    <div class=\"panel-body\">
        <ul id=\"basicwizard-header\"  class=\"stepy-header\">
            <li id=\"basicwizard-head-0\"  class=\"stepy-active\" style=\"cursor: default;\">
                <a href=\"#\">
                    <div>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.firstStep"), "html", null, true);
        echo "</div>
                    <span>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.new.name"), "html", null, true);
        echo "</span>
                    
                </a>
            </li>
            <li id=\"basicwizard-head-1\"  style=\"cursor: default;\">
                <a href=\"#\">
                    <div>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.secondStep"), "html", null, true);
        echo "</div>
                    <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.new.name"), "html", null, true);
        echo "</span>
                </a>
            </li>
        </ul>
            <div id=\"step2\" class=\"col-md-12\" style=\"visibility: hidden;display: none;\">
                <div class=\"col-md-6 \" style=\"border-right: 1px solid black;\">
                    <legend><h4><i class=\"ti ti-save-alt\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.new.name"), "html", null, true);
        echo "</h4></legend>
                        
                       
                        ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSupportingDocument"]) ? $context["formSupportingDocument"] : $this->getContext($context, "formSupportingDocument")), 'form_start', array("attr" => array("class" => "form-horizontal row-border", "id" => "validate-form")));
        // line 35
        echo "
                        <div class=\"form-group\">
                            <div class=\"col-sm-10 col-sm-offset-1\">
                                <div class=\"input-group\">   
                                    <span class=\"input-group-addon text-capitalize\">
                                        
                                        ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "html", null, true);
        echo "
                                    </span>
                                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSupportingDocument"]) ? $context["formSupportingDocument"] : $this->getContext($context, "formSupportingDocument")), "inventoryNumber", array()), 'widget', array("attr" => array("disabled" => "disabled")));
        // line 45
        echo "
                                    <span class=\"input-group-addon text-capitalize\">
                                        <input id=\"inventoryNumber\" type=\"checkbox\">
                                    </span>
                                </div>
                            </div>
                            <div id=\"inventoryNumber_error\"  class=\"col-sm-10 col-sm-offset-1 text-danger\">
                                
                            </div>
                        </div>
                        <div class=\"form-group\" >
                            <div class=\"col-sm-6\">
                                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSupportingDocument"]) ? $context["formSupportingDocument"] : $this->getContext($context, "formSupportingDocument")), "family", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate")));
        // line 59
        echo "
                            </div>
                            <div class=\"col-sm-6\">
                                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSupportingDocument"]) ? $context["formSupportingDocument"] : $this->getContext($context, "formSupportingDocument")), "subFamily", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate")));
        // line 64
        echo "
                            </div>
                            
                            
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-10 col-sm-offset-1\">
                                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSupportingDocument"]) ? $context["formSupportingDocument"] : $this->getContext($context, "formSupportingDocument")), "article", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate")));
        // line 73
        echo "
                            </div>
                            <div id=\"article_error\"  class=\"col-sm-10 col-sm-offset-1 text-danger\">
                                
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                            <div class=\"col-sm-6\">
                                <div class=\"input-group\">                           
                                    
                                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSupportingDocument"]) ? $context["formSupportingDocument"] : $this->getContext($context, "formSupportingDocument")), "price", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "magazine.field.price")));
        // line 88
        echo "
                                    <span class=\"input-group-addon text-capitalize\">
                                        <i id=\"load\" class=\"ti ti-money\"></i> 
                                        ";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.devise"), "html", null, true);
        echo "
                                    </span>
                                </div>
                                <div id=\"price_error\"  class=\" text-danger\">
                                
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"input-group\">                           
                                    <span class=\"input-group-addon text-capitalize\">
                                        <i id=\"load\" class=\"ti ti-archive\"></i> 
                                        ";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "
                                    </span>
                                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSupportingDocument"]) ? $context["formSupportingDocument"] : $this->getContext($context, "formSupportingDocument")), "quantity", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "magazine.field.quantity")));
        // line 106
        echo "
                                </div>
                                <div id=\"quantity_error\"  class=\" text-danger\">
                                
                                </div>
                            </div>
                            
                        </div>
                        
                        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSupportingDocument"]) ? $context["formSupportingDocument"] : $this->getContext($context, "formSupportingDocument")), 'widget');
        echo "
                        ";
        // line 116
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSupportingDocument"]) ? $context["formSupportingDocument"] : $this->getContext($context, "formSupportingDocument")), 'form_end');
        echo "
                        
                        <div class=\"pull-right\">
                            <button id=\"new\" class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            ";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.new.submit"), "html", null, true);
        echo "
                            </button>
                            <button id=\"edit\" class=\"btn btn-primary\">
                            <i class=\"ti ti-pencil-alt\"></i>
                            ";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.edit.submit"), "html", null, true);
        echo "
                            </button>
                            <button id=\"annuler\" class=\"btn btn-danger\">
                                <i class=\"ti ti-back-right\"></i>
                                ";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.edit.annuler"), "html", null, true);
        echo "</button>
                        </div>
                        
                </div>
                <div id=\"step2\" class=\"col-md-6\" >
                    <legend>
                        <h4>
                            <i class=\"fa fa-table\"></i>
                             ";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.name"), "html", null, true);
        echo "
                         </h4>
                         
                     </legend>
                    <div class=\"btn-group\">
                        <a class=\"btn btn-primary active toggle-vis\" data-column=\"0\" style=\"margin-bottom: 2%;\"> ";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "html", null, true);
        echo "
                        </a>
                        <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary toggle-vis\" data-column=\"1\" name=\"options\" id=\"designation\"> ";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "
                        </a>
                        <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary toggle-vis\" data-column=\"2\" name=\"options\" id=\"price\"> ";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.price"), "html", null, true);
        echo "
                        </a>
                        <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary toggle-vis\" data-column=\"3\"> ";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "
                        </a>
                        <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary active  toggle-vis\" data-column=\"4\"> ";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "
                        </a>
                        <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary active toggle-vis\" data-column=\"5\"> ";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "
                        </a>
                        
                    </div> 
                    <hr>
                    <table id=\"example\" class=\"table table-responsive table-striped table-bordered \" width=\"100%\">
                        <thead>
                            <tr>
                                <th>";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "html", null, true);
        echo "</th>
                                <th>";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                                <th>";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.price"), "html", null, true);
        echo "</th>
                                <th>";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                                <th>";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                                <th>";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                                <th>";
        // line 166
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
        // line 177
        echo twig_escape_filter($this->env, (isset($context["form_name"]) ? $context["form_name"] : $this->getContext($context, "form_name")), "html", null, true);
        echo "</h4></legend> 
            ";
        // line 178
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal row-border", "id" => "form")));
        echo " 
            ";
        // line 179
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 180
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
        // line 194
        echo twig_escape_filter($this->env, (isset($context["form_name"]) ? $context["form_name"] : $this->getContext($context, "form_name")), "html", null, true);
        echo "
            </button>
            
        </div>
    </div>
</div>
";
        
        $__internal_19baa823d5faceeb97685b3ccb8b8c032b7bea9f546cb661ca19fbc4c1ef5e6a->leave($__internal_19baa823d5faceeb97685b3ccb8b8c032b7bea9f546cb661ca19fbc4c1ef5e6a_prof);

    }

    public function getTemplateName()
    {
        return ":Template:JournalAddFormTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 194,  308 => 180,  304 => 179,  300 => 178,  296 => 177,  282 => 166,  278 => 165,  274 => 164,  270 => 163,  266 => 162,  262 => 161,  258 => 160,  247 => 152,  242 => 150,  237 => 148,  232 => 146,  227 => 144,  222 => 142,  214 => 137,  203 => 129,  196 => 125,  189 => 121,  181 => 116,  177 => 115,  166 => 106,  164 => 104,  159 => 102,  145 => 91,  140 => 88,  138 => 84,  125 => 73,  123 => 71,  114 => 64,  112 => 62,  107 => 59,  105 => 57,  91 => 45,  89 => 43,  84 => 41,  76 => 35,  74 => 33,  68 => 30,  59 => 24,  55 => 23,  46 => 17,  42 => 16,  26 => 3,  22 => 1,);
    }
}
/* <div class="panel panel-primary" data-widget='{"draggable": "false"}'>*/
/*     <div class="panel-heading">*/
/*         <h2><i class="ti ti-save-alt"></i> {{ form_name }}</h2>*/
/*         <div class="panel-ctrls button-icon-bg" */
/*                         data-actions-container="" */
/*                         data-action-collapse='{"target": ".panel-body"}'*/
/*                         data-action-colorpicker=''*/
/*                         data-action-refresh-demo='{"type": "circular"}'*/
/*                         >*/
/*                     </div>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         <ul id="basicwizard-header"  class="stepy-header">*/
/*             <li id="basicwizard-head-0"  class="stepy-active" style="cursor: default;">*/
/*                 <a href="#">*/
/*                     <div>{{ 'form.firstStep'|trans }}</div>*/
/*                     <span>{{ 'journalconsumable.new.name'|trans }}</span>*/
/*                     */
/*                 </a>*/
/*             </li>*/
/*             <li id="basicwizard-head-1"  style="cursor: default;">*/
/*                 <a href="#">*/
/*                     <div>{{ 'form.secondStep'|trans }}</div>*/
/*                     <span>{{ 'supportingdocument.new.name'|trans }}</span>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*             <div id="step2" class="col-md-12" style="visibility: hidden;display: none;">*/
/*                 <div class="col-md-6 " style="border-right: 1px solid black;">*/
/*                     <legend><h4><i class="ti ti-save-alt"></i> {{ 'supportingdocument.new.name'|trans }}</h4></legend>*/
/*                         */
/*                        */
/*                         {{ form_start(formSupportingDocument,{*/
/*                             'attr' : { 'class' : 'form-horizontal row-border' , 'id' : 'validate-form'} */
/*                         }) }}*/
/*                         <div class="form-group">*/
/*                             <div class="col-sm-10 col-sm-offset-1">*/
/*                                 <div class="input-group">   */
/*                                     <span class="input-group-addon text-capitalize">*/
/*                                         */
/*                                         {{ 'magazine.field.inventoryNumber'|trans }}*/
/*                                     </span>*/
/*                                     {{ form_widget(formSupportingDocument.inventoryNumber,{*/
/*                                     'attr' : { 'disabled':'disabled' } */
/*                                     }) }}*/
/*                                     <span class="input-group-addon text-capitalize">*/
/*                                         <input id="inventoryNumber" type="checkbox">*/
/*                                     </span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div id="inventoryNumber_error"  class="col-sm-10 col-sm-offset-1 text-danger">*/
/*                                 */
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group" >*/
/*                             <div class="col-sm-6">*/
/*                                 {{ form_widget(formSupportingDocument.family,{*/
/*                                 'attr' : { 'style':"width:100% !important" , 'class' :"populate" } */
/*                                 }) }}*/
/*                             </div>*/
/*                             <div class="col-sm-6">*/
/*                                 {{ form_widget(formSupportingDocument.subFamily,{*/
/*                                 'attr' : { 'style':"width:100% !important" , 'class' :"populate" } */
/*                                 }) }}*/
/*                             </div>*/
/*                             */
/*                             */
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-sm-10 col-sm-offset-1">*/
/*                                 {{ form_widget(formSupportingDocument.article,{*/
/*                                 'attr' : { 'style':"width:100% !important" , 'class' :"populate" } */
/*                                 }) }}*/
/*                             </div>*/
/*                             <div id="article_error"  class="col-sm-10 col-sm-offset-1 text-danger">*/
/*                                 */
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         <div class="form-group">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="input-group">                           */
/*                                     */
/*                                     {{ form_widget(formSupportingDocument.price , {*/
/*                                     'attr' : { 'class' : 'form-control' ,*/
/*                                                'placeholder' : 'magazine.field.price'*/
/*                                             }*/
/*                                     }) }}*/
/*                                     <span class="input-group-addon text-capitalize">*/
/*                                         <i id="load" class="ti ti-money"></i> */
/*                                         {{ 'magazine.devise'|trans }}*/
/*                                     </span>*/
/*                                 </div>*/
/*                                 <div id="price_error"  class=" text-danger">*/
/*                                 */
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="input-group">                           */
/*                                     <span class="input-group-addon text-capitalize">*/
/*                                         <i id="load" class="ti ti-archive"></i> */
/*                                         {{ 'magazine.field.quantity'|trans }}*/
/*                                     </span>*/
/*                                     {{ form_widget(formSupportingDocument.quantity , {*/
/*                                         'attr' : { 'class' : 'form-control' ,  'placeholder' : 'magazine.field.quantity' }*/
/*                                     }) }}*/
/*                                 </div>*/
/*                                 <div id="quantity_error"  class=" text-danger">*/
/*                                 */
/*                                 </div>*/
/*                             </div>*/
/*                             */
/*                         </div>*/
/*                         */
/*                         {{ form_widget(formSupportingDocument) }}*/
/*                         {{ form_end(formSupportingDocument) }}*/
/*                         */
/*                         <div class="pull-right">*/
/*                             <button id="new" class="btn btn-primary">*/
/*                             <i class="fa fa-plus"></i>*/
/*                             {{ 'supportingdocument.new.submit'|trans }}*/
/*                             </button>*/
/*                             <button id="edit" class="btn btn-primary">*/
/*                             <i class="ti ti-pencil-alt"></i>*/
/*                             {{ 'supportingdocument.edit.submit'|trans }}*/
/*                             </button>*/
/*                             <button id="annuler" class="btn btn-danger">*/
/*                                 <i class="ti ti-back-right"></i>*/
/*                                 {{ 'supportingdocument.edit.annuler'|trans }}</button>*/
/*                         </div>*/
/*                         */
/*                 </div>*/
/*                 <div id="step2" class="col-md-6" >*/
/*                     <legend>*/
/*                         <h4>*/
/*                             <i class="fa fa-table"></i>*/
/*                              {{ 'supportingdocument.list.name'|trans }}*/
/*                          </h4>*/
/*                          */
/*                      </legend>*/
/*                     <div class="btn-group">*/
/*                         <a class="btn btn-primary active toggle-vis" data-column="0" style="margin-bottom: 2%;"> {{ 'magazine.field.inventoryNumber'|trans }}*/
/*                         </a>*/
/*                         <a style="margin-bottom: 2%;" class="btn btn-primary toggle-vis" data-column="1" name="options" id="designation"> {{ 'magazine.field.designation'|trans }}*/
/*                         </a>*/
/*                         <a style="margin-bottom: 2%;" class="btn btn-primary toggle-vis" data-column="2" name="options" id="price"> {{ 'magazine.field.price'|trans }}*/
/*                         </a>*/
/*                         <a style="margin-bottom: 2%;" class="btn btn-primary toggle-vis" data-column="3"> {{ 'magazine.field.quantity'|trans }}*/
/*                         </a>*/
/*                         <a style="margin-bottom: 2%;" class="btn btn-primary active  toggle-vis" data-column="4"> {{ 'magazine.field.family'|trans }}*/
/*                         </a>*/
/*                         <a style="margin-bottom: 2%;" class="btn btn-primary active toggle-vis" data-column="5"> {{ 'magazine.field.subFamily'|trans }}*/
/*                         </a>*/
/*                         */
/*                     </div> */
/*                     <hr>*/
/*                     <table id="example" class="table table-responsive table-striped table-bordered " width="100%">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>{{ 'magazine.field.inventoryNumber'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.designation'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.price'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.quantity'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.family'|trans }}</th>*/
/*                                 <th>{{ 'magazine.field.subFamily'|trans }}</th>*/
/*                                 <th>{{ 'magazine.action'|trans }}</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody id="list">*/
/*                             */
/*                         </tbody>*/
/*                     </table>*/
/*                     <div id="dialog"></div>*/
/*                 </div>*/
/*             </div>*/
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
