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

/* C:\xampp\htdocs\install-master/themes/thebakerdev-zenii/partials/next-solusiusaha.htm */
class __TwigTemplate_13b8e13f8cf5b3dd846881a547c47f73c728612d3b71e643b5266c56e7bee9a1 extends \Twig\Template
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
        <h5 class=\"section__titleres text-center mb-12\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">mungkin anda juga mencari</h5>
        <br><br>
        <div class=\"pricing__items\">
                <div class=\"pricing__item ";
        // line 6
        echo ((twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "highlighted", [], "any", false, false, false, 6)) ? ("pricing__item--active") : (""));
        echo "\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">RESTAURANT</h3>
                        <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/restokecil.png");
        echo "\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a href=\"http://localhost/install-master/restaurant\" class=\"btn ";
        // line 11
        echo ((twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "highlighted", [], "any", false, false, false, 11)) ? ("") : ("btn--primary"));
        echo "\">LIHAT SEKARANG</a>
                </div>
                
                <div class=\"pricing__item ";
        // line 14
        echo ((twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "highlighted", [], "any", false, false, false, 14)) ? ("pricing__item--active") : (""));
        echo "\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">CAFE</h3>
                        <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/cafekecil.png");
        echo "\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a href=\"http://localhost/install-master/cafe\" class=\"btn ";
        // line 19
        echo ((twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "highlighted", [], "any", false, false, false, 19)) ? ("") : ("btn--primary"));
        echo "\">LIHAT SEKARANG</a>
                </div>
                
                <div class=\"pricing__item ";
        // line 22
        echo ((twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "highlighted", [], "any", false, false, false, 22)) ? ("pricing__item--active") : (""));
        echo "\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">RETAIL</h3>
                        <img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/retailkecil.png");
        echo "\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a href=\"http://localhost/install-master/retail\" class=\"btn ";
        // line 27
        echo ((twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "highlighted", [], "any", false, false, false, 27)) ? ("") : ("btn--primary"));
        echo "\">LIHAT SEKARANG</a>
                </div>
                
                <div class=\"pricing__item ";
        // line 30
        echo ((twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "highlighted", [], "any", false, false, false, 30)) ? ("pricing__item--active") : (""));
        echo "\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">BAKERY</h3>
                        <img src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/bakerykecil.png");
        echo "\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a href=\"http://localhost/install-master/bakery\" class=\"btn ";
        // line 35
        echo ((twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "highlighted", [], "any", false, false, false, 35)) ? ("") : ("btn--primary"));
        echo "\">LIHAT SEKARANG</a>
                </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/next-solusiusaha.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  101 => 33,  95 => 30,  89 => 27,  84 => 25,  78 => 22,  72 => 19,  67 => 17,  61 => 14,  55 => 11,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"next-solusiusaha\" class=\"pricing section\">
    <div class=\"container mx-auto\">
        <h5 class=\"section__titleres text-center mb-12\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">mungkin anda juga mencari</h5>
        <br><br>
        <div class=\"pricing__items\">
                <div class=\"pricing__item {{ plan.highlighted ? 'pricing__item--active' }}\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">RESTAURANT</h3>
                        <img src=\"{{ 'assets/dist/images/restokecil.png'|theme }}\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a href=\"http://localhost/install-master/restaurant\" class=\"btn {{ plan.highlighted ? '': 'btn--primary'}}\">LIHAT SEKARANG</a>
                </div>
                
                <div class=\"pricing__item {{ plan.highlighted ? 'pricing__item--active' }}\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">CAFE</h3>
                        <img src=\"{{ 'assets/dist/images/cafekecil.png'|theme }}\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a href=\"http://localhost/install-master/cafe\" class=\"btn {{ plan.highlighted ? '': 'btn--primary'}}\">LIHAT SEKARANG</a>
                </div>
                
                <div class=\"pricing__item {{ plan.highlighted ? 'pricing__item--active' }}\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">RETAIL</h3>
                        <img src=\"{{ 'assets/dist/images/retailkecil.png'|theme }}\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a href=\"http://localhost/install-master/retail\" class=\"btn {{ plan.highlighted ? '': 'btn--primary'}}\">LIHAT SEKARANG</a>
                </div>
                
                <div class=\"pricing__item {{ plan.highlighted ? 'pricing__item--active' }}\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">BAKERY</h3>
                        <img src=\"{{ 'assets/dist/images/bakerykecil.png'|theme }}\" class=\"service__image\" alt=\"Service Item\">
                    </div>
                    <a href=\"http://localhost/install-master/bakery\" class=\"btn {{ plan.highlighted ? '': 'btn--primary'}}\">LIHAT SEKARANG</a>
                </div>
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/next-solusiusaha.htm", "");
    }
}
