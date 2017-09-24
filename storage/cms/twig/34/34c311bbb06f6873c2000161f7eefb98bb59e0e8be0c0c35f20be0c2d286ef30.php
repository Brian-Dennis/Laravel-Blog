<?php

/* D:\xampp7.1\htdocs\acmeOctober/themes/acme/pages/home.htm */
class __TwigTemplate_b221c0f45f4577f94348381799101da4bd001b8cb6137d284eae04cd4ccc64cd extends Twig_Template
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
        echo "<div class=\"jumbotron text-center\">
    <h1>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</h1>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_description", array()), "html", null, true);
        echo "</p>
    <p>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\" class=\"btn btn-default\">Read More</a>
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp7.1\\htdocs\\acmeOctober/themes/acme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron text-center\">
    <h1>{{this.theme.site_name}}</h1>
    <p>{{this.theme.site_description}}</p>
    <p>
        <a href=\"{{'about'|page}}\" class=\"btn btn-default\">Read More</a>
    </p>
</div>", "D:\\xampp7.1\\htdocs\\acmeOctober/themes/acme/pages/home.htm", "");
    }
}
