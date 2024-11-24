<?php

namespace App\Form;

use App\Entity\Annonce;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('departure', TextType::class, ['label' => 'Lieu de départ'])
            ->add('destination', TextType::class, ['label' => 'Lieu de destination'])
            ->add('departure_time', DateTimeType::class, ['label' => 'Heure de départ'])
            ->add('seats_available', NumberType::class, ['label' => 'Nombre de places disponibles'])
            ->add('price_per_seat', NumberType::class, ['label' => 'Prix par place'])
            ->add('description', TextareaType::class, ['label' => 'Description', 'required' => false]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}
