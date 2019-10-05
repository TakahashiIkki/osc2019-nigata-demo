<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>OSC2019 新潟 デモ</title>
    <style type="text/css">
        <!--
        table{
            width: 100%;
            border-collapse: collapse;
        }

        table tr{
            border-bottom: solid 2px white;
        }

        table tr:last-child{
            border-bottom: none;
        }

        table th{
            position: relative;
            text-align: left;
            width: 30%;
            background-color: #52c2d0;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        table th:after{
            display: block;
            content: "";
            width: 0px;
            height: 0px;
            position: absolute;
            top:calc(50% - 10px);
            right:-10px;
            border-left: 10px solid #52c2d0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
        }

        table td{
            text-align: left;
            width: 70%;
            text-align: center;
            background-color: #eee;
            padding: 10px 0;
        }
        -->
    </style>
</head>

<body>

<?php
$dsn = 'pgsql:dbname=osc_demo;host=osc_pgsql;port=5432';
$user = 'osc_user';
$pass = 'osc_pass';

$target_user_name = 'percy.wolff';

try {
    $dbh = new PDO($dsn, $user, $pass);
    $sql = "SELECT * FROM customers WHERE name = '{$target_user_name}'";

    foreach ($dbh->query($sql) as $row) {
        $target_user = $row;
    }
    $dbh = null;
} catch (PDOException $e){
    print('[ERROR] ' . $e->getMessage() . "\n");
    die();
}

?>

<h1>percy.wolff様の個人情報</h1>
<section>
    <table>
        <tr>
            <th>お客様ID</th>
            <td><?= $target_user['id'] ?></td>
        </tr>
        <tr>
            <th>お名前</th>
            <td><?= $target_user['name'] ?></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><?= $target_user['email'] ?></td>
        </tr>
        <tr>
            <th>性別</th>
            <td><?= $target_user['sex'] == 1 ? '男性' : '女性' ;?></td>
        </tr>
        <tr>
            <th>誕生日</th>
            <td><?= $target_user['birthday']; ?></td>
        </tr>
    </table>
</section>

</body>
</html>
