<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_939bc0e761a87fa35fb2a6a4285c8717548f12268b42043da4e05830888c2880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de6ab39d5a5875f8f9abeb1dfd067e63566e62d34a0a6cbbd4e6bf7296b95528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6ab39d5a5875f8f9abeb1dfd067e63566e62d34a0a6cbbd4e6bf7296b95528->enter($__internal_de6ab39d5a5875f8f9abeb1dfd067e63566e62d34a0a6cbbd4e6bf7296b95528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_de6ab39d5a5875f8f9abeb1dfd067e63566e62d34a0a6cbbd4e6bf7296b95528->leave($__internal_de6ab39d5a5875f8f9abeb1dfd067e63566e62d34a0a6cbbd4e6bf7296b95528_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
