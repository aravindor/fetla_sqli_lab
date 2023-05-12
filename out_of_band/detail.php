<?php
$header = 'Out-of-band SQLi';
include("../layout/header.php");
$id = $_GET['id'];
$sql = "SELECT * FROM news WHERE id = $id" ;
echo '<script>console.log("' .addslashes($sql ). '"); </script>';
$result = mysqli_query($conn, $sql);
$item = mysqli_fetch_assoc($result);
?>
<div class="flex-grow-1 d-flex align-items-center flex-column ">
    <h3 class="mt-3 text-decoration-underline">Community News</h3>
    <div  class="d-flex flex-column align-items-center">
        <div class="card m-2" style="width: 60%;min-width: 500px;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $item['header'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted "><?php echo $item['date'] ?></h6>
                <p class="card-text"><?php echo $item['body'] ?></p>

            </div>
        </div>
    </div>
</div>
<?php
include("../layout/footer.php");
?>