  <?php

    $connection = mysqli_connect('localhost','root','','raportku');
    $open = mysqli_query($connection, "SET foreign_key_checks=0");
    $file= $_POST['file'];
    $filename = "D://".$file;
    $handle = fopen($filename,"r+");
    $contents = fread($handle,filesize($filename));
    $sql = explode(';',$contents);
    foreach($sql as $query){
      $result = mysqli_query($connection,$query);
      if($result){
          //echo '<tr><td><br></td></tr>';
        //  echo '<tr><td>'.$query.' <b>SUCCESS</b></td></tr>';
          //echo '<tr><td><br></td></tr>';
      }
    }
    fclose($handle);
    $close = mysqli_query($connection, "SET foreign_key_checks=1");
    echo "<script>alert('Restore Data Berhasil.')</script>";
    echo "<script>location.href = 'backup_restore'</script>"
    
      ?>