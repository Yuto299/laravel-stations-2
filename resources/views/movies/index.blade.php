<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>映画一覧</title>
</head>

<body>
  <ul>
    @foreach ($movies as $movie)
    <li>{{ $movie->id }}</li>
    <li>{{ $movie->title }}</li>
    <li>{{ $movie->image_url }}</li>
    <li><img src="{{ $movie->image_url }}" alt="{{ $movie->title }}" width="300"></li>
    <li>{{ $movie->published_year }}</li>
    <li>{{ $movie->is_showing }}</li>
    <li>{{ $movie->description }}</li>
    <li>{{ $movie->created_at }}</li>
    <li>{{ $movie->updated_at }}</li>
    @endforeach
  </ul>

</body>

</html>