<?php
/**
 * The template used for displaying broadcast content in single-broadcast.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

  $broadcast_type = get_field('broadcast_email_type');

  if($broadcast_type == 'invite')
  {
    include('broadcast-templates/functions/function_broadcast_email_invite.php');
    $department = get_field('broadcast_email_department_or_college');
    $preheader = get_field('broadcast_email_invite_preheader');
    $banner = get_field('broadcast_email_invite_banner');
    $title = get_field('broadcast_email_invite_title');
    $copy = get_field('broadcast_email_invite_copy');
    $copy_secondary = get_field('broadcast_email_invite_secondary_copy');
    $rsvp = get_field('broadcast_email_invite_rsvp');
    $location = get_field('broadcast_email_invite_location');
    $date = get_field('broadcast_email_invite_date');
    $time = get_field('broadcast_email_invite_time');
    $the_email = broadcast_email_invite($department, $preheader, $banner, $title, $copy, $copy_secondary, $rsvp, $location, $date, $time);
    $the_preview = $the_email;
  }
?>

 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header" style="padding-bottom: 48px; text-align: center;">
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>


    <div class="entry-content">
      <div style="max-width: 960px; overflow: hidden;">
        <script>
          function resizeIframe(obj) {
            obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
          }
        </script>
        <div id="idk">
          <?php echo $the_preview ?>
        </div>
      </div>
      <?php if( current_user_can('editor') || current_user_can('administrator') ) {  ?>
        <h2 style="margin-top: 60px; border-top: 3px solid #d00d2d;"><?php $current_user = wp_get_current_user(); echo $current_user->user_firstname; ?>, copy the following markup into PCI:</h2>
        <pre class="language-html" style="max-width: 960px;height: 420px;">
          <code class="language-html">
            <?php echo htmlspecialchars($the_email); ?>
          </code>
        </pre>
      <?php } ?>
    </div><!-- .entry-content -->
    <footer class="entry-meta">
      <?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
  </article><!-- #post -->
