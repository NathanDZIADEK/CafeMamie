<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AjoutCafeType;

class BaseController extends AbstractController
{
    #[Route('/', name: 'app_accueil')] // /base est l’URL de la page, name est le nom de la route
public function index(): Response
{
return $this->render('base/index.html.twig', [ // render est la fonction qui va chercher le fichier TWIG pour l'afficher
]);
}
    #[Route('/contact', name: 'app_contact')] // /base est l’URL de la page, name est le nom de la route
public function contact(): Response
{
    $form = $this->createForm(AjoutCafeType::class);
return $this->render('base/contact.html.twig', [ // render est la fonction qui va chercher le fichier TWIG pour l'afficher
    'form' => $form->createView()
]);
}
}
