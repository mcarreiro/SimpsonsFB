<?php

namespace sfb\sfbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sfb\sfbBundle\Controller\FrasesController;
use sfb\sfbBundle\Entity\Frases;
use sfb\sfbBundle\Entity\Episodios;
use sfb\sfbBundle\Form\FrasesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    
    public function indexAction(){
        
        $entity = new Frases();
        $form   = $this->createForm(new FrasesType(), $entity);
        $view =$form->createView();
        
        return $this->render('sfbBundle:Default:index.html.twig', array('form'   => $view));
    }
    /**
     * Buscar frase
     *     
     * @param type $name
     * @return type 
     */
    public function searchAction(Request $request)
    {

        $frase = $request->request->get('frase');
        if(strlen($frase)<=3){
            //return ;
        }
        
        
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery(
             'SELECT f FROM sfbBundle:Frases f WHERE f.nombre LIKE  :fraseDada'
        )->setParameter('fraseDada', '%'.$frase.'%')->setMaxResults(7);

        $frases = $query->getResult();
        
        $fraseJSON = array();
        
        foreach ($frases as $i=>$elem){
                $fraseJSON[$i] = array('id'=>$elem->getId(),'frase'=>$elem->getNombre(), 'imagen'=>$elem->getPersonaje()->getImagen(),
                    'lenguaje'=>$elem->getlenguaje(), 'episodio'=>$elem->getEpisodio()->getNombre(), 'temporada'=>$elem->getEpisodio()->getTemporada()) ;               
            }
          
        
        $response =  new Response(json_encode($fraseJSON));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
    public function getEpisodesAction(Request $request)
    {
        $temporada = $request->request->get('temp');
        //$episodios = Episodios::$episodes[$temporada];
        $episodios = $this->getDoctrine()
        ->getRepository('sfbBundle:Episodios')
        ->findByTemporada($temporada);
        
        $episodiosJson = array();
        
        foreach($episodios as $ep){
        $episodiosJson[$ep->getId()] = $ep->getNombre();
        }
        $response =  new Response(json_encode($episodiosJson));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
    public function enviarSugerenciaAction(Request $request){
                try {
                    $body = $request->request->get('body');
                    $id = $request->request->get('id');
                     
                    $frase = $this->getDoctrine()
                    ->getRepository('sfbBundle:Frases')
                    ->findOneById((int)$id);
                    
                    error_log($frase->getNombre());
                    
            $message = \Swift_Message::newInstance()
                ->setSubject('SimpsonsFB: Modificación Sugerida')
                ->setFrom('martin301290@gmail.com')
                ->setTo('martin301290@gmail.com')
                ->setCC('nicolas.ortiz19@gmail.com')    
                //->setTo('nicolas.ortiz19@gmail.com')
                ->setBody($this->renderView('sfbBundle:Default:email.html.twig', 
                        array('id' => $id, 'body'=> $body, 'frase' => $frase->getNombre(), 'episodio' => $frase->getEpisodio()->getNombre(), 'temporada' => $frase->getEpisodio()->getTemporada(),
                                         'lenguaje' => $frase->getLenguaje(),  'personaje' => $frase->getPersonaje()->getNombre()
                    
                    )),'text/html');

            $this->get('mailer')->send($message);
        } catch(\Exception $e) {
            throw $e;
        }
	return array();
/*	$response =  new Response(json_encode(array()));
        $response->headers->set('Content-Type', 'application/json');
        return $response;*/
    }
}
