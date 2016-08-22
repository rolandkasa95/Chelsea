<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_51518df3fba84f860f88176c6f253b11996eb3e1312f80933cd98eee6a6d0bf0 extends Twig_Template
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
        $__internal_bb74c8935c18fc1bb37b864bb3aeda3e3d809c7ac3360720175e999d9df16786 = $this->env->getExtension("native_profiler");
        $__internal_bb74c8935c18fc1bb37b864bb3aeda3e3d809c7ac3360720175e999d9df16786->enter($__internal_bb74c8935c18fc1bb37b864bb3aeda3e3d809c7ac3360720175e999d9df16786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_bb74c8935c18fc1bb37b864bb3aeda3e3d809c7ac3360720175e999d9df16786->leave($__internal_bb74c8935c18fc1bb37b864bb3aeda3e3d809c7ac3360720175e999d9df16786_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
