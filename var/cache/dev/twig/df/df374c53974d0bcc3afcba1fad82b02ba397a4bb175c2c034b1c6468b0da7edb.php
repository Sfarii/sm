<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9e86580de7afe03e18039ca98b45f3bee5b2b9b1c1933449c0b152b85e05dba8 extends Twig_Template
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
        $__internal_dc7bbb8bec5886723265f2d1b6ce21f11c48e85aad9bdb88ec21649af915eb51 = $this->env->getExtension("native_profiler");
        $__internal_dc7bbb8bec5886723265f2d1b6ce21f11c48e85aad9bdb88ec21649af915eb51->enter($__internal_dc7bbb8bec5886723265f2d1b6ce21f11c48e85aad9bdb88ec21649af915eb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_dc7bbb8bec5886723265f2d1b6ce21f11c48e85aad9bdb88ec21649af915eb51->leave($__internal_dc7bbb8bec5886723265f2d1b6ce21f11c48e85aad9bdb88ec21649af915eb51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
