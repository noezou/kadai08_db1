<?php
//共通に使う関数を記述：たくさん関数を記述しておいて、使いまわす

//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($stg) {
  return htmlspecialchars($stg, ENT_QUOTES);
}

?>