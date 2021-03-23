@extends('_partials.body')
@section('content')

    <div class="row">
        <div class="col md-12">
            <h2>
                All Assets
            </h2>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Asset Name</th>
                        <th scope="col">Asset Type</th>
                        <th scope="col">Owner Type</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($assets as $asset)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $asset->name }}</td>
                        <td>{{ $asset->asset_type->name ?? "" }}</td>
                        <td>{{ $asset->owner_type->name ?? "" }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" style="text-align: center">
                            <h4>No data available</h4>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection