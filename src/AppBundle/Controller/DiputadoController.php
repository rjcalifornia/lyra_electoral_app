<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Diputado;
use AppBundle\Form\DiputadoType;

class DiputadoController extends Controller
{
    /**
     * @Route("/agregar-acta", name="agregar_diputado")
     */
    public function AgregarActaAction(Request $request)
    {   
        $diputado = new Diputado();
        $form = $this->createForm(DiputadoType::class, $diputado);
        $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
        // $form->getData() holds the submitted values
        // but, the original `$task` variable has also been updated
        $diputado = $form->getData();

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
        $em = $this->getDoctrine()->getManager();
        $em->persist($diputado);
        $em->flush();

        return $this->redirectToRoute('homepage');
    }
         return $this->render('AppBundle:Diputado:agregar-acta.html.twig', array('diputado'=> $form->createView()));
        // replace this example code with whatever you need
        /**
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
         * 
         */
    }
}
