<?php
// require("./DBinterface.php");//データベースクラス群
const ARRAY_MAX = 275000;
class Table_interesting{
    public function setInteresting(int $user_id, int $category_id){
        echo $user_id."\n";
        echo $category_id."\n";
        return 0;
        // return -1;
        // return -500;
    }
    public function getInteresting(int $user_id){
        echo $user_id."\n";
        $a = array_map("getInterestingArray", range(1, ARRAY_MAX));
        return json_encode($a);
        // return -1;
        // return -500;
    }
}
function getInterestingArray(){
    return array(
        "interesting_id" => "1",
        "interesting_date" => "2020/01/01 11:11:11",
        "user_id" => "2",
        "user_idName" => "hogehoge",
        "user_pass" => "hogepass",
        "user_firstName" => "山田",
        "user_secondName" => "太郎",
        "user_mailAddress" => "yamada@s.iwate-pu.ac.jp",
        "category_id" => "3",
        "category_name" => "アクション"
    );
}
class Table_user {
    public function check(string $user_idName){
        echo $user_idName."\n";
        // return 0;
        // return -1;
        // return -500;
    }
    public function register(string $user_idName, string $user_pass, string $user_firstName,
                            string $user_secondName, string $user_mailAddress){
        echo $user_idName."\n";
        echo $user_pass."\n";
        echo $user_firstName."\n";
        echo $user_secondName."\n";
        echo $user_mailAddress."\n";
        // return 0;
        // return -1;
        // return -500;
    }
    public function login(string $user_idName, string $user_pass){
        echo $user_idName."\n";
        echo $user_pass."\n";
        echo "------------------------login----------------------------------\n";
        return PHP_INT_MAX;//user_id
        // return 15;
        // return PHP_INT_MAX + 1;
        // return -1;
        // return -500;
    }
}
class Table_category{
    public function getCategory(){
        $a = array_map("getCategoryArray", range(1, ARRAY_MAX));
        return json_encode($a);
        // return -1;
        // return -500;
    }
}
function getCategoryArray(){
    return array(
        "category_id" => "1000",
        "category_name" => "アクション"
    );
}
class Table_video{
    public function nameSearch(string $video_name){
        echo $video_name."\n";
        $a = array_map("nameSearchArray", range(1, ARRAY_MAX));
        return json_encode($a);
        // return -1;
        // return -500;
    }
    public function getVideo(int $video_id){
        echo $video_id."\n";
        $a = array_map("nameSearchArray", range(1, ARRAY_MAX));
        return json_encode($a);
        // return -1;
        // return -500;
    }
    public function insertVideo(string $video_name,
            string $video_date, string $video_picture, string $video_introduceUrl){
        echo $video_name."\n";
        echo $video_date."\n";
        echo $video_picture."\n";
        echo $video_introduceUrl."\n";
        // return 0;
        // return -1;
        return -500;
    }
    public function deleteVideo(int $video_id){
        echo $video_id."\n";
        // return 0;
        // return -1;
        return -500;
    }
}
function nameSearchArray(){
    return array(
        "video_id" => "1",
        "video_name" => "打ち上げ花火、上から見るか下から見るか",
        "video_date" => "2020/01/01",
        "video_picture" => "./img/uchiagehanabi_uekaramirukashitakaramiruka.png",
        "video_introduceUrl" => "https://www.youtube.com/watch?v=b-hAlm3_ikI",
    );
}
class Table_videoCategory{
    public function categorySearch(int $category_id){
        echo $category_id."\n";
        $a = array_map("categorySearchArray", range(1, ARRAY_MAX));
        return json_encode($a);
        // return -1;
        // return -500;
    }
}
function categorySearchArray(){
    return array(
        "videoCategory_id" => "1",
        "video_id" => "1",
        "video_name" => "打ち上げ花火、上から見るか下から見るか",
        "video_date" => "2020/01/01",
        "video_picture" => "./img/uchiagehanabi_uekaramirukashitakaramiruka.png",
        "video_introduceUrl" => "https://www.youtube.com/watch?v=b-hAlm3_ikI",
        "category_id" => "1",
        "category_name" => "アクション",
    );
}
class Table_stock{
    public function getStock(int $video_id){
        echo $video_id."\n";
        $a = array_map("getStockArray", range(1, ARRAY_MAX));
        return json_encode($a);
        // return -1;
        // return -500;
    }
    public function incrementStock(int $shop_id, int $video_id){
        echo $shop_id."\n";
        echo $video_id."\n";
        // return 0;
        // return -1;
        return -500;
    }
    public function decrementStock(int $shop_id, int $video_id){
        echo $shop_id."\n";
        echo $video_id."\n";
        // return 0;
        // return -1;
        return -500;
    }
}
function getStockArray(){
    return array(
        "stock_id" => "1",
        "stock_videoNum" => "10",
        "video_id" => "1",
        "video_name" => "打ち上げ花火、上から見るか下から見るか",
        "video_date" => "2020/01/01",
        "video_picture" => "./img/uchiagehanabi_uekaramirukashitakaramiruka.png",
        "video_introduceUrl" => "https://www.youtube.com/watch?v=b-hAlm3_ikI",
        "shop_id" => "1",
        "shop_name" => "ゲオ盛岡月ヶ丘店",
    );
}
class Table_book{
    public function setBook(int $user_id, int $video_id, int $shop_id){
        echo $user_id."\n";
        echo $video_id."\n";
        echo $shop_id."\n";
        // return 0;
        // return -1;
        return -500;
    }
    public function selectALLBook(){
        $a = array_map("selectALLBookArray", range(1, ARRAY_MAX));
        return json_encode($a);
        // return -1;
        // return -500;
    }
    public function getBook(int $user_id){
        echo $user_id."\n";
        $a = array_map("selectALLBookArray", range(1, ARRAY_MAX));
        return json_encode($a);
        // return -1;
        // return -500;
    }
    public function deleteBook(int $book_id){
        echo $book_id."\n";
        // return 0;
        // return -1;
        return -500;
    }
    public function updateBook(int $user_id){
        echo $user_id."\n";
        // return 0;
        // return -1;
        return -500;
    }
    public function updateBookFromShop(int $book_id){
        echo $book_id."\n";
        // return 0;
        // return -1;
        return -500;
    }
    public function cancelBookFromShop(int $book_id){
        echo $book_id."\n";
        // return 0;
        // return -1;
        return -500;
    }
    public function getBookFromShop(int $shop_id){
        echo $shop_id."\n";
        $a = array_map("selectALLBookArray", range(1, ARRAY_MAX));
        return json_encode($a);
        // return -1;
        // return -500;
    }
}
function selectALLBookArray(){
    return array(
        "user_id" => "1",
        "video_id" => "1",
        "video_name" => "打ち上げ花火、上から見るか下から見るか",
        "video_date" => "2020/01/01",
        "video_picture" => "./img/uchiagehanabi_uekaramirukashitakaramiruka.png",
        "video_introduceUrl" => "https://www.youtube.com/watch?v=b-hAlm3_ikI",
        "shop_id" => "1",
        "shop_name" => "ゲオ盛岡月ヶ丘店",
    );
}
function getBookArray(){
    return array(
        "user_id" => "2",
        "user_idName" => "hogehoge",
        "user_pass" => "hogepass",
        "user_firstName" => "山田",
        "user_secondName" => "太郎",
        "user_mailAddress" => "yamada@s.iwate-pu.ac.jp",
        "video_id" => "1",
        "video_name" => "打ち上げ花火、上から見るか下から見るか",
        "video_date" => "2020/01/01",
        "video_picture" => "./img/uchiagehanabi_uekaramirukashitakaramiruka.png",
        "video_introduceUrl" => "https://www.youtube.com/watch?v=b-hAlm3_ikI",
        "shop_id" => "1",
        "shop_name" => "ゲオ盛岡月ヶ丘店",
    );
}

