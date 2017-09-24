<?php

/* D:\xampp7.1\htdocs\acmeOctober/plugins/brian/resources/components/links/default.htm */
class __TwigTemplate_c994465e51bdb0c234d87ed7afc5b0153b98ebe7b82dfd6f71028ee555a97ce0 extends Twig_Template
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
        echo "<div class=\"links\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\xampp7.1\\htdocs\\acmeOctober/plugins/brian/resources/components/links/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"links\">
  {% for link in links %}
    {{ link }}
  {% endfor %}
</div>
", "D:\\xampp7.1\\htdocs\\acmeOctober/plugins/brian/resources/components/links/default.htm", "");
    }
}
