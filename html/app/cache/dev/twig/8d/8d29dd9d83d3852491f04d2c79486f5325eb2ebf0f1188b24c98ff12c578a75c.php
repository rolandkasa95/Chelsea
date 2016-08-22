<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c6f85ceaaf8b8cd4b68518b44f3f826c31dce50da4641e003d603fe550741125 extends Twig_Template
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
        $__internal_4c152dc734f1195810c4fa1a0762d28b64d00b1e988c7e2bc12af88a32b0826a = $this->env->getExtension("native_profiler");
        $__internal_4c152dc734f1195810c4fa1a0762d28b64d00b1e988c7e2bc12af88a32b0826a->enter($__internal_4c152dc734f1195810c4fa1a0762d28b64d00b1e988c7e2bc12af88a32b0826a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4c152dc734f1195810c4fa1a0762d28b64d00b1e988c7e2bc12af88a32b0826a->leave($__internal_4c152dc734f1195810c4fa1a0762d28b64d00b1e988c7e2bc12af88a32b0826a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
