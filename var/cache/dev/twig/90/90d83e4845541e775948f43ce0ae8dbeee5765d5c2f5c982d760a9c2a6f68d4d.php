<?php

/* :Template:returnArticleFormTemplate.html.twig */
class __TwigTemplate_155217491cb6ad573b8ccf68c0b07eea472f12dea2247d1a93523d7290d3e240 extends Twig_Template
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
        $__internal_44487b0e7a14e38fc91d584341f0d76cdff4ff1c1c0e1c1d7be20a6b606640e4 = $this->env->getExtension("native_profiler");
        $__internal_44487b0e7a14e38fc91d584341f0d76cdff4ff1c1c0e1c1d7be20a6b606640e4->enter($__internal_44487b0e7a14e38fc91d584341f0d76cdff4ff1c1c0e1c1d7be20a6b606640e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Template:returnArticleFormTemplate.html.twig"));

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
            <div class=\"col-md-12\">
                <legend>
                    <h4>
                        <i class=\"ti ti-layout-list-thumb-alt\"></i>
                         ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.list.name"), "html", null, true);
        echo "
                        <div class=\"pull-right\">
                            <a class=\"btn btn-info-alt\" href=\"\">
                                <i class=\"fa fa-refresh\"></i>
                            </a>
                        
                        </div>
                    </h4>
                    
                </legend>
                <div class=\"tab-container tab-primary\">
                    <ul class=\"nav nav-tabs\"><li class=\"dropdown pull-right tabdrop hide\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><i class=\"fa fa-angle-down\"></i> </a><ul class=\"dropdown-menu\"></ul></li>
                        <li class=\"active\"><a href=\"#durable\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"ti ti-link\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.dropDownArticle.durable"), "html", null, true);
        echo "</a></li>
                        <li class=\"pull-right\"><a href=\"#consumable\" data-toggle=\"tab\" aria-expanded=\"false\"><i class=\"ti ti-unlink\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.dropDownArticle.consumable"), "html", null, true);
        echo "</a></li>
                    </ul>
                    <div class=\"tab-content\">
                        
                        <div class=\"tab-pane active\" id=\"durable\">
                            <table class=\"table table-striped table-bordered DataTable\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <tr>
                                        <th class=\"text text-primary\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "html", null, true);
        echo "</th>
                                        <th class=\"text text-primary\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                                        <th class=\"text text-primary\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                                        <th class=\"text text-primary\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantityReturned"), "html", null, true);
        echo "</th>
                                        <th class=\"text text-primary\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                                        <th class=\"text text-primary\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "durable", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 56
            echo "                                        
                                            <tr id=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "id", array()), "html", null, true);
            echo "\">

                                                <td>
                                                    ";
            // line 60
            $context["table"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "inventoryNumber", array()), ",");
            // line 61
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["table"]) ? $context["table"] : $this->getContext($context, "table")));
            foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                // line 62
                echo "                                                        <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>
                                                        ";
                // line 63
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "
                                                        
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                                                </td>
                                                <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "designation", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "quantity", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "qteReturned", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "unit", array()), "designation", array()), "html", null, true);
            echo "</td>
                                                
                                                <td>
                                                    ";
            // line 73
            if ((($this->getAttribute($context["detail"], "qteReturned", array()) - $this->getAttribute($context["detail"], "quantity", array())) == 0)) {
                // line 74
                echo "                                                        <button value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "id", array()), "html", null, true);
                echo "\" class=\"btn btn-success-alt\" disabled=\"\">
                                                        <i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i></button>
                                                    ";
            } else {
                // line 77
                echo "                                                        <button data-qte=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "quantity", array()), "html", null, true);
                echo "\" data-article =\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "designation", array()), "html", null, true);
                echo "\" data-supportingDocument=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "inventoryNumber", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "id", array()), "html", null, true);
                echo "\" class=\"btn btn-info-alt return\"><i class=\"ti ti-pencil\"></i></button>
                                                    ";
            }
            // line 79
            echo "                                                </td>
                                            </tr>
                                        
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                                    
                                </tbody>
                            </table>
                        </div>
                    <div class=\"tab-pane\" id=\"consumable\">
                        <table class=\"table table-striped table-bordered DataTable\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                                <tr>
                                    <th class=\"text text-primary\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "html", null, true);
        echo "</th>
                                    <th class=\"text text-primary\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                                    <th class=\"text text-primary\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                                    <th class=\"text text-primary\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantityReturned"), "html", null, true);
        echo "</th>
                                    <th class=\"text text-primary\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                                    <th class=\"text text-primary\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo "</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["discharge"]) ? $context["discharge"] : $this->getContext($context, "discharge")), "consumable", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 101
            echo "                                    
                                        <tr id=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "id", array()), "html", null, true);
            echo "\">
                                            <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "inventoryNumber", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "designation", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "quantity", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "qteReturned", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "unit", array()), "designation", array()), "html", null, true);
            echo "</td>
                                            <td>
                                                ";
            // line 109
            if ((($this->getAttribute($context["detail"], "qteReturned", array()) - $this->getAttribute($context["detail"], "quantity", array())) == 0)) {
                // line 110
                echo "                                                    <button value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "id", array()), "html", null, true);
                echo "\" class=\"btn btn-success-alt\" disabled=\"\">
                                                    <i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i></button>
                                                ";
            } else {
                // line 113
                echo "                                                    <button data-qte=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "quantity", array()), "html", null, true);
                echo "\" data-article =\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "designation", array()), "html", null, true);
                echo "\" data-supportingDocument=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "inventoryNumber", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "id", array()), "html", null, true);
                echo "\" class=\"btn btn-info-alt returnAndEdit\"><i class=\"ti ti-pencil\"></i></button>
                                                ";
            }
            // line 115
            echo "                                                
                                            </td>
                                        </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            <div id=\"formPlace\" class=\"col-md-6\">
                
                    <div id=\"annimation\" style=\"padding-top: 100%;margin-bottom: -20%;\">
                        
                    
                        <div class='Cube panelLoad'>
                          <div class='cube-face cube-face-front'><i class=\"ti ti-home\"></i></div>
                          <div class='cube-face cube-face-back'><i class=\"ti ti-search\"></i></div>
                          <div class='cube-face cube-face-left'><i class=\"ti ti-archive\"></i></div>
                          <div class='cube-face cube-face-right'><i class=\"ti ti-agenda\"></i></div>  
                          <div class='cube-face cube-face-bottom'><i class=\"fa fa-building-o\"></i></div>
                          <div class='cube-face cube-face-top'><i class=\"ti ti-truck\"></i></div>
                        </div>
                    </div>
                    <div  id=\"detailForm\">
                        <legend><h4><i class=\"ti ti-marker\"></i> ";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.new.name"), "html", null, true);
        echo "</h4></legend>
                    <form class=\"form-horizontal row-border\" role=\"form\">
                        <div class=\"form-group has-success\">
                            <div class=\"col-sm-10 col-sm-offset-1\">                        
                                <input class=\"form-control\" readonly=\"true\" type=\"text\" id=\"articleDesignation\" placeholder=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.article"), "html", null, true);
        echo "\" >
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-10 col-sm-offset-1\">
                                <select style= \"width:100% !important\" class =\"form-control populate\" id=\"article\">
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-6\">
                                <div class=\"input-group\">                           
                                    <span class=\"input-group-addon text-capitalize\">
                                        <i id=\"load\" class=\"ti ti-truck\"></i>
                                    </span>
                                        <input class=\"form-control\" type=\"number\" id=\"return_quantity\" placeholder=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"input-group has-success\">                           
                                    <span class=\"input-group-addon text-capitalize\">
                                        <i id=\"load\" class=\"ti ti-archive\"></i>
                                    </span>
                                        <input class=\"form-control\"  readonly=\"true\" type=\"number\" id=\"quantity\" placeholder=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "\">
        
                                </div>
                            </div>
                            
                            
                        </div>
                        
                    </form>
                    <div class=\"pull-right\" style=\"margin-top: 5%;\">
                        <button id=\"new\" class=\"btn btn-primary\">
                        <i class=\"fa fa-plus\"></i>
                        ";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.new.submit"), "html", null, true);
        echo "
                        </button>
                        <button id=\"newDurable\" class=\"btn btn-primary\">
                        <i class=\"fa fa-plus\"></i>
                        ";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.new.submit"), "html", null, true);
        echo "
                        </button>
                        <button id=\"edit\" class=\"btn btn-primary\">
                        <i class=\"ti ti-pencil-alt\"></i>
                        ";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.edit.submit"), "html", null, true);
        echo "
                        </button>
                        <button id=\"annuler\" class=\"btn btn-danger\">
                            <i class=\"ti ti-back-right\"></i>
                            ";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.edit.annuler"), "html", null, true);
        echo "
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\" style=\"border-left: 1px solid black;\">
                <legend><h4><i class=\"ti ti-view-list-alt\"></i> ";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.list.name"), "html", null, true);
        echo "</h4></legend>
                <div class=\"btn-group\">
                        <a class=\"btn btn-primary active toggle-vis\" data-column=\"0\" style=\"margin-bottom: 2%;\"> ";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "html", null, true);
        echo "
                        </a>
                        <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary toggle-vis\" data-column=\"1\" name=\"options\" id=\"designation\"> ";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "
                        </a>
                        <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary toggle-vis\" data-column=\"2\"> ";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "
                        </a>
                        <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary active  toggle-vis\" data-column=\"3\"> ";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "
                        </a>
                        <a style=\"margin-bottom: 2%;\" class=\"btn btn-primary active toggle-vis\" data-column=\"4\"> ";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "
                        </a>
                        
                    </div> 
                    <hr>
                <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "html", null, true);
        echo "</th>
                            <th>";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                            <th>";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                            <th>";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                            <th>";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                            <th>";
        // line 221
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
            <legend>
                <h4>
                    <i class=\"ti ti-save-alt\"></i>
                     ";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["form_name"]) ? $context["form_name"] : $this->getContext($context, "form_name")), "html", null, true);
        echo "
                 </h4>
             </legend> 
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
        echo twig_escape_filter($this->env, (isset($context["submit_name"]) ? $context["submit_name"] : $this->getContext($context, "submit_name")), "html", null, true);
        echo "
            </button>
            
        </div>
    </div>
