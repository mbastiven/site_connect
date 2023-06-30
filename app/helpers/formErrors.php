<?php
if (count($errors) > 0): ?>
    <div class="main-set set-red">

        <?php foreach ($errors as $error): ?>
            <li>
                <?php echo $error; ?>
            </li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>