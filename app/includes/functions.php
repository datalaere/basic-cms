<?php

function request_query($query) {
   
   if(isset($_GET[$query])) {
      return filter_var($_GET[$query], FILTER_SANITIZE_URL);
   }
   return false;
}

function e($text) {
   echo htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}