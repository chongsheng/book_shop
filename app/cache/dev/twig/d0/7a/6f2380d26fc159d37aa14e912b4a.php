<?php

/* AdminManageBundle:Default:index.html.twig */
class __TwigTemplate_d07a6f2380d26fc159d37aa14e912b4a extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<title>Neat Admin Template</title>
<meta name=\"description\" content=\"\">

<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1\">

<link rel=\"stylesheet\" href=\"css/bootstrap.css\">
<link rel=\"stylesheet\" href=\"css/jquery.fancybox.css\">
<link rel=\"stylesheet\" href=\"css/login.css\">
</head>
<body class='login_body'>
\t<div class=\"wrap\">
\t\t<h2>Neat Admin Template</h2>
\t\t<h4>Welcome to the login page</h4>
\t\t<form action=\"dashboard.html\"  autocomplete=\"off\" method=\"post\" class=\"validate\">
\t\t<div class=\"alert alert-error\">
\t\t\t<strong>Error!</strong> Please enter an username and a password.
\t\t</div>
\t\t<div class=\"login\">
\t\t\t<div class=\"email\">
\t\t\t\t<label for=\"user\">Email</label><div class=\"email-input\"><div class=\"control-group\"><div class=\"input-prepend\"><span class=\"add-on\"><i class=\"icon-envelope\"></i></span><input type=\"text\" id=\"user\" name=\"user\" class=\"{required:true}\"></div></div></div>
\t\t\t</div>
\t\t\t<div class=\"pw\">
\t\t\t\t<label for=\"pw\">Password</label><div class=\"pw-input\"><div class=\"control-group\"><div class=\"input-prepend\"><span class=\"add-on\"><i class=\"icon-lock\"></i></span><input type=\"password\" id=\"pw\" name=\"pw\" class='{required:true}'></div></div></div>
\t\t\t</div>
\t\t\t<div class=\"remember\">
\t\t\t\t<label class=\"checkbox\">
\t\t\t\t\t<input type=\"checkbox\" value=\"1\" name=\"remember\"> Remember me on this computer
\t\t\t\t</label>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"submit\">
\t\t\t<a href=\"#\">Lost password?</a>
\t\t\t<button class=\"btn btn-red5\">Login</button>
\t\t</div>
\t\t<div class=\"login social\">
\t\t\t<div class=\"btn-row\">
\t\t\t\t<a href=\"#\" class=\"btn btn-social btn-twitter\"><img src=\"img/twitter.png\" alt=\"\">Sign in with Twitter</a>
\t\t\t\t<a href=\"#\" class=\"btn btn-social btn-fb\"><img src=\"img/facebook.png\" alt=\"\">Sign in with Facebook</a>
\t\t\t</div>
\t\t\t<div class=\"btn-row\">
\t\t\t\t<a href=\"#\" class=\"btn btn-social btn-dr\"><img src=\"img/dribble.png\" alt=\"\">Sign in with Dribble</a>
\t\t\t\t<a href=\"#\" class=\"btn btn-social btn-fo\"><img src=\"img/forrst.png\" alt=\"\">Sign in with Forrst</a>
\t\t\t</div>
\t\t</div>
\t\t</form>
\t\t<div class=\"social-shadow-hider\"></div>
\t\t<div class=\"social-toggle\">
\t\t\t<a href=\"#\" class='toggle-social'>Sign in with social network <b class=\"caret\"></b></a>
\t\t</div>
\t</div>
<script src=\"js/jquery.js\"></script>
<script src=\"js/jquery.validate.min.js\"></script>
<script src=\"js/jquery.metadata.js\"></script>
<script src=\"js/error.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "AdminManageBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
