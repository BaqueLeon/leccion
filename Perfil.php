<?php
class Perfil
{
    private $idperfil;
    private $nombre;
    private $tipo;
    private $nacimiento;
    private $img;
    
     function __construct($idperfil, $nombre, $tipo, $nacimiento, $img) {
       $this->idperfil = $idperfil;
       $this->nombre = $nombre;
       $this->tipo = $tipo;
       $this->nacimiento = $nacimiento;
       $this->img = $img;
     }
    
     function setIdPerfil($idperfil){
       $this->idperfil = $idperfil;
     } 
     function getIdPerfil(){
       return $this->idperfil;
     } 

     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 

     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     } 

     function setNacimiento($nacimiento){
       $this->nacimiento = $nacimiento;
     } 
     function getNacimiento(){
       return $this->nacimiento;
     } 

     function setImg($img){
       $this->img = $img;
     } 
     function getImg(){
       return $img->img;
     } 
}

?> 
