<?php decorate_with('layout_2col.php'); ?>

<?php slot('sidebar'); ?>

  <?php echo get_component('settings', 'menu'); ?>

<?php end_slot(); ?>

<?php slot('title'); ?>

  <h1><?php echo __('Security settings'); ?></h1>

<?php end_slot(); ?>

<?php slot('content'); ?>

  <div class="alert alert-info">
    <?php echo __('Note: Incorrect security settings can result in the AtoM web UI becoming inaccessible.'); ?>
  </div>

  <form action="<?php echo url_for('settings/security'); ?>" method="post">

    <div class="accordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="security-heading">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#security-collapse" aria-expanded="true" aria-controls="security-collapse">
            <?php echo __('Security settings'); ?>
          </button>
        </h2>
        <div id="security-collapse" class="accordion-collapse collapse show" aria-labelledby="security-heading">
          <div class="accordion-body">
            <?php echo render_field($form->limit_admin_ip); ?>
            <?php echo render_field($form->require_ssl_admin); ?>
            <?php echo render_field($form->require_strong_passwords); ?>
          </div>
        </div>
      </div>
    </div>

    <section class="actions">
      <input class="btn atom-btn-outline-success" type="submit" value="<?php echo __('Save'); ?>">
    </section>

  </form>

<?php end_slot(); ?>
