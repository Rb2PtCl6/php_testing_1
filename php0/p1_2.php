<?php 
if($_POST['user']){
  echo "Hello, ";
  echo $_POST['user'];
  echo "!";
}
else{
  echo <<<_HTML_
  <form action="$_SERVER[PHP_SELF]" method="post">
      Your Name : <input type=" text " name="user"><br>
      <button type="submit">Say hello</button>
    </form>
  _HTML_;
}
?>