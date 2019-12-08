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

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit_org/layouts/blog-singlepost-layout.htm */
class __TwigTemplate_ef4b4e128b0710b60cc4f3567e581f550598e5a6dea992825aa4da240574cd95 extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "</head>
<body>
";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "<div class=\"main-wrapper\">";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/blogsinglepostheader"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "</div>";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/layouts/blog-singlepost-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  68 => 16,  66 => 14,  62 => 13,  60 => 12,  56 => 11,  54 => 10,  50 => 9,  46 => 6,  42 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<!doctype html>
<html lang=\"en\">
<head>
{% partial 'site/meta' %}
</head>
<body>
{# Header with TopBar #}
{% partial 'site/header' %}
<div class=\"main-wrapper\">{# Main Wrapper #}
{% partial 'site/blogsinglepostheader' %}
{% page %}
{% partial 'site/footer' %}
</div>{# End Main Wrapper #}
{# JavaScripts #}
{% partial 'site/scripts' %}
</body>
</html>", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/layouts/blog-singlepost-layout.htm", "");
    }
}
