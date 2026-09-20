<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <h1>Página principal para iniciar sesión</h1>
    <p>Comienza tu turno:</p>
    <table>
        <tr>
            <th>Código</th>
            <th>Camarero</th>
            <th>Activo</th>
            <th>Privilegio</th>
        </tr>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->active ? 'Si' : 'No' }}</td>
                <td>{{ $user->getRoleName() }}</td>
            </tr>

        @empty
            <tr>
                <td colspan="4">No hay usuarios registrados</td>
            </tr>
        @endforelse
    </table>
</body>

</html>
