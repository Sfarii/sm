<?php

/* ISETSOMagazineBundle:articleconsumable:edit.html.twig */
class __TwigTemplate_5b28cef149ced9b5f608acf99656c4e6c8b103c12f3ce70f32212c814743e385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:articleconsumable:edit.html.twig", 1);
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
        $__internal_3670b3beb7dcbf6afc4a463a95d40c0c0350704cea34ebf112b52b831db24e2f = $this->env->getExtension("native_profiler");
        $__internal_3670b3beb7dcbf6afc4a463a95d40c0c0350704cea34ebf112b52b831db24e2f->enter($__internal_3670b3beb7dcbf6afc4a463a95d40c0c0350704cea34ebf112b52b831db24e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:articleconsumable:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3670b3beb7dcbf6afc4a463a95d40c0c0350704cea34ebf112b52b831db24e2f->leave($__internal_3670b3beb7dcbf6afc4a463a95d40c0c0350704cea34ebf112b52b831db24e2f_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_870528d4bb60f3d7730e6ddafdf786ed1f640f8557cb2beedc2f0ae6b89f7a3e = $this->env->getExtension("native_profiler");
        $__internal_870528d4bb60f3d7730e6ddafdf786ed1f640f8557cb2beedc2f0ae6b89f7a3e->enter($__internal_870528d4bb60f3d7730e6ddafdf786ed1f640f8557cb2beedc2f0ae6b89f7a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("articleconsumable_index");
        echo "\">
       ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articleconsumable.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_870528d4bb60f3d7730e6ddafdf786ed1f640f8557cb2beedc2f0ae6b89f7a3e->leave($__internal_870528d4bb60f3d7730e6ddafdf786ed1f640f8557cb2beedc2f0ae6b89f7a3e_prof);

    }

    // line 9
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_6e78471a1fb8bf848299da0c0ed1f4787c7f6d86110c5a6d905e3cfd3f1fccae = $this->env->getExtension("native_profiler");
        $__internal_6e78471a1fb8bf848299da0c0ed1f4787c7f6d86110c5a6d905e3cfd3f1fccae->enter($__internal_6e78471a1fb8bf848299da0c0ed1f4787c7f6d86110c5a6d905e3cfd3f1fccae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("articleconsumable.edit.name"), "html", null, true);
        echo "
";
        
        $__internal_6e78471a1fb8bf848299da0c0ed1f4787c7f6d86110c5a6d905e3cfd3f1fccae->leave($__internal_6e78471a1fb8bf848299da0c0ed1f4787c7f6d86110c5a6d905e3cfd3f1fccae_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a29334d6c0822c2526360eb735da2a6225d55b96af0db068a7a2304b4f6b53c = $this->env->getExtension("native_profiler");
        $__internal_5a29334d6c0822c2526360eb735da2a6225d55b96af0db068a7a2304b4f6b53c->enter($__internal_5a29334d6c0822c2526360eb735da2a6225d55b96af0db068a7a2304b4f6b53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        $this->loadTemplate("Template/SingleFormTemplate.html.twig", "ISETSOMagazineBundle:articleconsumable:edit.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "form_name" => $this->env->getExtension('translator')->trans("articleconsumable.edit.name"), "submit_name" => $this->env->getExtension('translator')->trans("articleconsumable.edit.submit"))));
        
        $__internal_5a29334d6c0822c2526360eb735da2a6225d55b96af0db068a7a2304b4f6b53c->leave($__internal_5a29334d6c0822c2526360eb735da2a6225d55b96af0db068a7a2304b4f6b53c_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1d214ac29d253c259f77734d6aa9995a0d847e4df937d1106e8db5842af9683 = $this->env->getExtension("native_profiler");
        $__internal_d1d214ac29d253c259f77734d6aa9995a0d847e4df937d1106e8db5842af9683->enter($__internal_d1d214ac29d253c259f77734d6aa9995a0d847e4df937d1106e8db5842af9683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    
    ";
        // line 19
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c626016_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c626016_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/c626016_article_consumable_1.js");
            // line 24
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "c626016"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c626016") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/c626016.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "    
";
        
        $__internal_d1d214ac29d253c259f77734d6aa9995a0d847e4df937d1106e8db5842af9683->leave($__internal_d1d214ac29d253c259f77734d6aa9995a0d847e4df937d1106e8db5842af9683_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:articleconsumable:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 26,  106 => 24,  102 => 21,  97 => 19,  94 => 18,  88 => 17,  80 => 14,  74 => 13,  64 => 10,  58 => 9,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     <a href="{{ path('articleconsumable_index') }}">*/
/*        {{ 'articleconsumable.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block breadcrumbActive %}*/
/*     {{ 'articleconsumable.edit.name'|trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'Template/SingleFormTemplate.html.twig' with {'form': edit_form ,'form_name' : 'articleconsumable.edit.name'|trans ,'submit_name': 'articleconsumable.edit.submit'|trans } %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     */
/*     {{ parent() }}*/
/* */
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/myjs/article_consumable.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     */
/* {% endblock %}*/
