@include 'components.navbar'

<div class="container p-4">
    <form action="/task/{! $task['id'] !}/update" method="POST">
        @method 'PUT'
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Task name" value="{! $task['name'] !}" name="task" aria-describedby="basic-addon2">
            <button class="input-group-text btn btn-primary">Update</button>
        </div>
    </form>
</div>