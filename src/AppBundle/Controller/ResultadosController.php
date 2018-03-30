<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use AppBundle\Entity\Alcalde;
//use AppBundle\Form\AlcaldeType;

class ResultadosController extends Controller
{
    /**
     * @Route("/resultados", name="resultados_home")
     */
    public function InicioAction(Request $request)
    {
         return $this->render('AppBundle:Resultados:inicio.html.twig');
        
    }
    
    
    /**
     * @Route("/resultados/concejo/grafico", name="ver_resultados_concejo")
     */
    public function GraficoAction(Request $request)
    { 
         $MunicipioID = 1;
        $AlcaldeRepository = $this->getDoctrine()
                                 ->getRepository('AppBundle:Alcalde');
        $AlcaldeResultado = $AlcaldeRepository->findBy(array('municipioid'=>"$MunicipioID"));
        
        $fmln = 0;
        $arena = 0;
        $cd = 0;
        $gana = 0;
       $psd = 0;
        $pcn = 0;
        $pdc = 0;
        foreach ($AlcaldeResultado as $m)
        {
            $fmln = $fmln + $m->getFmln();
            $arena = $arena + $m->getArena();
            $cd = $cd + $m->getCd();
            $gana = $gana + $m->getGana();
            
            $pcn =  $pcn + $m->getPcn();
            $pdc =  $pdc + $m->getPdc();
            $psd =  $psd + $m->getPsd();

            
        }
        
        $data['fmln'] = $fmln;
        $data['arena'] = $arena;
        $data['cd'] = $cd;
        $data['gana'] = $gana;
       
        $data['pcn'] = $pcn;
        $data['pdc'] = $pdc;
        $data['psd'] = $psd;

        
         return $this->render('AppBundle:Resultados:graficos.html.twig', array('data'=> $data));
        
    /**    
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
    
    
    
    
     /**
     * @Route("/resultados/concejo/tabla", name="ver_resultados_concejo_tabla")
     */
    public function TablaResultadosAction(Request $request)
    { 
         $MunicipioID = 1;
        $AlcaldeRepository = $this->getDoctrine()
                                 ->getRepository('AppBundle:Alcalde');
        $AlcaldeResultado = $AlcaldeRepository->findBy(array('municipioid'=>"$MunicipioID"));
        
        $fmln = 0;
        $arena = 0;
        $cd = 0;
        $gana = 0;
       $psd = 0;
        $pcn = 0;
        $pdc = 0;
        foreach ($AlcaldeResultado as $m)
        {
            $fmln = $fmln + $m->getFmln();
            $arena = $arena + $m->getArena();
            $cd = $cd + $m->getCd();
            $gana = $gana + $m->getGana();
            
            $pcn =  $pcn + $m->getPcn();
            $pdc =  $pdc + $m->getPdc();
            $psd =  $psd + $m->getPsd();

            
        }
        
        $data['fmln'] = $fmln;
        $data['arena'] = $arena;
        $data['cd'] = $cd;
        $data['gana'] = $gana;
       
        $data['pcn'] = $pcn;
        $data['pdc'] = $pdc;
        $data['psd'] = $psd;

        
         return $this->render('AppBundle:Resultados:tabla.html.twig', array('data'=> $data));
        
    /**    
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
