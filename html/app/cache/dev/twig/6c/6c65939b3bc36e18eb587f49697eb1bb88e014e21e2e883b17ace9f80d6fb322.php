<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ba26c22a3843465cb5144d6a8f00ffe705277e71c9b23187bd25872312c840c4 extends Twig_Template
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
        $__internal_92cf14932a00c19f014136989dda3bef473eca010fe65c54cbc3d771d748280b = $this->env->getExtension("native_profiler");
        $__internal_92cf14932a00c19f014136989dda3bef473eca010fe65c54cbc3d771d748280b->enter($__internal_92cf14932a00c19f014136989dda3bef473eca010fe65c54cbc3d771d748280b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_92cf14932a00c19f014136989dda3bef473eca010fe65c54cbc3d771d748280b->leave($__internal_92cf14932a00c19f014136989dda3bef473eca010fe65c54cbc3d771d748280b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
