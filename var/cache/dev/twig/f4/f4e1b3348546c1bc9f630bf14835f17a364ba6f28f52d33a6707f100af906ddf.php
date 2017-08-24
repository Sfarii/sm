<?php

/* ISETSOMagazineBundle:orderarticle:index.html.twig */
class __TwigTemplate_053e625bd9cd66e4fccba3cb1f5c2f9517ec3579e01bf7fc6f5f0d4bbf3b38dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:orderarticle:index.html.twig", 1);
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
        $__internal_ff41b27fbb7ecc2f49287767b2c68b0e97164bc59f12cd1bad17967c8458538b = $this->env->getExtension("native_profiler");
        $__internal_ff41b27fbb7ecc2f49287767b2c68b0e97164bc59f12cd1bad17967c8458538b->enter($__internal_ff41b27fbb7ecc2f49287767b2c68b0e97164bc59f12cd1bad17967c8458538b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:orderarticle:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff41b27fbb7ecc2f49287767b2c68b0e97164bc59f12cd1bad17967c8458538b->leave($__internal_ff41b27fbb7ecc2f49287767b2c68b0e97164bc59f12cd1bad17967c8458538b_prof);

    }

    // line 2
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_43ec6dd42ec93ca53fde6f00c5ac86d4cf144be8dd35923d675cdfaa7d3e387f = $this->env->getExtension("native_profiler");
        $__internal_43ec6dd42ec93ca53fde6f00c5ac86d4cf144be8dd35923d675cdfaa7d3e387f->enter($__internal_43ec6dd42ec93ca53fde6f00c5ac86d4cf144be8dd35923d675cdfaa7d3e387f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("orderarticle.edit.name"), "html", null, true);
        
        $__internal_43ec6dd42ec93ca53fde6f00c5ac86d4cf144be8dd35923d675cdfaa7d3e387f->leave($__internal_43ec6dd42ec93ca53fde6f00c5ac86d4cf144be8dd35923d675cdfaa7d3e387f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bae5be57806a2291621e400f096b75f895cbf129bdf5f167e7babacdff6ac75 = $this->env->getExtension("native_profiler");
        $__internal_5bae5be57806a2291621e400f096b75f895cbf129bdf5f167e7babacdff6ac75->enter($__internal_5bae5be57806a2291621e400f096b75f895cbf129bdf5f167e7babacdff6ac75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"pull-right\">
        <a class=\"btn btn-success \" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("orderarticle_new");
        echo "\">
                <i class=\"fa fa-plus\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("orderarticle.new.submit"), "html", null, true);
        echo "
        </a>
    </div>
    <br><br></br>
<div data-widget-group=\"group1\">
    <div class=\"row\">
        <div class=\"pull-right col-md-5\">
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
            </div>
            <div class=\"col-md-12\">
            <div class=\"panel panel-default\" data-widget=\"{\"id\" : \"wiget1\"}\" data-widget='{\"draggable\": \"false\"}'>
                <div class=\"panel-heading\">
                    <h2><i class=\"fa fa-list\"></i> ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("orderarticle.list.name"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("orderarticle.list.resultFound"), "html", null, true);
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), $this->env->getExtension('translator')->trans("magazine.field.userName"), "u.username");
        echo "
                                        ";
        // line 142
        if ($this->getAttribute((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "isSorted", array(0 => "u.username"), "method")) {
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
                                    <th class=\"text text-capitalize text-primary\"> ";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.action"), "html", null, true);
        echo " </th>
                            </tr>
                        </thead>
                        <tbody>
                             ";
        // line 157
        if ((twig_length_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding"))) == 0)) {
            echo " 
                                    <td  class=\"text text-capitalize text-danger text-center\" colspan=\"6\">
                                        
                                        <p  style=\"margin-top: 1%;\">
                                            <i class=\"fa fa-exclamation-triangle\"></i> <b>";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("orderarticle.list.noResultFound"), "html", null, true);
            echo "</b>
                                        </p>
                                     </td>
                                    
                                ";
        } else {
            // line 166
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
            foreach ($context['_seq'] as $context["_key"] => $context["orderArticle"]) {
                // line 167
                echo "                                    <tr>
                                        <td>";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["orderArticle"], "id", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($context["orderArticle"], "observation", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 170
                if ($this->getAttribute($context["orderArticle"], "date", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["orderArticle"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>  
                                                                            
                                        <td>";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orderArticle"], "user", array()), "username", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orderarticle_edit", array("id" => $this->getAttribute($context["orderArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
                                                <a href=\"#\" data-box=\"#";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["orderArticle"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger-alt mb-control\"><i class=\"ti ti-trash\"></i></a>
                                                <a href=\"";
                // line 178
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orderarticle_show", array("id" => $this->getAttribute($context["orderArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success-alt\"><i class=\"ti ti-info\"></i></a>
                                            </div>
                                        </td>                                    
                                        <!-- MESSAGE BOX-->
                                            <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->getAttribute($context["orderArticle"], "id", array()), "html", null, true);
                echo "\">
                                                <div class=\"mb-container\">
                                                    <div class=\"mb-middle\">
                                                        <div class=\"mb-title\"><span class=\"ti ti-trash\"></span> ";
                // line 185
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("orderarticle.delete.name"), "html", null, true);
                echo " ?</div>
                                                        <div class=\"mb-content\">
                                                            <p>";
                // line 187
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("orderarticle.delete.message"), "html", null, true);
                echo "</p>                    
                                                            
                                                        </div>
                                                        <div class=\"mb-footer\">
                                                            <div class=\"pull-right\">
                                                                <form action=\"";
                // line 192
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orderarticle_delete", array("id" => $this->getAttribute($context["orderArticle"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                                    ";
                // line 194
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["orderArticle"], "id", array()), array(), "array"), 'widget');
                echo " 
                                                                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">
                                                                        <i class=\"icon-trash\"></i>
                                                                         ";
                // line 197
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("messageBox.yes"), "html", null, true);
                echo "
                                                                    </button>
                                                                </form>
                                                                <button class=\"btn btn-default btn-lg mb-control-close\">
                                                                    ";
                // line 201
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderArticle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "                            ";
        }
        // line 211
        echo "                         </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
        // line 215
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5bae5be57806a2291621e400f096b75f895cbf129bdf5f167e7babacdff6ac75->leave($__internal_5bae5be57806a2291621e400f096b75f895cbf129bdf5f167e7babacdff6ac75_prof);

    }

    // line 222
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_73f87996856c13c4d7b69aefe74228bee58526e37c50cdb5941d0bf939ea5c4c = $this->env->getExtension("native_profiler");
        $__internal_73f87996856c13c4d7b69aefe74228bee58526e37c50cdb5941d0bf939ea5c4c->enter($__internal_73f87996856c13c4d7b69aefe74228bee58526e37c50cdb5941d0bf939ea5c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 223
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 224
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2956017_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2956017_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2956017_moment.min_1.js");
            // line 229
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
        
        $__internal_73f87996856c13c4d7b69aefe74228bee58526e37c50cdb5941d0bf939ea5c4c->leave($__internal_73f87996856c13c4d7b69aefe74228bee58526e37c50cdb5941d0bf939ea5c4c_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:orderarticle:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 229,  452 => 224,  447 => 223,  441 => 222,  427 => 215,  421 => 211,  418 => 210,  403 => 201,  396 => 197,  390 => 194,  385 => 192,  377 => 187,  372 => 185,  366 => 182,  359 => 178,  355 => 177,  351 => 176,  344 => 172,  337 => 170,  333 => 169,  329 => 168,  326 => 167,  321 => 166,  313 => 161,  306 => 157,  299 => 153,  296 => 152,  292 => 150,  289 => 149,  285 => 147,  281 => 145,  279 => 144,  276 => 143,  274 => 142,  270 => 141,  266 => 139,  262 => 137,  259 => 136,  255 => 134,  251 => 132,  249 => 131,  246 => 130,  244 => 129,  240 => 128,  236 => 126,  232 => 124,  229 => 123,  225 => 121,  221 => 119,  219 => 118,  216 => 117,  214 => 116,  210 => 115,  205 => 112,  201 => 110,  198 => 109,  194 => 107,  190 => 105,  188 => 104,  185 => 103,  183 => 102,  179 => 101,  166 => 91,  162 => 90,  149 => 82,  142 => 78,  135 => 74,  125 => 67,  109 => 53,  107 => 48,  101 => 44,  99 => 39,  92 => 34,  90 => 28,  85 => 25,  83 => 22,  74 => 16,  62 => 7,  58 => 6,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*  {% block breadcrumbActive %}{{ 'orderarticle.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* */
/*     <div class="pull-right">*/
/*         <a class="btn btn-success " href="{{ path('orderarticle_new') }}">*/
/*                 <i class="fa fa-plus"></i> {{ 'orderarticle.new.submit'|trans }}*/
/*         </a>*/
/*     </div>*/
/*     <br><br></br>*/
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
/*                                 <a href="#" class="btn btn-info-alt">*/
/*                                     <i class="ti ti-printer"></i>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-12">*/
/*             <div class="panel panel-default" data-widget="{"id" : "wiget1"}" data-widget='{"draggable": "false"}'>*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="fa fa-list"></i> {{ 'orderarticle.list.name'|trans }}</h2>*/
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
/*                                {{ 'orderarticle.list.resultFound'|trans }}*/
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
/* */
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
/*                                     <th class="text text-capitalize text-primary"> {{ 'magazine.action'|trans }} </th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                              {% if padding|length == 0 %} */
/*                                     <td  class="text text-capitalize text-danger text-center" colspan="6">*/
/*                                         */
/*                                         <p  style="margin-top: 1%;">*/
/*                                             <i class="fa fa-exclamation-triangle"></i> <b>{{ 'orderarticle.list.noResultFound'|trans }}</b>*/
/*                                         </p>*/
/*                                      </td>*/
/*                                     */
/*                                 {% else %}*/
/*                                 {% for orderArticle in padding %}*/
/*                                     <tr>*/
/*                                         <td>{{ orderArticle.id }}</td>*/
/*                                         <td>{{ orderArticle.observation }}</td>*/
/*                                         <td>{% if orderArticle.date %}{{ orderArticle.date|date('Y-m-d H:i:s') }}{% endif %}</td>  */
/*                                                                             */
/*                                         <td>{{ orderArticle.user.username }}</td>*/
/*                                         <td>*/
/*                                             */
/*                                             <div class="btn-group">*/
/*                                                 <a href="{{ path('orderarticle_edit', { 'id': orderArticle.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*                                                 <a href="#" data-box="#{{ orderArticle.id }}" class="btn btn-danger-alt mb-control"><i class="ti ti-trash"></i></a>*/
/*                                                 <a href="{{ path('orderarticle_show', { 'id': orderArticle.id }) }}" class="btn btn-success-alt"><i class="ti ti-info"></i></a>*/
/*                                             </div>*/
/*                                         </td>                                    */
/*                                         <!-- MESSAGE BOX-->*/
/*                                             <div class="message-box animated fadeIn" data-sound="alert" id="{{ orderArticle.id }}">*/
/*                                                 <div class="mb-container">*/
/*                                                     <div class="mb-middle">*/
/*                                                         <div class="mb-title"><span class="ti ti-trash"></span> {{ 'orderarticle.delete.name'|trans }} ?</div>*/
/*                                                         <div class="mb-content">*/
/*                                                             <p>{{ 'orderarticle.delete.message'|trans }}</p>                    */
/*                                                             */
/*                                                         </div>*/
/*                                                         <div class="mb-footer">*/
/*                                                             <div class="pull-right">*/
/*                                                                 <form action="{{ path('orderarticle_delete', { 'id': orderArticle.id }) }}" method="post">*/
/*                                                                     <input type="hidden" name="_method" value="DELETE" />*/
/*                                                                     {{ form_widget(deleteForms[ orderArticle.id ]) }} */
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
