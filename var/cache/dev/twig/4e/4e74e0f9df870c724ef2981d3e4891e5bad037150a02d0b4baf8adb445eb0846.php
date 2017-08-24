<?php

/* FOSMessageBundle:Message:thread.html.twig */
class __TwigTemplate_740998f56cf5a8eb019c29eb1eadd27f7d4691da89e98cc43bc9ede15aea1e4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:thread.html.twig", 1);
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
        $__internal_6fe096f870b409d560b3553d812f28331bba2569fb5a32f9f8d4c45e1998497a = $this->env->getExtension("native_profiler");
        $__internal_6fe096f870b409d560b3553d812f28331bba2569fb5a32f9f8d4c45e1998497a->enter($__internal_6fe096f870b409d560b3553d812f28331bba2569fb5a32f9f8d4c45e1998497a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:thread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fe096f870b409d560b3553d812f28331bba2569fb5a32f9f8d4c45e1998497a->leave($__internal_6fe096f870b409d560b3553d812f28331bba2569fb5a32f9f8d4c45e1998497a_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_37809fab985054ef0c578e9bdd4fde8f42b2cf808d970770b71cd7835ddd0011 = $this->env->getExtension("native_profiler");
        $__internal_37809fab985054ef0c578e9bdd4fde8f42b2cf808d970770b71cd7835ddd0011->enter($__internal_37809fab985054ef0c578e9bdd4fde8f42b2cf808d970770b71cd7835ddd0011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "<div class=\"panel panel-inbox\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
        <div class=\"inbox-mail-heading\">
                <div class=\"clearfix\">
                    <div class=\"pull-left\">
                        
                        <div class=\"btn-group\">
                            <a href=\"#\" class=\"btn btn-lg btn-default\"><i class=\"ti ti-reload\"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        <div class=\"panel-body messages messages-img\">
            <div class=\"col-sm-12\" style=\"margin-bottom: 2%;margin-top: 2%;\">

                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "                    ";
            if (($this->getAttribute($context["message"], "sender", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))) {
                // line 21
                echo "
                        <div class=\"item item-visible\">
                            <div class=\"image\">
                                <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/isetsomagazine/img/User-icon.png"), "html", null, true);
                echo "\">
                            </div>                                
                            <div class=\"text\">
                                <div class=\"heading\">
                                    <a href=\"#\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "sender", array()), "html", null, true);
                echo "</a>
                                    <span class=\"date\">";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array())), "html", null, true);
                echo "</span>
                                </div>                                    
                                ";
                // line 31
                echo twig_escape_filter($this->env, twig_wordwrap_filter($this->env, $this->getAttribute($context["message"], "body", array()), 20), "html", null, true);
                echo "
                            </div>
                        </div>
                    
                    ";
            } else {
                // line 36
                echo "                        
                        <div class=\"item in item-visible\">
                            <div class=\"image\">
                                <img src=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/isetsomagazine/img/User-icon.png"), "html", null, true);
                echo "\">
                            </div>                                
                            <div class=\"text\">
                                <div class=\"heading\">
                                    <a href=\"#\">";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "sender", array()), "html", null, true);
                echo "</a>
                                    <span class=\"date\">";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array())), "html", null, true);
                echo "</span>
                                </div>                                    
                                ";
                // line 46
                echo twig_escape_filter($this->env, twig_wordwrap_filter($this->env, $this->getAttribute($context["message"], "body", array()), 20), "html", null, true);
                echo "
                            </div>
                        </div>
                    
                    ";
            }
            // line 51
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </div>
        </div>
        <div class=\"panel-footer\">
            <form action=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                
                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "1")));
        echo "
                    <div style=\"margin-top: 1%;\">
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 60
        echo $this->env->getExtension('translator')->getTranslator()->trans("reply", array(), "FOSMessageBundle");
        echo "</button>
                    </div>
                
                 
            </form>  
        </div>
    </div>
";
        
        $__internal_37809fab985054ef0c578e9bdd4fde8f42b2cf808d970770b71cd7835ddd0011->leave($__internal_37809fab985054ef0c578e9bdd4fde8f42b2cf808d970770b71cd7835ddd0011_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 60,  142 => 58,  137 => 56,  133 => 55,  128 => 52,  122 => 51,  114 => 46,  109 => 44,  105 => 43,  98 => 39,  93 => 36,  85 => 31,  80 => 29,  76 => 28,  69 => 24,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'FOSMessageBundle::layout.html.twig' %}*/
/* */
/* {% block fos_message_content %}*/
/* <div class="panel panel-inbox" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*         <div class="inbox-mail-heading">*/
/*                 <div class="clearfix">*/
/*                     <div class="pull-left">*/
/*                         */
/*                         <div class="btn-group">*/
/*                             <a href="#" class="btn btn-lg btn-default"><i class="ti ti-reload"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*         <div class="panel-body messages messages-img">*/
/*             <div class="col-sm-12" style="margin-bottom: 2%;margin-top: 2%;">*/
/* */
/*                 {% for message in thread.messages %}*/
/*                     {% if message.sender == app.user.username %}*/
/* */
/*                         <div class="item item-visible">*/
/*                             <div class="image">*/
/*                                 <img src="{{ asset('bundles/isetsomagazine/img/User-icon.png')}}">*/
/*                             </div>                                */
/*                             <div class="text">*/
/*                                 <div class="heading">*/
/*                                     <a href="#">{{ message.sender }}</a>*/
/*                                     <span class="date">{{ message.createdAt|date}}</span>*/
/*                                 </div>                                    */
/*                                 {{ message.body|wordwrap(20) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     */
/*                     {% else %}*/
/*                         */
/*                         <div class="item in item-visible">*/
/*                             <div class="image">*/
/*                                 <img src="{{ asset('bundles/isetsomagazine/img/User-icon.png')}}">*/
/*                             </div>                                */
/*                             <div class="text">*/
/*                                 <div class="heading">*/
/*                                     <a href="#">{{ message.sender }}</a>*/
/*                                     <span class="date">{{ message.createdAt|date}}</span>*/
/*                                 </div>                                    */
/*                                 {{ message.body|wordwrap(20) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     */
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*             <form action="{{ url('fos_message_thread_view', {'threadId': thread.id}) }}" method="post">*/
/*                 {{ form_widget(form._token) }}*/
/*                 */
/*                     {{ form_widget(form.body, { 'attr': {'class': 'form-control' ,'rows' : '1'} }) }}*/
/*                     <div style="margin-top: 1%;">*/
/*                         <button type="submit" class="btn btn-primary">{% trans from 'FOSMessageBundle' %}reply{% endtrans %}</button>*/
/*                     </div>*/
/*                 */
/*                  */
/*             </form>  */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
