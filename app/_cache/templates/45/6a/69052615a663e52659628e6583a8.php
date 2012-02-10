<?php

/* default.html */
class __TwigTemplate_456a69052615a663e52659628e6583a8 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\"
  \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
  <head>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\">
    <title>";
        // line 6
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo "'s Portfolio </title>
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 7
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/?/feed/\">
    ";
        // line 8
        $this->env->loadTemplate("partials/styles.html")->display($context);
        // line 9
        echo "  </head>
  <body>
    <div id=\"container\">
      <h1 class=\"col three\">
        <a href=\"";
        // line 13
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "\">";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo "</a>
        <strong>";
        // line 14
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "profession");
        echo "</strong>
      </h1>
      <em class=\"col three\">";
        // line 16
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "email");
        echo "</em>
      <hr>
      ";
        // line 18
        $this->env->loadTemplate("partials/navigation/navigation.html")->display($context);
        // line 19
        echo "      <div id=\"content\" class=\"col eight\">
        ";
        // line 20
        $this->env->loadTemplate("partials/navigation/category-lists.html")->display($context);
        // line 21
        echo "      </div>
      <hr>
      <p id=\"footer\" class=\"col six\">&copy; Copyright ";
        // line 23
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo " ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "current_year");
        echo " <a class=\"atom-rss\" href=\"";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/?/feed/\">RSS</a><br>
        <em>Content managed by <a href=\"http://www.staceyapp.com\">stacey</a></em></p>
    </div>
    ";
        // line 26
        $this->env->loadTemplate("partials/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
