@extends('layouts.app')

@section('content')
    <title></title>
</head>
<body>
    <h1>{{ $project->title }}</h1>
    <div>{{ $project->description }}</div>
    <a href="/projects">Go Back</a>
@endsection
