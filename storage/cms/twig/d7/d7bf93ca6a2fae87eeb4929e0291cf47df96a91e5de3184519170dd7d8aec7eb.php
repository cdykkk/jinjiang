<?php

/* D:\phpStudy\WWW\CMS1/themes/jtherczeg-multi/partials/slidelist.htm */
class __TwigTemplate_b133098de1cc9f1d5fa761451b38817e3d76a98d0ffc8fc1cd8a9a187c4d3d9a extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SlideShow"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\phpStudy\\WWW\\CMS1/themes/jtherczeg-multi/partials/slidelist.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'SlideShow' %}", "D:\\phpStudy\\WWW\\CMS1/themes/jtherczeg-multi/partials/slidelist.htm", "");
    }
}
