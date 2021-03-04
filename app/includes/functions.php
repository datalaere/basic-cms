<?php

function request_query($query = '') {
   
   if(isset($_GET[$query])) {
      return filter_var($_GET[$query], FILTER_SANITIZE_URL);
   } else {
      return $_GET;
   }
   return false;
}

function e($text) {
   echo htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function redirect($url){
   return header('Location: ' . $url);
}