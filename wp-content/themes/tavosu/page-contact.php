<?php
get_header();
while (have_posts()):?>
    <div class="row post page contact">
        <?php
        the_post();
        the_content();
        ?>
            <?php
            $entries = array_reverse ( get_post_meta( get_the_ID(), '_prefix_repeatable-group1', true )  );
            if(!empty($entries)){
                echo "<div class='faq'>";
                echo "<p>Frequently asked questions (FAQ)</p>";
                foreach ( (array) $entries as $key => $entry ) {

                    $question = $answer = '';

                    if ( isset( $entry['faq_question'] ) )
                        $question = $entry['faq_question'];

                    if ( isset( $entry['faq_answer'] ) )
                        $answer = $entry['faq_answer'];


                    echo "<div class='faq-item'>";
                    echo "<p class='question'><i>" . $question . "</i></p>";
                    echo "<p class='answer'>" . $answer . "</p>";
                    echo "</div>";
                }
                 echo "</div>";
            }
            
            ?>
            

        <!--<?php edit_post_link(); ?>-->
    </div>
<?php endwhile;
get_footer();