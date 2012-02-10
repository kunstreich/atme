<?php

/* partials/assets/swf.html */
class __TwigTemplate_aa834d47365f0fa45bdf8d78d4b1ac99 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "swf"));
        foreach ($context['_seq'] as $context["_key"] => $context["swf"]) {
            // line 2
            echo "<div class=\"media\">
  <object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0\" width=\"";
            // line 3
            if (isset($context["swf"])) { $_swf_ = $context["swf"]; } else { $_swf_ = null; }
            echo $this->getAttribute($_swf_, "width");
            echo "\" height=\"";
            if (isset($context["swf"])) { $_swf_ = $context["swf"]; } else { $_swf_ = null; }
            echo $this->getAttribute($_swf_, "height");
            echo "\" align=\"middle\">
    <param name=\"allowScriptAccess\" value=\"sameDomain\" />
    <param name=\"allowFullScreen\" value=\"false\" />
    <param name=\"movie\" value=\"";
            // line 6
            if (isset($context["swf"])) { $_swf_ = $context["swf"]; } else { $_swf_ = null; }
            echo $this->getAttribute($_swf_, "url");
            echo "\" />
    <param name=\"quality\" value=\"high\" />
    <embed src=\"";
            // line 8
            if (isset($context["swf"])) { $_swf_ = $context["swf"]; } else { $_swf_ = null; }
            echo $this->getAttribute($_swf_, "url");
            echo "\" quality=\"high\" width=\"";
            if (isset($context["swf"])) { $_swf_ = $context["swf"]; } else { $_swf_ = null; }
            echo $this->getAttribute($_swf_, "width");
            echo "\" height=\"";
            if (isset($context["swf"])) { $_swf_ = $context["swf"]; } else { $_swf_ = null; }
            echo $this->getAttribute($_swf_, "height");
            echo "\" name=\"x\" align=\"middle\" allowScriptAccess=\"sameDomain\" allowFullScreen=\"false\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/go/getflashplayer\" />
  </object>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['swf'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/assets/swf.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
