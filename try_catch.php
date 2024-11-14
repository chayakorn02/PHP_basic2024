<h3>Try Catch</h3>

<?php 
try {

    $x = 10 / 0 ;
} catch (DivisionByZeroError $e) {
    echo "เกิดข้อผิดพลาด ไม่สามารถหารด้วยศูนย์ได้";
} catch (Throwable $e) {
    echo "เกิดข้อผิดพลาดอื่นๆ:" .$e->getMessage();
}
?>