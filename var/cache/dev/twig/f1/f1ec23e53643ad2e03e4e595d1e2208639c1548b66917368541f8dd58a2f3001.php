<?php

/* ISETSOMagazineBundle:returnarticle_SubStore:index.html.twig */
class __TwigTemplate_760926bde238760e14ace140f09c4eb0299a8023623ef48fb0fd1a90d1a0d4f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:returnarticle_SubStore:index.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
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
        $__internal_9203e354b2d3744ae969121ee96e947b5719838998a14914bd56d1affa905397 = $this->env->getExtension("native_profiler");
        $__internal_9203e354b2d3744ae969121ee96e947b5719838998a14914bd56d1affa905397->enter($__internal_9203e354b2d3744ae969121ee96e947b5719838998a14914bd56d1affa905397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:returnarticle_SubStore:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9203e354b2d3744ae969121ee96e947b5719838998a14914bd56d1affa905397->leave($__internal_9203e354b2d3744ae969121ee96e947b5719838998a14914bd56d1affa905397_prof);

    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d96d4b0f4c8821c221b088e3d630109a6e3e4b5f946fb5ccaea6ae1aded89a88 = $this->env->getExtension("native_profiler");
        $__internal_d96d4b0f4c8821c221b088e3d630109a6e3e4b5f946fb5ccaea6ae1aded89a88->enter($__internal_d96d4b0f4c8821c221b088e3d630109a6e3e4b5f946fb5ccaea6ae1aded89a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 3
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_show", array("id" => $this->getAttribute((isset($context["store"]) ? $context["store"] : $this->getContext($context, "store")), "id", array()))), "html", null, true);
        echo "\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazin.show.name"), "html", null, true);
        echo "
    </a> 
