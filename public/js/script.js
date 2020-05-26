function popupOpenClose(popup, nomBoutonClose) {

	/* Add div inside popup for layout if one doesn't exist */
	if ($('.wrapper').length == 0){
		$(popup).wrapInner("<div class='wrapper'></div>");
	}

	/* Open popup */
	$(popup).show();

	/* Close popup if user clicks on background */
	$(popup).click(function(e) {
		if ( e.target == this ) {
			if ($(popup).is(':visible')) {
				$(popup).hide();
				$('.wrapper').contents().unwrap();
			}
		}
	});

	/* Close popup and remove errors if user clicks on cancel or close buttons */
	$(popup).find("img[name="+nomBoutonClose+"]").on("click", function() {
		if ($(".formElementError").is(':visible')) {
			$(".formElementError").remove();
		}
		$(popup).hide();
		$('.wrapper').contents().unwrap();
	});
}

$(document).ready(function () {
	$('.open-popup-filtre').on('click', function() {
		popupOpenClose($('.popup-filtre'), "close_popup_filtre");
	});
});

$(document).ready(function(){
	$('.open-popup-trouver').on('click', function(){
		popupOpenClose($('.popup-trouver'), "close_popup_trouver");
	});
});

$(document).ready(function(){
	$('.open-popup-infos').on('click', function(){
		popupOpenClose($('.popup-infos'), "close_popup_infos");
	});
});

$(document).ready(function(){
	if($('.lieu_restitution_error_label').length || $('.lieu_prise_en_charge_error_label').length || $('.date_prise_en_charge_error_label').length || $('.heure_prise_en_charge_error_label').length || $('.date_restitution_error_label').length || $('.heure_restitution_error_label').length){
		popupOpenClose($('.popup-trouver'), "close_popup_trouver");
	}
});

$(document).ready(function(){
	$('.open-popup-ajouter-agences').on('click', function(){
		popupOpenClose($('.popup-ajouter-agences'), "close_popup_ajouter_agences");
	});
});

$(document).ready(function(){
	if($('.ville_agence_error_label').length || $('.adresse_agence_error_label').length || $('.telephone_agence_error_label').length || $('.email_agence_error_label').length || $('.mot_de_passe_error_label').length || $('.confirmer_mot_de_passe_error_label').length){
		$('.sph-gestion-agences-entreprises').attr('style', 'display : block !important;');
		popupOpenClose($('.popup-ajouter-agences'), "close_popup_ajouter_agences");
	}
});

$(document).ready(function(){
	$('.open-popup-modifier-agences').on('click', function(){
		popupOpenClose($('.popup-modifier-agences'), "close_popup_modifier_agences");
	});
});

$(document).ready(function(){
	if($('.ville_modifier_agence_error_label').length || $('.adresse_modifier_agence_error_label').length || $('.telephone_modifier_agence_error_label').length || $('.email_modifier_agence_error_label').length || $('.mot_de_passe_modifier_agence_error_label').length || $('.confirmer_mot_de_passe_modifier_agence_error_label').length){
		$('.sph-gestion-agences-entreprises').attr('style', 'display : block !important;');
		popupOpenClose($('.popup-modifier-agences'), "close_popup_modifier_agences");
	}
});

