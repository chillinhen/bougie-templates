
<div class="panel col-4 news-<?= $this->archive->id ?> block<?= $this->class ?>"> 
    <?php if($this->addImage === true && $this->singleSRC != null): ?>
    <figure class="image_container<?php if($this->floatClass): ?> <?= $this->floatClass; ?><?php endif; ?>">
        <img class="responsive-img" src="<?= $this->picture['img']['src'] ?>" alt="<?= $this->Headline ?>">
    </figure>
   <?php else : ?><h2><?= $this->linkHeadline ?></h2>
			<?php endif; ?>

<?php if ($this->teaser): ?> 
  <p class="teaser"><?php echo $this->teaser; ?></p> 
<?php else: ?> 
  <p class="teaser"><?php echo substr(strip_tags($this->text), 0, strpos(strip_tags($this->text), " ", 275)); ?>... <?php if ($this->text): ?> 
<p class="more"><?php echo $this->more; ?></p> 
<?php endif; ?></p> 
<?php endif; ?>  

</div>