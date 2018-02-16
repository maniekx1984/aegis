<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dec5de541a2b35e6b7d1a01db426e67b50679748c4a683aa1607f6903c091320 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02fc28b07a8af72b249e0ddd86c2de66c066483db47e45deb8cbddd71269ab13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fc28b07a8af72b249e0ddd86c2de66c066483db47e45deb8cbddd71269ab13->enter($__internal_02fc28b07a8af72b249e0ddd86c2de66c066483db47e45deb8cbddd71269ab13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_24ff798d3e747ea36de4694135188cdd4d28ea2cec461255f3e5e0f0f24df818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ff798d3e747ea36de4694135188cdd4d28ea2cec461255f3e5e0f0f24df818->enter($__internal_24ff798d3e747ea36de4694135188cdd4d28ea2cec461255f3e5e0f0f24df818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02fc28b07a8af72b249e0ddd86c2de66c066483db47e45deb8cbddd71269ab13->leave($__internal_02fc28b07a8af72b249e0ddd86c2de66c066483db47e45deb8cbddd71269ab13_prof);

        
        $__internal_24ff798d3e747ea36de4694135188cdd4d28ea2cec461255f3e5e0f0f24df818->leave($__internal_24ff798d3e747ea36de4694135188cdd4d28ea2cec461255f3e5e0f0f24df818_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35b46c5e30b9cf8d72b9d4657c3964a50e78c5028a6deec896516b833cfce8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b46c5e30b9cf8d72b9d4657c3964a50e78c5028a6deec896516b833cfce8f9->enter($__internal_35b46c5e30b9cf8d72b9d4657c3964a50e78c5028a6deec896516b833cfce8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f91e2a7b09198dd0c1f87334b24c44d221802f5aa01debda4bbdbd354836e6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91e2a7b09198dd0c1f87334b24c44d221802f5aa01debda4bbdbd354836e6d4->enter($__internal_f91e2a7b09198dd0c1f87334b24c44d221802f5aa01debda4bbdbd354836e6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f91e2a7b09198dd0c1f87334b24c44d221802f5aa01debda4bbdbd354836e6d4->leave($__internal_f91e2a7b09198dd0c1f87334b24c44d221802f5aa01debda4bbdbd354836e6d4_prof);

        
        $__internal_35b46c5e30b9cf8d72b9d4657c3964a50e78c5028a6deec896516b833cfce8f9->leave($__internal_35b46c5e30b9cf8d72b9d4657c3964a50e78c5028a6deec896516b833cfce8f9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfa89f5f4e8cbfc7dcb66651fcee0513a5bb02226a8a827def6b812fdec9332d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa89f5f4e8cbfc7dcb66651fcee0513a5bb02226a8a827def6b812fdec9332d->enter($__internal_bfa89f5f4e8cbfc7dcb66651fcee0513a5bb02226a8a827def6b812fdec9332d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9392d0e0806ad3a7865f9cf1c24d346497cbb27424dc4ee0d8a73da4a7b17e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9392d0e0806ad3a7865f9cf1c24d346497cbb27424dc4ee0d8a73da4a7b17e29->enter($__internal_9392d0e0806ad3a7865f9cf1c24d346497cbb27424dc4ee0d8a73da4a7b17e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9392d0e0806ad3a7865f9cf1c24d346497cbb27424dc4ee0d8a73da4a7b17e29->leave($__internal_9392d0e0806ad3a7865f9cf1c24d346497cbb27424dc4ee0d8a73da4a7b17e29_prof);

        
        $__internal_bfa89f5f4e8cbfc7dcb66651fcee0513a5bb02226a8a827def6b812fdec9332d->leave($__internal_bfa89f5f4e8cbfc7dcb66651fcee0513a5bb02226a8a827def6b812fdec9332d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e66c62fd041171f1b133c5ddc4b46a559ed6c677c8f4270e37bcde560d94cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e66c62fd041171f1b133c5ddc4b46a559ed6c677c8f4270e37bcde560d94cfb->enter($__internal_8e66c62fd041171f1b133c5ddc4b46a559ed6c677c8f4270e37bcde560d94cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0af7a1ebf6bb9c21791cccfc9f240b64e4f74694f78beee7eaba8667bbab36ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af7a1ebf6bb9c21791cccfc9f240b64e4f74694f78beee7eaba8667bbab36ee->enter($__internal_0af7a1ebf6bb9c21791cccfc9f240b64e4f74694f78beee7eaba8667bbab36ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_0af7a1ebf6bb9c21791cccfc9f240b64e4f74694f78beee7eaba8667bbab36ee->leave($__internal_0af7a1ebf6bb9c21791cccfc9f240b64e4f74694f78beee7eaba8667bbab36ee_prof);

        
        $__internal_8e66c62fd041171f1b133c5ddc4b46a559ed6c677c8f4270e37bcde560d94cfb->leave($__internal_8e66c62fd041171f1b133c5ddc4b46a559ed6c677c8f4270e37bcde560d94cfb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp1\\htdocs\\onedrive\\WP\\aegis\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
