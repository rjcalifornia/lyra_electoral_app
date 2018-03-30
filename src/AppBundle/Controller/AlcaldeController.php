<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Alcalde;
use AppBundle\Form\AlcaldeType;

class AlcaldeController extends Controller
{
    /**
     * @Route("/agregar-acta-concejo", name="agregar_acta_concejo")
     */
    public function AgregarActaConcejoAction(Request $request)
    {   
        $concejo = new Alcalde();
        $form = $this->createForm(AlcaldeType::class, $concejo);
        $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
        // $form->getData() holds the submitted values
        // but, the original `$task` variable has also been updated
        $concejo = $form->getData();

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
        $em = $this->getDoctrine()->getManager();
        $em->persist($concejo);
        $em->flush();

        return $this->redirectToRoute('homepage');
    }
         return $this->render('AppBundle:Alcalde:agregar-acta-concejo.html.twig', array('concejo'=> $form->createView()));
        // replace this example code with whatever you need
        /**
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
         * 
         */
    }
}
