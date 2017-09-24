<?php

/* D:\xampp7.1\htdocs\acmeOctober/themes/acme/partials/site/footer.htm */
class __TwigTemplate_5b10d5ae4c43ee11e9a11f8a5efc216b47be7272094a835bacea9d81b5b4f2da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p class=\"text-center\">Copyright &copy; 2017 Acme Services</p>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp7.1\\htdocs\\acmeOctober/themes/acme/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p class=\"text-center\">Copyright &copy; 2017 Acme Services</p>", "D:\\xampp7.1\\htdocs\\acmeOctober/themes/acme/partials/site/footer.htm", "");
    }
}
