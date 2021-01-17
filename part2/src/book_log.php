<?php

//読書ログ登録を関数化
function createReview ()
{
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

    //登録するレビュー(連想配列)を戻り値として返す
    return [
        'title' => $title,
        'author' => $author,
        'status' => $status,
        'evaluation' => $evaluation,
        'comment' => $comment,   
    ];
}

//読書ログ表示を関数化、引数に配列reviewsを入れる
function displayReview($reviews)
{
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
}

//読書ログを格納する配列
$reviews = [];

while (true) {

    echo '1. 読書ログを登録' . PHP_EOL;
    echo '2. 読書ログを表示' . PHP_EOL;
    echo '9. アプリケーションを終了' . PHP_EOL;
    echo '番号を選択してください(1,2,9):';

    $num = trim(fgets(STDIN));

    if ($num === '1') {
        //関数の外で配列に戻す、関数化した読書ログ登録(戻り値=連想配列)を配列reviewsに格納
        $reviews[] = createReview();
        
    } elseif ($num === '2'){
        //関数化した読書ログ表示(引数=配列reviews)を呼び出し ※戻り値なしの場合
        displayReview($reviews);

    } elseif ($num === '9') {
        //アプリケーションを終了する
        break;
    }
}