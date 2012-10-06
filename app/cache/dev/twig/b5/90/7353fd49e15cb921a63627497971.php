<?php

/* sfbBundle:Frases:new.html.twig */
class __TwigTemplate_b5907353fd49e15cb921a63627497971 extends Twig_Template
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
        echo "<form id=\"newForm\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frase_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
        
        <!--";
        // line 5
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "nombre"));
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "lenguaje"));
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "personaje"));
        echo "
         ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "episodio"));
        echo "-->
    
    
    
        <textarea class=\"newFraseTextArea\" name=\"frase\" rows=\"8\" cols=\"50\"></textarea>
         <select name=\"personajes\" id=\"personajes\">
            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "personajes"));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 16
            echo "                <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "car"), "id"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "car"), "nombre"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "   
        </select>
        
        <select id=\"season\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("getEpisodes"), "html", null, true);
        echo "\"   onchange=\"getEpisodes();\">
            <option value=0>Elegir Temporada...</option>
            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 23
            echo "                 <option value=";
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo ">Temporada ";
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "    
        </select >
        
        <select name=\"episodios\" id=\"episodios\">
\t<option value=0>No Tiene Episodios</option>
        </select>
        
        <select name=\"lenguaje\" id=\"lenguaje\">
            <option value=0>Latino</option>
            <option value=1>Español</option>
        </select> 
    <p>
        <button class=\"subirButton\" type=\"submit\">Subir!</button>
    </p>
</form>

";
    }

    public function getTemplateName()
    {
        return "sfbBundle:Frases:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  88 => 23,  84 => 22,  79 => 20,  74 => 17,  63 => 16,  59 => 15,  49 => 9,  45 => 7,  41 => 6,  37 => 5,  29 => 3,  26 => 2,);
    }
}
