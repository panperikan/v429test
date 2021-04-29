indexです
<a href="{{ route('contact.create')}}">新規登録</a>
<table class="table">
<thead>
<tr>

<th scope="col">id</th>
<th scope="col">氏名</th>
<th scope="col">件名</th>
<th scope="col">登録日時</th>
<th scope="col">詳細</th>

</tr>


</thead>
<tbody>
@foreach($contacts as $contact)
<tr>
<th>{{ $contact->id}}</th>
<td>{{ $contact->your_name}}</td>
<td>{{ $contact->title}}</td>
<td>{{ $contact->created_at}}</td>
<td><a href="{{ route('contact.show', ['id'=> $contact->id ])}}">詳細を見る</a></td>
</tr>
@endforeach
</tbody>
</table>
