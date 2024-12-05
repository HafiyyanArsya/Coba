<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<section class="flex justify-between p-12">
    @foreach ($recipes as $recipe)
        <div class="flex-1 mx-2 text-center">
            <img src="{{ asset('storage/img/' . $recipe->image_url) }}" alt="{{ $recipe->title }}" class="w-full rounded-lg mb-2">
            <p>{{ $recipe->title }}</p>
        </div>
    @endforeach
</section>
@endsection
</body>
</html>