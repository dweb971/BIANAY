<?php





class InscriptionPersonne
{
    // déclaration d'une propriété
public $civ;
public $nom;
public $prenom;
public $email;
public $adresse; 
public $adresse2;
public $date;
public $ville;
public $codepostal;
public $question;
public $metier;
public $metier2;
public $niveau;
public $jdc;
public $lieu_naissance;
public $rgpd;
private $_DBConnect;


public $message;


        // methodes
        public function __construct($connectOBJ){
            // instance PDO
            $this->set_DBConnect($connectOBJ->pdo);
            
        }


    // déclaration des méthodes
    function inscription(array $datasForm) {
        
        // test affichage 
        print_r($datasForm);
        $this->setCiv(trim(htmlentities($datasForm["civ"])));
        $this->setNom(trim(htmlentities(strtoupper($datasForm["nom"]))));
        $this->setPrenom(trim(htmlentities(ucfirst($datasForm["prenom"]))));
        $this->setEmail(trim(htmlentities(strtolower($datasForm["email"]))));
        $this->setAdresse(trim(htmlentities($datasForm["adresse"])));
        $this->setAdresse2(trim(htmlentities($datasForm["adresse2"])));
        $this->setCodepostal(trim(htmlentities($datasForm["code_postal"])));
        $this->setVille(trim(htmlentities(strtoupper($datasForm["ville"])))); 
        $this->setDate(trim(htmlentities($datasForm["date"])));
        $this->setLieu_naissance(trim(htmlentities(strtoupper($datasForm["lieu_naissance"]))));
        $this->setMetier(trim(htmlentities(ucfirst ($datasForm["metier"]))));
        $this->setMetier2(trim(htmlentities(ucfirst ($datasForm["metier2"]))));
        $this->setNiveau(trim(htmlentities($datasForm["niveau"])));
        $this->setJdc(trim(htmlentities($datasForm["jdc"])));
        $this->setQuestion(trim(htmlentities($datasForm["question"])));
        $this->setRgpd(trim(htmlentities($datasForm["rgpd"])));


        //echo $this->getLieu_naissance();
      

        

      //insertion requête
      $reqIP = "INSERT INTO inscription (civilite, nom, prenom, email, adresse, adresse2, metier, metier2, niveau, jdc,lieu_naissance,ville, code_postal, question, rgpd, date) 
      VALUES ('".$this->getCiv()."', '".$this->getNom()."', '".$this->getPrenom()."', '".$this->getEmail()."', '".$this->getAdresse()."','".$this->getAdresse2()."',
     '".$this->getMetier()."', '".$this->getMetier2()."', '".$this->getNiveau()."' , '".$this->getJdc()."', '".$this->getLieu_naissance()."', '".$this->getVille()."', '".$this->getCodepostal()."',
     '".$this->getQuestion()."', '".$this->getRgpd()."', '".$this->getDate()."')";    


     $dbh = $this->get_DBConnect()->query($reqIP);
     $inscriptionID= $this->get_DBConnect()->lastInsertId() ;

     print_r($dbh);


     // executer envoyer_mail()
     $this->envoyer_mail($inscriptionID);

 
 }
 public function envoyer_mail(int $id){
     /*
            - adresse expedition       (moi == le serveur)
            - adresse destination      $this->email
            - message                  $this->message 
            - titre message
            - nom                      $this->nom
            - prenom                   $this->prenom
        */
          // Le message
          //cryptage url
          $prenom = $this->getPrenom();
          $nom = $this->getNom();
          $this->setMessage("Bonjour $nom $prenom , \r\nMerci pour votre inscription, voici le lien qui vous permettra d'accéder au test : 
          https://test-rsma.gp/index.php?idIn=".$id);

          // Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
          $this->setMessage(wordwrap($this->getMessage(), 70, "\r\n"));
          
          // Envoi du mail

          //mail("bianayjenny@gmail.com", 'Lien test', $this->getMessage());

          $email = $this->getEmail();

          if( mail($email, 'Lien test', $this->getMessage()) === true ){
             // echo "Email envoyé à $this->email" ;
             header('Location: confirmation.php');

          } else {
              echo "Echec envoi email à $this->email";
  
          }

            $to      = $email;
            $subject = 'Lien test';
            $message = $this->getMessage();
            $headers = 'From: webmaster@test-rsma.gp' . "\r\n" .
            'Reply-To: webmaster@test-rsma.gp' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

            if( mail($to, $subject, $message, $headers) === true ){
                //echo "Email envoyé à $this->email" ;
                header('Location: confirmation.php');
    
            } else {
                //echo "Echec envoi email à $this->email";
    
            }
  



      }

      public function nettoyer($chaine){

        // securite
        $chaine = trim(strip_tags($chaine));
        return $chaine;

    }

        
        
      







/**
 * Get the value of nom
 */ 
public function getNom()
{
return $this->nom;
}

/**
 * Set the value of nom
 *
 * @return  self
 */ 
public function setNom($nom)
{
$this->nom = $nom;

return $this;
}



/**
 * Get the value of email
 */ 
public function getEmail()
{
return $this->email;
}

/**
 * Set the value of email
 *
 * @return  self
 */ 
public function setEmail($email)
{
$this->email = $email;

return $this;
}

/**
 * Get the value of adresse
 */ 
public function getAdresse()
{
return $this->adresse;
}

/**
 * Set the value of adresse
 *
 * @return  self
 */ 
public function setAdresse($adresse)
{
$this->adresse = $adresse;

return $this;
}

/**
 * Get the value of date
 */ 
public function getDate()
{
return $this->date;
}

/**
 * Set the value of date
 *
 * @return  self
 */ 
public function setDate($date)
{
$this->date = $date;

return $this;
}

/**
 * Get the value of ville
 */ 
public function getVille()
{
return $this->ville;
}

/**
 * Set the value of ville
 *
 * @return  self
 */ 
public function setVille($ville)
{
$this->ville = $ville;

return $this;
}

/**
 * Get the value of codepostal
 */ 
public function getCodepostal()
{
return $this->codepostal;
}

/**
 * Set the value of codepostal
 *
 * @return  self
 */ 
public function setCodepostal($codepostal)
{
$this->codepostal = $codepostal;

return $this;
}

/**
 * Get the value of question
 */ 
public function getQuestion()
{
return $this->question;
}

/**
 * Set the value of question
 *
 * @return  self
 */ 
public function setQuestion($question)
{
$this->question = $question;

return $this;
}

/**
 * Get the value of lieu_naissance
 */ 
public function getLieu_naissance()
{
return $this->lieu_naissance;
}

/**
 * Set the value of lieu_naissance
 *
 * @return  self
 */ 
public function setLieu_naissance($lieu_naissance)
{
$this->lieu_naissance = $lieu_naissance;

return $this;
}

/**
 * Get the value of metier
 */ 
public function getMetier()
{
return $this->metier;
}

/**
 * Set the value of metier
 *
 * @return  self
 */ 
public function setMetier($metier)
{
$this->metier = $metier;

return $this;
}

/**
 * Get the value of metier2
 */ 
public function getMetier2()
{
return $this->metier2;
}

/**
 * Set the value of metier2
 *
 * @return  self
 */ 
public function setMetier2($metier2)
{
$this->metier2 = $metier2;

return $this;
}



/**
 * Get the value of niveau
 */ 
public function getNiveau()
{
return $this->niveau;
}

/**
 * Set the value of niveau
 *
 * @return  self
 */ 
public function setNiveau($niveau)
{
$this->niveau = $niveau;

return $this;
}

/**
 * Get the value of jdc
 */ 
public function getJdc()
{
return $this->jdc;
}

/**
 * Set the value of jdc
 *
 * @return  self
 */ 
public function setJdc($jdc)
{
$this->jdc = $jdc;

return $this;
}



/**
 * Get the value of rgpd
 */ 
public function getRgpd()
{
return $this->rgpd;
}

/**
 * Set the value of rgpd
 *
 * @return  self
 */ 
public function setRgpd($rgpd)
{
$this->rgpd = $rgpd;

return $this;
}

/**
 * Get the value of message
 */ 
public function getMessage()
{
return $this->message;
}

/**
 * Set the value of message
 *
 * @return  self
 */ 
public function setMessage($message)
{
$this->message = $message;

return $this;
}

/**
 * Get the value of civ
 */ 
public function getCiv()
{
return $this->civ;
}

/**
 * Set the value of civ
 *
 * @return  self
 */ 
public function setCiv($civ)
{
$this->civ = $civ;

return $this;
}

/**
 * Get the value of adresse2
 */ 
public function getAdresse2()
{
return $this->adresse2;
}

/**
 * Set the value of adresse2
 *
 * @return  self
 */ 
public function setAdresse2($adresse2)
{
$this->adresse2 = $adresse2;

return $this;
}

/**
 * Get the value of _DBConnect
 */ 
public function get_DBConnect()
{
return $this->_DBConnect;
}

/**
 * Set the value of _DBConnect
 *
 * @return  self
 */ 
public function set_DBConnect($_DBConnect)
{
$this->_DBConnect = $_DBConnect;

return $this;
}

/**
 * Get the value of prenom
 */ 
public function getPrenom()
{
return $this->prenom;
}

/**
 * Set the value of prenom
 *
 * @return  self
 */ 
public function setPrenom($prenom)
{
$this->prenom = $prenom;

return $this;
}
 }//fin class

?>