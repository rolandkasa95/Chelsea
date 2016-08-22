<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bb2222b84c90f51c773d86f12069cbadbd90a5a37efadf03095c2402105f6488 extends Twig_Template
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
        $__internal_8df550b455f875a58b58c598e3dd065fc3bf343de4ca3648b0ed341ea5d01535 = $this->env->getExtension("native_profiler");
        $__internal_8df550b455f875a58b58c598e3dd065fc3bf343de4ca3648b0ed341ea5d01535->enter($__internal_8df550b455f875a58b58c598e3dd065fc3bf343de4ca3648b0ed341ea5d01535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8df550b455f875a58b58c598e3dd065fc3bf343de4ca3648b0ed341ea5d01535->leave($__internal_8df550b455f875a58b58c598e3dd065fc3bf343de4ca3648b0ed341ea5d01535_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
