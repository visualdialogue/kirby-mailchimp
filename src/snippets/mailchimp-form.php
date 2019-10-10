<!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup">
    <form action="<?= option('visualdialogue.mailchimp.formaction') ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
        
            <div class="mc-field-group">
                <label for="mce-EMAIL">Email Address </label>
                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Type your email">
            </div>

            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    

            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="<?= option('visualdialogue.mailchimp.botinputname') ?>" tabindex="-1" value=""></div>
            
            <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="button footer-newsletter-subscribe">

        </div>
    </form>
</div>

<!--End mc_embed_signup-->