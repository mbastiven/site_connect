<header class="flex">

    <h2>
        <label for="nav-toggle">
            <i class="bi bi-list" id="menu-icon"></i>

        </label><a href="<?php echo BASE_URL . '/admin/index.php' ?>"> Dashboard </a>
    </h2>


    <div class="search-box">
        <i class="bi bi-search"></i>
        <input type="text" placeholder="Search Here...">
    </div>
    <div class="notification">
        <a href=""><img src="<?php echo BASE_URL . '/assets/images/icons/notification (2).png' ?>"></a>
    </div>

    <?php if (isset($_SESSION['id'])): ?>
        <div class="action1" onclick="show()" onclick="show1()">
            <div class="profile" onclick="menuToggle();">
                <?php if (isset($_SESSION['id'])): ?>
                    <img src="<?php echo BASE_URL . '/assets/images/users/' . $_SESSION['profile'] ?>" alt="">
                <?php else: ?>
                    <?php echo BASE_URL . '/assets/images/users/user (1).png' ?>
                <?php endif; ?>
            </div>


            <div class="menu" id="menu">


                <h3>
                    <?php echo $_SESSION['username']; ?>
                    <div>
                        <?php if (empty($_SESSION['id']) || 1 !== $_SESSION['role_id']): ?>
                            <?php echo 'Event Creator'; ?>
                        <?php else: ?>
                            <?php echo 'Administrator'; ?>
                        <?php endif; ?>

                    </div>

                </h3>
                <ul class="kk">
                    <li>
                        <a href="<?php echo BASE_URL . '/index.php' ?>">
                            <i class="bi bi-house-door"></i>
                            Home
                        </a>

                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . '/pages/help.php' ?>">
                            <i class="bi bi-info-circle"></i>
                            Get Help
                        </a>
                    </li> 
                    <li>
                        <a href="<?php echo BASE_URL . '/account/logout.php' ?>">
                            <i class="bi bi-box-arrow-in-left"></i>
                            Log out
                        </a>
                    </li>

                </ul>
            <?php else: ?>
                <ul class="kk">
                    <li>
                        <a href="<?php echo BASE_URL . '/login.php' ?> ">
                            <i class="bi bi-person-circle"></i>
                            Sign-IN / Sign-UP
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . '/pages/help.php' ?>">
                            <i class="bi bi-info-circle"></i>
                            Get Help
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
    </div>
</header>