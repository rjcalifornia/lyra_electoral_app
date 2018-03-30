<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;   
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class ProcesadasController extends Controller
{
    /**
     * @Route("/jrv/seleccion", name="jrv_seleccion")
     */
    public function SeleccionAction(Request $request)
    {
        $defaultData = array('message' => 'Seleccionar tipo de acta:');
        $form = $this->createFormBuilder($defaultData)
       ->add('centrovotacion', 
              EntityType::class, 

                                array(
                                    'class' => \AppBundle\Entity\Centrovotacion::class,
                            'choice_label' => 'nombrecentro',
                            'choice_value' => 'id',
                                    'placeholder'=> 'Seleccione Centro de Votacion',
                                    "attr" => array
                                    ('class' => 'select2_single form-control')
                                    ))
        ->add('siguiente', SubmitType::class, array(
            
            "attr" => array
                        ('class' => 'btn btn-success')
        ))
        ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $data = $form->getData();
            $centroVotacionId = $data['centrovotacion'];
            $AlcaldeRepository = $this->getDoctrine()
                                 ->getRepository('AppBundle:Alcalde');
                $findCentro = $AlcaldeRepository->findBy(array('centrovotacion'=>$centroVotacionId));
                
                
                
             
                $DiputadoRepository = $this->getDoctrine()
                                 ->getRepository('AppBundle:Diputado');
                $findCentroDiputado = $DiputadoRepository->findBy(array('centrovotacion'=>$centroVotacionId));
                
                
                $CentroRepository = $this->getDoctrine()
                                 ->getRepository('AppBundle:Centrovotacion');
                $findidcentro = $CentroRepository->findOneBy(array('id'=>$centroVotacionId));
                $name = $findidcentro->getNombrecentro();
                $cantidadjrv = $findidcentro->getTotaljrv();
            
            return $this->render('AppBundle:Procesos:procesados.html.twig', array('resultado'=> $findCentro, 'resultadodiputado'=>$findCentroDiputado, 'nombrecentro' => $name, 'totaljrv' => $cantidadjrv));
        }
         return $this->render('AppBundle:Procesos:seleccion.html.twig', array('seleccion'=> $form->createView()));
        // replace this example code with whatever you need
        /**
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
         * 
         */
    }
}
