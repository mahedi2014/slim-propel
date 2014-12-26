<?php

/* flash.twig */
class __TwigTemplate_b2f8d173e7033127ea61d12fad48ad6961c99255ca6712e86d9a46946035eada extends Twig_Template
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
        if (($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array()) || $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info", array()))) {
            // line 2
            echo "    <div id=\"alerts\">
        ";
            // line 3
            if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array())) {
                // line 4
                echo "            <div class=\"alert alert-danger\" style=\"text-align: center; margin: 0px; \">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                ";
                // line 6
                echo $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array());
                echo "
            </div>
        ";
            }
            // line 9
            echo "        ";
            if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info", array())) {
                // line 10
                echo "            <div class=\"alert alert-info fixed\" style=\"text-align: center; margin: 0px;\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                ";
                // line 12
                echo $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info", array());
                echo "
            </div>
        ";
            }
            // line 15
            echo "    </div>
";
        }
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "flash.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  49 => 15,  43 => 12,  39 => 10,  36 => 9,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
