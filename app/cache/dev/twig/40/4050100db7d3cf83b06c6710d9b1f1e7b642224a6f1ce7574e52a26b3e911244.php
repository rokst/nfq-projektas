<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6cfdafa7854f77f52895580e09e3d62a2eb223f55816917170d8fbd78e7fe4fb extends Twig_Template
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
        $__internal_0be15d6b652e6441bc66060d02e8c6fcc536ff886cc077e8c13e10024e20d03e = $this->env->getExtension("native_profiler");
        $__internal_0be15d6b652e6441bc66060d02e8c6fcc536ff886cc077e8c13e10024e20d03e->enter($__internal_0be15d6b652e6441bc66060d02e8c6fcc536ff886cc077e8c13e10024e20d03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be15d6b652e6441bc66060d02e8c6fcc536ff886cc077e8c13e10024e20d03e->leave($__internal_0be15d6b652e6441bc66060d02e8c6fcc536ff886cc077e8c13e10024e20d03e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_35745896a0381bf3b54515158d2cb975ae99d9021578568ccc6a76cc98c2b4e2 = $this->env->getExtension("native_profiler");
        $__internal_35745896a0381bf3b54515158d2cb975ae99d9021578568ccc6a76cc98c2b4e2->enter($__internal_35745896a0381bf3b54515158d2cb975ae99d9021578568ccc6a76cc98c2b4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_35745896a0381bf3b54515158d2cb975ae99d9021578568ccc6a76cc98c2b4e2->leave($__internal_35745896a0381bf3b54515158d2cb975ae99d9021578568ccc6a76cc98c2b4e2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d849e2c02fb91ca29d41916bcbb8947fc969003ac56393f875ccecf07e39079 = $this->env->getExtension("native_profiler");
        $__internal_8d849e2c02fb91ca29d41916bcbb8947fc969003ac56393f875ccecf07e39079->enter($__internal_8d849e2c02fb91ca29d41916bcbb8947fc969003ac56393f875ccecf07e39079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8d849e2c02fb91ca29d41916bcbb8947fc969003ac56393f875ccecf07e39079->leave($__internal_8d849e2c02fb91ca29d41916bcbb8947fc969003ac56393f875ccecf07e39079_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeb68ff5c49ed8dcf30b944c217126e2e012ac585bcf8715f474f44207b7b1b7 = $this->env->getExtension("native_profiler");
        $__internal_eeb68ff5c49ed8dcf30b944c217126e2e012ac585bcf8715f474f44207b7b1b7->enter($__internal_eeb68ff5c49ed8dcf30b944c217126e2e012ac585bcf8715f474f44207b7b1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_eeb68ff5c49ed8dcf30b944c217126e2e012ac585bcf8715f474f44207b7b1b7->leave($__internal_eeb68ff5c49ed8dcf30b944c217126e2e012ac585bcf8715f474f44207b7b1b7_prof);

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
