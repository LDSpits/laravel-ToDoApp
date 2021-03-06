<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
    </head>

    <body>
        <title>Todo-App</title>

        <h1 class="header">My todo's</h1>

        <section class="dashboard">

            <ul class="dashboard__list">
                <h2 class="dashboard__header">Todo</h2>

                @foreach($todos as $todo)
                    @if(!$todo->isDone)
                        
                        @include('partials._todoitem',['todo' => $todo])

                    @endif
                @endforeach

            </ul>

            <ul class="dashboard__list">
                <h2 class="dashboard__header">Done</h2>
                @foreach($todos as $todo)
                    @if($todo->isDone)
                        
                        @include('partials._todoitem',['todo' => $todo])

                    @endif
                @endforeach
            </ul>

            <ul class="dashboard__list noscroll">
                <h2 class="dashboard__header">Create</h2>
                <form action="/todo" method="post" class="dashboard-new">
                    {{ csrf_field() }}
                    <input type="text" name="name" placeholder="todo title" class="dashboard-new__text"/>
                    <textarea name="description" cols="30" rows="10" class="dashboard-new__text" placeholder="description"></textarea>
                    <input type="submit" value="voeg toe" class="dashboard-new__confirm">
                </form>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </ul>

        </section>
    </body>
</html>
