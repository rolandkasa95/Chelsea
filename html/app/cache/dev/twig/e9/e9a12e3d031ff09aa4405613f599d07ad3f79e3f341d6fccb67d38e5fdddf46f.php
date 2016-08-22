<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5d7c3c0b7ad82e3cdb2a12c997a8ea23fab1383289a7fe571dad4e92673ad32a extends Twig_Template
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
        $__internal_a345a457c220dea504116288963f848affd3351e51d96d6ff47a6a8af79b05ee = $this->env->getExtension("native_profiler");
        $__internal_a345a457c220dea504116288963f848affd3351e51d96d6ff47a6a8af79b05ee->enter($__internal_a345a457c220dea504116288963f848affd3351e51d96d6ff47a6a8af79b05ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a345a457c220dea504116288963f848affd3351e51d96d6ff47a6a8af79b05ee->leave($__internal_a345a457c220dea504116288963f848affd3351e51d96d6ff47a6a8af79b05ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
