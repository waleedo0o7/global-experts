<?php include 'layout-header.php'; ?>

<div class="co-page-title">
    <h1 class="title"> About us </h1>
</div> <!-- co-page-title -->

<main class="main">

    <section id="our-story" class="mb-6">

        <div class="container relative">

            <div class="co-swiper-slider">

                <div class="swiper story-swiper">

                    <div class="swiper-wrapper">

                        <?php foreach (range(0, 7) as $i) { ?>

                            <div class="swiper-slide">
                                <div class="swiper-slide-content story-card p-3">

                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="co-image mb-4 mb-lg-0">
                                                <img src="assets/images/story-01.png" class="img-fluid">
                                            </div><!-- co-image -->
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="co-text">
                                                <h2 class="headline"> Our story </h2>
                                                <p class="text"> Once upon a time, in a world bustling with diverse cultures and talents, the Global Experts Group emerged as a beacon of greatness and genuineness. This extraordinary brand was the brainchild of a visionary named Dr. Ghofran, who possessed an unwavering commitment to greatness, genuineness, and global impact. </p>
                                            </div><!-- co-text -->
                                        </div>
                                    </div>

                                </div> <!-- swiper-slide-content -->
                            </div> <!-- swiper-slide -->
                        <?php } ?>

                    </div>


                </div>


                <div class="swiper-button-prev story-button-prev">
                    <i class="fa fa-chevron-left"></i>
                </div>

                <div class="swiper-button-next story-button-next">
                    <i class="fa fa-chevron-right"></i>
                </div>


            </div>

        </div> <!-- container -->

    </section> <!-- our-story -->

    <section id="banner" class="mb-6">
        <div class="container">
            <img src="assets/images/about-us-banner.png" class="img-fluid w-100">
        </div>
    </section> <!-- banner -->

    <section id="mission-and-vision" class="mb-6">

        <div class="container">

            <div class="custom-side-tabs">
                <div class="row">
                    <div class="col-md-4">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="our-vision-list" data-toggle="list" href="#our-vision" role="tab" aria-controls="home">
                                <img src="assets/images/icons-svg/Vision.svg" class="img-fluid"> Our vision
                            </a>
                            <a class="list-group-item list-group-item-action" id="our-mission-list" data-toggle="list" href="#our-mission" role="tab" aria-controls="profile">
                                <img src="assets/images/icons-svg/Mission.svg" class="img-fluid"> Our mission
                            </a>
                            <a class="list-group-item list-group-item-action" id="our-values-list" data-toggle="list" href="#our-values" role="tab" aria-controls="messages">
                                <img src="assets/images/icons-svg/Value.svg" class="img-fluid"> Our values
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="our-vision" role="tabpanel" aria-labelledby="our-vision-list">



                                <p class="bold mb-1"> Gurus </p>
                                <p>We are always listening, learning, and
                                    innovating our solutions being always
                                    experts and pioneers of what we do, then
                                    we transfer our knowledge to the world.</p>

                                <p class="bold mb-1"> Greatness </p>

                                <p> We are committed to Excellence and
                                    Greatness in every aspect of our work.
                                    Seeking Greatness drives us to always do
                                    more than our partners expects</p>

                                <p class="bold mb-1"> Genuine </p>

                                <p>
                                    We always provide and receive honest
                                    feedback seeking a transparent working
                                    environment that is both trustworthy and
                                    inspiring.
                                </p>





                            </div>
                            <div class="tab-pane fade" id="our-mission" role="tabpanel" aria-labelledby="our-mission-list">

                                <p class="bold mb-1"> Gurus </p>
                                <p>We are always listening, learning, and
                                    innovating our solutions being always
                                    experts and pioneers of what we do, then
                                    we transfer our knowledge to the world.</p>

                                <p class="bold mb-1"> Greatness </p>

                                <p> We are committed to Excellence and
                                    Greatness in every aspect of our work.
                                    Seeking Greatness drives us to always do
                                    more than our partners expects</p>

                                <p class="bold mb-1"> Genuine </p>

                                <p>
                                    We always provide and receive honest
                                    feedback seeking a transparent working
                                    environment that is both trustworthy and
                                    inspiring.
                                </p>

                            </div>
                            <div class="tab-pane fade" id="our-values" role="tabpanel" aria-labelledby="our-values-list">


                                <p class="bold mb-1"> Gurus </p>
                                <p>We are always listening, learning, and
                                    innovating our solutions being always
                                    experts and pioneers of what we do, then
                                    we transfer our knowledge to the world.</p>

                                <p class="bold mb-1"> Greatness </p>

                                <p> We are committed to Excellence and
                                    Greatness in every aspect of our work.
                                    Seeking Greatness drives us to always do
                                    more than our partners expects</p>

                                <p class="bold mb-1"> Genuine </p>

                                <p>
                                    We always provide and receive honest
                                    feedback seeking a transparent working
                                    environment that is both trustworthy and
                                    inspiring.
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- custom-side-tabs -->
        </div>
    </section> <!-- mission-and-vision -->

    <section id="global-presence" class="mb-6">

        <div class="container">

            <div class="co-section-title">
                <h2 class="title"> Global Presence </h2>
            </div> <!-- co-page-title -->

            <p class="text-center mb-5">
                We operate through head offices and
                a network of distributors and partners
                presenting in Asia, Middle East, Africa,
                Europe and other markets.
                With clear steps and ambition to expand
                our mission, knowledge and unique
                innovations to the rest of the world.
            </p>

            <div class="text-center mb-5">

                <img src="assets/images/map.png" class="img-fluid">
            </div>

        </div>

    </section><!-- global-presence -->

    <section id="newsletter" class="section-bg-cyan">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="co-text color-primary">
                        <h2> Subscribe for our free newsletter to never miss an update </h2>
                        <p class="lead"> Get curated content tailored specifically to your interests </p>
                    </div>
                </div> <!-- col-md-6 -->

                <div class="col-md-6">
                    <div class="co-form">
                        <div class="form-group">
                            <input type="text" id="email" class="form-control" placeholder="Your email">
                        </div>
                        <div class="form-group">
                            <select name="" id="" class="form-control">
                                <option value="0"> Male </option>
                                <option value="1"> Female </option>
                            </select>
                        </div>
                        <a href="#" class="btn btn-primary w-100"> Subscribe </a>
                    </div> <!-- co-form -->
                </div> <!-- col-md-6 -->

            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- newsletter -->

    <section id="ceo-quote" class="quote-section">

        <div class="co-quote">
            <p class="quote"> We do not sell threads, We give <br> knowledge, to change lives. </p>
            <p class="name"> Dr: Ghofran Soltan </p>
            <p class="job-title"> CEO & Founder </p>
        </div><!-- co-quote -->

    </section><!-- ceo-quote -->


</main>

<?php include 'layout-footer.php'; ?>