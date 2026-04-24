
<h1>Welcome to the Tenant List</h1>
<p>This is a simple list of all tenants.</p>

@foreach($tenants as $tenant)
    <p>{{ $tenant->name }}</p>
@endforeach

<!-- <h1>POVV-Tenant List</h1>

@forelse($tenants as $tenant)
    <p>{{ $tenant->id }}</p>
@empty
    <p>POVVVVV</p>
@endforelse --> 