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

/* error-route.tpl */
class __TwigTemplate_bed4b9367c153c7f45fef0d3617d989b extends Template
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
        echo "<p>Error 404</p>
<?php
header(\$_SERVER[\"SERVER_PROTOCOL\"].\" 404 Not Found\"); 
echo \$_SERVER[\"SERVER_PROTOCOL\"];
?>";
    }

    public function getTemplateName()
    {
        return "error-route.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "error-route.tpl", "/data/mysite.local/src/Views/error-route.tpl");
    }
}
