<?php

namespace AppBundle\Controller\Transaction;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class JsonController extends Controller
{
    /**
     * @Route("/transaction/get_all.json", name="transaction_get_all")
     */
    public function getAllAction(Request $request)
    {
      
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/transaction/get_by_date.json", name="transaction_get_by_date")
     */
    public function getByDateAction(Request $request) {

    }
}
