<?php

/* aegis/index.html.twig */
class __TwigTemplate_299560a081e4af732f42a22f9bdb60e517fb99a9908ad0df33ff5339e70354da extends Twig_Template
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

<html>
    <head>
        <title>Aegis</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>
    <body>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("import");
        echo "\">kliknij, aby zrealizować import</a><br />
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("sort_by" => "id", "sort_order" => "asc")), "html", null, true);
        echo "\">kliknij, aby wyświetlić dane z bazy danych</a>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "aegis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "aegis/index.html.twig", "C:\\xampp1\\htdocs\\onedrive\\WP\\aegis\\templates\\aegis\\index.html.twig");
    }
}
