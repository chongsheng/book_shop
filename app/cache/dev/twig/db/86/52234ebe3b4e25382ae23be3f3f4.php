<?php

/* IbwJobeetBundle:Default:login.html.twig */
class __TwigTemplate_db8652234ebe3b4e25382ae23be3f3f4 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>
        <div class=\"container\">
        
      <form class=\"form-signin\" role=\"form\" action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        <input type=\"text\" class=\"form-control\" placeholder=\"Your name\" id=\"_username\" name=\"_username\" required autofocus>
        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" id=\"_password\" name =\"_password\" required>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" value=\"remember-me\"> Remember me
          </label>
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
      </form>

    </div> <!-- /container -->

  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 29,  34 => 14,  19 => 1,);
    }
}
