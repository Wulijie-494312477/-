<?

//处理跨域
header('Access-Control-Allow-Origin:*');

include("conn.php");

//数组
$username = $_GET["username"];
$pwd = $_GET["pwd"];
$token = $_GET["token"]; //身份令牌

//根据用户名从数据库中找到所有的信息 密码 token值
$sql = "select * from users where username='{$username}'";
$result = mysql_query($sql);
$rs = mysql_Fetch_assoc($result); //所有信息的数组

$num = mysql_num_rows($result);
if($num>0){
    if($pwd==$rs["pwd"]){
    //     localStorage["username"]=$username;
    //     localStorage["id"]=$rs["id"];
        $arr = array("msg"=>"loginOk");
        echo json_encode($arr);
    }else{
        $arr = array("msg"=>"pwd no");
        echo json_encode($arr);
    }
}else{
    $arr = array("msg"=>"no");
    echo json_encode($arr);
}

?>