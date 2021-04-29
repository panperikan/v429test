createです。

<form method="post" action="{{route('contact.store')}}">
@csrf
氏名
<input type="text" name="your_name">
件名
<input type="text" name="title">
メールアドレス
<input type="email" name="email">
ホームページ
<input type="url" name="url">
性別
<input type="radio" name="gender" value="0">男性
<input type="radio" name="gender" value="1">女性
<select name="age">
年齢
<option value=""></option>
<option value="1">～19歳</option>
<option value="2">20歳～29歳</option>
<option value="3">30歳～39歳</option>
<option value="4">40歳～49歳</option>
<option value="5">50歳～59歳</option>
<option value="6">60歳～</option>
お問い合わせ内容
<textarea name="contact"> </textarea>
<input type="checkbox" name="cation" value="1">注意事項に同意する</input>
<input class="btn btn-info" type="submit" value="登録する">
</form>



