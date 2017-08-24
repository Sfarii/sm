<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_4e1936178a6876751fc034c7f26a952d1548a9d890ea3f464054d9180a7bc2bf extends Twig_Template
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
        $__internal_e2520c31a5054c55da5a53f8764b6710259e5665a8b4dd051ab74d1925fcca76 = $this->env->getExtension("native_profiler");
        $__internal_e2520c31a5054c55da5a53f8764b6710259e5665a8b4dd051ab74d1925fcca76->enter($__internal_e2520c31a5054c55da5a53f8764b6710259e5665a8b4dd051ab74d1925fcca76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e2520c31a5054c55da5a53f8764b6710259e5665a8b4dd051ab74d1925fcca76->leave($__internal_e2520c31a5054c55da5a53f8764b6710259e5665a8b4dd051ab74d1925fcca76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
