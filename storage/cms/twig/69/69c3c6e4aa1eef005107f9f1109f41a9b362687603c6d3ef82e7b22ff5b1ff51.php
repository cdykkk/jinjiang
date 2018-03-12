<?php

/* D:\phpStudy\WWW\CMS/themes/jtherczeg-multi/partials/slidelist.htm */
class __TwigTemplate_3d45011cd087fb10a74e05ba503bd6dffde817e3cae5fbbd9abda7d55b6da868 extends Twig_Template
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
        return "D:\\phpStudy\\WWW\\CMS/themes/jtherczeg-multi/partials/slidelist.htm";
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
        return new Twig_Source("{% component 'SlideShow' %}", "D:\\phpStudy\\WWW\\CMS/themes/jtherczeg-multi/partials/slidelist.htm", "");
    }
}
