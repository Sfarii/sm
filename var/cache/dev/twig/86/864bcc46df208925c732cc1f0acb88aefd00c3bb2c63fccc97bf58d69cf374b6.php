<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_552b9139cc123a277c751c73869698d1a17cea0c360db22ff72c45d7823a2b32 extends Twig_Template
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
        $__internal_f850779b2e090c319fede18a1bb6107c1d9e95fc81393f47b9bc4316b9209831 = $this->env->getExtension("native_profiler");
        $__internal_f850779b2e090c319fede18a1bb6107c1d9e95fc81393f47b9bc4316b9209831->enter($__internal_f850779b2e090c319fede18a1bb6107c1d9e95fc81393f47b9bc4316b9209831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f850779b2e090c319fede18a1bb6107c1d9e95fc81393f47b9bc4316b9209831->leave($__internal_f850779b2e090c319fede18a1bb6107c1d9e95fc81393f47b9bc4316b9209831_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
