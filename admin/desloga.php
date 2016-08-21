<?php
session_start();
session_destroy();

echo "<script>alert('Efetuando logout...');top.location.href='../index.php';</script>";
