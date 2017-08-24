<?php

/* :Template:JournalEditFormTemplate.html.twig */
class __TwigTemplate_86b62976a7e0f64e7b02baba018095d2a949eacdd26d1733f409adbd8b2fafa4 extends Twig_Template
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
        $__internal_01a2d0a5ee3dd2f07a4f36b5cecfef6b0345c22455fc9028005b1c7afd88216b = $this->env->getExtension("native_profiler");
        $__internal_01a2d0a5ee3dd2f07a4f36b5cecfef6b0345c22455fc9028005b1c7afd88216b->enter($__internal_01a2d0a5ee3dd2f07a4f36b5cecfef6b0345c22455fc9028005b1c7afd88216b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Template:JournalEditFormTemplate.html.twig"));

        // line 1
        echo "
<div class=\"col-md-6\">
    <div class=\"panel panel-primary\"  style=\"margin-top: 20px;\">
        <div class=\"panel-heading\">
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.new.name"), "html", null, true);
        echo "
        </div>
        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal row-border col-md-12", "id" => "validate-form")));
        // line 9
        echo "
                    <div class=\"form-group\" style=\"margin-top: 20px;\">
                        <div class=\"col-sm-10 col-sm-offset-1\">
                            <div class=\"input-group\">   
                                <span class=\"input-group-addon text-capitalize\">
                                    
                                    ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "html", null, true);
        echo "
                                </span>
                                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "inventoryNumber", array()), 'widget', array("attr" => array("disabled" => "disabled")));
        // line 19
        echo "
                                <span class=\"input-group-addon text-capitalize\">
                                    <input id=\"inventoryNumber\" type=\"checkbox\">
                                </span>
                            </div>
                        </div>
                        
                    </div>
                    <div class=\"form-group\"  >
                        <div class=\"col-sm-6\">
                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "family", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate", "placeholder" => $this->env->getExtension('translator')->trans("magazine.field.article"))));
        // line 31
        echo "
                        </div>
                        <div class=\"col-sm-6\">
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subFamily", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate", "placeholder" => $this->env->getExtension('translator')->trans("magazine.field.article"))));
        // line 36
        echo "
                        </div>
                        
                        
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-10 col-sm-offset-1\">
                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "article", array()), 'widget', array("attr" => array("style" => "width:100% !important", "class" => "populate", "placeholder" => $this->env->getExtension('translator')->trans("magazine.field.article"))));
        // line 45
        echo "
                        </div>
                        <div id=\"article_error\"  class=\"col-sm-10 col-sm-offset-1 text-danger\">
                            
                        </div>
                        
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-6\">
                            <div class=\"input-group\">                           
                                
                                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("magazine.field.price"))));
        // line 60
        echo "
                                <span class=\"input-group-addon text-capitalize\">
                                    <i id=\"load\" class=\"ti ti-money\"></i> 
                                    ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.devise"), "html", null, true);
        echo "
                                </span>
                            </div>
                            <div id=\"price_error\"  class=\"col-sm-6 text-danger\">
                            
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"input-group\">                           
                                <span class=\"input-group-addon text-capitalize\">
                                    <i id=\"load\" class=\"ti ti-archive\"></i> 
                                    ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "
                                </span>
                                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "magazine.field.quantity")));
        // line 78
        echo "
                            </div>
                            <div id=\"quantity_error\"  class=\"col-sm-6 text-danger\">
                            
                            </div>
                        </div>
                        
                    </div>
                    
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    ";
        // line 88
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>
<div class=\"col-md-6\">
    <div class=\"panel panel-primary\"  style=\"margin-top: 20px;\">
        <div class=\"panel-heading\">
            ";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.name"), "html", null, true);
        echo "
        </div>
        <div class=\"panel-body\">
            <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                    <tr>
                        <th>";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                        <th>";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.price"), "html", null, true);
        echo "</th>
                        <th>";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                        <th>";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    
                    ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "SupportingDocument", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["supportingDocument"]) {
            // line 109
            echo "                        <tr>
                            <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "designation", array()), "html", null, true);
            echo "</td>
                            <td id=\"price";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "price", array()), "html", null, true);
            echo "</td>
                            <td id=\"quantity";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "quantity", array()), "html", null, true);
            echo "</td> 
                            <td>
                                
                                <div class=\"btn-group\">
                                    <a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), array("id" => $this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "id", array()), "idSupportingDocument" => $this->getAttribute($context["supportingDocument"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                    <a href=\"#\" data-box=\"#";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                </div>
                            </td>                                    <!-- MESSAGE BOX-->
                                <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "id", array()), "html", null, true);
            echo "\">
                                    <div class=\"mb-container\">
                                        <div class=\"mb-middle\">
                                            <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.delete.name"), "html", null, true);
            echo " ?</div>
                                            <div class=\"mb-content\">
                                                <p>";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.delete.message"), "html", null, true);
            echo "</p>                    
                                                
                                            </div>
                                            <div class=\"mb-footer\">
                                                <div class=\"pull-right\">
                                                    <form action=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["delete_url"]) ? $context["delete_url"] : $this->getContext($context, "delete_url")), array("id" => $this->getAttribute($context["supportingDocument"], "id", array()), "idJournal" => $this->getAttribute((isset($context["journal"]) ? $context["journal"] : $this->getContext($context, "journal")), "id", array()))), "html", null, true);
            echo "\" method=\"post\">
                                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                        ";
            // line 132
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["supportingDocument"], "id", array()), array(), "array"), 'widget');
            echo " 
                                                        <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                            <i class=\"icon-trash\"></i>
                                                             ";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
            echo "
                                                        </button>
                                                    </form>
                                                    <button class=\"btn btn-default btn-lg mb-control-close\">
                                                        ";
            // line 139
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supportingDocument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                </tbody>
            </table>
            </div><div class=\"panel-footer footer-dataTable\"></div>
        </div>
    </div>
