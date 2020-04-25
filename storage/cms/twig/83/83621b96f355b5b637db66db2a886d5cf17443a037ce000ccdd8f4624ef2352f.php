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

/* C:\xampp\htdocs\install-master/themes/thebakerdev-zenii/partials/cafe.htm */
class __TwigTemplate_9c9f05bc63222d88adfd11d06e3c7dfe20ef95f8a21da6c8d28fad7e38598ddd extends \Twig\Template
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
        echo "<section id=\"cafe\" class=\"section mx-auto\">
     <div class=\"container mx-auto bg-is\">
       <br>
       <h1 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">Managemen <span class=\"text-error\"> Cafe </span> semakin mudah</h1>
       <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">dengan Basil F&B</h2>
       <p class=\"hero__tagline-subtitle text-center\" data-sal=\"fade\" data-sal-delay=\"100\">Tingkatkan Omzet dengan Program Loyalti Pelanggan.<br><br>
       <a class=\"btn btn--primary mt-8 align-center\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"#contact\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "hero_button_text", [], "any", false, false, false, 7), "html", null, true);
        echo "</a>
       <br><br><br><br><br>
       </p>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/cafe.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"cafe\" class=\"section mx-auto\">
     <div class=\"container mx-auto bg-is\">
       <br>
       <h1 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">Managemen <span class=\"text-error\"> Cafe </span> semakin mudah</h1>
       <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">dengan Basil F&B</h2>
       <p class=\"hero__tagline-subtitle text-center\" data-sal=\"fade\" data-sal-delay=\"100\">Tingkatkan Omzet dengan Program Loyalti Pelanggan.<br><br>
       <a class=\"btn btn--primary mt-8 align-center\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"#contact\">{{ this.theme.hero_button_text }}</a>
       <br><br><br><br><br>
       </p>
    </div>
</section>", "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/cafe.htm", "");
    }
}
