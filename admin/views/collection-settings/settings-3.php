<?php

namespace Demovox;

/**
 * @var AdminCollectionSettings $this
 * @var string                  $page
 * @var array                   $languages
 */
?>
<?php
submit_button();
settings_fields($page);
$this->doSettingsSections($page);
submit_button();
?>
<script>
	(function (jQuery) {
		window.$ = jQuery.noConflict();
		demovoxAdminClass.showOnChecked($('#demovox_swiss_abroad_allow'), $('.showOnSwissAbroadChecked'));
		demovoxAdminClass.showOnChecked($('#demovox_print_names_on_pdf'), $('.showOnPrintNamesChecked'));
		demovoxAdminClass.hideOnVal($('#demovox_field_qr_mode'), $('.showOnQr'), 'disabled');
	})(jQuery);
</script>