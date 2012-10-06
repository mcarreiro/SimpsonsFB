<?php

namespace sfb\sfbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sfb\sfbBundle\Entity\Episodio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Episodios
{
    
    static $episodes = array( 
array("Simpsons Roasting on an Open Fire","Bart the Genius "	,"Homer's Odyssey "	,"There's No Disgrace Like Home ","Bart the General ","Moaning Lisa ","The Call of the Simpsons ","The Telltale Head ","Life on the Fast Lane "	
,"Homer's Night Out ","The Crepes of Wrath ","Krusty Gets Busted ","Some Enchanted Evening" ) );
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var float $temporada
     *
     * @ORM\Column(name="temporada", type="float")
     */
    private $temporada;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set temporada
     *
     * @param float $temporada
     */
    public function setTemporada($temporada)
    {
        $this->temporada = $temporada;
    }

    /**
     * Get temporada
     *
     * @return float 
     */
    public function getTemporada()
    {
        return $this->temporada;
    }
}