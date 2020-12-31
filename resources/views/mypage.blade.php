<?php

?>

<!DOCTYPE html>
<html lang="ja">
 <head>
    <meta charset="utf-8" />
    <title>NIPPO</title>
    <link rel="stylesheet" href="stylesmysql.css">
 </head>
 
 <body>

   <h2>マイページ</h2>
  
   <h3>※ユーザー名</h3>
   <br>



  
   <form method="post" >  
     <div>
         <p>学習日</p>
         <input type="date">
     </div> 
     <div class="contents">
       <p>学習内容：</p>
       <textarea style="width:40%; height:100px;" placeholder="「躓いたこと」「できるようになったこと」など"></textarea> 
     </div><br>

     <div class="time">
       <p>学習時間</p>
       <input type="number" min="0" step="30"></input>分
     </div><br>

     <div class="language">
         <p>学習言語</p>
         <input type="checkbox" value="html"><lavel for="html">HTML</label>
         <input type="checkbox" value="css"><lavel for="css">CSS</label>
         <input type="checkbox" value="javascript"><lavel for="javascript">JAVASCRIPT</label>
         <input type="checkbox" value="php"><lavel for="php">PHP</label>
         <input type="checkbox" value="other"><lavel for="other">その他
         </label>
     </div>    

     <div class="category">
        <p>カテゴリー</p> 
        <input type="checkbox" value="lecture"><lavel for="lecture">授業</label>
        <input type="checkbox" value="selfstudy"><lavel for="selfstudy">自習</label>
        <input type="checkbox" value="task"><lavel for="task">課題</label>
        <input type="checkbox" value="reading"><lavel for="reading">読書</label>
        <input type="checkbox" value="output"><lavel for="output">アウトプット会</label>
        <input type="checkbox" value="other"><lavel for="other">その他</label><input type="text">
     </div>

     <div class="date">
     <p>
     <?php 
     date_default_timezone_set('Asia/Tokyo');
     echo date("Y/m/d h:i:s") ?>
    </p> 
     </div><br>

     <div class="submit">
       <input type="submit" value="投稿する" >
     </div>
   </form>
 
    
   <hr>
   
   
  
  
  </body>
</html>
    