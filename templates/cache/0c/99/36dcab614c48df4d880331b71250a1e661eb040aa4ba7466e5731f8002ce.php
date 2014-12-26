<?php

/* index.twig */
class __TwigTemplate_0c9936dcab614c48df4d880331b71250a1e661eb040aa4ba7466e5731f8002ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("index-layout.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'csstop' => array($this, 'block_csstop'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index-layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
    <div id=\"main-container\">
        ";
        // line 11
        echo "
        <h1>Welcome</h1>



    </div><!-- /main-container -->

";
    }

    // line 20
    public function block_csstop($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  44 => 11,  40 => 3,  37 => 2,  11 => 1,);
    }
}
