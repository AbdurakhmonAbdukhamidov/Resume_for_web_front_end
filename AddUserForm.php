<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Style/AdduserForm.css">
    <title>Document</title>
</head>
<body>
           <div class="close" id="close">
                <img style="width: 20px;" src="/images/298889_x_icon.svg" alt="">
            </div>
<div class="container">
            <div class="title">
                <TitleForPages :theme="'Add user'"/>
            </div>
            <form action="" method="post">
                <div class="block1">
                    <div class="photo">
                        <div class="img">
                        <img src="/images/svg-file-format-variant.png" alt="">
                        </div>
                    <input type="file" name="file">
                    </div>
                    <div class="inputs">
                            <div class="name">
                                <label for="">name</label>
                                <input type="text" name="name">
                            </div>
                            <div class="surname">
                                <label for="">surname</label>
                                <input type="text" name="surname">
                            </div>
                            <div class="email_address">
                                <label for="">email</label>
                                <input type="email" name="email">
                            </div>
                            <div class="send">
                                <input type="submit" value="Send" name="Send">
                            </div>
                        
                    </div>
                </div>
            </form>
</div>

<script src="/javaScript/AddUserForm.js"></script>
</body>
</html>