<?php

/* AcmeDemoBundle:Welcome:connexion.html.twig */
class __TwigTemplate_82397e5592a3c2359eb7cb466294efb8167499e1966d85305d1de8e89eda96a7 extends Twig_Template
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
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t

    
  </head>

  <body>

    <div class=\"container\">

      <form class=\"form-signin text-center\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
           <input type=\"hidden\" name=\"_csrf_token\" value=\"K0C0zvIDOmJXi6AVB_V4ACMDWMQt_LdlSZDmPwcc_Zc\" />
         <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" width=\"300px\" style=\"margin-bottom: 20px\"/>
          <h1 class=\"form-signin-heading  text-danger\">Bibliothèque</h1>
          <hr>
          <h2 class=\"form-signin-heading  text-danger\">SVP Connectez-vous</h2>
       
        <label for=\"inputEmail\" class=\"sr-only\">Identifiant:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" required=\"required\" class=\"form-control\" >
        <label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required=\"required\" />
       
        <button class=\"btn btn-lg btn-danger btn-block\" type=\"submit\" name=\"_submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Connectez</button>
      </form>

    </div> <!-- /container -->

  
   
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 40,  65 => 30,  60 => 28,  47 => 18,  42 => 16,  38 => 15,  34 => 14,  19 => 1,);
    }
}
