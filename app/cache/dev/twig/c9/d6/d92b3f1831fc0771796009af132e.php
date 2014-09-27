<?php

/* IbwJobeetBundle:Goods:show.html.twig */
class __TwigTemplate_c9d6d92b3f1831fc0771796009af132e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Goods</h1>

    <table class=\"record_properties\">
        <tbody>
            
            <tr>
                <th>Name</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "price"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Img</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "img"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Issell</th>
                <td>";
        // line 23
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "issell") == 1)) {
            echo "  销售中 ";
        } else {
            echo " 已下架 ";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Demo</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "demo"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("ibw_goods");
        echo "\">
            Back to the list
        </a>
        
      &nbsp;&nbsp;|
       <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_orders_new", array("good" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            购买
        </a>

    </li>

</ul>
";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Goods:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 39,  82 => 34,  72 => 27,  61 => 23,  54 => 19,  47 => 15,  40 => 11,  31 => 4,  28 => 3,);
    }
}
