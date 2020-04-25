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

/* C:\xampp\htdocs\install-master/themes/thebakerdev-zenii/partials/bakery.htm */
class __TwigTemplate_3b2676cd96baf5457fd9ee2516c16a17c467178f5a305332727a1a863567f40a extends \Twig\Template
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
        echo "<section id=\"bakery\" class=\"section mx-auto\">
    <div class=\"container mx-auto bg-io\">
      <div class=\"row\">
        <div class=\"col bg-is\"><h3 class=\"pricing__item-title\">RETAIL</h3></div>
        <div class=\"col\">
        <br>
           <h1 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">Managemen Bakery semakin mudah</h1>
           <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">dengan Basil F&B</h2>
           <p class=\"hero__tagline-subtitle text-center\" data-sal=\"fade\" data-sal-delay=\"100\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 9), "hero_subtitle", [], "any", false, false, false, 9), "html", null, true);
        echo "<br><br>
           <a class=\"btn btn--primary mt-8 align-center\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"#contact\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "hero_button_text", [], "any", false, false, false, 10), "html", null, true);
        echo "</a>
           <br><br><br><br><br>
           </p>
        </div>
      </div>
    </div>      
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/bakery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"bakery\" class=\"section mx-auto\">
    <div class=\"container mx-auto bg-io\">
      <div class=\"row\">
        <div class=\"col bg-is\"><h3 class=\"pricing__item-title\">RETAIL</h3></div>
        <div class=\"col\">
        <br>
           <h1 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">Managemen Bakery semakin mudah</h1>
           <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">dengan Basil F&B</h2>
           <p class=\"hero__tagline-subtitle text-center\" data-sal=\"fade\" data-sal-delay=\"100\">{{ this.theme.hero_subtitle }}<br><br>
           <a class=\"btn btn--primary mt-8 align-center\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"#contact\">{{ this.theme.hero_button_text }}</a>
           <br><br><br><br><br>
           </p>
        </div>
      </div>
    </div>      
</section>", "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/bakery.htm", "");
    }
}
