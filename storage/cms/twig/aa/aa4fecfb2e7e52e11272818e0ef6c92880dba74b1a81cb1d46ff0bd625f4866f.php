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

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit_org/partials/blog/categories.htm */
class __TwigTemplate_99f52b45d55e1d76523cf605594d2e4ada12610e3a5ab82a71e4ef181b5e3650 extends \Twig\Template
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
        $context["categories"] = twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", [], "any", false, false, false, 2);
        // line 3
        $context["currentCategorySlug"] = twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "currentCategorySlug", [], "any", false, false, false, 3);
        // line 4
        echo "
<div class=\"list-group\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "        ";
            $context["postCount"] = twig_get_attribute($this->env, $this->source, $context["category"], "post_count", [], "any", false, false, false, 7);
            // line 8
            echo "        <a
            href=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 9), "html", null, true);
            echo "\"
            class=\"list-group-item ";
            // line 10
            echo (((twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 10) == ($context["currentCategorySlug"] ?? null))) ? ("active") : (""));
            echo "\"
            >";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "
            ";
            // line 12
            if (($context["postCount"] ?? null)) {
                // line 13
                echo "                <span class=\"badge\">";
                echo twig_escape_filter($this->env, ($context["postCount"] ?? null), "html", null, true);
                echo "</span>
            ";
            }
            // line 15
            echo "        </a> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
<div class=\"sidebar-widget card border-0 mt-5 mb-3\">
\t<img src=\"https://placehold.it/540x450\" alt=\"\" class=\"img-fluid\">
\t\t<div class=\"card-body p-4 text-center\">
\t\t\t<h5 class=\"mb-0 mt-4\">Arther Conal</h5>
\t\t\t<p>Digital Marketer</p>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, dolore.</p>

\t\t\t<ul class=\"list-inline author-socials\">
\t\t\t\t<li class=\"list-inline-item mr-3\">
\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-facebook-f text-muted\"></i></a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-inline-item mr-3\">
\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-twitter text-muted\"></i></a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-inline-item mr-3\">
\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-linkedin-in text-muted\"></i></a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-inline-item mr-3\">
\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-pinterest text-muted\"></i></a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-inline-item mr-3\">
\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-behance text-muted\"></i></a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/blog/categories.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  75 => 15,  69 => 13,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  52 => 8,  49 => 7,  45 => 6,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set categories = blogCategories.categories %}
{% set currentCategorySlug = blogCategories.currentCategorySlug %}

<div class=\"list-group\">
    {% for category in categories %}
        {% set postCount = category.post_count %}
        <a
            href=\"{{ category.url }}\"
            class=\"list-group-item {{ category.slug == currentCategorySlug ? 'active' }}\"
            >{{ category.name }}
            {% if postCount %}
                <span class=\"badge\">{{ postCount }}</span>
            {% endif %}
        </a> 
    {% endfor %}
</div>
<div class=\"sidebar-widget card border-0 mt-5 mb-3\">
\t<img src=\"https://placehold.it/540x450\" alt=\"\" class=\"img-fluid\">
\t\t<div class=\"card-body p-4 text-center\">
\t\t\t<h5 class=\"mb-0 mt-4\">Arther Conal</h5>
\t\t\t<p>Digital Marketer</p>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, dolore.</p>

\t\t\t<ul class=\"list-inline author-socials\">
\t\t\t\t<li class=\"list-inline-item mr-3\">
\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-facebook-f text-muted\"></i></a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-inline-item mr-3\">
\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-twitter text-muted\"></i></a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-inline-item mr-3\">
\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-linkedin-in text-muted\"></i></a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-inline-item mr-3\">
\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-pinterest text-muted\"></i></a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-inline-item mr-3\">
\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-behance text-muted\"></i></a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/blog/categories.htm", "");
    }
}
