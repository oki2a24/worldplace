<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>投稿 - WorldPlace</title>
  </head>
  <body>
    <h1>投稿</h1>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">タイトル</th>
          <th scope="col">作成者</th>
          <th scope="col">カテゴリー</th>
          <th scope="col">タグ</th>
          <th scope="col">コメント</th>
          <th scope="col">日付</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <th scope="row">{{ $post->ID }}</th>
          <td>{{ $post->post_title }} - {{ $post->post_status_description }}</td>
          <td>{{ $post->post_author }}</td>
          <td>categories</td>
          <td>tags</td>
          <td>{{ $post->comment_count }}</td>
          <td>{{ $post->post_date }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
