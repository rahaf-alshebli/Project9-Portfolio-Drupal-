<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/yg_business_line/templates/page--front.html.twig */
class __TwigTemplate_54c917a86ce4315e86ec82f8cb6c75b6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'slider' => [$this, 'block_slider'],
            'header' => [$this, 'block_header'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "<!-- Header --> 
";
        // line 60
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 60), "fluid_container", [], "any", false, false, true, 60)) ? ("container-fluid") : (""));
        // line 61
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 61) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 61))) {
            // line 62
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 62)) {
                // line 63
                echo "      <nav id=\"menu\" class=\"navbar navbar-default navbar-fixed-top\">
          <div class=\"container\">    
              <div class=\"navbar-header\">
                 ";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "
                  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button> 
              </div>  
              <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                ";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "
              </div>   
          </div>
      </nav>
    ";
            }
            // line 74
            echo "  
  ";
        }
        // line 75
        echo "  
";
        // line 77
        $this->displayBlock('main', $context, $blocks);
        // line 134
        echo "<!--Call to Action Section -->
<section id=\"call-to-action\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-sm-8 col-xs-12 details-section wow fadeInLeft\">
        <h2>";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["buy_now_text"] ?? null), 139, $this->source), "html", null, true);
        echo "</h2>
      </div>
      <div class=\"col-md-4 col-sm-4 col-xs-12 text-center wow fadeInLeft\">
        <a href=\"";
        // line 142
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_link"] ?? null), 142, $this->source), "html", null, true);
        echo "\" class=\"text-right\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_text"] ?? null), 142, $this->source), "html", null, true);
        echo "</a>
      </div>    
    </div>
  </div>
</section>

<!-- Footer Section -->
  ";
        // line 149
        $this->displayBlock('footer', $context, $blocks);
        // line 187
        echo "<section id=\"copyright\">
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 col-sm-12\">
          <div class=\"text-center\">
            <p>@2018. <a href=\"\">YG Business Line</a> All Rights Reserved.</p>
            <p>Theme By <a href=\"#\">Drupal Developers Studio</a>. A Division of <a href=\"www.youngglobes.com\">Young Globes</a></p>
          </div>
        </div>
    </div>        
</section>
";
    }

    // line 77
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "<div role=\"main\" class=\"js-quickedit-main-content\">
  <div class=\"\">
    ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 80)) {
            // line 81
            echo "      ";
            $this->displayBlock('slider', $context, $blocks);
            // line 84
            echo "    ";
        }
        // line 85
        echo "    ";
        // line 86
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 86)) {
            // line 87
            echo "      ";
            $this->displayBlock('header', $context, $blocks);
            // line 90
            echo "    ";
        }
        // line 91
        echo "    ";
        // line 92
        echo "    ";
        // line 93
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 94
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 94) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 94))) ? ("") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 95
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 95) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 95)))) ? ("") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 96
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 96) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 96)))) ? ("") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 97
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 97)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 97)))) ? ("") : (""))];
        // line 100
        echo "    <section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 100), 100, $this->source), "html", null, true);
        echo ">   
      ";
        // line 102
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 102)) {
            // line 103
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 106
            echo "      ";
        }
        // line 107
        echo "      ";
        // line 108
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 109
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 112
            echo "        ";
        }
        // line 113
        echo "      ";
        // line 114
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 115
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 118
            echo "        ";
        }
        // line 119
        echo "      ";
        // line 120
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 120)) {
            // line 121
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 124
            echo "        ";
        }
        // line 125
        echo "      ";
        // line 126
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 130
        echo "      </section>
   </div>
   </div>
";
    }

    // line 81
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "    
      ";
    }

    // line 87
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "        <div class=\"col-sm-12\" role=\"heading\"></div>
      ";
    }

    // line 103
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "          <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "</div>
        ";
    }

    // line 109
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 110, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 115
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 116, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 121
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 126
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "          <a id=\"main-content\"></a>
          ";
        // line 128
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 149
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "<section id=\"footer\">
    <div class=\"container wow fadeInLeft\">
      <div class=\"row\">
        <div class=\"col-md-4 col-sm-3 col-xs-12\"> 
         <div class=\"footer-about-us\">
            <h3>";
        // line 155
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 155, $this->source), "html", null, true);
        echo "</h3>
            <p>";
        // line 156
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 156, $this->source), "html", null, true);
        echo "</p>
            <p>";
        // line 157
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null), 157, $this->source), "html", null, true);
        echo "</p>
          </div>
        </div>  
        <div class=\"col-md-2 col-sm-3 col-xs-12\">
            <div class=\"footer-menu\">
              <h3>Pages</h3> 
              ";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
        echo "      
        </div>
    </div>
    <div class=\"col-md-3 col-sm-3 col-xs-12\">
            <div class=\"footer-menu\">
              <h3>Recent blocks</h3> 
              ";
        // line 169
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_blog", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
        echo "       
        </div>
    </div>
    <div class=\"col-md-3 col-sm-3 col-xs-12\">
        <div>
          <h3>Social Links</h3>
          <div class=\"footer-social\">
            <a href=\"";
        // line 176
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 176, $this->source), "html", null, true);
        echo "\" class=\"fa fa-facebook\"></a>
            <a href=\"";
        // line 177
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 177, $this->source), "html", null, true);
        echo "\" class=\"fa fa-twitter\"></a>
            <a href=\"";
        // line 178
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus"] ?? null), 178, $this->source), "html", null, true);
        echo "\" class=\"fa fa-google-plus\"></a>  
          </div>       
        </div>
      </div>
 
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_business_line/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 178,  354 => 177,  350 => 176,  340 => 169,  331 => 163,  322 => 157,  318 => 156,  314 => 155,  307 => 150,  303 => 149,  297 => 128,  294 => 127,  290 => 126,  283 => 122,  279 => 121,  272 => 116,  268 => 115,  261 => 110,  257 => 109,  250 => 104,  246 => 103,  241 => 88,  237 => 87,  230 => 82,  226 => 81,  219 => 130,  216 => 126,  214 => 125,  211 => 124,  208 => 121,  205 => 120,  203 => 119,  200 => 118,  197 => 115,  194 => 114,  192 => 113,  189 => 112,  186 => 109,  183 => 108,  181 => 107,  178 => 106,  175 => 103,  172 => 102,  167 => 100,  165 => 97,  164 => 96,  163 => 95,  162 => 94,  161 => 93,  159 => 92,  157 => 91,  154 => 90,  151 => 87,  148 => 86,  146 => 85,  143 => 84,  140 => 81,  138 => 80,  134 => 78,  130 => 77,  115 => 187,  113 => 149,  101 => 142,  95 => 139,  88 => 134,  86 => 77,  83 => 75,  79 => 74,  71 => 70,  64 => 66,  59 => 63,  56 => 62,  53 => 61,  51 => 60,  48 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_business_line/templates/page--front.html.twig", "C:\\xampp\\htdocs\\port\\themes\\contrib\\yg_business_line\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 60, "if" => 61, "block" => 77);
        static $filters = array("escape" => 66);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
