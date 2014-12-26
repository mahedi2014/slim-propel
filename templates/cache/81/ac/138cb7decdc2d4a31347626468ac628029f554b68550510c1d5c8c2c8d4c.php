<?php

/* index-topnav.twig */
class __TwigTemplate_81ac138cb7decdc2d4a31347626468ac628029f554b68550510c1d5c8c2c8d4c extends Twig_Template
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
        echo "<div id=\"top-nav\" class=\"skin-6 fixed\">
    <div class=\"brand\">
        <a href=\"/\">
            <span>RHINO<sup>&reg</sup></span>
            <span class=\"text-toggle\">CMS</span>
        </a>
    </div><!-- /brand -->
    <button type=\"button\" class=\"navbar-toggle pull-left\" id=\"sidebarToggle\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </button>
    <button type=\"button\" class=\"navbar-toggle pull-left hide-menu\" id=\"menuToggle\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </button>
    <ul class=\"nav-notification clearfix\">

        <li class=\"profile dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <strong>";
        // line 22
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["logedUser"]) ? $context["logedUser"] : null), "UserName", array())), "html", null, true);
        echo " </strong>
                <span><i class=\"fa fa-chevron-down\"></i></span>
            </a>
            <ul class=\"dropdown-menu\">
                <li>
                    <a class=\"clearfix\" href=\"/profile\">
                        ";
        // line 28
        if (($this->getAttribute((isset($context["logedProfile"]) ? $context["logedProfile"] : null), "ProfileImage", array()) != "")) {
            // line 29
            echo "                            <img src=\"/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logedProfile"]) ? $context["logedProfile"] : null), "ProfileImage", array()), "html", null, true);
            echo "\" alt=\"User Avatar\">
                        ";
        } else {
            // line 31
            echo "                            <img src=\"/assets/img/default-profile.jpg\" alt=\"User Avatar\">
                        ";
        }
        // line 33
        echo "
                        <div class=\"detail\">
                            <strong>";
        // line 35
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["logedUser"]) ? $context["logedUser"] : null), "UserName", array())), "html", null, true);
        echo "</strong>
                            <p class=\"grey\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logedUser"]) ? $context["logedUser"] : null), "EmailAddress", array()), "html", null, true);
        echo "</p>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li><a tabindex=\"-1\" class=\"main-link logoutConfirm_open\" href=\"#logoutConfirm\"><i class=\"fa fa-lock fa-lg\"></i> Log out</a></li>
            </ul>
        </li>
    </ul>
</div><!-- /top-nav-->";
    }

    public function getTemplateName()
    {
        return "index-topnav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 36,  67 => 35,  63 => 33,  59 => 31,  53 => 29,  51 => 28,  42 => 22,  19 => 1,);
    }
}
