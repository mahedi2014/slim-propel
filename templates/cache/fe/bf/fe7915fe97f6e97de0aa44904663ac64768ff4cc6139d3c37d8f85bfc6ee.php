<?php

/* index-layout.twig */
class __TwigTemplate_febffe7915fe97f6e97de0aa44904663ac64768ff4cc6139d3c37d8f85bfc6ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'csstop' => array($this, 'block_csstop'),
            'jstop' => array($this, 'block_jstop'),
            'extraHeader' => array($this, 'block_extraHeader'),
            'content' => array($this, 'block_content'),
            'cssbottom' => array($this, 'block_cssbottom'),
            'jsbottom' => array($this, 'block_jsbottom'),
            'extraFooter' => array($this, 'block_extraFooter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Bootstrap core CSS -->
    <link href=\"/assets/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Font Awesome -->
    <link href=\"/assets/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- Pace -->
    <link href=\"/assets/css/pace.css\" rel=\"stylesheet\">

    <!-- Endless -->
    <link href=\"/assets/css/endless.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/css/endless-skin.css\" rel=\"stylesheet\">
    <style>
        #alerts {
            position: fixed;
            top: 45px;
            left: 0;
            right: 0;
            z-index: 7000;
            height: 45px;
        }
    </style>

    ";
        // line 33
        $this->displayBlock('csstop', $context, $blocks);
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('jstop', $context, $blocks);
        // line 38
        echo "
    ";
        // line 39
        $this->displayBlock('extraHeader', $context, $blocks);
        // line 41
        echo "

</head>

<body class=\"overflow-hidden\">

";
        // line 47
        $this->env->loadTemplate("flash.twig")->display($context);
        // line 48
        echo "<div id=\"wrapper\" class=\"preload\">
    ";
        // line 49
        $this->env->loadTemplate("index-topnav.twig")->display($context);
        // line 50
        echo "    ";
        $this->env->loadTemplate("index-sidenav.twig")->display($context);
        // line 51
        echo "

    ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "
</div><!-- /wrapper -->

<a href=\"#\" id=\"scroll-to-top\" class=\"hidden-print\"><i class=\"fa fa-chevron-up\"></i></a>

<!-- Logout confirmation -->
<div class=\"custom-popup width-100\" id=\"logoutConfirm\">
    <div class=\"padding-md\">
        <h4 class=\"m-top-none\"> Do you want to logout?</h4>
    </div>

    <div class=\"text-center\">
        <a class=\"btn btn-success m-right-sm\" href=\"/logout\">Logout</a>
        <a class=\"btn btn-danger logoutConfirm_close\">Cancel</a>
    </div>
</div>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- Jquery -->
<script src=\"/assets/js/jquery-1.10.2.min.js\"></script>

<!-- Bootstrap -->
<script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>

<!-- Modernizr -->
<script src='/assets/js/modernizr.min.js'></script>

<!-- Pace -->
<script src='/assets/js/pace.min.js'></script>

<!-- Popup Overlay -->
<script src='/assets/js/jquery.popupoverlay.min.js'></script>

<!-- Slimscroll -->
<script src='/assets/js/jquery.slimscroll.min.js'></script>

<!-- Cookie -->
<script src='/assets/js/jquery.cookie.min.js'></script>

<!-- Endless -->
<script src=\"/assets/js/endless/endless.js\"></script>

";
        // line 100
        $this->displayBlock('cssbottom', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('jsbottom', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('extraFooter', $context, $blocks);
        // line 108
        echo "
</body>

</html>


";
    }

    // line 33
    public function block_csstop($context, array $blocks = array())
    {
        // line 34
        echo "    ";
    }

    // line 36
    public function block_jstop($context, array $blocks = array())
    {
        // line 37
        echo "    ";
    }

    // line 39
    public function block_extraHeader($context, array $blocks = array())
    {
        // line 40
        echo "    ";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "    ";
    }

    // line 100
    public function block_cssbottom($context, array $blocks = array())
    {
    }

    // line 103
    public function block_jsbottom($context, array $blocks = array())
    {
    }

    // line 106
    public function block_extraFooter($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index-layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 106,  201 => 103,  196 => 100,  192 => 54,  189 => 53,  185 => 40,  182 => 39,  178 => 37,  175 => 36,  171 => 34,  168 => 33,  158 => 108,  156 => 106,  153 => 105,  151 => 103,  148 => 102,  146 => 100,  99 => 55,  97 => 53,  93 => 51,  90 => 50,  88 => 49,  85 => 48,  83 => 47,  75 => 41,  73 => 39,  70 => 38,  68 => 36,  65 => 35,  63 => 33,  32 => 5,  26 => 1,);
    }
}
