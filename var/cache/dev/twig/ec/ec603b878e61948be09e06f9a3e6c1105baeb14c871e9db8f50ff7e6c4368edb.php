<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0081d65acc8b73b3a38d6f7c3fbf664a3222876bf29a273e3b4609c2373c36be extends Twig_Template
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
        $__internal_317cab2ad37ac5a781f33ef797fb28c6f05cc524f98fa43761c70d7e99ab09a7 = $this->env->getExtension("native_profiler");
        $__internal_317cab2ad37ac5a781f33ef797fb28c6f05cc524f98fa43761c70d7e99ab09a7->enter($__internal_317cab2ad37ac5a781f33ef797fb28c6f05cc524f98fa43761c70d7e99ab09a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_317cab2ad37ac5a781f33ef797fb28c6f05cc524f98fa43761c70d7e99ab09a7->leave($__internal_317cab2ad37ac5a781f33ef797fb28c6f05cc524f98fa43761c70d7e99ab09a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
