<?php

/* default/hello.xml.twig */
class __TwigTemplate_815f9024a90260124f60a02006a3a8fc915b2b5cc1fd002ad97dffe9158ae911 extends Twig_Template
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
        // line 1
        echo "<hello>
    <name>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</name>
</hello>
";
    }

    public function getTemplateName()
    {
        return "default/hello.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
