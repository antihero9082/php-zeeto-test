<?php

/* AcmeHelloBundle:Hello:index.html.twig */
class __TwigTemplate_3eb6b91a38d1c4f81faeb308e68ce860 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=us-ascii\" />
    <title>Stefan's PHP Ninja Test</title>
        
";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b2db76b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b2db76b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b2db76b_part_1_style_1.css");
            // line 12
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
";
        } else {
            // asset "b2db76b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b2db76b") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b2db76b.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
";
        }
        unset($context["asset_url"]);
        // line 14
        echo "

</head>

<body>
    <div id=\"container\">
        <div id=\"page\">
            <div id=\"header\">
                <div id=\"logo\">
                    <a href=\"/\"><img src=\"images/logo.gif\" /></a>
                </div>

                <div id=\"main\">
                    <h1>our blog</h1>
                    <div id=\"content\">
                        <div id=\"innercontent\">
                            
            ";
        // line 31
        echo $this->getAttribute($this->getContext($context, "contents"), "text");
        echo "
                        </div>
            <br/>
            <div id=\"postDate\">
            ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contents"), "createdAt"), "html", null, true);
        echo "
            </div>
     
                    </div>
                </div>

                <div id=\"right\">
                    <h2>subscribe to our newsletter!</h2>
                    <div id=\"login\">                       
                        ";
        // line 44
        $this->displayBlock('form', $context, $blocks);
        // line 47
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
";
    }

    // line 44
    public function block_form($context, array $blocks = array())
    {
        // line 45
        echo "                        ";
        echo $this->env->getExtension('actions')->renderAction("AcmeHelloBundle:Subscribers:new", array(), array());
        // line 46
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Hello:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 46,  100 => 45,  97 => 44,  86 => 47,  84 => 44,  72 => 35,  65 => 31,  46 => 14,  32 => 12,  28 => 9,  18 => 1,);
    }
}
