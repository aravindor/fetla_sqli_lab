<?php
$header = 'Secure version';
include("../layout/header.php");
$stmt = mysqli_prepare($conn,"SELECT * FROM news") ;
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$news = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<div class="w-100 d-flex align-items-center flex-column ">
    <h3 class="mt-3 text-decoration-underline">Community News</h3>
    <div style="overflow: auto; -ms-overflow-style: none; scrollbar-width: none;" class="d-flex flex-column align-items-center">
        <style>
            ::-webkit-scrollbar {
                display: none;
            }
        </style>
        <?php foreach ($news as $item) : ?>
            <div class="card m-2" style="width: 60%;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $item['header'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted " ><?php echo $item['date'] ?></h6>
                    <p class="card-text"><?php echo $item['body'] ?></p>
                    <a href="detail.php?id=<?php echo $item['id'] ?>" class="card-link">View detail</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
include("../layout/footer.php");
?>