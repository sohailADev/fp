       <!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                2016 - 2018 © Minton - Coderthemes.com
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<!-- Essential javascripts for application to work-->
<script src="<?php echo URLROOT; ?>/Assets/js/lib/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="<?php echo URLROOT; ?>/Assets/js/lib/jquery.core.js"></script>
<script src="<?php echo URLROOT; ?>/Assets/js/lib/jquery.app.js"></script>
<!-- The javascript plugin to display page loading on top-->

<script src="<?php echo URLROOT; ?>/Assets/js/lib/plugins/pace.min.js"></script>
<script src="<?php echo URLROOT; ?>/Assets/js/lib/waves.js"></script>
<script src="<?php echo URLROOT; ?>/Assets/js/lib/jquery.slimscroll.js"></script>
<script src="<?php echo URLROOT; ?>/Assets/js/lib/jquery.scrollTo.min.js"></script>
<script src="<?php echo URLROOT; ?>/Assets/js/lib/jquery.dashboard.js"></script>
<script src="<?php echo URLROOT; ?>/Assets/js/lib/jquery.popper.min.js"></script>


<!--plugins-->
<script src="<?php echo URLROOT; ?>/Assets/js/lib/plugins/skycons.min.js"></script>
<script src="<?php echo URLROOT; ?>/Assets/js/lib/plugins/jquery.sparkline.min.js"></script>
<script src="<?php echo URLROOT; ?>/Assets/js/lib/plugins/jquery.circliful.min.js"></script>
<script src="<?php echo URLROOT; ?>/Assets/js/lib/plugins/jquery.counterup.min.js"></script>
<script src="<?php echo URLROOT; ?>/Assets/js/lib/plugins/jquery.waypoints.min.js"></script>


<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
        $('.circliful-chart').circliful();
    });

    // BEGIN SVG WEATHER ICON
    if (typeof Skycons !== 'undefined') {
        var icons = new Skycons(
            { "color": "#00b19d" },
            { "resizeClear": true }
        ),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play();
    };

</script>
  </body>
</html>