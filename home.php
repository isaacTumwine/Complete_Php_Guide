  <?php



  //Variables
  /*$output="Hello world";
  print $output;*/




  //Data Types

  /*$txt = "Hello world!";
  $x = 5;
  $y = 10.5;

  echo $txt;
  echo "<br>";
  echo $x;
  echo "<br>";
  echo $y;*/






  //Summation of two or more Variables

  /*$num1 = 10;
  $num2 = 12;
  $sum = $num1 +$num2;
  echo $sum;*/






  //Concatination

  // $string1 = 'Hello';
  // $string2 = 'world';
  // $Greetings = $string1 .' '. $string2;
  // echo $Greetings;








  //Put a space using double quotes in concatination with out .' '.


  /*$string1 = 'Hello';
  $string2 = 'world';
  $Greetings = $string1 .' '. $string2;
  $Greetings2 = "$string1  $string2";
  echo $Greetings2*/

  //Constants

  /*define('Greetings', 'some values');

  echo Greetings;
  */

  //Conditions


  //if condition

  // if (condition) {
  //     code to be executed if this condition is true;
  //   } elseif (condition) {
  //     code to be executed if first condition is false and this condition is true;
  //   } else {
  //     code to be executed if all conditions are false;
  //   }



  /*$t = date("H");

  if ($t < "20") {
    echo "Have a good day!";
  }*/


  /*$a = 1;
  $b = 5;


  if ($a === $b) {
  echo "They are the same!";
  }

  elseif ($b === 5){

      echo "variable 'b' is equal to 5";
  }
  else {

      echo "They are NOT the same!";

  }*/






  //Switch

  // switch ($variable) {
  //     case 'value':
  //         # code...
  //         break;
      
  //     default:
  //         # code...
  //         break;
  // }






  //Example


  // $favcolor = "red";

  // switch ($favcolor) {
  //   case "red":
  //     echo "Your favorite color is red!";
  //     break;
  //   case "blue":
  //     echo "Your favorite color is blue!";
  //     break;
  //   case "green":
  //     echo "Your favorite color is green!";
  //     break;
  //   default:
  //     echo "Your favorite color is neither red, blue, nor green!";
  // }





  //Indexed Arrays 


  // $cars = array("Volvo", "BMW", "Toyota"); 
  // echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";







  // For loop
  // for ($i=0; $i < 5; $i++) {
  //       echo "This is loop number $i";
  // }






  //While loop
  // $i=0; // initialization
  //   while ($i < 5) {
  //       echo "This is loop number $i";
  //       $i++; // step
  //   }





  //Array Example one

  // $var = array(’a’,’b’,’c’,’d’,’e’);  // array declaration
  //   foreach ($var as $key) {
  //       echo "Element is $key";
  // }






  //Indexed Array

  // $people = array("kevin","jeremy","Sarah");
  // // echo $people[0];

  // $Ids = array(23,27,29);
  // $cars = ["Hummer","Jeep","Ford"];

  // //Add an Element
  // $cars[3]="Chevy";
  // $cars[] = "BMW";
  // echo count($cars); //Counting the Elements with in an Array

  // print_r($cars);//Showing the whole array








  //Associative Arrays

  // $people = array("brad" => 35, "jose" => 32, "william" => 37);
  // $ids = [22 =>"brad", 44 =>"jose", 63 => "Williams"];
  // // echo $people["brad"];
  // // print_r($people)
  // $people["Jill"] = 42;
  // var_dump($people);







  //Multi Dimensional

  // $cars = array(

  //   array("Honda", 20, 10),
  //   array("Toyota", 30, 70),
  //   array("Ford", 2, 11),
  // );

  // echo $cars[1][0];


  //Function is a block of Code that can be repeteadily called
  // Camel case -myFuction()
  // lower Case - my_function()
  // pascal Case - MyFunction()

  // function simpleFunction(){
  //   echo "Hello World";
  // }
  //calling a function or Running It
  //simpleFunction();





  //Function with Parameter

  // function sayHello($name = "World"){

  //   echo "Hello $name<br>";
  // }

  // //sayHello(Tim);

  // function addNumbers($num1, $num2){
  //   echo $num1 + $num2; 
  // }
  // addNumbers(2,3);






  //Associative Array

  //     $namesAge = array("Fabio"=>"20", "Klevi"=>"16", "John"=>"43");
  //     foreach($namesAge as $i => $value)
  //      {
  //         echo "Key = " . $i . ", Value = " . $value;
  //         echo "";
  // } 




  //Multidimension
  // $cars = array(

  //   array("Honda", 20, 10),
  //   array("Toyota", 30, 70),
  //   array("Ford", 2, 11),
  // );

  // echo $cars[2][1];



  //Example 1 of Multidimention

  // $cars = array (
  //   array("Volvo",22,18),
  //   array("BMW",15,13),
  //   array("Saab",5,2),
  //   array("Land Rover",17,15)
  // );
    
  // echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  // echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  // echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  // echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";




  //Function Example



  // function writeMsg() {
  //   echo "Hello world!";
  // }

  // writeMsg(); // call the function


  //Example 2 of Functions


  // function familyName($fname) {
  //   echo "$fname Refsnes.<br>";
  // }

  // familyName("Jani");
  // familyName("Hege");
  // familyName("Stale");
  // familyName("Kai Jim");
  // familyName("Borge");





  //Function with Arguments




  // function difference($a, $b) { // function definition with arguments
  // $c = $a - $b;
  // return $c; }
  // echo "The difference of the given numbers is: ".difference(8, 3);

  //Exercise1



  // function myFunction()
  //  {
  //   echo "Hello World!";
  // }
  // myfunction();







  //Excercise on Functions
  //Create a function named myFunction.

  // function myFunction()
  //  {
  //   echo "Hello World!";
  // }


  //Excercise 2

  //Call (execute) a function named myFunction.

  // function myFunction() {
  //   echo "Hello World!";
  // }

  // myFunction()
  // ;



  //Excercise 3
  // Inside a function with two parameters, print the first parameter.

  // function myFunction($fname, $lname) {
  //   echo $fname;
  // }
  // myfunction($fname);

  // Excercise 4

  // Let the function return the second value.
  // function myFunction($fname, $lname) {
    
  // return $lname;

  // }
  // myFunction($lname);




  //Function 4

  // function addNumbers(int $a, int $b) {
  //   return $a + $b;
  // }
  // echo addNumbers(5, 5); 








  //Arrays Excercises 1
  //Use the correct function to output the number of items in an array.
  // $fruits = array("Apple", "Banana", "Orange");
  // echo count($fruits)
  // ;

  //Excercise 2


  //Output the second item in the $fruits array.
  // $fruits = array("Apple", "Banana", "Orange");
  // echo $fruits[1];


  // Exercise: 3
  // Create an associative array containing the age of Peter, Ben and Joe.
  // $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");


  //Exercise: 4
  //Here you see an associative array. Output "age" of Ben.
  // $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  // echo "Ben is " .$age['Ben']. " years old.";



  //Exercise: 5
  //Use the correct array method to sort the $colors array alphabetically.


  //excercise 6


  //The following example sorts the elements of the $numbers array in ascending numerical order:
  // $numbers = array(4, 6, 2, 22, 11);
  // sort($numbers);

  // $arrlength = count($numbers);
  // for($x = 0; $x < $arrlength; $x++) {
  //   echo $numbers[$x];
  //   echo "<br>";
  // }




  //Excercise 7

  //The following example sorts the elements of the $cars array in ascending alphabetical order:
  // $cars = array("Volvo", "BMW", "Toyota");
  // sort($cars);

  // $clength = count($cars);
  // for($x = 0; $x < $clength; $x++) {
  //   echo $cars[$x];
  //   echo "<br>";
  // }


  //Execrcise 8

  //Sort Array (Ascending Order), According to Value - asort()


  // $age = array("Peter"=>"50", "Ben"=>"37", "Joe"=>"43");
  // asort($age);

  // foreach($age as $x => $x_value) {
  //   echo "Key=" . $x . ", Value=" . $x_value;
  //   echo "<br>";
  // }



  //Excercise 9
  //Sort Array (Descending Order), According to Key - krsort()

  // $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  // krsort($age);

  // foreach($age as $x => $x_value) {
  //   echo "Key=" . $x . ", Value=" . $x_value;
  //   echo "<br>";
  // //}






  //File Handling


  // File Open/Read/Close

  // PHP Open File - fopen()
  // A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.

  // We will use the text file, "webdictionary.txt", during the lessons:

  // AJAX = Asynchronous JavaScript and XML
  // CSS = Cascading Style Sheets
  // HTML = Hyper Text Markup Language
  // PHP = PHP Hypertext Preprocessor
  // SQL = Structured Query Language
  // SVG = Scalable Vector Graphics
  // XML = EXtensible Markup Language
  // The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened. The following example also generates a message if the fopen() function is unable to open the specified file:



    //Example1
  //   $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  // echo fread($myfile,filesize("webdictionary.txt"));
  // fclose($myfile);



  //Example2
  // PHP Read Single Line - fgets()
  // The fgets() function is used to read a single line from a file.
  // The example below outputs the first line of the "webdictionary.txt" file:


  // $myfile = fopen("web.txt", "r") or die("Unable to open file!");
  // echo fgets($myfile);
  // fclose($myfile);






  //Example3
  // PHP Check End-Of-File - feof()
  // The feof() function checks if the "end-of-file" (EOF) has been reached.
  // The feof() function is useful for looping through data of unknown length.
  // The example below reads the "webdictionary.txt" file line by line, until end-of-file is reached:



  // $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  // // Output one line until end-of-file
  // while(!feof($myfile)) {
  //   echo fgets($myfile) . "<br>";
  // }
  // fclose($myfile);


  // $myfile = fopen("web.txt", "r") or die ("Unable to open a file");
  // while(!feof($myfile)) {
  //   echo fgets($myfile) . "<br>";
  // }
  // fclose($myfile);



  //Example4
  //Printing the First Character
  // $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");

  //   echo fgetc($myfile);





  //File Existance (Problem)

  // if(!file_exists("test.txt")) {
  //   die("File not found");
  // } else {
  //   $file=fopen("test.txt","r");
  // }




  // How To Check A file in Our Local Server
  // $file = "Home.txt";
  // if(is_file($file)) {
  //   echo ("$file is a regular file");
  // } else {
  //   echo ("$file is not a regular file");
  // }


  // PHP fwrite() Function

  // $file = fopen("webdictionary.txt","w");
  // echo fwrite($file,"Hello World. Testing!");
  // fclose($file);

  //Php fgets()  Function:

  // $file = fopen("webdictionary.txt","r");
  // echo fgets($file);
  // fclose($file);



  //Example 2 of Fgets() Function
  // $file = fopen("webdictionary.txt","r");

  // while(! feof($file))
  //   {
  //   echo fgets($file). "<br />";
  //   }
  // fclose($file);



  //PHP | fgetss( ) Function
  // PHP program to illustrate the fgetss() function 
  //file is opened using fopen() function 
  // $my_file = fopen("gfg.txt", "rw"); 
    
  // // Prints a single line from the opened file pointer  
  // // after removing HTML and PHP tags 
  // echo fgetss($my_file); 
    
  // // file is closed using fclose() function 
  // fclose($my_file); 



  //PHP unlink() Function
  // $file = fopen("webdictionary.txt","w");
  // echo fwrite($file,"Hello World. Testing!");
  // fclose($file);

  // unlink("webdictionary.txt");



  // PHP program to delete a file named gfg.txt 
  // using unlink() function
  
  // $file_pointer = "webdictionary.txt";
  
  // // Use unlink() function to delete a file
  // if (!unlink($file_pointer)) {
  //     echo ("$file_pointer cannot be deleted due to an error");
  // }
  // else {
  //     echo ("$file_pointer has been deleted");
  // }




  //PHP | file_get_contents() Function


  // reading contents from the 
  // geeksforgeeks homepage 
  // $homepage = file_get_contents("https://www.geeks 





  // //How to Check Your Local Server
  // $_SERVER = [
  //   "Host server Name" => $_SERVER["SERVER_NAME"]
  // ];

  // echo $_SERVER["Host server Name"];

