<h5 class="text-white">Comments <i><?php comments_number( '(There are no comments yet)', '(one comment)','(% comments)');?></i></h5>
<hr class="bg-light">
<?php comment_form(); ?>

<?php wp_list_comments(array(
    'callback' => function($comment, $args, $depth){ ?> 
        <div class="media">
            <div class="mt-5 mr-3">
            <?php
               if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
                 } ?>
            </div>
            <div class="media-body mb-2">
                <hr>
                <h5 class="mt-0"><?php  printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() );?>
            </h5>
            <?php 
                if ( $comment->comment_approved == '0' ) { ?>
                    <em><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
                } ?>
               <?php comment_text(); ?>
               <span>
               <?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'reply_text' => 'Reply', 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>
               </span>
               <span>
               <?php 
                  edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
               </span>
                 
                <div class="media mt-3">
                   </a>
                <div class="media-body">
                </div>
                </div>
            </div>
            </div>
    <?php }
        )); ?>