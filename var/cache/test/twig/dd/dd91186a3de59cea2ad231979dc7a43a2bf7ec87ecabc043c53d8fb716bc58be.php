<?php

/* base.html.twig */
class __TwigTemplate_16f0354f20acfdf9b30db9e94af3d9a12b883751297e5d7d8913a9652d34d14b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9caa7001f4fa994f39bc6fb386a4360fa3e9ca23fd68854a93a9da0efb8d4a25 = $this->env->getExtension("native_profiler");
        $__internal_9caa7001f4fa994f39bc6fb386a4360fa3e9ca23fd68854a93a9da0efb8d4a25->enter($__internal_9caa7001f4fa994f39bc6fb386a4360fa3e9ca23fd68854a93a9da0efb8d4a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9caa7001f4fa994f39bc6fb386a4360fa3e9ca23fd68854a93a9da0efb8d4a25->leave($__internal_9caa7001f4fa994f39bc6fb386a4360fa3e9ca23fd68854a93a9da0efb8d4a25_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd5c35f2dddc1e268aabab343f400993d52cfe4d9bef81b5d461752df7bf8e25 = $this->env->getExtension("native_profiler");
        $__internal_bd5c35f2dddc1e268aabab343f400993d52cfe4d9bef81b5d461752df7bf8e25->enter($__internal_bd5c35f2dddc1e268aabab343f400993d52cfe4d9bef81b5d461752df7bf8e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bd5c35f2dddc1e268aabab343f400993d52cfe4d9bef81b5d461752df7bf8e25->leave($__internal_bd5c35f2dddc1e268aabab343f400993d52cfe4d9bef81b5d461752df7bf8e25_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff4b6e5300871936a75707c2e2f0ca919afcf49c538effc6513abe8d3aec2318 = $this->env->getExtension("native_profiler");
        $__internal_ff4b6e5300871936a75707c2e2f0ca919afcf49c538effc6513abe8d3aec2318->enter($__internal_ff4b6e5300871936a75707c2e2f0ca919afcf49c538effc6513abe8d3aec2318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ff4b6e5300871936a75707c2e2f0ca919afcf49c538effc6513abe8d3aec2318->leave($__internal_ff4b6e5300871936a75707c2e2f0ca919afcf49c538effc6513abe8d3aec2318_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_67a9735559739d669adf916c9aea93da33679d23e600f14685023c6fd29fc104 = $this->env->getExtension("native_profiler");
        $__internal_67a9735559739d669adf916c9aea93da33679d23e600f14685023c6fd29fc104->enter($__internal_67a9735559739d669adf916c9aea93da33679d23e600f14685023c6fd29fc104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_67a9735559739d669adf916c9aea93da33679d23e600f14685023c6fd29fc104->leave($__internal_67a9735559739d669adf916c9aea93da33679d23e600f14685023c6fd29fc104_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66e0200d8b35c9bb031825e124ea511e38f4aaba38d0dc5b6d45239221b51253 = $this->env->getExtension("native_profiler");
        $__internal_66e0200d8b35c9bb031825e124ea511e38f4aaba38d0dc5b6d45239221b51253->enter($__internal_66e0200d8b35c9bb031825e124ea511e38f4aaba38d0dc5b6d45239221b51253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_66e0200d8b35c9bb031825e124ea511e38f4aaba38d0dc5b6d45239221b51253->leave($__internal_66e0200d8b35c9bb031825e124ea511e38f4aaba38d0dc5b6d45239221b51253_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
