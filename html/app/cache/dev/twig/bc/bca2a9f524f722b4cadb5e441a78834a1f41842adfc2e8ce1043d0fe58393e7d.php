<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_30687d79912ee34beeefa80cd4c7258892b8b5ccb60905188aa3160810a4d8ea extends Twig_Template
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
        $__internal_a5d0d6224c6ac491fee5a53d99326ca60710de0744bc5182f196c0fc0760b153 = $this->env->getExtension("native_profiler");
        $__internal_a5d0d6224c6ac491fee5a53d99326ca60710de0744bc5182f196c0fc0760b153->enter($__internal_a5d0d6224c6ac491fee5a53d99326ca60710de0744bc5182f196c0fc0760b153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a5d0d6224c6ac491fee5a53d99326ca60710de0744bc5182f196c0fc0760b153->leave($__internal_a5d0d6224c6ac491fee5a53d99326ca60710de0744bc5182f196c0fc0760b153_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
