<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9ab51c0c6d50ac5601430b5af998eaa6105b476a8ae5be5fcfb544415cd829aa extends Twig_Template
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
        $__internal_34761add33d4cab02e2c9f5860ce4d06810af861866db73024dd37471ff2ea35 = $this->env->getExtension("native_profiler");
        $__internal_34761add33d4cab02e2c9f5860ce4d06810af861866db73024dd37471ff2ea35->enter($__internal_34761add33d4cab02e2c9f5860ce4d06810af861866db73024dd37471ff2ea35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_34761add33d4cab02e2c9f5860ce4d06810af861866db73024dd37471ff2ea35->leave($__internal_34761add33d4cab02e2c9f5860ce4d06810af861866db73024dd37471ff2ea35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
