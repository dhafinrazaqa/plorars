@section('mbti_type')
    {{ $jenisMBTI }}
@endsection

<x-layout-profile>
    <div class="minat-bakat-container p-4 d-flex gap-4 justify-content-around">
        <div class="minat-bakat-box shadow rounded-5 bg-white p-4 d-flex flex-column gap-4 w-100">
            <div class="minat-bakat-title d-flex flex-column w-50 gap-1">
                <h1 class="fw-700 font-raleway fs-2 letter-spacing-1 m-0">{{ $result1 }}</h1>
                <span class="w-100" style="height: 2px; background-color: black"></span>
            </div>
            <div class="minat-bakat-body d-flex flex-column gap-3">
                <ul>
                    @foreach ($karirList1 as $item)
                        <li class="fw-400 font-poppins fs-5 m-0">
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="minat-bakat-box shadow rounded-5 bg-white p-4 d-flex flex-column gap-4 w-100">
            <div class="minat-bakat-title d-flex flex-column w-50 gap-1">
                <h1 class="fw-700 font-raleway fs-2 letter-spacing-1 m-0">{{ $result2 }}</h1>
                <span class="w-100" style="height: 2px; background-color: black"></span>
            </div>
            <div class="minat-bakat-body d-flex flex-column gap-3">
                <ul>
                    @foreach ($karirList2 as $item)
                        <li class="fw-400 font-poppins fs-5 m-0">
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="minat-bakat-box shadow rounded-5 bg-white p-4 d-flex flex-column gap-4 w-100">
            <div class="minat-bakat-title d-flex flex-column w-50 gap-1">
                <h1 class="fw-700 font-raleway fs-2 letter-spacing-1 m-0">{{ $result3 }}</h1>
                <span class="w-100" style="height: 2px; background-color: black"></span>
            </div>
            <div class="minat-bakat-body d-flex flex-column gap-3">
                <ul>
                    @foreach ($karirList3 as $item)
                        <li class="fw-400 font-poppins fs-5 m-0">
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-layout-profile>
