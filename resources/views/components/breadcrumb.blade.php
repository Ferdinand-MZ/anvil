<!-- Breadcrumb start -->
<ol class="breadcrumb d-md-flex d-none">
    @php
    $url = request()->url()
    @endphp
    <li class="breadcrumb-item">
        <i class="bi bi-house"></i>
    </li>
    @foreach (array_slice(explode('/', $url), 3) as $uri)
    <li class="breadcrumb-item">{{ ucfirst($uri) }}</li>
    @endforeach
</ol>
<!-- Breadcrumb end -->
