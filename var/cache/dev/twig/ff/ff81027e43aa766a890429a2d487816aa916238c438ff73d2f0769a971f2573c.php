<?php

/* ISETSOMagazineBundle:journaldurable:index.html.twig */
class __TwigTemplate_414001c6089ff02625a63b8b477e87551a521daf04469b7f57daff074c0f10b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:journaldurable:index.html.twig", 1);
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
        $__internal_dbf43a742492b4a339986677322c1e180f36cd3751da82ff804f84c6cd877f7a = $this->env->getExtension("native_profiler");
        $__internal_dbf43a742492b4a339986677322c1e180f36cd3751da82ff804f84c6cd877f7a->enter($__internal_dbf43a742492b4a339986677322c1e180f36cd3751da82ff804f84c6cd877f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:journaldurable:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf43a742492b4a339986677322c1e180f36cd3751da82ff804f84c6cd877f7a->leave($__internal_dbf43a742492b4a339986677322c1e180f36cd3751da82ff804f84c6cd877f7a_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_9459b4088cc9a8831cfc88c3edc5cffdbb311e243b65383d7da9d9d7e5a51c9e = $this->env->getExtension("native_profiler");
        $__internal_9459b4088cc9a8831cfc88c3edc5cffdbb311e243b65383d7da9d9d7e5a51c9e->enter($__internal_9459b4088cc9a8831cfc88c3edc5cffdbb311e243b65383d7da9d9d7e5a51c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journaldurable.edit.name"), "html", null, true);
        
        $__internal_9459b4088cc9a8831cfc88c3edc5cffdbb311e243b65383d7da9d9d7e5a51c9e->leave($__internal_9459b4088cc9a8831cfc88c3edc5cffdbb311e243b65383d7da9d9d7e5a51c9e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c426f665de4c28392ff5fea4a0448b778e77fd4f9be32f44071b333fcdd96856 = $this->env->getExtension("native_profiler");
        $__internal_c426f665de4c28392ff5fea4a0448b778e77fd4f9be32f44071b333fcdd96856->enter($__internal_c426f665de4c28392ff5fea4a0448b778e77fd4f9be32f44071b333fcdd96856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"pull-right\">
        <a class=\"btn btn-success\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("journaldurable_new");
        echo "\">
                <i class=\"fa fa-plus\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journaldurable.new.submit"), "html", null, true);
        echo "
            </a>    </div>
    </br></br></br>
<div data-widget-group=\"group1\">
    <div class=\"row\">
        <div class=\"pull-right col-md-5\">
            <div class=\"panel panel-inverse panel-collapsed\" data-widget=\"{\"id\" : \"wiget1\"}\" data-widget='{\"draggable\": \"false\"}'>
                <div class=\"panel-heading\">
                    <h2><i class=\"ti ti-search\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.list.search"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\" data-actions-container=\"\" data-action-collapse='{\"target\": \".panel-body\"}'></div>
                    <div class=\"panel-editbox\" data-widget-controls=\"\"></div>
                </div>
                <div class=\"panel-body\" style=\"display: none;\">
                    
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-row")));
        // line 23
        echo "

                        <div class=\"form-group\" >
                             ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => "family.list.search")));
        // line 32
        echo "
                        </div>

                        <div class=\"form-group\">
                            <div class=\"input-daterange input-group\" id=\"datepicker-range\">
                                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateStart", array()), 'widget', array("attr" => array("class" => "form-control ")));
        // line 42
        echo "
                                <span class=\"input-group-addon text-capitalize\">
                                    <i class=\"fa fa-arrow-right\"></i>
                                </span>
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEnd", array()), 'widget', array("attr" => array("class" => "form-control ")));
        // line 51
        echo "
                            </div>
                        </div>

                        <div class=\"pull-right\">
                            <div class=\"btn-group\">
                                <button  type=\"submit\" class=\"btn btn-warning-alt\">
                                    <i class=\"ti ti-search\"></i>
                                </button>
                                <button name=\"print\" value=\"true\" ";
        // line 60
        echo (((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) ? ("disabled = \"true\"") : (""));
        echo " class=\"btn btn-info-alt\">
                                <i class=\"ti ti-printer\"></i>
                                </button>
                            </div>
                        </div>
                        ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div></div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2><i class=\"fa fa-list\"></i> ";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journaldurable.list.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\">
                        <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                            <form method=\"POST\">
                                <button name=\"print\" value=\"true\" ";
        // line 75
        echo (((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) ? ("disabled = \"true\"") : (""));
        echo " class=\"btn btn-info\">
                                    ";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.printAll"), "html", null, true);
        echo "
                                </button>
                            </form>
                        </div>
                        <i class=\"separator\"></i>
                        <div class=\"panel-heading pull-left\">
                            <label class=\"panel-ctrls-center\">
                               ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "getTotalItemCount", array()), "html", null, true);
        echo "
                               ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journaldurable.list.resultFound"), "html", null, true);
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
        // line 94
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.id"), "f.id");
        echo "
                                        ";
        // line 95
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 96
            echo "                                            
                                            ";
            // line 97
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 98
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 100
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 102
            echo "                                        ";
        } else {
            // line 103
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 105
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 107
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.type"), "f.type");
        echo "
                                        ";
        // line 108
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.type"), "method")) {
            // line 109
            echo "                                            
                                            ";
            // line 110
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 111
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 113
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 115
            echo "                                        ";
        } else {
            // line 116
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 118
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 120
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.date"), "f.dateEntre");
        echo "
                                        ";
        // line 121
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.dateEntre"), "method")) {
            // line 122
            echo "                                            
                                            ";
            // line 123
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 124
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 126
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 128
            echo "                                        ";
        } else {
            // line 129
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 131
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 133
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                                        ";
        // line 134
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "u.username"), "method")) {
            // line 135
            echo "                                            
                                            ";
            // line 136
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 137
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 139
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 141
            echo "                                        ";
        } else {
            // line 142
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 144
        echo "                                    </th> 
                                <th class=\"text text-capitalize text-primary\"> ";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 149
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                    <td  class=\"text text-capitalize text-danger text-center\" colspan=\"5\">
                                        <p style=\"margin-top: 1%;\">
                                        <i class=\"fa fa-exclamation-triangle\"></i> <b>";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journaldurable.list.noResultFound"), "html", null, true);
            echo "</b>
                                        </p>
                                     </td>
                                    
                                ";
        } else {
            // line 157
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["journalDurable"]) {
                // line 158
                echo "                                    <tr>
                                        <td>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($context["journalDurable"], "id", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($context["journalDurable"], "type", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 161
                if ($this->getAttribute($context["journalDurable"], "dateEntre", array())) {
                    // line 162
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["journalDurable"], "dateEntre", array()), "Y-m-d"), "html", null, true);
                }
                echo "</td>
                                            <td>";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["journalDurable"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 167
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("journaldurable_edit", array("id" => $this->getAttribute($context["journalDurable"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a href=\"#\" data-box=\"#";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["journalDurable"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                                <a href=\"";
                // line 169
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("journaldurable_show", array("id" => $this->getAttribute($context["journalDurable"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success-alt\"><i class=\"ti ti-info\"></i></a>
                                            </div>
                                        </td>                                    <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["journalDurable"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 175
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journaldurable.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 177
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journaldurable.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("journaldurable_delete", array("id" => $this->getAttribute($context["journalDurable"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 184
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["journalDurable"], "id", array()), array(), "array"), 'widget');
                echo " 
                                                                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                        <i class=\"icon-trash\"></i>
                                                                         ";
                // line 187
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                    </button>
                                                                </form>
                                                                <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                    ";
                // line 191
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['journalDurable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "                            ";
        }
        // line 201
        echo "                         </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 205
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c426f665de4c28392ff5fea4a0448b778e77fd4f9be32f44071b333fcdd96856->leave($__internal_c426f665de4c28392ff5fea4a0448b778e77fd4f9be32f44071b333fcdd96856_prof);

    }

    // line 211
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d1724403f4f4fdd10fbd4f00ee7aafb71be1c3b11e22b3f37b1104156a1518c = $this->env->getExtension("native_profiler");
        $__internal_6d1724403f4f4fdd10fbd4f00ee7aafb71be1c3b11e22b3f37b1104156a1518c->enter($__internal_6d1724403f4f4fdd10fbd4f00ee7aafb71be1c3b11e22b3f37b1104156a1518c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 212
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 213
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2956017_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2956017_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2956017_moment.min_1.js");
            // line 218
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
        
        $__internal_6d1724403f4f4fdd10fbd4f00ee7aafb71be1c3b11e22b3f37b1104156a1518c->leave($__internal_6d1724403f4f4fdd10fbd4f00ee7aafb71be1c3b11e22b3f37b1104156a1518c_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:journaldurable:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 218,  443 => 213,  438 => 212,  432 => 211,  419 => 205,  413 => 201,  410 => 200,  395 => 191,  388 => 187,  382 => 184,  377 => 182,  369 => 177,  364 => 175,  358 => 172,  352 => 169,  348 => 168,  344 => 167,  337 => 163,  331 => 162,  329 => 161,  325 => 160,  321 => 159,  318 => 158,  313 => 157,  305 => 152,  299 => 149,  292 => 145,  289 => 144,  285 => 142,  282 => 141,  278 => 139,  274 => 137,  272 => 136,  269 => 135,  267 => 134,  263 => 133,  259 => 131,  255 => 129,  252 => 128,  248 => 126,  244 => 124,  242 => 123,  239 => 122,  237 => 121,  233 => 120,  229 => 118,  225 => 116,  222 => 115,  218 => 113,  214 => 111,  212 => 110,  209 => 109,  207 => 108,  203 => 107,  199 => 105,  195 => 103,  192 => 102,  188 => 100,  184 => 98,  182 => 97,  179 => 96,  177 => 95,  173 => 94,  160 => 84,  156 => 83,  146 => 76,  142 => 75,  135 => 71,  126 => 65,  118 => 60,  107 => 51,  105 => 46,  99 => 42,  97 => 37,  90 => 32,  88 => 26,  83 => 23,  81 => 20,  72 => 14,  61 => 6,  57 => 5,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*  {% block breadcrumbActive %}{{ 'journaldurable.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <div class="pull-right">*/
/*         <a class="btn btn-success" href="{{ path('journaldurable_new') }}">*/
/*                 <i class="fa fa-plus"></i> {{ 'journaldurable.new.submit'|trans }}*/
/*             </a>    </div>*/
/*     </br></br></br>*/
/* <div data-widget-group="group1">*/
/*     <div class="row">*/
/*         <div class="pull-right col-md-5">*/
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
/*                                 <button  type="submit" class="btn btn-warning-alt">*/
/*                                     <i class="ti ti-search"></i>*/
/*                                 </button>*/
/*                                 <button name="print" value="true" {{ padding|length == 0 ? 'disabled = "true"' : ""}} class="btn btn-info-alt">*/
/*                                 <i class="ti ti-printer"></i>*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div></div>*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'journaldurable.list.name'|trans }}</h2>*/
/*                     <div class="panel-ctrls">*/
/*                         <div id="example_filter" class="dataTables_filter pull-right">*/
/*                             <form method="POST">*/
/*                                 <button name="print" value="true" {{ padding|length == 0 ? 'disabled = "true"' : ""}} class="btn btn-info">*/
/*                                     {{ "magazine.printAll"|trans }}*/
/*                                 </button>*/
/*                             </form>*/
/*                         </div>*/
/*                         <i class="separator"></i>*/
/*                         <div class="panel-heading pull-left">*/
/*                             <label class="panel-ctrls-center">*/
/*                                {{ padding.getTotalItemCount }}*/
/*                                {{ 'journaldurable.list.resultFound'|trans }}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.type'|trans , 'f.type') }}*/
/*                                         {% if padding.isSorted('f.type') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.date'|trans , 'f.dateEntre') }}*/
/*                                         {% if padding.isSorted('f.dateEntre') %}*/
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
/*                                     <td  class="text text-capitalize text-danger text-center" colspan="5">*/
/*                                         <p style="margin-top: 1%;">*/
/*                                         <i class="fa fa-exclamation-triangle"></i> <b>{{ 'journaldurable.list.noResultFound'|trans }}</b>*/
/*                                         </p>*/
/*                                      </td>*/
/*                                     */
/*                                 {% else %}*/
/*                                 {% for journalDurable in padding %}*/
/*                                     <tr>*/
/*                                         <td>{{ journalDurable.id }}</td>*/
/*                                         <td>{{ journalDurable.type }}</td>*/
/*                                         <td>{% if journalDurable.dateEntre %}*/
/*                                             {{ journalDurable.dateEntre|date('Y-m-d') }}{% endif %}</td>*/
/*                                             <td>{{ journalDurable.user.username }}</td>*/
/*                                         <td>*/
/*                                             */
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('journaldurable_edit', { 'id': journalDurable.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                 <a href="#" data-box="#{{ journalDurable.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                                 <a href="{{ path('journaldurable_show', { 'id': journalDurable.id }) }}" class="btn btn-success-alt"><i class="ti ti-info"></i></a>*/
/*                                             </div>*/
/*                                         </td>                                    <!-- MESSAGE BOX-->*/
/*                                             <div class="message-box animated fadeIn" data-sound="alert" id="{{ journalDurable.id }}">*/
/*                                                 <div class="mb-container">*/
/*                                                     <div class="mb-middle">*/
/*                                                         <div class="mb-title"><span class="ti ti-trash"></span> {{ 'journaldurable.delete.name'|trans }} ?</div>*/
/*                                                         <div class="mb-content">*/
/*                                                             <p>{{ 'journaldurable.delete.message'|trans }}</p>                    */
/*                                                             */
/*                                                         </div>*/
/*                                                         <div class="mb-footer">*/
/*                                                             <div class="pull-right">*/
/*                                                                 <form action="{{ path('journaldurable_delete', { 'id': journalDurable.id }) }}" method="post">*/
/*                                                                     <input type="hidden" name="_method" value="DELETE" />*/
/*                                                                     {{ form_widget(deleteForms[ journalDurable.id ]) }} */
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
