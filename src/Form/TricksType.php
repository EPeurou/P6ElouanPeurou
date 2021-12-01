<?php

namespace App\Form;

use App\Entity\Tricks;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\File;


class TricksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('idUser')
            // ->add('Categorie', ChoiceType::class,[
            //     'attr'=>[
            //         'class'=>'form-control'
            //     ]
            // ])
            ->add('name', TextType::class,[
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('description', TextAreaType::class,[
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            // ->add('author', )
            ->add('media', FileType::class, [
                'multiple' => true,
                'mapped' => false,
                'required' => false,
                'attr'=>[
                    'class'=>'btn btn-primary'
                ],
                'constraints' => [
                    new All([
                        'constraints' => [
                            new File([
                                'maxSize' => '1G',
                               
                            ]),
                        ],
                    ]),
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tricks::class,
        ]);
    }
}
