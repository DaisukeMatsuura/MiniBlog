<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php if(isset($title)): echo $this->escape($title) . ' - ';
        endif; ?>Mini Blog</title>
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8888/FW/web/css/style.css" />
</head>
<body>
    <div id="header">
        <h1><a href="<?=$this->default['base_url']?>/account/signup">Mini Blog</a></h1>
    </div>

    <div id="nav">
        <p>
            <?php if ($this->default['session']->isAuthenticated()): ?>
            <a href="<?=$this->default['base_url']?>/">ホーム</a>
            <a href="<?=$this->default['base_url']?>/account">アカウント</a>
            <?php else: ?>
            <a href="<?=$this->default['base_url']?>/account/signin">ログイン</a>
            <a href="<?=$this->default['base_url']?>/account/signup">アカウント登録</a>
            <?php endif; ?>
        </P>
    </div>

    <div id="main">
        <?=$_content?>
    </div>
</body>
</html>