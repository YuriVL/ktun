<?php
/**
 * Widget API: Ktuning_Widget_Main_Posts class
 */

class Ktuning_Widget_Main_Posts extends WP_Widget
{

    /**
     * Sets up a new Recent Posts widget instance.
     *
     * @since 2.8.0
     */
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'ktuning_main_entries',
            'description' => __('Your site&#8217;s most recent Posts.'),
            'customize_selective_refresh' => true,
        );
        parent::__construct('ktuning_main-posts', __('Ktuning Main Posts'), $widget_ops);
        $this->alt_option_name = 'ktuning_main_entries';
    }

    /**
     * Outputs the content for the current Recent Posts widget instance.
     *
     * @since 2.8.0
     *
     * @param array $args Display arguments including 'before_title', 'after_title',
     *                        'before_widget', and 'after_widget'.
     * @param array $instance Settings for the current Recent Posts widget instance.
     */
    public function widget($args, $instance)
    {
        if (!isset($args['widget_id'])) {
            $args['widget_id'] = $this->id;
        }

        $title = (!empty($instance['title'])) ? $instance['title'] : __('Recent Posts');

        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters('widget_title', $title, $instance, $this->id_base);

        $number = (!empty($instance['number'])) ? absint($instance['number']) : 5;
        if (!$number) {
            $number = 5;
        }
        $show_date = isset($instance['show_date']) ? $instance['show_date'] : false;

        /**
         * Filters the arguments for the Recent Posts widget.
         *
         * @since 3.4.0
         * @since 4.9.0 Added the `$instance` parameter.
         *
         * @see WP_Query::get_posts()
         *
         * @param array $args An array of arguments used to retrieve the recent posts.
         * @param array $instance Array of settings for the current widget.
         */
        $r = new WP_Query(apply_filters('widget_posts_args', array(
            'posts_per_page' => $number,
            'no_found_rows' => true,
            'post_status' => 'publish',
            'ignore_sticky_posts' => true,
        ), $instance));

        if (!$r->have_posts()) {
            return;
        }
        ?>
        <?php echo $args['before_widget']; ?>
        <?php
        if ($title) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        ?>
        <div class="row clearfix">
            <?php foreach ($r->posts as $recent_post) {
                $post_title = get_the_title($recent_post->ID);
                $title = (!empty($post_title)) ? $post_title : __('(no title)');
                $date = dateConvert(get_the_date('', $recent_post->ID));
                ?>
                <!--Post-->
                <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image-box">
                            <?php
                            $images = acf_photo_gallery('gallery', $recent_post->ID);
                            if ($images[0]['full_image_url']):
                                ?>
                                <a href="<?php the_permalink($recent_post->ID)?>">
                                    <img src="<?php echo acf_photo_gallery_resize_image($images[0]['full_image_url'], 370, 252); ?>"
                                         alt="<?php echo $title; ?>">
                                </a>
                            <?php endif; ?>
                        </figure>
                        <div class="post-meta">
                            <ul class="clearfix">
                                <?php if ($show_date) : ?>
                                <li>
                                    <span class="day"><?php echo $date['day'] ?></span><?php echo $date['mounth_short'] . '-' . $date['year'] ?>
                                </li>
                                <li>
                                    <?php endif; ?>
                                    <div class="icon">
                                        <span class="fa fa-comment-o"></span>
                                    </div>
                                    <?php echo $recent_post->comment_count?>-комм.
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa fa-eye"></span>
                                    </div>
                                    <?php echo pvc_post_views($recent_post->Id);?>-просм.
                                </li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="<?php echo the_permalink($recent_post->ID)?>"><?php echo $title; ?></a></h3>
                            <div class="text"><?php echo textSubstring($recent_post->post_content, 200)?></div>
                            <a href="<?php echo the_permalink($recent_post->ID)?>" class="theme-btn btn-style-one">Подробнее </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php
        echo $args['after_widget'];
    }

    /**
     * Handles updating the settings for the current Recent Posts widget instance.
     *
     * @since 2.8.0
     *
     * @param array $new_instance New settings for this instance as input by the user via
     *                            WP_Widget::form().
     * @param array $old_instance Old settings for this instance.
     * @return array Updated settings to save.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['number'] = (int)$new_instance['number'];
        $instance['show_date'] = isset($new_instance['show_date']) ? (bool)$new_instance['show_date'] : false;
        return $instance;
    }

    /**
     * Outputs the settings form for the Recent Posts widget.
     *
     * @since 2.8.0
     *
     * @param array $instance Current settings.
     */
    public function form($instance)
    {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $number = isset($instance['number']) ? absint($instance['number']) : 5;
        $show_date = isset($instance['show_date']) ? (bool)$instance['show_date'] : false;
        ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                   name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>"/></p>

        <p><label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of posts to show:'); ?></label>
            <input class="tiny-text" id="<?php echo $this->get_field_id('number'); ?>"
                   name="<?php echo $this->get_field_name('number'); ?>" type="number" step="1" min="1"
                   value="<?php echo $number; ?>" size="3"/></p>

        <p><input class="checkbox" type="checkbox"<?php checked($show_date); ?>
                  id="<?php echo $this->get_field_id('show_date'); ?>"
                  name="<?php echo $this->get_field_name('show_date'); ?>"/>
            <label for="<?php echo $this->get_field_id('show_date'); ?>"><?php _e('Display post date?'); ?></label></p>
        <?php
    }
}
