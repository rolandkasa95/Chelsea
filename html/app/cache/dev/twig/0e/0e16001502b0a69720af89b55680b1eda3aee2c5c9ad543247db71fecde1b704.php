<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d30d203d0ca01b54a55dc9353b2e8dfc37ee2b99ef5a83faa5640de84945fc9d extends Twig_Template
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
        $__internal_b5afab2ba04234588ae2e1b16c6f26963a87ff16e4b8a33bdf01ec7724b92f6b = $this->env->getExtension("native_profiler");
        $__internal_b5afab2ba04234588ae2e1b16c6f26963a87ff16e4b8a33bdf01ec7724b92f6b->enter($__internal_b5afab2ba04234588ae2e1b16c6f26963a87ff16e4b8a33bdf01ec7724b92f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b5afab2ba04234588ae2e1b16c6f26963a87ff16e4b8a33bdf01ec7724b92f6b->leave($__internal_b5afab2ba04234588ae2e1b16c6f26963a87ff16e4b8a33bdf01ec7724b92f6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
