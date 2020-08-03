<?php
declare(strict_types=1);//厳密な型チェック
// require("./DBinterface.php");//データベースクラス群

class Table_user {
    public function check(string $user_idName){
        return 0;
        // return -1;
        // return -500;
    }
    public function register(string $user_idName, string $user_pass, string $user_firstName,
                            string $user_secondName, string $user_mailAddress){
        return 0;
        // return -1;
        // return -500;
    }
    public function login(string $user_idName, string $user_pass){
        return 15;
        // return PHP_INT_MAX + 1;
        // return -1;
        // return -500;
    }
}
class Table_category{
    public function getCategory(){
        return json_encode(array(
            array(),
            array()
        ));
        // return -1;
        // return -500;
    }
}
class Table_video{
    public function nameSearch(string $video_name){
        return json_encode(array(
            array(),
            array()
        ));
        // return -1;
        // return -500;
    }
    public function getVideo(int $video_id){
        return json_encode(array(
            array(),
            array()
        ));
        // return -1;
        // return -500;
    }
    public function insertVideo(string $video_name,
            string $video_date, string $video_picture, string $video_introduceUrl){
        return 0;
        // return -1;
        // return -500;
    }
    public function deleteVideo(int $video_id){
        return 0;
        // return -1;
        // return -500;
    }
}
class Table_videoCategory{
    public function categorySearch(int $category_id){
        return json_encode(array(
            array(),
            array()
        ));
        // return -1;
        // return -500;
    }
}
class Table_interesting{
    public function setInteresting(int $user_id, int $category_id){
        return 0;
        // return -1;
        // return -500;
    }
    public function getInteresting(int $user_id){
        return json_encode(array(
            array(
                "interesting_id" => "1",
                "interesting_date" => "2020/01/01"
            ),
            array(
                "interesting_id" => "2",
                "interesting_date" => "2020/01/02"
            ),
        ));
        // return -1;
        // return -500;
    }
}
class Table_stock{
    public function getStock(int $video_id){
        return json_encode(array(
            array(),
            array()
        ));
        // return -1;
        // return -500;
    }
    public function incrementStock(int $shop_id, int $video_id){
        return 0;
        // return -1;
        // return -500;
    }
    public function decrementStock(int $shop_id, int $video_id){
        return 0;
        // return -1;
        // return -500;
    }
}
class Table_book{
    public function setBook(int $user_id, int $video_id, int $shop_id){
        return 0;
        // return -1;
        // return -500;
    }
    public function selectALLBook(){
        return json_encode(array(
            array(),
            array()
        ));
        // return -1;
        // return -500;
    }
    public function getBook(int $user_id){
        return json_encode(array(
            array(),
            array()
        ));
        // return -1;
        // return -500;
    }
    public function deleteBook(int $book_id){
        return 0;
        // return -1;
        // return -500;
    }
    public function updateBook(int $user_id){
        return 0;
        // return -1;
        // return -500;
    }
    public function updateBookFromShop(int $book_id){
        return 0;
        // return -1;
        // return -500;
    }
    public function cancelBookFromShop(int $book_id){
        return 0;
        // return -1;
        // return -500;
    }
    public function getBookFromShop(int $shop_id){
        return json_encode(array(
            array(),
            array()
        ));
        // return -1;
        // return -500;
    }
}

$_POST["table"] = "interesting";
$_POST["function"] = "getInteresting";

$_POST["user_id"] = "14";
$_POST["user_idName"] = "idName";
$_POST["user_pass"] = "pass";
$_POST["user_firstName"] = "firstName";
$_POST["user_secondName"] = "secondName";
$_POST["user_mailAddress"] = "mailAddress";

$_POST["video_id"] = "id";
$_POST["video_name"] = "name";
$_POST["video_date"] = "date";
$_POST["video_picture"] = "picture";
$_POST["video_introduceUrl"] = "pass";

$_POST["stock_id"] = "pass";
$_POST["stock_videoNum"] = "pass";

$_POST["shop_id"] = "pass";
$_POST["shop_name"] = "pass";

$_POST["book_id"] = "pass";
$_POST["book_date"] = "pass";
$_POST["book_complete"] = "pass";

$_POST["videoCategory_id"] = "pass";

$_POST["category_id"] = "a";
$_POST["category_name"] = "1";

