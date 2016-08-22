<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_30d20b701f793dd1e7d94feea5a8292fddb87d598137c5bdfe9b542879cdafea extends Twig_Template
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
        $__internal_7b6372c919fb07e0f89f9c5b16b4dcdc53f5cf6203d872ebd345210bdf393268 = $this->env->getExtension("native_profiler");
        $__internal_7b6372c919fb07e0f89f9c5b16b4dcdc53f5cf6203d872ebd345210bdf393268->enter($__internal_7b6372c919fb07e0f89f9c5b16b4dcdc53f5cf6203d872ebd345210bdf393268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7b6372c919fb07e0f89f9c5b16b4dcdc53f5cf6203d872ebd345210bdf393268->leave($__internal_7b6372c919fb07e0f89f9c5b16b4dcdc53f5cf6203d872ebd345210bdf393268_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
