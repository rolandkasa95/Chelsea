<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d9dd264dbe98cf9abd6b19a2a44985def6f12027c65b85579205f38ba59028ef extends Twig_Template
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
        $__internal_4f2ee8f7c9bae31fc43740459c3f323b7fa15b12f22d2796e652fd5384182856 = $this->env->getExtension("native_profiler");
        $__internal_4f2ee8f7c9bae31fc43740459c3f323b7fa15b12f22d2796e652fd5384182856->enter($__internal_4f2ee8f7c9bae31fc43740459c3f323b7fa15b12f22d2796e652fd5384182856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4f2ee8f7c9bae31fc43740459c3f323b7fa15b12f22d2796e652fd5384182856->leave($__internal_4f2ee8f7c9bae31fc43740459c3f323b7fa15b12f22d2796e652fd5384182856_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
