<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせを受け付けました</title>
</head>
<body>
    <p>ポートフォリオサイトよりお問い合わせ</p>
    ーーーー
    <p>件名：{{$inputs['title']}}</p>
    <p>名前：{{$inputs['name']}}</p>
    <p>メールアドレス：{{$inputs['email']}}</p>
    <p>お問い合わせ内容：{{$inputs['body']}}</p>
    ーーーー
    <p>担当者よりご連絡いたしますので、今しばらくお待ちください。</p>
</body>
</html>