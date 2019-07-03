@csrf
<input type="hidden" name="count" value="{{( $product->count) ? $product->count:0}}">
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{old('name') ?? $product->name}}" class="form-control">
    <div>
        {{ $errors->first('name') }}
    </div>
</div>

<div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="number" name="quantity" value="{{old('quantity') ?? $product->quantity}}" class="form-control">
    <div>
        {{ $errors->first('quantity') }}
    </div>
</div>

<div class="form-group">
    <label for="price">Price</label>
    <input type="number" name="price" value="{{old('price') ?? $product->price}}" class="form-control">
    <div>
        {{ $errors->first('price') }}
    </div>
</div>

<div class="form-group">
    <lable for="category_id">Category</lable>
    <select name="category_id" id="category_id" class="form-control">
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected': '' }}>{{ $category->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <lable for="brand_id">Brand</lable>
    <select name="brand_id" id="brand_id" class="form-control">
        @foreach($brands as $brand)
            <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? 'selected': '' }}>{{ $brand->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group d-flex flex-column">
    <label for="image">Product Image</label>
    <input type="file" name="image"  class="form-control">
    <div>
        {{ $errors->first('image') }}
    </div>
</div>

<div class="form-group">
    <label for="desc">Description</label>
    <textarea name="desc" id="desc" cols="30" rows="5" class="form-control">{{old('desc') ?? $product->desc}}</textarea>
    <div>
        {{ $errors->first('desc') }}
    </div>
</div>