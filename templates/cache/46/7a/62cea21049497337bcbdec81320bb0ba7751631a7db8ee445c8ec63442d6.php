<?php

/* index-sidenav.twig */
class __TwigTemplate_467a62cea21049497337bcbdec81320bb0ba7751631a7db8ee445c8ec63442d6 extends Twig_Template
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
        echo "<aside class=\" skin-6\">
    <div class=\"sidebar-inner scrollable-sidebars\">
        <div class=\"size-toggle\">
            <a class=\"btn btn-sm\" id=\"sizeToggle\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <a class=\"btn btn-sm pull-right logoutConfirm_open\"  href=\"#logoutConfirm\">
                <i class=\"fa fa-power-off\"></i>
            </a>
        </div><!-- /size-toggle -->

        <a href=\"/profile\">
            <div class=\"user-block clearfix\">
                ";
        // line 16
        if (($this->getAttribute((isset($context["logedProfile"]) ? $context["logedProfile"] : null), "ProfileImage", array()) != "")) {
            // line 17
            echo "                    <img src=\"/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logedProfile"]) ? $context["logedProfile"] : null), "ProfileImage", array()), "html", null, true);
            echo "\" alt=\"User Avatar\">
                ";
        } else {
            // line 19
            echo "                    <img src=\"/assets/img/default-profile.jpg\" alt=\"User Avatar\">
                ";
        }
        // line 21
        echo "                <div class=\"detail\">
                    <strong>";
        // line 22
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["logedUser"]) ? $context["logedUser"] : null), "UserName", array())), "html", null, true);
        echo "</strong>
                    <p class=\"grey\" style=\"font-size: 10px\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logedUser"]) ? $context["logedUser"] : null), "EmailAddress", array()), "html", null, true);
        echo "</p>
                </div>
            </div><!-- /user-block -->
        </a>



        <div class=\"main-menu\">
            <ul>
                <li class=\"openable open ";
        // line 32
        if (((isset($context["menu"]) ? $context["menu"] : null) == "dashboard")) {
            echo "active";
        }
        echo "\">
                    <a href=\"/dashboard\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-desktop fa-lg\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">
\t\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t</span>
                        <span class=\"menu-hover\"></span>
                    </a>
                    <ul class=\"submenu\">
                        <li ";
        // line 43
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "home")) {
            echo "class=\"active open\"";
        }
        echo "><a href=\"/\"><span class=\"submenu-label\">Welcome</span></a></li>
                        ";
        // line 45
        echo "                    </ul>
                </li>

                <!-- admin access-->
                ";
        // line 49
        if (($this->getAttribute((isset($context["logedUser"]) ? $context["logedUser"] : null), "UserRole", array()) == 1)) {
            // line 50
            echo "                <li class=\"openable open ";
            if (((isset($context["menu"]) ? $context["menu"] : null) == "users")) {
                echo "active";
            }
            echo "\">
                    <a href=\"#\">
\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-group fa-lg\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"text\">
\t\t\t\t\t\t\t\t\tUsers
\t\t\t\t\t\t\t\t</span>
                        <span class=\"menu-hover\"></span>
                    </a>
                    <ul class=\"submenu\">
                        <li ";
            // line 61
            if (((isset($context["sudmenu"]) ? $context["sudmenu"] : null) == "userList")) {
                echo "class=\"active open\"";
            }
            echo "><a href=\"/user\"><span class=\"submenu-label\">User list</span></a></li>
                        <li ";
            // line 62
            if (((isset($context["sudmenu"]) ? $context["sudmenu"] : null) == "addUser")) {
                echo "class=\"active open\"";
            }
            echo "><a href=\"/addUser\"><span class=\"submenu-label\">Add user</span></a></li>
                    </ul>
                </li>
                ";
        }
        // line 66
        echo "

                ";
        // line 102
        echo "            </ul>

            ";
        // line 108
        echo "        </div><!-- /main-menu -->
    </div><!-- /sidebar-inner -->
</aside> <!-- /side-nav-->";
    }

    public function getTemplateName()
    {
        return "index-sidenav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 108,  133 => 102,  129 => 66,  120 => 62,  114 => 61,  97 => 50,  95 => 49,  89 => 45,  83 => 43,  67 => 32,  55 => 23,  51 => 22,  48 => 21,  44 => 19,  38 => 17,  36 => 16,  19 => 1,);
    }
}
