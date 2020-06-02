<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;


class OrderController extends Controller
{
    public function store()
    {
        //儲存訂單到資料庫

        flash('訂單建立完成!!')->success(); //綠色框
        flash('訂單建立失敗!!')->error();   //紅色框
        flash('請向客服確認此訂單!!')->warning(); //橘色框
        flash('訂單建立完成!!')->overlay(); //跳出視窗
        flash()->overlay('Modal Message', 'Modal Title'); //跳出帶標題視窗
        flash('訂單建立完成')->important(); //加上關閉功能
        flash('Message')->error()->important(); //結合外框與關閉功能

        return redirect('/');
    }
}
