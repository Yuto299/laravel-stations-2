<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>映画管理一覧</title>
</head>

<body>
  <h1>映画管理一覧</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>タイトル</th>
        <th>画像URL</th>
        <th>画像</th>
        <th>公開年</th>
        <th>上映状況</th>
        <th>概要</th>
        <th>作成日時</th>
        <th>更新日時</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($movies as $movie)
      <tr>
        <td>{{ $movie->id }}</td>
        <td>{{ $movie->title }}</td>
        <td><a href="{{ $movie->image_url }}">{{ $movie->image_url }}</a></td>
        <td><img src="{{ $movie->image_url }}" alt="{{ $movie->title }}" width="100"></td>
        <td>{{ $movie->published_year }}</td>
        <td>
          @if ($movie->is_showing)
          上映中
          @else
          上映予定
          @endif
        </td>
        <td>{{ $movie->description }}</td>
        <td>{{ $movie->created_at }}</td>
        <td>{{ $movie->updated_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>