<?php

/* partials/styles.html */
class __TwigTemplate_750135ac5940e0075f4984c7890ca075 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/public/docs/css/main.css\" type=\"text/css\" media=\"screen\">";
    }

    public function getTemplateName()
    {
        return "partials/styles.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
