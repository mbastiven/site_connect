<div class="off-zone" id="off-zone">

<?php if (isset($_SESSION['msg'])): ?>
  
    <div class="status-msg <?php echo $_SESSION['type']; ?> " id="status-msg">
        <li>
            <?php echo $_SESSION['msg']; ?>
        </li>
        <?php
        unset($_SESSION['msg']);
        unset($_SESSION['type']);

        ?>
    </div>
    </div> 
<?php endif; ?>

<script>
    // $(document).ready(function () {
    //     $("#status-msg").delay(10000).slideUp(300);
    // });

    // setTimeout(function () {
    //     $('#status-msg').fadeOut('fast');
    // }, 30000);
    // setTimeout(function () {
    //     $('.status-msg').remove();
    // }, 30000);
    // $(document).ready(function () {
    //     window.livewire.on('alert_remove', () => {
    //         setTimeout(function () {
    //             $(".alert").fadeOut('fast');
    //         }, 3000); // 3 secs
    //     });
    // });

    var timeout = 1000; // in miliseconds (3*1000)

    $("#status-msg").delay(timeout).fadeOut(2000);
      var timeout = 1000; // in miliseconds (3*1000)

    $('.status-msg').delay(timeout).fadeOut(2000);
</script>