</div>";
        
        $__internal_01a2d0a5ee3dd2f07a4f36b5cecfef6b0345c22455fc9028005b1c7afd88216b->leave($__internal_01a2d0a5ee3dd2f07a4f36b5cecfef6b0345c22455fc9028005b1c7afd88216b_prof);

    }

    public function getTemplateName()
    {
        return ":Template:JournalEditFormTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 148,  249 => 139,  242 => 135,  236 => 132,  231 => 130,  223 => 125,  218 => 123,  212 => 120,  206 => 117,  202 => 116,  193 => 112,  187 => 111,  183 => 110,  180 => 109,  176 => 108,  168 => 103,  164 => 102,  160 => 101,  156 => 100,  147 => 94,  138 => 88,  134 => 87,  123 => 78,  121 => 76,  116 => 74,  102 => 63,  97 => 60,  95 => 56,  82 => 45,  80 => 43,  71 => 36,  69 => 34,  64 => 31,  62 => 29,  50 => 19,  48 => 17,  43 => 15,  35 => 9,  33 => 7,  28 => 5,  22 => 1,);
    }
}
/* */
/* <div class="col-md-6">*/
/*     <div class="panel panel-primary"  style="margin-top: 20px;">*/
/*         <div class="panel-heading">*/
/*             {{ 'supportingdocument.new.name'|trans }}*/
/*         </div>*/
/*         {{ form_start(form,{*/
/*                         'attr' : { 'class' : 'form-horizontal row-border col-md-12' , 'id' : 'validate-form'} */
/*                     }) }}*/
/*                     <div class="form-group" style="margin-top: 20px;">*/
/*                         <div class="col-sm-10 col-sm-offset-1">*/
/*                             <div class="input-group">   */
/*                                 <span class="input-group-addon text-capitalize">*/
/*                                     */
/*                                     {{ 'magazine.field.inventoryNumber'|trans }}*/
/*                                 </span>*/
/*                                 {{ form_widget(form.inventoryNumber,{*/
/*                                 'attr' : { 'disabled':'disabled' } */
/*                                 }) }}*/
/*                                 <span class="input-group-addon text-capitalize">*/
/*                                     <input id="inventoryNumber" type="checkbox">*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                     </div>*/
/*                     <div class="form-group"  >*/
/*                         <div class="col-sm-6">*/
/*                             {{ form_widget(form.family,{*/
/*                             'attr' : { 'style':"width:100% !important" , 'class' :"populate" , 'placeholder' : 'magazine.field.article'|trans } */
/*                             }) }}*/
/*                         </div>*/
/*                         <div class="col-sm-6">*/
/*                             {{ form_widget(form.subFamily,{*/
/*                             'attr' : { 'style':"width:100% !important" , 'class' :"populate" , 'placeholder' : 'magazine.field.article'|trans } */
/*                             }) }}*/
/*                         </div>*/
/*                         */
/*                         */
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <div class="col-sm-10 col-sm-offset-1">*/
/*                             {{ form_widget(form.article,{*/
/*                             'attr' : { 'style':"width:100% !important" , 'class' :"populate" , 'placeholder' : 'magazine.field.article'|trans } */
/*                             }) }}*/
/*                         </div>*/
/*                         <div id="article_error"  class="col-sm-10 col-sm-offset-1 text-danger">*/
/*                             */
/*                         </div>*/
/*                         */
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <div class="col-sm-6">*/
/*                             <div class="input-group">                           */
/*                                 */
/*                                 {{ form_widget(form.price , {*/
/*                                 'attr' : { 'class' : 'form-control' ,*/
/*                                            'placeholder' : 'magazine.field.price'|trans*/
/*                                         }*/
/*                                 }) }}*/
/*                                 <span class="input-group-addon text-capitalize">*/
/*                                     <i id="load" class="ti ti-money"></i> */
/*                                     {{ 'magazine.devise'|trans }}*/
/*                                 </span>*/
/*                             </div>*/
/*                             <div id="price_error"  class="col-sm-6 text-danger">*/
/*                             */
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-6">*/
/*                             <div class="input-group">                           */
/*                                 <span class="input-group-addon text-capitalize">*/
/*                                     <i id="load" class="ti ti-archive"></i> */
/*                                     {{ 'magazine.field.quantity'|trans }}*/
/*                                 </span>*/
/*                                 {{ form_widget(form.quantity , {*/
/*                                     'attr' : { 'class' : 'form-control' ,  'placeholder' : 'magazine.field.quantity' }*/
/*                                 }) }}*/
/*                             </div>*/
/*                             <div id="quantity_error"  class="col-sm-6 text-danger">*/
/*                             */
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                     </div>*/
/*                     */
/*                     {{ form_widget(form) }}*/
/*                     {{ form_end(form) }}*/
/*     </div>*/
/* </div>*/
/* <div class="col-md-6">*/
/*     <div class="panel panel-primary"  style="margin-top: 20px;">*/
/*         <div class="panel-heading">*/
/*             {{ 'supportingdocument.list.name'|trans }}*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>{{ 'magazine.field.designation'|trans }}</th>*/
/*                         <th>{{ 'magazine.field.price'|trans }}</th>*/
/*                         <th>{{ 'magazine.field.quantity'|trans }}</th>*/
/*                         <th>{{ 'magazine.action'|trans }}</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     */
/*                     {% for supportingDocument in journal.SupportingDocument %}*/
/*                         <tr>*/
/*                             <td>{{ supportingDocument.article.designation }}</td>*/
/*                             <td id="price{{ supportingDocument.article.id }}" >{{ supportingDocument.price }}</td>*/
/*                             <td id="quantity{{ supportingDocument.article.id }}">{{ supportingDocument.quantity }}</td> */
/*                             <td>*/
/*                                 */
/*                                 <div class="btn-group">*/
/*                                     <a href="{{ path(url, { 'id': journal.id , 'idSupportingDocument' : supportingDocument.id}) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                     <a href="#" data-box="#{{ supportingDocument.article.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                 </div>*/
/*                             </td>                                    <!-- MESSAGE BOX-->*/
/*                                 <div class="message-box animated fadeIn" data-sound="alert" id="{{ supportingDocument.article.id }}">*/
/*                                     <div class="mb-container">*/
/*                                         <div class="mb-middle">*/
/*                                             <div class="mb-title"><span class="ti ti-trash"></span> {{ 'supportingdocument.delete.name'|trans }} ?</div>*/
/*                                             <div class="mb-content">*/
/*                                                 <p>{{ 'supportingdocument.delete.message'|trans }}</p>                    */
/*                                                 */
/*                                             </div>*/
/*                                             <div class="mb-footer">*/
/*                                                 <div class="pull-right">*/
/*                                                     <form action="{{ path(delete_url, {'id' : supportingDocument.id , 'idJournal' : journal.id }) }}" method="post">*/
/*                                                         <input type="hidden" name="_method" value="DELETE" />*/
/*                                                         {{ form_widget(deleteForms[supportingDocument.id]) }} */
/*                                                         <button type="submit" class="btn btn-danger btn-lg">*/
/*                                                             <i class="icon-trash"></i>*/
/*                                                              {{ 'messageBox.yes'|trans }}*/
/*                                                         </button>*/
/*                                                     </form>*/
/*                                                     <button class="btn btn-default btn-lg mb-control-close">*/
/*                                                         {{ 'messageBox.no'|trans }}</button>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             <!-- END MESSAGE BOX-->*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             </div><div class="panel-footer footer-dataTable"></div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
