<?php

/* aegis/import.html.twig */
class __TwigTemplate_9d061235ac79376c0c3edfbda324b767ab57720a282f8301e1a3846267831e28 extends Twig_Template
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
        $__internal_f5fe2a4a15589a8357366eea7983eb6ba0f875058b518f42bbe0d1a062488a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fe2a4a15589a8357366eea7983eb6ba0f875058b518f42bbe0d1a062488a33->enter($__internal_f5fe2a4a15589a8357366eea7983eb6ba0f875058b518f42bbe0d1a062488a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aegis/import.html.twig"));

        $__internal_a6c580d82f2d27e6856e60f1f36ffdf62e495687262184f8d720fed8090dec48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c580d82f2d27e6856e60f1f36ffdf62e495687262184f8d720fed8090dec48->enter($__internal_a6c580d82f2d27e6856e60f1f36ffdf62e495687262184f8d720fed8090dec48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aegis/import.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
    <head>
        <title>Import</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>
    <body>
        ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new Twig_Error_Runtime('Variable "result" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo "<br /><br />
        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">strona główna</a>
    </body>
</html>
";
        
        $__internal_f5fe2a4a15589a8357366eea7983eb6ba0f875058b518f42bbe0d1a062488a33->leave($__internal_f5fe2a4a15589a8357366eea7983eb6ba0f875058b518f42bbe0d1a062488a33_prof);

        
        $__internal_a6c580d82f2d27e6856e60f1f36ffdf62e495687262184f8d720fed8090dec48->leave($__internal_a6c580d82f2d27e6856e60f1f36ffdf62e495687262184f8d720fed8090dec48_prof);

    }

    public function getTemplateName()
    {
        return "aegis/import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  36 => 10,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
    <head>
        <title>Import</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>
    <body>
        {{ result }}<br /><br />
        <a href=\"{{ path('index') }}\">strona główna</a>
    </body>
</html>
", "aegis/import.html.twig", "C:\\xampp1\\htdocs\\onedrive\\WP\\aegis\\templates\\aegis\\import.html.twig");
    }
}
