<?php
class ClientController{
    
  Public function getallhotel(){
    $hotel=new Hotel();
         return $hotel->getAllData();
  }
 
 }