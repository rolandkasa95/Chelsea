<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_eb0f24cc7bb1559ec63b15c24245ffc3f5c7d604ec34a7e6af6313e8076e049a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40a67837b2a3be8fee2e05ff65e186d85323560e3c739c9318a7ea34d21e3fb7 = $this->env->getExtension("native_profiler");
        $__internal_40a67837b2a3be8fee2e05ff65e186d85323560e3c739c9318a7ea34d21e3fb7->enter($__internal_40a67837b2a3be8fee2e05ff65e186d85323560e3c739c9318a7ea34d21e3fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40a67837b2a3be8fee2e05ff65e186d85323560e3c739c9318a7ea34d21e3fb7->leave($__internal_40a67837b2a3be8fee2e05ff65e186d85323560e3c739c9318a7ea34d21e3fb7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_caf20e35fa18acdb119600ee8ae500bafc16adac2869361bb1ba85b888b427a4 = $this->env->getExtension("native_profiler");
        $__internal_caf20e35fa18acdb119600ee8ae500bafc16adac2869361bb1ba85b888b427a4->enter($__internal_caf20e35fa18acdb119600ee8ae500bafc16adac2869361bb1ba85b888b427a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_caf20e35fa18acdb119600ee8ae500bafc16adac2869361bb1ba85b888b427a4->leave($__internal_caf20e35fa18acdb119600ee8ae500bafc16adac2869361bb1ba85b888b427a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_80a77a382f54cb5f1da0a117d230501640b1be2110ae87fbb6d5aa5c29b73953 = $this->env->getExtension("native_profiler");
        $__internal_80a77a382f54cb5f1da0a117d230501640b1be2110ae87fbb6d5aa5c29b73953->enter($__internal_80a77a382f54cb5f1da0a117d230501640b1be2110ae87fbb6d5aa5c29b73953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80a77a382f54cb5f1da0a117d230501640b1be2110ae87fbb6d5aa5c29b73953->leave($__internal_80a77a382f54cb5f1da0a117d230501640b1be2110ae87fbb6d5aa5c29b73953_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_79d6746c0990c16b5f70326dd8d778bb43132593026e6ca372a8d83b1552df95 = $this->env->getExtension("native_profiler");
        $__internal_79d6746c0990c16b5f70326dd8d778bb43132593026e6ca372a8d83b1552df95->enter($__internal_79d6746c0990c16b5f70326dd8d778bb43132593026e6ca372a8d83b1552df95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_79d6746c0990c16b5f70326dd8d778bb43132593026e6ca372a8d83b1552df95->leave($__internal_79d6746c0990c16b5f70326dd8d778bb43132593026e6ca372a8d83b1552df95_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
