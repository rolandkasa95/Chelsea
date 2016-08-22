<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9bf7c2a5da6a1ccaa4df1c4b1760a08ac3761c039c0201d0bbedfaa631bace0e extends Twig_Template
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
        $__internal_53da0bac2d6e8cfb6b4167df9ac838e84e874c6242c3892859f4b8aa5270a95f = $this->env->getExtension("native_profiler");
        $__internal_53da0bac2d6e8cfb6b4167df9ac838e84e874c6242c3892859f4b8aa5270a95f->enter($__internal_53da0bac2d6e8cfb6b4167df9ac838e84e874c6242c3892859f4b8aa5270a95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_53da0bac2d6e8cfb6b4167df9ac838e84e874c6242c3892859f4b8aa5270a95f->leave($__internal_53da0bac2d6e8cfb6b4167df9ac838e84e874c6242c3892859f4b8aa5270a95f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
