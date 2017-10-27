<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('demo', function(){
    return view('demo.index');
});

/**
 * 课程Demo
 */
//Route::group(['prefix' => 'class'], function() {
Route::group(['prefix' => 'class', 'middleware' => ['wechat.oauth:snsapi_userinfo']], function() {
    Route::get('art', 'ClassController@art');
    Route::get('academic', 'ClassController@academic');
    Route::get('egyptian', 'ClassController@egyptian');
});

/**
 * Music
 */
//Route::group(['prefix' => 'music'], function() {
Route::group(['prefix' => 'music', 'middleware' => ['wechat.oauth:snsapi_userinfo']], function() {
    Route::get('candy', 'MusicController@candy');
    Route::get('0512', 'MusicController@symphonyOrchestra');
    Route::get('0523', 'MusicController@symphonyOrchestra2');
    Route::get('fel', 'MusicController@fel');
});

Route::group(['prefix' => 'music'], function () {
    Route::get('qr', 'MusicController@qr');
});

/**
 * English
 */
//Route::group(['prefix' => 'english'], function() {
Route::group(['prefix' => 'english', 'middleware' => ['wechat.oauth:snsapi_userinfo']], function() {
    Route::get('art', 'EnglishController@art');
});

/**
 * 响应微信服务器
 */
Route::get('wx', 'WxAuthController@index');

/**
 * 学分查询页面
 */
Route::group(['middleware' => ['wechat.oauth:snsapi_userinfo']], function () {
    Route::get('my-score', 'ScoreController@index');
});

/**
 * 登陆/登出
 */
Route::group(['namespace' => 'Auth'], function () {
    Route::get('login', 'AuthController@getLogin');
    Route::post('login', 'AuthController@postLogin');
    Route::get('logout', 'AuthController@getLogout');

    Route::group(['prefix' => 'auth'], function () {
        Route::get('login', 'AuthController@getLogin');
        Route::post('login', 'AuthController@postLogin');
        Route::get('logout', 'AuthController@getLogout');
    });
});

/**
 * 后台管理 : 首页 | 用户管理 | 菜单管理 | 角色管理 | 权限管理
 */
Route::group(['namespace' => 'Backend', 'middleware' => ['auth','Entrust']], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

    Route::resource('user', 'UserController');
    Route::resource('menu', 'MenuController');
    Route::resource('role', 'RoleController');
    Route::resource('permission', 'PermissionController');
});

/**
 * 业务分组
 */
Route::group(['namespace' => 'Business', 'middleware' => ['auth','Entrust']], function () {
    /**
     * 微信菜单管理
     */
    Route::resource('menu', 'MenuController');

    /**
     * 课程管理
     */
    Route::resource('timetable', 'TimetableController');

    /**
     * 人员管理
     */
    Route::resource('people', 'PeopleController');

    /**
     * 学分管理
     */
    Route::resource('credit', 'CreditController');

    /**
     * 音乐库管理
     */
    Route::resource('library', 'LibraryController');

    /**
     * 付费视频课程管理
     */
    // 视频仓库
    Route::resource('video-course', 'VideoCourseController');
    // 系列管理
    Route::resource('video-series', 'VideoSeriesController');
    // 购买列表
    Route::resource('video-buy-list', 'VideoBuyListController');
    // 学习进度
    Route::resource('video-download-list', 'VideoDownloadListController');
});



/**
 * File Download
 */
Route::group(['prefix' => 'download'], function () {
    Route::get('index', 'DownLoadFileController@index');
    Route::post('list', 'DownLoadFileController@getDownList');
    Route::get('file/{id}', 'DownLoadFileController@downloadFile');
});



/**
 * WeChat Notify Url
 */
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Http\Controllers'], function ($api) {
        $api->group(['prefix' => 'pay'], function ($api) {
            $api->post('pay_notify_url', 'WxPayController@payNotifyUrl');
            $api->post('notify_url', 'WxPayController@notifyUrl');
        });
    });
});

Route::group(['prefix' => 'pay'], function () {
    Route::get('get_sign', 'WxPayController@getSign');
    Route::get('get_qrcode', 'WxPayController@getQrCode');
});

//Route::group(['prefix' => 'info'], function() {
Route::group(['prefix' => 'info', 'middleware' => ['wechat.oauth:snsapi_userinfo']], function() {
    Route::resource('sign-up', 'SignUpController');
});