//Introduction To PDO DataBase


  //PDO Database Method it stands for PHP DATA OBJECT

  // $host = "localhost";
  // $user = "root";
  // $password = "";
  // $dbname = "devtest";

  // //Set DSN
  // // In computing, a data source name (DSN, sometimes known as a database source name, though "data sources" can comprise other repositories apart from databases) is a string that has an associated data structure used to describe a connection to a data source.
  // $dsn = "mysql:host=".$host. ';dbname='.$dbname;

  // //Create a PDO Instance
  // $pdo = new PDO($dsn, $user, $password);

  // //PRDO QUERY
  // // "$stmt" obviously (I think) stands for "statement". As a variable name it's arbitrary, you can name that variable anything you want. $stmt is just rather idiomatic.

  // $stmt = $pdo->query("SELECT*FROM posts");
  // while($row = $stmt->fetch(PDO::FETCH_OBJ)){
  //   echo $row->body. '<br>';
  // }






//Checking Columns

//   $host = "localhost";
//   $user = "root";
//   $password = "";
//   $dbname = "devtest";


//   //set DNS
// $dsn = "mysql:host=".$host.";dbname=".$dbname;
// //Create PDO Instance
// $pdo = new PDO($dsn, $user, $password);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

//   //User Inputs
//   $author = "King David";
//   $is_published = false;

