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

/* C:\xampp\htdocs\BasilFrontend/themes/thebakerdev-zenii/partials/scripts.htm */
class __TwigTemplate_58d90fbef73ebf9196f444715f1ce2529f21d99f2fd5f883fdce247c78508bbb extends \Twig\Template
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
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/js/app.js");
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"{{ 'assets/dist/js/app.js'|theme }}\"></script>", "C:\\xampp\\htdocs\\BasilFrontend/themes/thebakerdev-zenii/partials/scripts.htm", "");
    }
}
