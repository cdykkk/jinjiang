<?php

/* D:\phpStudy\WWW\CMS/themes/jtherczeg-multi/partials/cta2.htm */
class __TwigTemplate_92e4b5cffaac361e1fc90641bb69d22763d0bb2e730d9af6210fabbf105c5802 extends Twig_Template
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
        echo "<h2 class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\"><span>MULTI</span> IS A CREATIVE HTML TEMPLATE</h2>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"100ms\">Mauris pretium auctor quam. Vestibulum et nunc id nisi fringilla <br />iaculis. Mauris pretium auctor quam.</p>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"200ms\"><a class=\"btn btn-primary btn-lg\" href=\"https://github.com/jtherczeg/multi-theme/archive/master.zip\">Free Download</a></p>
                <img class=\"img-responsive wow fadeIn\" src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/cta2/cta2-img.png");
        echo "\" alt=\"\" data-wow-duration=\"300ms\" data-wow-delay=\"300ms\">";
    }

    public function getTemplateName()
    {
        return "D:\\phpStudy\\WWW\\CMS/themes/jtherczeg-multi/partials/cta2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2 class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\"><span>MULTI</span> IS A CREATIVE HTML TEMPLATE</h2>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"100ms\">Mauris pretium auctor quam. Vestibulum et nunc id nisi fringilla <br />iaculis. Mauris pretium auctor quam.</p>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"200ms\"><a class=\"btn btn-primary btn-lg\" href=\"https://github.com/jtherczeg/multi-theme/archive/master.zip\">Free Download</a></p>
                <img class=\"img-responsive wow fadeIn\" src=\"{{ 'assets/images/cta2/cta2-img.png'|theme }}\" alt=\"\" data-wow-duration=\"300ms\" data-wow-delay=\"300ms\">", "D:\\phpStudy\\WWW\\CMS/themes/jtherczeg-multi/partials/cta2.htm", "");
    }
}
