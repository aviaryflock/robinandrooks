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

/* admin/view/template/user/user_login.twig */
class __TwigTemplate_5fc5578274f037457f1db382c4b1e55d extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-start\">";
        // line 5
        echo ($context["column_ip"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 6
        echo ($context["column_user_agent"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 7
        echo ($context["column_date_added"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if (($context["logins"] ?? null)) {
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logins"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["login"]) {
                // line 13
                echo "          <tr>
            <td class=\"text-start\"><a href=\"https://whatismyipaddress.com/ip/";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["login"], "ip", [], "any", false, false, false, 14);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["login"], "ip", [], "any", false, false, false, 14);
                echo "</a></td>
            <td class=\"text-start\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["login"], "user_agent", [], "any", false, false, false, 15);
                echo "</td>
            <td class=\"text-start\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["login"], "date_added", [], "any", false, false, false, 16);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['login'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      ";
        } else {
            // line 20
            echo "        <tr>
          <td class=\"text-center\" colspan=\"3\">";
            // line 21
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
      ";
        }
        // line 24
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 28
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 29
        echo ($context["results"] ?? null);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/user/user_login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 29,  105 => 28,  99 => 24,  93 => 21,  90 => 20,  87 => 19,  78 => 16,  74 => 15,  68 => 14,  65 => 13,  60 => 12,  58 => 11,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/user/user_login.twig", "/var/www/robinandrooks.com/upload/admin/view/template/user/user_login.twig");
    }
}
