    <?php

    /*$connection = mysqli_connect('localhost','root','','raport-online');
    $filename = 'backup.sql';
    $handle = fopen($filename,"r+");
    $contents = fread($handle,filesize($filename));
    $sql = explode(';',$contents);
    foreach($sql as $query){
      $result = mysqli_query($connection,$query);
      if($result){
          echo '<tr><td><br></td></tr>';
          echo '<tr><td>'.$query.' <b>SUCCESS</b></td></tr>';
          echo '<tr><td><br></td></tr>';
      }
    }
    fclose($handle);
    echo 'Successfully imported';
    $file=$_FILES['file']['name'];

    if ($type_gambar !="file/sql")
    {
      echo "upload gagal !!<br>
      tipe file <b>$file</b> : $type_gambar <br>
      tipe file yang boleh di upload .sql <br>";
      
    }
    else{ 
      echo $file;
    }*/
      ?>
      <form action="import2.php" method="post">
        <input type="file" name="file" id="file" />
        <button type="submit">Jalankan</button>
      </form>