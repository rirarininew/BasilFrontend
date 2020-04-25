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

/* C:\xampp\htdocs\install-master/themes/thebakerdev-zenii/partials/about-retail.htm */
class __TwigTemplate_a5ebbe15b21e6c00b371ad6291f5cc3dd638a3ec2daf16b99430d8de73e11e28 extends \Twig\Template
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
        echo "<section id=\"about-retail\" class=\"about-us\">
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
                            <h3 class=\"item__title\">Control Stock Level</h3>
                            <p class=\"item__text md:w-3/4\">anda dapat memprioritaskan untuk re-stock barang yang paling laris dan mengurangi untuk re-stock barang yang jarang dibeli oleh konsumen.</p>
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
                            <h3 class=\"item__title\">Program Loyalitas Konsumen</h3>
                            <p class=\"item__text md:w-3/4\">dengan program loyalitas konsumen menarik minat konsumen untuk melakukan repeat order sehingga meningkatkan penjualan bisnis anda.</p>
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
                            <h3 class=\"item__title\">Bussiness Intelegent Purchasing</h3>
                            <p class=\"item__text md:w-3/4\">Membantu anda mendapatkan informasi yang akurat sehingga dapat membuat keputusan bisnis yang berdasarkan data, bukan berdasarkan insting.</p>
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
        return "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/about-retail.htm";
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
        return new Source("<section id=\"about-retail\" class=\"about-us\">
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
                            <h3 class=\"item__title\">Control Stock Level</h3>
                            <p class=\"item__text md:w-3/4\">anda dapat memprioritaskan untuk re-stock barang yang paling laris dan mengurangi untuk re-stock barang yang jarang dibeli oleh konsumen.</p>
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
                            <h3 class=\"item__title\">Bussiness Intelegent Purchasing</h3>
                            <p class=\"item__text md:w-3/4\">Membantu anda mendapatkan informasi yang akurat sehingga dapat membuat keputusan bisnis yang berdasarkan data, bukan berdasarkan insting.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class=\"about-us__image\">
            <img src=\"{{ 'assets/dist/images/[Desktop] POS.png'|theme }}\" class=\"mx-auto\" alt=\"About Us Image\" data-sal=\"slide-up\" data-sal-delay=\"400\" data-sal-duration=\"500\">
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/about-retail.htm", "");
    }
}
