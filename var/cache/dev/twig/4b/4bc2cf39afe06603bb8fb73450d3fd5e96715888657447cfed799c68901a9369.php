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

/* advert/index.html.twig */
class __TwigTemplate_0565d1f1a3037826d1ed6d60e71de5874e688d9f6600031d9b318a610dee3379 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advert/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advert/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "advert/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Les annonces
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1>Les annonces</h1>

\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adverts"]) || array_key_exists("adverts", $context) ? $context["adverts"] : (function () { throw new RuntimeError('Variable "adverts" does not exist.', 9, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 10
            echo "\t\t<h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "</h2>
\t\t";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "category", [], "any", false, false, false, 11), "html", null, true);
            echo "<br />
\t\t";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "content", [], "any", false, false, false, 12), "html", null, true);
            echo "<br/>
\t\t<span class=\"price\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "price", [], "any", false, false, false, 13), "html", null, true);
            echo "
\t\t\t\$</span>
\t\t<h5>Contact</h5>
\t\tCourriel :
\t\t";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "email", [], "any", false, false, false, 17), "html", null, true);
            echo "<br/>
\t\tAnnonce publiée le : ";
            // line 18
            ((twig_get_attribute($this->env, $this->source, $context["advert"], "postedAt", [], "any", false, false, false, 18)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "postedAt", [], "any", false, false, false, 18), "d-m-Y à H:i"), "html", null, true))) : (print ("")));
            echo "<br/>
\t\tCellulaire :
\t\t";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "phone", [], "any", false, false, false, 20), "html", null, true);
            echo "<br/>
\t\tAnnonce publiée par :
\t\t";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "author", [], "any", false, false, false, 22), "html", null, true);
            echo "<br/>
\t\tVille :
\t\t";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "city", [], "any", false, false, false, 24), "html", null, true);
            echo "<br/>
\t\tCode postal :
\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "postalCode", [], "any", false, false, false, 26), "html", null, true);
            echo "<br/>
\t\t<td>
\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("advert_show", ["id" => twig_get_attribute($this->env, $this->source, $context["advert"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Afficher</a>
\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("advert_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["advert"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">Editer</a>
\t\t</td>
\t\t<hr/>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "\t\tAucune annonce trouvée
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
\t<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("advert_new");
        echo "\">Créez une nouvelle annonce</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "advert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 36,  167 => 35,  160 => 33,  151 => 29,  147 => 28,  142 => 26,  137 => 24,  132 => 22,  127 => 20,  122 => 18,  118 => 17,  111 => 13,  107 => 12,  103 => 11,  98 => 10,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les annonces
{% endblock %}

{% block body %}
\t<h1>Les annonces</h1>

\t{% for advert in adverts %}
\t\t<h2>{{ advert.title }}</h2>
\t\t{{ advert.category }}<br />
\t\t{{ advert.content }}<br/>
\t\t<span class=\"price\">{{ advert.price }}
\t\t\t\$</span>
\t\t<h5>Contact</h5>
\t\tCourriel :
\t\t{{ advert.email }}<br/>
\t\tAnnonce publiée le : {{ advert.postedAt ? advert.postedAt|date('d-m-Y à H:i') : '' }}<br/>
\t\tCellulaire :
\t\t{{ advert.phone }}<br/>
\t\tAnnonce publiée par :
\t\t{{ advert.author }}<br/>
\t\tVille :
\t\t{{ advert.city }}<br/>
\t\tCode postal :
\t\t{{ advert.postalCode }}<br/>
\t\t<td>
\t\t\t<a href=\"{{ path('advert_show', {'id': advert.id}) }}\">Afficher</a>
\t\t\t<a href=\"{{ path('advert_edit', {'id': advert.id}) }}\">Editer</a>
\t\t</td>
\t\t<hr/>
\t{% else %}
\t\tAucune annonce trouvée
\t{% endfor %}

\t<a href=\"{{ path('advert_new') }}\">Créez une nouvelle annonce</a>
{% endblock %}
", "advert/index.html.twig", "C:\\Users\\Arno\\Desktop\\projetAnnonces\\templates\\advert\\index.html.twig");
    }
}
