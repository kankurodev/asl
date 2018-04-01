<?php

/* home.html.twig */
class __TwigTemplate_81ca1e9b7ada5e17360b92e4f0586ca8d0fdb55b2659364af34456933b6d62b4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    ";
        // line 5
        $this->loadTemplate("bs-css.html.twig", "home.html.twig", 5)->display($context);
        // line 6
        echo "</head>
<header>
    ";
        // line 8
        $this->loadTemplate("nav.html.twig", "home.html.twig", 8)->display(array_merge($context, array("nav" => (isset($context["nav"]) || array_key_exists("nav", $context) ? $context["nav"] : (function () { throw new Twig_Error_Runtime('Variable "nav" does not exist.', 8, $this->source); })()))));
        // line 9
        echo "</header>
<body class=\"container-fluid\">

<h2>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</h2>

";
        // line 14
        $this->loadTemplate("bs-scripts.html.twig", "home.html.twig", 14)->display($context);
        // line 15
        echo "</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  53 => 14,  48 => 12,  43 => 9,  41 => 8,  37 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    {% include 'bs-css.html.twig' %}
</head>
<header>
    {% include 'nav.html.twig' with {'nav' : nav} %}
</header>
<body class=\"container-fluid\">

<h2>{{ message }}</h2>

{% include 'bs-scripts.html.twig' %}
</body>
</html>

", "home.html.twig", "/Users/tobyhorn/Documents/asl/asl-assignment1/templates/home.html.twig");
    }
}
