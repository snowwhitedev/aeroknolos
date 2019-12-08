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

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit_org/pages/pricing.htm */
class __TwigTemplate_80012547a02bf6c6964b321907052e38544d5f8c6e8a3b12ef772af50588f8d8 extends \Twig\Template
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
        // line 1
        echo "<!-- Section Page Intro Start -->
<section class=\"page-title bg-1\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">Our pricing</span>
          <h1 class=\"text-capitalize mb-4 text-lg\">Pricing Package</h1>
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\"><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"text-white\">Home</a></li>
            <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
            <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Our pricing</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section Page Intro End -->
<!-- Section Intro Start -->
<section class=\"section intro\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<div class=\"section-title pt-5\">
\t\t\t\t\t<span class=\"h6 text-color \">We are creative</span>
\t\t\t\t\t<h2 class=\"mt-3\">We provide best solution to client with their business problem </h2>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-6 ml-auto\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<div class=\"intro-item mb-4 mb-lg-0\">
\t\t\t\t\t\t\t<i class=\"ti-wand text-color\"></i>
\t\t\t\t\t\t\t<h4 class=\"mt-4\">Modern & Responsive design</h4>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, aspernatur.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<div class=\"intro-item mb-4 mb-lg-0\">
\t\t\t\t\t\t\t<i class=\"ti-medall text-color\"></i>
\t\t\t\t\t\t\t<h4 class=\"mt-4\">Awarded licensed company</h4>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, aspernatur.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Intro END -->
<!-- Section Pricing Start -->
<section class=\"section pricing bg-gray position-relative\">
\t<div class=\"hero-img bg-overlay h70\"></div>
    \t<div class=\"container\">
    \t\t<div class=\"row justify-content-center\">
    \t\t\t<div class=\"col-lg-7 text-center\">
    \t\t\t\t<div class=\"section-title\">
    \t\t\t\t\t<span class=\"h6 text-white\">Our Pricing</span>
    \t\t\t\t\t<h2 class=\"mt-3 content-title text-white\">No hidden Charges.Choose Your Perfect Plan</h2>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>

    \t\t<div class=\"row justify-content-center\">
                <div class=\"col-md-4\">
                    <div class=\"card text-center mb-md-0 mb-3\">
                        <div class=\"card-body py-5\">
                            <div class=\"pricing-header mb-5\">
                                <h5 class=\"font-weight-normal mb-3\">Free</h5>
                                <h1>\$0</h1>
                                <p class=\"text-muted\">Per User / Month</p>
                            </div>
                            <strong>Includes:</strong>
                            <ul class=\"list-unstyled lh-45 mt-3 text-black\">
                                <li>- Up to 1 User</li>
                                <li>- Max 100 Item</li>
                                <li>- 500 Queries</li>
                                <li>- Basic Statistics</li>
                            </ul>
                            <a href=\"#\" class=\"btn btn-small btn-solid-border mt-3 btn-round-full\">Download Now</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card text-center mb-md-0 mb-3\">
                        <div class=\"card-body py-5\">
                            <div class=\"pricing-header mb-5\">
                                <h5 class=\"font-weight-normal mb-3\">Basic</h5>
                                <h1>\$12</h1>
                                <p class=\"text-muted\">Per User / Month</p>
                            </div>
                            <strong>Includes:</strong>
                            <ul class=\"list-unstyled lh-45 mt-3 text-black\">
                                <li>- Up to 5 User</li>
                                <li>- Max 1000 Item</li>
                                <li>- 5000 Queries</li>
                                <li>- Standard Statistics</li>
                            </ul>
                            <a href=\"#\" class=\"btn btn-small btn-main mt-3 btn-round-full\">Signup Now</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card text-center mb-md-0 mb-3\">
                        <div class=\"card-body py-5\">
                            <div class=\"pricing-header mb-5\">
                                <h5 class=\"font-weight-normal mb-3\">Premium</h5>
                                <h1>\$39</h1>
                                <p class=\"text-muted\">Per User / Month</p>
                            </div>
                            <strong>Includes:</strong>
                            <ul class=\"list-unstyled lh-45 mt-3 text-black\">
                                <li>- Unlimited User</li>
                                <li>- Unlimited Item</li>
                                <li>- Unlimited Queries</li>
                                <li>- Full Statistics</li>
                            </ul>
                            <a href=\"#\" class=\"btn btn-small btn-solid-border mt-3 btn-round-full\">Download Now</a>
                        </div>
                    </div>
                </div>
            </div>
    \t</div>
    
    \t<div class=\"container\">
    \t<div class=\"cta-block mt-5 p-5 rounded\">
    \t\t<div class=\"row justify-content-center align-items-center\">
    \t\t\t<div class=\"col-lg-7\">
    \t\t\t\t<span class=\"text-color\">For Every type business</span>
    \t\t\t\t<h2 class=\"mt-2 text-white\">Entrust Your Project to Our Best Team of Professionals</h2>
    \t\t\t</div>
    \t\t\t<div class=\"col-lg-4\">
    \t\t\t\t<a href=\"contact.html\" class=\"btn btn-main btn-round-full float-lg-right float-md-right float-sm-right\">Contact Us</a>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </div>
