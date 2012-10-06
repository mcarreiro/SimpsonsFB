<?php

namespace sfb\sfbBundle\Form;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use sfb\sfbBundle\Entity\Temporadas;

class FrasesType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $temporadas = array();
        for($i=0; $i <= Temporadas::$maxTemp;$i++){
                $temporadas[$i] = 'Temporada '.$i;
        }
        
        $builder
            ->add('nombre','textarea', array('max_length' => 500,"attr"=>array('rows' => '8', 'cols' =>'50' )))
            ->add('lenguaje','choice',array(
                'choices'   => array(1 => 'Latino', 2 => 'Español'),
                 'required'  => true,'label' => '' )) 
            ->add('personaje','entity',array(
                'class' => 'sfbBundle:Personajes',
                'property'=>'nombre', 'required'  => true))
            /*->add('temporada','choice',array(
                'choices'   => $temporadas,
                 'required'  => true,'label' => '' , 'required'  => true)) */
            ->add('episodio','entity',array(
                'class' => 'sfbBundle:Episodios',
                'property'=>'nombre', 'required'  => true))
            
            ;
    }

    public function getName()
    {
        return 'sfb_sfbbundle_frasestype';
    }
}
