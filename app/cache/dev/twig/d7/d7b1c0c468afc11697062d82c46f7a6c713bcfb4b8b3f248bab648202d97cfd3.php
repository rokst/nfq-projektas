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
        $__internal_c0acf4566282b88ca687b04a4a8f4b9011f2ca9e289c943b6e2c9c91c791ebc6 = $this->env->getExtension("native_profiler");
        $__internal_c0acf4566282b88ca687b04a4a8f4b9011f2ca9e289c943b6e2c9c91c791ebc6->enter($__internal_c0acf4566282b88ca687b04a4a8f4b9011f2ca9e289c943b6e2c9c91c791ebc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0acf4566282b88ca687b04a4a8f4b9011f2ca9e289c943b6e2c9c91c791ebc6->leave($__internal_c0acf4566282b88ca687b04a4a8f4b9011f2ca9e289c943b6e2c9c91c791ebc6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc044110666226b82001eb8860bd6ba8d92943fa3a9b50bcab3cafe3bba35a48 = $this->env->getExtension("native_profiler");
        $__internal_dc044110666226b82001eb8860bd6ba8d92943fa3a9b50bcab3cafe3bba35a48->enter($__internal_dc044110666226b82001eb8860bd6ba8d92943fa3a9b50bcab3cafe3bba35a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dc044110666226b82001eb8860bd6ba8d92943fa3a9b50bcab3cafe3bba35a48->leave($__internal_dc044110666226b82001eb8860bd6ba8d92943fa3a9b50bcab3cafe3bba35a48_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1e158a348ea2330bc3658eee321bd4b7df929494d92d5b04a002ca87dd596cff = $this->env->getExtension("native_profiler");
        $__internal_1e158a348ea2330bc3658eee321bd4b7df929494d92d5b04a002ca87dd596cff->enter($__internal_1e158a348ea2330bc3658eee321bd4b7df929494d92d5b04a002ca87dd596cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1e158a348ea2330bc3658eee321bd4b7df929494d92d5b04a002ca87dd596cff->leave($__internal_1e158a348ea2330bc3658eee321bd4b7df929494d92d5b04a002ca87dd596cff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d129d7f1fba743936487bcdac5e86f8ff46caffd4346cb803c3a77fd83472aef = $this->env->getExtension("native_profiler");
        $__internal_d129d7f1fba743936487bcdac5e86f8ff46caffd4346cb803c3a77fd83472aef->enter($__internal_d129d7f1fba743936487bcdac5e86f8ff46caffd4346cb803c3a77fd83472aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d129d7f1fba743936487bcdac5e86f8ff46caffd4346cb803c3a77fd83472aef->leave($__internal_d129d7f1fba743936487bcdac5e86f8ff46caffd4346cb803c3a77fd83472aef_prof);

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
