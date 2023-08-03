<h1>Berlatih Function</h1>
<?php
    echo "<h3>Soal No 1 Greetings</h3>";
        function greetings($nama) {
            echo "Halo $nama, Selamat Datang di Jabar Coding Camp!";
      }
            greetings("Bagas");
            echo "<br>";
            greetings("Wahyu");
            echo "<br>";
            greetings("Abdul");

    echo "<h3>Soal No 2 Reverse String</h3>";
        function reverse($rvr1) {
            $panjang = strlen($rvr1);
            $hasil = '';
        for ($i = ($panjang - 1); $i >= 0; $i--) {
            $hasil .= $rvr1[$i];
        }
            return $hasil;
      }
        function reverseString($rvr2) {
            $string = reverse($rvr2);
            echo $string ."<br>";
      }
        reverseString("abduh");
        reverseString("Bootcamp");
        reverseString("We Are JCC Developers");
        echo "<br>";
    
    echo "<h3>Soal No 3 Palindrome </h3>";
        function palindrome($kalimat1) {
            $kalimat2 = reverse($kalimat1);
        if ($kalimat1 == $kalimat2) {
          echo 'palindrome(' . $kalimat1 . ') = true <br>';
        } else {
          echo 'palindrome(' . $kalimat1 .  ') =  false <br>';
        }
      }
        palindrome("civic") ; 
        palindrome("nababan") ; 
        palindrome("jambaban"); 
        palindrome("racecar"); 

    echo "<h3>Soal No 4 Tentukan Nilai </h3>";
        function tentukan_nilai($val) {
            $hasil2 = 'tentukan_nilai(' . $val .') = ';
        if ($val >= 85 && $val <= 100) {
          $hasil2 .= 'Sangat Baik';
        } else if ($val >= 70 && $val < 85) {
          $hasil2 .= 'Baik';
        } else if ($val >= 60 && $val < 70) {
          $hasil2 .= 'Cukup';
        } else {
          $hasil2 .= 'Kurang';
        }
        return $hasil2 ."<br>";
      }
        echo tentukan_nilai(98); 
        echo tentukan_nilai(76); 
        echo tentukan_nilai(67); 
        echo tentukan_nilai(43); 
?>