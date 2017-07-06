<?php

class Film
{
    // property declaration
    private $code;
    private $titre;
    private $realisateur;
    private $description;
    private $categorie;
    private $duree;
    private $prix;
    private $image;
    private $preview;

    public function __construct($code,$titre,$realisateur,$description,$categorie,$duree,$prix,$image,$preview){
        
        $this->code = $code;
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->description = $description;
        $this->categorie = $categorie;
        $this->duree = $duree;
        $this->prix = $prix;
        $this->image = $image;
        $this->preview = $preview;

    }

    public function getCode(){
        return $this->code;
    }
    public function setCode($code){
        $this->code = $code;
    }

    public function getTitre(){
        return $this->titre;
    }
    public function setTitre($titre){
        $this->titre = $titre;
    }

    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;
    }

    public function getRealisateur(){
        return $this->realisateur;
    }
    public function setRealisateur($realisateur){
        $this->realisateur = $realisateur;
    }

    public function getCategorie(){
        return $this->categorie;
    }
    public function setCategorie($categorie){
        $this->categorie = $categorie;
    }

    public function getDuree()
    {
        return $this->duree;
    }
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function getImage()
    {
        return $this->image;
    }
    public function setiMAGE($image)
    {
        $this->image = $image;
    }

    public function getPreview()
    {
        return $this->preview;
    }
    public function setPreview($preview)
    {
        $this->preview = $preview;
    }

}
?>
