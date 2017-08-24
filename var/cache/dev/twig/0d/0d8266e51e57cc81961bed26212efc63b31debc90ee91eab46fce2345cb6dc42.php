<?php

/* ISETSOMagazineBundle:Etat:inventory.html.twig */
class __TwigTemplate_867e98f4169f6928e413f7c1c6c1b0ff794892b3b24d3b48fe3e275b12e98871 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ISETSOMagazineBundle:Etat:inventory.html.twig", 1);
        $this->blocks = array(
            'breadcrumbActive' => array($this, 'block_breadcrumbActive'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41ae0c7a9fe5f01ad17ae07badd491135750631b6106b91a6c324edd8a5ecc3b = $this->env->getExtension("native_profiler");
        $__internal_41ae0c7a9fe5f01ad17ae07badd491135750631b6106b91a6c324edd8a5ecc3b->enter($__internal_41ae0c7a9fe5f01ad17ae07badd491135750631b6106b91a6c324edd8a5ecc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:Etat:inventory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41ae0c7a9fe5f01ad17ae07badd491135750631b6106b91a6c324edd8a5ecc3b->leave($__internal_41ae0c7a9fe5f01ad17ae07badd491135750631b6106b91a6c324edd8a5ecc3b_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_a11b3e79f06f69f9009d0f864aea675d39d34e78d228750883c59a4f42c91f9f = $this->env->getExtension("native_profiler");
        $__internal_a11b3e79f06f69f9009d0f864aea675d39d34e78d228750883c59a4f42c91f9f->enter($__internal_a11b3e79f06f69f9009d0f864aea675d39d34e78d228750883c59a4f42c91f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.name"), "html", null, true);
        
        $__internal_a11b3e79f06f69f9009d0f864aea675d39d34e78d228750883c59a4f42c91f9f->leave($__internal_a11b3e79f06f69f9009d0f864aea675d39d34e78d228750883c59a4f42c91f9f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85a79487013f7f6456ffbb073fabd91a74badcd547e1cd9851a49bf487b89894 = $this->env->getExtension("native_profiler");
        $__internal_85a79487013f7f6456ffbb073fabd91a74badcd547e1cd9851a49bf487b89894->enter($__internal_85a79487013f7f6456ffbb073fabd91a74badcd547e1cd9851a49bf487b89894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "56ec73a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56ec73a_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/56ec73a_product_1.css");
            // line 9
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "56ec73a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56ec73a_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/56ec73a_jquery-confirm_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "56ec73a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56ec73a") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/56ec73a.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    
";
        
        $__internal_85a79487013f7f6456ffbb073fabd91a74badcd547e1cd9851a49bf487b89894->leave($__internal_85a79487013f7f6456ffbb073fabd91a74badcd547e1cd9851a49bf487b89894_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1026eb9928df2ecf4dd477d2dfd36226c667d32a4b1438ef3f4f2027c9c1339 = $this->env->getExtension("native_profiler");
        $__internal_b1026eb9928df2ecf4dd477d2dfd36226c667d32a4b1438ef3f4f2027c9c1339->enter($__internal_b1026eb9928df2ecf4dd477d2dfd36226c667d32a4b1438ef3f4f2027c9c1339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<div data-widget-group=\"group1\">
    <div class=\"row\">
        <div class=\"pull-right col-md-5\">
            <div class=\"panel panel-inverse panel-collapsed\" data-widget=\"{\"id\" : \"wiget1\"}\" data-widget='{\"draggable\": \"false\"}'>
                <div class=\"panel-heading\">
                    <h2><i class=\"ti ti-search\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.search"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\" data-actions-container=\"\" data-action-collapse='{\"target\": \".panel-body\"}'></div>
                    <div class=\"panel-editbox\" data-widget-controls=\"\"></div>
                </div>
                <div class=\"panel-body\" style=\"display: none;\">
                    
                    ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-row")));
        // line 28
        echo "

                        <div class=\"form-group\" >
                             ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => "family.list.search")));
        // line 37
        echo "
                        </div>

                        <div class=\"form-group\">
                            <div class=\"input-daterange input-group\" id=\"datepicker-range\">
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateStart", array()), 'widget', array("attr" => array("class" => "form-control ")));
        // line 47
        echo "
                                <span class=\"input-group-addon text-capitalize\">
                                    <i class=\"fa fa-arrow-right\"></i>
                                </span>
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEnd", array()), 'widget', array("attr" => array("class" => "form-control ")));
        // line 56
        echo "
                            </div>
                        </div>

                        <div class=\"pull-right\">
                            <div class=\"btn-group\">
                                <button type=\"submit\" class=\"btn btn-warning-alt\">
                                    <i class=\"ti ti-search\"></i>
                                </button>
                            </div>
                        </div>
                        ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div></div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2><i class=\"fa fa-list\"></i> ";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\">
                        <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                            <div class=\"btn-group\">
                                <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        echo "\" class=\"btn btn-warning-alt\">
                                    <i class=\"ti ti-reload\" aria-hidden=\"true\"></i>
                                </a>
                            
                                <a name=\"print\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("print" => "true"))), "html", null, true);
        echo "\" value=\"true\" ";
        echo (((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) ? ("disabled = \"true\"") : (""));
        echo " onclick=\"window.open(this.href); return false;\" class=\"btn btn-info-alt\">
                                <i class=\"ti ti-printer\"></i>
                                </a>
                            </div>
                        </div>
                        <i class=\"separator\"></i>
                        <div class=\"panel-heading pull-left\">
                            <label class=\"panel-ctrls-center\">
                               ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "getTotalItemCount", array()), "html", null, true);
        echo "
                               ";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.resultFound"), "html", null, true);
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
        // line 100
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "f.inventoryNumber");
        echo "
                                        ";
        // line 101
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.inventoryNumber"), "method")) {
            // line 102
            echo "                                            
                                            ";
            // line 103
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 104
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 106
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 108
            echo "                                        ";
        } else {
            // line 109
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 111
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 113
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.designation"), "a.designation");
        echo "
                                        ";
        // line 114
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "a.designation"), "method")) {
            // line 115
            echo "                                            
                                            ";
            // line 116
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 117
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 119
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 121
            echo "                                        ";
        } else {
            // line 122
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 124
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 126
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.price"), "f.price");
        echo "
                                        ";
        // line 127
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.price"), "method")) {
            // line 128
            echo "                                            
                                            ";
            // line 129
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 130
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 132
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 134
            echo "                                        ";
        } else {
            // line 135
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 137
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 139
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.quantity"), "f.quantity");
        echo "
                                        ";
        // line 140
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.quantity"), "method")) {
            // line 141
            echo "                                            
                                            ";
            // line 142
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 143
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 145
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 147
            echo "                                        ";
        } else {
            // line 148
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 150
        echo "                                    </th> 
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 152
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.unit"), "u.designation");
        echo "
                                        ";
        // line 153
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "u.designation"), "method")) {
            // line 154
            echo "                                            
                                            ";
            // line 155
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 156
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 158
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 160
            echo "                                        ";
        } else {
            // line 161
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 163
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 165
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.family"), "fa.designation");
        echo "
                                        ";
        // line 166
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "fa.designation"), "method")) {
            // line 167
            echo "                                            
                                            ";
            // line 168
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 169
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 171
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 173
            echo "                                        ";
        } else {
            // line 174
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 176
        echo "                                    </th> 
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 178
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "sf.designation");
        echo "
                                        ";
        // line 179
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "sf.designation"), "method")) {
            // line 180
            echo "                                            
                                            ";
            // line 181
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 182
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 184
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 186
            echo "                                        ";
        } else {
            // line 187
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 189
        echo "                                    </th> 
                                    
                                    
                                
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 196
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                <td  class=\"text text-capitalize text-danger text-center animated fadeInUp\" colspan=\"7\">
                                    <i class=\"fa fa-exclamation-triangle\"></i>
                                    ";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.noResultFound"), "html", null, true);
            echo "
                                    </p>
                                 </td>
                                  
                                ";
        } else {
            // line 204
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["supportingDocument"]) {
                // line 205
                echo "                                    <tr>
                                        <td>";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "inventoryNumber", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 207
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "designation", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 208
                echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "price", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "quantity", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "unit", array()), "designation", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 211
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "subFamily", array()), "designation", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "subFamily", array()), "family", array()), "designation", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supportingDocument'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "                            ";
        }
        // line 216
        echo "                         </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 220
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_b1026eb9928df2ecf4dd477d2dfd36226c667d32a4b1438ef3f4f2027c9c1339->leave($__internal_b1026eb9928df2ecf4dd477d2dfd36226c667d32a4b1438ef3f4f2027c9c1339_prof);

    }

    // line 226
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c087cd3c235d92c4527b42b468dae1190db364d4e6edb99153c2ec67bda0a9b8 = $this->env->getExtension("native_profiler");
        $__internal_c087cd3c235d92c4527b42b468dae1190db364d4e6edb99153c2ec67bda0a9b8->enter($__internal_c087cd3c235d92c4527b42b468dae1190db364d4e6edb99153c2ec67bda0a9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 227
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 228
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2956017_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2956017_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2956017_moment.min_1.js");
            // line 233
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "2956017_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2956017_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2956017_bootstrap-datepicker_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "2956017_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2956017_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2956017_dateRange_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "2956017"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2956017") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2956017.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_c087cd3c235d92c4527b42b468dae1190db364d4e6edb99153c2ec67bda0a9b8->leave($__internal_c087cd3c235d92c4527b42b468dae1190db364d4e6edb99153c2ec67bda0a9b8_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:Etat:inventory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  513 => 233,  509 => 228,  504 => 227,  498 => 226,  485 => 220,  479 => 216,  476 => 215,  467 => 212,  463 => 211,  459 => 210,  455 => 209,  451 => 208,  447 => 207,  443 => 206,  440 => 205,  435 => 204,  427 => 199,  421 => 196,  412 => 189,  408 => 187,  405 => 186,  401 => 184,  397 => 182,  395 => 181,  392 => 180,  390 => 179,  386 => 178,  382 => 176,  378 => 174,  375 => 173,  371 => 171,  367 => 169,  365 => 168,  362 => 167,  360 => 166,  356 => 165,  352 => 163,  348 => 161,  345 => 160,  341 => 158,  337 => 156,  335 => 155,  332 => 154,  330 => 153,  326 => 152,  322 => 150,  318 => 148,  315 => 147,  311 => 145,  307 => 143,  305 => 142,  302 => 141,  300 => 140,  296 => 139,  292 => 137,  288 => 135,  285 => 134,  281 => 132,  277 => 130,  275 => 129,  272 => 128,  270 => 127,  266 => 126,  262 => 124,  258 => 122,  255 => 121,  251 => 119,  247 => 117,  245 => 116,  242 => 115,  240 => 114,  236 => 113,  232 => 111,  228 => 109,  225 => 108,  221 => 106,  217 => 104,  215 => 103,  212 => 102,  210 => 101,  206 => 100,  193 => 90,  189 => 89,  176 => 81,  169 => 77,  162 => 73,  153 => 67,  140 => 56,  138 => 51,  132 => 47,  130 => 42,  123 => 37,  121 => 31,  116 => 28,  114 => 25,  105 => 19,  98 => 14,  92 => 13,  84 => 11,  64 => 9,  60 => 5,  55 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block breadcrumbActive %}{{ 'supportingdocument.list.name'|trans }}{% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets */
/*         'bundles/isetsomagazine/css/product.css'*/
/*         'bundles/isetsomagazine/plugins/model/jquery-confirm.css'*/
/*         filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     */
/* {% endblock %}*/
/* {% block body %}*/
/* <div data-widget-group="group1">*/
/*     <div class="row">*/
/*         <div class="pull-right col-md-5">*/
/*             <div class="panel panel-inverse panel-collapsed" data-widget="{"id" : "wiget1"}" data-widget='{"draggable": "false"}'>*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="ti ti-search"></i> {{ 'supportingdocument.list.search'|trans }}</h2>*/
/*                     <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>*/
/*                     <div class="panel-editbox" data-widget-controls=""></div>*/
/*                 </div>*/
/*                 <div class="panel-body" style="display: none;">*/
/*                     */
/*                     {{ form_start(form ,{*/
/*                         'attr' : { 'class' : 'form-row' } */
/*                         */
/*                     }) }}*/
/* */
/*                         <div class="form-group" >*/
/*                              {{ form_widget(form.search,{*/
/*                                 'attr' : {*/
/*                                     'class' : 'form-control ' ,*/
/*                                     'placeholder' : 'family.list.search'*/
/*                                 } */
/*                                 */
/*                             }) }}*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="input-daterange input-group" id="datepicker-range">*/
/*                                 {{ form_widget(form.dateStart,{*/
/*                                     'attr' : {*/
/*                                         'class' : 'form-control ' ,*/
/*                                     } */
/*                                     */
/*                                 }) }}*/
/*                                 <span class="input-group-addon text-capitalize">*/
/*                                     <i class="fa fa-arrow-right"></i>*/
/*                                 </span>*/
/*                                 {{ form_widget(form.dateEnd,{*/
/*                                     'attr' : {*/
/*                                         'class' : 'form-control ' */
/*                                     } */
/*                                     */
/*                                 }) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="pull-right">*/
/*                             <div class="btn-group">*/
/*                                 <button type="submit" class="btn btn-warning-alt">*/
/*                                     <i class="ti ti-search"></i>*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div></div>*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'supportingdocument.list.name'|trans }}</h2>*/
/*                     <div class="panel-ctrls">*/
/*                         <div id="example_filter" class="dataTables_filter pull-right">*/
/*                             <div class="btn-group">*/
/*                                 <a href="{{ path(app.request.attributes.get('_route')) }}" class="btn btn-warning-alt">*/
/*                                     <i class="ti ti-reload" aria-hidden="true"></i>*/
/*                                 </a>*/
/*                             */
/*                                 <a name="print" href="{{ path(app.request.attributes.get('_route') ,app.request.query.all|merge({'print': 'true'})) }}" value="true" {{ padding|length == 0 ? 'disabled = "true"' : ""}} onclick="window.open(this.href); return false;" class="btn btn-info-alt">*/
/*                                 <i class="ti ti-printer"></i>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <i class="separator"></i>*/
/*                         <div class="panel-heading pull-left">*/
/*                             <label class="panel-ctrls-center">*/
/*                                {{ padding.getTotalItemCount }}*/
/*                                {{ 'supportingdocument.list.resultFound'|trans }}*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel-body no-padding">*/
/*                     <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.inventoryNumber'|trans , 'f.inventoryNumber') }}*/
/*                                         {% if padding.isSorted('f.inventoryNumber') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.designation'|trans , 'a.designation') }}*/
/*                                         {% if padding.isSorted('a.designation') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.price'|trans , 'f.price') }}*/
/*                                         {% if padding.isSorted('f.price') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.quantity'|trans , 'f.quantity') }}*/
/*                                         {% if padding.isSorted('f.quantity') %}*/
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
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.unit'|trans , 'u.designation') }}*/
/*                                         {% if padding.isSorted('u.designation') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.family'|trans , 'fa.designation') }}*/
/*                                         {% if padding.isSorted('fa.designation') %}*/
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
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.subFamily'|trans , 'sf.designation') }}*/
/*                                         {% if padding.isSorted('sf.designation') %}*/
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
/*                                     */
/*                                     */
/*                                 */
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                              {% if padding|length == 0 %} */
/*                                 <td  class="text text-capitalize text-danger text-center animated fadeInUp" colspan="7">*/
/*                                     <i class="fa fa-exclamation-triangle"></i>*/
/*                                     {{ 'supportingdocument.list.noResultFound'|trans }}*/
/*                                     </p>*/
/*                                  </td>*/
/*                                   */
/*                                 {% else %}*/
/*                                 {% for supportingDocument in padding %}*/
/*                                     <tr>*/
/*                                         <td>{{ supportingDocument.inventoryNumber }}</td>*/
/*                                         <td>{{ supportingDocument.article.designation }}</td>*/
/*                                         <td>{{ supportingDocument.price }}</td>*/
/*                                         <td>{{ supportingDocument.quantity }}</td>*/
/*                                         <td>{{ supportingDocument.article.unit.designation }}</td>*/
/*                                         <td>{{ supportingDocument.article.subFamily.designation }}</td>*/
/*                                         <td>{{ supportingDocument.article.subFamily.family.designation }}</td>*/
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
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/dateRange.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