</section>
<!-- Section Pricing End -->";
    }

    public function getTemplateName()
    {
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/pages/pricing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Section Page Intro Start -->
<section class=\"page-title bg-1\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">Our pricing</span>
          <h1 class=\"text-capitalize mb-4 text-lg\">Pricing Package</h1>
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\"><a href=\"{{ 'home'|page }}\" class=\"text-white\">Home</a></li>
            <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
            <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Our pricing</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section Page Intro End -->
<!-- Section Intro Start -->
<section class=\"section intro\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<div class=\"section-title pt-5\">
\t\t\t\t\t<span class=\"h6 text-color \">We are creative</span>
\t\t\t\t\t<h2 class=\"mt-3\">We provide best solution to client with their business problem </h2>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-6 ml-auto\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<div class=\"intro-item mb-4 mb-lg-0\">
\t\t\t\t\t\t\t<i class=\"ti-wand text-color\"></i>
\t\t\t\t\t\t\t<h4 class=\"mt-4\">Modern & Responsive design</h4>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, aspernatur.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t<div class=\"intro-item mb-4 mb-lg-0\">
\t\t\t\t\t\t\t<i class=\"ti-medall text-color\"></i>
\t\t\t\t\t\t\t<h4 class=\"mt-4\">Awarded licensed company</h4>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, aspernatur.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Intro END -->
<!-- Section Pricing Start -->
<section class=\"section pricing bg-gray position-relative\">
\t<div class=\"hero-img bg-overlay h70\"></div>
    \t<div class=\"container\">
    \t\t<div class=\"row justify-content-center\">
    \t\t\t<div class=\"col-lg-7 text-center\">
    \t\t\t\t<div class=\"section-title\">
    \t\t\t\t\t<span class=\"h6 text-white\">Our Pricing</span>
    \t\t\t\t\t<h2 class=\"mt-3 content-title text-white\">No hidden Charges.Choose Your Perfect Plan</h2>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>

    \t\t<div class=\"row justify-content-center\">
                <div class=\"col-md-4\">
                    <div class=\"card text-center mb-md-0 mb-3\">
                        <div class=\"card-body py-5\">
                            <div class=\"pricing-header mb-5\">
                                <h5 class=\"font-weight-normal mb-3\">Free</h5>
                                <h1>\$0</h1>
                                <p class=\"text-muted\">Per User / Month</p>
                            </div>
                            <strong>Includes:</strong>
                            <ul class=\"list-unstyled lh-45 mt-3 text-black\">
                                <li>- Up to 1 User</li>
                                <li>- Max 100 Item</li>
                                <li>- 500 Queries</li>
                                <li>- Basic Statistics</li>
                            </ul>
                            <a href=\"#\" class=\"btn btn-small btn-solid-border mt-3 btn-round-full\">Download Now</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card text-center mb-md-0 mb-3\">
                        <div class=\"card-body py-5\">
                            <div class=\"pricing-header mb-5\">
                                <h5 class=\"font-weight-normal mb-3\">Basic</h5>
                                <h1>\$12</h1>
                                <p class=\"text-muted\">Per User / Month</p>
                            </div>
                            <strong>Includes:</strong>
                            <ul class=\"list-unstyled lh-45 mt-3 text-black\">
                                <li>- Up to 5 User</li>
                                <li>- Max 1000 Item</li>
                                <li>- 5000 Queries</li>
                                <li>- Standard Statistics</li>
                            </ul>
                            <a href=\"#\" class=\"btn btn-small btn-main mt-3 btn-round-full\">Signup Now</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card text-center mb-md-0 mb-3\">
                        <div class=\"card-body py-5\">
                            <div class=\"pricing-header mb-5\">
                                <h5 class=\"font-weight-normal mb-3\">Premium</h5>
                                <h1>\$39</h1>
                                <p class=\"text-muted\">Per User / Month</p>
                            </div>
                            <strong>Includes:</strong>
                            <ul class=\"list-unstyled lh-45 mt-3 text-black\">
                                <li>- Unlimited User</li>
                                <li>- Unlimited Item</li>
                                <li>- Unlimited Queries</li>
                                <li>- Full Statistics</li>
                            </ul>
                            <a href=\"#\" class=\"btn btn-small btn-solid-border mt-3 btn-round-full\">Download Now</a>
                        </div>
                    </div>
                </div>
            </div>
    \t</div>
    
    \t<div class=\"container\">
    \t<div class=\"cta-block mt-5 p-5 rounded\">
    \t\t<div class=\"row justify-content-center align-items-center\">
    \t\t\t<div class=\"col-lg-7\">
    \t\t\t\t<span class=\"text-color\">For Every type business</span>
    \t\t\t\t<h2 class=\"mt-2 text-white\">Entrust Your Project to Our Best Team of Professionals</h2>
    \t\t\t</div>
    \t\t\t<div class=\"col-lg-4\">
    \t\t\t\t<a href=\"contact.html\" class=\"btn btn-main btn-round-full float-lg-right float-md-right float-sm-right\">Contact Us</a>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </div>
</section>
<!-- Section Pricing End -->", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/pages/pricing.htm", "");
    }
}
