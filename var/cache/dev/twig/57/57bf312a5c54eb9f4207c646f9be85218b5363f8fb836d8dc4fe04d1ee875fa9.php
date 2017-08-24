<?php

/* ISETSOMagazineBundle:returnarticle_SubStore:new.html.twig */
class __TwigTemplate_ed23c98954720743355a56ceea55bd6623c316ba54ceed5eaeb0630dd661f685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:returnarticle_SubStore:new.html.twig", 1);
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
        $__internal_b16afdc297232faba44186a7fde851454941f3907c590b908f18d812cace8a38 = $this->env->getExtension("native_profiler");
        $__internal_b16afdc297232faba44186a7fde851454941f3907c590b908f18d812cace8a38->enter($__internal_b16afdc297232faba44186a7fde851454941f3907c590b908f18d812cace8a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:returnarticle_SubStore:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b16afdc297232faba44186a7fde851454941f3907c590b908f18d812cace8a38->leave($__internal_b16afdc297232faba44186a7fde851454941f3907c590b908f18d812cace8a38_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d12db894f14f64ce1a23d2883c5224a2b40ec4fefe6888a9f825efab66b1c14d = $this->env->getExtension("native_profiler");
        $__internal_d12db894f14f64ce1a23d2883c5224a2b40ec4fefe6888a9f825efab66b1c14d->enter($__internal_d12db894f14f64ce1a23d2883c5224a2b40ec4fefe6888a9f825efab66b1c14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4866ff2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4866ff2_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4866ff2_dataTables.bootstrap_1.css");
            // line 11
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "4866ff2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4866ff2_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4866ff2_dataTables.themify_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "4866ff2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4866ff2_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4866ff2_select2_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "4866ff2_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4866ff2_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4866ff2_cssload-finger_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "4866ff2_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4866ff2_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4866ff2_book-animation_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "4866ff2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4866ff2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/4866ff2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    
";
        
        $__internal_d12db894f14f64ce1a23d2883c5224a2b40ec4fefe6888a9f825efab66b1c14d->leave($__internal_d12db894f14f64ce1a23d2883c5224a2b40ec4fefe6888a9f825efab66b1c14d_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_ee240db443384ef6058362b158da1c919b2a529c312b8fdff0809a3346cfa8a6 = $this->env->getExtension("native_profiler");
        $__internal_ee240db443384ef6058362b158da1c919b2a529c312b8fdff0809a3346cfa8a6->enter($__internal_ee240db443384ef6058362b158da1c919b2a529c312b8fdff0809a3346cfa8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 16
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnarticle_subStore_index", array("id" => $this->getAttribute((isset($context["store"]) ? $context["store"] : $this->getContext($context, "store")), "id", array()))), "html", null, true);
        echo "\">
       ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_ee240db443384ef6058362b158da1c919b2a529c312b8fdff0809a3346cfa8a6->leave($__internal_ee240db443384ef6058362b158da1c919b2a529c312b8fdff0809a3346cfa8a6_prof);

    }

    // line 20
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_d69275208f01ab0a9b635ffabcb63753680d92d3e69689548c6052e78911e23d = $this->env->getExtension("native_profiler");
        $__internal_d69275208f01ab0a9b635ffabcb63753680d92d3e69689548c6052e78911e23d->enter($__internal_d69275208f01ab0a9b635ffabcb63753680d92d3e69689548c6052e78911e23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 21
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("returnarticle.new.name"), "html", null, true);
        echo "
";
        
        $__internal_d69275208f01ab0a9b635ffabcb63753680d92d3e69689548c6052e78911e23d->leave($__internal_d69275208f01ab0a9b635ffabcb63753680d92d3e69689548c6052e78911e23d_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_b074a5b38f54334e9910fa17914e5f5987d23fef8921ec3b64cee92a23ccb5d4 = $this->env->getExtension("native_profiler");
        $__internal_b074a5b38f54334e9910fa17914e5f5987d23fef8921ec3b64cee92a23ccb5d4->enter($__internal_b074a5b38f54334e9910fa17914e5f5987d23fef8921ec3b64cee92a23ccb5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "    ";
        $this->loadTemplate("Template/returnArticleFormTemplate.html.twig", "ISETSOMagazineBundle:returnarticle_SubStore:new.html.twig", 24)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("returnarticle.new.name"), "submit_name" => $this->env->getExtension('translator')->trans("returnarticle.new.submit"))));
        // line 25
        echo "
";
        
        $__internal_b074a5b38f54334e9910fa17914e5f5987d23fef8921ec3b64cee92a23ccb5d4->leave($__internal_b074a5b38f54334e9910fa17914e5f5987d23fef8921ec3b64cee92a23ccb5d4_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_07f0831aaf2b49d6fe3d529a65869de0626a623e164162269134c8cc42894c15 = $this->env->getExtension("native_profiler");
        $__internal_07f0831aaf2b49d6fe3d529a65869de0626a623e164162269134c8cc42894c15->enter($__internal_07f0831aaf2b49d6fe3d529a65869de0626a623e164162269134c8cc42894c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 29
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "06ba4b8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06ba4b8_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/06ba4b8_jquery.dataTables_1.js");
            // line 40
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "06ba4b8_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06ba4b8_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/06ba4b8_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "06ba4b8_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06ba4b8_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/06ba4b8_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "06ba4b8_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06ba4b8_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/06ba4b8_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "06ba4b8_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06ba4b8_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/06ba4b8_return_article_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "06ba4b8_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06ba4b8_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/06ba4b8_add_return_article_toSubStore_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "06ba4b8_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06ba4b8_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/06ba4b8_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "06ba4b8_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06ba4b8_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/06ba4b8_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "06ba4b8_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06ba4b8_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/06ba4b8_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "06ba4b8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06ba4b8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/06ba4b8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 42
        echo " ";
        
        $__internal_07f0831aaf2b49d6fe3d529a65869de0626a623e164162269134c8cc42894c15->leave($__internal_07f0831aaf2b49d6fe3d529a65869de0626a623e164162269134c8cc42894c15_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:returnarticle_SubStore:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 42,  168 => 40,  164 => 29,  159 => 28,  153 => 27,  145 => 25,  142 => 24,  136 => 23,  126 => 21,  120 => 20,  110 => 17,  105 => 16,  99 => 15,  91 => 13,  53 => 11,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets */
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.css'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.themify.css'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.css'*/
/*         'bundles/isetsomagazine/css/cssload-finger.css'*/
/*         'bundles/isetsomagazine/css/book-animation.css'*/
/*         filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     */
/* {% endblock %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('returnarticle_subStore_index', { 'id' : store.id}) }}">*/
/*        {{ 'returnarticle.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* {% block breadcrumbActive %}*/
/*     {{ 'returnarticle.new.name'|trans }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/returnArticleFormTemplate.html.twig' with {'form_name' : 'returnarticle.new.name'|trans ,'submit_name': 'returnarticle.new.submit'|trans } %}*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*         'bundles/isetsomagazine/myPlugins/return_article.js'*/
/*         'bundles/isetsomagazine/myjs/add_return_article_toSubStore.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
