<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Student List</h2>

<table>
    <a href="/form" class="btn btn-success"> create</a>
    @foreach($students as $student)
        <tr>
            @foreach($student as $value)
                <td>{{ $value }}</td>
            @endforeach
            <td>
            <a href="/delet/{{ $student->id }}" class="btn btn-danger"> Delete </a>
            <a href="/edit/{{ $student->id }}" class="btn btn-primary"> Update </a>

            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
