<?php

namespace EmpleadorBundle\Form;
 
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;  
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class EmpleadoType extends AbstractType
{



    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombre', TextType::class)
        ->add('sexo', ChoiceType::class, array(
    'choices' => array(
        'Masculino' => 'Masculino',
        'Femenino' => 'Masculino', 
    ),
))->add('cedula', TextType::class)
        ->add('telefono', TextType::class)
        ->add('contrato', ChoiceType::class, array(
    'choices' => array(
        'Termino indefinido' => 'Termino indefinido',
        'Termino definido' => 'Termino definido', 
        'Tiempo parcial' => 'Tiempo parcial', 
    ),
))
        ->add('empleador',  EntityType::class, array(
    // query choices from this entity
    'class' => 'EmpleadorBundle:Empleador', 
    'choice_label' => 'nombre', 
))     ->add('save', SubmitType::class, array('label' => 'Guardar'))
        ->getForm();
    }


   

    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EmpleadorBundle\Entity\Empleado'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'empleadorbundle_empleado';
    }


}
