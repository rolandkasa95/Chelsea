<?php

/* VideoBundle:Default:index.html.twig */
class __TwigTemplate_286e9fa4883a6b4c1d18c8ad816131b5e222e88ba1888a584b50dc7f2df22772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e6152f7c7c3fc803730996f313cf10e09ddc3ab19552d4dbcfeeed1041553ac = $this->env->getExtension("native_profiler");
        $__internal_6e6152f7c7c3fc803730996f313cf10e09ddc3ab19552d4dbcfeeed1041553ac->enter($__internal_6e6152f7c7c3fc803730996f313cf10e09ddc3ab19552d4dbcfeeed1041553ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoBundle:Default:index.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "
<div class=\"container\">
    <div class=\"jumbotron\">
        <h1>Videos of Chelsea</h1>
    </div>
    <div class=\"row\">
        <div class=\"col-md-2\"></div>
        <div class=\"col-md-10\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 13
            echo "            <iframe width=\"720\" height=\"480\"
                src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "VideoUrl", array()), "html", null, true);
            echo "\">
            </iframe>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </div>
    </div>
</div>";
        
        $__internal_6e6152f7c7c3fc803730996f313cf10e09ddc3ab19552d4dbcfeeed1041553ac->leave($__internal_6e6152f7c7c3fc803730996f313cf10e09ddc3ab19552d4dbcfeeed1041553ac_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c68586d04d1ca41be01e808357ad3f695866b25de2a563de4ec17a9033073b02 = $this->env->getExtension("native_profiler");
        $__internal_c68586d04d1ca41be01e808357ad3f695866b25de2a563de4ec17a9033073b02->enter($__internal_c68586d04d1ca41be01e808357ad3f695866b25de2a563de4ec17a9033073b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
";
        
        $__internal_c68586d04d1ca41be01e808357ad3f695866b25de2a563de4ec17a9033073b02->leave($__internal_c68586d04d1ca41be01e808357ad3f695866b25de2a563de4ec17a9033073b02_prof);

    }

    public function getTemplateName()
    {
        return "VideoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 2,  60 => 1,  51 => 17,  42 => 14,  39 => 13,  35 => 12,  25 => 4,  23 => 1,);
    }
}
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">*/
/* {% endblock %}*/
/* */
/* <div class="container">*/
/*     <div class="jumbotron">*/
/*         <h1>Videos of Chelsea</h1>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-2"></div>*/
/*         <div class="col-md-10">*/
/*             {% for video in videos %}*/
/*             <iframe width="720" height="480"*/
/*                 src="{{ video.VideoUrl }}">*/
/*             </iframe>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
