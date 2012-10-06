<?php

namespace sfb\sfbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use sfb\sfbBundle\Entity\Frases;
use sfb\sfbBundle\Entity\Personajes;
use sfb\sfbBundle\Form\FrasesType;
use sfb\sfbBundle\Entity\Temporadas;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Frases controller.
 *
 * @Route("/frases")
 */
class FrasesController extends Controller
{
    /**
     * Lists all Frases entities.
     *
     * @Route("/", name="frases")
     * @Template()
     */
    /*public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('sfbBundle:Frases')->findAll();

        return array('entities' => $entities);
    }*/

    /**
     * Finds and displays a Frases entity.
     *
     * @Route("/{id}/show", name="frases_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('sfbBundle:Frases')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se pudo encontrar esa frase.');
        }

        //$deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity);
            //'delete_form' => $deleteForm->createView(),        
    }

    /**
     * Displays a form to create a new Frases entity.
     *
     * @Route("/new", name="frases_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Frases();
        $maxTemp = Temporadas::$maxTemp;
        $personajes = $product = $this->getDoctrine()
        ->getRepository('sfbBundle:Personajes')
        ->findAll();
        $form   = $this->createForm(new FrasesType($personajes), $entity);
        return $this->render('sfbBundle:Frases:new.html.twig',array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'maxTemp' => $maxTemp,
            'personajes' => $personajes
        ));
    }

    /**
     * Creates a new Frases entity.
     *
     * @Route("/create", name="frases_create")
     * @Method("post")
     * @Template("sfbBundle:Frases:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Frases();
        $frase = $request->request->get('frase');
         $frase =  htmlentities(nl2br($frase,false));
        //$frase = str_replace("<br>", "\n", $frase);  
        $personajeId = $request->request->get('personajes');
        $espisodioId = $request->request->get('episodios');
        $lenguaje = $request->request->get('lenguaje');        
        
        if(strlen($frase)<5){
            
        }
        
        $entity->setNombre($frase);
        $entity->setLenguaje($lenguaje);
        
        if($espisodioId == null || $espisodioId == ''){
                $espisodioId = 0; //No saben el episodio
        }
         $espisodio = $this->getDoctrine()
            ->getRepository('sfbBundle:Episodios')
            ->findOneById($espisodioId);
        $entity->setEpisodio($espisodio);  
        
        $personaje = $this->getDoctrine()
        ->getRepository('sfbBundle:Personajes')
        ->findOneById($personajeId);
        $entity->setPersonaje($personaje);
        



            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();
            

            return $this->redirect($this->generateUrl('frases_show', array('id' => $entity->getId())));
            
        }
        

    /**
     * Displays a form to edit an existing Frases entity.
     *
     * @Route("/{id}/edit", name="frases_edit")
     * @Template()
     */
    /*public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('sfbBundle:Frases')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Frases entity.');
        }

        $editForm = $this->createForm(new FrasesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }*/

    /**
     * Edits an existing Frases entity.
     *
     * @Route("/{id}/update", name="frases_update")
     * @Method("post")
     * @Template("sfbBundle:Frases:edit.html.twig")
     */
    /*public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('sfbBundle:Frases')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Frases entity.');
        }

        $editForm   = $this->createForm(new FrasesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('frases_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }*/

    /**
     * Deletes a Frases entity.
     *
     * @Route("/{id}/delete", name="frases_delete")
     * @Method("post")
     */
   /* public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('sfbBundle:Frases')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Frases entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('frases'));
    }*/

   /* private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }*/
}
