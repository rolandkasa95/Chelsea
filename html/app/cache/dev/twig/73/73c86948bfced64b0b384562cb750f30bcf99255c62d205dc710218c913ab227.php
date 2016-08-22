<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ed1bfc7cfb2bbf3bc170d2b74e3b79256260cd0614c0d17a897c070097c477c6 extends Twig_Template
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
        $__internal_91428bfb9ae6565e2296e0187ccf69f8f41b5d1eb977a02c2e165170964fc67e = $this->env->getExtension("native_profiler");
        $__internal_91428bfb9ae6565e2296e0187ccf69f8f41b5d1eb977a02c2e165170964fc67e->enter($__internal_91428bfb9ae6565e2296e0187ccf69f8f41b5d1eb977a02c2e165170964fc67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_91428bfb9ae6565e2296e0187ccf69f8f41b5d1eb977a02c2e165170964fc67e->leave($__internal_91428bfb9ae6565e2296e0187ccf69f8f41b5d1eb977a02c2e165170964fc67e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
