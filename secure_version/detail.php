<?php
$header = 'Secure version';
include("../layout/header.php");
$id = $_GET['id'];
$stmt = mysqli_prepare($conn, "SELECT * FROM news WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$item = mysqli_fetch_assoc($result);
?>
<div class="flex-grow-1 d-flex align-items-center flex-column ">
    <div class="row justify-content-center flex-grow-1 text-center w-100">
        <div class="col col-lg-8 col-md-8 col-xs-12 text-center mx-2 ">
            <h3 class="mt-3 text-decoration-underline">Community News</h3>
            <div class="d-flex flex-column align-items-center">
                <div class="card m-2 text-start">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item['header'] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted "><?php echo $item['date'] ?></h6>
                        <p class="card-text"><?php echo $item['body'] ?></p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
include("../layout/footer.php");
?>