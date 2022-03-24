<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('gpv')->group(function () {
    Route::prefix('v1')->group(function () {
        Route::any('company_profile',function (Request $req) {
            // $req->get('hrmc_cmp_id') ,
            
            $rCode=200;
            $msg="取得診所資料";
            $cmp_profile['holidays']=array("2018/9/3","2018/9/24","2018/10/10");
            $cmp_profile['hrmc_cmp_id']=1234;

            return response()->json(['State' => $rCode, 'Msg' => $msg, 'cmp_profile' => $cmp_profile, 'req' => $req->all()]);
        });
        Route::post('aaa','TestController@aaa');

        Route::post('Split_inlet','LoginController@Split_inlet');//分流選擇
        Route::post('GoogleLogin','LoginController@GoogleLogin');//判斷是否有會員
        Route::post('VerifyLogin','LoginController@VerifyLogin');//帳號保持登入

        Route::post('UserDataAdd','UserController@UserDataAdd');//新增會員基本資料
        Route::post('UserSideMenu','UserController@UserSideMenu');//側邊攔會員基本資料
        Route::post('UserData','UserController@UserData');//瀏覽會員基本資料
        Route::post('UserDataUpdate','UserController@UserDataUpdate');//修改會員基本資料

        Route::post('invite_btn','UserController@invite_btn');//產生認證碼

        Route::post('DetailedEvent','EventController@DetailedEvent');//查看所有發佈事件        
        Route::post('EventAdd','EventController@EventAdd');//發佈事件
        // Route::post('EventData','EventController@EventData');//瀏覽會員基本資料
        Route::post('EventUpdate','EventController@EventUpdate');//修改事件
        Route::post('EventDelete','EventController@EventDelete');//刪除事件

        Route::post('click_btn','EventStateController@click_btn');//發送領取事件請求
        Route::post('del_click_btn','EventStateController@del_click_btn');//取消發送領取事件請求

        Route::post('click_confirm_btn','EventStateController@click_confirm_btn');//確認領取事件請求
        Route::post('click_uncompleted_btn','EventStateController@click_uncompleted_btn');//事件待完成
        Route::post('click_completed_btn','EventStateController@click_completed_btn');//事件完成

        Route::post('EventList','EventListController@EventList');//事件清單


    });
});
