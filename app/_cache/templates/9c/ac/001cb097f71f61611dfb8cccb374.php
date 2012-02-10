<?php

/* page.html */
class __TwigTemplate_9cac001cb097f71f61611dfb8cccb374 extends Twig_Template
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
        echo $this->getAttribute($_page_, "title");
        echo ", ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo "'s Portfolio </title>
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 7
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/?/feed/\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/public/docs/css/screen.css\" type=\"text/css\" media=\"screen\"> 
  </head>
  <body>
    <div id=\"container\" class=\"";
        // line 11
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "id");
        echo "\">
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
        <p class=\"date col one\">&para;</p>
        <div class=\"description col six\">
          <h2 class=\"col six\"><a href=\"";
        // line 22
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "\">";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "</a></h2>
          ";
        // line 23
        $this->env->loadTemplate("partials/assets/images.html")->display($context);
        // line 24
        echo "          ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content");
        echo "
          ";
        // line 25
        $this->env->loadTemplate("partials/assets/pdfs.html")->display($context);
        // line 26
        echo "        </div>
      </div>
      <hr>
      <p id=\"footer\" class=\"col six\">&copy; Copyright ";
        // line 29
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
    <script src=\"";
        // line 32
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/public/docs/js/jquery-1.3.2.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
