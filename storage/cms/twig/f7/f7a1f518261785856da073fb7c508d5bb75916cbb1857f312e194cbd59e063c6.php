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

/* C:\xampp\htdocs\BasilFrontend/themes/thebakerdev-zenii/partials/pricing.htm */
class __TwigTemplate_655c9504cc3579ea7c72ca133a42748540700931bd85c300a260a01de9599c44 extends \Twig\Template
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
        echo "<section id=\"pricing\" class=\"pricing section bg-gray\">
    <div class=\"container mx-auto\">
        <h2 class=\"section__title text-center mb-16\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "pricing_title", [], "any", false, false, false, 3), "html", null, true);
        echo "</h2>
        <div class=\"pricing__items\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "pricing_plans", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 6
            echo "                <div class=\"pricing__item ";
            echo ((twig_get_attribute($this->env, $this->source, $context["plan"], "highlighted", [], "any", false, false, false, 6)) ? ("pricing__item--active") : (""));
            echo "\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "plan_title", [], "any", false, false, false, 8), "html", null, true);
            echo "</h3>
                        <p class=\"pricing__item-price\"><span>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "currency", [], "any", false, false, false, 9), "html", null, true);
            echo "</span><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "price", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "plan_type", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
                        <ul class=\"pricing__item-features\">
                            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "plan_features", [], "any", false, false, false, 11), ","));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 12
                echo "                                <!-- <li class=\"item__text\" style=\"text-align:left\">";
                echo twig_escape_filter($this->env, $context["feature"], "html", null, true);
                echo "</li> -->
                                <li class=\"item__text\" style=\"text-align:left\"><span style=\"font-family: calibri\"> ";
                // line 13
                echo twig_escape_filter($this->env, $context["feature"], "html", null, true);
                echo " </span></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo " 
                        </ul>
                    </div>
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "button_url", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"btn ";
            echo ((twig_get_attribute($this->env, $this->source, $context["plan"], "highlighted", [], "any", false, false, false, 17)) ? ("") : ("btn--primary"));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "button_text", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/pricing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 20,  91 => 17,  86 => 14,  78 => 13,  73 => 12,  69 => 11,  60 => 9,  56 => 8,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"pricing\" class=\"pricing section bg-gray\">
    <div class=\"container mx-auto\">
        <h2 class=\"section__title text-center mb-16\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">{{ this.theme.pricing_title }}</h2>
        <div class=\"pricing__items\">
            {% for plan in this.theme.pricing_plans %}
                <div class=\"pricing__item {{ plan.highlighted ? 'pricing__item--active' }}\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\" data-sal-duration=\"400\">
                    <div class=\"pricing__item-content\">
                        <h3 class=\"pricing__item-title\">{{ plan.plan_title }}</h3>
                        <p class=\"pricing__item-price\"><span>{{ plan.currency }}</span><span>{{ plan.price }}</span>/{{ plan.plan_type }}</p>
                        <ul class=\"pricing__item-features\">
                            {% for feature in plan.plan_features|split(',') %}
                                <!-- <li class=\"item__text\" style=\"text-align:left\">{{ feature }}</li> -->
                                <li class=\"item__text\" style=\"text-align:left\"><span style=\"font-family: calibri\"> {{ feature }} </span></li>
                            {% endfor %} 
                        </ul>
                    </div>
                    <a href=\"{{ plan.button_url }}\" class=\"btn {{ plan.highlighted ? '': 'btn--primary'}}\">{{ plan.button_text }}</a>
                </div>
            {% endfor %}
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/pricing.htm", "");
    }
}
