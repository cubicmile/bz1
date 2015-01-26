<?php

/* base.html.twig */
class __TwigTemplate_8afe0717b2f25d157833fea930196bd65ace3a5e7adc0228687c37f4294e75e5 extends Twig_Template
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
        // line 8
        echo "


        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "        ";
        echo twig_include($this->env, $context, "basefooter.html.twig");
        echo "
        
        <p>Path to homepage: ";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "        ";
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
        return array (  89 => 18,  86 => 17,  81 => 15,  77 => 7,  74 => 6,  68 => 5,  60 => 21,  54 => 19,  52 => 17,  49 => 16,  47 => 15,  40 => 11,  35 => 8,  33 => 6,  29 => 5,  23 => 1,);
    }
}
