<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_271a02b9cf965771a68fd1feea0f387c95f3241f46d17bcdd33ad3114958b232 extends Twig_Template
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
        $__internal_1a8db382bb1ef987f4d7e3e253887d5c4b1db0801bb4a438d8cf636ad1dc5a4c = $this->env->getExtension("native_profiler");
        $__internal_1a8db382bb1ef987f4d7e3e253887d5c4b1db0801bb4a438d8cf636ad1dc5a4c->enter($__internal_1a8db382bb1ef987f4d7e3e253887d5c4b1db0801bb4a438d8cf636ad1dc5a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1a8db382bb1ef987f4d7e3e253887d5c4b1db0801bb4a438d8cf636ad1dc5a4c->leave($__internal_1a8db382bb1ef987f4d7e3e253887d5c4b1db0801bb4a438d8cf636ad1dc5a4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
