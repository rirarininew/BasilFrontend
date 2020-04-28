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

/* C:\xampp\htdocs\BasilFrontend/themes/thebakerdev-zenii/partials/testimonial.htm */
class __TwigTemplate_c4930368231d70febc00156407f4c232e6f71b28f6af5f6d68c28938f5b366c4 extends \Twig\Template
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
        echo "<section id=\"testimonials\" class=\"testimonials container section mx-auto\">
    <div class=\"w-full md:w-1/2 pl-0 md:pl-16 text-center md:text-left\">
        <h2 class=\"w-full font-bold text-5xl leading-none mb-6\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" style=\"margin-top:100px;\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "testimonial_title", [], "any", false, false, false, 3), "html", null, true);
        echo "</h2>
        <p class=\"w-full md:w-3/4\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "testimonial_description", [], "any", false, false, false, 4), "html", null, true);
        echo "</p>
    </div>
    <div class=\"w-full md:w-1/2 pt-12 md:pt-0\">
        <div class=\"testimonial__slider\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
            <div class=\"glider\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 9), "testimonials", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            echo " 
                <div class=\"testimonial\">
                    <div class=\"testimonial__content\">
                        <img src=\"";
            // line 12
            echo ((twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 12)) ? ($this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 12))) : ("https://i.pravatar.cc/100?img=8"));
            echo "\" alt=\"Customer Testimonial Image\" class=\"testimonial__image\">
                        <strong class=\"testimonial__name\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</strong>
                        <p class=\"testimonial__company text-secondary mb-4\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testimonial"], "company", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
                        <em class=\"testimonial__comment text-sm\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testimonial"], "comment", [], "any", false, false, false, 15), "html", null, true);
            echo "</em>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div>
            <button class=\"glider-prev material-icons\">keyboard_arrow_left</button>
            <button class=\"glider-next material-icons\">keyboard_arrow_right</button> 
            <div class=\"glider__dots\"></div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/testimonial.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  53 => 9,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"testimonials\" class=\"testimonials container section mx-auto\">
    <div class=\"w-full md:w-1/2 pl-0 md:pl-16 text-center md:text-left\">
        <h2 class=\"w-full font-bold text-5xl leading-none mb-6\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" style=\"margin-top:100px;\">{{ this.theme.testimonial_title }}</h2>
        <p class=\"w-full md:w-3/4\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">{{ this.theme.testimonial_description }}</p>
    </div>
    <div class=\"w-full md:w-1/2 pt-12 md:pt-0\">
        <div class=\"testimonial__slider\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">
            <div class=\"glider\">
                {% for testimonial in this.theme.testimonials %} 
                <div class=\"testimonial\">
                    <div class=\"testimonial__content\">
                        <img src=\"{{ testimonial.image ? testimonial.image|media : 'https://i.pravatar.cc/100?img=8' }}\" alt=\"Customer Testimonial Image\" class=\"testimonial__image\">
                        <strong class=\"testimonial__name\">{{ testimonial.name }}</strong>
                        <p class=\"testimonial__company text-secondary mb-4\">{{ testimonial.company }}</p>
                        <em class=\"testimonial__comment text-sm\">{{ testimonial.comment }}</em>
                    </div>
                </div>
                {% endfor %}
            </div>
            <button class=\"glider-prev material-icons\">keyboard_arrow_left</button>
            <button class=\"glider-next material-icons\">keyboard_arrow_right</button> 
            <div class=\"glider__dots\"></div>
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/testimonial.htm", "");
    }
}
