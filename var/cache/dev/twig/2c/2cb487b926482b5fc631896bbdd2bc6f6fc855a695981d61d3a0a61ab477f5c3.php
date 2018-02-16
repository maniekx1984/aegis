<?php

/* aegis/index.html.twig */
class __TwigTemplate_d06360ff2233d2e43d593578fb1e4ba10e210700e6b10d2eb7b1ac0b29bb642a extends Twig_Template
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
        $__internal_eac202ac6400c0db2acc8630537e0d8f0172734bcdb3270386201454e8523c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac202ac6400c0db2acc8630537e0d8f0172734bcdb3270386201454e8523c1b->enter($__internal_eac202ac6400c0db2acc8630537e0d8f0172734bcdb3270386201454e8523c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aegis/index.html.twig"));

        $__internal_9e078e7bdc34bba903af47c4f606ac14107c13a289722a874cd27ca67798e2b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e078e7bdc34bba903af47c4f606ac14107c13a289722a874cd27ca67798e2b8->enter($__internal_9e078e7bdc34bba903af47c4f606ac14107c13a289722a874cd27ca67798e2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aegis/index.html.twig"));

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
        
        $__internal_eac202ac6400c0db2acc8630537e0d8f0172734bcdb3270386201454e8523c1b->leave($__internal_eac202ac6400c0db2acc8630537e0d8f0172734bcdb3270386201454e8523c1b_prof);

        
        $__internal_9e078e7bdc34bba903af47c4f606ac14107c13a289722a874cd27ca67798e2b8->leave($__internal_9e078e7bdc34bba903af47c4f606ac14107c13a289722a874cd27ca67798e2b8_prof);

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
        return array (  40 => 11,  36 => 10,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
    <head>
        <title>Aegis</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>
    <body>
        <a href=\"{{ path('import') }}\">kliknij, aby zrealizować import</a><br />
        <a href=\"{{ path('show', {'sort_by': 'id', 'sort_order': 'asc'}) }}\">kliknij, aby wyświetlić dane z bazy danych</a>
    </body>
</html>
", "aegis/index.html.twig", "C:\\xampp1\\htdocs\\onedrive\\WP\\aegis\\templates\\aegis\\index.html.twig");
    }
}
