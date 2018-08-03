<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('fechaActualizacion', DateType::class, array(
//                'label' => 'Dispos :',
//                'widget' => 'single_text',
//
//            ))
//            ->add('plainPassword', RepeatedType::class, array(
//                'type' => PasswordType::class,
//                'attr' => ['class' => 'col-md-6', 'autocomplete'=>'off'],
//                'first_options' => array('label' => 'Contraseña'),
//                'second_options' => array('label' => 'Confirmar contraseña'),
//
//            ))
            ->add('nombre', null, [
                'attr' => ['class' => 'col-md-6']
            ])
            ->add('apellido', null, [
                'attr' => ['class' => 'col-md-6']
            ])
            ->add('email', null, [
                'attr' => ['class' => 'col-md-6']
            ])
            ->add('username', null, [
                'attr' => ['class' => 'col-md-6']
            ])
            ->add('roles', ChoiceType::class, [
                'expanded' => true,
                'multiple' => true,
                'choices' => ['ROLE_ADMIN' => 'ROLE_ADMIN', 'ROLE_USER' => 'ROLE_USER'],
                'expanded' => true,
                'multiple' => true,
                'attr' => ['class' => 'col-md-6']
            ])
            ->add('imageFile', VichFileType::class, array(
                'required' => false,
                'label' => 'Foto de perfil',
                'allow_delete' => true, // not mandatory, default is true
                'download_link' => true, // not mandatory, default is true
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }


}
