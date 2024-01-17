<?php if (in_array($crud, ['c', 'u'])): ?>
    <div>
        <label for="email" class="input-label">Email address</label>
        <input type="email" name="email" id="email" placeholder="Valid email address" class="input-field" value="<?= $user->email ?? '' ?>" required />
    </div>
    <?php if (in_array($crud, ['c'])): ?>
        <div>
            <label for="password" class="input-label">Password</label>
            <input type="password" name="password" id="password" class="input-field" required />
        </div>
    <?php endif; ?>
<?php endif; ?>