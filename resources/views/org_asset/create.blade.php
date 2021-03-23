@extends('_partials.body')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>
                Add New Asset
            </h2>
            <form action="{{ route('asset.store') }}" method="POST">
                @csrf
                @method('post')
                <div class="mb-3">
                    <label for="name" class="form-label">Asset Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="John">
                </div>

                <div class="mb-3">
                    <label for="asset_type" class="form-label">Asset Type</label>
                    <select name="asset_type" class="form-select" aria-label="Default select example" id="asset_type">
                        <option>Select Asset type</option>
                        @forelse($asset_types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @empty
                            <option value="">No assets available</option>
                        @endforelse
                    </select>
                
                </div>

                <div class="mb-3">
                    <label for="owner_type" class="form-label">Owner Type</label>
                    <select name="owner_type" class="form-select" aria-label="Default select example" id="owner_type">
                        <option>Select Owner type</option>
                        @forelse($owner_types as $owner_type)
                            <option value="{{ $owner_type->id }}">{{ $owner_type->name }}</option>
                        @empty
                            <option value="">No assets available</option>
                        @endforelse
                    </select>
                
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            
            </form>
        </div>
    </div>
@endsection