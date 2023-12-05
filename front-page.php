<?php get_header(); ?>
<?php get_template_part( 'partials/tail' ); ?>
<main>
    <section class="home-hero">
        <div class="container">
            <h2>
                <?php bloginfo('description'); ?>
            </h2>
            <span class="box-row">
            <a href="#contact-us" class="btn">
                Contact us
            </a>
            <a href="https://app.acuityscheduling.com/schedule.php?owner=30871738&appointmentType=55697530&notembedded=1" target="_blank" class="btn">
                book appointment
            </a>
            </span>
        </div>
    </section>
    <?php get_template_part( 'partials/contact' ); ?>
</main>
<?php get_footer(); ?>