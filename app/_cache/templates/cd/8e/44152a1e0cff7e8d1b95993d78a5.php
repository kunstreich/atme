<?php

/* partials/assets/html.html */
class __TwigTemplate_cd8e44152a1e0cff7e8d1b95993d78a5 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "html"));
        foreach ($context['_seq'] as $context["_key"] => $context["html"]) {
            // line 2
            echo "  ";
            if (isset($context["html"])) { $_html_ = $context["html"]; } else { $_html_ = null; }
            echo $this->getAttribute($_html_, "content");
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['html'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/assets/html.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
