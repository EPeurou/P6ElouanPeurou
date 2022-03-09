<?php

namespace App\DataFixtures;

use App\Entity\Tricks;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function load(ObjectManager $manager): void
    {

        $newuser = new User();
        $newuser->setEmail('test@gmail.com'); 
        $newuser->setUserName('test');
        $password = "test";
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $newuser->setPassword($passwordHash);
        $newuser->setValidate(1);
        $manager->persist($newuser);
        $manager->flush();
        

        $user = $this->userRepository->findOneBy(['userName' => "test"]);
        $product = new Tricks();
        $product->setName('Front Flip');
        $product->setDescription('rotations en avant');
        $product->setMedia(['video621f8522cf023.mp4','video621f8522d0f52.mp4','video621f8522d2029.mp4','video621f8522d2f16.mp4','image621f8522d5515.jpg','image621f8522d644e.jpg']);
        $product->setCategory('flip');
        $product->setMainImage(['image621f8522d8dd1.jpg']);
        $product->setEmbedsingle('<iframe width="560" height="315" src="https://www.youtube.com/embed/cuaJlr1DTMk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        $product->setSlug('front-flip');
        $product->setUser($user);
        $manager->persist($product);
        $manager->flush();

        $product1 = new Tricks();
        $product1->setName('Mac Twist');
        $product1->setDescription('Les flips agrémentés d\'une vrille');
        $product1->setMedia(['image621f8fa114853.jpg']);
        $product1->setCategory('flip');
        $product1->setMainImage(['image621f8522d8dd1.jpg']);
        $product1->setEmbedsingle('<iframe width="560" height="315" src="https://www.youtube.com/embed/gMfmjr-kuOg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        $product1->setSlug('mac-twist');
        $product1->setUser($user);
        $manager->persist($product1);
        $manager->flush();

        $product2 = new Tricks();
        $product2->setName('Slides');
        $product2->setDescription('Un slide consiste à glisser sur une barre de slide. Le slide se fait soit avec la planche dans l\'axe de la barre, soit perpendiculaire, soit plus ou moins désaxé.');
        $product2->setMedia(['image621f87b4352d2.jpg']);
        $product2->setCategory('slides');
        $product2->setMainImage(['image621f87b435def.jpg']);
        $product2->setEmbedsingle('<iframe width="560" height="315" src="https://www.youtube.com/embed/gO5GLk7oQhU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        $product2->setSlug('slides');
        $product2->setUser($user);
        $manager->persist($product2);
        $manager->flush();

        $product3 = new Tricks();
        $product3->setName('Japan Air');
        $product3->setDescription('Le terme old school désigne un style de freestyle caractérisée par en ensemble de figure et une manière de réaliser des figures passée de mode, qui fait penser au freestyle des années 1980 - début 1990 (par opposition à new school)');
        $product3->setMedia(['image621f8967c1adc.jpg']);
        $product3->setCategory('old school');
        $product3->setMainImage(['image621f8967c259a.jpg']);
        $product3->setEmbedsingle('<iframe width="560" height="315" src="https://www.youtube.com/embed/jH76540wSqU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        $product3->setSlug('japan-air');
        $product3->setUser($user);
        $manager->persist($product3);
        $manager->flush();

        $product4 = new Tricks();
        $product4->setName('One Foot');
        $product4->setDescription('Figures réalisée avec un pied décroché de la fixation, afin de tendre la jambe correspondante pour mettre en évidence le fait que le pied n\'est pas fixé. Ce type de figure est extrêmement dangereuse pour les ligaments du genou en cas de mauvaise réception.');
        $product4->setMedia(['image621f88aa1b00e.jpg']);
        $product4->setCategory('flip');
        $product4->setMainImage(['image621f88aa1ca51.jpg']);
        $product4->setEmbedsingle('<iframe width="560" height="315" src="https://www.youtube.com/embed/jyWiHFrIeH4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        $product4->setSlug('one-foot');
        $product4->setUser($user);
        $manager->persist($product4);
        $manager->flush();

        $product5 = new Tricks();
        $product5->setName('Big Foot');
        $product5->setDescription('Rotation 1080°');
        $product5->setMedia(['image621f8f0fe24d9.jpg']);
        $product5->setCategory('rotation');
        $product5->setMainImage(['image621f8f0fe3161.jpg']);
        $product5->setEmbedsingle('<iframe width="560" height="315" src="https://www.youtube.com/embed/Me6Ti5nsK-Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        $product5->setSlug('big-foot');
        $product5->setUser($user);
        $manager->persist($product5);
        $manager->flush();

        $product6 = new Tricks();
        $product6->setName('Back Flip');
        $product6->setDescription('Rotations en arrière');
        $product6->setMedia(['video621f864d9eee5.mp4','image621f864da4dea.jpg']);
        $product6->setCategory('flip');
        $product6->setEmbedsingle('<iframe width="560" height="315" src="https://www.youtube.com/embed/SlhGVnFPTDE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        $product6->setSlug('back-flip');
        $product6->setUser($user);
        $manager->persist($product6);
        $manager->flush();

        $product7 = new Tricks();
        $product7->setName('Rail To Switch');
        $product7->setDescription('Un « rail to switch » signifie que le rider est sorti de la barre avec un quart de tour qui l\'a amené de son côté non naturel. De même, le « switch to rail » consiste à entrer sur la barre en partant en arrière et en effectuant un quart de tour.');
        $product7->setMedia(['image621f8aa58c2a6.png']);
        $product7->setCategory('slides');
        $product7->setMainImage(['image621f8aa58d96e.png']);
        $product7->setEmbedsingle('<iframe width="560" height="315" src="https://www.youtube.com/embed/slWCAZijWTI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        $product7->setSlug('rail-to-switch');
        $product7->setUser($user);
        $manager->persist($product7);
        $manager->flush();

        $product8 = new Tricks();
        $product8->setName('360');
        $product8->setDescription('On désigne par le mot « rotation » uniquement des rotations horizontales ; les rotations verticales sont des flips. Le principe est d\'effectuer une rotation horizontale pendant le saut, puis d\'attérir en position switch ou normal');
        $product8->setMedia(['image621f8e6d9044d.jpg']);
        $product8->setCategory('rotation');
        $product8->setMainImage(['image621f8e6d911c0.jpg']);
        $product8->setEmbedsingle('<iframe width="560" height="315" src="https://www.youtube.com/embed/T59sdEX8PLU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        $product8->setSlug('360');
        $product8->setUser($user);
        $manager->persist($product8);
        $manager->flush();

        $product9 = new Tricks();
        $product9->setName('Hakon Flip');
        $product9->setDescription('rotation désaxée');
        $product9->setMedia(['image621f8ddc57110.jpg']);
        $product9->setCategory('rotation désaxées');
        $product9->setMainImage(['image621f8ddc57b85.jpg']);
        $product9->setEmbedsingle('<iframe width="560" height="315" src="https://www.youtube.com/embed/vUf0ynXU7mo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        $product9->setSlug('hakon-flip');
        $product9->setUser($user);
        $manager->persist($product9);
        $manager->flush();
    }
}
 