<?php

/* ISETSOMagazineBundle:discharge_article_local:index.html.twig */
class __TwigTemplate_7cb72e00c80f028d3974f34d8f4a3334be7f99ded6b7e0fa04712d1deee9ed8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:discharge_article_local:index.html.twig", 1);
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
        $__internal_f68ae4c5a8e14be2aa2f6e2e1ed576a6115ea44da7ee46c705ea4b6e919b302f = $this->env->getExtension("native_profiler");
        $__internal_f68ae4c5a8e14be2aa2f6e2e1ed576a6115ea44da7ee46c705ea4b6e919b302f->enter($__internal_f68ae4c5a8e14be2aa2f6e2e1ed576a6115ea44da7ee46c705ea4b6e919b302f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:discharge_article_local:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f68ae4c5a8e14be2aa2f6e2e1ed576a6115ea44da7ee46c705ea4b6e919b302f->leave($__internal_f68ae4c5a8e14be2aa2f6e2e1ed576a6115ea44da7ee46c705ea4b6e919b302f_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_f8ea9e313d0a813f8e865bd061a1d6221a44a438f44c516e061898bf875889a7 = $this->env->getExtension("native_profiler");
        $__internal_f8ea9e313d0a813f8e865bd061a1d6221a44a438f44c516e061898bf875889a7->enter($__internal_f8ea9e313d0a813f8e865bd061a1d6221a44a438f44c516e061898bf875889a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.edit.name"), "html", null, true);
        
        $__internal_f8ea9e313d0a813f8e865bd061a1d6221a44a438f44c516e061898bf875889a7->leave($__internal_f8ea9e313d0a813f8e865bd061a1d6221a44a438f44c516e061898bf875889a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f86f67fb903faef0677affc910f8282ab1db0d5e84fbe90594ed97a79ade496b = $this->env->getExtension("native_profiler");
        $__internal_f86f67fb903faef0677affc910f8282ab1db0d5e84fbe90594ed97a79ade496b->enter($__internal_f86f67fb903faef0677affc910f8282ab1db0d5e84fbe90594ed97a79ade496b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-md-12\">
    <div class=\"pull-right\">
         <a class=\"btn btn-success\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("discharge_article_to_local_new");
        echo "\">
                <i class=\"fa fa-plus\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.new.submit"), "html", null, true);
        echo "
            </a>    </div>
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
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.list.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\">
                        <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                            <div class=\"btn-group\">
                                <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        echo "\" class=\"btn btn-warning-alt\">
                                    <i class=\"ti ti-reload\" aria-hidden=\"true\"></i>
                                </a>
                            
                                <a name=\"print\" href=\"";
        // line 83
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
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "getTotalItemCount", array()), "html", null, true);
        echo "
                               ";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.list.resultFound"), "html", null, true);
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
        // line 102
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.id"), "f.id");
        echo "
                                        ";
        // line 103
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 104
            echo "                                            
                                            ";
            // line 105
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 106
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 108
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 110
            echo "                                        ";
        } else {
            // line 111
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 113
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 115
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.observation"), "f.observation");
        echo "
                                        ";
        // line 116
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.observation"), "method")) {
            // line 117
            echo "                                            
                                            ";
            // line 118
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 119
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 121
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 123
            echo "                                        ";
        } else {
            // line 124
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 126
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 128
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.date"), "f.date");
        echo "
                                        ";
        // line 129
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.date"), "method")) {
            // line 130
            echo "                                            
                                            ";
            // line 131
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 132
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 134
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 136
            echo "                                        ";
        } else {
            // line 137
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 139
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 141
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.etat"), "f.etat");
        echo "
                                        ";
        // line 142
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 143
            echo "                                            
                                            ";
            // line 144
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 145
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 147
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 149
            echo "                                        ";
        } else {
            // line 150
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 152
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 154
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.local"), "m.designation");
        echo "
                                        ";
        // line 155
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 156
            echo "                                            
                                            ";
            // line 157
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 158
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 160
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 162
            echo "                                        ";
        } else {
            // line 163
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 165
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 167
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                                        ";
        // line 168
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "u.username"), "method")) {
            // line 169
            echo "                                            
                                            ";
            // line 170
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 171
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 173
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 175
            echo "                                        ";
        } else {
            // line 176
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 178
        echo "                                    </th> 
                                <th class=\"text text-capitalize text-primary\"> ";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 183
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                    <td  class=\"text text-capitalize text-danger text-center\" colspan=\"7\">
                                        <p  style=\"margin-top: 1%;\">
                                            <i class=\"fa fa-exclamation-triangle\"></i> <b>";
            // line 186
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.list.noResultFound"), "html", null, true);
            echo "</b>
                                        </p>
                                     </td>
                                    
                                ";
        } else {
            // line 191
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["dischargeArticle"]) {
                // line 192
                echo "                                    <tr>
                                        <td>";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute($context["dischargeArticle"], "id", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 194
                echo twig_escape_filter($this->env, $this->getAttribute($context["dischargeArticle"], "observation", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 195
                if ($this->getAttribute($context["dischargeArticle"], "date", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dischargeArticle"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>   
                                        <td>";
                // line 196
                if ($this->getAttribute($context["dischargeArticle"], "etat", array())) {
                    // line 197
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["dischargeArticle"], "etat", array())), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 199
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etat"), "html", null, true);
                    echo "
                                            ";
                }
                // line 201
                echo "                                        </td>    
                                        <td>";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dischargeArticle"], "toLocal", array()), "designation", array()), "html", null, true);
                echo "</td>                                  
                                        <td>";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dischargeArticle"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 207
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("discharge_article_to_local_edit", array("id" => $this->getAttribute($context["dischargeArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a ";
                // line 208
                echo (($this->getAttribute($context["dischargeArticle"], "etat", array())) ? ("disabled=\"\"") : (""));
                echo " href=\"#\" data-box=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dischargeArticle"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                                <a href=\"";
                // line 209
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("discharge_article_to_local_show", array("id" => $this->getAttribute($context["dischargeArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success-alt\"><i class=\"ti ti-info\"></i></a>
                                                <a href=\"";
                // line 210
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("discharge_article_to_local_check", array("id" => $this->getAttribute($context["dischargeArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-orange-alt\"><i class=\"ti ti-check\"></i></a>
                                            </div>
                                        </td>                                    <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($context["dischargeArticle"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 216
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 218
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 223
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("discharge_article_to_local_delete", array("id" => $this->getAttribute($context["dischargeArticle"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 225
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["dischargeArticle"], "id", array()), array(), "array"), 'widget');
                echo " 
                                                                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                        <i class=\"icon-trash\"></i>
                                                                         ";
                // line 228
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                    </button>
                                                                </form>
                                                                <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                    ";
                // line 232
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dischargeArticle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "                            ";
        }
        // line 242
        echo "                         </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 246
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_f86f67fb903faef0677affc910f8282ab1db0d5e84fbe90594ed97a79ade496b->leave($__internal_f86f67fb903faef0677affc910f8282ab1db0d5e84fbe90594ed97a79ade496b_prof);

    }

    // line 253
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2b3ad0bbf46f5989bab4eb430333181996311c9f56eb3b621dc3d22e957853b = $this->env->getExtension("native_profiler");
        $__internal_a2b3ad0bbf46f5989bab4eb430333181996311c9f56eb3b621dc3d22e957853b->enter($__internal_a2b3ad0bbf46f5989bab4eb430333181996311c9f56eb3b621dc3d22e957853b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 254
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 255
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2956017_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2956017_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2956017_moment.min_1.js");
            // line 260
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
        
        $__internal_a2b3ad0bbf46f5989bab4eb430333181996311c9f56eb3b621dc3d22e957853b->leave($__internal_a2b3ad0bbf46f5989bab4eb430333181996311c9f56eb3b621dc3d22e957853b_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:discharge_article_local:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 260,  536 => 255,  531 => 254,  525 => 253,  511 => 246,  505 => 242,  502 => 241,  487 => 232,  480 => 228,  474 => 225,  469 => 223,  461 => 218,  456 => 216,  450 => 213,  444 => 210,  440 => 209,  434 => 208,  430 => 207,  423 => 203,  419 => 202,  416 => 201,  410 => 199,  404 => 197,  402 => 196,  396 => 195,  392 => 194,  388 => 193,  385 => 192,  380 => 191,  372 => 186,  366 => 183,  359 => 179,  356 => 178,  352 => 176,  349 => 175,  345 => 173,  341 => 171,  339 => 170,  336 => 169,  334 => 168,  330 => 167,  326 => 165,  322 => 163,  319 => 162,  315 => 160,  311 => 158,  309 => 157,  306 => 156,  304 => 155,  300 => 154,  296 => 152,  292 => 150,  289 => 149,  285 => 147,  281 => 145,  279 => 144,  276 => 143,  274 => 142,  270 => 141,  266 => 139,  262 => 137,  259 => 136,  255 => 134,  251 => 132,  249 => 131,  246 => 130,  244 => 129,  240 => 128,  236 => 126,  232 => 124,  229 => 123,  225 => 121,  221 => 119,  219 => 118,  216 => 117,  214 => 116,  210 => 115,  206 => 113,  202 => 111,  199 => 110,  195 => 108,  191 => 106,  189 => 105,  186 => 104,  184 => 103,  180 => 102,  167 => 92,  163 => 91,  150 => 83,  143 => 79,  136 => 75,  125 => 67,  109 => 53,  107 => 48,  101 => 44,  99 => 39,  92 => 34,  90 => 28,  85 => 25,  83 => 22,  74 => 16,  62 => 7,  58 => 6,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*  {% block breadcrumbActive %}{{ 'dischargearticle.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12">*/
/*     <div class="pull-right">*/
/*          <a class="btn btn-success" href="{{ path('discharge_article_to_local_new') }}">*/
/*                 <i class="fa fa-plus"></i> {{ 'dischargearticle.new.submit'|trans }}*/
/*             </a>    </div>*/
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
/*             */
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'dischargearticle.list.name'|trans }}</h2>*/
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
/*                                {{ 'dischargearticle.list.resultFound'|trans }}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.local'|trans , 'm.designation') }}*/
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
/*                                     <td  class="text text-capitalize text-danger text-center" colspan="7">*/
/*                                         <p  style="margin-top: 1%;">*/
/*                                             <i class="fa fa-exclamation-triangle"></i> <b>{{ 'dischargearticle.list.noResultFound'|trans }}</b>*/
/*                                         </p>*/
/*                                      </td>*/
/*                                     */
/*                                 {% else %}*/
/*                                 {% for dischargeArticle in padding %}*/
/*                                     <tr>*/
/*                                         <td>{{ dischargeArticle.id }}</td>*/
/*                                         <td>{{ dischargeArticle.observation }}</td>*/
/*                                         <td>{% if dischargeArticle.date %}{{ dischargeArticle.date|date('Y-m-d H:i:s') }}{% endif %}</td>   */
/*                                         <td>{% if dischargeArticle.etat %}*/
/*                                                 {{ dischargeArticle.etat|trans }}*/
/*                                             {% else %}*/
/*                                                 {{ 'magazine.etat'|trans }}*/
/*                                             {% endif %}*/
/*                                         </td>    */
/*                                         <td>{{ dischargeArticle.toLocal.designation }}</td>                                  */
/*                                         <td>{{ dischargeArticle.user.username }}</td>*/
/*                                         <td>*/
/*                                             */
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('discharge_article_to_local_edit', { 'id': dischargeArticle.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                 <a {{ dischargeArticle.etat ? 'disabled=""' : "" }} href="#" data-box="#{{ dischargeArticle.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                                 <a href="{{ path('discharge_article_to_local_show', { 'id': dischargeArticle.id }) }}" class="btn btn-success-alt"><i class="ti ti-info"></i></a>*/
/*                                                 <a href="{{ path('discharge_article_to_local_check', { 'id': dischargeArticle.id }) }}" class="btn btn-orange-alt"><i class="ti ti-check"></i></a>*/
/*                                             </div>*/
/*                                         </td>                                    <!-- MESSAGE BOX-->*/
/*                                             <div class="message-box animated fadeIn" data-sound="alert" id="{{ dischargeArticle.id }}">*/
/*                                                 <div class="mb-container">*/
/*                                                     <div class="mb-middle">*/
/*                                                         <div class="mb-title"><span class="ti ti-trash"></span> {{ 'dischargearticle.delete.name'|trans }} ?</div>*/
/*                                                         <div class="mb-content">*/
/*                                                             <p>{{ 'dischargearticle.delete.message'|trans }}</p>                    */
/*                                                             */
/*                                                         </div>*/
/*                                                         <div class="mb-footer">*/
/*                                                             <div class="pull-right">*/
/*                                                                 <form action="{{ path('discharge_article_to_local_delete', { 'id': dischargeArticle.id }) }}" method="post">*/
/*                                                                     <input type="hidden" name="_method" value="DELETE" />*/
/*                                                                     {{ form_widget(deleteForms[ dischargeArticle.id ]) }} */
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
