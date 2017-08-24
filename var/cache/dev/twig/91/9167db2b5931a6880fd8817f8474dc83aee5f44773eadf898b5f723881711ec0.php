<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2134f5b7f409e0f382282256030948cee641e294016cfc05b20f1322b5f2a1dd extends Twig_Template
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
        $__internal_a8b384613f4f76335dc64502f52a5c6bda4fa9e2535ad3da523feab5085bcada = $this->env->getExtension("native_profiler");
        $__internal_a8b384613f4f76335dc64502f52a5c6bda4fa9e2535ad3da523feab5085bcada->enter($__internal_a8b384613f4f76335dc64502f52a5c6bda4fa9e2535ad3da523feab5085bcada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a8b384613f4f76335dc64502f52a5c6bda4fa9e2535ad3da523feab5085bcada->leave($__internal_a8b384613f4f76335dc64502f52a5c6bda4fa9e2535ad3da523feab5085bcada_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