</div>";
        
        $__internal_44487b0e7a14e38fc91d584341f0d76cdff4ff1c1c0e1c1d7be20a6b606640e4->leave($__internal_44487b0e7a14e38fc91d584341f0d76cdff4ff1c1c0e1c1d7be20a6b606640e4_prof);

    }

    public function getTemplateName()
    {
        return ":Template:returnArticleFormTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 254,  494 => 240,  490 => 239,  486 => 238,  480 => 235,  463 => 221,  459 => 220,  455 => 219,  451 => 218,  447 => 217,  443 => 216,  432 => 208,  427 => 206,  422 => 204,  417 => 202,  412 => 200,  407 => 198,  398 => 192,  391 => 188,  384 => 184,  377 => 180,  362 => 168,  351 => 160,  333 => 145,  326 => 141,  302 => 119,  293 => 115,  281 => 113,  274 => 110,  272 => 109,  267 => 107,  263 => 106,  259 => 105,  255 => 104,  251 => 103,  247 => 102,  244 => 101,  240 => 100,  233 => 96,  229 => 95,  225 => 94,  221 => 93,  217 => 92,  213 => 91,  203 => 83,  194 => 79,  182 => 77,  175 => 74,  173 => 73,  167 => 70,  163 => 69,  159 => 68,  155 => 67,  152 => 66,  143 => 63,  140 => 62,  135 => 61,  133 => 60,  127 => 57,  124 => 56,  120 => 55,  113 => 51,  109 => 50,  105 => 49,  101 => 48,  97 => 47,  93 => 46,  82 => 38,  78 => 37,  63 => 25,  51 => 16,  47 => 15,  39 => 10,  35 => 9,  26 => 3,  22 => 1,);
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
/*             <div class="col-md-12">*/
/*                 <legend>*/
/*                     <h4>*/
/*                         <i class="ti ti-layout-list-thumb-alt"></i>*/
/*                          {{ 'detail.list.name'|trans }}*/
/*                         <div class="pull-right">*/
/*                             <a class="btn btn-info-alt" href="">*/
/*                                 <i class="fa fa-refresh"></i>*/
/*                             </a>*/
/*                         */
/*                         </div>*/
/*                     </h4>*/
/*                     */
/*                 </legend>*/
/*                 <div class="tab-container tab-primary">*/
/*                     <ul class="nav nav-tabs"><li class="dropdown pull-right tabdrop hide"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-angle-down"></i> </a><ul class="dropdown-menu"></ul></li>*/
/*                         <li class="active"><a href="#durable" data-toggle="tab" aria-expanded="true"><i class="ti ti-link"></i> {{ 'menu.dropDownArticle.durable'|trans }}</a></li>*/
/*                         <li class="pull-right"><a href="#consumable" data-toggle="tab" aria-expanded="false"><i class="ti ti-unlink"></i> {{ 'menu.dropDownArticle.consumable'|trans }}</a></li>*/
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                         */
/*                         <div class="tab-pane active" id="durable">*/
/*                             <table class="table table-striped table-bordered DataTable" cellspacing="0" width="100%">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th class="text text-primary">{{ 'magazine.field.inventoryNumber'|trans }}</th>*/
/*                                         <th class="text text-primary">{{ 'magazine.field.designation'|trans }}</th>*/
/*                                         <th class="text text-primary">{{ 'magazine.field.quantity'|trans }}</th>*/
/*                                         <th class="text text-primary">{{ 'magazine.field.quantityReturned'|trans }}</th>*/
/*                                         <th class="text text-primary">{{ 'magazine.field.unit'|trans }}</th>*/
/*                                         <th class="text text-primary">{{ 'magazine.action'|trans }}</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for detail in discharge.durable|sort %}*/
/*                                         */
/*                                             <tr id="{{ detail.supportingDocument.id }}">*/
/* */
/*                                                 <td>*/
/*                                                     {% set table = detail.supportingDocument.inventoryNumber|split(',') %}*/
/*                                                     {% for val in table %}*/
/*                                                         <i class="fa fa-long-arrow-right" aria-hidden="true"></i>*/
/*                                                         {{ val }}*/
/*                                                         */
/*                                                     {% endfor %}*/
/*                                                 </td>*/
/*                                                 <td>{{ detail.supportingDocument.article.designation }}</td>*/
/*                                                 <td>{{ detail.quantity }}</td>*/
/*                                                 <td>{{ detail.qteReturned }}</td>*/
/*                                                 <td>{{ detail.supportingDocument.article.unit.designation }}</td>*/
/*                                                 */
/*                                                 <td>*/
/*                                                     {% if detail.qteReturned - detail.quantity == 0 %}*/
/*                                                         <button value="{{ detail.supportingDocument.id }}" class="btn btn-success-alt" disabled="">*/
/*                                                         <i class="fa fa-thumbs-up" aria-hidden="true"></i></button>*/
/*                                                     {% else %}*/
/*                                                         <button data-qte="{{detail.quantity }}" data-article ="{{detail.supportingDocument.article.designation }}" data-supportingDocument="{{detail.supportingDocument.inventoryNumber}}" value="{{ detail.supportingDocument.id }}" class="btn btn-info-alt return"><i class="ti ti-pencil"></i></button>*/
/*                                                     {% endif %}*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         */
/*                                     {% endfor %}*/
/*                                     */
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     <div class="tab-pane" id="consumable">*/
/*                         <table class="table table-striped table-bordered DataTable" cellspacing="0" width="100%">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.inventoryNumber'|trans }}</th>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.designation'|trans }}</th>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.quantity'|trans }}</th>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.quantityReturned'|trans }}</th>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.unit'|trans }}</th>*/
/*                                     <th class="text text-primary">{{ 'magazine.action'|trans }}</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for detail in discharge.consumable %}*/
/*                                     */
/*                                         <tr id="{{ detail.supportingDocument.id }}">*/
/*                                             <td>{{ detail.supportingDocument.inventoryNumber }}</td>*/
/*                                             <td>{{ detail.supportingDocument.article.designation }}</td>*/
/*                                             <td>{{ detail.quantity }}</td>*/
/*                                             <td>{{ detail.qteReturned }}</td>*/
/*                                             <td>{{ detail.supportingDocument.article.unit.designation }}</td>*/
/*                                             <td>*/
/*                                                 {% if (detail.qteReturned - detail.quantity) == 0 %}*/
/*                                                     <button value="{{ detail.supportingDocument.id }}" class="btn btn-success-alt" disabled="">*/
/*                                                     <i class="fa fa-thumbs-up" aria-hidden="true"></i></button>*/
/*                                                 {% else %}*/
/*                                                     <button data-qte="{{detail.quantity }}" data-article ="{{detail.supportingDocument.article.designation }}" data-supportingDocument="{{detail.supportingDocument.inventoryNumber}}" value="{{ detail.supportingDocument.id }}" class="btn btn-info-alt returnAndEdit"><i class="ti ti-pencil"></i></button>*/
/*                                                 {% endif %}*/
/*                                                 */
/*                                             </td>*/
/*                                         </tr>*/
/*                                 {% endfor %}*/
/*                                 */
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             </div>*/
/*             <div id="formPlace" class="col-md-6">*/
/*                 */
/*                     <div id="annimation" style="padding-top: 100%;margin-bottom: -20%;">*/
/*                         */
/*                     */
/*                         <div class='Cube panelLoad'>*/
/*                           <div class='cube-face cube-face-front'><i class="ti ti-home"></i></div>*/
/*                           <div class='cube-face cube-face-back'><i class="ti ti-search"></i></div>*/
/*                           <div class='cube-face cube-face-left'><i class="ti ti-archive"></i></div>*/
/*                           <div class='cube-face cube-face-right'><i class="ti ti-agenda"></i></div>  */
/*                           <div class='cube-face cube-face-bottom'><i class="fa fa-building-o"></i></div>*/
/*                           <div class='cube-face cube-face-top'><i class="ti ti-truck"></i></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div  id="detailForm">*/
/*                         <legend><h4><i class="ti ti-marker"></i> {{ 'detail.new.name'|trans }}</h4></legend>*/
/*                     <form class="form-horizontal row-border" role="form">*/
/*                         <div class="form-group has-success">*/
/*                             <div class="col-sm-10 col-sm-offset-1">                        */
/*                                 <input class="form-control" readonly="true" type="text" id="articleDesignation" placeholder="{{ 'magazine.field.article'|trans }}" >*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-sm-10 col-sm-offset-1">*/
/*                                 <select style= "width:100% !important" class ="form-control populate" id="article">*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="input-group">                           */
/*                                     <span class="input-group-addon text-capitalize">*/
/*                                         <i id="load" class="ti ti-truck"></i>*/
/*                                     </span>*/
/*                                         <input class="form-control" type="number" id="return_quantity" placeholder="{{ 'magazine.field.quantity'|trans }}">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="input-group has-success">                           */
/*                                     <span class="input-group-addon text-capitalize">*/
/*                                         <i id="load" class="ti ti-archive"></i>*/
/*                                     </span>*/
/*                                         <input class="form-control"  readonly="true" type="number" id="quantity" placeholder="{{ 'magazine.field.quantity'|trans }}">*/
/*         */
/*                                 </div>*/
/*                             </div>*/
/*                             */
/*                             */
/*                         </div>*/
/*                         */
/*                     </form>*/
/*                     <div class="pull-right" style="margin-top: 5%;">*/
/*                         <button id="new" class="btn btn-primary">*/
/*                         <i class="fa fa-plus"></i>*/
/*                         {{ 'detail.new.submit'|trans }}*/
/*                         </button>*/
/*                         <button id="newDurable" class="btn btn-primary">*/
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
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6" style="border-left: 1px solid black;">*/
/*                 <legend><h4><i class="ti ti-view-list-alt"></i> {{ 'detail.list.name'|trans }}</h4></legend>*/
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
/*             <legend>*/
/*                 <h4>*/
/*                     <i class="ti ti-save-alt"></i>*/
/*                      {{ form_name }}*/
/*                  </h4>*/
/*              </legend> */
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
/*                 {{ submit_name }}*/
/*             </button>*/
/*             */
/*         </div>*/
/*     </div>*/
/* </div>*/
