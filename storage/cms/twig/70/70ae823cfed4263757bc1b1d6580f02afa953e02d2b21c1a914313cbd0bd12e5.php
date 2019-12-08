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

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit_org/partials/home/contacthome.htm */
class __TwigTemplate_93a98685dc7dbe116a1c3fb023b629a1f784317f79ac5af395e420e10fbddf28 extends \Twig\Template
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
        echo "<section class=\"mt-70 position-relative\">
\t<div class=\"container\">
        <div class=\"cta-block-2 bg-gray p-5 rounded border-1\">
            <div class=\"row justify-content-center align-items-center \">
                <div class=\"col-lg-7\">
                    <span class=\"text-color\">For Every type business</span>
                    <h2 class=\"mt-2 mb-4 mb-lg-0\">Entrust Your Project to Our Best Team of Professionals</h2>
                </div>
                <div class=\"col-lg-4\">
                    <a href=\"contact.html\" class=\"btn btn-main btn-round-full float-lg-right \">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/home/contacthome.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<section class=\"mt-70 position-relative\">
\t<div class=\"container\">
        <div class=\"cta-block-2 bg-gray p-5 rounded border-1\">
            <div class=\"row justify-content-center align-items-center \">
                <div class=\"col-lg-7\">
                    <span class=\"text-color\">For Every type business</span>
                    <h2 class=\"mt-2 mb-4 mb-lg-0\">Entrust Your Project to Our Best Team of Professionals</h2>
                </div>
                <div class=\"col-lg-4\">
                    <a href=\"contact.html\" class=\"btn btn-main btn-round-full float-lg-right \">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/home/contacthome.htm", "");
    }
}
