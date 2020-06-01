
<!DOCTYPE HTML>

<html>

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8;charset=utf-8" />
        <meta name="viewport" content="initial-scale=1.0,width=device-width,maximum-scale=1" />
        <title>THE MOLITOR | The Applicant (HTML)</title>

        <link href="{{asset("pdf/6th/styles00.css")}}" rel="stylesheet" media="all" />

		<!--[if IE]>

			<style type="text/css">

				li.purchase a {
					padding-top: 5px;
					background-position: 0px -4px;
				}

				li.remove_frame a {
					padding-top: 5px;
					background-position: 0px -3px;
				}

				#theme_select {
					padding: 8px 8px;
				}

				#theme_list {
					margin-top: 2px;
				}

			</style>

		<![endif]-->

		<style type="text/css">

				</style>

        <script type="text/javascript" src="{{asset("pdf/6th/jquery-1.js")}}"></script>
        <script type="text/javascript" src="{{asset("pdf/6th/tip00000.js")}}"></script>

        <script type="text/javascript">
        var theme_list_open = false;

        $(document).ready(function () {

        	$(".themeListItem a").each(function() {

				$(this).poshytip({
					content: '<img class="toolTip" src="' + $(this).attr('title') + '" alt="" />',
					className: 'toolTip',
					followCursor: true,
					slide: false,
					showTimeout: 1,
					fade: false,
					offsetX: 100,
					offsetY: 0
				});
			});

        	function fixHeight () {
        		var headerHeight = $("#switcher").height();

        		$("#iframe").attr("height", (($(window).height()) - headerHeight) + 'px');
        	}

        	$(window).resize(function () {
        		fixHeight();
        	}).resize();

        	$("#theme_select").click( function () {
        		if (theme_list_open == true) {
        			$("#switcher ul li ul").hide();

        			theme_list_open = false;
        		} else {
        			$("#switcher ul li ul").show();

        			theme_list_open = true;
        		}

        		return false;
        	});

        	$('.themeListItem').hover(function(){
        		jQuery(this).find('.themePreview').show();
        	},function(){
        		jQuery(this).find('.themePreview').hide();
        	});

        	$("#switcher > ul > li > a").not('#logo a').css")}}({opacity:.6}).hover(function(){
        		$(this).css")}}({opacity:1});
        	},function(){
        		$(this).css")}}({opacity:.6});
        	});

        	/////////////////
			//CHECK IF MOBILE
			/////////////////
			var mobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test( navigator.userAgent.toLowerCase() ));

			if(mobile) { alert("Close the top bar when viewing on mobile devices."); }
        });
        </script>
</head>

