<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProduitRepository;
use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
use Flasher\Prime\FlasherInterface;
use Symfony\Component\HttpFoundation\Request;

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
    public function delete(Produit $produit, EntityManagerInterface $em, FlasherInterface $flasher): Response
    {
        $em->remove($produit);
        $em->flush();
        $flasher->success('Produit supprimé avec succès !');

        return $this->redirectToRoute('app_home');
    }

    #[Route('/save', name: 'save_produit', methods: ['POST'])]
    public function save(Request $request, EntityManagerInterface $em, FlasherInterface $flasher): Response
    {
        $data = json_decode($request->getContent(), true);
        if($data['id'] != "") {
            $produit = $em->getRepository(Produit::class)->find($data['id']);
        }
        else {
            $produit = new Produit();
        }
        $produit->setNom($data['nom']);
        $produit->setPrix($data['prix']);
        $em->persist($produit);
        $em->flush();

        $flasher->success('Produit sauvegardé avec succès !');

        return new Response('Produit sauvegardé', 200);
    }
}

