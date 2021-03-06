<!-- CSS -->
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Merriweather:ital@1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="{{ URL::to('/css/site.css') }}" rel="stylesheet" media="screen">
@hasSection('audio-guide')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.5.6/plyr.css" rel="stylesheet" media="screen">
@endif
<link rel="icon" href="{{ URL::to('/favicon.ico') }}"/>
