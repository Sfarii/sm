<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2af8f68860bebf7c4784bb0dcbd9f8614211b150e5a8bb223ded2e863eae1987 extends Twig_Template
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
        $__internal_448f30ae7ebf2827f32455661e25428c7ad6576f963b10500b5675b78ab6519c = $this->env->getExtension("native_profiler");
        $__internal_448f30ae7ebf2827f32455661e25428c7ad6576f963b10500b5675b78ab6519c->enter($__internal_448f30ae7ebf2827f32455661e25428c7ad6576f963b10500b5675b78ab6519c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_448f30ae7ebf2827f32455661e25428c7ad6576f963b10500b5675b78ab6519c->leave($__internal_448f30ae7ebf2827f32455661e25428c7ad6576f963b10500b5675b78ab6519c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
