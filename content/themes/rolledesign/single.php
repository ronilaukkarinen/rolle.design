<?php
/**
 * The template for displaying all single posts
 *
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by: Roni Laukkarinen
 * @Last Modified time: 2021-04-01 23:16:06
 * @package rolle
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

namespace Air_Light;

// Fields
$url_to_tweet = get_field( 'url_to_tweet' );

the_post();
get_header(); ?>

<main class="site-main transition-fade">
  <section class="block block-single has-light-bg">
    <div class="gutenberg-content">

      <h1><?php the_title(); ?></h1>

      <?php
        the_content();
        entry_footer();
      ?>

      <?php if ( ! empty( $url_to_tweet ) ) : ?>
        <?php
        // If URL contains twitter.com
        if ( strpos( $url_to_tweet, 'twitter.com' ) !== false ) : ?>
          <p class="comment-on-twitter"><a class="no-external-link-icon" href="<?php echo esc_url( $url_to_tweet ); ?>">Comment on Twitter <?php include get_theme_file_path( '/svg/twitter.svg' ); ?></a></p>
        <?php else : ?>
          <p class="comment-on-mastodon" style="display: none;"><a class="no-external-link-icon" href="<?php echo esc_url( $url_to_tweet ); ?>">Comment on Mastodon <?php include get_theme_file_path( '/svg/mastodon.svg' ); ?></a></p>

          <section id="comments" class="article-content comments">
            <div class="fediverse-info">
              <h2>Comments</h2>
              <p class="comment-description">With an account on the <a href="https://jointhefediverse.net">Fediverse</a> or <a href="https://mementomori.social">Mastodon</a>, you can respond to this <a href="<?php echo esc_url( $url_to_tweet ); ?>">post</a>. Since Mastodon is decentralized, you can use your existing account hosted by another Mastodon server or compatible platform if you don't have an account on this one. Known non-private replies are displayed below.</p>
            </div>

            <p id="mastodon-comments-list"><button id="load-comment">Load comments</button></p>
            <div id="comments-wrapper">
              <noscript><p>Loading comments relies on JavaScript. Try enabling JavaScript and reloading, or visit <a href="<?php echo esc_url( $url_to_tweet ); ?>">the original post</a> on Mastodon.</p></noscript>
            </div>
            <noscript>You need JavaScript to view the comments.</noscript>
            <script src="/assets/js/purify.min.js"></script>
            <!-- Moment.js CDN version -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
            <script>
              // Get host, username and post ID
              const postUrl = '<?php echo esc_url( $url_to_tweet ); ?>';
              const instanceHost = postUrl.split("/")[2];
              const instanceUsername = '@rolle';

              // Get ID after the last /
              const postID = postUrl.split("/").pop();

              function escapeHtml(unsafe) {
                return unsafe
                    .replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;")
                    .replace(/"/g, "&quot;")
                    .replace(/'/g, "&#039;");
              }
              function emojify(input, emojis) {
                let output = input;

                emojis.forEach(emoji => {
                  let picture = document.createElement("picture");

                  let source = document.createElement("source");
                  source.setAttribute("srcset", escapeHtml(emoji.url));
                  source.setAttribute("media", "(prefers-reduced-motion: no-preference)");

                  let img = document.createElement("img");
                  img.className = "emoji";
                  img.setAttribute("src", escapeHtml(emoji.static_url));
                  img.setAttribute("alt", `:${ emoji.shortcode }:`);
                  img.setAttribute("title", `:${ emoji.shortcode }:`);
                  img.setAttribute("width", "20");
                  img.setAttribute("height", "20");

                  picture.appendChild(source);
                  picture.appendChild(img);

                  output = output.replace(`:${ emoji.shortcode }:`, picture.outerHTML);
                });

                return output;
              }

              function loadComments() {
                let commentsWrapper = document.getElementById("comments-wrapper");
                document.getElementById("load-comment").innerHTML = "Loading";

                fetch('https://' + instanceHost + '/api/v1/statuses/' + postID + '/context')
                  .then(function(response) {
                    return response.json();
                  })
                  .then(function(data) {
                    let descendants = data['descendants'];

                    // If no comments, add has-no-comments to #comments
                    if( descendants.length === 0 ) {
                      document.getElementById("comments").classList.add("has-no-comments");
                    }

                    if(
                      descendants &&
                      Array.isArray(descendants) &&
                      descendants.length > 0
                    ) {
                      commentsWrapper.innerHTML = "";

                      descendants.forEach(function(status) {
                        if( status.account.display_name.length > 0 ) {
                          status.account.display_name = escapeHtml(status.account.display_name);
                          status.account.display_name = emojify(status.account.display_name, status.account.emojis);
                        } else {
                          status.account.display_name = status.account.username;
                        };

                        let instance = "";
                        if( status.account.acct.includes("@") ) {
                          instance = status.account.acct.split("@")[1];
                        } else {
                          instance = instanceHost;
                        }

                        const isReply = status.in_reply_to_id !== postID;

                        let op = false;
                        if( status.account.acct == instanceUsername ) {
                          op = true;
                        }

                        status.content = emojify(status.content, status.emojis);

                        let avatarSource = document.createElement("source");
                        avatarSource.setAttribute("srcset", escapeHtml(status.account.avatar));
                        avatarSource.setAttribute("media", "(prefers-reduced-motion: no-preference)");

                        let avatarImg = document.createElement("img");
                        avatarImg.className = "avatar";
                        avatarImg.setAttribute("src", escapeHtml(status.account.avatar_static));
                        avatarImg.setAttribute("alt", `@${ status.account.username }@${ instance } avatar`);

                        let avatarPicture = document.createElement("picture");
                        avatarPicture.appendChild(avatarSource);
                        avatarPicture.appendChild(avatarImg);

                        let avatar = document.createElement("a");
                        avatar.className = "avatar-link";
                        avatar.setAttribute("href", status.account.url);
                        avatar.setAttribute("rel", "external nofollow");
                        avatar.setAttribute("title", `View profile at @${ status.account.username }@${ instance }`);
                        avatar.appendChild(avatarPicture);

                        let instanceBadge = document.createElement("a");
                        instanceBadge.className = "instance";
                        instanceBadge.setAttribute("href", status.account.url);
                        instanceBadge.setAttribute("title", `@${ status.account.username }@${ instance }`);
                        instanceBadge.setAttribute("rel", "external nofollow");
                        instanceBadge.textContent = instance;

                        let display = document.createElement("span");
                        display.className = "display";
                        display.setAttribute("itemprop", "author");
                        display.setAttribute("itemtype", "http://schema.org/Person");
                        display.innerHTML = status.account.display_name;

                        let header = document.createElement("header");
                        header.className = "author";
                        header.appendChild(display);
                        header.appendChild(instanceBadge);

                        let permalink = document.createElement("a");
                        permalink.setAttribute("href", status.url);
                        permalink.setAttribute("itemprop", "url");
                        permalink.setAttribute("title", `View comment at ${ instance }`);
                        permalink.setAttribute("rel", "external nofollow");
                        permalink.textContent = moment(status.created_at).fromNow();

                        let timestamp = document.createElement("time");
                        timestamp.setAttribute("datetime", status.created_at);
                        timestamp.appendChild(permalink);

                        let main = document.createElement("main");
                        main.setAttribute("itemprop", "text");
                        main.innerHTML = status.content;

                        let interactions = document.createElement("footer");
                        // if (status.favourites_count > 0) {
                        //   let faves = document.createElement("a");
                        //   faves.className = "faves";
                        //   faves.setAttribute("href", `${ status.url }/favourites`);
                        //   faves.setAttribute("title", `Favorites from ${ instance }`);
                        //   faves.textContent = status.favourites_count;

                        //   interactions.appendChild(faves);
                        // }

                        let comment = document.createElement("article");
                        comment.id = `comment-${ status.id }`;
                        comment.className = isReply ? "comment comment-reply" : "comment";
                        comment.setAttribute("itemprop", "comment");
                        comment.setAttribute("itemtype", "http://schema.org/Comment");
                        comment.appendChild(avatar);
                        comment.appendChild(header);
                        comment.appendChild(timestamp);
                        comment.appendChild(main);
                        comment.appendChild(interactions);

                        if(op === true) {
                          comment.classList.add("op");

                          avatar.classList.add("op");
                          avatar.setAttribute(
                            "title",
                            "Blog post author; " + avatar.getAttribute("title")
                          );

                          instanceBadge.classList.add("op");
                          instanceBadge.setAttribute(
                            "title",
                            "Blog post author: " + instanceBadge.getAttribute("title")
                          );
                        }

                        commentsWrapper.innerHTML += DOMPurify.sanitize(comment.outerHTML);
                      });
                    }
                  });
                }
                // document.getElementById("load-comment").addEventListener("click", loadComments);

                // Load comments on page load
                document.addEventListener("DOMContentLoaded", function(event) {
                  loadComments();

                  // Hide load-comment button
                  document.getElementById("load-comment").style.display = "none";
                });
            </script>
          </section>

        <?php endif; ?>
      <?php endif; ?>

      <?php if ( get_edit_post_link() ) {
        edit_post_link( sprintf( __( '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg><span class="screen-reader-text">%s</span>', 'rolle' ), [ 'span' => [ 'class' => [] ] ], get_the_title() ), '<p class="edit-link">', '</p>' ); // phps:ignore
      } ?>

    </div>
  </section>

</main>

<?php get_footer();
