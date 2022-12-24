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

/* themes/contrib/yg_business/templates/page--front.html.twig */
class __TwigTemplate_daef5d7c3e376792cfafe65a5b0471a7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<!--  header section -->
     <header id=\"header\">
     <div class=\"container\">
     <nav class=\"navbar navbar-expand-lg navbar-light navbar-fixed-top\" id=\"mainNav\">
        ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"  aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <i class=\"fa fa-bars\"></i>
        </button>
          ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
      </nav>
      </div>
    </header>
  <!--  End header section-->
  
  <!-- Tabs -->
  ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
  <!-- Content -->  
  ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
  
  <!-- FOOTER SECTION-->
    <section id=\"footer\">
      <div class=\"container wow fadeInUp\">
        <div class=\"row footer-bottom\">
          <div class=\"col-md-5 col-sm-12 footer-columns wow fadeInLeft\">
            <h6>";
        // line 26
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["about_us_title"] ?? null)))) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["about_us_title"] ?? null), 26, $this->source), "html", null, true);
        }
        echo "</h6>
            <p>";
        // line 27
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["about_desc"] ?? null)))) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["about_desc"] ?? null), 27, $this->source), "html", null, true);
        }
        echo "</p>
          </div>
          <div class=\"col-md-3 col-sm-12 footer-bottom-col2 wow fadeInUp\">
            ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
          </div>
          <div class=\"col-md-4 col-sm-12 footer-bottom-col3 wow fadeInRight\">
          <h6>";
        // line 33
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["title"] ?? null)))) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 33, $this->source), "html", null, true);
        }
        echo "</h6>
            ";
        // line 34
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["address"] ?? null)))) {
            echo "<p>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address"] ?? null), 34, $this->source), "html", null, true);
            echo "</p>";
        }
        // line 35
        echo "            ";
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["contact_number"] ?? null)))) {
            // line 36
            echo "              <p><a href=\"tel:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_number"] ?? null), 36, $this->source), "html", null, true);
            echo "\">
                <i class=\"fa fa-phone\"></i>";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_number"] ?? null), 37, $this->source), "html", null, true);
            echo "</a>
               </p>
            ";
        }
        // line 40
        echo "            ";
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mail"] ?? null)))) {
            // line 41
            echo "              <p><a href=\"mailto:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null), 41, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-envelope\"></i>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null), 41, $this->source), "html", null, true);
            echo "</a></p>
            ";
        }
        // line 43
        echo "            </div>
          </div>
        </div>
      </div>
    </section>

    <div class=\"footer-menu-social\">
     <div class=\"container\">
     <div class=\"row\">  
      <div class=\"col-md-8 mx-auto footer-social wow fadeInDown\">
        ";
        // line 53
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["facebook_url"] ?? null)))) {
            // line 54
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 54, $this->source), "html", null, true);
            echo "\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
        ";
        }
        // line 56
        echo "        ";
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["twitter_url"] ?? null)))) {
            // line 57
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 57, $this->source), "html", null, true);
            echo "\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a>
        ";
        }
        // line 58
        echo "  
        ";
        // line 59
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pinterest_url"] ?? null)))) {
            // line 60
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 60, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
        ";
        }
        // line 61
        echo "  
        ";
        // line 62
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["linkedin_url"] ?? null)))) {
            // line 63
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 63, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
        ";
        }
        // line 64
        echo "    
        ";
        // line 65
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["instagram_url"] ?? null)))) {
            // line 66
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 66, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
        ";
        }
        // line 67
        echo "       
        ";
        // line 68
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["youtube_url"] ?? null)))) {
            // line 69
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 69, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a>
        ";
        }
        // line 70
        echo "     
      </div>
      <div class=\"col-md-6 mx-auto text-center copyright wow fadeInUp\"> 
        <p> &copy;2018.<span>YG Business</span>.All Rights Reserved.<br></p>
        <p class=\"our-info\">Theme By<a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\"> Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\" target=\"_blank\">Young Globes</a></p>  
      </div>
     </div>
     </div>
  </div>
<!-- END FOOTER SECTION -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_business/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 70,  202 => 69,  200 => 68,  197 => 67,  191 => 66,  189 => 65,  186 => 64,  180 => 63,  178 => 62,  175 => 61,  169 => 60,  167 => 59,  164 => 58,  158 => 57,  155 => 56,  149 => 54,  147 => 53,  135 => 43,  127 => 41,  124 => 40,  118 => 37,  113 => 36,  110 => 35,  104 => 34,  98 => 33,  92 => 30,  84 => 27,  78 => 26,  68 => 19,  63 => 17,  53 => 10,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_business/templates/page--front.html.twig", "C:\\xampp\\htdocs\\port\\themes\\contrib\\yg_business\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26);
        static $filters = array("escape" => 6, "render" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render'],
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
