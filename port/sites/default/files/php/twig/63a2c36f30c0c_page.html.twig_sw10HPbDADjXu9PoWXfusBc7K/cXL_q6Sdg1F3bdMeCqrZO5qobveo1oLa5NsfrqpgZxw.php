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

/* themes/contrib/corporation/templates/page.html.twig */
class __TwigTemplate_2e33617619bb886bb5f96ad308b4367e extends \Twig\Template
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
        echo "<div id=\"page-preloader\">
  <div class=\"spinner\">
  <div class=\"cube1\"></div>
  <div class=\"cube2\"></div>
</div>
</div>
<a name=\"Top\" id=\"Top\"></a>

<div id=\"color\" class=\"default\">
<header id=\"header\" class=\"header\" role=\"header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"staticPanel\">
        <div class=\"top_header col-lg-4 col-md-4 col-sm-4 col-xs-12\">
          ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
        </div>

        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 18)) {
            // line 19
            echo "          
          ";
            // line 32
            echo "          <nav id=\"site-navigation\" class=\"navbar navbar-default col-lg-8 col-md-8 col-sm-8 col-xs-12\" role=\"navigation\">
              <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navbar-collapse\">
                     <i class=\"fa fa-bars\"></i>
                   </button>
                  <div id=\"main-navbar-collapse\" class=\"navbar-collapse collapse\">
                      ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "
                  </div>
              </div>
          </nav><!-- #site-navigation -->
        ";
        }
        // line 43
        echo "      </div>

    ";
        // line 45
        if ((($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) {
            // line 46
            echo "      <div class=\"col-lg-8\">
        <nav id=\"navigation\" class=\"navigation\" role=\"navigation\">
          <div class=\"container\">
            ";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu"] ?? null), 49, $this->source), "html", null, true);
            echo "
            ";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_menu"] ?? null), 50, $this->source), "html", null, true);
            echo "
          </div>
        </nav>
      </div>  
    ";
        }
        // line 55
        echo "
    ";
        // line 56
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 57
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 60
            echo "        ";
            if (($context["title"] ?? null)) {
                // line 61
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 62, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 62, $this->source), "html", null, true);
                echo "</a>
          </strong>
        ";
            } else {
                // line 65
                echo "          <h1 class=\"site-name\">
            <a href=\"";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 66, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 66, $this->source), "html", null, true);
                echo "</a>
          </h1>
        ";
            }
            // line 69
            echo "
        ";
            // line 70
            if (($context["site_slogan"] ?? null)) {
                // line 71
                echo "          <div class=\"site-slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 71, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 73
            echo "      </div>

   ";
        }
        // line 76
        echo "
   <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu-inner\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>

  </div>
  </div>
</header>

<div class=\"page\">
  ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 89)) {
            // line 90
            echo "    <section id=\"slideshow\" class=\"slideshow\">
      <div class=\"\">
        ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 96
        echo "
";
        // line 97
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 97) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 97)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 97)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 97))) {
            // line 98
            echo "  <div class=\"\">
    <div class=\"row\">
      ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 100)) {
                // line 101
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 101) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 101)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 101))) {
                    // line 102
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 103
($context["page"] ?? null), "top2", [], "any", false, false, true, 103) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 103))) {
                    // line 104
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 105
($context["page"] ?? null), "top2", [], "any", false, false, true, 105) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 105))) {
                    // line 106
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 107
($context["page"] ?? null), "top3", [], "any", false, false, true, 107) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 107))) {
                    // line 108
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 109
($context["page"] ?? null), "top2", [], "any", false, false, true, 109) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 109)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 109))) {
                    // line 110
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 112
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 114
                echo "          <div class=\"top1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 117
            echo "
      ";
            // line 118
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 118)) {
                // line 119
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 119) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 119)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 119))) {
                    // line 120
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 121
($context["page"] ?? null), "top1", [], "any", false, false, true, 121) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 121))) {
                    // line 122
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 123
($context["page"] ?? null), "top1", [], "any", false, false, true, 123) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 123))) {
                    // line 124
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 125
($context["page"] ?? null), "top3", [], "any", false, false, true, 125) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 125))) {
                    // line 126
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 127
($context["page"] ?? null), "top1", [], "any", false, false, true, 127) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 127)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 127))) {
                    // line 128
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 130
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 132
                echo "          <div class=\"top2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 135
            echo "
      ";
            // line 136
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 136)) {
                // line 137
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 137) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 137)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 137))) {
                    // line 138
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 139
($context["page"] ?? null), "top1", [], "any", false, false, true, 139) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 139))) {
                    // line 140
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 141
($context["page"] ?? null), "top1", [], "any", false, false, true, 141) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 141))) {
                    // line 142
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 143
($context["page"] ?? null), "top2", [], "any", false, false, true, 143) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 143))) {
                    // line 144
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 145
($context["page"] ?? null), "top1", [], "any", false, false, true, 145) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 145)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 145))) {
                    // line 146
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 148
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 150
                echo "          <div class=\"top3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 153
            echo "
      ";
            // line 154
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 154)) {
                // line 155
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 155) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 155)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 155))) {
                    // line 156
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 157
($context["page"] ?? null), "top1", [], "any", false, false, true, 157) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 157))) {
                    // line 158
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 159
($context["page"] ?? null), "top1", [], "any", false, false, true, 159) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 159))) {
                    // line 160
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 161
($context["page"] ?? null), "top2", [], "any", false, false, true, 161) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 161))) {
                    // line 162
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 163
($context["page"] ?? null), "top1", [], "any", false, false, true, 163) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 163)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 163))) {
                    // line 164
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 166
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 168
                echo "          <div class=\"top4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 171
            echo "
    </div>
  </div>
";
        }
        // line 175
        echo "
";
        // line 176
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "post_information", [], "any", false, false, true, 176)) {
            // line 177
            echo "  <div class=\"post_information\">
      <div class=\"container\">
        ";
            // line 179
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "post_information", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "
      </div>
  </div>
";
        }
        // line 183
        echo "

";
        // line 185
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_info", [], "any", false, false, true, 185)) {
            // line 186
            echo "  <div class=\"post_info\">
    <div class=\"bg_efect_top\">
      <div class=\"section_one trnsform3d scale3d\"></div>
    </div>
    <div class=\"section_two\">
        <div class=\"top_info\">";
            // line 191
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_info", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
            echo "</div>
    </div>
  </div>
";
        }
        // line 195
        echo "

