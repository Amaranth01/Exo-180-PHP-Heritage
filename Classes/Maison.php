<?php
 class Maison extends Habitation {

     protected bool $jardin;
     protected int $etage;
     protected bool $garage;

     public function __construct(string $pays, string $ville, int$codePostal, int $chambres, int $pieces, bool $jardin, int $etage, bool $garage)
     {

         parent::__construct($pays, $ville, $codePostal, $chambres, $pieces);

        $this->setJardin($jardin);
        $this->setEtages($etages);
        $this->setGarage($garage);
     }

     /**
      * @return bool
      */
     public function isJardin(): bool
     {
         return $this->jardin;
     }

     /**
      * @param bool $jardin
      */
     public function setJardin(bool $jardin): void
     {
         $this->jardin = $jardin;
     }

     /**
      * @return int
      */
     public function getEtage(): int
     {
         return $this->etage;
     }

     /**
      * @param int $etage
      */
     public function setEtage(int $etage): void
     {
         $this->etage = $etage;
     }

     /**
      * @return bool
      */
     public function isGarage(): bool
     {
         return $this->garage;
     }

     /**
      * @param bool $garage
      */
     public function setGarage(bool $garage): void
     {
         $this->garage = $garage;
     }



 }
