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
        $__internal_11a05f3f67ad6a283153e178d5160c192153ac73c0ebe8e761241a7472b7891c = $this->env->getExtension("native_profiler");
        $__internal_11a05f3f67ad6a283153e178d5160c192153ac73c0ebe8e761241a7472b7891c->enter($__internal_11a05f3f67ad6a283153e178d5160c192153ac73c0ebe8e761241a7472b7891c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11a05f3f67ad6a283153e178d5160c192153ac73c0ebe8e761241a7472b7891c->leave($__internal_11a05f3f67ad6a283153e178d5160c192153ac73c0ebe8e761241a7472b7891c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0467474712852bce4d5e17b8c9144eb45a35b011fc42e7c0318f87b60c554f64 = $this->env->getExtension("native_profiler");
        $__internal_0467474712852bce4d5e17b8c9144eb45a35b011fc42e7c0318f87b60c554f64->enter($__internal_0467474712852bce4d5e17b8c9144eb45a35b011fc42e7c0318f87b60c554f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0467474712852bce4d5e17b8c9144eb45a35b011fc42e7c0318f87b60c554f64->leave($__internal_0467474712852bce4d5e17b8c9144eb45a35b011fc42e7c0318f87b60c554f64_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d21831886a33236035d693ab57d5dc28e4cc0ee53df9b2a781c7e5c89ddd8cb1 = $this->env->getExtension("native_profiler");
        $__internal_d21831886a33236035d693ab57d5dc28e4cc0ee53df9b2a781c7e5c89ddd8cb1->enter($__internal_d21831886a33236035d693ab57d5dc28e4cc0ee53df9b2a781c7e5c89ddd8cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d21831886a33236035d693ab57d5dc28e4cc0ee53df9b2a781c7e5c89ddd8cb1->leave($__internal_d21831886a33236035d693ab57d5dc28e4cc0ee53df9b2a781c7e5c89ddd8cb1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d527fe817c92f087b61777c8f8cd1a09633dd1839b2dd7671cad16df571198fa = $this->env->getExtension("native_profiler");
        $__internal_d527fe817c92f087b61777c8f8cd1a09633dd1839b2dd7671cad16df571198fa->enter($__internal_d527fe817c92f087b61777c8f8cd1a09633dd1839b2dd7671cad16df571198fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d527fe817c92f087b61777c8f8cd1a09633dd1839b2dd7671cad16df571198fa->leave($__internal_d527fe817c92f087b61777c8f8cd1a09633dd1839b2dd7671cad16df571198fa_prof);

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
