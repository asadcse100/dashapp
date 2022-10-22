<script>
    // navbar
    let bar = document.querySelector('.mob-box');
    let mobLinks = document.querySelector('.link-box')
    // bar.onclick = () => {
    //     mobLinks.classList.toggle('active');
    // }
    //navbar end

    /* Sticky nav start */

    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.padding = "5px 5px";
            document.getElementById("logo").style.fontSize = "20px";
        } else {
            document.getElementById("navbar").style.padding = "20px 10px";
            document.getElementById("logo").style.fontSize = "35px";
        }
    }
</script>


<!-- BEGIN GLOBAL MANDATORY STYLES -->

<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

<!-- Vendor JS Files -->



<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="<?php echo e(asset('templete')); ?>/src/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<?php /**PATH E:\xampp\htdocs\zeroplus20\resources\views/layouts/appinc/js.blade.php ENDPATH**/ ?>