<?php

namespace App\Form;

use App\Entity\Tricks;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
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
            ->add('mediaName', TextType::class)
            ->add('category', ChoiceType::class,[
                'label'=>'Categorie',
                'attr'=>[
                    'class'=>'form-select'
                ],
                'choices'  => [
                    'flip' => 'flip',
                    'slides' => 'slides',
                    'grabs' => 'garbs',
                    'old school' => 'old school',
                    'rotation' => 'rotation',
                    'rotations désaxées'=> 'rotations désaxées'
                ],
            ])
            ->add('name', TextType::class,[
                'label'=>'Nom du trick',
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('description', TextAreaType::class,[
                'label'=>'Description',
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            // ->add('author', )
            ->add('media', FileType::class, [
                'multiple' => true,
                'label'=>'rechercher un fichier:',
                'mapped' => false,
                'required' => false,
                'attr'=>[
                    'class'=>'btn'
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
            ->add('valider', SubmitType::class,[
                'attr'=>[
                    'class'=>'btn btn-primary mb-3'
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
