<?php



$app->get('/', function () use ($app) {
    if(isset($_GET['out'])){
        unset($_SESSION['logged']);
    }

    if(isset($_SESSION['logged'])) {
        $app->render('home.html', array("logged" => "Logout"));
    }
    else{
        $app->render('home.html', array("notLogged" => "Login"));
    }
});

$app->get('/allBooks', function () use ($app) {
    if($_SESSION['logged']) {
        $books = \models\Book::getAll();

        $app->render('allBooks.html', array("books" => $books));
    }
    else{
        $app->render('serverMsg/serverResp.php',array('error_msg'=>"in order to see all books you have to login"));
    }
});

$app->post('/home', function () use ($app) {
    $unique=round(microtime(true));
    $uploader= new \models\FileUploader($unique);
    $uploadMessage=$uploader->uploadFile($unique);
    $title=$_POST['title'];
    $publish= $_POST['date'];
    $author=$_POST['author'];
    $format= $_POST['format'];
    $count = $_POST['count'];
    $resume = $_POST['resume'];
    $isbn= $_POST['isbn'];
    $target_dir = "../uploads/";
    $target_file = $target_dir .$unique. basename($_FILES["fileToUpload"]["name"]);
    $image=$target_file;

    $book =new models\Book($title,$publish,$author,$format,$count,$resume,$isbn,$image);
    if($book->insert()){

        $success="your file has beed uploaded successfully";
        $app->render('serverMsg/serverResp.php', array('success' =>$success));

    }
    else{
        $app->render('serverMsg/serverResp.php',array('error_msg'=>("Image: ".$uploadMessage."\n"."Something get wrong, you have to fill all fields, publish date and Page count should be  numbers")));
    };

});

