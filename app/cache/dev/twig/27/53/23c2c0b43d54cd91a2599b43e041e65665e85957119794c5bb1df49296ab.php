<?php

/* AcmeDemoBundle:Admin:etudiant.html.twig */
class __TwigTemplate_275323c2c0b43d54cd91a2599b43e041e65665e85957119794c5bb1df49296ab extends Twig_Template
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
          <a class=\"navbar-brand\" href=\"#\"><img />EPI - Bibliothéque</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav pull-right\">
            <li ><a href=\"#\">Accueil</a></li>
            <li>
                                    <form class=\"navbar-form navbar-right\" style=\"margin-right: 5px;\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t  <input type=\"text\" class=\"form-control\"  aria-describedby=\"basic-addon1\">
\t\t\t\t\t  <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span></span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t  </form>
            </li>
            
            <li class=\"dropdown \">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><strong>";
        // line 52
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) ? ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())) : ("Anonymous")), "html", null, true);
        echo "</strong> <span class=\"caret\"></span> </a>
              <ul class=\"dropdown-menu\" role=\"menu\">
                
\t\t\t\t <li>
                                     <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("_demo_logout");
        echo "\"> <span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</a>
\t\t\t\t
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
\t       <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("adminetudiantliste");
        echo "\">Etudiants</a>
\t    </li>
            <li>
               <a href=\"\">Emprunts</a>
\t    </li>
            <li >
\t       <a href=\"\">Livres</a>
\t    </li>
            <li>
\t       <a href=\"\">Catégories</a>
\t    </li>
            
            
          </ul>
          
        </div>
\t\t<div class=\"col-sm-9 col-md-10\">
\t\t
                    <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("adminajouteretudiant");
        echo "\" class=\"btn btn-success\"> Ajouter</a>
\t\t  <br><br>
\t\t  <table class=\"table dtable\">
\t\t  
\t\t  <thead>
\t\t
\t\t\t<tr>
                                <th>Matricule</th>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Prenom</th>
\t\t\t\t<th>Cin</th>
\t\t\t\t<th>Classe</th>
                                
                                <th></th>
\t\t\t</tr>
\t\t  </thead>
\t\t  
\t\t  
\t\t  <tbody>
\t\t  
\t\t ";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 110
            echo "\t\t  <tr>
                      
                      <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "matricule", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cin", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "classe", array()), "html", null, true);
            echo "</td>
                        
\t\t\t<td>
                          
                       
                        <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminvoireetudiant", array("id" => $this->getAttribute($context["e"], "refuser", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\"> voir</a>
\t\t\t<a href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editlivre", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\"> Modifer</a>
\t\t\t<a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminempruntetudiant", array("id" => $this->getAttribute($context["e"], "refuser", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\"> Historique d'emprunt</a>
\t\t\t
\t\t\t</td>
\t\t  </tr>
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "\t\t 
\t\t  </tbody>
\t\t  
\t\t  
\t\t  </table>
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
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>      
<script>
    
    
    \$('document').ready(function(){
            
         \$('.dtable').DataTable({\"language\":{
    \"sProcessing\":     \"Traitement en cours...\",
    \"sSearch\":         \"Rechercher&nbsp;:\",
    \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
    \"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
    \"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
    \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
    \"sInfoPostFix\":    \"\",
    \"sLoadingRecords\": \"Chargement en cours...\",
    \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
    \"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
    \"oPaginate\": {
        \"sFirst\":      \"Premier\",
        \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
        \"sNext\":       \"Suivant\",
        \"sLast\":       \"Dernier\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
        \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
    }
}});   
            
    });
    
    
</script> 
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Admin:etudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 182,  259 => 181,  255 => 180,  201 => 128,  190 => 123,  186 => 122,  182 => 121,  174 => 116,  170 => 115,  166 => 114,  162 => 113,  158 => 112,  154 => 110,  150 => 109,  127 => 89,  106 => 71,  88 => 56,  81 => 52,  44 => 18,  38 => 15,  34 => 14,  19 => 1,);
    }
}
