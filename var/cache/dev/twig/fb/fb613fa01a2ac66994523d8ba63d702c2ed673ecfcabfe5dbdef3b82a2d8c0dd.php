<?php

/* ISETSOUserBundle:user:index.html.twig */
class __TwigTemplate_d63316fe7476d22e182308ee5a9b81138779011288d827e97ac407142893b697 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOUserBundle:user:index.html.twig", 1);
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
        $__internal_dcb40452ec1a02faab4d4bf56684aef0b8bb3f6402801bbd25442b61674de257 = $this->env->getExtension("native_profiler");
        $__internal_dcb40452ec1a02faab4d4bf56684aef0b8bb3f6402801bbd25442b61674de257->enter($__internal_dcb40452ec1a02faab4d4bf56684aef0b8bb3f6402801bbd25442b61674de257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOUserBundle:user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcb40452ec1a02faab4d4bf56684aef0b8bb3f6402801bbd25442b61674de257->leave($__internal_dcb40452ec1a02faab4d4bf56684aef0b8bb3f6402801bbd25442b61674de257_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_7149d75fec7561c68d3be2363f3c11c5ddaf77a4f71bd92b451fe51d131310e8 = $this->env->getExtension("native_profiler");
        $__internal_7149d75fec7561c68d3be2363f3c11c5ddaf77a4f71bd92b451fe51d131310e8->enter($__internal_7149d75fec7561c68d3be2363f3c11c5ddaf77a4f71bd92b451fe51d131310e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.edit.name"), "html", null, true);
        
        $__internal_7149d75fec7561c68d3be2363f3c11c5ddaf77a4f71bd92b451fe51d131310e8->leave($__internal_7149d75fec7561c68d3be2363f3c11c5ddaf77a4f71bd92b451fe51d131310e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_03bcfaccba2c79d1fde0cb0b95b351c34a8a96221d04683bedcbed6bda72c263 = $this->env->getExtension("native_profiler");
        $__internal_03bcfaccba2c79d1fde0cb0b95b351c34a8a96221d04683bedcbed6bda72c263->enter($__internal_03bcfaccba2c79d1fde0cb0b95b351c34a8a96221d04683bedcbed6bda72c263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"pull-right\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\" class=\"btn btn-success\" >
                <i class=\"fa fa-plus\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.new.submit"), "html", null, true);
        echo "
            </a>    </div>
    </br></br>
<div data-widget-group=\"group1\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2><i class=\"fa fa-list\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\">
                        <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                             ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-inline")));
        // line 20
        echo "

                                <div class=\"input-group\">
                                     ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => $this->env->getExtension('translator')->trans("family.list.search"))));
        // line 29
        echo "
                                </div>
                                <div class=\"input-group\">
                                    <button type=\"submit\" class=\"btn btn-primary-alt\"><i class=\"ti ti-search\"></i></button>
                                </div>
                             ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <i class=\"separator\"></i>
                        <div class=\"panel-heading pull-left\">
                            <label class=\"panel-ctrls-center\">
                               ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "getTotalItemCount", array()), "html", null, true);
        echo "
                               ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.resultFound"), "html", null, true);
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
        // line 50
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "f.username");
        echo "
                                        ";
        // line 51
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 52
            echo "                                            
                                            ";
            // line 53
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 54
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 56
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 58
            echo "                                        ";
        } else {
            // line 59
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 61
        echo "                                    </th>
                                    
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 64
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.locked"), "f.lastName");
        echo "
                                        ";
        // line 65
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.lastName"), "method")) {
            // line 66
            echo "                                            
                                            ";
            // line 67
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 68
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 70
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 72
            echo "                                        ";
        } else {
            // line 73
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 75
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 77
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.expired"), "f.lastName");
        echo "
                                        ";
        // line 78
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.lastName"), "method")) {
            // line 79
            echo "                                            
                                            ";
            // line 80
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 81
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 83
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 85
            echo "                                        ";
        } else {
            // line 86
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 88
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 90
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.dateExpired"), "f.function");
        echo "
                                        ";
        // line 91
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.function"), "method")) {
            // line 92
            echo "                                            
                                            ";
            // line 93
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 94
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 96
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 98
            echo "                                        ";
        } else {
            // line 99
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 101
        echo "                                    </th>
                                <th class=\"text text-capitalize text-primary\"> ";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 106
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                <td  class=\"text text-capitalize text-danger text-center\" colspan=\"7\">
                                    <p  style=\"margin-top: 1%;\">
                                            <i class=\"fa fa-exclamation-triangle\"></i> <b>";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.noResultFound"), "html", null, true);
            echo "</b>
                                        </p>
                                    
                                 </td>
                                    
                                ";
        } else {
            // line 115
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 116
                echo "                                    
                                    <tr>
                                        <td>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 119
                if ($this->getAttribute($context["user"], "isLocked", array())) {
                    // line 120
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.etat.locked"), "html", null, true);
                    echo "
                                          ";
                } else {
                    // line 122
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.etat.notLocked"), "html", null, true);
                    echo "
                                          ";
                }
                // line 123
                echo "</td>
                                        <td>
                                            ";
                // line 125
                if ($this->getAttribute($context["user"], "isExpired", array())) {
                    // line 126
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.etat.expired"), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 128
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.etat.notExpired"), "html", null, true);
                    echo "
                                            ";
                }
                // line 130
                echo "                                        </td>
                                        <td>
                                            ";
                // line 132
                if ($this->getAttribute($context["user"], "expiresAt", array())) {
                    // line 133
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "expiresAt", array()), "Y-m-d"), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 135
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.etat.notExpired"), "html", null, true);
                    echo "
                                            ";
                }
                // line 137
                echo "                                        </td>
                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a ";
                // line 141
                echo (($this->getAttribute($context["user"], "isSuperAdmin", array())) ? ("disabled=\"\"") : (""));
                echo "  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>

                                                <a ";
                // line 143
                echo (($this->getAttribute($context["user"], "isSuperAdmin", array())) ? ("disabled=\"\"") : (""));
                echo " href=\"#\" data-box=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\">
                                                ";
                // line 144
                if ($this->getAttribute($context["user"], "isLocked", array())) {
                    // line 145
                    echo "                                                    <i class=\"fa fa-unlock\"></i>
                                                    ";
                } else {
                    // line 147
                    echo "                                                    <i class=\"fa fa-lock\"></i>
                                                ";
                }
                // line 149
                echo "                                                </a>

                                                <a href=\"";
                // line 151
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success-alt\"><i class=\"ti ti-info\"></i></a>
                                                <a ";
                // line 152
                echo (($this->getAttribute($context["user"], "isSuperAdmin", array())) ? ("disabled=\"\"") : (""));
                echo "  href=\"#\" data-box=\"#expired";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-eraser\"></i></a>
                                                
                                            </div>
                                        </td>                                    
                                        <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\">
                                                            ";
                // line 161
                if ($this->getAttribute($context["user"], "isLocked", array())) {
                    // line 162
                    echo "                                                                <i class=\"fa fa-unlock\"></i>
                                                                ";
                    // line 163
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.unlock.name"), "html", null, true);
                    echo "
                                                                ";
                } else {
                    // line 165
                    echo "                                                                <i class=\"fa fa-lock\"></i>
                                                                ";
                    // line 166
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.locked.name"), "html", null, true);
                    echo "
                                                            ";
                }
                // line 168
                echo "                                                             ?</div>
                                                        <div class=\"mb-content\">
                                                            ";
                // line 170
                if ($this->getAttribute($context["user"], "isLocked", array())) {
                    // line 171
                    echo "                                                                <p>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.unlock.message"), "html", null, true);
                    echo "</p>
                                                                ";
                } else {
                    // line 173
                    echo "                                                                <p>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.locked.message"), "html", null, true);
                    echo "</p>
                                                            ";
                }
                // line 175
                echo "                                                                                
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 179
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 181
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["user"], "id", array()), array(), "array"), 'widget');
                echo " 
                                                                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                        <i class=\"icon-trash\"></i>
                                                                         ";
                // line 184
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                    </button>
                                                                </form>
                                                                <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                    ";
                // line 188
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.no"), "html", null, true);
                echo "</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- END MESSAGE BOX-->
                                        <!-- MESSAGE BOX-->
                                            <div class=\"message-box message-box-info animated fadeIn\" data-sound=\"alert\" id=\"expired";
                // line 196
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-eraser\"></span> 
                                                            ";
                // line 200
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.expired.name"), "html", null, true);
                echo " ?</div>
                                                        <form novalidate=\"novalidate\" action=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_expired", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" method=\"post\" class=\"form-horizontal row-border\">
                                                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                            <div class=\"mb-content form-horizontal row-border\">
                                                                <hr>
                                                                ";
                // line 205
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["expiredForm"]) ? $context["expiredForm"] : $this->getContext($context, "expiredForm")), $this->getAttribute($context["user"], "id", array()), array(), "array"), 'widget');
                echo "             
                                                            </div>
                                                            <div class=\"mb-footer\">
                                                                <div class=\"pull-right\">
                                                                        <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                            <i class=\"icon-trash\"></i>
                                                                             ";
                // line 211
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                        </button>
                                                                    
                                                                    <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                        ";
                // line 215
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.no"), "html", null, true);
                echo "
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- END MESSAGE BOX-->
                                    </tr>
                                    
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "                            ";
        }
        // line 228
        echo "                         </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 232
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_03bcfaccba2c79d1fde0cb0b95b351c34a8a96221d04683bedcbed6bda72c263->leave($__internal_03bcfaccba2c79d1fde0cb0b95b351c34a8a96221d04683bedcbed6bda72c263_prof);

    }

    // line 239
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_76bd59f930fbc8b140fdb0745666dba19ebead2eec5ee7b904fc66e549273396 = $this->env->getExtension("native_profiler");
        $__internal_76bd59f930fbc8b140fdb0745666dba19ebead2eec5ee7b904fc66e549273396->enter($__internal_76bd59f930fbc8b140fdb0745666dba19ebead2eec5ee7b904fc66e549273396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 240
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 241
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4386f7c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4386f7c_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4386f7c_moment.min_1.js");
            // line 246
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "4386f7c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4386f7c_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4386f7c_bootstrap-datepicker_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "4386f7c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4386f7c") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4386f7c.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 248
        echo "    <script type=\"text/javascript\">
        var elems = Array.prototype.slice.call(document.querySelectorAll('#form_dateExp'));
        elems.forEach(function(html) {
            \$(html).datepicker({
            todayHighlight: true,
            format: \"yyyy-mm-dd\",
            });
        });
        
    </script>
 ";
        
        $__internal_76bd59f930fbc8b140fdb0745666dba19ebead2eec5ee7b904fc66e549273396->leave($__internal_76bd59f930fbc8b140fdb0745666dba19ebead2eec5ee7b904fc66e549273396_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOUserBundle:user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 248,  539 => 246,  535 => 241,  530 => 240,  524 => 239,  510 => 232,  504 => 228,  501 => 227,  483 => 215,  476 => 211,  467 => 205,  460 => 201,  456 => 200,  449 => 196,  438 => 188,  431 => 184,  425 => 181,  420 => 179,  414 => 175,  408 => 173,  402 => 171,  400 => 170,  396 => 168,  391 => 166,  388 => 165,  383 => 163,  380 => 162,  378 => 161,  371 => 157,  361 => 152,  357 => 151,  353 => 149,  349 => 147,  345 => 145,  343 => 144,  337 => 143,  330 => 141,  324 => 137,  318 => 135,  312 => 133,  310 => 132,  306 => 130,  300 => 128,  294 => 126,  292 => 125,  288 => 123,  282 => 122,  276 => 120,  274 => 119,  270 => 118,  266 => 116,  261 => 115,  252 => 109,  246 => 106,  239 => 102,  236 => 101,  232 => 99,  229 => 98,  225 => 96,  221 => 94,  219 => 93,  216 => 92,  214 => 91,  210 => 90,  206 => 88,  202 => 86,  199 => 85,  195 => 83,  191 => 81,  189 => 80,  186 => 79,  184 => 78,  180 => 77,  176 => 75,  172 => 73,  169 => 72,  165 => 70,  161 => 68,  159 => 67,  156 => 66,  154 => 65,  150 => 64,  145 => 61,  141 => 59,  138 => 58,  134 => 56,  130 => 54,  128 => 53,  125 => 52,  123 => 51,  119 => 50,  106 => 40,  102 => 39,  94 => 34,  87 => 29,  85 => 23,  80 => 20,  78 => 17,  72 => 14,  61 => 6,  57 => 5,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*  {% block breadcrumbActive %}{{ 'user.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     <div class="pull-right">*/
/*         <a href="{{ path ('user_new')}}" class="btn btn-success" >*/
/*                 <i class="fa fa-plus"></i> {{ 'user.new.submit'|trans }}*/
/*             </a>    </div>*/
/*     </br></br>*/
/* <div data-widget-group="group1">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'user.list.name'|trans }}</h2>*/
/*                     <div class="panel-ctrls">*/
/*                         <div id="example_filter" class="dataTables_filter pull-right">*/
/*                              {{ form_start(form ,{*/
/*                                 'attr' : { 'class' : 'form-inline' } */
/*                                 */
/*                             }) }}*/
/* */
/*                                 <div class="input-group">*/
/*                                      {{ form_widget(form.search,{*/
/*                                         'attr' : {*/
/*                                             'class' : 'form-control ' ,*/
/*                                             'placeholder' : 'family.list.search'|trans*/
/*                                         } */
/*                                         */
/*                                     }) }}*/
/*                                 </div>*/
/*                                 <div class="input-group">*/
/*                                     <button type="submit" class="btn btn-primary-alt"><i class="ti ti-search"></i></button>*/
/*                                 </div>*/
/*                              {{ form_end(form) }}*/
/*                         </div>*/
/*                         <i class="separator"></i>*/
/*                         <div class="panel-heading pull-left">*/
/*                             <label class="panel-ctrls-center">*/
/*                                {{ padding.getTotalItemCount }}*/
/*                                {{ 'user.list.resultFound'|trans }}*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel-body no-padding">*/
/*                     <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding,  'profile.show.username'|trans({}, 'FOSUserBundle')  , 'f.username') }}*/
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
/*                                     */
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.locked'|trans , 'f.lastName') }}*/
/*                                         {% if padding.isSorted('f.lastName') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.expired'|trans , 'f.lastName') }}*/
/*                                         {% if padding.isSorted('f.lastName') %}*/
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
/*                                         {{ knp_pagination_sortable(padding, 'magazine.field.dateExpired'|trans , 'f.function') }}*/
/*                                         {% if padding.isSorted('f.function') %}*/
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
/*                                 <th class="text text-capitalize text-primary"> {{ 'magazine.action'|trans }} </th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                              {% if padding|length == 0 %} */
/*                                 <td  class="text text-capitalize text-danger text-center" colspan="7">*/
/*                                     <p  style="margin-top: 1%;">*/
/*                                             <i class="fa fa-exclamation-triangle"></i> <b>{{ 'user.list.noResultFound'|trans }}</b>*/
/*                                         </p>*/
/*                                     */
/*                                  </td>*/
/*                                     */
/*                                 {% else %}*/
/*                                 {% for user in padding %}*/
/*                                     */
/*                                     <tr>*/
/*                                         <td>{{ user.username }}</td>*/
/*                                         <td>{% if user.isLocked %}*/
/*                                             {{ 'user.etat.locked'|trans }}*/
/*                                           {% else %}*/
/*                                             {{ 'user.etat.notLocked'|trans }}*/
/*                                           {% endif %}</td>*/
/*                                         <td>*/
/*                                             {% if user.isExpired %}*/
/*                                                 {{ 'user.etat.expired'|trans }}*/
/*                                             {% else %}*/
/*                                                 {{ 'user.etat.notExpired'|trans }}*/
/*                                             {% endif %}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {% if user.expiresAt %}*/
/*                                                 {{ user.expiresAt|date('Y-m-d') }}*/
/*                                             {% else %}*/
/*                                                 {{ 'user.etat.notExpired'|trans }}*/
/*                                             {% endif %}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             */
/*                                             <div class="btn-group">*/
/*                                                 <a {{ user.isSuperAdmin ? 'disabled=""' : "" }}  href="{{ path('user_edit', { 'id': user.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/* */
/*                                                 <a {{ user.isSuperAdmin ? 'disabled=""' : "" }} href="#" data-box="#{{ user.id }}" class="btn btn-danger-alt mb-control">*/
/*                                                 {% if user.isLocked %}*/
/*                                                     <i class="fa fa-unlock"></i>*/
/*                                                     {% else %}*/
/*                                                     <i class="fa fa-lock"></i>*/
/*                                                 {% endif %}*/
/*                                                 </a>*/
/* */
/*                                                 <a href="{{ path('user_show', { 'id': user.id }) }}" class="btn btn-success-alt"><i class="ti ti-info"></i></a>*/
/*                                                 <a {{ user.isSuperAdmin ? 'disabled=""' : "" }}  href="#" data-box="#expired{{ user.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-eraser"></i></a>*/
/*                                                 */
/*                                             </div>*/
/*                                         </td>                                    */
/*                                         <!-- MESSAGE BOX-->*/
/*                                             <div class="message-box animated fadeIn" data-sound="alert" id="{{ user.id }}">*/
/*                                                 <div class="mb-container">*/
/*                                                     <div class="mb-middle">*/
/*                                                         <div class="mb-title">*/
/*                                                             {% if user.isLocked %}*/
/*                                                                 <i class="fa fa-unlock"></i>*/
/*                                                                 {{ 'user.unlock.name'|trans }}*/
/*                                                                 {% else %}*/
/*                                                                 <i class="fa fa-lock"></i>*/
/*                                                                 {{ 'user.locked.name'|trans }}*/
/*                                                             {% endif %}*/
/*                                                              ?</div>*/
/*                                                         <div class="mb-content">*/
/*                                                             {% if user.isLocked %}*/
/*                                                                 <p>{{ 'user.unlock.message'|trans }}</p>*/
/*                                                                 {% else %}*/
/*                                                                 <p>{{ 'user.locked.message'|trans }}</p>*/
/*                                                             {% endif %}*/
/*                                                                                 */
/*                                                         </div>*/
/*                                                         <div class="mb-footer">*/
/*                                                             <div class="pull-right">*/
/*                                                                 <form action="{{ path('user_delete', { 'id': user.id }) }}" method="post">*/
/*                                                                     <input type="hidden" name="_method" value="DELETE" />*/
/*                                                                     {{ form_widget(deleteForms[ user.id ]) }} */
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
/*                                         <!-- MESSAGE BOX-->*/
/*                                             <div class="message-box message-box-info animated fadeIn" data-sound="alert" id="expired{{ user.id }}">*/
/*                                                 <div class="mb-container">*/
/*                                                     <div class="mb-middle">*/
/*                                                         <div class="mb-title"><span class="ti ti-eraser"></span> */
/*                                                             {{ 'user.expired.name'|trans }} ?</div>*/
/*                                                         <form novalidate="novalidate" action="{{ path('user_expired', { 'id': user.id }) }}" method="post" class="form-horizontal row-border">*/
/*                                                             <input type="hidden" name="_method" value="DELETE" />*/
/*                                                             <div class="mb-content form-horizontal row-border">*/
/*                                                                 <hr>*/
/*                                                                 {{ form_widget(expiredForm[ user.id ]) }}             */
/*                                                             </div>*/
/*                                                             <div class="mb-footer">*/
/*                                                                 <div class="pull-right">*/
/*                                                                         <button type="submit" class="btn btn-danger btn-lg">*/
/*                                                                             <i class="icon-trash"></i>*/
/*                                                                              {{ 'messageBox.yes'|trans }}*/
/*                                                                         </button>*/
/*                                                                     */
/*                                                                     <button class="btn btn-default btn-lg mb-control-close">*/
/*                                                                         {{ 'messageBox.no'|trans }}*/
/*                                                                     </button>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </form>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         <!-- END MESSAGE BOX-->*/
/*                                     </tr>*/
/*                                     */
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
/*         */
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     <script type="text/javascript">*/
/*         var elems = Array.prototype.slice.call(document.querySelectorAll('#form_dateExp'));*/
/*         elems.forEach(function(html) {*/
/*             $(html).datepicker({*/
/*             todayHighlight: true,*/
/*             format: "yyyy-mm-dd",*/
/*             });*/
/*         });*/
/*         */
/*     </script>*/
/*  {% endblock %}*/
