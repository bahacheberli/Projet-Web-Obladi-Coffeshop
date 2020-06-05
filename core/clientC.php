<?php

include "../config.php";
class clientC
{
    function ajouterClient($client)
    {
        $sql= "insert into coffeshop.clients(idclient, nomclient, prenomclient, ageclient, login, mdp, email, numclient, adresseclient ) values (:id,:nom,:prenom,:age,:login,:mdp,:email,:num,:adresse)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $id=$client->getId();
            $nom=$client->getNom();
            $prenom=$client->getPrenom();
            $age=$client->getAge();
            $login=$client->getLogin();
            $mdp=$client->getMdp();
            $email=$client->getEmail();
            $num=$client->getNum();
            $adresse=$client->getAdresse();

            $req->bindValue(':id',$id);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':age',$age);
            $req->bindValue(':login',$login);
            $req->bindValue(':mdp',$mdp);
            $req->bindValue(':email',$email);
            $req->bindValue(':num',$num);
            $req->bindValue(':adresse',$adresse);

            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: Un client avec ce cin existe deja');

        }

    }

     function supprimerClient($id){
        $sql="DELETE FROM clients where idclient=:id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

     function afficherClient1()
    {

        $sql="select * from coffeshop.clients order by ageclient asc";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

     function afficherClient2($search)
    {

        $sql="select * from coffeshop.clients where nomclient='$search' || prenomclient='$search'";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }



     function afficherClient()
    {

        $sql="select * from coffeshop.clients ";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }


     function forgotPass($email)
    {

        $sql="select * from coffeshop.clients where email='$email' ";
        $str="1234567890azertyuiopqsdfghjklmwxcvbn";
        $str=str_shuffle($str);
        $str=substr($str, 0,5);
        $sql2="update coffeshop.clients set mdp='$str'  where email='$email'";
       

        $db = config::getConnexion();
        try
        {
            $db->query($sql2);
            $list=$db->query($sql);
            return $list;
        }
        
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }


    function afficherParPagination($start,$page,$limit)
    {
        

        $sql="select * from coffeshop.clients limit $start, $limit";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }




    function modifierClient($id,$nom,$prenom,$age,$login,$mdp,$email,$num,$adresse)
    {
        $sql="update coffeshop.clients set nomclient= '$nom', prenomclient='$prenom', ageclient='$age', login='$login', mdp='$mdp',email='$email' ,numclient= '$num',adresseclient='$adresse'  where idclient='$id'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }


    function calculerNbTotClients()
    {

        $sql="select * from coffeshop.clients ";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function calculerMoyAge()
    {

        $sql="select * from coffeshop.clients ";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }




}
?>    