";
        
        $__internal_d96d4b0f4c8821c221b088e3d630109a6e3e4b5f946fb5ccaea6ae1aded89a88->leave($__internal_d96d4b0f4c8821c221b088e3d630109a6e3e4b5f946fb5ccaea6ae1aded89a88_prof);

    }

    // line 7
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_cb1a258a016137b29ae62b67004e02cde293d28f0a83ab6e1d3be001f6839d88 = $this->env->getExtension("native_profiler");
        $__internal_cb1a258a016137b29ae62b67004e02cde293d28f0a83ab6e1d3be001f6839d88->enter($__internal_cb1a258a016137b29ae62b67004e02cde293d28f0a83ab6e1d3be001f6839d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.edit.name"), "html", null, true);
        
        $__internal_cb1a258a016137b29ae62b67004e02cde293d28f0a83ab6e1d3be001f6839d88->leave($__internal_cb1a258a016137b29ae62b67004e02cde293d28f0a83ab6e1d3be001f6839d88_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c62d28c745f645ee3d9762a44ef327ea795e69daae17877a7674b13740e0a3f = $this->env->getExtension("native_profiler");
        $__internal_8c62d28c745f645ee3d9762a44ef327ea795e69daae17877a7674b13740e0a3f->enter($__internal_8c62d28c745f645ee3d9762a44ef327ea795e69daae17877a7674b13740e0a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"col-md-12\">
    <div class=\"pull-right\">
        <a class=\"btn btn-success\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnArticle_subStore_new", array("id" => $this->getAttribute((isset($context["store"]) ? $context["store"] : $this->getContext($context, "store")), "id", array()))), "html", null, true);
        echo "\">
                <i class=\"fa fa-plus\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.new.submit"), "html", null, true);
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
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.list.search"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\" data-actions-container=\"\" data-action-collapse='{\"target\": \".panel-body\"}'></div>
                    <div class=\"panel-editbox\" data-widget-controls=\"\"></div>
                </div>
                <div class=\"panel-body\" style=\"display: none;\">
                    
                    ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-row")));
        // line 30
        echo "

                        <div class=\"form-group\" >
                             ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => "family.list.search")));
        // line 39
        echo "
                        </div>

                        <div class=\"form-group\">
                            <div class=\"input-daterange input-group\" id=\"datepicker-range\">
                                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateStart", array()), 'widget', array("attr" => array("class" => "form-control ")));
        // line 49
        echo "
                                <span class=\"input-group-addon text-capitalize\">
                                    <i class=\"fa fa-arrow-right\"></i>
                                </span>
                                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEnd", array()), 'widget', array("attr" => array("class" => "form-control ")));
        // line 58
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
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div></div>
        <div>
            
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2><i class=\"fa fa-list\"></i> ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.list.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls\">
                        <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                            <div class=\"btn-group\">
                                <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\" class=\"btn btn-warning-alt\">
                                    <i class=\"ti ti-reload\" aria-hidden=\"true\"></i>
                                </a>
                            
                                <a ";
        // line 88
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
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "getTotalItemCount", array()), "html", null, true);
        echo "
                               ";
        // line 97
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
        // line 107
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.id"), "f.id");
        echo "
                                        ";
        // line 108
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.observation"), "f.observation");
        echo "
                                        ";
        // line 121
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.observation"), "method")) {
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.date"), "f.date");
        echo "
                                        ";
        // line 134
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.date"), "method")) {
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
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 146
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.etat"), "f.etat");
        echo "
                                        ";
        // line 147
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "f.id"), "method")) {
            // line 148
            echo "                                            
                                            ";
            // line 149
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 150
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 152
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 154
            echo "                                        ";
        } else {
            // line 155
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 157
        echo "                                    </th>
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 159
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                                        ";
        // line 160
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "u.username"), "method")) {
            // line 161
            echo "                                            
                                            ";
            // line 162
            if (($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "direction", array()) == "asc")) {
                // line 163
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 165
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 167
            echo "                                        ";
        } else {
            // line 168
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 170
        echo "                                    </th> 
                                <th class=\"text text-capitalize text-primary\"> ";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 175
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                <td  class=\"text text-capitalize text-danger text-center\" colspan=\"6\">
                                    
                                    <p  style=\"margin-top: 1%;\">
                                        <i class=\"fa fa-exclamation-triangle\"></i> <b>";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.list.noResultFound"), "html", null, true);
            echo "</b>
                                    </p>
                                 </td>
                                  
                                ";
        } else {
            // line 184
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["returnArticle"]) {
                // line 185
                echo "                                    <tr>
                                        <td>";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute($context["returnArticle"], "id", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute($context["returnArticle"], "observation", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 188
                if ($this->getAttribute($context["returnArticle"], "date", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["returnArticle"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>      
                                        <td>
                                            ";
                // line 190
                if ((null === $this->getAttribute($context["returnArticle"], "etat", array()))) {
                    // line 191
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etat"), "html", null, true);
                    echo "
                                            ";
                } elseif (($this->getAttribute(                // line 192
$context["returnArticle"], "etat", array()) == "a")) {
                    // line 193
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etatOption.accept"), "html", null, true);
                    echo "
                                            ";
                } elseif (($this->getAttribute(                // line 194
$context["returnArticle"], "etat", array()) == "r")) {
                    // line 195
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etatOption.refuse"), "html", null, true);
                    echo "                   
                                            ";
                } elseif (($this->getAttribute(                // line 196
$context["returnArticle"], "etat", array()) == "w")) {
                    // line 197
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.etatOption.wait"), "html", null, true);
                    echo "
                                            ";
                }
                // line 198
                echo "  
                                        </td>                                  
                                        <td>";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["returnArticle"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnArticle_subStore_edit", array("id" => $this->getAttribute($context["returnArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a ";
                // line 205
                echo (($this->getAttribute($context["returnArticle"], "etat", array())) ? ("disabled=\"\"") : (""));
                echo " href=\"#\" data-box=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["returnArticle"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                                <a href=\"";
                // line 206
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnArticle_subStore_show", array("id" => $this->getAttribute($context["returnArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success-alt\"><i class=\"ti ti-info\"></i></a>
                                                <a href=\"";
                // line 207
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnArticle_subStore_check", array("id" => $this->getAttribute($context["returnArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-orange-alt\"><i class=\"ti ti-check\"></i></a>
                                            </div>
                                        </td>                                    <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute($context["returnArticle"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 213
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 215
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 220
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnarticle_subStore_delete", array("id" => $this->getAttribute($context["returnArticle"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 222
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["returnArticle"], "id", array()), array(), "array"), 'widget');
                echo " 
                                                                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                        <i class=\"icon-trash\"></i>
                                                                         ";
                // line 225
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                    </button>
                                                                </form>
                                                                <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                    ";
                // line 229
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
            // line 238
            echo "                            ";
        }
        // line 239
        echo "                         </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 243
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_8c62d28c745f645ee3d9762a44ef327ea795e69daae17877a7674b13740e0a3f->leave($__internal_8c62d28c745f645ee3d9762a44ef327ea795e69daae17877a7674b13740e0a3f_prof);

    }

    // line 250
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a60f0c67d110cca170c70885c47acdd054368f769c41ce29ee3ddcc354c48353 = $this->env->getExtension("native_profiler");
        $__internal_a60f0c67d110cca170c70885c47acdd054368f769c41ce29ee3ddcc354c48353->enter($__internal_a60f0c67d110cca170c70885c47acdd054368f769c41ce29ee3ddcc354c48353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 251
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 252
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2956017_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2956017_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2956017_moment.min_1.js");
            // line 257
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
        
        $__internal_a60f0c67d110cca170c70885c47acdd054368f769c41ce29ee3ddcc354c48353->leave($__internal_a60f0c67d110cca170c70885c47acdd054368f769c41ce29ee3ddcc354c48353_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:returnarticle_SubStore:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 257,  540 => 252,  535 => 251,  529 => 250,  515 => 243,  509 => 239,  506 => 238,  491 => 229,  484 => 225,  478 => 222,  473 => 220,  465 => 215,  460 => 213,  454 => 210,  448 => 207,  444 => 206,  438 => 205,  434 => 204,  427 => 200,  423 => 198,  417 => 197,  415 => 196,  410 => 195,  408 => 194,  403 => 193,  401 => 192,  396 => 191,  394 => 190,  387 => 188,  383 => 187,  379 => 186,  376 => 185,  371 => 184,  363 => 179,  356 => 175,  349 => 171,  346 => 170,  342 => 168,  339 => 167,  335 => 165,  331 => 163,  329 => 162,  326 => 161,  324 => 160,  320 => 159,  316 => 157,  312 => 155,  309 => 154,  305 => 152,  301 => 150,  299 => 149,  296 => 148,  294 => 147,  290 => 146,  286 => 144,  282 => 142,  279 => 141,  275 => 139,  271 => 137,  269 => 136,  266 => 135,  264 => 134,  260 => 133,  256 => 131,  252 => 129,  249 => 128,  245 => 126,  241 => 124,  239 => 123,  236 => 122,  234 => 121,  230 => 120,  226 => 118,  222 => 116,  219 => 115,  215 => 113,  211 => 111,  209 => 110,  206 => 109,  204 => 108,  200 => 107,  187 => 97,  183 => 96,  172 => 88,  165 => 84,  158 => 80,  147 => 72,  131 => 58,  129 => 53,  123 => 49,  121 => 44,  114 => 39,  112 => 33,  107 => 30,  105 => 27,  96 => 21,  84 => 12,  80 => 11,  76 => 9,  70 => 8,  58 => 7,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('magazine_show',{ 'id' : store.id}) }}">*/
/*         {{ 'magazin.show.name'|trans }}*/
/*     </a> */
/* {% endblock %}*/
/*  {% block breadcrumbActive %}{{ 'returnarticle.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div class="col-md-12">*/
/*     <div class="pull-right">*/
/*         <a class="btn btn-success" href="{{ path('returnArticle_subStore_new', { 'id' : store.id}) }}">*/
/*                 <i class="fa fa-plus"></i> {{ 'returnarticle.new.submit'|trans }}*/
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
/*                     <h2><i class="fa fa-list"></i> {{ 'returnarticle.list.name'|trans }}</h2>*/
/*                     <div class="panel-ctrls">*/
/*                         <div id="example_filter" class="dataTables_filter pull-right">*/
/*                             <div class="btn-group">*/
/*                                 <a href="{{ app.request.uri }}" class="btn btn-warning-alt">*/
/*                                     <i class="ti ti-reload" aria-hidden="true"></i>*/
/*                                 </a>*/
/*                             */
/*                                 <a {{ padding|length == 0 ? 'disabled = "true"' : ""}} onclick="window.open(this.href); return false;" class="btn btn-info-alt">*/
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
/*                                             {% endif %}  */
/*                                         </td>                                  */
/*                                         <td>{{ returnArticle.user.username }}</td>*/
/*                                         <td>*/
/*                                             */
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('returnArticle_subStore_edit', { 'id': returnArticle.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                 <a {{ returnArticle.etat ? 'disabled=""' : "" }} href="#" data-box="#{{ returnArticle.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                                 <a href="{{ path('returnArticle_subStore_show', { 'id': returnArticle.id }) }}" class="btn btn-success-alt"><i class="ti ti-info"></i></a>*/
/*                                                 <a href="{{ path('returnArticle_subStore_check', { 'id': returnArticle.id }) }}" class="btn btn-orange-alt"><i class="ti ti-check"></i></a>*/
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
/*                                                                 <form action="{{ path('returnarticle_subStore_delete', { 'id': returnArticle.id }) }}" method="post">*/
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
