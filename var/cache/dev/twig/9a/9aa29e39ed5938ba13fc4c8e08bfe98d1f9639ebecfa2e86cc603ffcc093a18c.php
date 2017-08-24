<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ab276fc1e59a804866543e0340b946514a96817c1be61097f7a2756ea5ae74ee extends Twig_Template
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
        $__internal_d770b4a03a5f35aadd68bd6f6502edbd0cba07e9136be2ed1f9da31647e65c67 = $this->env->getExtension("native_profiler");
        $__internal_d770b4a03a5f35aadd68bd6f6502edbd0cba07e9136be2ed1f9da31647e65c67->enter($__internal_d770b4a03a5f35aadd68bd6f6502edbd0cba07e9136be2ed1f9da31647e65c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d770b4a03a5f35aadd68bd6f6502edbd0cba07e9136be2ed1f9da31647e65c67->leave($__internal_d770b4a03a5f35aadd68bd6f6502edbd0cba07e9136be2ed1f9da31647e65c67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
