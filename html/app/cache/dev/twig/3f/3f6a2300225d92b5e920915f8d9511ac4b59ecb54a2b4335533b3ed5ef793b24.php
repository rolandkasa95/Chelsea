<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_d414cee45284a2dd488ea5ac4739d861e6b8f8dec5e0712c87c084b01618ecbf extends Twig_Template
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
        $__internal_5cbcbf3c32e03c765ea73a63f7a2e5f50e8a26ac3db5bbeb11816ec9ac71ef5f = $this->env->getExtension("native_profiler");
        $__internal_5cbcbf3c32e03c765ea73a63f7a2e5f50e8a26ac3db5bbeb11816ec9ac71ef5f->enter($__internal_5cbcbf3c32e03c765ea73a63f7a2e5f50e8a26ac3db5bbeb11816ec9ac71ef5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_5cbcbf3c32e03c765ea73a63f7a2e5f50e8a26ac3db5bbeb11816ec9ac71ef5f->leave($__internal_5cbcbf3c32e03c765ea73a63f7a2e5f50e8a26ac3db5bbeb11816ec9ac71ef5f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
