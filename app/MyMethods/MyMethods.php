<?php


namespace App\MyMethods;


class MyMethods
{
    public static function generateMessageRequired($champ, $genre, $definition, $suffixe){
        $messageAConcatener = "";
        $label = explode("_", $champ);
        if($label[count($label)-1]=='entreprise' || $label[count($label)-1] == 'client' || $label[count($label)-1] == 'agence' || $label[count($label)-1] == 'signin'){
            $label[count($label)-1] = '';
        }
        if(!empty($label[count($label)-2]) && $label[count($label)-2] == 'modifier'){
            $label[count($label)-2] = '';
        }
        if($definition == 'p'){
            $messageAConcatener = 'Vous devez entrer votre ';
        }else{
            if($genre == 'f'){
                if($definition == 'd'){
                    $messageAConcatener = 'Vous devez entrer la ';
                }else if($definition == 'i'){
                    $messageAConcatener = 'Vous devez entrer une ';
                }
            }else if($genre == 'm'){
                if($definition == 'd'){
                    $messageAConcatener = 'Vous devez entrer le ';
                }else if($definition == 'i'){
                    $messageAConcatener = 'Vous devez entrer un ';
                }
            }else if($genre == 'nf'){
                if($definition == 'd'){
                    $messageAConcatener = 'Vous devez entrer l\'';
                }else if($definition == 'i'){
                    $messageAConcatener = 'Vous devez entrer une ';
                }
            }else if($genre == 'nm'){
                if($definition == 'd'){
                    $messageAConcatener = 'Vous devez entrer l\'';
                }else if($definition == 'i'){
                    $messageAConcatener = 'Vous devez entrer un ';
                }
            }
        }
        for($i =0 ; $i<count($label); $i++){
            $messageAConcatener = $messageAConcatener . $label[$i] . " ";
        }
        if($suffixe == 'y'){
            $messageAConcatener = $messageAConcatener . "de votre entreprise";
        }
        $message = $messageAConcatener;
        return $message;
    }

    public static function generateCryptedPassword($motDePasse){

    }
}