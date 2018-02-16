<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a810428d9d24d051f025cdf90765ff4c46f5e873f9ab25696f8e58b98ea52f36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8aa8dc04f2ce37c9d02bfeeebb94e971532608942c4757a43696cc45f56319b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa8dc04f2ce37c9d02bfeeebb94e971532608942c4757a43696cc45f56319b2->enter($__internal_8aa8dc04f2ce37c9d02bfeeebb94e971532608942c4757a43696cc45f56319b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f693dd8dff0e6ff106ba1b2db41e154d8d9f5fd50b4cd37b1519edf9e520696a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f693dd8dff0e6ff106ba1b2db41e154d8d9f5fd50b4cd37b1519edf9e520696a->enter($__internal_f693dd8dff0e6ff106ba1b2db41e154d8d9f5fd50b4cd37b1519edf9e520696a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aa8dc04f2ce37c9d02bfeeebb94e971532608942c4757a43696cc45f56319b2->leave($__internal_8aa8dc04f2ce37c9d02bfeeebb94e971532608942c4757a43696cc45f56319b2_prof);

        
        $__internal_f693dd8dff0e6ff106ba1b2db41e154d8d9f5fd50b4cd37b1519edf9e520696a->leave($__internal_f693dd8dff0e6ff106ba1b2db41e154d8d9f5fd50b4cd37b1519edf9e520696a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7893750340ac026b4fbad21c011b73ad176dd54ba18918e320e49f824395578f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7893750340ac026b4fbad21c011b73ad176dd54ba18918e320e49f824395578f->enter($__internal_7893750340ac026b4fbad21c011b73ad176dd54ba18918e320e49f824395578f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a8c1318d25e15777635df6a8b7d2942c12f08f5a658c95c0130657d9e14af06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c1318d25e15777635df6a8b7d2942c12f08f5a658c95c0130657d9e14af06c->enter($__internal_a8c1318d25e15777635df6a8b7d2942c12f08f5a658c95c0130657d9e14af06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a8c1318d25e15777635df6a8b7d2942c12f08f5a658c95c0130657d9e14af06c->leave($__internal_a8c1318d25e15777635df6a8b7d2942c12f08f5a658c95c0130657d9e14af06c_prof);

        
        $__internal_7893750340ac026b4fbad21c011b73ad176dd54ba18918e320e49f824395578f->leave($__internal_7893750340ac026b4fbad21c011b73ad176dd54ba18918e320e49f824395578f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63cadd0e89a76564b045c14dee3672aeadfdf2817e123dbe45b9c056d47c05c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63cadd0e89a76564b045c14dee3672aeadfdf2817e123dbe45b9c056d47c05c6->enter($__internal_63cadd0e89a76564b045c14dee3672aeadfdf2817e123dbe45b9c056d47c05c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3b839e55c9770ebdb1b9a42652ac06796fd6bc5d099a5424e288ad9990701caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b839e55c9770ebdb1b9a42652ac06796fd6bc5d099a5424e288ad9990701caa->enter($__internal_3b839e55c9770ebdb1b9a42652ac06796fd6bc5d099a5424e288ad9990701caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3b839e55c9770ebdb1b9a42652ac06796fd6bc5d099a5424e288ad9990701caa->leave($__internal_3b839e55c9770ebdb1b9a42652ac06796fd6bc5d099a5424e288ad9990701caa_prof);

        
        $__internal_63cadd0e89a76564b045c14dee3672aeadfdf2817e123dbe45b9c056d47c05c6->leave($__internal_63cadd0e89a76564b045c14dee3672aeadfdf2817e123dbe45b9c056d47c05c6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02f9bec22c40b1578ff25224d1742cc5109ab3810de2c06b2ed2bca3edca9679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f9bec22c40b1578ff25224d1742cc5109ab3810de2c06b2ed2bca3edca9679->enter($__internal_02f9bec22c40b1578ff25224d1742cc5109ab3810de2c06b2ed2bca3edca9679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7ec537f83b82284d6a89490c410410356bee5013dca3638c88f4d86c0fac0628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec537f83b82284d6a89490c410410356bee5013dca3638c88f4d86c0fac0628->enter($__internal_7ec537f83b82284d6a89490c410410356bee5013dca3638c88f4d86c0fac0628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_7ec537f83b82284d6a89490c410410356bee5013dca3638c88f4d86c0fac0628->leave($__internal_7ec537f83b82284d6a89490c410410356bee5013dca3638c88f4d86c0fac0628_prof);

        
        $__internal_02f9bec22c40b1578ff25224d1742cc5109ab3810de2c06b2ed2bca3edca9679->leave($__internal_02f9bec22c40b1578ff25224d1742cc5109ab3810de2c06b2ed2bca3edca9679_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp1\\htdocs\\onedrive\\WP\\aegis\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
