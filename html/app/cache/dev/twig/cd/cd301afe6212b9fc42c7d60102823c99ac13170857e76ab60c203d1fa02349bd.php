<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8c853a8f0f67674a51adbf95bd22b1d15ec1dbfe4e19b110dd950b86655df3b9 extends Twig_Template
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
        $__internal_84b7aa24d835659c569ceaf194ac0bc320df7cd0749fe22a497ac0ee3515b569 = $this->env->getExtension("native_profiler");
        $__internal_84b7aa24d835659c569ceaf194ac0bc320df7cd0749fe22a497ac0ee3515b569->enter($__internal_84b7aa24d835659c569ceaf194ac0bc320df7cd0749fe22a497ac0ee3515b569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_84b7aa24d835659c569ceaf194ac0bc320df7cd0749fe22a497ac0ee3515b569->leave($__internal_84b7aa24d835659c569ceaf194ac0bc320df7cd0749fe22a497ac0ee3515b569_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
