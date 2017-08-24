<?php

/* ISETSOMagazineBundle:discharge_article_user:index.html.twig */
class __TwigTemplate_6eeaaef906070d073f6d2d7adcf7fe912406013cce0abad9f61c8d83bb1c6d5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:discharge_article_user:index.html.twig", 1);
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
        $__internal_84de0b34ead1dada9497c0c616bbf2535e705300b79f3c2de3eecc89fe6f2914 = $this->env->getExtension("native_profiler");
        $__internal_84de0b34ead1dada9497c0c616bbf2535e705300b79f3c2de3eecc89fe6f2914->enter($__internal_84de0b34ead1dada9497c0c616bbf2535e705300b79f3c2de3eecc89fe6f2914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:discharge_article_user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84de0b34ead1dada9497c0c616bbf2535e705300b79f3c2de3eecc89fe6f2914->leave($__internal_84de0b34ead1dada9497c0c616bbf2535e705300b79f3c2de3eecc89fe6f2914_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_604aac8774b4d54b035c34ede7d5827e20f4107dbcbbd8220ff722a41f76e6b3 = $this->env->getExtension("native_profiler");
        $__internal_604aac8774b4d54b035c34ede7d5827e20f4107dbcbbd8220ff722a41f76e6b3->enter($__internal_604aac8774b4d54b035c34ede7d5827e20f4107dbcbbd8220ff722a41f76e6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.edit.name"), "html", null, true);
        
        $__internal_604aac8774b4d54b035c34ede7d5827e20f4107dbcbbd8220ff722a41f76e6b3->leave($__internal_604aac8774b4d54b035c34ede7d5827e20f4107dbcbbd8220ff722a41f76e6b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a4c35de3141dfae291a9951e64de9f103eafa3f30de132d9f6b8099a70aa55e = $this->env->getExtension("native_profiler");
        $__internal_0a4c35de3141dfae291a9951e64de9f103eafa3f30de132d9f6b8099a70aa55e->enter($__internal_0a4c35de3141dfae291a9951e64de9f103eafa3f30de132d9f6b8099a70aa55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-md-12\">
    <div class=\"pull-right\">
        <a class=\"btn btn-success\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("discharge_article_to_user_new");
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
        // line 129
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.date"), "f.date");
        echo "
                                        ";
        // line 130
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.date"), "method")) {
            // line 131
            echo "                                            
                                            ";
            // line 132
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 133
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 135
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 137
            echo "                                        ";
        } else {
            // line 138
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 140
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 142
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.etat"), "f.etat");
        echo "
                                        ";
        // line 143
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 144
            echo "                                            
                                            ";
            // line 145
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 146
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 148
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 150
            echo "                                        ";
        } else {
            // line 151
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 153
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 155
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.toUser"), "r.username");
        echo "
                                        ";
        // line 156
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "u.username"), "method")) {
            // line 157
            echo "                                            
                                            ";
            // line 158
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 159
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 161
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 163
            echo "                                        ";
        } else {
            // line 164
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 166
        echo "                                    </th> 
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 168
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                                        ";
        // line 169
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "u.username"), "method")) {
            // line 170
            echo "                                            
                                            ";
            // line 171
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 172
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 174
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 176
            echo "                                        ";
        } else {
            // line 177
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 179
        echo "                                    </th> 
                                <th class=\"text text-capitalize text-primary\"> ";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 184
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                    <td  class=\"text text-capitalize text-danger text-center\" colspan=\"7\">
                                        
                                        <p  style=\"margin-top: 1%;\">
                                            <i class=\"fa fa-exclamation-triangle\"></i> <b>";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.list.noResultFound"), "html", null, true);
            echo "</b>
                                        </p>
                                     </td>
                                        
                                ";
        } else {
            // line 193
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["dischargeArticle"]) {
                // line 194
                echo "                                    <tr>
                                        <td>";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute($context["dischargeArticle"], "id", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 196
                echo twig_escape_filter($this->env, $this->getAttribute($context["dischargeArticle"], "observation", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 197
                if ($this->getAttribute($context["dischargeArticle"], "date", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dischargeArticle"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td> 
                                        <td>";
                // line 198
                if ($this->getAttribute($context["dischargeArticle"], "etat", array())) {
                    // line 199
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["dischargeArticle"], "etat", array())), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 201
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etat"), "html", null, true);
                    echo "
                                            ";
                }
                // line 203
                echo "                                        </td> 
                                        <td>";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dischargeArticle"], "toUser", array()), "username", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dischargeArticle"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 209
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("discharge_article_to_user_edit", array("id" => $this->getAttribute($context["dischargeArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a ";
                // line 210
                echo (($this->getAttribute($context["dischargeArticle"], "etat", array())) ? ("disabled=\"\"") : (""));
                echo " href=\"#\" data-box=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dischargeArticle"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                                <a href=\"";
                // line 211
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("discharge_article_to_user_show", array("id" => $this->getAttribute($context["dischargeArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success-alt\"><i class=\"ti ti-info\"></i></a>
                                                <a href=\"";
                // line 212
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("discharge_article_to_user_check", array("id" => $this->getAttribute($context["dischargeArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-orange-alt\"><i class=\"ti ti-check\"></i></a>
                                            </div>
                                        </td>                                    <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($context["dischargeArticle"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 218
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 220
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 225
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("discharge_article_to_user_delete", array("id" => $this->getAttribute($context["dischargeArticle"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 227
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["dischargeArticle"], "id", array()), array(), "array"), 'widget');
                echo " 
                                                                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                        <i class=\"icon-trash\"></i>
                                                                         ";
                // line 230
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                    </button>
                                                                </form>
                                                                <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                    ";
                // line 234
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
            // line 243
            echo "                            ";
        }
        // line 244
        echo "                         </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 248
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_0a4c35de3141dfae291a9951e64de9f103eafa3f30de132d9f6b8099a70aa55e->leave($__internal_0a4c35de3141dfae291a9951e64de9f103eafa3f30de132d9f6b8099a70aa55e_prof);

    }

    // line 255
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b802b061f0f803464505ccdf57cc21bc7a707bf72401a87f922d0ac99d2f8315 = $this->env->getExtension("native_profiler");
        $__internal_b802b061f0f803464505ccdf57cc21bc7a707bf72401a87f922d0ac99d2f8315->enter($__internal_b802b061f0f803464505ccdf57cc21bc7a707bf72401a87f922d0ac99d2f8315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 256
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 257
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2956017_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2956017_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2956017_moment.min_1.js");
            // line 262
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
        
        $__internal_b802b061f0f803464505ccdf57cc21bc7a707bf72401a87f922d0ac99d2f8315->leave($__internal_b802b061f0f803464505ccdf57cc21bc7a707bf72401a87f922d0ac99d2f8315_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:discharge_article_user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 262,  538 => 257,  533 => 256,  527 => 255,  513 => 248,  507 => 244,  504 => 243,  489 => 234,  482 => 230,  476 => 227,  471 => 225,  463 => 220,  458 => 218,  452 => 215,  446 => 212,  442 => 211,  436 => 210,  432 => 209,  425 => 205,  421 => 204,  418 => 203,  412 => 201,  406 => 199,  404 => 198,  398 => 197,  394 => 196,  390 => 195,  387 => 194,  382 => 193,  374 => 188,  367 => 184,  360 => 180,  357 => 179,  353 => 177,  350 => 176,  346 => 174,  342 => 172,  340 => 171,  337 => 170,  335 => 169,  331 => 168,  327 => 166,  323 => 164,  320 => 163,  316 => 161,  312 => 159,  310 => 158,  307 => 157,  305 => 156,  301 => 155,  297 => 153,  293 => 151,  290 => 150,  286 => 148,  282 => 146,  280 => 145,  277 => 144,  275 => 143,  271 => 142,  267 => 140,  263 => 138,  260 => 137,  256 => 135,  252 => 133,  250 => 132,  247 => 131,  245 => 130,  241 => 129,  236 => 126,  232 => 124,  229 => 123,  225 => 121,  221 => 119,  219 => 118,  216 => 117,  214 => 116,  210 => 115,  206 => 113,  202 => 111,  199 => 110,  195 => 108,  191 => 106,  189 => 105,  186 => 104,  184 => 103,  180 => 102,  167 => 92,  163 => 91,  150 => 83,  143 => 79,  136 => 75,  125 => 67,  109 => 53,  107 => 48,  101 => 44,  99 => 39,  92 => 34,  90 => 28,  85 => 25,  83 => 22,  74 => 16,  62 => 7,  58 => 6,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*  {% block breadcrumbActive %}{{ 'dischargearticle.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12">*/
/*     <div class="pull-right">*/
/*         <a class="btn btn-success" href="{{ path('discharge_article_to_user_new') }}">*/
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
/*                                     */
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.toUser'|trans , 'r.username') }}*/
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
/*                                         */
/*                                         <p  style="margin-top: 1%;">*/
/*                                             <i class="fa fa-exclamation-triangle"></i> <b>{{ 'dischargearticle.list.noResultFound'|trans }}</b>*/
/*                                         </p>*/
/*                                      </td>*/
/*                                         */
/*                                 {% else %}*/
/*                                 {% for dischargeArticle in padding %}*/
/*                                     <tr>*/
/*                                         <td>{{ dischargeArticle.id }}</td>*/
/*                                         <td>{{ dischargeArticle.observation }}</td>*/
/*                                         <td>{% if dischargeArticle.date %}{{ dischargeArticle.date|date('Y-m-d H:i:s') }}{% endif %}</td> */
/*                                         <td>{% if dischargeArticle.etat %}*/
/*                                                 {{ dischargeArticle.etat|trans }}*/
/*                                             {% else %}*/
/*                                                 {{ 'magazine.etat'|trans }}*/
/*                                             {% endif %}*/
/*                                         </td> */
/*                                         <td>{{ dischargeArticle.toUser.username }}</td>*/
/*                                         <td>{{ dischargeArticle.user.username }}</td>*/
/*                                         <td>*/
/*                                             */
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('discharge_article_to_user_edit', { 'id': dischargeArticle.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                 <a {{ dischargeArticle.etat ? 'disabled=""' : "" }} href="#" data-box="#{{ dischargeArticle.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                                 <a href="{{ path('discharge_article_to_user_show', { 'id': dischargeArticle.id }) }}" class="btn btn-success-alt"><i class="ti ti-info"></i></a>*/
/*                                                 <a href="{{ path('discharge_article_to_user_check', { 'id': dischargeArticle.id }) }}" class="btn btn-orange-alt"><i class="ti ti-check"></i></a>*/
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
/*                                                                 <form action="{{ path('discharge_article_to_user_delete', { 'id': dischargeArticle.id }) }}" method="post">*/
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
