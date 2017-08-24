<?php

/* :Template:ArticleManagementAddFormTemplate.html.twig */
class __TwigTemplate_65530b523f0151506f5d5271ea2bb5dc043d84f85677fe5b74245ffb392e37d3 extends Twig_Template
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
        $__internal_2a3da1ab1690a81f8d233425db13b950e123179bab061dad5a94b8ddf54ab0fc = $this->env->getExtension("native_profiler");
        $__internal_2a3da1ab1690a81f8d233425db13b950e123179bab061dad5a94b8ddf54ab0fc->enter($__internal_2a3da1ab1690a81f8d233425db13b950e123179bab061dad5a94b8ddf54ab0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Template:ArticleManagementAddFormTemplate.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.new.name"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["form_name"]) ? $context["form_name"] : $this->getContext($context, "form_name")), "html", null, true);
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
                <div class=\"tab-container tab-primary\">
                    <ul class=\"nav nav-tabs\"><li class=\"dropdown pull-right tabdrop hide\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><i class=\"fa fa-angle-down\"></i> </a><ul class=\"dropdown-menu\"></ul></li>
                        <li class=\"active\"><a href=\"#durable\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"ti ti-save-alt\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.dropDownArticle.durable"), "html", null, true);
        echo "</a></li>
                        <li class=\"pull-right\"><a href=\"#consumable\" data-toggle=\"tab\" aria-expanded=\"false\"><i class=\"ti ti-save-alt\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.dropDownArticle.consumable"), "html", null, true);
        echo "</a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"durable\">
                            ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["detailDurable"]) ? $context["detailDurable"] : $this->getContext($context, "detailDurable")), 'form_start', array("attr" => array("class" => "form-horizontal row-border", "id" => "validate-form")));
        // line 32
        echo "
                            
                                <div class=\"form-group\" >
                                    <div class=\"col-sm-6\">
                                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["detailDurable"]) ? $context["detailDurable"] : $this->getContext($context, "detailDurable")), "family", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate")));
        // line 38
        echo "
                                    </div>
                                    <div class=\"col-sm-6\">
                                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["detailDurable"]) ? $context["detailDurable"] : $this->getContext($context, "detailDurable")), "subFamily", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate")));
        // line 43
        echo "
                                    </div>
                                    
                                    
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-sm-10 col-sm-offset-1\">
                                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["detailDurable"]) ? $context["detailDurable"] : $this->getContext($context, "detailDurable")), "article", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate")));
        // line 52
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-sm-10 col-sm-offset-1\">
                                        <div class=\"input-group\">                           
                                            <span class=\"input-group-addon text-capitalize\">
                                                <i id=\"load\" class=\"fa fa-chain\"></i>
                                            </span>
                                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["detailDurable"]) ? $context["detailDurable"] : $this->getContext($context, "detailDurable")), "supportingDocument", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate")));
        // line 63
        echo "
                                        </div>
                                    </div>
                                    <div id=\"supportingDocumentDurable_error\"  class=\"col-sm-10 col-sm-offset-1 text-danger\">
                                        
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"input-group\">                           
                                            <span class=\"input-group-addon text-capitalize\">
                                                <i id=\"load\" class=\"ti ti-archive\"></i> 
                                                ";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "
                                            </span>
                                            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["detailDurable"]) ? $context["detailDurable"] : $this->getContext($context, "detailDurable")), "quantity", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "magazine.field.quantity")));
        // line 79
        echo "
                                        </div>
                                        <div id=\"quantityDurable_error\"  class=\" text-danger\">
                                        
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"input-group\">                           
                                            <span class=\"input-group-addon\">
                                            <i id=\"load\" class=\"fa fa-spinner\"></i> 
                                            ";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search.stock"), "html", null, true);
        echo "
                                            </span>
                                            <input id=\"stockDurable\"  readonly  type=\"text\" class=\"form-control\" placeholder=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search.stock"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>
                                    
                                </div>
                           
                            ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["detailDurable"]) ? $context["detailDurable"] : $this->getContext($context, "detailDurable")), 'widget');
        echo "

                            ";
        // line 99
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["detailDurable"]) ? $context["detailDurable"] : $this->getContext($context, "detailDurable")), 'form_end');
        echo "
                            <div class=\"form-group\">
                                <div class=\"pull-right\">
                                    <button id=\"newDurable\" class=\"btn btn-primary\">
                                    <i class=\"fa fa-plus\"></i>
                                    ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.new.submit"), "html", null, true);
        echo "
                                    </button>
                                    
                                    <button id=\"annuler\" class=\"btn btn-danger\">
                                        <i class=\"ti ti-back-right\"></i>
                                        ";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.edit.annuler"), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"consumable\">
                            ";
        // line 115
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["detailConsumable"]) ? $context["detailConsumable"] : $this->getContext($context, "detailConsumable")), 'form_start', array("attr" => array("class" => "form-horizontal row-border", "id" => "validate-form")));
        // line 117
        echo "
                            
                                <div class=\"form-group\" >
                                    <div class=\"col-sm-6\">
                                        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["detailConsumable"]) ? $context["detailConsumable"] : $this->getContext($context, "detailConsumable")), "family", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate")));
        // line 123
        echo "
                                    </div>
                                    <div class=\"col-sm-6\">
                                        ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["detailConsumable"]) ? $context["detailConsumable"] : $this->getContext($context, "detailConsumable")), "subFamily", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate")));
        // line 128
        echo "
                                    </div>
                                    
                                    
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-sm-10 col-sm-offset-1\">
                                        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["detailConsumable"]) ? $context["detailConsumable"] : $this->getContext($context, "detailConsumable")), "article", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate")));
        // line 137
        echo "
                                    </div>
                                    
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-sm-10 col-sm-offset-1\">
                                        
                                            ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["detailConsumable"]) ? $context["detailConsumable"] : $this->getContext($context, "detailConsumable")), "supportingDocument", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate")));
        // line 146
        echo "
                                    </div>
                                    <div id=\"supportingDocumentConsumable_error\"  class=\"col-sm-10 col-sm-offset-1 text-danger\">
                                        
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"input-group\">                           
                                            <span class=\"input-group-addon text-capitalize\">
                                                <i id=\"load\" class=\"ti ti-archive\"></i> 
                                                ";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "
                                            </span>
                                            ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["detailConsumable"]) ? $context["detailConsumable"] : $this->getContext($context, "detailConsumable")), "quantity", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "magazine.field.quantity")));
        // line 161
        echo "
                                        </div>
                                        <div id=\"quantityConsumable_error\"  class=\" text-danger\">
                                        
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"input-group\">                           
                                            <span class=\"input-group-addon\">
                                            <i id=\"load\" class=\"fa fa-spinner\"></i> 
                                            ";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search.stock"), "html", null, true);
        echo "
                                            </span>
                                            <input id=\"stock\" readonly type=\"text\" class=\"form-control\" placeholder=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search.stock"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>
                                    
                                </div>
                           
                            ";
        // line 179
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["detailConsumable"]) ? $context["detailConsumable"] : $this->getContext($context, "detailConsumable")), 'widget');
        echo "

                            ";
        // line 181
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["detailConsumable"]) ? $context["detailConsumable"] : $this->getContext($context, "detailConsumable")), 'form_end');
        echo "
                            <div class=\"form-group\">
                                <div class=\"pull-right\">
                                    <button id=\"newConsumable\" class=\"btn btn-primary\">
                                    <i class=\"fa fa-plus\"></i>
                                    ";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.new.submit"), "html", null, true);
        echo "
                                    </button>
                                    <button id=\"editConsumable\" class=\"btn btn-primary\">
                                    <i class=\"ti ti-pencil-alt\"></i>
                                    ";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.edit.submit"), "html", null, true);
        echo "
                                    </button>
                                    <button id=\"annuler\" class=\"btn btn-danger\">
                                        <i class=\"ti ti-back-right\"></i>
                                        ";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.edit.annuler"), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\" style=\"border-left: 1px solid black;\">
                <legend><h4><i class=\"fa fa-table\"></i> ";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.list.name"), "html", null, true);
        echo "</h4></legend>
                <div class=\"btn-group\">
                        <a class=\"btn btn-primary active toggle-vis\" data-column=\"0\" style=\"margin-bottom: 2%;\"> ";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "html", null, true);
        echo "
                        </a>
                        <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary toggle-vis\" data-column=\"1\" name=\"options\" id=\"designation\"> ";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "
                        </a>
                        <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary toggle-vis\" data-column=\"2\"> ";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "
                        </a>
                        <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary active  toggle-vis\" data-column=\"3\"> ";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "
                        </a>
                        <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary active toggle-vis\" data-column=\"4\"> ";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "
                        </a>
                        
                    </div> 
                    <hr>
                <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "html", null, true);
        echo "</th>
                            <th>";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                            <th>";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                            <th>";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                            <th>";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                            <th>";
        // line 226
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
        // line 237
        echo twig_escape_filter($this->env, (isset($context["form_name"]) ? $context["form_name"] : $this->getContext($context, "form_name")), "html", null, true);
        echo "</h4></legend> 
            ";
        // line 238
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal row-border", "id" => "form")));
        echo " 
            ";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 240
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
        // line 254
        echo twig_escape_filter($this->env, (isset($context["form_name"]) ? $context["form_name"] : $this->getContext($context, "form_name")), "html", null, true);
        echo "
            </button>
            
        </div>
    </div>