";
        // line 197
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 197) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 197)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 197)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 197))) {
            // line 198
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 200
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 200)) {
                // line 201
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 201) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 201)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 201))) {
                    // line 202
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 203
($context["page"] ?? null), "top_content2", [], "any", false, false, true, 203) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 203))) {
                    // line 204
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 205
($context["page"] ?? null), "top_content2", [], "any", false, false, true, 205) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 205))) {
                    // line 206
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 207
($context["page"] ?? null), "top_content3", [], "any", false, false, true, 207) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 207))) {
                    // line 208
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 209
($context["page"] ?? null), "top_content2", [], "any", false, false, true, 209) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 209)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 209))) {
                    // line 210
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 212
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 214
                echo "          <div class=\"top_content1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 217
            echo "
      ";
            // line 218
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 218)) {
                // line 219
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 219) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 219)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 219))) {
                    // line 220
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 221
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 221) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 221))) {
                    // line 222
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 223
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 223) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 223))) {
                    // line 224
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 225
($context["page"] ?? null), "top_content3", [], "any", false, false, true, 225) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 225))) {
                    // line 226
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 227
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 227) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 227)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 227))) {
                    // line 228
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 230
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 232
                echo "          <div class=\"top_content2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 232), 232, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 234
            echo "  

      ";
            // line 236
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 236)) {
                // line 237
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 237) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 237)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 237))) {
                    // line 238
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 239
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 239) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 239))) {
                    // line 240
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 241
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 241) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 241))) {
                    // line 242
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 243
($context["page"] ?? null), "top_content2", [], "any", false, false, true, 243) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 243))) {
                    // line 244
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 245
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 245) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 245)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 245))) {
                    // line 246
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 248
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 250
                echo "          <div class=\"top_content3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 250), 250, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 253
            echo "
      ";
            // line 254
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 254)) {
                // line 255
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 255) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 255)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 255))) {
                    // line 256
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 257
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 257) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 257))) {
                    // line 258
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 259
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 259) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 259))) {
                    // line 260
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 261
($context["page"] ?? null), "top_content2", [], "any", false, false, true, 261) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 261))) {
                    // line 262
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 263
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 263) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 263)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 263))) {
                    // line 264
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 266
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 268
                echo "          <div class=\"top4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 268), 268, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 271
            echo "
    </div>
  </div>
";
        }
        // line 275
        echo "
";
        // line 276
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 276) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 276)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 276)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 276))) {
            // line 277
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 279
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 279)) {
                // line 280
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 280) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 280)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 280))) {
                    // line 281
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 282
($context["page"] ?? null), "line2", [], "any", false, false, true, 282) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 282))) {
                    // line 283
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 284
($context["page"] ?? null), "line2", [], "any", false, false, true, 284) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 284))) {
                    // line 285
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 286
($context["page"] ?? null), "line3", [], "any", false, false, true, 286) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 286))) {
                    // line 287
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 288
($context["page"] ?? null), "line2", [], "any", false, false, true, 288) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 288)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 288))) {
                    // line 289
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 291
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 293
                echo "          <div class=\"line1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 293), 293, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 296
            echo "
      ";
            // line 297
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 297)) {
                // line 298
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 298) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 298)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 298))) {
                    // line 299
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 300
($context["page"] ?? null), "line1", [], "any", false, false, true, 300) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 300))) {
                    // line 301
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 302
($context["page"] ?? null), "line1", [], "any", false, false, true, 302) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 302))) {
                    // line 303
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 304
($context["page"] ?? null), "line3", [], "any", false, false, true, 304) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 304))) {
                    // line 305
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 306
($context["page"] ?? null), "line1", [], "any", false, false, true, 306) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 306)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 306))) {
                    // line 307
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 309
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 311
                echo "          <div class=\"line2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 311), 311, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 313
            echo "  

      ";
            // line 315
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 315)) {
                // line 316
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 316) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 316)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 316))) {
                    // line 317
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 318
($context["page"] ?? null), "line1", [], "any", false, false, true, 318) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 318))) {
                    // line 319
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 320
($context["page"] ?? null), "line1", [], "any", false, false, true, 320) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 320))) {
                    // line 321
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 322
($context["page"] ?? null), "line2", [], "any", false, false, true, 322) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 322))) {
                    // line 323
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 324
($context["page"] ?? null), "line1", [], "any", false, false, true, 324) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 324)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 324))) {
                    // line 325
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 327
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 329
                echo "          <div class=\"line3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 332
            echo "
      ";
            // line 333
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 333)) {
                // line 334
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 334) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 334)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 334))) {
                    // line 335
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 336
($context["page"] ?? null), "line1", [], "any", false, false, true, 336) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 336))) {
                    // line 337
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 338
($context["page"] ?? null), "line1", [], "any", false, false, true, 338) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 338))) {
                    // line 339
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 340
($context["page"] ?? null), "line2", [], "any", false, false, true, 340) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 340))) {
                    // line 341
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 342
($context["page"] ?? null), "line1", [], "any", false, false, true, 342) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 342)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 342))) {
                    // line 343
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 345
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 347
                echo "          <div class=\"line4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 347), 347, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 350
            echo "
    </div>
  </div>
";
        }
        // line 354
        echo "
";
        // line 355
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content", [], "any", false, false, true, 355)) {
            // line 356
            echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        ";
            // line 359
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content", [], "any", false, false, true, 359), 359, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 364
        echo "
