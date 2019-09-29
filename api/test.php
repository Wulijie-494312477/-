<?
    //处理跨域
    header('Access-Control-Allow-Origin:*');

    include("conn.php");

    //数组
    $username = $_GET["username"];
    $pwd = $_GET["pwd"];
    $token = base64_encode(time());

    //$arr = array("username"=>$username,"pwd"=>$pwd);
    
    $sql = "insert into users(username,pwd,token) values('{$username}','{$pwd}','{$token}')";
    if(mysql_query($sql)){
        $arr = array("msg"=>"ok","token"=>$token);
        echo json_encode($arr);
    }else{
        $arr = array("msg"=>"no");
        echo json_encode($arr);
    }

    // echo json_encode($arr);
?>