<div class="<?= $this->class ?> block bg-image"<?= $this->cssID ?>> 

<?php $this->block('content'); ?> 

  <?php if ($this->addImage): ?> 
  <style>#<?= str_replace([' id=','"'], '', $this->cssID) ?> { 
       background-image: url('<?= $this->src ?>'); 
       background-repeat: no-repeat; 
       background-size: cover; 
  }</style> 
  <?php endif; ?> 
   
  <div class="textPanel" <?php if ($this->margin): ?> style="<?= $this->margin ?>"<?php endif; ?>> 
    <?php if ($this->headline): ?> 
    <<?= $this->hl ?>><?= $this->headline ?></<?= $this->hl ?>> 
  <?php endif; ?> 
  <?= $this->text ?> 
  </div> 
</div>
   
<?php $this->endblock();