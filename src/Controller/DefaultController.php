<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * Class DefaultController.
 *
 * @IsGranted("ROLE_USER")
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/api/test", name="api_test", methods={"POST"})
     */
    public function apiTest()
    {
        /** @var User $user */
        $user = $this->getUser();
        return $this->json(["id" => $user->getId(), "username" => $user->getUsername(), "email" => $user->getEmail(), "is_admin" => $this->isGranted("ROLE_ADMIN") ]);
    }
}
