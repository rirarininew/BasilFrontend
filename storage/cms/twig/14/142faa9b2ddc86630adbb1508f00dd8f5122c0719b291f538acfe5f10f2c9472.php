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

/* C:\xampp\htdocs\install-master/themes/thebakerdev-zenii/partials/services.htm */
class __TwigTemplate_18fca16a14253162a01fa9e18673f4e3c95d57a956d40647ce08023c6a747f0c extends \Twig\Template
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
            
                ";
        // line 6
        $context["index"] = twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 6);
        // line 7
        echo "                ";
        $context["position"] = (((($context["index"] ?? null) % 2)) ? ("service--left") : ("service--right"));
        // line 8
        echo "                ";
        $context["default_image"] = (("assets/dist/images/service" . ($context["index"] ?? null)) . ".svg");
        // line 9
        echo "                <div class=\"service ";
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/install-master/restaurant\" target=\"_blank\">
                    <img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/restoblack.png");
        echo "\" class=\"service__image\" alt=\"Service Item\">
                    
                    <h3 class=\"service__title\">Restaurant</h3>
                    </a>
                    <em class=\"testimonial__comment text-sm\">Ciptakan resep menu baru dengan mengetahui demografi pembelian konsumen Restoran Anda.</em>
                </div>
                <div class=\"service ";
        // line 17
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/install-master/retail\" target=\"_blank\">
                    <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/retailblack.png");
        echo "\" class=\"service__image\" alt=\"Service Item\">
                    
                    <h3 class=\"service__title\">Retail</h3>
                    </a>
                    <em class=\"testimonial__comment text-sm\">Meningkatkan Pelayanan dan Penjualan dengan sistem pembayaran otomatis Retail Anda.</em>
                </div>
                <div class=\"service ";
        // line 25
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/install-master/cafe\" target=\"_blank\">
                    <img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/cafeblack.png");
        echo "\" class=\"service__image\" alt=\"Service Item\">
                    
                    <h3 class=\"service__title\">Cafe</h3>
                    </a>
                    <em class=\"testimonial__comment text-sm\">Tingkatkan Omzet dengan Program Loyalti, menarik perhatian pelanggan untuk repeat order.</em>
                </div>
                 <div class=\"service ";
        // line 33
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/install-master/bakery\" target=\"_blank\">
                    <img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/bakeryblack.png");
        echo "\" class=\"service__image\" alt=\"Service Item\">
                    
                    <h3 class=\"service__title\">Bakery</h3>
                    </a>
                    <em class=\"testimonial__comment text-sm\">Optimalkan biaya produksi dengan Control Stock Level agar tidak banyak produk terbuang karena masa kadaluarsa.</em>
                </div>
            
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  98 => 33,  89 => 27,  84 => 25,  75 => 19,  70 => 17,  61 => 11,  55 => 9,  52 => 8,  49 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"services\" class=\"services container section mx-auto\">
    <div>
        <h2 class=\"section__title text-center mb-16\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">{{ this.theme.service_title }}</h2>
        <div class=\"services__items\">
            
                {% set index = loop.index %}
                {% set position = index % 2 ? 'service--left': 'service--right'  %}
                {% set default_image = 'assets/dist/images/service'~index~'.svg' %}
                <div class=\"service {{ position }}\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/install-master/restaurant\" target=\"_blank\">
                    <img src=\"{{ 'assets/dist/images/restoblack.png'|theme }}\" class=\"service__image\" alt=\"Service Item\">
                    
                    <h3 class=\"service__title\">Restaurant</h3>
                    </a>
                    <em class=\"testimonial__comment text-sm\">Ciptakan resep menu baru dengan mengetahui demografi pembelian konsumen Restoran Anda.</em>
                </div>
                <div class=\"service {{ position }}\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/install-master/retail\" target=\"_blank\">
                    <img src=\"{{ 'assets/dist/images/retailblack.png'|theme }}\" class=\"service__image\" alt=\"Service Item\">
                    
                    <h3 class=\"service__title\">Retail</h3>
                    </a>
                    <em class=\"testimonial__comment text-sm\">Meningkatkan Pelayanan dan Penjualan dengan sistem pembayaran otomatis Retail Anda.</em>
                </div>
                <div class=\"service {{ position }}\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/install-master/cafe\" target=\"_blank\">
                    <img src=\"{{ 'assets/dist/images/cafeblack.png'|theme }}\" class=\"service__image\" alt=\"Service Item\">
                    
                    <h3 class=\"service__title\">Cafe</h3>
                    </a>
                    <em class=\"testimonial__comment text-sm\">Tingkatkan Omzet dengan Program Loyalti, menarik perhatian pelanggan untuk repeat order.</em>
                </div>
                 <div class=\"service {{ position }}\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
                    <a href=\"http://localhost/install-master/bakery\" target=\"_blank\">
                    <img src=\"{{ 'assets/dist/images/bakeryblack.png'|theme }}\" class=\"service__image\" alt=\"Service Item\">
                    
                    <h3 class=\"service__title\">Bakery</h3>
                    </a>
                    <em class=\"testimonial__comment text-sm\">Optimalkan biaya produksi dengan Control Stock Level agar tidak banyak produk terbuang karena masa kadaluarsa.</em>
                </div>
            
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/services.htm", "");
    }
}
