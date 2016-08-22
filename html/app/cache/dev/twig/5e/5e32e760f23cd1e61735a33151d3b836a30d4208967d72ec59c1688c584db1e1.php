<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_14e81cd40b35ecb04a6c5d7707be078779ef8e9b3e6867a4f938474738259789 extends Twig_Template
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
        $__internal_ae690bd1ad678b861a6b3d3ca641dc0803984c5a55d57d5412c8d8f45d3d38ee = $this->env->getExtension("native_profiler");
        $__internal_ae690bd1ad678b861a6b3d3ca641dc0803984c5a55d57d5412c8d8f45d3d38ee->enter($__internal_ae690bd1ad678b861a6b3d3ca641dc0803984c5a55d57d5412c8d8f45d3d38ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ae690bd1ad678b861a6b3d3ca641dc0803984c5a55d57d5412c8d8f45d3d38ee->leave($__internal_ae690bd1ad678b861a6b3d3ca641dc0803984c5a55d57d5412c8d8f45d3d38ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
