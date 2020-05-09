<?php
// セッション開始！
$flg = session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<body>
 
<?php
if( $flg === true ){
  // セッションIDを取得
  echo session_id();
} else {
  echo "セッションの作成に失敗しました！";
}
// セッションの破棄
session_destroy();
?>
 
</body>
</html>
