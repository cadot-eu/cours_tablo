<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;
public function __construct(UserPasswordHasherInterface $passwordHasher)
{
	$this->passwordHasher = $passwordHasher;
}
   public function load(ObjectManager $manager): void
{
	$user = new User();
	$user->setEmail('a@aa.aa');
	$hashedPassword = $this->passwordHasher->hashPassword(
		$user,
		'motdepasse'
	);
	$user->setPassword($hashedPassword);
	$manager->persist($user);

	$manager->flush();
}
}
