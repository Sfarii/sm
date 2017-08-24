<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1c8c975085332b2842bc315c598e185bb6ccaa701a80fb3dc11ad87c81def782 extends Twig_Template
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
        $__internal_ad730e89b21ee4dac48f369087535476954689511404dfc3f9ed4cd882ae6691 = $this->env->getExtension("native_profiler");
        $__internal_ad730e89b21ee4dac48f369087535476954689511404dfc3f9ed4cd882ae6691->enter($__internal_ad730e89b21ee4dac48f369087535476954689511404dfc3f9ed4cd882ae6691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ad730e89b21ee4dac48f369087535476954689511404dfc3f9ed4cd882ae6691->leave($__internal_ad730e89b21ee4dac48f369087535476954689511404dfc3f9ed4cd882ae6691_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
