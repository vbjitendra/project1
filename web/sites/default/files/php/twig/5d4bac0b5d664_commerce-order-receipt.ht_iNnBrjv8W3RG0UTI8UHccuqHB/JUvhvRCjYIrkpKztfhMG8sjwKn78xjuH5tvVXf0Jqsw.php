<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/commerce/modules/order/templates/commerce-order-receipt.html.twig */
class __TwigTemplate_34797a553a0769c699d307e23d23aeb16552f29fdbd395181d8e15aa9aa9a539 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'order_items' => [$this, 'block_order_items'],
            'shipping_information' => [$this, 'block_shipping_information'],
            'billing_information' => [$this, 'block_billing_information'],
            'payment_method' => [$this, 'block_payment_method'],
            'additional_information' => [$this, 'block_additional_information'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 48, "if" => 69, "for" => 120];
        $filters = ["escape" => 31, "t" => 39, "commerce_price_format" => 116, "number_format" => 54];
        $functions = ["url" => 31];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for'],
                ['escape', 't', 'commerce_price_format', 'number_format'],
                ['url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/commerce/modules/order/templates/commerce-order-receipt.html.twig"));

        // line 23
        echo "<table style=\"margin: 15px auto 0 auto; max-width: 768px; font-family: arial,sans-serif\">
  <tbody>
  <tr>
    <td>
      <table style=\"margin-left: auto; margin-right: auto; max-width: 768px; text-align: center;\">
        <tbody>
        <tr>
          <td>
            <a href=\"";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\" style=\"color: #0e69be; text-decoration: none; font-weight: bold; margin-top: 15px;\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["order_entity"] ?? null), "getStore", []), "label", [])), "html", null, true);
        echo "</a>
          </td>
        </tr>
        </tbody>
      </table>
      <table style=\"text-align: center; min-width: 450px; margin: 5px auto 0 auto; border: 1px solid #cccccc; border-radius: 5px; padding: 40px 30px 30px 30px;\">
        <tbody>
        <tr>
          <td style=\"font-size: 30px; padding-bottom: 30px\">";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Order Confirmation"));
        echo "</td>
        </tr>
        <tr>
          <td style=\"font-weight: bold; padding-top:15px; padding-bottom: 15px; text-align: left; border-top: 1px solid #cccccc; border-bottom: 1px solid #cccccc\">
            ";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Order #@number details:", ["@number" => $this->getAttribute(($context["order_entity"] ?? null), "getOrderNumber", [])]));
        echo "
          </td>
        </tr>
        <tr>
          <td>
            ";
        // line 48
        $this->displayBlock('order_items', $context, $blocks);
        // line 65
        echo "          </td>
        </tr>
        <tr>
          <td>
            ";
        // line 69
        if ((($context["billing_information"] ?? null) || ($context["shipping_information"] ?? null))) {
            // line 70
            echo "            <table style=\"width: 100%; padding-top:15px; padding-bottom: 15px; text-align: left; border-top: 1px solid #cccccc; border-bottom: 1px solid #cccccc\">
              <tbody>
              <tr>
                ";
            // line 73
            if (($context["shipping_information"] ?? null)) {
                // line 74
                echo "                  <td style=\"padding-top: 5px; font-weight: bold;\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Shipping Information"));
                echo "</td>
                ";
            }
            // line 76
            echo "                ";
            if (($context["billing_information"] ?? null)) {
                // line 77
                echo "                  <td style=\"padding-top: 5px; font-weight: bold;\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Billing Information"));
                echo "</td>
                ";
            }
            // line 79
            echo "              </tr>
              <tr>
                ";
            // line 81
            if (($context["shipping_information"] ?? null)) {
                // line 82
                echo "                  <td>
                    ";
                // line 83
                $this->displayBlock('shipping_information', $context, $blocks);
                // line 86
                echo "                  </td>
                ";
            }
            // line 88
            echo "                ";
            if (($context["billing_information"] ?? null)) {
                // line 89
                echo "                  <td>
                    ";
                // line 90
                $this->displayBlock('billing_information', $context, $blocks);
                // line 93
                echo "                  </td>
                ";
            }
            // line 95
            echo "              </tr>
              ";
            // line 96
            if (($context["payment_method"] ?? null)) {
                // line 97
                echo "                <tr>
                  <td style=\"font-weight: bold; margin-top: 10px;\">";
                // line 98
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Payment Method"));
                echo "</td>
                </tr>
                <tr>
                  <td>
                    ";
                // line 102
                $this->displayBlock('payment_method', $context, $blocks);
                // line 105
                echo "                  </td>
                </tr>
              ";
            }
            // line 108
            echo "              </tbody>
            </table>
            ";
        }
        // line 111
        echo "          </td>
        </tr>
        <tr>
          <td>
            <p style=\"margin-bottom: 0;\">
              ";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Subtotal: @subtotal", ["@subtotal" => $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["totals"] ?? null), "subtotal", [])))]));
        echo "
            </p>
          </td>
        </tr>
        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["totals"] ?? null), "adjustments", []));
        foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
            // line 121
            echo "        <tr>
          <td>
            <p style=\"margin-bottom: 0;\">
              ";
            // line 124
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["adjustment"], "label", [])), "html", null, true);
            echo ": ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->sandbox->ensureToStringAllowed($this->getAttribute($context["adjustment"], "total", []))), "html", null, true);
            echo "
            </p>
          </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "        <tr>
          <td>
            <p style=\"font-size: 24px; padding-top: 15px; padding-bottom: 5px;\">
              ";
        // line 132
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Order Total: @total", ["@total" => $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["order_entity"] ?? null), "getTotalPrice", [])))]));
        echo "
            </p>
          </td>
        </tr>
        <tr>
          <td>
            ";
        // line 138
        $this->displayBlock('additional_information', $context, $blocks);
        // line 141
        echo "          </td>
        </tr>
        </tbody>
      </table>
    </td>
  </tr>
  </tbody>
