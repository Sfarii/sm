<?php

/* ISETSOMagazineBundle:journaldurable:show.html.twig */
class __TwigTemplate_999525392b9264d734ea4013a67c0e97e70175eabffc514b25575a17894e6b33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:journaldurable:show.html.twig", 1);
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
        $__internal_1ac858844a4be3f88e7856a70d6f42792de0a5aa0baf86c525c9becc8e2e1ca4 = $this->env->getExtension("native_profiler");
        $__internal_1ac858844a4be3f88e7856a70d6f42792de0a5aa0baf86c525c9becc8e2e1ca4->enter($__internal_1ac858844a4be3f88e7856a70d6f42792de0a5aa0baf86c525c9becc8e2e1ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:journaldurable:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ac858844a4be3f88e7856a70d6f42792de0a5aa0baf86c525c9becc8e2e1ca4->leave($__internal_1ac858844a4be3f88e7856a70d6f42792de0a5aa0baf86c525c9becc8e2e1ca4_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50b6dc6473d0a1cf46e62ef772d9e479304de23d961880ba535a54fb273cd108 = $this->env->getExtension("native_profiler");
        $__internal_50b6dc6473d0a1cf46e62ef772d9e479304de23d961880ba535a54fb273cd108->enter($__internal_50b6dc6473d0a1cf46e62ef772d9e479304de23d961880ba535a54fb273cd108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_50b6dc6473d0a1cf46e62ef772d9e479304de23d961880ba535a54fb273cd108->leave($__internal_50b6dc6473d0a1cf46e62ef772d9e479304de23d961880ba535a54fb273cd108_prof);

    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d8140f6d3d2b1d69c00ecbf364fb559b446107cf81d1f72d1b5688728c9e9c36 = $this->env->getExtension("native_profiler");
        $__internal_d8140f6d3d2b1d69c00ecbf364fb559b446107cf81d1f72d1b5688728c9e9c36->enter($__internal_d8140f6d3d2b1d69c00ecbf364fb559b446107cf81d1f72d1b5688728c9e9c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 13
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("journaldurable_index");
        echo "\">
       ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journaldurable.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_d8140f6d3d2b1d69c00ecbf364fb559b446107cf81d1f72d1b5688728c9e9c36->leave($__internal_d8140f6d3d2b1d69c00ecbf364fb559b446107cf81d1f72d1b5688728c9e9c36_prof);

    }

    // line 17
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_603d9c14668d82514eb1173c13773124c20a1557dbe79a10eb3fc4f7d96c12aa = $this->env->getExtension("native_profiler");
        $__internal_603d9c14668d82514eb1173c13773124c20a1557dbe79a10eb3fc4f7d96c12aa->enter($__internal_603d9c14668d82514eb1173c13773124c20a1557dbe79a10eb3fc4f7d96c12aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 18
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journaldurable.show.name"), "html", null, true);
        echo "
";
        
        $__internal_603d9c14668d82514eb1173c13773124c20a1557dbe79a10eb3fc4f7d96c12aa->leave($__internal_603d9c14668d82514eb1173c13773124c20a1557dbe79a10eb3fc4f7d96c12aa_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_64bc80eeb68da68298fe3f6cf4b6d18b3b03d063d88c8fd97376bc0b850b758e = $this->env->getExtension("native_profiler");
        $__internal_64bc80eeb68da68298fe3f6cf4b6d18b3b03d063d88c8fd97376bc0b850b758e->enter($__internal_64bc80eeb68da68298fe3f6cf4b6d18b3b03d063d88c8fd97376bc0b850b758e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "<div class=\"col-sm-12\">
    <div class=\"btn-group\">
        <a name=\"print\" href=\"?print=true\" onclick=\"window.open(this.href); return false;\" class=\"btn btn-warning-alt\">
        <i class=\"ti ti-printer\"></i>
        </a>
    
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("journaldurable_edit", array("id" => $this->getAttribute((isset($context["journalDurable"]) ? $context["journalDurable"] : $this->getContext($context, "journalDurable")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
    </div>
    <hr>    
</div>

<div class=\"col-sm-6\">
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab-about\">
            <div class=\"panel panel-info\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                <div class=\"panel-heading\">
                    <h2>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journaldurable.show.name"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    <div class=\"about-area\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <tbody>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.date"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 47
        if ($this->getAttribute((isset($context["journalDurable"]) ? $context["journalDurable"] : $this->getContext($context, "journalDurable")), "dateEntre", array())) {
            // line 48
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["journalDurable"]) ? $context["journalDurable"] : $this->getContext($context, "journalDurable")), "dateEntre", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                        ";
        }
        // line 50
        echo "                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.type"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["journalDurable"]) ? $context["journalDurable"] : $this->getContext($context, "journalDurable")), "type", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.origin"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalDurable"]) ? $context["journalDurable"] : $this->getContext($context, "journalDurable")), "origin", array()), "designation", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalDurable"]) ? $context["journalDurable"] : $this->getContext($context, "journalDurable")), "user", array()), "username", array()), "html", null, true);
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
            <div class=\"panel panel-info\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                <div class=\"panel-heading\">
                    <h2>";
        // line 80
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
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.socialReason"), "html", null, true);
        echo "</th>
                                <td>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalDurable"]) ? $context["journalDurable"] : $this->getContext($context, "journalDurable")), "provider", array()), "socialReason", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.phone"), "html", null, true);
        echo "</th>
                                <td>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalDurable"]) ? $context["journalDurable"] : $this->getContext($context, "journalDurable")), "provider", array()), "phone", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.address"), "html", null, true);
        echo "</th>
                                <td>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalDurable"]) ? $context["journalDurable"] : $this->getContext($context, "journalDurable")), "provider", array()), "address", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.fax"), "html", null, true);
        echo "</th>
                                <td>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalDurable"]) ? $context["journalDurable"] : $this->getContext($context, "journalDurable")), "provider", array()), "fax", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.email"), "html", null, true);
        echo "</th>
                                <td>";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalDurable"]) ? $context["journalDurable"] : $this->getContext($context, "journalDurable")), "provider", array()), "email", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.contact"), "html", null, true);
        echo "</th>
                                <td>";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journalDurable"]) ? $context["journalDurable"] : $this->getContext($context, "journalDurable")), "provider", array()), "contact", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo "</th>
                                <td>";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["journalDurable"]) ? $context["journalDurable"] : $this->getContext($context, "journalDurable")), "provider", array()), "user", array()), "username", array()), "html", null, true);
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
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("supportingdocument.list.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls search\" ></div>
                </div>
                <div class=\"panel-editbox\" data-widget-controls=\"\"></div>
                <div class=\"panel-body\">
                <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th class=\"text text-primary\">";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.price"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["journalDurable"]) ? $context["journalDurable"] : $this->getContext($context, "journalDurable")), "supportingDocument", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["supportingDocument"]) {
            // line 148
            echo "                            <tr>
                                <td>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "inventoryNumber", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "price", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["supportingDocument"], "quantity", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "unit", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "subFamily", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["supportingDocument"], "article", array()), "subFamily", array()), "family", array()), "designation", array()), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supportingDocument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"panel-footer footer-dataTable\"></div>
        </div>
    </div>
