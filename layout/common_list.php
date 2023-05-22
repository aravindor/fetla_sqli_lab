<?php
$sql = "SELECT * FROM news";
$result = mysqli_query($conn, $sql);
$news = mysqli_fetch_all($result, MYSQLI_ASSOC)
?>
<div class="flex-grow-1 d-flex align-items-center flex-column ">
    <div class="row justify-content-center">
        <div class="col col-lg-8 col-md-8 col-xs-12 mx-2  text-center">
            <h3 class="mt-3 text-decoration-underline">Community News</h3>
            <div style="overflow: auto; -ms-overflow-style: none; scrollbar-width: none;" class="d-flex flex-column">
                <style>
                    ::-webkit-scrollbar {
                        display: none;
                    }
                </style>
                <?php foreach ($news as $item) : ?>
                    <div class="card m-2 flex-grow-1 ">
                        <div class="card-body  text-start">
                            <h5 class="card-title"><?php echo $item['header'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted "><?php echo $item['date'] ?></h6>
                            <p class="card-text "><?php echo $item['body'] ?></p>
                            <a href="detail.php?id=<?php echo $item['id'] ?>" class="card-link">View detail</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>
<?php
include("../layout/footer.php");
?>