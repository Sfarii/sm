<?php

/* FOSMessageBundle:Message:newThread.html.twig */
class __TwigTemplate_c1695c8a76088cfa29220b854e79d303e09949f32013fb14d228bb46a2a9a870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:newThread.html.twig", 1);
        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6b4ed53d30e5fe2f1df2ad9b06d336ebdc1a4b101fc1c17d5a30378e86bd0c1 = $this->env->getExtension("native_profiler");
        $__internal_c6b4ed53d30e5fe2f1df2ad9b06d336ebdc1a4b101fc1c17d5a30378e86bd0c1->enter($__internal_c6b4ed53d30e5fe2f1df2ad9b06d336ebdc1a4b101fc1c17d5a30378e86bd0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:newThread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6b4ed53d30e5fe2f1df2ad9b06d336ebdc1a4b101fc1c17d5a30378e86bd0c1->leave($__internal_c6b4ed53d30e5fe2f1df2ad9b06d336ebdc1a4b101fc1c17d5a30378e86bd0c1_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_e461b168d62e47baa473158e098905d23659f9fb40afcd252b0f1d71ea7c10af = $this->env->getExtension("native_profiler");
        $__internal_e461b168d62e47baa473158e098905d23659f9fb40afcd252b0f1d71ea7c10af->enter($__internal_e461b168d62e47baa473158e098905d23659f9fb40afcd252b0f1d71ea7c10af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "<div class=\"panel panel-primary\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
\t<div class=\"panel-heading\">
    \t<div class=\"pull-left\">
    \t\t<h2><i class=\"fa fa-plus-square-o\"></i> ";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("send_new", array(), "FOSMessageBundle");
        echo "</h2>
    \t</div>
    </div>
    \t
    \t<form novalidate=\"novalidate\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("fos_message_thread_new");
        echo "\" class=\"form-horizontal row-border\" method=\"post\">

\t    \t<div class=\"panel-body\">
\t        
\t        \t<div class=\"col-md-12\">
\t\t\t    <div class=\"form-group\" style=\"margin-top: 5%;\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-child\"></i></span>
\t\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recipient", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "recipients")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recipient", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-envelope-o\"></i></span>
\t\t\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "subject")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-envelope-o\"></i></span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "4", "placeholder" => "body", "style" => "margin: 0px; height: 85px;")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t
\t\t\t\t</div> 
\t\t\t</div> 
\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-paper-plane-o\" aria-hidden=\"true\"></i> ";
        // line 50
        echo $this->env->getExtension('translator')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo " 
\t\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t\t
        </div>
    </div>
    

";
        
        $__internal_e461b168d62e47baa473158e098905d23659f9fb40afcd252b0f1d71ea7c10af->leave($__internal_e461b168d62e47baa473158e098905d23659f9fb40afcd252b0f1d71ea7c10af_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:newThread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 50,  106 => 44,  100 => 41,  94 => 38,  82 => 29,  77 => 27,  69 => 22,  64 => 20,  52 => 11,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'FOSMessageBundle::layout.html.twig' %}*/
/* */
/* {% block fos_message_content %}*/
/* <div class="panel panel-primary" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/* 	<div class="panel-heading">*/
/*     	<div class="pull-left">*/
/*     		<h2><i class="fa fa-plus-square-o"></i> {% trans from 'FOSMessageBundle' %}send_new{% endtrans %}</h2>*/
/*     	</div>*/
/*     </div>*/
/*     	*/
/*     	<form novalidate="novalidate" action="{{ url('fos_message_thread_new') }}" class="form-horizontal row-border" method="post">*/
/* */
/* 	    	<div class="panel-body">*/
/* 	        */
/* 	        	<div class="col-md-12">*/
/* 			    <div class="form-group" style="margin-top: 5%;">*/
/* 					<div class="col-md-6">*/
/* 						<div class="input-group input-group-lg">*/
/* 							<span class="input-group-addon"><i class="fa fa-child"></i></span>*/
/* 								{{ form_widget(form.recipient, { 'attr': {'class': 'form-control input-lg' , 'placeholder' : 'recipients'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.recipient) }}*/
/* 					</div>*/
/* 					<div class="col-md-6">*/
/* 						<div class="input-group input-group-lg">*/
/* 							<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>*/
/* 								{{ form_widget(form.subject, { 'attr': {'class': 'form-control input-lg', 'placeholder' : 'subject' } }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.subject) }}*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="form-group">*/
/* 					<div class="col-md-12">*/
/* 						<div class="input-group input-group-lg">*/
/* 							<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>*/
/* 							*/
/* 								{{ form_widget(form.body, { 'attr': {'class': 'form-control', 'rows':"4", 'placeholder' : 'body' , 'style':"margin: 0px; height: 85px;"  } }) }}*/
/* 							</div>*/
/* 						*/
/* 						{{ form_errors(form.body) }}*/
/* 					</div>*/
/* 				</div>*/
/* 				{{ form_widget(form) }}*/
/* 				*/
/* 				</div> */
/* 			</div> */
/* 			<div class="panel-footer">*/
/* 					<div class="pull-right">*/
/* 						<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> {% trans from 'FOSMessageBundle' %}sent{% endtrans %} */
/* 						</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</form>*/
/* 		*/
/*         </div>*/
/*     </div>*/
/*     */
/* */
/* {% endblock %}*/
