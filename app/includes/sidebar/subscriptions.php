<input type="checkbox" id="nav-toggle">
<div class="sidebar" id="sidebar">
    <div class="logo">
        <a href="<?php echo BASE_URL . '/index.php' ?> ">
            <i><img src="https://i.postimg.cc/Vv4tDNvj/logo1.png " alt="" class="logo1"></i>
    </div>


       <div class="sidebar-menu">
         <ul>
          <?php if (empty($_SESSION['id']) || 1 !== $_SESSION['role_id']): ?>
           <a href="<?php echo BASE_URL . '/admin/index.php' ?> ">
                         <li >
                            <i class="bi bi-speedometer"></i>
                            <span>Dashboard</span>
                         </li>
                      </a>
                      <a href="<?php echo BASE_URL . '/admin/events/index.php' ?>">
                         <li >
                            <i class="bi bi-clipboard-data"></i>
                            <span>Events</span>
                         </li>
                      </a>
                       <a href="<?php echo BASE_URL . '/admin/collections/index.php' ?>">
                      <li >
                         <i class="bi bi-layers"></i>
                         <span>Collections</span>
                      </li>
                   </a>
                   <a href=" <?php echo BASE_URL . '/admin/bookings/index.php' ?>">
                      <li >
                         <i class="bi bi-calendar2-week"></i>
                         <span>Bookings</span>
                      </li>
                   </a>
                      <a href="<?php echo BASE_URL . '/admin/account.php' ?>">
                         <li>
                            <i class="bi bi-person-circle"></i>
                            <span>Account</span>
                         </li>
                      </a>
                      <a href=" <?php echo BASE_URL . '/account/logout.php' ?>">
                         <li>
                            <i class="bi bi-box-arrow-left"></i>
                            <span>Logout</span>
                         </li>
                      </a>
                 <?php else: ?>
                <ul>
                <a href="<?php echo BASE_URL . '/admin/index.php' ?> ">
                      <li >
                         <i class="bi bi-speedometer"></i>
                         <span>Dashboard</span>
                      </li>
                   </a>
                   <a href="<?php echo BASE_URL . '/admin/events/index.php' ?>">
                      <li >
                         <i class="bi bi-clipboard-data"></i>
                         <span>Events</span>
                      </li>
                   </a>
                   <a href="<?php echo BASE_URL . '/admin/categories/index.php' ?>">
                      <li >
                         <i class="bi bi-tags"></i>
                         <span>category's</span>
                      </li>
                   </a>
                   <a href="<?php echo BASE_URL . '/admin/collections/index.php' ?>">
                      <li >
                         <i class="bi bi-layers"></i>
                         <span>Collections</span>
                      </li>
                       </a>
                       <a href=" <?php echo BASE_URL . '/admin/bookings/index.php' ?>">
                          <li>
                             <i class="bi bi-calendar2-week"></i>
                         <span>Bookings</span>
                      </li>
                   </a>  <a href="<?php echo BASE_URL . '/admin/subscriptions/index.php' ?>">
                      <li class="active">
                         <i class="bi bi-ui-checks"></i>
                         <span>Subscriptions</span>
                      </li>
                   </a>
                   <a href="<?php echo BASE_URL . '/admin/users/index.php' ?>">
                      <li>
                         <i class="bi bi-people"></i>
                         <span>Users</span>
                      </li>
                   </a>
                   <a href="<?php echo BASE_URL . '/admin/roles/index.php' ?>">
                      <li>
                         <i class="bi bi-person-gear"></i>
                         <span>Roles</span>
                      </li>
                   </a>
                   <a href="<?php echo BASE_URL . '/admin/permissions/index.php' ?>">
                      <li>
                         <i class="bi bi-shield-lock"></i>
                         <span>Permissions</span>
                      </li>
                   </a>
                   <a href="<?php echo BASE_URL . '/admin/account.php' ?>">
                      <li>
                         <i class="bi bi-person-circle"></i>
                         <span>Account</span>
                      </li>
                   </a>
                   <a href=" <?php echo BASE_URL . '/account/logout.php' ?>">
                      <li>
                         <i class="bi bi-box-arrow-left"></i>
                         <span>Logout</span>
                      </li>
                   </a>
                </ul>                
                          <?php endif; ?>

         </ul>

      </div>
   

</div>