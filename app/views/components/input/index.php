<div class="form">
    <?php if (isset($label) and !empty($label)): ?>
        <label class="label" for="<?=$id??$name?>"><?=$label?></label>
    <?php endif; ?>
    <div class="form-input-group">
        <input 
            type="<?=$type??'text'?>" 
            id="<?=$id??$name?>" 
            name="<?=$name?>" 
            value="<?=$value??''?>" 
            class="form-input px-4 py-2 <?=(isset($disabled) and $disabled=='true')?'disabled':'primary'?>" 
            placeholder="<?=$placeholder??''?>"
            <?=(isset($nonrequired) and $nonrequired=='true')?'':'required'?>
            <?=(isset($disabled) and $disabled=='true')?'disabled':''?>/>
    </div>
</div>