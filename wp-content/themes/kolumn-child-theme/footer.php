			<footer id="footer" role="contentinfo">
				<div class="inner">
					<div class="left">
						<?php printf( __( 'All rights reserved. &copy; %d by %s.', 'kolumntheme' ), date('Y'), get_option('blogname' ) ); ?>
					</div><!-- / left -->
					<div class="right">
						<?php // printf( __( 'Kolumn made with love by %s', 'kolumntheme' ), '<a href="http://rockermarket.com/" title="Rocker Market" class="rct" target="_blank">Rocker Market</a>' ); ?>
					</div><!-- / right -->
				</div><!-- / inner -->
			</footer><!-- / footer -->
		</section><!-- / content right-column -->

		<!-- Modal -->
		<div class="modal fade" id="joinModal" tabindex="-1" role="dialog" aria-labelledby="joinModal" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Je deviens membre</h4>
		      </div>
		      <div class="modal-body">

		      <p class="text-center" style="margin-top: 10px">
		      	Merci de ton intérêt pour CoHome !
		      </p>

		      <p class="text-center">
		      	Nous te contacterons très bientôt pour te rencontrer individuellement et te donner accès au profil de nos membres !
		      </p>


		      <!-- beginning Wufoo -->
		      <form id="form1" name="form1" class="wufoo topLabel page form-horizontal" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
		            action="https://cohomein.wufoo.com/forms/z1a8p4ot1pvy4fp/#public">
				      <label class="desc" id="title10" for="Field10">
				      </label>
				      <div class="form-group">
				      	<label for="Field10" class="col-sm-2 control-label">Prénom  <span class="asterisk">*</span></label>
				      	<div class="col-sm-10"><input id="Field10" name="Field10" type="text" class="field text fn" value="" size="8" tabindex="1"       required /></div>
				      </div>
				      <div class="form-group">
				      	<label for="Field11" class="col-sm-2 control-label">Nom  <span class="asterisk">*</span></label>
				      	<div class="col-sm-10"><input id="Field11" name="Field11" type="text" class="field text ln" value="" size="14" tabindex="2" required /></div>
				      </div>
				      <div class="form-group">
				      	<label id="title3" for="Field3" class="col-sm-2 control-label">Mail  <span class="asterisk">*</span></label>
				      	<div class="col-sm-10"><input id="Field3" name="Field3" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="3"       required /></div>
				      </div>
				      <div class="mc-field-group form-group">
				      	<label id="title3" id="title4" for="Field4" class="col-sm-2 control-label">Code Postal *</label>
				      	<div class="col-sm-4"><input id="Field4" name="Field4" type="text" class="field text nospin medium"  value="" tabindex="4" onkeyup="" required       /></div>
				      	<label id="title3" id="title5" for="Field5" class="col-sm-2 control-label">Ville *</label>
				      	<div class="col-sm-4"><input id="Field5" name="Field5" type="text" class="field text medium" value="" maxlength="255" tabindex="5" onkeyup=""       required /></div>
				      </div>
				      <div class="form-group">
				          <div class="col-sm-offset-2 col-sm-10">
				            <div class="checkbox" id="subscribe-checkbox">
				              <label>
				                <input id="Field13" name="Field13" type="checkbox" class="field checkbox" value="Je souhaite accueillir des membres de CoHome chez moi." tabindex="6" checked="checked"     /><label class="choice" for="Field13">Je souhaite accueillir des membres chez moi.</label>
				              </label>
				            </div>
				          </div>
				        </div>
				      <div class="form-group" style="margin-top: 30px;">
				          <div class="col-sm-12 text-center">
				            <input id="saveForm" name="saveForm" class="btTxt submit"
				          type="submit" value="Inscription"><!-- onclick="ga('send', 'event', 'subscribe', 'subscribe', location.toString());" -->
				          </div>
				        </div>
				      <li class="hide">
				      <label for="comment">Do Not Fill This Out</label>
				      <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
				      <input type="hidden" id="idstamp" name="idstamp" value="Tc3qqWApEzQonNOhSNT/gHKj92Osq3rHGUcfy+TGIX8=" />
				      </li>
		      </form>
		      <!-- end Wufoo -->
		      </div>
		    </div>
		  </div>
		</div>


		<!-- newsletter modal -->
				<div class="modal fade" id="newsletterModal" tabindex="-1" role="dialog" aria-labelledby="newsletterModal" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">S'inscrire à la newsletter</h4>
				      </div>
				      <div class="modal-body">
				       	<!-- Begin MailChimp Signup Form -->
				       	<div id="mc_embed_signup">
				       	<form action="https://c-m-s.us8.list-manage.com/subscribe/post?u=73d14c8342b306d81bf88392f&amp;id=6b00d80fb5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="form-horizontal validate" target="_blank" novalidate>
				       	    <div id="mc_embed_signup_scroll">
				       	<div class="mc-field-group form-group">
				       		<label for="mce-FNAME" class="col-sm-2 control-label">Prénom *</label>
				       		<div class="col-sm-10"><input type="text" value="" name="FNAME" class="required" id="mce-FNAME"></div>
				       	</div>
				       	<div class="mc-field-group form-group">
				       		<label for="mce-EMAIL" class="col-sm-2 control-label">Mail *</label>
				       		<div class="col-sm-10"><input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"></div>
				       	</div>
				       		<div id="mce-responses" class="clear">
				       			<div class="response" id="mce-error-response" style="display:none"></div>
				       			<div class="response" id="mce-success-response" style="display:none"></div>
				       		</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				       	    <div style="position: absolute; left: -5000px;"><input type="text" name="b_73d14c8342b306d81bf88392f_6b00d80fb5" tabindex="-1" value=""></div>
				       	    <div class="form-group">
				       	        <div class="col-sm-12 text-center">
				       	          <input type="submit" value="Inscription" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default"> <!-- onclick="ga('send', 'event', 'subscribe', 'subscribe', location.toString());" -->
				       	        </div>
				       	      </div>
				       	</form>
				       	</div>

				       	<!--End mc_embed_signup-->
				      </div>
				    </div>
				  </div>
				</div>
		<!-- end newsletter modal -->


	</div><!-- / main -->

	<?php wp_footer(); ?>

	<script type="text/javascript" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/scripts/custom.js"></script>
</body>
</html>