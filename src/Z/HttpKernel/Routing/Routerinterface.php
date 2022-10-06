<?php
namespace APP\z\Routing;

Interface RouterInterface





{
   /**
    * cette méthode du routeur recupere les controleurs,
    * les tries et les sauvegarde dans l'armoire a routes 
    * en fonction de leur nom.
    * 
    *   @param array $controllers
    *   @return void
    */
    public function sortRoutesByName() : void;

    /**
         * Cette méthode du routeur permet de l'exécuter
         * 
         * Et elle nous retourne une réponse qui peut être : 
         *      - nulle si l'uri de l'url ne match pas avec l'uri de la route 
         *        dont l'application attend la réception
         *      - ou un tableau contenant le contrôleur censé gérer la requête si ça match 
         *
         * @return array|null
         */
        public function run() : ?array;


}