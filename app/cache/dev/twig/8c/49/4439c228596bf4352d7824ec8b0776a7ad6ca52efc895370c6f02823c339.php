<?php

/* AcmeDemoBundle:Livre:voir.html.twig */
class __TwigTemplate_8c494439c228596bf4352d7824ec8b0776a7ad6ca52efc895370c6f02823c339 extends Twig_Template
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
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <link href=\"";
        // line 18
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
\t\t\t\t<a href=\"\"> Livres </a>
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
\t\t
\t\t  <br><br>
\t\t 
\t\t  
\t\t 
                  <div class=\"col-md-12\">
                      
                      <div class=\"col-md-3\">
                      
                       <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "photo", array()))), "html", null, true);
        echo "\" width=\"80px\" />
                      
                      </div>
                      
                      <div class=\"col-md-9\">
                      
                        <div class=\"col-md-12\">
                            
                             <div class=\"col-md-6\">
                                 Nom:
                             </div>
                            
                            <div class=\"col-md-6\">
                                ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "nom", array()), "html", null, true);
        echo "
                            </div>
                            
                        </div>
                         <div class=\"col-md-12\">
                            
                             <div class=\"col-md-6\">
                                 Auteur:
                             </div>
                            
                            <div class=\"col-md-6\">
                                ";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "auteur", array()), "html", null, true);
        echo "
                            </div>
                            
                        </div>
                            <div class=\"col-md-12\">
                            
                             <div class=\"col-md-6\">
                                 ISBN:
                             </div>
                            
                            <div class=\"col-md-6\">
                                ";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "isbn", array()), "html", null, true);
        echo "
                            </div>
                            
                        </div>
                            
                            <div class=\"col-md-12\">
                            
                             <div class=\"col-md-6\">
                                 Date:
                             </div>
                            
                            <div class=\"col-md-6\">
                               ";
        // line 153
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "date", array()), "Y-m-d"), "html", null, true);
        echo "
                            </div>
                            
                        </div> 
                            
                      </div>
                      
                           
                  </div>
                     
\t\t\t
\t\t\t
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
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>      
<script>
    
    
    \$('document').ready(function(
            
         \$('dtable').DataTable();   
            
            ));
    
    
</script> 
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Livre:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 210,  256 => 209,  252 => 208,  194 => 153,  179 => 141,  165 => 130,  151 => 119,  135 => 106,  44 => 18,  38 => 15,  34 => 14,  19 => 1,);
    }
}
