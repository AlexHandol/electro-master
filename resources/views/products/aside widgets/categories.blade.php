<!-- aside Widget -->
<div class="aside">
    <h3 class="aside-title">Categories</h3>
    <div class="checkbox-filter">
        @foreach ($productCategories as $category)
            <div class="input-checkbox">
                <input type="checkbox" id="category-{{ $category->id }}">
                <label for="category-{{ $category->id }}">
                    <span></span>
                    {{ $category->category_name }}
                    <small>({{ $category->products_count }})</small>
                </label>
            </div>
        @endforeach
    </div>
</div>
<!-- /aside Widget -->
