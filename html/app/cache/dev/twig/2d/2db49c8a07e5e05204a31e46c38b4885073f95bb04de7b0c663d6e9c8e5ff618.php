<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_17b95d007e9d9c101d482a6f952cd7bacecc50d0a873e7b9a92d3e24747007ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b00961f7d058f130486a2ac0188fdede380ca0011afe25ba669fde115544fac = $this->env->getExtension("native_profiler");
        $__internal_4b00961f7d058f130486a2ac0188fdede380ca0011afe25ba669fde115544fac->enter($__internal_4b00961f7d058f130486a2ac0188fdede380ca0011afe25ba669fde115544fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b00961f7d058f130486a2ac0188fdede380ca0011afe25ba669fde115544fac->leave($__internal_4b00961f7d058f130486a2ac0188fdede380ca0011afe25ba669fde115544fac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2833733183ef7809f2570d9cbe6e59bb22f41649b9567ae490d967d736d488d7 = $this->env->getExtension("native_profiler");
        $__internal_2833733183ef7809f2570d9cbe6e59bb22f41649b9567ae490d967d736d488d7->enter($__internal_2833733183ef7809f2570d9cbe6e59bb22f41649b9567ae490d967d736d488d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2833733183ef7809f2570d9cbe6e59bb22f41649b9567ae490d967d736d488d7->leave($__internal_2833733183ef7809f2570d9cbe6e59bb22f41649b9567ae490d967d736d488d7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f83e078f3ab08e6036fbe982453d91eb4a5d3df2b83c791c1aca097bb2ab5630 = $this->env->getExtension("native_profiler");
        $__internal_f83e078f3ab08e6036fbe982453d91eb4a5d3df2b83c791c1aca097bb2ab5630->enter($__internal_f83e078f3ab08e6036fbe982453d91eb4a5d3df2b83c791c1aca097bb2ab5630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f83e078f3ab08e6036fbe982453d91eb4a5d3df2b83c791c1aca097bb2ab5630->leave($__internal_f83e078f3ab08e6036fbe982453d91eb4a5d3df2b83c791c1aca097bb2ab5630_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
