<?php 
    // Date
    // Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // Unix Timestamp / EPOCH Time
    // Detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // echo date("l", time()-60*60*24*100);

    // mktime
    // membuat sendiri detika
    // mktime (0,0,0,0,0,0)
    // jam, menit , detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,1,13,2003));

    // strtotime
    echo date("l", strtotime("13 jan 2003"));












?>