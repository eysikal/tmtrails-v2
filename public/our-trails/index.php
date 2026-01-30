<!doctype html>
<html lang="en">
<?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/head.php'; ?>

<body>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/header.php'; ?>
    <main>
        <!-- Trails Map Section -->
        <section class="container-fluid py-5">
            <div class="container text-center mb-4">
                <h1 class="font-weight-bold mb-3">Explore Our Trails</h1>
                <p class="lead">Interactive Trailforks map of the Traverse Mountain trail system.</p>
            </div>

            <!-- TRAILFORKS WIDGET START -->
            <div class="px-3 px-md-5">
                <div class="TrailforksWidgetMap" data-w="100%" data-h="700px" data-rid="26438" data-activitytype="0"
                    data-maptype="trailforks" data-trailstyle="difficulty" data-controls="1" data-list="0" data-dml="1"
                    data-layers="labels,poi,polygon,directory,region" data-z="" data-lat="" data-lon=""
                    data-hideunsanctioned="0" data-basicmap="0"></div>
                <div class="text-center mt-3">
                    <a href="https://www.trailforks.com/region/traverse-mountain-trails/" target="_blank"
                        class="btn btn-primary">View on Trailforks</a>
                </div>
            </div>

            <script type="text/javascript">
                var script = document.createElement("script");
                script.setAttribute("src", "https://es.pinkbike.org/ttl-86400/sprt/j/trailforks/widget.js");
                document.getElementsByTagName("head")[0].appendChild(script);
                var widgetCheck = false;
            </script>
            <!-- TRAILFORKS WIDGET END -->
        </section>
    </main>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/footer.php'; ?>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/close-page.php'; ?>
</body>

</html>