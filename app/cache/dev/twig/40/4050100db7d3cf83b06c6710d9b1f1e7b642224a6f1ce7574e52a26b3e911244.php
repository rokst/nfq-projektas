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
        $__internal_cc9020ffc8464e185eb09c732cfd41d47eb4d9dfe69cfc0b245974f19c5b0a71 = $this->env->getExtension("native_profiler");
        $__internal_cc9020ffc8464e185eb09c732cfd41d47eb4d9dfe69cfc0b245974f19c5b0a71->enter($__internal_cc9020ffc8464e185eb09c732cfd41d47eb4d9dfe69cfc0b245974f19c5b0a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc9020ffc8464e185eb09c732cfd41d47eb4d9dfe69cfc0b245974f19c5b0a71->leave($__internal_cc9020ffc8464e185eb09c732cfd41d47eb4d9dfe69cfc0b245974f19c5b0a71_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4bf31c0e7e0e39ad85b23f21490b41b0407d20a48931509e1deb4ddf3ef004c = $this->env->getExtension("native_profiler");
        $__internal_b4bf31c0e7e0e39ad85b23f21490b41b0407d20a48931509e1deb4ddf3ef004c->enter($__internal_b4bf31c0e7e0e39ad85b23f21490b41b0407d20a48931509e1deb4ddf3ef004c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b4bf31c0e7e0e39ad85b23f21490b41b0407d20a48931509e1deb4ddf3ef004c->leave($__internal_b4bf31c0e7e0e39ad85b23f21490b41b0407d20a48931509e1deb4ddf3ef004c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da94ccda4c607edd7a9c5c46591421ba11e26569847148f3be6adcbe89195ad6 = $this->env->getExtension("native_profiler");
        $__internal_da94ccda4c607edd7a9c5c46591421ba11e26569847148f3be6adcbe89195ad6->enter($__internal_da94ccda4c607edd7a9c5c46591421ba11e26569847148f3be6adcbe89195ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da94ccda4c607edd7a9c5c46591421ba11e26569847148f3be6adcbe89195ad6->leave($__internal_da94ccda4c607edd7a9c5c46591421ba11e26569847148f3be6adcbe89195ad6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cad0992fe38f41131d2f45d6f1132a4e4f93af4c8f106d808b9bec39544e1857 = $this->env->getExtension("native_profiler");
        $__internal_cad0992fe38f41131d2f45d6f1132a4e4f93af4c8f106d808b9bec39544e1857->enter($__internal_cad0992fe38f41131d2f45d6f1132a4e4f93af4c8f106d808b9bec39544e1857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cad0992fe38f41131d2f45d6f1132a4e4f93af4c8f106d808b9bec39544e1857->leave($__internal_cad0992fe38f41131d2f45d6f1132a4e4f93af4c8f106d808b9bec39544e1857_prof);

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
