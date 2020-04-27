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

/* C:\xampp\htdocs\BasilFrontend/themes/thebakerdev-zenii/partials/about-us.htm */
class __TwigTemplate_36147bd76571a16bc070b671400fb64827ae839b7d8423263176d011612530ff extends \Twig\Template
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
        echo "<section id=\"about\" class=\"about-us bg-gray\">
    <div class=\"container section mx-auto\">
        <div class=\"about-us__content\">
            <h2 class=\"section__title\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "about_title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h2>
            <p data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\" data-sal-delay=\"100\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "about_description", [], "any", false, false, false, 5), "html", null, true);
        echo "</p>
            <ul class=\"mt-10 md:ml-8\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "about_items", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["about_item"]) {
            // line 8
            echo "                    <li class=\"mb-6\">
                        <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                            <i class=\"item__icon material-icons text-primary\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about_item"], "icon", [], "any", false, false, false, 10), "html", null, true);
            echo "</i>
                            <div class=\"item__content\">
                                <a href=\"http://localhost/BasilFrontend/restaurant\" target=\"_blank\">
                                <h3 class=\"item__title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about_item"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo "</h3>
                                </a>
                                <p class=\"item__text md:w-3/4\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about_item"], "description", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </ul>
        </div>
        <div class=\"about-us__image\">
            <img src=\"";
        // line 23
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 23), "about_image", [], "any", false, false, false, 23)) ? ($this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 23), "about_image", [], "any", false, false, false, 23))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/about.svg")));
        echo "\" class=\"mx-auto\" alt=\"About Us Image\" data-sal=\"slide-up\" data-sal-delay=\"400\" data-sal-duration=\"500\">
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/about-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  81 => 20,  70 => 15,  65 => 13,  59 => 10,  55 => 8,  51 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"about\" class=\"about-us bg-gray\">
    <div class=\"container section mx-auto\">
        <div class=\"about-us__content\">
            <h2 class=\"section__title\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">{{ this.theme.about_title }}</h2>
            <p data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\" data-sal-delay=\"100\">{{ this.theme.about_description }}</p>
            <ul class=\"mt-10 md:ml-8\">
                {% for about_item in this.theme.about_items %}
                    <li class=\"mb-6\">
                        <div class=\"item\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">
                            <i class=\"item__icon material-icons text-primary\">{{ about_item.icon }}</i>
                            <div class=\"item__content\">
                                <a href=\"http://localhost/BasilFrontend/restaurant\" target=\"_blank\">
                                <h3 class=\"item__title\">{{ about_item.title }}</h3>
                                </a>
                                <p class=\"item__text md:w-3/4\">{{ about_item.description }}</p>
                            </div>
                        </div>
                    </li>
                {% endfor %}
            </ul>
        </div>
        <div class=\"about-us__image\">
            <img src=\"{{ this.theme.about_image ? this.theme.about_image|media : 'assets/dist/images/about.svg'|theme }}\" class=\"mx-auto\" alt=\"About Us Image\" data-sal=\"slide-up\" data-sal-delay=\"400\" data-sal-duration=\"500\">
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/about-us.htm", "");
    }
}
