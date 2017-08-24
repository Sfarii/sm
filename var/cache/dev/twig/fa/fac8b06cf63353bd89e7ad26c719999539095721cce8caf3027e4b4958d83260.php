<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b2b0e0741a4ba0132ea42d4cc828b8208c34a8c2e59fc6168eaf2245191b1314 extends Twig_Template
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
        $__internal_f30ca878fff7b774169dafa51fda03fae7b3f840fa70b0fb17735a103835a8c7 = $this->env->getExtension("native_profiler");
        $__internal_f30ca878fff7b774169dafa51fda03fae7b3f840fa70b0fb17735a103835a8c7->enter($__internal_f30ca878fff7b774169dafa51fda03fae7b3f840fa70b0fb17735a103835a8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f30ca878fff7b774169dafa51fda03fae7b3f840fa70b0fb17735a103835a8c7->leave($__internal_f30ca878fff7b774169dafa51fda03fae7b3f840fa70b0fb17735a103835a8c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
