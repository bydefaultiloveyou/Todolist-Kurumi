<?php require __DIR__ . "/" . 'components.navbar' . ".kurumi.php" ?>

<div class="container p-4">
    <form action="/task" method="POST">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Task name" name="task" aria-describedby="basic-addon2">
            <button class="input-group-text btn btn-primary">Add</button>
        </div>
    </form>
    <p>daftar task :</p>
    <?php foreach($tasks as $task ): ?>
    <ul class="list-group mt-2">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <span class="btn btn-primary"><?php echo $task['id'] ?></span>
                &nbsp; &nbsp;
                <p><?php echo $task['name'] ?></p>
            </div>
            <div class="d-flex">
                <a class="btn btn-primary mr-3" href="/task/<?php echo $task['id'] ?>/edit">EDIT</a>
                &nbsp;
                <form action="/task/<?php echo $task['id'] ?>/destroy" method="POST">
                    <input type="hidden" name="_method" value='DELETE' />
                    <button class="btn btn-danger">DELETE</button>
                </form>
            </div>
        </li>
    </ul>
    <?php endforeach; ?>
</div>