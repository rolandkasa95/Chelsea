<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c3a361a47479a19e5a1026969dc4d36b7582239ba9bcb06d10aef1c427c50c13 extends Twig_Template
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
        $__internal_c12d5747dbf08d497a9eadc24ac8d33b0f253d89b3b2465d63e21648fa1ac2e0 = $this->env->getExtension("native_profiler");
        $__internal_c12d5747dbf08d497a9eadc24ac8d33b0f253d89b3b2465d63e21648fa1ac2e0->enter($__internal_c12d5747dbf08d497a9eadc24ac8d33b0f253d89b3b2465d63e21648fa1ac2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_c12d5747dbf08d497a9eadc24ac8d33b0f253d89b3b2465d63e21648fa1ac2e0->leave($__internal_c12d5747dbf08d497a9eadc24ac8d33b0f253d89b3b2465d63e21648fa1ac2e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
