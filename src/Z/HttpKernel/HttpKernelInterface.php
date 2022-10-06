<?php
namespace App\Z\HttpKernel;

use Symfony\Component\HttpFoundation\Response;

Interface HttpKernelInterface
{
   /**
    * cette méthode du noyau lui permet de soumettre la requete
    * et de recuperer la reponse correspondante
    *
    * grace au routeur
    *  
    *  @return Response 
    *
    */ 
        public function handleRequest() : Response;
}