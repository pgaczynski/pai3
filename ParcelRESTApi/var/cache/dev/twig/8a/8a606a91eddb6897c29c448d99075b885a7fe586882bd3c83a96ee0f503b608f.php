<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_969698b0e4e0f8e11068370f54d4aa10b1d236dcc9aa796d0f220e272c358391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8113dd6338a1ac475c87ddb242bdba8e840772c78343ae20caeaeaec4bff11ad = $this->env->getExtension("native_profiler");
        $__internal_8113dd6338a1ac475c87ddb242bdba8e840772c78343ae20caeaeaec4bff11ad->enter($__internal_8113dd6338a1ac475c87ddb242bdba8e840772c78343ae20caeaeaec4bff11ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8113dd6338a1ac475c87ddb242bdba8e840772c78343ae20caeaeaec4bff11ad->leave($__internal_8113dd6338a1ac475c87ddb242bdba8e840772c78343ae20caeaeaec4bff11ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d501890c860966b4e483405e8bf8c6d11d039c570bd03a06bce3c67af9f430ca = $this->env->getExtension("native_profiler");
        $__internal_d501890c860966b4e483405e8bf8c6d11d039c570bd03a06bce3c67af9f430ca->enter($__internal_d501890c860966b4e483405e8bf8c6d11d039c570bd03a06bce3c67af9f430ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d501890c860966b4e483405e8bf8c6d11d039c570bd03a06bce3c67af9f430ca->leave($__internal_d501890c860966b4e483405e8bf8c6d11d039c570bd03a06bce3c67af9f430ca_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_83262f46618461a731570836d95f6e570ab511a93a7ed44011a7664afed422b9 = $this->env->getExtension("native_profiler");
        $__internal_83262f46618461a731570836d95f6e570ab511a93a7ed44011a7664afed422b9->enter($__internal_83262f46618461a731570836d95f6e570ab511a93a7ed44011a7664afed422b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_83262f46618461a731570836d95f6e570ab511a93a7ed44011a7664afed422b9->leave($__internal_83262f46618461a731570836d95f6e570ab511a93a7ed44011a7664afed422b9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_92d5a07dae35d1a55da30c80d2d7b235983fe78592365c99ef5fbe89c9df0b0a = $this->env->getExtension("native_profiler");
        $__internal_92d5a07dae35d1a55da30c80d2d7b235983fe78592365c99ef5fbe89c9df0b0a->enter($__internal_92d5a07dae35d1a55da30c80d2d7b235983fe78592365c99ef5fbe89c9df0b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_92d5a07dae35d1a55da30c80d2d7b235983fe78592365c99ef5fbe89c9df0b0a->leave($__internal_92d5a07dae35d1a55da30c80d2d7b235983fe78592365c99ef5fbe89c9df0b0a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
