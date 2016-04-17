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
        $__internal_000a2fb25b3a3f260b31689ab6264221edfb3459df373a0d46ac4fd313e23e8c = $this->env->getExtension("native_profiler");
        $__internal_000a2fb25b3a3f260b31689ab6264221edfb3459df373a0d46ac4fd313e23e8c->enter($__internal_000a2fb25b3a3f260b31689ab6264221edfb3459df373a0d46ac4fd313e23e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_000a2fb25b3a3f260b31689ab6264221edfb3459df373a0d46ac4fd313e23e8c->leave($__internal_000a2fb25b3a3f260b31689ab6264221edfb3459df373a0d46ac4fd313e23e8c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9fde8dad96f8fd1506810f7cce5e20ee1295af2309e3338bf940282b39b1d174 = $this->env->getExtension("native_profiler");
        $__internal_9fde8dad96f8fd1506810f7cce5e20ee1295af2309e3338bf940282b39b1d174->enter($__internal_9fde8dad96f8fd1506810f7cce5e20ee1295af2309e3338bf940282b39b1d174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9fde8dad96f8fd1506810f7cce5e20ee1295af2309e3338bf940282b39b1d174->leave($__internal_9fde8dad96f8fd1506810f7cce5e20ee1295af2309e3338bf940282b39b1d174_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6529e754aa2ca01c5337b6ddd516f0fc97ef21d80b3d375551316b28a1e79cce = $this->env->getExtension("native_profiler");
        $__internal_6529e754aa2ca01c5337b6ddd516f0fc97ef21d80b3d375551316b28a1e79cce->enter($__internal_6529e754aa2ca01c5337b6ddd516f0fc97ef21d80b3d375551316b28a1e79cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6529e754aa2ca01c5337b6ddd516f0fc97ef21d80b3d375551316b28a1e79cce->leave($__internal_6529e754aa2ca01c5337b6ddd516f0fc97ef21d80b3d375551316b28a1e79cce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aea8016eee61d4ce712d8dc1ac8bcabe58ce443eddb1428b2553a9d1b586a725 = $this->env->getExtension("native_profiler");
        $__internal_aea8016eee61d4ce712d8dc1ac8bcabe58ce443eddb1428b2553a9d1b586a725->enter($__internal_aea8016eee61d4ce712d8dc1ac8bcabe58ce443eddb1428b2553a9d1b586a725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aea8016eee61d4ce712d8dc1ac8bcabe58ce443eddb1428b2553a9d1b586a725->leave($__internal_aea8016eee61d4ce712d8dc1ac8bcabe58ce443eddb1428b2553a9d1b586a725_prof);

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
