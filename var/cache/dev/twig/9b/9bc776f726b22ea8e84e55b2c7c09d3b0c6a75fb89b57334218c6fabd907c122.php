<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7e7ca1dd876328d6cb8eb581ae51abacf67163e7faee9965f5b4eca4172c2e17 extends Twig_Template
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
        $__internal_998577d2a7aa4176dec19f2047cddcb1f7d2fa535f24f1f47742849d7d364168 = $this->env->getExtension("native_profiler");
        $__internal_998577d2a7aa4176dec19f2047cddcb1f7d2fa535f24f1f47742849d7d364168->enter($__internal_998577d2a7aa4176dec19f2047cddcb1f7d2fa535f24f1f47742849d7d364168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_998577d2a7aa4176dec19f2047cddcb1f7d2fa535f24f1f47742849d7d364168->leave($__internal_998577d2a7aa4176dec19f2047cddcb1f7d2fa535f24f1f47742849d7d364168_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
