<div>
<h1>Tweetbox</h1>
<form id="my-tweetbox">
<p><textarea name="tweet">Write your tweet...</textarea></p>
<p><input type="submit" name="submit" value="Tweet!" /></p>
</form>
</div>

<div>
<h1>County Tweetbox</h1>
<form id="my-county-tweetbox">
<p><textarea name="tweet">Write your tweet...</textarea></p>
<p><input type="submit" name="submit" value="Tweet!" /></p>
<p id="county"></p>
</form>
</div>

<div>
<h1>Tweetbox w/ Reply</h1>
<form id="my-replyto-tweetbox">
<p><textarea name="tweet">Write your reply tweet...</textarea></p>
<p>Reply to: <input type="text" name="replyto" value="1234" /></p>
<p><input type="submit" name="submit" value="Reply" /></p>
</form>
</div>

<div>
<h1>Skinny</h1>
<form id="my-skinny-tweetbox">
<input type="text" name="tweet"/>
<input type="submit" name="submit" value="Tweet it" />
</form>
</div>

<div>
<h1>Tweet Button</h1>
<form id="my-tweetbutton">
<input type="hidden" name="tweet" value="Thank you @robcolburn for this script" />
<input type="submit" name="submit" value="Tweet 'Thank you @robcolburn for this script'" />
</form>
</div>  


<!-- Fill in your App ID!! -->
<!-- We'll borrow Pet Monster's for now -->
<script src="http://platform.twitter.com/anywhere.js?id=g5uxDeyoOJf0gnLqsFjTzw&v=1"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
// Careful, when trolling Anywhere source twttr !== window.twttr

// The twttr.anywhere does similar to FB.init, but you use it like jQuery.ready
twttr.anywhere(function(T) {
    // The T object seems to be a subset of jQuery (or Ender)
    // Includes Sizzle, Ajax, and some custom 
    
    $('#my-tweetbox').submit(function () {
       var tweet = $(this).find('input[name=tweet]').val();
       
       // T.requireConnect is similar to FB.login
       // may spawn a pop-up, so be sure to fire from user-event
       T.requireConnect(function() {
          T.Status.update(tweet, {
            success: function (tweet) {
              // (-:
            },
            error: function (error) {
              // )-:
            }
         });
       });
       return false;
    });
    
    $('#my-replyto-tweetbox').submit(function () {
       var tweet = $(this).find('input[name=tweet]').val();
       var replyto = $(this).find('input[name=replyto]').val();
      
       T.requireConnect(function() {
          T.Status.update(tweet, {
            in_reply_to_status_id: replyto,
            success: function (tweet) {
              // (-:
            },
            error: function (error) {
              // )-:
            }
         });
       });
       return false;
    });

    $('#my-skinny-tweetbox').submit(function () {
       var tweet = $(this).find('input[name=tweet]').val();
       
       // T.requireConnect is similar to FB.login
       // may spawn a pop-up, so be sure to fire from user-event
       T.requireConnect(function() {
          T.Status.update(tweet, {
            success: function (tweet) {
              // (-:
            },
            error: function (error) {
              // )-:
            }
         });
       });
       return false;
    });

    $('#my-county-tweetbox').submit(function () {
       var tweet = $(this).find('input[name=tweet]').val();
       
       // T.requireConnect is similar to FB.login
       // may spawn a pop-up, so be sure to fire from user-event
       T.requireConnect(function() {
          T.Status.update(tweet, {
            success: function (tweet) {
              // (-:
            },
            error: function (error) {
              // )-:
            }
         });
       });
       return false;
    });
  
    $('#my-county-tweetbox input[name=tweet]').keyup(function () {
      var characters = $(this).val().length;
      var left = 140 - characters;
      if (left < 0) {
         $('#county').val(MAX - characters).css('color', '#f00');
      } else if (left < 20) {
         $('#county').val(MAX - characters).css('color', '#fa0');
      } else {
         $('#county').val(MAX - characters).css('color', '#000');
      }
    });
    
    $('#my-tweetbutton').submit(function () {
       var tweet = $(this).find('input[name=tweet]').val();
      
       T.requireConnect(function() {
          T.Status.update(tweet, {
            success: function (tweet) {
              // (-:
            },
            error: function (error) {
              // )-:
            }
         });
       });
       return false;
    });
});
</script>