</div>
";
        
        $__internal_2a3da1ab1690a81f8d233425db13b950e123179bab061dad5a94b8ddf54ab0fc->leave($__internal_2a3da1ab1690a81f8d233425db13b950e123179bab061dad5a94b8ddf54ab0fc_prof);

    }

    public function getTemplateName()
    {
        return ":Template:ArticleManagementAddFormTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 254,  401 => 240,  397 => 239,  393 => 238,  389 => 237,  375 => 226,  371 => 225,  367 => 224,  363 => 223,  359 => 222,  355 => 221,  344 => 213,  339 => 211,  334 => 209,  329 => 207,  324 => 205,  319 => 203,  307 => 194,  300 => 190,  293 => 186,  285 => 181,  280 => 179,  271 => 173,  266 => 171,  254 => 161,  252 => 159,  247 => 157,  234 => 146,  232 => 144,  223 => 137,  221 => 135,  212 => 128,  210 => 126,  205 => 123,  203 => 121,  197 => 117,  195 => 115,  186 => 109,  178 => 104,  170 => 99,  165 => 97,  156 => 91,  151 => 89,  139 => 79,  137 => 77,  132 => 75,  118 => 63,  116 => 61,  105 => 52,  103 => 50,  94 => 43,  92 => 41,  87 => 38,  85 => 36,  79 => 32,  77 => 30,  70 => 26,  66 => 25,  60 => 22,  51 => 16,  47 => 15,  39 => 10,  35 => 9,  26 => 3,  22 => 1,);
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
/*                     <span>{{ 'detail.new.name'|trans }}</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li id="basicwizard-head-1"  style="cursor: default;">*/
/*                 <a href="#">*/
/*                     <div>{{ 'form.secondStep'|trans }}</div>*/
/*                     <span>{{ form_name }}</span>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*         <div id="step2" class="col-md-12" style="visibility: hidden;display: none;">*/
/*             <div class="col-md-6">*/
/*                 <legend><h4><i class="ti ti-save-alt"></i> {{ 'detail.new.name'|trans }}</h4></legend>*/
/*                 <div class="tab-container tab-primary">*/
/*                     <ul class="nav nav-tabs"><li class="dropdown pull-right tabdrop hide"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-angle-down"></i> </a><ul class="dropdown-menu"></ul></li>*/
/*                         <li class="active"><a href="#durable" data-toggle="tab" aria-expanded="true"><i class="ti ti-save-alt"></i> {{ 'menu.dropDownArticle.durable'|trans }}</a></li>*/
/*                         <li class="pull-right"><a href="#consumable" data-toggle="tab" aria-expanded="false"><i class="ti ti-save-alt"></i> {{ 'menu.dropDownArticle.consumable'|trans }}</a></li>*/
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                         <div class="tab-pane active" id="durable">*/
/*                             {{ form_start(detailDurable,{*/
/*                                 'attr' : { 'class' : 'form-horizontal row-border' , 'id' : 'validate-form'} */
/*                             }) }}*/
/*                             */
/*                                 <div class="form-group" >*/
/*                                     <div class="col-sm-6">*/
/*                                         {{ form_widget(detailDurable.family,{*/
/*                                         'attr' : { 'style':"width:100% !important" , 'class' :"populate" } */
/*                                         }) }}*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         {{ form_widget(detailDurable.subFamily,{*/
/*                                         'attr' : { 'style':"width:100% !important" , 'class' :"populate" } */
/*                                         }) }}*/
/*                                     </div>*/
/*                                     */
/*                                     */
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <div class="col-sm-10 col-sm-offset-1">*/
/*                                         {{ form_widget(detailDurable.article,{*/
/*                                         'attr' : { 'style':"width:100% !important" , 'class' :"populate" } */
/*                                         }) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <div class="col-sm-10 col-sm-offset-1">*/
/*                                         <div class="input-group">                           */
/*                                             <span class="input-group-addon text-capitalize">*/
/*                                                 <i id="load" class="fa fa-chain"></i>*/
/*                                             </span>*/
/*                                             {{ form_widget(detailDurable.supportingDocument,{*/
/*                                             'attr' : { 'style':"width:100% !important" , 'class' :"populate" } */
/*                                             }) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div id="supportingDocumentDurable_error"  class="col-sm-10 col-sm-offset-1 text-danger">*/
/*                                         */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <div class="col-sm-6">*/
/*                                         <div class="input-group">                           */
/*                                             <span class="input-group-addon text-capitalize">*/
/*                                                 <i id="load" class="ti ti-archive"></i> */
/*                                                 {{ 'magazine.field.quantity'|trans }}*/
/*                                             </span>*/
/*                                             {{ form_widget(detailDurable.quantity , {*/
/*                                                 'attr' : { 'class' : 'form-control' ,  'placeholder' : 'magazine.field.quantity' }*/
/*                                             }) }}*/
/*                                         </div>*/
/*                                         <div id="quantityDurable_error"  class=" text-danger">*/
/*                                         */
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         <div class="input-group">                           */
/*                                             <span class="input-group-addon">*/
/*                                             <i id="load" class="fa fa-spinner"></i> */
/*                                             {{ 'search.stock'|trans }}*/
/*                                             </span>*/
/*                                             <input id="stockDurable"  readonly  type="text" class="form-control" placeholder="{{ 'search.stock'|trans }}">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     */
/*                                 </div>*/
/*                            */
/*                             {{ form_widget(detailDurable) }}*/
/* */
/*                             {{ form_end(detailDurable) }}*/
/*                             <div class="form-group">*/
/*                                 <div class="pull-right">*/
/*                                     <button id="newDurable" class="btn btn-primary">*/
/*                                     <i class="fa fa-plus"></i>*/
/*                                     {{ 'detail.new.submit'|trans }}*/
/*                                     </button>*/
/*                                     */
/*                                     <button id="annuler" class="btn btn-danger">*/
/*                                         <i class="ti ti-back-right"></i>*/
/*                                         {{ 'detail.edit.annuler'|trans }}*/
/*                                     </button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="consumable">*/
/*                             {{ form_start(detailConsumable,{*/
/*                                 'attr' : { 'class' : 'form-horizontal row-border' , 'id' : 'validate-form'} */
/*                             }) }}*/
/*                             */
/*                                 <div class="form-group" >*/
/*                                     <div class="col-sm-6">*/
/*                                         {{ form_widget(detailConsumable.family,{*/
/*                                         'attr' : { 'style':"width:100% !important" , 'class' :"populate" } */
/*                                         }) }}*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         {{ form_widget(detailConsumable.subFamily,{*/
/*                                         'attr' : { 'style':"width:100% !important" , 'class' :"populate" } */
/*                                         }) }}*/
/*                                     </div>*/
/*                                     */
/*                                     */
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <div class="col-sm-10 col-sm-offset-1">*/
/*                                         {{ form_widget(detailConsumable.article,{*/
/*                                         'attr' : { 'style':"width:100% !important" , 'class' :"populate" } */
/*                                         }) }}*/
/*                                     </div>*/
/*                                     */
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <div class="col-sm-10 col-sm-offset-1">*/
/*                                         */
/*                                             {{ form_widget(detailConsumable.supportingDocument,{*/
/*                                             'attr' : { 'style':"width:100% !important" , 'class' :"populate" } */
/*                                             }) }}*/
/*                                     </div>*/
/*                                     <div id="supportingDocumentConsumable_error"  class="col-sm-10 col-sm-offset-1 text-danger">*/
/*                                         */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <div class="col-sm-6">*/
/*                                         <div class="input-group">                           */
/*                                             <span class="input-group-addon text-capitalize">*/
/*                                                 <i id="load" class="ti ti-archive"></i> */
/*                                                 {{ 'magazine.field.quantity'|trans }}*/
/*                                             </span>*/
/*                                             {{ form_widget(detailConsumable.quantity , {*/
/*                                                 'attr' : { 'class' : 'form-control' ,  'placeholder' : 'magazine.field.quantity' }*/
/*                                             }) }}*/
/*                                         </div>*/
/*                                         <div id="quantityConsumable_error"  class=" text-danger">*/
/*                                         */
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         <div class="input-group">                           */
/*                                             <span class="input-group-addon">*/
/*                                             <i id="load" class="fa fa-spinner"></i> */
/*                                             {{ 'search.stock'|trans }}*/
/*                                             </span>*/
/*                                             <input id="stock" readonly type="text" class="form-control" placeholder="{{ 'search.stock'|trans }}">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     */
/*                                 </div>*/
/*                            */
/*                             {{ form_widget(detailConsumable) }}*/
/* */
/*                             {{ form_end(detailConsumable) }}*/
/*                             <div class="form-group">*/
/*                                 <div class="pull-right">*/
/*                                     <button id="newConsumable" class="btn btn-primary">*/
/*                                     <i class="fa fa-plus"></i>*/
/*                                     {{ 'detail.new.submit'|trans }}*/
/*                                     </button>*/
/*                                     <button id="editConsumable" class="btn btn-primary">*/
/*                                     <i class="ti ti-pencil-alt"></i>*/
/*                                     {{ 'detail.edit.submit'|trans }}*/
/*                                     </button>*/
/*                                     <button id="annuler" class="btn btn-danger">*/
/*                                         <i class="ti ti-back-right"></i>*/
/*                                         {{ 'detail.edit.annuler'|trans }}*/
/*                                     </button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6" style="border-left: 1px solid black;">*/
/*                 <legend><h4><i class="fa fa-table"></i> {{ 'detail.list.name'|trans }}</h4></legend>*/
/*                 <div class="btn-group">*/
/*                         <a class="btn btn-primary active toggle-vis" data-column="0" style="margin-bottom: 2%;"> {{ 'magazine.field.inventoryNumber'|trans }}*/
/*                         </a>*/
/*                         <a style="margin-bottom: 2%;" class="btn btn-primary toggle-vis" data-column="1" name="options" id="designation"> {{ 'magazine.field.designation'|trans }}*/
/*                         </a>*/
/*                         <a style="margin-bottom: 2%;" class="btn btn-primary toggle-vis" data-column="2"> {{ 'magazine.field.quantity'|trans }}*/
/*                         </a>*/
/*                         <a style="margin-bottom: 2%;" class="btn btn-primary active  toggle-vis" data-column="3"> {{ 'magazine.field.family'|trans }}*/
/*                         </a>*/
/*                         <a style="margin-bottom: 2%;" class="btn btn-primary active toggle-vis" data-column="4"> {{ 'magazine.field.subFamily'|trans }}*/
/*                         </a>*/
/*                         */
/*                     </div> */
/*                     <hr>*/
/*                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>{{ 'magazine.field.inventoryNumber'|trans }}</th>*/
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
