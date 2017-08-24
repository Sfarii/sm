<?php

/* FOSMessageBundle::layout.html.twig */
class __TwigTemplate_98ab66aef38479918cfa17fba23a84f5636ad6b5aa7a456dfa08e8835d24882b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSMessageBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_077d298dffa38f9a8ab69587d5543e86df416d2f9593aa32a9cc86686bbd5825 = $this->env->getExtension("native_profiler");
        $__internal_077d298dffa38f9a8ab69587d5543e86df416d2f9593aa32a9cc86686bbd5825->enter($__internal_077d298dffa38f9a8ab69587d5543e86df416d2f9593aa32a9cc86686bbd5825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_077d298dffa38f9a8ab69587d5543e86df416d2f9593aa32a9cc86686bbd5825->leave($__internal_077d298dffa38f9a8ab69587d5543e86df416d2f9593aa32a9cc86686bbd5825_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_56c81cbfe5de7e3c7eb52240e2c72e398909568dd851c90e22dae908c72677bb = $this->env->getExtension("native_profiler");
        $__internal_56c81cbfe5de7e3c7eb52240e2c72e398909568dd851c90e22dae908c72677bb->enter($__internal_56c81cbfe5de7e3c7eb52240e2c72e398909568dd851c90e22dae908c72677bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    
<div class=\"row\">
    <div class=\"col-sm-3\">
        <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("fos_message_thread_new");
        echo "\" class=\"btn btn-lg btn-indigo btn-block mb-xl\">
            ";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("send_new", array(), "FOSMessageBundle");
        echo "</a>
        
        <div class=\"list-group inbox-menu list-group-alternate\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("fos_message_inbox");
        echo "\" class=\"list-group-item active\"><i class=\"ti ti-email\"></i>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("inbox", array(), "FOSMessageBundle");
        echo " <span class=\"badge badge-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('fos_message')->getNbUnread(), "html", null, true);
        echo "</span></a>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("fos_message_sent");
        echo "\" class=\"list-group-item\"><i class=\"ti ti-share\"></i>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo " </a>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("fos_message_deleted");
        echo "\" class=\"list-group-item\"><i class=\"ti ti-trash\"></i>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("deleted", array(), "FOSMessageBundle");
        echo "</a>
        </div>
    </div><!-- col-sm-3 -->
    <div class=\"col-sm-9\">
        ";
        // line 16
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 17
        echo "    </div>
</div>
";
        
        $__internal_56c81cbfe5de7e3c7eb52240e2c72e398909568dd851c90e22dae908c72677bb->leave($__internal_56c81cbfe5de7e3c7eb52240e2c72e398909568dd851c90e22dae908c72677bb_prof);

    }

    // line 16
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_5d942bdd8abac0cb692cc161c39cd54fe6d77b22ae3c5f827bbb868b7c5e196e = $this->env->getExtension("native_profiler");
        $__internal_5d942bdd8abac0cb692cc161c39cd54fe6d77b22ae3c5f827bbb868b7c5e196e->enter($__internal_5d942bdd8abac0cb692cc161c39cd54fe6d77b22ae3c5f827bbb868b7c5e196e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        
        $__internal_5d942bdd8abac0cb692cc161c39cd54fe6d77b22ae3c5f827bbb868b7c5e196e->leave($__internal_5d942bdd8abac0cb692cc161c39cd54fe6d77b22ae3c5f827bbb868b7c5e196e_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  81 => 17,  79 => 16,  70 => 12,  64 => 11,  56 => 10,  50 => 7,  46 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     */
/* <div class="row">*/
/*     <div class="col-sm-3">*/
/*         <a href="{{ url('fos_message_thread_new') }}" class="btn btn-lg btn-indigo btn-block mb-xl">*/
/*             {% trans from 'FOSMessageBundle' %}send_new{% endtrans %}</a>*/
/*         */
/*         <div class="list-group inbox-menu list-group-alternate">*/
/*             <a href="{{ url('fos_message_inbox') }}" class="list-group-item active"><i class="ti ti-email"></i>{% trans from 'FOSMessageBundle' %}inbox{% endtrans %} <span class="badge badge-primary">{{ fos_message_nb_unread() }}</span></a>*/
/*             <a href="{{ url('fos_message_sent') }}" class="list-group-item"><i class="ti ti-share"></i>{% trans from 'FOSMessageBundle' %}sent{% endtrans %} </a>*/
/*             <a href="{{ url('fos_message_deleted') }}" class="list-group-item"><i class="ti ti-trash"></i>{% trans from 'FOSMessageBundle' %}deleted{% endtrans %}</a>*/
/*         </div>*/
/*     </div><!-- col-sm-3 -->*/
/*     <div class="col-sm-9">*/
/*         {% block fos_message_content %}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
