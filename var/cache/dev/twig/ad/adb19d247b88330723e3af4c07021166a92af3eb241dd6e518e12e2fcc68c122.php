<?php

/* ISETSOMagazineBundle:journalconsumable:show.html.twig */
class __TwigTemplate_35aac809e78c70147a9191297e868506dc27284a2a4200c2310ee757e206e122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:journalconsumable:show.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_7c157310c52adabd05cf6b83bc74931c13d1336d4096b37e49d36d87949bafbf = $this->env->getExtension("native_profiler");
        $__internal_7c157310c52adabd05cf6b83bc74931c13d1336d4096b37e49d36d87949bafbf->enter($__internal_7c157310c52adabd05cf6b83bc74931c13d1336d4096b37e49d36d87949bafbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:journalconsumable:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c157310c52adabd05cf6b83bc74931c13d1336d4096b37e49d36d87949bafbf->leave($__internal_7c157310c52adabd05cf6b83bc74931c13d1336d4096b37e49d36d87949bafbf_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b836613f6c7f168227b190d3af9724f136f789059613ba9fa393249d290877d3 = $this->env->getExtension("native_profiler");
        $__internal_b836613f6c7f168227b190d3af9724f136f789059613ba9fa393249d290877d3->enter($__internal_b836613f6c7f168227b190d3af9724f136f789059613ba9fa393249d290877d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7cfe8d1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7cfe8d1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/7cfe8d1_dataTables.bootstrap_1.css");
            // line 8
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "7cfe8d1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7cfe8d1_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/7cfe8d1_dataTables.themify_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "7cfe8d1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7cfe8d1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/7cfe8d1.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "    
";
        
        $__internal_b836613f6c7f168227b190d3af9724f136f789059613ba9fa393249d290877d3->leave($__internal_b836613f6c7f168227b190d3af9724f136f789059613ba9fa393249d290877d3_prof);

    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_faafce2e77b0a09eccad0a2d3fd76613b97ec40ccc22d1a322f4a49b6757c91e = $this->env->getExtension("native_profiler");
        $__internal_faafce2e77b0a09eccad0a2d3fd76613b97ec40ccc22d1a322f4a49b6757c91e->enter($__internal_faafce2e77b0a09eccad0a2d3fd76613b97ec40ccc22d1a322f4a49b6757c91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 13
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("journalconsumable_index");
        echo "\">
       ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_faafce2e77b0a09eccad0a2d3fd76613b97ec40ccc22d1a322f4a49b6757c91e->leave($__internal_faafce2e77b0a09eccad0a2d3fd76613b97ec40ccc22d1a322f4a49b6757c91e_prof);

    }

    // line 17
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_fb59d95fa31b1f0f7f2a50945bde3d5266c61f496871fcf14e64e32eacceaccc = $this->env->getExtension("native_profiler");
        $__internal_fb59d95fa31b1f0f7f2a50945bde3d5266c61f496871fcf14e64e32eacceaccc->enter($__internal_fb59d95fa31b1f0f7f2a50945bde3d5266c61f496871fcf14e64e32eacceaccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.show.name"), "html", null, true);
        
        $__internal_fb59d95fa31b1f0f7f2a50945bde3d5266c61f496871fcf14e64e32eacceaccc->leave($__internal_fb59d95fa31b1f0f7f2a50945bde3d5266c61f496871fcf14e64e32eacceaccc_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ba5375dc0dc4fc8619325b1f7cf6eca529a820780e93e4ec3ba52e6f8c7e038 = $this->env->getExtension("native_profiler");
        $__internal_8ba5375dc0dc4fc8619325b1f7cf6eca529a820780e93e4ec3ba52e6f8c7e038->enter($__internal_8ba5375dc0dc4fc8619325b1f7cf6eca529a820780e93e4ec3ba52e6f8c7e038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "<div class=\"col-sm-12\">
    <div class=\"btn-group\">
        <a name=\"print\" href=\"?print=true\" onclick=\"window.open(this.href); return false;\" class=\"btn btn-warning-alt\">
        <i class=\"ti ti-printer\"></i>
        </a>
    
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("journalconsumable_edit", array("id" => $this->getAttribute((isset($context["journalConsumable"]) ? $context["journalConsumable"] : $this->getContext($context, "journalConsumable")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
    </div>
    <hr>    
</div>
<div class=\"col-sm-6\">
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab-about\">
            <div class=\"panel panel-default\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                <div class=\"panel-heading\">
                    <h2>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.show.name"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    <div class=\"about-area\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <tbody>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.date"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 44
        if ($this->getAttribute((isset($context["journalConsumable"]) ? $context["journalConsumable"] : $this->getContext($context, "journalConsumable")), "dateEntre", array())) {
            // line 45
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["journalConsumable"]) ? $context["journalConsumable"] : $this->getContext($context, "journalConsumable")), "dateEntre", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                        ";
        }
        // line 47
        echo "                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.type"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["journalConsumable"]) ? $context["journalConsumable"] : $this->getContext($context, "journalConsumable")), "type", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.origin"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalConsumable"]) ? $context["journalConsumable"] : $this->getContext($context, "journalConsumable")), "origin", array()), "designation", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalConsumable"]) ? $context["journalConsumable"] : $this->getContext($context, "journalConsumable")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"col-sm-6\">
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab-about\">
            <div class=\"panel panel-default\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                <div class=\"panel-heading\">
                    <h2>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("provider.show.name"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    <div class=\"about-area\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                            <tbody>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.socialReason"), "html", null, true);
        echo "</th>
                                <td>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalConsumable"]) ? $context["journalConsumable"] : $this->getContext($context, "journalConsumable")), "provider", array()), "socialReason", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.phone"), "html", null, true);
        echo "</th>
                                <td>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalConsumable"]) ? $context["journalConsumable"] : $this->getContext($context, "journalConsumable")), "provider", array()), "phone", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.address"), "html", null, true);
        echo "</th>
                                <td>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalConsumable"]) ? $context["journalConsumable"] : $this->getContext($context, "journalConsumable")), "provider", array()), "address", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.fax"), "html", null, true);
        echo "</th>
                                <td>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalConsumable"]) ? $context["journalConsumable"] : $this->getContext($context, "journalConsumable")), "provider", array()), "fax", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.email"), "html", null, true);
        echo "</th>
                                <td>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalConsumable"]) ? $context["journalConsumable"] : $this->getContext($context, "journalConsumable")), "provider", array()), "email", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.contact"), "html", null, true);
        echo "</th>
                                <td>";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalConsumable"]) ? $context["journalConsumable"] : $this->getContext($context, "journalConsumable")), "provider", array()), "contact", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo "</th>
                                <td>";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["journalConsumable"]) ? $context["journalConsumable"] : $this->getContext($context, "journalConsumable")), "provider", array()), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                              </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"col-sm-12\">
    <div data-widget-group=\"group1\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2><i class=\"ti ti-pencil-alt\"></i> ";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls search\" ></div>
                </div>
                <div class=\"panel-editbox\" data-widget-controls=\"\"></div>
                <div class=\"panel-body  no-padding\">
                <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th class=\"text text-primary\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.price"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["journalConsumable"]) ? $context["journalConsumable"] : $this->getContext($context, "journalConsumable")), "supportingDocument", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["supportingDocument"]) {
            // line 144
            echo "                            <tr>
                                <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "inventoryNumber", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "price", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "quantity", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "unit", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "subFamily", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "subFamily", array()), "family", array()), "designation", array()), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supportingDocument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"panel-footer footer-dataTable\"></div>
        </div>
    </div>
