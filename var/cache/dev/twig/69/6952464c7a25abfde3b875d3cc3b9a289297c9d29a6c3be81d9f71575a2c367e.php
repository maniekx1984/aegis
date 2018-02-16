<?php

/* aegis/show.html.twig */
class __TwigTemplate_5a8e1312fa534bebeeb43260c09626a300fc27d57937d09a44890051794df5bd extends Twig_Template
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
        $__internal_506f25111b5b654d05c9156ae5913e15f210761d19f305a13b8c7d5444276930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506f25111b5b654d05c9156ae5913e15f210761d19f305a13b8c7d5444276930->enter($__internal_506f25111b5b654d05c9156ae5913e15f210761d19f305a13b8c7d5444276930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aegis/show.html.twig"));

        $__internal_6d9999969774d679395f1bbde7f27b345efacd4924e945a5309ad72a3e86e806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d9999969774d679395f1bbde7f27b345efacd4924e945a5309ad72a3e86e806->enter($__internal_6d9999969774d679395f1bbde7f27b345efacd4924e945a5309ad72a3e86e806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aegis/show.html.twig"));

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
        if (((isset($context["sort_order"]) || array_key_exists("sort_order", $context) ? $context["sort_order"] : (function () { throw new Twig_Error_Runtime('Variable "sort_order" does not exist.', 15, $this->getSourceContext()); })()) == "asc")) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("sort_by" => "id", "sort_order" => (isset($context["inverteed_order"]) || array_key_exists("inverteed_order", $context) ? $context["inverteed_order"] : (function () { throw new Twig_Error_Runtime('Variable "inverteed_order" does not exist.', 23, $this->getSourceContext()); })()))), "html", null, true);
        echo "\">ID</a></th>
                    <th scope=\"col\"><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("sort_by" => "createdTime", "sort_order" => (isset($context["inverteed_order"]) || array_key_exists("inverteed_order", $context) ? $context["inverteed_order"] : (function () { throw new Twig_Error_Runtime('Variable "inverteed_order" does not exist.', 24, $this->getSourceContext()); })()))), "html", null, true);
        echo "\">CREATED</a></th>
                    <th scope=\"col\"><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("sort_by" => "fromName", "sort_order" => (isset($context["inverteed_order"]) || array_key_exists("inverteed_order", $context) ? $context["inverteed_order"] : (function () { throw new Twig_Error_Runtime('Variable "inverteed_order" does not exist.', 25, $this->getSourceContext()); })()))), "html", null, true);
        echo "\">AUTHOR</a></th>
                    <th scope=\"col\">STORY</th>
                    <th scope=\"col\">MESSAGE</th>
                    <th scope=\"col\"><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("sort_by" => "likes", "sort_order" => (isset($context["inverteed_order"]) || array_key_exists("inverteed_order", $context) ? $context["inverteed_order"] : (function () { throw new Twig_Error_Runtime('Variable "inverteed_order" does not exist.', 28, $this->getSourceContext()); })()))), "html", null, true);
        echo "\"># polubień</a></th>
                    <th scope=\"col\"><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("sort_by" => "comments", "sort_order" => (isset($context["inverteed_order"]) || array_key_exists("inverteed_order", $context) ? $context["inverteed_order"] : (function () { throw new Twig_Error_Runtime('Variable "inverteed_order" does not exist.', 29, $this->getSourceContext()); })()))), "html", null, true);
        echo "\"># komentarzy</a></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 33, $this->getSourceContext()); })()));
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
        
        $__internal_506f25111b5b654d05c9156ae5913e15f210761d19f305a13b8c7d5444276930->leave($__internal_506f25111b5b654d05c9156ae5913e15f210761d19f305a13b8c7d5444276930_prof);

        
        $__internal_6d9999969774d679395f1bbde7f27b345efacd4924e945a5309ad72a3e86e806->leave($__internal_6d9999969774d679395f1bbde7f27b345efacd4924e945a5309ad72a3e86e806_prof);

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
        return array (  128 => 44,  119 => 41,  115 => 40,  111 => 39,  107 => 38,  103 => 37,  99 => 36,  95 => 35,  92 => 34,  88 => 33,  81 => 29,  77 => 28,  71 => 25,  67 => 24,  63 => 23,  58 => 20,  55 => 19,  52 => 18,  49 => 17,  46 => 16,  44 => 15,  40 => 14,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

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
        <a class=\"btn btn-primary\" role=\"button\" href=\"{{ path('index') }}\">strona główna</a><br /><br />
        {% if sort_order == 'asc' %}
            {% set inverteed_order = 'desc' %}
        {% else %}
            {% set inverteed_order = 'asc' %}
        {% endif %}
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th scope=\"col\"><a href=\"{{ path('show', {'sort_by': 'id', 'sort_order': inverteed_order}) }}\">ID</a></th>
                    <th scope=\"col\"><a href=\"{{ path('show', {'sort_by': 'createdTime', 'sort_order': inverteed_order}) }}\">CREATED</a></th>
                    <th scope=\"col\"><a href=\"{{ path('show', {'sort_by': 'fromName', 'sort_order': inverteed_order}) }}\">AUTHOR</a></th>
                    <th scope=\"col\">STORY</th>
                    <th scope=\"col\">MESSAGE</th>
                    <th scope=\"col\"><a href=\"{{ path('show', {'sort_by': 'likes', 'sort_order': inverteed_order}) }}\"># polubień</a></th>
                    <th scope=\"col\"><a href=\"{{ path('show', {'sort_by': 'comments', 'sort_order': inverteed_order}) }}\"># komentarzy</a></th>
                </tr>
            </thead>
            <tbody>
                {% for post in posts %}
                    <tr>
                        <th scope=\"row\">{{ post.0.id }}</th>
                        <td>{{ post.0.createdTime|date(\"Y-m-d H:i:s\") }}</td>
                        <td>{{ post.0.fromName }}</td>
                        <td>{{ post.0.story }}</td>
                        <td>{{ post.0.message }}</td>
                        <td>{{ post.0.likes }}</td>
                        <td>{{ post.num_comments }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
   </body>
</html>
", "aegis/show.html.twig", "C:\\xampp1\\htdocs\\onedrive\\WP\\aegis\\templates\\aegis\\show.html.twig");
    }
}
