<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d9eaa7c37ca5eea25930456cd0415a95e03fd577af990607c93ec47cce61265e extends Twig_Template
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
        $__internal_a02d673890a0021bd8d81dad1067779a4ef8fb1627c1f56a8c2b982953a99feb = $this->env->getExtension("native_profiler");
        $__internal_a02d673890a0021bd8d81dad1067779a4ef8fb1627c1f56a8c2b982953a99feb->enter($__internal_a02d673890a0021bd8d81dad1067779a4ef8fb1627c1f56a8c2b982953a99feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a02d673890a0021bd8d81dad1067779a4ef8fb1627c1f56a8c2b982953a99feb->leave($__internal_a02d673890a0021bd8d81dad1067779a4ef8fb1627c1f56a8c2b982953a99feb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
