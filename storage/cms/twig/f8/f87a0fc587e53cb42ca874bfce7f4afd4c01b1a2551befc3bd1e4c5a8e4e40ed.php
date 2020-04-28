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

/* C:\xampp\htdocs\BasilFrontend/themes/thebakerdev-zenii/partials/about-bakery.htm */
class __TwigTemplate_aa6ba22cca09a18747960200760f02a38850d980dd3eb91b9ec9d4b78ab326b5 extends \Twig\Template
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
        echo "<section id=\"about-bakery\" class=\"about-us\">
    <div class=\"container section mx-auto\">
        <div class=\"about-us__content\">
            <ul class=\"mt-10 md:ml-8\">
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon fas fa-check\" style=\"color:#2dd1ac\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\" style=\"color:#0a0707\">MENGURANGI BIAYA PRODUKSI</h3>
                            <p class=\"item__text md:w-3/4\" style=\"color:#707e7e\">mengoptimalkan biaya produksi dengan Control Stock Level agar tidak banyak produk terbuang karena masa kadaluarsa.</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon fas fa-check\" style=\"color:#2dd1ac\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\" style=\"color:#0a0707\">KEMUDAHAN PROSES PEMBAYARAN</h3>
                            <p class=\"item__text md:w-3/4\" style=\"color:#707e7e\">dengan sistem pembayaran otomatis dari Basil memudahkan dan mempercepat proses pembayaran sehingga konsumen tidak perlu mengantri lama.</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon fas fa-check\" style=\"color:#2dd1ac\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\" style=\"color:#0a0707\">CONTROL STOCK LEVEL</h3>
                            <p class=\"item__text md:w-3/4\" style=\"color:#707e7e\">anda dapat memprioritaskan untuk re-stock barang yang paling laris dan mengurangi untuk re-stock barang yang jarang dibeli oleh konsumen.</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon fas fa-check\" style=\"color:#2dd1ac\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\" style=\"color:#0a0707\">BUSSINESS INTELEGENT PURCHASING</h3>
                            <p class=\"item__text md:w-3/4\" style=\"color:#707e7e\">Membantu anda mendapatkan informasi yang akurat sehingga dapat membuat keputusan bisnis yang berdasarkan data, bukan berdasarkan insting.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class=\"about-us__image\">
            <img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/[Desktop] POSN.png");
        echo "\" class=\"mx-auto\" style=\"padding: 100px 30px 10px 30px;\" alt=\"About Us Image\" data-sal=\"slide-up\" data-sal-delay=\"400\" data-sal-duration=\"500\">
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/about-bakery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 44,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"about-bakery\" class=\"about-us\">
    <div class=\"container section mx-auto\">
        <div class=\"about-us__content\">
            <ul class=\"mt-10 md:ml-8\">
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon fas fa-check\" style=\"color:#2dd1ac\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\" style=\"color:#0a0707\">MENGURANGI BIAYA PRODUKSI</h3>
                            <p class=\"item__text md:w-3/4\" style=\"color:#707e7e\">mengoptimalkan biaya produksi dengan Control Stock Level agar tidak banyak produk terbuang karena masa kadaluarsa.</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon fas fa-check\" style=\"color:#2dd1ac\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\" style=\"color:#0a0707\">KEMUDAHAN PROSES PEMBAYARAN</h3>
                            <p class=\"item__text md:w-3/4\" style=\"color:#707e7e\">dengan sistem pembayaran otomatis dari Basil memudahkan dan mempercepat proses pembayaran sehingga konsumen tidak perlu mengantri lama.</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon fas fa-check\" style=\"color:#2dd1ac\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\" style=\"color:#0a0707\">CONTROL STOCK LEVEL</h3>
                            <p class=\"item__text md:w-3/4\" style=\"color:#707e7e\">anda dapat memprioritaskan untuk re-stock barang yang paling laris dan mengurangi untuk re-stock barang yang jarang dibeli oleh konsumen.</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon fas fa-check\" style=\"color:#2dd1ac\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\" style=\"color:#0a0707\">BUSSINESS INTELEGENT PURCHASING</h3>
                            <p class=\"item__text md:w-3/4\" style=\"color:#707e7e\">Membantu anda mendapatkan informasi yang akurat sehingga dapat membuat keputusan bisnis yang berdasarkan data, bukan berdasarkan insting.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class=\"about-us__image\">
            <img src=\"{{ 'assets/dist/images/[Desktop] POSN.png'|theme }}\" class=\"mx-auto\" style=\"padding: 100px 30px 10px 30px;\" alt=\"About Us Image\" data-sal=\"slide-up\" data-sal-delay=\"400\" data-sal-duration=\"500\">
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/about-bakery.htm", "");
    }
}
