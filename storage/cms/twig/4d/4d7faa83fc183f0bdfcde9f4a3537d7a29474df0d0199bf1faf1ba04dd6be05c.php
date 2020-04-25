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

/* C:\xampp\htdocs\install-master/themes/thebakerdev-zenii/partials/restaurant.htm */
class __TwigTemplate_aea44632c5465657825bdb7ff977c76ff105b6898685d3becab1f5a5a195b45f extends \Twig\Template
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
        echo "<section id=\"restaurant\" class=\"section mx-auto\">
     <div class=\"container mx-auto bg-im\">
       <br>
       <h1 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">Managemen <span class=\"text-kuning\"> Restaurant </span>semakin mudah</h1>
       <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">dengan Basil F&B</h2><br>
       <p class=\"hero__tagline-subtitle text-center\" data-sal=\"fade\" data-sal-delay=\"100\">
       Kemudahan proses <i><b>Pembayaran</b></i><br>
       Program Loyalitas Konsumen meningkatkan <i><b>Repeat Order</b></i> <br>
       Maksimalkan <i><b>keuntungan</b></i> dari grafik menu favorit Konsumen<br>
       Ciptakan <i><b>Resep Menu baru</b></i> dari data perilaku konsumen Restoran Anda.
       <br><br>
       <a class=\"btn btn--primary mt-8 align-center\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"#contact\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 12), "hero_button_text", [], "any", false, false, false, 12), "html", null, true);
        echo "</a>
       <br><br><br><br><br>
       </p>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/restaurant.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"restaurant\" class=\"section mx-auto\">
     <div class=\"container mx-auto bg-im\">
       <br>
       <h1 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">Managemen <span class=\"text-kuning\"> Restaurant </span>semakin mudah</h1>
       <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">dengan Basil F&B</h2><br>
       <p class=\"hero__tagline-subtitle text-center\" data-sal=\"fade\" data-sal-delay=\"100\">
       Kemudahan proses <i><b>Pembayaran</b></i><br>
       Program Loyalitas Konsumen meningkatkan <i><b>Repeat Order</b></i> <br>
       Maksimalkan <i><b>keuntungan</b></i> dari grafik menu favorit Konsumen<br>
       Ciptakan <i><b>Resep Menu baru</b></i> dari data perilaku konsumen Restoran Anda.
       <br><br>
       <a class=\"btn btn--primary mt-8 align-center\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"#contact\">{{ this.theme.hero_button_text }}</a>
       <br><br><br><br><br>
       </p>
    </div>
</section>", "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/restaurant.htm", "");
    }
}
