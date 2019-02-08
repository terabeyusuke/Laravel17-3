@extends('layouts.profile')
@section('title', '登録済みのユーザー一覧')
@section('content')
  <div class="container">
     <div class="row">
        <h2>ユーザー一覧</h2>
     </div>
   <div class="row">
     <div class="col-md-4">
        <a href="{{ action('Admin\ProfileController@create') }}" role="button" class="btn btn-primary">新規ユーザー登録</a>
     </div>
     <div class="col-md-8">
        <form action="{{ action('Admin\ProfileController@index') }}" method="get">
           <div class="form-group row">


           </div>
        </form>
     </div>
  </div>

  <div class="row">
     <div class="admin-profile col-md-12 mx-auto">
       <div class="row">
        <div class="table table-dark">
           <thead>
              <tr>
                 <th width="10%">ID</th>
                 <th width="20%">名前</th>
                 <th width="10%">性別</th>
                 <th width="25%">趣味</th>
                 <th width="25%">自己紹介</th>
                 <th width="10%">操作</th>
              </tr>
           </thead>
           <tbody>
              @foreach($posts as $profile)
               <tr>
                  <th>{{ $profile->id }}</th>
                  <td>{{ str_limit($profile->name,100) }}</td>
                  <td>{{ str_limit($profile->gender,100) }}</td>
                  <td>{{ str_limit($profile->hobby,100) }}</td>
                  <td>{{ str_limit($profile->introduction,100) }}</td>
                  <td>
                    <div>
                      <a href="{{ action('Admin\ProfileController@edit', ['id' => $profile->id]) }}">編集</a>
                    </div>
                    <div>
                      <a href="{{ action('Admin\ProfileController@delete', ['id' => $profile->id]) }}">削除</a>
                    </div>
                  </td>
               </tr>
              @endforeach
           </tbody>
        </div>
     </div>
  </div>
</div>
@endsection