</div>
";
        
        $__internal_8ba5375dc0dc4fc8619325b1f7cf6eca529a820780e93e4ec3ba52e6f8c7e038->leave($__internal_8ba5375dc0dc4fc8619325b1f7cf6eca529a820780e93e4ec3ba52e6f8c7e038_prof);

    }

    // line 162
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db3fa81b22f8ea71333226c51c0c3bbeea471e205296c1b37ec72c50ce799316 = $this->env->getExtension("native_profiler");
        $__internal_db3fa81b22f8ea71333226c51c0c3bbeea471e205296c1b37ec72c50ce799316->enter($__internal_db3fa81b22f8ea71333226c51c0c3bbeea471e205296c1b37ec72c50ce799316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 163
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 164
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b81ca42_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b81ca42_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b81ca42_jquery.dataTables_1.js");
            // line 169
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b81ca42_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b81ca42_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b81ca42_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b81ca42_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b81ca42_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b81ca42_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "b81ca42"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b81ca42") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b81ca42.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_db3fa81b22f8ea71333226c51c0c3bbeea471e205296c1b37ec72c50ce799316->leave($__internal_db3fa81b22f8ea71333226c51c0c3bbeea471e205296c1b37ec72c50ce799316_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:journalconsumable:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 169,  414 => 164,  409 => 163,  403 => 162,  389 => 154,  380 => 151,  376 => 150,  372 => 149,  368 => 148,  364 => 147,  360 => 146,  356 => 145,  353 => 144,  349 => 143,  341 => 138,  337 => 137,  333 => 136,  329 => 135,  325 => 134,  321 => 133,  317 => 132,  306 => 124,  288 => 109,  284 => 108,  278 => 105,  274 => 104,  268 => 101,  264 => 100,  258 => 97,  254 => 96,  248 => 93,  244 => 92,  238 => 89,  234 => 88,  228 => 85,  224 => 84,  213 => 76,  194 => 60,  190 => 59,  184 => 56,  180 => 55,  174 => 52,  170 => 51,  164 => 47,  158 => 45,  156 => 44,  151 => 42,  140 => 34,  128 => 25,  120 => 19,  114 => 18,  102 => 17,  92 => 14,  87 => 13,  81 => 12,  73 => 10,  53 => 8,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets */
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.css'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.themify.css'*/
/*         filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     */
/* {% endblock %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('journalconsumable_index') }}">*/
/*        {{ 'journalconsumable.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*      {% block breadcrumbActive %}{{ 'journalconsumable.show.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div class="col-sm-12">*/
/*     <div class="btn-group">*/
/*         <a name="print" href="?print=true" onclick="window.open(this.href); return false;" class="btn btn-warning-alt">*/
/*         <i class="ti ti-printer"></i>*/
/*         </a>*/
/*     */
/*         <a href="{{ path('journalconsumable_edit', { 'id': journalConsumable.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*     </div>*/
/*     <hr>    */
/* </div>*/
/* <div class="col-sm-6">*/
/*     <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab-about">*/
/*             <div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                 <div class="panel-heading">*/
/*                     <h2>{{ 'journalconsumable.show.name'|trans }}</h2>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="about-area">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table">*/
/*                                 <tbody>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.date'|trans }}</th>*/
/*                                     <td>*/
/*                                         {% if journalConsumable.dateEntre %}*/
/*                                             {{ journalConsumable.dateEntre|date('Y-m-d H:i:s') }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   */
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.type'|trans }}</th>*/
/*                                     <td>{{ journalConsumable.type }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.origin'|trans }}</th>*/
/*                                     <td>{{ journalConsumable.origin.designation }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.userName'|trans }}</th>*/
/*                                     <td>{{ journalConsumable.user.username }}</td>*/
/*                                   </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="col-sm-6">*/
/*     <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab-about">*/
/*             <div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                 <div class="panel-heading">*/
/*                     <h2>{{ 'provider.show.name'|trans }}</h2>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="about-area">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table">*/
/*                             <tbody>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.socialReason'|trans }}</th>*/
/*                                 <td>{{ journalConsumable.provider.socialReason }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.phone'|trans }}</th>*/
/*                                 <td>{{ journalConsumable.provider.phone }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.address'|trans }}</th>*/
/*                                 <td>{{ journalConsumable.provider.address }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.fax'|trans }}</th>*/
/*                                 <td>{{ journalConsumable.provider.fax }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.email'|trans }}</th>*/
/*                                 <td>{{ journalConsumable.provider.email }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.contact'|trans }}</th>*/
/*                                 <td>{{ journalConsumable.provider.contact }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.userName'|trans }}</th>*/
/*                                 <td>{{ journalConsumable.provider.user.username }}</td>*/
/*                               </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="col-sm-12">*/
/*     <div data-widget-group="group1">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="ti ti-pencil-alt"></i> {{ 'supportingdocument.list.name'|trans }}</h2>*/
/*                     <div class="panel-ctrls search" ></div>*/
/*                 </div>*/
/*                 <div class="panel-editbox" data-widget-controls=""></div>*/
/*                 <div class="panel-body  no-padding">*/
/*                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th class="text text-primary">{{ 'magazine.field.inventoryNumber'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.designation'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.price'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.quantity'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.unit'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.family'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.subFamily'|trans }}</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         */
/*                         {% for supportingDocument in journalConsumable.supportingDocument %}*/
/*                             <tr>*/
/*                                 <td>{{ supportingDocument.inventoryNumber }}</td>*/
/*                                 <td>{{ supportingDocument.article.designation }}</td>*/
/*                                 <td>{{ supportingDocument.price }}</td>*/
/*                                 <td>{{ supportingDocument.quantity }}</td>*/
/*                                 <td>{{ supportingDocument.article.unit.designation }}</td>*/
/*                                 <td>{{ supportingDocument.article.subFamily.designation }}</td>*/
/*                                 <td>{{ supportingDocument.article.subFamily.family.designation }}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <div class="panel-footer footer-dataTable"></div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
