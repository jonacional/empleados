<?php

namespace EmpleadorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EmpleadorType extends AbstractType
{

    

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombre', TextType::class)
        ->add('sexo' , ChoiceType::class, array(
    'choices' => array(
        'Masculino' => 'Masculino',
        'Femenino' => 'Masculino', 
    ),
))
        ->add('cedula', TextType::class)
        ->add('telefono', TextType::class)
        ->add('direcion', TextType::class)
        ->add('fechaNac', DateType::class, array(
    'widget' => 'single_text',
    // this is actually the default format for single_text
    'format' => 'yyyy-MM-dd',) )
        ->add('save', SubmitType::class, array('label' => 'Guardart'))
        ->getForm();
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EmpleadorBundle\Entity\Empleador'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'EmpleadorBundle_empleador';
    }


}
