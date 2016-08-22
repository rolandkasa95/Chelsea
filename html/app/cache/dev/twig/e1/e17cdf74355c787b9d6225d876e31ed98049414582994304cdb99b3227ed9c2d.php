<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_fb539dbdfba6bede5e5f442e25770c5eea6e8305a215cf32d9ac5c39fb9a3c57 extends Twig_Template
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
        $__internal_14659dcaa01dad85fd316872084ab1017324acdd54cf00440b064b602e42ff5b = $this->env->getExtension("native_profiler");
        $__internal_14659dcaa01dad85fd316872084ab1017324acdd54cf00440b064b602e42ff5b->enter($__internal_14659dcaa01dad85fd316872084ab1017324acdd54cf00440b064b602e42ff5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_14659dcaa01dad85fd316872084ab1017324acdd54cf00440b064b602e42ff5b->leave($__internal_14659dcaa01dad85fd316872084ab1017324acdd54cf00440b064b602e42ff5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
