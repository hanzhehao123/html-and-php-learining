<!--land_action.php:�û���¼-->
<html>
  <head>
    <title>�û���¼</title>
  </head>
  <body>
    <?php
      $user_name=$_POST["user_name"];
      $user_pw=$_POST["user_pw"];
      $user_name2=$user_name."\n";
      $user_pw2=$user_pw."\n";
      //��¼�Ƿ�ɹ����λ��0���ɹ���1�ɹ�
      $tag=0;
      $file=@fopen("user_info.txt","r");
      if($file){
        while(!feof($file)){
          //ѭ�����ļ�ָ������
          $buffer=fgets($file,4096);
          if($buffer==$user_name2){
            @next($file);
            $buffer=fgets($file,4096);
            if($buffer==$user_pw2){
			  echo"��������û���������ȷ����½�ɹ���<br>";
			  @next($file);
              $image=fgets($file,4096);
              echo"����ͷ��<img src=".$image." align=middle><br>";
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
			 echo "<script> alert('��������û��������벻��ȷ������������');parent.location.href='login.html'; </script>"; 
            echo"��������û��������벻��ȷ����<a href=land.html>����</a>��������";
         }
          fclose($file);
      }
    ?>

  </body>
</html>