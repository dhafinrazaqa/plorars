<x-layout-user>
    <div class="container my-5 font-roboto letter-spacing-1">
        <div class="card shadow rounded-5 bg-white p-5 d-flex flex-column gap-5">
            <div class="detail-head d-flex gap-5">
                <img class="detail-logo img-fluid rounded-4" src="{{ asset('images/logo cheva3.jpg') }}" alt="Logo"
                    style="width: 250px; height: 250px;">
                <div class="detail-head-right d-flex flex-column gap-3">
                    <div class="title">
                        <h3 class="fw-bold fs-2 letter-spacing-1" style="color: #212E50">{{ $data['title'] }}</h3>
                    </div>
                    <div class="subtitle">
                        <p>At Faculty: {{ $data['faculty'] }}</p>
                        <p>Link: <a href="{{ $data['link'] }}" target="_blank">{{ $data['link'] }}</a></p>
                    </div>
                </div>
            </div>
            <div class="detail-body d-flex flex-column gap-3">
                <h4 class="fw-bold fs-2 letter-spacing-1" style="color: #212E50">Description</h4>
                <p>{{ $data['description'] }}</p>
            </div>
            {{-- <img src="{{ asset('images/logo cheva3.jpg') }}" alt="Logo" style="width: 100px; height: 100px;">
            <div class="card-body">
                <h3>{{ $data['title'] }}</h3>
                <p>At Faculty: {{ $data['faculty'] }}</p>
                <p>Link: <a href="{{ $data['link'] }}" target="_blank">{{ $data['link'] }}</a></p>
                <h4>Description</h4>
                <p>{{ $data['description'] }}</p>
            </div> --}}
        </div>
    </div>
</x-layout-user>
