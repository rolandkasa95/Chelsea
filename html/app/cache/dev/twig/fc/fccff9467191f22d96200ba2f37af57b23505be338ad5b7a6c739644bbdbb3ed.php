<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_df8de1818040f7dcf43043a120d2e02a405f90c722964f3001c90c33ed1e4620 extends Twig_Template
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
        $__internal_f863880fce1063ca02a4cdbfe13581754466de0cb7e28da41a071e6a43ccbf4b = $this->env->getExtension("native_profiler");
        $__internal_f863880fce1063ca02a4cdbfe13581754466de0cb7e28da41a071e6a43ccbf4b->enter($__internal_f863880fce1063ca02a4cdbfe13581754466de0cb7e28da41a071e6a43ccbf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f863880fce1063ca02a4cdbfe13581754466de0cb7e28da41a071e6a43ccbf4b->leave($__internal_f863880fce1063ca02a4cdbfe13581754466de0cb7e28da41a071e6a43ccbf4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
