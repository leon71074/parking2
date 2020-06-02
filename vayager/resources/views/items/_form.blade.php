{!! Form::label('title','標題', ['class'=>'myclass']) !!}
{!! Form::text('title', null) !!}<br><br>
{!! Form::label('size','規格', ['class'=>'myclass']) !!}<br><br>
{!! Form::textarea('size','L Size',['cols'=>50,'rows'=>10]) !!}<br><br>
{!! Form::label('isRecommend','是否為推薦商品', []) !!}
{!! Form::checkbox('isRecommend', 1,true) !!}<br><br>
{!! Form::label('colors[]','紅色', []) !!}
{!! Form::checkbox('colors[]', 'red',false) !!}
{!! Form::label('colors[]','黃色', []) !!}
{!! Form::checkbox('colors[]', 'yellow',false) !!}
{!! Form::label('colors[]','綠色', []) !!}
{!! Form::checkbox('colors[]', 'green',false) !!}<br><br>
{!! Form::label('enabled','是否上架', []) !!}
是{!! Form::radio('enabled', 1,true) !!}
 否{!! Form::radio('enabled', 0,false) !!}<br><br>
 {!! Form::label('price','價格', []) !!}
 {!! Form::number('price', '0',['min'=>0,'max'=>10000]) !!}<br><br>


 {!! Form::label('mode:', '模式', []) !!}
 {{-- {!! Form::select('mode:',[ '時節'=>['summer'=>'夏日','winter'=>'冬季'],'價格'=>['cp'=>'超值','boss'=>'老闆跑路' ]],null,[] )!!} --}}

 {!! Form::select('pic', $cgies,null, []) !!}


 {!! Form::label('month','月份', []) !!}
 {!! Form::selectMonth('month', null, []) !!}
{!! Form::selectRange('number', 1, 10, 5, []) !!}
<br><br>
{!! Form::label('pwd','密碼', []) !!}
{!! Form::password('pwd', []) !!}
<br><br>
{!! Form::label('email','Email', []) !!}
{!! Form::email('email', null, []) !!}
<br><br>
{!! Form::label('pic','圖片', []) !!}
{!! Form::file('pic',  []) !!}
<br><br>
{!! Form::label('date','生日', []) !!}
{!! Form::date('date', null, []) !!}



 {!! Form::hidden('hiddenParam','1314')!!}<br><br>

 {!! Form::submit('儲存', []) !!}
 {!! Form::reset('重置', []) !!}
