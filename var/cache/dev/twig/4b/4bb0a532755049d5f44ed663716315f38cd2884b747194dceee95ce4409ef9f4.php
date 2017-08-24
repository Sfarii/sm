<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_91c537c5f0520cfa16a57bfae99aaaff8a6ad81587fee91d45c36282d349748d extends Twig_Template
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
        $__internal_0374a796455bf0c2972abd0ff2bdb7c90dc8427aa8b047e7d02751ecee64dfbe = $this->env->getExtension("native_profiler");
        $__internal_0374a796455bf0c2972abd0ff2bdb7c90dc8427aa8b047e7d02751ecee64dfbe->enter($__internal_0374a796455bf0c2972abd0ff2bdb7c90dc8427aa8b047e7d02751ecee64dfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0374a796455bf0c2972abd0ff2bdb7c90dc8427aa8b047e7d02751ecee64dfbe->leave($__internal_0374a796455bf0c2972abd0ff2bdb7c90dc8427aa8b047e7d02751ecee64dfbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