";
        // line 365
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 365) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 365)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 365)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 365))) {
            // line 366
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 368
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 368)) {
                // line 369
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 369) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 369)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 369))) {
                    // line 370
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 371
($context["page"] ?? null), "feature2", [], "any", false, false, true, 371) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 371))) {
                    // line 372
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 373
($context["page"] ?? null), "feature2", [], "any", false, false, true, 373) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 373))) {
                    // line 374
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 375
($context["page"] ?? null), "feature3", [], "any", false, false, true, 375) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 375))) {
                    // line 376
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 377
($context["page"] ?? null), "feature2", [], "any", false, false, true, 377) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 377)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 377))) {
                    // line 378
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 380
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 382
                echo "          <div class=\"feature1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 382), 382, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 385
            echo "
      ";
            // line 386
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 386)) {
                // line 387
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 387) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 387)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 387))) {
                    // line 388
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 389
($context["page"] ?? null), "feature1", [], "any", false, false, true, 389) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 389))) {
                    // line 390
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 391
($context["page"] ?? null), "feature1", [], "any", false, false, true, 391) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 391))) {
                    // line 392
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 393
($context["page"] ?? null), "feature3", [], "any", false, false, true, 393) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 393))) {
                    // line 394
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 395
($context["page"] ?? null), "feature1", [], "any", false, false, true, 395) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 395)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 395))) {
                    // line 396
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 398
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 400
                echo "          <div class=\"feature2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 400), 400, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 403
            echo "
      ";
            // line 404
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 404)) {
                // line 405
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 405) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 405)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 405))) {
                    // line 406
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 407
($context["page"] ?? null), "feature1", [], "any", false, false, true, 407) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 407))) {
                    // line 408
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 409
($context["page"] ?? null), "feature1", [], "any", false, false, true, 409) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 409))) {
                    // line 410
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 411
($context["page"] ?? null), "feature2", [], "any", false, false, true, 411) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 411))) {
                    // line 412
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 413
($context["page"] ?? null), "feature1", [], "any", false, false, true, 413) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 413)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 413))) {
                    // line 414
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 416
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 418
                echo "          <div class=\"feature3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 418), 418, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 421
            echo "
      ";
            // line 422
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 422)) {
                // line 423
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 423) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 423)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 423))) {
                    // line 424
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 425
($context["page"] ?? null), "feature1", [], "any", false, false, true, 425) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 425))) {
                    // line 426
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 427
($context["page"] ?? null), "feature1", [], "any", false, false, true, 427) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 427))) {
                    // line 428
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 429
($context["page"] ?? null), "feature2", [], "any", false, false, true, 429) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 429))) {
                    // line 430
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 431
($context["page"] ?? null), "feature1", [], "any", false, false, true, 431) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 431)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 431))) {
                    // line 432
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 434
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 436
                echo "          <div class=\"feature4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 436), 436, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 439
            echo "
    </div>
  </div>
";
        }
        // line 443
        echo "
";
        // line 444
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 444) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 444)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 444)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 444))) {
            // line 445
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 447
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 447)) {
                // line 448
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 448) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 448)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 448))) {
                    // line 449
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 450
($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 450) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 450))) {
                    // line 451
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 452
($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 452) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 452))) {
                    // line 453
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 454
($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 454) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 454))) {
                    // line 455
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 456
($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 456) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 456)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 456))) {
                    // line 457
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 459
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 461
                echo "          <div class=\"contenttop1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 461), 461, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 464
            echo "
      ";
            // line 465
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 465)) {
                // line 466
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 466) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 466)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 466))) {
                    // line 467
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 468
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 468) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 468))) {
                    // line 469
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 470
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 470) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 470))) {
                    // line 471
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 472
($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 472) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 472))) {
                    // line 473
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 474
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 474) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 474)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 474))) {
                    // line 475
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 477
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 479
                echo "          <div class=\"contenttop2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 479), 479, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 482
            echo "
      ";
            // line 483
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 483)) {
                // line 484
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 484) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 484)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 484))) {
                    // line 485
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 486
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 486) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 486))) {
                    // line 487
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 488
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 488) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 488))) {
                    // line 489
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 490
($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 490) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 490))) {
                    // line 491
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 492
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 492) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 492)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 492))) {
                    // line 493
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 495
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 497
                echo "          <div class=\"contenttop3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 497), 497, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 500
            echo "
      ";
            // line 501
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 501)) {
                // line 502
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 502) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 502)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 502))) {
                    // line 503
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 504
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 504) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 504))) {
                    // line 505
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 506
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 506) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 506))) {
                    // line 507
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 508
($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 508) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 508))) {
                    // line 509
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 510
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 510) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 510)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 510))) {
                    // line 511
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 513
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 515
                echo "          <div class=\"contenttop4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 515), 515, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 518
            echo "
    </div>
  </div>
";
        }
        // line 522
        echo "
 


  
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 530
        if (($context["front_page"] ?? null)) {
            // line 531
            echo "
            ";
            // line 532
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 532)) {
                // line 533
                echo "              <div class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
                ";
                // line 534
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 534), 534, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 537
            echo "        
            <div class=\"content col-lg-";
            // line 538
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_width", [], "any", false, false, true, 538), 538, $this->source), "html", null, true);
            echo " col-md-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_width", [], "any", false, false, true, 538), 538, $this->source), "html", null, true);
            echo " col-sm-12 col-xs-12\">
              ";
            // line 539
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 539), 539, $this->source), "html", null, true);
            echo "

              ";
            // line 541
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 541, $this->source), "html", null, true);
            echo "
              ";
            // line 542
            if (($context["title"] ?? null)) {
                // line 543
                echo "                <h4>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 543, $this->source), "html", null, true);
                echo "</h4>
              ";
            }
            // line 545
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 545, $this->source), "html", null, true);
            echo "

              ";
            // line 547
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 547, $this->source), "html", null, true);
            echo "

              ";
            // line 549
            if (($context["action_links"] ?? null)) {
                // line 550
                echo "                <nav class=\"action-links\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 550, $this->source), "html", null, true);
                echo "</nav>
              ";
            }
            // line 552
            echo "
              ";
            // line 553
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 553), 553, $this->source), "html", null, true);
            echo "
              ";
            // line 554
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 554, $this->source), "html", null, true);
            echo "
            </div>

            ";
            // line 557
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 557)) {
                // line 558
                echo "              <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
                ";
                // line 559
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 559), 559, $this->source), "html", null, true);
                echo "
              </aside>
            ";
            }
            // line 562
            echo "
        ";
        } else {
            // line 564
            echo "
          ";
            // line 565
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 565)) {
                // line 566
                echo "            <div class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
              ";
                // line 567
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 567), 567, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 570
            echo "    
          <div class=\"content col-lg-";
            // line 571
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_width", [], "any", false, false, true, 571), 571, $this->source), "html", null, true);
            echo " col-md-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_width", [], "any", false, false, true, 571), 571, $this->source), "html", null, true);
            echo " col-sm-12 col-xs-12\">
            ";
            // line 572
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 572), 572, $this->source), "html", null, true);
            echo "

            ";
            // line 574
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 574, $this->source), "html", null, true);
            echo "

             ";
            // line 576
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 576, $this->source), "html", null, true);
            echo "
              ";
            // line 577
            if (($context["title"] ?? null)) {
                // line 578
                echo "                <h2>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 578, $this->source), "html", null, true);
                echo "</h2>
              ";
            }
            // line 580
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 580, $this->source), "html", null, true);
            echo "

            ";
            // line 582
            if (($context["action_links"] ?? null)) {
                // line 583
                echo "              <nav class=\"action-links\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 583, $this->source), "html", null, true);
                echo "</nav>
            ";
            }
            // line 585
            echo "              <div class=\"test_class\">
            ";
            // line 586
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 586), 586, $this->source), "html", null, true);
            echo "
            </div>
            ";
            // line 588
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 588, $this->source), "html", null, true);
            echo "
          </div>

          ";
            // line 591
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 591)) {
                // line 592
                echo "            <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
              ";
                // line 593
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 593), 593, $this->source), "html", null, true);
                echo "
            </aside>
          ";
            }
            // line 596
            echo "        ";
        }
        echo "     
      </div>
    </div>

  ";
        // line 600
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 600)) {
            // line 601
            echo "    <section id=\"featured\" class=\"featured\">
      <div class=\"container\">
        ";
            // line 603
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 603), 603, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 607
        echo "
  ";
        // line 608
        if (($context["messages"] ?? null)) {
            // line 609
            echo "    <section id=\"messages\" class=\"messages\">
      <div class=\"container\">
        ";
            // line 611
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 611, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 615
        echo "
  ";
        // line 616
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 616)) {
            // line 617
            echo "    <section id=\"help\" class=\"help\">
      <div class=\"container\">
        ";
            // line 619
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 619), 619, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 623
        echo "
  ";
        // line 624
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 624) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 624)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 624)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 624))) {
            // line 625
            echo "  <div class=\"\">
    <div class=\"row\">
      ";
            // line 627
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 627)) {
                // line 628
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 628) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 628)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 628))) {
                    // line 629
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 630
($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 630) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 630))) {
                    // line 631
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 632
($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 632) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 632))) {
                    // line 633
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 634
($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 634) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 634))) {
                    // line 635
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 636
($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 636) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 636)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 636))) {
                    // line 637
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 639
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 641
                echo "          <div class=\"contentbottom1\">
            <div class=\"bottom_info_one\">
              ";
                // line 643
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 643), 643, $this->source), "html", null, true);
                echo "
            </div>
            <div class=\"bg_efect\">
              <div class=\"bottom_info_two trnsform3d scale3d\"></div>
            </div>
          </div>
        </div>
      ";
            }
            // line 651
            echo "
      ";
            // line 652
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 652)) {
                // line 653
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 653) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 653)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 653))) {
                    // line 654
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 655
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 655) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 655))) {
                    // line 656
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 657
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 657) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 657))) {
                    // line 658
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 659
($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 659) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 659))) {
                    // line 660
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 661
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 661) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 661)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 661))) {
                    // line 662
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 664
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 666
                echo "          <div class=\"contentbottom2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 666), 666, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 669
            echo "
      ";
            // line 670
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 670)) {
                // line 671
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 671) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 671)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 671))) {
                    // line 672
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 673
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 673) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 673))) {
                    // line 674
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 675
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 675) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 675))) {
                    // line 676
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 677
($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 677) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 677))) {
                    // line 678
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 679
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 679) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 679)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 679))) {
                    // line 680
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 682
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 684
                echo "          <div class=\"contentbottom3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 684), 684, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 687
            echo "
      ";
            // line 688
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 688)) {
                // line 689
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 689) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 689)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 689))) {
                    // line 690
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 691
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 691) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 691))) {
                    // line 692
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 693
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 693) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 693))) {
                    // line 694
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 695
($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 695) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 695))) {
                    // line 696
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 697
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 697) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 697)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 697))) {
                    // line 698
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 700
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 702
                echo "          <div class=\"contentbottom4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 702), 702, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 705
            echo "
    </div>
  </div>
";
        }
        // line 709
        echo "
