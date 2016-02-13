<?php

/* base.html.twig */
class __TwigTemplate_f9fba08f0edc698d7595ff03a68b18ad4fe8de25cedf90456a2aa944e33241bb extends Twig_Template
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
        $__internal_c89ea101ba55be01a1ab777a463a4834b0931ec021b3d7a6a040a33d2a1120c7 = $this->env->getExtension("native_profiler");
        $__internal_c89ea101ba55be01a1ab777a463a4834b0931ec021b3d7a6a040a33d2a1120c7->enter($__internal_c89ea101ba55be01a1ab777a463a4834b0931ec021b3d7a6a040a33d2a1120c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c89ea101ba55be01a1ab777a463a4834b0931ec021b3d7a6a040a33d2a1120c7->leave($__internal_c89ea101ba55be01a1ab777a463a4834b0931ec021b3d7a6a040a33d2a1120c7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_00bb365ec74f4189473846d46dfce2dea37c1db8250c85211f1a109d62dd34ee = $this->env->getExtension("native_profiler");
        $__internal_00bb365ec74f4189473846d46dfce2dea37c1db8250c85211f1a109d62dd34ee->enter($__internal_00bb365ec74f4189473846d46dfce2dea37c1db8250c85211f1a109d62dd34ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_00bb365ec74f4189473846d46dfce2dea37c1db8250c85211f1a109d62dd34ee->leave($__internal_00bb365ec74f4189473846d46dfce2dea37c1db8250c85211f1a109d62dd34ee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_14deb989a44db3fd260af4781bbfd914df2f5db3b7f42963417d801f848dc8e1 = $this->env->getExtension("native_profiler");
        $__internal_14deb989a44db3fd260af4781bbfd914df2f5db3b7f42963417d801f848dc8e1->enter($__internal_14deb989a44db3fd260af4781bbfd914df2f5db3b7f42963417d801f848dc8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_14deb989a44db3fd260af4781bbfd914df2f5db3b7f42963417d801f848dc8e1->leave($__internal_14deb989a44db3fd260af4781bbfd914df2f5db3b7f42963417d801f848dc8e1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_16d334e0053ce9e6db92a1ab0fef1e06fd84f083bac2a05d8c8e4d2f5b32a66d = $this->env->getExtension("native_profiler");
        $__internal_16d334e0053ce9e6db92a1ab0fef1e06fd84f083bac2a05d8c8e4d2f5b32a66d->enter($__internal_16d334e0053ce9e6db92a1ab0fef1e06fd84f083bac2a05d8c8e4d2f5b32a66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_16d334e0053ce9e6db92a1ab0fef1e06fd84f083bac2a05d8c8e4d2f5b32a66d->leave($__internal_16d334e0053ce9e6db92a1ab0fef1e06fd84f083bac2a05d8c8e4d2f5b32a66d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1ed3084777dfd4af4db22355328d2e21eb808d464edd708625860a4c7429690b = $this->env->getExtension("native_profiler");
        $__internal_1ed3084777dfd4af4db22355328d2e21eb808d464edd708625860a4c7429690b->enter($__internal_1ed3084777dfd4af4db22355328d2e21eb808d464edd708625860a4c7429690b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1ed3084777dfd4af4db22355328d2e21eb808d464edd708625860a4c7429690b->leave($__internal_1ed3084777dfd4af4db22355328d2e21eb808d464edd708625860a4c7429690b_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
