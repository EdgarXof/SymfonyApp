<?php

namespace App\Business;

use App\Entity\Account;
use App\Controller\AccountController;
use App\Form\Accounts1Type;
use App\Form\Accounts2Type;
use App\Repository\AccountsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AccountProcessing extends AccountController
{
    private float $result = 0.0;

    #   function checkIfEnough($account, $controller)
    # {
    #
    #
    #
    #     if ($balance >= $amount) {
    #         return true;
    #     }
    #     return false;
    # } 
    public function withdraw($balance, $amount)
    {

        if ($balance >= $amount) {
            $result = ($balance - $amount);
            #echo '<script type ="text/JavaScript">';
            #echo "alert('$result')";
            #echo '</script>';
            $this->setResult($result);
        } else {
            echo '<script type ="text/JavaScript">';
            echo "alert('not enough')";
            echo '</script>';
            $this->setResult($balance);
        }

        #print((string)$name + "Starting " + (float)$balance);
        #print("withdraw -" + $amount + " €");
        /** if ($balance > $amount) {
         */

        #print((string)$name + "end balance: " + (float)$balance);
    }
    public function getResult(): float
    {
        return $this->result;
    }

    public function setResult(float $result): void
    {
        $this->result = $result;
    }
}
