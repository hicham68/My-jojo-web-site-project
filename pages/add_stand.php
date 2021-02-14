<!DOCTYPE html>
<html lang="en">

<?php include '../back_end/data_base_stands.php';?> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body style="background: rgb(228,218,55);
background: radial-gradient(circle, rgba(228,218,55,1) 15%, rgba(251,147,0,1) 17%, rgba(59,118,129,1) 64%, rgba(51,100,134,1) 75%, rgba(40,69,141,1) 97%, rgba(28,83,149,1) 100%);">
    formulaire de stand
<div class="ml-2 mx-auto col-lg-8 text-light">
<form  method="post"   action="<?php echo $_SERVER['PHP_SELF'];?>"  enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">Stand name :</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="exemple : star platinum ">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">manieur :</label>
            <input name="manieur" type="text" class="form-control" id="exampleFormControlInput1" placeholder="exemple : jotaro">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Première apparition :</label>
            <select name="premiere_apparition" class="form-control" id="exampleFormControlSelect1">
            <option value="Stardust Crusaders">Stardust Crusaders</option>
            <option value="Diamond is Unbreakable">Diamond is Unbreakable</option>
            <option value="Golden Wind">Golden Wind</option>
            <option value="Stone Ocean">Stone Ocean</option>
            <option value="Steel Ball Run">Steel Ball Run</option>
            <option value="Jojolion">Jojolion</option>
          
            </select>
        </div>

        <div class="form-group">
            <label  for="exampleFormControlSelect1">categorie</label>
            <select name="categorie" class="form-control" id="exampleFormControlSelect1">
            <option value="Jojo Stand">Jojo Stand</option>
            <option value="Friends Stand">Friends Stand</option>
            <option value="Enemys Stand">Enemys Stand</option>
            <option value="Antagonists Stand">Antagonists Stand</option>
          
            </select>
        </div>
     
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description :</label>
            <textarea  name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Image mignature : </label>
            <input type="file" id="img_miniature" name="img_miniature" class="form-control-file" >
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Image Modal :</label>
            <input  id="img_modal" name="img_modal" type="file" class="form-control-file">
        </div>

        <button type="submit" value="Upload Image" class="btn btn-primary">Creation du stand</button>
    </form>
</div>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

 if ( empty($_POST['premiere_apparition']) ||  empty($_POST['name']) ||
 empty($_POST['manieur']) ||  empty($_POST['description'] ) 
     ||  empty($_POST['categorie'])  ){
  // collect value of input field

  var_dump($_POST);
    echo "Le formulaire n'est pas bien rempli";
  } else {
    $data = array(
        'premiere_apparition'=> $_POST['premiere_apparition'],
        'name'=> $_POST['name'],
        'manieur'=> $_POST['manieur'],
        'img_miniature'=> basename($_FILES["img_miniature"]["name"]),
        'description'=> $_POST['description'],
        'categorie'=> $_POST['categorie'],
        'img_modal'=> basename($_FILES["img_modal"]["name"])
    );
    


    // ENREGISTREMENT DU FICHIER _______________IMAGES


    $target_dir = "../assets/img/portfolio/";
    $target_file1 = $target_dir . basename($_FILES["img_miniature"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["img_modal"]["name"]);

    $uploadOk = 1;
    $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
    $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check_modal = getimagesize($_FILES["img_modal"]["tmp_name"]);
    $check = getimagesize($_FILES["img_miniature"]["tmp_name"]);
    if($check !== false && $check_modal !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        echo "File is an image - " . $check_modal["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    }

    // Check if file already exists
    if (file_exists($target_file1) && file_exists($target_file2)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["img_miniature"]["size"] > 500000 || $_FILES["img_modal"]["size"] > 500000 ) {
    echo "Le fichié envoyé est trop grand.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
    && $imageFileType1 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }

    if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
    && $imageFileType2 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {

    
    if (move_uploaded_file($_FILES["img_miniature"]["tmp_name"], $target_file1) ) {
        echo "Le fichier ". htmlspecialchars( basename( $_FILES["img_miniature"]["name"])) . " ont été uploadé.";
        
    } 
    elseif (move_uploaded_file($_FILES["img_modal"]["tmp_name"], $target_file2) ) {
        echo "Le fichier ". htmlspecialchars( basename( $_FILES["img_modal"]["name"])). " ont été uploadé.";
        DataBase::createStand($data);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    }


    
  }




  




}
?>
</body>
</html>