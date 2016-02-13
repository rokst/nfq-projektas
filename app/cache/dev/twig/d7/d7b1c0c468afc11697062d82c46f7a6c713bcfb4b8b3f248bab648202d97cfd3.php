<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_12310666669979a0e598e73df8e419c585984469734e4f42ec3d36c3cb0eb8e8 extends Twig_Template
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
        $__internal_72bed63e1ee0f51195c2fa18024c535f322182a480a414bc24bbd4665c365840 = $this->env->getExtension("native_profiler");
        $__internal_72bed63e1ee0f51195c2fa18024c535f322182a480a414bc24bbd4665c365840->enter($__internal_72bed63e1ee0f51195c2fa18024c535f322182a480a414bc24bbd4665c365840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72bed63e1ee0f51195c2fa18024c535f322182a480a414bc24bbd4665c365840->leave($__internal_72bed63e1ee0f51195c2fa18024c535f322182a480a414bc24bbd4665c365840_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_22f7d2a6ead0b020b5c39fa2c1d4ad3a2890981494d1e061091d75750a6c824a = $this->env->getExtension("native_profiler");
        $__internal_22f7d2a6ead0b020b5c39fa2c1d4ad3a2890981494d1e061091d75750a6c824a->enter($__internal_22f7d2a6ead0b020b5c39fa2c1d4ad3a2890981494d1e061091d75750a6c824a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22f7d2a6ead0b020b5c39fa2c1d4ad3a2890981494d1e061091d75750a6c824a->leave($__internal_22f7d2a6ead0b020b5c39fa2c1d4ad3a2890981494d1e061091d75750a6c824a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cffe46d382c1fec331371e67b006748844668a8adb6bae797626ba7ef457219b = $this->env->getExtension("native_profiler");
        $__internal_cffe46d382c1fec331371e67b006748844668a8adb6bae797626ba7ef457219b->enter($__internal_cffe46d382c1fec331371e67b006748844668a8adb6bae797626ba7ef457219b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cffe46d382c1fec331371e67b006748844668a8adb6bae797626ba7ef457219b->leave($__internal_cffe46d382c1fec331371e67b006748844668a8adb6bae797626ba7ef457219b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d675b1c50231b12c6a3d30bc9744bc02f7717f05275ae94981816eed0ba3e7e4 = $this->env->getExtension("native_profiler");
        $__internal_d675b1c50231b12c6a3d30bc9744bc02f7717f05275ae94981816eed0ba3e7e4->enter($__internal_d675b1c50231b12c6a3d30bc9744bc02f7717f05275ae94981816eed0ba3e7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d675b1c50231b12c6a3d30bc9744bc02f7717f05275ae94981816eed0ba3e7e4->leave($__internal_d675b1c50231b12c6a3d30bc9744bc02f7717f05275ae94981816eed0ba3e7e4_prof);

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
