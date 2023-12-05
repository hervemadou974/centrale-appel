<?php

namespace App\Form;

use App\Entity\Centrale;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;

class CentraleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_heure', DateTimeType::class, [
                'label' => 'Date et Heure',
                'widget' => 'single_text',
                'attr' => ['class' => 'datepicker'], // Ajoutez une classe pour intégrer un datepicker si nécessaire
                'attr' => ['class' => 'form-control'],
                'attr' => ['class' => 'form-control datetimepicker mb-3'],                 
            ])
            ->add('agent')
            ->add('administre_appellant', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'attr' => ['class' => 'form-control datetimepicker mb-3'], // Ajoutez une classe de marge (mb-3)
            ])
            ->add('prenom_administre', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'attr' => ['class' => 'form-control datetimepicker mb-3'], // Ajoutez une classe de marge (mb-3)
            ])
            ->add('objet', TextType::class, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('commune')
<<<<<<< HEAD
            ->add('telephone', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'attr' => ['class' => 'form-control datetimepicker mb-3'], // Ajoutez une classe de marge (mb-3)
            ])
            ->add('mail', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'attr' => ['class' => 'form-control datetimepicker mb-3'], // Ajoutez une classe de marge (mb-3)
            ])
            ->add('agent')
            ->add('status', ChoiceType::class, [
                'label' => 'Statut',
                'attr' => ['class' => 'form-control'],
                'choices' => [
                    'Traité' => 'option1',
                    'Non traité' => 'option2',
                ],
                'expanded' => true,
                'multiple' => false,
            ]);
=======
            ->add('telephone')
            ->add('mail')
            ->add('destinataire')
            ->add('status')
>>>>>>> 7b3ce8316677c0b100ee1d65159ffc833ad907b5
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Centrale::class,
        ]);
    }
}