$_POST["table"] = "category";
$_POST["function"] = "getCategory";

$_POST["user_id"] = 1;//"user_id";
$_POST["user_idName"] = "user_idName";
$_POST["user_pass"] = "user_pass";
$_POST["user_firstName"] = "user_firstName";
$_POST["user_secondName"] = "user_secondName";
$_POST["user_mailAddress"] = "user_mailAddress";

$_POST["video_id"] = 2;//"video_id";
$_POST["video_name"] = "video_name";
$_POST["video_date"] = "video_date";
$_POST["video_picture"] = "video_picture";
$_POST["video_introduceUrl"] = "video_introduceUrl";

$_POST["stock_id"] = 3;//"stock_id";
$_POST["stock_videoNum"] = "stock_videoNum";

$_POST["shop_id"] = 4;//"shop_id";
$_POST["shop_name"] = "shop_name";

$_POST["book_id"] = 5;//"book_id";
$_POST["book_date"] = "book_date";
$_POST["book_complete"] = "book_complete";

$_POST["videoCategory_id"] = 6;//"videoCategory_id";

$_POST["category_id"] = 7;//"category_id";
$_POST["category_name"] = "category_name";

$time_start = microtime(true);//時間計測
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
        $user_id = $user->login((string)$_POST["user_idName"],(string)$_POST["user_pass"]);
        if($user_id >= 0){
            $answer = $db->setInteresting((int)$user_id, (int)$_POST["category_id"]);
        }else{
            $answer = $user_id;
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
        $user_id = $user->login((string)$_POST["user_idName"],(string)$_POST["user_pass"]);
        if($user_id >= 0){
            $answer = $db->getInteresting((int)$user_id);
        }else{
            $answer = $user_id;
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
        $answer = $db->check((string)$_POST["user_idName"]);
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
        $answer = $db->register((string)$_POST["user_idName"],(string)$_POST["user_pass"],(string)$_POST["user_firstName"],(string)$_POST["user_secondName"],(string)$_POST["user_mailAddress"]);
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
        $answer = $db->login((string)$_POST["user_idName"],(string)$_POST["user_pass"]);
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
        $answer = $db->nameSearch((string)$_POST["video_name"]);
    }
    /**
     * ビデオidからビデオ情報取得
     * @param int video_id プライマリーキー
     * @return video_id,video_name,video_date,video_picture,video_introduceUrl
     * @throws -1 err
     */
    else if($_POST['function'] == "getVideo"){
        $answer = $db->getVideo((int)$_POST["video_id"]);
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
        $answer = $db->insertVideo((string)$_POST["video_name"],(string)$_POST["video_date"],(string)$_POST["video_picture"],(string)$_POST["video_introduceUrl"]);
    }
    /**
     * 削除
     * @param int video_id
     * @return 0 正常終了
     * @throws -1 err
     */
    else if($_POST['function'] == "deleteVideo"){
        $answer = $db->deleteVideo((int)$_POST["video_id"]);
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
        $answer = $db->getStock((int)$_POST["video_id"]);
    }
    /**
     * 返却
     * @param int shop_id
     * @param int video_id
     * @return 0 正常終了
     * @throws -1 err
     */
    else if($_POST['function'] == "incrementStock"){
        $answer = $db->incrementStock((int)$_POST["shop_id"],(int)$_POST["video_id"]);
    }
    /**
     * 貸し出し
     * @param int shop_id
     * @param int video_id
     * @return 0 正常終了
     * @throws -1 err
     */
    else if($_POST['function'] == "decrementStock"){
        $answer = $db->decrementStock((int)$_POST["shop_id"],(int)$_POST["video_id"]);
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
        $user_id = $user->login((string)$_POST["user_idName"],(string)$_POST["user_pass"]);
        if($user_id >= 0){
            $answer = $db->setBook((int)$user_id,$_POST["video_id"],(int)$_POST["shop_id"]);
        }else{
            $answer = $user_id;
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
        $user_id = $user->login((string)$_POST["user_idName"],(string)$_POST["user_pass"]);
        if($user_id >= 0){
            $answer = $db->getBook((int)$user_id);
        }else{
            $answer = $user_id;
        }
    }
    /**
     * ユーザ取り置き削除
     * @param int $book_id
     * @return 0 正常終了
     * @throws -1 err
     */
    else if($_POST['function'] == "deleteBook"){
        $answer = $db->deleteBook((int)$_POST["book_id"]);
    }
    /**
     * ユーザ取り置き本申請
     * @param string $user_idName
     * @param string $user_pass
     * @return 0 正常終了
     * @throws -1 err
     */
    else if($_POST['function'] == "updateBook"){
        $user_id = $user->login((string)$_POST["user_idName"],(string)$_POST["user_pass"]);
        if($user_id >= 0){
            $answer = $db->updateBook((int)$user_id);
        }else{
            $answer = $user_id;
        }
    }
    /**
     * お店取り置き完了
     * @param int $book_id
     * @return 0 正常終了
     * @throws -1 err
     */
    else if($_POST['function'] == "updateBookFromShop"){
        $answer = $db->updateBookFromShop((int)$_POST["book_id"]);
    }
    /**
     * お店取り置きキャンセル
     * @param int $book_id
     * @return 0 正常終了
     * @throws -1 err
     */
    else if($_POST['function'] == "cancelBookFromShop"){
        $answer = $db->cancelBookFromShop((int)$_POST["book_id"]);
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
        $answer = $db->getBookFromShop((int)$_POST["shop_id"]);
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
        $answer = $db->categorySearch((int)$_POST["category_id"]);
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
echo "<br><br>answer=".$answer;
$time = microtime(true) - $time_start;
echo "<br>{$time} 秒";
?>