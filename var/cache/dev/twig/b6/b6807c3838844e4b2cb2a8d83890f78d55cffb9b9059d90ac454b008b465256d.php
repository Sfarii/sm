<?php

/* ISETSOMagazineBundle:magazine:show.html.twig */
class __TwigTemplate_bd4fdbdb44774400f86286042357ec7c09512015b4bafdc44150ff93f96f23d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:magazine:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31d0b20d22b4122b64aafb6426b38451cf667ff6bbd7c22737ea8ed0df199ba4 = $this->env->getExtension("native_profiler");
        $__internal_31d0b20d22b4122b64aafb6426b38451cf667ff6bbd7c22737ea8ed0df199ba4->enter($__internal_31d0b20d22b4122b64aafb6426b38451cf667ff6bbd7c22737ea8ed0df199ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:magazine:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31d0b20d22b4122b64aafb6426b38451cf667ff6bbd7c22737ea8ed0df199ba4->leave($__internal_31d0b20d22b4122b64aafb6426b38451cf667ff6bbd7c22737ea8ed0df199ba4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c95d7c3f021519088e977e7f4652eecf1e96db387b7042fe4dbb605433441778 = $this->env->getExtension("native_profiler");
        $__internal_c95d7c3f021519088e977e7f4652eecf1e96db387b7042fe4dbb605433441778->enter($__internal_c95d7c3f021519088e977e7f4652eecf1e96db387b7042fe4dbb605433441778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-md-12\">
    <div class=\"pull-right\">
        <a class=\"btn btn-info\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_magazinedischarge_index", array("id" => $this->getAttribute((isset($context["magazine_info"]) ? $context["magazine_info"] : $this->getContext($context, "magazine_info")), "id", array()))), "html", null, true);
        echo "\">
            <i class=\"fa fa-list\"></i>  ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.list.name"), "html", null, true);
        echo "
        </a> 
        <a class=\"btn btn-warning\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnarticle_subStore_index", array("id" => $this->getAttribute((isset($context["magazine_info"]) ? $context["magazine_info"] : $this->getContext($context, "magazine_info")), "id", array()))), "html", null, true);
        echo "\">
            <i class=\"fa fa-list\"></i>  ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.list.name"), "html", null, true);
        echo "
        </a>
        <a class=\"btn btn-success\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magazine_magazinedischarge_new", array("id" => $this->getAttribute((isset($context["magazine_info"]) ? $context["magazine_info"] : $this->getContext($context, "magazine_info")), "id", array()))), "html", null, true);
        echo "\">
            <i class=\"fa fa-plus\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.new.submit"), "html", null, true);
        echo "
        </a> 
        
        <hr>  
    </div>
</div>   
<div class=\"col-md-6\">
    <div class=\"tab-content\">
        <div class=\"panel panel-default\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
            <div class=\"panel-heading\">
                <h2>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inCharge"), "html", null, true);
        echo "</h2>
            </div>
            <div class=\"panel-body no-magazine\">
               
                <div class=\"table-responsive\">
                    <table class=\"table table-striped table-bordered\">
                        <thead>
                            <th class=\"text text-primary\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                        </thead>
                        <tbody>
                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["magazine_info"]) ? $context["magazine_info"] : $this->getContext($context, "magazine_info")), "inCharge", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 35
            echo "                                <tr>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"col-md-6\">
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab-about\">
            <div class=\"panel panel-default\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                <div class=\"panel-heading\">
                    <h2>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    <div class=\"about-area\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                            <tbody>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["magazine_info"]) ? $context["magazine_info"] : $this->getContext($context, "magazine_info")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["magazine_info"]) ? $context["magazine_info"] : $this->getContext($context, "magazine_info")), "user", array()), "email", array()), "html", null, true);
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

