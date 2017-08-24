<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_fffd41f74c145ae573f2d5a03a74ccb8decb57e417209b1f0d39b7ab0844bb4e extends Twig_Template
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
        $__internal_c0a139148b3d3dada86adc52988a34dee063a1eed7c08e8c377e56d71d74f9a5 = $this->env->getExtension("native_profiler");
        $__internal_c0a139148b3d3dada86adc52988a34dee063a1eed7c08e8c377e56d71d74f9a5->enter($__internal_c0a139148b3d3dada86adc52988a34dee063a1eed7c08e8c377e56d71d74f9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c0a139148b3d3dada86adc52988a34dee063a1eed7c08e8c377e56d71d74f9a5->leave($__internal_c0a139148b3d3dada86adc52988a34dee063a1eed7c08e8c377e56d71d74f9a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
