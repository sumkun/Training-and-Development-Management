<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="be_project";

    $con=mysqli_connect($host , $user , $password ,$db);
    //mysqli_select_db($con,$db);

    if (isset($_POST['username'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql="SELECT * FROM `login` WHERE username='".$username."' AND password='".$password."' limit 1";

        $result=mysqli_query($con,$sql);

        if($result){

        if ($username == 'admin' && $password == 'admin'){
            session_start();
            $_SESSION['username'] = $username;
?>
       <script type="text/javascript">window.location.replace("http://localhost/be1/adminpages/dashboard.php");</script>
<?php
            exit();
        }
       else if ($username == 'production' && $password == 'production'){
            session_start();
            $_SESSION['username'] = $username;
?>
       <script type="text/javascript">window.location.replace("http://localhost/be1/production/dashboard.php");</script>
<?php
            exit();
        }
            else if ($username == 'HR' && $password == 'HR'){
            session_start();
            $_SESSION['username'] = $username;
?>
       <script type="text/javascript">window.location.replace("http://localhost/be1/HR/dashboard.php");</script>
<?php
            exit();
        }
        else if ($username == 'finance' && $password == 'finance'){
            session_start();
            $_SESSION['username'] = $username;
?>
       <script type="text/javascript">window.location.replace("http://localhost/be1/finance/dashboard.php");</script>
<?php
            exit();
        }
        else if ($username == 'maintenance' && $password == 'maintenance'){
            session_start();
            $_SESSION['username'] = $username;
?>
       <script type="text/javascript">window.location.replace("http://localhost/be1/maintenance/dashboard.php");</script>
<?php
            exit();
        }
        else if ($username == 'quality' && $password == 'quality'){
            session_start();
            $_SESSION['username'] = $username;
?>
       <script type="text/javascript">window.location.replace("http://localhost/be1/quality/dashboard.php");</script>
<?php
            exit();
        }
        else{
?>
            <script type="text/javascript">
                alert("INCORRECT USERNAME OR PASSWORD!!!!");
            window.location.replace("http://localhost/be1/index.html");
           </script>

<?php
            exit();
        }
    }
}



?>
