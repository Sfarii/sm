<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_380d5ddbc0f37ae59be3d67f2e3edf34a52c28ae294465985b1c2cf75db45c46 extends Twig_Template
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
        $__internal_f45300828d6f88fa1c1917defef45036881e10be99f1dab5d596c92b6e1bad35 = $this->env->getExtension("native_profiler");
        $__internal_f45300828d6f88fa1c1917defef45036881e10be99f1dab5d596c92b6e1bad35->enter($__internal_f45300828d6f88fa1c1917defef45036881e10be99f1dab5d596c92b6e1bad35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f45300828d6f88fa1c1917defef45036881e10be99f1dab5d596c92b6e1bad35->leave($__internal_f45300828d6f88fa1c1917defef45036881e10be99f1dab5d596c92b6e1bad35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
