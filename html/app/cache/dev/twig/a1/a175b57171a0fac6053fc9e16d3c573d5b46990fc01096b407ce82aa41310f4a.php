<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_45c99509f2c90f2491fd1b1122741f0e2a136dd1a18a8d8ff73e120f2c825b34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_616cec8b07452fbb54e4472bcbd48b01e68d6c422e21229eeb9805cc894b719e = $this->env->getExtension("native_profiler");
        $__internal_616cec8b07452fbb54e4472bcbd48b01e68d6c422e21229eeb9805cc894b719e->enter($__internal_616cec8b07452fbb54e4472bcbd48b01e68d6c422e21229eeb9805cc894b719e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_616cec8b07452fbb54e4472bcbd48b01e68d6c422e21229eeb9805cc894b719e->leave($__internal_616cec8b07452fbb54e4472bcbd48b01e68d6c422e21229eeb9805cc894b719e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c45841a9122d3ec3066c9d9e7d3e3e8baf3dc4c2a8e5a724dd43c40a5e392776 = $this->env->getExtension("native_profiler");
        $__internal_c45841a9122d3ec3066c9d9e7d3e3e8baf3dc4c2a8e5a724dd43c40a5e392776->enter($__internal_c45841a9122d3ec3066c9d9e7d3e3e8baf3dc4c2a8e5a724dd43c40a5e392776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c45841a9122d3ec3066c9d9e7d3e3e8baf3dc4c2a8e5a724dd43c40a5e392776->leave($__internal_c45841a9122d3ec3066c9d9e7d3e3e8baf3dc4c2a8e5a724dd43c40a5e392776_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_32cee4355cee2e868e4d207d082245c1b1a7e63f3643bca4da49174601ec6c75 = $this->env->getExtension("native_profiler");
        $__internal_32cee4355cee2e868e4d207d082245c1b1a7e63f3643bca4da49174601ec6c75->enter($__internal_32cee4355cee2e868e4d207d082245c1b1a7e63f3643bca4da49174601ec6c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_32cee4355cee2e868e4d207d082245c1b1a7e63f3643bca4da49174601ec6c75->leave($__internal_32cee4355cee2e868e4d207d082245c1b1a7e63f3643bca4da49174601ec6c75_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_904bb0447131999b9aa9e4d7074ab2672efa57d8cad2a70fd4726fc4e6e70d04 = $this->env->getExtension("native_profiler");
        $__internal_904bb0447131999b9aa9e4d7074ab2672efa57d8cad2a70fd4726fc4e6e70d04->enter($__internal_904bb0447131999b9aa9e4d7074ab2672efa57d8cad2a70fd4726fc4e6e70d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_904bb0447131999b9aa9e4d7074ab2672efa57d8cad2a70fd4726fc4e6e70d04->leave($__internal_904bb0447131999b9aa9e4d7074ab2672efa57d8cad2a70fd4726fc4e6e70d04_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
