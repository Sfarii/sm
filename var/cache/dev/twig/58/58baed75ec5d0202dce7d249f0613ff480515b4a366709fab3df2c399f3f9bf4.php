<?php

/* FOSMessageBundle:Message:threads_list.html.twig */
class __TwigTemplate_3f45d8f4fb6edfc8125169ee0a195536cff002d2e8426d9b299542533c4f5bcf extends Twig_Template
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
        $__internal_4359e73dbc94c53793e92f83352a59102c13afc99474ae09cf07a4769ba2a1bf = $this->env->getExtension("native_profiler");
        $__internal_4359e73dbc94c53793e92f83352a59102c13afc99474ae09cf07a4769ba2a1bf->enter($__internal_4359e73dbc94c53793e92f83352a59102c13afc99474ae09cf07a4769ba2a1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:threads_list.html.twig"));

        // line 1
        echo "<div class=\"input-group mb-xl\">
  <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Search mail...\">
  <span class=\"input-group-btn\">
    <button class=\"btn btn-default btn-lg\" type=\"button\"><i class=\"ti ti-search\"></i></button>
  </span>
</div><!-- /input-group -->


<div class=\"panel panel-inbox\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
        <div class=\"panel-body\">
            
            <table class=\"table table-hover table-inbox table-vam\">
                <tbody>
                    ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads"))) != 0)) {
            // line 15
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 16
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "#message_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "id", array()), "html", null, true);
                echo "\">
                            <tr>
                                <td class=\"inbox-msg-snip\"><div class=\"inbox-from-name\">
                                    <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\">
                                     ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "createdBy", array()), "html", null, true);
                echo "</a></div></td>
                                <td class=\"inbox-msg-attach\">
                                    ";
                // line 22
                if ( !$this->env->getExtension('fos_message')->isRead($context["thread"])) {
                    // line 23
                    echo "                                        <span class=\"label label-primary\" width=\"58%\">";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("new", array(), "messages");
                    echo "</span>
                                    
                                    ";
                }
                // line 26
                echo "                                    
                                    <i class=\"fa fa-envelope\"></i> ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "subject", array()), "html", null, true);
                echo " ... </td>
                                <td>
                                    ";
                // line 29
                if ($this->getAttribute($context["thread"], "lastMessage", array())) {
                    // line 30
                    echo "                                        ";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("on", array("%date%" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "createdAt", array()))), "FOSMessageBundle");
                    // line 31
                    echo "                                        <br />
                                        ";
                    // line 32
                    echo $this->env->getExtension('translator')->getTranslator()->trans("by", array("%sender%" => twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "sender", array()))), "FOSMessageBundle");
                    // line 33
                    echo "                                    ";
                } else {
                    // line 34
                    echo "                                        ----
                                    ";
                }
                // line 36
                echo "                                </td>
                                <td width=\"5%\">
                                     <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "#message_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "id", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("goto_last", array(), "FOSMessageBundle");
                echo "\">
                                           <span class=\"fa fa-mail-reply\"></span>
                                        </a>
                                </td>
                                <td width=\"4%\">
                                    ";
                // line 43
                if ($this->env->getExtension('fos_message')->canDeleteThread($context["thread"])) {
                    // line 44
                    echo "                                        ";
                    if ($this->env->getExtension('fos_message')->isThreadDeletedByParticipant($context["thread"])) {
                        // line 45
                        echo "                                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_undelete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 46
                        echo "                                            ";
                        ob_start();
                        echo $this->env->getExtension('translator')->getTranslator()->trans("undelete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 47
                        echo "                                        ";
                    } else {
                        // line 48
                        echo "                                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_delete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 49
                        echo "                                            ";
                        ob_start();
                        echo $this->env->getExtension('translator')->getTranslator()->trans("delete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 50
                        echo "                                        ";
                    }
                    // line 51
                    echo "                                        <form action=\"";
                    echo twig_escape_filter($this->env, (isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")), "html", null, true);
                    echo "\" method=\"post\">
                                            <button type=\"submit\" class=\"btn btn-default\">
                                                <i class=\"ti ti-trash\"></i>
                                                
                                            </button>
                                        </form>
                                    ";
                }
                // line 58
                echo "                                </td>
                                </tr>
                            </tr>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                    ";
        } else {
            // line 64
            echo "                        <tr>
                            <td colspan=\"6\">
                                ";
            // line 66
            echo $this->env->getExtension('translator')->getTranslator()->trans("no_thread", array(), "FOSMessageBundle");
            echo ".
                            </td>
                        </tr>
                    ";
        }
        // line 70
        echo "                </tbody>
            </table>
            <div class=\"inbox-mail-footer\">
                
                <div class=\"clearfix\">
                    <div class=\"pull-right\">
                        ";
        // line 76
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>";
        
        $__internal_4359e73dbc94c53793e92f83352a59102c13afc99474ae09cf07a4769ba2a1bf->leave($__internal_4359e73dbc94c53793e92f83352a59102c13afc99474ae09cf07a4769ba2a1bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:threads_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 76,  178 => 70,  171 => 66,  167 => 64,  164 => 63,  154 => 58,  143 => 51,  140 => 50,  135 => 49,  130 => 48,  127 => 47,  122 => 46,  117 => 45,  114 => 44,  112 => 43,  100 => 38,  96 => 36,  92 => 34,  89 => 33,  87 => 32,  84 => 31,  81 => 30,  79 => 29,  74 => 27,  71 => 26,  64 => 23,  62 => 22,  57 => 20,  53 => 19,  44 => 16,  39 => 15,  37 => 14,  22 => 1,);
    }
}
/* <div class="input-group mb-xl">*/
/*   <input type="text" class="form-control input-lg" placeholder="Search mail...">*/
/*   <span class="input-group-btn">*/
/*     <button class="btn btn-default btn-lg" type="button"><i class="ti ti-search"></i></button>*/
/*   </span>*/
/* </div><!-- /input-group -->*/
/* */
/* */
/* <div class="panel panel-inbox" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*         <div class="panel-body">*/
/*             */
/*             <table class="table table-hover table-inbox table-vam">*/
/*                 <tbody>*/
/*                     {% if threads|length != 0 %}*/
/*                         {% for thread in threads %}*/
/*                             <a href="{{ url('fos_message_thread_view', {'threadId': thread.id}) }}#message_{{ thread.lastMessage.id }}">*/
/*                             <tr>*/
/*                                 <td class="inbox-msg-snip"><div class="inbox-from-name">*/
/*                                     <a href="{{ url('fos_message_thread_view', {'threadId': thread.id}) }}">*/
/*                                      {{ thread.createdBy }}</a></div></td>*/
/*                                 <td class="inbox-msg-attach">*/
/*                                     {% if not fos_message_is_read(thread) %}*/
/*                                         <span class="label label-primary" width="58%">{% trans %}new{% endtrans %}</span>*/
/*                                     */
/*                                     {% endif %}*/
/*                                     */
/*                                     <i class="fa fa-envelope"></i> {{ thread.subject }} ... </td>*/
/*                                 <td>*/
/*                                     {% if thread.lastMessage %}*/
/*                                         {% trans with {'%date%': thread.lastMessage.createdAt|date} from 'FOSMessageBundle' %}on{% endtrans %}*/
/*                                         <br />*/
/*                                         {% trans with {'%sender%': thread.lastMessage.sender|e } from 'FOSMessageBundle' %}by{% endtrans %}*/
/*                                     {% else %}*/
/*                                         ----*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                                 <td width="5%">*/
/*                                      <a href="{{ url('fos_message_thread_view', {'threadId': thread.id}) }}#message_{{ thread.lastMessage.id }}" title="{% trans from 'FOSMessageBundle' %}goto_last{% endtrans %}">*/
/*                                            <span class="fa fa-mail-reply"></span>*/
/*                                         </a>*/
/*                                 </td>*/
/*                                 <td width="4%">*/
/*                                     {% if fos_message_can_delete_thread(thread) %}*/
/*                                         {% if fos_message_deleted_by_participant(thread) %}*/
/*                                             {% set formAction %}{{ url('fos_message_thread_undelete', {'threadId': thread.id}) }}{% endset %}*/
/*                                             {% set submitValue %}{% trans from 'FOSMessageBundle' %}undelete{% endtrans %}{% endset %}*/
/*                                         {% else %}*/
/*                                             {% set formAction %}{{ url('fos_message_thread_delete', {'threadId': thread.id}) }}{% endset %}*/
/*                                             {% set submitValue %}{% trans from 'FOSMessageBundle' %}delete{% endtrans %}{% endset %}*/
/*                                         {% endif %}*/
/*                                         <form action="{{ formAction }}" method="post">*/
/*                                             <button type="submit" class="btn btn-default">*/
/*                                                 <i class="ti ti-trash"></i>*/
/*                                                 */
/*                                             </button>*/
/*                                         </form>*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                                 </tr>*/
/*                             </tr>*/
/* */
/*                         {% endfor %}*/
/*                     {% else %}*/
/*                         <tr>*/
/*                             <td colspan="6">*/
/*                                 {% trans from 'FOSMessageBundle' %}no_thread{% endtrans %}.*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endif %}*/
/*                 </tbody>*/
/*             </table>*/
/*             <div class="inbox-mail-footer">*/
/*                 */
/*                 <div class="clearfix">*/
/*                     <div class="pull-right">*/
/*                         {{ knp_pagination_render(threads) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
