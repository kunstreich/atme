<?php

/* partials/navigation/children.html */
class __TwigTemplate_3d122d2755ceea58cce86d16ee60eb2c extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "children")) {
            // line 2
            echo "  <ol class=\"children\">
    ";
            // line 3
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "children"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 4
                echo "      <li>
        <a href=\"";
                // line 5
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "url");
                echo "\">";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "page_name");
                echo "</a>
        ";
                // line 6
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                $this->env->loadTemplate("partials/navigation/children.html")->display(array_merge($context, array("page" => $_child_)));
                // line 7
                echo "      </li>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 9
            echo "  </ol>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/navigation/children.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
