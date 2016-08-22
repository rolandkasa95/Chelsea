<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1e863e8cd11a15c82c042127fc42430cb9c6dafc195ed4691fcb99cc34593355 extends Twig_Template
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
        $__internal_1f542f82db251518688c74fd2fd1f392a86450b3fb291b63e653f1efbc3d3c53 = $this->env->getExtension("native_profiler");
        $__internal_1f542f82db251518688c74fd2fd1f392a86450b3fb291b63e653f1efbc3d3c53->enter($__internal_1f542f82db251518688c74fd2fd1f392a86450b3fb291b63e653f1efbc3d3c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1f542f82db251518688c74fd2fd1f392a86450b3fb291b63e653f1efbc3d3c53->leave($__internal_1f542f82db251518688c74fd2fd1f392a86450b3fb291b63e653f1efbc3d3c53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
