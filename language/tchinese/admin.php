<?php
include_once "../../tadtools/language/{$xoopsConfig['language']}/admin_common.php";
define("_TAD_NEED_TADTOOLS"," 需要 tadtools 模組，可至<a href='http://www.tad0616.net/modules/tad_uploader/index.php?of_cat_sn=50' target='_blank'>Tad教材網</a>下載。");
//global.php
include_once "global.php";


define("_MA_INPUT_CATE_FORM","相片分類管理");

//cate.php
define("_MA_TADGAL_OF_CSN","所屬分類");
define("_MA_TADGAL_SN","序號");
define("_MA_TADGAL_CSN","相片分類");
define("_MA_TADGAL_CTITLE","分類標題");
define("_MA_TADGAL_DESCRIPTION","相片說明");
define("_MA_TADGAL_FILENAME","檔名");
define("_MA_TADGAL_SIZE","大小");
define("_MA_TADGAL_TYPE","類型");
define("_MA_TADGAL_UID","發佈者");
define("_MA_TADGAL_POST_DATE","發表時間");
define("_MA_TADGAL_COUNTER","人氣值");
define("_MA_TADGAL_PASSWD","相簿密碼");
define("_MA_TADGAL_PASSWD_DESC","（可不設）");
define("_MA_TADGAL_CATE_ADVANCE_SETUP","顯示進階設定");
define("_MA_TADGAL_CATE_HIDE_ADVANCE_SETUP","隱藏進階設定");
define("_MA_TADGAL_CATE_SHL_SETUP","顯示防盜連設定");
define("_MA_TADGAL_CATE_HIDE_SHL_SETUP","隱藏防盜連設定");
define("_MA_TADGAL_CATE_POWER_SETUP","權限設定");
define("_MA_TADGAL_CATE_SHOW_MODE","顯示模式");
define("_MA_TADGAL_CATE_SHOW_MODE_1","一般的縮圖模式（預設）");
define("_MA_TADGAL_CATE_SHOW_MODE_2","3D藝廊模式");
define("_MA_TADGAL_CATE_SHOW_MODE_3","投影片秀模式");
define("_MA_TADGAL_COVER","封面圖");
define("_MA_TADGAL_COVER","選擇封面圖");

define("_MA_TADGAL_TITLE","標題");
define("_MA_TADGAL_CREATOR","作者");
define("_MA_TADGAL_LOCATION","影片檔案");
define("_MA_TADGAL_IMAGE","縮圖位置");
define("_MA_TADGAL_INFO","下載位置");
define("_MA_TADGAL_LSN","流水號");
define("_MA_TADGAL_OF_LSN","所屬項目");
define("_MA_TADGAL_ENABLE_GROUP","可「<font color=#66CCFF>觀看</font>」群組");
define("_MA_TADGAL_ENABLE_UPLOAD_GROUP","可「<font color=fuchsia>上傳</font>」群組");
define("_MA_TADGAL_SORT","排序");
define("_MA_TADGAL_ALL_OK","所有群組");
define("_MA_TADGAL_LIST_CATE","分類一覽表");
define("_MA_TADGAL_CANT_OPEN","無法建立 %s");
define("_MA_TADGAL_CANT_WRITE","無法寫入 %s");
define("_MA_TADGAL_SHOW_DATE","（%s 發佈）");
define("_MA_TADGAL_CATE_SELECT","不分類");
define("_MA_TADGAL_XML_OK","「%s」的播放清單製作完成！");
define("_MA_TADGAL_NO_DIRNAME","無目錄名稱");
define("_MA_TADGAL_MKDIR_ERROR","無法建立 %s 目錄，請手動建立，並開啟匿名寫入權限（777）");
define("_MA_TADGAL_LIST_ALL","列出所有相片");

define("_MA_MKDIR_NO_DIRNAME","沒有指定資料夾名稱");
define("_MA_MKDIR_ERROR","%s 資料夾建立失敗！");

define("_MA_TADGAL_SHOW_MODE","縮圖外框");
define("_MA_TADGAL_SHOW_MODE_1","無外框");
define("_MA_TADGAL_SHOW_MODE_2","直角陰影外框");
define("_MA_TADGAL_SHOW_MODE_3","圓角外框");
define("_MA_TADGAL_SHOW_MODE_4","陰影相框");
define("_MA_TADGAL_SHOW_MODE_5","邊緣漸淡");
define("_MA_TADGAL_SHOW_MODE_6","幻燈片外框");

//update
define("_MA_TADGAL_AUTOUPDATE","模組升級");
define("_MA_TADGAL_AUTOUPDATE_VER","版本");
define("_MA_TADGAL_AUTOUPDATE_DESC","作用");
define("_MA_TADGAL_AUTOUPDATE_STATUS","更新狀況");
define("_MA_TADGAL_AUTOUPDATE_GO","立即更新");
define("_MA_GAL_AUTOUPDATE1","在類別資料表中加入顯示模式欄位");
define("_MA_GAL_AUTOUPDATE2","把縮圖移到新的路徑");
define("_MA_GAL_AUTOUPDATE3","加入相簿（分類）預設呈現模式設定欄位 show_mode");
define("_MA_GAL_AUTOUPDATE4","加入相簿（分類）封面圖的欄位 cover");
define("_MA_GAL_AUTOUPDATE5","加入強效防盜連、下載的設定欄位 no_hotlink");
define("_MA_GAL_AUTOUPDATE6","加分類開設者的紀錄欄位 uid");


define("_MA_TADGAL_SELECT_ALL","全選");
define("_MA_TADGAL_LIST_GOOD","精選圖片管理模式");
define("_MA_TADGAL_LIST_NORMAL","正常圖片管理模式");
define("_MA_TADGAL_CLICK_EDIT_TITLE","《點選編輯標題》");
define("_MA_TADGAL_CLICK_EDIT_DESC","加入說明");
define("_MA_TADGAL_THE_ACT_IS","將勾選的圖片：");
define("_MA_TADGAL_ADD_GOOD","加入精選");
define("_MA_TADGAL_DEL_GOOD","取消精選");
define("_MA_TADGAL_MOVE_TO","搬移到");
define("_MA_TADGAL_GO","執行");
define("_MA_TADGAL_TAG","新增標籤");
define("_MA_TADGAL_REMOVE_TAG","清空標籤");
define("_MA_TADGAL_TAG_TXT","（若有多個，請用逗點「,」隔開）");
define("_MA_TADGAL_LINK_TO_CATE","觀看「%s」相簿");
define("_MA_TADGAL_ADD_TITLE","新增標題");
define("_MA_TADGAL_ADD_DESCRIPTION","加入說明");
define("_MA_TADGAL_RE_CREATE_THUMBNAILS","重建縮圖");
define("_MA_TADGAL_RE_CREATE_THUMBNAILS_ALL","全部");
define("_MA_TADGAL_RE_CREATE_THUMBNAILS_M","中圖");
define("_MA_TADGAL_RE_CREATE_THUMBNAILS_S","小圖");
?>