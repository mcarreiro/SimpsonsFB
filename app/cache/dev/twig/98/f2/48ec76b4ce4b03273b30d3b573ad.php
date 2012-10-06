<?php

/* ::base.html.twig */
class __TwigTemplate_98f248ec76b4ce4b03273b30d3b573ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
\t<meta property=\"og:title\" content=\"";
        // line 5
        if (array_key_exists("entity", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
        } else {
            echo " SimpsonsFB - Todas las frases de los simpsons! ";
        }
        echo "\"/> 
\t<meta property=\"og:image\" content=\"http://simpsonsfb.com.ar";
        // line 6
        if (((array_key_exists("entity", $context) && ($this->getAttribute($this->getContext($context, "entity"), "personaje") != "")) && $this->getAttribute($this->getContext($context, "entity", true), "personaje", array(), "any", true, true))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/cabezas/" . $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "personaje"), "imagen"))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Donut_200x200.jpg"), "html", null, true);
            echo " ";
        }
        echo "\"/>
\t<meta property=\"og:url\" content=\"";
        // line 7
        if (array_key_exists("entity", $context)) {
            echo "http://simpsonsfb.com.ar/frase/show/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo " ";
        } else {
            echo " http://simpsonsfb.com.ar/ ";
        }
        echo "\" />
                  <meta property=\"og:tag name\" content=\"tag value\"/> 
                  <meta property=\"og:site_name\" content=\"simpsonsFB\"/>
\t<meta property=\"og:type\" content=\"blog\"/>
\t<meta property=\"og:description\" content=\"";
        // line 11
        if (array_key_exists("entity", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
        } else {
            echo " Todas las frases de los simpsons! ";
        }
        echo "\"/>
<meta name=\"description\" content=\"";
        // line 12
        if (array_key_exists("entity", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
        } else {
            echo " Todas las frases de los simpsons! ";
        }
        echo "\" />

        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 22
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c5f84b3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5f84b3_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c5f84b3_main_1.js");
            // line 23
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            <script src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.1.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            <script src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
<!-- Twitter -->            
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
<!-- Google Plus -->            
<script type=\"text/javascript\">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
 var images = \"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/"), "html", null, true);
            echo "\";
 </script>
 <!-- Share This -->
 <script type=\"text/javascript\" src=\"http://w.sharethis.com/button/buttons.js\"></script>
<script type=\"text/javascript\">stLight.options({publisher: \"3f55d05e-df0c-4121-bbec-eb4bf6f5729e\"}); </script>
<!-- Google Analytics -->
 <script type=\"text/javascript\">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33754055-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
        ";
            // asset "c5f84b3_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5f84b3_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c5f84b3_jquery-1.7.1.min_2.js");
            // line 23
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            <script src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.1.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            <script src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
<!-- Twitter -->            
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
<!-- Google Plus -->            
<script type=\"text/javascript\">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
 var images = \"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/"), "html", null, true);
            echo "\";
 </script>
 <!-- Share This -->
 <script type=\"text/javascript\" src=\"http://w.sharethis.com/button/buttons.js\"></script>
<script type=\"text/javascript\">stLight.options({publisher: \"3f55d05e-df0c-4121-bbec-eb4bf6f5729e\"}); </script>
<!-- Google Analytics -->
 <script type=\"text/javascript\">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33754055-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
        ";
            // asset "c5f84b3_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5f84b3_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c5f84b3_jquery-ui-1.8.21.custom.min_3.js");
            // line 23
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            <script src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.1.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            <script src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
<!-- Twitter -->            
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
<!-- Google Plus -->            
<script type=\"text/javascript\">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
 var images = \"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/"), "html", null, true);
            echo "\";
 </script>
 <!-- Share This -->
 <script type=\"text/javascript\" src=\"http://w.sharethis.com/button/buttons.js\"></script>
<script type=\"text/javascript\">stLight.options({publisher: \"3f55d05e-df0c-4121-bbec-eb4bf6f5729e\"}); </script>
<!-- Google Analytics -->
 <script type=\"text/javascript\">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33754055-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
        ";
        } else {
            // asset "c5f84b3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c5f84b3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c5f84b3.js");
            // line 23
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            <script src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.1.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            <script src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
<!-- Twitter -->            
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
<!-- Google Plus -->            
<script type=\"text/javascript\">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
 var images = \"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/"), "html", null, true);
            echo "\";
 </script>
 <!-- Share This -->
 <script type=\"text/javascript\" src=\"http://w.sharethis.com/button/buttons.js\"></script>
<script type=\"text/javascript\">stLight.options({publisher: \"3f55d05e-df0c-4121-bbec-eb4bf6f5729e\"}); </script>
<!-- Google Analytics -->
 <script type=\"text/javascript\">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33754055-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
        ";
        }
        unset($context["asset_url"]);
        // line 54
        echo "        
            <div class=\"header\">
                <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/titulo.png"), "html", null, true);
        echo "\"/></a> <br/>         
            </div>
            <div class=\"social\">
                <iframe src=\"//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.simpsonsfb.com.ar&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=255995561152997\" scrolling=\"no\" frameborder=\"0\" style=\"margin-left:50px!important;margin-right: -310px;border:none; overflow:hidden; width:450px; height:21px;\" allowTransparency=\"true\"></iframe>
                <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://www.simpsonsfb.com.ar\" data-text=\"Todas las frases de los Simpsons para compartir en:\" data-hashtags=\"FrasesSimpsons\">Tweet</a>
                <g:plusone size=\"medium\"></g:plusone>  
            ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "            </div>   
            ";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo "         <div class=\"dialogoSugerencia\"id=\"dialogoSugerencia\" title=\"Enviar Sugerencia\" style=\"display: none;\">
    <form id=\"mailForm\"action=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("enviarSugerencia"), "html", null, true);
        echo "\"><br/>
        <div name=\"idFrase\" id=\"idFrase\"></div>    
        <textarea name=\"sugerencia\"class=\"sugerencia\" id=\"sugerencia\" ></textarea>
        <button class=\"enviarMail\" onclick=\"mandarMail()\" type=\"button\">Enviar</button>
    </form>
</div>   
    </body>
</html>
";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "SimpsonsFB";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui-1.8.21.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        // line 65
        echo "            <div class=\"footer\">
                The Simpsons<sup>TM</sup>, creados por Matt Groening son propiedad registrada de Twentieth Century Fox Film Corporation. Todos los derechos reservados.<br/>
                Descargo de responsabilidad: este sitio web, sus operadores y cualquier contenido relacionado con Los Simpson no han sido autorizados por Fox.<br/>
                Diseño Web por <a class=\"relayerButton\" href=\"http://www.relayer.com.ar\" target=\"_blank\">Relayer</a>
            </div>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 65,  335 => 64,  330 => 62,  324 => 17,  319 => 16,  316 => 15,  310 => 14,  297 => 72,  294 => 71,  292 => 64,  289 => 63,  287 => 62,  276 => 56,  272 => 54,  249 => 35,  236 => 25,  232 => 24,  227 => 23,  203 => 35,  190 => 25,  186 => 24,  181 => 23,  158 => 35,  145 => 25,  141 => 24,  136 => 23,  113 => 35,  100 => 25,  96 => 24,  91 => 23,  87 => 22,  80 => 19,  78 => 15,  74 => 14,  65 => 12,  57 => 11,  44 => 7,  35 => 6,  27 => 5,  21 => 1,);
    }
}
