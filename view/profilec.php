<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/profilec.css" rel="stylesheet">
    <title>プロフィール変更フォーム</title>
  </head>
  <body>
    <h1>プロフィール変更</h1>
    <h2>※変更しない場合は空白で変更を押してください</h2>
    <div class="content">
      <div class="profileimg">
        <div class="pfimg">プロフィール画像</div>
        <button id="pfimgc">画像変更</button><br>
      </div>
      <div class="infoc">
        <table>
          <tr><td>ID</td><td><input type="text" class="textform"></td></tr>
          <tr><td>パスワード</td><td><input type="password" class="textform"></td></tr>
          <tr><td>パスワード変更</td><td><input type="password" class="textform"></td></tr>
        </table>
        <p>※変更しない場合は空白で変更をクリック<p>
      </div>
    </div>
    <button id="pchange">変更</button>
  </body>
</html>
