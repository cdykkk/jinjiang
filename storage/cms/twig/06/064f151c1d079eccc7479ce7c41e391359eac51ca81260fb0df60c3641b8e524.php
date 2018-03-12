<?php

/* D:\phpStudy\WWW\CMS/plugins/getright/slider/components/slides/default.htm */
class __TwigTemplate_abfc91c7361435146892e3b52b9a1b157c7ebbebf7ccb7d21adbf0641f5cc7b3 extends Twig_Template
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
        $context["slides"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "slides", array());
        // line 2
        $context["captionEnabled"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "captionEnabled", array());
        // line 3
        echo "<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 7
            echo "            ";
            $context["active"] = ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) ? ("active") : (null));
            // line 8
            echo "        <div class=\"item ";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["slide"], "image", array()), "getPath", array(), "method"), "html", null, true);
            echo "');background-size: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["slide"], "background_size_mode", array()), "html", null, true);
            echo ";background-position-x: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["slide"], "background_position_x", array()), "html", null, true);
            echo "%;background-position-y:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["slide"], "background_position_y", array()), "html", null, true);
            echo "%;\">
            ";
            // line 9
            if (($context["captionEnabled"] ?? null)) {
                // line 10
                echo "            <div class=\"carousel-caption\" >
                <h2 class=\"upper-title\" style=\"color: #ffffff\">";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["slide"], "upper_title", array()), "html", null, true);
                echo "</h2>
                <h1 class=\"middle-title\" style=\"color: #ffffff\">";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["slide"], "middle_title", array()), "html", null, true);
                echo "</h1>
                <h2 class=\"lower-title\" style=\"color: #ffffff\">";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["slide"], "lower_title", array()), "html", null, true);
                echo "</h2>
            </div>
            ";
            }
            // line 16
            echo "        </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>

    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpStudy\\WWW\\CMS/plugins/getright/slider/components/slides/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 18,  80 => 16,  74 => 13,  70 => 12,  66 => 11,  63 => 10,  61 => 9,  48 => 8,  45 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set slides = __SELF__.slides %}
{% set captionEnabled = __SELF__.captionEnabled %}
<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        {% for slide in slides %}
            {% set active = loop.first ? 'active' : null %}
        <div class=\"item {{ active}}\" style=\"background-image: url('{{ slide.image.getPath() }}');background-size: {{ slide.background_size_mode }};background-position-x: {{ slide.background_position_x }}%;background-position-y:{{ slide.background_position_y }}%;\">
            {% if captionEnabled %}
            <div class=\"carousel-caption\" >
                <h2 class=\"upper-title\" style=\"color: #ffffff\">{{ slide.upper_title }}</h2>
                <h1 class=\"middle-title\" style=\"color: #ffffff\">{{ slide.middle_title }}</h1>
                <h2 class=\"lower-title\" style=\"color: #ffffff\">{{ slide.lower_title }}</h2>
            </div>
            {% endif %}
        </div>
        {% endfor %}
    </div>

    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>
", "D:\\phpStudy\\WWW\\CMS/plugins/getright/slider/components/slides/default.htm", "");
    }
}
