<?php

/* partials/navigation/navigation.html */
class __TwigTemplate_8d74977d2afdaac1a248607c675dc437 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul id=\"navigation\" class=\"col two\">
  ";
        // line 2
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "root"));
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
            // line 3
            echo "    <li>
      <a href=\"";
            // line 4
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->getAttribute($_child_, "url");
            echo "\">";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->getAttribute($_child_, "title");
            echo "</a>
      ";
            // line 5
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            $this->env->loadTemplate("partials/navigation/children.html")->display(array_merge($context, array("page" => $_child_)));
            // line 6
            echo "    </li>
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
        // line 8
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "partials/navigation/navigation.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