//   //Named Parameters
//   $sql = "SELECT * FROM posts WHERE author = :author && is_published = :is_published";
//   $stmt = $pdo->prepare($sql);
//   $stmt->execute(["author" => $author, "is_published" => $is_published]);
//   $posts = $stmt->FetchAll();

//   //var_dump($posts);

//   foreach($posts as $post) {
//   echo $post->title . "<br>";
//   }
 




//Get Row Count
// $host = "localhost";
//   $user = "root";
//   $password = "";
//   $dbname = "devtest";


//   //set DNS
// $dsn = "mysql:host=".$host.";dbname=".$dbname;
// //Create PDO Instance
// $pdo = new PDO($dsn, $user, $password);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

//   //User Inputs
//   $author = "Isaac";
//   $is_published = true;
//   $id = 1;


//   $stmt = $pdo->prepare("SELECT * FROM POSTS WHERE  author =?");
//   $stmt->execute([$author]);
//   $postCount = $stmt->rowCount();
//   echo $postCount;



//INSERTED DATA

// $host = "localhost";
//   $user = "root";
//   $password = "";
//   $dbname = "devtest";


//   //set DNS
// $dsn = "mysql:host=".$host.";dbname=".$dbname;
// //Create PDO Instance
// $pdo = new PDO($dsn, $user, $password);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// $id = 8;
// $title= "Post seven";
// $body = "kigali Heights";
// $author = "Rugune";

