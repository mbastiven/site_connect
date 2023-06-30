<div class="action1" onclick="show()" onclick="show1()">
    <div class="profile" onclick="menuToggle();">
        <?php if (empty($_SESSION['id'])): ?>
            <img src="https://i.postimg.cc/4d4YY5L5/user.png" alt="">
        <?php endif; ?>
        <?php if (isset($_SESSION['id'])): ?>
            <img src="<?php echo BASE_URL . '/assets/images/users/' . $_SESSION['profile'] ?>" alt="">
        <?php endif; ?>
    </div>

    <div class="menu" id="menu">

        <?php if (isset($_SESSION['id'])): ?>
            <?php if (3 !== $_SESSION['role_id']): ?>
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
                        <a href="<?php echo BASE_URL . '/admin/index.php' ?>">
                            <i class="bi bi-speedometer2"></i>
                            Dashboard
                        </a>

                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . '/pages/help.php' ?>">
                            <i class="bi bi-info-circle"></i>
                            Get Help
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . '/pages/pricing.php' ?>">
                            <i class="bi bi-cash-coin"></i>
                        Pricing
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
                <h3>
                    <?php echo $_SESSION['username']; ?>
                    <div>

                        <?php echo 'Guest User'; ?>
                    </div>
                </h3>
                <ul class="kk">
                    <li>
                        <a href="<?php echo BASE_URL . '/account/my-account.php' ?>">
                            <i class="bi bi-person-circle"></i>
                            Account
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . '/pages/help.php' ?>">
                            <i class="bi bi-info-circle"></i>
                            Get Help
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . '/pages/pricing.php' ?>">
                            <i class="bi bi-cash-coin"></i>
                        Pricing
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . '/account/logout.php' ?>">
                            <i class="bi bi-box-arrow-in-left"></i>
                            Log out
                        </a>
                    </li>

                </ul>


            <?php endif; ?>

        <?php else: ?>
            <ul class="kk">
                <li>
                    <a href="<?php echo BASE_URL . '/account/login.php' ?> ">
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
                <li>
                        <a href="<?php echo BASE_URL . '/pages/pricing.php' ?>">
                            <i class="bi bi-cash-coin"></i>
                        Pricing
                        </a>
                    </li>
            </ul>
        <?php endif; ?>

    </div>
</div>



<style>
    .action1 .menu .kk li a {
    display: inline-block;
    color: rgb(10, 10, 10);
    font-size: 14px;
    font-weight: 600;
    padding-left: 15px;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
}
</style>