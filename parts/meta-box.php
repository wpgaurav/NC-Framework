<?php $authorlink2 = get_author_posts_url( get_the_author_meta( 'ID' ),get_the_author_meta('user_nicename'));?>

<section class="authorbox">
	<div class="authorbox_avatar"> 
		<?php echo get_avatar ( get_the_author_meta('user_email'), 400 ); ?> 
	</div>

	<div class="authorbox_content">
        <header class="authorbox_header">By <?php echo '<a class="authorbox_link" href="'.$authorlink2.'">'.get_the_author_meta('display_name').'</a>';?></header>
        <?php if(get_the_author_meta('phonenumber')):?> <p class="authorbox_phone"><?php _e('Phone:','nc-framework');?> <?php echo get_the_author_meta('phonenumber'); ?></p><?php endif;?>
        <?php if(get_the_author_meta('description')):?> <p class="authorbox_desc"><?php echo wp_trim_words( get_the_author_meta('description'), 20, ' &hellip; <a href="'.$authorlink2.'">'.__('Read&nbsp;more&nbsp;&rsaquo;','nc-framework').'</a>');?></p> <?php endif; ?>
		<?php get_template_part('parts/meta-box-social');?>
</section>

<style>

/* Author Box */

.authorbox {
	--box-avatar-size: 150px;
	--box-color: var(--gray);
	--box-border: none;
	--box-padding: var(--gap);
	--box-avatar-gap:var(--gap);
}

.authorbox {
    display: grid;
    grid-template-columns:var(--box-avatar-size) 1fr;
    grid-gap:var(--box-avatar-gap);
    margin-top:3em;
    margin-bottom:3em;
    position: relative;
    background: var(--box-color);
    border:var(--box-border);
    padding:var(--box-padding)
}

.authorbox_avatar img {
    border-radius: 50%;
    display: block;
}

.authorbox_header {
    text-transform:uppercase;
    font-weight: bold;
    color:#000;
}
.authorbox_header a {
    color:inherit; text-decoration: none;
}

.authorbox_phone {
    margin:0;
}

.authorbox .socialbuttons {
    font-size: 0.8em;
}

.authorbox .socialbuttons_link {
    margin-right: 0.5em;
}

.authorbox .socialbuttons_link:hover {
    background-color: #222;
}

.authorbox .socialbuttons_link svg {
    width: 1.5em;
}

@media(max-width:500px){
    .authorbox {
        grid-template-columns:1fr;
    }
    .authorbox_avatar img {
    	width:var(--box-avatar-size);
    }
}

/* Social Buttons */
/* The HTML <nav class="socialbuttons"> <a href="#1" class="socialbuttons_link socialbuttons_facebook"> <svg alt="name of icon"> <path fill="#000"></path> </svg> </a> </nav> */

.socialbuttons {
  display: flex;
  flex-wrap: wrap;
}

.socialbuttons_link svg {
  width: 1.25em;
}

.socialbuttons_link {
  width: 2em;
  height: 2em;
  display: flex;
  border-radius: 50%;
  justify-content: center;
  align-items: center;
  transition: .3s;
  align-self: flex-start;
  background-color: #ccc;
  /* margin-bottom: 0.5em; */
  margin-right: 0.5em;
}

.socialbuttons_link path {
  fill: #fff;
}

.socialbuttons_facebook {
  background-color: #3b579d;
}

.socialbuttons_twitter {
  background-color: #1da1f2;
}

.socialbuttons_linkedin {
  background-color: #0077b5;
}

.socialbuttons_pinterest {
  background-color: #bd081c;
}

.socialbuttons_youtube {
  background-color: #ff0000;
}

.socialbuttons_googleplus {
  background-color: #db4437;
}

.socialbuttons_instagram {
  background-color: #fb3958;
}

.socialbuttons_personal {
  background-color: #9b6954;
}

.socialbuttons_email {
  background-color: #999;
}

.socialbuttons_vimeo {
  background-color: #1ab7ea;
}

.socialbuttons_tumblr {
  background-color: #36465d;
}


</style>