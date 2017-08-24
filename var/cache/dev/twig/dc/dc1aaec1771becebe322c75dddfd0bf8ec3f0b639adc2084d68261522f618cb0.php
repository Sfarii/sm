<?php

/* ::menu.html.twig */
class __TwigTemplate_15b5e53643c0ae60ace5ca1b967dabaa786ecf70f27df137c511f8d4fcb1820c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a89c0f644a8557cabf6f3998d34571183b3bd26b69e17a190e8342510ce56cf9 = $this->env->getExtension("native_profiler");
        $__internal_a89c0f644a8557cabf6f3998d34571183b3bd26b69e17a190e8342510ce56cf9->enter($__internal_a89c0f644a8557cabf6f3998d34571183b3bd26b69e17a190e8342510ce56cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 1
        echo "<div class=\"static-sidebar-wrapper sidebar-default animated fadeInLeft\">
    <div class=\"static-sidebar\" style=\"top: 56px;\">
        <div class=\"sidebar\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"userinfo\">
                        <div class=\"avatar\">
                            <span class=\"icon-bg\"><i class=\"ti ti-user fa-stack-2x\"></i></span>
                        </div>
                        <div class=\"info\">
                            <span class=\"username\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"widget stay-on-collapse\" id=\"widget-sidebar\">
                <nav role=\"navigation\" class=\"widget-body\">
                    <ul class=\"acc-menu\">
                        <li>
                            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("dashboard_index");
        echo "\"><i class=\"ti ti-home\"></i><span>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dashbord", array(), "messages");
        echo "</span></a>
                        </li>
                        <li>
                            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getUrl("Inventory_index");
        echo "\">
                                <i class=\"ti ti-search\"></i>
                                <span>";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.inventary", array(), "messages");
        echo "</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("stock_index");
        echo "\">
                                <i class=\"ti ti-briefcase\"></i> 
                                ";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.stock", array(), "messages");
        // line 33
        echo "                            </a>
                        </li>

                        ";
        // line 36
        if ((($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_ARTICLE")) || $this->env->getExtension('security')->isGranted("ROLE_GESTION_UNIT"))) {
            // line 37
            echo "                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"ti ti-book\"></i>
                                    <span>";
            // line 40
            echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownArticle.name", array(), "messages");
            echo "</span>
                                </a>
                                <ul class=\"acc-menu\">
                                    ";
            // line 43
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_ARTICLE"))) {
                // line 44
                echo "                                        <li>
                                            <a href=\"";
                // line 45
                echo $this->env->getExtension('routing')->getPath("articleconsumable_index");
                echo "\">
                                                ";
                // line 46
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownArticle.consumable", array(), "messages");
                // line 47
                echo "                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"";
                // line 50
                echo $this->env->getExtension('routing')->getPath("articledurable_index");
                echo "\">
                                                ";
                // line 51
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownArticle.durable", array(), "messages");
                // line 52
                echo "                                            </a>
                                        </li>
                                    ";
            }
            // line 55
            echo "
                                    ";
            // line 56
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_UNIT"))) {
                // line 57
                echo "                                        <li>
                                            <a href=\"";
                // line 58
                echo $this->env->getExtension('routing')->getPath("unit_index");
                echo "\">
                                                ";
                // line 59
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownArticle.unit", array(), "messages");
                // line 60
                echo "                                            </a>
                                        </li>
                                    ";
            }
            // line 63
            echo "                                </ul>
                            </li>
                        ";
        }
        // line 66
        echo "
                        ";
        // line 67
        if ((($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_FAMILY")) || $this->env->getExtension('security')->isGranted("ROLE_GESTION_SUBFAMILY"))) {
            // line 68
            echo "
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"ti ti-layers-alt\"></i>
                                    <span>";
            // line 72
            echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownFamily.name", array(), "messages");
            echo "</span>
                                </a>
                                <ul class=\"acc-menu\">
                                    ";
            // line 75
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_FAMILY"))) {
                // line 76
                echo "                                        <li>
                                            <a href=\"";
                // line 77
                echo $this->env->getExtension('routing')->getPath("familyconsumable_index");
                echo "\">
                                                ";
                // line 78
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownArticle.consumable", array(), "messages");
                // line 79
                echo "                                            </a>
                                        </li>
                                    ";
            }
            // line 82
            echo "                                    ";
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_SUBFAMILY"))) {
                // line 83
                echo "                                        <li>
                                            <a href=\"";
                // line 84
                echo $this->env->getExtension('routing')->getPath("familydurable_index");
                echo "\">
                                                ";
                // line 85
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownArticle.durable", array(), "messages");
                // line 86
                echo "                                            </a>
                                        </li> 
                                    ";
            }
            // line 88
            echo "  
                                </ul>
                            </li>
                        ";
        }
        // line 92
        echo "                        ";
        if ((($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_JOURNAL")) || $this->env->getExtension('security')->isGranted("ROLE_GESTION_ORIGIN"))) {
            // line 93
            echo "                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"ti ti-archive\"></i>
                                    <span>";
            // line 96
            echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownJournal.name", array(), "messages");
            echo "</span>
                                </a>
                                <ul class=\"acc-menu\">
                                    ";
            // line 99
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_JOURNAL"))) {
                // line 100
                echo "                                        <li>
                                            <a  href=\"";
                // line 101
                echo $this->env->getExtension('routing')->getPath("journalconsumable_index");
                echo "\">
                                                ";
                // line 102
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownJournal.consumable", array(), "messages");
                // line 103
                echo "                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"";
                // line 106
                echo $this->env->getExtension('routing')->getPath("journaldurable_index");
                echo "\">
                                                ";
                // line 107
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownJournal.durable", array(), "messages");
                // line 108
                echo "                                            </a>
                                        </li>
                                    ";
            }
            // line 111
            echo "                                    ";
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_ORIGIN"))) {
                // line 112
                echo "                                        <li>
                                            <a href=\"";
                // line 113
                echo $this->env->getExtension('routing')->getPath("origin_index");
                echo "\">
                                                ";
                // line 114
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownJournal.origin", array(), "messages");
                // line 115
                echo "                                            </a>
                                        </li>
                                    ";
            }
            // line 118
            echo "                                </ul>
                            </li>
                        ";
        }
        // line 121
        echo "                        ";
        if (((((($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_ORDER")) || $this->env->getExtension('security')->isGranted("ROLE_GESTION_RETURN_TO_CENTRAL_STORE")) || $this->env->getExtension('security')->isGranted("ROLE_GESTION_RETURN_TO_SUB_STORE")) || $this->env->getExtension('security')->isGranted("ROLE_GESTION_DISCHARGE_TO_USER")) || $this->env->getExtension('security')->isGranted("ROLE_GESTION_DISCHARGE_TO_MAGAZINE"))) {
            // line 122
            echo "
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"ti ti-agenda\"></i>
                                    <span>";
            // line 126
            echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownSupportingDocument.name", array(), "messages");
            echo "</span>
                                </a>
                                <ul class=\"acc-menu\">
                                    ";
            // line 129
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_ORDER"))) {
                // line 130
                echo "                                        <li>
                                            <a href=\"";
                // line 131
                echo $this->env->getExtension('routing')->getPath("orderarticle_index");
                echo "\">
                                                ";
                // line 132
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownSupportingDocument.order", array(), "messages");
                // line 133
                echo "                                            </a>
                                        </li>
                                    ";
            }
            // line 136
            echo "                                    ";
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_RETURN_TO_CENTRAL_STORE"))) {
                // line 137
                echo "                                        <li>
                                            <a href=\"";
                // line 138
                echo $this->env->getExtension('routing')->getPath("returnArticle_centralStore_index");
                echo "\">
                                                ";
                // line 139
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownSupportingDocument.return", array(), "messages");
                // line 140
                echo "                                            </a>
                                            
                                        </li>
                                    ";
            }
            // line 144
            echo "                                    ";
            if (((($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_DISCHARGE_TO_USER")) || $this->env->getExtension('security')->isGranted("ROLE_GESTION_DISCHARGE_TO_MAGAZINE")) || $this->env->getExtension('security')->isGranted("ROLE_GESTION_DISCHARGE_TO_LOCAL"))) {
                // line 145
                echo "                                        <li>
                                            <a href=\"javascript:;\">
                                                <span> ";
                // line 147
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownSupportingDocument.discharge", array(), "messages");
                echo "</span>
                                            </a>
                                            <ul class=\"acc-menu\">
                                                
                                                ";
                // line 151
                if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_DISCHARGE_TO_MAGAZINE"))) {
                    // line 152
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 153
                    echo $this->env->getExtension('routing')->getPath("discharge_article_to_magazine_index");
                    echo "\">
                                                            ";
                    // line 154
                    echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownSupportingDocument.dischargeToMagazine", array(), "messages");
                    // line 155
                    echo "                                                        </a>
                                                    </li>
                                                ";
                }
                // line 158
                echo "                                                ";
                if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_DISCHARGE_TO_USER"))) {
                    // line 159
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 160
                    echo $this->env->getExtension('routing')->getPath("discharge_article_to_user_index");
                    echo "\">
                                                            ";
                    // line 161
                    echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownSupportingDocument.dischargeToUser", array(), "messages");
                    // line 162
                    echo "                                                        </a>
                                                    </li>
                                                ";
                }
                // line 165
                echo "                                                ";
                if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_DISCHARGE_TO_LOCAL"))) {
                    // line 166
                    echo "                                                    <li>
                                                        <a href=\"";
                    // line 167
                    echo $this->env->getExtension('routing')->getPath("discharge_article_to_local_index");
                    echo "\">
                                                            ";
                    // line 168
                    echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownSupportingDocument.dischargeToLocal", array(), "messages");
                    // line 169
                    echo "                                                        </a>
                                                    </li>
                                                ";
                }
                // line 172
                echo "                                            </ul>
                                        </li>
                                    ";
            }
            // line 175
            echo "                                </ul>
                            </li>
                        ";
        }
        // line 178
        echo "                        ";
        if ((($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_LOCAL")) || $this->env->getExtension('security')->isGranted("ROLE_GESTION_TYPE_LOCAL"))) {
            // line 179
            echo "                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"fa fa-building-o\"></i>
                                    <span>";
            // line 182
            echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownLocal.name", array(), "messages");
            echo "</span>
                                </a>
                                <ul class=\"acc-menu\">
                                    
                                    ";
            // line 186
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_LOCAL"))) {
                // line 187
                echo "                                        <li>
                                            <a href=\"";
                // line 188
                echo $this->env->getExtension('routing')->getPath("local_index");
                echo "\">
                                                ";
                // line 189
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownLocal.local", array(), "messages");
                // line 190
                echo "                                            </a>
                                        </li>
                                    ";
            }
            // line 193
            echo "                                    ";
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_TYPE_LOCAL"))) {
                // line 194
                echo "                                        <li>
                                            <a href=\"";
                // line 195
                echo $this->env->getExtension('routing')->getPath("typelocal_index");
                echo "\">
                                                ";
                // line 196
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownLocal.typeLocal", array(), "messages");
                // line 197
                echo "                                            </a>
                                        </li>
                                    ";
            }
            // line 200
            echo "                                </ul>
                            </li>
                        ";
        }
        // line 203
        echo "                        ";
        if ((($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_PROVIDER")) || $this->env->getExtension('security')->isGranted("ROLE_GESTION_ACTIVITY_DOMAIN"))) {
            // line 204
            echo "                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"ti ti-truck\"></i>
                                    <span>";
            // line 207
            echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownProvider.name", array(), "messages");
            echo "</span>
                                </a>
                                <ul class=\"acc-menu\">
                                    
                                    ";
            // line 211
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_PROVIDER"))) {
                // line 212
                echo "                                        <li>
                                            <a href=\"";
                // line 213
                echo $this->env->getExtension('routing')->getPath("provider_index");
                echo "\">
                                                ";
                // line 214
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownProvider.provider", array(), "messages");
                // line 215
                echo "                                            </a>
                                        </li>
                                    ";
            }
            // line 218
            echo "                                    ";
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_ACTIVITY_DOMAIN"))) {
                // line 219
                echo "                                        <li>
                                            <a href=\"";
                // line 220
                echo $this->env->getExtension('routing')->getPath("activitydomain_index");
                echo "\">
                                                ";
                // line 221
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownProvider.activitySector", array(), "messages");
                // line 222
                echo "                                            </a>
                                        </li>
                                    ";
            }
            // line 225
            echo "                                </ul>
                            </li>
                        ";
        }
        // line 228
        echo "                        
                        
                        ";
        // line 230
        if ((($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_USER")) || $this->env->getExtension('security')->isGranted("ROLE_GESTION_GROUP"))) {
            // line 231
            echo "                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"ti ti-user\"></i>
                                    <span>";
            // line 234
            echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownUser.name", array(), "messages");
            echo "</span>
                                </a>
                                <ul class=\"acc-menu\">

                                    ";
            // line 238
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_USER"))) {
                // line 239
                echo "                                        <li>
                                            <a href=\"";
                // line 240
                echo $this->env->getExtension('routing')->getPath("user_index");
                echo "\">
                                                ";
                // line 241
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownUser.user", array(), "messages");
                // line 242
                echo "                                            </a>
                                        </li>
                                    ";
            }
            // line 245
            echo "                                    ";
            if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_GROUP"))) {
                // line 246
                echo "                                        <li>
                                            <a href=\"";
                // line 247
                echo $this->env->getExtension('routing')->getPath("usergroup_index");
                echo "\">
                                                ";
                // line 248
                echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownUser.group", array(), "messages");
                // line 249
                echo "                                            </a>
                                        </li>
                                    ";
            }
            // line 252
            echo "                                </ul>
                            </li>
                        ";
        }
        // line 254
        echo " 
                        ";
        // line 255
        if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GESTION_MAGAZINE"))) {
            // line 256
            echo "                            <li>
                                <a href=\"";
            // line 257
            echo $this->env->getExtension('routing')->getPath("magazine_index");
            echo "\">
                                    <i class=\"ti ti-clipboard\"></i> 
                                    ";
            // line 259
            echo $this->env->getExtension('translator')->getTranslator()->trans("menu.magazine.magazine", array(), "messages");
            // line 260
            echo "                                </a>
                            </li>
                        ";
        }
        // line 263
        echo "                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_a89c0f644a8557cabf6f3998d34571183b3bd26b69e17a190e8342510ce56cf9->leave($__internal_a89c0f644a8557cabf6f3998d34571183b3bd26b69e17a190e8342510ce56cf9_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 263,  562 => 260,  560 => 259,  555 => 257,  552 => 256,  550 => 255,  547 => 254,  542 => 252,  537 => 249,  535 => 248,  531 => 247,  528 => 246,  525 => 245,  520 => 242,  518 => 241,  514 => 240,  511 => 239,  509 => 238,  502 => 234,  497 => 231,  495 => 230,  491 => 228,  486 => 225,  481 => 222,  479 => 221,  475 => 220,  472 => 219,  469 => 218,  464 => 215,  462 => 214,  458 => 213,  455 => 212,  453 => 211,  446 => 207,  441 => 204,  438 => 203,  433 => 200,  428 => 197,  426 => 196,  422 => 195,  419 => 194,  416 => 193,  411 => 190,  409 => 189,  405 => 188,  402 => 187,  400 => 186,  393 => 182,  388 => 179,  385 => 178,  380 => 175,  375 => 172,  370 => 169,  368 => 168,  364 => 167,  361 => 166,  358 => 165,  353 => 162,  351 => 161,  347 => 160,  344 => 159,  341 => 158,  336 => 155,  334 => 154,  330 => 153,  327 => 152,  325 => 151,  318 => 147,  314 => 145,  311 => 144,  305 => 140,  303 => 139,  299 => 138,  296 => 137,  293 => 136,  288 => 133,  286 => 132,  282 => 131,  279 => 130,  277 => 129,  271 => 126,  265 => 122,  262 => 121,  257 => 118,  252 => 115,  250 => 114,  246 => 113,  243 => 112,  240 => 111,  235 => 108,  233 => 107,  229 => 106,  224 => 103,  222 => 102,  218 => 101,  215 => 100,  213 => 99,  207 => 96,  202 => 93,  199 => 92,  193 => 88,  188 => 86,  186 => 85,  182 => 84,  179 => 83,  176 => 82,  171 => 79,  169 => 78,  165 => 77,  162 => 76,  160 => 75,  154 => 72,  148 => 68,  146 => 67,  143 => 66,  138 => 63,  133 => 60,  131 => 59,  127 => 58,  124 => 57,  122 => 56,  119 => 55,  114 => 52,  112 => 51,  108 => 50,  103 => 47,  101 => 46,  97 => 45,  94 => 44,  92 => 43,  86 => 40,  81 => 37,  79 => 36,  74 => 33,  72 => 32,  67 => 30,  60 => 26,  55 => 24,  47 => 21,  34 => 11,  22 => 1,);
    }
}
/* <div class="static-sidebar-wrapper sidebar-default animated fadeInLeft">*/
/*     <div class="static-sidebar" style="top: 56px;">*/
/*         <div class="sidebar">*/
/*             <div class="widget">*/
/*                 <div class="widget-body">*/
/*                     <div class="userinfo">*/
/*                         <div class="avatar">*/
/*                             <span class="icon-bg"><i class="ti ti-user fa-stack-2x"></i></span>*/
/*                         </div>*/
/*                         <div class="info">*/
/*                             <span class="username">{{ app.user.username }}</span>*/
/*                             */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="widget stay-on-collapse" id="widget-sidebar">*/
/*                 <nav role="navigation" class="widget-body">*/
/*                     <ul class="acc-menu">*/
/*                         <li>*/
/*                             <a href="{{ url ('dashboard_index') }}"><i class="ti ti-home"></i><span>{% trans %}menu.dashbord{% endtrans %}</span></a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ url ('Inventory_index') }}">*/
/*                                 <i class="ti ti-search"></i>*/
/*                                 <span>{% trans %}menu.inventary{% endtrans %}</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path ('stock_index')}}">*/
/*                                 <i class="ti ti-briefcase"></i> */
/*                                 {% trans %}menu.stock{% endtrans %}*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                         {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_ARTICLE') or is_granted('ROLE_GESTION_UNIT') %}*/
/*                             <li>*/
/*                                 <a href="javascript:;">*/
/*                                     <i class="ti ti-book"></i>*/
/*                                     <span>{% trans %}menu.dropDownArticle.name{% endtrans %}</span>*/
/*                                 </a>*/
/*                                 <ul class="acc-menu">*/
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_ARTICLE') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path('articleconsumable_index') }}">*/
/*                                                 {% trans %}menu.dropDownArticle.consumable{% endtrans %}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="{{ path('articledurable_index') }}">*/
/*                                                 {% trans %}menu.dropDownArticle.durable{% endtrans %}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/* */
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_UNIT') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path('unit_index') }}">*/
/*                                                 {% trans %}menu.dropDownArticle.unit{% endtrans %}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                 </ul>*/
/*                             </li>*/
/*                         {% endif %}*/
/* */
/*                         {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_FAMILY') or is_granted('ROLE_GESTION_SUBFAMILY') %}*/
/* */
/*                             <li>*/
/*                                 <a href="javascript:;">*/
/*                                     <i class="ti ti-layers-alt"></i>*/
/*                                     <span>{% trans %}menu.dropDownFamily.name{% endtrans %}</span>*/
/*                                 </a>*/
/*                                 <ul class="acc-menu">*/
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_FAMILY') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path('familyconsumable_index') }}">*/
/*                                                 {% trans %}menu.dropDownArticle.consumable{% endtrans %}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_SUBFAMILY') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path('familydurable_index') }}">*/
/*                                                 {% trans %}menu.dropDownArticle.durable{% endtrans %}*/
/*                                             </a>*/
/*                                         </li> */
/*                                     {% endif %}  */
/*                                 </ul>*/
/*                             </li>*/
/*                         {% endif %}*/
/*                         {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_JOURNAL') or is_granted('ROLE_GESTION_ORIGIN') %}*/
/*                             <li>*/
/*                                 <a href="javascript:;">*/
/*                                     <i class="ti ti-archive"></i>*/
/*                                     <span>{% trans %}menu.dropDownJournal.name{% endtrans %}</span>*/
/*                                 </a>*/
/*                                 <ul class="acc-menu">*/
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_JOURNAL') %}*/
/*                                         <li>*/
/*                                             <a  href="{{ path ('journalconsumable_index')}}">*/
/*                                                 {% trans %}menu.dropDownJournal.consumable{% endtrans %}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="{{ path ('journaldurable_index')}}">*/
/*                                                 {% trans %}menu.dropDownJournal.durable{% endtrans %}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_ORIGIN') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path('origin_index') }}">*/
/*                                                 {% trans %}menu.dropDownJournal.origin{% endtrans %}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                 </ul>*/
/*                             </li>*/
/*                         {% endif %}*/
/*                         {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_ORDER') or is_granted('ROLE_GESTION_RETURN_TO_CENTRAL_STORE') or is_granted('ROLE_GESTION_RETURN_TO_SUB_STORE') or is_granted('ROLE_GESTION_DISCHARGE_TO_USER') or is_granted('ROLE_GESTION_DISCHARGE_TO_MAGAZINE') %}*/
/* */
/*                             <li>*/
/*                                 <a href="javascript:;">*/
/*                                     <i class="ti ti-agenda"></i>*/
/*                                     <span>{% trans %}menu.dropDownSupportingDocument.name{% endtrans %}</span>*/
/*                                 </a>*/
/*                                 <ul class="acc-menu">*/
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_ORDER') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path ('orderarticle_index')}}">*/
/*                                                 {% trans %}menu.dropDownSupportingDocument.order{% endtrans %}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_RETURN_TO_CENTRAL_STORE') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path ('returnArticle_centralStore_index')}}">*/
/*                                                 {% trans %}menu.dropDownSupportingDocument.return{% endtrans %}*/
/*                                             </a>*/
/*                                             */
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_DISCHARGE_TO_USER') or is_granted('ROLE_GESTION_DISCHARGE_TO_MAGAZINE') or is_granted('ROLE_GESTION_DISCHARGE_TO_LOCAL') %}*/
/*                                         <li>*/
/*                                             <a href="javascript:;">*/
/*                                                 <span> {% trans %}menu.dropDownSupportingDocument.discharge{% endtrans %}</span>*/
/*                                             </a>*/
/*                                             <ul class="acc-menu">*/
/*                                                 */
/*                                                 {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_DISCHARGE_TO_MAGAZINE') %}*/
/*                                                     <li>*/
/*                                                         <a href="{{ path ('discharge_article_to_magazine_index')}}">*/
/*                                                             {% trans %}menu.dropDownSupportingDocument.dischargeToMagazine{% endtrans %}*/
/*                                                         </a>*/
/*                                                     </li>*/
/*                                                 {% endif %}*/
/*                                                 {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_DISCHARGE_TO_USER') %}*/
/*                                                     <li>*/
/*                                                         <a href="{{ path ('discharge_article_to_user_index')}}">*/
/*                                                             {% trans %}menu.dropDownSupportingDocument.dischargeToUser{% endtrans %}*/
/*                                                         </a>*/
/*                                                     </li>*/
/*                                                 {% endif %}*/
/*                                                 {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_DISCHARGE_TO_LOCAL') %}*/
/*                                                     <li>*/
/*                                                         <a href="{{ path ('discharge_article_to_local_index')}}">*/
/*                                                             {% trans %}menu.dropDownSupportingDocument.dischargeToLocal{% endtrans %}*/
/*                                                         </a>*/
/*                                                     </li>*/
/*                                                 {% endif %}*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                 </ul>*/
/*                             </li>*/
/*                         {% endif %}*/
/*                         {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_LOCAL') or is_granted('ROLE_GESTION_TYPE_LOCAL') %}*/
/*                             <li>*/
/*                                 <a href="javascript:;">*/
/*                                     <i class="fa fa-building-o"></i>*/
/*                                     <span>{% trans %}menu.dropDownLocal.name{% endtrans %}</span>*/
/*                                 </a>*/
/*                                 <ul class="acc-menu">*/
/*                                     */
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_LOCAL') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path ('local_index')}}">*/
/*                                                 {% trans %}menu.dropDownLocal.local{% endtrans %}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_TYPE_LOCAL') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path ('typelocal_index')}}">*/
/*                                                 {% trans %}menu.dropDownLocal.typeLocal{% endtrans %}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                 </ul>*/
/*                             </li>*/
/*                         {% endif %}*/
/*                         {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_PROVIDER') or is_granted('ROLE_GESTION_ACTIVITY_DOMAIN') %}*/
/*                             <li>*/
/*                                 <a href="javascript:;">*/
/*                                     <i class="ti ti-truck"></i>*/
/*                                     <span>{% trans %}menu.dropDownProvider.name{% endtrans %}</span>*/
/*                                 </a>*/
/*                                 <ul class="acc-menu">*/
/*                                     */
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_PROVIDER') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path ('provider_index')}}">*/
/*                                                 {% trans %}menu.dropDownProvider.provider{% endtrans %}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_ACTIVITY_DOMAIN') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path ('activitydomain_index')}}">*/
/*                                                 {% trans %}menu.dropDownProvider.activitySector{% endtrans %}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                 </ul>*/
/*                             </li>*/
/*                         {% endif %}*/
/*                         */
/*                         */
/*                         {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_USER') or is_granted('ROLE_GESTION_GROUP') %}*/
/*                             <li>*/
/*                                 <a href="javascript:;">*/
/*                                     <i class="ti ti-user"></i>*/
/*                                     <span>{% trans %}menu.dropDownUser.name{% endtrans %}</span>*/
/*                                 </a>*/
/*                                 <ul class="acc-menu">*/
/* */
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_USER') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path ('user_index')}}">*/
/*                                                 {% trans %}menu.dropDownUser.user{% endtrans %}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                     {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_GROUP') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path ('usergroup_index')}}">*/
/*                                                 {% trans %}menu.dropDownUser.group{% endtrans %}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                 </ul>*/
/*                             </li>*/
/*                         {% endif %} */
/*                         {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_GESTION_MAGAZINE') %}*/
/*                             <li>*/
/*                                 <a href="{{ path ('magazine_index')}}">*/
/*                                     <i class="ti ti-clipboard"></i> */
/*                                     {% trans %}menu.magazine.magazine{% endtrans %}*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </nav>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
