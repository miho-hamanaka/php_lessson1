<?php

$title = '';
$author = '';
$status = '';
$evaluation = '';
$comment = '';

//読書ログを格納する配列
$reviews = [];

while (true) {

    echo '1. 読書ログを登録' . PHP_EOL;
    echo '2. 読書ログを表示' . PHP_EOL;
    echo '9. アプリケーションを終了' . PHP_EOL;
    echo '番号を選択してください(1,2,9):';

    $num = trim(fgets(STDIN));

    if ($num === '1') {
        //読書ログを登録
        echo '読書ログを登録してください' . PHP_EOL;
        echo '書籍名:';
        $title = trim(fgets(STDIN));

        echo '著者名:';
        $author = trim(fgets(STDIN));

        echo '読書状況（未読,読んでる,読了）:';
        $status = trim(fgets(STDIN));

        echo '評価（5点満点の整数）:';
        $evaluation = trim(fgets(STDIN));

        echo '感想:';
        $comment = trim(fgets(STDIN));

        echo '登録が完了しました' . PHP_EOL . PHP_EOL;

        //用意した読書ログを格納する配列に、連想配列でラベルつけて要素を追加
        $reviews[] = [
            'title' => $title,
            'author' => $author,
            'status' => $status,
            'evaluation' => $evaluation,
            'comment' => $comment,   
        ];
        
    } elseif ($num === '2'){

        echo '読書ログを表示します' . PHP_EOL;
        
        //配列に格納した読書ログ、全要素をループ表示
        foreach ($reviews as $review) {
            echo '書籍名:' . $review['title'] . PHP_EOL;
            echo '著者名:' . $review['author'] . PHP_EOL;
            echo '読書状況:' . $review['status'] . PHP_EOL;
            echo '評価:' . $review['evaluation'] . PHP_EOL;
            echo '感想:' . $review['comment'] . PHP_EOL;
            echo '-------------' . PHP_EOL;
        }

    } elseif ($num === '9') {
        //アプリケーションを終了する
        break;
    }
}
//TODO:あとで削除 配列に連想配列で格納した全要素が取得できているかを確認するためのもの
//var_export($reviews);


// echo '書籍名: 銀河鉄道の夜' . PHP_EOL;
// echo '著者名: 宮沢賢治' . PHP_EOL;
// echo '読書状況: 読了' . PHP_EOL;
// echo '評価: 5' . PHP_EOL;
// echo '感想: 本当の幸せとはな何だろうかと考えさせられる作品だった。' . PHP_EOL;

