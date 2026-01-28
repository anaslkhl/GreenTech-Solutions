<?php 



class Livre{



    public string $titre;
    public string $autauer;
    public string $isbn;
    public bool $disponible = true;

    public function isdisponile()
    {
        if($this->disponible === true){
            return 'disponible';
        }
        return 'is not disponible';
    }


}

class utilisateur{

    public string $nom;
    public string $identifiant;



}


class emprunt{
    public string $utilisateur;
    public string $livre;
    public string $date;

    public function combLivres()
    {
        return $this->livre;
    }



}



class bibliotheque{


   

}