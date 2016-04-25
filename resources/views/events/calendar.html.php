<?php $view->extend('::base.html.php'); ?>

<?php $view['slots']->start('include_js_body'); ?>
    <script src="<?php echo $view['assets']->getUrl('components/moment/moment.js'); ?>"></script>
    <script src="<?php echo $view['assets']->getUrl('components/fullcalendar/dist/fullcalendar.min.js'); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: <?php echo $events; ?>
            });
        });
    </script>
<?php $view['slots']->stop(); ?>

<?php $view['slots']->start('include_css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $view['assets']->getUrl('components/fullcalendar/dist/fullcalendar.min.css'); ?>">
<?php $view['slots']->stop(); ?>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div id="calendar"></div>
    </div>
    <div class="col-md-offset-1"></div>
</div>
