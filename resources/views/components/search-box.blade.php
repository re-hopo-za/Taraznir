<div class="widget widget_search ">
    <form action="/search" method="get" role="search" class="search-form style-1">
        <input type="hidden" value="{{$model}}">
        <input style="height: 52px" type="search" class="search-field" placeholder="برای جستجو کلمه مورد نظر را وارد کنید." value="" name="s" title="Search for" wire:model="term">
        <button class="search-submit" type="submit" title="Search">جستجو</button>
    </form>
</div>