<div class=\"col-md-12\">
    <div data-widget-group=\"group1\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h2><i class=\"fa fa-list\"></i> ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazin.list.article"), "html", null, true);
        echo "</h2>
                        <div class=\"panel-ctrls\">
                            <div id=\"example_filter\" class=\"dataTables_filter pull-right\">
                                 ";
        // line 87
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-inline")));
        // line 90
        echo "

                                    <div class=\"input-group\">
                                         ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "form-control ", "placeholder" => $this->env->getExtension('translator')->trans("family.list.search"))));
        // line 99
        echo "
                                    </div>
                                    <div class=\"input-group\">
                                        <button type=\"submit\" class=\"btn btn-primary-alt\"><i class=\"ti ti-search\"></i></button>
                                    </div>
                                 ";
        // line 104
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                            </div>
                            <i class=\"separator\"></i>
                            <div class=\"panel-heading pull-left\">
                                <label class=\"panel-ctrls-center\">
                                   ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "getTotalItemCount", array()), "html", null, true);
        echo "
                                   ";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazin.list.resultFound"), "html", null, true);
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
        // line 120
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "#", "article_id");
        echo "
                                            ";
        // line 121
        if ($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "isSorted", array(0 => "article_id"), "method")) {
            // line 122
            echo "                                                
                                                ";
            // line 123
            if (($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "direction", array()) == "asc")) {
                // line 124
                echo "                                                    <span class='ti ti-angle-up pull-right'></span>
                                                ";
            } else {
                // line 126
                echo "                                                    <span class='ti ti-angle-down pull-right'></span>
                                                ";
            }
            // line 128
            echo "                                            ";
        } else {
            // line 129
            echo "                                                <i class='ti ti-more pull-right'></i>
                                            ";
        }
        // line 131
        echo "                                        </th>
                                        <th class=\"text text-capitalize\">
                                            ";
        // line 133
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), $this->env->getExtension('translator')->trans("magazine.field.designation"), "article_name");
        echo "
                                            ";
        // line 134
        if ($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "isSorted", array(0 => "article_name"), "method")) {
            // line 135
            echo "                                                
                                                ";
            // line 136
            if (($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "direction", array()) == "asc")) {
                // line 137
                echo "                                                    <span class='ti ti-angle-up pull-right'></span>
                                                ";
            } else {
                // line 139
                echo "                                                    <span class='ti ti-angle-down pull-right'></span>
                                                ";
            }
            // line 141
            echo "                                            ";
        } else {
            // line 142
            echo "                                                <i class='ti ti-more pull-right'></i>
                                            ";
        }
        // line 144
        echo "                                        </th>
                                        <th class=\"text text-capitalize\">
                                        ";
        // line 146
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), $this->env->getExtension('translator')->trans("magazine.field.input"), "qte");
        echo "
                                        ";
        // line 147
        if ($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "isSorted", array(0 => "qte"), "method")) {
            // line 148
            echo "                                            
                                            ";
            // line 149
            if (($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "direction", array()) == "asc")) {
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), $this->env->getExtension('translator')->trans("magazine.field.discharge"), "discharge");
        echo "
                                        ";
        // line 160
        if ($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "isSorted", array(0 => "discharge"), "method")) {
            // line 161
            echo "                                            
                                            ";
            // line 162
            if (($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "direction", array()) == "asc")) {
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
                                    <th class=\"text text-capitalize\">
                                        ";
        // line 172
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), $this->env->getExtension('translator')->trans("magazine.field.return"), "returned");
        echo "
                                        ";
        // line 173
        if ($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "isSorted", array(0 => "returned"), "method")) {
            // line 174
            echo "                                            
                                            ";
            // line 175
            if (($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "direction", array()) == "asc")) {
                // line 176
                echo "                                                <span class='ti ti-angle-up pull-right'></span>
                                            ";
            } else {
                // line 178
                echo "                                                <span class='ti ti-angle-down pull-right'></span>
                                            ";
            }
            // line 180
            echo "                                        ";
        } else {
            // line 181
            echo "                                            <i class='ti ti-more pull-right'></i>
                                        ";
        }
        // line 183
        echo "                                    </th> 
                                        <th class=\"text text-capitalize\">
                                            ";
        // line 185
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), $this->env->getExtension('translator')->trans("magazine.field.unit"), "unit");
        echo "
                                            ";
        // line 186
        if ($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "isSorted", array(0 => "unit"), "method")) {
            // line 187
            echo "                                                
                                                ";
            // line 188
            if (($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "direction", array()) == "asc")) {
                // line 189
                echo "                                                    <span class='ti ti-angle-up pull-right'></span>
                                                ";
            } else {
                // line 191
                echo "                                                    <span class='ti ti-angle-down pull-right'></span>
                                                ";
            }
            // line 193
            echo "                                            ";
        } else {
            // line 194
            echo "                                                <i class='ti ti-more pull-right'></i>
                                            ";
        }
        // line 196
        echo "                                        </th>
                                        
                                    
                                </tr>
                            </thead>
                            <tbody>
                                    ";
        // line 202
        if ((twig_length_filter($this->env, (isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine"))) == 0)) {
            echo " 
                                        <td  class=\"text text-capitalize text-danger text-center\" colspan=\"4\">
                                            <p  style=\"margin-top: 1%;\">
                                            <i class=\"fa fa-exclamation-triangle\"></i> <b>";
            // line 205
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.list.noResultFound"), "html", null, true);
            echo "</b>
                                            </p>
                                        </td>
                                    ";
        } else {
            // line 209
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["magazine"]);
            foreach ($context['_seq'] as $context["_key"] => $context["magazine"]) {
                // line 210
                echo "                                            <tr>
                                                <td>";
                // line 211
                echo twig_escape_filter($this->env, $this->getAttribute($context["magazine"], "id_article", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute($context["magazine"], "article_name", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($context["magazine"], "qte", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 214
                echo twig_escape_filter($this->env, $this->getAttribute($context["magazine"], "discharge", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($context["magazine"], "returned", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute($context["magazine"], "unit", array()), "html", null, true);
                echo "</td>
                                                
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['magazine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "                                    ";
        }
        // line 221
        echo "                             </tbody>
                        </table>
                    </div>
                    <div class=\"panel-footer\">
                        ";
        // line 225
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_c95d7c3f021519088e977e7f4652eecf1e96db387b7042fe4dbb605433441778->leave($__internal_c95d7c3f021519088e977e7f4652eecf1e96db387b7042fe4dbb605433441778_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:magazine:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 225,  465 => 221,  462 => 220,  452 => 216,  448 => 215,  444 => 214,  440 => 213,  436 => 212,  432 => 211,  429 => 210,  424 => 209,  417 => 205,  411 => 202,  403 => 196,  399 => 194,  396 => 193,  392 => 191,  388 => 189,  386 => 188,  383 => 187,  381 => 186,  377 => 185,  373 => 183,  369 => 181,  366 => 180,  362 => 178,  358 => 176,  356 => 175,  353 => 174,  351 => 173,  347 => 172,  343 => 170,  339 => 168,  336 => 167,  332 => 165,  328 => 163,  326 => 162,  323 => 161,  321 => 160,  317 => 159,  313 => 157,  309 => 155,  306 => 154,  302 => 152,  298 => 150,  296 => 149,  293 => 148,  291 => 147,  287 => 146,  283 => 144,  279 => 142,  276 => 141,  272 => 139,  268 => 137,  266 => 136,  263 => 135,  261 => 134,  257 => 133,  253 => 131,  249 => 129,  246 => 128,  242 => 126,  238 => 124,  236 => 123,  233 => 122,  231 => 121,  227 => 120,  214 => 110,  210 => 109,  202 => 104,  195 => 99,  193 => 93,  188 => 90,  186 => 87,  180 => 84,  158 => 65,  154 => 64,  148 => 61,  144 => 60,  133 => 52,  119 => 40,  110 => 37,  106 => 36,  103 => 35,  99 => 34,  93 => 31,  89 => 30,  79 => 23,  66 => 13,  62 => 12,  57 => 10,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="col-md-12">*/
/*     <div class="pull-right">*/
/*         <a class="btn btn-info" href="{{ path('magazine_magazinedischarge_index',{ 'id' : magazine_info.id}) }}">*/
/*             <i class="fa fa-list"></i>  {{ 'dischargearticle.list.name'|trans }}*/
/*         </a> */
/*         <a class="btn btn-warning" href="{{ path('returnarticle_subStore_index',{ 'id' : magazine_info.id}) }}">*/
/*             <i class="fa fa-list"></i>  {{ 'returnarticle.list.name'|trans }}*/
/*         </a>*/
/*         <a class="btn btn-success" href="{{ path('magazine_magazinedischarge_new',{ 'id' : magazine_info.id}) }}">*/
/*             <i class="fa fa-plus"></i> {{ 'dischargearticle.new.submit'|trans }}*/
/*         </a> */
/*         */
/*         <hr>  */
/*     </div>*/
/* </div>   */
/* <div class="col-md-6">*/
/*     <div class="tab-content">*/
/*         <div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*             <div class="panel-heading">*/
/*                 <h2>{{ 'magazine.field.inCharge'|trans }}</h2>*/
/*             </div>*/
/*             <div class="panel-body no-magazine">*/
/*                */
/*                 <div class="table-responsive">*/
/*                     <table class="table table-striped table-bordered">*/
/*                         <thead>*/
/*                             <th class="text text-primary">{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}</th>*/
/*                             <th class="text text-primary">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}</th>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for user in magazine_info.inCharge %}*/
/*                                 <tr>*/
/*                                     <td>{{ user.username }}</td>*/
/*                                     <td>{{ user.email }}</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="col-md-6">*/
/*     <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab-about">*/
/*             <div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                 <div class="panel-heading">*/
/*                     <h2>{{ 'magazine.field.userName'|trans }}</h2>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="about-area">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table">*/
/*                             <tbody>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                 <td>{{ magazine_info.user.username }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                 <td>{{ magazine_info.user.email }}</td>*/
/*                               </tr>*/
/*                               */
/*                             </tbody>*/
/*                         </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="col-md-12">*/
/*     <div data-widget-group="group1">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h2><i class="fa fa-list"></i> {{ 'magazin.list.article'|trans }}</h2>*/
/*                         <div class="panel-ctrls">*/
/*                             <div id="example_filter" class="dataTables_filter pull-right">*/
/*                                  {{ form_start(form ,{*/
/*                                     'attr' : { 'class' : 'form-inline' }*/
/*                                     */
/*                                 }) }}*/
/* */
/*                                     <div class="input-group">*/
/*                                          {{ form_widget(form.search,{*/
/*                                             'attr' : {*/
/*                                                 'class' : 'form-control ' ,*/
/*                                                 'placeholder' : 'family.list.search'|trans*/
/*                                             } */
/*                                             */
/*                                         }) }}*/
/*                                     </div>*/
/*                                     <div class="input-group">*/
/*                                         <button type="submit" class="btn btn-primary-alt"><i class="ti ti-search"></i></button>*/
/*                                     </div>*/
/*                                  {{ form_end(form) }}*/
/*                             </div>*/
/*                             <i class="separator"></i>*/
/*                             <div class="panel-heading pull-left">*/
/*                                 <label class="panel-ctrls-center">*/
/*                                    {{ magazine.getTotalItemCount }}*/
/*                                    {{ 'magazin.list.resultFound'|trans }}*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel-body no-padding">*/
/*                         <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                         <th class="text text-capitalize">*/
/*                                             {{ knp_pagination_sortable(magazine, "#" , 'article_id') }}*/
/*                                             {% if magazine.isSorted('article_id') %}*/
/*                                                 */
/*                                                 {% if  magazine.direction == 'asc' %}*/
/*                                                     <span class='ti ti-angle-up pull-right'></span>*/
/*                                                 {% else %}*/
/*                                                     <span class='ti ti-angle-down pull-right'></span>*/
/*                                                 {% endif %}*/
/*                                             {% else %}*/
/*                                                 <i class='ti ti-more pull-right'></i>*/
/*                                             {% endif %}*/
/*                                         </th>*/
/*                                         <th class="text text-capitalize">*/
/*                                             {{ knp_pagination_sortable(magazine, 'magazine.field.designation'|trans , 'article_name') }}*/
/*                                             {% if magazine.isSorted('article_name') %}*/
/*                                                 */
/*                                                 {% if  magazine.direction == 'asc' %}*/
/*                                                     <span class='ti ti-angle-up pull-right'></span>*/
/*                                                 {% else %}*/
/*                                                     <span class='ti ti-angle-down pull-right'></span>*/
/*                                                 {% endif %}*/
/*                                             {% else %}*/
/*                                                 <i class='ti ti-more pull-right'></i>*/
/*                                             {% endif %}*/
/*                                         </th>*/
/*                                         <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(magazine, 'magazine.field.input'|trans , 'qte') }}*/
/*                                         {% if magazine.isSorted('qte') %}*/
/*                                             */
/*                                             {% if  magazine.direction == 'asc' %}*/
/*                                                 <span class='ti ti-angle-up pull-right'></span>*/
/*                                             {% else %}*/
/*                                                 <span class='ti ti-angle-down pull-right'></span>*/
/*                                             {% endif %}*/
/*                                         {% else %}*/
/*                                             <i class='ti ti-more pull-right'></i>*/
/*                                         {% endif %}*/
/*                                     </th> */
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(magazine, 'magazine.field.discharge'|trans , 'discharge') }}*/
/*                                         {% if magazine.isSorted('discharge') %}*/
/*                                             */
/*                                             {% if  magazine.direction == 'asc' %}*/
/*                                                 <span class='ti ti-angle-up pull-right'></span>*/
/*                                             {% else %}*/
/*                                                 <span class='ti ti-angle-down pull-right'></span>*/
/*                                             {% endif %}*/
/*                                         {% else %}*/
/*                                             <i class='ti ti-more pull-right'></i>*/
/*                                         {% endif %}*/
/*                                     </th> */
/*                                     <th class="text text-capitalize">*/
/*                                         {{ knp_pagination_sortable(magazine, 'magazine.field.return'|trans , 'returned') }}*/
/*                                         {% if magazine.isSorted('returned') %}*/
/*                                             */
/*                                             {% if  magazine.direction == 'asc' %}*/
/*                                                 <span class='ti ti-angle-up pull-right'></span>*/
/*                                             {% else %}*/
/*                                                 <span class='ti ti-angle-down pull-right'></span>*/
/*                                             {% endif %}*/
/*                                         {% else %}*/
/*                                             <i class='ti ti-more pull-right'></i>*/
/*                                         {% endif %}*/
/*                                     </th> */
/*                                         <th class="text text-capitalize">*/
/*                                             {{ knp_pagination_sortable(magazine, 'magazine.field.unit'|trans , 'unit') }}*/
/*                                             {% if magazine.isSorted('unit') %}*/
/*                                                 */
/*                                                 {% if  magazine.direction == 'asc' %}*/
/*                                                     <span class='ti ti-angle-up pull-right'></span>*/
/*                                                 {% else %}*/
/*                                                     <span class='ti ti-angle-down pull-right'></span>*/
/*                                                 {% endif %}*/
/*                                             {% else %}*/
/*                                                 <i class='ti ti-more pull-right'></i>*/
/*                                             {% endif %}*/
/*                                         </th>*/
/*                                         */
/*                                     */
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                     {% if magazine|length == 0 %} */
/*                                         <td  class="text text-capitalize text-danger text-center" colspan="4">*/
/*                                             <p  style="margin-top: 1%;">*/
/*                                             <i class="fa fa-exclamation-triangle"></i> <b>{{ 'magazine.list.noResultFound'|trans }}</b>*/
/*                                             </p>*/
/*                                         </td>*/
/*                                     {% else %}*/
/*                                         {% for magazine in magazine %}*/
/*                                             <tr>*/
/*                                                 <td>{{ magazine.id_article }}</td>*/
/*                                                 <td>{{ magazine.article_name }}</td>*/
/*                                                 <td>{{ magazine.qte }}</td>*/
/*                                                 <td>{{ magazine.discharge }}</td>*/
/*                                                 <td>{{ magazine.returned }}</td>*/
/*                                                 <td>{{ magazine.unit }}</td>*/
/*                                                 */
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                     {% endif %}*/
/*                              </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                     <div class="panel-footer">*/
/*                         {{ knp_pagination_render(magazine) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