</table>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 48
    public function block_order_items($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_items"));

        // line 49
        echo "            <table style=\"padding-top: 15px; padding-bottom:15px; width: 100%\">
              <tbody style=\"text-align: left;\">
              ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order_entity"] ?? null), "getItems", []));
        foreach ($context['_seq'] as $context["_key"] => $context["order_item"]) {
            // line 52
            echo "              <tr>
                <td>
                  ";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["order_item"], "getQuantity", []))), "html", null, true);
            echo " x
                </td>
                <td>
                  <span>";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["order_item"], "label", [])), "html", null, true);
            echo "</span>
                  <span style=\"float: right;\">";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->sandbox->ensureToStringAllowed($this->getAttribute($context["order_item"], "getTotalPrice", []))), "html", null, true);
            echo "</span>
                </td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "              </tbody>
            </table>
            ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 83
    public function block_shipping_information($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shipping_information"));

        // line 84
        echo "                      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["shipping_information"] ?? null)), "html", null, true);
        echo "
                    ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 90
    public function block_billing_information($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "billing_information"));

        // line 91
        echo "                      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["billing_information"] ?? null)), "html", null, true);
        echo "
                    ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 102
    public function block_payment_method($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "payment_method"));

        // line 103
        echo "                      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["payment_method"] ?? null)), "html", null, true);
        echo "
                    ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 138
    public function block_additional_information($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "additional_information"));

        // line 139
        echo "              ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Thank you for your order!"));
        echo "
            ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/order/templates/commerce-order-receipt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 139,  349 => 138,  339 => 103,  333 => 102,  323 => 91,  317 => 90,  307 => 84,  301 => 83,  292 => 62,  282 => 58,  278 => 57,  272 => 54,  268 => 52,  264 => 51,  260 => 49,  254 => 48,  239 => 141,  237 => 138,  228 => 132,  223 => 129,  210 => 124,  205 => 121,  201 => 120,  194 => 116,  187 => 111,  182 => 108,  177 => 105,  175 => 102,  168 => 98,  165 => 97,  163 => 96,  160 => 95,  156 => 93,  154 => 90,  151 => 89,  148 => 88,  144 => 86,  142 => 83,  139 => 82,  137 => 81,  133 => 79,  127 => 77,  124 => 76,  118 => 74,  116 => 73,  111 => 70,  109 => 69,  103 => 65,  101 => 48,  93 => 43,  86 => 39,  73 => 31,  63 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce/modules/order/templates/commerce-order-receipt.html.twig", "/var/www/html/mystore/web/modules/contrib/commerce/modules/order/templates/commerce-order-receipt.html.twig");
    }
}
