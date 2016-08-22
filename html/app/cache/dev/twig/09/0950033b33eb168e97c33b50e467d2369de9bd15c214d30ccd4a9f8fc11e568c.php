<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_700779b264741027cb8b9bf22882795772aac9589a9739ad3695cff11a59e207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_640018f8e542644855c322fbe836509b3f4b5d8c98fa2568ce57f1dbccb8d60a = $this->env->getExtension("native_profiler");
        $__internal_640018f8e542644855c322fbe836509b3f4b5d8c98fa2568ce57f1dbccb8d60a->enter($__internal_640018f8e542644855c322fbe836509b3f4b5d8c98fa2568ce57f1dbccb8d60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_640018f8e542644855c322fbe836509b3f4b5d8c98fa2568ce57f1dbccb8d60a->leave($__internal_640018f8e542644855c322fbe836509b3f4b5d8c98fa2568ce57f1dbccb8d60a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a72f61e564d1b14f560175b7fbb88d777831c5e1f533ef163b021f520ab8b22 = $this->env->getExtension("native_profiler");
        $__internal_7a72f61e564d1b14f560175b7fbb88d777831c5e1f533ef163b021f520ab8b22->enter($__internal_7a72f61e564d1b14f560175b7fbb88d777831c5e1f533ef163b021f520ab8b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7a72f61e564d1b14f560175b7fbb88d777831c5e1f533ef163b021f520ab8b22->leave($__internal_7a72f61e564d1b14f560175b7fbb88d777831c5e1f533ef163b021f520ab8b22_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
