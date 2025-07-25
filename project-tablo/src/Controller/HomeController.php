<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProduitRepository;
use App\Entity\Produit;
use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Flasher\Prime\FlasherInterface;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]

public function index(ProduitRepository $produitRepository): Response
	{
		$produits = $produitRepository->findAll();

		return $this->render('home/index.html.twig', [
			'produits' => $produits,
		]);
	}
    #[Route('/delete/{id}', name: 'delete_produit', methods: ['POST'])]
public function delete(Produit $produit, EntityManagerInterface $em,FlasherInterface $flasher): Response
	{
		$em->remove($produit);
        $em->flush();
        $flasher->success('Produit supprimé avec succès !');

		return $this->redirectToRoute('app_home');
	}
    }

