<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        :root {
            --bg-color: #e5e5e5;
            --black: #000;
            --white: #fff;
            --radius: 8px;
            --shadow: 0 10px 10px gray;
        }

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: Roboto;
        }

        body {
            background-color: var(--bg-color);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1em;
            margin: 1em;
        }

        .head {
            background-color: var(--white);
            width: 360px;
            height: 275px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .head h1 {
            font-size: 3em;
            background-color: var(--black);
            color: var(--white);
            padding: 0.2em;
            border-radius: var(--radius);
        }

        .head__form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1em;
        }

        .head__input {
            display: flex;
            flex-direction: column;
            width: 206px;
        }

        .head__input label {
            margin: 5px 0;
            font-size: 12px;
        }

        .head__input input {
            height: 32px;
            border-radius: var(--radius);
            padding: 0 1em;
            outline: none;
            background-color: var(--bg-color);
        }

        .head__form button {
            background-color: var(--black);
            color: var(--white);
            width: 140px;
            height: 35px;
            border-radius: var(--radius);
            border: none;
        }

        .task {
            background-color: var(--white);
            width: 360px;
            height: 140px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 0 1em;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }

        .task__content {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            gap: 0.5em;
        }

        .task__action {
            display: flex;
            justify-content: flex-end;
            gap: 0.5em;
        }

        .task__action button {
            background-color: var(--black);
            color: var(--white);
            border-radius: var(--radius);
            width: 70px;
            height: 25px;
            font-size: 11px;
            border: none;
        }
    </style>
</head>

<body>
    <div class="head">
        <h1>Task Tracker</h1>
        <form method="POST" action="{{ route('updateTask', $task->id) }}" class="head__form" accept-charset="UTF-8">
            @method('PATCH')
            @csrf
            <div class="head__input">
                <label for="content">Task</label>
                <input type="text" name="content" value={{$task->content}} />
            </div>
            <button type="submit">Update task</button>
        </form>
    </div>

</body>

</html>