// $sql = "INSERT INTO posts(id, title, body, author) VALUES(:id, :title, :body, :author)";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["id" => $id, "title" => $title,  "body" => $body, "author" => $author]);
// echo "Post Already Inserted, Please Check Your Database";




//Updating A post
// $host = "localhost";
//   $user = "root";
//   $password = "";
//   $dbname = "devtest";


//   //set DNS
// $dsn = "mysql:host=".$host.";dbname=".$dbname;
// //Create PDO Instance
// $pdo = new PDO($dsn, $user, $password);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// $id = 1;
// $body = "This is the Updated Post";

// $sql = "UPDATE posts SET body = :body WHERE id = :id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["body" => $body, "id" => $id]);
// echo "The Post Is Already Updated";


//Deleting an Article Our Table
// $host = "localhost";
//   $user = "root";
//   $password = "";
//   $dbname = "devtest";


//   //set DNS
// $dsn = "mysql:host=".$host.";dbname=".$dbname;
// //Create PDO Instance
// $pdo = new PDO($dsn, $user, $password);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// $id = 7;


// $sql = "DELETE FROM posts WHERE id = :id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["id" => $id]);
// echo "Post Already Deleted!"

//Searching data In Our table with in our Database

$host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "devtest";


  //set DNS
$dsn = "mysql:host=".$host.";dbname=".$dbname;
//Create PDO Instance
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$search = "%post%";
$sql = "SELECT * FROM posts WHERE title LIKE ?";
$stmt = $pdo->prepare($sql);
$stmt ->execute([$search]);
$posts = $stmt->fetchAll();

foreach($posts as $post) {
 echo $post->title . "<br>";
}





?>
