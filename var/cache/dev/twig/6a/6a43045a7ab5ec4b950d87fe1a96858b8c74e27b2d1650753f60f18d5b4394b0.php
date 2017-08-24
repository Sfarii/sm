<?php

/* ISETSOMagazineBundle:journaldurable:new.html.twig */
class __TwigTemplate_4b823add1e08431c1d3c5dd869c2d8f11418002efe1c51be03dfb1e24c352849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:journaldurable:new.html.twig", 1);
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
        $__internal_5a59a2db54fbf00808d43dd54fb2a201cc3ec97adeac3df5e5cabf62a330cf4f = $this->env->getExtension("native_profiler");
        $__internal_5a59a2db54fbf00808d43dd54fb2a201cc3ec97adeac3df5e5cabf62a330cf4f->enter($__internal_5a59a2db54fbf00808d43dd54fb2a201cc3ec97adeac3df5e5cabf62a330cf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:journaldurable:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a59a2db54fbf00808d43dd54fb2a201cc3ec97adeac3df5e5cabf62a330cf4f->leave($__internal_5a59a2db54fbf00808d43dd54fb2a201cc3ec97adeac3df5e5cabf62a330cf4f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3bb8e1e8da6e9c7552d74d06ece003185ef16110c067da290a1670dbe0d5bdfc = $this->env->getExtension("native_profiler");
        $__internal_3bb8e1e8da6e9c7552d74d06ece003185ef16110c067da290a1670dbe0d5bdfc->enter($__internal_3bb8e1e8da6e9c7552d74d06ece003185ef16110c067da290a1670dbe0d5bdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3849eb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb_dataTables.bootstrap_1.css");
            // line 11
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "e3849eb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb_dataTables.themify_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "e3849eb_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb_select2_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "e3849eb_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb_cssload-finger_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "e3849eb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    
";
        
        $__internal_3bb8e1e8da6e9c7552d74d06ece003185ef16110c067da290a1670dbe0d5bdfc->leave($__internal_3bb8e1e8da6e9c7552d74d06ece003185ef16110c067da290a1670dbe0d5bdfc_prof);

    }

    // line 16
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_ca9ab7fd610292b943a06796d17547fd238d17325e9644c615b658b1a3beda1a = $this->env->getExtension("native_profiler");
        $__internal_ca9ab7fd610292b943a06796d17547fd238d17325e9644c615b658b1a3beda1a->enter($__internal_ca9ab7fd610292b943a06796d17547fd238d17325e9644c615b658b1a3beda1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 17
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("journaldurable_index");
        echo "\">
       ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journaldurable.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_ca9ab7fd610292b943a06796d17547fd238d17325e9644c615b658b1a3beda1a->leave($__internal_ca9ab7fd610292b943a06796d17547fd238d17325e9644c615b658b1a3beda1a_prof);

    }

    // line 22
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_bea5b5101a15cda335bb0b64c599bef191b679db5ef81e60362d75f32797a40f = $this->env->getExtension("native_profiler");
        $__internal_bea5b5101a15cda335bb0b64c599bef191b679db5ef81e60362d75f32797a40f->enter($__internal_bea5b5101a15cda335bb0b64c599bef191b679db5ef81e60362d75f32797a40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journaldurable.new.name"), "html", null, true);
        echo "
";
        
        $__internal_bea5b5101a15cda335bb0b64c599bef191b679db5ef81e60362d75f32797a40f->leave($__internal_bea5b5101a15cda335bb0b64c599bef191b679db5ef81e60362d75f32797a40f_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_adc606c7b813ba5e0501766258058f069c9314157a4a0806a5c612cc7f3e2889 = $this->env->getExtension("native_profiler");
        $__internal_adc606c7b813ba5e0501766258058f069c9314157a4a0806a5c612cc7f3e2889->enter($__internal_adc606c7b813ba5e0501766258058f069c9314157a4a0806a5c612cc7f3e2889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "    ";
        $this->loadTemplate("Template/JournalAddFormTemplate.html.twig", "ISETSOMagazineBundle:journaldurable:new.html.twig", 27)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("journaldurable.new.name"))));
        
        $__internal_adc606c7b813ba5e0501766258058f069c9314157a4a0806a5c612cc7f3e2889->leave($__internal_adc606c7b813ba5e0501766258058f069c9314157a4a0806a5c612cc7f3e2889_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_068fabca0d833abab07be75dc821a0e0da31d6c5943c56ba15ccea30da09bf3b = $this->env->getExtension("native_profiler");
        $__internal_068fabca0d833abab07be75dc821a0e0da31d6c5943c56ba15ccea30da09bf3b->enter($__internal_068fabca0d833abab07be75dc821a0e0da31d6c5943c56ba15ccea30da09bf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 32
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f4ea94a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f4ea94a_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/f4ea94a_jquery.dataTables_1.js");
            // line 43
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "f4ea94a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f4ea94a_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/f4ea94a_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "f4ea94a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f4ea94a_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/f4ea94a_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "f4ea94a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f4ea94a_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/f4ea94a_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "f4ea94a_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f4ea94a_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/f4ea94a_Supporting-Document_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "f4ea94a_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f4ea94a_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/f4ea94a_add_journal_durable_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "f4ea94a_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f4ea94a_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/f4ea94a_moment.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "f4ea94a_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f4ea94a_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/f4ea94a_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "f4ea94a_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f4ea94a_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/f4ea94a_date_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "f4ea94a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f4ea94a") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/f4ea94a.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 45
        echo " ";
        
        $__internal_068fabca0d833abab07be75dc821a0e0da31d6c5943c56ba15ccea30da09bf3b->leave($__internal_068fabca0d833abab07be75dc821a0e0da31d6c5943c56ba15ccea30da09bf3b_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:journaldurable:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 45,  159 => 43,  155 => 32,  150 => 31,  144 => 30,  136 => 27,  130 => 26,  120 => 23,  114 => 22,  104 => 18,  99 => 17,  93 => 16,  85 => 13,  53 => 11,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets */
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.css'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.themify.css'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.css'*/
/*         'bundles/isetsomagazine/css/cssload-finger.css'*/
/*         filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     */
/* {% endblock %}*/
/* */
/* {% block breadcrumb %}*/
/*     <a href="{{ path('journaldurable_index') }}">*/
/*        {{ 'journaldurable.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block breadcrumbActive %}*/
/*     {{ 'journaldurable.new.name'|trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'Template/JournalAddFormTemplate.html.twig' with {'form_name': 'journaldurable.new.name'|trans } %}*/
/* {% endblock %} */
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*         'bundles/isetsomagazine/myPlugins/Supporting-Document.js'*/
/*         'bundles/isetsomagazine/myjs/add_journal_durable.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %} */
