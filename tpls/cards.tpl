{foreach from=$cards key=k item=s}
    <div class="card" style="width: 14rem;">
    <img class="card-img-top" src="assets/images/{$s.src}" alt="{$s.alt}">
    <div class="card-body">
        <h5 class="card-title">{$s.title}</h5>
        <a href="#" class="btn btn-primary">Play</a>
    </div>
    </div>
{{/foreach}}

