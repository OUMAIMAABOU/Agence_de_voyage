<?php
// use model/voyage;
class VoyageController{
    Public function Afficher(){
     return voyage:: Afficher();
      }
      Public function ShowVille(){
        $voyage=new voyage();
             return $voyage->getAllville();
}
}