<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExpenseController extends AbstractController
{
    /**
     * @Route("/", name="expense")
     */
    public function index()
    {
        $expenses= ['expense one', 'expense two'];

        return $this->render('expense/index.html.twig', array
            ('expenses' => $expenses));
    }
}
