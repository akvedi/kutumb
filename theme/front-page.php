<?php get_header();?>

    <div id="primary">
        <main id="main" class="mx-auto ">
            <div id="hero" class="mx-auto text-center justify-center items-center flex ">
                <hgroup class="">
                    <h1 class="font-black text-7xl">Welcome to Kitabirang</h1>
                    <h2>Kitabirang is a blog about books and reading.</h2>
                </hgroup>
            </div>
            <br>
            <br>
            <br>

           
            <div id="summaries">
                <h2 class="text-center">Latest Book Summaries</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'category_name' => 'book-summary'
                    );
                    $latest_posts = new WP_Query($args);
                    if ($latest_posts->have_posts()) {
                        while ($latest_posts->have_posts()) {
                            $latest_posts->the_post();

                            ?>  
                                <article class="bg-white border border-slate-200 shadow-sm rounded-lg overflow-hidden">
                                    <div>
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="p-4 prose">
                                        <?php   the_date(); ?>
                                        <?php the_category(); ?>
                                        
                                        <h2 > <a href="<?php the_permalink(); ?>" class="text-xl no-underline" ><?php the_title(); ?></a></h2>
                                    </div>
                                    
                                </article>
                                
                                

                            <?php
                        }
                    }
                    ?>
                </div>
            </div>



            <div id="books">
                <h2 class="text-center">Latest Books</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php
                    $args = array(
                        'post_type' => 'books',
                        'posts_per_page' => 3,
                    );
                    $latest_posts = new WP_Query($args);
                    if ($latest_posts->have_posts()) {
                        while ($latest_posts->have_posts()) {
                            $latest_posts->the_post();

                            ?>  
                                <article class="bg-white border border-slate-200 shadow-sm rounded-lg overflow-hidden">
                                    <div>
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="p-4 prose">
                                        <?php   the_date(); ?>
                                        <?php the_category(); ?>
                                        
                                        <h2 > <a href="<?php the_permalink(); ?>" class="text-xl no-underline" ><?php the_title(); ?></a></h2>
                                    </div>
                                    
                                </article>
                                
                                

                            <?php
                        }
                    }
                    ?>
                </div>
        </main>

    </div>



<?php get_footer(); ?>