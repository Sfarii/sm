<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_9b6e117194defa0b527d4a7cafce55dd96b7681d591024ea93cac3b03dc4d9e9 extends Twig_Template
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
        $__internal_f4df13527554d9e2b650eed14cd07681dda0967bd34a3e949892386be4ce350d = $this->env->getExtension("native_profiler");
        $__internal_f4df13527554d9e2b650eed14cd07681dda0967bd34a3e949892386be4ce350d->enter($__internal_f4df13527554d9e2b650eed14cd07681dda0967bd34a3e949892386be4ce350d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f4df13527554d9e2b650eed14cd07681dda0967bd34a3e949892386be4ce350d->leave($__internal_f4df13527554d9e2b650eed14cd07681dda0967bd34a3e949892386be4ce350d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
