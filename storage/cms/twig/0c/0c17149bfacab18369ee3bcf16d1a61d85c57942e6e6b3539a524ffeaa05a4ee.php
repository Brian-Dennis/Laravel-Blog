<?php

/* D:\xampp7.1\htdocs\acmeOctober/plugins/eduonix/resources/components/links/default.htm */
class __TwigTemplate_0ddd0299d5da1059aec3dc1568fb53537d169394ac0c1a4cae2b02540e2bbcf4 extends Twig_Template
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
        echo "<ul class=\"list-group\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 3
            echo "    <li class=\"list-group-item\"><a href=\"";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "D:\\xampp7.1\\htdocs\\acmeOctober/plugins/eduonix/resources/components/links/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"list-group\">
  {% for link in links %}
    <li class=\"list-group-item\"><a href=\"{{link}}\">{{link}}</a></li>
  {% endfor %}
</ul>
", "D:\\xampp7.1\\htdocs\\acmeOctober/plugins/eduonix/resources/components/links/default.htm", "");
    }
}