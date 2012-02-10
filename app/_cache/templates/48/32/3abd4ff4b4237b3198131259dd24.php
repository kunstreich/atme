<?php

/* json_feed.json */
class __TwigTemplate_48323abd4ff4b4237b3198131259dd24 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "  ";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if ($this->getAttribute($_page_, "children")) {
                // line 3
                echo "    \"pages\": [
      ";
                // line 4
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "children"));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 5
                    echo "        {
          \"title\": \"";
                    // line 6
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo $this->getAttribute($_page_, "title");
                    echo "\",
          \"thumb\": \"";
                    // line 7
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo $this->getAttribute($this->getAttribute($_page_, "thumb"), "url");
                    echo "\",
          \"url\": \"";
                    // line 8
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo $this->getAttribute($_page_, "url");
                    echo "\",
          \"date\": \"";
                    // line 9
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo $this->getAttribute($_page_, "date");
                    echo "\",
          \"updated\": \"";
                    // line 10
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo $this->getAttribute($_page_, "updated");
                    echo "\",
          \"title\": \"";
                    // line 11
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo $this->getAttribute($_page_, "title");
                    echo "\",
          \"content\": \"";
                    // line 12
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo $this->getAttribute($_page_, "content");
                    echo "\",
          \"images\": [
            ";
                    // line 14
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "images"));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 15
                        echo "              { \"url\": \"";
                        if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                        echo $this->getAttribute($_image_, "url");
                        echo "\", \"name\": \"";
                        if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                        echo $this->getAttribute($_image_, "name");
                        echo "\" },
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 17
                    echo "          ],
        },
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 20
                echo "    ]
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "json_feed.json";
    }

    public function isTraitable()
    {
        return false;
    }
}
