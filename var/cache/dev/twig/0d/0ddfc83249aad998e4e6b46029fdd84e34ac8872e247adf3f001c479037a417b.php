<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_1e531c4e996fd6806c542bba08eec5d38668148c22fc200f6fd5d7381854d96a extends Twig_Template
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
        $__internal_9b169bcecc383d9f2cc595258e4e82537ce201bea86baacfebe8777959fdcf48 = $this->env->getExtension("native_profiler");
        $__internal_9b169bcecc383d9f2cc595258e4e82537ce201bea86baacfebe8777959fdcf48->enter($__internal_9b169bcecc383d9f2cc595258e4e82537ce201bea86baacfebe8777959fdcf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9b169bcecc383d9f2cc595258e4e82537ce201bea86baacfebe8777959fdcf48->leave($__internal_9b169bcecc383d9f2cc595258e4e82537ce201bea86baacfebe8777959fdcf48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