$answer = -2;//tableかfunctionのミスは-2が返る
if($_POST['table'] == "interesting"){
    $user = new Table_user();
    $db = new Table_interesting();
    /**
     * 興味を登録する
     * @param string user_idName ID名
     * @param string user_pass パスワード
     * @param int category_id プライマリーキー
     * @return 0 正常終了
     * @throws -1 err
     */
    if($_POST['function'] == "setInteresting"){
        $user_id = $user->login($_POST["user_idName"],$_POST["user_pass"]);
        if($user_id != -1){
            $answer = $db->setInteresting((int)$user_id, $_POST["category_id"]);
        }else{
            $answer = -1;
        }
    }
    /**
     * 嗜好取得
     * @param string user_idName ID名
     * @param string user_pass パスワード
     * @return interesting_id,interesting_date
     * @return user_id,user_idName,user_pass,user_firstName,user_secondName,user_mailAddress
     * @return category_id,category_name
     * @throws -1 err
     */
    else if($_POST['function'] == "getInteresting"){
        $user_id = $user->login($_POST["user_idName"],$_POST["user_pass"]);
        if($user_id != -1){
            $answer = $db->getInteresting((int)$user_id);
        }else{
            $answer = -1;
        }
    }
}else if($_POST['table'] == "user"){
    $db = new Table_user();
    /**
     * ID名から空きの確認をする。
     * $rowにヒットしたクエリを格納する。
     * @param string user_idName ユーザ名
     * @return 0 空きあり
     * @throws -1 既に登録あり。 err
     */
    if($_POST['function'] == "check"){
        $answer = $db->check($_POST["user_idName"]);
    }
    /**
     * ユーザ登録をする。
     * userテーブルに追加する。
     * @param string user_idName ユーザ名
     * @param string user_pass ユーザ名
     * @param string user_firstName 姓
     * @param string user_secondName 名
     * @param string user_mailAddress メアド
     * @return 0 正常終了
     * @throws -1 既に登録あり。 err
     */
    else if($_POST['function'] == "register"){
        $answer = $db->register($_POST["user_idName"],$_POST["user_pass"],$_POST["user_firstName"],$_POST["user_secondName"],$_POST["user_mailAddress"]);
    }
    /**
     * ID名とパスワードからユーザIDを調べる。
     * $rowにヒットしたクエリを格納する。
     * @param string user_idName ユーザ名
     * @param string user_pass ユーザ名
     * @return user_id ユーザのプライマリーキー。
     * @throws -1 エラー
     */
    else if($_POST['function'] == "login"){
        $answer = $db->login($_POST["user_idName"],$_POST["user_pass"]);
    }
}else if($_POST['table'] == "video"){
    $db = new Table_video();
    /**
     * ビデオ名で曖昧検索
     * @param string video_name ビデオの名前
     * @return video_id,video_name,video_date,video_picture,video_introduceUrl
     * @throws -1 err
     */
    if($_POST['function'] == "nameSearch"){
        $answer = $db->nameSearch($_POST["video_name"]);
    }
    /**
     * ビデオidからビデオ情報取得
     * @param int video_id プライマリーキー
     * @return video_id,video_name,video_date,video_picture,video_introduceUrl
     * @throws -1 err
     */
    else if($_POST['function'] == "getVideo"){
        $answer = $db->getVideo($_POST["video_id"]);
    }
    /**
     * ビデオ追加
     * @param string video_name
     * @param string video_date
     * @param string video_picture
     * @param string video_introduceUrl
     * @return 0 正常終了
     * @throws -1 err
     */
    else if($_POST['function'] == "insertVideo"){
        $answer = $db->insertVideo($_POST["video_name"],$_POST["video_date"],$_POST["video_picture"],$_POST["video_introduceUrl"]);
    }
    /**
     * 削除
     * @param int video_id
     * @return 0 正常終了
     * @throws -1 err
     */
    else if($_POST['function'] == "deleteVideo"){
        $answer = $db->deleteVideo($_POST["video_id"]);
    }
}else if($_POST['table'] == "stock"){
    $db = new Table_stock();
    /**
     * ビデオidから在庫かくにん
     * @param int video_id プライマリーキー
     * @return stock_id,stock_videoNum
     * @return video_id,video_name,video_date,video_picture,video_introduceUrl
     * @return shop_id,shop_name
     * @throws -1 err
     */
    if($_POST['function'] == "getStock"){
        $answer = $db->getStock($_POST["video_id"]);
    }
    /**
     * 返却
     * @param int shop_id
     * @param int video_id
     * @return 0 正常終了
     * @throws -1 err
     */
    else if($_POST['function'] == "incrementStock"){
        $answer = $db->incrementStock($_POST["shop_id"],$_POST["video_id"]);
    }
    /**
     * 貸し出し
     * @param int shop_id
     * @param int video_id
     * @return 0 正常終了
     * @throws -1 err
     */
    else if($_POST['function'] == "decrementStock"){
        $answer = $db->decrementStock($_POST["shop_id"],$_POST["video_id"]);
    }
}else if($_POST['table'] == "book"){
    $db = new Table_book();
    $user = new Table_user();
    /**
     * ユーザ取り置き申請
     * @param string user_idName
     * @param string user_pass
     * @param int video_id
     * @param int shop_id
     * @return 0 正常終了
     * @throws -1 err
     */
    if($_POST['function'] == "setBook"){
        $user_id = $user->login($_POST["user_idName"],$_POST["user_pass"]);
        if($user_id != -1){
            $answer = $db->setBook((int)$user_id,$_POST["video_id"],$_POST["shop_id"]);
        }else{
            $answer = -1;
        }
    }
    /**
     * 取り置き全部参照
     * @return book_id,book_date,book_complete
     * @return user_id
     * @return video_id,video_name,video_date,video_picture,video_introduceUrl
     * @return shop_id,shop_name
     * @throws -1 err
     */
    else if($_POST['function'] == "selectALLBook"){
        $answer = $db->selectALLbook();
    }
    /**
     * ユーザ取り置き確認
     * @param string $user_idName
     * @param string $user_pass
     * @return book_id,book_date,book_complete
     * @return user_id,user_idName,user_pass,user_firstName,user_secondName,user_mailAddress
     * @return video_id,video_name,video_date,video_picture,video_introduceUrl
     * @return shop_id,shop_name
     * @throws -1 err
     */
    else if($_POST['function'] == "getBook"){
        $user_id = $user->login($_POST["user_idName"],$_POST["user_pass"]);
        if($user_id != -1){
            $answer = $db->getBook((int)$user_id);
        }else{
            $answer = -1;
        }
    }
    /**
     * ユーザ取り置き削除
     * @param int $book_id
     * @return 0 正常終了
     * @throws -1 err
     */
    else if($_POST['function'] == "deleteBook"){
        $answer = $db->deleteBook($_POST["book_id"]);
    }
    /**
     * ユーザ取り置き本申請
     * @param string $user_idName
     * @param string $user_pass
     * @return 0 正常終了
     * @throws -1 err
     */
    else if($_POST['function'] == "updateBook"){
        $user_id = $user->login($_POST["user_idName"],$_POST["user_pass"]);
        if($user_id != -1){
            $answer = $db->updateBook((int)$user_id);
        }else{
            $answer = -1;
        }
    }
    /**
     * お店取り置き完了
     * @param int $book_id
     * @return 0 正常終了
     * @throws -1 err
     */
    else if($_POST['function'] == "updateBookFromShop"){
        $answer = $db->updateBookFromShop($_POST["book_id"]);
    }
    /**
     * お店取り置きキャンセル
     * @param int $book_id
     * @return 0 正常終了
     * @throws -1 err
     */
    else if($_POST['function'] == "cancelBookFromShop"){
        $answer = $db->cancelBookFromShop($_POST["book_id"]);
    }
    /**
     * お店から全体の取り置き確認
     * @param int $shop_id
     * @return book_id,book_date
     * @return user_id,user_idName,user_pass,user_firstName,user_secondName,user_mailAddress
     * @return video_id,video_name,video_date,video_picture,video_introduceUrl
     * @return shop_id,shop_name
     * @throws -1 err
     */
    else if($_POST['function'] == "getBookFromShop"){
        $answer = $db->getBookFromShop($_POST["shop_id"]);
    }
}else if($_POST['table'] == "videoCategory"){
    $db = new Table_videoCategory();
    /**
     * カテゴリidで検索
     * @param int $category_id カテゴリのプライマリーキー
     * @return videoCategory_id
     * @return video_id,video_name,video_date,video_picture,video_introduceUrl
     * @return category_id,category_name
     * @throws -1 err
     */
    if($_POST['function'] == "categorySearch"){
        $answer = $db->categorySearch($_POST["category_id"]);
    }
}else if($_POST['table'] == "category"){
    $db = new Table_category();
    /**
     * カテゴリリストの取得
     * @return category_id,category_name
     * @throws -1 err
     */
    if($_POST['function'] == "getCategory"){
        $answer = $db->getCategory();
    }
}
echo $answer;
?>