<?php
    $this->load_fragment('auth/form_header', ['heading' => __('Email Verification Required') ]);
?>
<div class="pure-g">
    <div class="pure-u-1-5">&nbsp;</div>
    <div class="pure-u-3-5">
        <p style="font-size: 1.2em; line-height: 1.5em;"><?= __('Your email has not yet been verified. Please click the verification link you received in your email to proceed.') ?></p>
        <div class="text-right">
            <a href="<?= locale_base_url() . "auth/resend_mail/" ?>" class="pure-button pure-button-primary"><?= __('Resend email') ?></a>
        </div>
    </div>
    <div class="pure-u-1-5">&nbsp;</div>
</div>
<?php $this->load_fragment('auth/form_footer'); ?>
