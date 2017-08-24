<?php

/* ISETSOMagazineBundle:journalconsumable:edit.html.twig */
class __TwigTemplate_0edf2f0ba2a6bbb0b61d8bb02b6405a138a6d59d03daafa379e5112d37d8c6bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:journalconsumable:edit.html.twig", 1);
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
        $__internal_6901ca1e8af3cee959586fdb9389c2bc2f385c4aed692ece6683cc1e9f18633b = $this->env->getExtension("native_profiler");
        $__internal_6901ca1e8af3cee959586fdb9389c2bc2f385c4aed692ece6683cc1e9f18633b->enter($__internal_6901ca1e8af3cee959586fdb9389c2bc2f385c4aed692ece6683cc1e9f18633b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:journalconsumable:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6901ca1e8af3cee959586fdb9389c2bc2f385c4aed692ece6683cc1e9f18633b->leave($__internal_6901ca1e8af3cee959586fdb9389c2bc2f385c4aed692ece6683cc1e9f18633b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2fca1908f0cd91d170adf267704f085991aca83e949d14eaeec916ec13ddded7 = $this->env->getExtension("native_profiler");
        $__internal_2fca1908f0cd91d170adf267704f085991aca83e949d14eaeec916ec13ddded7->enter($__internal_2fca1908f0cd91d170adf267704f085991aca83e949d14eaeec916ec13ddded7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3849eb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3849eb_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e3849eb_dataTables.bootstrap_1.css");
            // line 10
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
        // line 12
        echo "    
";
        
        $__internal_2fca1908f0cd91d170adf267704f085991aca83e949d14eaeec916ec13ddded7->leave($__internal_2fca1908f0cd91d170adf267704f085991aca83e949d14eaeec916ec13ddded7_prof);

    }

    // line 14
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e5dcdba54248c27971847fa2311e69ce18c6fb56f645b041741e7e8b95d6201f = $this->env->getExtension("native_profiler");
        $__internal_e5dcdba54248c27971847fa2311e69ce18c6fb56f645b041741e7e8b95d6201f->enter($__internal_e5dcdba54248c27971847fa2311e69ce18c6fb56f645b041741e7e8b95d6201f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 15
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("journalconsumable_index");
        echo "\">
       ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_e5dcdba54248c27971847fa2311e69ce18c6fb56f645b041741e7e8b95d6201f->leave($__internal_e5dcdba54248c27971847fa2311e69ce18c6fb56f645b041741e7e8b95d6201f_prof);

    }

    // line 19
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_c582107e9c1bd2a19563b9199b481dcbc27da76409c32a658993d2b15bba2817 = $this->env->getExtension("native_profiler");
        $__internal_c582107e9c1bd2a19563b9199b481dcbc27da76409c32a658993d2b15bba2817->enter($__internal_c582107e9c1bd2a19563b9199b481dcbc27da76409c32a658993d2b15bba2817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("journalconsumable.edit.name"), "html", null, true);
        
        $__internal_c582107e9c1bd2a19563b9199b481dcbc27da76409c32a658993d2b15bba2817->leave($__internal_c582107e9c1bd2a19563b9199b481dcbc27da76409c32a658993d2b15bba2817_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfce65099cf455c9aa2967a40dc0b096fe51d8dc03c721e59c202a592688b5aa = $this->env->getExtension("native_profiler");
        $__internal_dfce65099cf455c9aa2967a40dc0b096fe51d8dc03c721e59c202a592688b5aa->enter($__internal_dfce65099cf455c9aa2967a40dc0b096fe51d8dc03c721e59c202a592688b5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    ";
        $this->loadTemplate("Template/JournalAddFormTemplate.html.twig", "ISETSOMagazineBundle:journalconsumable:edit.html.twig", 21)->display(array_merge($context, array("form_name" => $this->env->getExtension('translator')->trans("journalconsumable.edit.name"))));
        
        $__internal_dfce65099cf455c9aa2967a40dc0b096fe51d8dc03c721e59c202a592688b5aa->leave($__internal_dfce65099cf455c9aa2967a40dc0b096fe51d8dc03c721e59c202a592688b5aa_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52d49173533f0dbbe50e6e6889214ad0f0ad99691812a411b35022055af13fd5 = $this->env->getExtension("native_profiler");
        $__internal_52d49173533f0dbbe50e6e6889214ad0f0ad99691812a411b35022055af13fd5->enter($__internal_52d49173533f0dbbe50e6e6889214ad0f0ad99691812a411b35022055af13fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bbd5968_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbd5968_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bbd5968_jquery.dataTables_1.js");
            // line 37
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bbd5968_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbd5968_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bbd5968_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bbd5968_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbd5968_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bbd5968_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bbd5968_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbd5968_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bbd5968_select2.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bbd5968_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbd5968_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bbd5968_moment.min_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bbd5968_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbd5968_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bbd5968_bootstrap-datepicker_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bbd5968_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbd5968_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bbd5968_date_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bbd5968_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbd5968_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bbd5968_Supporting-Document-edit_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bbd5968_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbd5968_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bbd5968_edit_journal_consumable_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "bbd5968"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbd5968") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bbd5968.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 39
        echo " ";
        
        $__internal_52d49173533f0dbbe50e6e6889214ad0f0ad99691812a411b35022055af13fd5->leave($__internal_52d49173533f0dbbe50e6e6889214ad0f0ad99691812a411b35022055af13fd5_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:journalconsumable:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 39,  155 => 37,  151 => 25,  146 => 24,  140 => 23,  132 => 21,  126 => 20,  114 => 19,  104 => 16,  99 => 15,  93 => 14,  85 => 12,  53 => 10,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
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
/* 	 {% block breadcrumbActive %}{{ 'journalconsumable.edit.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/*     {% include 'Template/JournalAddFormTemplate.html.twig' with {'form_name': 'journalconsumable.edit.name'|trans } %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*         'bundles/isetsomagazine/plugins/form-select2/select2.min.js'*/
/*         'bundles/isetsomagazine/plugins/form-daterangepicker/moment.min.js'*/
/*         'bundles/isetsomagazine/plugins/bootstrap-datepicker/bootstrap-datepicker.js'*/
/*         'bundles/isetsomagazine/myjs/date.js'*/
/*         'bundles/isetsomagazine/myPlugins/Supporting-Document-edit.js'*/
/*         'bundles/isetsomagazine/myjs/edit_journal_consumable.js'*/
/* */
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*  {% endblock %}*/
/*   */
/* */
