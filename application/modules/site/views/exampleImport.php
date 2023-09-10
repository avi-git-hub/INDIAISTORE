<div class="container">
  <div class="row">
    <div class="col-md-4">
      <?php
      $actionUrl = BASE_URL . 'site/exampleImport';

      $attributes = [
        'name' => 'frmExampleImport',
        'id' => 'frmExampleImport',
      ];

      echo form_open_multipart($actionUrl, $attributes);
      ?>

      <div class="mt-3">
        <div class="form-group">
          <label for="fileUploaded">Upload the file</label>

          <input type="file" class="form-control-file" name="fileUploaded" id="fileUploaded" required>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Upload</button>

      <?php echo form_close(); ?>
    </div>
  </div>
</div>