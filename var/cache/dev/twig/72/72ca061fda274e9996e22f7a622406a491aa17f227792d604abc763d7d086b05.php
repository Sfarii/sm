<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8cd5a97994d683664cd476451b5bbacf4b2ef572d0de2db4dc4df71e6e310f84 extends Twig_Template
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
        $__internal_28ad198508cb95ad589723d8edcd69d8ae28dabb391256e941b48d743e1e87de = $this->env->getExtension("native_profiler");
        $__internal_28ad198508cb95ad589723d8edcd69d8ae28dabb391256e941b48d743e1e87de->enter($__internal_28ad198508cb95ad589723d8edcd69d8ae28dabb391256e941b48d743e1e87de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_28ad198508cb95ad589723d8edcd69d8ae28dabb391256e941b48d743e1e87de->leave($__internal_28ad198508cb95ad589723d8edcd69d8ae28dabb391256e941b48d743e1e87de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
