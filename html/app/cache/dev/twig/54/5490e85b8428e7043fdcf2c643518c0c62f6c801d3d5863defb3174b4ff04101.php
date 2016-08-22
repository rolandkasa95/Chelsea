<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_de3101a6a9aa694a07987d04fb608f3479ad49057c555e722e82cb05d261b7ec extends Twig_Template
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
        $__internal_3d77ff4d3d8ea0050b5ffefe55b70bc0374d69896934e75768853c08ab7c23ea = $this->env->getExtension("native_profiler");
        $__internal_3d77ff4d3d8ea0050b5ffefe55b70bc0374d69896934e75768853c08ab7c23ea->enter($__internal_3d77ff4d3d8ea0050b5ffefe55b70bc0374d69896934e75768853c08ab7c23ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3d77ff4d3d8ea0050b5ffefe55b70bc0374d69896934e75768853c08ab7c23ea->leave($__internal_3d77ff4d3d8ea0050b5ffefe55b70bc0374d69896934e75768853c08ab7c23ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
