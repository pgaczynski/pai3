<?php

/* base.html.twig */
class __TwigTemplate_6e64729c8edb002f9df87fa913a22d4702453535487261cab5fab81c97b3469b extends Twig_Template
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
        $__internal_83a74276396b19929ba0a8813fca58cb8061ecf3a0cf33d4dae2e55c6541033d = $this->env->getExtension("native_profiler");
        $__internal_83a74276396b19929ba0a8813fca58cb8061ecf3a0cf33d4dae2e55c6541033d->enter($__internal_83a74276396b19929ba0a8813fca58cb8061ecf3a0cf33d4dae2e55c6541033d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_83a74276396b19929ba0a8813fca58cb8061ecf3a0cf33d4dae2e55c6541033d->leave($__internal_83a74276396b19929ba0a8813fca58cb8061ecf3a0cf33d4dae2e55c6541033d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6647a665f373dabdf24c3bca55c6f1a7d26a1eaa09f98f51c868f3f596471427 = $this->env->getExtension("native_profiler");
        $__internal_6647a665f373dabdf24c3bca55c6f1a7d26a1eaa09f98f51c868f3f596471427->enter($__internal_6647a665f373dabdf24c3bca55c6f1a7d26a1eaa09f98f51c868f3f596471427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6647a665f373dabdf24c3bca55c6f1a7d26a1eaa09f98f51c868f3f596471427->leave($__internal_6647a665f373dabdf24c3bca55c6f1a7d26a1eaa09f98f51c868f3f596471427_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_95f59bd2fa57023baac9c9e338839d18d1953c28503d68667d1c8daa84d221bb = $this->env->getExtension("native_profiler");
        $__internal_95f59bd2fa57023baac9c9e338839d18d1953c28503d68667d1c8daa84d221bb->enter($__internal_95f59bd2fa57023baac9c9e338839d18d1953c28503d68667d1c8daa84d221bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_95f59bd2fa57023baac9c9e338839d18d1953c28503d68667d1c8daa84d221bb->leave($__internal_95f59bd2fa57023baac9c9e338839d18d1953c28503d68667d1c8daa84d221bb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e32dab725970237ba87350ff4da59411d291a11659720934ff0ce0d0c194807 = $this->env->getExtension("native_profiler");
        $__internal_2e32dab725970237ba87350ff4da59411d291a11659720934ff0ce0d0c194807->enter($__internal_2e32dab725970237ba87350ff4da59411d291a11659720934ff0ce0d0c194807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2e32dab725970237ba87350ff4da59411d291a11659720934ff0ce0d0c194807->leave($__internal_2e32dab725970237ba87350ff4da59411d291a11659720934ff0ce0d0c194807_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f1bb06d05382e4b4528957c7380014221710de7b6bb0186ec0cc39619ad742e = $this->env->getExtension("native_profiler");
        $__internal_0f1bb06d05382e4b4528957c7380014221710de7b6bb0186ec0cc39619ad742e->enter($__internal_0f1bb06d05382e4b4528957c7380014221710de7b6bb0186ec0cc39619ad742e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0f1bb06d05382e4b4528957c7380014221710de7b6bb0186ec0cc39619ad742e->leave($__internal_0f1bb06d05382e4b4528957c7380014221710de7b6bb0186ec0cc39619ad742e_prof);

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
