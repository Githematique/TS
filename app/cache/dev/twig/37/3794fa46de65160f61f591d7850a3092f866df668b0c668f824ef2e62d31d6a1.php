<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_af098a79aa984bd7a09543e4676bcd1b7b09899c20f4815eca8814c073cddc0a extends Twig_Template
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
        $__internal_506c294101f29ff9a286ce2dd67b637f46613b4c743ea6bea3ca2828279a822a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506c294101f29ff9a286ce2dd67b637f46613b4c743ea6bea3ca2828279a822a->enter($__internal_506c294101f29ff9a286ce2dd67b637f46613b4c743ea6bea3ca2828279a822a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_506c294101f29ff9a286ce2dd67b637f46613b4c743ea6bea3ca2828279a822a->leave($__internal_506c294101f29ff9a286ce2dd67b637f46613b4c743ea6bea3ca2828279a822a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include 'TwigBundle:Exception:error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
