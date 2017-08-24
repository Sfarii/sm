<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ee071802e5430120f18ad41ccb84552ef80f508a1dce0cf753c3e3f3573d8be8 extends Twig_Template
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
        $__internal_9368c882843d1213546223fed78ad87ca599adb9cf59f5b8064b682351f01b70 = $this->env->getExtension("native_profiler");
        $__internal_9368c882843d1213546223fed78ad87ca599adb9cf59f5b8064b682351f01b70->enter($__internal_9368c882843d1213546223fed78ad87ca599adb9cf59f5b8064b682351f01b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9368c882843d1213546223fed78ad87ca599adb9cf59f5b8064b682351f01b70->leave($__internal_9368c882843d1213546223fed78ad87ca599adb9cf59f5b8064b682351f01b70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
