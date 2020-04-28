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

/* C:\xampp\htdocs\BasilFrontend/themes/thebakerdev-zenii/partials/next-solusiusaha.htm */
class __TwigTemplate_fbf23ddabfe18bb7b7db7f5efdbbbb0b6ed39b8acfad70bac4eb874066840560 extends \Twig\Template
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
        echo "<section id=\"next-solusiusaha\" class=\"pricing section\">
    <div class=\"container mx-auto\">
        <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" style=\"margin-bottom:50px;font-family: calibri\">MUNGKIN ANDA JUGA MENCARI</h2>
        <div class=\"pricing__items\">
                <div class=\"pricing__item ";
        // line 5
        echo ((twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "highlighted", [], "any", false, false, false, 5)) ? ("pricing__item--active") : (""));
        echo "\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">RESTAURANT</h3>
                        <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/restokecill.png");
        echo "\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a class=\"btn\" href=\"http://localhost/BasilFrontend/restaurant\" style=\"border-radius:500px;padding: 10px 30px 10px 30px; color: white; background-color: #2dd1ac;\">See More</a>
                </div>
                
                <div class=\"pricing__item ";
        // line 13
        echo ((twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "highlighted", [], "any", false, false, false, 13)) ? ("pricing__item--active") : (""));
        echo "\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">CAFE</h3>
                        <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/cafekecill.png");
        echo "\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a class=\"btn\" href=\"http://localhost/BasilFrontend/cafe\" style=\"border-radius:500px;padding: 10px 30px 10px 30px; color: white; background-color: #2dd1ac;\">See More</a>
                </div>
                
                <div class=\"pricing__item ";
        // line 21
        echo ((twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "highlighted", [], "any", false, false, false, 21)) ? ("pricing__item--active") : (""));
        echo "\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">RETAIL</h3>
                        <img src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/retailkecill.png");
        echo "\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a class=\"btn\" href=\"http://localhost/BasilFrontend/retail\" style=\"border-radius:500px;padding: 10px 30px 10px 30px; color: white; background-color: #2dd1ac;\">See More</a>
                </div>
                
                <div class=\"pricing__item ";
        // line 29
        echo ((twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "highlighted", [], "any", false, false, false, 29)) ? ("pricing__item--active") : (""));
        echo "\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">BAKERY</h3>
                        <img src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/bakerykecill.png");
        echo "\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a class=\"btn\" href=\"http://localhost/BasilFrontend/bakery\" style=\"border-radius:500px;padding: 10px 30px 10px 30px; color: white; background-color: #2dd1ac;\">See More</a>
                </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/next-solusiusaha.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  85 => 29,  77 => 24,  71 => 21,  63 => 16,  57 => 13,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"next-solusiusaha\" class=\"pricing section\">
    <div class=\"container mx-auto\">
        <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" style=\"margin-bottom:50px;font-family: calibri\">MUNGKIN ANDA JUGA MENCARI</h2>
        <div class=\"pricing__items\">
                <div class=\"pricing__item {{ plan.highlighted ? 'pricing__item--active' }}\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">RESTAURANT</h3>
                        <img src=\"{{ 'assets/dist/images/restokecill.png'|theme }}\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a class=\"btn\" href=\"http://localhost/BasilFrontend/restaurant\" style=\"border-radius:500px;padding: 10px 30px 10px 30px; color: white; background-color: #2dd1ac;\">See More</a>
                </div>
                
                <div class=\"pricing__item {{ plan.highlighted ? 'pricing__item--active' }}\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">CAFE</h3>
                        <img src=\"{{ 'assets/dist/images/cafekecill.png'|theme }}\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a class=\"btn\" href=\"http://localhost/BasilFrontend/cafe\" style=\"border-radius:500px;padding: 10px 30px 10px 30px; color: white; background-color: #2dd1ac;\">See More</a>
                </div>
                
                <div class=\"pricing__item {{ plan.highlighted ? 'pricing__item--active' }}\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">RETAIL</h3>
                        <img src=\"{{ 'assets/dist/images/retailkecill.png'|theme }}\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a class=\"btn\" href=\"http://localhost/BasilFrontend/retail\" style=\"border-radius:500px;padding: 10px 30px 10px 30px; color: white; background-color: #2dd1ac;\">See More</a>
                </div>
                
                <div class=\"pricing__item {{ plan.highlighted ? 'pricing__item--active' }}\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">BAKERY</h3>
                        <img src=\"{{ 'assets/dist/images/bakerykecill.png'|theme }}\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a class=\"btn\" href=\"http://localhost/BasilFrontend/bakery\" style=\"border-radius:500px;padding: 10px 30px 10px 30px; color: white; background-color: #2dd1ac;\">See More</a>
                </div>
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/next-solusiusaha.htm", "");
    }
}
