<?php

/* sfbBundle:Frases:show.html.twig */
class __TwigTemplate_f90d852ea40e73d0ceabe0e7af4c685c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
<div class=\"frase clearfix\">
    ";
        // line 5
        if ($this->getAttribute($this->getContext($context, "entity"), "lenguaje")) {
            // line 6
            echo "            <img class=\"bandera\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/banderas/Spain_flag_icon.png"), "html", null, true);
            echo "\"/>
    ";
        } else {
            // line 7
            echo "    
            <img class=\"bandera\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/banderas/mexico_flag_icon.jpg"), "html", null, true);
            echo "\"/>
    ";
        }
        // line 9
        echo " 
    <img href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frases_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" class=\"cabeza\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/cabezas/" . $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "personaje"), "imagen"))), "html", null, true);
        echo "\"/>
    <div class=\"infoFrase\">
        <div class=\"frasePrincipal\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
        echo "</div> <br/>
        <div class=\"detalleFrase\">Episodio: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "episodio"), "nombre"), "html", null, true);
        echo "<br/>
       Temporada: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "episodio"), "temporada"), "html", null, true);
        echo "</div>
     </div>  
    <div class=\"botonesFrase\">
    <a class=\"modificacion\" onclick=\"mandarSugerencia(";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo ")\" >Enviar Sugerencia</a>
    <span style=\"float:right\" class='st_facebook_hcount' displayText='Facebook' st_url=\"http://simpsonsfb.com.ar/frase/show/";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "\"></span>
    </div>
</div> 

";
    }

    public function getTemplateName()
    {
        return "sfbBundle:Frases:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  73 => 17,  67 => 14,  63 => 13,  59 => 12,  52 => 10,  49 => 9,  44 => 8,  41 => 7,  35 => 6,  33 => 5,  29 => 3,  26 => 2,);
    }
}
