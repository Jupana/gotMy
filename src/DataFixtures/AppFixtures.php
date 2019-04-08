<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $this->loadUsers($manager);
       
    }

    private function loadUsers(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('Nicol');
        $user->setName('Nicoleta Laura');
        $user->setEmail('nicol@nicol.com');
        $user->setPassword(
            $this->passwordEncoder->encodePassword(
                $user,
                'nicol123'
            )
        );
        $user->setSurname1('Todoran');
        $user->setSurname2('Gologan');
        
        $manager->persist($user);
        $manager->flush();
    }

    
   
}