<?php

/* ISETSOMagazineBundle:Dashboard:index.html.twig */
class __TwigTemplate_7b6c37f5774b7f5b6ff843e4f7fb9a0073f216d15e7ad1bd84d5a39189012f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ISETSOMagazineBundle:Dashboard:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a982e0395eab0ce8d311824d174515fe9eea48adae3999c63a54453cbae071b = $this->env->getExtension("native_profiler");
        $__internal_7a982e0395eab0ce8d311824d174515fe9eea48adae3999c63a54453cbae071b->enter($__internal_7a982e0395eab0ce8d311824d174515fe9eea48adae3999c63a54453cbae071b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:Dashboard:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a982e0395eab0ce8d311824d174515fe9eea48adae3999c63a54453cbae071b->leave($__internal_7a982e0395eab0ce8d311824d174515fe9eea48adae3999c63a54453cbae071b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a94b4b95032bbaf131215a44f2ae25b24f04bf038432cb32979deb3a9e041f7 = $this->env->getExtension("native_profiler");
        $__internal_2a94b4b95032bbaf131215a44f2ae25b24f04bf038432cb32979deb3a9e041f7->enter($__internal_2a94b4b95032bbaf131215a44f2ae25b24f04bf038432cb32979deb3a9e041f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8aeb3a8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8aeb3a8_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/8aeb3a8_switchery_1.css");
            // line 7
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "8aeb3a8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8aeb3a8") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/8aeb3a8.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "    
";
        
        $__internal_2a94b4b95032bbaf131215a44f2ae25b24f04bf038432cb32979deb3a9e041f7->leave($__internal_2a94b4b95032bbaf131215a44f2ae25b24f04bf038432cb32979deb3a9e041f7_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b36e86ac6e13c66825c0a1b7ee6adec5b5db3bb751cb4efb37c430cdfb8635a3 = $this->env->getExtension("native_profiler");
        $__internal_b36e86ac6e13c66825c0a1b7ee6adec5b5db3bb751cb4efb37c430cdfb8635a3->enter($__internal_b36e86ac6e13c66825c0a1b7ee6adec5b5db3bb751cb4efb37c430cdfb8635a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<div class=\"row\">
\t<div class=\"col-md-3\">
\t\t<div class=\"info-tile tile-orange\">
\t\t\t<div class=\"tile-icon\"><i class=\"ti ti-shopping-cart-full\"></i></div>
\t\t\t<div class=\"tile-heading\"><span>";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownSupportingDocument.order", array(), "messages");
        echo "</span></div>
\t\t\t<div class=\"tile-body\"><span>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["totalOrderNumber"]) ? $context["totalOrderNumber"] : $this->getContext($context, "totalOrderNumber")), "html", null, true);
        echo "</span></div>
\t\t\t<div class=\"tile-footer\"><span class=\"text-success\"> ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["newOrderNumber"]) ? $context["newOrderNumber"] : $this->getContext($context, "newOrderNumber")), "html", null, true);
        echo "</span></div>
\t\t</div>
\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"info-tile tile-success\">
\t\t\t<div class=\"tile-icon\"><i class=\"ti ti-hand-stop\"></i></div>
\t\t\t<div class=\"tile-heading\"><span>";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownSupportingDocument.return", array(), "messages");
        echo "</span></div>
\t\t\t<div class=\"tile-body\"><span>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["totalReturnNumber"]) ? $context["totalReturnNumber"] : $this->getContext($context, "totalReturnNumber")), "html", null, true);
        echo "</span></div>
\t\t\t<div class=\"tile-footer\"><span class=\"text-success\"> ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["newReturnNumber"]) ? $context["newReturnNumber"] : $this->getContext($context, "newReturnNumber")), "html", null, true);
        echo "</span></div>
\t\t</div>
\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"info-tile tile-info\">
\t\t\t<div class=\"tile-icon\"><i class=\"ti ti-hand-drag\"></i></div>
\t\t\t<div class=\"tile-heading\"><span>";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownSupportingDocument.discharge", array(), "messages");
        echo "</span></div>
\t\t\t<div class=\"tile-body\"><span>";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["totalDischargeNumber"]) ? $context["totalDischargeNumber"] : $this->getContext($context, "totalDischargeNumber")), "html", null, true);
        echo "</span></div>
\t\t\t<div class=\"tile-footer\"><span class=\"text-success\"> ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["newDischargeNumber"]) ? $context["newDischargeNumber"] : $this->getContext($context, "newDischargeNumber")), "html", null, true);
        echo "</span></div>
\t\t</div>
\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"info-tile tile-danger\">
\t\t\t<div class=\"tile-icon\"><i class=\"ti ti-user\"></i></div>
\t\t\t<div class=\"tile-heading\"><span>";
        // line 41
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.dropDownUser.user", array(), "messages");
        echo "</span></div>
\t\t\t<div class=\"tile-body\"><span> ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["totalUserNumber"]) ? $context["totalUserNumber"] : $this->getContext($context, "totalUserNumber")), "html", null, true);
        echo "</span></div>
\t\t</div>
\t</div>
</div>

<div data-widget-group=\"group1\">
\t<!--<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"panel panel-info\" data-widget='{\"id\" : \"wiget9\", \"draggable\": \"false\"}'>
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h2>Social Stats</h2>
\t\t\t\t\t<div class=\"panel-ctrls button-icon-bg\" 
\t\t\t\t\t\tdata-actions-container=\"\" 
\t\t\t\t\t\tdata-action-collapse='{\"target\": \".panel-body\"}'
\t\t\t\t\t\tdata-action-colorpicker=''
\t\t\t\t\t\tdata-action-refresh-demo='{\"type\": \"circular\"}'
\t\t\t\t\t\t>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-editbox\" data-widget-controls=\"\"></div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div id=\"socialstats\" style=\"height: 272px;\" class=\"mt-sm mb-sm\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>-->


\t<div class=\"row\">
\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"panel panel-gray\" data-widget='{\"draggable\": \"false\"}'>
                <div class=\"panel-heading\">
                \t<h2>Recent Activities</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body scroll-pane\" style=\"height: 320px;\">
\t\t\t\t\t<div class=\"scroll-content\">
\t\t\t\t\t\t<ul id=\"notification_list\" class=\"mini-timeline\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4\">

\t\t\t<div class=\"panel panel-white\" data-widget='{\"draggable\": \"false\"}'>
                <div class=\"panel-heading\">
                \t<h2>Online Now</h2>
\t                <div class=\"panel-ctrls button-icon-bg\" 
\t\t\t\t\t\tdata-actions-container=\"\" 
\t\t\t\t\t\tdata-action-refresh-demo='{\"type\": \"circular\"}'
\t\t\t\t\t\t>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t        <div class=\"panel-body scroll-pane\" style=\"height: 320px;\">
\t\t\t\t\t<div class=\"scroll-content\">
\t\t\t\t\t\t<ul id=\"user_onligne\" class=\"mini-timeline\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
            <div class=\"panel panel-default\" data-widget='{\"draggable\": \"false\"}'>
                <div class=\"panel-heading\">
                    <h2>Donut Graph</h2>
                    <div class=\"panel-ctrls\" data-actions-container=\"\" data-action-collapse='{\"target\": \".panel-body\"}'></div>
                </div>
                <div class=\"panel-body\">
                    <div id=\"donut-example\" style=\"height: 320px;\"></div>
                </div>
            </div>
        </div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-realtime\" data-widget='{\"draggable\": \"false\"}'>
                <div class=\"panel-heading\">
                    <h2>Real-Time</h2>
                    <div class=\"panel-ctrls mr-n\">
                    \t<div class=\"mt-md mb-md\">
                    \t\t<input id=\"real-Time\" type=\"checkbox\" class=\"js-switch-success switchery-xs\" />
\t\t\t\t\t\t</div>
                    </div>
                </div>
                <div class=\"panel-body\">
                \t<span class=\"rightnow\">Right Now</span>
\t\t\t\t\t<span id=\"number_user\" class=\"number\"></span>
\t\t\t\t\t<span class=\"activeuser\">active Users right now</span>
                    <div id=\"realtime-updates\" style=\"height: 140px\" class=\"centered\"></div>
                </div>
            </div>
\t\t</div>
\t</div>
</div>
</div>
";
        
        $__internal_b36e86ac6e13c66825c0a1b7ee6adec5b5db3bb751cb4efb37c430cdfb8635a3->leave($__internal_b36e86ac6e13c66825c0a1b7ee6adec5b5db3bb751cb4efb37c430cdfb8635a3_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a83f656984c6255b284fb39ac7e38a583e5078110bc36f1c0119095f0a75ad79 = $this->env->getExtension("native_profiler");
        $__internal_a83f656984c6255b284fb39ac7e38a583e5078110bc36f1c0119095f0a75ad79->enter($__internal_a83f656984c6255b284fb39ac7e38a583e5078110bc36f1c0119095f0a75ad79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 144
        echo "
    ";
        // line 145
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 147
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "81450e8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81450e8_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/81450e8_jquery.flot.min_1.js");
            // line 158
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "81450e8_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81450e8_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/81450e8_jquery.flot.tooltip.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "81450e8_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81450e8_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/81450e8_jquery.flot.spline_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "81450e8_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81450e8_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/81450e8_jquery.flot.stack.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "81450e8_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81450e8_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/81450e8_jquery.flot.resize_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "81450e8_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81450e8_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/81450e8_switchery_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "81450e8_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81450e8_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/81450e8_raphael.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "81450e8_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81450e8_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/81450e8_morris.min_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "81450e8_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81450e8_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/81450e8_dashboard_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "81450e8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81450e8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/81450e8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 160
        echo "    <script type=\"text/javascript\">
    \tSwitchery(document.querySelector('.js-switch-success'), {color: Utility.getBrandColor('success')});
    </script>
";
        
        $__internal_a83f656984c6255b284fb39ac7e38a583e5078110bc36f1c0119095f0a75ad79->leave($__internal_a83f656984c6255b284fb39ac7e38a583e5078110bc36f1c0119095f0a75ad79_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 160,  265 => 158,  261 => 147,  256 => 145,  253 => 144,  247 => 143,  140 => 42,  136 => 41,  127 => 35,  123 => 34,  119 => 33,  110 => 27,  106 => 26,  102 => 25,  93 => 19,  89 => 18,  85 => 17,  79 => 13,  73 => 12,  65 => 9,  51 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets */
/*         'bundles/isetsomagazine/plugins/switchery/switchery.css'*/
/*         filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="row">*/
/* 	<div class="col-md-3">*/
/* 		<div class="info-tile tile-orange">*/
/* 			<div class="tile-icon"><i class="ti ti-shopping-cart-full"></i></div>*/
/* 			<div class="tile-heading"><span>{% trans %}menu.dropDownSupportingDocument.order{% endtrans %}</span></div>*/
/* 			<div class="tile-body"><span>{{ totalOrderNumber }}</span></div>*/
/* 			<div class="tile-footer"><span class="text-success"> {{ newOrderNumber }}</span></div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="info-tile tile-success">*/
/* 			<div class="tile-icon"><i class="ti ti-hand-stop"></i></div>*/
/* 			<div class="tile-heading"><span>{% trans %}menu.dropDownSupportingDocument.return{% endtrans %}</span></div>*/
/* 			<div class="tile-body"><span>{{ totalReturnNumber }}</span></div>*/
/* 			<div class="tile-footer"><span class="text-success"> {{ newReturnNumber }}</span></div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="info-tile tile-info">*/
/* 			<div class="tile-icon"><i class="ti ti-hand-drag"></i></div>*/
/* 			<div class="tile-heading"><span>{% trans %}menu.dropDownSupportingDocument.discharge{% endtrans %}</span></div>*/
/* 			<div class="tile-body"><span>{{ totalDischargeNumber }}</span></div>*/
/* 			<div class="tile-footer"><span class="text-success"> {{ newDischargeNumber }}</span></div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="info-tile tile-danger">*/
/* 			<div class="tile-icon"><i class="ti ti-user"></i></div>*/
/* 			<div class="tile-heading"><span>{% trans %}menu.dropDownUser.user{% endtrans %}</span></div>*/
/* 			<div class="tile-body"><span> {{ totalUserNumber }}</span></div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div data-widget-group="group1">*/
/* 	<!--<div class="row">*/
/* 		<div class="col-md-12">*/
/* 			<div class="panel panel-info" data-widget='{"id" : "wiget9", "draggable": "false"}'>*/
/* 				<div class="panel-heading">*/
/* 					<h2>Social Stats</h2>*/
/* 					<div class="panel-ctrls button-icon-bg" */
/* 						data-actions-container="" */
/* 						data-action-collapse='{"target": ".panel-body"}'*/
/* 						data-action-colorpicker=''*/
/* 						data-action-refresh-demo='{"type": "circular"}'*/
/* 						>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="panel-editbox" data-widget-controls=""></div>*/
/* 				<div class="panel-body">*/
/* 					<div id="socialstats" style="height: 272px;" class="mt-sm mb-sm"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>-->*/
/* */
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-8">*/
/* 			<div class="panel panel-gray" data-widget='{"draggable": "false"}'>*/
/*                 <div class="panel-heading">*/
/*                 	<h2>Recent Activities</h2>*/
/* 				</div>*/
/* 				<div class="panel-body scroll-pane" style="height: 320px;">*/
/* 					<div class="scroll-content">*/
/* 						<ul id="notification_list" class="mini-timeline">*/
/* 							*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-4">*/
/* */
/* 			<div class="panel panel-white" data-widget='{"draggable": "false"}'>*/
/*                 <div class="panel-heading">*/
/*                 	<h2>Online Now</h2>*/
/* 	                <div class="panel-ctrls button-icon-bg" */
/* 						data-actions-container="" */
/* 						data-action-refresh-demo='{"type": "circular"}'*/
/* 						>*/
/* 					</div>*/
/* 				</div>*/
/* 		        <div class="panel-body scroll-pane" style="height: 320px;">*/
/* 					<div class="scroll-content">*/
/* 						<ul id="user_onligne" class="mini-timeline">*/
/* 							*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-6">*/
/*             <div class="panel panel-default" data-widget='{"draggable": "false"}'>*/
/*                 <div class="panel-heading">*/
/*                     <h2>Donut Graph</h2>*/
/*                     <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div id="donut-example" style="height: 320px;"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* 		<div class="col-md-6">*/
/* 			<div class="panel panel-realtime" data-widget='{"draggable": "false"}'>*/
/*                 <div class="panel-heading">*/
/*                     <h2>Real-Time</h2>*/
/*                     <div class="panel-ctrls mr-n">*/
/*                     	<div class="mt-md mb-md">*/
/*                     		<input id="real-Time" type="checkbox" class="js-switch-success switchery-xs" />*/
/* 						</div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                 	<span class="rightnow">Right Now</span>*/
/* 					<span id="number_user" class="number"></span>*/
/* 					<span class="activeuser">active Users right now</span>*/
/*                     <div id="realtime-updates" style="height: 140px" class="centered"></div>*/
/*                 </div>*/
/*             </div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     {{ parent() }}*/
/* */
/*     {% javascripts filter='?yui_js'*/
/*     	'bundles/isetsomagazine/plugins/charts-flot/jquery.flot.min.js'*/
/*     	'bundles/isetsomagazine/plugins/charts-flot/jquery.flot.tooltip.min.js'*/
/*     	'bundles/isetsomagazine/plugins/charts-flot/jquery.flot.spline.js'*/
/*     	'bundles/isetsomagazine/plugins/charts-flot/jquery.flot.stack.min.js'*/
/*     	'bundles/isetsomagazine/plugins/charts-flot/jquery.flot.resize.js'*/
/*     	'bundles/isetsomagazine/plugins/switchery/switchery.js'*/
/*     	'bundles/isetsomagazine/plugins/charts-morrisjs/raphael.min.js'*/
/*     	'bundles/isetsomagazine/plugins/charts-morrisjs/morris.min.js'*/
/*         'bundles/isetsomagazine/myjs/dashboard.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     <script type="text/javascript">*/
/*     	Switchery(document.querySelector('.js-switch-success'), {color: Utility.getBrandColor('success')});*/
/*     </script>*/
/* {% endblock %}*/