</div>

";
        
        $__internal_64bc80eeb68da68298fe3f6cf4b6d18b3b03d063d88c8fd97376bc0b850b758e->leave($__internal_64bc80eeb68da68298fe3f6cf4b6d18b3b03d063d88c8fd97376bc0b850b758e_prof);

    }

    // line 167
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02aca2806036dba903a9c0eb09aafd6012ef57e7617958311223af1a34a6e614 = $this->env->getExtension("native_profiler");
        $__internal_02aca2806036dba903a9c0eb09aafd6012ef57e7617958311223af1a34a6e614->enter($__internal_02aca2806036dba903a9c0eb09aafd6012ef57e7617958311223af1a34a6e614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 168
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 169
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b81ca42_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b81ca42_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b81ca42_jquery.dataTables_1.js");
            // line 174
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
        
        $__internal_02aca2806036dba903a9c0eb09aafd6012ef57e7617958311223af1a34a6e614->leave($__internal_02aca2806036dba903a9c0eb09aafd6012ef57e7617958311223af1a34a6e614_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:journaldurable:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 174,  421 => 169,  416 => 168,  410 => 167,  395 => 158,  386 => 155,  382 => 154,  378 => 153,  374 => 152,  370 => 151,  366 => 150,  362 => 149,  359 => 148,  355 => 147,  347 => 142,  343 => 141,  339 => 140,  335 => 139,  331 => 138,  327 => 137,  323 => 136,  312 => 128,  294 => 113,  290 => 112,  284 => 109,  280 => 108,  274 => 105,  270 => 104,  264 => 101,  260 => 100,  254 => 97,  250 => 96,  244 => 93,  240 => 92,  234 => 89,  230 => 88,  219 => 80,  199 => 63,  195 => 62,  189 => 59,  185 => 58,  179 => 55,  175 => 54,  169 => 50,  163 => 48,  161 => 47,  156 => 45,  145 => 37,  132 => 27,  124 => 21,  118 => 20,  108 => 18,  102 => 17,  92 => 14,  87 => 13,  81 => 12,  73 => 10,  53 => 8,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
/*     <a href="{{ path('journaldurable_index') }}">*/
/*        {{ 'journaldurable.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'journaldurable.show.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="col-sm-12">*/
/*     <div class="btn-group">*/
/*         <a name="print" href="?print=true" onclick="window.open(this.href); return false;" class="btn btn-warning-alt">*/
/*         <i class="ti ti-printer"></i>*/
/*         </a>*/
/*     */
/*         <a href="{{ path('journaldurable_edit', { 'id': journalDurable.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*     </div>*/
/*     <hr>    */
/* </div>*/
/* */
/* <div class="col-sm-6">*/
/*     <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab-about">*/
/*             <div class="panel panel-info" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                 <div class="panel-heading">*/
/*                     <h2>{{ 'journaldurable.show.name'|trans }}</h2>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="about-area">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table">*/
/*                                 <tbody>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.date'|trans }}</th>*/
/*                                     <td>*/
/*                                         {% if journalDurable.dateEntre %}*/
/*                                             {{ journalDurable.dateEntre|date('Y-m-d H:i:s') }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   */
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.type'|trans }}</th>*/
/*                                     <td>{{ journalDurable.type }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.origin'|trans }}</th>*/
/*                                     <td>{{ journalDurable.origin.designation }}</td>*/
/*                                   </tr>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.userName'|trans }}</th>*/
/*                                     <td>{{ journalDurable.user.username }}</td>*/
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
/* */
/* <div class="col-sm-6">*/
/*     <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab-about">*/
/*             <div class="panel panel-info" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
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
/*                                 <td>{{ journalDurable.provider.socialReason }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.phone'|trans }}</th>*/
/*                                 <td>{{ journalDurable.provider.phone }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.address'|trans }}</th>*/
/*                                 <td>{{ journalDurable.provider.address }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.fax'|trans }}</th>*/
/*                                 <td>{{ journalDurable.provider.fax }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.email'|trans }}</th>*/
/*                                 <td>{{ journalDurable.provider.email }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.contact'|trans }}</th>*/
/*                                 <td>{{ journalDurable.provider.contact }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.userName'|trans }}</th>*/
/*                                 <td>{{ journalDurable.provider.user.username }}</td>*/
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
/*                 <div class="panel-body">*/
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
/*                         {% for supportingDocument in journalDurable.supportingDocument %}*/
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
/* */
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
