<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/
dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/
jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/
umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/
bootstrap.min.js"></script>
<style type="text/css">
	.arkaplan{
 margin:auto;
 margin-top:20px;
 height:auto;
 width:500px;
 color:indigo;
 border:2px solid black;
 padding:25px;
 background:azure;
 }
</style>
</head>
<body>
	<form action="gonder.php" name="basvuru" method="POST">
	<div class="arkaplan">
 <form action="basvuru.php" name="basvuru">
 <h2>Yazılım Uzmanı Bilgi Formu</h2>
 <h3>Kişisel Bilgiler</h3>
 <table cellpadding="5px">
 <tr>
 <td>T.C. Kimlik</td>
 <td><input type="text" name="tc" class="form-control">
 </td>
 </tr>
 <tr>
 <td>Ad Soyad</td>
 <td><input type="text" name="adSoyad" class="form-control"></td>
 </tr>
 <tr>
 <td>Yaş</td>
 <td><input type="number" name="yas" min="20" max="40"
class="form-control" ></td>
 </tr>
<tr>
 <td>Mail Adresi</td>
 <td><input type="email" name="ePosta" class="formcontrol" ></td>
 </tr>
 <tr>
 <td>Fotoğraf Ekle</td>
 <td><input type="file" name="profil"></td>
 </tr>
 </table>
 <h3>Mesleki Deneyim</h3>
 <table cellpadding="5px">
 <tr>
 <td>Yazılıma Giriş Tarihi</td>
 <td>
 <input type="date" name="tarih" value="2015-01-01"
class="form-control">
 </td>
 </tr>
 <tr>
 <td>Yazılım Deyimi</td>
 <td>
 <label><input type="radio" name="deneyim"> 1 - 5 yıl
 </label><br>
 <label><input type="radio" name="deneyim"> 6 - 10 yıl
 </label><br>
 </td>
 </tr>
 <tr>
 <td>Programlama Dilleri</td>
 <td>
 <select name="pDil" multiple size="3" class="form-control">
 <option>C#</option>
 <option selected>PHP</option>
 <option>Java</option>
<option>Python</option>
<option>JavaScript</option>
<option>C++</option>
<option>C</option>
<option>Pascal</option>
 </select>
 </td>
 </tr>
 </table>
<h3>Form Onay</h3>
 <label><input type="checkbox" name="onay"> Yukarıdaki bilgilerin
doğruluğunu kabul ediyorum ve sözleşmeyi onaylıyorum.
 </label><br>
 <input type="submit" value="Kaydet" class="btn btn-primary btn-block">
 <input type="reset" value="Temizle" class="btn btn-danger btn-block">
 </form>
 </div>

</body>
</html>