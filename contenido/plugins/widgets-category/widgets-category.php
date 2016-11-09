<?php
/* Plugin Name: Widgets Categorys
Description: Sirve para mostrar cierta categorias de entradas y no otras.
Version: 1.1
Author: LaCueva.tv
Author URI: http://lacueva.tv
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: portfolio
*/


add_action( 'widgets_init', 'register_lqva_widgets_category' );
function register_lqva_widgets_category() {
    register_widget( 'lqva_widgets_category' );

    register_widget( 'lqva_widgets_category_publicaciones' );

    //texdomain
    load_theme_textdomain('lang', get_template_directory() .'/lang');
}

class lqva_widgets_category extends WP_Widget {
    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_options = array(
            'description'    => esc_html__( 'Muestra las ultimas entradas de la categoria elegida', 'lang' ),
            'title'          => esc_html__( 'Novedades' ),
            'limit'          => 5,
            'show_thumbnail' => true,
            'category'       => '1',
        );
        parent::__construct( 'lqva-widgets-category', esc_html__( 'lqva - Entradas recientes para categoria', 'lang' ), $widget_options );
    }
    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     *
     * @return void
     */
    public function form( $instance ) {
        $title          = ! empty( $instance['title'] ) ? $instance['title'] : $this->widget_options['title'];
        $limit          = ! empty( $instance['limit'] ) ? $instance['limit'] : $this->widget_options['limit'];
        $show_thumbnail = ! empty( $instance['show_thumbnail'] ) ? true : false;
        ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Título Widget', 'lang' ); ?>:</label><br />
            <input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'limit' ) ); ?>"><?php esc_html_e( 'Número de entrdas a mostrar', 'lang' ); ?></label><br />
            <input id="<?php echo esc_attr( $this->get_field_id( 'limit' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'limit' ) ); ?>" type="text" value="<?php echo esc_attr( $limit ); ?>">
        </p>
        <p>
            <input id="<?php echo esc_attr( $this->get_field_id( 'show_thumbnail' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show_thumbnail' ) ); ?>" type="checkbox" value="true" <?php checked( $show_thumbnail, false ); ?>>
            <label for="<?php echo esc_attr( $this->get_field_id( 'show_thumbnail' ) ); ?>"><?php esc_html_e( 'Mostrar imagen destacada', 'lang' ); ?></label>
        </p>

        <?php
    }
    /**
     * Processing widget options on save.
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array(
            'title'          => isset( $new_instance['title'] ) ? $new_instance['title'] : '',
            'limit'          => isset( $new_instance['limit'] ) ? intval( $new_instance['limit'] ) : 0,
            'show_thumbnail' => isset( $new_instance['show_thumbnail'] ) ? boolval( $new_instance['show_thumbnail'] ) : false,
        );
        return $instance;
    }
    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        $project_query = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => intval( $instance['limit'] ),
                'cat' => '8,5',
            )
        );
        // The Loop
        if ( $project_query->have_posts() ) : ?>

            <?php while ( $project_query->have_posts() ) : ?>
                
                <ul class="item">
                <?php $project_query->the_post(); ?>
                
                    <li>
                    <?php the_title( '<a href="' . get_the_permalink() . '">', '</a>' ); ?>
                    <div class="thumbnail-post">
                        <?php
                            if ( $instance['show_thumbnail'] ) :
                                the_post_thumbnail();
                            endif;
                        ?>
                    </li>
                </ul>

            <?php endwhile; ?>

            <?php wp_reset_postdata();
        else :
            echo esc_html__( 'No se encontraron post', 'lang' );
        endif;
        echo $args['after_widget'];
    }
}