@extends('admin.layout')

{{-- メインコンテンツ --}}
@section('contets')
		<h1>ユーザ一覧</h1>
		<table border="1">
			<tr>
				<th>ユーザID</th>
				<th>ユーザ名</th>
				<th>タスク件数</th>
			</tr>
@foreach ($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->task_num }}</td>
			</tr>
@endforeach
		</table>
@endsection