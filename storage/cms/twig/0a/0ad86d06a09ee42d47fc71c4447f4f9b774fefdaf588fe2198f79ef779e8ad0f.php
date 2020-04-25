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

/* C:\xampp\htdocs\install-master/themes/thebakerdev-zenii/partials/header.htm */
class __TwigTemplate_69aa8cce5fc158706ce172b44cd12576515c200cecea1f0470db2254a99d328a extends \Twig\Template
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
        echo "<header class=\"header container\">
    <a href=\"/install-master\"><img src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/BASILlogo.png");
        echo "\" alt=\"logo\" class=\"logo\"></a>
    <nav class=\"nav\">
        <h2 class=\"hidden\">Top navigation</h2>
        <ul id=\"nav_menu\" class=\"nav__menu\">
            <li><a href=\"http://localhost/install-master/#about\">Apa itu Basil?</a></li>
            <li><a href=\"http://localhost/install-master/#services\">Solusi Usaha</a></li>
            <li><a href=\"http://localhost/install-master/#pricing\">Harga</a></li>
            <li><a href=\"http://localhost/install-master/#contact\">Hubungi Kami</a></li>
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
        return "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/header.htm";
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
        return new Source("<header class=\"header container\">
    <a href=\"/install-master\"><img src=\"{{ 'assets/dist/images/BASILlogo.png'|theme }}\" alt=\"logo\" class=\"logo\"></a>
    <nav class=\"nav\">
        <h2 class=\"hidden\">Top navigation</h2>
        <ul id=\"nav_menu\" class=\"nav__menu\">
            <li><a href=\"http://localhost/install-master/#about\">Apa itu Basil?</a></li>
            <li><a href=\"http://localhost/install-master/#services\">Solusi Usaha</a></li>
            <li><a href=\"http://localhost/install-master/#pricing\">Harga</a></li>
            <li><a href=\"http://localhost/install-master/#contact\">Hubungi Kami</a></li>
            <li><a class=\"btn btn--primary mt-8\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"https://www.instagram.com/rirarini\">login</a></li>
        </ul>
        <button id=\"nav_menu_button\" class=\"nav__menu-button\">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>
</header>", "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/header.htm", "");
    }
}
