<?php

/* AcmeDemoBundle:Livre:editer.html.twig */
class __TwigTemplate_c4d55dee5bae20bbeb37d3542cfb13221dedf0cb9f207c5969aedd28bf5cdc5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<html lang=\"fr\">
  <head>
   
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>Bibliothéque</title>


    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t

    
  </head>

  <body role=\"document\">

    <!-- Fixed navbar -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Bibliothéque</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"#\">Accueil</a></li>
            
\t\t\t
           
\t\t\t<li>
\t\t\t\t\t<form class=\"navbar-form navbar-right\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <input type=\"text\" class=\"form-control\"  aria-describedby=\"basic-addon1\">
\t\t\t\t\t  <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span></span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t  </form>
\t\t  </li>
\t\t   <li class=\"dropdown \">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li>
\t\t\t\t
\t\t\t\t</li>
\t\t\t\t <li>
\t\t\t\t<a href=\"../deconnexion.php\">Déconnexion</a>
\t\t\t\t</li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<br><br><br><br>
    <div class=\"container theme-showcase\" role=\"main\">
<div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\">
\t\t\t\t<a href=\"mesevennements.php\"> Livres </a>
\t\t\t</li>
            <li >
\t\t\t\t<a href=\"\">Etudiants</a>
\t\t\t</li>
\t\t\t<li >
\t\t\t\t<a href=\"\">Emprunts</a>
\t\t\t</li>
            
          </ul>
          
        </div>
\t\t<div class=\"col-sm-9 col-md-10\">
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t<form action=\"\" method=\"POST\">
\t\t\t 
\t\t\t <div class=\"form-group \">
\t\t\t\t<label >Nom</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"nom\"  value=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liv"]) ? $context["liv"] : $this->getContext($context, "liv")), "nom", array()), "html", null, true);
        echo "\" placeholder=\"Nom\" required>
\t\t\t </div>
                    
                        <div class=\"form-group \">
\t\t\t\t<label >Auteur</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"auteur\"  value=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liv"]) ? $context["liv"] : $this->getContext($context, "liv")), "auteur", array()), "html", null, true);
        echo "\" placeholder=\"Auteur\" required>
\t\t\t </div>
                    
                         <div class=\"form-group \">
\t\t\t\t<label >ISBN</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"isbn\"  value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liv"]) ? $context["liv"] : $this->getContext($context, "liv")), "isbn", array()), "html", null, true);
        echo "\" placeholder=\"ISBN\" required>
\t\t\t </div>
                    
                        <div class=\"form-group \">
\t\t\t\t<label >Date</label>
                                <input type=\"text\" class=\"form-control\" name=\"date\"  value=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["liv"]) ? $context["liv"] : $this->getContext($context, "liv")), "date", array()), "Y-m-d"), "html", null, true);
        echo "\" placeholder=\"Date\" required>
\t\t\t </div>
\t\t\t  
\t\t\t  
\t\t\t  
\t\t\t   
\t\t\t 
\t\t\t  
\t\t\t  
                 <button type=\"submit\" class=\"btn btn-warning\"> Modifier </button>
\t\t  </form>
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t</div>
</div>




     
\t\t\t\t
\t\t\t\t


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
  
    
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Livre:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 165,  202 => 164,  149 => 114,  141 => 109,  133 => 104,  125 => 99,  39 => 16,  34 => 14,  19 => 1,);
    }
}
