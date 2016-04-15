<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dcc37887c57b7de8d02cf39062eb1d42cf96105daa9f0181007ce471210beeeb extends Twig_Template
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
        $__internal_b6107b9521a95573d2dca5f9e959b7299356a004ba3bd3fd7b607b8e674be19c = $this->env->getExtension("native_profiler");
        $__internal_b6107b9521a95573d2dca5f9e959b7299356a004ba3bd3fd7b607b8e674be19c->enter($__internal_b6107b9521a95573d2dca5f9e959b7299356a004ba3bd3fd7b607b8e674be19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6107b9521a95573d2dca5f9e959b7299356a004ba3bd3fd7b607b8e674be19c->leave($__internal_b6107b9521a95573d2dca5f9e959b7299356a004ba3bd3fd7b607b8e674be19c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_baa56a0ef885c4ce56d5299acc1fe65d64c80e3c2dd9c2eba1be906a20a8a6ba = $this->env->getExtension("native_profiler");
        $__internal_baa56a0ef885c4ce56d5299acc1fe65d64c80e3c2dd9c2eba1be906a20a8a6ba->enter($__internal_baa56a0ef885c4ce56d5299acc1fe65d64c80e3c2dd9c2eba1be906a20a8a6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_baa56a0ef885c4ce56d5299acc1fe65d64c80e3c2dd9c2eba1be906a20a8a6ba->leave($__internal_baa56a0ef885c4ce56d5299acc1fe65d64c80e3c2dd9c2eba1be906a20a8a6ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f34692f9bc10c0d1dbabee4d602d7db749809bd7010b0e2c03885922c73cfffa = $this->env->getExtension("native_profiler");
        $__internal_f34692f9bc10c0d1dbabee4d602d7db749809bd7010b0e2c03885922c73cfffa->enter($__internal_f34692f9bc10c0d1dbabee4d602d7db749809bd7010b0e2c03885922c73cfffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f34692f9bc10c0d1dbabee4d602d7db749809bd7010b0e2c03885922c73cfffa->leave($__internal_f34692f9bc10c0d1dbabee4d602d7db749809bd7010b0e2c03885922c73cfffa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_733484c4ad0c908dcb1fb54d62f70998eb9c65b66c911e183690774204879e0a = $this->env->getExtension("native_profiler");
        $__internal_733484c4ad0c908dcb1fb54d62f70998eb9c65b66c911e183690774204879e0a->enter($__internal_733484c4ad0c908dcb1fb54d62f70998eb9c65b66c911e183690774204879e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_733484c4ad0c908dcb1fb54d62f70998eb9c65b66c911e183690774204879e0a->leave($__internal_733484c4ad0c908dcb1fb54d62f70998eb9c65b66c911e183690774204879e0a_prof);

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
