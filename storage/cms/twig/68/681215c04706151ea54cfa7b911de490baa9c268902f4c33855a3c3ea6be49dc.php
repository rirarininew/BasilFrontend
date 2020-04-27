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

/* C:\xampp\htdocs\BasilFrontend/themes/thebakerdev-zenii/partials/meta.htm */
class __TwigTemplate_74583708f715d71879ec6c7c4860ef483b14f677edb3dc36109ce84ee5996081 extends \Twig\Template
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
        echo "<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 4), "meta_description", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 4), "meta_description", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "description", [], "any", false, false, false, 4))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "description", [], "any", false, false, false, 4))), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "keywords", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "website_author", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
<title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</title>
<link rel=\"canonical\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "website_url", [], "any", false, false, false, 8), "html", null, true);
        echo "\" />
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/favicon-32x32.png");
        echo "\" />
<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700|Rubik:400,700&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/css/style.css");
        echo "\">";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.description) }}\">
<meta name=\"keywords\" content=\"{{ this.theme.keywords }}\">
<meta name=\"author\" content=\"{{ this.theme.website_author }}\">
<title>{{ this.page.title }}</title>
<link rel=\"canonical\" href=\"{{ this.theme.website_url }}\" />
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/dist/images/favicon-32x32.png'|theme }}\" />
<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700|Rubik:400,700&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"{{ 'assets/dist/css/style.css'|theme }}\">", "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/meta.htm", "");
    }
}
