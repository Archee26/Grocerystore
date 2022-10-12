<?php
$conn = mysqli_connect("localhost", "root", "", "grocery mart");
$insert = false;
//INSERT INTO `contactus` (`id`, `name`, `email`, `contact no`, `subject`, `query`) VALUES ('1', 'vraj', 'vrajshah710@gmail.com', '8160633192', 'hjbwvclhe', 'qjhwb ckjqewhc');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['contactno'])) 
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $contact = $_POST["contactno"];
        $sub = $_POST["subject"];
        $query = $_POST["query"];

    
      $sql ="INSERT INTO `contactus` (`name`, `email`, `contact no`, `subject`, `query`) VALUES ('$name', '$email', '$contact', '$sub', '$query');";
       
 $result = mysqli_query($conn, $sql);
        if ($result) {
            $insert = true;

        } else 
        {
            echo "record does not insert" . mysqli_error($conn);
        }
        
    }
}
$conn1 = mysqli_connect("localhost", "root", "", "subscribe");
$insert1 = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['email2'])) {
        $email = $_POST["email2"];
       
    $sql1 ="INSERT INTO `subscribe` (`Email`) VALUES ('$email');";
       
 $result = mysqli_query($conn1, $sql1);
        if ($result) {
            $insert = true;

        } else 
        {
            echo "record does not insert" . mysqli_error($conn1);
        }
    }
}
?>
