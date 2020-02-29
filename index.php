<!DOCTYPE html>
<HTML lang="ru">
  <HEAD>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <TITLE>Главная страница</TITLE>
    
  </HEAD>

  <body>
  <?php

  function highlight_nicknames(string $text):string{
     $pattern = '/@\w+[^\S.]/';
     preg_match_all($pattern, $text, $matches);
     if (empty($matches)) {
         $text="ни один Ник не найден в данной строке";
      } else {
         foreach($matches[0] as $match){
             $pos=strpos($text,$match);
             $text=substr_replace($text,'<b>',$pos,0);
             //echo ;
             $text=substr_replace($text,'</b>',$pos+strlen($match)+2,0);
         } 
      }
      return $text;
  }

  echo highlight_nicknames("@bnm сообщил нам вчера о результатах @usernick; ");
  ?>
  </body>
</html>