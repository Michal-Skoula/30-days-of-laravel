<!doctype html>
<html lang="en">
<head>
    @props([
        'title' => 'Homepage',
        'description' => config('meta.description'),
    ])
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title . config('meta.title_suffix') }}</title>
    <meta name="description" content="{{$description}}">
</head>
<body>