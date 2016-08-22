<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_dc540e0fca07d92538942be15a7fd0dc9758ae826e0fc9a763c278f0737f0d5e extends Twig_Template
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
        $__internal_964c7fdacee26672c239ff43c6c25644e8afc04b65b93bfc2e967b25ac95092a = $this->env->getExtension("native_profiler");
        $__internal_964c7fdacee26672c239ff43c6c25644e8afc04b65b93bfc2e967b25ac95092a->enter($__internal_964c7fdacee26672c239ff43c6c25644e8afc04b65b93bfc2e967b25ac95092a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_964c7fdacee26672c239ff43c6c25644e8afc04b65b93bfc2e967b25ac95092a->leave($__internal_964c7fdacee26672c239ff43c6c25644e8afc04b65b93bfc2e967b25ac95092a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
