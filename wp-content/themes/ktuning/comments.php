<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress Standart
 * @subpackage
 * @since 1.0
 * @version 1.0
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area find-service">
    <div class="comment-form form-outer margin-top-0 wow fadeInUp animated"
         data-wow-delay="200ms"
         data-wow-duration="1500ms"
         style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
        <?php
        // You can start editing here -- including this comment!
        if (have_comments()) : ?>
        <div class="group-title">
            <h2 class="comments-title">
                <?php
                $comments_number = get_comments_number();
                if ('1' === $comments_number) {
                    /* translators: %s: post title */
                    printf(_x('1 Комментарий: &ldquo;%s&rdquo;', 'comments title', 'ktuning'), get_the_title());
                } else {
                    printf(
                    /* translators: 1: number of comments, 2: post title */
                        _nx(
                            '%1$s Комментарий: &ldquo;%2$s&rdquo;',
                            '%1$s Комментариев: &ldquo;%2$s&rdquo;',
                            $comments_number,
                            'comments title',
                            'ktuning'
                        ),
                        number_format_i18n($comments_number),
                        get_the_title()
                    );
                }
                ?>
            </h2>
        </div>
        <ul class="comment-list">
            <?php
            wp_list_comments(array(
                'avatar_size' => 38,
                'style' => 'ul',
                'short_ping' => true,
                'callback'=>'ktuning_comment'
            ));
            ?>
        </ul>

        <?php the_comments_pagination(array(
            'prev_text' => ktuning_get_svg(array('icon' => 'arrow-left')) . '<span class="screen-reader-text"> << </span>',
            'next_text' => '<span class="screen-reader-text"> >> </span>' . ktuning_get_svg(array('icon' => 'arrow-right')),
        ));

        endif; // Check for have_comments().

        // If comments are closed and there are comments, let's leave a little note, shall we?
        if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>

            <p class="no-comments"><?php echo 'Комментирование закрыто'; ?></p>
        <?php
        endif;
        ?>
        <div class="comment-form form-outer margin-top-0 wow fadeInUp animated"
             data-wow-delay="200ms"
             data-wow-duration="1500ms"
             style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">

            <?php
            $defaults = array(
                'fields' => [
                    'author'  => '<div class="col-md-6 col-sm-6 col-xs-12 form-group">' .
                        '<input id="author" name="author" type="text" placeholder="Имя '. ( $req ? '*' : '' ) .'" /></div>',
                    'email'   => '<div class="col-md-6 col-sm-6 col-xs-12 form-group">'.
                        '<input id="email" name="email"  type="text" placeholder="Email '. ( $req ? '*' : '' ) .'" /></div>'
                ],
                'comment_field' => '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">'.
                                   '<textarea id="comment" name="comment" placeholder="Комментарий '. ( $req ? '*' : '' ) .'"  aria-required="true" required="required"></textarea></div>',
                'title_reply_before' => '<div class="group-title"><h2 id="reply-title" class="comment-reply-title">',
                'title_reply_after' => '</h2></div>',
                'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="%3$s theme-btn btn-style-one" value="%4$s" />'.
                                   '<span class="icon fa fa-long-arrow-right"></span>',
                'submit_field' => '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">%1$s %2$s</div>',
                'comment_notes_before' => '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group theme_color">' . __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) . '</div>',
                'class_form' => 'row clearfix',
            );

            comment_form($defaults);
            ?>
        </div>
    </div>
</div><!-- #comments -->
