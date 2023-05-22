<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$header = 'Union based SQLi';
include("../layout/header.php");
$id = $_GET['id'];
$injectionType = $_GET['injection_type'];
switch ($injectionType) {
    case 'single_quote':
        $sql = "SELECT * FROM news WHERE id = '$id'";
        break;
    case 'double_quote':
        $sql = "SELECT * FROM news WHERE id = \"$id\"";
        break;
    case 'integer_br':
        $sql = "SELECT * FROM news WHERE id = ($id)";
        break;
    case 'single_quote_br':
        $sql = "SELECT * FROM news WHERE id = ('$id')";
        break;
    case 'double_quote_br':
        $sql = "SELECT * FROM news WHERE id = (\"$id\")" ;
        break;
    default:
        $sql = "SELECT * FROM news WHERE id = $id";
        break;
}

// $sql = "SELECT * FROM news WHERE id = '$id'";
// $sql = "SELECT * FROM news WHERE id = \"$id\"" ;
// $sql = "SELECT * FROM news WHERE id = ($id)";
// $sql = "SELECT * FROM news WHERE id = ('$id')" ;
// $sql = "SELECT * FROM news WHERE id = (\"$id\")" ;
echo '<script>console.log("' . addslashes($sql) . '"); </script>';
$result = mysqli_query($conn, $sql);
$item = mysqli_fetch_assoc($result);
?>
<div class="flex-grow-1 d-flex align-items-center flex-column ">
    <div class="row justify-content-center text-center">
        <div class="col col-lg-8 col-md-8 col-xs-12 text-center mx-2">
            <h3 class="mt-3 text-decoration-underline">Community News</h3>
            <div class="d-flex align-items-center flex-row mt-3">
                <h5 class="me-3 d-none d-lg-block">Injection type:</h5>
                <div>
                    <select class="form-select" id="injection-type">
                        <option value="integer" selected>Integer based</option>
                        <option value="single_quote">String based (Single quote)</option>
                        <option value="double_quote">String based (Double quote)</option>
                        <option value="integer_br">Integer with brackets</option>
                        <option value="single_quote_br">String based (Single quote) with brackets</option>
                        <option value="double_quote_br">String based (Double quote) with brackets</option>
                    </select>
                </div>

            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $item['header'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted "><?php echo $item['date'] ?></h6>
                    <p class="card-text"><?php echo $item['body'] ?></p>

                </div>
            </div>
        </div>

    </div>

</div>
<script>
    var selectElement = document.getElementById("injection-type");
    var urlParams = new URLSearchParams(window.location.search);
    var selectedValue = urlParams.get("injection_type");
    if (selectedValue) {
        selectElement.value = selectedValue;
    } else {
        selectElement.value = "integer";
    }

    selectElement.addEventListener("change", function() {
        var selectedValue = selectElement.value;
        var currentURL = window.location.href;
        var separator = currentURL.includes("?") ? "&" : "?";
        var url = updateQueryParam(currentURL, "injection_type", selectedValue);
        window.location.href = url;
        window.location.href = url;
    });

    function updateQueryParam(url, paramName, paramValue) {
        var regex = new RegExp(`([?&])${paramName}=.*?(&|$)`, "i");
        var separator = url.includes("?") ? "&" : "?";
        if (url.match(regex)) {
            return url.replace(regex, `$1${paramName}=${encodeURIComponent(paramValue)}$2`);
        } else {
            return url + separator + paramName + "=" + encodeURIComponent(paramValue);
        }
    }
</script>
<?php
include("../layout/footer.php");
?>