<?php

/* @PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig */
class __TwigTemplate_c334c8ad4afd7a7ef130a2589f7f23cf7d88176267031e9f869f36d7c17199de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'invoices_generate_by_date' => array($this, 'block_invoices_generate_by_date'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('invoices_generate_by_date', $context, $blocks);
    }

    public function block_invoices_generate_by_date($context, array $blocks = array())
    {
        // line 30
        echo "  <div class=\"col-xl-10\">
    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generateByDateForm"] ?? null), 'form_start', array("method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_invoices_generate_by_date")));
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">date_range</i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("By date", array(), "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"form-group row\">
            ";
        // line 39
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", array(), "Admin.Global"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Format: 2011-12-31 (inclusive).", array(), "Admin.Orderscustomers.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generateByDateForm"] ?? null), "date_from", array()), 'errors');
        echo "
              ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generateByDateForm"] ?? null), "date_from", array()), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group row\">
            ";
        // line 46
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To", array(), "Admin.Global"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Format: 2011-12-31 (inclusive).", array(), "Admin.Orderscustomers.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generateByDateForm"] ?? null), "date_to", array()), 'errors');
        echo "
              ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generateByDateForm"] ?? null), "date_to", array()), 'widget');
        echo "
            </div>
          </div>
        </div>
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generateByDateForm"] ?? null), 'rest');
        echo "
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate PDF file by date", array(), "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generateByDateForm"] ?? null), 'form_end');
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 61,  90 => 57,  83 => 53,  76 => 49,  72 => 48,  67 => 46,  60 => 42,  56 => 41,  51 => 39,  43 => 34,  37 => 31,  34 => 30,  28 => 29,  25 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig", "C:\\wamp64\\www\\prestashop_1.7.5.1\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Invoices\\Blocks\\generate_by_date.html.twig");
    }
}
