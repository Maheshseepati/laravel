<!DOCTYPE html>
<html>
    <head>
        <title>Hello World123</title>

    </head>
    <body>
        <h1> Hello World</h1>
        <p>Email: {{$email}}</p>
        <p>Name: {{$name}}</p>
        <h2>List of employees:</h2>
        <table border="1">
            <thead>
                <tr><td>Name</td>
                <td>EMAIL</td></tr>
            </thead>
            <tbody>
            @foreach ($actual as $employee)
            <tr>
        <td>{{$employee->name}} </td><td>{{$employee->email}}</td>
        @endforeach
        </tr>
            </tbody>
        </table>
       
        </ul>
    </body>
</html>