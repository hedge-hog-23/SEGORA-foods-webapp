<?php
    session_start();
    include('conn.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            
            header("Location: userhome.php");
            $_SESSION['username'] = $username;
        }  
        else{  
            echo  '<script>
                        window.location.href = "userlogin.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>