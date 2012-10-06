<?php

/* sfbBundle:Default:index.html.twig */
class __TwigTemplate_44d8ae54e26d8ac2980cdc98449d2960 extends Twig_Template
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
        echo "<div class=\"shadow\">
    <div class=\"buscador\">
            <div class=\"searchText\">
                <input action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frases_search"), "html", null, true);
        echo "\" required=\"true\" type=\"search\" min=\"3\" id=\"fraseBuscada\" class=\"searchInput\"value=\"Buscá tu frase...\" 
                       onclick=\"if(this.value=='Buscá tu frase...'){this.value=''}\" onblur=\"if(this.value==''){this.value='Buscá tu frase...'}\" onkeydown=\"if (event.keyCode == 13) document.getElementById('searchButton').click()\"/>
                <button style=\"top: 20px;\"id=\"searchButton\" class=\"searchButton\" type=\"button\" onclick=\"buscarFrases()\"><img width=\"30px\" height=\"30px\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/lupita.png"), "html", null, true);
        echo "\"/></button>
            </div>       
    </div>
</div>
<div class=\"buttonWrapper\">
<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frase_new"), "html", null, true);
        echo "\" class=\"subirButton\" >Subir nueva Frase!</a>
</div>

<br/>
<img style=\"visibility: hidden\" class=\"ajaxLoader\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ajax-loader.gif"), "html", null, true);
        echo "\"/>

<div style=\"visibility: hidden\" class=\"errorLength\">La frase buscada es muy corta, por favor indique una con más longitud</div>

<div class=\"noHayResultados\" style=\"display: none;\">Do'h! No existe esa frase. Súbela!</div>

<div class=\"resultados\"></div>

<div  class=\"resultadoMail\" style=\"display: none;\">Se envió el mail!</div>

<div id=\"new_div\" style=\"display: none;\"> </div>



";
    }

    public function getTemplateName()
    {
        return "sfbBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  47 => 13,  39 => 8,  34 => 6,  29 => 3,  26 => 2,);
    }
}
