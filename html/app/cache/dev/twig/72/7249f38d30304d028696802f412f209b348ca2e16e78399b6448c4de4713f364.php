<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b23156d2f50b41231b3280229de575b8424b4802737681f952daa4baeaac7efa extends Twig_Template
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
        $__internal_4701648af1a66589124657d4c25f7952a385e7b7fbae4ab8b1d800a4dd7f9d60 = $this->env->getExtension("native_profiler");
        $__internal_4701648af1a66589124657d4c25f7952a385e7b7fbae4ab8b1d800a4dd7f9d60->enter($__internal_4701648af1a66589124657d4c25f7952a385e7b7fbae4ab8b1d800a4dd7f9d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4701648af1a66589124657d4c25f7952a385e7b7fbae4ab8b1d800a4dd7f9d60->leave($__internal_4701648af1a66589124657d4c25f7952a385e7b7fbae4ab8b1d800a4dd7f9d60_prof);

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
