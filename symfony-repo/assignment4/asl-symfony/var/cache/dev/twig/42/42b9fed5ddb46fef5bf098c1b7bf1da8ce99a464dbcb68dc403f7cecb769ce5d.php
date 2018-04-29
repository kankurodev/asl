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
        echo "<nav class=\"navbar navbar-inverse\" style=\"border-top-left-radius: 0; border-top-right-radius: 0;\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand h4\" href=\"#\">Brand</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
            <ul class=\"nav navbar-nav\" style=\"margin-left:3em;\">

                ";
        // line 17
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nav"]) || array_key_exists("nav", $context) ? $context["nav"] : (function () { throw new Twig_Error_Runtime('Variable "nav" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 18
            echo "
                    ";
            // line 20
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "request", array()), "pathInfo", array()) == $context["value"])) {
                // line 21
                echo "                        <li class=\"active h4\"><a href='";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "' style=\"border-radius:4px;\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 23
                echo "                        <li class=\"h4\"><a href='";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 25
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </ul>
        </div>
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
        return array (  80 => 27,  73 => 25,  65 => 23,  57 => 21,  54 => 20,  51 => 18,  46 => 17,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse\" style=\"border-top-left-radius: 0; border-top-right-radius: 0;\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand h4\" href=\"#\">Brand</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
            <ul class=\"nav navbar-nav\" style=\"margin-left:3em;\">

                {# Loop through the nav array to display navigation #}
                {% for key,value in nav %}

                    {# Highlight current location in nav when needed #}
                    {% if app.request.pathInfo == value %}
                        <li class=\"active h4\"><a href='{{ value }}' style=\"border-radius:4px;\">{{ key }}</a></li>
                    {% else %}
                        <li class=\"h4\"><a href='{{ value }}'>{{ key }}</a></li>
                    {% endif %}

                {% endfor %}
            </ul>
        </div>
    </div>
</nav>", "nav.html.twig", "/Users/tobyhorn/Documents/asl/asl/symfony-repo/assignment1/asl-symfony/templates/nav.html.twig");
    }
}
