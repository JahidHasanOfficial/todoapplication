
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">All Tasks</h1>
  <div class="card p-5" style="max-width:600px; ">
  <table class="table">

<tr>
  <th>Task_id</th>
  <th>Title</th>
  <th>Action</th>
</tr>
@foreach($tasks as $task)
<tr class="">
  <td class="">{{ $task->id }}</td>
  <td><a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a> </td>
  <td>
    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm  btn-info" sty>Edit</a>
    <a href="" class="btn btn-sm ml-3 btn-danger" style="margin-left: 8px;" >Delete</a>
  </td>
</tr>
@endforeach

</table>
  </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
  </body>
</html>