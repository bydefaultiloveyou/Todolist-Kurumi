@include 'components.navbar'

<div class="container p-4">
    <form action="/task" method="POST">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Task name" name="task" aria-describedby="basic-addon2">
            <button class="input-group-text btn btn-primary">Add</button>
        </div>
    </form>
    <p>daftar task :</p>
    @each $tasks as $task :
    <ul class="list-group mt-2">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <span class="btn btn-primary">{! $task['id'] !}</span>
                &nbsp; &nbsp;
                <p>{! $task['name'] !}</p>
            </div>
            <div class="d-flex">
                <a class="btn btn-primary mr-3" href="/task/{! $task['id'] !}/edit">EDIT</a>
                &nbsp;
                <form action="/task/{! $task['id'] !}/destroy" method="POST">
                    @method 'DELETE'
                    <button class="btn btn-danger">DELETE</button>
                </form>
            </div>
        </li>
    </ul>
    @endeach
</div>