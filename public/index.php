<!doctype html>
<html lang="en">
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/head.php'; ?>
    <body>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/header.php'; ?>
        <main>
            <!-- Hero Section Start -->
            <section class="hero-section d-flex align-items-center justify-content-center text-center position-relative" style="min-height: 100vh;">
                <div class="hero-bg-overlay"></div>
                <div class="container position-relative">
                    <h1 class="display-4 text-white font-weight-bold">Explore Traverse Mountain Trails</h1>
                    <p class="lead text-white mb-4">Discover scenic routes, join our community, and support local trails.</p>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <a href="/trails" class="btn btn-primary btn-lg mx-2 w-100">Explore Trails</a>
                    </div>
                    <div class="col-auto">
                        <a href="/trails" class="btn btn-light btn-lg mx-2 w-100">Donate</a>
                    </div>
                </div>

                </div>
            </section>  
             <!--About Section -->
            <section class="about-section d-flex align-items-center justify-content-center position-relative" style="min-height: 80vh;">
                <div class="container bg-light rounded shadow p-5">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-left">
                            <h2 class="font-weight-bold mb-4">Who We Are</h2>
                            <p class="mb-4">
                                The Traverse Mountain Trails Association (TMTA) is a volunteer-run nonprofit 501(c)(3)dedicated to building and maintaining sustainable recreational trails focused on mountain biking and hiking on Traverse Mountain in Lehi, Utah. TMTA works closely with Lehi City, other local governments and organizations, and community partners to plan, fund, and construct a growing tail network. Grants, private donations, and city funds have funded the existing trail network. Recent projects include key trails like Lehi’s Dream and Stairway to Heaven. With a vision to connect over 50 miles of trails to major systems like Draper’s Corner Canyon and the Bonneville Shoreline Trail, TMTA promotes outdoor access, conservation, and community involvement across Utah Valley.                            </p>
                          
                        </div>
                        <div class="col-md-6">
                            <img src="/assets/images/volunteers.jpg" alt="Traverse Mountain Trails" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </section>
            <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/footer.php'; ?>
        </main>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/close-page.php'; ?>
    </body>
</html>
