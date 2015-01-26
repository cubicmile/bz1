<?php

/* default/display.html.twig */
class __TwigTemplate_4cfe297a4de357876cfe5a1ebf74f6e753727d3e140dbeee77c895a163e927e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Hi - you just told me your name! It's ";
        echo twig_escape_filter($this->env, (isset($context["uname"]) ? $context["uname"] : $this->getContext($context, "uname")), "html", null, true);
        echo ".</h1>
";
    }

    public function getTemplateName()
    {
        return "default/display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
