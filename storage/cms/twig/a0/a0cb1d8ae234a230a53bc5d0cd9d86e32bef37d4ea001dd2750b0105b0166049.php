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

/* C:\xampp\htdocs\install-master/themes/thebakerdev-zenii/partials/contact.htm */
class __TwigTemplate_805ec51830b507ad844f7baa04dda533b33ebce0770f0da1de9b5f85e16567e8 extends \Twig\Template
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
        echo "<section id=\"contact\" class=\"contact container section mx-auto\">
    <div class=\"contact__content\">
        <h2 class=\"section__title\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "contact_title", [], "any", false, false, false, 3), "html", null, true);
        echo "</h2>
        <p class=\"mb-4 w-full md:w-3/4\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "contact_description", [], "any", false, false, false, 4), "html", null, true);
        echo "</p>
        <form id=\"contact_form\" class=\"w-full md:w-3/4\" novalidate data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\" data-sal-delay=\"100\">
            <div class=\"input-group mb-2\">
                <label for=\"name\">Nama</label>
                <input type=\"text\" id=\"name\" class=\"input\" name=\"name\" placeholder=\"masukkan nama atau nama usaha anda\">
            </div>
            <div class=\"input-group mb-2\">
                <label for=\"email\">Email</label>
                <input type=\"email\" id=\"email\" class=\"input\" name=\"email\" placeholder=\"masukkan email\">
            </div>
            <div class=\"input-group\">
                <label for=\"message\">Pilih paket</label>
                <textarea id=\"message\" class=\"h-20\" name=\"message\"></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn--primary mt-8\">Send</button>
        </form>
    </div>
    <div class=\"contact__image\">
        <img src=\"";
        // line 22
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 22), "contact_image", [], "any", false, false, false, 22)) ? ($this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 22), "contact_image", [], "any", false, false, false, 22))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/contact.svg")));
        echo "\" class=\"mx-auto\" alt=\"Contact Image\" data-sal=\"slide-up\" data-sal-delay=\"400\" data-sal-duration=\"500\">
    </div> 
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"contact\" class=\"contact container section mx-auto\">
    <div class=\"contact__content\">
        <h2 class=\"section__title\" data-sal=\"fade\" data-sal-easing=\"ease-in-cubic\">{{ this.theme.contact_title }}</h2>
        <p class=\"mb-4 w-full md:w-3/4\" data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\">{{ this.theme.contact_description }}</p>
        <form id=\"contact_form\" class=\"w-full md:w-3/4\" novalidate data-sal=\"slide-up\" data-sal-easing=\"ease-in-cubic\" data-sal-delay=\"100\">
            <div class=\"input-group mb-2\">
                <label for=\"name\">Nama</label>
                <input type=\"text\" id=\"name\" class=\"input\" name=\"name\" placeholder=\"masukkan nama atau nama usaha anda\">
            </div>
            <div class=\"input-group mb-2\">
                <label for=\"email\">Email</label>
                <input type=\"email\" id=\"email\" class=\"input\" name=\"email\" placeholder=\"masukkan email\">
            </div>
            <div class=\"input-group\">
                <label for=\"message\">Pilih paket</label>
                <textarea id=\"message\" class=\"h-20\" name=\"message\"></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn--primary mt-8\">Send</button>
        </form>
    </div>
    <div class=\"contact__image\">
        <img src=\"{{ this.theme.contact_image ? this.theme.contact_image|media : 'assets/dist/images/contact.svg'|theme }}\" class=\"mx-auto\" alt=\"Contact Image\" data-sal=\"slide-up\" data-sal-delay=\"400\" data-sal-duration=\"500\">
    </div> 
</section>", "C:\\xampp\\htdocs\\install-master/themes/thebakerdev-zenii/partials/contact.htm", "");
    }
}
