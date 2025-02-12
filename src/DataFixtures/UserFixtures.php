<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('admin@annoncescharlevoix.ca');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user, 'Arnaud'
        ));
        $manager->persist($user);
        $user2 = new User();
        $user2->setEmail('besnard.arno@gmail.com');
        $user2->setPassword($this->passwordEncoder->encodePassword(
            $user2, 'Arno'
        ));
        $manager->persist($user2);
        $manager->flush();
    }
}
