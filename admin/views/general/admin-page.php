<?php
namespace Demovox;
/**
 * @var AdminGeneral       $this
 * @var int                $count
 * @var int                $addCount
 * @var string             $userLang
 * @var CollectionStatsDto $stats
 */
?>
<div class="wrap demovox">
	<h2>demovox - Overview</h2>
	<p>
		<?php if ($userLang == 'fr') { ?>
			<a href="https://www.sp-ps.ch/fr" target="_blank">
				<img src="https://www.sp-ps.ch/sites/all/themes/sp_ps/logo_fr.png"/>
			</a>
		<?php } elseif ($userLang == 'it') { ?>
			<a href="http://www.ps-ticino.ch/" target="_blank">
				<img src="https://www.sp-ps.ch/sites/all/themes/sp_ps/logo_fr.png"/>
			</a>
		<?php } else { ?>
			<a href="http://www.sp-ps.ch/" target="_blank">
				<img src="https://www.sp-ps.ch/sites/all/themes/sp_ps/logo.png"/>
			</a>
		<?php } ?>
	</p>
	<p>
		Overall, <b><?= $count ?></b> visitors have signed up
	</p>
	<?php if (!$count) { ?>
		<h3>
			Don't forget to check the <a href="<?= admin_url('/admin.php?page=demovoxSysinfo') ?>">System info page</a>
			before publishing the plugin
		</h3>
	<?php } ?>
	<h3>
		Privacy reminder
	</h3>
	<p>
		You are responsible for protecting the date stored by this plugin, as signee information consists of
		<a href="https://www.admin.ch/opc/en/classified-compilation/19920153/index.html#a3" target="_blank">sensitive
			personal data</a>.
	</p>
	<p>
		For example by blocking any FTP access
		(unencrypted protocol!), protecting WordPress accounts with good passwords and
		<a href="https://en.wikipedia.org/wiki/Multi-factor_authentication" target="_blank">MFA</a>, disabling external
		access to the database, only installing trustworthy plugins and taking care of security updates. demovox has a
		recommended option to encrypt signee data (see "Advanced" tab) which helps on database attacks, and you can find
		some help to avoid WordPress misconfiguration on the
		<a href="<?= admin_url('/admin.php?page=demovoxSysinfo') ?>">System info page</a>.
	</p>
	<h3>Shortcodes</h3>
	<p>Global shortcodes: <code>[demovox_form]</code> <code>[demovox_count]</code></p>
	<p>
		Opt-in page and success pages shortcodes: <code>[demovox_form]</code> <code>[demovox_optin]</code> <code>[demovox_firstname]</code><code>[demovox_street]</code><code>[demovox_street_no]</code><code>[demovox_zip]</code><code>[demovox_city]</code><code>[demovox_mail]</code>
		<code>[demovox_lastname]</code>
	</p>
</div>
<div class="wrap demovox">
	<?php
	include Infos::getPluginDir() . 'admin/views/general/stats.php';
	?>
</div>