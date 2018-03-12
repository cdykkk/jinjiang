<?php

/* D:\phpStudy\WWW\CMS/plugins/indikator/news/components/posts/default.htm */
class __TwigTemplate_4d6d4ec1696aac5e54aa198cd7501be9935951aa0579a4e5705c98ca1a6a8192 extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "posts", array());
        // line 2
        echo "
<div class=\"post-list\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "    <div class=\"post-item\">
        ";
            // line 6
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "image", array())) {
                echo "<div class=\"post-image\"><a href=\"/";
                echo twig_escape_filter($this->env, ($context["postPage"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array()), "html", null, true);
                echo "\"><img src=\"";
                echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "image", array()));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                echo "\"></a></div>";
            }
            // line 7
            echo "
        <h2 class=\"post-title\"><a href=\"/";
            // line 8
            echo twig_escape_filter($this->env, ($context["postPage"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</a></h2>
        <p class=\"post-date\">";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "Y-m-d"), "html", null, true);
            echo "</p>

        ";
            // line 11
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "introductory", array())) {
                // line 12
                echo "        <div class=\"post-introductory\">";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "introductory", array());
                echo "</div>
        ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 13
$context["post"], "content", array())) {
                // line 14
                echo "        <div class=\"post-content\">";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content", array());
                echo "</div>
        ";
            }
            // line 16
            echo "    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "    <span class=\"post-nodata\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div>

";
        // line 22
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "render", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "D:\\phpStudy\\WWW\\CMS/plugins/indikator/news/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 22,  91 => 20,  82 => 18,  76 => 16,  70 => 14,  68 => 13,  63 => 12,  61 => 11,  56 => 9,  48 => 8,  45 => 7,  33 => 6,  30 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.posts %}

<div class=\"post-list\">
    {% for post in posts %}
    <div class=\"post-item\">
        {% if post.image %}<div class=\"post-image\"><a href=\"/{{ postPage }}/{{ post.slug }}\"><img src=\"{{ post.image|media }}\" alt=\"{{ post.title }}\"></a></div>{% endif %}

        <h2 class=\"post-title\"><a href=\"/{{ postPage }}/{{ post.slug }}\">{{ post.title }}</a></h2>
        <p class=\"post-date\">{{ post.published_at|date('Y-m-d') }}</p>

        {% if post.introductory %}
        <div class=\"post-introductory\">{{ post.introductory|raw }}</div>
        {% elseif post.content %}
        <div class=\"post-content\">{{ post.content|raw }}</div>
        {% endif %}
    </div>
    {% else %}
    <span class=\"post-nodata\">{{ noPostsMessage }}</span>
    {% endfor %}
</div>

{{ posts.render|raw }}
", "D:\\phpStudy\\WWW\\CMS/plugins/indikator/news/components/posts/default.htm", "");
    }
}
