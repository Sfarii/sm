<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9ba4bffa17a246fa56864a86fc446adf49a4d39d43c5acb4e4c961c2f8ab074e extends Twig_Template
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
        $__internal_f32eec114ad279ad388d521ac83b01e52680709b415bd5ee4ba97684cbc3fa24 = $this->env->getExtension("native_profiler");
        $__internal_f32eec114ad279ad388d521ac83b01e52680709b415bd5ee4ba97684cbc3fa24->enter($__internal_f32eec114ad279ad388d521ac83b01e52680709b415bd5ee4ba97684cbc3fa24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f32eec114ad279ad388d521ac83b01e52680709b415bd5ee4ba97684cbc3fa24->leave($__internal_f32eec114ad279ad388d521ac83b01e52680709b415bd5ee4ba97684cbc3fa24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
