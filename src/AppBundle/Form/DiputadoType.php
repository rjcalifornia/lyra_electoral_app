<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;   
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class DiputadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          
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
          
                
                
            ->add('jrvnum', 
                    TextType::class, 
                    array(
                       
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>'Escriba el numero de la JRV')))
             ->add('fmln', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>'Votos FMLN')))
                            
                     ->add('arena', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>'Votos ARENA')))    
                            
                            
                    ->add('cd', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>'Votos CD')))
                            
                    ->add('gana', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>'Votos GANA')))
                           
                            
                    ->add('fps', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>'Votos FPS')))
                            
                            
                    ->add('pcn', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>'Votos PCN')))
                            
                    
                    ->add('pdc', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>'Votos PDC')))
                
                
                ->add('escrutados', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>false)))
                            
                   
                            
                    
                            
                            
                    ->add('psd', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>'Votos PSD')))
                            
                    ->add('abstenciones', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>false)))
                            
                    ->add('impugnados', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>false)))
                            
                    ->add('nulo', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>false)))
                            
                            
                    ->add('sobrantes', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>false)))
                            
                    ->add('faltantes', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>false)))    
                            
                    ->add('inutilizadas', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>false))) 
                        
                    ->add('entregados', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>false)))
                
                    ->add('municipioid', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>false)))
                
                
                    ->add('cruzados', 
                    TextType::class, 
                    array(
                       'required'   => true,
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>false)))
                
                
                    ->add('guardar', SubmitType::class, 
                    array('label' => 'Guardar', 
                        "attr" => array('class' => 'btn btn-primary m-t-15 waves-effect')
                        ))
                
                /**
            ->add('demandanumero', 
                    TextType::class, 
                    array(
                       
                        "attr" => array
                        ('class' => 'form-control', 'placeholder'=>false)))
                
            ->add('nombre', 
                    TextType::class, 
                    array("attr" => array
                        ('class' => 'form-control',  'placeholder'=>false)))
                
            ->add('demandantes', 
                    TextType::class, 
                    array(
                        'required'   => false,
                        "attr" => array
                        ('class' => 'form-control',  'placeholder'=>false)))
            
            ->add('autoridadesdemandadas', 
                    TextType::class, 
                    array(
                        'required'   => false,
                        "attr" => array
                        ('class' => 'form-control',  'placeholder'=>false)))
                
                
            ->add('intervinientes', 
                    TextType::class, 
                    array(
                        'required'   => false,
                        "attr" => array
                        ('class' => 'form-control',  'placeholder'=>false)))
                
            ->add('contenido', 
                    TextareaType::class, 
                    array(
                        'required'   => false,
                        "attr" => array
                        ('class' => 'form-control no-resize', 'rows' =>'4')))
                
            ->add('fecha', DateType::class, array(
                        'widget'=> 'single_text',
                    "attr" => array
                            ('class' => 'datepicker form-control')

                ))
                
                
            ->add('archivodemanda', FileType::class, array(
                'label' => 'Auto de Admision:', 
                'required'   => true, 
                "attr" => array('accept'=>'application/pdf'),
                'data_class' => null))
                
            
                
            ->add('guardar', SubmitType::class, 
                    array('label' => 'Registrar', 
                        "attr" => array('class' => 'btn btn-primary m-t-15 waves-effect')))

                
                 * 
                 */
            
           
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Diputado'
        ));
    }
}
