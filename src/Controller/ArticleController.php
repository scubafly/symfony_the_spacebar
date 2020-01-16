<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController {

  /**
   * @Route("/")
   */
  public function homepage() {
    return new Response('WHOEOE! This is the homepage.');
  }

  /**
   * @Route("/news/{slug}")
   */
  public function show($slug) {
    $comments = [
      'Tack hogshead coxswain splice the main brace clipper tackle sutler maroon boatswain fathom.',
      'Brigantine chantey knave swab pinnace Jack Tar landlubber or just lubber rum pink piracy.',
      'Boatswain Nelsons folly lee sloop matey jury mast clipper swab mizzenmast jack.',
    ];

    return $this->render('article/show.html.twig', [
      'title' => ucwords(str_replace('-', ' ', $slug)),
      'comments' => $comments,
    ]);
  }

}