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
public $tel;
public $password;
public $pays;
public $message;



    // déclaration des méthodes
    function __construct(array $datasForm) {
        
        // test affichage 
        //print_r($datasForm);

        $this->nom=trim(htmlentities(strtoupper($datasForm["nom"])));
        $this->prenom=trim(htmlentities(ucfirst ($datasForm["prenom"])));
        $this->telephone=trim(htmlentities($datasForm["tel"]));
        $this->email=trim(htmlentities($datasForm["email"]));
        $this->adresse=trim(htmlentities($datasForm["adresse"]));
        $this->complementaire=trim(htmlentities($datasForm["adresse2"]));
        $this->codepostal=trim(htmlentities($datasForm["codepostal"]));
        $this->ville=trim(htmlentities(ucfirst($datasForm["ville"])));
      
        $this->motdepasse=trim(htmlentities($datasForm["motdepasse"]));

        // executer envoyer_mail()
        $this->envoyer_mail();



          
 }
 public function envoyer_mail(){
     /*
            - adresse expedition       (moi == le serveur)
            - adresse destination      $this->email
            - message                  $this->message 
            - titre message
            - nom                      $this->nom
            - prenom                   $this->prenom
        */
          // Le message
          $this->message = "Bonjour $this->nom $this->prenom , \r\nMerci pour votre inscription, voici le lien qui vous permettra d'accéder au test : 
          https://test-rsma.gp/index.html.";

          // Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
          $this->message = wordwrap($this->message, 70, "\r\n");
          
          // Envoi du mail

          /*if( mail($this->email, 'Lien test', $this->message) === true ){
              echo "Email envoyé à $this->email" ;
  
          } else {
              echo "Echec envoi email à $this->email";
  
          }*/

            $to      = $this->email;
            $subject = 'le sujet';
            $message = $this->message;
            $headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

            if( mail($to, $subject, $message, $headers) === true ){
                echo "Email envoyé à $this->email" ;
    
            } else {
                echo "Echec envoi email à $this->email";
    
            }
  



      }



      






 }//fin class

?>