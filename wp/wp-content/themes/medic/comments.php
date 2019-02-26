<div class="comment-area">
    <div class="comment">
    	<h3>
	    <?php
		    if (have_comments()){
		        $number = get_comments_number($post_id);
		        if ($number === '1' ) {
		            echo $number . ' comentario';
		        } else {
		            echo $number . ' comentarios';
		        } 
	     ?>
    	</h3>
    </div>
    <div class="comment reply-comment">
	    <?php
		    $args = array(
		        //'style' => 'div',
		        'type' => 'comment',
		        'callback' => 'custom_comments'
		        );
		    wp_list_comments($args);
		    
		    //end if
		    } else {
		        echo 'Se el primero en comentar';
		    } 
	    
		    $args = array(
		        'comment_field' => '<div class="leave-comments">
		                                <textarea name="comment" placeholder="Commentario" rows="5" class="form-control" required></textarea>
		                            </div>',
		        'comment_notes_before' => '',
		        'title_reply' => 'Deja un comentario',
		        'title_reply_to' => 'Responder a %s',
		        'cancel_reply_link' => 'Cancelar respuesta',
			    'class_submit' => 'btn send-btn',
			    'label_submit' => 'Comentar'
			);
	    ?>
    </div>
</div>
    <div class="form-area">
    <?php
		comment_form($args);	
	?>
    </div>