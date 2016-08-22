<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0cbe4e2b48babaa97766e75c448647cbce0bae37137f67c15f88fb04581cd603 extends Twig_Template
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
        $__internal_8d8f3931bfa2c7b818ee489085d5f3a542d7004cc18c7989638cbc24125727aa = $this->env->getExtension("native_profiler");
        $__internal_8d8f3931bfa2c7b818ee489085d5f3a542d7004cc18c7989638cbc24125727aa->enter($__internal_8d8f3931bfa2c7b818ee489085d5f3a542d7004cc18c7989638cbc24125727aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8d8f3931bfa2c7b818ee489085d5f3a542d7004cc18c7989638cbc24125727aa->leave($__internal_8d8f3931bfa2c7b818ee489085d5f3a542d7004cc18c7989638cbc24125727aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
