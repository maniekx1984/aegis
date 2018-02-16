<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e95a2aeb61101cd5712b70d8e7915f17d2a7f806ed41360ef6e3c6ab60e3dc47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4d916e0a004bb038e316c3ac345bf2c3ad4891360e9abe6da611229423e925f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d916e0a004bb038e316c3ac345bf2c3ad4891360e9abe6da611229423e925f->enter($__internal_d4d916e0a004bb038e316c3ac345bf2c3ad4891360e9abe6da611229423e925f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_214d552554abb4c53f619bbbda7a459b3ff5e0cba79f0e5b09c6c27a394888c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_214d552554abb4c53f619bbbda7a459b3ff5e0cba79f0e5b09c6c27a394888c5->enter($__internal_214d552554abb4c53f619bbbda7a459b3ff5e0cba79f0e5b09c6c27a394888c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4d916e0a004bb038e316c3ac345bf2c3ad4891360e9abe6da611229423e925f->leave($__internal_d4d916e0a004bb038e316c3ac345bf2c3ad4891360e9abe6da611229423e925f_prof);

        
        $__internal_214d552554abb4c53f619bbbda7a459b3ff5e0cba79f0e5b09c6c27a394888c5->leave($__internal_214d552554abb4c53f619bbbda7a459b3ff5e0cba79f0e5b09c6c27a394888c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ff0bbb9dc5d1a867e11ca838ee1d25707b8e62e99e3912b8f7e254d810c7b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff0bbb9dc5d1a867e11ca838ee1d25707b8e62e99e3912b8f7e254d810c7b0a->enter($__internal_2ff0bbb9dc5d1a867e11ca838ee1d25707b8e62e99e3912b8f7e254d810c7b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_77963d24f80bfb1a6e7c55f421cffe40a8d179cee63f52ac726fab28ca020a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77963d24f80bfb1a6e7c55f421cffe40a8d179cee63f52ac726fab28ca020a69->enter($__internal_77963d24f80bfb1a6e7c55f421cffe40a8d179cee63f52ac726fab28ca020a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_77963d24f80bfb1a6e7c55f421cffe40a8d179cee63f52ac726fab28ca020a69->leave($__internal_77963d24f80bfb1a6e7c55f421cffe40a8d179cee63f52ac726fab28ca020a69_prof);

        
        $__internal_2ff0bbb9dc5d1a867e11ca838ee1d25707b8e62e99e3912b8f7e254d810c7b0a->leave($__internal_2ff0bbb9dc5d1a867e11ca838ee1d25707b8e62e99e3912b8f7e254d810c7b0a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp1\\htdocs\\onedrive\\WP\\aegis\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
