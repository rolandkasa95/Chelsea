<?php

/* base.html.twig */
class __TwigTemplate_6c55edd318f98757d6e48e05eedaf9ca99d953a82ceb6f8a454c063fc1d6ffa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b6891bde79a1610506e907bc3122368106c669e12ba46b3bb65d1a09c954fd9 = $this->env->getExtension("native_profiler");
        $__internal_3b6891bde79a1610506e907bc3122368106c669e12ba46b3bb65d1a09c954fd9->enter($__internal_3b6891bde79a1610506e907bc3122368106c669e12ba46b3bb65d1a09c954fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_3b6891bde79a1610506e907bc3122368106c669e12ba46b3bb65d1a09c954fd9->leave($__internal_3b6891bde79a1610506e907bc3122368106c669e12ba46b3bb65d1a09c954fd9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4bd10218a2d11809a061fdc84e8c6aab0a4769b93385cd084922d14197510f3 = $this->env->getExtension("native_profiler");
        $__internal_a4bd10218a2d11809a061fdc84e8c6aab0a4769b93385cd084922d14197510f3->enter($__internal_a4bd10218a2d11809a061fdc84e8c6aab0a4769b93385cd084922d14197510f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a4bd10218a2d11809a061fdc84e8c6aab0a4769b93385cd084922d14197510f3->leave($__internal_a4bd10218a2d11809a061fdc84e8c6aab0a4769b93385cd084922d14197510f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41487c55a9dc336ff26e86c59a8f691b45771d59d6183608f42758da710631e8 = $this->env->getExtension("native_profiler");
        $__internal_41487c55a9dc336ff26e86c59a8f691b45771d59d6183608f42758da710631e8->enter($__internal_41487c55a9dc336ff26e86c59a8f691b45771d59d6183608f42758da710631e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        ";
        
        $__internal_41487c55a9dc336ff26e86c59a8f691b45771d59d6183608f42758da710631e8->leave($__internal_41487c55a9dc336ff26e86c59a8f691b45771d59d6183608f42758da710631e8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d9e4e20606940c200b36134a2df04c43cf6a67031af255c918386d42d385547 = $this->env->getExtension("native_profiler");
        $__internal_7d9e4e20606940c200b36134a2df04c43cf6a67031af255c918386d42d385547->enter($__internal_7d9e4e20606940c200b36134a2df04c43cf6a67031af255c918386d42d385547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7d9e4e20606940c200b36134a2df04c43cf6a67031af255c918386d42d385547->leave($__internal_7d9e4e20606940c200b36134a2df04c43cf6a67031af255c918386d42d385547_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70b917bf8cee8db4e2e319a3a52ae9a9d76329caebeda81450785cbdc73ad1a7 = $this->env->getExtension("native_profiler");
        $__internal_70b917bf8cee8db4e2e319a3a52ae9a9d76329caebeda81450785cbdc73ad1a7->enter($__internal_70b917bf8cee8db4e2e319a3a52ae9a9d76329caebeda81450785cbdc73ad1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_70b917bf8cee8db4e2e319a3a52ae9a9d76329caebeda81450785cbdc73ad1a7->leave($__internal_70b917bf8cee8db4e2e319a3a52ae9a9d76329caebeda81450785cbdc73ad1a7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 12,  84 => 11,  77 => 7,  71 => 6,  59 => 5,  50 => 13,  47 => 12,  45 => 11,  38 => 8,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
