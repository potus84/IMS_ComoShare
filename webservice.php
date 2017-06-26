<?php
$conn = new mysqli("localhost", "root", "", "ims");

if (isset($_SERVER['PATH_INFO'])) {
    $path_params = explode('/', trim($_SERVER['PATH_INFO']));
} else {
    http_response_code(400);
    die("Path parameter not set!");
}
$input = json_decode(file_get_contents('php://input'), true);

$roomname = $input['roomname'];
$city = $input['city'];
$lat = $input['lat'];
$longi = $input['longi'];
$img = $input['img'];
$price = $input['price'];
$availability = $input['availability'];
$description = $input['roomname'];

switch ($_SERVER['REQUEST_METHOD']) {

    case 'GET':
        if (isset($path_params[1])) {
            if ($path_params[1] == "accommodations") {
                $sql = "select * from accommodation";

                if (isset($path_params[2]) && is_numeric($path_params[2])) {
                    $sql .= " where id=" . $path_params[2];
                }

                $result = $conn->query($sql);
                $list = [];
                while ($row = $result->fetch_assoc()) {
                    $list[] = $row;
                }
                print_r(json_encode($list));
            } else {
                http_response_code(404);
                echo "Unsupported path!";
            }
        }

        break;


    default:
        http_response_code(400);
        echo "Unsupported method!";
}

?>