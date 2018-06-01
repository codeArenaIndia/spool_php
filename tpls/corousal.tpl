
<div id="{$id}" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
     {foreach from=$corousal key=k item=s}
        <li data-target="#{$id}" data-slide-to="{$k}" {if $k == 0} class="active" {/if}</li>
    {/foreach}
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
     {foreach from=$corousal key=ky item=it}
    <div class="carousel-item {if $ky == 0} active {/if}">
      <img src="assets/images/{$it}.JPG" alt="Los Angeles" width="500" height="300">
    </div>
    {/foreach}
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#{$id}" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#{$id}" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>