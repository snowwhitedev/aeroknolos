<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit_org/partials/blog/blogPost.htm */
class __TwigTemplate_7780efa7375b17d85299a3702ccb406c879421ef7615e4c42ec8bb3e55f8a721 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"col-lg-12 mb-5\">
\t<div class=\"single-blog-item\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 4), "count", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <div class=\"featured-images text-center\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 7
                echo "                <p>
                    <img class=\"img-fluid rounded\"
                        data-src=\"";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 9), "html", null, true);
                echo "\"
                        src=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 10), "html", null, true);
                echo "\"
                        alt=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 11), "html", null, true);
                echo "\"
                        style=\"max-width: 100%\" />
                </p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </div>
        ";
        }
        // line 17
        echo "        <div class=\"blog-item-content bg-white p-5\">
            <div class=\"blog-item-meta bg-gray py-1 px-2 mb-3\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "                <span class=\"text-muted text-capitalize mr-3\">
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</a>
                </span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                <span class=\"text-black text-capitalize mr-3\"><i class=\"ti-time mr-1\"></i> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 24), "M d, Y"), "html", null, true);
        echo "</span>
            </div> 
            <div class=\"content\">";
        // line 26
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 26);
        echo "</div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/blog/blogPost.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  98 => 24,  87 => 21,  84 => 20,  80 => 19,  76 => 17,  72 => 15,  62 => 11,  58 => 10,  54 => 9,  50 => 7,  46 => 6,  43 => 5,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"col-lg-12 mb-5\">
\t<div class=\"single-blog-item\">
        {% if post.featured_images.count %}
        <div class=\"featured-images text-center\">
            {% for image in post.featured_images %}
                <p>
                    <img class=\"img-fluid rounded\"
                        data-src=\"{{ image.filename }}\"
                        src=\"{{ image.path }}\"
                        alt=\"{{ image.description }}\"
                        style=\"max-width: 100%\" />
                </p>
            {% endfor %}
        </div>
        {% endif %}
        <div class=\"blog-item-content bg-white p-5\">
            <div class=\"blog-item-meta bg-gray py-1 px-2 mb-3\">
                {% for category in post.categories %}
                <span class=\"text-muted text-capitalize mr-3\">
                    <a href=\"{{ category.url }}\">{{ category.name }}</a>
                </span>
                {% endfor %}
                <span class=\"text-black text-capitalize mr-3\"><i class=\"ti-time mr-1\"></i> {{ post.published_at|date('M d, Y') }}</span>
            </div> 
            <div class=\"content\">{{ post.content_html|raw }}</div>
        </div>
    </div>
</div>", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/blog/blogPost.htm", "");
    }
}
