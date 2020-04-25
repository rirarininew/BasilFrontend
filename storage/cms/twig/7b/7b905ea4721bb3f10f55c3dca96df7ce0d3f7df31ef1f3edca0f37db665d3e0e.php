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

/* C:\xampp\htdocs\install-master/themes/thebakerdev-zenii/partials/retail.htm */
class __TwigTemplate_5a848ebdadb774dfbfd3ab2cae531f31e25b01bd42e00b9aa8ad788ca8b62b11 extends \Twig\Template
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
        echo "<section id=\"retail\" class=\"section mx-auto\">
     <div class=\"container mx-auto bg-ik\">
       <br>
       <h1 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">Managemen <span class=\"text-ungu\"> Retail </span> semakin mudah</h1>
       <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">dengan Basil F&B</h2>
       <p class=\"hero__tagline-subtitle text-center\" data-sal=\"fade\" data-sal-delay=\"100\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "hero_subtitle", [], "any", false, false, false, 6), "html", null, true);
        echo "<br><br>
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
        return "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/retail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"retail\" class=\"section mx-auto\">
     <div class=\"container mx-auto bg-ik\">
       <br>
       <h1 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">Managemen <span class=\"text-ungu\"> Retail </span> semakin mudah</h1>
       <h2 class=\"section__titleres text-center mb-5\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">dengan Basil F&B</h2>
       <p class=\"hero__tagline-subtitle text-center\" data-sal=\"fade\" data-sal-delay=\"100\">{{ this.theme.hero_subtitle }}<br><br>
       <a class=\"btn btn--primary mt-8 align-center\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"#contact\">{{ this.theme.hero_button_text }}</a>
       <br><br><br><br><br>
       </p>
    </div>
        
</section>", "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/retail.htm", "");
    }
}