";
        // line 710
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 710) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 710)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 710)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 710))) {
            // line 711
            echo "  <div class=\"\">
    <div class=\"row\">
      ";
            // line 713
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 713)) {
                // line 714
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 714) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 714)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 714))) {
                    // line 715
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 716
($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 716) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 716))) {
                    // line 717
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 718
($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 718) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 718))) {
                    // line 719
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 720
($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 720) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 720))) {
                    // line 721
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 722
($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 722) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 722)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 722))) {
                    // line 723
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 725
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 727
                echo "          <div class=\"bottom_line1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 727), 727, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 730
            echo "
      ";
            // line 731
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 731)) {
                // line 732
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 732) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 732)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 732))) {
                    // line 733
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 734
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 734) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 734))) {
                    // line 735
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 736
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 736) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 736))) {
                    // line 737
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 738
($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 738) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 738))) {
                    // line 739
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 740
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 740) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 740)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 740))) {
                    // line 741
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 743
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 745
                echo "          <div class=\"bottom_line2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 745), 745, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 748
            echo "
      ";
            // line 749
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 749)) {
                // line 750
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 750) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 750)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 750))) {
                    // line 751
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 752
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 752) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 752))) {
                    // line 753
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 754
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 754) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 754))) {
                    // line 755
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 756
($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 756) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 756))) {
                    // line 757
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 758
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 758) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 758)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 758))) {
                    // line 759
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 761
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 763
                echo "          <div class=\"bottom_line3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 763), 763, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 766
            echo "
      ";
            // line 767
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 767)) {
                // line 768
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 768) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 768)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 768))) {
                    // line 769
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 770
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 770) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 770))) {
                    // line 771
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 772
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 772) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 772))) {
                    // line 773
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 774
($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 774) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 774))) {
                    // line 775
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 776
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 776) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 776)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 776))) {
                    // line 777
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 779
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 781
                echo "          <div class=\"bottom_line4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 781), 781, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 784
            echo "
    </div>
  </div>
";
        }
        // line 788
        echo "
