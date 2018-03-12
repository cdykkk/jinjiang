<?php

/* D:\phpStudy\WWW\CMS/plugins/indikator/news/components/post/default.htm */
class __TwigTemplate_182345503cec280abc6b8085b2b3bd2221223f8db63ff8912acb21d0f52aa37f extends Twig_Template
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
        $context["post"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "post", array());
        // line 2
        echo "
<div class=\"post\">
    <div class=\"post-content\">
        <h2 class=\"post-title\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h2>
        ";
        // line 6
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "image", array())) {
            echo "<div class=\"post-image\"><img src=\"";
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "image", array()));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
            echo "\"></div>";
        }
        // line 7
        echo "
        ";
        // line 8
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "introductory", array())) {
            echo "<div class=\"post-introductory\">";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "introductory", array());
            echo "</div>";
        }
        // line 9
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content", array())) {
            echo "<div class=\"post-content\">";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content", array());
            echo "</div>";
        }
        // line 10
        echo "
        <p class=\"post-date\">Posted on ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "published_at", array()), "Y-m-d"), "html", null, true);
        echo "</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpStudy\\WWW\\CMS/plugins/indikator/news/components/post/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  54 => 10,  47 => 9,  41 => 8,  38 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = __SELF__.post %}

<div class=\"post\">
    <div class=\"post-content\">
        <h2 class=\"post-title\">{{ post.title }}</h2>
        {% if post.image %}<div class=\"post-image\"><img src=\"{{ post.image|media }}\" alt=\"{{ post.title }}\"></div>{% endif %}

        {% if post.introductory %}<div class=\"post-introductory\">{{ post.introductory|raw }}</div>{% endif %}
        {% if post.content %}<div class=\"post-content\">{{ post.content|raw }}</div>{% endif %}

        <p class=\"post-date\">Posted on {{ post.published_at|date('Y-m-d') }}</p>
    </div>
</div>
", "D:\\phpStudy\\WWW\\CMS/plugins/indikator/news/components/post/default.htm", "");
    }
}
