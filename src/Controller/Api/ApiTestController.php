<?php

namespace App\Controller\Api;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController.
 *
 * @IsGranted("ROLE_USER")
 */
class ApiTestController extends AbstractController
{
    /**
     * @Route("/api/test", name="api_test", methods={"POST"})
     */
    public function apiTest()
    {
        /** @var User $user */
        $user = $this->getUser();

        return $this->json(['id' => $user->getId(), 'username' => $user->getUsername(), 'email' => $user->getEmail(), 'is_admin' => $this->isGranted('ROLE_ADMIN')]);
    }
}
