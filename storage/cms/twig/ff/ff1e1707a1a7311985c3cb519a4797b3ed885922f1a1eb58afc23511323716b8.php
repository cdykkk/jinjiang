<?php

/* D:\phpStudy\WWW\CMS/themes/jtherczeg-multi/partials/about.htm */
class __TwigTemplate_4eb5837f06d71d12a48d6a88e39426df990eea11afda760fbd916ac5efc9be73 extends Twig_Template
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
        echo "<div class=\"container\">

            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">About Us</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    
                </div>

                <div class=\"col-sm-6 wow fadeInRight\">
                    ";
        // line 14
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about/capabilities.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 15
        echo "                </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "D:\\phpStudy\\WWW\\CMS/themes/jtherczeg-multi/partials/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  34 => 14,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">

            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">About Us</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    
                </div>

                <div class=\"col-sm-6 wow fadeInRight\">
                    {% content 'about/capabilities.htm' %}
                </div>
        </div>", "D:\\phpStudy\\WWW\\CMS/themes/jtherczeg-multi/partials/about.htm", "");
    }
}
