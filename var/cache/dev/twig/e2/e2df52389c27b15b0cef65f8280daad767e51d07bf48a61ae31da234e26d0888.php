<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c1501e81caf52d0326a9514f6cc754b0f3c590f4b85690e7227915b590fda977 extends Twig_Template
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
        $__internal_2a0db74fbf4ebc1bc6c52b29952c286ee45242d8e0229a92c64dfa0da38a1d38 = $this->env->getExtension("native_profiler");
        $__internal_2a0db74fbf4ebc1bc6c52b29952c286ee45242d8e0229a92c64dfa0da38a1d38->enter($__internal_2a0db74fbf4ebc1bc6c52b29952c286ee45242d8e0229a92c64dfa0da38a1d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2a0db74fbf4ebc1bc6c52b29952c286ee45242d8e0229a92c64dfa0da38a1d38->leave($__internal_2a0db74fbf4ebc1bc6c52b29952c286ee45242d8e0229a92c64dfa0da38a1d38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
