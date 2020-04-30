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

/* C:\xampp\htdocs\BasilFrontend/themes/thebakerdev-zenii/partials/restaurant.htm */
class __TwigTemplate_19db93d1c0299db1d543f312cca504d3616f65b66ba5820a7695d792641b0488 extends \Twig\Template
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
        echo "<section id=\"restaurant\" class=\"section__usaha mx-auto\">
     <div class=\"container mx-auto\" style=\"color:#444\">
       <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" style=\"color:#444;margin-top:50px;font-family: calibri\">MANAGEMEN <span style=\"color:#ff8100\"> RESTAURANT </span>SEMAKIN MUDAH</h2>
       <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" style=\"font-family: calibri\">DENGAN BASIL F&B </h2><br>
       <div class=\"hero__tagline\" style=\"margin-left:470px;margin-right:auto;\">
         <p class=\"text-left\">
          <i class=\"fas fa-check\"></i> Kemudahan proses Pembayaran <br>
          <i class=\"fas fa-check\"></i> Program Loyalitas Konsumen <br>
          <i class=\"fas fa-check\"></i> Maksimalkan keuntungan dari menu favorit <br>
          <i class=\"fas fa-check\"></i> Ciptakan resep baru dari preferensi konsumen 
        </p>
       </div>
       <p class=\"hero__tagline-subtitle text-center\" data-sal=\"fade\" data-sal-delay=\"100\" style=\"padding-top: 50px;padding-bottom: 100px;\">
       <a class=\"btn\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"#contact\" style=\"border-radius:500px;padding: 20px 50px 20px 50px; color: white; background-color: #ff8100;\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 14), "hero_button_text", [], "any", false, false, false, 14), "html", null, true);
        echo "</a>
       </p>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/restaurant.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"restaurant\" class=\"section__usaha mx-auto\">
     <div class=\"container mx-auto\" style=\"color:#444\">
       <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" style=\"color:#444;margin-top:50px;font-family: calibri\">MANAGEMEN <span style=\"color:#ff8100\"> RESTAURANT </span>SEMAKIN MUDAH</h2>
       <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" style=\"font-family: calibri\">DENGAN BASIL F&B </h2><br>
       <div class=\"hero__tagline\" style=\"margin-left:470px;margin-right:auto;\">
         <p class=\"text-left\">
          <i class=\"fas fa-check\"></i> Kemudahan proses Pembayaran <br>
          <i class=\"fas fa-check\"></i> Program Loyalitas Konsumen <br>
          <i class=\"fas fa-check\"></i> Maksimalkan keuntungan dari menu favorit <br>
          <i class=\"fas fa-check\"></i> Ciptakan resep baru dari preferensi konsumen 
        </p>
       </div>
       <p class=\"hero__tagline-subtitle text-center\" data-sal=\"fade\" data-sal-delay=\"100\" style=\"padding-top: 50px;padding-bottom: 100px;\">
       <a class=\"btn\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"#contact\" style=\"border-radius:500px;padding: 20px 50px 20px 50px; color: white; background-color: #ff8100;\">{{ this.theme.hero_button_text }}</a>
       </p>
    </div>
</section>", "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/restaurant.htm", "");
    }
}
