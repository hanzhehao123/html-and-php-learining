<?php   
$flag=0;  
//var_dump($_GET);  
if(isset($_GET["out"])){  
    if($_GET["out"]){  
        setcookie('uname','',time()-1);  
        $flag=1;//��ֹ���������յ�getout����ʱ�Ѿ���Ϊ���û���cookie��Ȼ�������COOKIE[NAME]�Ѿ����ˣ����������ظ����Ĳ��ǿյ�  
    }  
}  
if($flag!=1){  
    $link=mysqli_connect('localhost','root','liqiyao123','test');  
    if(isset($_COOKIE['uname'])){  
        $name=$_COOKIE['uname'];  
        $query=mysqli_query($link,"SELECT username FROM info WHERE username = '$name'");  
        $row=mysqli_num_rows($query);  
        if($row==1){  
            echo "Welcome ".$_COOKIE['uname']."";  
            echo '    ';  
            echo '<a href="index.php?out=1">logout</a>';//�û�logout  
        }  
    }else{  
        echo  '<a href="login.html">login</a>';  
        echo  '    ';  
        echo  '<a href="register.html">register</a>';  
    }  
}  
else{  
    echo  '<a href="login.html">login</a>';  
    echo  '    ';  
    echo  '<a href="register.html">register</a>';  
}?>  