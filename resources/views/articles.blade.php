<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://v4-alpha.getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            Articles <small>({{ $articles->count() }})</small>
        </div>
        <div class="card-body">
            <form action="{{ route('search') }}" method="get">
                <div class="form-group">
                    <input
                        type="text"
                        name="query"
                        class="form-control"
                        placeholder="Search..."
                        value="{{ request('query') }}"
                    />
                </div>
            </form>
            @forelse ($articles as $article)
                <article class="mb-3">
                    <h2>{{ $article->title }}</h2>
                    <p class="m-0">{{ $article->body }}</body>
<div>
    @foreach ($article->tags as $tag)
        <span class="badge badge-light">{{ $tag}}</span>
    @endforeach
</div>
</article>
@empty
    <p>No articles found</p>
    @endforelse
    </div>
    </div>
    </div>
</body>
</html>
