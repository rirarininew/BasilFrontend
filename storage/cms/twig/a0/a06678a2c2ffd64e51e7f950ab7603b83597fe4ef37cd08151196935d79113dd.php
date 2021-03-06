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

/* C:\xampp\htdocs\BasilFrontend/themes/thebakerdev-zenii/partials/services.htm */
class __TwigTemplate_5c4fbc036553ca84136301558fab791971d7ac57c89d997c07652979b1542860 extends \Twig\Template
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
        echo "<section id=\"services\" class=\"services container section mx-auto\">
    <div>
        <h2 class=\"section__title text-center mb-16\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "service_title", [], "any", false, false, false, 3), "html", null, true);
        echo "</h2>
        <div class=\"services__items\">
                <div class=\"service ";
        // line 5
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\" style=\"padding: 0px 60px 0px 150px;\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/BasilFrontend/restaurant\" target=\"_blank\">
                    <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/fork.svg");
        echo "\" class=\"service__image\" alt=\"Service Item\" style=\"width:100px;height:100px;opacity:0.6\">
                    <h3 class=\"service__title\">Restaurant</h3>
                    </a>
                    <p class=\"item__text\" style=\"color:#707e7e\">Ciptakan resep menu baru dengan mengetahui demografi pembelian konsumen Restoran Anda.</p>
                </div>
                <div class=\"service ";
        // line 12
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\" style=\"padding: 0px 150px 0px 60px;\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/BasilFrontend/retail\" target=\"_blank\">
                    <img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/shop.svg");
        echo "\" class=\"service__image\" alt=\"Service Item\" style=\"width:100px;height:100px;opacity:0.5\">
                    
                    <h3 class=\"service__title\">Retail</h3>
                    </a>
                    <p class=\"item__text\" style=\"color:#707e7e\">Meningkatkan Pelayanan dan Penjualan dengan sistem pembayaran otomatis Retail Anda.</p>
                </div>
                <div class=\"service ";
        // line 20
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\" style=\"padding: 0px 60px 0px 150px;\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/BasilFrontend/cafe\" target=\"_blank\">
                    <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/coffee-cup.svg");
        echo "\" class=\"service__image\" alt=\"Service Item\" style=\"width:100px;height:100px;opacity:0.6\">
                    
                    <h3 class=\"service__title\">Cafe</h3>
                    </a>
                    <p class=\"item__text\" style=\"color:#707e7e\">Tingkatkan Omset dengan Program Loyalti, menarik perhatian pelanggan untuk repeat order.</p>
                </div>
                 <div class=\"service ";
        // line 28
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\" style=\"padding: 0px 150px 0px 60px;\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/BasilFrontend/bakery\" target=\"_blank\">
                    <img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/chef.svg");
        echo "\" class=\"service__image\" alt=\"Service Item\"  style=\"width:100px;height:100px;opacity:0.6\">
                    
                    <h3 class=\"service__title\">Bakery</h3>
                    </a>
                    <p class=\"item__text\" style=\"color:#707e7e\">Optimalkan biaya produksi dengan Control Stock Level agar tidak banyak produk terbuang karena masa kadaluarsa.</p>
                </div>
            
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  87 => 28,  78 => 22,  73 => 20,  64 => 14,  59 => 12,  51 => 7,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"services\" class=\"services container section mx-auto\">
    <div>
        <h2 class=\"section__title text-center mb-16\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">{{ this.theme.service_title }}</h2>
        <div class=\"services__items\">
                <div class=\"service {{ position }}\" style=\"padding: 0px 60px 0px 150px;\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/BasilFrontend/restaurant\" target=\"_blank\">
                    <img src=\"{{ 'assets/dist/images/fork.svg'|theme }}\" class=\"service__image\" alt=\"Service Item\" style=\"width:100px;height:100px;opacity:0.6\">
                    <h3 class=\"service__title\">Restaurant</h3>
                    </a>
                    <p class=\"item__text\" style=\"color:#707e7e\">Ciptakan resep menu baru dengan mengetahui demografi pembelian konsumen Restoran Anda.</p>
                </div>
                <div class=\"service {{ position }}\" style=\"padding: 0px 150px 0px 60px;\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/BasilFrontend/retail\" target=\"_blank\">
                    <img src=\"{{ 'assets/dist/images/shop.svg'|theme }}\" class=\"service__image\" alt=\"Service Item\" style=\"width:100px;height:100px;opacity:0.5\">
                    
                    <h3 class=\"service__title\">Retail</h3>
                    </a>
                    <p class=\"item__text\" style=\"color:#707e7e\">Meningkatkan Pelayanan dan Penjualan dengan sistem pembayaran otomatis Retail Anda.</p>
                </div>
                <div class=\"service {{ position }}\" style=\"padding: 0px 60px 0px 150px;\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/BasilFrontend/cafe\" target=\"_blank\">
                    <img src=\"{{ 'assets/dist/images/coffee-cup.svg'|theme }}\" class=\"service__image\" alt=\"Service Item\" style=\"width:100px;height:100px;opacity:0.6\">
                    
                    <h3 class=\"service__title\">Cafe</h3>
                    </a>
                    <p class=\"item__text\" style=\"color:#707e7e\">Tingkatkan Omset dengan Program Loyalti, menarik perhatian pelanggan untuk repeat order.</p>
                </div>
                 <div class=\"service {{ position }}\" style=\"padding: 0px 150px 0px 60px;\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/BasilFrontend/bakery\" target=\"_blank\">
                    <img src=\"{{ 'assets/dist/images/chef.svg'|theme }}\" class=\"service__image\" alt=\"Service Item\"  style=\"width:100px;height:100px;opacity:0.6\">
                    
                    <h3 class=\"service__title\">Bakery</h3>
                    </a>
                    <p class=\"item__text\" style=\"color:#707e7e\">Optimalkan biaya produksi dengan Control Stock Level agar tidak banyak produk terbuang karena masa kadaluarsa.</p>
                </div>
            
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/services.htm", "");
    }
}
