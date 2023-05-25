
    <?php
	    $host="localhost";
    	$user="amitms";
    	$pass="hk-yu15hEWqD";
    	$db="amitms_DBA";
    	$conn=new mysqli($host,$user,$pass,$db);
    	if ($conn->connect_error){
        		die("Something went wrong: ".$conn->connect_error);}
        $id=$_POST['id'];
        $name=$_POST['name'];
        $numOfClasses=$_POST['numOfClasses'];
        $numOfClasses=$_POST['license'];

        $sql="insert into reservation(id,name,numOfClasses,license) values ('".$id."','".$name."',".$numOfClasses.",'".$license."')";
        if ($conn->query($sql)==FALSE){
            echo "Can not add new user.  Error is: ".
		    $conn->error;
        exit();
        }
        echo “New student was added"
    ?>