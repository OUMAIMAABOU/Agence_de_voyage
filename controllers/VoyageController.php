<?php
// use model/voyage;
class voyage{
    Public function Show(){
        $voyage=new voyage();
             return $voyage->getAllData();
      }
      Public function ShowVille(){
        $voyage=new voyage();
             return $voyage->getAllville();
}
}