<?php

/* ISETSOMagazineBundle:journalconsumable:index.html.twig */
class __TwigTemplate_2008418ac6bf3978747cc8884c18336cabcd1431fa924cad7203d834e7fa4969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:journalconsumable:index.html.twig", 1);
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
        $__internal_dbc26955ada5ecb08bd3c7fa4903a8f6311a5fefd6f08e33c565eb322e5826d5 = $this->env->getExtension("native_profiler");
        $__internal_dbc26955ada5ecb08bd3c7fa4903a8f6311a5fefd6f08e33c565eb322e5826d5->enter($__internal_dbc26955ada5ecb08bd3c7fa4903a8f6311a5fefd6f08e33c565eb322e5826d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:journalconsumable:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbc26955ada5ecb08bd3c7fa4903a8f6311a5fefd6f08e33c565eb322e5826d5->leave($__internal_dbc26955ada5ecb08bd3c7fa4903a8f6311a5fefd6f08e33c565eb322e5826d5_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_4fd34c84c21130484f2ffea650920e4aa07df144b41db41d21ecfb67009e5103 = $this->env->getExtension("native_profiler");
        $__internal_4fd34c84c21130484f2ffea650920e4aa07df144b41db41d21ecfb67009e5103->enter($__internal_4fd34c84c21130484f2ffea650920e4aa07df144b41db41d21ecfb67009e5103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.list.name"), "html", null, true);
        
        $__internal_4fd34c84c21130484f2ffea650920e4aa07df144b41db41d21ecfb67009e5103->leave($__internal_4fd34c84c21130484f2ffea650920e4aa07df144b41db41d21ecfb67009e5103_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b70f19ca1a7734dde4955ccb95cf4e3322be3fbd053632194c2652da2c2b13d3 = $this->env->getExtension("native_profiler");
        $__internal_b70f19ca1a7734dde4955ccb95cf4e3322be3fbd053632194c2652da2c2b13d3->enter($__internal_b70f19ca1a7734dde4955ccb95cf4e3322be3fbd053632194c2652da2c2b13d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"pull-right animated slideInDown\">
        <a class=\"btn btn-success\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("journalconsumable_new");
        echo "\">
                <i class=\"fa fa-plus\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.new.submit"), "html", null, true);
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
                                <button type=\"submit\" class=\"btn btn-warning-alt\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.list.name"), "html", null, true);
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
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "getTotalItemCount", array()), "html", null, true);
        echo "
                               ";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.list.resultFound"), "html", null, true);
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.type"), "f.type");
        echo "
                                        ";
        // line 109
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.type"), "method")) {
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.date"), "f.dateEntre");
        echo "
                                        ";
        // line 122
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.dateEntre"), "method")) {
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                                        ";
        // line 135
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "u.username"), "method")) {
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
                                <th class=\"text text-capitalize text-primary\"> ";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 150
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                <td  class=\"text text-capitalize text-danger text-center animated fadeInUp\" colspan=\"5\">
                                    <i class=\"fa fa-exclamation-triangle\"></i>
                                    ";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.list.noResultFound"), "html", null, true);
            echo "
                                    </p>
                                 </td>
                                  
                                ";
        } else {
            // line 158
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["journalConsumable"]) {
                // line 159
                echo "                                    <tr>
                                        <td>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($context["journalConsumable"], "id", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["journalConsumable"], "type", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 162
                if ($this->getAttribute($context["journalConsumable"], "dateEntre", array())) {
                    // line 163
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["journalConsumable"], "dateEntre", array()), "Y/m/d"), "html", null, true);
                    echo "
                                            ";
                }
                // line 165
                echo "                                        </td> 
                                         <td>";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["journalConsumable"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("journalconsumable_edit", array("id" => $this->getAttribute($context["journalConsumable"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a href=\"#\" data-box=\"#";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["journalConsumable"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                                <a href=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("journalconsumable_show", array("id" => $this->getAttribute($context["journalConsumable"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success-alt\"><i class=\"ti ti-info\"></i></a>
                                            </div>
                                        </td>                                    <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["journalConsumable"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 178
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 180
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 185
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("journalconsumable_delete", array("id" => $this->getAttribute($context["journalConsumable"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 187
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["journalConsumable"], "id", array()), array(), "array"), 'widget');
                echo " 
                                                                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                        <i class=\"icon-trash\"></i>
                                                                         ";
                // line 190
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                    </button>
                                                                </form>
                                                                <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                    ";
                // line 194
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['journalConsumable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "                            ";
        }
        // line 204
        echo "                         </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 208
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_b70f19ca1a7734dde4955ccb95cf4e3322be3fbd053632194c2652da2c2b13d3->leave($__internal_b70f19ca1a7734dde4955ccb95cf4e3322be3fbd053632194c2652da2c2b13d3_prof);

    }

    // line 214
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6bfe9b724f4e0a7dc495712d173e401575bd1aaee5b60e2949a8042da43d33bf = $this->env->getExtension("native_profiler");
        $__internal_6bfe9b724f4e0a7dc495712d173e401575bd1aaee5b60e2949a8042da43d33bf->enter($__internal_6bfe9b724f4e0a7dc495712d173e401575bd1aaee5b60e2949a8042da43d33bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 215
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 216
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2956017_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2956017_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2956017_moment.min_1.js");
            // line 221
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
        
        $__internal_6bfe9b724f4e0a7dc495712d173e401575bd1aaee5b60e2949a8042da43d33bf->leave($__internal_6bfe9b724f4e0a7dc495712d173e401575bd1aaee5b60e2949a8042da43d33bf_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:journalconsumable:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 221,  447 => 216,  442 => 215,  436 => 214,  423 => 208,  417 => 204,  414 => 203,  399 => 194,  392 => 190,  386 => 187,  381 => 185,  373 => 180,  368 => 178,  362 => 175,  356 => 172,  352 => 171,  348 => 170,  341 => 166,  338 => 165,  332 => 163,  330 => 162,  326 => 161,  322 => 160,  319 => 159,  314 => 158,  306 => 153,  300 => 150,  293 => 146,  290 => 145,  286 => 143,  283 => 142,  279 => 140,  275 => 138,  273 => 137,  270 => 136,  268 => 135,  264 => 134,  260 => 132,  256 => 130,  253 => 129,  249 => 127,  245 => 125,  243 => 124,  240 => 123,  238 => 122,  234 => 121,  230 => 119,  226 => 117,  223 => 116,  219 => 114,  215 => 112,  213 => 111,  210 => 110,  208 => 109,  204 => 108,  200 => 106,  196 => 104,  193 => 103,  189 => 101,  185 => 99,  183 => 98,  180 => 97,  178 => 96,  174 => 95,  161 => 85,  157 => 84,  146 => 76,  142 => 75,  135 => 71,  126 => 65,  118 => 60,  107 => 51,  105 => 46,  99 => 42,  97 => 37,  90 => 32,  88 => 26,  83 => 23,  81 => 20,  72 => 14,  61 => 6,  57 => 5,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumbActive %}{{ 'journalconsumable.list.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <div class="pull-right animated slideInDown">*/
/*         <a class="btn btn-success" href="{{ path('journalconsumable_new') }}">*/
/*                 <i class="fa fa-plus"></i> {{ 'journalconsumable.new.submit'|trans }}*/
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
/*                                 <button type="submit" class="btn btn-warning-alt">*/
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
/*                     <h2><i class="fa fa-list"></i> {{ 'journalconsumable.list.name'|trans }}</h2>*/
/*                     <div class="panel-ctrls">*/
/*                         <div id="example_filter" class="dataTables_filter pull-right">*/
/*                             <form method="POST">*/
/*                                 <button name="print" value="true" {{ padding|length == 0 ? 'disabled = "true"' : ""}} class="btn btn-info">*/
/*                                     {{ "magazine.printAll"|trans }}*/
/*                                 </button>*/
/*                             </form>*/
/*                             */
/*                         </div>*/
/*                         <i class="separator"></i>*/
/*                         <div class="panel-heading pull-left">*/
/*                             <label class="panel-ctrls-center">*/
/*                                {{ padding.getTotalItemCount }}*/
/*                                {{ 'journalconsumable.list.resultFound'|trans }}*/
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
/*                                 <td  class="text text-capitalize text-danger text-center animated fadeInUp" colspan="5">*/
/*                                     <i class="fa fa-exclamation-triangle"></i>*/
/*                                     {{ 'journalconsumable.list.noResultFound'|trans }}*/
/*                                     </p>*/
/*                                  </td>*/
/*                                   */
/*                                 {% else %}*/
/*                                 {% for journalConsumable in padding %}*/
/*                                     <tr>*/
/*                                         <td>{{ journalConsumable.id }}</td>*/
/*                                         <td>{{ journalConsumable.type }}</td>*/
/*                                         <td>{% if journalConsumable.dateEntre %}*/
/*                                                 {{ journalConsumable.dateEntre|date('Y/m/d') }}*/
/*                                             {% endif %}*/
/*                                         </td> */
/*                                          <td>{{ journalConsumable.user.username }}</td>*/
/*                                         <td>*/
/*                                             */
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('journalconsumable_edit', { 'id': journalConsumable.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                 <a href="#" data-box="#{{ journalConsumable.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                                 <a href="{{ path('journalconsumable_show', { 'id': journalConsumable.id }) }}" class="btn btn-success-alt"><i class="ti ti-info"></i></a>*/
/*                                             </div>*/
/*                                         </td>                                    <!-- MESSAGE BOX-->*/
/*                                             <div class="message-box animated fadeIn" data-sound="alert" id="{{ journalConsumable.id }}">*/
/*                                                 <div class="mb-container">*/
/*                                                     <div class="mb-middle">*/
/*                                                         <div class="mb-title"><span class="ti ti-trash"></span> {{ 'journalconsumable.delete.name'|trans }} ?</div>*/
/*                                                         <div class="mb-content">*/
/*                                                             <p>{{ 'journalconsumable.delete.message'|trans }}</p>                    */
/*                                                             */
/*                                                         </div>*/
/*                                                         <div class="mb-footer">*/
/*                                                             <div class="pull-right">*/
/*                                                                 <form action="{{ path('journalconsumable_delete', { 'id': journalConsumable.id }) }}" method="post">*/
/*                                                                     <input type="hidden" name="_method" value="DELETE" />*/
/*                                                                     {{ form_widget(deleteForms[ journalConsumable.id ]) }} */
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
/* */
/* */
