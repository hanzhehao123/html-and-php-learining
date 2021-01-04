<!--land_action.php:用户登录-->
<html>
  <head>
    <title>用户登录</title>
  </head>
  <body>
    <?php
      $user_name=$_POST["user_name"];
      $user_pw=$_POST["user_pw"];
      $user_name2=$user_name."\n";
      $user_pw2=$user_pw."\n";
      //登录是否成功标记位：0不成功，1成功
      $tag=0;
      $file=@fopen("user_info.txt","r");
      if($file){
        while(!feof($file)){
          //循环，文件指针下移
          $buffer=fgets($file,4096);
          if($buffer==$user_name2){
            @next($file);
            $buffer=fgets($file,4096);
            if($buffer==$user_pw2){
			  echo"您输入的用户名密码正确，登陆成功！<br>";
			  @next($file);
              $image=fgets($file,4096);
              echo"您的头像：<img src=".$image." align=middle><br>";
              $tag=1;
              break;
            }
            else{
              @next($file);
              @next($file);
            }
            
          }
          else{
              @next($file);
              @next($file);
              @next($file);
          }
         }
         if($tag==0){
			 echo "<script> alert('您输入的用户名和密码不正确，请重新输入');parent.location.href='login.html'; </script>"; 
            echo"您输入的用户名和密码不正确，请<a href=land.html>返回</a>重新输入";
         }
          fclose($file);
      }
    ?>

  </body>
</html>