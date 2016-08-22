<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_61df4c7844d8ed10bca5231f184e6faf16886c746de56802233b7503cf6e5aea extends Twig_Template
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
        $__internal_1f9950de63ec609e29263ca83288bdcbda93cc7c543b944fdff194a06a7265f8 = $this->env->getExtension("native_profiler");
        $__internal_1f9950de63ec609e29263ca83288bdcbda93cc7c543b944fdff194a06a7265f8->enter($__internal_1f9950de63ec609e29263ca83288bdcbda93cc7c543b944fdff194a06a7265f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1f9950de63ec609e29263ca83288bdcbda93cc7c543b944fdff194a06a7265f8->leave($__internal_1f9950de63ec609e29263ca83288bdcbda93cc7c543b944fdff194a06a7265f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
