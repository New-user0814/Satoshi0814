
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./b.css">
    <link rel="stylesheet" href="./c.js">
    <title>PHP_SAMPLE</title>
</head>

<body>
    <h1>
        <a href="./form.php">
        Hello
        </a>
    </h1>
</body>

<body class="body">
    <form action=""　method="POST" enctype="multipart/form-data">
    <!-- action="./send.php" target="_blank"  -->
        <div>
            <label class="first">氏名
                <input name="name" id="name_text" type="text" size="30" placeholder="文字を入力してください" >
            </label>
        </div>

        <div class="second">
            <label>mail
                <input name="mail" type="email" id="e-mail" size="30" maxlength="50" >
            </label>
        </div>

        <div class="fifth">
            <label>電話番号
                <input type="tel" name="tel" id="tel_number" size="30" pattern="[0-9]*">
        </label>
        </div>

    <!-- pattern=" [/d]{12,} -->

                <!-- <div class="third">
        <input type="file" id="file_choose" value="choose file">
    </div> -->

        <div class="six">
            <label>パスワード
                <input type="password" name="pass" id="password" pattern="[A-Z]*">
            </label>
        </div>

        <div class="fourth">
            <label>
                <input type="submit" id="submit_form" name="submitAnswer" value="送信する">
            </label>
        </div>
    </form>

<hr class="horizon" width="100%">
                <!-- <div　class="ten">
                    <input type="button" id="button" value="ボタン">
                </div> -->

                <!-- <p class="echo">
                    <?php echo $_POST["name"]; ?><br>
                    <?php echo $_POST["mail"]; ?><br>
                    <?php echo $_POST["tel"]; ?><br>
                    <?php echo $_POST["pass"]; ?><br>
                </p> -->


            
</body>

</html>