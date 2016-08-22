<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d3b70bd5082da12a15878c09fc671827684e307cfeb8895d806941f3b8d74d62 extends Twig_Template
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
        $__internal_9ac0516883b7eb86c1f845c003fb9d9e748723bd038a357d5f22788b68942f19 = $this->env->getExtension("native_profiler");
        $__internal_9ac0516883b7eb86c1f845c003fb9d9e748723bd038a357d5f22788b68942f19->enter($__internal_9ac0516883b7eb86c1f845c003fb9d9e748723bd038a357d5f22788b68942f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9ac0516883b7eb86c1f845c003fb9d9e748723bd038a357d5f22788b68942f19->leave($__internal_9ac0516883b7eb86c1f845c003fb9d9e748723bd038a357d5f22788b68942f19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
