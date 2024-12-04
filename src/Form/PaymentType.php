<?php

namespace App\Form;

use App\Entity\Payment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaymentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('methodePaiement', ChoiceType::class, [
                'choices' => [
                    'Carte bancaire' => 'creditCard',
                    'PayPal' => 'paypal',
                    'Autre' => 'other',
                ],
                'label' => 'Méthode de paiement',
            ])
            ->add('paymentDetails', TextType::class, [
                'label' => 'Détails du paiement',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Payment::class,
        ]);
    }
}