";
        // line 789
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 789) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 789)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 789)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 789))) {
            // line 790
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 792
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 792)) {
                // line 793
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 793) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 793)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 793))) {
                    // line 794
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 795
($context["page"] ?? null), "bottom2", [], "any", false, false, true, 795) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 795))) {
                    // line 796
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 797
($context["page"] ?? null), "bottom2", [], "any", false, false, true, 797) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 797))) {
                    // line 798
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 799
($context["page"] ?? null), "bottom3", [], "any", false, false, true, 799) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 799))) {
                    // line 800
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 801
($context["page"] ?? null), "bottom2", [], "any", false, false, true, 801) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 801)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 801))) {
                    // line 802
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 804
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 806
                echo "          <div class=\"bottom1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 806), 806, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 809
            echo "
      ";
            // line 810
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 810)) {
                // line 811
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 811) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 811)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 811))) {
                    // line 812
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 813
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 813) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 813))) {
                    // line 814
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 815
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 815) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 815))) {
                    // line 816
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 817
($context["page"] ?? null), "bottom3", [], "any", false, false, true, 817) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 817))) {
                    // line 818
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 819
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 819) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 819)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 819))) {
                    // line 820
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 822
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 824
                echo "          <div class=\"bottom2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 824), 824, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 827
            echo "
      ";
            // line 828
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 828)) {
                // line 829
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 829) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 829)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 829))) {
                    // line 830
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 831
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 831) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 831))) {
                    // line 832
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 833
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 833) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 833))) {
                    // line 834
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 835
($context["page"] ?? null), "bottom2", [], "any", false, false, true, 835) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 835))) {
                    // line 836
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 837
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 837) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 837)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 837))) {
                    // line 838
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 840
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 842
                echo "          <div class=\"bottom3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 842), 842, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 845
            echo "
      ";
            // line 846
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 846)) {
                // line 847
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 847) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 847)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 847))) {
                    // line 848
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 849
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 849) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 849))) {
                    // line 850
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 851
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 851) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 851))) {
                    // line 852
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 853
($context["page"] ?? null), "bottom2", [], "any", false, false, true, 853) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 853))) {
                    // line 854
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 855
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 855) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 855)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 855))) {
                    // line 856
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 858
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 860
                echo "          <div class=\"bottom4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 860), 860, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 863
            echo "
    </div>
  </div>
";
        }
        // line 867
        echo "
