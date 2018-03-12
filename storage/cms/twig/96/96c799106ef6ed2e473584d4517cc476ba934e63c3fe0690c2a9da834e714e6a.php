<?php

/* D:\phpStudy\WWW\CMS/themes/jtherczeg-multi/partials/news.htm */
class __TwigTemplate_215df2f2c7c987c2d52175a558a51ddc70c2b7bc9a12ccf0fb813db59cf1660a extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("newsPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\phpStudy\\WWW\\CMS/themes/jtherczeg-multi/partials/news.htm";
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
        return new Twig_Source("{% component 'newsPosts' %}", "D:\\phpStudy\\WWW\\CMS/themes/jtherczeg-multi/partials/news.htm", "");
    }
}
