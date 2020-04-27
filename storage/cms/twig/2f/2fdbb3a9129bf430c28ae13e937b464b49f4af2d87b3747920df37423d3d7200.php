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

/* C:\xampp\htdocs\BasilFrontend/themes/thebakerdev-zenii/partials/hero.htm */
class __TwigTemplate_d0da72e4ce777c711fde6cd01442c9abd7ee13ba0824db6fc5e0c43aa722ffdc extends \Twig\Template
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
        echo "<section class=\"hero container section mx-auto\">
    <div class=\"hero__tagline\">
        <div class=\"hero__tagline-content-wrap\">
            <h2 class=\"hero__tagline-title\" data-sal=\"fade\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "hero_title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h2>
            <p class=\"hero__tagline-subtitle\" data-sal=\"fade\" data-sal-delay=\"100\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "hero_subtitle", [], "any", false, false, false, 5), "html", null, true);
        echo "</p>
            <p class=\"hero__tagline-text\" data-sal=\"fade\" data-sal-delay=\"200\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "hero_description", [], "any", false, false, false, 6), "html", null, true);
        echo "</p><br />
            <p><a class=\"btn btn--primary mt-8\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"#contact\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "hero_button_text", [], "any", false, false, false, 7), "html", null, true);
        echo "</a></p>
        </div>
    </div>
    <div class=\"hero__image\">
        <img src=\"";
        // line 11
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 11), "hero_image", [], "any", false, false, false, 11)) ? ($this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 11), "hero_image", [], "any", false, false, false, 11))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/hero.svg")));
        echo "\" class=\"mx-auto\" alt=\"Hero Image\" data-sal=\"slide-right\" data-sal-delay=\"400\" data-sal-duration=\"500\">
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/hero.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero container section mx-auto\">
    <div class=\"hero__tagline\">
        <div class=\"hero__tagline-content-wrap\">
            <h2 class=\"hero__tagline-title\" data-sal=\"fade\">{{ this.theme.hero_title }}</h2>
            <p class=\"hero__tagline-subtitle\" data-sal=\"fade\" data-sal-delay=\"100\">{{ this.theme.hero_subtitle }}</p>
            <p class=\"hero__tagline-text\" data-sal=\"fade\" data-sal-delay=\"200\">{{ this.theme.hero_description }}</p><br />
            <p><a class=\"btn btn--primary mt-8\" data-sal=\"fade\" data-sal-delay=\"300\" href=\"#contact\">{{ this.theme.hero_button_text }}</a></p>
        </div>
    </div>
    <div class=\"hero__image\">
        <img src=\"{{ this.theme.hero_image ? this.theme.hero_image|media : 'assets/dist/images/hero.svg'|theme }}\" class=\"mx-auto\" alt=\"Hero Image\" data-sal=\"slide-right\" data-sal-delay=\"400\" data-sal-duration=\"500\">
    </div>
</section>", "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/hero.htm", "");
    }
}
