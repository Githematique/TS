<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_c387cf8bd5a883f379e97f645369ff9a59900caf3948907166731ab1ad7283a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05a3f91841392fd233109e7d21908322ca2397aae2db880adbf3c3fb67383558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a3f91841392fd233109e7d21908322ca2397aae2db880adbf3c3fb67383558->enter($__internal_05a3f91841392fd233109e7d21908322ca2397aae2db880adbf3c3fb67383558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05a3f91841392fd233109e7d21908322ca2397aae2db880adbf3c3fb67383558->leave($__internal_05a3f91841392fd233109e7d21908322ca2397aae2db880adbf3c3fb67383558_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}
", "OCPlatformBundle::layout.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\src\\OC\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
