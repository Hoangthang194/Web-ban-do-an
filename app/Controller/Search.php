<?php
session_start();
require_once "../../db.conn.php";
require_once "../Interface/IFood.php";
require_once "../Classes/Food.php";
// Kiểm tra xem form đã được gửi hay chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = $_POST["search"];
    $userId = $_SESSION["user_id"];

    if (!empty($searchTerm)) {
        $searchTerm = strtolower(trim($searchTerm));
        $food= new Food();
        $foodAll = $food->getAll();
        if(!$foodAll){
            header("Location: ../../index.php?id=$userId");
        }
        foreach($foodAll as $item){
            $stringFood = strtolower(trim($item["food_name"]));
            if($stringFood == $searchTerm){
                header("Location: ../../index.php?id=$userId#".$item["food_id"]);
                break;
            }
            if($stringFood != $searchTerm){
                echo '
                <script>
                alert("Sản phẩm không tồn tại");
                
                    window.location.href = "../../index.php?id=' . $userId . '&notfound=true";

                </script>
';              break;

            }
        }
    } else {
        header("Location: ../../index.php?id=$userId");
    }
}
?>