<body>
	<div id="switcher">
		<ul>
			<li class="remove_frame" rel="http://themolitor.com/applicant/"><a href="http://themolitor.com/applicant/">&times;</a></li>
			<li class="purchase " rel="http://themeforest.net/item/the-applicant-resume-cv-html-template/3304484?ref=themolitor&license=regular&open_purchase_for_item_id=3304484"><a style="letter-spacing:1.5px;" href="http://themeforest.net/item/the-applicant-resume-cv-html-template/3304484?ref=themolitor&license=regular&open_purchase_for_item_id=3304484">Details</a></li>
			<li id="logo"><a href="http://www.themolitor.com/"><img src="{{asset("pdf/6th/logo0000.png")}}" alt="" /></a></li>
			<li id="theme_list">
				<a id="theme_select" href="">The Applicant (HTML)</a>

				<ul>
					<li class="themeListItem"><a class="themeLink" title="http://themolitor.com/images/rivyt_590.jpg" href="http://premium.themolitor.com/?theme=rivyt" rel="https://rivyt.com,https://rivyt.com">RIVYT</a></li><li class="themeListItem"><a class="themeLink" title="http://themolitor.com/images/channelize_preview.jpg" href="http://premium.themolitor.com/?theme=channelize" rel="https://channelize.rivyt.com,https://rivyt.com">Channelize — RIVYT</a></li><li class="themeListItem"><a class="themeLink" title="http://themolitor.com/images/gryd_preview.jpg" href="http://premium.themolitor.com/?theme=gryd" rel="https://gryd.rivyt.com,https://rivyt.com">GRYD — RIVYT</a></li><li class="themeListItem"><a class="themeLink" title="http://themolitor.com/images/velika_preview.jpg" href="http://premium.themolitor.com/?theme=velika" rel="https://velika.rivyt.com,https://rivyt.com">Velika — RIVYT</a></li><li class="themeListItem"><a class="themeLink" title="http://themolitor.com/images/surfer_preview.jpg" href="http://premium.themolitor.com/?theme=surfer" rel="https://surfer.rivyt.com,https://rivyt.com">Surfer — RIVYT</a></li><li class="themeListItem"><a class="themeLink" title="http://themolitor.com/images/lystd_preview.jpg" href="http://premium.themolitor.com/?theme=lystd" rel="https://lystd.rivyt.com,https://rivyt.com">LYSTD — RIVYT</a></li><li class="themeListItem"><a class="themeLink" title="http://themolitor.com/images/bio_preview.jpg" href="http://premium.themolitor.com/?theme=bio" rel="https://bio.rivyt.com,https://rivyt.com">BIO — RIVYT</a></li><li class="themeListItem"><a class="themeLink" title="http://themolitor.com/images/refined_preview.jpg" href="http://premium.themolitor.com/?theme=refined" rel="https://refined.rivyt.com,https://rivyt.com">Refined — RIVYT</a></li><li class="themeListItem"><a class="themeLink" title="http://themolitor.com/images/slydes_preview.jpg" href="http://premium.themolitor.com/?theme=slydes" rel="https://slydes.rivyt.com,https://rivyt.com">Slydes — RIVYT</a></li><li class="themeListItem"><a class="themeLink" title="http://themolitor.com/images/cover_preview.jpg" href="http://premium.themolitor.com/?theme=cover" rel="https://cover.rivyt.com,https://rivyt.com">Cover — RIVYT</a></li><li class="themeListItem"><a class="themeLink" title="http://themolitor.com/images/mag_preview.jpg" href="http://premium.themolitor.com/?theme=mag" rel="https://mag.rivyt.com,https://rivyt.com">Mag — RIVYT</a></li><li class="themeListItem"><a class="themeLink" title="http://themolitor.com/images/incisor_preview.jpg" href="http://premium.themolitor.com/?theme=incisor" rel="https://incisor.rivyt.com,https://rivyt.com">Incisor — RIVYT</a></li><li class="themeListItem"><a class="themeLink" title="http://themolitor.com/images/cubicle_preview.jpg" href="http://premium.themolitor.com/?theme=cubicle" rel="https://cubicle.rivyt.com,https://rivyt.com">Cubicle — RIVYT</a></li><li class="themeListItem"><a class="themeLink" title="http://themolitor.com/images/nwz_preview.jpg" href="http://premium.themolitor.com/?theme=nwz" rel="https://nwz.rivyt.com,https://rivyt.com">NWZ — RIVYT</a></li><li class="themeListItem"><a class="themeLink" title="http://themolitor.com/images/tic_preview.jpg" href="http://premium.themolitor.com/?theme=tic" rel="https://tic.rivyt.com,https://rivyt.com">Tic — RIVYT</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/4T44jVO.jpg" href="http://premium.themolitor.com/?theme=vysualize" rel="http://themolitor.com/vysualize_landing/index.php,http://www.themolitor.com/2016/04/vysualize-responsive-film-campaign-wordpress-theme/">VYSUALIZE</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/IcsceKz.jpg" href="http://premium.themolitor.com/?theme=vysual" rel="http://themolitor.com/vysual_landing/index.php,http://themeforest.net/item/vysual-responsive-film-campaign-wp-theme/11148276?ref=themolitor&license=regular&open_purchase_for_item_id=11148276">VYSUAL </a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/fRVzys2.jpg" href="http://premium.themolitor.com/?theme=thecontractor" rel="http://themes.themolitor.com/contractor/,http://themeforest.net/item/the-contractor-construction-company-wp-theme/8878963?ref=themolitor&license=regular&open_purchase_for_item_id=8878963">The Contractor</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/YjNoE5o.jpg" href="http://premium.themolitor.com/?theme=thekitchentable" rel="http://themes.themolitor.com/kitchen/,http://themeforest.net/item/the-kitchen-table-responsive-recipes-wp-theme/5516768?ref=themolitor&license=regular&open_purchase_for_item_id=5516768">The Kitchen Table</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/AuAhoYO.jpg" href="http://premium.themolitor.com/?theme=theproducer" rel="http://themes.themolitor.com/producer/,http://themeforest.net/item/the-producer-responsive-film-studio-theme/3262558??ref=themolitor&license=regular&open_purchase_for_item_id=3262558">The Producer</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/LkuApMD.jpg" href="http://premium.themolitor.com/?theme=lemaitred" rel="http://themes.themolitor.com/maitred/,http://themeforest.net/item/le-maitre-d-super-simple-restaurant-wp-theme/2680203?ref=themolitor&license=regular&open_purchase_for_item_id=2680203">Le Maitre 'd</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/Q832sQu.jpg" href="http://premium.themolitor.com/?theme=thecurator" rel="http://themes.themolitor.com/curator/,http://themeforest.net/item/the-curator-premier-wp-timeline-theme-for-artists/2449908?ref=themolitor&license=regular&open_purchase_for_item_id=2449908">The Curator</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/i5opk7I.jpg" href="http://premium.themolitor.com/?theme=thedailypress" rel="http://themes.themolitor.com/dailypress/,http://themeforest.net/item/the-daily-press-super-simple-wp-publication-theme/1965747?ref=themolitor&license=regular&open_purchase_for_item_id=1965747">The Daily Press</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/5tgg1Cx.jpg" href="http://premium.themolitor.com/?theme=eventure" rel="http://themes.themolitor.com/eventure/,http://themeforest.net/item/eventure-responsive-events-wp-theme/1529155?ref=themolitor&license=regular&open_purchase_for_item_id=1529155">Eventure</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/UIJyFuS.jpg" href="http://premium.themolitor.com/?theme=nocturnal" rel="http://themes.themolitor.com/nocturnal/,http://themeforest.net/item/nocturnal-premier-audio-wp-theme-/621573?ref=themolitor&license=regular&open_purchase_for_item_id=621573">Nocturnal</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/hHcTtsk.jpg" href="http://premium.themolitor.com/?theme=photopharm" rel="http://themes.themolitor.com/photopharm/,http://themeforest.net/item/photopharm-premium-photography-and-blog-theme/807697?ref=themolitor&license=regular&open_purchase_for_item_id=807697">PhotoPharm</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/m1KDhyD.jpg" href="http://premium.themolitor.com/?theme=thenovelist" rel="http://themes.themolitor.com/wpnovelist/,http://themeforest.net/item/the-novelist-responsive-wp-theme-for-writers/526345?ref=themolitor&license=regular&open_purchase_for_item_id=526345">The Novelist</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/9PALMNc.jpg" href="http://premium.themolitor.com/?theme=thenavigator" rel="http://themes.themolitor.com/wpnavigator/,http://themeforest.net/item/the-navigator-premium-wp-location-guide-blog/397351?ref=themolitor&license=regular&open_purchase_for_item_id=397351">The Navigator</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/pTxHTGA.jpg" href="http://premium.themolitor.com/?theme=brickmason" rel="http://themes.themolitor.com/wpbm/,http://themeforest.net/item/brick-mason-premium-photography-and-blog-theme/245497?ref=themolitor&license=regular&open_purchase_for_item_id=245497">Brick + Mason</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/KXPiXk9.jpg" href="http://premium.themolitor.com/?theme=aid" rel="http://themes.themolitor.com/wpaid/,http://themeforest.net/item/wordpress-aid-charity-blog-theme/238405?ref=themolitor&license=regular&open_purchase_for_item_id=238405">Aid</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/X1YI7Gc.jpg" href="http://premium.themolitor.com/?theme=zoom" rel="http://themes.themolitor.com/wpzoom/,http://themeforest.net/item/wordpress-zoom-portfolio-blog/231324?ref=themolitor&license=regular&open_purchase_for_item_id=231324">Zoom</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/kAWcw6d.jpg" href="http://premium.themolitor.com/?theme=politico" rel="http://themes.themolitor.com/wppolitico/,http://themeforest.net/item/wordpress-politico/139979?ref=themolitor&license=regular&open_purchase_for_item_id=139979">Politico</a></li><li class="themeListItem"><a class="themeLink" title="http://i.imgur.com/jZXDL6n.jpg" href="http://premium.themolitor.com/?theme=university" rel="http://themes.themolitor.com/wpuniversity/,http://themeforest.net/item/wordpress-university/76163?ref=themolitor&license=regular&open_purchase_for_item_id=76163">University</a></li>				</ul>
			</li>
		</ul>
	</div><!--end switcher-->

    <iframe id="iframe" src="{{asset("pdf/6th/00000000.htm")}}" frameborder="0" width="100%"></iframe>
</body>
</html>


