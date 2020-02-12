<!DOCTYPE html>
<html>

  <head>
    <title>Document</title>
    <style type="text/css">
      body{
        background-image: url(b.png);
        background-attachment: fixed;
        background-size: 100% 100%;
        margin-top: 10%;
        margin-left: 35%;
        background-color: pink;
        height: 270px;
        font-family: sans-serif;
      }
      .kamu{
        background-color: #fff;
        width: 350px;
        padding: 26px;
        box-sizing: border-box;
        text-align: center;
        border: 1px solid rgb(255,255,255);
        border-radius: 10px;
      }
      .kamu .input-group{
        position: relative;
        width: 100%;
        margin-bottom: 25px;
      }
      .kamu .input-group input{
        height: 50px;
        width: 100%;
        padding: 0 20px;
        box-sizing: border-box;
        font-size: 18px;
        border: 1px solid pink;
        border-radius: 10px;
      }
      .kamu .input-group span{
        position: absolute;
        top: 12px;
        left: 20px;
        padding: 4px;
        text-transform: capitalize;
        background-color: pink;
        border-radius: 4px;
        transition: 0.5s;
      }
      .kamu .input-group input:focus ~ span,
      .kamu .input-group input:valid ~ span{
        top: -12px;
        left: 20px;
        font-size: 12px;
        background-color: pink;
        padding: 2px 4px;
        border-radius: 5px;
        border: 1px solid pink;
      }
      .kamu .input-group input[type="submit"]{
        background-color: pink;
        border: none;
        text-transform: uppercase;
        font-weight: 12px;
        cursor: pointer;
        width: 40%;
        transition: 0.5s;
      }
      .kamu .input-group input[type="submit"]:hover{
        width: 100%;
        background-color: rgba(255, 0, 0, 0.5);
        color: #fff;
      }
    </style>
  </head>

<body>
  <div class="kamu">
    <form method="POST" action="simpan.php">
      <h2>WELCOME</h2>
      <div class="input-group">
        <input type="text" name="nama" required="">
        <span> Nama </i></span>
      </div>
      <div class="input-group">
        <input type="number" name="kelas" required="">
        <span> Kelas </i></span>
      </div>
      <tr><td>
        <select name="jurusan">
          <option value="RPL">Rekayasa Perangkat Lunak</option>
          <option value="APH">Akomodasi Perhotelan</option>
          <option value="UPW">Usaha Perjalanan Wisata</option>
        </select>
      </td></tr><br><br>
      <div class="input-group">
        <input type="submit" value="simpan">
      </div>
    </form>
  </div>
</body>

</html>
