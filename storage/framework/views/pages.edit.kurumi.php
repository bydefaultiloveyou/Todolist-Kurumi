<?php require __DIR__ . "/" . 'components.navbar' . ".kurumi.php" ?>

<div class="container p-4">
    <form action="/task/<?php echo $task['id'] ?>/update" method="POST">
        <input type="hidden" name="_method" value='PUT' />
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Task name" value="<?php echo $task['name'] ?>" name="task" aria-describedby="basic-addon2">
            <button class="input-group-text btn btn-primary">Update</button>
        </div>
    </form>
</div>