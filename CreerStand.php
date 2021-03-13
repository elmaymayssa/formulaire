<!doctype html>
<html lang="en">

<head>
    <title>CreerStand</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
        $noms=$_POST['noms'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $logo=$_POST['logo'];
        $video=$_POST['video'];
        $avatar=$_POST['avatar'];
        
        $ip="127.0.0.1";
        $login="root";
        $pwd="";
        $dbname="eventvirtual";
        $dsn="mysql:host=".$ip.";dbname=".$dbname;

        //1-Se connecter à la base de données
          $db=new PDO($dsn,$login,$pwd);

        //2-Préparer la requête
        $sql="INSERT INTO `creerstand` (`id`, `noms`, `password`, `email`, `avatar`, `video`, `logo`) VALUES(NULL, '".$noms."','".$password."', '".$email."','".$avatar."','".$video."', '');";
            //echo $sql;
        //3-Exécuter la requête créer
        $db->query($sql);
    
            
        ?>

    
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                <div class="card text-white bg-success" >
  <div class="card-body">
 
    <h6 class="card-subtitle mb-2 text-muted">Success</h6>
    <p class="card-text">Inscription réussite</p>

  </div>
</div>
                    
                </div>
            </div>
        </div>
    
    <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Lecture d'une table MySQL avec PHP</h1>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NomS</th>
              <th scope="col">Password</th>
              <th scope="col">Email</th>
              <th scope="col">Avatar</th>
              <th scope="col">Video</th>
              <th scope="col">logo</th>
            </tr>
          </thead>
          <tbody>
          <?php
    
    
    
     $sql="SELECT * FROM `creerstand` where id=id ";

                    //3-Exécuter la requête créer
                    $R=$db->query($sql);


                     //print_r($R);

                    //4-Transformer le résultat en un tableau 2d 
  //echo "<br><hr><pre>";
                    $r=$R->fetchALL(PDO::FETCH_ASSOC);
                    //print_r($r);
                    //echo "</pre>";
               move_uploaded_file($_FILES["logo"]["tmp_name"],"./files/".$_POST["noms"]."_1.jpg");
                    

                    for($i=0;$i<count($r);$i++){
                      foreach($r[$i] as $v){
                          
                        echo "<td>".$v."</td>";
                      }
                      echo "</tr>";
                    }
              
              echo json_encode($r);
         
                  ?>


      
          </tbody>
        </table>
     </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>