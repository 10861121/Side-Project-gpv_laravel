<?php
  $to =" friend85285234@gmail.com"; //收件者
  $subject = "肥周大白癡"; //信件標題
  $msg = "白癡次是123";//信件內容
  $headers = "From: mm980032@gmail.com"; //寄件者
  
  if(mail("$to", "$subject", "$msg", "$headers")):
   echo "信件已經發送成功。";//寄信成功就會顯示的提示訊息
  else:
   echo "信件發送失敗！";//寄信失敗顯示的錯誤訊息
  endif;
?>