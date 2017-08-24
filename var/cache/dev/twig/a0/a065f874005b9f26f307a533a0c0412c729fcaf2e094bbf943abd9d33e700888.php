<?php

/* ISETSOMagazineBundle:returnarticle_centralStore:index.html.twig */
class __TwigTemplate_101fe7da80c45924d404e1c3dd55657302dfea6f961ff4dc9e61597ad9daa811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:returnarticle_centralStore:index.html.twig", 1);
        $this->blocks = array(
            'breadcrumbActive' => array($this, 'block_breadcrumbActive'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_455f7f7e739b37b0afb1ae88d9ce0279924d5c04e645e057da9cf31872396349 = $this->env->getExtension("native_profiler");
        $__internal_455f7f7e739b37b0afb1ae88d9ce0279924d5c04e645e057da9cf31872396349->enter($__internal_455f7f7e739b37b0afb1ae88d9ce0279924d5c04e645e057da9cf31872396349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:returnarticle_centralStore:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_455f7f7e739b37b0afb1ae88d9ce0279924d5c04e645e057da9cf31872396349->leave($__internal_455f7f7e739b37b0afb1ae88d9ce0279924d5c04e645e057da9cf31872396349_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_21d216d01ad2737699fcdf8c083387050cae941452e48716a49d989eab9044a3 = $this->env->getExtension("native_profiler");
        $__internal_21d216d01ad2737699fcdf8c083387050cae941452e48716a49d989eab9044a3->enter($__internal_21d216d01ad2737699fcdf8c083387050cae941452e48716a49d989eab9044a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.edit.name"), "html", null, true);
        
        $__internal_21d216d01ad2737699fcdf8c083387050cae941452e48716a49d989eab9044a3->leave($__internal_21d216d01ad2737699fcdf8c083387050cae941452e48716a49d989eab9044a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_676ed053d378d03180be63b93a011cad42bacf909ef43bd9ced431b06c3317fa = $this->env->getExtension("native_profiler");
        $__internal_676ed053d378d03180be63b93a011cad42bacf909ef43bd9ced431b06c3317fa->enter($__internal_676ed053d378d03180be63b93a011cad42bacf909ef43bd9ced431b06c3317fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-md-12\">
    <div class=\"pull-right\">
        <a class=\"btn btn-success\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("returnArticle_centralStore_new");
        echo "\">
                <i class=\"fa fa-plus\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.new.submit"), "html", null, true);
        echo "
            </a>     </div>
    </br></br>
</div>
<div class=\"col-md-12\">
    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"panel panel-inverse panel-collapsed\" data-widget=\"{\"id\" : \"wiget1\"}\" data-widget='{\"draggable\": \"false\"}'>
                <div class=\"panel-heading\">
                    <h2><i class=\"ti ti-search\"></i> ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.list.search"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\" data-actions-container=\"\" data-action-collapse='{\"target\": \".panel-body\"}'></div>
                    <div class=\"panel-editbox\" data-widget-controls=\"\"></div>
                </div>
                <div class=\"panel-body\" style=\"display: none;\">
                    
                    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-row")));
        // line 25
        echo "

                        <div class=\"form-group\" >
                             ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => "family.list.search")));
        // line 34
        echo "
                        </div>

                        <div class=\"form-group\">
                            <div class=\"input-daterange input-group\" id=\"datepicker-range\">
                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateStart", array()), 'widget', array("attr" => array("class" => "form-control ")));
        // line 44
        echo "
                                <span class=\"input-group-addon text-capitalize\">
                                    <i class=\"fa fa-arrow-right\"></i>
                                </span>
                                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEnd", array()), 'widget', array("attr" => array("class" => "form-control ")));
        // line 53
        echo "
                            </div>
                        </div>

                        <div class=\"pull-right\">
                            <div class=\"btn-group\">
                                <button type=\"submit\" class=\"btn btn-warning-alt\">
                                    <i class=\"ti ti-search\"></i>
                                </button>
                                <a href=\"#\" class=\"btn btn-info-alt\">
                                    <i class=\"ti ti-printer\"></i>
                                </a>
                            </div>
                        </div>
                        ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div></div>
        <div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2><i class=\"fa fa-list\"></i> ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.list.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\">
                        <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                            <div class=\"btn-group\">
                                <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        echo "\" class=\"btn btn-warning-alt\">
                                    <i class=\"ti ti-reload\" aria-hidden=\"true\"></i>
                                </a>
                            
                                <a name=\"print\" href=\"";
        // line 82
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
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "getTotalItemCount", array()), "html", null, true);
        echo "
                               ";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.list.resultFound"), "html", null, true);
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
        // line 101
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.id"), "f.id");
        echo "
                                        ";
        // line 102
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 103
            echo "                                            
                                            ";
            // line 104
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 105
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 107
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 109
            echo "                                        ";
        } else {
            // line 110
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 112
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 114
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.observation"), "f.observation");
        echo "
                                        ";
        // line 115
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.observation"), "method")) {
            // line 116
            echo "                                            
                                            ";
            // line 117
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 118
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 120
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 122
            echo "                                        ";
        } else {
            // line 123
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 125
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 127
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.date"), "f.date");
        echo "
                                        ";
        // line 128
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.date"), "method")) {
            // line 129
            echo "                                            
                                            ";
            // line 130
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 131
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 133
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 135
            echo "                                        ";
        } else {
            // line 136
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 138
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 140
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.etat"), "f.etat");
        echo "
                                        ";
        // line 141
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 142
            echo "                                            
                                            ";
            // line 143
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 144
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 146
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 148
            echo "                                        ";
        } else {
            // line 149
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 151
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 153
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                                        ";
        // line 154
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "u.username"), "method")) {
            // line 155
            echo "                                            
                                            ";
            // line 156
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 157
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 159
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 161
            echo "                                        ";
        } else {
            // line 162
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 164
        echo "                                    </th> 
                                <th class=\"text text-capitalize text-primary\"> ";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 169
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                <td  class=\"text text-capitalize text-danger text-center\" colspan=\"6\">
                                    
                                    <p  style=\"margin-top: 1%;\">
                                        <i class=\"fa fa-exclamation-triangle\"></i> <b>";
            // line 173
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.list.noResultFound"), "html", null, true);
            echo "</b>
                                    </p>
                                 </td>
                                  
                                ";
        } else {
            // line 178
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["returnArticle"]) {
                // line 179
                echo "                                    <tr>
                                        <td>";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["returnArticle"], "id", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($context["returnArticle"], "observation", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 182
                if ($this->getAttribute($context["returnArticle"], "date", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["returnArticle"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>      
                                        <td>
                                            ";
                // line 184
                if ((null === $this->getAttribute($context["returnArticle"], "etat", array()))) {
                    // line 185
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etat"), "html", null, true);
                    echo "
                                            ";
                } elseif (($this->getAttribute(                // line 186
$context["returnArticle"], "etat", array()) == "a")) {
                    // line 187
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etatOption.accept"), "html", null, true);
                    echo "
                                            ";
                } elseif (($this->getAttribute(                // line 188
$context["returnArticle"], "etat", array()) == "r")) {
                    // line 189
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etatOption.refuse"), "html", null, true);
                    echo "                   
                                            ";
                } elseif (($this->getAttribute(                // line 190
$context["returnArticle"], "etat", array()) == "w")) {
                    // line 191
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etatOption.wait"), "html", null, true);
                    echo "
                                            ";
                }
                // line 192
                echo "     
                                        </td>                                  
                                        <td>";
                // line 194
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["returnArticle"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 198
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnArticle_centralStore_edit", array("id" => $this->getAttribute($context["returnArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a ";
                // line 199
                echo (($this->getAttribute($context["returnArticle"], "etat", array())) ? ("disabled=\"\"") : (""));
                echo " href=\"#\" data-box=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["returnArticle"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                                <a href=\"";
                // line 200
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnArticle_centralStore_show", array("id" => $this->getAttribute($context["returnArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success-alt\"><i class=\"ti ti-info\"></i></a>
                                                <a href=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnArticle_centralStore_check", array("id" => $this->getAttribute($context["returnArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-orange-alt\"><i class=\"ti ti-check\"></i></a>
                                            </div>
                                        </td>                                    <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($context["returnArticle"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 207
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 209
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 214
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnArticle_centralStore_delete", array("id" => $this->getAttribute($context["returnArticle"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 216
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["returnArticle"], "id", array()), array(), "array"), 'widget');
                echo " 
                                                                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                        <i class=\"icon-trash\"></i>
                                                                         ";
                // line 219
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                    </button>
                                                                </form>
                                                                <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                    ";
                // line 223
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['returnArticle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "                            ";
        }
        // line 233
        echo "                         </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 237
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_676ed053d378d03180be63b93a011cad42bacf909ef43bd9ced431b06c3317fa->leave($__internal_676ed053d378d03180be63b93a011cad42bacf909ef43bd9ced431b06c3317fa_prof);

    }

    // line 244
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_765e4dcb887dcf1bf425a906b350a4c2a0e5026c8c56e78e254a02b191b6a30b = $this->env->getExtension("native_profiler");
        $__internal_765e4dcb887dcf1bf425a906b350a4c2a0e5026c8c56e78e254a02b191b6a30b->enter($__internal_765e4dcb887dcf1bf425a906b350a4c2a0e5026c8c56e78e254a02b191b6a30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 245
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 246
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2956017_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2956017_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2956017_moment.min_1.js");
            // line 251
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
        
        $__internal_765e4dcb887dcf1bf425a906b350a4c2a0e5026c8c56e78e254a02b191b6a30b->leave($__internal_765e4dcb887dcf1bf425a906b350a4c2a0e5026c8c56e78e254a02b191b6a30b_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:returnarticle_centralStore:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  523 => 251,  519 => 246,  514 => 245,  508 => 244,  494 => 237,  488 => 233,  485 => 232,  470 => 223,  463 => 219,  457 => 216,  452 => 214,  444 => 209,  439 => 207,  433 => 204,  427 => 201,  423 => 200,  417 => 199,  413 => 198,  406 => 194,  402 => 192,  396 => 191,  394 => 190,  389 => 189,  387 => 188,  382 => 187,  380 => 186,  375 => 185,  373 => 184,  366 => 182,  362 => 181,  358 => 180,  355 => 179,  350 => 178,  342 => 173,  335 => 169,  328 => 165,  325 => 164,  321 => 162,  318 => 161,  314 => 159,  310 => 157,  308 => 156,  305 => 155,  303 => 154,  299 => 153,  295 => 151,  291 => 149,  288 => 148,  284 => 146,  280 => 144,  278 => 143,  275 => 142,  273 => 141,  269 => 140,  265 => 138,  261 => 136,  258 => 135,  254 => 133,  250 => 131,  248 => 130,  245 => 129,  243 => 128,  239 => 127,  235 => 125,  231 => 123,  228 => 122,  224 => 120,  220 => 118,  218 => 117,  215 => 116,  213 => 115,  209 => 114,  205 => 112,  201 => 110,  198 => 109,  194 => 107,  190 => 105,  188 => 104,  185 => 103,  183 => 102,  179 => 101,  166 => 91,  162 => 90,  149 => 82,  142 => 78,  135 => 74,  125 => 67,  109 => 53,  107 => 48,  101 => 44,  99 => 39,  92 => 34,  90 => 28,  85 => 25,  83 => 22,  74 => 16,  62 => 7,  58 => 6,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*  {% block breadcrumbActive %}{{ 'returnarticle.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12">*/
/*     <div class="pull-right">*/
/*         <a class="btn btn-success" href="{{ path('returnArticle_centralStore_new') }}">*/
/*                 <i class="fa fa-plus"></i> {{ 'returnarticle.new.submit'|trans }}*/
/*             </a>     </div>*/
/*     </br></br>*/
/* </div>*/
/* <div class="col-md-12">*/
/*     <div class="row">*/
/*         <div class="col-md-5">*/
/*             <div class="panel panel-inverse panel-collapsed" data-widget="{"id" : "wiget1"}" data-widget='{"draggable": "false"}'>*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="ti ti-search"></i> {{ 'journalconsumable.list.search'|trans }}</h2>*/
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
/*                                 <a href="#" class="btn btn-info-alt">*/
/*                                     <i class="ti ti-printer"></i>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div></div>*/
/*         <div>*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'returnarticle.list.name'|trans }}</h2>*/
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
/*                                {{ 'returnarticle.list.resultFound'|trans }}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.observation'|trans , 'f.observation') }}*/
/*                                         {% if padding.isSorted('f.observation') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.date'|trans , 'f.date') }}*/
/*                                         {% if padding.isSorted('f.date') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.etat'|trans , 'f.etat') }}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.userName'|trans , 'u.username') }}*/
/*                                         {% if padding.isSorted('u.username') %}*/
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
/*                                 <th class="text text-capitalize text-primary"> {{ 'magazine.action'|trans }} </th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                              {% if padding|length == 0 %} */
/*                                 <td  class="text text-capitalize text-danger text-center" colspan="6">*/
/*                                     */
/*                                     <p  style="margin-top: 1%;">*/
/*                                         <i class="fa fa-exclamation-triangle"></i> <b>{{ 'returnarticle.list.noResultFound'|trans }}</b>*/
/*                                     </p>*/
/*                                  </td>*/
/*                                   */
/*                                 {% else %}*/
/*                                 {% for returnArticle in padding %}*/
/*                                     <tr>*/
/*                                         <td>{{ returnArticle.id }}</td>*/
/*                                         <td>{{ returnArticle.observation }}</td>*/
/*                                         <td>{% if returnArticle.date %}{{ returnArticle.date|date('Y-m-d H:i:s') }}{% endif %}</td>      */
/*                                         <td>*/
/*                                             {% if returnArticle.etat is null %}*/
/*                                                 {{ 'magazine.etat'|trans }}*/
/*                                             {% elseif returnArticle.etat == "a" %}*/
/*                                                 {{ 'magazine.etatOption.accept'|trans }}*/
/*                                             {% elseif returnArticle.etat == "r" %}*/
/*                                                 {{ 'magazine.etatOption.refuse'|trans }}                   */
/*                                             {% elseif returnArticle.etat == "w" %}*/
/*                                                 {{ 'magazine.etatOption.wait'|trans }}*/
/*                                             {% endif %}     */
/*                                         </td>                                  */
/*                                         <td>{{ returnArticle.user.username }}</td>*/
/*                                         <td>*/
/*                                             */
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('returnArticle_centralStore_edit', { 'id': returnArticle.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                 <a {{ returnArticle.etat ? 'disabled=""' : "" }} href="#" data-box="#{{ returnArticle.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                                 <a href="{{ path('returnArticle_centralStore_show', { 'id': returnArticle.id }) }}" class="btn btn-success-alt"><i class="ti ti-info"></i></a>*/
/*                                                 <a href="{{ path('returnArticle_centralStore_check', { 'id': returnArticle.id }) }}" class="btn btn-orange-alt"><i class="ti ti-check"></i></a>*/
/*                                             </div>*/
/*                                         </td>                                    <!-- MESSAGE BOX-->*/
/*                                             <div class="message-box animated fadeIn" data-sound="alert" id="{{ returnArticle.id }}">*/
/*                                                 <div class="mb-container">*/
/*                                                     <div class="mb-middle">*/
/*                                                         <div class="mb-title"><span class="ti ti-trash"></span> {{ 'returnarticle.delete.name'|trans }} ?</div>*/
/*                                                         <div class="mb-content">*/
/*                                                             <p>{{ 'returnarticle.delete.message'|trans }}</p>                    */
/*                                                             */
/*                                                         </div>*/
/*                                                         <div class="mb-footer">*/
/*                                                             <div class="pull-right">*/
/*                                                                 <form action="{{ path('returnArticle_centralStore_delete', { 'id': returnArticle.id }) }}" method="post">*/
/*                                                                     <input type="hidden" name="_method" value="DELETE" />*/
/*                                                                     {{ form_widget(deleteForms[ returnArticle.id ]) }} */
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
