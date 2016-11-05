<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
       
    </head>
    <body>
    <h1>Notifications</h1>
        <div class="flex-center position-ref full-height">
                @foreach(Auth::user()->unreadNotifications as $notification)
                  @include('notifications.'. snake_case(class_basename($notification->type))) 
                @endforeach
        </div>
        <form method="POST" action="/users/{{Auth::id()}}/notifications">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button>Mark As Read</button>
        </form>
    </body>
</html>
