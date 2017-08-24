<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_848a055f1f3ccef0316d42e852b6efd5552e3d3212090c42c11dc0aa9e31ffee extends Twig_Template
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
        $__internal_4ea5e6056e61b0ef209ed38ebfd3f3ba2a0355b3daa84293008d72ce73886c23 = $this->env->getExtension("native_profiler");
        $__internal_4ea5e6056e61b0ef209ed38ebfd3f3ba2a0355b3daa84293008d72ce73886c23->enter($__internal_4ea5e6056e61b0ef209ed38ebfd3f3ba2a0355b3daa84293008d72ce73886c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4ea5e6056e61b0ef209ed38ebfd3f3ba2a0355b3daa84293008d72ce73886c23->leave($__internal_4ea5e6056e61b0ef209ed38ebfd3f3ba2a0355b3daa84293008d72ce73886c23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
