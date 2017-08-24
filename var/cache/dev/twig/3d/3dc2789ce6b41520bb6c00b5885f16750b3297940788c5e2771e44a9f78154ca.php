<?php

/* ::form.html.twig */
class __TwigTemplate_e25b889868bee014e7cb968a35fe4ffd7f7eaa491be89c348218fcc8c076eba5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_errors' => array($this, 'block_form_errors'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a08327ba78991aa8adc245c03e86fc186b9359d1365fbb08141e8ec10b9ff465 = $this->env->getExtension("native_profiler");
        $__internal_a08327ba78991aa8adc245c03e86fc186b9359d1365fbb08141e8ec10b9ff465->enter($__internal_a08327ba78991aa8adc245c03e86fc186b9359d1365fbb08141e8ec10b9ff465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::form.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        // line 17
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 37
        $this->displayBlock('form_widget', $context, $blocks);
        // line 45
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 56
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 67
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 71
        $this->displayBlock('form_errors', $context, $blocks);
        // line 81
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 86
        $this->displayBlock('form', $context, $blocks);
        // line 92
        $this->displayBlock('form_start', $context, $blocks);
        // line 105
        $this->displayBlock('form_label', $context, $blocks);
        
        $__internal_a08327ba78991aa8adc245c03e86fc186b9359d1365fbb08141e8ec10b9ff465->leave($__internal_a08327ba78991aa8adc245c03e86fc186b9359d1365fbb08141e8ec10b9ff465_prof);

    }

    // line 1
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0049e6eff0eb83f51ccb37d96dc63f19d9cf207ac3aa1c40ae4d291fb0464618 = $this->env->getExtension("native_profiler");
        $__internal_0049e6eff0eb83f51ccb37d96dc63f19d9cf207ac3aa1c40ae4d291fb0464618->enter($__internal_0049e6eff0eb83f51ccb37d96dc63f19d9cf207ac3aa1c40ae4d291fb0464618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 2
        echo "\t";
        ob_start();
        // line 3
        echo "        <div class=\"form-group ";
        echo (((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) ? ("has-error") : (""));
        echo "\">
            <label class=\" col-sm-3 text-right\">
                ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
            </label>
            <div class=\"col-sm-7\">
            \t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    \t\t</div>\t
        </div>
\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 13
        echo "\t
    
";
        
        $__internal_0049e6eff0eb83f51ccb37d96dc63f19d9cf207ac3aa1c40ae4d291fb0464618->leave($__internal_0049e6eff0eb83f51ccb37d96dc63f19d9cf207ac3aa1c40ae4d291fb0464618_prof);

    }

    // line 17
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_99564dd45103e485e24f13f4077b178110a9f5e1bfe949e6e3d58a077b326790 = $this->env->getExtension("native_profiler");
        $__internal_99564dd45103e485e24f13f4077b178110a9f5e1bfe949e6e3d58a077b326790->enter($__internal_99564dd45103e485e24f13f4077b178110a9f5e1bfe949e6e3d58a077b326790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 18
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 19
            $context["required"] = false;
        }
        // line 21
        echo "<select style= \"width:100% !important\" class =\"form-control populate\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 22
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 23
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 25
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 26
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 27
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 28
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 29
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 32
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 33
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 34
        echo "</select>";
        
        $__internal_99564dd45103e485e24f13f4077b178110a9f5e1bfe949e6e3d58a077b326790->leave($__internal_99564dd45103e485e24f13f4077b178110a9f5e1bfe949e6e3d58a077b326790_prof);

    }

    // line 37
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_d29296870043739cdf67f0be8c72d5b92ed930df66931c50e27820bedd782d64 = $this->env->getExtension("native_profiler");
        $__internal_d29296870043739cdf67f0be8c72d5b92ed930df66931c50e27820bedd782d64->enter($__internal_d29296870043739cdf67f0be8c72d5b92ed930df66931c50e27820bedd782d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 38
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 39
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_d29296870043739cdf67f0be8c72d5b92ed930df66931c50e27820bedd782d64->leave($__internal_d29296870043739cdf67f0be8c72d5b92ed930df66931c50e27820bedd782d64_prof);

    }

    // line 45
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_57215faf98cbb6ed27648c062b5833b5e144b232d7f0ad3619229966fc8e26af = $this->env->getExtension("native_profiler");
        $__internal_57215faf98cbb6ed27648c062b5833b5e144b232d7f0ad3619229966fc8e26af->enter($__internal_57215faf98cbb6ed27648c062b5833b5e144b232d7f0ad3619229966fc8e26af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 46
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 47
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "date")) {
            // line 48
            $context["type"] = "text";
            // line 49
            echo "<input placeholder=\"Date\" class=\"form-control date\"  type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo "/>
            
        ";
        } else {
            // line 52
            echo "        <input class=\"form-control\"  type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo "/>
        ";
        }
        
        $__internal_57215faf98cbb6ed27648c062b5833b5e144b232d7f0ad3619229966fc8e26af->leave($__internal_57215faf98cbb6ed27648c062b5833b5e144b232d7f0ad3619229966fc8e26af_prof);

    }

    // line 56
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_212cc6ba2060fcddb90650dfec4ff62d839415e9acb06b83a61a763589682db2 = $this->env->getExtension("native_profiler");
        $__internal_212cc6ba2060fcddb90650dfec4ff62d839415e9acb06b83a61a763589682db2->enter($__internal_212cc6ba2060fcddb90650dfec4ff62d839415e9acb06b83a61a763589682db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 57
        echo "<div class=\"form-group\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 58
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 61
        $this->displayBlock("form_rows", $context, $blocks);
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 63
        echo "</div>";
        
        $__internal_212cc6ba2060fcddb90650dfec4ff62d839415e9acb06b83a61a763589682db2->leave($__internal_212cc6ba2060fcddb90650dfec4ff62d839415e9acb06b83a61a763589682db2_prof);

    }

    // line 67
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d09a18de09a08111f97bca27119d4808ab8365ec416d91c0ad476b3bb37a6c8c = $this->env->getExtension("native_profiler");
        $__internal_d09a18de09a08111f97bca27119d4808ab8365ec416d91c0ad476b3bb37a6c8c->enter($__internal_d09a18de09a08111f97bca27119d4808ab8365ec416d91c0ad476b3bb37a6c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 68
        echo "<textarea placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.placeholder.default", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\" class=\"form-control\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_d09a18de09a08111f97bca27119d4808ab8365ec416d91c0ad476b3bb37a6c8c->leave($__internal_d09a18de09a08111f97bca27119d4808ab8365ec416d91c0ad476b3bb37a6c8c_prof);

    }

    // line 71
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_78f6e9cad8f41f1e06e3331f0a784364bb4c7f172362fd345c725a4968f8d894 = $this->env->getExtension("native_profiler");
        $__internal_78f6e9cad8f41f1e06e3331f0a784364bb4c7f172362fd345c725a4968f8d894->enter($__internal_78f6e9cad8f41f1e06e3331f0a784364bb4c7f172362fd345c725a4968f8d894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 72
        echo "    ";
        ob_start();
        // line 73
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 74
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 75
                echo "                    <p class=\"help-block\" ><i class=\"fa fa-exclamation-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        ";
        }
        // line 78
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_78f6e9cad8f41f1e06e3331f0a784364bb4c7f172362fd345c725a4968f8d894->leave($__internal_78f6e9cad8f41f1e06e3331f0a784364bb4c7f172362fd345c725a4968f8d894_prof);

    }

    // line 81
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_72ee4c10c4b9273f2dfb26fc97061a7963bea8c78c9bfe0698ff6dde756e82c1 = $this->env->getExtension("native_profiler");
        $__internal_72ee4c10c4b9273f2dfb26fc97061a7963bea8c78c9bfe0698ff6dde756e82c1->enter($__internal_72ee4c10c4b9273f2dfb26fc97061a7963bea8c78c9bfe0698ff6dde756e82c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 82
        echo "<input class=\"icheck\" type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_72ee4c10c4b9273f2dfb26fc97061a7963bea8c78c9bfe0698ff6dde756e82c1->leave($__internal_72ee4c10c4b9273f2dfb26fc97061a7963bea8c78c9bfe0698ff6dde756e82c1_prof);

    }

    // line 86
    public function block_form($context, array $blocks = array())
    {
        $__internal_aabc6a7299f3398115e8961e41e8b01da2c0e89eae4eb88f029f8c8336afb26e = $this->env->getExtension("native_profiler");
        $__internal_aabc6a7299f3398115e8961e41e8b01da2c0e89eae4eb88f029f8c8336afb26e->enter($__internal_aabc6a7299f3398115e8961e41e8b01da2c0e89eae4eb88f029f8c8336afb26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 87
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 89
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_aabc6a7299f3398115e8961e41e8b01da2c0e89eae4eb88f029f8c8336afb26e->leave($__internal_aabc6a7299f3398115e8961e41e8b01da2c0e89eae4eb88f029f8c8336afb26e_prof);

    }

    // line 92
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_ac28be3d75c6192cb512c2adbe16c432a407e6909e1369a7a3ecfcbc364a1773 = $this->env->getExtension("native_profiler");
        $__internal_ac28be3d75c6192cb512c2adbe16c432a407e6909e1369a7a3ecfcbc364a1773->enter($__internal_ac28be3d75c6192cb512c2adbe16c432a407e6909e1369a7a3ecfcbc364a1773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 93
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 94
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 95
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 97
            $context["form_method"] = "POST";
        }
        // line 99
        echo "<form novalidate=\"novalidate\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 100
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 101
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_ac28be3d75c6192cb512c2adbe16c432a407e6909e1369a7a3ecfcbc364a1773->leave($__internal_ac28be3d75c6192cb512c2adbe16c432a407e6909e1369a7a3ecfcbc364a1773_prof);

    }

    // line 105
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a33f647872a4c43cb35d17211300ecfdb0816dffb30e83b445744a4c9c490099 = $this->env->getExtension("native_profiler");
        $__internal_a33f647872a4c43cb35d17211300ecfdb0816dffb30e83b445744a4c9c490099->enter($__internal_a33f647872a4c43cb35d17211300ecfdb0816dffb30e83b445744a4c9c490099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 106
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 107
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 108
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 110
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 111
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 113
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 114
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 115
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 116
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 117
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 120
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 123
            echo "<label class=\"control-label text-info text-capitalize\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "> ";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_a33f647872a4c43cb35d17211300ecfdb0816dffb30e83b445744a4c9c490099->leave($__internal_a33f647872a4c43cb35d17211300ecfdb0816dffb30e83b445744a4c9c490099_prof);

    }

    public function getTemplateName()
    {
        return "::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  428 => 123,  424 => 120,  421 => 117,  420 => 116,  419 => 115,  417 => 114,  415 => 113,  412 => 111,  410 => 110,  407 => 108,  405 => 107,  403 => 106,  397 => 105,  387 => 101,  385 => 100,  358 => 99,  355 => 97,  352 => 95,  350 => 94,  348 => 93,  342 => 92,  335 => 89,  333 => 88,  331 => 87,  325 => 86,  308 => 82,  302 => 81,  294 => 78,  291 => 77,  282 => 75,  277 => 74,  274 => 73,  271 => 72,  265 => 71,  252 => 68,  246 => 67,  239 => 63,  237 => 62,  235 => 61,  232 => 59,  230 => 58,  226 => 57,  220 => 56,  201 => 52,  186 => 49,  184 => 48,  182 => 47,  180 => 46,  174 => 45,  166 => 41,  163 => 39,  161 => 38,  155 => 37,  148 => 34,  146 => 33,  144 => 32,  138 => 29,  136 => 28,  134 => 27,  132 => 26,  130 => 25,  121 => 23,  119 => 22,  112 => 21,  109 => 19,  107 => 18,  101 => 17,  92 => 13,  85 => 9,  81 => 8,  75 => 5,  69 => 3,  66 => 2,  60 => 1,  53 => 105,  51 => 92,  49 => 86,  47 => 81,  45 => 71,  43 => 67,  41 => 56,  39 => 45,  37 => 37,  35 => 17,  33 => 1,);
    }
}
/* {% block form_row %}*/
/* 	{% spaceless %}*/
/*         <div class="form-group {{ errors|length > 0 ? "has-error" : ""}}">*/
/*             <label class=" col-sm-3 text-right">*/
/*                 {{ form_label(form) }}*/
/*             </label>*/
/*             <div class="col-sm-7">*/
/*             	{{ form_widget(form) }}*/
/*                 {{ form_errors(form) }}*/
/*     		</div>	*/
/*         </div>*/
/* 	{% endspaceless %}*/
/* 	*/
/*     */
/* {% endblock form_row %}*/
/* */
/* {%- block choice_widget_collapsed -%}*/
/*     {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}*/
/*         {% set required = false %}*/
/*     {%- endif -%}*/
/*     <select style= "width:100% !important" class ="form-control populate" {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*         {%- if placeholder is not none -%}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>*/
/*         {%- endif -%}*/
/*         {%- if preferred_choices|length > 0 -%}*/
/*             {% set options = preferred_choices %}*/
/*             {{- block('choice_widget_options') -}}*/
/*             {%- if choices|length > 0 and separator is not none -%}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         {%- set options = choices -%}*/
/*         {{- block('choice_widget_options') -}}*/
/*     </select>*/
/* {%- endblock choice_widget_collapsed -%}*/
/* */
/* {%- block form_widget -%}*/
/*     {% if compound %}*/
/*         {{- block('form_widget_compound') -}}*/
/*     {% else %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% endif %}*/
/* {%- endblock form_widget -%}*/
/* */
/* {%- block form_widget_simple -%}*/
/*     {%- set type = type|default('text') -%}*/
/*         {% if type == "date" %}*/
/*             {%- set type = "text" -%}*/
/*             <input placeholder="Date" class="form-control date"  type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*             */
/*         {% else %}*/
/*         <input class="form-control"  type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*         {% endif %}*/
/* {%- endblock form_widget_simple -%}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     <div class="form-group" {{ block('widget_container_attributes') }}>*/
/*         {%- if form.parent is empty -%}*/
/*             {{ form_errors(form) }}*/
/*         {%- endif -%}*/
/*         {{- block('form_rows') -}}*/
/*         {{- form_rest(form) -}}*/
/*     </div>*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* */
/* {%- block textarea_widget -%}*/
/*     <textarea placeholder="{{ 'magazine.placeholder.default'|trans({}, translation_domain) }}" class="form-control" {{ block('widget_attributes') }}>{{ value }}</textarea>      */
/* {%- endblock textarea_widget -%}*/
/* */
/* {% block form_errors %}*/
/*     {% spaceless %}*/
/*         {% if errors|length > 0 %}*/
/*                 {% for error in errors %}*/
/*                     <p class="help-block" ><i class="fa fa-exclamation-circle"></i> {{ error.message }}</p>*/
/*                 {% endfor %}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_errors %}*/
/* */
/* {%- block checkbox_widget -%}*/
/*     <input class="icheck" type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* */
/* {%- endblock checkbox_widget -%}*/
/* */
/* {%- block form -%}*/
/*     {{ form_start(form) }}*/
/*         {{- form_widget(form) -}}*/
/*     {{ form_end(form) }}*/
/* {%- endblock form -%}*/
/* */
/* {%- block form_start -%}*/
/*     {% set method = method|upper %}*/
/*     {%- if method in ["GET", "POST"] -%}*/
/*         {% set form_method = method %}*/
/*     {%- else -%}*/
/*         {% set form_method = "POST" %}*/
/*     {%- endif -%}*/
/*     <form novalidate="novalidate" name="{{ name }}" method="{{ form_method|lower }}"{% if action != '' %} action="{{ action }}"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {%- if form_method != method -%}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {%- endif -%}*/
/* {%- endblock form_start -%}*/
/* */
/* {%- block form_label -%}*/
/*     {% if label is not same as(false) -%}*/
/*         {% if not compound -%}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {%- endif -%}*/
/*         {% if required -%}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {%- endif -%}*/
/*         {% if label is empty -%}*/
/*             {%- if label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         <label class="control-label text-info text-capitalize" {% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}> {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>*/
/*     {%- endif -%}*/
/* {%- endblock form_label -%}*/
