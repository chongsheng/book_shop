<?php

/* IbwJobeetBundle:Default:index.html.twig */
class __TwigTemplate_8180dc35a938ef97905eee5c76c8618e extends Twig_Template
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

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
            <a class=\"navbar-brand\" href=\"#\">";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("书友会", array(), "messages");
        echo "</a>
        </div>
        
       <div id=\"navbar\" class=\"navbar-right\">
             <form action=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("IbwJobeetBundle_changeLanguage");
        echo "\" method=\"get\">
                <label>";
        // line 39
        echo $this->env->getExtension('translator')->getTranslator()->trans("语言", array(), "messages");
        echo "</label>
                    <select name=\"language\">
                        <option value=\"zh\" ";
        // line 41
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_locale"), "method") == "zh")) {
            echo "selected=\"selected\"";
        }
        echo ">zh</option>
                        <option value=\"en\" ";
        // line 42
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_locale"), "method") == "en")) {
            echo "selected=\"selected\"";
        }
        echo ">English</option>
                       
                    </select>
                <input type=\"submit\" value=\"Ok\"> 
           </form>
        </div>
            &nbsp;   &nbsp;     
          <div id=\"navbar\" class=\"navbar-right\">
           <span class=\"label label-success\">
           
           ";
        // line 52
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method")) {
            // line 53
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user_name"), "method"), "html", null, true);
            echo "  &nbsp;&nbsp;&nbsp;
                
                <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">登出</a>
                
            ";
        } else {
            // line 58
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("登录", array(), "messages");
            echo "</a>
           ";
        }
        // line 60
        echo "           </span>
           
         </div>
        <!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    
    <div class=\"jumbotron\">
      <div class=\"container\">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class=\"btn btn-primary btn-lg\" role=\"button\"  href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("ibw_msg_new");
        echo "\">留言 &raquo;</a></p>
      </div>
    </div>

    <div class=\"container\">
      <!-- Example row of goods -->
      <div class=\"row\">
          ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["goods"]) ? $context["goods"] : $this->getContext($context, "goods")));
        foreach ($context['_seq'] as $context["_key"] => $context["good"]) {
            echo "  
            <div class=\"col-md-4\">
              <h2>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["good"]) ? $context["good"] : $this->getContext($context, "good")), "name"), "html", null, true);
            echo "</h2>
              <p>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["good"]) ? $context["good"] : $this->getContext($context, "good")), "demo"), "html", null, true);
            echo " </p>
              <p><a class=\"btn btn-default\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_goods_show", array("id" => $this->getAttribute((isset($context["good"]) ? $context["good"] : $this->getContext($context, "good")), "id"))), "html", null, true);
            echo "\" role=\"button\">View details &raquo;</a></p>
            </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['good'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "         
        <div class=\"col-md-4\">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
       </div>
        <div class=\"col-md-4\">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
      </div>
<!-- end goods list -->
      <hr>
      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 111,  190 => 110,  165 => 87,  156 => 84,  152 => 83,  148 => 82,  141 => 80,  131 => 73,  116 => 60,  108 => 58,  102 => 55,  96 => 53,  94 => 52,  79 => 42,  73 => 41,  68 => 39,  64 => 38,  57 => 34,  34 => 14,  19 => 1,);
    }
}
