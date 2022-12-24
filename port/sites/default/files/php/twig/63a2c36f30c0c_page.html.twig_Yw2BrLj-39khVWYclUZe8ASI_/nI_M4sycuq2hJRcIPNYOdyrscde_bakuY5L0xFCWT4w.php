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

/* themes/contrib/industrial_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_22306bda182e31df20233f2daaf43e81 extends \Twig\Template
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
        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-2\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 74)) {
            // line 75
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 77
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-7\">
        ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 81)) {
            // line 82
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 84
        echo "      </div>
      <!--End Navigation -->

      <!-- Navigation -->
      <div class=\"col-md-3\">
        <!--Search-->
          ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 90)) {
            // line 91
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 93
        echo "        <!--End Search-->

      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->
  ";
        // line 103
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 103))) {
            echo "  
    <div class=\"slideshow\">
      ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 108
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Home page message-->
  ";
        // line 115
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepagemessage", [], "any", false, false, true, 115))) {
            // line 116
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepagemessage", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 124
        echo "<!--End Highlighted-->


<!--Highlighted-->
  ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 128)) {
            // line 129
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 137
        echo "<!--End Highlighted-->


<!-- Start Top Widget -->
 
  ";
        // line 142
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 142) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 142)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 142))) {
            // line 143
            echo "    <div class=\"topwidget\">
      <div class=\"container\">
        <div class=\"row\">
      <!-- start: Container -->
      <!-- Top widget first region -->          
          ";
            // line 148
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 148)) {
                // line 149
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 149, $this->source), "html", null, true);
                echo ">
              ";
                // line 150
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 152
            echo "          
          <!-- End top widget third region -->

          <!-- Top widget second region -->          
          ";
            // line 156
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 156)) {
                // line 157
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 157, $this->source), "html", null, true);
                echo ">
              ";
                // line 158
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 160
            echo "          
          <!-- End top widget third region -->
          
          <!-- Top widget third region -->          
          ";
            // line 164
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 164)) {
                // line 165
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_third_class"] ?? null), 165, $this->source), "html", null, true);
                echo ">
              ";
                // line 166
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 168
            echo "          
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  ";
        }
        // line 174
        echo "
<!--End Top Widget -->


<!-- Page Title -->
";
        // line 179
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 179) &&  !($context["is_front"] ?? null))) {
            // line 180
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 184
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 189
        echo "<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      ";
        // line 198
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 198)) {
            // line 199
            echo "        <div class=\"row\">
          ";
            // line 200
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 203
        echo "    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 207
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 212
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 212)) {
            // line 213
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 214
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 214, $this->source), "html", null, true);
            echo " >
            ";
            // line 215
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 215), 215, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 219
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 222
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 222)) {
            // line 223
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 224
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 224, $this->source), "html", null, true);
            echo ">
            ";
            // line 225
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 225), 225, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 229
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 232
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 232)) {
            // line 233
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 234
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 234, $this->source), "html", null, true);
            echo ">
            ";
            // line 235
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 239
        echo "      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 245
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 245)) {
            // line 246
            echo "      <div class=\"row\">
        ";
            // line 247
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 247), 247, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 250
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->



<!-- start: Footer -->
";
        // line 258
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 258) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 258)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 258))) {
            // line 259
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">

        <!-- Start Footer First Region -->
        
        ";
            // line 266
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 266)) {
                // line 267
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_class"] ?? null), 267, $this->source), "html", null, true);
                echo ">
            ";
                // line 268
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 268), 268, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 271
            echo "        
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        
        ";
            // line 276
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 276)) {
                // line 277
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 277, $this->source), "html", null, true);
                echo ">
            ";
                // line 278
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 278), 278, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 281
            echo "        
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        
        ";
            // line 286
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 286)) {
                // line 287
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 287, $this->source), "html", null, true);
                echo ">
            ";
                // line 288
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 288), 288, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 291
            echo "        
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 297
        echo "<!--End Footer -->



<!-- Start bottom -->

  ";
        // line 303
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 303) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 303)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 303))) {
            // line 304
            echo "
    <div class=\"bottom-widgets\">
      <!-- Start Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Start Bottom First Region -->
          
          ";
            // line 313
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 313)) {
                // line 314
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 314, $this->source), "html", null, true);
                echo ">
              ";
                // line 315
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 315), 315, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 318
            echo "          
          <!-- End Bottom First Region -->

          <!-- Start Bottom Second Region -->
          ";
            // line 322
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 322)) {
                // line 323
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 323, $this->source), "html", null, true);
                echo ">
              ";
                // line 324
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 324), 324, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 327
            echo "          
          <!-- End Bottom Second Region -->

          <!-- Start Bottom third Region -->
          
          ";
            // line 332
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 332)) {
                // line 333
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 333, $this->source), "html", null, true);
                echo ">
              ";
                // line 334
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 334), 334, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 337
            echo "          
          <!-- End Bottom Third Region -->

          ";
            // line 340
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 340)) {
                // line 341
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 341, $this->source), "html", null, true);
                echo ">
            ";
                // line 342
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 342), 342, $this->source), "html", null, true);
                echo "
          </div>
          ";
            }
            // line 345
            echo "
        </div>
      </div>
    </div>

  ";
        }
        // line 351
        echo "
<!--End Bottom -->


<!-- Start Footer Menu -->
";
        // line 356
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 356)) {
            // line 357
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          ";
            // line 361
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 361), 361, $this->source), "html", null, true);
            echo "
        </div>
        ";
            // line 363
            if (($context["show_social_icon"] ?? null)) {
                // line 364
                echo "        <div class=\"col-sm-6\">
          <div class=\"social-media\">
            ";
                // line 366
                if (($context["facebook_url"] ?? null)) {
                    // line 367
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 367, $this->source), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 369
                echo "            ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 370
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 370, $this->source), "html", null, true);
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 372
                echo "            ";
                if (($context["twitter_url"] ?? null)) {
                    // line 373
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 373, $this->source), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 375
                echo "            ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 376
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 376, $this->source), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 378
                echo "            ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 379
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 379, $this->source), "html", null, true);
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
                }
                // line 381
                echo "            ";
                if (($context["rss_url"] ?? null)) {
                    // line 382
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 382, $this->source), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
                }
                // line 384
                echo "          </div>
        </div>
        ";
            }
            // line 387
            echo "      </div>
    </div>
  </div>
";
        }
        // line 391
        echo "<!-- End Footer Menu -->


<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © ";
        // line 400
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved</p>
      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
        // line 405
        if (($context["show_credit_link"] ?? null)) {
            // line 406
            echo "        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 410
        echo "      <!-- End Credit link -->
      
    </div>
  </div>
</div>


<!-- Google map -->
";
        // line 418
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 418)) {
            // line 419
            echo "  <div class=\"google_map\">
    ";
            // line 420
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 420), 420, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 423
        echo "<!-- End Google map -->";
    }

    public function getTemplateName()
    {
        return "themes/contrib/industrial_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  691 => 423,  685 => 420,  682 => 419,  680 => 418,  670 => 410,  664 => 406,  662 => 405,  654 => 400,  643 => 391,  637 => 387,  632 => 384,  626 => 382,  623 => 381,  617 => 379,  614 => 378,  608 => 376,  605 => 375,  599 => 373,  596 => 372,  590 => 370,  587 => 369,  581 => 367,  579 => 366,  575 => 364,  573 => 363,  568 => 361,  562 => 357,  560 => 356,  553 => 351,  545 => 345,  539 => 342,  534 => 341,  532 => 340,  527 => 337,  521 => 334,  516 => 333,  514 => 332,  507 => 327,  501 => 324,  496 => 323,  494 => 322,  488 => 318,  482 => 315,  477 => 314,  475 => 313,  464 => 304,  462 => 303,  454 => 297,  446 => 291,  440 => 288,  435 => 287,  433 => 286,  426 => 281,  420 => 278,  415 => 277,  413 => 276,  406 => 271,  400 => 268,  395 => 267,  393 => 266,  384 => 259,  382 => 258,  372 => 250,  366 => 247,  363 => 246,  361 => 245,  353 => 239,  346 => 235,  342 => 234,  339 => 233,  337 => 232,  332 => 229,  325 => 225,  321 => 224,  318 => 223,  316 => 222,  311 => 219,  304 => 215,  300 => 214,  297 => 213,  295 => 212,  287 => 207,  281 => 203,  275 => 200,  272 => 199,  270 => 198,  259 => 189,  251 => 184,  245 => 180,  243 => 179,  236 => 174,  228 => 168,  222 => 166,  217 => 165,  215 => 164,  209 => 160,  203 => 158,  198 => 157,  196 => 156,  190 => 152,  184 => 150,  179 => 149,  177 => 148,  170 => 143,  168 => 142,  161 => 137,  153 => 132,  148 => 129,  146 => 128,  140 => 124,  132 => 119,  127 => 116,  125 => 115,  116 => 108,  110 => 105,  105 => 103,  93 => 93,  87 => 91,  85 => 90,  77 => 84,  71 => 82,  69 => 81,  63 => 77,  57 => 75,  55 => 74,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/industrial_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\port\\themes\\contrib\\industrial_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 74);
        static $filters = array("escape" => 75, "date" => 400);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
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