";
        // line 868
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 868) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 868)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 868)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 868))) {
            // line 869
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 871
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 871)) {
                // line 872
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 872) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 872)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 872))) {
                    // line 873
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 874
($context["page"] ?? null), "last2", [], "any", false, false, true, 874) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 874))) {
                    // line 875
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 876
($context["page"] ?? null), "last2", [], "any", false, false, true, 876) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 876))) {
                    // line 877
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 878
($context["page"] ?? null), "last3", [], "any", false, false, true, 878) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 878))) {
                    // line 879
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 880
($context["page"] ?? null), "last2", [], "any", false, false, true, 880) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 880)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 880))) {
                    // line 881
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 883
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 885
                echo "          <div class=\"last1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 885), 885, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 888
            echo "
      ";
            // line 889
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 889)) {
                // line 890
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 890) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 890)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 890))) {
                    // line 891
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 892
($context["page"] ?? null), "last1", [], "any", false, false, true, 892) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 892))) {
                    // line 893
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 894
($context["page"] ?? null), "last1", [], "any", false, false, true, 894) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 894))) {
                    // line 895
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 896
($context["page"] ?? null), "last3", [], "any", false, false, true, 896) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 896))) {
                    // line 897
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 898
($context["page"] ?? null), "last1", [], "any", false, false, true, 898) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 898)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 898))) {
                    // line 899
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 901
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 903
                echo "          <div class=\"last2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 903), 903, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 906
            echo "
      ";
            // line 907
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 907)) {
                // line 908
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 908) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 908)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 908))) {
                    // line 909
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 910
($context["page"] ?? null), "last1", [], "any", false, false, true, 910) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 910))) {
                    // line 911
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 912
($context["page"] ?? null), "last1", [], "any", false, false, true, 912) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 912))) {
                    // line 913
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 914
($context["page"] ?? null), "last2", [], "any", false, false, true, 914) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 914))) {
                    // line 915
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 916
($context["page"] ?? null), "last1", [], "any", false, false, true, 916) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 916)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 916))) {
                    // line 917
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 919
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 921
                echo "          <div class=\"last3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 921), 921, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 924
            echo "
      ";
            // line 925
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 925)) {
                // line 926
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 926) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 926)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 926))) {
                    // line 927
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 928
($context["page"] ?? null), "last1", [], "any", false, false, true, 928) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 928))) {
                    // line 929
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 930
($context["page"] ?? null), "last1", [], "any", false, false, true, 930) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 930))) {
                    // line 931
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 932
($context["page"] ?? null), "last2", [], "any", false, false, true, 932) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 932))) {
                    // line 933
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 934
($context["page"] ?? null), "last1", [], "any", false, false, true, 934) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 934)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 934))) {
                    // line 935
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 937
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 939
                echo "          <div class=\"last4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 939), 939, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 942
            echo "
    </div>
  </div>
";
        }
        // line 946
        echo "
  ";
        // line 947
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_first_1", [], "any", false, false, true, 947)) {
            // line 948
            echo "    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
            // line 952
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_first_1", [], "any", false, false, true, 952), 952, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 958
        echo "
  ";
        // line 959
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_1", [], "any", false, false, true, 959) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_2", [], "any", false, false, true, 959)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_3", [], "any", false, false, true, 959)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_4", [], "any", false, false, true, 959))) {
            // line 960
            echo "    <section id=\"panel_second\" class=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 964
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_1", [], "any", false, false, true, 964), 964, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 967
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_2", [], "any", false, false, true, 967), 967, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 970
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_3", [], "any", false, false, true, 970), 970, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 973
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_4", [], "any", false, false, true, 973), 973, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 979
        echo "
  ";
        // line 980
        if (($context["breadcrumb"] ?? null)) {
            // line 981
            echo "    <section id=\"breadcrumb\" class=\"breadcrumb\">
      <div class=\"container\">
        ";
            // line 983
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 983, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 987
        echo "  <!-- <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: block;\"></a>   -->        
</div>
  <footer id=\"footer\" class=\"site-footer\" role=\"contentinfo\">
    ";
        // line 990
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 990)) {
            // line 991
            echo "      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 993
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 993), 993, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 997
        echo "
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"layout-container\">
        ";
        // line 1001
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 1001) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 1001)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 1001)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 1001))) {
            // line 1002
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 1003
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 1003), 1003, $this->source), "html", null, true);
            echo "
            ";
            // line 1004
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 1004), 1004, $this->source), "html", null, true);
            echo "
            ";
            // line 1005
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 1005), 1005, $this->source), "html", null, true);
            echo "
            ";
            // line 1006
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 1006), 1006, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 1009
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 1009)) {
            // line 1010
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 1011
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 1011), 1011, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 1014
        echo "      </div>
      </div>
    </div>

    ";
        // line 1018
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1018) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1018)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1018)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1018))) {
            // line 1019
            echo "      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 1021
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1021)) {
                // line 1022
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1022) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1022)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1022))) {
                    // line 1023
                    echo "              <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1024
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1024) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1024))) {
                    // line 1025
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1026
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1026) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1026))) {
                    // line 1027
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1028
($context["page"] ?? null), "footer3", [], "any", false, false, true, 1028) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1028))) {
                    // line 1029
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 1030
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1030) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1030)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1030))) {
                    // line 1031
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1033
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1035
                echo "              <div class=\"footer1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1035), 1035, $this->source), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1038
            echo "
          ";
            // line 1039
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1039)) {
                // line 1040
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1040) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1040)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1040))) {
                    // line 1041
                    echo "              <div class=\"ol-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1042
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1042) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1042))) {
                    // line 1043
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1044
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1044) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1044))) {
                    // line 1045
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1046
($context["page"] ?? null), "footer3", [], "any", false, false, true, 1046) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1046))) {
                    // line 1047
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 1048
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1048) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1048)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1048))) {
                    // line 1049
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1051
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1053
                echo "              <div class=\"footer2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1053), 1053, $this->source), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1056
            echo "
          ";
            // line 1057
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1057)) {
                // line 1058
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1058) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1058)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1058))) {
                    // line 1059
                    echo "              <div class=\"ol-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1060
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1060) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1060))) {
                    // line 1061
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1062
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1062) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1062))) {
                    // line 1063
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1064
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1064) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1064))) {
                    // line 1065
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 1066
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1066) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1066)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1066))) {
                    // line 1067
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1069
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1071
                echo "              <div class=\"footer3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1071), 1071, $this->source), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1074
            echo "
          ";
            // line 1075
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1075)) {
                // line 1076
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1076) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1076)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1076))) {
                    // line 1077
                    echo "              <div class=\"ol-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1078
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1078) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1078))) {
                    // line 1079
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1080
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1080) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1080))) {
                    // line 1081
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1082
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1082) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1082))) {
                    // line 1083
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 1084
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1084) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1084)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1084))) {
                    // line 1085
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1087
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1089
                echo "              <div class=\"footer4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1089), 1089, $this->source), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1092
            echo "
          </div>

        ";
        }
        // line 1096
        echo "
        <div class=\"bottom_footer\">
        <div class=\"\">
          <div class=\"row\">
              ";
        // line 1100
        if (($context["show_hide_copyright"] ?? null)) {
            // line 1101
            echo "                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"copyright\">
                        <a href=\"";
            // line 1103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_url"] ?? null), 1103, $this->source), "html", null, true);
            echo "\" target=\"_blank\">
                          ";
            // line 1104
            echo t("Copyright @copyright_date @copyright_developedby", array("@copyright_date" =>             // line 1105
($context["copyright_date"] ?? null), "@copyright_developedby" => ($context["copyright_developedby"] ?? null), ));
            // line 1107
            echo "                        </a>
                    </div>
                </div>
              ";
        }
        // line 1111
        echo "
              <!-- <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                <div class=\"switchButton\">
                    <span class=\"bt-blue scrollup\"></span>
                    <span class=\"bt-lghtGre scrollup\"></span>
                    <span class=\"bt-orange scrollup\"></span>
                    <span class=\"bt-red scrollup\"></span>
                    <span class=\"bt-green scrollup\"></span>
                </div>
              </div> -->

              ";
        // line 1122
        if (($context["show_hide_icon"] ?? null)) {
            // line 1123
            echo "              <div class=\"socBox col-lg-6\">
                <ul class=\"socIcons\">
                    ";
            // line 1125
            $context["soc"] = ["fa-twitter" =>             // line 1126
($context["twitter"] ?? null), "fa-facebook" =>             // line 1127
($context["facebook"] ?? null), "fa-flickr" =>             // line 1128
($context["flickr"] ?? null), "fa-linkedin" =>             // line 1129
($context["linkedin"] ?? null), "fa-play" =>             // line 1130
($context["youtube"] ?? null), "fa-pinterest" =>             // line 1131
($context["pinterest"] ?? null), "fa-google-plus" =>             // line 1132
($context["google"] ?? null), "fa-dribbble" =>             // line 1133
($context["dribbble"] ?? null), "fa-vimeo-square" =>             // line 1134
($context["vimeo"] ?? null), "fa-instagram" =>             // line 1135
($context["instagram"] ?? null), "fa-vk" =>             // line 1136
($context["vk"] ?? null)];
            // line 1138
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["soc"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 1139
                echo "                        ";
                if ($context["value"]) {
                    // line 1140
                    echo "                          <li>
                              <a href=\"";
                    // line 1141
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 1141, $this->source), "html", null, true);
                    echo "\" target=\"_blank\">
                                  <i class=\"fa ";
                    // line 1142
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 1142, $this->source), "html", null, true);
                    echo "\"></i>
                              </a>
                          </li>
                        ";
                }
                // line 1146
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1147
            echo "                </ul>
            </div>
          ";
        }
        // line 1150
        echo "
          </div>
        </div>
        </div>
        </div>
  </footer>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/corporation/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2554 => 1150,  2549 => 1147,  2543 => 1146,  2536 => 1142,  2532 => 1141,  2529 => 1140,  2526 => 1139,  2521 => 1138,  2519 => 1136,  2518 => 1135,  2517 => 1134,  2516 => 1133,  2515 => 1132,  2514 => 1131,  2513 => 1130,  2512 => 1129,  2511 => 1128,  2510 => 1127,  2509 => 1126,  2508 => 1125,  2504 => 1123,  2502 => 1122,  2489 => 1111,  2483 => 1107,  2481 => 1105,  2480 => 1104,  2476 => 1103,  2472 => 1101,  2470 => 1100,  2464 => 1096,  2458 => 1092,  2451 => 1089,  2447 => 1087,  2443 => 1085,  2441 => 1084,  2438 => 1083,  2436 => 1082,  2433 => 1081,  2431 => 1080,  2428 => 1079,  2426 => 1078,  2423 => 1077,  2420 => 1076,  2418 => 1075,  2415 => 1074,  2408 => 1071,  2404 => 1069,  2400 => 1067,  2398 => 1066,  2395 => 1065,  2393 => 1064,  2390 => 1063,  2388 => 1062,  2385 => 1061,  2383 => 1060,  2380 => 1059,  2377 => 1058,  2375 => 1057,  2372 => 1056,  2365 => 1053,  2361 => 1051,  2357 => 1049,  2355 => 1048,  2352 => 1047,  2350 => 1046,  2347 => 1045,  2345 => 1044,  2342 => 1043,  2340 => 1042,  2337 => 1041,  2334 => 1040,  2332 => 1039,  2329 => 1038,  2322 => 1035,  2318 => 1033,  2314 => 1031,  2312 => 1030,  2309 => 1029,  2307 => 1028,  2304 => 1027,  2302 => 1026,  2299 => 1025,  2297 => 1024,  2294 => 1023,  2291 => 1022,  2289 => 1021,  2285 => 1019,  2283 => 1018,  2277 => 1014,  2271 => 1011,  2268 => 1010,  2265 => 1009,  2259 => 1006,  2255 => 1005,  2251 => 1004,  2247 => 1003,  2244 => 1002,  2242 => 1001,  2236 => 997,  2229 => 993,  2225 => 991,  2223 => 990,  2218 => 987,  2211 => 983,  2207 => 981,  2205 => 980,  2202 => 979,  2193 => 973,  2187 => 970,  2181 => 967,  2175 => 964,  2169 => 960,  2167 => 959,  2164 => 958,  2155 => 952,  2149 => 948,  2147 => 947,  2144 => 946,  2138 => 942,  2131 => 939,  2127 => 937,  2123 => 935,  2121 => 934,  2118 => 933,  2116 => 932,  2113 => 931,  2111 => 930,  2108 => 929,  2106 => 928,  2103 => 927,  2100 => 926,  2098 => 925,  2095 => 924,  2088 => 921,  2084 => 919,  2080 => 917,  2078 => 916,  2075 => 915,  2073 => 914,  2070 => 913,  2068 => 912,  2065 => 911,  2063 => 910,  2060 => 909,  2057 => 908,  2055 => 907,  2052 => 906,  2045 => 903,  2041 => 901,  2037 => 899,  2035 => 898,  2032 => 897,  2030 => 896,  2027 => 895,  2025 => 894,  2022 => 893,  2020 => 892,  2017 => 891,  2014 => 890,  2012 => 889,  2009 => 888,  2002 => 885,  1998 => 883,  1994 => 881,  1992 => 880,  1989 => 879,  1987 => 878,  1984 => 877,  1982 => 876,  1979 => 875,  1977 => 874,  1974 => 873,  1971 => 872,  1969 => 871,  1965 => 869,  1963 => 868,  1960 => 867,  1954 => 863,  1947 => 860,  1943 => 858,  1939 => 856,  1937 => 855,  1934 => 854,  1932 => 853,  1929 => 852,  1927 => 851,  1924 => 850,  1922 => 849,  1919 => 848,  1916 => 847,  1914 => 846,  1911 => 845,  1904 => 842,  1900 => 840,  1896 => 838,  1894 => 837,  1891 => 836,  1889 => 835,  1886 => 834,  1884 => 833,  1881 => 832,  1879 => 831,  1876 => 830,  1873 => 829,  1871 => 828,  1868 => 827,  1861 => 824,  1857 => 822,  1853 => 820,  1851 => 819,  1848 => 818,  1846 => 817,  1843 => 816,  1841 => 815,  1838 => 814,  1836 => 813,  1833 => 812,  1830 => 811,  1828 => 810,  1825 => 809,  1818 => 806,  1814 => 804,  1810 => 802,  1808 => 801,  1805 => 800,  1803 => 799,  1800 => 798,  1798 => 797,  1795 => 796,  1793 => 795,  1790 => 794,  1787 => 793,  1785 => 792,  1781 => 790,  1779 => 789,  1776 => 788,  1770 => 784,  1763 => 781,  1759 => 779,  1755 => 777,  1753 => 776,  1750 => 775,  1748 => 774,  1745 => 773,  1743 => 772,  1740 => 771,  1738 => 770,  1735 => 769,  1732 => 768,  1730 => 767,  1727 => 766,  1720 => 763,  1716 => 761,  1712 => 759,  1710 => 758,  1707 => 757,  1705 => 756,  1702 => 755,  1700 => 754,  1697 => 753,  1695 => 752,  1692 => 751,  1689 => 750,  1687 => 749,  1684 => 748,  1677 => 745,  1673 => 743,  1669 => 741,  1667 => 740,  1664 => 739,  1662 => 738,  1659 => 737,  1657 => 736,  1654 => 735,  1652 => 734,  1649 => 733,  1646 => 732,  1644 => 731,  1641 => 730,  1634 => 727,  1630 => 725,  1626 => 723,  1624 => 722,  1621 => 721,  1619 => 720,  1616 => 719,  1614 => 718,  1611 => 717,  1609 => 716,  1606 => 715,  1603 => 714,  1601 => 713,  1597 => 711,  1595 => 710,  1592 => 709,  1586 => 705,  1579 => 702,  1575 => 700,  1571 => 698,  1569 => 697,  1566 => 696,  1564 => 695,  1561 => 694,  1559 => 693,  1556 => 692,  1554 => 691,  1551 => 690,  1548 => 689,  1546 => 688,  1543 => 687,  1536 => 684,  1532 => 682,  1528 => 680,  1526 => 679,  1523 => 678,  1521 => 677,  1518 => 676,  1516 => 675,  1513 => 674,  1511 => 673,  1508 => 672,  1505 => 671,  1503 => 670,  1500 => 669,  1493 => 666,  1489 => 664,  1485 => 662,  1483 => 661,  1480 => 660,  1478 => 659,  1475 => 658,  1473 => 657,  1470 => 656,  1468 => 655,  1465 => 654,  1462 => 653,  1460 => 652,  1457 => 651,  1446 => 643,  1442 => 641,  1438 => 639,  1434 => 637,  1432 => 636,  1429 => 635,  1427 => 634,  1424 => 633,  1422 => 632,  1419 => 631,  1417 => 630,  1414 => 629,  1411 => 628,  1409 => 627,  1405 => 625,  1403 => 624,  1400 => 623,  1393 => 619,  1389 => 617,  1387 => 616,  1384 => 615,  1377 => 611,  1373 => 609,  1371 => 608,  1368 => 607,  1361 => 603,  1357 => 601,  1355 => 600,  1347 => 596,  1341 => 593,  1338 => 592,  1336 => 591,  1330 => 588,  1325 => 586,  1322 => 585,  1316 => 583,  1314 => 582,  1308 => 580,  1302 => 578,  1300 => 577,  1296 => 576,  1291 => 574,  1286 => 572,  1280 => 571,  1277 => 570,  1271 => 567,  1268 => 566,  1266 => 565,  1263 => 564,  1259 => 562,  1253 => 559,  1250 => 558,  1248 => 557,  1242 => 554,  1238 => 553,  1235 => 552,  1229 => 550,  1227 => 549,  1222 => 547,  1216 => 545,  1210 => 543,  1208 => 542,  1204 => 541,  1199 => 539,  1193 => 538,  1190 => 537,  1184 => 534,  1181 => 533,  1179 => 532,  1176 => 531,  1174 => 530,  1164 => 522,  1158 => 518,  1151 => 515,  1147 => 513,  1143 => 511,  1141 => 510,  1138 => 509,  1136 => 508,  1133 => 507,  1131 => 506,  1128 => 505,  1126 => 504,  1123 => 503,  1120 => 502,  1118 => 501,  1115 => 500,  1108 => 497,  1104 => 495,  1100 => 493,  1098 => 492,  1095 => 491,  1093 => 490,  1090 => 489,  1088 => 488,  1085 => 487,  1083 => 486,  1080 => 485,  1077 => 484,  1075 => 483,  1072 => 482,  1065 => 479,  1061 => 477,  1057 => 475,  1055 => 474,  1052 => 473,  1050 => 472,  1047 => 471,  1045 => 470,  1042 => 469,  1040 => 468,  1037 => 467,  1034 => 466,  1032 => 465,  1029 => 464,  1022 => 461,  1018 => 459,  1014 => 457,  1012 => 456,  1009 => 455,  1007 => 454,  1004 => 453,  1002 => 452,  999 => 451,  997 => 450,  994 => 449,  991 => 448,  989 => 447,  985 => 445,  983 => 444,  980 => 443,  974 => 439,  967 => 436,  963 => 434,  959 => 432,  957 => 431,  954 => 430,  952 => 429,  949 => 428,  947 => 427,  944 => 426,  942 => 425,  939 => 424,  936 => 423,  934 => 422,  931 => 421,  924 => 418,  920 => 416,  916 => 414,  914 => 413,  911 => 412,  909 => 411,  906 => 410,  904 => 409,  901 => 408,  899 => 407,  896 => 406,  893 => 405,  891 => 404,  888 => 403,  881 => 400,  877 => 398,  873 => 396,  871 => 395,  868 => 394,  866 => 393,  863 => 392,  861 => 391,  858 => 390,  856 => 389,  853 => 388,  850 => 387,  848 => 386,  845 => 385,  838 => 382,  834 => 380,  830 => 378,  828 => 377,  825 => 376,  823 => 375,  820 => 374,  818 => 373,  815 => 372,  813 => 371,  810 => 370,  807 => 369,  805 => 368,  801 => 366,  799 => 365,  796 => 364,  788 => 359,  783 => 356,  781 => 355,  778 => 354,  772 => 350,  765 => 347,  761 => 345,  757 => 343,  755 => 342,  752 => 341,  750 => 340,  747 => 339,  745 => 338,  742 => 337,  740 => 336,  737 => 335,  734 => 334,  732 => 333,  729 => 332,  722 => 329,  718 => 327,  714 => 325,  712 => 324,  709 => 323,  707 => 322,  704 => 321,  702 => 320,  699 => 319,  697 => 318,  694 => 317,  691 => 316,  689 => 315,  685 => 313,  678 => 311,  674 => 309,  670 => 307,  668 => 306,  665 => 305,  663 => 304,  660 => 303,  658 => 302,  655 => 301,  653 => 300,  650 => 299,  647 => 298,  645 => 297,  642 => 296,  635 => 293,  631 => 291,  627 => 289,  625 => 288,  622 => 287,  620 => 286,  617 => 285,  615 => 284,  612 => 283,  610 => 282,  607 => 281,  604 => 280,  602 => 279,  598 => 277,  596 => 276,  593 => 275,  587 => 271,  580 => 268,  576 => 266,  572 => 264,  570 => 263,  567 => 262,  565 => 261,  562 => 260,  560 => 259,  557 => 258,  555 => 257,  552 => 256,  549 => 255,  547 => 254,  544 => 253,  537 => 250,  533 => 248,  529 => 246,  527 => 245,  524 => 244,  522 => 243,  519 => 242,  517 => 241,  514 => 240,  512 => 239,  509 => 238,  506 => 237,  504 => 236,  500 => 234,  493 => 232,  489 => 230,  485 => 228,  483 => 227,  480 => 226,  478 => 225,  475 => 224,  473 => 223,  470 => 222,  468 => 221,  465 => 220,  462 => 219,  460 => 218,  457 => 217,  450 => 214,  446 => 212,  442 => 210,  440 => 209,  437 => 208,  435 => 207,  432 => 206,  430 => 205,  427 => 204,  425 => 203,  422 => 202,  419 => 201,  417 => 200,  413 => 198,  411 => 197,  407 => 195,  400 => 191,  393 => 186,  391 => 185,  387 => 183,  380 => 179,  376 => 177,  374 => 176,  371 => 175,  365 => 171,  358 => 168,  354 => 166,  350 => 164,  348 => 163,  345 => 162,  343 => 161,  340 => 160,  338 => 159,  335 => 158,  333 => 157,  330 => 156,  327 => 155,  325 => 154,  322 => 153,  315 => 150,  311 => 148,  307 => 146,  305 => 145,  302 => 144,  300 => 143,  297 => 142,  295 => 141,  292 => 140,  290 => 139,  287 => 138,  284 => 137,  282 => 136,  279 => 135,  272 => 132,  268 => 130,  264 => 128,  262 => 127,  259 => 126,  257 => 125,  254 => 124,  252 => 123,  249 => 122,  247 => 121,  244 => 120,  241 => 119,  239 => 118,  236 => 117,  229 => 114,  225 => 112,  221 => 110,  219 => 109,  216 => 108,  214 => 107,  211 => 106,  209 => 105,  206 => 104,  204 => 103,  201 => 102,  198 => 101,  196 => 100,  192 => 98,  190 => 97,  187 => 96,  180 => 92,  176 => 90,  174 => 89,  159 => 76,  154 => 73,  148 => 71,  146 => 70,  143 => 69,  133 => 66,  130 => 65,  120 => 62,  117 => 61,  114 => 60,  110 => 57,  108 => 56,  105 => 55,  97 => 50,  93 => 49,  88 => 46,  86 => 45,  82 => 43,  74 => 38,  66 => 32,  63 => 19,  61 => 18,  55 => 15,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/corporation/templates/page.html.twig", "C:\\xampp\\htdocs\\port\\themes\\contrib\\corporation\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "trans" => 1104, "set" => 1125, "for" => 1138);
        static $filters = array("escape" => 15, "t" => 62);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans', 'set', 'for'],
                ['escape', 't'],
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
