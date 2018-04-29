<?php

/* nav.html.twig */
class __TwigTemplate_f74ee35c6f59cb90e7ee79f00e1db40374c9b0a2991436e5c6b11365067b84c8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">Symfony API</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">

            ";
        // line 10
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nav"]) || array_key_exists("nav", $context) ? $context["nav"] : (function () { throw new Twig_Error_Runtime('Variable "nav" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 11
            echo "
                ";
            // line 13
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->source); })()), "request", array()), "pathInfo", array()) == $context["value"])) {
                // line 14
                echo "                    <li class=\"active nav-item\"><a class=\"nav-link\" href='";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "' style=\"border-radius:4px;\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</a></li>
                ";
            } else {
                // line 16
                echo "                    <li class=\"nav-item\"><a class=\"nav-link\" href='";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</a></li>
                ";
            }
            // line 18
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Login</button>
        </form>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  66 => 18,  58 => 16,  50 => 14,  47 => 13,  44 => 11,  39 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">Symfony API</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">

            {# Loop through the nav array to display navigation #}
            {% for key,value in nav %}

                {# Highlight current location in nav when needed #}
                {% if app.request.pathInfo == value %}
                    <li class=\"active nav-item\"><a class=\"nav-link\" href='{{ value }}' style=\"border-radius:4px;\">{{ key }}</a></li>
                {% else %}
                    <li class=\"nav-item\"><a class=\"nav-link\" href='{{ value }}'>{{ key }}</a></li>
                {% endif %}

            {% endfor %}
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Login</button>
        </form>
    </div>
</nav>", "nav.html.twig", "/Users/tobyhorn/Documents/asl/asl/symfony-repo/assignment4/symfony-api/templates/nav.html.twig");
    }
}
