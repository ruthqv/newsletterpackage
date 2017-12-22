<form action="https://dinamiq.us17.list-manage.com/subscribe/post?u=0dc7e9642eac1abc7bdc3d180&id=e0d9b7fff5" class="validate form-inline form-group" id="mc-embedded-subscribe-form" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
    {{ csrf_field() }}
                    <input class="required name form-control subscriptionname" id="mce-NAME" name="NAME" placeholder="name" type="text" value="" style=""/>
                    <input class="required email form-control subscriptionmail" id="mce-EMAIL" name="EMAIL" placeholder="email" type="email" value=""  style=""/>
                    <input class="user" name="user" type="hidden" value=" @if (auth()->check() ) {{auth()->user()['id']}} @endif"/>
                    <input class="lang" name="lang" type="hidden" value=" @if (session()->get('lang')  ) {{session()->get('lang') }} @endif"/>
                    <div class="clear" id="mce-responses">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div aria-hidden="true" style="position: absolute; left: -5000px;">
                        <input name="b_0dc7e9642eac1abc7bdc3d180_e0d9b7fff5" tabindex="-1" type="text" value=""/>
                    </div>

        <!-- /input-group -->
    <!-- /.col-lg-6 -->
                    <br>
                   <input class="button btn btn-main" id="mc-embedded-subscribe" name="subscribe" type="submit" value="Subscribe"/>
  
</form>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='NAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->