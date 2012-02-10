<?php

/* partials/assets/video.html */
class __TwigTemplate_f0f22cd68e1b649a03a84867b45d59a1 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "video"));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 2
            echo "  <div class=\"media\">
    <object classid=\"clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B\" codebase=\"http://www.apple.com/qtactivex/qtplugin.cab\" width=\"";
            // line 3
            if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
            echo $this->getAttribute($_video_, "width");
            echo "\" height=\"";
            if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
            echo $this->getAttribute($_video_, "height");
            echo "\" >
      <param name=\"src\" value=\"";
            // line 4
            if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
            echo $this->getAttribute($_video_, "url");
            echo "\">
      <param name=\"autoplay\" value=\"false\">
      <param name=\"controller\" value=\"true\">
      <embed src=\"";
            // line 7
            if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
            echo $this->getAttribute($_video_, "url");
            echo "\" width=\"";
            if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
            echo $this->getAttribute($_video_, "width");
            echo "\" height=\"";
            if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
            echo $this->getAttribute($_video_, "height");
            echo "\" autoplay=\"false\" controller=\"true\" pluginspage=\"http://www.apple.com/quicktime/download/\"></embed>
    </object>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/assets/video.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
