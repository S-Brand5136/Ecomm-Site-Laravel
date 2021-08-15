
<select class="custom-select" onchange="location = this.value;">
    <option value="/products/">
        Pick a Category
    </option>
    <option value="/products/">
        All
    </option>
    @foreach ($categories as $category)
        <option value="/products/?category={{ $category->name }}">
            {{ ucwords($category->name) }}
        </option>
    @endforeach
</select>
