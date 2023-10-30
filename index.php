<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1">
  <title>To Do's using HTMX</title>
  <script src="https://unpkg.com/htmx.org@1.9.6"
    integrity="sha384-FhXw7b6AlE/jyjlZH5iHa/tTe9EpJ1Y55RjcgPbjeWMskSxZt1v9qkxLJWNJaGni"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
</head>

<body data-bs-theme="light">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 h1 text-center">
        To Do's List
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div id="ToDoList"
          hx-get="/views/ToDoList.php"
          hx-trigger="load"></div>

        <button class="btn btn-success btn-sm mt-3"
          hx-get="/views/ToDoForm.php"
          hx-target="#ToDoForm">Add Task</button>
        <div id="ToDoForm"></div>

        <!-- <div id="ToDoForm" hx-get="/views/ToDoForm.php" hx-trigger="load"></div> -->
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>