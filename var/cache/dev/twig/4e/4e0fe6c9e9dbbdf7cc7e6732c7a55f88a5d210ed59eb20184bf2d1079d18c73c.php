<?php

/* ISETSOMagazineBundle:magazine_discharge:index.html.twig */
class __TwigTemplate_daea8ba7392b021733b9697423b292548070737c47d26980befa8344429b9986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:magazine_discharge:index.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'breadcrumbActive' => array($this, 'block_breadcrumbActive'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_813aded4fb2bc947cad8b32e10c332484f0474f033fe725d2c45790423b120aa = $this->env->getExtension("native_profiler");
        $__internal_813aded4fb2bc947cad8b32e10c332484f0474f033fe725d2c45790423b120aa->enter($__internal_813aded4fb2bc947cad8b32e10c332484f0474f033fe725d2c45790423b120aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:magazine_discharge:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_813aded4fb2bc947cad8b32e10c332484f0474f033fe725d2c45790423b120aa->leave($__internal_813aded4fb2bc947cad8b32e10c332484f0474f033fe725d2c45790423b120aa_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_5bb82daf470291cae12facafe10ff5b3151a7f7164cff52412370f394c9f7d23 = $this->env->getExtension("native_profiler");
        $__internal_5bb82daf470291cae12facafe10ff5b3151a7f7164cff52412370f394c9f7d23->enter($__internal_5bb82daf470291cae12facafe10ff5b3151a7f7164cff52412370f394c9f7d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_show", array("id" => $this->getAttribute((isset($context["magazine_info"]) ? $context["magazine_info"] : $this->getContext($context, "magazine_info")), "id", array()))), "html", null, true);
        echo "\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazin.show.name"), "html", null, true);
        echo "
    </a> 
";
        
        $__internal_5bb82daf470291cae12facafe10ff5b3151a7f7164cff52412370f394c9f7d23->leave($__internal_5bb82daf470291cae12facafe10ff5b3151a7f7164cff52412370f394c9f7d23_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_8442d334ea6f7c6d6acb75525fdfcbb1ab31d826d88be1659c08216cabec1a93 = $this->env->getExtension("native_profiler");
        $__internal_8442d334ea6f7c6d6acb75525fdfcbb1ab31d826d88be1659c08216cabec1a93->enter($__internal_8442d334ea6f7c6d6acb75525fdfcbb1ab31d826d88be1659c08216cabec1a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazineDischarge.list.name"), "html", null, true);
        echo "
";
        
        $__internal_8442d334ea6f7c6d6acb75525fdfcbb1ab31d826d88be1659c08216cabec1a93->leave($__internal_8442d334ea6f7c6d6acb75525fdfcbb1ab31d826d88be1659c08216cabec1a93_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0efb216a30ee96f4129975834d138b6b421856c67acc9bd67478baf329698eaf = $this->env->getExtension("native_profiler");
        $__internal_0efb216a30ee96f4129975834d138b6b421856c67acc9bd67478baf329698eaf->enter($__internal_0efb216a30ee96f4129975834d138b6b421856c67acc9bd67478baf329698eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<div class=\"col-md-12\">
    <div class=\"pull-right\">
        <a class=\"btn btn-success\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_magazinedischarge_new", array("id" => $this->getAttribute((isset($context["magazine_info"]) ? $context["magazine_info"] : $this->getContext($context, "magazine_info")), "id", array()))), "html", null, true);
        echo "\">
                <i class=\"fa fa-plus\"></i> ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazineDischarge.new.submit"), "html", null, true);
        echo "
            </a> 
        <br>
        <br>
    </div>
</div>

<div class=\"col-md-12\">
    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"panel panel-inverse panel-collapsed\" data-widget=\"{\"id\" : \"wiget1\"}\" data-widget='{\"draggable\": \"false\"}'>
                <div class=\"panel-heading\">
                    <h2><i class=\"ti ti-search\"></i> ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.list.search"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\" data-actions-container=\"\" data-action-collapse='{\"target\": \".panel-body\"}'></div>
                    <div class=\"panel-editbox\" data-widget-controls=\"\"></div>
                </div>
                <div class=\"panel-body\" style=\"display: none;\">
                    
                    ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-row")));
        // line 36
        echo "

                        <div class=\"form-group\" >
                             ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => "family.list.search")));
        // line 45
        echo "
                        </div>

                        <div class=\"form-group\">
                            <div class=\"input-daterange input-group\" id=\"datepicker-range\">
                                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateStart", array()), 'widget', array("attr" => array("class" => "form-control ")));
        // line 55
        echo "
                                <span class=\"input-group-addon text-capitalize\">
                                    <i class=\"fa fa-arrow-right\"></i>
                                </span>
                                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEnd", array()), 'widget', array("attr" => array("class" => "form-control ")));
        // line 64
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
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div></div>
        <div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2><i class=\"fa fa-list\"></i> ";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazineDischarge.list.name"), "html", null, true);
        echo "</h2>
                    
                </div>
                <div class=\"panel-body no-padding\">
                    <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                            <tr>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 95
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.id"), "f.id");
        echo "
                                        ";
        // line 96
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 97
            echo "                                            
                                            ";
            // line 98
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 99
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 101
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 103
            echo "                                        ";
        } else {
            // line 104
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 106
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 108
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.observation"), "f.observation");
        echo "
                                        ";
        // line 109
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.observation"), "method")) {
            // line 110
            echo "                                            
                                            ";
            // line 111
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 112
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 114
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 116
            echo "                                        ";
        } else {
            // line 117
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 119
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 121
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.date"), "f.date");
        echo "
                                        ";
        // line 122
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.date"), "method")) {
            // line 123
            echo "                                            
                                            ";
            // line 124
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 125
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 127
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 129
            echo "                                        ";
        } else {
            // line 130
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 132
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 134
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.etat"), "f.etat");
        echo "
                                        ";
        // line 135
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.etat"), "method")) {
            // line 136
            echo "                                            
                                            ";
            // line 137
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 138
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 140
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 142
            echo "                                        ";
        } else {
            // line 143
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 145
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 147
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.toUser"), "fu.username");
        echo "
                                        ";
        // line 148
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "fu.username"), "method")) {
            // line 149
            echo "                                            
                                            ";
            // line 150
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 151
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 153
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 155
            echo "                                        ";
        } else {
            // line 156
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 158
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 160
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                                        ";
        // line 161
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "u.username"), "method")) {
            // line 162
            echo "                                            
                                            ";
            // line 163
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 164
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 166
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 168
            echo "                                        ";
        } else {
            // line 169
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 171
        echo "                                    </th> 
                                <th class=\"text text-capitalize text-primary\"> ";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 176
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                    <td  class=\"text text-capitalize text-danger text-center\" colspan=\"7\">
                                        <p  style=\"margin-top: 1%;\">
                                            <i class=\"fa fa-exclamation-triangle\"></i> <b>";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazineDischarge.list.noResultFound"), "html", null, true);
            echo "</b>
                                        </p>
                                     </td>
                                    
                                ";
        } else {
            // line 184
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["dischargeArticle"]) {
                // line 185
                echo "                                    <tr>
                                        <td>";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute($context["dischargeArticle"], "id", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute($context["dischargeArticle"], "observation", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 188
                if ($this->getAttribute($context["dischargeArticle"], "date", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dischargeArticle"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>   
                                        <td>";
                // line 189
                if ($this->getAttribute($context["dischargeArticle"], "etat", array())) {
                    // line 190
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["dischargeArticle"], "etat", array())), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 192
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etat"), "html", null, true);
                    echo "
                                            ";
                }
                // line 194
                echo "                                        </td>    
                                        <td>";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dischargeArticle"], "toUser", array()), "username", array()), "html", null, true);
                echo "</td>                                  
                                        <td>";
                // line 196
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dischargeArticle"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 200
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_magazinedischarge_edit", array("id" => $this->getAttribute($context["dischargeArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a ";
                // line 201
                echo (($this->getAttribute($context["dischargeArticle"], "etat", array())) ? ("disabled=\"\"") : (""));
                echo " href=\"#\" data-box=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dischargeArticle"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                                <a href=\"";
                // line 202
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_magazinedischarge_show", array("id" => $this->getAttribute($context["dischargeArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success-alt\"><i class=\"ti ti-info\"></i></a>
                                                <a href=\"";
                // line 203
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_magazinedischarge_check", array("id" => $this->getAttribute($context["dischargeArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-orange-alt\"><i class=\"ti ti-check\"></i></a>
                                            </div>
                                        </td>                                    <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["dischargeArticle"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 209
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazineDischarge.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 211
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazineDischarge.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 216
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_magazinedischarge_delete", array("id" => $this->getAttribute($context["dischargeArticle"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 218
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["dischargeArticle"], "id", array()), array(), "array"), 'widget');
                echo " 
                                                                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                        <i class=\"icon-trash\"></i>
                                                                         ";
                // line 221
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                    </button>
                                                                </form>
                                                                <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                    ";
                // line 225
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
            // line 234
            echo "                            ";
        }
        // line 235
        echo "                         </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 239
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_0efb216a30ee96f4129975834d138b6b421856c67acc9bd67478baf329698eaf->leave($__internal_0efb216a30ee96f4129975834d138b6b421856c67acc9bd67478baf329698eaf_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:magazine_discharge:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 239,  501 => 235,  498 => 234,  483 => 225,  476 => 221,  470 => 218,  465 => 216,  457 => 211,  452 => 209,  446 => 206,  440 => 203,  436 => 202,  430 => 201,  426 => 200,  419 => 196,  415 => 195,  412 => 194,  406 => 192,  400 => 190,  398 => 189,  392 => 188,  388 => 187,  384 => 186,  381 => 185,  376 => 184,  368 => 179,  362 => 176,  355 => 172,  352 => 171,  348 => 169,  345 => 168,  341 => 166,  337 => 164,  335 => 163,  332 => 162,  330 => 161,  326 => 160,  322 => 158,  318 => 156,  315 => 155,  311 => 153,  307 => 151,  305 => 150,  302 => 149,  300 => 148,  296 => 147,  292 => 145,  288 => 143,  285 => 142,  281 => 140,  277 => 138,  275 => 137,  272 => 136,  270 => 135,  266 => 134,  262 => 132,  258 => 130,  255 => 129,  251 => 127,  247 => 125,  245 => 124,  242 => 123,  240 => 122,  236 => 121,  232 => 119,  228 => 117,  225 => 116,  221 => 114,  217 => 112,  215 => 111,  212 => 110,  210 => 109,  206 => 108,  202 => 106,  198 => 104,  195 => 103,  191 => 101,  187 => 99,  185 => 98,  182 => 97,  180 => 96,  176 => 95,  165 => 87,  154 => 79,  137 => 64,  135 => 59,  129 => 55,  127 => 50,  120 => 45,  118 => 39,  113 => 36,  111 => 33,  102 => 27,  87 => 15,  83 => 14,  79 => 12,  73 => 11,  63 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('magazine_show',{ 'id' : magazine_info.id}) }}">*/
/*         {{ 'magazin.show.name'|trans }}*/
/*     </a> */
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'magazineDischarge.list.name'|trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="col-md-12">*/
/*     <div class="pull-right">*/
/*         <a class="btn btn-success" href="{{ path('magazine_magazinedischarge_new',{ 'id' : magazine_info.id}) }}">*/
/*                 <i class="fa fa-plus"></i> {{ 'magazineDischarge.new.submit'|trans }}*/
/*             </a> */
/*         <br>*/
/*         <br>*/
/*     </div>*/
/* </div>*/
/* */
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
/*                                 */
/*                             </div>*/
/*                         </div>*/
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div></div>*/
/*         <div>*/
/* */
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'magazineDischarge.list.name'|trans }}</h2>*/
/*                     */
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
/*                                         {% if padding.isSorted('f.etat') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.toUser'|trans , 'fu.username') }}*/
/*                                         {% if padding.isSorted('fu.username') %}*/
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
/*                                             <i class="fa fa-exclamation-triangle"></i> <b>{{ 'magazineDischarge.list.noResultFound'|trans }}</b>*/
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
/*                                         <td>{{ dischargeArticle.toUser.username }}</td>                                  */
/*                                         <td>{{ dischargeArticle.user.username }}</td>*/
/*                                         <td>*/
/*                                             */
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('magazine_magazinedischarge_edit', { 'id': dischargeArticle.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                 <a {{ dischargeArticle.etat ? 'disabled=""' : "" }} href="#" data-box="#{{ dischargeArticle.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                                 <a href="{{ path('magazine_magazinedischarge_show', { 'id': dischargeArticle.id }) }}" class="btn btn-success-alt"><i class="ti ti-info"></i></a>*/
/*                                                 <a href="{{ path('magazine_magazinedischarge_check', { 'id': dischargeArticle.id }) }}" class="btn btn-orange-alt"><i class="ti ti-check"></i></a>*/
/*                                             </div>*/
/*                                         </td>                                    <!-- MESSAGE BOX-->*/
/*                                             <div class="message-box animated fadeIn" data-sound="alert" id="{{ dischargeArticle.id }}">*/
/*                                                 <div class="mb-container">*/
/*                                                     <div class="mb-middle">*/
/*                                                         <div class="mb-title"><span class="ti ti-trash"></span> {{ 'magazineDischarge.delete.name'|trans }} ?</div>*/
/*                                                         <div class="mb-content">*/
/*                                                             <p>{{ 'magazineDischarge.delete.message'|trans }}</p>                    */
/*                                                             */
/*                                                         </div>*/
/*                                                         <div class="mb-footer">*/
/*                                                             <div class="pull-right">*/
/*                                                                 <form action="{{ path('magazine_magazinedischarge_delete', { 'id': dischargeArticle.id }) }}" method="post">*/
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
/* */
