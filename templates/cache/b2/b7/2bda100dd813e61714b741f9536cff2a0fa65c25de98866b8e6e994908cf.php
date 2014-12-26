<?php

/* error404.twig */
class __TwigTemplate_b2b72bda100dd813e61714b741f9536cff2a0fa65c25de98866b8e6e994908cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("signup-signin-layout.twig");
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
        return "signup-signin-layout.twig";
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
<div class=\"padding-md\" style=\"margin-top:0px;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center\">
                    <h1 class=\"m-top-none error-heading\">404</h1>
                    <h4>Oops, This Page Could Not Be Found!</h4>
                    ";
        // line 22
        echo "                    <a class=\"btn btn-success m-bottom-sm\" href=\"/\"><i class=\"fa fa-home\"></i> Back to home</a>
                    <a class=\"btn btn-success m-bottom-sm\" href=\"\"><i class=\"fa fa-envelope\">Contact Us</i> </a>

\t\t\t\t</div><!-- /.col -->
\t\t\t</div><!-- /.row -->
\t\t</div><!-- /.padding-md -->
";
    }

    // line 30
    public function block_csstop($context, array $blocks = array())
    {
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "error404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 31,  58 => 30,  48 => 22,  40 => 3,  37 => 2,  11 => 1,);
    }
}
