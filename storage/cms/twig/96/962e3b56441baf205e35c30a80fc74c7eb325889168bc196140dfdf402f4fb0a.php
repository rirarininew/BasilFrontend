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

/* C:\xampp\htdocs\BasilFrontend/themes/thebakerdev-zenii/partials/cafe.htm */
class __TwigTemplate_47389647b437715b7f51cc453a6f0ac712144797e572b79b39c961ad7e2f7961 extends \Twig\Template
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
        echo "<section id=\"cafe\" class=\"section mx-auto bg-im\">
     <div class=\"container mx-auto\" style=\"color:#444\">
       <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" style=\"color:#444;margin-top:50px;font-family: calibri\">MANAGEMEN <span style=\"color:#ff8100\"> CAFE </span>SEMAKIN MUDAH</h2>
       <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" style=\"font-family: calibri\">DENGAN BASIL F&B </h2><br>
       <p class=\"text-center\">
          Kemudahan proses Pembayaran <i class=\"fas fa-check\"></i><br>
          Program Loyalitas Konsumen meningkatkan Repeat Order <i class=\"fas fa-check\"> </i><br>
          Optimalkan produksi dari grafik menu favorit Konsumen <i class=\"fas fa-check\"> </i><br>
          Maksimalkan keuntungan dengan mengetahui menu dengan Margin terbesar <i class=\"fas fa-check\"> </i>
       </p>
       
       <p class=\"hero__tagline-subtitle text-center\" data-sal=\"fade\" data-sal-delay=\"100\" style=\"padding-top: 50px;padding-bottom: 100px;\">
       <a class=\"btn\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"#contact\" style=\"border-radius:500px;padding: 20px 50px 20px 50px; color: white; background-color: #ff8100;\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 13), "hero_button_text", [], "any", false, false, false, 13), "html", null, true);
        echo "</a>
       </p>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/cafe.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"cafe\" class=\"section mx-auto bg-im\">
     <div class=\"container mx-auto\" style=\"color:#444\">
       <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" style=\"color:#444;margin-top:50px;font-family: calibri\">MANAGEMEN <span style=\"color:#ff8100\"> CAFE </span>SEMAKIN MUDAH</h2>
       <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" style=\"font-family: calibri\">DENGAN BASIL F&B </h2><br>
       <p class=\"text-center\">
          Kemudahan proses Pembayaran <i class=\"fas fa-check\"></i><br>
          Program Loyalitas Konsumen meningkatkan Repeat Order <i class=\"fas fa-check\"> </i><br>
          Optimalkan produksi dari grafik menu favorit Konsumen <i class=\"fas fa-check\"> </i><br>
          Maksimalkan keuntungan dengan mengetahui menu dengan Margin terbesar <i class=\"fas fa-check\"> </i>
       </p>
       
       <p class=\"hero__tagline-subtitle text-center\" data-sal=\"fade\" data-sal-delay=\"100\" style=\"padding-top: 50px;padding-bottom: 100px;\">
       <a class=\"btn\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"#contact\" style=\"border-radius:500px;padding: 20px 50px 20px 50px; color: white; background-color: #ff8100;\">{{ this.theme.hero_button_text }}</a>
       </p>
    </div>
</section>", "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/cafe.htm", "");
    }
}
