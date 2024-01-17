<?php if (in_array($crud, ['c', 'u'])): ?>
    <div>
        <label for="name" class="input-label">Name</label>
        <input type="text" name="name" id="name" placeholder="Fullname" class="input-field" value="<?= $profile->name ?? '' ?>" required />
    </div>
<?php endif; ?>