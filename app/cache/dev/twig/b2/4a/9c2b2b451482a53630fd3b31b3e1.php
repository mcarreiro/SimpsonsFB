<?php

/* sfbBundle:Default:email.html.twig */
class __TwigTemplate_b24a9c2b2b451482a53630fd3b31b3e1 extends Twig_Template
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
        echo "<html> 
    <a href=\"SimpsonsFB.com.ar\">
        <div style=\"padding:14px;margin-bottom:4px;background-color:#2d2828;border-radius:5px\">        
               <!--<img width=\"140px\" height=\"29px\" src=\"http://www.zepfilms.com/social-images/simpsonsfb.jpg\" alt=\"MiCursada\" />    -->
        </div>
    </a>        

    <h4 style=\"color:black\"> Sugerencia!</h4>    
    
    <p style=\"font-size:13px\">
        SimpsonsFB la rompe con la simpleza! 
    </p>
    
    <p style=\"font-size:18px\"> La frase con sugerencias es: </p>

    <p style=\"font-size:13px\"><b>Id:</b> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo " </p>
    <p style=\"font-size:13px\"><b>Frase:</b> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "frase"), "html", null, true);
        echo " </p>
    <p style=\"font-size:13px\"><b>Episodio:</b> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "episodio"), "html", null, true);
        echo " </p>
    <p style=\"font-size:13px\"><b>Temporada:</b> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "temporada"), "html", null, true);
        echo " </p>
    ";
        // line 20
        if ($this->getContext($context, "lenguaje")) {
            // line 21
            echo "            <p style=\"font-size:13px\"><b>Lenguaje:</b> Español </p>
    ";
        } else {
            // line 22
            echo "    
            <p style=\"font-size:13px\"><b>Lenguaje:</b> Latino </p>
    ";
        }
        // line 24
        echo " 
    <p style=\"font-size:13px\"><b>Personaje:</b> ";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "personaje"), "html", null, true);
        echo " </p>

    <p style=\"font-size:18px\"> La sugerencia es: </p>
    <p style=\"font-size:13px\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "body"), "html", null, true);
        echo " </p>
    
    <p style=\"font-size:13px;font:italic;color:#888;\">El equipo de TuVieja</p></br>
 
    <p style=\"color:#888;font-size: 10px\">Suck it!</p>.
 
</html>";
    }

    public function getTemplateName()
    {
        return "sfbBundle:Default:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 28,  64 => 25,  61 => 24,  56 => 22,  52 => 21,  50 => 20,  46 => 19,  42 => 18,  38 => 17,  34 => 16,  17 => 1,);
    }
}
