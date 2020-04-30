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

/* C:\xampp\htdocs\BasilFrontend/themes/thebakerdev-zenii/partials/header-shadow.htm */
class __TwigTemplate_a06a888a34937504e7a3ab6f24a1e3161321f6e50140e712408abe66164f1d05 extends \Twig\Template
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
        echo "<header class=\"header\"  style=\"background-color: #ffff;opacity: 40%\">
    <a href=\"/install-master\"><img src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/BASIL2.png");
        echo "\" width=\"80px\" height=\"78px\" alt=\"logo\" class=\"logo\"></a>
    <nav class=\"nav\">
        <h2 class=\"hidden\">Top navigation</h2>
        <ul id=\"nav_menu\" class=\"nav__menu\">
            <li><a href=\"http://localhost/BasilFrontend/#about\">Apa itu Basil?</a></li>
            <li><a href=\"http://localhost/BasilFrontend/#services\">Solusi Usaha</a></li>
            <li><a href=\"http://localhost/BasilFrontend/#pricing\">Harga</a></li>
            <li><a href=\"http://localhost/BasilFrontend/#contact\">Hubungi Kami</a></li>
            <li><a class=\"btn btn--primary mt-8\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"https://www.instagram.com/rirarini\">login</a></li>
        </ul>
        <button id=\"nav_menu_button\" class=\"nav__menu-button\">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/header-shadow.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\"  style=\"background-color: #ffff;opacity: 40%\">
    <a href=\"/install-master\"><img src=\"{{ 'assets/dist/images/BASIL2.png'|theme }}\" width=\"80px\" height=\"78px\" alt=\"logo\" class=\"logo\"></a>
    <nav class=\"nav\">
        <h2 class=\"hidden\">Top navigation</h2>
        <ul id=\"nav_menu\" class=\"nav__menu\">
            <li><a href=\"http://localhost/BasilFrontend/#about\">Apa itu Basil?</a></li>
            <li><a href=\"http://localhost/BasilFrontend/#services\">Solusi Usaha</a></li>
            <li><a href=\"http://localhost/BasilFrontend/#pricing\">Harga</a></li>
            <li><a href=\"http://localhost/BasilFrontend/#contact\">Hubungi Kami</a></li>
            <li><a class=\"btn btn--primary mt-8\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"https://www.instagram.com/rirarini\">login</a></li>
        </ul>
        <button id=\"nav_menu_button\" class=\"nav__menu-button\">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>
</header>", "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/header-shadow.htm", "");
    }
}
