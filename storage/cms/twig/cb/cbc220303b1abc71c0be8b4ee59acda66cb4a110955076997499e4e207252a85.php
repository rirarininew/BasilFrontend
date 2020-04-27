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

/* C:\xampp\htdocs\BasilFrontend/themes/thebakerdev-zenii/partials/footer.htm */
class __TwigTemplate_986cba74a2975e0d78a261e692f2f75b70e6d0539cf4b698874f8c9fdde7d89f extends \Twig\Template
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
        echo "<footer class=\"footer bg-tertiary text-white\">
    <div class=\"container section mx-auto py-10\">
        <div class=\"footer__content\">
            <h4 class=\"text-lg font-bold mb-4\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "company_contact_title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h4>
            <ul class=\"text-sm\">
                <li class=\"mb-2\">
                    <div class=\"item\">
                        <i class=\"item__icon material-icons text-white text-2xl\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "company_address_icon", [], "any", false, false, false, 8), "html", null, true);
        echo "</i>
                        <div class=\"item__content\">
                            <p class=\"item__text\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "company_address", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
                        </div> 
                    </div>
                </li>
                <li class=\"mb-2\">
                    <div class=\"item\">
                        <i class=\"item__icon material-icons text-white text-2xl\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 16), "company_contact_number_icon", [], "any", false, false, false, 16), "html", null, true);
        echo "</i>
                        <div class=\"item__content\">
                            <p class=\"item__text\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 18), "company_contact_number", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-2\">
                    <div class=\"item\">
                        <i class=\"item__icon material-icons text-white text-2xl\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 24), "company_email_icon", [], "any", false, false, false, 24), "html", null, true);
        echo "</i>
                        <div class=\"item__content\">
                            <p class=\"item__text\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 26), "company_email", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class=\"footer__content\">
            <h4 class=\"text-lg font-bold mb-4\">Menu Links</h4>
            <ul class=\"text-sm\">
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/#about\">Tentang Kami</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/#services\">Solusi Usaha</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/#contact\">Kontak</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/#pricing\">Harga</a></li>
            </ul>
        </div>
        <div class=\"footer__content\">
             <h4 class=\"text-lg font-bold mb-4\">Solusi Usaha</h4>
            <ul class=\"text-sm\">
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/restaurant/#restaurant\">Restaurant</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/retail/#retail\">Retail</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/cafe/#cafe\">Cafe</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/bakery/#bakery\">Bakery</a></li>
            </ul>
        </div>
        <div class=\"footer__content\">
            <h4 class=\"text-lg font-bold mb-4\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 51), "social_title", [], "any", false, false, false, 51), "html", null, true);
        echo "</h4>
            <ul class=\"flex text-sm\">
                <li class=\"mb-2 mr-4\">
                    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 54), "social_facebook", [], "any", false, false, false, 54), "html", null, true);
        echo "\" target=\"_blank\">
                        <img class=\"w-6 h-6\" src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/facebook.svg");
        echo "\" alt=\"Twitter Icon\">
                    </a>
                </li>
                <li class=\"mb-2 mr-4\">
                    <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 59), "social_twitter", [], "any", false, false, false, 59), "html", null, true);
        echo "\" target=\"_blank\">
                        <img class=\"w-6 h-6\" src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/twitter.svg");
        echo "\" alt=\"Twitter Icon\">
                    </a>
                </li>
                <li class=\"mb-2 mr-4\">
                    <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 64), "social_instagram", [], "any", false, false, false, 64), "html", null, true);
        echo "\" target=\"_blank\">
                        <img class=\"w-6 h-6\" src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/instagram.svg");
        echo "\" alt=\"Instagram Icon\">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 65,  138 => 64,  131 => 60,  127 => 59,  120 => 55,  116 => 54,  110 => 51,  82 => 26,  77 => 24,  68 => 18,  63 => 16,  54 => 10,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer bg-tertiary text-white\">
    <div class=\"container section mx-auto py-10\">
        <div class=\"footer__content\">
            <h4 class=\"text-lg font-bold mb-4\">{{this.theme.company_contact_title }}</h4>
            <ul class=\"text-sm\">
                <li class=\"mb-2\">
                    <div class=\"item\">
                        <i class=\"item__icon material-icons text-white text-2xl\">{{ this.theme.company_address_icon }}</i>
                        <div class=\"item__content\">
                            <p class=\"item__text\">{{ this.theme.company_address }}</p>
                        </div> 
                    </div>
                </li>
                <li class=\"mb-2\">
                    <div class=\"item\">
                        <i class=\"item__icon material-icons text-white text-2xl\">{{ this.theme.company_contact_number_icon }}</i>
                        <div class=\"item__content\">
                            <p class=\"item__text\">{{ this.theme.company_contact_number }}</p>
                        </div>
                    </div>
                </li>
                <li class=\"mb-2\">
                    <div class=\"item\">
                        <i class=\"item__icon material-icons text-white text-2xl\">{{ this.theme.company_email_icon }}</i>
                        <div class=\"item__content\">
                            <p class=\"item__text\">{{ this.theme.company_email }}</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class=\"footer__content\">
            <h4 class=\"text-lg font-bold mb-4\">Menu Links</h4>
            <ul class=\"text-sm\">
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/#about\">Tentang Kami</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/#services\">Solusi Usaha</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/#contact\">Kontak</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/#pricing\">Harga</a></li>
            </ul>
        </div>
        <div class=\"footer__content\">
             <h4 class=\"text-lg font-bold mb-4\">Solusi Usaha</h4>
            <ul class=\"text-sm\">
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/restaurant/#restaurant\">Restaurant</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/retail/#retail\">Retail</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/cafe/#cafe\">Cafe</a></li>
                <li class=\"mb-2\"><a class=\"hover:text-primary\" href=\"http://localhost/BasilFrontend/bakery/#bakery\">Bakery</a></li>
            </ul>
        </div>
        <div class=\"footer__content\">
            <h4 class=\"text-lg font-bold mb-4\">{{ this.theme.social_title }}</h4>
            <ul class=\"flex text-sm\">
                <li class=\"mb-2 mr-4\">
                    <a href=\"{{ this.theme.social_facebook }}\" target=\"_blank\">
                        <img class=\"w-6 h-6\" src=\"{{ 'assets/dist/images/facebook.svg'|theme }}\" alt=\"Twitter Icon\">
                    </a>
                </li>
                <li class=\"mb-2 mr-4\">
                    <a href=\"{{ this.theme.social_twitter }}\" target=\"_blank\">
                        <img class=\"w-6 h-6\" src=\"{{ 'assets/dist/images/twitter.svg'|theme }}\" alt=\"Twitter Icon\">
                    </a>
                </li>
                <li class=\"mb-2 mr-4\">
                    <a href=\"{{ this.theme.social_instagram }}\" target=\"_blank\">
                        <img class=\"w-6 h-6\" src=\"{{ 'assets/dist/images/instagram.svg'|theme }}\" alt=\"Instagram Icon\">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>", "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/footer.htm", "");
    }
}
