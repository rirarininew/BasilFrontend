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

/* C:\xampp\htdocs\install-master/themes/thebakerdev-zenii/partials/about-cafe.htm */
class __TwigTemplate_e6179242151e54358fd0246cd635ef0519a4e8f5d86d85ebddbb8ebd7ada49fb extends \Twig\Template
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
        echo "<section id=\"about-cafe\" class=\"about-us\">
    <div class=\"container section mx-auto\">
        <div class=\"about-us__content\">
            <ul class=\"mt-10 md:ml-8\">
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon material-icons text-primary\"><img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/cek.png");
        echo "\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\">Kemudahan Proses Pembayaran</h3>
                            <p class=\"item__text md:w-3/4\">dengan sistem pembayaran otomatis dari Basil memudahkan dan mempercepat proses pembayaran sehingga konsumen tidak perlu mengantri lama.</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon material-icons text-primary\"><img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/cek.png");
        echo "\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\">Program Loyalitas Konsumen</h3>
                            <p class=\"item__text md:w-3/4\">dengan program loyalitas konsumen menarik minat konsumen untuk melakukan repeat order sehingga meningkatkan penjualan bisnis anda.</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon material-icons text-primary\"><img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/cek.png");
        echo "\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\">Data menu favorit Pelanggan</h3>
                            <p class=\"item__text md:w-3/4\">dengan mengetahui menu favorit pelanggan, anda bisa fokus untuk produksi lebih pada menu yang paling disukai konsumen anda.</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon material-icons text-primary\"><img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/cek.png");
        echo "\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\">Data menu dengan Margin terbesar</h3>
                            <p class=\"item__text md:w-3/4\">anda bisa memaksimalkan keuntungan dengan fokus untuk produksi lebih pada menu yang memiliki keuntungan yang besar dari daftar menu.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class=\"about-us__image\">
            <img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/[Desktop] POS.png");
        echo "\" class=\"mx-auto\" alt=\"About Us Image\" data-sal=\"slide-up\" data-sal-delay=\"400\" data-sal-duration=\"500\">
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/about-cafe.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 44,  81 => 34,  69 => 25,  57 => 16,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"about-cafe\" class=\"about-us\">
    <div class=\"container section mx-auto\">
        <div class=\"about-us__content\">
            <ul class=\"mt-10 md:ml-8\">
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon material-icons text-primary\"><img src=\"{{ 'assets/dist/images/cek.png'|theme }}\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\">Kemudahan Proses Pembayaran</h3>
                            <p class=\"item__text md:w-3/4\">dengan sistem pembayaran otomatis dari Basil memudahkan dan mempercepat proses pembayaran sehingga konsumen tidak perlu mengantri lama.</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon material-icons text-primary\"><img src=\"{{ 'assets/dist/images/cek.png'|theme }}\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\">Program Loyalitas Konsumen</h3>
                            <p class=\"item__text md:w-3/4\">dengan program loyalitas konsumen menarik minat konsumen untuk melakukan repeat order sehingga meningkatkan penjualan bisnis anda.</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon material-icons text-primary\"><img src=\"{{ 'assets/dist/images/cek.png'|theme }}\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\">Data menu favorit Pelanggan</h3>
                            <p class=\"item__text md:w-3/4\">dengan mengetahui menu favorit pelanggan, anda bisa fokus untuk produksi lebih pada menu yang paling disukai konsumen anda.</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-6\">
                    <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                    <i class=\"item__icon material-icons text-primary\"><img src=\"{{ 'assets/dist/images/cek.png'|theme }}\"></i>
                        <div class=\"item__content\">
                            <h3 class=\"item__title\">Data menu dengan Margin terbesar</h3>
                            <p class=\"item__text md:w-3/4\">anda bisa memaksimalkan keuntungan dengan fokus untuk produksi lebih pada menu yang memiliki keuntungan yang besar dari daftar menu.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class=\"about-us__image\">
            <img src=\"{{ 'assets/dist/images/[Desktop] POS.png'|theme }}\" class=\"mx-auto\" alt=\"About Us Image\" data-sal=\"slide-up\" data-sal-delay=\"400\" data-sal-duration=\"500\">
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/about-cafe.htm", "");
    }
}
