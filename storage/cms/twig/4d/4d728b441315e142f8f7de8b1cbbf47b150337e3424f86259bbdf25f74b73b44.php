<?php

/* D:\xampp7.1\htdocs\acmeOctober/themes/acme/pages/about.htm */
class __TwigTemplate_7e9d84d853ee258c8473a4b303e6ac3c19addc47f69b27e74503bab20466a99b extends Twig_Template
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
        echo "<h1>About Us</h1>
<p>This is the about page</p>
<hr>
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("resourcesLinks"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp7.1\\htdocs\\acmeOctober/themes/acme/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About Us</h1>
<p>This is the about page</p>
<hr>
{% component 'resourcesLinks' %}", "D:\\xampp7.1\\htdocs\\acmeOctober/themes/acme/pages/about.htm", "");
    }
}
