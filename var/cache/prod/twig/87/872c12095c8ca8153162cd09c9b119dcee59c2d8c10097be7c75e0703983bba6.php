<?php

/* aegis/show.html.twig */
class __TwigTemplate_7eab8f1bbe4d964e645758f7f0d1b9a67655ebb07a4c4e3895d8b13aee8b2a71 extends Twig_Template
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
        <title>Show</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    </head>
    <body>
        <a class=\"btn btn-primary\" role=\"button\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">strona główna</a><br /><br />
        ";
        // line 15
        if ((($context["sort_order"] ?? null) == "asc")) {
            // line 16
            echo "            ";
            $context["inverteed_order"] = "desc";
            // line 17
            echo "        ";
        } else {
            // line 18
            echo "            ";
            $context["inverteed_order"] = "asc";
            // line 19
            echo "        ";
        }
        // line 20
        echo "        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th scope=\"col\"><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("sort_by" => "id", "sort_order" => ($context["inverteed_order"] ?? null))), "html", null, true);
        echo "\">ID</a></th>
                    <th scope=\"col\"><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("sort_by" => "createdTime", "sort_order" => ($context["inverteed_order"] ?? null))), "html", null, true);
        echo "\">CREATED</a></th>
                    <th scope=\"col\"><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("sort_by" => "fromName", "sort_order" => ($context["inverteed_order"] ?? null))), "html", null, true);
        echo "\">AUTHOR</a></th>
                    <th scope=\"col\">STORY</th>
                    <th scope=\"col\">MESSAGE</th>
                    <th scope=\"col\"><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("sort_by" => "likes", "sort_order" => ($context["inverteed_order"] ?? null))), "html", null, true);
        echo "\"># polubień</a></th>
                    <th scope=\"col\"><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("sort_by" => "comments", "sort_order" => ($context["inverteed_order"] ?? null))), "html", null, true);
        echo "\"># komentarzy</a></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 34
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], 0, array()), "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], 0, array()), "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], 0, array()), "fromName", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], 0, array()), "story", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], 0, array()), "message", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], 0, array()), "likes", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "num_comments", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>
   </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "aegis/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 44,  113 => 41,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  86 => 34,  82 => 33,  75 => 29,  71 => 28,  65 => 25,  61 => 24,  57 => 23,  52 => 20,  49 => 19,  46 => 18,  43 => 17,  40 => 16,  38 => 15,  34 => 14,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "aegis/show.html.twig", "C:\\xampp1\\htdocs\\onedrive\\WP\\aegis\\templates\\aegis\\show.html.twig");
    }
}
