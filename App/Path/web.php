<?php
use Dedelang\Engine\Route;

Route::set('/','Welcome@index');

Route::set('list-users','login@listed');

Route::set('delete/@username','login@remove');

Route::set('login','login@index');

Route::set('logout','Login@Logout');

Route::set('register','Login@register');

Route::set('updateprofile','login@updateProfile');

Route::authorization(['users'],'login')->set('update/@username','Login@update');

Route::authorization(['users'],'login')->set('users','users@index');

Route::set('bahanmasakan','users@u1');

Route::set('jenismasakan','users@u2');

Route::set('kegemaranuser','users@u3');

Route::set('MasakanMelayuTradisi','users@u4');

Route::set('MasakanWestern','users@u5');

Route::set('MasakanThai','users@u6');

Route::set('MasakanChinese','users@u7');

Route::set('MasakanIndian','users@u8');

Route::set('resepiuser','users@u9');

Route::set('kegemaranusers','users@u10');

Route::set('bahan-masakan','bahanmasakan@index');

Route::set('resepi','bahanmasakan@bahan');

Route::set('resepi','bahanmasakan@resepi');

Route::set('jenis-masakan','jenismasakan@index');

Route::set('Masakan-Melayu-Tradisi','jenismasakan@melayu');

Route::set('favorites','melayu@favorite');

Route::set('Masakan-Western','jenismasakan@western');

Route::set('Masakan-Thai','jenismasakan@thai');

Route::set('Masakan-Chinese','jenismasakan@chinese');

Route::set('Masakan-Indian','jenismasakan@indian');

Route::set('profile','profile@index');

Route::set('profile/@id','profile@Get');

Route::set('created','fav@created');

Route::set('list-favs','fav@listed');

Route::set('delete/@id','fav@delete');

Route::set('deleted/@id','fav@remove');
