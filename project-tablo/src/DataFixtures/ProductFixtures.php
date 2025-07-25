<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Faker\Factory;

class ProductFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager): void
    {
      $faker = Factory::create();
	for ($i = 0; $i < 10; $i++) {
		$product = new Produit();
		$product->setNom($faker->word);
		$product->setPrix($faker->numberBetween(100, 10000)); // Prix entre 1€ et 100€
		$manager->persist($product);
	}
	$manager->flush();
    }
    public static function getGroups():array
    {
        return ['nouveau'];
    }
}
