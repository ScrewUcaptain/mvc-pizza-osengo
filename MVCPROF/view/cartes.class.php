<?php
   class Carte {
      private Array $liste;
      public function __construct(Array $liste) {
         $this->liste = $liste;
      }

      public function html() {
         foreach($this->liste as $pizza) {
            echo "
					<div class='menu-hold'>
               <div class='menu-container'>
                  <div class='menu-img'>
                     &nbsp;
                  
                  </div>
                  <h1 class='menu-title'>{$pizza->getNom()}</h1>
                  <p class='menu-p'>{$pizza->getDescription()}</p>
                  <aside class='prix'>
                     <p class='tarifs'>La Part {$pizza->getPrixPart()}€</p>
                     <p class='tarifs'>Moyenne {$pizza->getPrixPetite()}€</p>
                     <p class='tarifs'>Grande {$pizza->getPrixGrande()}€</p>
                  </aside>
               </div>
            </div>
            ";
         }
      }
   }
